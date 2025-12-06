<section class="py-20 bg-white" x-data="{ activeAccordion: null }">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block py-1 px-3 rounded-full bg-green-100 text-green-700 text-sm font-semibold mb-4 tracking-wide uppercase">Common Questions</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-gray-600 text-lg">Find answers to common questions about our courses, admissions, and services.</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden hover:border-green-200 transition-colors">
                <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="flex justify-between items-center w-full p-6 text-left bg-white focus:outline-none">
                    <span class="text-lg font-bold text-gray-900" :class="activeAccordion === 1 ? 'text-green-600' : ''">What courses do you offer?</span>
                    <span class="p-2 rounded-full bg-gray-50 text-gray-400 transition-transform duration-300" :class="activeAccordion === 1 ? 'rotate-180 bg-green-50 text-green-600' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 1" x-collapse>
                    <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-50">
                        We offer a wide range of computer courses including Graphic Designing, Web Development, Tally & Accounting, C/C++ Programming, and Basic Computer proficiency courses.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden hover:border-green-200 transition-colors">
                <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="flex justify-between items-center w-full p-6 text-left bg-white focus:outline-none">
                    <span class="text-lg font-bold text-gray-900" :class="activeAccordion === 2 ? 'text-green-600' : ''">Do you provide certificates?</span>
                    <span class="p-2 rounded-full bg-gray-50 text-gray-400 transition-transform duration-300" :class="activeAccordion === 2 ? 'rotate-180 bg-green-50 text-green-600' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 2" x-collapse>
                    <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-50">
                        Yes, RR Institute is a government-recognized institute. All students receive valid certificates upon successful completion of their course, which are recognized by companies and job sectors.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden hover:border-green-200 transition-colors">
                <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="flex justify-between items-center w-full p-6 text-left bg-white focus:outline-none">
                    <span class="text-lg font-bold text-gray-900" :class="activeAccordion === 3 ? 'text-green-600' : ''">Do you offer placement assistance?</span>
                    <span class="p-2 rounded-full bg-gray-50 text-gray-400 transition-transform duration-300" :class="activeAccordion === 3 ? 'rotate-180 bg-green-50 text-green-600' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 3" x-collapse>
                    <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-50">
                        Absolutely. We have a dedicated placement cell that helps students with resume building, interview preparation, and connecting with local companies for job opportunities.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden hover:border-green-200 transition-colors">
                <button @click="activeAccordion = activeAccordion === 4 ? null : 4" class="flex justify-between items-center w-full p-6 text-left bg-white focus:outline-none">
                    <span class="text-lg font-bold text-gray-900" :class="activeAccordion === 4 ? 'text-green-600' : ''">Can I learn part-time?</span>
                    <span class="p-2 rounded-full bg-gray-50 text-gray-400 transition-transform duration-300" :class="activeAccordion === 4 ? 'rotate-180 bg-green-50 text-green-600' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 4" x-collapse>
                    <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-50">
                        Yes, we have flexible batch timings suitable for students and working professionals. You can choose morning, afternoon, or evening batches as per your convenience.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden hover:border-green-200 transition-colors">
                <button @click="activeAccordion = activeAccordion === 5 ? null : 5" class="flex justify-between items-center w-full p-6 text-left bg-white focus:outline-none">
                    <span class="text-lg font-bold text-gray-900" :class="activeAccordion === 5 ? 'text-green-600' : ''">Do you help with student visas?</span>
                    <span class="p-2 rounded-full bg-gray-50 text-gray-400 transition-transform duration-300" :class="activeAccordion === 5 ? 'rotate-180 bg-green-50 text-green-600' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 5" x-collapse>
                    <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-50">
                        Yes, we provide comprehensive consultancy for student visas, helping with documentation, university selection, and application processes for various countries.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12 text-center">
             <p class="text-gray-600 mb-4">Have more questions?</p>
             <a href="{{ route('contact') }}" class="inline-flex items-center text-green-600 font-bold hover:text-green-700 hover:underline">
                 Contact our support team
                 <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
             </a>
        </div>
    </div>
</section>
