@extends('layouts.app')

@section('content')
<!-- Animated Shop Header -->
<section class="relative pt-24 pb-16 min-h-[60vh] hero-bg overflow-hidden flex items-center">
    <!-- Animated Background Elements (behind content) -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 opacity-10 rounded-full animate-float" style="background: linear-gradient(135deg, #175484 60%, #009f6b 100%);"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 opacity-10 rounded-full animate-bounce" style="background: linear-gradient(135deg, #009f6b 60%, #175484 100%);"></div>
        <svg class="absolute top-0 right-0 w-40 h-40 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
            <path d="M10,50 Q25,25 50,50 T90,50" stroke="#fff" stroke-width="2" fill="none" stroke-dasharray="5,5"/>
        </svg>
    </div>
    <div class="max-w-6xl mx-auto px-4 relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="flex-1 text-center md:text-left">
            <h1 class="text-4xl font-extrabold text-white mb-2 animate-fadeInUp">Shop</h1>
            <p class="text-white/90 text-lg animate-fadeInUp" style="animation-delay:0.2s;">
                <span class="inline lg:hidden">Discover fresh, premium products delivered to your door</span>
                <span class="hidden lg:inline">Discover fresh, premium groceries, handpicked produce, and everyday essentials delivered to your door with care and speed. Enjoy a seamless shopping experience and the best of TastyCart, every day!</span>
            </p>
        </div>
        <div class="flex-1 flex justify-center md:justify-end mt-8 md:mt-0 md:mr-8 lg:mr-24">
            <img src="{{ asset('Images/grocery-bag.png') }}" alt="Shop header" class="w-32 h-32 lg:w-44 lg:h-44 object-cover animate-fadeInUp" style="animation-delay:0.3s;">
        </div>
    </div>
</section>
<!-- Light Green Info Section -->
<section class="bg-primary-light py-6 px-3 sm:py-8 sm:px-4 md:px-8 rounded-2xl shadow-md max-w-xs sm:max-w-md md:max-w-4xl mx-auto mt-[-2rem] mb-6 sm:mt-[-3rem] sm:mb-8 relative z-20 animate-fadeInUp">
    <div class="flex flex-col md:flex-row items-center gap-3 sm:gap-4 md:gap-8">
        <i class="fas fa-leaf text-primary text-2xl sm:text-3xl md:text-4xl animate-bounce"></i>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">Why Shop With Us?</h2>
            <p class="text-gray-700 text-xs sm:text-sm">Enjoy premium quality, fast delivery, and a seamless shopping experience—every time you visit TastyCart.</p>
        </div>
    </div>
</section>

<!-- Filters & Search -->
<!-- Bestsellers Section -->
<section class="max-w-6xl mx-auto px-4 mb-8 mt-16">
    <div class="flex items-center mb-3">
        <h2 class="text-lg font-semibold text-gray-800 tracking-tight">Bestsellers</h2>
        <span class="ml-2 h-1 w-8 rounded-full bg-primary block"></span>
    </div>
    <div class="flex gap-4 overflow-x-auto pb-2">
        <div class="min-w-[180px] w-48 p-2 bg-white rounded-xl shadow-sm flex-shrink-0">
            <x-product-card 
                image="{{ asset('Images/Avocado.jpg') }}"
                title="Fresh Avocado"
                category="Organic Fruits"
                price="4.99"
                originalPrice="6.99"
                rating="5"
                reviews="128"
                badge="Bestseller"
                badgeColor="green"
                :compact="true"
            />
        </div>
        <div class="min-w-[180px] w-48 p-2 bg-white rounded-xl shadow-sm flex-shrink-0">
            <x-product-card 
                image="{{ asset('Images/Strawberry.jpg') }}"
                title="Fresh Strawberries"
                category="Fresh Berries"
                price="5.99"
                originalPrice="7.99"
                rating="5"
                reviews="156"
                badge="Bestseller"
                badgeColor="pink"
                :compact="true"
            />
        </div>
        <div class="min-w-[180px] w-48 p-2 bg-white rounded-xl shadow-sm flex-shrink-0">
            <x-product-card 
                image="{{ asset('Images/Salmon.jpg') }}"
                title="Fresh Salmon"
                category="Fresh Seafood"
                price="18.99"
                rating="5"
                reviews="89"
                badge="Bestseller"
                badgeColor="blue"
                :compact="true"
            />
        </div>
        <div class="min-w-[180px] w-48 p-2 bg-white rounded-xl shadow-sm flex-shrink-0">
            <x-product-card 
                image="{{ asset('Images/Bakery.jpg') }}"
                title="Artisan Bread"
                category="Bakery"
                price="3.99"
                rating="4.5"
                reviews="67"
                badge="Bestseller"
                badgeColor="yellow"
                :compact="true"
            />
        </div>
    </div>
</section>

<!-- Shop by Category Filter (moved here) -->
<div x-data="{
    selectedCategory: 'All',
    quickViewOpen: false,
    quickViewProduct: {},
    openQuickView(e) {
        this.quickViewProduct = e.detail;
        this.quickViewOpen = true;
    },
    rateModalOpen: false,
    rateProduct: {},
    userRating: 0,
    ratingSubmitted: false,
    openRateModal(e) {
        this.rateProduct = e.detail;
        this.userRating = 0;
        this.ratingSubmitted = false;
        this.rateModalOpen = true;
    }
}" @quick-view.window="openQuickView($event)" @rate-product.window="openRateModal($event)">
    <x-shop-category-section @category-selected.window="selectedCategory = $event.detail" />

    <!-- Filtered by section -->
    <div class="max-w-6xl mx-auto px-4 mt-8 mb-6">
        <template x-if="selectedCategory !== 'All'">
            <div class="inline-flex items-center gap-2 bg-primary-light text-primary px-4 py-1 rounded-full text-sm font-medium">
                <span>Filtered by:</span>
                <span class="font-semibold capitalize" x-text="selectedCategory"></span>
                <button @click="selectedCategory = 'All'" class="ml-2 text-primary hover:text-[#008a5c] focus:outline-none" title="Clear filter">&times;</button>
            </div>
        </template>
        <template x-if="selectedCategory === 'All'">
            <div class="inline-flex items-center gap-2 bg-gray-100 text-gray-600 px-4 py-1 rounded-full text-sm font-medium">
                <span>All Products</span>
            </div>
        </template>
    </div>

    <!-- Product Grid Heading -->
    <div class="max-w-6xl mx-auto px-4 mb-4 animate-fadeInUp">
        <div class="flex items-center mb-2">
            <h2 class="text-2xl font-extrabold text-gray-800 tracking-tight">All Products</h2>
            <span class="ml-3 h-2 w-10 rounded-full bg-primary block"></span>
        </div>
    </div>

    <!-- Product Grid -->
    <section class="py-12 bg-gray-50 min-h-[60vh]">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 animate-fadeInUp">
                <!-- Example products, replace or loop as needed -->
                <div x-show="selectedCategory === 'All' || selectedCategory === 'Fruits'">
                    <x-product-card 
                        data-category="Fruits"
                        image="{{ asset('Images/Avocado.jpg') }}"
                        title="Fresh Avocado"
                        category="Organic Fruits"
                        price="4.99"
                        originalPrice="6.99"
                        rating="5"
                        reviews="128"
                        badge="Fresh"
                        badgeColor="green"
                        description="A creamy, nutrient-dense fruit rich in healthy fats, fiber, and potassium."
                        nutrition="Protein: 3g, Fiber: 7g, Vitamin E, Potassium"
                    />
                </div>
                <div x-show="selectedCategory === 'All' || selectedCategory === 'Vegetables'">
                    <x-product-card 
                        data-category="Vegetables"
                        image="{{ asset('Images/Tomatoes.jpg') }}"
                        title="Organic Tomatoes"
                        category="Fresh Vegetables"
                        price="3.49"
                        rating="4.5"
                        reviews="95"
                        badge="Popular"
                        badgeColor="red"
                        description="Juicy, antioxidant-rich tomatoes perfect for salads and sauces."
                        nutrition="Vitamin C, Lycopene, Fiber"
                    />
                </div>
                <div x-show="selectedCategory === 'All' || selectedCategory === 'Fruits'">
                    <x-product-card 
                        data-category="Fruits"
                        image="{{ asset('Images/Strawberry.jpg') }}"
                        title="Fresh Strawberries"
                        category="Fresh Berries"
                        price="5.99"
                        originalPrice="7.99"
                        rating="5"
                        reviews="156"
                        badge="New"
                        badgeColor="pink"
                        description="Sweet, vitamin-rich berries loaded with antioxidants."
                        nutrition="Vitamin C, Fiber, Manganese"
                    />
                </div>
                <div x-show="selectedCategory === 'All' || selectedCategory === 'Seafood'">
                    <x-product-card 
                        data-category="Seafood"
                        image="{{ asset('Images/Salmon.jpg') }}"
                        title="Fresh Salmon"
                        category="Fresh Seafood"
                        price="18.99"
                        rating="5"
                        reviews="89"
                        badge="Premium"
                        badgeColor="blue"
                        description="Omega-3 rich salmon, great for heart and brain health."
                        nutrition="Protein: 20g, Omega-3, Vitamin D"
                    />
                </div>
                <!-- More product cards with description/nutrition as needed -->
                <div x-show="selectedCategory === 'All' || selectedCategory === 'Bakery'">
                    <x-product-card 
                        data-category="Bakery"
                        image="{{ asset('Images/Bakery.jpg') }}"
                        title="Artisan Bread"
                        category="Bakery"
                        price="3.99"
                        rating="4.5"
                        reviews="67"
                        badge="Fresh"
                        badgeColor="yellow"
                        description="Handmade bread with a crispy crust and soft interior."
                        nutrition="Protein: 6g, Fiber: 2g, B Vitamins"
                    />
                </div>
                <div x-show="selectedCategory === 'All' || selectedCategory === 'Dairy'">
                    <x-product-card 
                        data-category="Dairy"
                        image="{{ asset('Images/Dairy.jpg') }}"
                        title="Organic Milk"
                        category="Dairy"
                        price="2.49"
                        rating="4"
                        reviews="34"
                        badge="New"
                        badgeColor="blue"
                        description="Rich, creamy milk from grass-fed cows."
                        nutrition="Protein: 8g, Calcium, Vitamin D, B12"
                    />
                </div>
                <div x-show="selectedCategory === 'All' || selectedCategory === 'Meat'">
                    <x-product-card 
                        data-category="Meat"
                        image="{{ asset('Images/Meat.jpg') }}"
                        title="Grass-fed Beef"
                        category="Meat"
                        price="12.99"
                        rating="5"
                        reviews="52"
                        badge="Premium"
                        badgeColor="red"
                        description="Lean, flavorful beef high in protein and iron."
                        nutrition="Protein: 22g, Iron, Zinc, B Vitamins"
                    />
                </div>
                <div x-show="selectedCategory === 'All' || selectedCategory === 'Vegetables'">
                    <x-product-card 
                        data-category="Vegetables"
                        image="{{ asset('Images/Vegetables.jpg') }}"
                        title="Farm Carrots"
                        category="Fresh Vegetables"
                        price="2.99"
                        rating="4.5"
                        reviews="41"
                        badge="Popular"
                        badgeColor="orange"
                        description="Crunchy, sweet carrots packed with beta-carotene."
                        nutrition="Vitamin A, Fiber, Potassium"
                    />
                </div>
            </div>
        </div>
    </section>
    <!-- Quick View Modal -->
    <div x-show="quickViewOpen" x-transition.opacity class="fixed inset-0 z-50 flex items-center justify-center bg-black/40" @click.self="quickViewOpen = false">
        <div class="bg-white rounded-2xl shadow-xl max-w-md w-full p-6 relative">
            <button @click="quickViewOpen = false" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 transition p-1">
                <i class="fas fa-times text-lg"></i>
            </button>
            <div class="flex flex-col items-center">
                <img :src="quickViewProduct.image" :alt="quickViewProduct.title" class="w-32 h-32 object-cover rounded-xl mb-4">
                <h3 class="text-xl font-bold text-gray-800 mb-1" x-text="quickViewProduct.title"></h3>
                <div class="text-xs text-gray-500 mb-2" x-text="quickViewProduct.category"></div>
                <div class="text-primary font-bold text-lg mb-2" x-text="'$' + quickViewProduct.price"></div>
                <div class="text-gray-700 text-sm mb-3" x-text="quickViewProduct.description"></div>
                <div class="bg-primary-light text-primary text-xs rounded px-3 py-2 w-full text-left" x-show="quickViewProduct.nutrition">
                    <span class="font-semibold">Nutrition/Benefits:</span>
                    <span class="ml-1" x-text="quickViewProduct.nutrition"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Rate Product Modal -->
    <div x-show="rateModalOpen" x-transition.opacity class="fixed inset-0 z-50 flex items-center justify-center bg-black/40" @click.self="rateModalOpen = false">
        <div class="bg-white rounded-2xl shadow-xl max-w-xs w-full p-6 relative">
            <button @click="rateModalOpen = false" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 transition p-1">
                <i class="fas fa-times text-lg"></i>
            </button>
            <template x-if="!ratingSubmitted">
                <div class="flex flex-col items-center">
                    <img :src="rateProduct.image" :alt="rateProduct.title" class="w-20 h-20 object-cover rounded-xl mb-3">
                    <h3 class="text-lg font-bold text-gray-800 mb-1" x-text="rateProduct.title"></h3>
                    <div class="text-xs text-gray-500 mb-3" x-text="rateProduct.category"></div>
                    <div class="flex items-center mb-4">
                        <template x-for="i in 5">
                            <button type="button" @click="userRating = i" :key="i" class="focus:outline-none">
                                <i :class="userRating >= i ? 'fas' : 'far'" class="fa-star text-2xl mx-1 text-yellow-400 transition"></i>
                            </button>
                        </template>
                    </div>
                    <button @click="ratingSubmitted = true" :disabled="userRating === 0" class="btn-primary px-4 py-2 rounded-lg text-sm font-medium disabled:opacity-50">Submit Rating</button>
                </div>
            </template>
            <template x-if="ratingSubmitted">
                <div class="flex flex-col items-center justify-center min-h-[120px]">
                    <i class="fas fa-heart text-3xl text-primary mb-2"></i>
                    <div class="text-primary font-bold mb-1">Thank you for rating!</div>
                    <button @click="rateModalOpen = false" class="mt-2 text-xs text-gray-500 hover:text-primary">Close</button>
                </div>
            </template>
        </div>
    </div>
</div>

<!-- Special Offers Banner -->
<section class="max-w-6xl mx-auto px-4 mb-8">
    <div class="rounded-2xl bg-gradient-to-r from-[#009f6b] to-[#175484] text-white flex flex-col md:flex-row items-center justify-between px-8 py-6 shadow-lg">
        <div class="flex-1">
            <h2 class="text-2xl font-bold mb-1">Special Offer: 20% Off All Fresh Produce!</h2>
            <p class="text-white/90 mb-2">Use code <span class="font-semibold bg-white/20 px-2 py-1 rounded">FRESH20</span> at checkout. Limited time only.</p>
        </div>
        <div class="flex-1 flex justify-center md:justify-end mt-4 md:mt-0">
            <i class="fas fa-percentage text-4xl md:text-5xl opacity-80"></i>
        </div>
    </div>
</section>

<!-- Shop Features Row -->
<section class="max-w-6xl mx-auto px-4 py-8 flex flex-wrap justify-center gap-6">
    <div class="flex flex-col items-center bg-white rounded-xl shadow-sm px-6 py-4 w-40">
        <i class="fas fa-truck text-primary text-2xl mb-2"></i>
        <span class="font-semibold text-gray-800 text-sm mb-1">Free Delivery</span>
        <span class="text-xs text-gray-500 text-center">On orders over $25</span>
    </div>
    <div class="flex flex-col items-center bg-white rounded-xl shadow-sm px-6 py-4 w-40">
        <i class="fas fa-leaf text-primary text-2xl mb-2"></i>
        <span class="font-semibold text-gray-800 text-sm mb-1">100% Fresh</span>
        <span class="text-xs text-gray-500 text-center">Handpicked produce</span>
    </div>
    <div class="flex flex-col items-center bg-white rounded-xl shadow-sm px-6 py-4 w-40">
        <i class="fas fa-lock text-primary text-2xl mb-2"></i>
        <span class="font-semibold text-gray-800 text-sm mb-1">Secure Payment</span>
        <span class="text-xs text-gray-500 text-center">SSL encrypted checkout</span>
    </div>
    <div class="flex flex-col items-center bg-white rounded-xl shadow-sm px-6 py-4 w-40">
        <i class="fas fa-headset text-primary text-2xl mb-2"></i>
        <span class="font-semibold text-gray-800 text-sm mb-1">24/7 Support</span>
        <span class="text-xs text-gray-500 text-center">We’re here to help</span>
    </div>
</section>

@endsection

@push('styles')
<style>
    .category-btn {
        @apply flex items-center gap-1 px-5 py-2 rounded-full border border-gray-200 bg-white text-gray-700 text-sm font-medium shadow-sm transition transform hover:bg-[#009f6b] hover:text-white hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#009f6b];
    }
    .category-btn.active {
        @apply bg-[#009f6b] text-white shadow-lg border-transparent;
        box-shadow: 0 2px 12px 0 rgba(0,159,107,0.10);
        transform: scale(1.08);
    }
    .search-bar {
        box-shadow: 0 1px 4px 0 rgba(0,0,0,0.03);
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-12px); }
    }
    .animate-bounce {
        animation: bounce 4s infinite alternate;
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-18px); }
    }
    .animate-rotate-slow {
        animation: rotate 18s linear infinite;
    }
    @keyframes rotate {
        100% { transform: rotate(360deg); }
    }
    .animate-fadeInUp {
        animation: fadeInUp 1s cubic-bezier(.39,.575,.565,1) both;
    }
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: none; }
    }
</style>
@endpush 