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
    document.getElementById('auditLog').classList.add('hidden');
    document.getElementById('userManagement').classList.add('hidden');

    // Update active nav link
    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    e.target.classList.add('active');
}

window.showDashboard = showDashboard;

function showAuditLog(e) {
    e.preventDefault();
    document.getElementById('dashboardContent').classList.add('hidden');
    document.getElementById('auditLog').classList.remove('hidden');
    document.getElementById('userManagement').classList.add('hidden');

    // Update active nav link
    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    e.target.classList.add('active');
}

window.showAuditLog = showAuditLog;

function showUsers(e) {
    e.preventDefault();
    document.getElementById('dashboardContent').classList.add('hidden');
    document.getElementById('auditLog').classList.add('hidden');
    document.getElementById('userManagement').classList.remove('hidden');

    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    e.target.classList.add('active');
}

window.showUsers = showUsers;

// Draw Line Chart
function drawLineChart() {
    const canvas = document.getElementById('lineChart');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    canvas.width = 500;
    canvas.height = 300;

    // 1. GET DYNAMIC DATA
    const labels = window.trendData ? window.trendData.labels : ['No Data'];
    const usersData = window.trendData ? window.trendData.users : [0];
    const activityData = window.trendData ? window.trendData.activity : [0];

    // Config
    const padding = 40;
    const chartWidth = canvas.width - padding * 2;
    const chartHeight = canvas.height - padding * 2;

    // Calculate Max Value to scale the chart dynamically
    const allValues = [...usersData, ...activityData];
    const maxVal = Math.max(...allValues, 10); // Minimum scale of 10
    const scale = maxVal > 0 ? maxVal : 10;

    // 2. DRAW AXES
    ctx.strokeStyle = '#8B4513';
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(padding, padding);
    ctx.lineTo(padding, canvas.height - padding);
    ctx.lineTo(canvas.width - padding, canvas.height - padding);
    ctx.stroke();

    // Helper Function to Draw a Line
    function drawLine(data, color) {
        ctx.strokeStyle = color;
        ctx.lineWidth = 3;
        ctx.beginPath();

        data.forEach((value, index) => {
            const x = padding + (chartWidth / (labels.length - 1)) * index;
            // Invert Y because canvas 0,0 is top-left
            const y = canvas.height - padding - (value / scale) * chartHeight;

            if (index === 0) ctx.moveTo(x, y);
            else ctx.lineTo(x, y);

            // Draw Dots
            ctx.fillStyle = color;
            ctx.fillRect(x - 3, y - 3, 6, 6);
        });
        ctx.stroke();
    }

    // 3. DRAW LINES
    drawLine(usersData, '#e95e16'); // Orange: New Users
    drawLine(activityData, '#124559'); // Blue: Activity

    // 4. DRAW LABELS
    ctx.fillStyle = '#8B4513';
    ctx.font = '12px Courier New';
    ctx.textAlign = 'center';

    labels.forEach((label, index) => {
        const x = padding + (chartWidth / (labels.length - 1)) * index;
        ctx.fillText(label, x, canvas.height - padding + 20);
    });

    ctx.font = 'bold 12px Courier New';
    ctx.textAlign = 'end';

    ctx.fillStyle = '#e95e16';
    ctx.fillText("■ New  Users      ", canvas.width - 20, 30);

    ctx.fillStyle = '#124559';
    ctx.fillText("■ Audit Logs      ", canvas.width - 20, 50);
}

function drawPieChart() {
    const canvas = document.getElementById('pieChart');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    canvas.width = 500;
    canvas.height = 300;

    const labels = window.enrollmentData?.labels.length ? window.enrollmentData.labels : ['No Data'];
    const dataValues = window.enrollmentData?.counts.length ? window.enrollmentData.counts : [1];

    const colors = ['#87CEEB', '#FF8C42', '#FFD166', '#8B4513', '#6A0572'];

    const total = dataValues.reduce((a, b) => a + b, 0);
    const centerX = canvas.width / 2 - 80;
    const centerY = canvas.height / 2;
    const radius = 100;

    let currentAngle = -Math.PI / 2;

    dataValues.forEach((value, index) => {
        const sliceAngle = total > 0 ? (value / total) * 2 * Math.PI : 2 * Math.PI;

        ctx.fillStyle = colors[index % colors.length];
        ctx.beginPath();
        ctx.moveTo(centerX, centerY);
        ctx.arc(centerX, centerY, radius, currentAngle, currentAngle + sliceAngle);
        ctx.closePath();
        ctx.fill();

        ctx.strokeStyle = '#8B4513';
        ctx.lineWidth = 2;
        ctx.stroke();

        currentAngle += sliceAngle;
    });

    const legendX = canvas.width - 220;
    let legendY = 60;

    ctx.fillStyle = '#8B4513';
    ctx.font = 'bold 14px Courier New';
    ctx.fillText("Enrolled Students:", legendX, legendY - 25);

    labels.forEach((label, index) => {
        const color = colors[index % colors.length];
        const count = dataValues[index];

        ctx.fillStyle = color;
        ctx.fillRect(legendX, legendY, 15, 15);
        ctx.strokeRect(legendX, legendY, 15, 15);

        ctx.fillStyle = '#8B4513';
        ctx.font = '12px Courier New';
        ctx.textAlign = 'left';
        const shortLabel = label.length > 15 ? label.substring(0, 15) + '...' : label;
        ctx.fillText(`${shortLabel} (${count})`, legendX + 25, legendY + 12);

        legendY += 30;
    });
}

// Initialize charts when page loads
window.onload = function () {
    drawLineChart();
    drawPieChart();
};

// Validate Admin Actions
function validateAdminAction(event, currentUserId, targetUserId, actionType) {
    // 1. Check if targeting self
    if (currentUserId === targetUserId) {
        event.preventDefault(); // STOP the form submission
        showToast(`You cannot ${actionType} yourself.`, 'error');
        return false;
    }

    // 2. Confirm action
    if (!confirm(`Are you sure you want to ${actionType} this user?`)) {
        event.preventDefault();
        return false;
    }

    // 3. Allow submission
    return true;
}

window.validateAdminAction = validateAdminAction;

// Toast Notification Logic
function showToast(message, type = 'success') {
    const toast = document.getElementById("toast");
    if (!toast) return;

    toast.textContent = message;
    toast.className = "toast show " + type;

    setTimeout(() => {
        toast.classList.remove("show");
    }, 3000);
}
window.showToast = showToast;

