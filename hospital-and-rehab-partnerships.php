<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Partnership - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                <?php include('header-links.php');?>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#0B87C5',
                        'primary-yellow': '#FFC73C', 
                        'primary-orange': '#F36E3B',
                        'primary-green': '#3DD288',
                        'primary-gray': '#4A4A4A',
                        'primary-cream': '#F9F0E5'
                    },
                    fontFamily: {
                        'museo-rounded': ['Museo Sans', 'sans-serif'],
                        'museo': ['Museo Sans', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!--form-->
    <style>


        
        /* Form Input Styles */
        .form-input {
            transition: all 0.3s ease;
            border: 2px solid #E5E7EB;
        }
        
        .form-input:focus {
            border-color: #0B87C5;
            box-shadow: 0 0 0 3px rgba(11, 135, 197, 0.1);
            outline: none;
        }
        
        .form-input:valid {
            border-color: #3DD288;
        }
        
        .form-input.error {
            border-color: #F36E3B;
            animation: shake 0.5s ease-in-out;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        /* Button Styles */
        .btn-primary {
            background: #0B87C5;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary:hover {
            background: #0969A3;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(11, 135, 197, 0.3);
        }
        
        /* Partner Type Cards */
        .partner-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            border: 2px solid transparent;
        }
        
        .partner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(11, 135, 197, 0.15);
            border-color: #0B87C5;
        }
        
        .partner-card.selected {
            border-color: #0B87C5;
            background: #EBF8FF;
        }
        
        /* Loading Animation */
        .loading-spinner {
            border: 2px solid transparent;
            border-top: 2px solid #ffffff;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Success Animation */
        .success-checkmark {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: block;
            stroke-width: 3;
            stroke: #3DD288;
            stroke-miterlimit: 10;
            animation: fill 0.4s ease-in-out 0.4s forwards;
        }
        
        .success-checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 3;
            stroke-miterlimit: 10;
            stroke: #3DD288;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }
        
        .success-checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }
        
        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }
        
        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #3DD288;
            }
        }
        
        /* Stagger Animation */
        .stagger-item {
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.6s ease-out forwards;
        }
        
        .stagger-item:nth-child(1) { animation-delay: 0.1s; }
        .stagger-item:nth-child(2) { animation-delay: 0.2s; }
        .stagger-item:nth-child(3) { animation-delay: 0.3s; }
        .stagger-item:nth-child(4) { animation-delay: 0.4s; }
        .stagger-item:nth-child(5) { animation-delay: 0.5s; }
        .stagger-item:nth-child(6) { animation-delay: 0.6s; }
        
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Benefit Items */
        .benefit-item {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            padding-left: 1rem;
        }
        
        .benefit-item:hover {
            border-left-color: #0B87C5;
            background: #F8FAFC;
            transform: translateX(8px);
        }
        
        /* Country Code Dropdown */
        .country-dropdown select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }
    </style>
    
    
    
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
    
    
    
    
.museo-rounded {
  font-family: 'Museo Sans Rounded', sans-serif;
  font-weight: 700;
}       

 .hero-gradient {
    background: linear-gradient(135deg, #F9F0E5 0%, #ffffff 50%, #F9F0E5 100%);
}

.museo-sans { font-family: 'Museo Sans' , sans-serif; }
        
        /*.hero-gradient {*/
        /*    background: linear-gradient(135deg, #0B87C5 0%, #3DD288 100%);*/
        /*}*/
            p {
  font-family: 'Museo Sans', sans-serif;
  font-weight: 500;
  line-height: 1.6; /* Adjust based on your design */
}
        
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards;
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .stagger-1 { animation-delay: 0.2s; }
        .stagger-2 { animation-delay: 0.4s; }
        .stagger-3 { animation-delay: 0.6s; }
        .stagger-4 { animation-delay: 0.8s; }
        
        .medical-icon {
            transition: all 0.3s ease;
        }
        
        .medical-icon:hover {
            transform: scale(1.1) rotate(5deg);
        }
        
        .pulse-ring {
            animation: pulse-ring 2s infinite;
        }
        
        @keyframes pulse-ring {
            0% { transform: scale(0.8); opacity: 1; }
            100% { transform: scale(2.4); opacity: 0; }
        }
    </style>
</head>
<body>
    
            <?php include('header.php');?>

<section class="relative  min-h-screen flex items-center mt-6 py-14 px-4 overflow-hidden">
    <!-- Background Pattern -->


    
    <div class="container mx-auto relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="text-primary-gray">

                <!-- Main Heading -->
<h1 class="fade-in-up stagger-1 museo-rounded text-4xl md:text-5xl lg:text-6xl leading-tight mb-8 text-primary-gray">
    <span class="block">Collaborative Speech and</span>
    <span class="block text-primary-blue">Swallow Therapy Services</span>
</h1>                
                <!-- Description -->
<p class="fade-in-up stagger-2 museo text-xl md:text-2xl text-primary-gray opacity-80 leading-relaxed mb-10 max-w-3xl">
    At Talking Tales Rehabilitation Services, we deliver hospital-grade speech and swallowing therapy through ethical, collaborative partnerships fully integrated into your patient care, not outsourced.
</p>                
                <!-- Key Features -->

                <!-- CTA Buttons -->
                <div class="fade-in-up stagger-4 flex flex-wrap gap-4">
                    <a href="#form-direct" class="bg-primary-blue text-white px-8 py-4 rounded-xl museo-rounded text-lg hover:bg-blue-600 transition-all duration-300 hover:scale-105 shadow-lg">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Partner With Us
                    </a>
                    <!--<a href="hospital-and-rehab-partnerships#why-partner-hospital" class="border-2 border-primary-blue text-primary-blue px-8 py-4 rounded-xl museo-rounded text-lg hover:bg-primary-blue hover:text-white transition-all duration-300">-->
                    <!--    <i class="fas fa-file-medical mr-2"></i>-->
                    <!--    Learn More-->
                    <!--</a>-->
                </div>
            </div>
            
            <!-- Right Visual -->
       <div class="fade-in-up stagger-2 relative max-w-2xl">
           
               <div class="w-full aspect-[7/6] speech-bubble-shape">
      <img 
        src="assets/rehab/Speech (1).webp" 
        alt="Medical Illustration"
        class="w-full h-full object-cover mix-blend-multiply"
      />
    </div>
           
</div>
                
                <!-- Floating Stats -->

            </div>
        </div>
        
    </div>
</section>
   <?php include('hospital-services.php');?>
   
      <?php include('why-partner-hospital.php');?>
      
      
      
      
      
       <!--OUR goals-->
      
<section class="py-16  relative overflow-hidden">
    <style>
        .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans',sans-serif; }
        
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
        
        .approach-point {
            transition: all 0.3s ease;
        }
        
        .approach-point:hover {
            transform: translateY(-2px);
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
            50% { transform: translateY(-15px); }
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
    
    <!-- Decorative Background Elements -->

    
    <div class="container mx-auto px-4">
        
          <div class="max-w-4xl mx-auto text-center mb-10">
    <h1 class="text-5xl md:text-7xl font-museo-rounded font-bold  text-text-gray mb-6 tracking-tight">
      True Collaborative  <span class="font-bold text-primary-blue"> Model</span>
    </h1>
    <p class="text-xl md:text-2xl font-museo font-light text-gray-500 leading-relaxed max-w-3xl mx-auto">
     We align with your care team to share therapeutic responsibility. Our work integrates with your standards and systems, not against them.
    </p>
  </div>
        
        
        
        
        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
                    <!-- Right: Image with Overlays -->
            <div class="slide-in-right">
                <div class="relative">
                    <!-- Main Image -->
                    <div class="relative rounded-3xl overflow-hidden shadow-xl ">
                        <img src="assets/rehab/True-Collaborative-Model.webp" 
                             alt="Online and offline therapy sessions" 
                             class="w-full h-96 lg:h-[500px] object-cover shadow-xl">
                        
                        <!-- Top Left Overlay - Online -->
                        <!--<div class="absolute top-6 left-6 bg-primary-blue/90 backdrop-blur-sm text-white px-4 py-2 rounded-xl">-->
                        <!--    <div class="flex items-center space-x-2">-->
                        <!--        <i class="fas fa-video text-sm"></i>-->
                        <!--        <span class="font-semibold text-sm museo-sans">Online Therapy</span>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!-- Top Right Overlay - Offline -->
                    </div>
                    
               


                </div>
            </div>
            
            
            
            <!-- Left: Content -->
           <div class="slide-in-left">
    <!-- Header -->
 

    <!-- Approach Points -->
    <div class="space-y-4 mb-8">
      

        <!-- Point 2 -->
        <div class="approach-point bg-white/70 backdrop-blur-sm p-4 rounded-2xl border border-white/50 shadow-sm">
            <div class="flex items-start">
                <div class="w-3 h-3 bg-accent-green rounded-full mt-2 mr-4 flex-shrink-0"></div>
                <div>
                    <h4 class="font-bold text-lg text-text-gray museo-rounded mb-1">Adult-Focused, Medically Experienced</h4>
                    <p class="text-text-gray/80 museo-sans">Our therapists are trained to work with complex medical conditions, not just general speech therapy.</p>
                </div>
            </div>
        </div>

        <!-- Point 3 -->
        <div class="approach-point bg-white/70 backdrop-blur-sm p-4 rounded-2xl border border-white/50 shadow-sm">
            <div class="flex items-start">
                <div class="w-3 h-3 bg-primary-blue rounded-full mt-2 mr-4 flex-shrink-0"></div>
                <div>
                    <h4 class="font-bold text-lg text-text-gray museo-rounded mb-1">Shared Responsibility</h4>
                    <p class="text-text-gray/80 museo-sans">We offer partnership models that reduce staffing burdens while keeping your care quality high. You maintain control while we share the therapy load.</p>
                </div>
            </div>
        </div>

        <!-- Point 4 -->
        <div class="approach-point bg-white/70 backdrop-blur-sm p-4 rounded-2xl border border-white/50 shadow-sm">
            <div class="flex items-start">
                <div class="w-3 h-3 bg-accent-orange rounded-full mt-2 mr-4 flex-shrink-0"></div>
                <div>
                    <h4 class="font-bold text-lg text-text-gray museo-rounded mb-1">Trusted by Leading Centers</h4>
                    <p class="text-text-gray/80 museo-sans">Our reputation is built on clinical integrity, consistent communication, ethical practice, reliability, and protocol-aligned care.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Button -->
    <div>
        <a href="#form-direct" class="bg-primary-blue text-white px-6 py-3 rounded-full font-bold museo-sans hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            <i class="fas fa-play-circle mr-2"></i>
            Book Consultation
        </a>
    </div>
</div>

            
    
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
                    }, index * 100);
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

      
            <?php include('how-partner-hospital.php');?>
            
 <section class="container mx-auto mb-10 px-4">
  <div class="mt-10 bg-[#4A4A4A] text-white rounded-3xl p-6 sm:p-8 md:p-10 text-center">
    
    <h3 class="text-xl sm:text-2xl font-museo-rounded font-bold mb-4">
      Ready to partner with us?
    </h3>
    
    <p class="font-museo text-gray-300 mb-6 max-w-xl mx-auto text-base sm:text-lg">
      Whether you're managing a stroke unit, an oncology wing, or a rehabilitation center, we're ready to partner with you.
    </p>
    
    <div class="flex justify-center">
      <a href="#form-direct"
         class="bg-accent-yellow text-white font-museo font-semibold px-6 py-3 rounded-full hover:bg-yellow-400 transition-all duration-300 text-sm sm:text-base">
        Let's Collaborate
      </a>
    </div>
    
  </div>
</section>

             <section id="form-direct" class="py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-blue-100 text-primary-blue px-4 py-2 rounded-full museo-sans text-sm font-semibold mb-6">
                    <i class="fas fa-handshake mr-2"></i>
                    Partnership Opportunities
                </div>
                <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800 mb-4">
                    Partner With Talking Tales
                </h2>
                <p class="museo-sans text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Join our network of healthcare and educational partners. Together, we can make quality speech therapy accessible to more people who need it.
                </p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
                
                <!-- Left Column - Information -->
                <div class="space-y-8">
                    
                    <!-- Partnership Types -->
                    <div class="stagger-item">
                        <h3 class="museo-rounded text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-users text-primary-blue mr-3"></i>
                            Who We Partner With
                        </h3>
                        <div class="grid gap-4">
                            <div class="partner-card bg-white rounded-2xl p-6 shadow-lg">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-school text-2xl text-primary-blue"></i>
                                    </div>
                                    <div>
                                        <h4 class="museo-rounded text-lg font-bold text-gray-800">Schools & Educational Institutions</h4>
                                        <p class="museo-sans text-sm text-gray-600">IB, IGCSE, Cambridge, CBSE-i schools seeking inclusive support</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="partner-card bg-white rounded-2xl p-6 shadow-lg">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-hospital text-2xl text-green-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="museo-rounded text-lg font-bold text-gray-800">Hospitals & Healthcare Centers</h4>
                                        <p class="museo-sans text-sm text-gray-600">Medical facilities providing comprehensive patient care</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="partner-card bg-white rounded-2xl p-6 shadow-lg">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-heartbeat text-2xl text-orange-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="museo-rounded text-lg font-bold text-gray-800">Rehabilitation Centers</h4>
                                        <p class="museo-sans text-sm text-gray-600">Specialized centers for recovery and therapeutic services</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Partnership Benefits -->
                    <div class="stagger-item">
                        <h3 class="museo-rounded text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-star text-yellow-600 mr-3"></i>
                            Partnership Benefits
                        </h3>
                        <div class="space-y-4">
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-gray-800 mb-1">Expert Speech Therapy Services</h4>
                                        <p class="museo-sans text-sm text-gray-600">Access to certified speech-language pathologists and specialized programs</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-gray-800 mb-1">Flexible Service Models</h4>
                                        <p class="museo-sans text-sm text-gray-600">On-site visits, online sessions, or hybrid approaches based on your needs</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-gray-800 mb-1">Staff Training & Support</h4>
                                        <p class="museo-sans text-sm text-gray-600">Professional development and training programs for your team</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-gray-800 mb-1">Free Initial Screening Programs</h4>
                                        <p class="museo-sans text-sm text-gray-600">Complimentary assessment services for new partner institutions</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-gray-800 mb-1">Regular Progress Reports</h4>
                                        <p class="museo-sans text-sm text-gray-600">Detailed reporting and communication with your administration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="stagger-item">
                        <div class="bg-blue-50 rounded-2xl p-6">
                            <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-4">
                                <i class="fas fa-phone text-primary-blue mr-2"></i>
                                Quick Contact
                            </h3>
                        <div class="space-y-3">
    <div class="flex items-center space-x-3">
        <i class="fas fa-phone text-primary-blue"></i>
        <a href="tel:+919573737847" class="museo-sans text-gray-700 hover:underline">+91 9573737847</a>
    </div>
    <div class="flex items-center space-x-3">
        <i class="fas fa-envelope text-primary-blue"></i>
        <a href="mailto:info@talkingtales.com" class="museo-sans text-gray-700 hover:underline">info@talkingtales.com</a>
    </div>
    <div class="flex items-center space-x-3">
        <i class="fas fa-clock text-primary-blue"></i>
        <span class="museo-sans text-gray-700">Response within 24 hours</span>
    </div>
</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="stagger-item">
                    <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-10">
                        <div id="formContainer">
                            <div class="text-center mb-8">
                                <h3 class="museo-rounded text-2xl font-bold text-gray-800 mb-2">
                                    Let's Start a Partnership
                                </h3>
                                <p class="museo-sans text-gray-600">
                                    Fill out the form below and we'll get back to you within 24 hours
                                </p>
                            </div>
                            <form  action="https://app.formester.com/forms/aDer2rHHJ/submissions" method="POST">
                                <div class="space-y-6">
                                    
                                    <!-- Institution Type -->
                                    <div>
                                        <label for="institutionType" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Institution Type *
                                        </label>
                                        <select name="institutionType" id="institutionType" required class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                            <option value="">Select Institution Type</option>
                                            <option value="School">School / Educational Institution</option>
                                            <option value="Hospital">Hospital / Medical Center</option>
                                            <option value="Rehabilitation">Rehabilitation Center</option>
                                            <option value="Clinic">Private Clinic</option>
                                            <option value="Other">Other Healthcare Facility</option>
                                        </select>
                                    </div>

                                    <!-- Institution Name -->
                                    <div>
                                        <label for="institutionName" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Institution Name *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="institutionName" 
                                            name="institutionName" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                            placeholder="Enter institution name"
                                        >
                                    </div>

                                    <!-- Contact Person -->
                                    <div>
                                        <label for="contactPerson" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Contact Person Name *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="contactPerson" 
                                            name="contactPerson" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                            placeholder="Enter your full name"
                                        >
                                    </div>

                                    <!-- Position/Title -->
                                    <div>
                                        <label for="position" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Position/Title *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="position" 
                                            name="position" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                            placeholder="e.g., Principal, Medical Director, Administrator"
                                        >
                                    </div>

                                    <!-- Email -->
                                    <div>
                                        <label for="email" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Official Email Address *
                                        </label>
                                        <input 
                                            type="email" 
                                            id="email" 
                                            name="email" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                            placeholder="official.email@institution.com"
                                        >
                                    </div>

                                    <!-- Phone Number -->
                                    <div>
                                        <label class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Phone Number *
                                        </label>
                                        <div class="flex flex-col sm:flex-row gap-2">
                                            <div class="country-dropdown w-full sm:w-auto">
                                                <select name="countryCode" required class="form-input w-full px-3 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                                    <option value="+91">🇮🇳 +91</option>
                                                    <option value="+1">🇺🇸 +1</option>
                                                    <option value="+44">🇬🇧 +44</option>
                                                    <option value="+971">🇦🇪 +971</option>
                                                    <option value="+65">🇸🇬 +65</option>
                                                    <option value="+60">🇲🇾 +60</option>
                                                    <option value="+61">🇦🇺 +61</option>
                                                </select>
                                            </div>
                                            <input 
                                                type="tel" 
                                                name="phoneNumber" 
                                                required
                                                class="form-input flex-1 w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                                placeholder="Enter phone number"
                                            >
                                        </div>
                                    </div>

                                    <!-- Location -->
                                    <div>
                                        <label for="location" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Institution Location *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="location" 
                                            name="location" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                            placeholder="City, State, Country"
                                        >
                                    </div>

                                    <!-- Services Interested -->
                                    <div>
                                        <label for="servicesInterested" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Services You're Interested In *
                                        </label>
                                        <select name="servicesInterested" id="servicesInterested" required class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                            <option value="">Select Services</option>
                                            <option value="Speech & Language Therapy">Speech & Language Therapy</option>
                                            <option value="Swallowing Therapy">Swallowing (Dysphagia) Management</option>
                                            <option value="Staff Training">Staff Training & Professional Development</option>
                                            <option value="Screening Programs">Free Screening Programs</option>
                                            <option value="Comprehensive Package">Comprehensive Speech Therapy Package</option>
                                            <option value="Consultation">Initial Consultation & Assessment</option>
                                        </select>
                                    </div>

                                    <!-- Number of Students/Patients -->
                                    <div>
                                        <label for="capacity" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Approximate Number of Students/Patients
                                        </label>
                                        <select name="capacity" id="capacity" class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                            <option value="">Select Range (Optional)</option>
                                               <option value="Under 100">1 - 10</option>
                                            <option value="100-300">10 - 50</option>
                                            <option value="300-500">50 - 100</option>
                                            <option value="500-1000">100 and above</option>
                                        </select>
                                    </div>

                                    <!-- Message -->
                                    <div>
                                        <label for="message" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                            Message *
                                        </label>
                                        <textarea 
                                            id="message" 
                                            name="message" 
                                            required
                                            rows="4"
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white resize-none"
                                            placeholder="Tell us about your institution's needs, goals, and how we can help you provide better speech therapy services..."
                                        ></textarea>
                                    </div>

                                    <!-- Preferred Contact Method -->

                                    <!-- Privacy Consent -->
                                    <div>
                                        <div class="flex items-start space-x-3">
                                            <input type="checkbox" id="consent" name="consent" required class="mt-1 flex-shrink-0 cursor-pointer">
                                            <label for="consent" class="museo-sans text-xs sm:text-sm text-gray-600 cursor-pointer leading-relaxed">
                                                I consent to The Talking Tales contacting our healthcare institution regarding clinical partnership and speech/swallowing rehab integration. We acknowledge the <a href="legal,policies-and-T&C#privacy-policy" target="_blank" class="text-primary-blue underline">Privacy Policy</a> and <a href="legal,policies-and-T&C#school-partnerships" target="_blank" class="text-primary-blue underline">Institutional Terms</a>. *
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center mt-8">
                                    <button 
                                        type="submit" 
                                    
                                        class="btn-primary text-white px-8 py-4 rounded-xl museo-sans font-semibold text-lg w-full flex items-center justify-center"
                                    >
                                        <span id="submitText">
                                            <i class="fas fa-handshake mr-3"></i>
                                            Submit Partnership Inquiry
                                        </span>
                                        <div id="loadingSpinner" class="loading-spinner hidden"></div>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Success State -->
                        <div id="successContainer" class="text-center py-8 hidden">
                            <svg class="success-checkmark mx-auto mb-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="success-checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="success-checkmark__check" fill="none" d="m14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                            <h3 class="museo-rounded text-2xl font-bold text-gray-800 mb-4">
                                Partnership Inquiry Submitted!
                            </h3>
                            <p class="museo-sans text-gray-600 mb-6">
                                Thank you for your interest in partnering with Talking Tales. Our partnership team will review your inquiry and contact you within 24 hours to discuss how we can work together.
                            </p>
                            <div class="bg-blue-50 rounded-xl p-4">
                                <p class="museo-sans text-sm text-gray-700">
                                    <strong>Next Steps:</strong> Our team will reach out to schedule a consultation call to discuss your specific needs and partnership opportunities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('partnerForm');
            const formContainer = document.getElementById('formContainer');
            const successContainer = document.getElementById('successContainer');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const loadingSpinner = document.getElementById('loadingSpinner');
            
            // Form Submission
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                
                if (validateForm()) {
                    await submitForm();
                }
            });
            
            function validateForm() {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('error');
                        isValid = false;
                        
                        setTimeout(() => {
                            field.classList.remove('error');
                        }, 3000);
                    }
                });
                
                // Validate email
                const email = document.getElementById('email');
                if (email.value && !isValidEmail(email.value)) {
                    email.classList.add('error');
                    isValid = false;
                    
                    setTimeout(() => {
                        email.classList.remove('error');
                    }, 3000);
                }
                
                return isValid;
            }
            
            function isValidEmail(email) {
                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            }
            

            function showSuccess() {
                formContainer.classList.add('hidden');
                successContainer.classList.remove('hidden');
            }
            
            // Real-time validation
            document.querySelectorAll('.form-input').forEach(input => {
                input.addEventListener('input', () => {
                    if (input.classList.contains('error')) {
                        input.classList.remove('error');
                    }
                });
            });
            
            // Phone number formatting
            document.querySelector('input[type="tel"]').addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
            });
            
            // Partner card interactions
            document.querySelectorAll('.partner-card').forEach(card => {
                card.addEventListener('click', function() {
                    // Remove selected class from all cards
                    document.querySelectorAll('.partner-card').forEach(c => c.classList.remove('selected'));
                    // Add selected class to clicked card
                    this.classList.add('selected');
                    
                    // Auto-select institution type based on card clicked
                    const institutionSelect = document.getElementById('institutionType');
                    const cardText = this.querySelector('h4').textContent;
                    
                    if (cardText.includes('School')) {
                        institutionSelect.value = 'School';
                    } else if (cardText.includes('Hospital')) {
                        institutionSelect.value = 'Hospital';
                    } else if (cardText.includes('Rehabilitation')) {
                        institutionSelect.value = 'Rehabilitation';
                    }
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
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, observerOptions);
            
            // Observe stagger animation elements
            document.querySelectorAll('.stagger-item').forEach(el => {
                observer.observe(el);
            });
            
            // Benefit item hover effects
            document.querySelectorAll('.benefit-item').forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.borderLeftColor = '#0B87C5';
                    this.style.background = '#F8FAFC';
                    this.style.transform = 'translateX(8px)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.borderLeftColor = 'transparent';
                    this.style.background = 'transparent';
                    this.style.transform = 'translateX(0)';
                });
            });
        });
    </script>
            
                        <?php include('footer.php');?>



    <script>
       document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    navbar.classList.add('navbar-scrolled');
});
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enhanced button interactions
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.02)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
            
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'translateY(0) scale(1)';
                }, 150);
            });
        });

        // Medical icon hover effects
        document.querySelectorAll('.medical-icon').forEach(icon => {
            icon.addEventListener('mouseenter', function() {
                this.style.backgroundColor = 'rgba(255, 255, 255, 0.2)';
            });
            
            icon.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
            });
        });

        // Parallax effect for floating elements
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const floatingElements = document.querySelectorAll('.floating-element');
            
            floatingElements.forEach((element, index) => {
                const speed = 0.5 + (index * 0.1);
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    });
</script>
</body>
</html>