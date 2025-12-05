@extends('layouts.app')

@section('title', 'All Computer Courses - RR Institute')
@section('meta_description', 'Explore all computer courses at RR Institute. From Basics to Advanced - Graphic Designing, Web Development, Programming, Tally & Accounting.')

@section('content')
    <!-- Hero Section -->
    <div class="relative pt-32 pb-16 md:pt-40 md:pb-20 bg-gradient-to-br from-green-50 via-blue-50 to-purple-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-green-100 text-green-700 text-sm font-semibold mb-6 tracking-wide uppercase">Our Course Catalog</span>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Explore All Our <span class="text-green-600">Computer Courses</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    From beginner to professional, we have the perfect course for your career journey. Choose your path to success.
                </p>
            </div>
        </div>
        
        <!-- Decorative blobs -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-green-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-20 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
    </div>

    <!-- All Courses Grid -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Graphic Designing (Prime Course) - Featured -->
                <a href="{{ route('courses.graphic-designing') }}" class="lg:col-span-2 group rounded-2xl overflow-hidden border-2 border-pink-200 hover:shadow-2xl transition-all duration-300 relative bg-gradient-to-br from-pink-50 to-orange-50">
                    <div class="absolute top-6 left-6 bg-gradient-to-r from-pink-600 to-orange-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg z-10">⭐ PRIME COURSE - Most Popular</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-8">
                        <div class="relative h-64 md:h-full overflow-hidden rounded-xl">
                            <img src="{{ asset('images/graphic_design_hero.png') }}" alt="Graphic Designing" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-pink-600 transition-colors">Graphic Designing</h3>
                            <p class="text-gray-700 mb-4 leading-relaxed">Master Photoshop, Illustrator, InDesign, and CorelDraw. Our flagship course for creative professionals.</p>
                            <div class="flex items-center gap-4 mb-4">
                                <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm font-semibold">6 Months</span>
                                <span class="text-gray-600 text-sm">4 Professional Tools</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">Contact Us</span>
                                <span class="text-pink-600 font-medium">Learn More →</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Web Development -->
                <a href="{{ route('courses.web-development') }}" class="group rounded-2xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80" alt="Web Development" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-purple-600 shadow-sm">6 Months</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors">Web Development</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Choose MERN Stack or PHP Laravel. Build modern, responsive websites.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                            <span class="text-lg font-bold text-gray-900">Contact Us</span>
                            <span class="text-purple-600 font-medium">Learn More →</span>
                        </div>
                    </div>
                </a>

                <!-- Tally & Accounting -->
                <a href="{{ route('courses.tally') }}" class="group rounded-2xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80" alt="Tally & Accounting" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-blue-600 shadow-sm">3 Months</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Tally & Accounting</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Master Tally Prime with GST. Perfect for aspiring accountants.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                            <span class="text-lg font-bold text-gray-900">Contact Us</span>
                            <span class="text-blue-600 font-medium">Learn More →</span>
                        </div>
                    </div>
                </a>

                <!-- C & C++ Programming -->
                <a href="{{ route('courses.programming') }}" class="group rounded-2xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=800&q=80" alt="C & C++ Programming" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-indigo-600 shadow-sm">4 Months</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors">C & C++ Programming</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Build a strong programming foundation. Perfect for students.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                            <span class="text-lg font-bold text-gray-900">Contact Us</span>
                            <span class="text-indigo-600 font-medium">Learn More →</span>
                        </div>
                    </div>
                </a>

                <!-- Basics of Computer -->
                <a href="{{ route('courses.basics') }}" class="group rounded-2xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?auto=format&fit=crop&w=800&q=80" alt="Basics of Computer" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-green-600 shadow-sm">2 Months</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">Basics of Computer</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Learn essential computer skills from scratch. Perfect for beginners.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                            <span class="text-lg font-bold text-gray-900">Contact Us</span>
                            <span class="text-green-600 font-medium">Learn More →</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- Why Choose RR Institute -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose RR Institute?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We combine technical excellence with practical training to prepare you for real-world challenges.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Expert Faculty</h3>
                    <p class="text-gray-600">Learn from industry professionals with years of real-world experience.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Modern Labs</h3>
                    <p class="text-gray-600">State-of-the-art computer labs with latest software and hardware.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Certification</h3>
                    <p class="text-gray-600">Industry-recognized certificates upon successful course completion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-green-600 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Learning Journey?</h2>
            <p class="text-xl mb-8 text-green-100">Enroll now and take the first step towards your dream career.</p>
            <a href="#" class="inline-block bg-white text-green-700 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors">Contact Us Today</a>
        </div>
    </section>
@endsection
