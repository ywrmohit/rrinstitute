<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - RR Institute Karnal</title>
    <meta name="description" content="Get in touch with RR Institute. Visit our office in Karnal, call us, or send us a message. We are here to help you start your learning journey.">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <!-- Announcement Bar -->
    <x-announcement-bar />

    <!-- Navbar -->
    <x-navbar />

    <!-- Hero Section -->
    <div class="relative pt-32 pb-16 md:pt-40 md:pb-20 bg-gradient-to-br from-green-50 via-white to-emerald-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-green-100 text-green-700 text-sm font-semibold mb-6 tracking-wide uppercase">Get In Touch</span>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    We're Here to <span class="text-green-600">Help You</span>
                </h1>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Have questions? Want to enroll? Need career guidance? Reach out to us - we'd love to hear from you!
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Information Cards -->
    <section class="py-16 -mt-8 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Phone -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 text-center hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Call Us</h3>
                    <p class="text-gray-600 text-sm mb-3">Mon - Sat, 9 AM - 5 PM</p>
                    <a href="tel:+919034760900" class="text-green-600 font-semibold text-lg hover:text-green-700">+91 90347 60900</a>
                </div>

                <!-- Email -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 text-center hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Email Us</h3>
                    <p class="text-gray-600 text-sm mb-3">We'll respond within 24 hours</p>
                    <a href="mailto:visualtenx@gmail.com" class="text-blue-600 font-semibold hover:text-blue-700 break-all">info@rrinstitute.co.in</a>
                </div>

                <!-- Location -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 text-center hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Visit Us</h3>
                    <p class="text-gray-600 text-sm mb-3">Come for a free demo class</p>
                    <p class="text-purple-600 font-semibold">Sco-24, 2nd Floor<br>Behind old bus stand<br>Karnal, Haryana</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('enquiries.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                   placeholder="Your name">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                   placeholder="your.email@example.com">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                   placeholder="+91 98765 43210">
                        </div>

                        <!-- Interest -->
                        <div>
                            <label for="interest" class="block text-sm font-semibold text-gray-700 mb-2">Interested In</label>
                            <select id="interest" name="interest"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                                <option value="">Select a course/service</option>
                                <option value="graphic-designing">Graphic Designing (Prime)</option>
                                <option value="basics-computer">Basics of Computer</option>
                                <option value="tally">Tally & Accounting</option>
                                <option value="web-development">Web Development</option>
                                <option value="programming">C & C++ Programming</option>
                                <option value="visa">Visa Consultancy</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4"
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                      placeholder="Tell us about your requirements..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                                class="w-full bg-green-600 text-white py-4 rounded-lg font-bold text-lg hover:bg-green-700 transform hover:-translate-y-0.5 transition-all shadow-lg hover:shadow-xl">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Map & Additional Info -->
                <div class="space-y-8">
                    <!-- Google Map -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Find Us on Map</h3>
                        <div class="rounded-2xl overflow-hidden shadow-lg h-80 border border-gray-200">
                            <iframe 
                                src="https://maps.google.com/maps?q=RR+Institute,+Sco-24,+2nd+Floor,+Behind+old+bus+stand,+Karnal&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Office Hours
                        </h3>
                        <div class="space-y-2 text-gray-700">
                            <div class="flex justify-between">
                                <span class="font-medium">Monday - Friday</span>
                                <span class="text-gray-600">9:00 AM - 5:00 PM</span>
                            </div>
                           
                            <div class="flex justify-between">
                                <span class="font-medium">Saturday - Sunday</span>
                                <span class="text-red-500 font-medium">Closed</span>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-gradient-to-br from-green-600 to-emerald-600 p-6 rounded-xl text-white">
                        <h3 class="text-xl font-bold mb-4">Connect With Us</h3>
                        <p class="text-green-100 mb-4">Follow us on social media for updates, tips, and success stories!</p>
                        <div class="flex gap-4">
                            <a href="#" class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="https://wa.me/919034760900" target="_blank" class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600">Quick answers to common questions</p>
            </div>

            <div class="space-y-4">
                <details class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 group">
                    <summary class="font-semibold text-gray-900 cursor-pointer list-none flex items-center justify-between">
                        What are your course fees?
                        <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="mt-4 text-gray-600">Course fees vary depending on the program. Please contact us for detailed fee structure and available payment plans. We also offer special discounts for early enrollments!</p>
                </details>

                <details class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 group">
                    <summary class="font-semibold text-gray-900 cursor-pointer list-none flex items-center justify-between">
                        Do you provide certificates?
                        <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="mt-4 text-gray-600">Yes! Upon successful completion of your course, you'll receive an industry-recognized certificate that can boost your resume and career prospects.</p>
                </details>

                <details class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 group">
                    <summary class="font-semibold text-gray-900 cursor-pointer list-none flex items-center justify-between">
                        Can I get a free demo class?
                        <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="mt-4 text-gray-600">Absolutely! We encourage prospective students to attend a free demo class before enrolling. Just call us or visit our office to schedule your demo.</p>
                </details>

                <details class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 group">
                    <summary class="font-semibold text-gray-900 cursor-pointer list-none flex items-center justify-between">
                        Do you help with job placement?
                        <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </summary>
                    <p class="mt-4 text-gray-600">Yes! We provide 100% placement assistance. We have tie-ups with various companies and help our students with resume building, interview preparation, and job opportunities.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />
    
    <!-- WhatsApp Floating Button -->
    <x-whatsapp-float />

</body>
</html>
