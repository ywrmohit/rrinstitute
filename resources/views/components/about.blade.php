<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Image Collage Side -->
            <div class="w-full lg:w-1/2 relative">
                <div class="relative z-10 rounded-2xl overflow-hidden shadow-xl w-4/5">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80" alt="Institute Campus" class="w-full h-auto object-cover">
                </div>
                <div class="absolute -bottom-10 -right-4 z-20 rounded-2xl overflow-hidden shadow-2xl w-3/5 border-4 border-white">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=800&q=80" alt="Team Meeting" class="w-full h-auto object-cover">
                </div>
                <!-- Decorative Dots -->
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-green-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            </div>

            <!-- Content Side -->
            <div class="w-full lg:w-1/2 mt-12 lg:mt-0">
                <span class="text-green-600 font-bold tracking-wider uppercase text-sm mb-2 block">About RR Institute</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Building Careers, <br>Shaping Futures Since 2014</h2>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    RR Institute is a premier educational institution dedicated to bridging the gap between academic learning and industry requirements. We specialize in advanced computer training and comprehensive visa consultancy services.
                </p>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    Our mission is to empower students with the skills they need to succeed in the digital age while providing them with the global opportunities they deserve.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-green-600 hover:bg-green-700 shadow-lg hover:shadow-green-500/30 transition-all duration-300">
                        Learn More About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
