@extends('layouts.app')

@section('content')
<!-- Animated Returns Hero -->
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
            <i class="fas fa-undo-alt text-green-300 mr-2 animate-bounce"></i>
            <span class="text-white text-sm font-medium">Returns & Refunds</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-tight mb-2 animate-fadeInUp">Easy Returns, Hassle-Free Refunds</h1>
        <p class="text-white/90 text-base animate-fadeInUp" style="animation-delay:0.2s;">We want you to love your order. If you’re not satisfied, here’s how we make it right.</p>
    </div>
</section>
<!-- Light Green Info Section -->
<section class="bg-primary-light py-6 px-3 sm:py-8 sm:px-4 md:px-8 rounded-2xl shadow-md max-w-xs sm:max-w-md md:max-w-2xl mx-auto mt-[-2rem] mb-6 sm:mt-[-3rem] sm:mb-8 relative z-20 animate-fadeInUp">
    <div class="flex items-center gap-3 sm:gap-4">
        <i class="fas fa-undo-alt text-primary text-2xl sm:text-3xl animate-bounce"></i>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">Satisfaction Guaranteed</h2>
            <p class="text-gray-700 text-xs sm:text-sm">If you’re not happy with your order, we’ll make it right—no questions asked.</p>
        </div>
    </div>
</section>
<!-- Returns Content -->
<section class="max-w-2xl mx-auto px-4 pb-16 animate-fadeInUp">
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-6 flex items-center gap-2"><i class="fas fa-box-open text-primary"></i> 1. Return Policy</h2>
    <p class="text-gray-700 mb-4 text-sm">If you are not satisfied with your purchase, you may return eligible items within 7 days of delivery for a full refund or exchange. Items must be unused and in original packaging.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-paper-plane text-primary"></i> 2. How to Initiate a Return</h2>
    <p class="text-gray-700 mb-4 text-sm">Contact our support team at support@tastycart.com with your order number and reason for return. We’ll provide instructions and a return label if eligible.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-money-bill-wave text-primary"></i> 3. Refunds</h2>
    <p class="text-gray-700 mb-4 text-sm">Refunds are processed within 3-5 business days after we receive your returned item. Refunds will be issued to your original payment method.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-ban text-primary"></i> 4. Non-Returnable Items</h2>
    <p class="text-gray-700 mb-4 text-sm">Perishable goods, opened items, and gift cards are not eligible for return. Please contact us if you have questions about a specific item.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-exchange-alt text-primary"></i> 5. Exchanges</h2>
    <p class="text-gray-700 mb-4 text-sm">If you received a damaged or incorrect item, we’ll send a replacement at no extra cost. Contact us within 48 hours of delivery.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-envelope text-primary"></i> 6. Contact Us</h2>
    <p class="text-gray-700 mb-4 text-sm">For any questions or concerns about returns and refunds, email us at support@tastycart.com.</p>
</section>
@endsection 