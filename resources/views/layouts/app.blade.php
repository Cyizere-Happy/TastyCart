<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'TastyCart')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @stack('styles')
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <x-navigation />

    <!-- Main Content -->
    @yield('content')

    <!-- Auth Modal -->
    <x-auth-modal />

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-12 pb-8 mt-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-leaf text-blue-400 text-2xl mr-2"></i>
                        <span class="text-xl font-bold">TastyCart</span>
                    </div>
                    <p class="text-gray-400 mb-4">Premium food delivery service with fresh ingredients and fast delivery.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Shop</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Categories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Customer Service</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Shipping Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Returns & Refunds</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                            <span>123 Food Street, Fresh City, FC 12345</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-2"></i>
                            <span>(123) 456-7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>support@tastycart.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-2"></i>
                            <span>Mon-Fri: 8AM - 8PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} TastyCart. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> 