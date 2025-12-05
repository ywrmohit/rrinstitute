@extends('layouts.app')

@section('title', 'Basics of Computer Course - RR Institute')
@section('meta_description', 'Learn the fundamentals of computers with our comprehensive Basics of Computer course. Perfect for beginners to start their digital journey.')

@section('content')
    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 md:pt-40 md:pb-32 bg-green-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-green-100 text-green-700 text-sm font-semibold mb-6 tracking-wide uppercase">Foundation Course</span>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Master the <span class="text-green-600">Basics of Computer</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Start your digital journey with confidence. Learn essential computer skills that are necessary for every job and daily life.
                </p>
            </div>
        </div>
    </div>

    <!-- Course Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?auto=format&fit=crop&w=800&q=80" alt="Computer Basics" class="rounded-2xl shadow-xl">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Course Overview</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Our Basics of Computer course is designed for absolute beginners. Whether you are a student, a homemaker, or a professional looking to upgrade your skills, this course covers everything from turning on a computer to using the internet and office applications effectively.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Understanding Computer Hardware & Software</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Mastering Windows Operating System</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Microsoft Office Suite (Word, Excel, PowerPoint)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Internet Browsing & Email Etiquette</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Course Curriculum</h2>
            <div class="space-y-6">
                <!-- Module 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-green-700 mb-3">Module 1: Introduction to Computers</h3>
                    <p class="text-gray-600">History of computers, parts of a computer, input/output devices, and understanding how computers work.</p>
                </div>
                <!-- Module 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-green-700 mb-3">Module 2: Operating Systems (Windows)</h3>
                    <p class="text-gray-600">Desktop management, file and folder management, control panel settings, and system maintenance.</p>
                </div>
                <!-- Module 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-green-700 mb-3">Module 3: Microsoft Word</h3>
                    <p class="text-gray-600">Creating documents, formatting text, inserting images and tables, page layout, and printing.</p>
                </div>
                <!-- Module 4 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-green-700 mb-3">Module 4: Microsoft Excel</h3>
                    <p class="text-gray-600">Spreadsheet basics, formulas and functions, creating charts, and data management.</p>
                </div>
                <!-- Module 5 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-green-700 mb-3">Module 5: Internet & Email</h3>
                    <p class="text-gray-600">Web browsing, search engines, creating email accounts, sending/receiving emails, and online safety.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-green-600 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">Start Learning Today</h2>
            <p class="text-xl mb-8 text-green-100">Join our next batch and become computer literate in no time.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-green-700 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors">Enroll Now</a>
        </div>
    </section>
@endsection
