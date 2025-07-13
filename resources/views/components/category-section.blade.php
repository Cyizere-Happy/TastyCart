<section class="py-16 bg-white relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Floating circles -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-[#175484] opacity-5 rounded-full animate-float"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-[#175484] opacity-5 rounded-full animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-[#175484] opacity-5 rounded-full animate-float" style="animation-delay: 4s;"></div>
        
        <!-- Curly SVG lines -->
        <svg class="absolute top-10 right-10 w-32 h-32 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
            <path d="M10,50 Q25,25 50,50 T90,50" stroke="#175484" stroke-width="2" fill="none" stroke-dasharray="5,5">
                <animate attributeName="stroke-dashoffset" values="0;20" dur="3s" repeatCount="indefinite"/>
            </path>
        </svg>
        
        <svg class="absolute bottom-10 left-10 w-24 h-24 opacity-10 animate-rotate-slow" viewBox="0 0 100 100" style="animation-direction: reverse;">
            <path d="M10,30 Q30,10 50,30 T90,30" stroke="#175484" stroke-width="2" fill="none" stroke-dasharray="3,3">
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
        <div class="absolute top-1/2 right-1/4 w-3 h-3 bg-[#175484] opacity-20 rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-[#175484] opacity-20 rounded-full animate-pulse-slow" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/4 right-1/3 w-4 h-4 bg-[#175484] opacity-15 rounded-full animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="max-w-6xl mx-auto px-8 lg:px-16 xl:px-24 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Shop by Category</h2>
            <p class="text-gray-600">Discover our premium selection</p>
        </div>
        
        <div class="relative">
            <!-- Single row zigzag layout -->
            <div class="flex justify-center items-center gap-8 lg:gap-12 xl:gap-16">
                <!-- Fruits - UP -->
                <div class="category-circle group -mt-8 lg:-mt-12" style="animation-delay: 0s;">
                    <div class="w-28 h-28 lg:w-36 lg:h-36 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Fruits.jpg') }}" 
                             alt="Fresh Fruits" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 left-3 w-8 h-8 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-apple-alt text-white text-sm"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-4 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h3 class="font-semibold text-gray-800 text-sm lg:text-base">Fruits</h3>
                        <p class="text-xs text-gray-600">Fresh & Organic</p>
                    </div>
                </div>

                <!-- Vegetables - DOWN -->
                <div class="category-circle group" style="animation-delay: 0.2s;">
                    <div class="w-28 h-28 lg:w-36 lg:h-36 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Vegetables.jpg') }}" 
                             alt="Fresh Vegetables" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 left-3 w-8 h-8 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-carrot text-white text-sm"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-4 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h3 class="font-semibold text-gray-800 text-sm lg:text-base">Vegetables</h3>
                        <p class="text-xs text-gray-600">Farm Fresh</p>
                    </div>
                </div>

                <!-- Dairy - UP -->
                <div class="category-circle group -mt-8 lg:-mt-12" style="animation-delay: 0.4s;">
                    <div class="w-28 h-28 lg:w-36 lg:h-36 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Dairy.jpg') }}" 
                             alt="Dairy Products" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 left-3 w-8 h-8 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-cheese text-white text-sm"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-4 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h3 class="font-semibold text-gray-800 text-sm lg:text-base">Dairy</h3>
                        <p class="text-xs text-gray-600">Pure & Natural</p>
                    </div>
                </div>

                <!-- Meat - DOWN -->
                <div class="category-circle group" style="animation-delay: 0.6s;">
                    <div class="w-28 h-28 lg:w-36 lg:h-36 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Meat.jpg') }}"  
                             alt="Fresh Meat" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 left-3 w-8 h-8 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-drumstick-bite text-white text-sm"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-4 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h3 class="font-semibold text-gray-800 text-sm lg:text-base">Meat</h3>
                        <p class="text-xs text-gray-600">Premium Quality</p>
                    </div>
                </div>

                <!-- Bakery - UP -->
                <div class="category-circle group -mt-8 lg:-mt-12" style="animation-delay: 0.8s;">
                    <div class="w-28 h-28 lg:w-36 lg:h-36 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Bakery.jpg') }}" 
                             alt="Fresh Bakery" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 left-3 w-8 h-8 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-bread-slice text-white text-sm"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-4 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h3 class="font-semibold text-gray-800 text-sm lg:text-base">Bakery</h3>
                        <p class="text-xs text-gray-600">Fresh Daily</p>
                    </div>
                </div>

                <!-- Seafood - DOWN -->
                <div class="category-circle group" style="animation-delay: 1s;">
                    <div class="w-28 h-28 lg:w-36 lg:h-36 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/SeaFood.jpg') }}" 
                             alt="Fresh Seafood" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 left-3 w-8 h-8 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-fish text-white text-sm"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-4 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h3 class="font-semibold text-gray-800 text-sm lg:text-base">Seafood</h3>
                        <p class="text-xs text-gray-600">Ocean Fresh</p>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>