<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Online Therapy Works - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap');
        
        body{
font-family: museo-sans, sans-serif;
font-style: normal;
font-weight: 500;
}
        
        .museo-sans-rounded {
            font-family: 'Museo Sans', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #F9F0E5 0%, #0B87C5 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(11, 135, 197, 0.15);
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .slide-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .slide-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<!-- Main Section -->
<section class="container mx-auto relative overflow-hidden py-12 md:py-10" style="background-color:;">
    <!-- Background Elements -->
    <!--<div class="absolute top-0 left-0 w-full h-full">-->
    <!--    <div class="absolute top-20 left-10 w-32 h-32 rounded-full opacity-10 floating" style="background-color: #0B87C5;"></div>-->
    <!--    <div class="absolute bottom-20 right-10 w-24 h-24 rounded-full opacity-10 floating" style="background-color: #FFC73C; animation-delay: 1s;"></div>-->
    <!--    <div class="absolute top-1/2 right-20 w-16 h-16 rounded-full opacity-10 floating" style="background-color: #F36E3B; animation-delay: 2s;"></div>-->
    <!--</div>-->
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16 slide-in" id="header">
            <!--<div class="inline-flex items-center justify-center w-16 h-16 rounded-full mb-6 pulse-animation" style="background-color: #3DD288;">-->
            <!--    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
            <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>-->
            <!--    </svg>-->
            <!--</div>-->
            <h1 class="museo-sans-rounded text-4xl lg:text-6xl font-bold mb-6" style="color: #4A4A4A;">
                Why Online Therapy 
                <span style="color: #0B87C5;">Works</span>
            </h1>
            <p class="museo-sans text-lg lg:text-xl max-w-3xl mx-auto leading-relaxed" style="color: #4A4A4A;">
               Whether you’re a busy parent, a working adult, or a remote learner—our virtual therapy sessions bring expert care to your doorstep.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-20">
            <!-- Left Content -->
            <div class="slide-in" id="main-content">
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #0B87C5;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl font-bold mb-2" style="color: #4A4A4A;"> Easy scheduling</h3>
                            <p class="museo-sans text-base leading-relaxed" style="color: #4A4A4A;">
                                Access professional speech therapy from the comfort of your home. No travel time, no waiting rooms, just quality care when you need it most.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #FFC73C;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl font-bold mb-2" style="color: #4A4A4A;">Secure and private platforms</h3>
                            <p class="museo-sans text-base leading-relaxed" style="color: #4A4A4A;">
                                Book sessions that fit your lifestyle. Early morning, late evening, or during lunch breaks - therapy adapts to your schedule.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #F36E3B;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl font-bold mb-2" style="color: #4A4A4A;"> Interactive tools that keep clients engaged</h3>
                            <p class="museo-sans text-base leading-relaxed" style="color: #4A4A4A;">
                                Feel more comfortable opening up in your own space. Our secure platform ensures your privacy while maintaining professional standards.
                            </p>
                        </div>
                    </div>
                    
                                        <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background-color:#3DD288;">
                                           <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl font-bold mb-2" style="color: #4A4A4A;"> Real-time feedback and progress tracking</h3>
                            <p class="museo-sans text-base leading-relaxed" style="color: #4A4A4A;">
                                Feel more comfortable opening up in your own space. Our secure platform ensures your privacy while maintaining professional standards.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Visual -->
<div class="slide-in" id="visual-content">
    <div class="relative w-full h-80 lg:h-[420px] rounded-3xl overflow-hidden ">
        <img src="assets/online-Threpy.webp" alt="Interactive Session Visual" class="w-full h-full object-cover rounded-3xl">
    </div>
</div>        </div>

        <!-- Benefits Grid -->
        <!--<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">-->
        <!--    <div class="text-center p-6 rounded-2xl card-hover slide-in bg-white shadow-sm" id="benefit-1">-->
        <!--        <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center" style="background-color: #0B87C5;">-->
        <!--            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
        <!--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>-->
        <!--            </svg>-->
        <!--        </div>-->
        <!--        <h4 class="museo-sans-rounded text-lg font-bold mb-2" style="color: #4A4A4A;">Expert Therapists</h4>-->
        <!--        <p class="museo-sans text-sm" style="color: #4A4A4A;">Licensed professionals with specialized training</p>-->
        <!--    </div>-->

        <!--    <div class="text-center p-6 rounded-2xl card-hover slide-in bg-white shadow-sm" id="benefit-2">-->
        <!--        <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center" style="background-color: #FFC73C;">-->
        <!--            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
        <!--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>-->
        <!--            </svg>-->
        <!--        </div>-->
        <!--        <h4 class="museo-sans-rounded text-lg font-bold mb-2" style="color: #4A4A4A;">Progress Tracking</h4>-->
        <!--        <p class="museo-sans text-sm" style="color: #4A4A4A;">Real-time monitoring and detailed reports</p>-->
        <!--    </div>-->

        <!--    <div class="text-center p-6 rounded-2xl card-hover slide-in bg-white shadow-sm" id="benefit-3">-->
        <!--        <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center" style="background-color: #F36E3B;">-->
        <!--            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
        <!--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>-->
        <!--            </svg>-->
        <!--        </div>-->
        <!--        <h4 class="museo-sans-rounded text-lg font-bold mb-2" style="color: #4A4A4A;">Personalized Plans</h4>-->
        <!--        <p class="museo-sans text-sm" style="color: #4A4A4A;">Customized therapy programs for each individual</p>-->
        <!--    </div>-->

        <!--    <div class="text-center p-6 rounded-2xl card-hover slide-in bg-white shadow-sm" id="benefit-4">-->
        <!--        <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center" style="background-color: #3DD288;">-->
        <!--            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
        <!--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>-->
        <!--            </svg>-->
        <!--        </div>-->
        <!--        <h4 class="museo-sans-rounded text-lg font-bold mb-2" style="color: #4A4A4A;">Family Support</h4>-->
        <!--        <p class="museo-sans text-sm" style="color: #4A4A4A;">Involving families in the therapy journey</p>-->
        <!--    </div>-->
        <!--</div>-->

        <!-- Call to Action -->
        <!--<div class="text-center slide-in" id="cta">-->
        <!--    <div class="inline-block p-8 rounded-3xl" style="background: linear-gradient(135deg, #0B87C5 0%, #3DD288 50%, #FFC73C 100%);">-->
        <!--        <h3 class="museo-sans-rounded text-2xl lg:text-3xl font-bold text-white mb-4">-->
        <!--            Ready to Start Your Journey?-->
        <!--        </h3>-->
        <!--        <p class="museo-sans text-lg text-white opacity-90 mb-6 max-w-2xl mx-auto">-->
        <!--            Experience the convenience and effectiveness of online speech therapy with Talking Tales.-->
        <!--        </p>-->
        <!--        <button class="bg-white text-lg font-bold px-8 py-4 rounded-full card-hover museo-sans-rounded" style="color: #0B87C5;">-->
        <!--            Get Started Today-->
        <!--        </button>-->
        <!--    </div>-->
        <!--</div>-->
        
                                    <div class="flex flex-col mt-10 sm:flex-row gap-4 justify-center">
                <!--<button class="bg-primary-orange hover:from-primary-green hover:to-primary-blue text-white font-museo-rounded font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105 shadow-lg">-->
                <!--    Start Your Journey-->
                <!--</button>-->
                <button class="border-2 border-primary-blue text-primary-blue hover:bg-primary-blue hover:text-white font-museo-rounded font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105">
                    Read More Stories
                </button>
            </div>

    </div>
</section>

<script>
    // Intersection Observer for animations
    const observerOption = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observers = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOption);

    // Observe all elements with slide-in class
    document.querySelectorAll('.slide-in').forEach(el => {
        observers.observe(el);
    });

    // Add staggered animation delays
    const benefits = document.querySelectorAll('[id^="benefit-"]');
    benefits.forEach((benefit, index) => {
        benefit.style.transitionDelay = `${index * 0.1}s`;
    });

    // Smooth scrolling for any internal links (if added later)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add subtle parallax effect on scroll
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        const floatingElements = document.querySelectorAll('.floating');
        floatingElements.forEach(el => {
            el.style.transform = `translateY(${rate}px)`;
        });
    });

    // Interactive hover effects for cards
    const cards = document.querySelectorAll('.card-hover');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
</script>

</html>