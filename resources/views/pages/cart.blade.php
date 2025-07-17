@extends('layouts.app')

@section('content')
<!-- Animated Cart Header -->
<section class="relative pt-24 pb-16 min-h-[60vh] hero-bg overflow-hidden flex items-center">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 opacity-10 rounded-full animate-float" style="background: linear-gradient(135deg, #175484 60%, #009f6b 100%);"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 opacity-10 rounded-full animate-bounce" style="background: linear-gradient(135deg, #009f6b 60%, #175484 100%);"></div>
        <svg class="absolute top-0 right-0 w-40 h-40 opacity-10 animate-rotate-slow" viewBox="0 0 100 100">
            <path d="M10,50 Q25,25 50,50 T90,50" stroke="#fff" stroke-width="2" fill="none" stroke-dasharray="5,5"/>
        </svg>
    </div>
    <div class="max-w-4xl mx-auto px-4 relative z-10 flex flex-col items-center justify-center gap-4">
        <h1 class="text-3xl font-extrabold text-white mb-1 animate-fadeInUp">Your Cart</h1>
        <span class="h-2 w-16 rounded-full bg-primary block mb-2 animate-fadeInUp" style="animation-delay:0.1s;"></span>
        <p class="text-white/90 text-base animate-fadeInUp" style="animation-delay:0.2s;">Review your selected items and proceed to checkout</p>
    </div>
</section>
<!-- Light Green Info Section -->
<section class="bg-primary-light py-6 px-3 sm:py-8 sm:px-4 md:px-8 rounded-2xl shadow-md max-w-xs sm:max-w-md md:max-w-4xl mx-auto mt-[-2rem] mb-6 sm:mt-[-3rem] sm:mb-8 relative z-20 animate-fadeInUp">
    <div class="flex flex-col md:flex-row items-center gap-3 sm:gap-4 md:gap-8">
        <i class="fas fa-leaf text-primary text-2xl sm:text-3xl md:text-4xl animate-bounce"></i>
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">A Friendly Reminder</h2>
            <p class="text-gray-700 text-xs sm:text-sm">Your cart is always just a click away. Enjoy a smooth checkout and fresh products delivered fast with TastyCart.</p>
        </div>
    </div>
</section>

<!-- Cart Content -->
<section class="max-w-6xl mx-auto px-4 py-12">
    <div class="flex flex-col lg:flex-row gap-8 animate-fadeInUp">
        <!-- Cart Items -->
        <div class="flex-1">
            <div class="flex items-center mb-6">
                <h2 class="text-xl font-bold text-gray-800 tracking-tight">Cart Items</h2>
                <span class="ml-3 h-2 w-8 rounded-full bg-primary block"></span>
            </div>
            <!-- Example Cart Items (replace with loop) -->
            <div class="space-y-4">
                <div class="flex items-center bg-white rounded-xl shadow-sm p-4 gap-4 group transition-all duration-300 hover:shadow-lg animate-fadeInUp">
                    <div class="w-16 h-16 rounded-lg overflow-hidden bg-primary-light flex items-center justify-center">
                        <img src="{{ asset('Images/Avocado.jpg') }}" alt="Fresh Avocado" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <div class="font-semibold text-gray-800 text-sm mb-1">Fresh Avocado</div>
                        <div class="text-xs text-gray-500 mb-1">Organic Fruits</div>
                        <div class="flex items-center gap-2">
                            <span class="text-primary font-bold">$4.99</span>
                            <span class="text-xs text-gray-400 line-through">$6.99</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-end gap-2">
                        <div class="flex items-center gap-1">
                            <button class="w-6 h-6 rounded-full bg-gray-100 text-primary hover:bg-primary hover:text-white transition flex items-center justify-center"><i class="fas fa-minus"></i></button>
                            <span class="mx-2 text-sm font-medium">2</span>
                            <button class="w-6 h-6 rounded-full bg-gray-100 text-primary hover:bg-primary hover:text-white transition flex items-center justify-center"><i class="fas fa-plus"></i></button>
                        </div>
                        <button class="text-xs text-gray-400 hover:text-red-500 transition"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
                <div class="flex items-center bg-white rounded-xl shadow-sm p-4 gap-4 group transition-all duration-300 hover:shadow-lg animate-fadeInUp" style="animation-delay:0.1s;">
                    <div class="w-16 h-16 rounded-lg overflow-hidden bg-primary-light flex items-center justify-center">
                        <img src="{{ asset('Images/Bakery.jpg') }}" alt="Artisan Bread" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <div class="font-semibold text-gray-800 text-sm mb-1">Artisan Bread</div>
                        <div class="text-xs text-gray-500 mb-1">Bakery</div>
                        <div class="flex items-center gap-2">
                            <span class="text-primary font-bold">$3.99</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-end gap-2">
                        <div class="flex items-center gap-1">
                            <button class="w-6 h-6 rounded-full bg-gray-100 text-primary hover:bg-primary hover:text-white transition flex items-center justify-center"><i class="fas fa-minus"></i></button>
                            <span class="mx-2 text-sm font-medium">1</span>
                            <button class="w-6 h-6 rounded-full bg-gray-100 text-primary hover:bg-primary hover:text-white transition flex items-center justify-center"><i class="fas fa-plus"></i></button>
                        </div>
                        <button class="text-xs text-gray-400 hover:text-red-500 transition"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>
            <!-- Empty Cart State -->
            <div class="hidden flex flex-col items-center justify-center py-16 animate-fadeInUp" id="emptyCart">
                <i class="fas fa-shopping-cart text-5xl text-primary mb-4 animate-bounce"></i>
                <div class="text-lg font-bold text-gray-700 mb-2">Your cart is empty</div>
                <div class="text-gray-500 mb-4">Looks like you haven’t added anything yet.</div>
                <a href="/shop" class="main-bg text-white px-6 py-2 rounded-lg font-medium hover:bg-[#134a6f] transition">Go to Shop</a>
            </div>
        </div>
        <!-- Cart Summary -->
        <div class="w-full lg:w-80 flex-shrink-0">
            <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-24 animate-fadeInUp">
                <h3 class="text-lg font-bold text-gray-800 mb-4">Summary</h3>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-600 text-sm">Subtotal</span>
                    <span class="text-gray-800 font-semibold">$13.97</span>
                </div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-600 text-sm">Delivery</span>
                    <span class="text-gray-800 font-semibold">$2.00</span>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-gray-800 font-bold">Total</span>
                    <span class="text-primary text-xl font-extrabold">$15.97</span>
                </div>
                <button class="w-full main-bg text-white py-2 rounded-lg font-semibold hover:bg-[#134a6f] transition text-base animate-fadeInUp">Checkout</button>
            </div>
        </div>
    </div>
</section>
@endsection 