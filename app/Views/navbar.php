<!-- Mobile Top Bar (Only visible on small screens) -->
<div class="lg:hidden bg-white border-b px-4 py-3 flex justify-between items-center sticky top-0 z-40">
    <h1 class="text-lg font-bold text-blue-600">Grace Clinic</h1>
    <button id="mobile-toggle" class="text-gray-700 p-2 focus:outline-none bg-gray-100 rounded">
        <i class="fas fa-bars"></i>
    </button>
</div>

<!-- Sidebar Overlay (Darkens the screen when menu is open on mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden lg:hidden"></div>

<!-- Sidebar -->
<aside id="sidebar" class="fixed inset-y-0 left-0 bg-white shadow-xl z-50 overflow-x-hidden transform lg:translate-x-0 transition-all duration-300">
    <div class="flex items-center justify-between px-4 py-5 border-b">
        <h1 class="text-xl font-bold text-blue-600 sidebar-text truncate">Grace Medical Clinic</h1>
        <!-- This button is for Desktop collapsing -->
        <button id="nav-toggle" class="hidden lg:block text-gray-500 hover:text-blue-600 focus:outline-none">
            <i class="fas fa-angles-left" id="toggle-icon"></i>
        </button>
        <!-- This button is to close Sidebar on Mobile -->
        <button id="mobile-close" class="lg:hidden text-gray-500 focus:outline-none">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <nav class="mt-4">
        <a href="<?= base_url(); ?>" class="nav-link flex items-center px-6 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
            <i class="fas fa-home w-6"></i>
            <span class="ml-3 sidebar-text">Home</span>
        </a>
        <a href="<?= base_url('about'); ?>" class="nav-link flex items-center px-6 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
            <i class="fas fa-info-circle w-6"></i>
            <span class="ml-3 sidebar-text">About</span>
        </a>
        <a href="<?= base_url('services'); ?>" class="nav-link flex items-center px-6 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
            <i class="fas fa-concierge-bell w-6"></i>
            <span class="ml-3 sidebar-text">Services</span>
        </a>
        <a href="<?= base_url('doctors'); ?>" class="nav-link flex items-center px-6 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
            <i class="fas fa-user-doctor w-6"></i>
            <span class="ml-3 sidebar-text">Doctors</span>
        </a>
        <a href="<?= base_url('contact'); ?>" class="nav-link flex items-center px-6 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
            <i class="fas fa-envelope w-6"></i>
            <span class="ml-3 sidebar-text">Contact</span>
        </a>
    </nav>
</aside>

<!-- Main Wrapper -->
<div id="main-wrapper" class="flex flex-col min-h-screen transition-all duration-300 lg:ml-64">
    <main class="flex-grow">