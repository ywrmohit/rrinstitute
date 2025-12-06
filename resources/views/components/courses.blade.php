<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class="text-left w-full md:w-2/3">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Popular Courses</h2>
                <p class="text-gray-600 max-w-2xl">Discover our most sought-after programs designed to launch your career.</p>
            </div>
            
            <div class="w-full md:w-auto flex-shrink-0">
                <a href="{{ route('courses.index') }}" class="inline-flex items-center justify-center px-6 py-3 border-2 border-green-600 text-green-600 font-bold rounded-full hover:bg-green-600 hover:text-white transition-all transform hover:scale-105 shadow-md w-full md:w-auto">
                    View All Courses
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Graphic Designing (Prime Course) -->
            <div class="group rounded-2xl overflow-hidden border-2 border-pink-200 hover:shadow-2xl transition-all duration-300 relative">
                <a href="{{ route('courses.graphic-designing') }}" class="block">
                    <div class="absolute top-4 left-4 bg-gradient-to-r from-pink-600 to-orange-600 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg z-10">⭐ PRIME COURSE</div>
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('images/graphic_design_hero.png') }}" alt="Graphic Designing" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-pink-600 shadow-sm">6 Months</div>
                    </div>
                    <div class="p-6 pb-0">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-pink-600 transition-colors">Graphic Designing</h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">Master Photoshop, Illustrator, InDesign, and CorelDraw. Our flagship course for creative professionals.</p>
                    </div>
                </a>
                <div class="p-6 pt-0 mt-auto">
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <a href="{{ route('contact') }}" class="text-gray-900 font-bold hover:text-pink-600 transition-colors">Contact Us</a>
                        <a href="{{ route('courses.graphic-designing') }}" class="text-pink-600 font-medium text-sm hover:underline">Know More →</a>
                    </div>
                </div>
            </div>

            <!-- Basics of Computer -->
            <div class="group rounded-2xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300">
                <a href="{{ route('courses.basics') }}" class="block">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?auto=format&fit=crop&w=800&q=80" alt="Basics of Computer" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-green-600 shadow-sm">2 Months</div>
                    </div>
                    <div class="p-6 pb-0">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">Basics of Computer</h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">Learn essential computer skills from scratch. Perfect for beginners and job seekers.</p>
                    </div>
                </a>
                <div class="p-6 pt-0 mt-auto">
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <a href="{{ route('contact') }}" class="text-gray-900 font-bold hover:text-green-600 transition-colors">Contact Us</a>
                        <a href="{{ route('courses.basics') }}" class="text-green-600 font-medium text-sm hover:underline">Know More →</a>
                    </div>
                </div>
            </div>

            <!-- Tally & Accounting -->
            <div class="group rounded-2xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300">
                <a href="{{ route('courses.tally') }}" class="block">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80" alt="Tally & Accounting" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-blue-600 shadow-sm">3 Months</div>
                    </div>
                    <div class="p-6 pb-0">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Tally & Accounting</h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">Master Tally Prime with GST. Perfect for aspiring accountants and finance professionals.</p>
                    </div>
                </a>
                <div class="p-6 pt-0 mt-auto">
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <a href="{{ route('contact') }}" class="text-gray-900 font-bold hover:text-blue-600 transition-colors">Contact Us</a>
                        <a href="{{ route('courses.tally') }}" class="text-blue-600 font-medium text-sm hover:underline">Know More →</a>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</section>
