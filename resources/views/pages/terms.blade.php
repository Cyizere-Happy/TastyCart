@extends('layouts.app')

@section('content')
<!-- Animated Terms Hero -->
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
            <i class="fas fa-file-contract text-green-300 mr-2 animate-bounce"></i>
            <span class="text-white text-sm font-medium">Terms of Service</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-tight mb-2 animate-fadeInUp">Our Agreement With You</h1>
        <p class="text-white/90 text-base animate-fadeInUp" style="animation-delay:0.2s;">Please read these terms carefully before using TastyCart.</p>
    </div>
</section>
<!-- Light Green Info Section -->
<section class="bg-primary-light py-6 px-3 sm:py-8 sm:px-4 md:px-8 rounded-2xl shadow-md max-w-xs sm:max-w-md md:max-w-2xl mx-auto mt-[-2rem] mb-6 sm:mt-[-3rem] sm:mb-8 relative z-20 animate-fadeInUp">
    <div class="flex items-center gap-3 sm:gap-4">
        <i class="fas fa-file-contract text-primary text-2xl sm:text-3xl animate-bounce"></i>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">Transparency & Trust</h2>
            <p class="text-gray-700 text-xs sm:text-sm">By using TastyCart, you agree to our terms. We strive to be fair, clear, and transparent in all our dealings.</p>
        </div>
    </div>
</section>
<!-- Terms Content -->
<section class="max-w-2xl mx-auto px-4 pb-16 animate-fadeInUp">
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-6 flex items-center gap-2"><i class="fas fa-handshake text-primary"></i> 1. Acceptance of Terms</h2>
    <p class="text-gray-700 mb-4 text-sm">By accessing or using TastyCart, you agree to be bound by these Terms of Service and all applicable laws and regulations.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-tasks text-primary"></i> 2. Use of Service</h2>
    <p class="text-gray-700 mb-4 text-sm">You may use our services only for lawful purposes. You agree not to misuse the site or engage in any activity that could harm TastyCart or its users.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-user-lock text-primary"></i> 3. Accounts</h2>
    <p class="text-gray-700 mb-4 text-sm">You are responsible for maintaining the confidentiality of your account and password. Notify us immediately of any unauthorized use.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-credit-card text-primary"></i> 4. Orders & Payment</h2>
    <p class="text-gray-700 mb-4 text-sm">All orders are subject to acceptance and availability. Payment must be made in full before delivery.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-copyright text-primary"></i> 5. Intellectual Property</h2>
    <p class="text-gray-700 mb-4 text-sm">All content on TastyCart is the property of TastyCart or its licensors. You may not use, copy, or distribute any content without permission.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-exclamation-triangle text-primary"></i> 6. Limitation of Liability</h2>
    <p class="text-gray-700 mb-4 text-sm">TastyCart is not liable for any indirect, incidental, or consequential damages arising from your use of the site.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-sync-alt text-primary"></i> 7. Changes to Terms</h2>
    <p class="text-gray-700 mb-4 text-sm">We may update these terms at any time. Continued use of the site means you accept the new terms.</p>
    <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8 flex items-center gap-2"><i class="fas fa-envelope text-primary"></i> 8. Contact Us</h2>
    <p class="text-gray-700 mb-4 text-sm">If you have any questions about these Terms, please contact us at support@tastycart.com.</p>
</section>
@endsection 