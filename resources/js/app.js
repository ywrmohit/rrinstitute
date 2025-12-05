import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Logic
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }

    // Hero Slider Logic
    const slides = document.querySelectorAll('#hero-slider img');
    const dots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;
    const slideInterval = 4000; // 4 seconds

    function showSlide(index) {
        // Reset all slides
        slides.forEach((slide) => {
            slide.classList.remove('opacity-100');
            slide.classList.add('opacity-0');
        });

        // Reset all dots
        dots.forEach((dot) => {
            dot.classList.remove('bg-white', 'ring-2', 'ring-green-500');
            dot.classList.add('bg-white/50');
        });

        // Activate current slide and dot
        slides[index].classList.remove('opacity-0');
        slides[index].classList.add('opacity-100');

        dots[index].classList.remove('bg-white/50');
        dots[index].classList.add('bg-white', 'ring-2', 'ring-green-500');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Start Auto Play
    if (slides.length > 0) {
        let sliderId = setInterval(nextSlide, slideInterval);

        // Optional: Pause on hover
        const sliderContainer = document.getElementById('hero-slider');
        if (sliderContainer) {
            sliderContainer.parentElement.addEventListener('mouseenter', () => clearInterval(sliderId));
            sliderContainer.parentElement.addEventListener('mouseleave', () => sliderId = setInterval(nextSlide, slideInterval));
        }

        // Click on dots to change slide
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
                clearInterval(sliderId);
                sliderId = setInterval(nextSlide, slideInterval);
            });
        });
    }

    // Navbar and Announcement Bar Scroll Effect
    const navbar = document.getElementById('navbar');
    const announcementBar = document.getElementById('announcement-bar');

    // Set initial navbar position below announcement bar
    if (navbar && announcementBar) {
        const announcementHeight = announcementBar.offsetHeight;
        navbar.style.top = `${announcementHeight}px`;

        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > announcementHeight) {
                // Hide announcement bar and stick navbar to top
                announcementBar.style.transform = 'translateY(-100%)';
                navbar.style.top = '0px';
                navbar.classList.add('shadow-lg', 'bg-white/95', 'backdrop-blur-md');
            } else {
                // Show announcement bar
                announcementBar.style.transform = 'translateY(0)';
                navbar.style.top = `${announcementHeight}px`;
                navbar.classList.remove('shadow-lg', 'bg-white/95', 'backdrop-blur-md');
            }
        });
    }
});
