@extends('layouts.app')

@section('title', 'Web Development Course (MERN & Laravel) - RR Institute')
@section('meta_description', 'Become a Full Stack Web Developer. Choose between MERN Stack (MongoDB, Express, React, Node) or PHP Laravel. Build dynamic websites and web apps.')

@section('content')
    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 md:pt-40 md:pb-32 bg-purple-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-purple-100 text-purple-700 text-sm font-semibold mb-6 tracking-wide uppercase">High Demand Career</span>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Full Stack <span class="text-purple-600">Web Development</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Build the web of tomorrow. Choose your path: The modern JavaScript-based MERN Stack or the robust PHP Laravel Framework.
                </p>
            </div>
        </div>
    </div>

    <!-- Course Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Course Overview</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Our Web Development course is designed to make you industry-ready. We offer two specialized tracks so you can choose the technology stack that suits your career goals. Whether you want to build single-page applications with React or robust enterprise apps with Laravel, we have you covered.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-purple-50 p-4 rounded-xl border border-purple-100">
                            <h3 class="font-bold text-purple-700 mb-2">MERN Stack</h3>
                            <p class="text-sm text-gray-600">MongoDB, Express.js, React.js, Node.js. Best for modern, scalable web apps.</p>
                        </div>
                        <div class="bg-red-50 p-4 rounded-xl border border-red-100">
                            <h3 class="font-bold text-red-700 mb-2">PHP Laravel</h3>
                            <p class="text-sm text-gray-600">PHP, Laravel, MySQL. Best for rapid development and enterprise solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80" alt="Web Development" class="rounded-2xl shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Course Curriculum</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Common Foundation -->
                <div class="lg:col-span-2 bg-white p-8 rounded-2xl shadow-sm border border-gray-100 mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Foundation (Common for Both)</h3>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex items-center gap-2 text-gray-700">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            HTML5 & Semantic Web
                        </li>
                        <li class="flex items-center gap-2 text-gray-700">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            CSS3, Flexbox & Grid
                        </li>
                        <li class="flex items-center gap-2 text-gray-700">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            JavaScript (ES6+)
                        </li>
                        <li class="flex items-center gap-2 text-gray-700">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Responsive Design & Bootstrap/Tailwind
                        </li>
                        <li class="flex items-center gap-2 text-gray-700">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Git & GitHub
                        </li>
                    </ul>
                </div>

                <!-- MERN Track -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-purple-500">
                    <h3 class="text-2xl font-bold text-purple-700 mb-6">Track 1: MERN Stack</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">React.js (Frontend)</h4>
                            <p class="text-sm text-gray-600">Components, Props, State, Hooks, Context API, Redux, React Router.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Node.js & Express (Backend)</h4>
                            <p class="text-sm text-gray-600">RESTful APIs, Middleware, Authentication (JWT), File Uploads.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">MongoDB (Database)</h4>
                            <p class="text-sm text-gray-600">NoSQL Database design, Mongoose ODM, CRUD operations, Aggregation.</p>
                        </div>
                    </div>
                </div>

                <!-- Laravel Track -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-red-500">
                    <h3 class="text-2xl font-bold text-red-700 mb-6">Track 2: PHP Laravel</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Advanced PHP</h4>
                            <p class="text-sm text-gray-600">OOP in PHP, Namespaces, Composer, Error Handling.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Laravel Framework</h4>
                            <p class="text-sm text-gray-600">MVC Architecture, Routing, Controllers, Blade Templating, Eloquent ORM.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">MySQL (Database)</h4>
                            <p class="text-sm text-gray-600">Relational Database design, SQL Queries, Joins, Migrations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-purple-600 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">Build Your Career in Tech</h2>
            <p class="text-xl mb-8 text-purple-100">Choose your stack and start building real-world applications today.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-purple-700 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors">Enroll Now</a>
        </div>
    </section>
@endsection
