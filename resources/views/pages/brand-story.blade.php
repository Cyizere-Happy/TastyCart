@extends('layouts.app')

@section('content')
<!-- Animated Brand Story Hero -->
<section class="relative pt-24 pb-16 min-h-[60vh] hero-bg overflow-hidden flex items-center">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 opacity-10 rounded-full animate-float" style="background: linear-gradient(135deg, #175484 60%, #009f6b 100%);"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 opacity-10 rounded-full animate-bounce" style="background: linear-gradient(135deg, #009f6b 60%, #175484 100%);"></div>
        <svg class="absolute top-0 right-0 w-40 h-40 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
            <path d="M10,50 Q25,25 50,50 T90,50" stroke="#fff" stroke-width="2" fill="none" stroke-dasharray="5,5"/>
        </svg>
    </div>
    <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
        <div class="inline-flex items-center bg-white/20 backdrop-blur-sm border border-white/40 rounded-md px-4 py-2 mb-8 shadow-lg animate-fadeInUp">
            <i class="fas fa-leaf text-green-300 mr-2 animate-bounce"></i>
            <span class="text-white text-sm font-medium">Our Journey</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4 animate-fadeInUp">The TastyCart Brand Story</h1>
        <p class="text-lg text-white/90 mb-6 animate-fadeInUp" style="animation-delay:0.2s;">From a passion for fresh food to a mission for a healthier world, discover how TastyCart became your trusted source for premium groceries and gourmet meals.</p>
    </div>
</section>
<!-- Light Green Info Section -->
<section class="bg-primary-light py-6 px-3 sm:py-8 sm:px-4 md:px-8 rounded-2xl shadow-md max-w-xs sm:max-w-md md:max-w-4xl mx-auto mt-[-2rem] mb-6 sm:mt-[-3rem] sm:mb-8 relative z-20 animate-fadeInUp">
    <div class="flex flex-col md:flex-row items-center gap-3 sm:gap-4 md:gap-8">
        <i class="fas fa-leaf text-primary text-2xl sm:text-3xl md:text-4xl animate-bounce"></i>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">Our Promise</h2>
            <p class="text-gray-700 text-xs sm:text-sm">We’re committed to freshness, sustainability, and a better food experience for you and your family.</p>
        </div>
    </div>
</section>

<!-- Mission & Values Section -->
<section class="py-16 bg-white relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-20 left-10 w-20 h-20 bg-[#175484] opacity-5 rounded-full animate-float"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-[#175484] opacity-5 rounded-full animate-float" style="animation-delay: 2s;"></div>
        <svg class="absolute top-10 right-10 w-32 h-32 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
            <path d="M10,50 Q25,25 50,50 T90,50" stroke="#175484" stroke-width="2" fill="none" stroke-dasharray="5,5"/>
        </svg>
    </div>
    <div class="max-w-5xl mx-auto px-6 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2 animate-fadeInUp">Our Mission</h2>
            <p class="text-gray-600 text-lg animate-fadeInUp">To make healthy, premium food accessible, convenient, and joyful for everyone.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-primary-light rounded-2xl p-6 flex flex-col items-center text-center shadow-md animate-fadeInUp">
                <div class="main-bg w-14 h-14 rounded-full flex items-center justify-center mb-4 animate-pulse-slow">
                    <i class="fas fa-seedling text-white text-2xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Freshness First</h3>
                <p class="text-gray-600 text-sm">We source only the freshest, highest-quality ingredients from trusted local farms and suppliers.</p>
            </div>
            <div class="bg-primary-light rounded-2xl p-6 flex flex-col items-center text-center shadow-md animate-fadeInUp" style="animation-delay:0.1s;">
                <div class="main-bg w-14 h-14 rounded-full flex items-center justify-center mb-4 animate-pulse-slow">
                    <i class="fas fa-heart text-white text-2xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Care & Community</h3>
                <p class="text-gray-600 text-sm">We care deeply about our customers, our team, and our community. Every meal is made with love and purpose.</p>
            </div>
            <div class="bg-primary-light rounded-2xl p-6 flex flex-col items-center text-center shadow-md animate-fadeInUp" style="animation-delay:0.2s;">
                <div class="main-bg w-14 h-14 rounded-full flex items-center justify-center mb-4 animate-pulse-slow">
                    <i class="fas fa-globe text-white text-2xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Sustainability</h3>
                <p class="text-gray-600 text-sm">We are committed to eco-friendly practices, reducing waste, and supporting a healthier planet for future generations.</p>
            </div>
        </div>
    </div>
</section>

<!-- Timeline / Highlights Section -->
<section class="py-16 bg-gray-50 relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/3 left-0 w-full h-20 opacity-20">
            <svg viewBox="0 0 1200 100" class="w-full h-full">
                <path d="M0,50 Q150,20 300,50 T600,50 T900,50 T1200,50" stroke="#175484" stroke-width="4" fill="none" stroke-dasharray="15,15">
                    <animate attributeName="stroke-dashoffset" values="0;30" dur="4s" repeatCount="indefinite"/>
                </path>
            </svg>
        </div>
    </div>
    <div class="max-w-5xl mx-auto px-6 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2 animate-fadeInUp">Our Journey</h2>
            <p class="text-gray-600 text-lg animate-fadeInUp">Milestones that shaped TastyCart</p>
        </div>
        <div class="relative">
            <div class="border-l-4 border-primary absolute h-full left-1/2 transform -translate-x-1/2"></div>
            <div class="space-y-12">
                <div class="flex flex-col md:flex-row items-center md:items-start md:justify-between relative animate-fadeInUp">
                    <div class="md:w-1/2 md:pr-12 text-right md:text-left">
                        <h3 class="font-bold text-primary mb-1">2019</h3>
                        <p class="text-gray-700">TastyCart is founded with a vision to deliver fresh, healthy food to every doorstep.</p>
                    </div>
                    <div class="main-bg w-10 h-10 rounded-full flex items-center justify-center absolute left-1/2 top-0 transform -translate-x-1/2 md:static md:translate-x-0 md:top-auto md:left-auto">
                        <i class="fas fa-flag text-white"></i>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center md:items-start md:justify-between relative animate-fadeInUp" style="animation-delay:0.1s;">
                    <div class="md:w-1/2 md:pl-12 text-left md:text-right md:order-2">
                        <h3 class="font-bold text-primary mb-1">2020</h3>
                        <p class="text-gray-700">Expanded to offer gourmet meal kits and organic produce, partnering with local farms.</p>
                    </div>
                    <div class="main-bg w-10 h-10 rounded-full flex items-center justify-center absolute left-1/2 top-0 transform -translate-x-1/2 md:static md:translate-x-0 md:top-auto md:left-auto">
                        <i class="fas fa-seedling text-white"></i>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center md:items-start md:justify-between relative animate-fadeInUp" style="animation-delay:0.2s;">
                    <div class="md:w-1/2 md:pr-12 text-right md:text-left">
                        <h3 class="font-bold text-primary mb-1">2022</h3>
                        <p class="text-gray-700">Launched our eco-friendly packaging initiative and reached 10,000+ happy customers.</p>
                    </div>
                    <div class="main-bg w-10 h-10 rounded-full flex items-center justify-center absolute left-1/2 top-0 transform -translate-x-1/2 md:static md:translate-x-0 md:top-auto md:left-auto">
                        <i class="fas fa-leaf text-white"></i>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center md:items-start md:justify-between relative animate-fadeInUp" style="animation-delay:0.3s;">
                    <div class="md:w-1/2 md:pl-12 text-left md:text-right md:order-2">
                        <h3 class="font-bold text-primary mb-1">2024</h3>
                        <p class="text-gray-700">Continuing to innovate, inspire, and deliver the best food experience for our community.</p>
                    </div>
                    <div class="main-bg w-10 h-10 rounded-full flex items-center justify-center absolute left-1/2 top-0 transform -translate-x-1/2 md:static md:translate-x-0 md:top-auto md:left-auto">
                        <i class="fas fa-star text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 