@extends('layouts.app')

@section('content')
<!-- Animated Privacy Policy Hero -->
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
            <i class="fas fa-user-shield text-green-300 mr-2 animate-bounce"></i>
            <span class="text-white text-sm font-medium">Privacy Policy</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-tight mb-2 animate-fadeInUp">Your Privacy Matters</h1>
        <p class="text-white/90 text-base animate-fadeInUp" style="animation-delay:0.2s;">We are committed to protecting your personal information and your right to privacy.</p>
    </div>
</section>
<!-- Light Green Info Section -->
<section class="bg-primary-light py-6 px-3 sm:py-8 sm:px-4 md:px-8 rounded-2xl shadow-md max-w-xs sm:max-w-md md:max-w-2xl mx-auto mt-[-2rem] mb-6 sm:mt-[-3rem] sm:mb-8 relative z-20 animate-fadeInUp">
    <div class="flex items-center gap-3 sm:gap-4">
        <i class="fas fa-user-shield text-primary text-2xl sm:text-3xl animate-bounce"></i>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">Your Data, Your Control</h2>
            <p class="text-gray-700 text-xs sm:text-sm">We never sell your data. You can access, update, or delete your information at any time.</p>
        </div>
    </div>
</section>
<!-- Policy Content -->
<section class="max-w-2xl mx-auto px-4 pb-16 animate-fadeInUp">
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-6 flex items-center gap-2"><i class="fas fa-user-shield text-primary"></i> 1. Information We Collect</h2>
    <p class="text-gray-700 mb-4 text-sm">We collect information you provide directly to us, such as when you create an account, place an order, or contact support. This may include your name, email, phone, address, and payment details.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-cogs text-primary"></i> 2. How We Use Your Information</h2>
    <p class="text-gray-700 mb-4 text-sm">We use your information to process orders, provide customer support, improve our services, and send important updates. We do not sell or share your data with third parties for marketing.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-cookie-bite text-primary"></i> 3. Cookies & Tracking</h2>
    <p class="text-gray-700 mb-4 text-sm">We use cookies to enhance your experience and analyze site usage. You can control cookies through your browser settings.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-lock text-primary"></i> 4. Data Security</h2>
    <p class="text-gray-700 mb-4 text-sm">We implement industry-standard security measures to protect your data. However, no method is 100% secure, so we cannot guarantee absolute security.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-user-check text-primary"></i> 5. Your Rights</h2>
    <p class="text-gray-700 mb-4 text-sm">You have the right to access, update, or delete your personal information. Contact us at support@tastycart.com for any requests.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-sync-alt text-primary"></i> 6. Changes to This Policy</h2>
    <p class="text-gray-700 mb-4 text-sm">We may update this policy from time to time. We will notify you of any significant changes by posting the new policy on this page.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-envelope text-primary"></i> 7. Contact Us</h2>
    <p class="text-gray-700 mb-4 text-sm">If you have any questions about this Privacy Policy, please contact us at support@tastycart.com.</p>
</section>
@endsection 