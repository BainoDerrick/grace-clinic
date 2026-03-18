document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.getElementById('nav-toggle'); // Desktop toggle
    const mobileToggle = document.getElementById('mobile-toggle'); // Mobile open
    const mobileClose = document.getElementById('mobile-close'); // Mobile close
    const sidebar = document.getElementById('sidebar');
    const mainWrapper = document.getElementById('main-wrapper');
    const overlay = document.getElementById('sidebar-overlay');
    const toggleIcon = document.getElementById('toggle-icon');

    const STORAGE_KEY = 'sidebarCollapsed';

    // 1. DESKTOP TOGGLE LOGIC (Shrink/Expand)
    function setDesktopCollapsed(state) {
        if (state) {
            sidebar.classList.add('collapsed');
            mainWrapper.classList.add('collapsed');
            if (toggleIcon) toggleIcon.className = 'fas fa-angles-right';
        } else {
            sidebar.classList.remove('collapsed');
            mainWrapper.classList.remove('collapsed');
            if (toggleIcon) toggleIcon.className = 'fas fa-angles-left';
        }
        localStorage.setItem(STORAGE_KEY, state);
    }

    if (navToggle) {
        navToggle.addEventListener('click', () => {
            const isCollapsed = sidebar.classList.contains('collapsed');
            setDesktopCollapsed(!isCollapsed);
        });
    }

    // 2. MOBILE TOGGLE LOGIC (Slide In/Out)
    function toggleMobileMenu(isOpen) {
        if (isOpen) {
            sidebar.classList.add('mobile-active');
            overlay.classList.add('overlay-active');
            document.body.style.overflow = 'hidden'; // Prevent background scroll
        } else {
            sidebar.classList.remove('mobile-active');
            overlay.classList.remove('overlay-active');
            document.body.style.overflow = '';
        }
    }

    if (mobileToggle) mobileToggle.addEventListener('click', () => toggleMobileMenu(true));
    if (mobileClose) mobileClose.addEventListener('click', () => toggleMobileMenu(false));
    if (overlay) overlay.addEventListener('click', () => toggleMobileMenu(false));

    // 3. INITIALIZE STATE
    // Only apply desktop collapse if screen is large
    if (window.innerWidth >= 1024) {
        const savedState = localStorage.getItem(STORAGE_KEY) === 'true';
        setDesktopCollapsed(savedState);
    }

    // 4. RESET ON RESIZE
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            toggleMobileMenu(false); // Close mobile menu if window resized to desktop
        }
    });
});