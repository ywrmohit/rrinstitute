@extends('layouts.app')

@section('title', 'C & C++ Programming Course - RR Institute')
@section('meta_description', 'Build a strong foundation in programming with C and C++. Learn logic building, data structures, and object-oriented programming.')

@section('content')
    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 md:pt-40 md:pb-32 bg-indigo-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-indigo-100 text-indigo-700 text-sm font-semibold mb-6 tracking-wide uppercase">Programming Core</span>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Learn <span class="text-indigo-600">C & C++ Programming</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    The mother of all programming languages. Master the logic and concepts that power modern software development.
                </p>
            </div>
        </div>
    </div>

    <!-- Course Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=800&q=80" alt="Programming" class="rounded-2xl shadow-xl">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Course Overview</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        This course is perfect for students pursuing computer science or anyone wanting to start a career in software development. C provides the foundation for understanding how computers work, while C++ introduces Object-Oriented Programming (OOP) concepts used in game development, system software, and more.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-indigo-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Logic Building & Problem Solving</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-indigo-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Procedural Programming with C</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-indigo-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Object-Oriented Programming with C++</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-indigo-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Data Structures Basics</span>
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
                    <h3 class="text-xl font-bold text-indigo-700 mb-3">Module 1: Introduction to Programming</h3>
                    <p class="text-gray-600">Algorithms, flowcharts, setting up the environment, and writing your first program.</p>
                </div>
                <!-- Module 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-indigo-700 mb-3">Module 2: C Language Fundamentals</h3>
                    <p class="text-gray-600">Variables, data types, operators, control structures (if-else, loops), and functions.</p>
                </div>
                <!-- Module 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-indigo-700 mb-3">Module 3: Advanced C Concepts</h3>
                    <p class="text-gray-600">Arrays, pointers, strings, structures, unions, and file handling in C.</p>
                </div>
                <!-- Module 4 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-indigo-700 mb-3">Module 4: Introduction to C++ & OOP</h3>
                    <p class="text-gray-600">Classes and objects, constructors/destructors, encapsulation, and abstraction.</p>
                </div>
                <!-- Module 5 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-indigo-700 mb-3">Module 5: Advanced C++ Features</h3>
                    <p class="text-gray-600">Inheritance, polymorphism, operator overloading, templates, and exception handling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-indigo-600 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">Master the Code</h2>
            <p class="text-xl mb-8 text-indigo-100">Unlock the power of programming with our expert-led C & C++ course.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-indigo-700 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors">Enroll Now</a>
        </div>
    </section>
@endsection
