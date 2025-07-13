<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TastyCart | Premium Food Delivery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="bg-gray-50">
    <!-- Navigation Component -->
    <x-navigation />

    <!-- Hero Section Component -->
    <x-hero-section />

    <!-- Special Offers Component -->
    <x-special-offers />

    <!-- Categories Section Component -->
    <x-category-section />

    <!-- Featured Products -->
    <section class="py-16 relative overflow-hidden" style="background-color: var(--primary-lighter);">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Floating circles -->
            <div class="absolute top-20 left-10 w-20 h-20 opacity-5 rounded-full animate-bounce" style="background-color: var(--primary-color);"></div>
            <div class="absolute top-40 right-20 w-16 h-16 opacity-5 rounded-full animate-scale-in" style="background-color: var(--primary-color);"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 opacity-5 rounded-full animate-wave" style="background-color: var(--primary-color);"></div>
            
            <!-- Curly SVG lines -->
            <svg class="absolute top-10 right-10 w-32 h-32 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
                <path d="M10,50 Q25,25 50,50 T90,50" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="5,5" class="text-primary">
                    <animate attributeName="stroke-dashoffset" values="0;20" dur="3s" repeatCount="indefinite"/>
                </path>
            </svg>
            
            <svg class="absolute bottom-10 left-10 w-24 h-24 opacity-10 animate-rotate-slow" viewBox="0 0 100 100" style="animation-direction: reverse;">
                <path d="M10,30 Q30,10 50,30 T90,30" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="3,3" class="text-primary">
                    <animate attributeName="stroke-dashoffset" values="0;15" dur="2s" repeatCount="indefinite"/>
                </path>
            </svg>
            
            <!-- Wavy lines -->
            <div class="absolute top-1/3 left-0 w-full h-20 opacity-20">
                <svg viewBox="0 0 1200 100" class="w-full h-full">
                    <path d="M0,50 Q150,20 300,50 T600,50 T900,50 T1200,50" stroke="currentColor" stroke-width="4" fill="none" stroke-dasharray="15,15" class="text-primary">
                        <animate attributeName="stroke-dashoffset" values="0;30" dur="4s" repeatCount="indefinite"/>
                    </path>
                </svg>
            </div>
            
            <!-- Pulsing dots -->
            <div class="absolute top-1/2 right-1/4 w-3 h-3 opacity-20 rounded-full animate-sparkle" style="background-color: var(--primary-color);"></div>
            <div class="absolute bottom-1/3 left-1/3 w-2 h-2 opacity-20 rounded-full animate-pulse-slow" style="background-color: var(--primary-color);"></div>
            <div class="absolute top-1/4 right-1/3 w-4 h-4 opacity-15 rounded-full animate-slide-in-left" style="background-color: var(--primary-color);"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Featured Products</h2>
                    <p class="text-gray-600 text-sm">Our best selling items</p>
                </div>
                <a href="/shop" class="bg-[#175484] text-white px-5 py-2 rounded-lg hover:bg-[#134a6f] transition duration-300 flex items-center group text-sm">
                    View All
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <x-product-card 
                    image="{{ asset('Images/Avocado.jpg') }}"
                    title="Fresh Avocado"
                    category="Organic Fruits"
                    price="4.99"
                    originalPrice="6.99"
                    rating="5"
                    reviews="128"
                    badge="Fresh"
                    badgeColor="green"
                />
                
                <!-- Product 2 -->
                <x-product-card 
                    image="{{ asset('Images/Tomatoes.jpg') }}"
                    title="Organic Tomatoes"
                    category="Fresh Vegetables"
                    price="3.49"
                    rating="4.5"
                    reviews="95"
                    badge="Popular"
                    badgeColor="red"
                />
                
                <!-- Product 3 -->
                <x-product-card 
                    image="{{ asset('Images/Strawberry.jpg') }}"
                    title="Fresh Strawberries"
                    category="Fresh Berries"
                    price="5.99"
                    originalPrice="7.99"
                    rating="5"
                    reviews="156"
                    badge="New"
                    badgeColor="pink"
                />
                
                <!-- Product 4 -->
                <x-product-card 
                    image="{{ asset('Images/Salmon.jpg') }}"
                    title="Fresh Salmon"
                    category="Fresh Seafood"
                    price="18.99"
                    rating="5"
                    reviews="89"
                    badge="Premium"
                    badgeColor="blue"
                />
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 bg-gray-50 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Floating circles -->
            <div class="absolute top-20 left-10 w-20 h-20 opacity-5 rounded-full animate-float" style="background-color: var(--primary-color);"></div>
            <div class="absolute top-40 right-20 w-16 h-16 opacity-5 rounded-full animate-bounce" style="background-color: var(--primary-color);"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 opacity-5 rounded-full animate-scale-in" style="background-color: var(--primary-color);"></div>
            
            <!-- Curly SVG lines -->
            <svg class="absolute top-10 right-10 w-32 h-32 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
                <path d="M10,50 Q25,25 50,50 T90,50" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="5,5" class="text-primary">
                    <animate attributeName="stroke-dashoffset" values="0;20" dur="3s" repeatCount="indefinite"/>
                </path>
            </svg>
            
            <svg class="absolute bottom-10 left-10 w-24 h-24 opacity-10 animate-rotate-slow" viewBox="0 0 100 100" style="animation-direction: reverse;">
                <path d="M10,30 Q30,10 50,30 T90,30" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="3,3" class="text-primary">
                    <animate attributeName="stroke-dashoffset" values="0;15" dur="2s" repeatCount="indefinite"/>
                </path>
            </svg>
            
            <!-- Wavy lines -->
            <div class="absolute top-1/3 left-0 w-full h-20 opacity-5">
                <svg viewBox="0 0 1200 100" class="w-full h-full">
                    <path d="M0,50 Q150,20 300,50 T600,50 T900,50 T1200,50" stroke="currentColor" stroke-width="3" fill="none" stroke-dasharray="10,10" class="text-primary">
                        <animate attributeName="stroke-dashoffset" values="0;30" dur="4s" repeatCount="indefinite"/>
                    </path>
                </svg>
            </div>
            
            <!-- Floating dots -->
            <div class="absolute top-1/2 right-1/4 w-3 h-3 opacity-20 rounded-full animate-float" style="background-color: var(--primary-color);"></div>
            <div class="absolute bottom-1/3 left-1/3 w-2 h-2 opacity-20 rounded-full animate-bounce" style="background-color: var(--primary-color);"></div>
            <div class="absolute top-1/4 right-1/3 w-4 h-4 opacity-15 rounded-full animate-scale-in" style="background-color: var(--primary-color);"></div>
        </div>
        
        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">How TastyCart Works</h2>
                <p class="text-gray-600">Simple steps to delicious food</p>
            </div>
            
            <!-- Staggered Layout for How It Works -->
            <div class="flex justify-center items-start space-x-12">
                <!-- Left Card (50% lower) -->
                <div class="w-56 animate-fadeInUp mt-8" style="animation-delay: 0.6s;">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto main-bg rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-search text-white text-xl"></i>
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <span class="bg-[#009f6b] text-white text-sm font-bold rounded-full w-6 h-6 flex items-center justify-center mr-2 animate-pulse-slow" style="animation-delay: 0.7s;">1</span>
                            <h3 class="font-semibold text-gray-800 text-lg animate-fade-in-right" style="animation-delay: 0.8s;">Browse & Select</h3>
                        </div>
                        <p class="text-gray-600 animate-fade-in-up" style="animation-delay: 0.9s;">Choose from our wide selection of fresh products</p>
                    </div>
                </div>
                
                <!-- Middle Card (Top position) -->
                <div class="w-56 animate-fadeInUp" style="animation-delay: 0.8s;">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto main-bg rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-shopping-cart text-white text-xl"></i>
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <span class="bg-[#009f6b] text-white text-sm font-bold rounded-full w-6 h-6 flex items-center justify-center mr-2 animate-pulse-slow" style="animation-delay: 0.9s;">2</span>
                            <h3 class="font-semibold text-gray-800 text-lg animate-fade-in-right" style="animation-delay: 1s;">Add to Cart</h3>
                        </div>
                        <p class="text-gray-600 animate-fade-in-up" style="animation-delay: 1.1s;">Select quantities and add items to your cart</p>
                    </div>
                </div>
                
                <!-- Right Card (50% lower) -->
                <div class="w-56 animate-fadeInUp mt-8" style="animation-delay: 1s;">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto main-bg rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-credit-card text-white text-xl"></i>
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <span class="bg-[#009f6b] text-white text-sm font-bold rounded-full w-6 h-6 flex items-center justify-center mr-2 animate-pulse-slow" style="animation-delay: 1.1s;">3</span>
                            <h3 class="font-semibold text-gray-800 text-lg animate-fade-in-right" style="animation-delay: 1.2s;">Checkout</h3>
                        </div>
                        <p class="text-gray-600 animate-fade-in-up" style="animation-delay: 1.3s;">Secure payment and delivery scheduling</p>
                    </div>
                </div>
                
                <!-- Fourth Card (50% lower) -->
                <div class="w-56 animate-fadeInUp mt-8" style="animation-delay: 1.2s;">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto main-bg rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-truck text-white text-xl"></i>
                        </div>
                        <div class="flex items-center justify-center mb-2">
                            <span class="bg-[#009f6b] text-white text-sm font-bold rounded-full w-6 h-6 flex items-center justify-center mr-2 animate-pulse-slow" style="animation-delay: 1.3s;">4</span>
                            <h3 class="font-semibold text-gray-800 text-lg animate-fade-in-right" style="animation-delay: 1.4s;">Delivery</h3>
                        </div>
                        <p class="text-gray-600">Fresh food delivered to your doorstep</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">What Our Customers Say</h2>
                <p class="text-gray-600">Real reviews from happy customers</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card-hover bg-gray-50 rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-800">Sarah Johnson</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"TastyCart delivers the freshest produce I've ever had. The organic vegetables are always crisp and flavorful. Highly recommend!"</p>
                </div>
                
                <div class="card-hover bg-gray-50 rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-800">Michael Chen</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"The delivery is incredibly fast! I ordered at 5 PM and my groceries were at my door by 5:30 PM. The quality is exceptional."</p>
                </div>
                
                <div class="card-hover bg-gray-50 rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-800">Emily Rodriguez</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"As a busy working mom, TastyCart has been a lifesaver. The meal kits are easy to prepare and my family loves them!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 main-bg">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Subscribe to Our Newsletter</h2>
            <p class="text-blue-100 mb-8">Get weekly updates on new products and special offers</p>
            <form class="flex flex-col sm:flex-row gap-4 justify-center">
                <input type="email" placeholder="Your email address" class="px-5 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300 w-full sm:w-64">
                <button type="submit" class="bg-white main-color font-medium px-6 py-3 rounded-lg hover:bg-gray-100 transition duration-300">
                    Subscribe
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-12 pb-8">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-leaf text-blue-400 text-2xl mr-2"></i>
                        <span class="text-xl font-bold">TastyCart</span>
                    </div>
                    <p class="text-gray-400 mb-4">Premium food delivery service with fresh ingredients and fast delivery.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Shop</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Categories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Customer Service</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Shipping Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Returns & Refunds</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                            <span>123 Food Street, Fresh City, FC 12345</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-2"></i>
                            <span>(123) 456-7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>support@tastycart.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-2"></i>
                            <span>Mon-Fri: 8AM - 8PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} TastyCart. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
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
        
        // Mobile menu toggle
        const menuButton = document.querySelector('button[type="button"]');
        let mobileMenu = null;
        
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


    </script>
</body>
</html>