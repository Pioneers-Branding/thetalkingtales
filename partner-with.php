<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partnerships - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap');
        
        
        @media (min-width: 1440px) {
/*  .lg\:h-72 {*/
/*    height: auto !important;*/
/*    max-height: 500px;*/
/*  }*/
/*}*/    
        .museo-sans-rounded {
            font-family: 'Museo Sans', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans', sans-serif;
        }
        
        .card-hover {
            transition: all 0.4s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
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
        
        .feature-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin-right: 0.75rem;
            margin-top: 0.5rem;
            flex-shrink: 0;
        }
        
        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.75rem;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .feature-item:hover {
            background-color: rgba(249, 240, 229, 0.5);
            transform: translateX(5px);
        }
        
        .hospital-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            border-left: 6px solid #0B87C5;
            position: relative;
            overflow: hidden;
        }
        
        .school-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            border-left: 6px solid #FFC73C;
            position: relative;
            overflow: hidden;
        }
        
        .hospital-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            /*background-color: #0B87C5;*/
            opacity: 0.05;
            border-radius: 0 24px 0 100px;
        }
        
        .school-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            /*background-color: #FFC73C;*/
            opacity: 0.05;
            border-radius: 0 24px 0 100px;
        }
        
        .image-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .image-container img {
            transition: transform 0.4s ease;
        }
        
        .image-container:hover img {
            transform: scale(1.03);
        }
        
        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 1.5rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        
        .image-container:hover .image-overlay {
            transform: translateY(0);
        }
        
        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            position: relative;
        }
        
        .card-icon::after {
            content: '';
            position: absolute;
            inset: -3px;
            border-radius: 19px;
            background: rgba(255, 255, 255, 0.3);
            z-index: -1;
        }
        
        .pattern-bg {
            background-image: radial-gradient(circle at 2px 2px, rgba(74, 74, 74, 0.15) 1px, transparent 0);
            background-size: 20px 20px;
        }
    </style>
</head>

<section class="py-12 md:py-16 " style="background-color:;">
    <div class="container mx-auto px-4 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-16 slide-in" id="header">
            <h1 class="museo-sans-rounded text-4xl lg:text-6xl font-bold mb-6" style="color: #4A4A4A;">
                Partnering with 
                <span style="color: #0B87C5;">Hospitals</span>, 
                <span style="color: #FFC73C;">Rehab Centers</span> 
                & <span style="color: #F36E3B;">Schools</span>
            </h1>
            <p class="museo-sans text-lg lg:text-xl max-w-4xl mx-auto leading-relaxed" style="color: #4A4A4A;">
                We bring clinical-quality online and on-site therapy into institutional care.
            </p>
        </div>

        <!-- Combined Partnership Cards -->
        <div class="space-y-8">
            <!-- Hospital Partnership - Full Width -->
            <div class="slide-in" id="hospital-section">
                <div class="hospital-card card-hover">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <!-- Hospital Image -->
                        <div class="image-container">
                            <img src="assets/partnership/For-Hospitals-&-Rehab-Centers-home.webp" 
                                 alt="Hospital Healthcare Partnership" 
                                 class="w-full w-full h-64  lg:h-72 object-cover">
                            <!--<div class="image-overlay">-->
                            
                            <!--    <h4 class="museo-sans-rounded text-xl font-bold mb-2">Healthcare Excellence</h4>-->
                            <!--    <p class="museo-sans text-sm">Professional therapy services in clinical settings</p>-->
                            <!--</div>-->
                        </div>

                        <!-- Hospital Content -->
                        <div>
                            <div class="card-icon w-fit rounded-md p-1 " style="background-color: #0B87C5;">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <h2 class="museo-sans-rounded text-2xl lg:text-3xl font-bold mb-4" style="color: #4A4A4A;">
                                 For Hospitals & Rehab Centers
                            </h2>
                            
                            <div class="space-y-2">
                                <div class="feature-item">
                                    <div class="feature-dot" style="background-color: #0B87C5;"></div>
                                    <span class="museo-sans text-base" style="color: #4A4A4A;">Therapy support for stroke, cancer, and neurorecovery</span>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-dot" style="background-color: #3DD288;"></div>
                                    <span class="museo-sans text-base" style="color: #4A4A4A;">Structured documentation & rehab team coordination</span>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-dot" style="background-color: #F36E3B;"></div>
                                    <span class="museo-sans text-base" style="color: #4A4A4A;">Hybrid delivery models (in-person + online)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- School Partnership - Full Width -->
            <div class="slide-in" id="school-section">
                <div class="school-card card-hover">
                    <div class="p-1 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <!-- School Content -->
                        <div class="lg:order-1">
                            <div class="card-icon w-fit rounded-md p-1 " style="background-color: #FFC73C;">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h2 class="museo-sans-rounded text-2xl lg:text-3xl font-bold mb-4" style="color: #4A4A4A;">
                                 For Schools
                            </h2>
                            
                            <div class="space-y-2">
                                <div class="feature-item">
                                    <div class="feature-dot" style="background-color: #FFC73C;"></div>
                                    <span class="museo-sans text-base" style="color: #4A4A4A;">Live virtual sessions or in-school visits</span>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-dot" style="background-color: #F36E3B;"></div>
                                    <span class="museo-sans text-base" style="color: #4A4A4A;">Early screenings, Individualized education program support & staff workshops</span>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-dot" style="background-color: #3DD288;"></div>
                                    <span class="museo-sans text-base" style="color: #4A4A4A;">Scalable for special education & mainstream setups</span>
                                </div>
                            </div>
                        </div>

                        <!-- School Image -->
                        <div class="lg:order-2">
                            <div class="image-container">
                                <img src="assets/partnership/For-Schools-home.webp" 
                                     alt="School Education Partnership" 
                                     class="w-full h-64  lg:h-72 object-cover">
                                     <!--w-full h-64  lg:h-72 object-cover-->
                                <!--<div class="image-overlay">-->
                                <!--    <h4 class="museo-sans-rounded text-xl font-bold mb-2">Educational Innovation</h4>-->
                                <!--    <p class="museo-sans text-sm">Supporting student development and learning outcomes</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                                    <div class="flex flex-col mt-10 sm:flex-row gap-4 justify-center">
                <!--<button class="bg-primary-orange hover:from-primary-green hover:to-primary-blue text-white font-museo-rounded font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105 shadow-lg">-->
                <!--    Start Your Journey-->
                <!--</button>-->
            <a 
  href="contact-us#booking-form1" 
  class="border-2 border-primary-blue bg-primary-blue text-white font-museo-rounded font-bold px-6 md:px-8 py-3 md:py-4 text-sm md:text-base rounded-2xl transition duration-300 hover:scale-105 block w-fit mx-auto"
>
  Book an appointment
</a>
            </div>

    </div>
</section>

<script>
    // Intersection Observer for animations
    const observerOptionsx = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observerx = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptionsx);

    // Observe all elements with slide-in class
    document.querySelectorAll('.slide-in').forEach(el => {
        observerx.observe(el);
    });

    // Add staggered animation delays
    const elements = ['#hospital-section', '#school-section'];
    elements.forEach((selector, index) => {
        const element = document.querySelector(selector);
        if (element) {
            element.style.transitionDelay = `${index * 0.3}s`;
        }
    });

    // Enhanced hover effects for feature items
    document.querySelectorAll('.feature-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            const dot = this.querySelector('.feature-dot');
            if (dot) {
                dot.style.transform = 'scale(1.3)';
                dot.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.2)';
            }
        });
        
        item.addEventListener('mouseleave', function() {
            const dot = this.querySelector('.feature-dot');
            if (dot) {
                dot.style.transform = 'scale(1)';
                dot.style.boxShadow = 'none';
            }
        });
    });
</script>

</html>