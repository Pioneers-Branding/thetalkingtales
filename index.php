<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talking Tales - Speech Therapy</title>
  
<?php include('header-links.php');?>
   

<script>
           window.addEventListener('scroll', () => {
                const navbar = document.getElementById('navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
</script>

     <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'museo-rounded': ['Museo Sans Rounded', 'sans-serif'],
                        'museo': ['Museo Sans', 'sans-serif']
                    }
                }
            }
        }
     </script>


<!-- HERO -->
    <style>
    
    @font-face {
  font-family: 'Museo Sans';
  src: url('/fonts/museo/MuseoSans-500.woff2') format('woff2'),
       url('/fonts/museo/MuseoSans-500.woff') format('woff'),
       url('/fonts/museo/fonnts.com-Museo_Sans_500.otf') format('opentype');
  font-weight: 500;
  font-style: normal;
}

/* Museo Sans Rounded 700 */
@font-face {
  font-family: 'Museo Sans Rounded';
  src: url('/fonts/museo/MuseoSansRounded-700.woff2') format('woff2'),
       url('/fonts/museo/MuseoSansRounded-700.woff') format('woff'),
       url('/fonts/museo/MuseoSansRounded700.otf') format('opentype');
  font-weight: 700;
  font-style: normal;
}



body {
  font-family: 'Museo Sans', sans-serif !important;
  font-weight: 500 !important;
}

h1 {
  font-family: 'Museo Sans Rounded', sans-serif !important;
  font-weight: 700 !important;
}
h2 {
  font-family: 'Museo Sans Rounded', sans-serif !important;
  font-weight: 700 !important;
}
    h3 {
  font-family: 'Museo Sans Rounded', sans-serif !important;
  font-weight: 700 !important;
}
    
    
    
    
            .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', sans-serif; }
    
    
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-10px) rotate(1deg); }
            66% { transform: translateY(-5px) rotate(-1deg); }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes pulseSoft {
            0%, 100% { opacity: 0.6; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #F9F0E5 0%, #FFFFFF 50%, #F8FAFC 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #0B87C5 0%, #3DD288 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-grid {
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(11, 135, 197, 0.03) 0%, transparent 25%),
                radial-gradient(circle at 75% 75%, rgba(61, 210, 136, 0.03) 0%, transparent 25%);
        }
        
        .element-shadow {
            filter: drop-shadow(0 10px 25px rgba(0, 0, 0, 0.1));
        }
    </style>

<!-- our services -->
<style>
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
    
    .service-card {
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    .service-card:nth-child(1) { animation-delay: 0.1s; }
    .service-card:nth-child(2) { animation-delay: 0.2s; }
    .service-card:nth-child(3) { animation-delay: 0.3s; }
</style>

   


    <style>
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
    
    /* Custom scrollbar for testimonials if needed */
    .carousel-container::-webkit-scrollbar {
        display: none;
    }
    
    .carousel-container {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>


    <!-- stats -->

 

</head>
<body class="  antialiased">

<?php include('header.php');?>



    <!-- Hero Section -->
<section class="relative min-h-screen w-full flex items-end overflow-hidden">
    <!-- Video Background -->
    <div class="absolute inset-0 z-0">
        <video autoplay muted loop playsinline class="w-full h-full object-cover">
            <source src="assets/video/TT-final-video.mp4" type="video/mp4">
            <!-- Fallback image if video doesn't load -->
            <img src="assets/bg-image/2.png" alt="Fallback background" class="w-full h-full object-cover">
        </video>
        
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/40 to-black/60"></div>
    </div>

    <!-- Hero Content Overlay - Positioned lower -->
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-3xl mt-auto mb-32"> <!-- Added mt-auto and mb-32 for vertical positioning -->
            <!-- Main Headline -->
            <div class="space-y-6 mb-12">
                <h1 class="museo-rounded text-5xl md:text-6xl lg:text-7xl text-white leading-tight">
                   Online Speech Therapy for
                    <br>
                    <span class="text-primary-yellow relative">
                       Kids and
                        <!--<div class="absolute -top-2 -right-2 w-4 h-4 bg-primary-yellow rounded-full animate-ping opacity-75"></div>-->
                    </span>
                   <br>
                    <span class="text-primary-green">Adults</span>
                </h1>
                
                <p class="museo text-xl md:text-2xl text-white/90 max-w-3xl leading-relaxed">
From first words to meaningful conversations
</p>
            </div>
            

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 mb-12">
                <a href="#services-all" class="group bg-primary-orange hover:from-primary-green hover:to-primary-blue text-white museo-rounded font-bold px-8 py-5 rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-xl flex items-center justify-center space-x-3">
                    <span>Take a Free Screening Today</span>
                                              <div class="w-4 h-4 border-2 border-current rounded-full relative">
                        <div class="absolute inset-1 bg-current rounded-full group-hover:scale-0 transition-transform duration-300"></div>
                    </div>

                    <!--<div class="w-2 h-2 border-r-2 border-b-2 border-white transform rotate-45 group-hover:translate-x-1 transition-transform duration-300"></div>-->
                </a>
                
                <!--<button class="group border-2 border-white text-white hover:bg-white hover:text-primary-gray font-museo-rounded font-bold px-8 py-5 rounded-2xl transition-all duration-300 hover:scale-105 backdrop-blur-md flex items-center justify-center space-x-3">-->
                    <!--<div class="w-4 h-4 border-2 border-current rounded-full relative">-->
                    <!--    <div class="absolute inset-1 bg-current rounded-full group-hover:scale-0 transition-transform duration-300"></div>-->
                    <!--</div>-->
                <!--    <span>Let's Talk</span>-->
                <!--</button>-->
            </div>
            
            
                        <!-- Visit Our Centers -->
<div class="mt-10 museo text-white">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">Visit Our Centers</h2>
    <div class="flex flex-col sm:flex-row gap-6 text-lg md:text-xl text-white/90">
        <!-- Sainikpuri -->
        <div class="flex items-center space-x-3">
            <i class="fas fa-map-marker-alt text-primary-yellow text-2xl"></i>
            <span>Madhapur</span>
        </div>

        <!-- Madhapur -->
        <div class="flex items-center space-x-3">
            <i class="fas fa-map-marker-alt text-primary-yellow text-2xl"></i>
            <span>Sainikpuri</span>
        </div>
    </div>
</div>
        </div>
    </div>
</section>  




<!-- our services -->
    <section id="services-all" class="bg-white py-12 md:py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Background Decorative Elements -->
        <!--<div class="absolute top-20 left-8 opacity-10">-->
        <!--    <div class="w-32 h-24 bg-primary-yellow rounded-3xl rounded-br-lg"></div>-->
        <!--</div>-->
        <!--<div class="absolute bottom-32 right-12 opacity-10">-->
        <!--    <div class="w-24 h-24 bg-primary-green rounded-full"></div>-->
        <!--</div>-->
        <!--<div class="absolute top-1/2 left-4 opacity-10">-->
        <!--    <div class="w-16 h-20 bg-primary-orange rounded-full rounded-tl-3xl rounded-br-3xl"></div>-->
        <!--</div>-->
    
        <div class="container mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16 md:mb-20">
                <!--<div class="inline-flex items-center space-x-2 bg-primary-cream/50 rounded-full px-6 py-3 backdrop-blur-sm border border-primary-cream/60 mb-6">-->
                <!--    <div class="w-2 h-2 bg-primary-blue rounded-full animate-pulse"></div>-->
                <!--    <span class="text-primary-gray font-museo text-sm font-medium">What We Offer</span>-->
                <!--</div>-->
                
                <h2 class="museo-rounded text-4xl md:text-5xl lg:text-6xl font-bold text-primary-gray mb-6 leading-tight">
                    Who 
                   
                    <span class="text-primary-orange">We Help</span>
                </h2>
                
                <p class="museo text-lg md:text-xl text-primary-gray/70 max-w-3xl mx-auto leading-relaxed">
      We offer online therapy that works for you - at your time, in your space, and at your speed. For any age, for any need.                </p>
            </div>
    
            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                
                <!-- Service 1: Pediatric Speech Therapy -->
                <div class="group relative bg-primary-cream/30 backdrop-blur-sm rounded-3xl overflow-hidden border border-primary-cream/50 md:hover:bg-primary-cream/50 transition-all duration-500 md:hover:scale-105 md:hover:shadow-2xl">
                    
                    <!-- Image Container -->
                    <div class="relative h-60 bg-gradient-to-br from-primary-blue/10 to-primary-blue/20 p-6">
                        <!-- Image container with fallback placeholder -->
                        <div class="w-full h-full rounded-2xl overflow-hidden relative">
                            <!-- Actual image that covers whole div -->
                            <img src="assets/therapies/therapy-1a.webp" alt="Description of your image" 
                                 class="absolute inset-0 w-full h-full object-cover"
                                 onerror="this.style.display='none'">
                            
                            <!-- Fallback placeholder (shown if image fails to load) -->
                            <!-- <div id="image-placeholder" class="w-full h-full bg-white/20 border-2 border-dashed border-primary-blue/30 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-16 h-16 bg-primary-blue rounded-full flex items-center justify-center mx-auto mb-2 shadow-lg group-hover:rotate-12 transition-transform duration-300">
                                        Eyes
                                        <div class="flex space-x-2 mb-1">
                                            <div class="w-3 h-3 bg-white rounded-full"></div>
                                            <div class="w-3 h-3 bg-white rounded-full"></div>
                                        </div>
                                        Smile
                                        <div class="absolute bottom-3 w-8 h-4 border-b-3 border-white rounded-full"></div>
                                    </div>
                                    <span class="text-primary-blue/60 museo text-xs">Image Placeholder</span>
                                </div>
                            </div> -->
                        </div>
                        <!-- Floating accent -->
                        <!--<div class="absolute top-4 right-4 w-6 h-6 bg-primary-yellow rounded-full opacity-80 group-hover:animate-bounce"></div>-->
                    </div>
                    
                    <!-- Content Container -->
                    <div class="p-8">
                        <h3 class="museo-rounded text-2xl font-bold text-primary-gray mb-4 group-hover:text-primary-blue transition-colors duration-300">
                            Therapy for Children
                        </h3>
                        
                        <p class="museo text-primary-gray/70 mb-6 leading-relaxed">
Helping children express themselves clearly and confidently with playful, purposeful sessions.                        </p>
                        
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center space-x-2 text-sm text-primary-gray/60">
                                <div class="w-2 h-2 bg-primary-blue rounded-full"></div>
                                <span class="museo">For ages 2 to 18</span>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-primary-gray/60">
                                <div class="w-2 h-2 bg-primary-blue rounded-full"></div>
                                <span class="museo">Fun, play-based learning</span>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-primary-gray/60">
                                <div class="w-2 h-2 bg-primary-blue rounded-full"></div>
                                <span class="museo">Parent involvement in every step</span>
                            </div>
                        </div>
                        
<div class="flex justify-between items-center space-x-4">
    <!--<button class="text-primary-blue font-museo-rounded font-semibold text-sm hover:text-primary-blue/80 transition-colors duration-300 flex items-center space-x-1 group-hover:translate-x-1">-->
    <!--    <span>Learn More</span>-->
    <!--    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
    <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>-->
    <!--    </svg>-->
    <!--</button>-->

    <button id="openChildModal" class="text-white museo-rounded bg-primary-blue px-3 py-2 rounded font-semibold text-sm hover:text-primary-white/80 transition-colors duration-300 flex items-center space-x-1 group-hover:translate-x-1">
        <span>Take Test</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
    </button>
</div>                        
                   
                    </div>
                </div>
    
                <!-- Service 2: Adult Speech Therapy -->
                <div class="group relative bg-primary-cream/30 backdrop-blur-sm rounded-3xl overflow-hidden border border-primary-cream/50 md:hover:bg-primary-cream/50 transition-all duration-500 md:hover:scale-105 md:hover:shadow-2xl">
                    <!-- Image Container -->
                    <div class="relative h-60 bg-gradient-to-br from-primary-yellow/10 to-primary-yellow/20 p-6">
                        <!-- Image that covers the whole container -->
                        <div class="w-full h-full rounded-2xl overflow-hidden relative">
                            <img src="assets/therapies/therapy-2b.webp" alt="Adult Speech Therapy" 
                                 class="absolute inset-0 w-full h-full object-cover">
                            
                        
                        </div>
                        <!-- Floating accent -->
                        <!--<div class="absolute top-4 right-4 w-6 h-6 bg-primary-green rounded-full opacity-80 group-hover:animate-bounce"></div>-->
                    </div>
                    
                    <!-- Content Container -->
                    <div class="p-8">
                        <h3 class="museo-rounded text-2xl font-bold text-primary-gray mb-4 group-hover:text-primary-yellow transition-colors duration-300">
                           Therapy For Teens
                        </h3>
                        
                        <p class="museo text-primary-gray/70 mb-6 leading-relaxed">
Helping teens communicate with clarity and confidence in school and social life.                        </p>
                        
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center space-x-2 text-sm text-primary-gray/60">
                                <div class="w-2 h-2 bg-primary-yellow rounded-full"></div>
                                <span class="museo">Stammering, social fluency & academic speech
</span>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-primary-gray/60">
                                <div class="w-2 h-2 bg-primary-yellow rounded-full"></div>
                                <span class="museo">Respectful, 1-on-1 online support</span>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-primary-gray/60">
                                <div class="w-2 h-2 bg-primary-yellow rounded-full"></div>
                                <span class="museo">Designed for privacy & flexibility</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center space-x-4">
                        <!--<button class="text-primary-yellow font-museo-rounded font-semibold text-sm hover:text-primary-yellow/80 transition-colors duration-300 flex items-center space-x-1 group-hover:translate-x-1">-->
                        <!--    <span>Learn More</span>-->
                        <!--    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
                        <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>-->
                        <!--    </svg>-->
                        <!--</button>-->

    <button id="openTeenModal" class="text-white museo-rounded bg-primary-yellow px-3 py-2 rounded font-semibold text-sm hover:text-primary-blue/80 transition-colors duration-300 flex items-center space-x-1 group-hover:translate-x-1">
        <span>Take Test</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
    </button>
</div>
                        
                    </div>
                </div>
    
                <!-- Service 3: Language Development -->
                <div class="group relative bg-primary-cream/30 backdrop-blur-sm rounded-3xl overflow-hidden border border-primary-cream/50 md:hover:bg-primary-cream/50 transition-all duration-500 md:hover:scale-105 md:hover:shadow-2xl">
                    <!-- Image Container -->
                    <div class="relative h-60 bg-gradient-to-br from-primary-orange/10 to-primary-orange/20 p-6">
                        <!-- Image that covers the whole container -->
                        <div class="w-full h-full rounded-2xl overflow-hidden relative">
                            <!-- Actual image -->
                            <img src="assets/therapies/therapy-2c.webp" alt="Language Development" 
                                 class="absolute inset-0 w-full h-full object-cover">
                            
                        
                        </div>
                        <!-- Floating accent -->
                        <!--<div class="absolute top-4 right-4 w-6 h-6 bg-primary-blue rounded-full opacity-80 group-hover:animate-bounce"></div>-->
                    </div>
                    
                    <!-- Content Container -->
                    <div class="p-8">
                        <h3 class="museo-rounded text-2xl font-bold text-primary-gray mb-4 group-hover:text-primary-orange transition-colors duration-300">
                          Therapy for Adults
                        </h3>
                        
                        <p class="museo text-primary-gray/70 mb-6 leading-relaxed">
                    Therapy for speech, swallowing, or voice—is available wherever you are.                        </p>
                        
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center space-x-2 text-sm text-primary-gray/60">
                                <div class="w-2 h-2 bg-primary-orange rounded-full"></div>
                                <span class="museo">Stroke & TBI recovery, voice training, fluency</span>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-primary-gray/60">
                                <div class="w-2 h-2 bg-primary-orange rounded-full"></div>
                                <span class="museo">Online or hybrid delivery</span>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-primary-gray/60">
                                <div class="w-2 h-2 bg-primary-orange rounded-full pl-2"></div>
                                <span class="museo"> Supportive, tailored programs for working professionals or caregivers</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center space-x-4">
                        <!--  <button class="text-primary-orange font-museo-rounded font-semibold text-sm hover:text-primary-orange/80 transition-colors duration-300 flex items-center space-x-1 group-hover:translate-x-1">-->
                        <!--    <span>Learn More</span>-->
                        <!--    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
                        <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>-->
                        <!--    </svg>-->
                        <!--</button>-->


    <button id="openAdultModal" class="text-white museo-rounded bg-primary-orange px-3 py-2 rounded font-semibold text-sm hover:text-primary-blue/80 transition-colors duration-300 flex items-center space-x-1 group-hover:translate-x-1">
        <span>Take Test</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
    </button>
</div>
                        
                    </div>
                </div>
            </div>
    
            <!-- Bottom CTA Section -->
                        <div class="flex flex-col mt-10 sm:flex-row gap-4 justify-center">
                <!--<button class="bg-primary-orange hover:from-primary-green hover:to-primary-blue text-white font-museo-rounded font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105 shadow-lg">-->
                <!--    Start Your Journey-->
                <!--</button>-->
<a 
  href="contact-us#booking-form1" 
  class="border-2 border-primary-blue bg-primary-blue text-white museo-rounded font-bold px-6 md:px-8 py-3 md:py-4 text-sm md:text-base rounded-full transition duration-300 hover:scale-105 block w-fit mx-auto"
>
  Book an appointment
</a>         
</div>

            
        </div>
    </section>
    
    
    <!--CTA-->
    <?php include('cta-banner.php');?>


    
    <!--Why online therapy works-->
    <?php include('hy-online.php');?>



    <!-- Our Working -->
<!--    <section class="bg-primary-cream py-16 md:py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">-->
        <!-- Background Decorative Elements -->
        <!--<div class="absolute top-16 right-8 opacity-15">-->
        <!--    <div class="w-20 h-15 bg-primary-blue rounded-2xl rounded-br-sm"></div>-->
        <!--    <div class="absolute -bottom-1 right-3 w-3 h-3 bg-primary-blue transform rotate-45"></div>-->
        <!--</div>-->
        <!--<div class="absolute bottom-20 left-12 opacity-15">-->
        <!--    <div class="w-16 h-16 bg-primary-green rounded-full"></div>-->
        <!--    <div class="absolute top-1 right-2 w-12 h-8 bg-primary-green rounded-t-full transform rotate-45"></div>-->
        <!--</div>-->
        <!--<div class="absolute top-1/3 right-4 opacity-15">-->
        <!--    <div class="w-12 h-15 bg-primary-orange rounded-full rounded-tl-3xl rounded-br-3xl"></div>-->
        <!--</div>-->
    
<!--        <div class="container mx-auto">-->
            <!-- Section Header -->
<!--            <div class="text-center mb-16 md:mb-20">-->
                <!--<div class="inline-flex items-center space-x-2 bg-white/50 rounded-full px-6 py-3 backdrop-blur-sm border border-white/30 mb-6">-->
                <!--    <div class="w-2 h-2 bg-primary-orange rounded-full animate-pulse"></div>-->
                <!--    <span class="text-primary-gray font-museo text-sm font-medium">Our Process</span>-->
                <!--</div>-->
                
<!--                <h2 class="font-museo-rounded text-4xl md:text-5xl lg:text-6xl font-bold text-primary-gray mb-6 leading-tight">-->
<!--                    How It <span class="text-primary-blue">Works</span>-->
<!--                    <br class="hidden sm:block">-->
<!--                    <span class="text-primary-orange">Step by Step</span>-->
<!--                </h2>-->
                
<!--                <p class="font-museo text-lg md:text-xl text-primary-gray/70 max-w-3xl mx-auto leading-relaxed">-->
<!--                   Easy. Personalized. Ongoing Support.-->
<!--                </p>-->
<!--            </div>-->
    
            <!-- Process Steps -->
<!--            <div class="relative">-->
                <!-- Connection Line (Hidden on mobile) -->
<!--                <div class="hidden lg:block absolute top-24 left-1/2 transform -translate-x-1/2 w-full max-w-4xl">-->
<!--                    <div class="relative h-1">-->
<!--                        <div class="absolute inset-0 bg-gradient-to-r from-primary-blue via-primary-yellow via-primary-orange to-primary-green rounded-full opacity-30"></div>-->
<!--                        <div class="absolute inset-0 bg-gradient-to-r from-primary-blue via-primary-yellow via-primary-orange to-primary-green rounded-full animate-pulse opacity-50"></div>-->
<!--                    </div>-->
<!--                </div>-->
    
                <!-- Steps Grid -->
<!--                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6">-->
                    
                    <!-- Step 1: Initial Consultation -->
<!--                    <div class="group relative">-->
<!--                        <div class="bg-white/60 backdrop-blur-sm rounded-3xl p-8 border border-white/30 md:hover:bg-white/60 transition-all duration-500 md:hover:scale-105 md:hover:shadow-2xl text-center relative">-->
                            
                            <!-- Step Number -->
<!--                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">-->
<!--                                <div class="w-12 h-12 bg-primary-blue rounded-full flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">-->
<!--                                    <span class="font-museo-rounded text-white font-bold text-lg">1</span>-->
<!--                                </div>-->
<!--                            </div>-->
    
                            <!-- Icon Container with Smiley Face -->
<!--                            <div class="mt-8 mb-6">-->
<!--                                <div class="w-20 h-20 bg-primary-blue/10 rounded-full flex items-center justify-center mx-auto group-hover:bg-primary-blue/20 transition-colors duration-300">-->
<!--                                    <div class="w-16 h-16 bg-primary-blue rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">-->
                                        <!-- Eyes -->
<!--                                        <div class="flex space-x-2 mb-1">-->
<!--                                            <div class="w-3 h-3 bg-white rounded-full"></div>-->
<!--                                            <div class="w-3 h-3 bg-white rounded-full"></div>-->
<!--                                        </div>-->
                                        <!-- Smile -->
<!--                                        <div class="absolute w-8 h-4 border-b-3 border-white rounded-full"></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
    
<!--                            <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-4 group-hover:text-primary-blue transition-colors duration-300">-->
<!--                              Book an Appointment-->
<!--                            </h3>-->
                            
<!--                            <p class="font-museo text-primary-gray/70 text-sm leading-relaxed mb-4">-->
<!--                                  Book your session — choose child, teen, or adult support.-->
<!--                            </p>-->
    
<!--                            <div class="space-y-2">-->
<!--                                <div class="flex items-center justify-center space-x-2 text-xs text-primary-gray/60">-->
<!--                                    <div class="w-1.5 h-1.5 bg-primary-blue rounded-full"></div>-->
<!--                                    <span class="font-museo">60-minute evaluation</span>-->
<!--                                </div>-->
<!--                                <div class="flex items-center justify-center space-x-2 text-xs text-primary-gray/60">-->
<!--                                    <div class="w-1.5 h-1.5 bg-primary-blue rounded-full"></div>-->
<!--                                    <span class="font-museo">Personalized guidance to get started.</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
    
                    <!-- Step 2: Personalized Plan -->
<!--                    <div class="group relative">-->
<!--                        <div class="bg-white/60 backdrop-blur-sm rounded-3xl p-8 border border-white/30 md:hover:bg-white/60 transition-all duration-500 md:hover:scale-105 md:hover:shadow-2xl text-center relative">-->
                            
                            <!-- Step Number -->
<!--                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">-->
<!--                                <div class="w-12 h-12 bg-primary-yellow rounded-full flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">-->
<!--                                    <span class="font-museo-rounded text-white font-bold text-lg">2</span>-->
<!--                                </div>-->
<!--                            </div>-->
    
                            <!-- Icon Container with Speech Bubble -->
<!--                            <div class="mt-8 mb-6">-->
<!--                                <div class="w-20 h-20 bg-primary-yellow/10 rounded-full flex items-center justify-center mx-auto group-hover:bg-primary-yellow/20 transition-colors duration-300">-->
<!--                                    <div class="relative">-->
<!--                                        <div class="w-16 h-12 bg-primary-yellow rounded-2xl rounded-br-sm shadow-lg group-hover:scale-110 transition-transform duration-300 flex items-center justify-center">-->
<!--                                            <div class="flex space-x-1">-->
<!--                                                <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>-->
<!--                                                <div class="w-2 h-2 bg-white rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>-->
<!--                                                <div class="w-2 h-2 bg-white rounded-full animate-pulse" style="animation-delay: 0.4s;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="absolute -bottom-1 right-3 w-3 h-3 bg-primary-yellow transform rotate-45"></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
    
<!--                            <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-4 group-hover:text-primary-yellow transition-colors duration-300">-->
<!--                                Take a Detailed Assessment-->
<!--                            </h3>-->
                            
<!--                            <p class="font-museo text-primary-gray/70 text-sm leading-relaxed mb-4">-->
<!--                                Get assessed with easy, structured checklists.-->
<!--                            </p>-->
    
<!--                            <div class="space-y-2">-->
<!--                                <div class="flex items-center justify-center space-x-2 text-xs text-primary-gray/60">-->
<!--                                    <div class="w-1.5 h-1.5 bg-primary-yellow rounded-full"></div>-->
<!--                                    <span class="font-museo">Standardized tools</span>-->
<!--                                </div>-->
<!--                                <div class="flex items-center justify-center space-x-2 text-xs text-primary-gray/60">-->
<!--                                    <div class="w-1.5 h-1.5 bg-primary-yellow rounded-full"></div>-->
<!--                                    <span class="font-museo">Clear insights into your speech goals.</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
    
                    <!-- Step 3: Active Therapy -->
<!--                    <div class="group relative">-->
<!--                        <div class="bg-white/60 backdrop-blur-sm rounded-3xl p-8 border border-white/30 md:hover:bg-white/60 transition-all duration-500 md:hover:scale-105 md:hover:shadow-2xl text-center relative">-->
                            
                            <!-- Step Number -->
<!--                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">-->
<!--                                <div class="w-12 h-12 bg-primary-orange rounded-full flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">-->
<!--                                    <span class="font-museo-rounded text-white font-bold text-lg">3</span>-->
<!--                                </div>-->
<!--                            </div>-->
    
                            <!-- Icon Container with Tulip/Growth -->
<!--          <div class="mt-8 mb-6">-->
<!--    <div class="w-20 h-20 bg-primary-orange/10 rounded-full flex items-center justify-center mx-auto group-hover:bg-primary-orange/20 transition-colors duration-300">-->
<!--        <div class="w-16 h-16  rounded-full shadow-lg group-hover:rotate-6 group-hover:scale-110 transition-all duration-300 flex items-center justify-center overflow-hidden">-->
<!--            <img src="assets/logo/tt-tulip.png" alt="Icon" class="w-full p-1 h-full object-cover" />-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
    
<!--                            <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-4 group-hover:text-primary-orange transition-colors duration-300">-->
<!--                                Choose Your Therapy Slot-->
<!--                            </h3>-->
                            
<!--                            <p class="font-museo text-primary-gray/70 text-sm leading-relaxed mb-4">-->
<!--                                Pick a time that fits your routine — morning, evening, or weekend.-->
<!--                            </p>-->
    
<!--                            <div class="space-y-2">-->
<!--                                <div class="flex items-center justify-center space-x-2 text-xs text-primary-gray/60">-->
<!--                                    <div class="w-1.5 h-1.5 bg-primary-orange rounded-full"></div>-->
<!--                                    <span class="font-museo">Flexible options</span>-->
<!--                                </div>-->
<!--                                <div class="flex items-center justify-center space-x-2 text-xs text-primary-gray/60">-->
<!--                                    <div class="w-1.5 h-1.5 bg-primary-orange rounded-full"></div>-->
<!--                                    <span class="font-museo">Flexible options</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
    
                    <!-- Step 4: Ongoing Support -->
<!--                    <div class="group relative">-->
<!--                        <div class="bg-white/60 backdrop-blur-sm rounded-3xl p-8 border border-white/30 hover:bg-white/60 transition-all duration-500 hover:scale-105 hover:shadow-2xl text-center relative">-->
                            
                            <!-- Step Number -->
<!--                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">-->
<!--                                <div class="w-12 h-12 bg-primary-green rounded-full flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">-->
<!--                                    <span class="font-museo-rounded text-white font-bold text-lg">4</span>-->
<!--                                </div>-->
<!--                            </div>-->
    
                            <!-- Icon Container with Heart -->
<!--<div class="mt-8 mb-6">-->
<!--  <div class="w-20 h-20 bg-primary-green/10 rounded-full flex items-center justify-center mx-auto group-hover:bg-primary-green/20 transition-colors duration-300">-->
<!--    <svg viewBox="0 0 512 512" class="w-16 h-16 p-1" xmlns="http://www.w3.org/2000/svg">-->
<!--      <path d="M 373 31 327 10 267 19 225 67 191 176 85 188 37 218 7 274 31 351 130 393 408 390 413 136 Z" fill="#22c55e"/>-->
<!--    </svg>-->
<!--  </div>-->
<!--</div>                            <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-4 group-hover:text-primary-green transition-colors duration-300">-->
<!--                               Begin Your Therapy Online-->
<!--                            </h3>-->
                            
<!--                            <p class="font-museo text-primary-gray/70 text-sm leading-relaxed mb-4">-->
<!--                               Start therapy online with expert care and clear weekly goals.-->
<!--                            </p>-->
    
<!--                            <div class="space-y-2">-->
<!--                                <div class="flex items-center justify-center space-x-2 text-xs text-primary-gray/60">-->
<!--                                    <div class="w-1.5 h-1.5 bg-primary-green rounded-full"></div>-->
<!--                                    <span class="font-museo">Weekly/monthly goals</span>-->
<!--                                </div>-->
<!--                                <div class="flex items-center justify-center space-x-2 text-xs text-primary-gray/60">-->
<!--                                    <div class="w-1.5 h-1.5 bg-primary-green rounded-full"></div>-->
<!--                                    <span class="font-museo">Regular progress tracking and updates.</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
    
            <!-- Additional Info Section -->
            <!--<div class="mt-16 md:mt-20">-->
            <!--    <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center">-->
                    
                    <!-- Left Side - Process Benefits -->
            <!--        <div class="space-y-6">-->
            <!--            <h3 class="font-museo-rounded text-3xl md:text-4xl font-bold text-primary-gray">-->
            <!--                Why Our <span class="text-primary-blue">Process</span> Works-->
            <!--            </h3>-->
                        
            <!--            <div class="space-y-4">-->
            <!--                <div class="flex items-start space-x-4 p-4 bg-white/30 rounded-2xl backdrop-blur-sm border border-white/30 hover:bg-white/50 transition-all duration-300">-->
            <!--                    <div class="flex-shrink-0 w-10 h-10 bg-primary-blue rounded-full flex items-center justify-center">-->
            <!--                        <div class="w-4 h-4 bg-white rounded-full"></div>-->
            <!--                    </div>-->
            <!--                    <div>-->
            <!--                        <h4 class="font-museo-rounded text-primary-gray font-semibold">Evidence-Based Methods</h4>-->
            <!--                        <p class="font-museo text-primary-gray/70 text-sm mt-1">Research-proven techniques tailored to individual learning styles</p>-->
            <!--                    </div>-->
            <!--                </div>-->
                            
            <!--                <div class="flex items-start space-x-4 p-4 bg-white/30 rounded-2xl backdrop-blur-sm border border-white/30 hover:bg-white/50 transition-all duration-300">-->
            <!--                    <div class="flex-shrink-0 w-10 h-10 bg-primary-yellow rounded-full flex items-center justify-center">-->
            <!--                        <div class="w-4 h-4 bg-white rounded-full"></div>-->
            <!--                    </div>-->
            <!--                    <div>-->
            <!--                        <h4 class="font-museo-rounded text-primary-gray font-semibold">Measurable Progress</h4>-->
            <!--                        <p class="font-museo text-primary-gray/70 text-sm mt-1">Regular assessments and clear milestones to track improvement</p>-->
            <!--                    </div>-->
            <!--                </div>-->
                            
            <!--                <div class="flex items-start space-x-4 p-4 bg-white/30 rounded-2xl backdrop-blur-sm border border-white/30 hover:bg-white/50 transition-all duration-300">-->
            <!--                    <div class="flex-shrink-0 w-10 h-10 bg-primary-green rounded-full flex items-center justify-center">-->
            <!--                        <div class="w-4 h-4 bg-white rounded-full"></div>-->
            <!--                    </div>-->
            <!--                    <div>-->
            <!--                        <h4 class="font-museo-rounded text-primary-gray font-semibold">Family Involvement</h4>-->
            <!--                        <p class="font-museo text-primary-gray/70 text-sm mt-1">Support and training for family members to reinforce progress at home</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
    
                    <!-- Right Side - Visual Element -->
            <!--        <div class="relative w-full h-full rounded-3xl overflow-hidden">-->
            <!--            <img src="assets/Why-process.png" alt="Full screen image" -->
            <!--                 class="w-full h-full object-contain">-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
    
    
<!--                            <div class="flex flex-col mt-10 sm:flex-row gap-4 justify-center">-->
                <!--<button class="bg-primary-orange hover:from-primary-green hover:to-primary-blue text-white font-museo-rounded font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105 shadow-lg">-->
                <!--    Start Your Journey-->
                <!--</button>-->
<!--                <button class="border-2 border-primary-blue text-primary-blue hover:bg-primary-blue hover:text-white font-museo-rounded font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105">-->
<!--                    Book an appointment-->
<!--                </button>-->
<!--            </div>-->

       
<!--        </div>-->
<!--    </section>-->

    <!-- WHY CHOOSE US -->
    <!--<section class="bg-white py-16 md:py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden">-->
        <!-- Subtle Background Elements -->
    <!--    <div class="absolute top-8 right-8 w-16 h-16 bg-primary-cream rounded-full opacity-60"></div>-->
    <!--    <div class="absolute bottom-12 left-8 w-12 h-12 bg-primary-blue/5 rounded-full"></div>-->
    
    <!--    <div class="container mx-auto">-->
            
            <!-- Compact Header -->
    <!--        <div class="text-center mb-16">-->
    <!--            <div class="inline-flex items-center bg-primary-cream/50 rounded-full px-6 py-3 mb-6">-->
    <!--                <div class="w-2 h-2 bg-primary-green rounded-full mr-3 animate-pulse"></div>-->
    <!--                <span class="font-museo text-primary-gray font-medium text-sm">Why Choose Us</span>-->
    <!--            </div>-->
                
    <!--            <h2 class="font-museo-rounded text-4xl md:text-6xl font-black text-primary-gray mb-4">-->
    <!--                The <span class="text-primary-blue">Talking Tales</span>-->
    <!--                <br>-->
    <!--                <span class="text-primary-orange">Difference</span>-->
    <!--            </h2>-->
    <!--        </div>-->
    
            <!-- Main Content Grid -->
    <!--        <div class="grid lg:grid-cols-2 gap-16 items-center">-->
                
                <!-- Left Side - Image Space -->
    <!--            <div class="relative">-->
                    <!-- Image Placeholder -->
    <!--                <div class="w-full h-96 bg-gradient-to-br from-primary-cream/30 to-primary-cream/10 rounded-3xl border-2 border-dashed border-primary-blue/20 flex items-center justify-center relative overflow-hidden">-->
                        <!-- Image that will cover the background -->
    <!--                    <img src="assets/bg-image/1.png" alt="Hero Image" class="absolute w-full h-full object-cover z-0">-->
                        
                     
    <!--                </div>-->
                    
                    <!-- Floating Elements Around Image -->
    <!--                <div class="absolute -top-4 -right-4 animate-float">-->
    <!--                    <div class="relative">-->
    <!--                        <div class="w-16 h-12 bg-primary-yellow rounded-2xl rounded-br-sm shadow-lg flex items-center justify-center">-->
    <!--                            <div class="text-white font-museo-rounded font-bold text-xs">New!</div>-->
    <!--                        </div>-->
    <!--                        <div class="absolute -bottom-1 right-3 w-3 h-3 bg-primary-yellow transform rotate-45"></div>-->
    <!--                    </div>-->
    <!--                </div>-->
                    
    <!--                <div class="absolute -bottom-4 -left-4 animate-float" style="animation-delay: 1s;">-->
    <!--                    <div class="relative">-->
    <!--                        <div class="w-14 h-14 bg-primary-green rounded-full shadow-lg"></div>-->
    <!--                        <div class="absolute top-1 right-2 w-10 h-6 bg-primary-green rounded-t-full transform rotate-45"></div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    
                <!-- Right Side - Compact Benefits -->
    <!--            <div class="space-y-8">-->
                    
                    <!-- Benefit 1 -->
    <!--                <div class="group flex items-start gap-4 p-6 bg-primary-cream/30 rounded-3xl hover:bg-primary-cream/50 transition-all duration-300 hover:scale-105">-->
    <!--                    <div class="flex-shrink-0">-->
    <!--                        <div class="w-16 h-16 bg-primary-blue rounded-full flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">-->
                                <!-- Eyes -->
    <!--                            <div class="flex space-x-2 mb-1">-->
    <!--                                <div class="w-2 h-2 bg-white rounded-full animate-blink"></div>-->
    <!--                                <div class="w-2 h-2 bg-white rounded-full animate-blink"></div>-->
    <!--                            </div>-->
                                <!-- Smile -->
    <!--                            <div class="absolute w-6 h-3 border-b-2 border-white rounded-full"></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-2 group-hover:text-primary-blue transition-colors duration-300">-->
    <!--                            Expert Therapists-->
    <!--                        </h3>-->
    <!--                        <p class="font-museo text-primary-gray/70 text-sm leading-relaxed">-->
    <!--                            Certified professionals with specialized training and proven track records in speech therapy excellence.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    
                    <!-- Benefit 2 -->
    <!--                <div class="group flex items-start gap-4 p-6 bg-primary-cream/30 rounded-3xl hover:bg-primary-cream/50 transition-all duration-300 hover:scale-105">-->
    <!--                    <div class="flex-shrink-0">-->
    <!--                        <div class="relative group-hover:scale-110 transition-transform duration-300">-->
    <!--                            <div class="w-16 h-12 bg-primary-yellow rounded-2xl rounded-br-sm shadow-lg flex items-center justify-center">-->
    <!--                                <div class="flex space-x-1">-->
    <!--                                    <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>-->
    <!--                                    <div class="w-2 h-2 bg-white rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>-->
    <!--                                    <div class="w-2 h-2 bg-white rounded-full animate-pulse" style="animation-delay: 0.4s;"></div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="absolute -bottom-1 right-3 w-3 h-3 bg-primary-yellow transform rotate-45"></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-2 group-hover:text-primary-yellow transition-colors duration-300">-->
    <!--                            Personalized Plans-->
    <!--                        </h3>-->
    <!--                        <p class="font-museo text-primary-gray/70 text-sm leading-relaxed">-->
    <!--                            Every therapy plan is uniquely crafted to match individual needs, goals, and learning preferences.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    
                    <!-- Benefit 3 -->
    <!--                <div class="group flex items-start gap-4 p-6 bg-primary-cream/30 rounded-3xl hover:bg-primary-cream/50 transition-all duration-300 hover:scale-105">-->
    <!--                    <div class="flex-shrink-0">-->
    <!--                        <div class="w-16 h-18 bg-primary-orange rounded-full rounded-tl-3xl rounded-br-3xl shadow-lg group-hover:rotate-6 group-hover:scale-110 transition-all duration-300 flex items-center justify-center">-->
    <!--                            <div class="w-8 h-12 bg-white rounded-full rounded-tl-2xl rounded-br-2xl opacity-90"></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-2 group-hover:text-primary-orange transition-colors duration-300">-->
    <!--                            Proven Results-->
    <!--                        </h3>-->
    <!--                        <p class="font-museo text-primary-gray/70 text-sm leading-relaxed">-->
    <!--                            Measurable progress tracking and evidence-based methods ensure real, lasting improvements.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    
                    <!-- Benefit 4 -->
    <!--                <div class="group flex items-start gap-4 p-6 bg-primary-cream/30 rounded-3xl hover:bg-primary-cream/50 transition-all duration-300 hover:scale-105">-->
    <!--                    <div class="flex-shrink-0">-->
    <!--                        <div class="relative">-->
    <!--                            <div class="w-16 h-14 bg-primary-green rounded-full shadow-lg group-hover:scale-110 transition-transform duration-300 flex items-center justify-center">-->
    <!--                                <div class="relative">-->
    <!--                                    <div class="w-6 h-6 bg-white rounded-full"></div>-->
    <!--                                    <div class="absolute -top-0.5 left-1.5 w-4 h-3 bg-white rounded-t-full transform -rotate-45"></div>-->
    <!--                                    <div class="absolute -top-0.5 right-1.5 w-4 h-3 bg-white rounded-t-full transform rotate-45"></div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-2 group-hover:text-primary-green transition-colors duration-300">-->
    <!--                            Caring Support-->
    <!--                        </h3>-->
    <!--                        <p class="font-museo text-primary-gray/70 text-sm leading-relaxed">-->
    <!--                            Compassionate, ongoing support that extends beyond sessions to ensure long-term success.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    
          
    
            <!-- Compact CTA -->
    <!--        <div class="text-center mt-16">-->
    <!--            <button class="bg-primary-blue hover:bg-primary-blue/90 text-white font-museo-rounded font-bold px-10 py-4 rounded-3xl text-lg transition-all duration-300 hover:scale-105 hover:shadow-xl flex items-center space-x-3 mx-auto">-->
    <!--                <span>Start Your Journey Today</span>-->
    <!--                <div class="relative">-->
    <!--                    <div class="w-6 h-4 bg-white rounded-xl rounded-br-sm flex items-center justify-center">-->
    <!--                        <div class="w-1 h-1 bg-primary-blue rounded-full"></div>-->
    <!--                    </div>-->
    <!--                    <div class="absolute -bottom-0.5 right-1 w-2 h-2 bg-white transform rotate-45"></div>-->
    <!--                </div>-->
    <!--            </button>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

   <!-- stats -->
<!--   <section class="bg-primary-cream/30 py-10 md:py-14 px-4 sm:px-6 lg:px-8 relative overflow-hidden">-->
    <!-- Subtle background elements -->
<!--    <div class="absolute top-8 right-8 w-6 h-6 bg-primary-blue/10 rounded-full animate-pulse"></div>-->
<!--    <div class="absolute bottom-8 left-8 w-4 h-4 bg-primary-green/10 rounded-full animate-pulse" style="animation-delay: 1s;"></div>-->

<!--    <div class="max-w-5xl mx-auto">-->
        
        <!-- Clean Header -->
<!--        <div class="text-center mb-10">-->
<!--            <h2 class="font-museo-rounded text-3xl md:text-5xl font-black text-primary-gray mb-3">-->
<!--                Our Story in <span class="text-primary-blue">Numbers</span>-->
<!--            </h2>-->
<!--            <p class="font-museo text-primary-gray/70">Real impact, real families, real results</p>-->
<!--        </div>-->

        <!-- Elegant Stats Row -->
<!--        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 mb-8">-->
            
            <!-- Stat 1: Happy Clients -->
<!--            <div class="stat-card group bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-white/40 hover:bg-white/80 hover:scale-105 transition-all duration-300 hover:shadow-lg text-center relative">-->
                
                <!-- Icon -->
<!--                <div class="mb-4">-->
<!--                    <div class="w-14 h-14 bg-primary-blue rounded-full mx-auto flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-300">-->
                        <!-- Smiley Face -->
<!--                        <div class="flex space-x-1.5 mb-1">-->
<!--                            <div class="w-2.5 h-2.5 bg-white rounded-full animate-blink"></div>-->
<!--                            <div class="w-2.5 h-2.5 bg-white rounded-full animate-blink"></div>-->
<!--                        </div>-->
<!--                        <div class="absolute w-5 h-2.5 border-b-2 border-white rounded-full"></div>-->
<!--                    </div>-->
<!--                </div>-->
                
<!--                <div class="font-museo-rounded text-3xl font-black text-primary-gray mb-2" id="clients">0</div>-->
<!--                <div class="text-primary-blue font-museo font-semibold text-sm">Happy Families</div>-->
<!--                <div class="text-primary-gray/60 font-museo text-xs mt-1">Transformed Lives</div>-->
<!--            </div>-->

            <!-- Stat 2: Years Experience -->
<!--            <div class="stat-card group bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-white/40 hover:bg-white/80 hover:scale-105 transition-all duration-300 hover:shadow-lg text-center relative">-->
                
                <!-- Icon -->
<!--                <div class="mb-4 flex justify-center">-->
<!--                    <div class="relative group-hover:scale-110 transition-transform duration-300">-->
<!--                        <div class="w-14 h-10 bg-primary-yellow rounded-2xl rounded-br-lg shadow-md flex items-center justify-center">-->
<!--                            <div class="flex space-x-1">-->
<!--                                <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>-->
<!--                                <div class="w-2 h-2 bg-white rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>-->
<!--                                <div class="w-2 h-2 bg-white rounded-full animate-pulse" style="animation-delay: 0.4s;"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="absolute -bottom-1 right-2.5 w-2.5 h-2.5 bg-primary-yellow transform rotate-45"></div>-->
<!--                    </div>-->
<!--                </div>-->
                
<!--                <div class="font-museo-rounded text-3xl font-black text-primary-gray mb-2" id="years">0</div>-->
<!--                <div class="text-primary-yellow font-museo font-semibold text-sm">Years of Excellence</div>-->
<!--                <div class="text-primary-gray/60 font-museo text-xs mt-1">Expert Knowledge</div>-->
<!--            </div>-->

            <!-- Stat 3: Success Rate -->
<!--            <div class="stat-card group bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-white/40 hover:bg-white/80 hover:scale-105 transition-all duration-300 hover:shadow-lg text-center relative">-->
                
                <!-- Icon -->
<!--                <div class="mb-4">-->
<!--                    <div class="w-14 h-16 bg-primary-orange rounded-full rounded-tl-3xl rounded-br-3xl mx-auto flex items-center justify-center shadow-md group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">-->
<!--                        <div class="w-7 h-12 bg-white rounded-full rounded-tl-2xl rounded-br-2xl opacity-90"></div>-->
<!--                    </div>-->
<!--                </div>-->
                
<!--                <div class="font-museo-rounded text-3xl font-black text-primary-gray mb-2">-->
<!--                    <span id="success">0</span><span class="text-lg">%</span>-->
<!--                </div>-->
<!--                <div class="text-primary-orange font-museo font-semibold text-sm">Success Rate</div>-->
<!--                <div class="text-primary-gray/60 font-museo text-xs mt-1">Proven Results</div>-->
<!--            </div>-->

            <!-- Stat 4: Client Rating -->
<!--            <div class="stat-card group bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-white/40 hover:bg-white/80 hover:scale-105 transition-all duration-300 hover:shadow-lg text-center relative">-->
                
                <!-- Icon -->
<!--                <div class="mb-4 flex justify-center">-->
<!--                    <div class="relative group-hover:scale-110 transition-transform duration-300">-->
<!--                        <div class="w-14 h-12 bg-primary-green rounded-full shadow-md flex items-center justify-center">-->
<!--                            <div class="relative">-->
<!--                                <div class="w-6 h-6 bg-white rounded-full"></div>-->
<!--                                <div class="absolute -top-1 left-1.5 w-5 h-3 bg-white rounded-t-full transform -rotate-45"></div>-->
<!--                                <div class="absolute -top-1 right-1.5 w-5 h-3 bg-white rounded-t-full transform rotate-45"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                
<!--                <div class="font-museo-rounded text-3xl font-black text-primary-gray mb-2">-->
<!--                    <span id="rating">0</span><span class="text-lg">/5</span>-->
<!--                </div>-->
<!--                <div class="text-primary-green font-museo font-semibold text-sm">Client Rating</div>-->
<!--                <div class="text-primary-gray/60 font-museo text-xs mt-1">Love & Trust</div>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Clean CTA -->
<!--        <div class="text-center">-->
<!--            <button class="bg-primary-blue hover:bg-primary-blue/90 text-white font-museo-rounded font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-lg flex items-center space-x-3 mx-auto">-->
<!--                <span>Start Your Success Story</span>-->
<!--                <div class="relative">-->
<!--                    <div class="w-6 h-4 bg-white rounded-lg rounded-br-sm flex items-center justify-center">-->
<!--                        <div class="w-1.5 h-1.5 bg-primary-blue rounded-full"></div>-->
<!--                    </div>-->
<!--                    <div class="absolute -bottom-0.5 right-1 w-2 h-2 bg-white transform rotate-45"></div>-->
<!--                </div>-->
<!--            </button>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



    <!-- TESTIMONIAL SECTION -->
    <!--<section class="bg-white py-16 md:py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">-->
        <!-- Floating Background Elements -->
    <!--    <div class="absolute top-12 left-8 opacity-10 animate-pulse">-->
    <!--        <div class="w-16 h-16 bg-primary-green rounded-full"></div>-->
    <!--        <div class="absolute top-1 right-3 w-12 h-8 bg-primary-green rounded-t-full transform rotate-45"></div>-->
    <!--    </div>-->
    <!--    <div class="absolute bottom-20 right-12 opacity-10 animate-pulse" style="animation-delay: 1.5s;">-->
    <!--        <div class="w-14 h-14 bg-primary-blue rounded-full"></div>-->
    <!--    </div>-->
    
    <!--    <div class="max-w-6xl mx-auto">-->
            
            <!-- Header -->
    <!--        <div class="text-center mb-16">-->
    <!--            <div class="inline-flex items-center bg-primary-cream/50 rounded-full px-6 py-3 mb-6">-->
    <!--                <div class="w-2 h-2 bg-primary-orange rounded-full mr-3 animate-pulse"></div>-->
    <!--                <span class="font-museo text-primary-gray font-medium text-sm">What Families Say</span>-->
    <!--            </div>-->
                
    <!--            <h2 class="font-museo-rounded text-4xl md:text-6xl font-black text-primary-gray mb-6">-->
    <!--                Stories of <span class="text-primary-blue">Success</span>-->
    <!--                <br>-->
    <!--                <span class="text-primary-orange">& Growth</span>-->
    <!--            </h2>-->
                
    <!--            <p class="font-museo text-lg text-primary-gray/70 max-w-2xl mx-auto">-->
    <!--                Real families sharing their transformative journeys with Talking Tales-->
    <!--            </p>-->
    <!--        </div>-->
    
            <!-- Main Testimonials Grid -->
    <!--        <div class="grid lg:grid-cols-3 gap-8 mb-16">-->
                
                <!-- Featured Testimonial (Large) -->
    <!--            <div class="lg:col-span-2 bg-gradient-to-br from-primary-blue/5 to-primary-blue/10 rounded-3xl p-8 md:p-10 relative overflow-hidden">-->
                    <!-- Large Quote Bubble -->
    <!--                <div class="absolute -top-4 -left-4">-->
    <!--                    <div class="relative">-->
    <!--                        <div class="w-24 h-18 bg-primary-yellow rounded-3xl rounded-br-xl shadow-xl flex items-center justify-center">-->
    <!--                            <div class="text-white font-museo-rounded font-bold text-3xl">"</div>-->
    <!--                        </div>-->
    <!--                        <div class="absolute -bottom-3 right-5 w-8 h-8 bg-primary-yellow transform rotate-45"></div>-->
    <!--                    </div>-->
    <!--                </div>-->
                    
                    <!-- Image Placeholder -->
    <!--                <div class="w-full h-48 bg-gradient-to-br from-white/30 to-white/10 rounded-2xl border-2 border-dashed border-primary-blue/30 flex items-center justify-center mb-6 relative overflow-hidden backdrop-blur-sm">-->
                        <!-- Image that covers the whole container -->
    <!--                    <img src="assets/testimonial-photo.png" alt="Family Photo" -->
    <!--                         class="absolute inset-0 w-full h-full object-cover">-->
                        
                        <!-- Fallback placeholder (shown when no image is provided) -->
                    
    <!--                </div>-->
                    
    <!--                <blockquote class="font-museo text-xl md:text-2xl text-primary-gray/80 leading-relaxed mb-6 italic">-->
    <!--                    "When Emma started at Talking Tales, she could barely say a few words. Now, six months later, she's telling us stories, asking questions, and expressing her feelings clearly. The transformation has been absolutely incredible."-->
    <!--                </blockquote>-->
                    
    <!--                <div class="flex items-center justify-between">-->
    <!--                    <div class="flex items-center">-->
    <!--                        <div class="w-14 h-14 bg-primary-blue rounded-full mr-4 flex items-center justify-center shadow-lg">-->
                                <!-- Mini Smiley -->
    <!--                            <div class="flex space-x-1 mb-0.5">-->
    <!--                                <div class="w-2 h-2 bg-white rounded-full"></div>-->
    <!--                                <div class="w-2 h-2 bg-white rounded-full"></div>-->
    <!--                            </div>-->
    <!--                            <div class="absolute w-4 h-2 border-b-2 border-white rounded-full"></div>-->
    <!--                        </div>-->
    <!--                        <div>-->
    <!--                            <p class="font-museo-rounded font-bold text-primary-gray">Jennifer Thompson</p>-->
    <!--                            <p class="font-museo text-primary-gray/60 text-sm">Emma's Mom</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
                        
                        <!-- Floating Heart -->
    <!--                    <div class="animate-pulse">-->
    <!--                        <div class="relative">-->
    <!--                            <div class="w-12 h-12 bg-primary-green rounded-full shadow-lg"></div>-->
    <!--                            <div class="absolute top-1 right-2 w-8 h-5 bg-primary-green rounded-t-full transform rotate-45"></div>-->
    <!--                            <div class="absolute top-1 left-2 w-8 h-5 bg-primary-green rounded-t-full transform -rotate-45"></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    
                <!-- Side Testimonials -->
    <!--            <div class="space-y-6">-->
                    
                    <!-- Testimonial 2 -->
    <!--                <div class="bg-primary-cream/40 rounded-2xl p-6 relative overflow-hidden hover:bg-primary-cream/60 transition-all duration-300 hover:scale-105">-->
                        <!-- Small Speech Bubble -->
    <!--                    <div class="absolute -top-2 -right-2">-->
    <!--                        <div class="relative">-->
    <!--                            <div class="w-12 h-9 bg-primary-orange rounded-2xl rounded-br-sm shadow-lg flex items-center justify-center">-->
    <!--                                <div class="text-white font-museo-rounded font-bold text-lg">"</div>-->
    <!--                            </div>-->
    <!--                            <div class="absolute -bottom-1 right-2 w-3 h-3 bg-primary-orange transform rotate-45"></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
                        
    <!--                    <blockquote class="font-museo text-primary-gray/80 text-sm leading-relaxed mb-4 italic">-->
    <!--                        "The online sessions were perfect for our busy schedule. Marcus made incredible progress from the comfort of home."-->
    <!--                    </blockquote>-->
                        
    <!--                    <div class="flex items-center">-->
    <!--                        <div class="w-10 h-10 bg-primary-orange rounded-full mr-3 flex items-center justify-center">-->
                                <!-- Tulip shape -->
    <!--                            <div class="w-5 h-7 bg-white rounded-full rounded-tl-full rounded-br-full opacity-90"></div>-->
    <!--                        </div>-->
    <!--                        <div>-->
    <!--                            <p class="font-museo-rounded font-bold text-primary-gray text-sm">David Chen</p>-->
    <!--                            <p class="font-museo text-primary-gray/60 text-xs">Parent</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    
                    <!-- Testimonial 3 -->
    <!--                <div class="bg-primary-cream/40 rounded-2xl p-6 relative overflow-hidden hover:bg-primary-cream/60 transition-all duration-300 hover:scale-105">-->
                        <!-- Small Speech Bubble -->
    <!--                    <div class="absolute -top-2 -right-2">-->
    <!--                        <div class="relative">-->
    <!--                            <div class="w-12 h-9 bg-primary-green rounded-2xl rounded-br-sm shadow-lg flex items-center justify-center">-->
    <!--                                <div class="text-white font-museo-rounded font-bold text-lg">"</div>-->
    <!--                            </div>-->
    <!--                            <div class="absolute -bottom-1 right-2 w-3 h-3 bg-primary-green transform rotate-45"></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
                        
    <!--                    <blockquote class="font-museo text-primary-gray/80 text-sm leading-relaxed mb-4 italic">-->
    <!--                        "Adult therapy here changed my life. I finally have the confidence to speak up in meetings and social situations."-->
    <!--                    </blockquote>-->
                        
    <!--                    <div class="flex items-center">-->
    <!--                        <div class="w-10 h-10 bg-primary-green rounded-full mr-3 flex items-center justify-center">-->
                                <!-- Heart shape -->
    <!--                            <div class="relative">-->
    <!--                                <div class="w-4 h-4 bg-white rounded-full"></div>-->
    <!--                                <div class="absolute -top-0.5 left-1 w-3 h-2 bg-white rounded-t-full transform -rotate-45"></div>-->
    <!--                                <div class="absolute -top-0.5 right-1 w-3 h-2 bg-white rounded-t-full transform rotate-45"></div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div>-->
    <!--                            <p class="font-museo-rounded font-bold text-primary-gray text-sm">Sarah Williams</p>-->
    <!--                            <p class="font-museo text-primary-gray/60 text-xs">Adult Client</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    
                    <!-- Testimonial 4 -->
    <!--                <div class="bg-primary-cream/40 rounded-2xl p-6 relative overflow-hidden hover:bg-primary-cream/60 transition-all duration-300 hover:scale-105">-->
                        <!-- Small Speech Bubble -->
    <!--                    <div class="absolute -top-2 -right-2">-->
    <!--                        <div class="relative">-->
    <!--                            <div class="w-12 h-9 bg-primary-blue rounded-2xl rounded-br-sm shadow-lg flex items-center justify-center">-->
    <!--                                <div class="text-white font-museo-rounded font-bold text-lg">"</div>-->
    <!--                            </div>-->
    <!--                            <div class="absolute -bottom-1 right-2 w-3 h-3 bg-primary-blue transform rotate-45"></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
                        
    <!--                    <blockquote class="font-museo text-primary-gray/80 text-sm leading-relaxed mb-4 italic">-->
    <!--                        "The team's patience and expertise helped my son overcome his stuttering. He's now speaking confidently at school."-->
    <!--                    </blockquote>-->
                        
    <!--                    <div class="flex items-center">-->
    <!--                        <div class="w-10 h-10 bg-primary-blue rounded-full mr-3 flex items-center justify-center">-->
                                <!-- Smiley -->
    <!--                            <div class="flex space-x-1 mb-0.5">-->
    <!--                                <div class="w-1.5 h-1.5 bg-white rounded-full"></div>-->
    <!--                                <div class="w-1.5 h-1.5 bg-white rounded-full"></div>-->
    <!--                            </div>-->
    <!--                            <div class="absolute w-3 h-1.5 border-b border-white rounded-full"></div>-->
    <!--                        </div>-->
    <!--                        <div>-->
    <!--                            <p class="font-museo-rounded font-bold text-primary-gray text-sm">Lisa Martinez</p>-->
    <!--                            <p class="font-museo text-primary-gray/60 text-xs">Parent</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    
            <!-- Video Testimonial Section -->
    <!--        <div class="bg-gradient-to-r from-primary-cream/50 to-primary-cream/30 rounded-3xl p-8 md:p-12 mb-16 relative overflow-hidden">-->
    <!--            <div class="grid md:grid-cols-2 gap-8 items-center">-->
                    
                    <!-- Video Placeholder -->
    <!--                <div class="relative">-->
    <!--                    <div class="w-full h-64 bg-gradient-to-br from-primary-blue/10 to-primary-blue/5 rounded-2xl border-2 border-dashed border-primary-blue/30 flex items-center justify-center relative overflow-hidden">-->
    <!--                        <div class="text-center">-->
    <!--                            <div class="w-16 h-16 bg-primary-blue rounded-full mx-auto mb-4 flex items-center justify-center shadow-lg">-->
    <!--                                <div class="w-0 h-0 border-t-4 border-t-transparent border-l-8 border-l-white border-b-4 border-b-transparent ml-1"></div>-->
    <!--                            </div>-->
    <!--                            <span class="text-primary-blue/70 font-museo font-medium">Video Testimonial</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
                        
                        <!-- Floating Elements -->
    <!--                    <div class="absolute -top-4 -right-4 animate-bounce">-->
    <!--                        <div class="relative">-->
    <!--                            <div class="w-16 h-12 bg-primary-yellow rounded-3xl rounded-br-lg shadow-xl flex items-center justify-center">-->
    <!--                                <div class="text-white font-museo-rounded font-bold text-sm">Play</div>-->
    <!--                            </div>-->
    <!--                            <div class="absolute -bottom-2 right-3 w-4 h-4 bg-primary-yellow transform rotate-45"></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    
                    <!-- Video Description -->
    <!--                <div>-->
    <!--                    <h3 class="font-museo-rounded text-3xl font-bold text-primary-gray mb-4">-->
    <!--                        Watch Alex's <span class="text-primary-blue">Amazing</span> Journey-->
    <!--                    </h3>-->
    <!--                    <p class="font-museo text-primary-gray/70 mb-6 leading-relaxed">-->
    <!--                        See how our personalized approach helped 8-year-old Alex go from non-verbal to speaking in full sentences. His parents share their emotional journey and the life-changing impact of our therapy.-->
    <!--                    </p>-->
                        
    <!--                    <div class="flex items-center space-x-4">-->
    <!--                        <div class="flex items-center">-->
    <!--                            <div class="w-12 h-12 bg-primary-green rounded-full mr-3 flex items-center justify-center">-->
                                    <!-- Heart -->
    <!--                                <div class="relative">-->
    <!--                                    <div class="w-6 h-6 bg-white rounded-full"></div>-->
    <!--                                    <div class="absolute -top-1 left-1.5 w-4 h-3 bg-white rounded-t-full transform -rotate-45"></div>-->
    <!--                                    <div class="absolute -top-1 right-1.5 w-4 h-3 bg-white rounded-t-full transform rotate-45"></div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div>-->
    <!--                                <p class="font-museo-rounded font-bold text-primary-gray text-sm">Alex's Family</p>-->
    <!--                                <p class="font-museo text-primary-gray/60 text-xs">2 years with us</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!-- ik -->
    <!--        </div>-->
          
    <!--    </div>-->
    <!--</section>-->
    <!--partner with -->
    
        <?php include('partner-with.php');?>

    
    
    <!--testimonial-->

    <section id="testimonials" class="bg-gradient-to-b from-white to-orange-50 py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto max-w-6xl">
            
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="museo-rounded text-4xl md:text-6xl text-gray-800 mb-6">
                    Our <span class="text-primary-orange">Tales</span>
                </h2>
                <p class="museo text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
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
                                        <div class="absolute -top-4 -left-4 text-6xl text-blue-200 museo">"</div>
                                        <blockquote class="museo text-xl md:text-2xl lg:text-3xl text-gray-800 leading-relaxed relative z-10 px-8">
We came to rehab for speech therapy, and my mother’s understanding and speech has improved greatly. Thanks to Ms. Architha, we’re continuing therapy with confidence.                                        </blockquote>
                                        <div class="absolute -bottom-4 -right-4 text-6xl text-blue-200 museo">"</div>
                                    </div>
                                    
                                    <!-- Client Info -->
                                    <div class="flex items-center justify-center space-x-4">
                                        <!--<div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-green-500 rounded-full flex items-center justify-center shadow-lg">-->
                                        <!--    <div class="text-white font-museo-rounded font-bold text-lg">JT</div>-->
                                        <!--</div>-->
                                        <div class="text-left">
                                            <h4 class="museo-rounded text-xl font-bold text-gray-800">Devendra kaur</h4>
                                            <!--<p class="font-museo text-gray-600">Emma's Mom • Pediatric Therapy</p>-->
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
                                        <div class="absolute -top-4 -left-4 text-6xl text-yellow-200 museo">"</div>
                                        <blockquote class="museo text-xl md:text-2xl lg:text-3xl text-gray-800 leading-relaxed relative z-10 px-8">
My sister was admitted in the center Post GBS..
She came here bedridden
Today tracheostomy tube, oxygen and food pipe is removed. Big thanks to Swallow Therapist - Aishwarya maam and doctors                                        </blockquote>
                                        <div class="absolute -bottom-4 -right-4 text-6xl text-yellow-200 museo">"</div>
                                    </div>
                                    
                                    <!-- Client Info -->
                                    <div class="flex items-center justify-center space-x-4">
                                        <!--<div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full flex items-center justify-center shadow-lg">-->
                                        <!--    <div class="text-white font-museo-rounded font-bold text-lg">DC</div>-->
                                        <!--</div>-->
                                        <div class="text-left">
                                            <h4 class="museo-rounded text-xl font-bold text-gray-800">Manjulatha</h4>
                                            <!--<p class="font-museo text-gray-600">Marcus's Dad • Online Sessions</p>-->
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
                                        <div class="absolute -top-4 -left-4 text-6xl text-green-200 museo">"</div>
                                        <blockquote class="museo text-xl md:text-2xl lg:text-3xl text-gray-800 leading-relaxed relative z-10 px-8">
Speech & Swallow Therapist Ms Aishwarya has done a great job, whereby my mother's speech function was restored and swallowing disorder was treated. This facilitated removal of Ryles Tube and elimination of Aspiration problem. Now she is speaking and also having food, orally                                        </blockquote>
                                        <div class="absolute -bottom-4 -right-4 text-6xl text-green-200 museo">"</div>
                                    </div>
                                    
                                    <!-- Client Info -->
                                    <div class="flex items-center justify-center space-x-4">
                                        <!--<div class="w-16 h-16 bg-gradient-to-br from-green-500 to-blue-500 rounded-full flex items-center justify-center shadow-lg">-->
                                        <!--    <div class="text-white font-museo-rounded font-bold text-lg">SW</div>-->
                                        <!--</div>-->
                                        <div class="text-left">
                                            <h4 class="museo-rounded text-xl font-bold text-gray-800">Venkat</h4>
                                            <p class="museo text-gray-600">Treatment for mom</p>
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
                        
                        
                        <!--slide-4-->
                        <div class="w-full flex-shrink-0">
                            <div class="bg-gradient-to-br from-yellow-50 via-white to-yellow-100 p-8 lg:p-16 rounded-3xl">
                                <div class="max-w-4xl mx-auto text-center space-y-8">
                                    <!-- Quote -->
                                    <div class="relative">
                                        <div class="absolute -top-4 -left-4 text-6xl text-yellow-200 museo">"</div>
                                        <blockquote class="museo text-xl md:text-2xl lg:text-3xl text-gray-800 leading-relaxed relative z-10 px-8">
My husband needed speech therapy post-hospitalization, and therapist Sushma helped in improving speech and have his food .      
</blockquote>
                                        <div class="absolute -bottom-4 -right-4 text-6xl text-yellow-200 museo">"</div>
                                    </div>
                                    
                                    <!-- Client Info -->
                                    <div class="flex items-center justify-center space-x-4">
                                        <!--<div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full flex items-center justify-center shadow-lg">-->
                                        <!--    <div class="text-white font-museo-rounded font-bold text-lg">DC</div>-->
                                        <!--</div>-->
                                        <div class="text-left">
                                            <h4 class="museo-rounded text-xl font-bold text-gray-800">Wife of Arvind</h4>
                                            <!--<p class="font-museo text-gray-600">Marcus's Dad • Online Sessions</p>-->
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
                        
                        
                        <!--slide-5-->
                                                <div class="w-full flex-shrink-0">
                            <div class="bg-gradient-to-br from-blue-50 via-white to-blue-100 p-8 lg:p-16 rounded-3xl">
                                <div class="max-w-4xl mx-auto text-center space-y-8">
                                    <!-- Quote -->
                                    <div class="relative">
                                        <div class="absolute -top-4 -left-4 text-6xl text-blue-200 museo">"</div>
                                        <blockquote class="museo text-xl md:text-2xl lg:text-3xl text-gray-800 leading-relaxed relative z-10 px-8">
                 I firstly thank Miss Nikhila Swallow Therapist for helping me out in having food after 75 days.     

</blockquote>
                                        <div class="absolute -bottom-4 -right-4 text-6xl text-blue-200 museo">"</div>
                                    </div>
                                    
                                    <!-- Client Info -->
                                    <div class="flex items-center justify-center space-x-4">
                                        <!--<div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-green-500 rounded-full flex items-center justify-center shadow-lg">-->
                                        <!--    <div class="text-white font-museo-rounded font-bold text-lg">JT</div>-->
                                        <!--</div>-->
                                        <div class="text-left">
                                            <h4 class="museo-rounded text-xl font-bold text-gray-800">Udaya nimitha</h4>
                                            <p class="museo text-gray-600">GBS syndrome</p>
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


                          <!--slide-6-->
                                                  <div class="w-full flex-shrink-0">
                            <div class="bg-gradient-to-br from-green-50 via-white to-green-100 p-8 lg:p-16 rounded-3xl">
                                <div class="max-w-4xl mx-auto text-center space-y-8">
                                    <!-- Quote -->
                                    <div class="relative">
                                        <div class="absolute -top-4 -left-4 text-6xl text-green-200 museo">"</div>
                                        <blockquote class="museo text-xl md:text-2xl lg:text-3xl text-gray-800 leading-relaxed relative z-10 px-8">
                                            Speech therapist Blessy helped to regain her speech
</blockquote>
                                        <div class="absolute -bottom-4 -right-4 text-6xl text-green-200 museo">"</div>
                                    </div>
                                    
                                    <!-- Client Info -->
                                    <div class="flex items-center justify-center space-x-4">
                                        <!--<div class="w-16 h-16 bg-gradient-to-br from-green-500 to-blue-500 rounded-full flex items-center justify-center shadow-lg">-->
                                        <!--    <div class="text-white font-museo-rounded font-bold text-lg">SW</div>-->
                                        <!--</div>-->
                                        <div class="text-left">
                                            <h4 class="museo-rounded text-xl font-bold text-gray-800">Manogna Chennuri</h4>
                                            <p class="museo text-gray-600">Treatment for mom</p>
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
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="3"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="4"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="5"></button>
            </div>

            <!-- NMC & Clinical Testimonials Ethics Disclaimer -->
            <div class="mt-8 max-w-4xl mx-auto p-4 bg-white/80 backdrop-blur-sm border border-orange-100 rounded-2xl shadow-sm text-center">
                <p class="museo text-xs text-gray-500 leading-relaxed">
                    <i class="fas fa-certificate text-primary-orange mr-1"></i>
                    <strong>Clinical Transparency & Ethics Note:</strong> Testimonials reflect authentic individual rehabilitation experiences shared with explicit patient/guardian consent. Clinical speech, voice, and swallowing recovery outcomes vary based on individual etiology, diagnosis, severity, and therapy adherence. Testimonials do not constitute a medical guarantee or replace individualized clinical evaluation. <a href="legal,policies-and-T&C#testimonials-policy" class="text-primary-blue underline hover:text-blue-700">Read our Medical Content & Ethics Policy</a>.
                </p>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center mt-12">
                <p class="museo text-lg text-gray-600 mb-8">
                    Join hundreds of families who've transformed their communication journey
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a 
                      href="contact-us#booking-form1" 
                      class="border-2 border-primary-blue bg-primary-blue text-white museo-rounded font-bold px-6 md:px-8 py-3 md:py-4 text-sm md:text-base rounded-2xl transition duration-300 hover:scale-105 block w-fit mx-auto shadow-md"
                    >
                      Book an appointment
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include('location.php');?>

    <!-- footer -->
<?php include('footer.php');?>


  
<!--Testimonial-->
    <script>
        // Testimonials Carousel Functionality
        class TestimonialsCarousel {
            constructor() {
                this.currentSlide = 0;
                this.totalSlides = 6;
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






    <!-- HERO SECTION -->
    <script>
        function bookConsultation() {
            console.log('Opening booking system...');
            alert('This would connect to your booking system!');
        }
        
        function learnMore() {
            console.log('Navigating to services...');
            alert('This would scroll to your services section!');
        }
        
        // Enhanced interaction effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add parallax effect to background elements
            window.addEventListener('mousemove', function(e) {
                const elements = document.querySelectorAll('.animate-float');
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;
                
                elements.forEach((element, index) => {
                    const speed = (index + 1) * 0.5;
                    const x = (mouseX - 0.5) * speed;
                    const y = (mouseY - 0.5) * speed;
                    
                    element.style.transform += ` translate(${x}px, ${y}px)`;
                });
            });
            
            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Observe elements for scroll animations
            document.querySelectorAll('.animate-fade-in, .animate-slide-up').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

    <!-- stats -->
    <script>
    //     // Clean counter animation
    //     function animateCounter(elementId, targetValue, duration = 1500) {
    //         const element = document.getElementById(elementId);
    //         const increment = targetValue / (duration / 16);
    //         let currentValue = 0;
            
    //         const updateCounter = () => {
    //             currentValue += increment;
    //             if (currentValue < targetValue) {
    //                 element.textContent = Math.floor(currentValue);
    //                 requestAnimationFrame(updateCounter);
    //             } else {
    //                 element.textContent = targetValue;
    //                 // Simple completion effect
    //                 element.style.transform = 'scale(1.05)';
    //                 setTimeout(() => element.style.transform = 'scale(1)', 200);
    //             }
    //         };
            
    //         updateCounter();
    //     }
    
    //     // Simple live updates
    //     function startLiveUpdates() {
    //         const stats = {
    //             liveClients: 34,
    //             liveSessions: 127,
    //             liveGoals: 89,
    //             liveProgress: 156
    //         };
    
    //         // Initial animation
    //         Object.keys(stats).forEach((statId, index) => {
    //             setTimeout(() => animateCounter(statId, stats[statId], 1000), index * 100);
    //         });
    
    //         // Periodic updates
    //         setInterval(() => {
    //             Object.keys(stats).forEach(statId => {
    //                 if (Math.random() > 0.8) {
    //                     stats[statId] += Math.random() > 0.5 ? 1 : -1;
    //                     stats[statId] = Math.max(0, stats[statId]);
                        
    //                     const element = document.getElementById(statId);
    //                     element.textContent = stats[statId];
    //                     element.style.color = '#3DD288';
                        
    //                     setTimeout(() => {
    //                         element.style.color = '';
    //                     }, 500);
    //                 }
    //             });
    //         }, 5000);
    //     }
    
    //     // Intersection Observer
    //     const observer = new IntersectionObserver((entries) => {
    //         entries.forEach(entry => {
    //             if (entry.isIntersecting) {
    //                 // Animate main stats
    //                 setTimeout(() => animateCounter('clients', 850), 300);
    //                 setTimeout(() => animateCounter('years', 15), 500);
    //                 setTimeout(() => animateCounter('success', 98), 700);
    //                 setTimeout(() => animateCounter('rating', 4.9), 900);
                    
    //                 // Start live updates
    //                 setTimeout(startLiveUpdates, 1200);
                    
    //                 observer.unobserve(entry.target);
    //             }
    //         });
    //     }, { threshold: 0.3 });
    
    //     // Initialize
    //     document.addEventListener('DOMContentLoaded', () => {
    //         observer.observe(document.querySelector('section'));
    //     });
     </script>

   <?php include('practice3.php');?>

</body>
</html>