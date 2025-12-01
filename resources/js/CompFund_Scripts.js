// 1. Search Bar Logic
document.addEventListener('DOMContentLoaded', function () {
    var searchBtn = document.querySelector('.search-icon-btn');
    var searchInput = document.querySelector('.search-input');
    if (searchBtn && searchInput) {
        searchBtn.addEventListener('click', function () {
            searchInput.focus();
        });
    }
});

// 2. Burger Menu Logic
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

// 3. Module Tab Switching Logic
// We attach this to 'window' so your Blade onclick="selectModule(...)" can find it.
window.selectModule = function(element, index) {
    // A. Remove 'active' class from all sidebar items
    document.querySelectorAll('.module-item').forEach(el => {
        el.classList.remove('active');
    });

    // B. Add 'active' class to the clicked item
    element.classList.add('active');

    // C. Hide all lesson detail cards (Right Panel)
    document.querySelectorAll('.lesson-card').forEach(card => {
        card.style.display = 'none';
        card.classList.remove('active');
    });

    // D. Show the specific card that matches the index
    const targetCard = document.querySelector(`.lesson-card[data-module-index="${index}"]`);
    if (targetCard) {
        targetCard.style.display = 'block';
        targetCard.classList.add('active');
    }
};


