// Filter tabs functionality
const filterTabs = document.querySelectorAll('.filter-tab');
filterTabs.forEach(tab => {
    tab.addEventListener('click', function () {
        filterTabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
    });
});

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

document.addEventListener('DOMContentLoaded', function () {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    document.querySelectorAll('.like-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            let postId = this.getAttribute('data-id');
            let countSpan = this.querySelector('.like-count');
            let btn = this;

            fetch(`/community/${postId}/like`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json'
                }
            })
                .then(response => {
                    if (!response.ok) throw new Error('Network response was not ok');
                    return response.json();
                })
                .then(data => {
                    countSpan.textContent = data.likes;

                    if (data.liked) {
                        btn.style.color = '#e95e16'; // Active Orange
                    } else {
                        btn.style.color = '#6b7280'; // Inactive Gray
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    });
});

    function toggleNotifications(e) {
    e.stopPropagation();
    const list = document.getElementById('notif-list');
    list.classList.toggle('show');
}

    // Close when clicking outside
    document.addEventListener('click', function(e) {
    const wrapper = document.querySelector('.notification-wrapper');
    const list = document.getElementById('notif-list');
    if (wrapper && !wrapper.contains(e.target)) {
    list.classList.remove('show');
}
});

    window.toggleNotifications = toggleNotifications;
