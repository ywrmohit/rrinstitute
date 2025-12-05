<nav class="fixed w-full z-40 glass-nav transition-all duration-300 navbar-scroll" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3 cursor-pointer">
                <div class="w-10 h-10 bg-gradient-to-br from-green-600 to-emerald-800 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg transform hover:scale-105 transition-transform">
                    RR
                </div>
                <span class="font-bold text-2xl tracking-tight text-gray-900">RR Institute</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-green-700 font-medium transition-colors relative group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                
                <!-- Dropdown for Courses -->
                <div class="relative group">
                    <button class="text-gray-600 hover:text-green-700 font-medium transition-colors flex items-center gap-1 py-2">
                        Computer Courses
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-64 bg-white rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 border border-gray-100 overflow-hidden">
                        <a href="{{ route('courses.basics') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors">Basics of Computer</a>
                        <a href="{{ route('courses.tally') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors">Tally & Accounting</a>
                        <a href="{{ route('courses.programming') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors">C & C++ Programming</a>
                        <a href="{{ route('courses.web-development') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors">Web Development</a>
                        <a href="{{ route('courses.graphic-designing') }}" class="block px-4 py-3 text-sm font-bold text-pink-600 hover:bg-pink-50 hover:text-pink-700 transition-colors">Graphic Designing (Prime)</a>
                    </div>
                </div>

                <a href="{{ route('visa-services') }}" class="text-gray-600 hover:text-green-700 font-medium transition-colors relative group">
                    Visa Services
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-green-700 font-medium transition-colors relative group">
                    About Us
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('contact') }}" class="bg-black text-white px-6 py-2.5 rounded-full font-medium hover:bg-green-700 transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    Contact Us
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-600 hover:text-green-700 focus:outline-none p-2">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="{{ route('home') }}" class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50 transition-colors">Home</a>
            <a href="{{ route('courses.graphic-designing') }}" class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50 transition-colors">Graphic Designing (Prime)</a>
            <a href="{{ route('courses.web-development') }}" class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50 transition-colors">Web Development</a>
            <a href="{{ route('courses.tally') }}" class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50 transition-colors">Tally & Accounting</a>
            <a href="{{ route('visa-services') }}" class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50 transition-colors">Visa Services</a>
            <a href="{{ route('about') }}" class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50 transition-colors">About Us</a>
            <a href="{{ route('contact') }}" class="block px-4 py-3 mt-4 text-center rounded-lg text-base font-medium bg-green-600 text-white hover:bg-green-700 transition-colors shadow-md">Contact Us</a>
        </div>
    </div>
</nav>
