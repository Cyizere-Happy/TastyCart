<section class="py-8 bg-white relative overflow-hidden">
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
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-1">Shop by Category</h2>
            <p class="text-gray-600 text-xs">Discover our premium selection</p>
        </div>
        
        <div class="relative">
            <!-- Category Filter Row -->
            <div class="flex justify-center items-center gap-6 lg:gap-12 xl:gap-16">
                <!-- All Category -->
                <div class="category-circle group" x-data="{ selected: false }" @click="$dispatch('category-selected', 'All')"
                    :class="selectedCategory === 'All' ? '' : ''">
                    <div :class="selectedCategory === 'All' ? 'bg-primary-light' : 'bg-gray-100'" class="w-14 h-14 lg:w-20 lg:h-20 rounded-full flex items-center justify-center transition-all duration-300 relative">
                        <span class="font-bold text-primary text-xs lg:text-base">All</span>
                    </div>
                </div>
                <!-- Fruits - UP -->
                <div class="category-circle group -mt-2 lg:-mt-4" x-data="{}" @click="$dispatch('category-selected', 'Fruits')" :class="{ 'ring-4 ring-primary': selectedCategory === 'Fruits' }" style="animation-delay: 0s;">
                    <div class="w-14 h-14 lg:w-20 lg:h-20 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Fruits.jpg') }}" alt="Fresh Fruits" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-1 left-1 w-4 h-4 lg:w-6 lg:h-6 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-apple-alt text-white text-[10px] lg:text-xs"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-2 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-1 lg:mt-2">
                        <h3 class="font-semibold text-gray-800 text-[10px] lg:text-xs">Fruits</h3>
                        <p class="text-[8px] lg:text-[10px] text-gray-600">Fresh & Organic</p>
                    </div>
                </div>

                <!-- Vegetables - DOWN -->
                <div class="category-circle group" x-data="{}" @click="$dispatch('category-selected', 'Vegetables')" :class="{ 'ring-4 ring-primary': selectedCategory === 'Vegetables' }" style="animation-delay: 0.2s;">
                    <div class="w-14 h-14 lg:w-20 lg:h-20 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Vegetables.jpg') }}" 
                             alt="Fresh Vegetables" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-1 left-1 w-4 h-4 lg:w-6 lg:h-6 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-carrot text-white text-[10px] lg:text-xs"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-2 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-1 lg:mt-2">
                        <h3 class="font-semibold text-gray-800 text-[10px] lg:text-xs">Vegetables</h3>
                        <p class="text-[8px] lg:text-[10px] text-gray-600">Farm Fresh</p>
                    </div>
                </div>

                <!-- Dairy - UP -->
                <div class="category-circle group -mt-2 lg:-mt-4" x-data="{}" @click="$dispatch('category-selected', 'Dairy')" :class="{ 'ring-4 ring-primary': selectedCategory === 'Dairy' }" style="animation-delay: 0.4s;">
                    <div class="w-14 h-14 lg:w-20 lg:h-20 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Dairy.jpg') }}" 
                             alt="Dairy Products" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-1 left-1 w-4 h-4 lg:w-6 lg:h-6 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-cheese text-white text-[10px] lg:text-xs"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-2 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-1 lg:mt-2">
                        <h3 class="font-semibold text-gray-800 text-[10px] lg:text-xs">Dairy</h3>
                        <p class="text-[8px] lg:text-[10px] text-gray-600">Pure & Natural</p>
                    </div>
                </div>

                <!-- Meat - DOWN -->
                <div class="category-circle group" x-data="{}" @click="$dispatch('category-selected', 'Meat')" :class="{ 'ring-4 ring-primary': selectedCategory === 'Meat' }" style="animation-delay: 0.6s;">
                    <div class="w-14 h-14 lg:w-20 lg:h-20 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Meat.jpg') }}"  
                             alt="Fresh Meat" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-1 left-1 w-4 h-4 lg:w-6 lg:h-6 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-drumstick-bite text-white text-[10px] lg:text-xs"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-2 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-1 lg:mt-2">
                        <h3 class="font-semibold text-gray-800 text-[10px] lg:text-xs">Meat</h3>
                        <p class="text-[8px] lg:text-[10px] text-gray-600">Premium Quality</p>
                    </div>
                </div>

                <!-- Bakery - UP -->
                <div class="category-circle group -mt-2 lg:-mt-4" x-data="{}" @click="$dispatch('category-selected', 'Bakery')" :class="{ 'ring-4 ring-primary': selectedCategory === 'Bakery' }" style="animation-delay: 0.8s;">
                    <div class="w-14 h-14 lg:w-20 lg:h-20 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/Bakery.jpg') }}" 
                             alt="Fresh Bakery" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-1 left-1 w-4 h-4 lg:w-6 lg:h-6 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-bread-slice text-white text-[10px] lg:text-xs"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-2 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-1 lg:mt-2">
                        <h3 class="font-semibold text-gray-800 text-[10px] lg:text-xs">Bakery</h3>
                        <p class="text-[8px] lg:text-[10px] text-gray-600">Fresh Daily</p>
                    </div>
                </div>

                <!-- Seafood - DOWN -->
                <div class="category-circle group" x-data="{}" @click="$dispatch('category-selected', 'Seafood')" :class="{ 'ring-4 ring-primary': selectedCategory === 'Seafood' }" style="animation-delay: 1s;">
                    <div class="w-14 h-14 lg:w-20 lg:h-20 rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 relative">
                        <img src="{{ asset('Images/SeaFood.jpg') }}" 
                             alt="Fresh Seafood" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-1 left-1 w-4 h-4 lg:w-6 lg:h-6 main-bg rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-fish text-white text-[10px] lg:text-xs"></i>
                        </div>
                        <div class="absolute inset-0 rounded-full border-2 border-transparent hover:border-primary transition-colors duration-300"></div>
                    </div>
                    <div class="text-center mt-1 lg:mt-2">
                        <h3 class="font-semibold text-gray-800 text-[10px] lg:text-xs">Seafood</h3>
                        <p class="text-[8px] lg:text-[10px] text-gray-600">Ocean Fresh</p>
                    </div>
                </div>
            </div>
        </div>
</div>
</section> 