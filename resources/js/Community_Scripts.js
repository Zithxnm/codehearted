// Filter tabs functionality
const filterTabs = document.querySelectorAll('.filter-tab');
filterTabs.forEach(tab => {
    tab.addEventListener('click', function () {
        filterTabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
    });
});

// Discussion card click
const discussionCards = document.querySelectorAll('.discussion-card');
discussionCards.forEach(card => {
    card.addEventListener('click', function () {
        alert('This would navigate to the full discussion page');
    });
});

// New Discussion button
document.querySelector('.new-discussion-btn').addEventListener('click', function () {
    alert('This would open a form to create a new discussion');
});

// Search functionality
document.querySelector('.search-input').addEventListener('keyup', function (e) {
    if (e.key === 'Enter') {
        alert('Searching for: ' + this.value);
    }
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