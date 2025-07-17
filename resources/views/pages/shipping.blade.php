@extends('layouts.app')

@section('content')
<!-- Animated Shipping Hero -->
<section class="relative pt-24 pb-16 min-h-[40vh] hero-bg overflow-hidden flex items-center">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 opacity-10 rounded-full animate-float" style="background: linear-gradient(135deg, #175484 60%, #009f6b 100%);"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 opacity-10 rounded-full animate-bounce" style="background: linear-gradient(135deg, #009f6b 60%, #175484 100%);"></div>
        <svg class="absolute top-0 right-0 w-40 h-40 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
            <path d="M10,50 Q25,25 50,50 T90,50" stroke="#fff" stroke-width="2" fill="none" stroke-dasharray="5,5"/>
        </svg>
    </div>
    <div class="max-w-3xl mx-auto px-6 relative z-10 text-center">
        <div class="inline-flex items-center bg-white/20 backdrop-blur-sm border border-white/40 rounded-md px-4 py-2 mb-6 shadow-lg animate-fadeInUp">
            <i class="fas fa-shipping-fast text-green-300 mr-2 animate-bounce"></i>
            <span class="text-white text-sm font-medium">Shipping Policy</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-tight mb-2 animate-fadeInUp">Fast, Reliable Delivery</h1>
        <p class="text-white/90 text-base animate-fadeInUp" style="animation-delay:0.2s;">We deliver fresh products to your door—quickly, safely, and with care.</p>
    </div>
</section>
<!-- Light Green Info Section -->
<section class="bg-primary-light py-6 px-3 sm:py-8 sm:px-4 md:px-8 rounded-2xl shadow-md max-w-xs sm:max-w-md md:max-w-2xl mx-auto mt-[-2rem] mb-6 sm:mt-[-3rem] sm:mb-8 relative z-20 animate-fadeInUp">
    <div class="flex items-center gap-3 sm:gap-4">
        <i class="fas fa-shipping-fast text-primary text-2xl sm:text-3xl animate-bounce"></i>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">Delivery You Can Trust</h2>
            <p class="text-gray-700 text-xs sm:text-sm">We offer fast, eco-friendly delivery to your doorstep. See details below.</p>
        </div>
    </div>
</section>
<!-- Shipping Content -->
<section class="max-w-2xl mx-auto px-4 pb-16 animate-fadeInUp">
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-6 flex items-center gap-2"><i class="fas fa-map-marker-alt text-primary"></i> 1. Delivery Areas</h2>
    <p class="text-gray-700 mb-4 text-sm">We deliver to most locations within the city and surrounding areas. Enter your zip code at checkout to confirm availability.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-clock text-primary"></i> 2. Delivery Times</h2>
    <p class="text-gray-700 mb-4 text-sm">Orders are delivered within 1-2 business days. Same-day delivery is available for select areas and products.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-dollar-sign text-primary"></i> 3. Shipping Fees</h2>
    <p class="text-gray-700 mb-4 text-sm">Shipping is free for orders above $50. For orders below $50, a flat delivery fee applies.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-truck text-primary"></i> 4. Order Tracking</h2>
    <p class="text-gray-700 mb-4 text-sm">You will receive a tracking link by email or SMS once your order is dispatched.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-exclamation-circle text-primary"></i> 5. Delivery Issues</h2>
    <p class="text-gray-700 mb-4 text-sm">If you experience any issues with your delivery, contact us at support@tastycart.com and we’ll resolve it promptly.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-envelope text-primary"></i> 6. Contact Us</h2>
    <p class="text-gray-700 mb-4 text-sm">For any questions about shipping, email us at support@tastycart.com.</p>
</section>
@endsection 