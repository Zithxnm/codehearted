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

document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.toggle-password');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetInput = document.getElementById(targetId);
            let eyeIcon = this.querySelector('.eye-icon');
            if (!eyeIcon) {
                eyeIcon = this.querySelector('i') || this.querySelector('.fa') || this.querySelector('svg');
            }

            if (!targetInput) return;

            if (targetInput.type === 'password') {
                targetInput.type = 'text';
                if (eyeIcon) {
                    if (eyeIcon.classList && (eyeIcon.classList.contains('fa') || eyeIcon.classList.contains('fa-eye') || eyeIcon.classList.contains('fa-eye-slash'))) {
                        eyeIcon.classList.remove('fa-eye');
                        eyeIcon.classList.add('fa-eye-slash');
                    } else {
                        eyeIcon.textContent = '👁️‍🗨️';
                    }
                }
            } else {
                targetInput.type = 'password';
                if (eyeIcon) {
                    if (eyeIcon.classList && (eyeIcon.classList.contains('fa') || eyeIcon.classList.contains('fa-eye') || eyeIcon.classList.contains('fa-eye-slash'))) {
                        eyeIcon.classList.remove('fa-eye-slash');
                        eyeIcon.classList.add('fa-eye');
                    } else {
                        eyeIcon.textContent = '👁️';
                    }
                }
            }
        });
    });
});
