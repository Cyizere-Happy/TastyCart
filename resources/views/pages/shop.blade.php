@extends('layouts.app')

@section('content')
<!-- Animated Shop Header -->
<section class="relative pt-28 pb-16 bg-gradient-to-b from-blue-50 to-white overflow-hidden">
    <!-- Floating Elements & SVGs -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute top-10 left-10 w-24 h-24 opacity-10 rounded-full animate-float" style="background-color: var(--primary-color);"></div>
        <div class="absolute bottom-20 right-20 w-16 h-16 opacity-10 rounded-full animate-bounce" style="background-color: var(--primary-color);"></div>
        <svg class="absolute top-0 right-0 w-40 h-40 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
            <path d="M10,50 Q25,25 50,50 T90,50" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="5,5" class="text-primary">
                <animate attributeName="stroke-dashoffset" values="0;20" dur="3s" repeatCount="indefinite"/>
            </path>
        </svg>
    </div>
    <div class="max-w-6xl mx-auto px-4 relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="flex-1 text-center md:text-left">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-2 animate-fadeInUp">Shop</h1>
            <p class="text-gray-500 text-lg animate-fadeInUp" style="animation-delay:0.2s;">
                <span class="inline lg:hidden">Discover fresh, premium products delivered to your door</span>
                <span class="hidden lg:inline">Discover fresh, premium groceries, handpicked produce, and everyday essentials delivered to your door with care and speed. Enjoy a seamless shopping experience and the best of TastyCart, every day!</span>
            </p>
        </div>
        <div class="flex-1 flex justify-center md:justify-end mt-8 md:mt-0 md:mr-8 lg:mr-32">
            <img src="{{ asset('Images/grocery-bag.png') }}" alt="Shop header" class="w-40 h-40 object-cover animate-fadeInUp" style="animation-delay:0.3s;">
        </div>
    </div>
</section>

<!-- Filters & Search -->


<!-- Product Grid -->
<section class="py-12 bg-gray-50 min-h-[60vh]">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 animate-fadeInUp">
            <!-- Example products, replace or loop as needed -->
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
            <!-- Add more x-product-card as needed -->
        </div>
    </div>
</section>

<!-- Subtle Animated Background for Shop Page -->
<div class="pointer-events-none fixed inset-0 z-0">
    <div class="absolute left-1/3 top-1/2 w-32 h-32 bg-[#009f6b] opacity-5 rounded-full animate-float"></div>
    <div class="absolute right-1/4 bottom-10 w-24 h-24 bg-[#175484] opacity-5 rounded-full animate-bounce"></div>
</div>

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