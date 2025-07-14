// TastyCart JavaScript Application
document.addEventListener('DOMContentLoaded', function() {
    // Authentication Modal
    const authModal = document.getElementById('authModal');
    const openAuthModal = document.getElementById('openAuthModal');
    const closeAuthModal = document.getElementById('closeAuthModal');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const toggleToRegister = document.getElementById('toggleToRegister');
    const toggleToLogin = document.getElementById('toggleToLogin');
    const authTitle = document.getElementById('authTitle');
    const authSubtitle = document.getElementById('authSubtitle');
    const toggleText = document.getElementById('toggleText');
    const toggleTextRegister = document.getElementById('toggleTextRegister');

    // Open auth modal
    if (openAuthModal) {
        openAuthModal.addEventListener('click', function(e) {
            e.preventDefault();
            authModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    }

    // Close auth modal
    if (closeAuthModal) {
        closeAuthModal.addEventListener('click', function() {
            authModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });
    }

    // Close modal when clicking outside
    if (authModal) {
        authModal.addEventListener('click', function(e) {
            if (e.target === authModal) {
                authModal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });
    }

    // Toggle to register form
    if (toggleToRegister) {
        toggleToRegister.addEventListener('click', function(e) {
            e.preventDefault();
            loginForm.classList.add('hidden');
            registerForm.classList.remove('hidden');
            authTitle.textContent = 'Create Account';
            authSubtitle.textContent = 'Join TastyCart today';
            toggleText.classList.add('hidden');
            toggleTextRegister.classList.remove('hidden');
        });
    }

    // Toggle to login form
    if (toggleToLogin) {
        toggleToLogin.addEventListener('click', function(e) {
            e.preventDefault();
            registerForm.classList.add('hidden');
            loginForm.classList.remove('hidden');
            authTitle.textContent = 'Welcome Back';
            authSubtitle.textContent = 'Sign in to your account';
            toggleTextRegister.classList.add('hidden');
            toggleText.classList.remove('hidden');
        });
    }

    // Handle login form submission
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            
            // Add your login logic here
            console.log('Login attempt:', { email, password });
            
            // For demo purposes, show success message
            showNotification('Login successful!', 'success');
        });
    }

    // Handle register form submission
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('registerName').value;
            const email = document.getElementById('registerEmail').value;
            const password = document.getElementById('registerPassword').value;
            const confirmPassword = document.getElementById('registerConfirmPassword').value;
            
            // Validate passwords match
            if (password !== confirmPassword) {
                showNotification('Passwords do not match!', 'error');
                return;
            }
            
            // Add your registration logic here
            console.log('Register attempt:', { name, email, password });
            
            // For demo purposes, show success message
            showNotification('Registration successful!', 'success');
        });
    }

    // Mobile menu toggle
    const menuButton = document.querySelector('button[type="button"]');
    let mobileMenu = null;
    
    if (menuButton) {
        menuButton.addEventListener('click', () => {
            if (mobileMenu && document.body.contains(mobileMenu)) {
                mobileMenu.remove();
                mobileMenu = null;
            } else {
                mobileMenu = document.createElement('div');
                mobileMenu.className = 'md:hidden bg-white absolute top-16 left-0 w-full shadow-lg z-40';
                mobileMenu.innerHTML = `
                    <div class="px-4 py-4 space-y-2">
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">Home</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">Shop</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">Categories</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">About</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:main-color rounded transition duration-300">Contact</a>
                    </div>
                `;
                document.body.appendChild(mobileMenu);
            }
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Animation on scroll
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate-fadeInUp, .animate-slideLeft, .animate-slideRight, .animate-fade-in-up, .animate-fade-in-right');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementPosition < windowHeight - 100) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };

    // Force hero animations to work
    window.addEventListener('load', () => {
        // Trigger hero animations immediately
        const heroElements = document.querySelectorAll('.animate-fade-in-up, .animate-fade-in-right, .animate-gentle-float');
        heroElements.forEach(element => {
            element.style.animationPlayState = 'running';
        });
        
        // Also run scroll animations
        animateOnScroll();
    });

    window.addEventListener('scroll', animateOnScroll);

    // Notification system
    function showNotification(message, type = 'info') {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll('.notification');
        existingNotifications.forEach(notification => notification.remove());

        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification fixed top-4 right-4 z-50 px-6 py-3 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full`;
        
        // Set colors based on type
        const colors = {
            success: 'bg-green-500 text-white',
            error: 'bg-red-500 text-white',
            info: 'bg-blue-500 text-white',
            warning: 'bg-yellow-500 text-white'
        };
        
        notification.className += ` ${colors[type] || colors.info}`;
        notification.textContent = message;

        // Add to page
        document.body.appendChild(notification);

        // Animate in
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);

        // Remove after 3 seconds
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 300);
        }, 3000);
    }

    // Make notification function globally available
    window.showNotification = showNotification;
}); 