<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Popular Courses</h2>
                <p class="text-gray-600 max-w-xl">Upgrade your skills with our most in-demand computer courses.</p>
            </div>
            <a href="{{ route('courses.index') }}" class="hidden md:flex items-center text-green-600 font-semibold hover:text-green-700 transition-colors">
                View All Courses
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Graphic Designing (Prime Course) -->
            <a href="{{ route('courses.graphic-designing') }}" class="group rounded-2xl overflow-hidden border-2 border-pink-200 hover:shadow-2xl transition-all duration-300 relative">
                <div class="absolute top-4 left-4 bg-gradient-to-r from-pink-600 to-orange-600 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg z-10">⭐ PRIME COURSE</div>
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/graphic_design_home_card.png') }}" alt="Graphic Designing" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-pink-600 shadow-sm">6 Months</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-pink-600 transition-colors">Graphic Designing</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Master Photoshop, Illustrator, InDesign, and CorelDraw. Our flagship course for creative professionals.</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <span class="text-gray-900 font-bold">Contact Us</span>
                        <span class="text-pink-600 font-medium text-sm">Know More →</span>
                    </div>
                </div>
            </a>

            <!-- Basics of Computer -->
            <a href="{{ route('courses.basics') }}" class="group rounded-2xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?auto=format&fit=crop&w=800&q=80" alt="Basics of Computer" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-green-600 shadow-sm">2 Months</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">Basics of Computer</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Learn essential computer skills from scratch. Perfect for beginners and job seekers.</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <span class="text-gray-900 font-bold">Contact Us</span>
                        <span class="text-green-600 font-medium text-sm">Know More →</span>
                    </div>
                </div>
            </a>

            <!-- Tally & Accounting -->
            <a href="{{ route('courses.tally') }}" class="group rounded-2xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80" alt="Tally & Accounting" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-blue-600 shadow-sm">3 Months</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Tally & Accounting</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">Master Tally Prime with GST. Perfect for aspiring accountants and finance professionals.</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <span class="text-gray-900 font-bold">Contact Us</span>
                        <span class="text-blue-600 font-medium text-sm">Know More →</span>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="mt-10 text-center md:hidden">
            <a href="{{ route('courses.index') }}" class="inline-flex items-center text-green-600 font-semibold hover:text-green-700 transition-colors">
                View All Courses
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</section>
