<section class="py-16 bg-white relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Floating circles -->
        <div class="absolute top-20 left-10 w-16 h-16 opacity-5 rounded-full animate-float" style="background-color: var(--primary-color);"></div>
        <div class="absolute top-40 right-20 w-12 h-12 opacity-5 rounded-full animate-bounce" style="background-color: var(--primary-color);"></div>
        <div class="absolute bottom-20 left-1/4 w-8 h-8 opacity-5 rounded-full animate-scale-in" style="background-color: var(--primary-color);"></div>
        
        <!-- Curly SVG lines -->
        <svg class="absolute top-10 right-10 w-24 h-24 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
            <path d="M10,50 Q25,25 50,50 T90,50" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="5,5" class="text-primary">
                <animate attributeName="stroke-dashoffset" values="0;20" dur="3s" repeatCount="indefinite"/>
            </path>
        </svg>
        
        <!-- Wavy lines -->
        <div class="absolute top-1/3 left-0 w-full h-16 opacity-10">
            <svg viewBox="0 0 1200 100" class="w-full h-full">
                <path d="M0,50 Q150,20 300,50 T600,50 T900,50 T1200,50" stroke="currentColor" stroke-width="3" fill="none" stroke-dasharray="10,10" class="text-primary">
                    <animate attributeName="stroke-dashoffset" values="0;30" dur="4s" repeatCount="indefinite"/>
                </path>
            </svg>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2 animate-fade-in-up">What Our Customers Say</h2>
            <p class="text-gray-600 animate-fade-in-up" style="animation-delay: 0.2s;">Real reviews from happy customers</p>
        </div>
        
        <!-- Large Screen Carousel (Hidden on mobile) -->
        <div class="hidden lg:block">
            <!-- Carousel Container -->
            <div class="relative">
                <!-- Navigation Arrows -->
                <button class="absolute left-0 top-1/2 transform -translate-y-1/2 z-20 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 transition-all duration-300 group" id="prevBtn">
                    <i class="fas fa-chevron-left text-gray-600 group-hover:text-gray-800 transition-colors duration-300"></i>
                </button>
                
                <button class="absolute right-0 top-1/2 transform -translate-y-1/2 z-20 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 transition-all duration-300 group" id="nextBtn">
                    <i class="fas fa-chevron-right text-gray-600 group-hover:text-gray-800 transition-colors duration-300"></i>
                </button>
                
                <!-- Carousel Track -->
                <div class="overflow-hidden px-16">
                    <div class="flex transition-transform duration-500 ease-in-out" id="carouselTrack">
                        <!-- Slide 1 -->
                        <div class="w-1/2 flex-shrink-0 px-2">
                            <div class="max-w-lg mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-6 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">Sarah Johnson</h4>
                                            <p class="text-gray-500 text-sm">Verified Customer</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"TastyCart delivers the freshest produce I've ever had. The organic vegetables are always crisp and flavorful. The delivery is incredibly fast and the customer service is outstanding!"</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 2 weeks ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 2 -->
                        <div class="w-1/2 flex-shrink-0 px-2">
                            <div class="max-w-lg mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-6 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">Michael Chen</h4>
                                            <p class="text-gray-500 text-sm">Premium Member</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"The delivery is incredibly fast! I ordered at 5 PM and my groceries were at my door by 5:30 PM. The quality is exceptional and the prices are competitive."</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 1 week ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 3 -->
                        <div class="w-1/2 flex-shrink-0 px-2">
                            <div class="max-w-lg mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-6 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Rodriguez" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">Emily Rodriguez</h4>
                                            <p class="text-gray-500 text-sm">Loyal Customer</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"As a busy working mom, TastyCart has been a lifesaver. The meal kits are easy to prepare and my family loves them! Fresh ingredients every time."</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 3 days ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 4 -->
                        <div class="w-1/2 flex-shrink-0 px-2">
                            <div class="max-w-lg mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-6 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="David Thompson" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">David Thompson</h4>
                                            <p class="text-gray-500 text-sm">Chef & Food Blogger</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"As a professional chef, I'm very particular about ingredient quality. TastyCart consistently delivers restaurant-grade produce that elevates my cooking to the next level!"</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 5 days ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 5 -->
                        <div class="w-1/2 flex-shrink-0 px-2">
                            <div class="max-w-lg mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-6 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/women/23.jpg" alt="Lisa Park" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">Lisa Park</h4>
                                            <p class="text-gray-500 text-sm">Health Coach</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"I recommend TastyCart to all my clients. The organic selection is incredible and the nutritional information is always accurate. Perfect for healthy meal planning!"</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 1 week ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Dot Indicators for Carousel -->
                <div class="flex justify-center mt-8 space-x-2" id="carouselDots">
                    <button class="w-3 h-3 rounded-full bg-blue-500 transition-all duration-300 dot-indicator active" data-slide="0"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300 dot-indicator" data-slide="1"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300 dot-indicator" data-slide="2"></button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Slideshow (Hidden on large screens) -->
        <div class="lg:hidden">
            <!-- Slideshow Container -->
            <div class="relative">
                <!-- Slideshow Track -->
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-in-out" id="slideshowTrack">
                        <!-- Slide 1 -->
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="max-w-sm mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-4 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">Sarah Johnson</h4>
                                            <p class="text-gray-500 text-sm">Verified Customer</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"TastyCart delivers the freshest produce I've ever had. The organic vegetables are always crisp and flavorful. The delivery is incredibly fast and the customer service is outstanding!"</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 2 weeks ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 2 -->
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="max-w-sm mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-4 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">Michael Chen</h4>
                                            <p class="text-gray-500 text-sm">Premium Member</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"The delivery is incredibly fast! I ordered at 5 PM and my groceries were at my door by 5:30 PM. The quality is exceptional and the prices are competitive."</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 1 week ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 3 -->
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="max-w-sm mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-4 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Rodriguez" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">Emily Rodriguez</h4>
                                            <p class="text-gray-500 text-sm">Loyal Customer</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"As a busy working mom, TastyCart has been a lifesaver. The meal kits are easy to prepare and my family loves them! Fresh ingredients every time."</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 3 days ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 4 -->
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="max-w-sm mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-4 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="David Thompson" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">David Thompson</h4>
                                            <p class="text-gray-500 text-sm">Chef & Food Blogger</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"As a professional chef, I'm very particular about ingredient quality. TastyCart consistently delivers restaurant-grade produce that elevates my cooking to the next level!"</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 5 days ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 5 -->
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="max-w-sm mx-auto">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-4 shadow-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="relative">
                                            <img src="https://randomuser.me/api/portraits/women/23.jpg" alt="Lisa Park" class="w-12 h-12 rounded-full object-cover border-4 border-white shadow-lg">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full flex items-center justify-center">
                                                <i class="fas fa-check text-white text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800 text-base">Lisa Park</h4>
                                            <p class="text-gray-500 text-sm">Health Coach</p>
                                            <div class="flex text-yellow-400 mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <i class="fas fa-quote-left text-xl text-gray-300 absolute -top-2 -left-2"></i>
                                        <p class="text-gray-600 leading-relaxed pl-6 text-base">"I recommend TastyCart to all my clients. The organic selection is incredible and the nutritional information is always accurate. Perfect for healthy meal planning!"</p>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-clock mr-2"></i>
                                        <span>Verified purchase • 1 week ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Dot Indicators for Slideshow -->
                <div class="flex justify-center mt-8 space-x-2" id="slideshowDots">
                    <button class="w-3 h-3 rounded-full bg-blue-500 transition-all duration-300 dot-indicator active" data-slide="0"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300 dot-indicator" data-slide="1"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300 dot-indicator" data-slide="2"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300 dot-indicator" data-slide="3"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300 dot-indicator" data-slide="4"></button>
                </div>
            </div>
        </div>
        
        <!-- Trust Indicators -->
        <div class="mt-12 text-center">
            <div class="flex justify-center items-center space-x-8 text-gray-500">
                <div class="flex items-center">
                    <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                    <span class="text-sm">Secure Payments</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-truck text-blue-500 mr-2"></i>
                    <span class="text-sm">Fast Delivery</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-leaf text-green-500 mr-2"></i>
                    <span class="text-sm">Fresh Products</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-headset text-purple-500 mr-2"></i>
                    <span class="text-sm">24/7 Support</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Carousel functionality for large screens
            const carouselTrack = document.getElementById('carouselTrack');
            const carouselDots = document.querySelectorAll('#carouselDots .dot-indicator');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            let carouselCurrentSlide = 0;
            const carouselTotalSlides = 3; // 3 positions for 2 cards at a time
            
            function updateCarousel() {
                const translateX = -carouselCurrentSlide * 50; // 50% for 2 cards
                carouselTrack.style.transform = `translateX(${translateX}%)`;
                
                carouselDots.forEach((dot, index) => {
                    if (index === carouselCurrentSlide) {
                        dot.classList.add('active', 'bg-blue-500');
                        dot.classList.remove('bg-gray-300');
                    } else {
                        dot.classList.remove('active', 'bg-blue-500');
                        dot.classList.add('bg-gray-300');
                    }
                });
                
                prevBtn.disabled = carouselCurrentSlide === 0;
                nextBtn.disabled = carouselCurrentSlide === carouselTotalSlides - 1;
                
                prevBtn.style.opacity = carouselCurrentSlide === 0 ? '0.5' : '1';
                nextBtn.style.opacity = carouselCurrentSlide === carouselTotalSlides - 1 ? '0.5' : '1';
            }
            
            function nextCarouselSlide() {
                if (carouselCurrentSlide < carouselTotalSlides - 1) {
                    carouselCurrentSlide++;
                    updateCarousel();
                }
            }
            
            function prevCarouselSlide() {
                if (carouselCurrentSlide > 0) {
                    carouselCurrentSlide--;
                    updateCarousel();
                }
            }
            
            if (prevBtn && nextBtn) {
                nextBtn.addEventListener('click', nextCarouselSlide);
                prevBtn.addEventListener('click', prevCarouselSlide);
            }
            
            carouselDots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    carouselCurrentSlide = index;
                    updateCarousel();
                });
            });
            
            // Slideshow functionality for mobile
            const slideshowTrack = document.getElementById('slideshowTrack');
            const slideshowDots = document.querySelectorAll('#slideshowDots .dot-indicator');
            
            let slideshowCurrentSlide = 0;
            const slideshowTotalSlides = 5;
            
            function updateSlideshow() {
                const translateX = -slideshowCurrentSlide * 100;
                slideshowTrack.style.transform = `translateX(${translateX}%)`;
                
                slideshowDots.forEach((dot, index) => {
                    if (index === slideshowCurrentSlide) {
                        dot.classList.add('active', 'bg-blue-500');
                        dot.classList.remove('bg-gray-300');
                    } else {
                        dot.classList.remove('active', 'bg-blue-500');
                        dot.classList.add('bg-gray-300');
                    }
                });
            }
            
            function nextSlideshowSlide() {
                slideshowCurrentSlide = (slideshowCurrentSlide + 1) % slideshowTotalSlides;
                updateSlideshow();
            }
            
            slideshowDots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    slideshowCurrentSlide = index;
                    updateSlideshow();
                });
            });
            
            // Auto-play functionality
            let carouselInterval = setInterval(nextCarouselSlide, 5000);
            let slideshowInterval = setInterval(nextSlideshowSlide, 4000);
            
            // Pause auto-play on hover
            if (carouselTrack) {
                carouselTrack.addEventListener('mouseenter', () => {
                    clearInterval(carouselInterval);
                });
                
                carouselTrack.addEventListener('mouseleave', () => {
                    carouselInterval = setInterval(nextCarouselSlide, 5000);
                });
            }
            
            if (slideshowTrack) {
                slideshowTrack.addEventListener('mouseenter', () => {
                    clearInterval(slideshowInterval);
                });
                
                slideshowTrack.addEventListener('mouseleave', () => {
                    slideshowInterval = setInterval(nextSlideshowSlide, 4000);
                });
            }
            
            // Initialize
            if (carouselTrack) updateCarousel();
            if (slideshowTrack) updateSlideshow();
        });
    </script>
</section> 