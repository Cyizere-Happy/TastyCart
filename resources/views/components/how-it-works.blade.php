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