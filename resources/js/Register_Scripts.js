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
    const form = document.getElementById('registerForm');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const emailInput = document.getElementById('email');
    const usernameInput = document.getElementById('name');

    // Password visibility toggle (supports emoji and FontAwesome, updates ARIA)
    const toggleButtons = document.querySelectorAll('.toggle-password');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetInput = document.getElementById(targetId);

            // Support both emoji span (.eye-icon) and FontAwesome <i class="fa"> elements
            let eyeIcon = this.querySelector('.eye-icon');
            if (!eyeIcon) {
                eyeIcon = this.querySelector('i') || this.querySelector('.fa') || this.querySelector('svg');
            }

            if (!targetInput) return;

            const wasPassword = targetInput.type === 'password';
            // Toggle the input type
            targetInput.type = wasPassword ? 'text' : 'password';
            const visible = targetInput.type === 'text';

            // Update icon: if FontAwesome, swap classes; otherwise update text content (emoji)
            if (eyeIcon) {
                if (eyeIcon.classList && (eyeIcon.classList.contains('fa') || eyeIcon.classList.contains('fa-eye') || eyeIcon.classList.contains('fa-eye-slash'))) {
                    if (visible) {
                        eyeIcon.classList.remove('fa-eye');
                        eyeIcon.classList.add('fa-eye-slash');
                    } else {
                        eyeIcon.classList.remove('fa-eye-slash');
                        eyeIcon.classList.add('fa-eye');
                    }
                } else {
                    eyeIcon.textContent = visible ? '👁️‍🗨️' : '👁️';
                }
            }

            // Accessibility: indicate state and update label
            this.setAttribute('aria-pressed', String(visible));
            this.setAttribute('aria-label', visible ? 'Hide password' : 'Show password');
        });
    });

    // Password validation requirements
    const requirements = {
        length: document.getElementById('req-length'),
        case: document.getElementById('req-case'),
        number: document.getElementById('req-number'),
        special: document.getElementById('req-special')
    };

    // Validate password in real-time
    passwordInput.addEventListener('input', function() {
        const password = this.value;
        validatePasswordRequirements(password);
    });

    function validatePasswordRequirements(password) {
        // Length check (8-30 characters)
        const hasLength = password.length >= 8 && password.length <= 30;
        updateRequirement(requirements.length, hasLength);

        // Case check (both lower and upper)
        const hasLowerUpper = /[a-z]/.test(password) && /[A-Z]/.test(password);
        updateRequirement(requirements.case, hasLowerUpper);

        // Number check
        const hasNumber = /\d/.test(password);
        updateRequirement(requirements.number, hasNumber);

        // Special character check
        const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);
        updateRequirement(requirements.special, hasSpecial);

        return hasLength && hasLowerUpper && hasNumber && hasSpecial;
    }

    function updateRequirement(element, isValid) {
        if (isValid) {
            element.classList.add('valid');
        } else {
            element.classList.remove('valid');
        }
    }

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Clear previous errors
        clearErrors();

        const email = emailInput.value.trim();
        const username = usernameInput.value.trim();
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;
        const termsChecked = document.getElementById('terms').checked;

        let isValid = true;

        // Email validation
        if (!email) {
            showError('emailError', 'Email is required');
            isValid = false;
        } else if (!isValidEmail(email)) {
            showError('emailError', 'Please enter a valid email address');
            isValid = false;
        }

        // Username validation
        if (!username) {
            showError('usernameError', 'Username is required');
            isValid = false;
        } else if (username.length < 3) {
            showError('usernameError', 'Username must be at least 3 characters');
            isValid = false;
        }

        // Password validation
        if (!password) {
            showError('passwordError', 'Password is required');
            isValid = false;
        } else if (!validatePasswordRequirements(password)) {
            showError('passwordError', 'Password does not meet requirements');
            isValid = false;
        }

        // Confirm password validation
        if (!confirmPassword) {
            showError('confirmPasswordError', 'Please confirm your password');
            isValid = false;
        } else if (password !== confirmPassword) {
            showError('confirmPasswordError', 'Passwords do not match');
            isValid = false;
        }

        // Terms validation
        if (!termsChecked) {
            showToast('Please accept the terms and conditions', 'error');
            isValid = false;
        }

        if (isValid) {
            // showToast('Registration successful!', 'success'); tofix
            // Uncomment the next line to submit to PHP
            form.submit();
        }
    });

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function showError(elementId, message) {
        const errorElement = document.getElementById(elementId);
        errorElement.textContent = message;
        errorElement.classList.add('show');
    }

    function clearErrors() {
        const errorElements = document.querySelectorAll('.error-message');
        errorElements.forEach(element => {
            element.textContent = '';
            element.classList.remove('show');
        });
    }

    function showToast(message, type = 'success') {
        const toast = document.getElementById('toast');
        toast.textContent = message;
        toast.className = 'toast show ' + type;

        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }
});
