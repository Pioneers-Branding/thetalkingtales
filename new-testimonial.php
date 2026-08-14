<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials Carousel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');
        
        :root {
            --primary-blue: #3B82F6;
            --primary-green: #10B981;
            --primary-yellow: #F59E0B;
            --primary-orange: #F97316;
            --primary-gray: #374151;
            --primary-cream: #FEF7ED;
        }
        
     
        
        .text-primary-blue { color: var(--primary-blue); }
        .text-primary-green { color: var(--primary-green); }
        .text-primary-yellow { color: var(--primary-yellow); }
        .text-primary-orange { color: var(--primary-orange); }
        .text-primary-gray { color: var(--primary-gray); }
        .bg-primary-blue { background-color: var(--primary-blue); }
        .bg-primary-green { background-color: var(--primary-green); }
        .bg-primary-yellow { background-color: var(--primary-yellow); }
        .bg-primary-orange { background-color: var(--primary-orange); }
        .bg-primary-cream { background-color: var(--primary-cream); }
        .border-primary-blue { border-color: var(--primary-blue); }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }
    </style>
</head>
<body>
    <section id="testimonials" class="bg-gradient-to-b from-white to-orange-50 py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto max-w-6xl">
            
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="font-museo-rounded text-4xl md:text-6xl font-black text-gray-800 mb-6">
                    Our <span class="text-primary-orange">Tales</span>
                </h2>
                <p class="font-museo text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                   Helping Voices Come Alive.
                </p>
            </div>

            <!-- Testimonials Carousel Container -->
            <div class="relative">
                
                <!-- Carousel Wrapper -->
                <div class="overflow-hidden rounded-3xl" id="testimonialCarousel">
                    <div class="flex transition-transform duration-500 ease-in-out" id="carouselSlides">
                        
                        <!-- Slide 1 -->
                        <div class="w-full flex-shrink-0">
                            <div class="bg-gradient-to-br from-blue-50 via-white to-blue-100 p-8 lg:p-16 rounded-3xl">
                                <div class="max-w-4xl mx-auto text-center space-y-8">
                                    <!-- Quote -->
                                    <div class="relative">
                                        <div class="absolute -top-4 -left-4 text-6xl text-blue-200 font-serif">"</div>
                                        <blockquote class="font-museo text-xl md:text-2xl lg:text-3xl text-gray-800 leading-relaxed relative z-10 px-8">
We came to rehab for speech therapy, and my mother’s understanding and speech has improved greatly. Thanks to Ms. Architha, we’re continuing therapy with confidence.                                        </blockquote>
                                        <div class="absolute -bottom-4 -right-4 text-6xl text-blue-200 font-serif">"</div>
                                    </div>
                                    
                                    <!-- Client Info -->
                                    <div class="flex items-center justify-center space-x-4">
                                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-green-500 rounded-full flex items-center justify-center shadow-lg">
                                            <div class="text-white font-museo-rounded font-bold text-lg">JT</div>
                                        </div>
                                        <div class="text-left">
                                            <h4 class="font-museo-rounded text-xl font-bold text-gray-800">Jennifer Thompson</h4>
                                            <p class="font-museo text-gray-600">Emma's Mom • Pediatric Therapy</p>
                                            <div class="flex mt-2">
                                                <div class="flex space-x-1">
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 2 -->
                        <div class="w-full flex-shrink-0">
                            <div class="bg-gradient-to-br from-yellow-50 via-white to-yellow-100 p-8 lg:p-16 rounded-3xl">
                                <div class="max-w-4xl mx-auto text-center space-y-8">
                                    <!-- Quote -->
                                    <div class="relative">
                                        <div class="absolute -top-4 -left-4 text-6xl text-yellow-200 font-serif">"</div>
                                        <blockquote class="font-museo text-xl md:text-2xl lg:text-3xl text-gray-800 leading-relaxed relative z-10 px-8">
My sister was admitted in the center Post GBS..
She came here bed ridden
Today tracheostomy tube, oxygen and food pipe is removed. Big thanks to Swallow Therapist - Aishwarya maam and doctors                                        </blockquote>
                                        <div class="absolute -bottom-4 -right-4 text-6xl text-yellow-200 font-serif">"</div>
                                    </div>
                                    
                                    <!-- Client Info -->
                                    <div class="flex items-center justify-center space-x-4">
                                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full flex items-center justify-center shadow-lg">
                                            <div class="text-white font-museo-rounded font-bold text-lg">DC</div>
                                        </div>
                                        <div class="text-left">
                                            <h4 class="font-museo-rounded text-xl font-bold text-gray-800">David Chen</h4>
                                            <p class="font-museo text-gray-600">Marcus's Dad • Online Sessions</p>
                                            <div class="flex mt-2">
                                                <div class="flex space-x-1">
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Slide 3 -->
                        <div class="w-full flex-shrink-0">
                            <div class="bg-gradient-to-br from-green-50 via-white to-green-100 p-8 lg:p-16 rounded-3xl">
                                <div class="max-w-4xl mx-auto text-center space-y-8">
                                    <!-- Quote -->
                                    <div class="relative">
                                        <div class="absolute -top-4 -left-4 text-6xl text-green-200 font-serif">"</div>
                                        <blockquote class="font-museo text-xl md:text-2xl lg:text-3xl text-gray-800 leading-relaxed relative z-10 px-8">
Speech & Swallow Therapist Ms Aishwarya has done a great job, whereby my mother's speech function was restored and swallowing disorder was treated. This facilitated removal of Ryles Tube and elimination of Aspiration problem. Now she is speaking and also having food, orally                                        </blockquote>
                                        <div class="absolute -bottom-4 -right-4 text-6xl text-green-200 font-serif">"</div>
                                    </div>
                                    
                                    <!-- Client Info -->
                                    <div class="flex items-center justify-center space-x-4">
                                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-blue-500 rounded-full flex items-center justify-center shadow-lg">
                                            <div class="text-white font-museo-rounded font-bold text-lg">SW</div>
                                        </div>
                                        <div class="text-left">
                                            <h4 class="font-museo-rounded text-xl font-bold text-gray-800">Sarah Williams</h4>
                                            <p class="font-museo text-gray-600">Marketing Director • Adult Therapy</p>
                                            <div class="flex mt-2">
                                                <div class="flex space-x-1">
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                    <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Arrows -->
                <button class="absolute left-4 top-1/2 transform -translate-y-1/2 w-14 h-14 bg-white/90 hover:bg-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group z-10" id="prevBtn">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-blue-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button class="absolute right-4 top-1/2 transform -translate-y-1/2 w-14 h-14 bg-white/90 hover:bg-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group z-10" id="nextBtn">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-blue-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Carousel Indicators -->
            <div class="flex justify-center mt-12 space-x-3" id="indicators">
                <button class="w-3 h-3 rounded-full bg-blue-600 transition-all duration-300" data-slide="0"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="1"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="2"></button>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center mt-16">
                <p class="font-museo text-lg text-gray-600 mb-8">
                    Join hundreds of families who've transformed their communication journey
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-museo-rounded font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105 shadow-lg">
                        Start Your Journey
                    </button>
                    <button class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-museo-rounded font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105">
                        Book an appointment
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Testimonials Carousel Functionality
        class TestimonialsCarousel {
            constructor() {
                this.currentSlide = 0;
                this.totalSlides = 3;
                this.carousel = document.getElementById('carouselSlides');
                this.prevBtn = document.getElementById('prevBtn');
                this.nextBtn = document.getElementById('nextBtn');
                this.indicators = document.querySelectorAll('#indicators button');
                this.autoplayInterval = null;
                this.autoplayDelay = 6000; // 6 seconds
                
                this.init();
            }
            
            init() {
                // Add event listeners
                this.prevBtn.addEventListener('click', () => this.prevSlide());
                this.nextBtn.addEventListener('click', () => this.nextSlide());
                
                // Add indicator listeners
                this.indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => this.goToSlide(index));
                });
                
                // Start autoplay
                this.startAutoplay();
                
                // Pause autoplay on hover
                const carouselContainer = document.getElementById('testimonialCarousel');
                carouselContainer.addEventListener('mouseenter', () => this.stopAutoplay());
                carouselContainer.addEventListener('mouseleave', () => this.startAutoplay());
                
                // Handle touch/swipe for mobile
                this.addTouchSupport();
            }
            
            goToSlide(slideIndex) {
                this.currentSlide = slideIndex;
                this.updateCarousel();
                this.updateIndicators();
                this.restartAutoplay();
            }
            
            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                this.updateCarousel();
                this.updateIndicators();
                this.restartAutoplay();
            }
            
            prevSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                this.updateCarousel();
                this.updateIndicators();
                this.restartAutoplay();
            }
            
            updateCarousel() {
                const translateX = -this.currentSlide * 100;
                this.carousel.style.transform = `translateX(${translateX}%)`;
            }
            
            updateIndicators() {
                this.indicators.forEach((indicator, index) => {
                    if (index === this.currentSlide) {
                        indicator.classList.remove('bg-gray-300');
                        indicator.classList.add('bg-blue-600');
                    } else {
                        indicator.classList.remove('bg-blue-600');
                        indicator.classList.add('bg-gray-300');
                    }
                });
            }
            
            startAutoplay() {
                this.autoplayInterval = setInterval(() => {
                    this.nextSlide();
                }, this.autoplayDelay);
            }
            
            stopAutoplay() {
                if (this.autoplayInterval) {
                    clearInterval(this.autoplayInterval);
                    this.autoplayInterval = null;
                }
            }
            
            restartAutoplay() {
                this.stopAutoplay();
                this.startAutoplay();
            }
            
            addTouchSupport() {
                let startX = 0;
                let startY = 0;
                let endX = 0;
                let endY = 0;
                
                const carouselContainer = document.getElementById('testimonialCarousel');
                
                carouselContainer.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                    startY = e.touches[0].clientY;
                });
                
                carouselContainer.addEventListener('touchend', (e) => {
                    endX = e.changedTouches[0].clientX;
                    endY = e.changedTouches[0].clientY;
                    this.handleSwipe();
                });
                
                const handleSwipe = () => {
                    const deltaX = startX - endX;
                    const deltaY = startY - endY;
                    
                    // Only handle horizontal swipes
                    if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 50) {
                        if (deltaX > 0) {
                            // Swipe left - next slide
                            this.nextSlide();
                        } else {
                            // Swipe right - previous slide
                            this.prevSlide();
                        }
                    }
                };
                
                this.handleSwipe = handleSwipe;
            }
        }
        
        // Initialize carousel when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new TestimonialsCarousel();
        });
        
        // Add intersection observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('.space-y-8');
            animatedElements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>