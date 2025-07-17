@extends('layouts.app')

@section('content')
<!-- Animated Help Hero -->
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
            <i class="fas fa-question-circle text-green-300 mr-2 animate-bounce"></i>
            <span class="text-white text-sm font-medium">Help Center</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-tight mb-2 animate-fadeInUp">How can we help you?</h1>
        <p class="text-white/90 text-base animate-fadeInUp" style="animation-delay:0.2s;">Find answers to common questions or contact our support team.</p>
    </div>
</section>
<!-- Light Green Info Section -->
<section class="bg-primary-light py-6 px-3 sm:py-8 sm:px-4 md:px-8 rounded-2xl shadow-md max-w-xs sm:max-w-md md:max-w-2xl mx-auto mt-[-2rem] mb-6 sm:mt-[-3rem] sm:mb-8 relative z-20 animate-fadeInUp">
    <div class="flex items-center gap-3 sm:gap-4">
        <i class="fas fa-info-circle text-primary text-2xl sm:text-3xl animate-bounce"></i>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">Need more help?</h2>
            <p class="text-gray-700 text-xs sm:text-sm">Contact us at <a href="mailto:support@tastycart.com" class="main-color underline">support@tastycart.com</a> or check the FAQs below.</p>
        </div>
    </div>
</section>
<!-- FAQ Section -->
<section class="max-w-2xl mx-auto px-4 pb-16 animate-fadeInUp">
    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2"><i class="fas fa-question text-primary"></i> Frequently Asked Questions</h2>
    <div class="space-y-6">
        <div class="bg-white rounded-xl shadow p-4 flex gap-3 items-start animate-fadeInUp">
            <i class="fas fa-truck text-primary text-2xl mt-1"></i>
            <div>
                <h3 class="font-semibold text-gray-800 mb-1">How fast is delivery?</h3>
                <p class="text-gray-600 text-sm">Most orders are delivered within 1-2 business days. Same-day delivery is available in select areas.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 flex gap-3 items-start animate-fadeInUp" style="animation-delay:0.1s;">
            <i class="fas fa-undo-alt text-primary text-2xl mt-1"></i>
            <div>
                <h3 class="font-semibold text-gray-800 mb-1">What is your return policy?</h3>
                <p class="text-gray-600 text-sm">You can return eligible items within 7 days of delivery for a full refund or exchange. See our <a href="/returns" class="main-color underline">Returns Policy</a> for details.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 flex gap-3 items-start animate-fadeInUp" style="animation-delay:0.2s;">
            <i class="fas fa-credit-card text-primary text-2xl mt-1"></i>
            <div>
                <h3 class="font-semibold text-gray-800 mb-1">What payment methods do you accept?</h3>
                <p class="text-gray-600 text-sm">We accept all major credit/debit cards, PayPal, and mobile payments.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 flex gap-3 items-start animate-fadeInUp" style="animation-delay:0.3s;">
            <i class="fas fa-user-shield text-primary text-2xl mt-1"></i>
            <div>
                <h3 class="font-semibold text-gray-800 mb-1">How is my data protected?</h3>
                <p class="text-gray-600 text-sm">We use industry-standard security measures to protect your data. Read our <a href="/privacy-policy" class="main-color underline">Privacy Policy</a> for more info.</p>
            </div>
        </div>
    </div>
</section>
@endsection 