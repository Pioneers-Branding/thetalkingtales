<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Partnership - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans+Rounded:wght@300;400;500;700&family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php include('header-links.php');?>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue1': '#0B87C5',
                        'primary-yellow1': '#FFC73C', 
                        'primary-orange1': '#F36E3B',
                        'primary-green1': '#3DD288',
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
    
    <!--Why choose talking tales-->
    
        <!--What we Do Section-->
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
            font-family: Arial, sans-serif;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-gray);
            margin-bottom: 1rem;
            line-height: 1.2;
            font-family: Arial, sans-serif;
        }
        
        .section-description {
            font-size: 1rem;
            color: var(--text-gray);
            line-height: 1.5;
            margin-bottom: 1.5rem;
            font-family: Arial, sans-serif;
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
            font-family: Arial, sans-serif;
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
            font-family: Arial, sans-serif;
        }
        
        .service-content p {
            font-size: 0.875rem;
            color: var(--text-gray);
            line-height: 1.4;
            opacity: 0.7;
            margin: 0;
            font-family: Arial, sans-serif;
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
            font-family: Arial, sans-serif;
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
            height: 400px;
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
            font-family: Arial, sans-serif;
        }
        
        .overlay-text {
            font-size: 0.75rem;
            color: var(--text-gray);
            opacity: 0.8;
            line-height: 1.3;
            font-family: Arial, sans-serif;
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
    
    
    
    
    
    <!--School need this-->
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
        
        .challenge-card {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .challenge-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }
        
        .solution-item {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .solution-item:hover {
            border-left-color: #0B87C5;
            background-color: rgba(11, 135, 197, 0.02);
            transform: translateX(8px);
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
        
        .icon-pulse {
            animation: iconPulse 2s ease-in-out infinite;
        }
        
        @keyframes iconPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        .warning-glow {
            box-shadow: 0 0 20px rgba(243, 110, 59, 0.3);
        }
        
        .success-glow {
            box-shadow: 0 0 20px rgba(61, 210, 136, 0.3);
        }
        
        .split-section {
            background: linear-gradient(135deg, #fef2f2 0%, #f0f9ff 100%);
        }
    </style>
    
    <!--hero-->
    <style>
      .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', sans-serif; }
        
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
        
        .goal-arrow {
            transition: all 0.3s ease;
        }
        
        .goal-item:hover .goal-arrow {
            transform: translateX(8px);
        }
        
        .pulse-ring {
            animation: pulse-ring 2s infinite;
        }
        
        @keyframes pulse-ring {
            0% { transform: scale(0.8); opacity: 1; }
            100% { transform: scale(2.4); opacity: 0; }
        }
        
        .icon-bounce {
            animation: iconBounce 2s ease-in-out infinite;
        }
        
        @keyframes iconBounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
    </style>
    

    
    <!--why choose / flexible/ screening-->
    
        <style>

  .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', sans-serif; }
        
        .service-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        /*.service-card:hover {*/
        /*    transform: translateY(-12px);*/
        /*    box-shadow: 0 25px 50px rgba(11, 135, 197, 0.2);*/
        /*}*/
        
        /*.service-card::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    right: 0;*/
        /*    height: 4px;*/
        /*    transition: all 0.3s ease;*/
        /*}*/
        
        /*.service-card.blue::before {*/
        /*    background: #0B87C5;*/
        /*}*/
        
        /*.service-card.green::before {*/
        /*    background: #3DD288;*/
        /*}*/
        
        /*.service-card.orange::before {*/
        /*    background: #F36E3B;*/
        /*}*/
        
        .brush-stroke {
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            opacity: 0.1;
            z-index: 0;
        }
        
        .content-overlay {
            position: relative;
            z-index: 1;
        }
        
        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        /*.stagger-animation {*/
        /*    animation: slideInUp 0.8s ease-out forwards;*/
        /*    opacity: 0;*/
        /*    transform: translateY(30px);*/
        /*}*/
        
        /*.stagger-animation:nth-child(1) { animation-delay: 0.1s; }*/
        /*.stagger-animation:nth-child(2) { animation-delay: 0.2s; }*/
        /*.stagger-animation:nth-child(3) { animation-delay: 0.3s; }*/
        
        /*@keyframes slideInUp {*/
        /*    to {*/
        /*        opacity: 1;*/
        /*        transform: translateY(0);*/
        /*    }*/
        /*}*/
    </style>


</head>
<body>
    
    <?php include('header.php');?>


<section class="bg-white min-h-screen flex items-center py-14 mt-10 px-4 relative overflow-hidden">
    
    <div class="container mx-auto relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                
                <!-- Main Heading -->
                <h1 class="fade-in-up stagger-1 museo-rounded text-4xl md:text-5xl lg:text-6xl text-primary-gray font-bold leading-tight mb-6">
                    <span class="block text-primary-blue">Partnering With Schools</span>
                </h1>
                
                <!-- Subheading -->
                <h2 class="fade-in-up stagger-2 museo-rounded text-2xl md:text-3xl text-primary-gray mb-8 leading-relaxed">
                    Building Inclusive Learning Environments Together
                </h2>
                
                <!-- Description -->
                <p class="fade-in-up stagger-3 museo text-xl text-primary-gray opacity-80 leading-relaxed mb-12 max-w-2xl">
                    At Talking Tales Rehabilitation Services, we believe that meaningful change in children's development begins in the classroom. That's why we partner with schools to build an in-house ecosystem for identifying and supporting children with speech and communication challenges, starting right from where learning happens.
                </p>
                
                <!-- CTA Buttons -->
                <div class="fade-in-up stagger-4 flex flex-wrap gap-4 mb-12">
                    <a href="#form-direct" class="bg-primary-blue1 text-white px-8 py-4 rounded-xl museo-rounded text-lg hover:bg-primary-blue transition-all duration-300 hover:scale-105 shadow-lg">
                        <i class="fas fa-handshake mr-2"></i>
                        Partner With Us
                    </a>
             
                </div>
            </div>
            
            <!-- Right Visual -->
<div class="fade-in-up stagger-2 relative rounded-3xl overflow-hidden max-w-2xl mx-auto lg:mx-0">
  <div class="w-full aspect-[7/6] speech-bubble-shape">
    <img 
      src="assets/school/Partnering-With-Schools.webp" 
      alt="Speech therapy session"
      class="w-full h-full object-cover object-right mix-blend-multiply"
    />
  </div>
</div>


</div>
        
    </div>
</section>

<!--Why school need this-->


<section class="bg-white py-14 px-4">
  <div class="container mx-auto">
    <!-- Section Header -->
    <div class="text-center mb-12 fade-in max-w-5xl mx-auto">
      <h2 class="font-bold text-4xl md:text-6xl text-[#4A4A4A] mb-4 museo-rounded">
        Why Schools <span class="text-primary-blue">Need This</span>
      </h2>
      <p class="text-lg text-[#4A4A4A] museo-sans">
        Many children with speech or language delays go unnoticed in their early years, leading to academic underperformance, behavioral issues, and emotional challenges later on. By equipping your teachers to identify signs early and refer students with confidence, we create a system that:
      </p>
    </div>

    <!-- Problem Statement -->
    <div class="grid lg:grid-cols-2 gap-6 items-center">
      
      <!-- Left: All Services Content -->
      <div class="slide-in-left mx-auto">
        <div class="space-y-6">
          <!-- Service 1 -->
          <div class="flex items-center">
            <div class="w-12 h-12 bg-primary-blue rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
              <i class="fas fa-users text-white text-lg"></i>
            </div>
            <div>
              <h3 class="font-bold text-lg lg:text-xl text-[#4A4A4A] museo-rounded">Promotes inclusive education</h3>
            </div>
          </div>

          <!-- Service 2 -->
          <div class="flex items-center">
            <div class="w-12 h-12 bg-orange-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
              <i class="fas fa-chalkboard-teacher text-white text-lg"></i>
            </div>
            <div>
              <h3 class="font-bold text-lg lg:text-xl text-[#4A4A4A] museo-rounded">Improves classroom engagement</h3>
            </div>
          </div>

          <!-- Service 3 -->
          <div class="flex items-center">
            <div class="w-12 h-12 bg-amber-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
              <i class="fas fa-lightbulb text-white text-lg"></i>
            </div>
            <div>
              <h3 class="font-bold text-lg lg:text-xl text-[#4A4A4A] museo-rounded">Supports diverse learning styles</h3>
            </div>
          </div>

          <!-- Service 4 -->
          <div class="flex items-center">
            <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
              <i class="fas fa-child text-white text-lg"></i>
            </div>
            <div>
              <h3 class="font-bold text-lg lg:text-xl text-[#4A4A4A] museo-rounded">Improves student outcomes across development</h3>
            </div>
          </div>
        </div>

        <!-- CTA Button -->
        <div class="mt-8">
          <a href="#form-direct" class="bg-primary-blue text-white px-6 py-3 rounded-full font-bold museo-sans hover:bg-blue-700 transition-all duration-300 shadow-lg">
            <i class="fas fa-phone mr-2"></i>
            Contact Our Specialists
          </a>
        </div>
      </div>

      <!-- Right: Single Image -->
<div class="slide-in-right">
  <div class="relative max-w-lg mx-auto lg:mx-0">
    <div class="aspect-[7/6] speech-bubble-shape overflow-hidden rounded-3xl shadow-xl">
      <img
        src="assets/rehab/Our-Collaborative-Therapy-Model.webp"
        alt="Specialized medical rehabilitation services"
        class="w-full h-full object-cover mix-blend-multiply"
      />
    </div>
  </div>
</div>
    </div>
  </div>
</section>


<?php include('5-step-new.php');?>



<!--flexible/ why choose us-->
<section class="bg-white py-12 lg:py-14 relative overflow-hidden">

    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Header Section -->
                <div class="text-center mb-12 fade-in">
            <h2 class="font-bold text-4xl md:text-6xl text-text-gray mb-4 museo-rounded">
               Flexible Service Models <span class="text-primary-blue">for Schools</span>
            </h2>
            <!--<p class="text-lg text-text-gray museo-sans">-->
            <!--    We provide specialized services for adult and geriatric populations, including:-->
            <!--</p>-->
        </div>

   

        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-12 items-center">
            <!-- Left Side - Service Models -->
            <div class="space-y-6">
                <!--<div class="mb-8">-->
                <!--    <h3 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-3">-->
                <!--        Flexible Service Models for Schools-->
                <!--    </h3>-->
                <!--    <p class="museo-sans text-base text-gray-600 leading-relaxed">-->
                <!--        Choose the approach that works best for your institution and students-->
                <!--    </p>-->
                <!--</div>-->
                
                <!-- Service Cards -->
                <div class="space-y-4">
                    <!-- Reference-Based Model -->
                    <div class=" blue bg-white rounded-xl p-5 lg:p-6  border border-gray-100 stagger-animation">
                        <div class="">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-users text-lg text-primary-blue"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Reference-Based Model
                                    </h4>
                                    <p class="museo-sans text-md text-gray-600 leading-relaxed mb-3">
                                        For schools with internal referral systems, we support only students flagged by teachers or counselors.
                                    </p>
                                    <!--<div class="flex items-center text-primary-blue">-->
                                    <!--    <div class="w-1.5 h-1.5 bg-primary-blue rounded-full mr-2"></div>-->
                                    <!--    <span class="museo-sans text-xs font-medium">Teacher & Counselor Referrals</span>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Online Therapy Model -->
                    <div class=" green bg-white rounded-xl p-5 lg:p-6  border border-gray-100 ">
                        <div class="">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-laptop text-lg text-green-600"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Online Therapy Model
                                    </h4>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed mb-3">
                                        Sessions are delivered virtually, respecting your school schedule and maintaining convenience for students and families.
                                    </p>
                                    <!--<div class="flex items-center text-green-600">-->
                                    <!--    <div class="w-1.5 h-1.5 bg-green-600 rounded-full mr-2"></div>-->
                                    <!--    <span class="museo-sans text-xs font-medium">Virtual Sessions Available</span>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- On-Site Therapist Model -->
                    <div class=" orange bg-white rounded-xl p-5 lg:p-6  border border-gray-100">
                        <div class="">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-building text-lg text-orange-600"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        On-Site Therapist Model
                                    </h4>
                                    <p class="museo-sans text-sm [#4A4A4A]-600 leading-relaxed mb-3">
                                        Our professionals visit the school on scheduled days, providing therapy in classrooms or therapy rooms.
                                    </p>
                                    <!--<div class="flex items-center text-orange-600">-->
                                    <!--    <div class="w-1.5 h-1.5 bg-orange-600 rounded-full mr-2"></div>-->
                                    <!--    <span class="museo-sans text-xs font-medium">On-Campus Support</span>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                        <div class="flex flex-col sm:flex-row gap-4 mt-auto">
            <a href="#form-direct" class="bg-primary-blue1 hover:bg-blue-700 text-white px-8 py-4 rounded-lg transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                <i class="fas fa-handshake"></i>
                Become a Partner School
            </a>
        </div>
                </div>
            </div>

            <!-- Right Side - Image and Decorative Elements -->
          <div class="relative">
  <!-- Main Image Container -->
  <div class="relative z-10 rounded-2xl overflow-hidden max-w-xl mx-auto">
    <div class="aspect-[7/6] speech-bubble-shape">
      <img 
        src="assets/school/Schools-&-Education1.webp" 
        alt="Speech therapy session"
        class="w-full h-full object-cover object-[80%_top] mix-blend-multiply"
      />
    </div>
  </div>
  <!-- Floating elements -->
</div>
        </div>

        <!-- Free Screening Offer -->
        <!--<div class="mt-10">-->
        <!--    <div class=" rounded-2xl p-6 lg:p-8 relative overflow-hidden">-->
           
                
        <!--        <div class="relative z-10">-->
        <!--            <div class="flex flex-col lg:flex-col items-start lg:items-start space-y-4 lg:space-y-0 lg:space-x-6">-->
                        <!-- Icon and Title -->
        <!--                <div class="flex items-start ">-->
                         
        <!--                    <div>-->
        <!--                        <h3 class="museo-rounded text-xl lg:text-2xl font-bold text-primary-blue">-->
        <!--                            Free Initial Screening for All Partner Schools-->
        <!--                        </h3>-->
        <!--                    </div>-->
        <!--                </div>-->
                        
                        <!-- Content -->
        <!--                <div class="flex-1 justify-between">-->
        <!--                    <p class="museo-sans text-base text-gray-700 my-4 leading-relaxed">-->
        <!--                        As part of our commitment to early identification and equitable care, all new school partners receive a <strong class="text-yellow-700">free screening program</strong> for eligible students. This helps:-->
        <!--                    </p>-->
                            
        <!--                    <div class="flex flex-col md:flex-row gap-4">-->
        <!--                        <div class="flex items-center bg-white rounded-lg  py-2 ">-->
        <!--                            <i class="fas fa-search text-yellow-600 mr-2"></i>-->
        <!--                            <span class="museo-sans text-sm font-medium text-gray-700">Catch issues early</span>-->
        <!--                        </div>-->
        <!--                        <div class="flex items-center bg-white rounded-lg  py-2 ">-->
        <!--                            <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>-->
        <!--                            <span class="museo-sans text-sm font-medium text-gray-700">Clarify concerns for teachers and parents</span>-->
        <!--                        </div>-->
        <!--                        <div class="flex items-center bg-white rounded-lg py-2 ">-->
        <!--                            <i class="fas fa-shield-alt text-yellow-600 mr-2"></i>-->
        <!--                            <span class="museo-sans text-sm font-medium text-gray-700">Act before challenges escalate</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>

  <!-- Free Screening Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
                           <div class="text-center mb-12 fade-in">
            <h2 class="font-bold text-4xl md:text-6xl text-[#4A4A4A] mb-4 museo-rounded">
               Developmental Screening Programs <span class="text-primary-blue">for Partner Schools</span>
            </h2>
            <!--<p class="text-lg text-[#4A4A4A] museo-sans">-->
            <!--    We provide specialized services for adult and geriatric populations, including:-->
            <!--</p>-->
        </div>
            <!-- Main Content Layout -->
<div class="flex flex-col lg:flex-row gap-12 items-stretch min-h-[28rem]">
    
    
    
    
    <!-- Image Side -->
          <div class="relative">
  <!-- Main Image Container -->
  <div class="relative z-10 rounded-2xl overflow-hidden max-w-xl mx-auto">
    <div class="aspect-[7/6] speech-bubble-shape">
      <img 
        src="assets/school/Flexible-Service-Models-for-Schools.webp" 
        alt="Speech therapy session"
        class="w-full h-full object-cover object-[80%_top] mix-blend-multiply"
      />
    </div>
  </div>
  <!-- Floating elements -->
</div>
    
    <!-- Content Side -->
    <div class="lg:w-1/2 h-full flex flex-col justify-between">
        <!-- Header -->
  


        <!-- Benefits -->
        <div class="mb-8">
            <h2 class="museo-sans-rounded text-2xl text-primary-blue font-semibold mb-6">
                This helps:
            </h2>

            <div class="space-y-4">
                <!-- Point 1 -->
                <div class="flex items-start gap-4">
                    <div class="bg-primary-blue1 text-white w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-search text-lg"></i>
                    </div>
                    <div>
                        <h3 class="museo-sans-rounded text-xl font-semibold text-[#4A4A4A] mb-2">
                            Catch Issues Early
                        </h3>
                        <p class="text-[#4A4A4A] leading-relaxed">
                            Identify communication and speech challenges before they impact academic performance and social development.
                        </p>
                    </div>
                </div>

                <!-- Point 2 -->
                <div class="flex items-start gap-4">
                    <div class="bg-primary-blue1 text-white w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-lightbulb text-lg"></i>
                    </div>
                    <div>
                        <h3 class="museo-sans-rounded text-xl font-semibold text-[#4A4A4A] mb-2">
                            Clarify Concerns for Teachers and Parents
                        </h3>
                        <p class="text-[#4A4A4A] leading-relaxed">
                            Provide professional insights that help educators and families understand a child's specific needs and strengths.
                        </p>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="flex items-start gap-4">
                    <div class="bg-primary-blue1 text-white w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-shield-alt text-lg"></i>
                    </div>
                    <div>
                        <h3 class="museo-sans-rounded text-xl font-semibold text-[#4A4A4A] mb-2">
                            Act Before Challenges Escalate
                        </h3>
                        <p class="text-[#4A4A4A] leading-relaxed">
                            Implement intervention strategies early when they are most effective and can prevent future difficulties.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="flex flex-col sm:flex-row gap-4 mt-auto">
            <a href="#form-direct" class="bg-primary-blue1 hover:bg-blue-700 text-white px-8 py-4 rounded-lg transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                <i class="fas fa-handshake"></i>
                Become a Partner School
            </a>
        </div>
    </div>


</div>


        </div>
    </section>


<section class="py-12 container px-4 bg-white">
    
              <div class="max-w-4xl mx-auto text-center mb-20">
            <h1 class="text-5xl md:text-7xl font-museo-rounded font-light text-[#4A4A4A]  tracking-tight">
                Why choose  <span class="font-bold text-primary-blue">Talking Tales</span>
            </h1>
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
                            <h3>Inclusive Culture, Not Just Academic Pressure</h3>
                            <p>We help schools create nurturing, understanding environments where development is supported early, not delayed.</p>
                        </div>
                    </div>
                    
                    <!-- Service 2 -->
                    <div class="service-item">
                        <div class="service-bullet green"></div>
                        <div class="service-content">
                            <h3>Curriculum-Aligned Inclusion Support</h3>
                            <p>We help IB, IGCSE, Cambridge, and CBSE-i schools deliver on inclusion mandates — without adding staff or logistical strain.</p>
                        </div>
                    </div>
                    
                    <!-- Service 3 -->
                    <div class="service-item">
                        <div class="service-bullet orange"></div>
                        <div class="service-content">
                            <h3>Stand Out as a Future-Ready Institution</h3>
                            <p>Inclusion is now a key differentiator. Parents notice when schools offer therapy and intervention proactively.</p>
                        </div>
                    </div>
                    
                    <!-- Service 4 -->
                    <div class="service-item">
                        <div class="service-bullet yellow"></div>
                        <div class="service-content">
                            <h3>Enhance Your School’s Reputation</h3>
                            <p>Be known as a school that acts early, cares deeply, and supports every learner’s journey.</p>
                        </div>
                    </div>

                </div>
                
                <a href="#form-direct" class="cta-button">
                    <i class="fas fa-calendar-check"></i>
                    Schedule Your Consultation
                </a>
            </div>
            
            <!-- Right: Single Image -->
            
<div class="relative slide-in-right">
  <div class="relative overflow-hidden max-w-lg mx-auto">
    <div class="aspect-[7/6] speech-bubble-shape">
      <img 
        src="assets/about/What-We-Do2.webp" 
        alt="Speech therapy session"
        class="w-full h-full object-cover mix-blend-multiply rounded-xl"
      />
    </div>
  </div>
</div>
        
            
    </div>
    
    </div>
    
</section>


<section class="container mx-auto mb-10 px-4">
  <div class="mt-10 bg-[#4A4A4A] text-white rounded-3xl p-6 sm:p-8 md:p-10 text-center mx-auto">
    
    <h3 class="text-xl sm:text-2xl font-museo-rounded font-bold mb-4">
      Ready to Partner?
    </h3>

    <p class="font-museo text-gray-300 mb-6 max-w-2xl mx-auto text-base sm:text-lg">
      Tell us about your school—your team, your curriculum, and your inclusion goals.
    </p>

    <!-- Steps Grid -->
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 mb-8 text-left text-sm max-w-5xl mx-auto">
      <!-- Step 1 -->
      <div class="bg-white/10 p-6 rounded-2xl hover:bg-white/20 transition-all duration-300">
        <div class="flex items-start space-x-4">
          <div class="text-accent-yellow text-xl mt-1">
            <i class="fas fa-file-signature"></i>
          </div>
          <div>
            <h4 class="font-bold text-white font-museo-rounded text-base mb-2">Get a Custom Proposal</h4>
            <p class="text-gray-50 font-museo">We’ll recommend a tailored service model that aligns with your school's unique needs.</p>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="bg-white/10 p-6 rounded-2xl hover:bg-white/20 transition-all duration-300">
        <div class="flex items-start space-x-4">
          <div class="text-accent-green text-xl mt-1">
            <i class="fas fa-user-check"></i>
          </div>
          <div>
            <h4 class="font-bold text-white font-museo-rounded text-base mb-2">Structured Screening Assessments</h4>
            <p class="text-gray-50 font-museo">Begin with clarity and confidence through our professional developmental screening.</p>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="bg-white/10 p-6 rounded-2xl hover:bg-white/20 transition-all duration-300">
        <div class="flex items-start space-x-4">
          <div class="text-primary-blue text-xl mt-1">
            <i class="fas fa-rocket"></i>
          </div>
          <div>
            <h4 class="font-bold text-white font-museo-rounded text-base mb-2">Launch Long-Term Support</h4>
            <p class="text-gray-50 font-museo">Therapy starts, progress is tracked, and your educators stay looped in throughout.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Button -->
    <div class="flex justify-center">
      <a href="#form-direct" class="bg-yellow-400 text-white font-museo font-semibold px-6 py-3 rounded-full hover:bg-yellow-500 transition-all duration-300 text-sm sm:text-base">
        Let's Collaborate
      </a>
    </div>
  </div>
</section>


<!--form-->

       <section id="form-direct" class="py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-blue-100 text-primary-blue px-4 py-2 rounded-full museo-sans text-sm font-semibold mb-6">
                    <i class="fas fa-handshake mr-2"></i>
                    Partnership Opportunities
                </div>
                <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-[#4A4A4A] mb-4">
                    Partner With Talking Tales
                </h2>
                <p class="museo-sans text-lg text-[#4A4A4A] max-w-3xl mx-auto leading-relaxed">
                    Join our network of healthcare and educational partners. Together, we can make quality speech therapy accessible to more people who need it.
                </p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
                
                <!-- Left Column - Information -->
                <div class="space-y-8">
                    
                    <!-- Partnership Types -->
                    <div class="stagger-item">
                        <h3 class="museo-rounded text-2xl font-bold text-[#4A4A4A] mb-6 flex items-center">
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
                                        <h4 class="museo-rounded text-lg font-bold text-[#4A4A4A]">Schools & Educational Institutions</h4>
                                        <p class="museo-sans text-sm text-[#4A4A4A]">IB, IGCSE, Cambridge, CBSE-i schools seeking inclusive support</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="partner-card bg-white rounded-2xl p-6 shadow-lg">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-hospital text-2xl text-green-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="museo-rounded text-lg font-bold text-[#4A4A4A]">Hospitals & Healthcare Centers</h4>
                                        <p class="museo-sans text-sm text-[#4A4A4A]">Medical facilities providing comprehensive patient care</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="partner-card bg-white rounded-2xl p-6 shadow-lg">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-heartbeat text-2xl text-orange-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="museo-rounded text-lg font-bold text-[#4A4A4A]">Rehabilitation Centers</h4>
                                        <p class="museo-sans text-sm text-[#4A4A4A]">Specialized centers for recovery and therapeutic services</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Partnership Benefits -->
                    <div class="stagger-item">
                        <h3 class="museo-rounded text-2xl font-bold text-[#4A4A4A] mb-6 flex items-center">
                            <i class="fas fa-star text-yellow-600 mr-3"></i>
                            Partnership Benefits
                        </h3>
                        <div class="space-y-4">
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-[#4A4A4A] mb-1">Expert Speech Therapy Services</h4>
                                        <p class="museo-sans text-sm text-[#4A4A4A]">Access to certified speech-language pathologists and specialized programs</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-[#4A4A4A] mb-1">Flexible Service Models</h4>
                                        <p class="museo-sans text-sm text-[#4A4A4A]">On-site visits, online sessions, or hybrid approaches based on your needs</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-[#4A4A4A] mb-1">Staff Training & Support</h4>
                                        <p class="museo-sans text-sm text-[#4A4A4A]">Professional development and training programs for your team</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-[#4A4A4A] mb-1">Institutional Screening Programs</h4>
                                        <p class="museo-sans text-sm text-[#4A4A4A]">Structured developmental screening services for partner institutions</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="benefit-item rounded-lg p-4 transition-all duration-300">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-check-circle text-green-600 mt-1"></i>
                                    <div>
                                        <h4 class="museo-rounded font-bold text-[#4A4A4A] mb-1">Regular Progress Reports</h4>
                                        <p class="museo-sans text-sm text-[#4A4A4A]">Detailed reporting and communication with your administration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="stagger-item">
                        <div class="bg-blue-50 rounded-2xl p-6">
                            <h3 class="museo-rounded text-lg font-bold text-[#4A4A4A] mb-4">
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
        <a href="mailto:info@talkingtales.com" class="museo-sans text-[#4A4A4A] hover:underline">info@talkingtales.com</a>
    </div>
    <div class="flex items-center space-x-3">
        <i class="fas fa-clock text-primary-blue"></i>
        <span class="museo-sans text-[#4A4A4A]">Response within 24 hours</span>
    </div>
</div>                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="stagger-item">
                    <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-10">
                        <div id="formContainer">
                            <div class="text-center mb-8">
                                <h3 class="museo-rounded text-2xl font-bold text-[#4A4A4A] mb-2">
                                    Let's Start a Partnership
                                </h3>
                                <p class="museo-sans text-[#4A4A4A]">
                                    Fill out the form below and we'll get back to you within 24 hours
                                </p>
                            </div>

<form accept-charset='UTF-8' action='https://app.formester.com/forms/aDer2rHHJ/submissions' method='POST'>
                                <div class="space-y-6">
                                    
                                    <!-- Institution Type -->
                                    <div>
                                        <label for="institutionType" class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Institution Type *
                                        </label>
                                        <select name="institutionType" id="institutionType" required class="form-input w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white">
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
                                        <label for="institutionName" class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Institution Name *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="institutionName" 
                                            name="institutionName" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white"
                                            placeholder="Enter institution name"
                                        >
                                    </div>

                                    <!-- Contact Person -->
                                    <div>
                                        <label for="contactPerson" class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Contact Person Name *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="contactPerson" 
                                            name="contactPerson" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white"
                                            placeholder="Enter your full name"
                                        >
                                    </div>

                                    <!-- Position/Title -->
                                    <div>
                                        <label for="position" class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Position/Title *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="position" 
                                            name="position" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white"
                                            placeholder="e.g., Principal, Medical Director, Administrator"
                                        >
                                    </div>

                                    <!-- Email -->
                                    <div>
                                        <label for="email" class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Official Email Address *
                                        </label>
                                        <input 
                                            type="email" 
                                            id="email" 
                                            name="email" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white"
                                            placeholder="official.email@institution.com"
                                        >
                                    </div>

                                    <!-- Phone Number -->
                                    <div>
                                        <label class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Phone Number *
                                        </label>
                                        <div class="flex flex-col sm:flex-row gap-2">
                                            <div class="country-dropdown w-full sm:w-auto">
                                                <select name="countryCode" required class="form-input w-full px-3 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white">
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
                                                class="form-input flex-1 w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white"
                                                placeholder="Enter phone number"
                                            >
                                        </div>
                                    </div>

                                    <!-- Location -->
                                    <div>
                                        <label for="location" class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Institution Location *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="location" 
                                            name="location" 
                                            required
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white"
                                            placeholder="City, State, Country"
                                        >
                                    </div>

                                    <!-- Services Interested -->
                                    <div>
                                        <label for="servicesInterested" class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Services You're Interested In *
                                        </label>
                                        <select name="servicesInterested" id="servicesInterested" required class="form-input w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white">
                                            <option value="">Select Services</option>
                                            <option value="Speech & Language Therapy">Speech & Language Therapy</option>
                                            <option value="Swallowing Therapy">Swallowing (Dysphagia) Management</option>
                                            <option value="Staff Training">Staff Training & Professional Development</option>
                                            <option value="Screening Programs">Institutional Screening Programs</option>
                                            <option value="Comprehensive Package">Comprehensive Speech Therapy Package</option>
                                            <option value="Consultation">Initial Consultation & Assessment</option>
                                        </select>
                                    </div>

                                    <!-- Number of Students/Patients -->
                                    <div>
                                        <label for="capacity" class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Approximate Number of Students/Patients
                                        </label>
                                        <select name="capacity" id="capacity" class="form-input w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white">
                                            <option value="">Select Range (Optional)</option>
                                            <option value="Under 100">1 - 10</option>
                                            <option value="100-300">10 - 50</option>
                                            <option value="300-500">50 - 100</option>
                                            <option value="500-1000">100 and above</option>
                                           
                                        </select>
                                    </div>

                                    <!-- Message -->
                                    <div>
                                        <label for="message" class="block museo-sans text-sm font-semibold text-[#4A4A4A] mb-2">
                                            Message *
                                        </label>
                                        <textarea 
                                            id="message" 
                                            name="message" 
                                            required
                                            rows="4"
                                            class="form-input w-full px-4 py-3 rounded-xl museo-sans text-[#4A4A4A] bg-gray-50 focus:bg-white resize-none"
                                            placeholder="Tell us about your institution's needs, goals, and how we can help you provide better speech therapy services..."
                                        ></textarea>
                                    </div>

                                    <!-- Preferred Contact Method -->

                                    <!-- Privacy Consent -->
                                    <div>
                                        <div class="flex items-start space-x-3">
                                            <input type="checkbox" id="consent" name="consent" required class="mt-1 flex-shrink-0 cursor-pointer">
                                            <label for="consent" class="museo-sans text-xs sm:text-sm text-[#4A4A4A] cursor-pointer leading-relaxed">
                                                I consent to The Talking Tales contacting our institution regarding educational partnership and screening opportunities. I confirm that our institution adheres to student data privacy norms and agrees to the <a href="legal,policies-and-T&C#privacy-policy" target="_blank" class="text-primary-blue underline">Privacy Policy</a> and <a href="legal,policies-and-T&C#school-partnerships" target="_blank" class="text-primary-blue underline">Institutional Terms</a>. *
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
                            <h3 class="museo-rounded text-2xl font-bold text-[#4A4A4A] mb-4">
                                Partnership Inquiry Submitted!
                            </h3>
                            <p class="museo-sans text-[#4A4A4A] mb-6">
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
            
            async function submitForm() {
                // Show loading state
                submitText.classList.add('hidden');
                loadingSpinner.classList.remove('hidden');
                submitBtn.disabled = true;
                
                try {
                    // TODO: Replace with your actual Formster endpoint
                    // const formData = new FormData(form);
                    // const response = await fetch('YOUR_FORMSTER_PARTNER_URL', {
                    //     method: 'POST',
                    //     body: formData
                    // });
                    
                    // Simulate API call for demo
                    await new Promise(resolve => setTimeout(resolve, 2000));
                    
                    // Show success state
                    showSuccess();
                    
                } catch (error) {
                    console.error('Error submitting form:', error);
                    // Reset button state
                    submitText.classList.remove('hidden');
                    loadingSpinner.classList.add('hidden');
                    submitBtn.disabled = false;
                    alert('An error occurred. Please try again.');
                }
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


<!--Flexible-->

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
        document.querySelectorAll('.stagger-animation').forEach(el => {
            observer.observe(el);
        });
        
        // Add click ripple effect to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.3);
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    pointer-events: none;
                `;
                
                this.appendChild(ripple);
                setTimeout(() => ripple.remove(), 600);
            });
        });
        
        // Hover effects for service cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-12px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    });
</script>

<style>
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
</style>
<!--why school need this-->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(element => {
            observer.observe(element);
        });

        // Solution item interactions
        document.querySelectorAll('.solution-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                const icon = this.querySelector('i');
                icon.style.transform = 'scale(1.1) rotate(5deg)';
            });
            
            item.addEventListener('mouseleave', function() {
                const icon = this.querySelector('i');
                icon.style.transform = 'scale(1) rotate(0deg)';
            });
        });

        // Challenge card interactions
        document.querySelectorAll('.challenge-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.borderLeftWidth = '6px';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.borderLeftWidth = '4px';
            });
        });

        // Button interactions
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
            
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'translateY(0)';
                }, 150);
            });
        });
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

        // Goal item interactions
        document.querySelectorAll('.goal-item').forEach((item, index) => {
            item.addEventListener('click', function() {
                // Add click animation
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
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

<!--Why choose tLKING TALES-->

        <script>
        // Intersection Observer for animations
        const observerOptionsw = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observerw = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 100);
                }
            });
        }, observerOptionsw);

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            animateElements.forEach(el => observerw.observe(el));
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