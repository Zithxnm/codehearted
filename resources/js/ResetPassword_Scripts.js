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
    const passwordInput = document.getElementById('password');

    const requirements = {
        length: document.getElementById('req-length'),
        case: document.getElementById('req-case'),
        number: document.getElementById('req-number'),
        special: document.getElementById('req-special')
    };

    passwordInput.addEventListener('input', function() {
        const password = this.value;

        updateRequirement(requirements.length, password.length >= 8 && password.length <= 30);

        updateRequirement(requirements.case, /[a-z]/.test(password) && /[A-Z]/.test(password));

        updateRequirement(requirements.number, /\d/.test(password));

        updateRequirement(requirements.special, /[!@#$%^&*(),.?":{}|<>]/.test(password));
    });

    function updateRequirement(element, isValid) {
        if (isValid) {
            element.classList.add('valid');
            element.innerHTML = '✓ ' + element.innerText.substring(2);
        } else {
            element.classList.remove('valid');
            if(element.innerText.startsWith('✓')) {
                element.innerHTML = '• ' + element.innerText.substring(2);
            }
        }
    }

    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const input = document.getElementById(targetId);
            const icon = this.querySelector('i');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
});
