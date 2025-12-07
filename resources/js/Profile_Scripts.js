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

// Handle profile picture upload
document.addEventListener('DOMContentLoaded', function () {
    const profilePictureInput = document.getElementById('profile_picture');
    const profilePicture = document.getElementById('profilePicture');

    if (profilePictureInput && profilePicture) {
        profilePictureInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    profilePicture.src = event.target.result;
                };
                reader.readAsDataURL(file);

                // Auto-submit the form
                this.closest('form').submit();
            }
        });
    }
});

window.openEditModal = function() {
    document.getElementById('editProfileModal').style.display = 'flex';
}

window.closeEditModal = function() {
    document.getElementById('editProfileModal').style.display = 'none';
}

// Close modal if clicking outside content
window.onclick = function(event) {
    const modal = document.getElementById('editProfileModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

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
