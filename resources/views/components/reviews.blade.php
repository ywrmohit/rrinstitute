<section class="py-20 bg-gray-50 overflow-hidden" x-data="{ 
    activeSlide: 0,
    totalSlides: 6,
    visibleSlides: 3,
    next() {
        if (this.activeSlide < (this.totalSlides - this.visibleSlides)) {
            this.activeSlide++;
        } else {
            this.activeSlide = 0; // Infinite loop optional
        }
    },
    prev() {
        if (this.activeSlide > 0) {
            this.activeSlide--;
        } else {
            this.activeSlide = this.totalSlides - this.visibleSlides; // Loop back
        }
    },
    init() {
        // Adjust visible slides on resize
        let updateVisible = () => {
             if (window.innerWidth < 768) this.visibleSlides = 1;
             else if (window.innerWidth < 1024) this.visibleSlides = 2;
             else this.visibleSlides = 3;
        };
        updateVisible();
        window.addEventListener('resize', updateVisible);
        
        // Auto slide
        setInterval(() => {
            this.next();
        }, 5000);
    },
    reviews: [
        {
            name: 'Rahul Sharma',
            role: 'Web Developer',
            image: '{{ asset('images/reviews/student1.png') }}',
            rating: 5,
            text: 'The Web Development course at RR Institute was a game-changer. The hands-on projects helped me land my first job within 3 months!'
        },
        {
            name: 'Priya Verma',
            role: 'Graphic Designer',
            image: '{{ asset('images/reviews/student2.png') }}',
            rating: 5,
            text: 'I always loved art but didn\'t know digital tools. This course taught me everything from Photoshop to Illustrator. Now I work as a freelancer!'
        },
        {
            name: 'Amit Singh',
            role: 'Accountant',
            image: '{{ asset('images/reviews/student3.png') }}',
            rating: 5,
            text: 'Tally & Accounting course is excellent. The faculty helped me understand GST concepts clearly, which is helping me in my current job.'
        },
        {
            name: 'Sneha Patel',
            role: 'Office Assistant',
            image: '{{ asset('images/reviews/student4.png') }}',
            rating: 5,
            text: 'The Basics of Computer course gave me the confidence to work in an office environment. I learned Word, Excel, and PowerPoint effectively.'
        },
        {
            name: 'Vikram Malhotra',
            role: 'Software Engineer',
            image: '{{ asset('images/reviews/student5.png') }}',
            rating: 5,
            text: 'Learning C & C++ here laid a strong foundation for my programming career. The logic building sessions were particularly helpful.'
        },
        {
            name: 'Anjali Gupta',
            role: 'Finance Executive',
            image: '{{ asset('images/reviews/student6.png') }}',
            rating: 5,
            text: 'Great institute for Tally Prime. The practical sessions were very detailed and the simplified teaching method made complex topics easy.'
        }
    ]
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block py-1 px-3 rounded-full bg-green-100 text-green-700 text-sm font-semibold mb-4 tracking-wide uppercase">Student Success Stories</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Students Say</h2>
            <p class="text-gray-600 text-lg">Don't just take our word for it. Hear from the students who have transformed their careers with RR Institute.</p>
        </div>

        <div class="relative group">
            <!-- Slider Wrapper -->
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out" 
                     :style="'transform: translateX(-' + (activeSlide * (100 / visibleSlides)) + '%)'">
                    
                    <template x-for="review in reviews" :key="review.name">
                        <div class="flex-shrink-0 px-4 box-border" :style="'width: ' + (100 / visibleSlides) + '%'">
                            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 h-full relative hover:border-green-200 transition-colors">
                                <div class="absolute top-6 right-6 opacity-10">
                                    <svg class="w-12 h-12 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z"/></svg>
                                </div>
                                <div class="flex items-center gap-4 mb-6">
                                    <img :src="review.image" :alt="review.name" class="w-14 h-14 rounded-full object-cover border-2 border-green-100 shadow-sm">
                                    <div>
                                        <h4 class="font-bold text-gray-900" x-text="review.name"></h4>
                                        <p class="text-sm text-green-600 font-medium" x-text="review.role"></p>
                                    </div>
                                </div>
                                <div class="flex text-yellow-400 mb-4 text-sm">
                                    <template x-for="i in 5">
                                        <span>★</span>
                                    </template>
                                </div>
                                <p class="text-gray-600 text-sm leading-relaxed" x-text="review.text"></p>
                            </div>
                        </div>
                    </template>
                    
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button @click="prev()" 
                    class="absolute top-1/2 -left-4 md:-left-12 transform -translate-y-1/2 p-3 rounded-full bg-white shadow-lg text-gray-600 hover:text-green-600 hover:scale-110 transition-all focus:outline-none border border-gray-100 z-10"
                    :class="{ 'opacity-50 cursor-not-allowed': activeSlide === 0 && false }"> <!-- Removed disabled state for infinity loop feeling -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button @click="next()" 
                    class="absolute top-1/2 -right-4 md:-right-12 transform -translate-y-1/2 p-3 rounded-full bg-white shadow-lg text-gray-600 hover:text-green-600 hover:scale-110 transition-all focus:outline-none border border-gray-100 z-10"
                    :class="{ 'opacity-50 cursor-not-allowed': activeSlide >= (totalSlides - visibleSlides) && false }">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
            
            <!-- Dots -->
            <div class="flex justify-center mt-8 gap-2">
                 <template x-for="idx in (totalSlides - visibleSlides + 1)" :key="idx">
                    <button @click="activeSlide = idx - 1" 
                            class="h-2 rounded-full transition-all duration-300"
                            :class="activeSlide === (idx - 1) ? 'w-8 bg-green-600' : 'w-2 bg-gray-300 hover:bg-gray-400'">
                    </button>
                </template>
            </div>
        </div>
    </div>
</section>
