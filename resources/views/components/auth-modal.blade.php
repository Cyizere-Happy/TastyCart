<!-- Authentication Modal -->
<div id="authModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="flex items-center justify-center min-h-screen px-2">
        <div class="bg-white rounded-lg shadow-xl max-w-[420px] w-full relative px-6 py-8">
            <!-- Close Button -->
            <button id="closeAuthModal" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 transition duration-300 p-1" style="line-height: 1;">
                <i class="fas fa-times text-base"></i>
            </button>
            
            <!-- Auth Container -->
            <div class="p-0">
                <!-- Header -->
                <div class="text-center mb-4">
                    <div class="flex items-center justify-center mb-2">
                        <i class="fas fa-leaf text-[#009f6b] text-xl mr-1"></i>
                        <span class="text-lg font-bold main-color">TastyCart</span>
                    </div>
                    <h2 id="authTitle" class="text-lg font-bold text-gray-800">Welcome Back</h2>
                    <p id="authSubtitle" class="text-gray-600 mt-1 text-xs">Sign in to your account</p>
                </div>
                
                <!-- Login Form -->
                <form id="loginForm" class="space-y-2 px-1">
                    <div>
                        <label for="loginIdentifier" class="block text-xs font-medium text-gray-700 mb-1">Email or Phone Number</label>
                        <input type="text" id="loginIdentifier" name="identifier" required 
                               class="w-full px-3 py-1.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#009f6b] focus:border-transparent text-sm"
                               inputmode="email" autocomplete="username">
                        <p class="text-[10px] text-gray-400 mt-1">You can use your email or mobile number.</p>
                    </div>
                    
                    <div>
                        <label for="loginPassword" class="block text-xs font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="loginPassword" name="password" required 
                               class="w-full px-3 py-1.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#009f6b] focus:border-transparent text-sm">
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-[#009f6b] focus:ring-[#009f6b] h-3 w-3">
                            <span class="ml-1 text-xs text-gray-600">Remember me</span>
                        </label>
                        <a href="#" class="text-xs text-[#009f6b] hover:text-[#007a52] transition duration-300">Forgot?</a>
                    </div>
                    
                    <button type="submit" class="w-full main-bg text-white py-1.5 px-2 rounded-lg hover:bg-[#134a6f] transition duration-300 font-medium text-sm mt-1">
                        Sign In
                    </button>
                </form>
                
                <!-- Register Form -->
                <form id="registerForm" class="space-y-2 px-1 hidden">
                    <div>
                        <label for="registerName" class="block text-xs font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" id="registerName" name="name" required 
                               class="w-full px-3 py-1.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#009f6b] focus:border-transparent text-sm">
                    </div>
                    
                    <div>
                        <label for="registerIdentifier" class="block text-xs font-medium text-gray-700 mb-1">Email or Phone Number</label>
                        <input type="text" id="registerIdentifier" name="identifier" required 
                               class="w-full px-3 py-1.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#009f6b] focus:border-transparent text-sm"
                               inputmode="email" autocomplete="username">
                        <p class="text-[10px] text-gray-400 mt-1">You can use your email or mobile number.</p>
                    </div>
                    
                    <div>
                        <label for="registerPassword" class="block text-xs font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="registerPassword" name="password" required 
                               class="w-full px-3 py-1.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#009f6b] focus:border-transparent text-sm">
                    </div>
                    
                    <div>
                        <label for="registerConfirmPassword" class="block text-xs font-medium text-gray-700 mb-1">Confirm Password</label>
                        <input type="password" id="registerConfirmPassword" name="password_confirmation" required 
                               class="w-full px-3 py-1.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#009f6b] focus:border-transparent text-sm">
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="termsCheckbox" required 
                               class="rounded border-gray-300 text-[#009f6b] focus:ring-[#009f6b] h-3 w-3">
                        <label for="termsCheckbox" class="ml-1 text-xs text-gray-600">
                            I agree to the <a href="#" class="text-[#009f6b] hover:text-[#007a52]">Terms</a> & <a href="#" class="text-[#009f6b] hover:text-[#007a52]">Privacy</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="w-full main-bg text-white py-1.5 px-2 rounded-lg hover:bg-[#134a6f] transition duration-300 font-medium text-sm mt-1">
                        Create Account
                    </button>
                </form>
                
                <!-- Toggle Links -->
                <div class="text-center mt-3 px-1">
                    <p id="toggleText" class="text-gray-600 text-xs">
                        Don't have an account? 
                        <button id="toggleToRegister" class="text-[#009f6b] hover:text-[#007a52] font-medium transition duration-300">Sign up</button>
                    </p>
                    <p id="toggleTextRegister" class="text-gray-600 text-xs hidden">
                        Already have an account? 
                        <button id="toggleToLogin" class="text-[#009f6b] hover:text-[#007a52] font-medium transition duration-300">Sign in</button>
                    </p>
                </div>
                
                <!-- Social Login -->
                <div class="mt-3 px-1">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-xs">
                            <span class="px-2 bg-white text-gray-400">Or continue with</span>
                        </div>
                    </div>
                    
                    <div class="mt-3 grid grid-cols-2 gap-2">
                        <button class="w-full inline-flex justify-center py-1 px-2 border border-gray-200 rounded-lg shadow-sm bg-white text-xs font-medium text-gray-500 hover:bg-gray-50 transition duration-300">
                            <i class="fab fa-google text-red-500 mr-1"></i>
                            Google
                        </button>
                        <button class="w-full inline-flex justify-center py-1 px-2 border border-gray-200 rounded-lg shadow-sm bg-white text-xs font-medium text-gray-500 hover:bg-gray-50 transition duration-300">
                            <i class="fab fa-facebook text-blue-600 mr-1"></i>
                            Facebook
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 