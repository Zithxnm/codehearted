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
    const MODULE_KEY = 'diffcall_module_completion_v1';
    const ACTIVE_KEY = 'diffcall_active_module';

    function loadState() {
        try {
            return JSON.parse(localStorage.getItem(MODULE_KEY)) || {};
        } catch (e) {
            return {};
        }
    }

    function saveState(state) {
        try {
            localStorage.setItem(MODULE_KEY, JSON.stringify(state));
        } catch (e) {
            console.warn('Could not save module state', e);
        }
    }

    const state = loadState();
    const modules = document.querySelectorAll('.module-item');

    function updateModulesUI() {
        modules.forEach((el, idx) => {
            const isCompleted = !!state[idx];
            const prevCompleted = idx === 0 || !!state[idx - 1];
            const isLocked = idx > 0 && !prevCompleted;

            el.classList.toggle('completed', isCompleted);
            el.classList.toggle('locked', isLocked);

            // Set correct icon
            const statusEl = el.querySelector('.module-status');
            if (isCompleted) {
                statusEl.textContent = '✓';
            } else if (isLocked) {
                statusEl.textContent = '🔒';
            } else {
                statusEl.textContent = '◉'; // current/unlocked lesson
            }

            // Disable interaction for locked modules
            if (isLocked) {
                el.style.pointerEvents = 'none';
                el.style.opacity = '0.5';
                el.title = 'Complete the previous lesson to unlock this one';
            } else {
                el.style.pointerEvents = 'auto';
                el.style.opacity = '1';
                el.title = '';
            }
        });
    }

    updateModulesUI();

    // Mark lesson active when clicked
    modules.forEach((el, idx) => {
        el.addEventListener('click', function () {
            if (el.classList.contains('locked')) return;

            modules.forEach(m => m.classList.remove('active'));
            el.classList.add('active');
            localStorage.setItem(ACTIVE_KEY, idx);
        });
    });

    // Handle "completed" query from lesson pages
    try {
        const url = new URL(window.location.href);
        const completed = url.searchParams.get('completed');
        const module = url.searchParams.get('module');
        if (completed === '1' && module !== null) {
            state[module] = true;
            saveState(state);

            // Unlock next module if available
            const nextIndex = Number(module) + 1;
            if (modules[nextIndex]) {
                state[nextIndex] = state[nextIndex] || false;
            }
            saveState(state);

            updateModulesUI();

            // Remove params from URL
            url.searchParams.delete('completed');
            url.searchParams.delete('module');
            window.history.replaceState({}, document.title, url.toString());
        }
    } catch (e) {
        console.warn('Error handling completion:', e);
    }
});
