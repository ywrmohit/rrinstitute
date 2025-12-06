<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic Designing Course - RR Institute (Prime Course)</title>
    <meta name="description" content="Unleash your creativity with our Prime Graphic Designing course. Master Photoshop, Illustrator, InDesign, and CorelDraw. Become a pro designer.">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans">
    
    <x-announcement-bar />
    <x-navbar />

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 md:pt-40 md:pb-32 bg-gradient-to-br from-pink-50 to-orange-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-pink-100 text-pink-700 text-sm font-semibold mb-6 tracking-wide uppercase">Our Prime Course</span>
                <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-8 leading-tight">
                    Design the <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-orange-600">Extraordinary</span>
                </h1>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed max-w-2xl mx-auto">
                    Master the industry-standard tools and creative principles to become a highly paid Graphic Designer. Learn Photoshop, Illustrator, InDesign, and CorelDraw.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="px-8 py-4 bg-gradient-to-r from-pink-600 to-orange-600 text-white rounded-full font-bold text-lg hover:shadow-lg hover:shadow-pink-500/30 transform hover:-translate-y-1 transition-all">
                        Start Designing
                    </a>
                    <a href="#curriculum" class="px-8 py-4 bg-white text-gray-700 border border-gray-200 rounded-full font-bold text-lg hover:bg-gray-50 transition-all">
                        View Curriculum
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Decorative blobs -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-20 w-64 h-64 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
    </div>

    <!-- Tools We Cover -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Master the Creative Suite</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We don't just teach tools; we teach you how to create art. Learn the big 4 of the design world.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Photoshop -->
                <div class="group p-8 rounded-2xl bg-blue-50 hover:bg-blue-600 transition-all duration-300 text-center">
                    <div class="w-16 h-16 mx-auto bg-blue-600 text-white rounded-xl flex items-center justify-center text-2xl font-bold mb-6 group-hover:bg-white group-hover:text-blue-600 transition-colors">Ps</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white">Adobe Photoshop</h3>
                    <p class="text-gray-600 text-sm group-hover:text-blue-100">Image editing, photo manipulation, digital painting, and web layout design.</p>
                </div>

                <!-- Illustrator -->
                <div class="group p-8 rounded-2xl bg-orange-50 hover:bg-orange-600 transition-all duration-300 text-center">
                    <div class="w-16 h-16 mx-auto bg-orange-600 text-white rounded-xl flex items-center justify-center text-2xl font-bold mb-6 group-hover:bg-white group-hover:text-orange-600 transition-colors">Ai</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white">Adobe Illustrator</h3>
                    <p class="text-gray-600 text-sm group-hover:text-orange-100">Vector graphics, logo design, illustrations, icons, and typography.</p>
                </div>

                <!-- InDesign -->
                <div class="group p-8 rounded-2xl bg-pink-50 hover:bg-pink-600 transition-all duration-300 text-center">
                    <div class="w-16 h-16 mx-auto bg-pink-600 text-white rounded-xl flex items-center justify-center text-2xl font-bold mb-6 group-hover:bg-white group-hover:text-pink-600 transition-colors">Id</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white">Adobe InDesign</h3>
                    <p class="text-gray-600 text-sm group-hover:text-pink-100">Page layout, brochures, magazines, books, and print media design.</p>
                </div>

                <!-- CorelDraw -->
                <div class="group p-8 rounded-2xl bg-green-50 hover:bg-green-600 transition-all duration-300 text-center">
                    <div class="w-16 h-16 mx-auto bg-green-600 text-white rounded-xl flex items-center justify-center text-2xl font-bold mb-6 group-hover:bg-white group-hover:text-green-600 transition-colors">Cd</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white">CorelDraw</h3>
                    <p class="text-gray-600 text-sm group-hover:text-green-100">Vector illustration, layout, photo editing, and typography for print.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Curriculum -->
    <section id="curriculum" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">What You Will Learn</h2>
                    <div class="space-y-8">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-bold">1</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Design Principles & Color Theory</h3>
                                <p class="text-gray-600">Understanding layout, composition, typography, and psychology of colors.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-bold">2</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Photo Editing & Manipulation</h3>
                                <p class="text-gray-600">Advanced retouching, background removal, color correction, and creative effects using Photoshop.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-bold">3</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Branding & Identity Design</h3>
                                <p class="text-gray-600">Creating logos, business cards, letterheads, and brand guidelines using Illustrator.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-bold">4</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Print & Digital Publishing</h3>
                                <p class="text-gray-600">Designing magazines, newsletters, brochures, and interactive PDFs using InDesign.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-bold">5</div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Vector Art & Illustration</h3>
                                <p class="text-gray-600">Creating scalable vector graphics, marketing materials, and signage using CorelDraw.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-pink-600 to-orange-600 rounded-2xl transform rotate-3 opacity-20"></div>
                    <img src="{{ asset('images/graphic_design_portfolio.png') }}" alt="Graphic Design Portfolio" class="relative rounded-2xl shadow-2xl w-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio/Work Section -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-12">Student Work Showcase</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="rounded-xl overflow-hidden h-64 group relative">
                    <img src="{{ asset('images/student_work_branding.png') }}" alt="Brand Identity Work" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="font-bold text-lg">Brand Identity</span>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden h-64 group relative">
                    <img src="{{ asset('images/graphic_design_hero.png') }}" alt="Creative Workspace" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="font-bold text-lg">Professional Workspace</span>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden h-64 group relative">
                    <img src="{{ asset('images/print_media_design.png') }}" alt="Print Media Design" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="font-bold text-lg">Print Media</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gradient-to-r from-pink-600 to-orange-600 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">Turn Your Creativity Into a Career</h2>
            <p class="text-xl mb-8 text-pink-100">Join our Prime Graphic Designing course and start building your portfolio today.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-pink-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors">Enroll Now</a>
        </div>
    </section>

    <x-footer />
    <x-whatsapp-float />
</body>
</html>
