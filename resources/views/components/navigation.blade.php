<!-- Navigation -->
<nav id="main-navbar" class="navbar-transparent shadow-sm fixed w-full z-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <i class="fas fa-leaf main-color text-2xl mr-2"></i>
                    <span class="text-xl font-bold main-color">TastyCart</span>
                </a>
            </div>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="nav-link text-gray-700 hover:main-color transition duration-300 font-medium">Home</a>
                <a href="#" class="nav-link text-gray-700 hover:main-color transition duration-300 font-medium">Shop</a>
                <a href="#" class="nav-link text-gray-700 hover:main-color transition duration-300 font-medium">Categories</a>
                <a href="#" class="nav-link text-gray-700 hover:main-color transition duration-300 font-medium">About</a>
                <a href="#" class="nav-link text-gray-700 hover:main-color transition duration-300 font-medium">Contact</a>
            </div>
            
            <div class="flex items-center space-x-6">
                <a href="#" class="text-gray-600 hover:main-color transition duration-300 p-2">
                    <i class="fas fa-search text-lg"></i>
                </a>
                <a href="#" class="text-gray-600 hover:main-color transition duration-300 relative p-2">
                    <i class="fas fa-shopping-cart text-lg"></i>
                    <span class="absolute -top-2 -right-2 main-bg text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                </a>
                <a href="#" class="text-gray-600 hover:main-color transition duration-300 p-2">
                    <i class="fas fa-user text-lg"></i>
                </a>
            </div>
            
            <div class="md:hidden flex items-center">
                <button type="button" class="text-gray-500 hover:main-color focus:outline-none mobile-menu-btn">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu md:hidden bg-white absolute top-16 left-0 w-full shadow-lg z-40 hidden">
        <div class="px-4 py-4 space-y-2">
            <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">Home</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">Shop</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">Categories</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">About</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">Contact</a>
        </div>
    </div>
</nav>

<script>
    // Navbar scroll effect
    const navbar = document.getElementById('main-navbar');
    const solidClass = 'navbar-solid';
    const transparentClass = 'navbar-transparent';
    
    function handleNavbarScroll() {
        if (window.scrollY > 40) {
            navbar.classList.add(solidClass);
            navbar.classList.remove(transparentClass);
        } else {
            navbar.classList.add(transparentClass);
            navbar.classList.remove(solidClass);
        }
    }
    
    window.addEventListener('scroll', handleNavbarScroll);
    window.addEventListener('load', handleNavbarScroll);
    
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
</script> 