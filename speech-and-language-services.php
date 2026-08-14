<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speech & Language Therapy Services - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
        <?php include('header-links.php');?>
        
        <!--tabbular-->
        
            <style>
        .section-content {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }
        
        .section-content.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .section-number {
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            background: transparent;
        }
        
        .section-number.active {
            background: white;
            color: #0B87C5;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .section-number.active::after {
            display: none;
        }
        
        .feature-icon {
            background: linear-gradient(135deg, #FFC73C 0%, #F36E3B 100%);
        }
        
        .therapy-image {
            /*background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);*/
            /*border: 2px solid #dee2e6;*/
        }
    </style>

        
        
  <style>
        :root {
            --primary-blue: #0B87C5;
            --accent-yellow: #FFC73C;
            --accent-orange: #F36E3B;
            --accent-green: #3DD288;
            --text-gray: #4A4A4A;
            --background-cream: #F9F0E5;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Main Content Layout */
        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        
        /* Left Content */
        .content-left {
            padding-right: 1rem;
        }
        
        .section-badge {
            display: inline-flex;
            align-items: center;
            background: var(--primary-blue);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-gray);
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .section-description {
            font-size: 1rem;
            color: var(--text-gray);
            line-height: 1.5;
            margin-bottom: 1.5rem;
     
        }
        
        .highlight-text {
            background: var(--accent-yellow);
            padding: 0.1rem 0.3rem;
            border-radius: 3px;
            font-weight: 600;
        }
        
        /* Services List */
        .services-list {
            margin-bottom: 1.5rem;
        }
        
        .service-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.75rem;
            padding: 0.75rem;
            border-radius: 8px;
            transition: background-color 0.2s ease;
        }
        
        .service-item:hover {
            background: var(--background-cream);
        }
        
        .service-bullet {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 1rem;
            margin-top: 0.4rem;
            flex-shrink: 0;
        }
        
        .service-bullet.blue { background: var(--primary-blue); }
        .service-bullet.green { background: var(--accent-green); }
        .service-bullet.orange { background: var(--accent-orange); }
        .service-bullet.yellow { background: var(--accent-yellow); }
        .service-bullet.gray { background: var(--text-gray); }
        
        .service-content h3 {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-gray);
            margin: 0 0 0.25rem 0;
            line-height: 1.3;
        }
        
        .service-content p {
            font-size: 0.875rem;
            color: var(--text-gray);
            line-height: 1.4;
            opacity: 0.7;
            margin: 0;
        }
        
        /* Call to Action Button */
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--primary-blue);
            color: white;
            padding: 0.875rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.2s ease;
        }
        
        .cta-button:hover {
            background: #096ba3;
            transform: translateY(-1px);
        }
        
        /* Right Image */
        .content-right {
            position: relative;
        }
        
        .main-image-container {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            height: 600px;
            /*box-shadow: 0 10px 30px rgba(0,0,0,0.1);*/
        }
        
        .main-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .image-overlay {
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            right: 1rem;
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(5px);
            border-radius: 8px;
            padding: 1rem;
        }
        
        .overlay-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-gray);
            margin-bottom: 0.25rem;
        }
        
        .overlay-text {
            font-size: 0.75rem;
            color: var(--text-gray);
            opacity: 0.8;
            line-height: 1.3;
        }
        
        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-20px);
            transition: all 0.6s ease;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(20px);
            transition: all 0.6s ease;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .content-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .content-left {
                padding-right: 0;
                order: 2;
            }
            
            .content-right {
                order: 1;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .main-image-container {
                height: 280px;
            }
            
            .service-item {
                padding: 0.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .section-title {
                font-size: 1.75rem;
            }
            
            .main-image-container {
                height: 240px;
            }
            
            .image-overlay {
                padding: 0.75rem;
            }
            
            .cta-button {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
    <script>
        // tailwind.config = {
        //     theme: {
        //         extend: {
        //             colors: {
        //                 'primary-blue': '#0B87C5',
        //                 'accent-yellow': '#FFC73C',
        //                 'accent-orange': '#F36E3B',
        //                 'accent-green': '#3DD288',
        //                 'text-gray': '#4A4A4A',
        //                 'background-cream': '#F9F0E5'
        //             },
        //             fontFamily: {
        //                 'museo-rounded': ['Museo Sans Rounded', 'Arial Rounded MT Bold', 'sans-serif'],
        //                 'museo-sans': ['Museo Sans', 'Arial', 'sans-serif']
        //             }
        //         }
        //     }
        // }
    </script>
    <style>
    
.speech-bubble-shape {
    position: relative;
    border-radius: 50% 50% 50% 8%;
    overflow: hidden;
}

.speech-bubble-shape::before {
    /*content: '';*/
    position: absolute;
    bottom: 15%;
    left: 5%;
    width: 25%;
    height: 25%;
    background: white;
    border-radius: 50%;
    z-index: 1;
}

.speech-bubble-shape img {
    position: relative;
    z-index: 0;
}

        .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', sans-serif; }
        
        .hero-gradient {
            /*background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);*/
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-animation:nth-child(2) {
            animation-delay: -2s;
        }
        
        .floating-animation:nth-child(3) {
            animation-delay: -4s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: all 0.8s ease;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(40px);
            transition: all 0.8s ease;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-white">
    
    
            <?php include('header.php');?>


    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center relative overflow-hidden">
 
        
        <div class="container mx-auto px-4 py-16 mt-10 lg:mt-0  relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                
                <!-- Left Content -->
                <div class="space-y-8 slide-in-left">
           
                    
                    <!-- Main Heading -->
                    <div class="space-y-4">
                        <h1 class="font-museo-rounded text-4xl lg:text-6xl font-bold text-text-gray leading-tight">
                            Speech & <span class="text-primary-blue">Language Services</span>
                        </h1>
                        
                        <p class="font-museo-sans text-base lg:text-lg text-text-gray leading-relaxed max-w-2xl">
                           Talking tales offer both clinic-based and  online therapy  that are equally engaging and effective. You choose what works best for your lifestyle . we ensure the quality remains consistent
                        </p>
                    </div>
                    
                    <!-- Key Benefits -->
                    <div class="space-y-6">
                        <p class="font-museo-sans text-base lg:text-lg text-text-gray leading-relaxed">
                          Our  online therapy  options are ideal for those who prefer convenience  and  flexibility , offering access to expert therapists from anywhere. Alternatively, offline sessions are available for in-person care, providing hands-on support and more personalized interaction.
                        </p>
                        
              
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="contact-us#booking-form1" class="bg-primary-blue text-white px-8 py-4 rounded-full font-museo-sans font-bold text-lg hover:bg-blue-700 transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            <i class="fas fa-calendar-check mr-3"></i>
                            Book Online Session
                        </a>
                        <a href="index#location" class="bg-white text-primary-blue px-8 py-4 rounded-full font-museo-sans font-bold text-lg border-2 border-primary-blue hover:bg-primary-blue hover:text-white transition-all duration-300 flex items-center justify-center shadow-lg">
                            <i class="fas fa-map-marker-alt mr-3"></i>
                            Visit Our Clinic
                        </a>
                    </div>
                </div>
                
                <!-- Right Visual Content -->
<div class="relative slide-in-right">
  <div class="relative overflow-hidden">
    <div class="w-full aspect-[7/6] speech-bubble-shape">
      <img 
        src="assets/speech/Online.webp" 
        alt="Speech therapy session"
        class="w-full h-full object-cover mix-blend-multiply"
      />
    </div>
  </div>
</div>

</div>
        </div>
    </section>
    
    
    
    <!--What We Offer-->
    
     <section class="py-12 container px-4 bg-white">
    
              <div class="max-w-4xl mx-auto text-center mb-20">
            <h1 class="text-5xl md:text-7xl font-museo-rounded font-light text-text-gray mb-6 tracking-tight">
                What  <span class="font-bold text-primary-blue">We Offer</span>
            </h1>
            <p class="text-xl md:text-2xl font-museo font-light text-gray-500 leading-relaxed max-w-3xl mx-auto">
We offer a range of services designed to help you on your communication journey. 
                              </p>
        </div>


    
    <div class="container">

        <div class="content-grid">
            
          
            <!-- Left: All Content -->
            <div class="content-left slide-in-left">
        
                <div class="services-list">
                    <!-- Service 1 -->
                    <div class="service-item">
                        <div class="service-bullet blue"></div>
                        <div class="service-content">
                            <h3>Speech and Language Therapy</h3>
                            <p>For children and adults facing challenges in speaking, understanding, or expressing themselves</p>
                        </div>
                    </div>
                    
                    <!-- Service 2 -->
                    <div class="service-item">
                        <div class="service-bullet green"></div>
                        <div class="service-content">
                            <h3>Swallowing Therapy (Dysphagia)</h3>
                            <p>Support for safe eating and drinking — in ICU, post-stroke, post-surgery, or neurological conditions..</p>
                        </div>
                    </div>
                    
                    <!-- Service 3 -->
                    <div class="service-item">
                        <div class="service-bullet orange"></div>
                        <div class="service-content">
                            <h3>Cleft Lip and Palate (CLP) Care</h3>
                            <p>From early feeding support to post-surgical speech therapy for clearer communication.</p>
                        </div>
                    </div>
                    
                    <!-- Service 4 -->
                    <div class="service-item">
                        <div class="service-bullet yellow"></div>
                        <div class="service-content">
                            <h3>Parent & Caregiver Training</h3>
                            <p> Helping families become therapy partners with practical tools and guidance..</p>
                        </div>
                    </div>
                    
                    <!-- Service 5 -->
                    <div class="service-item">
                        <div class="service-bullet gray"></div>
                        <div class="service-content">
                            <h3>Fluency (Stuttering) Therapy</h3>
                            <p>For children and adults looking to gain fluency and ease in speech.</p>
                        </div>
                    </div>
                     <!-- Service 6 -->
                                        <div class="service-item">
                        <div class="service-bullet blue"></div>
                        <div class="service-content">
                            <h3>Voice Therapy</h3>
                            <p>For hoarseness, vocal fatigue, or professional voice users.</p>
                        </div>
                    </div>

                             <!-- Service 7 -->
                    <div class="service-item">
                        <div class="service-bullet orange"></div>
                        <div class="service-content">
                            <h3>Communication Kits and Home Plans</h3>
                            <p>Custom tools and activities are designed to support therapy at home.</p>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
                
                <a href="contact-us#booking-form1" class="cta-button">
                    <i class="fas fa-calendar-check"></i>
                    Schedule Your Consultation
                </a>
            </div>
            
            <!-- Right: Single Image -->
            <div class="content-right slide-in-right">
                <div class="main-image-container shadow-xl">
                    <img src="assets/speech/What-We-Offer.webp" 
                         alt="Professional speech therapy session" class="main-image">
                    
                    <!--<div class="image-overlay">-->
                    <!--    <div class="overlay-title">Expert Care & Support</div>-->
                    <!--    <div class="overlay-text">-->
                    <!--        Professional therapy services tailored to your unique communication needs-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
    
</section>


  <!--our approach-->
  <!-- Our Approach to Online & Offline Therapy Section -->
<section class="py-14 relative overflow-hidden">
  <div class="max-w-4xl mx-auto text-center mb-10">
    <h1 class="text-5xl md:text-7xl font-museo-rounded font-light text-text-gray mb-6 tracking-tight">
      Our <span class="font-bold text-primary-blue">Approach</span>
    </h1>
    <p class="text-xl md:text-2xl font-museo font-light text-gray-500 leading-relaxed max-w-3xl mx-auto">
      We believe therapy should be accessible, personalized, and empowering, whether you walk into our center or log in from home.
    </p>
  </div>

  <div class="container mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      
      <!-- Image Section -->
      <div class="slide-in-right">
        <div class="relative rounded-3xl overflow-hidden shadow-xl">
          <img
            src="assets/speech/Our-Approach-to-Online.webp"
            alt="Online and offline therapy sessions"
            class="w-full h-96 lg:h-[600px] object-cover shadow-xl"
          />
        </div>
      </div>

      <!-- Text Content -->
      <div class="slide-in-left">
        <div class="space-y-4 mb-8">
          <!-- Point 1 -->
          <div class="approach-point bg-white/70 backdrop-blur-sm p-4 rounded-2xl border border-white/50 shadow-sm">
            <div class="flex items-start">
              <div class="w-3 h-3 bg-accent-orange rounded-full mt-2 mr-4 flex-shrink-0"></div>
              <div>
                <h4 class="font-bold text-lg text-text-gray museo-rounded mb-1">Client-Centered Plans</h4>
                <p class="text-text-gray/80 museo-sans">No copy-paste programs. Every plan is designed around your goals, your pace, and your world.</p>
              </div>
            </div>
          </div>

          <!-- Point 2 -->
          <div class="approach-point bg-white/70 backdrop-blur-sm p-4 rounded-2xl border border-white/50 shadow-sm">
            <div class="flex items-start">
              <div class="w-3 h-3 bg-accent-green rounded-full mt-2 mr-4 flex-shrink-0"></div>
              <div>
                <h4 class="font-bold text-lg text-text-gray museo-rounded mb-1">Hands-On & Screen-Smart</h4>
                <p class="text-text-gray/80 museo-sans">In person, we bring tangible tools and interactive methods. Online, we go beyond the screen using customized kits, parent coaching, and follow-up activities.</p>
              </div>
            </div>
          </div>

          <!-- Point 3 -->
          <div class="approach-point bg-white/70 backdrop-blur-sm p-4 rounded-2xl border border-white/50 shadow-sm">
            <div class="flex items-start">
              <div class="w-3 h-3 bg-primary-blue rounded-full mt-2 mr-4 flex-shrink-0"></div>
              <div>
                <h4 class="font-bold text-lg text-text-gray museo-rounded mb-1">Team Approach</h4>
                <p class="text-text-gray/80 museo-sans">We work with families, caregivers, educators, and medical professionals to make therapy a shared effort.</p>
              </div>
            </div>
          </div>

          <!-- Point 4 -->
          <div class="approach-point bg-white/70 backdrop-blur-sm p-4 rounded-2xl border border-white/50 shadow-sm">
            <div class="flex items-start">
              <div class="w-3 h-3 bg-accent-orange rounded-full mt-2 mr-4 flex-shrink-0"></div>
              <div>
                <h4 class="font-bold text-lg text-text-gray museo-rounded mb-1">Feedback-Driven</h4>
                <p class="text-text-gray/80 museo-sans">Regular reviews, progress check-ins, and open communication guide our journey.</p>
              </div>
            </div>
          </div>

          <!-- Point 5 -->
          <div class="approach-point bg-white/70 backdrop-blur-sm p-4 rounded-2xl border border-white/50 shadow-sm">
            <div class="flex items-start">
              <div class="w-3 h-3 bg-accent-green rounded-full mt-2 mr-4 flex-shrink-0"></div>
              <div>
                <h4 class="font-bold text-lg text-text-gray museo-rounded mb-1">Real-Life Relevance</h4>
                <p class="text-text-gray/80 museo-sans">We make sure every therapy experience connects with everyday life to build lasting, meaningful progress.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Bottom Text and CTA -->
    <div class="text-center mt-10 max-w-3xl mx-auto">
      <h4 class="text-2xl font-bold museo-rounded text-text-gray mb-4">In Person or Online – You’re Not Alone</h4>
      <p class="text-lg text-gray-600 museo-sans mb-6">
        Whether you visit our center or meet us virtually, you’ll find a team that listens, adapts, and walks with you through every sound, word, and sentence.
      </p>
      <a
        href="contact-us#booking-form1"
        class="bg-primary-blue text-white px-6 py-3 rounded-full font-bold museo-sans hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 inline-block"
      >
        <i class="fas fa-play-circle mr-2"></i> Book Consultation
      </a>
    </div>
  </div>

  <!-- Animation Script -->
  <script>
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function (entries) {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('visible');
          }, index * 100);
        }
      });
    }, observerOptions);

    document.addEventListener('DOMContentLoaded', function () {
      const animateElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
      animateElements.forEach(el => observer.observe(el));
    });
  </script>

  <!-- Styling -->
  <style>
    .museo-rounded {
      font-family: 'Museo Sans Rounded', sans-serif;
    }

    .museo-sans {
      font-family: 'Museo Sans', sans-serif;
    }

    .fade-in,
    .slide-in-left,
    .slide-in-right {
      opacity: 0;
      transition: all 0.6s ease;
    }

    .fade-in.visible,
    .slide-in-left.visible,
    .slide-in-right.visible {
      opacity: 1;
      transform: translateX(0) translateY(0);
    }

    .slide-in-left {
      transform: translateX(-30px);
    }

    .slide-in-right {
      transform: translateX(30px);
    }

    .approach-point {
      transition: transform 0.3s ease;
    }

    .approach-point:hover {
      transform: translateY(-2px);
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-15px);
      }
    }

    .floating-animation {
      animation: float 6s ease-in-out infinite;
    }

    .floating-animation:nth-child(2) {
      animation-delay: -2s;
    }

    .floating-animation:nth-child(3) {
      animation-delay: -4s;
    }
  </style>
</section>



<!--tab section-->

<!--    <div class="container mx-auto px-6 py-12">-->
        
        <!-- Header Section -->
<!--        <div class="text-center mb-16">-->
<!--            <h1 class="text-4xl md:text-5xl font-bold mb-8">-->
<!--                <span class="text-primary-blue">Speech & Sound Disorder</span> -->
<!--                <span class="text-gray-800">– Online & Offline Therapy for Communication</span>-->
<!--            </h1>-->
            <!--<div class="max-w-5xl mx-auto">-->
            <!--    <p class="text-lg text-gray-600 mb-8 font-museo">-->
            <!--        In this section, we provide specialized treatment for various <strong>speech and sound disorders</strong>. We use a <strong>combined approach</strong> of online and offline methods to ensure <strong>effective results</strong>.-->
            <!--    </p>-->
                <!--<div class="bg-gray-50 rounded-xl p-8 border border-gray-200">-->
                <!--    <h2 class="text-2xl font-bold text-gray-800 mb-4">Common Disorders We Address</h2>-->
                <!--    <p class="text-gray-600 font-museo">-->
                <!--        <strong>Our online therapy</strong> services are designed to provide flexible, accessible care for various speech and sound disorders, including those that require early intervention and ongoing monitoring. Here are the key conditions we treat:-->
                <!--    </p>-->
                <!--</div>-->
            <!--</div>-->
<!--        </div>-->

        <!-- Tab Navigation -->
<!--        <div class="flex justify-center mb-16">-->
<!--            <div class="flex flex-wrap justify-center gap-4 items-center bg-gray-50 p-3 rounded-2xl mx-auto">-->
<!--                <button class="section-number active px-6 py-3 rounded-xl font-medium text-gray-600 hover:bg-white transition-all duration-300" onclick="showSection('speech-delay', this)">-->
<!--                    <i class="fas fa-volume-up mr-2"></i>-->
<!--                    Speech Sound Delay-->
<!--                </button>-->
<!--                <button class="section-number px-6 py-3 rounded-xl font-medium text-gray-600 hover:bg-white transition-all duration-300" onclick="showSection('stammering', this)">-->
<!--                    <i class="fas fa-pause-circle mr-2"></i>-->
<!--                    Stammering / Cluttering-->
<!--                </button>-->
<!--                <button class="section-number px-6 py-3 rounded-xl font-medium text-gray-600 hover:bg-white transition-all duration-300" onclick="showSection('dyspraxia', this)">-->
<!--                    <i class="fas fa-brain mr-2"></i>-->
<!--                    Verbal Dyspraxia-->
<!--                </button>-->
<!--                <button class="section-number px-6 py-3 rounded-xl font-medium text-gray-600 hover:bg-white transition-all duration-300" onclick="showSection('apd', this)">-->
<!--                    <i class="fas fa-ear mr-2"></i>-->
<!--                    Auditory Processing-->
<!--                </button>-->
<!--                <button class="section-number px-6 py-3 rounded-xl font-medium text-gray-600 hover:bg-white transition-all duration-300" onclick="showSection('advanced-apd', this)">-->
<!--                    <i class="fas fa-microscope mr-2"></i>-->
<!--                    Advanced APD-->
<!--                </button>-->
<!--                <button class="section-number px-6 py-3 rounded-xl font-medium text-gray-600 hover:bg-white transition-all duration-300" onclick="showSection('early-language', this)">-->
<!--                    <i class="fas fa-child mr-2"></i>-->
<!--                    Early Language Program-->
<!--                </button>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Content Sections -->
<!--        <div class="bg-white rounded-2xl border border-gray-200 p-8 md:p-12 shadow-sm">-->
            
            <!-- Speech Sound Delay Disorders -->
<!--            <div id="speech-delay" class="section-content active">-->
<!--                <div class="grid lg:grid-cols-3 gap-12 items-start">-->
<!--                    <div class="lg:col-span-2">-->
<!--                        <div class="mb-8">-->
<!--                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Speech & Sound Delay Disorders</h2>-->
<!--                            <h3 class="text-xl font-bold text-primary-blue mb-4">Speech Sound Delay</h3>-->
<!--                        </div>-->
                        
<!--                        <p class="text-lg text-gray-600 mb-8 font-museo leading-relaxed">-->
<!--                            Speech delays often stem from issues like <strong>articulation disorders</strong>, <strong>phonological disorders</strong>, or <strong>auditory processing issues</strong>. Early intervention helps prevent further challenges.-->
<!--                        </p>-->
                        
<!--                        <div class="space-y-6">-->
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-exclamation-triangle text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Signs & Symptoms</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Difficulty pronouncing words, poor speech clarity, or issues with forming specific sounds.</p>-->
<!--                                </div>-->
<!--                            </div>-->
                            
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-lightbulb text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Intervention Strategies</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Tailored plans to develop correct pronunciation and clear speech patterns.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    
<!--<div class="lg:col-span-1">-->
<!--    <div class="therapy-image rounded-2xl text-center h-80 flex items-center justify-center overflow-hidden">-->
<!--        <img src="assets/speech/tab-1.webp" alt="Fluency Training" class="w-full h-full object-cover rounded-2xl">-->
<!--    </div>-->
<!--</div> -->
<!--                </div>-->
<!--            </div>-->

            <!-- Stammering / Cluttering -->
<!--            <div id="stammering" class="section-content">-->
<!--                <div class="grid lg:grid-cols-3 gap-12 items-center">-->
<!--                    <div class="lg:col-span-2">-->
<!--                        <div class="mb-8">-->
<!--                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Stammering / Cluttering</h2>-->
<!--                            <h3 class="text-xl font-bold text-primary-blue mb-4">Understanding Stammering</h3>-->
<!--                        </div>-->
                        
<!--                        <p class="text-lg text-gray-600 mb-8 font-museo leading-relaxed">-->
<!--                            Stammering can affect both children and adults, impacting communication and confidence. Early intervention is key to managing stammering and improving fluency.-->
<!--                        </p>-->
                        
<!--                        <div class="space-y-6">-->
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-exclamation-triangle text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Signs</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Frequent repetition of words, pauses, and tension while speaking.</p>-->
<!--                                </div>-->
<!--                            </div>-->
                            
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-lightbulb text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Strategies</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Techniques to improve speech flow and reduce anxiety during communication.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    
<!--<div class="lg:col-span-1">-->
<!--    <div class="therapy-image rounded-2xl  text-center h-80 flex items-center justify-center overflow-hidden">-->
<!--        <img src="assets/speech/tab-2.webp" alt="Fluency Training" class="w-full h-full object-cover rounded-2xl">-->
<!--    </div>-->
<!--</div> -->

<!--</div>-->
<!--            </div>-->

            <!-- Verbal Dyspraxia -->
<!--            <div id="dyspraxia" class="section-content">-->
<!--                <div class="grid lg:grid-cols-3 gap-12 items-center">-->
<!--                    <div class="lg:col-span-2">-->
<!--                        <div class="mb-8">-->
<!--                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Verbal Dyspraxia (Childhood Apraxia of Speech)</h2>-->
<!--                            <h3 class="text-xl font-bold text-primary-blue mb-4">Motor Speech Disorder Overview</h3>-->
<!--                        </div>-->
                        
<!--                        <p class="text-lg text-gray-600 mb-8 font-museo leading-relaxed">-->
<!--                            Verbal dyspraxia (also known as childhood apraxia of speech) affects a child's ability to plan and coordinate muscle movements required for speech.-->
<!--                        </p>-->
                        
<!--                        <div class="space-y-6">-->
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-exclamation-triangle text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Symptoms</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Difficulty pronouncing words, inconsistent speech errors, or limited speech sounds.</p>-->
<!--                                </div>-->
<!--                            </div>-->
                            
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-lightbulb text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Assessment & Therapy Plan</h4>-->
<!--                                    <p class="text-gray-600 font-museo">A comprehensive evaluation to create an individualized therapy plan focused on speech motor skills.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    
<!--<div class="lg:col-span-1">-->
<!--    <div class="therapy-image text-center h-80 flex items-center justify-center overflow-hidden">-->
<!--        <img src="assets/speech/verbal-dyspraxia.webp" alt="Fluency Training" class="w-full h-full object-cover rounded-2xl">-->
<!--    </div>-->
<!--</div> -->
<!--                </div>-->
<!--            </div>-->

            <!-- Auditory Processing Disorder -->
<!--            <div id="apd" class="section-content">-->
<!--                <div class="grid lg:grid-cols-3 gap-12 items-center">-->
<!--                    <div class="lg:col-span-2">-->
<!--                        <div class="mb-8">-->
<!--                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Auditory Processing Disorder (APD)</h2>-->
<!--                            <h3 class="text-xl font-bold text-primary-blue mb-4">APD Introduction</h3>-->
<!--                        </div>-->
                        
<!--                        <p class="text-lg text-gray-600 mb-8 font-museo leading-relaxed">-->
<!--                            Auditory Processing Disorder (APD) makes it difficult for the brain to process sounds, even though hearing ability may be normal. Children and adults alike may struggle to understand spoken words, especially in noisy environments.-->
<!--                        </p>-->
                        
<!--                        <div class="space-y-6">-->
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-exclamation-triangle text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Signs</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Difficulty understanding speech, especially in noisy settings; problems following verbal instructions.</p>-->
<!--                                </div>-->
<!--                            </div>-->
                            
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-lightbulb text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Strategies</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Tailored exercises and therapy to improve auditory processing skills.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    
<!--<div class="lg:col-span-1">-->
<!--    <div class="therapy-image text-center h-80 flex items-center justify-center overflow-hidden">-->
<!--        <img src="assets/speech/APD.webp" alt="Fluency Training" class="w-full h-full object-cover rounded-2xl">-->
<!--    </div>-->
<!--</div> -->
<!--                </div>-->
<!--            </div>-->

            <!-- Advanced Auditory Processing -->
<!--            <div id="advanced-apd" class="section-content">-->
<!--                <div class="grid lg:grid-cols-3 gap-12 items-center">-->
<!--                    <div class="lg:col-span-2">-->
<!--                        <div class="flex items-start mb-8">-->
                            <!--<div class="text-8xl font-bold text-gray-200 mr-6">05</div>-->
<!--                            <div>-->
<!--                                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Advanced Auditory Processing</h2>-->
<!--                                <h3 class="text-xl font-bold text-red-theme mb-4">Screening & Activities</h3>-->
<!--                            </div>-->
<!--                        </div>-->
                        
<!--                        <p class="text-lg text-gray-600 mb-8 font-museo leading-relaxed">-->
<!--                            For individuals with more complex auditory processing challenges, advanced screening and activities are available to identify specific issues and provide targeted intervention.-->
<!--                        </p>-->
                        
<!--                        <div class="space-y-6">-->
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-search text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Screening Tools</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Tools that help assess the severity and nature of auditory processing challenges.</p>-->
<!--                                </div>-->
<!--                            </div>-->
                            
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-gamepad text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Exercises</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Interactive exercises to strengthen auditory processing.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    
<!--<div class="lg:col-span-1">-->
<!--    <div class="therapy-image text-center h-80 flex items-center justify-center overflow-hidden">-->
<!--        <img src="assets/speech/advanced-APD.webp" alt="Fluency Training" class="w-full h-full object-cover rounded-2xl">-->
<!--    </div>-->
<!--</div> -->
<!--                </div>-->
<!--            </div>-->

            <!-- Early Language Program -->
<!--            <div id="early-language" class="section-content">-->
<!--                <div class="grid lg:grid-cols-3 gap-12 items-center">-->
<!--                    <div class="lg:col-span-2">-->
<!--                        <div class="mb-8">-->
<!--                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Early Language Program (Age < 4)</h2>-->
<!--                            <h3 class="text-xl font-bold text-primary-blue mb-4">Toddler-Focused Program</h3>-->
<!--                        </div>-->
                        
<!--                        <p class="text-lg text-gray-600 mb-8 font-museo leading-relaxed">-->
<!--                            Our Early Language Program focuses on helping toddlers develop language skills through <strong>parent-led modules</strong> and <strong>play-based activities</strong>.-->
<!--                        </p>-->
                        
<!--                        <div class="space-y-6">-->
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-users text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Parent Involvement</h4>-->
<!--                                    <p class="text-gray-600 font-museo">We provide guidance for parents to support their toddler's language development at home.</p>-->
<!--                                </div>-->
<!--                            </div>-->
                            
<!--                            <div class="flex items-start">-->
<!--                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">-->
<!--                                    <i class="fas fa-puzzle-piece text-white"></i>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <h4 class="text-lg font-bold text-gray-800 mb-2">Play-Based Learning</h4>-->
<!--                                    <p class="text-gray-600 font-museo">Engaging activities that promote language growth.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    
<!--<div class="lg:col-span-1">-->
<!--    <div class="therapy-image text-center h-80 flex items-center justify-center overflow-hidden">-->
<!--        <img src="assets/speech/early-language.webp" alt="Fluency Training" class="w-full h-full object-cover rounded-2xl">-->
<!--    </div>-->
<!--</div> -->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->

     


    <script>
    //     function showSection(sectionId, element) {
    //         // Hide all section contents
    //         document.querySelectorAll('.section-content').forEach(content => {
    //             content.classList.remove('active');
    //         });
            
    //         // Remove active class from all section numbers
    //         document.querySelectorAll('.section-number').forEach(number => {
    //             number.classList.remove('active');
    //         });
            
    //         // Show selected section content
    //         document.getElementById(sectionId).classList.add('active');
            
    //         // Add active class to clicked section number
    //         element.classList.add('active');
    //     }
        
    //     // Add entrance animation
    //     document.addEventListener('DOMContentLoaded', function() {
    //         const container = document.querySelector('.container');
    //         container.style.opacity = '0';
    //         container.style.transform = 'translateY(30px)';
            
    //         setTimeout(() => {
    //             container.style.transition = 'all 0.8s ease-out';
    //             container.style.opacity = '1';
    //             container.style.transform = 'translateY(0)';
    //         }, 100);
    //     });
    // </script>



   <!--Disorders due to -->
   
   <!-- Disorders We Address Section -->
<!-- Disorders We Address Section -->
<section class="py-16 bg-white relative overflow-hidden">
    <style>
        .museo-rounded { font-family: 'Museo Sans Rounded', 'Arial Rounded MT Bold', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', 'Arial', sans-serif; }
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-30px);
            transition: all 0.6s ease;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(30px);
            transition: all 0.6s ease;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .disorder-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .disorder-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .disorder-card.blue:hover {
            border-left-color: #3b82f6;
        }
        
        .disorder-card.green:hover {
            border-left-color: #10b981;
        }
        
        .disorder-card.orange:hover {
            border-left-color: #f97316;
        }
        
        .age-section {
            border-left: 4px solid;
            position: relative;
        }
        
        .age-section::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 0;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: white;
            border: 3px solid;
        }
        
        .disorder-title {
            font-weight: 700;
            margin-bottom: 4px;
        }
        
        .disorder-description {
            color: #6b7280;
            font-size: 0.9rem;
            line-height: 1.4;
        }
    </style>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#0B87C5',
                        'accent-yellow': '#FFC73C',
                        'accent-orange': '#F36E3B',
                        'accent-green': '#3DD288',
                        'text-gray': '#4A4A4A',
                        'background-cream': '#F9F0E5'
                    }
                }
            }
        }
    </script>
    
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50/30 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        
                      <div class="max-w-4xl mx-auto text-center mb-20">
            <h1 class="text-5xl md:text-7xl font-museo-rounded font-light text-text-gray mb-6 tracking-tight">
                Disorders  <span class="font-bold text-primary-blue">We address</span>
            </h1>
            <p class="text-xl md:text-2xl font-museo font-light text-gray-500 leading-relaxed max-w-3xl mx-auto">
                Our comprehensive speech and language therapy services support individuals with a variety of communication disorders across all ages.
                              </p>
        </div>

        <!--<div class="text-center mb-12 fade-in">-->
        <!--    <h2 class="font-black text-3xl lg:text-5xl text-text-gray mb-4 museo-rounded">-->
        <!--        <span class="text-primary-blue">Disorders</span>-->
        <!--        <span class="text-2xl lg:text-3xl font-semibold">We address</span>-->
        <!--    </h2>-->
        <!--    <p class="text-lg text-text-gray max-w-3xl mx-auto museo-sans">-->
        <!--        Our comprehensive speech and language therapy services support individuals with a variety of communication disorders across all ages.-->
        <!--    </p>-->
        <!--</div>-->
        
        <!-- Disorders by Age Group -->
        <div class="max-w-7xl mx-auto space-y-12">
            
            <!-- Childhood Disorders -->
            <div class="age-section border-blue-500 pl-8 slide-in-left" style="border-color: #3b82f6;">
                <div style="border-color: #0B87C5;" class="absolute left-[-8px] top-0 w-3 h-3 rounded-full bg-white border-3"></div>
                
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-[#0B87C5] rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-child text-white text-lg"></i>
                    </div>
                    <h3 class="font-black text-2xl lg:text-3xl text-text-gray museo-rounded">Childhood Disorders</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="disorder-card blue bg-blue-50 p-4 rounded-lg">
                        <div class="disorder-title text-[#0b87C5] museo-sans">Articulation Disorder</div>
                        <div class="disorder-description museo-sans">Trouble saying certain sounds clearly, making speech hard to understand.</div>
                    </div>
                    <div class="disorder-card blue bg-blue-50 p-4 rounded-lg">
                        <div class="disorder-title text-[#0b87C5] museo-sans">Phonological Disorders</div>
                        <div class="disorder-description museo-sans">Patterns of sound mistakes like saying "tat" instead of "cat."</div>
                    </div>
                    <div class="disorder-card blue bg-blue-50 p-4 rounded-lg">
                        <div class="disorder-title text-[#0b87C5] museo-sans">Childhood Apraxia of Speech</div>
                        <div class="disorder-description museo-sans">The brain struggles to tell the mouth how to move, making speech effortful or unclear.</div>
                    </div>
                    <div class="disorder-card blue bg-blue-50 p-4 rounded-lg">
                        <div class="disorder-title text-[#0b87C5] museo-sans">Stuttering / Cluttering</div>
                        <div class="disorder-description museo-sans">Speech may sound bumpy, with repeats, pauses, or rushed words.</div>
                    </div>
                    <div class="disorder-card blue bg-blue-50 p-4 rounded-lg">
                        <div class="disorder-title text-[#0b87C5] museo-sans">Voice Disorders</div>
                        <div class="disorder-description museo-sans">Voice may sound hoarse, too nasal, or strained due to vocal misuse (e.g., nodules, resonance issues).</div>
                    </div>
                    <div class="disorder-card blue bg-blue-50 p-4 rounded-lg">
                        <div class="disorder-title text-[#0b87C5] museo-sans">Delayed Speech due to Autism, Down Syndrome, CP, ADHD</div>
                        <div class="disorder-description museo-sans">Speech delay linked to developmental or medical conditions, needing specialized care.</div>
                    </div>
                    <div class="disorder-card blue bg-blue-50 p-4 rounded-lg ">
                        <div class="disorder-title text-[#0b87C5] museo-sans">Delayed Speech</div>
                        <div class="disorder-description museo-sans">Slower-than-expected speech development, not always tied to a known cause.</div>
                    </div>
                                        <div class="disorder-card blue bg-blue-50 p-4 rounded-lg ">
                        <div class="disorder-title text-[#0b87C5] museo-sans">Cleft Lip and Palate (CLP)</div>
                        <div class="disorder-description museo-sans"> A congenital condition affecting speech, feeding, and resonance; requires structured therapy for clarity and oral function, often alongside medical management.</div>
                    </div>

                </div>
            </div>
            
            <!-- Teen Disorders -->
            <div class="age-section border-green-500 pl-8 slide-in-right" style="border-color: #10b981;">
                <div style="border-color: #10b981;" class="absolute left-[-8px] top-0 w-3 h-3 rounded-full bg-white border-3"></div>
                
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-user-graduate text-white text-lg"></i>
                    </div>
                    <h3 class="font-black text-2xl lg:text-3xl text-text-gray museo-rounded">Teen Disorders</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="disorder-card green bg-green-50 p-4 rounded-lg">
                        <div class="disorder-title text-green-800 museo-sans">Articulation Errors</div>
                        <div class="disorder-description museo-sans">Continued sound mistakes like "wabbit" for "rabbit," affecting clarity.</div>
                    </div>
                    <div class="disorder-card green bg-green-50 p-4 rounded-lg">
                        <div class="disorder-title text-green-800 museo-sans">Puberphonia (Voice Change Issues)</div>
                        <div class="disorder-description museo-sans">High-pitched voice continues after puberty, even though the body has matured.</div>
                    </div>
                    <div class="disorder-card green bg-green-50 p-4 rounded-lg">
                        <div class="disorder-title text-green-800 museo-sans">Stuttering / Cluttering (Late or Persistent)</div>
                        <div class="disorder-description museo-sans">Fluency issues that remain from childhood or appear during adolescence.</div>
                    </div>
                    <div class="disorder-card green bg-green-50 p-4 rounded-lg">
                        <div class="disorder-title text-green-800 museo-sans">Functional / Emotional Voice Disorders</div>
                        <div class="disorder-description museo-sans">Stress or emotions cause changes in voice tone, strength, or quality.</div>
                    </div>
                    <div class="disorder-card green bg-green-50 p-4 rounded-lg md:col-span-2">
                        <div class="disorder-title text-green-800 museo-sans">Speech Issues from Trauma or Anxiety</div>
                        <div class="disorder-description museo-sans">Emotional or physical trauma makes it harder to speak clearly or confidently.</div>
                    </div>
                </div>
            </div>
            
            <!-- Adult Disorders -->
            <div class="age-section border-orange-500 pl-8 slide-in-left" style="border-color: #f97316;">
                <div style="border-color: #f97316;" class="absolute left-[-8px] top-0 w-3 h-3 rounded-full bg-white border-3"></div>
                
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-user-tie text-white text-lg"></i>
                    </div>
                    <h3 class="font-black text-2xl lg:text-3xl text-text-gray museo-rounded">Adult Disorders</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Dysarthria</div>
                        <div class="disorder-description museo-sans">Slurred or slow speech due to muscle weakness from stroke, Parkinson's, or other conditions.</div>
                    </div>
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Apraxia of Speech</div>
                        <div class="disorder-description museo-sans">The brain knows what to say, but struggles to send the right signals to the mouth.</div>
                    </div>
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Aphasia</div>
                        <div class="disorder-description museo-sans">Difficulty speaking, understanding, reading, or writing—usually after stroke or brain injury.</div>
                    </div>
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Dementia-Related Language Problems</div>
                        <div class="disorder-description museo-sans">Trouble remembering words, following conversations, or expressing thoughts clearly.</div>
                    </div>
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Swallowing Disorder (Dysphagia)</div>
                        <div class="disorder-description museo-sans">Difficulty chewing or swallowing safely, common after stroke or surgery.</div>
                    </div>
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Post-Surgery Voice Changes</div>
                        <div class="disorder-description museo-sans">Changes in voice after procedures like laryngectomy or throat cancer surgery.</div>
                    </div>
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Spasmodic Dysphonia & Vocal Cord Paralysis</div>
                        <div class="disorder-description museo-sans">Voice sounds strained, shaky, or breathy due to nerve problems in the vocal cords.</div>
                    </div>
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Functional Speech Disorders</div>
                        <div class="disorder-description museo-sans">Speaking problems are not caused by illness, but by stress, trauma, or unknown reasons.</div>
                    </div>
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Adult Stuttering / Cluttering</div>
                        <div class="disorder-description museo-sans">Ongoing fluency issues affecting personal or professional life.</div>
                    </div>
                    <div class="disorder-card orange bg-orange-50 p-4 rounded-lg">
                        <div class="disorder-title text-orange-800 museo-sans">Accent Modification</div>
                        <div class="disorder-description museo-sans">Help adjusting an accent for clearer and more confident communication.</div>
                    </div>
                </div>
            </div>
        </div>        
        
        <!-- CTA Section -->
        <div class="text-center mt-16 fade-in">
            <a href="contact-us#booking-form1" class="bg-primary-blue text-white px-8 py-4 rounded-full font-bold text-lg museo-sans hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                <i class="fas fa-calendar-plus mr-3"></i>
                Book an Appointment
            </a>
        </div>
    </div>
    
    <script>
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 200);
                }
            });
        }, observerOptions);

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            animateElements.forEach(el => observer.observe(el));
        });
    </script>
</section>         
<section class="container mx-auto mb-10 px-4">
  <div class="mt-10 bg-[#4A4A4A] text-white rounded-3xl p-6 sm:p-8 md:p-10 text-center">
    <h3 class="text-xl sm:text-2xl font-museo-rounded font-bold mb-4">
      Ready to Begin Your Journey?
    </h3>
    <p class="font-museo text-gray-300 mb-6 max-w-xl mx-auto text-base sm:text-lg">
      Start your path to better communication with expert support from Talking Tales. Whether you're a child, teen, or adult, our personalized therapy sessions are designed for you.
    </p>
    
    <div class="flex justify-center">
      <a href="contact-us#booking-form1"
         class="bg-accent-yellow text-white font-museo font-semibold px-6 py-3 rounded-full hover:bg-yellow-400 transition-all duration-300 text-sm sm:text-base">
        Start Your Therapy
      </a>
    </div>
  </div>
</section>





                 <?php include('footer.php');?>



    <!-- JavaScript for Animations -->
    <script>
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 150);
                }
            });
        }, observerOptions);

        // Initialize animations when page loads
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            animateElements.forEach(el => observer.observe(el));
        });
    </script>
    
        <script>
       document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    navbar.classList.add('navbar-scrolled');
});
    </script>


</body>
</html>