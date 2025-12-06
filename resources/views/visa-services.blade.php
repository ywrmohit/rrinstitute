<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa Services - RR Institute</title>
    <meta name="description" content="Expert visa consultancy services for student visas, tourist visas, and work permits. Your trusted partner for global opportunities.">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 antialiased font-sans">
    
    <x-announcement-bar />
    <x-navbar />

    <!-- Hero Section -->
    <div class="relative bg-emerald-900 pt-32 pb-20 md:pt-40 md:pb-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/visa_services_hero.png') }}" alt="Visa Services" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/90 to-emerald-800/80 mix-blend-multiply"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl mb-6">
                Your Gateway to <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-300 to-emerald-200">Global Opportunities</span>
            </h1>
            <p class="mt-6 text-xl text-emerald-100 max-w-3xl mx-auto">
                Navigate the complex world of visas with confidence. We provide expert guidance for student, tourist, and work visas to help you achieve your dreams abroad.
            </p>
            <div class="mt-10 flex justify-center gap-4">
                <a href="#contact-form" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-emerald-900 bg-white hover:bg-emerald-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Get a Free Consultation
                </a>
                <a href="#services" class="inline-flex items-center px-8 py-3 border border-white text-base font-medium rounded-full text-white hover:bg-white/10 transition-all duration-300">
                    Explore Services
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-base font-semibold text-green-600 tracking-wide uppercase">Our Expertise</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 sm:text-4xl">Comprehensive Visa Solutions</p>
                <p class="mt-4 text-lg text-gray-600">We offer tailored services to meet your specific travel and immigration needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Study Visa -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Study Visa</h3>
                        <p class="text-gray-600 mb-4">Pursue your education at top universities worldwide. We assist with admission, documentation, and visa filing.</p>
                        <ul class="space-y-2 text-sm text-gray-500">
                            <li class="flex items-center"><svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>University Selection</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>SOP Assistance</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Financial Guidance</li>
                        </ul>
                    </div>
                </div>

                <!-- Tourist Visa -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Tourist Visa</h3>
                        <p class="text-gray-600 mb-4">Explore the world with ease. We handle the paperwork so you can focus on planning your itinerary.</p>
                        <ul class="space-y-2 text-sm text-gray-500">
                            <li class="flex items-center"><svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Itinerary Planning</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Hotel Bookings</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Quick Processing</li>
                        </ul>
                    </div>
                </div>

                <!-- Work Permit -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Work Permit</h3>
                        <p class="text-gray-600 mb-4">Advance your career globally. We assist with work permit applications and employer coordination.</p>
                        <ul class="space-y-2 text-sm text-gray-500">
                            <li class="flex items-center"><svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Employer Verification</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Document Attestation</li>
                            <li class="flex items-center"><svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Interview Prep</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Section -->
    <div class="py-24 bg-gray-50 relative overflow-hidden">
        <!-- Decorative blobs -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-emerald-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-base font-semibold text-green-600 tracking-wide uppercase">How It Works</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 sm:text-4xl">Your Journey to Success</p>
            </div>

            <div class="relative">
                <!-- Connecting Line -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gray-200 -translate-y-1/2 z-0"></div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10">
                    <!-- Step 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-lg text-center transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4 shadow-lg ring-4 ring-green-50">1</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Consultation</h3>
                        <p class="text-sm text-gray-600">Free initial assessment of your profile and eligibility.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-lg text-center transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4 shadow-lg ring-4 ring-green-50">2</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Documentation</h3>
                        <p class="text-sm text-gray-600">Gathering and verifying all necessary documents.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-lg text-center transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4 shadow-lg ring-4 ring-green-50">3</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Application</h3>
                        <p class="text-sm text-gray-600">Filing your visa application with precision.</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="bg-white p-6 rounded-xl shadow-lg text-center transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4 shadow-lg ring-4 ring-green-50">4</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Approval</h3>
                        <p class="text-sm text-gray-600">Receive your visa and prepare for departure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-6">Why Choose RR Institute?</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">High Success Rate</h3>
                                <p class="mt-2 text-base text-gray-500">Our experienced team ensures your application is error-free, maximizing your chances of approval.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Expert Guidance</h3>
                                <p class="mt-2 text-base text-gray-500">We stay updated with the latest immigration laws and policies to provide accurate advice.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Transparent Process</h3>
                                <p class="mt-2 text-base text-gray-500">No hidden fees or surprises. We keep you informed at every step of the journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-green-200 rounded-3xl transform rotate-3"></div>
                    <div class="relative bg-gray-900 rounded-3xl p-8 shadow-2xl text-white">
                        <h3 class="text-2xl font-bold mb-4">Client Testimonial</h3>
                        <div class="mb-6">
                            <svg class="h-8 w-8 text-green-400 opacity-50" fill="currentColor" viewBox="0 0 32 32"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" /></svg>
                            <p class="mt-4 text-lg italic">"RR Institute made my dream of studying in Canada a reality. Their team guided me through every step, from university selection to visa approval. Highly recommended!"</p>
                        </div>
                        <div class="flex items-center">
                            <div class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center font-bold text-white">AS</div>
                            <div class="ml-3">
                                <p class="text-sm font-medium">Amit Sharma</p>
                                <p class="text-xs text-green-300">Student Visa, Canada</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div id="contact-form" class="bg-emerald-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl mb-4">Ready to Start Your Journey?</h2>
            <p class="text-xl text-emerald-100 mb-8 max-w-2xl mx-auto">Contact us today for a free consultation and let us help you achieve your global dreams.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-emerald-900 bg-white hover:bg-emerald-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Contact Us Now
            </a>
        </div>
    </div>

    <x-footer />
    <x-whatsapp-float />
</body>
</html>
