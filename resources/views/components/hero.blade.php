<div class="relative pt-32 pb-20 md:pt-40 md:pb-32 bg-white overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] bg-emerald-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-[-20%] left-[20%] w-[40%] h-[40%] bg-gray-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-4000"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <!-- Text Content -->
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <span class="inline-block py-1 px-3 rounded-full bg-green-50 text-green-700 text-sm font-semibold mb-6 tracking-wide uppercase">Welcome to RR Institute</span>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight tracking-tight">
                    Empowering Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-800">Future</span> Global Career
                </h1>
                <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                    Master cutting-edge computer skills and navigate your international journey with our expert visa consultancy.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('courses.index') }}" class="px-8 py-4 bg-green-600 text-white rounded-full font-semibold text-lg hover:bg-green-700 transition-all shadow-lg hover:shadow-green-500/30 transform hover:-translate-y-1 text-center">
                        Explore Courses
                    </a>
                    <a href="#" class="px-8 py-4 bg-white text-gray-700 border border-gray-200 rounded-full font-semibold text-lg hover:border-green-200 hover:bg-green-50 hover:text-green-700 transition-all shadow-sm hover:shadow-md text-center">
                        Visa Services
                    </a>
                </div>
            </div>

            <!-- Hero Image Slider -->
            <div class="w-full lg:w-1/2 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500 aspect-[4/3] group">
                    <div id="hero-slider" class="relative w-full h-full">
                        <!-- Slide 1 -->
                        <img src="{{ asset('images/indian_students_computer_lab_rr.png') }}" 
                             alt="Students learning computers at RR Institute" 
                             class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100">
                        
                        <!-- Slide 2 -->
                        <img src="{{ asset('images/indian_students_campus_delhi.png') }}" 
                             alt="Students on campus in Delhi" 
                             class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
                        
                        <!-- Slide 3 -->
                        <img src="{{ asset('images/indian_student_visa_success.png') }}" 
                             alt="Student with visa success" 
                             class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
                    </div>
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent pointer-events-none"></div>

                    <!-- Slider Indicators (Dots) -->
                    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
                        <button class="w-2 h-2 rounded-full bg-white transition-all duration-300 slider-dot active-dot ring-2 ring-green-500"></button>
                        <button class="w-2 h-2 rounded-full bg-white/50 transition-all duration-300 slider-dot hover:bg-white"></button>
                        <button class="w-2 h-2 rounded-full bg-white/50 transition-all duration-300 slider-dot hover:bg-white"></button>
                    </div>
                </div>
                <!-- Decorative Elements -->
                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-green-600 rounded-full opacity-20 blur-xl animate-pulse"></div>
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-emerald-600 rounded-full opacity-20 blur-xl animate-pulse delay-700"></div>
            </div>
        </div>
    </div>
</div>
