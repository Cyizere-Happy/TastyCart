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