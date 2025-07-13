<section class="py-16 bg-white relative overflow-hidden">
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
        
        <!-- Pulsing dots -->
        <div class="absolute top-1/2 right-1/4 w-3 h-3 opacity-20 rounded-full animate-pulse-slow" style="background-color: var(--primary-color);"></div>
        <div class="absolute bottom-1/3 left-1/3 w-2 h-2 opacity-20 rounded-full animate-sparkle" style="background-color: var(--primary-color);"></div>
        <div class="absolute top-1/4 right-1/3 w-4 h-4 opacity-15 rounded-full animate-wave" style="background-color: var(--primary-color);"></div>
        
        <!-- Celebratory sparkles -->
        <div class="absolute top-10 left-1/4 w-2 h-2 opacity-30 rounded-full animate-party-sparkle" style="background-color: var(--primary-color);"></div>
        <div class="absolute top-20 right-1/3 w-3 h-3 opacity-25 rounded-full animate-party-sparkle" style="background-color: var(--primary-color); animation-delay: 0.5s;"></div>
        <div class="absolute bottom-10 right-1/4 w-2 h-2 opacity-30 rounded-full animate-party-sparkle" style="background-color: var(--primary-color); animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/3 w-3 h-3 opacity-25 rounded-full animate-party-sparkle" style="background-color: var(--primary-color); animation-delay: 1.5s;"></div>
    </div>
    
    <div class="max-w-6xl mx-auto px-4 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2 animate-celebrate-bounce">Today's Special Offers</h2>
            <p class="text-gray-600 animate-celebrate-bounce" style="animation-delay: 0.3s;">Limited time deals on premium products</p>
        </div>
        
        <!-- Staggered Layout for Special Offers -->
        <div class="flex justify-center items-start space-x-12">
            <!-- Left Card (50% lower) -->
            <div class="w-56 animate-celebrate-bounce mt-8" style="animation-delay: 0.6s;">
                <div class="card-hover rounded-lg overflow-hidden shadow-lg relative transform hover:scale-105 transition-all duration-300" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));">
                    <div class="absolute inset-0 opacity-100" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-50"></div>
                    
                    <div class="p-5 text-white relative z-10 text-center">
                        <div class="bg-white/20 backdrop-blur-sm text-white font-bold rounded-full h-11 w-11 flex items-center justify-center text-xs mx-auto mb-2 animate-pulse-slow">
                            15%
                        </div>
                        <h3 class="text-base font-bold mb-1">New Customer</h3>
                        <p class="text-white/80 text-xs mb-3">15% off your first order</p>
                        <button class="bg-white/20 backdrop-blur-sm text-white px-3 py-1.5 rounded-lg font-medium hover:bg-white/30 transition duration-300 text-xs">
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Middle Card -->
            <div class="w-56 animate-celebrate-bounce" style="animation-delay: 0.8s;">
                <div class="card-hover rounded-lg overflow-hidden shadow-lg relative transform hover:scale-105 transition-all duration-300" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <div class="absolute inset-0 opacity-100" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-50"></div>
                    
                    <div class="p-5 text-white relative z-10 text-center">
                        <div class="bg-white/20 backdrop-blur-sm text-white font-bold rounded-full h-11 w-11 flex items-center justify-center text-xs mx-auto mb-2 animate-pulse-slow">
                            20%
                        </div>
                        <h3 class="text-base font-bold mb-1">Weekend Special</h3>
                        <p class="text-white/80 text-xs mb-3">All organic fruits & vegetables</p>
                        <button class="bg-white/20 backdrop-blur-sm text-white px-3 py-1.5 rounded-lg font-medium hover:bg-white/30 transition duration-300 text-xs">
                            Shop Now
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Right Card (50% lower) -->
            <div class="w-56 animate-celebrate-bounce mt-8" style="animation-delay: 1s;">
                <div class="card-hover rounded-lg overflow-hidden shadow-lg relative transform hover:scale-105 transition-all duration-300" style="background: linear-gradient(135deg, var(--primary-light), var(--primary-color));">
                    <div class="absolute inset-0 opacity-100" style="background: linear-gradient(135deg, var(--primary-light), var(--primary-color));"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-50"></div>
                    
                    <div class="p-5 text-white relative z-10 text-center">
                        <div class="bg-white/20 backdrop-blur-sm text-white font-bold rounded-full h-11 w-11 flex items-center justify-center text-xs mx-auto mb-2 animate-pulse-slow">
                            FREE
                        </div>
                        <h3 class="text-base font-bold mb-1">Free Delivery</h3>
                        <p class="text-white/80 text-xs mb-3">On orders above $50</p>
                        <button class="bg-white/20 backdrop-blur-sm text-white px-3 py-1.5 rounded-lg font-medium hover:bg-white/30 transition duration-300 text-xs">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>