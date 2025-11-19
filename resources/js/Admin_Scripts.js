document.addEventListener('DOMContentLoaded', function () {
    var searchBtn = document.querySelector('.search-icon-btn');
    var searchInput = document.querySelector('.search-input');
    if (searchBtn && searchInput) {
        searchBtn.addEventListener('click', function () {
            searchInput.focus();
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const burgerIcon = document.querySelector('.burger-icon');
    if (burgerMenu && burgerIcon) {
        burgerIcon.addEventListener('click', function (e) {
            burgerMenu.classList.toggle('open');
            e.stopPropagation();
        });
        document.addEventListener('click', function (e) {
            if (!burgerMenu.contains(e.target)) {
                burgerMenu.classList.remove('open');
            }
        });
    }
});

function showDashboard(e) {
    e.preventDefault();
    document.getElementById('dashboardContent').classList.remove('hidden');
    document.getElementById('auditLog').classList.remove('active');

    // Update active nav link
    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    e.target.classList.add('active');
}

window.showDashboard = showDashboard;

function showAuditLog(e) {
    e.preventDefault();
    document.getElementById('dashboardContent').classList.add('hidden');
    document.getElementById('auditLog').classList.add('active');

    // Update active nav link
    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    e.target.classList.add('active');
}

window.showAuditLog = showAuditLog;

// Draw Line Chart
function drawLineChart() {
    const canvas = document.getElementById('lineChart');
    const ctx = canvas.getContext('2d');

    canvas.width = 500;
    canvas.height = 300;

    const data = [120, 180, 150, 220, 280, 320, 380];
    const data2 = [80, 120, 100, 150, 190, 220, 250];
    const data3 = [45, 65, 55, 75, 85, 95, 105];
    const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'];

    const padding = 40;
    const chartWidth = canvas.width - padding * 2;
    const chartHeight = canvas.height - padding * 2;
    const max = 400;

    // Draw axes
    ctx.strokeStyle = '#8B4513';
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(padding, padding);
    ctx.lineTo(padding, canvas.height - padding);
    ctx.lineTo(canvas.width - padding, canvas.height - padding);
    ctx.stroke();

    // Draw lines
    function drawLine(data, color) {
        ctx.strokeStyle = color;
        ctx.lineWidth = 3;
        ctx.beginPath();

        data.forEach((value, index) => {
            const x = padding + (chartWidth / (data.length - 1)) * index;
            const y = canvas.height - padding - (value / max) * chartHeight;

            if (index === 0) {
                ctx.moveTo(x, y);
            } else {
                ctx.lineTo(x, y);
            }
        });

        ctx.stroke();
    }

    drawLine(data, '#FF6B35');
    drawLine(data2, '#87CEEB');
    drawLine(data3, '#FFD166');

    // Draw labels
    ctx.fillStyle = '#8B4513';
    ctx.font = '12px Courier New';
    ctx.textAlign = 'center';
    labels.forEach((label, index) => {
        const x = padding + (chartWidth / (labels.length - 1)) * index;
        ctx.fillText(label, x, canvas.height - padding + 20);
    });
}

// Draw Pie Chart
function drawPieChart() {
    const canvas = document.getElementById('pieChart');
    const ctx = canvas.getContext('2d');

    canvas.width = 500;
    canvas.height = 300;

    const data = [
        { value: 35, color: '#87CEEB', label: 'JavaScript' },
        { value: 25, color: '#FF8C42', label: 'Python' },
        { value: 20, color: '#FFD166', label: 'HTML/CSS' },
        { value: 20, color: '#8B4513', label: 'Java' }
    ];

    const centerX = canvas.width / 2 - 50;
    const centerY = canvas.height / 2;
    const radius = 100;

    let currentAngle = -Math.PI / 2;

    data.forEach((item, index) => {
        const sliceAngle = (item.value / 100) * 2 * Math.PI;

        // Draw slice
        ctx.fillStyle = item.color;
        ctx.beginPath();
        ctx.moveTo(centerX, centerY);
        ctx.arc(centerX, centerY, radius, currentAngle, currentAngle + sliceAngle);
        ctx.closePath();
        ctx.fill();

        // Draw border
        ctx.strokeStyle = '#8B4513';
        ctx.lineWidth = 2;
        ctx.stroke();

        currentAngle += sliceAngle;
    });

    // Draw legend
    const legendX = canvas.width - 150;
    let legendY = 80;

    data.forEach(item => {
        ctx.fillStyle = item.color;
        ctx.fillRect(legendX, legendY, 20, 20);

        ctx.fillStyle = '#8B4513';
        ctx.font = '14px Courier New';
        ctx.textAlign = 'left';
        ctx.fillText(item.label, legendX + 30, legendY + 15);

        legendY += 35;
    });
}

// Initialize charts when page loads
window.onload = function () {
    drawLineChart();
    drawPieChart();
};
