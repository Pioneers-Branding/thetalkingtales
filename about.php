<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Talking Tales Speech Therapy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans+Rounded:wght@300;400;500;700&family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <?php include('header-links.php');?>
    
    
     <script>
    //     tailwind.config = {
    //         theme: {
    //             extend: {
    //                 colors: {
    //                     'primary-blue': '#0B87C5',
    //                     'accent-yellow': '#FFC73C',
    //                     'accent-orange': '#F36E3B',
    //                     'accent-green': '#3DD288',
    //                     'text-gray': '#4A4A4A',
    //                     'cream': '#F9F0E5'
    //                 },
    //                 fontFamily: {
    //                     'museo-rounded': ['Museo Sans Rounded', 'sans-serif'],
    //                     'museo': ['Museo Sans', 'sans-serif']
    //                 }
    //             }
    //         }
    //     }
     </script>
    
    <!--WHO WE ARE-->
    
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
    
    p {
  font-family: 'Museo Sans', sans-serif;
  font-weight: 500;
  line-height: 1.6; /* Adjust based on your design */
}

    
    
        :root {
            --primary-blue: #3B82F6;
            --accent-yellow: #FFC73C;
            --accent-orange: #F36E3B;
            --accent-green: #3DD288;
            --text-gray: #4A4A4A;
            --background-cream: #F9F0E5;
             --primary-gray: #374151;

        }
        
        .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', sans-serif; }
        
        .text-primary { color: var(--primary-blue); }
        .text-orange { color: var(--accent-orange); }
        .text-green { color: var(--accent-green); }
        .text-gray-custom { color: var(--text-gray); }
        .bg-cream { background-color: var(--background-cream); }
        .bg-yellow { background-color: var(--accent-yellow); }
        .bg-primary { background-color: var(--primary-blue); }
        .bg-green { background-color: var(--accent-green); }
        .bg-orange { background-color: var(--accent-orange); }
        .border-primary { border-color: var(--primary-blue); }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
        }
        
        .story-card {
            transition: all 0.3s ease;
        }
        
        .story-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(11, 135, 197, 0.15);
        }
        
        @media (max-width: 768px) {
            .story-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
    
        <!-- WHY CHOOSE US -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-8px) rotate(1deg); }
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes blink {
            0%, 90%, 100% { transform: scaleY(1); }
            95% { transform: scaleY(0.1); }
        }
        
        .animate-blink {
            animation: blink 4s infinite;
        }
    </style>
    <!--hero section-->
      <style>
        :root {
            --primary-blue: #0B87C5;
            --accent-yellow: #FFC73C;
            --accent-orange: #F36E3B;
            --accent-green: #3DD288;
            --text-gray: #4A4A4A;
            --background-cream: #F9F0E5;
        }
        
        .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', sans-serif; }
        
        .text-primary { color: var(--primary-blue); }
        .text-orange { color: var(--accent-orange); }
        .text-green { color: var(--accent-green); }
        .text-yellow { color: #B8860B; }
        .text-gray-custom { color: var(--text-gray); }
        .bg-cream { background-color: var(--background-cream); }
        .bg-yellow { background-color: var(--accent-yellow); }
        .bg-primary { background-color: var(--primary-blue); }
        .bg-green { background-color: var(--accent-green); }
        .bg-orange { background-color: var(--accent-orange); }
        
        .hero-gradient {
            background: linear-gradient(135deg, var(--background-cream) 0%, #ffffff 50%, var(--background-cream) 100%);
        }
        
        .floating-icon {
            position: absolute;
            animation: float 6s ease-in-out infinite;
            opacity: 0.1;
        }
        
        .floating-icon:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
        .floating-icon:nth-child(2) { top: 20%; right: 15%; animation-delay: 2s; }
        .floating-icon:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 4s; }
        .floating-icon:nth-child(4) { bottom: 15%; right: 10%; animation-delay: 1s; }
        .floating-icon:nth-child(5) { top: 60%; left: 5%; animation-delay: 3s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards;
        }
        
        .fade-in-up.delay-1 { animation-delay: 0.2s; }
        .fade-in-up.delay-2 { animation-delay: 0.4s; }
        .fade-in-up.delay-3 { animation-delay: 0.6s; }
        .fade-in-up.delay-4 { animation-delay: 0.8s; }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .btn-primary {
            background: var(--primary-blue);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary:hover {
            background: #096ba3;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(11, 135, 197, 0.3);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--primary-blue);
            padding: 1rem 2rem;
            border: 2px solid var(--primary-blue);
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-secondary:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }
        
        .hero-image {
            /*width: 100%;*/
            /*height: 500px;*/
            object-fit: cover;
            /*border-radius: 20px;*/
            /*box-shadow: 0 20px 40px rgba(0,0,0,0.1);*/
        }
        
        .stats-card {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
        }
        
        .highlight-text {
            position: relative;
            z-index: 1;
        }
        
        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: var(--accent-yellow);
            opacity: 0.3;
            z-index: -1;
        }
        
        @media (max-width: 768px) {
            .hero-title { font-size: 2.5rem !important; }
            .hero-subtitle { font-size: 1.1rem !important; }
            .btn-group { flex-direction: column; gap: 1rem; }
            .stats-grid { grid-template-columns: 1fr 1fr; gap: 1rem; }
        }
        
        @media (max-width: 480px) {
            .hero-title { font-size: 2rem !important; }
            .stats-grid { grid-template-columns: 1fr; }
        }
    </style>
    
    <!--our mission and vision-->

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
    
    <!--OUR TEAM-->
        <style>
        :root {
            --primary-blue: #0B87C5;
            --accent-yellow: #FFC73C;
            --accent-orange: #F36E3B;
            --accent-green: #3DD288;
            --text-gray: #4A4A4A;
            --background-cream: #F9F0E5;
        }
        
        .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', sans-serif; }
        
        .text-primary { color: var(--primary-blue); }
        .text-orange { color: var(--accent-orange); }
        .text-green { color: var(--accent-green); }
        .text-yellow { color: #B8860B; }
        .text-gray-custom { color: var(--text-gray); }
        .bg-cream { background-color: var(--background-cream); }
        .bg-yellow { background-color: var(--accent-yellow); }
        .bg-primary { background-color: var(--primary-blue); }
        .bg-green { background-color: var(--accent-green); }
        .bg-orange { background-color: var(--accent-orange); }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Header Section */
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .section-badge {
            display: inline-flex;
            align-items: center;
            background: var(--background-cream);
            color: var(--primary-blue);
            padding: 0.75rem 1.5rem;
            border-radius: 30px;
            font-weight: 600;
            margin-bottom: 1.5rem;
            border: 2px solid var(--primary-blue);
        }
        
        .section-title {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-gray);
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .section-description {
            font-size: 1.125rem;
            color: var(--text-gray);
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .highlight-text {
            background: var(--accent-yellow);
            padding: 0.2rem 0.4rem;
            border-radius: 4px;
            font-weight: 700;
        }
        
        /* Team Grid */
  .team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    justify-content: center; /* Ensure items align centrally when row isn't full */
    margin-bottom: 4rem;
}
        
        .team-member {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            /*text-align: center;*/
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }
        
        .team-member::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-blue);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .team-member:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(11, 135, 197, 0.15);
            border-color: var(--primary-blue);
        }
        
        .team-member:hover::before {
            transform: scaleX(1);
        }
        
        .team-member:nth-child(2)::before { background: var(--accent-green); }
        .team-member:nth-child(2):hover { border-color: var(--accent-green); }
        
        .team-member:nth-child(3)::before { background: var(--accent-orange); }
        .team-member:nth-child(3):hover { border-color: var(--accent-orange); }
        
        .team-member:nth-child(4)::before { background: var(--accent-yellow); }
        .team-member:nth-child(4):hover { border-color: var(--accent-yellow); }
        
 .member-photo {
    width: 120px;
    aspect-ratio: 1 / 1;
    border-radius: 50%;
    margin: 0 auto 1.5rem;
    object-fit: cover;
    object-position: top center;
    border: 4px solid var(--background-cream);
    transition: all 0.3s ease;
}

       .member-photo1 {
             width: 120px;
    height: 120px;
    border-radius: 50%;
    margin: 0 auto 1.5rem;
    object-fit: cover;
    object-position: 50% 20%; /* 50% horizontal, 20% vertical */
    border: 4px solid var(--background-cream);
    transition: all 0.3s ease;
        }
        
        .team-member:hover .member-photo {
            transform: scale(1.05);
            border-color: var(--primary-blue);
        }
        
        .team-member:nth-child(2):hover .member-photo {
            border-color: var(--accent-green);
        }
        
        .team-member:nth-child(3):hover .member-photo {
            border-color: var(--accent-orange);
        }
        
        .team-member:nth-child(4):hover .member-photo {
            border-color: var(--accent-yellow);
        }
        
        .member-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-gray);
            margin-bottom: 0.5rem;
        }
        
        .member-title {
            font-size: 1rem;
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .member-bio {
            font-size: 0.875rem;
            color: var(--text-gray);
            line-height: 1.5;
            margin-bottom: 1.5rem;
            opacity: 0.8;
        }
        
        .member-credentials {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .credential {
            background: var(--background-cream);
            color: var(--text-gray);
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .member-contact {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        
        .contact-link {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--background-cream);
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .contact-link:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Join Team CTA */
        .join-team-cta {
            background: var(--background-cream);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            position: relative;
        }
        
        .cta-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-gray);
            margin-bottom: 1rem;
        }
        
        .cta-text {
            font-size: 1.125rem;
            color: var(--text-gray);
            margin-bottom: 2rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: var(--primary-blue);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            background: #096ba3;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(11, 135, 197, 0.3);
        }
        
        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
.team-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 equal columns */
    gap: 2rem;
    max-width: 100%;
}

/* Team cards */
.team-member {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    /*text-align: center;*/
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

/* Bottom cards: position them in column 1 and 3 */
.team-member.bottom-card:nth-child(4) {
    grid-column: 1;
}
.team-member.bottom-card:nth-child(5) {
    grid-column: 3;
}  
        
        
        
        
        
        
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2.5rem;
            }
            
            .team-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .team-member {
                padding: 1.5rem;
            }
            
            .join-team-cta {
                padding: 2rem;
            }
            
            .cta-title {
                font-size: 1.75rem;
            }
        }
        
        @media (max-width: 480px) {
            .section-title {
                font-size: 2rem;
            }
            
            .member-photo {
                width: 100px;
                height: 100px;
            }
            
            .member-credentials {
                justify-content: center;
            }
        }
    </style>





</head>
<body class="museo-sans text-gray-custom">
    <!-- Navigation -->
    <?php include('header.php');?>

    <!-- Hero Section -->
<!-- Hero Section -->
<!--<section class="relative min-h-[70vh] flex items-center mt-10 justify-center overflow-hidden">-->

    <!-- Background Pattern -->
<!--    <div class="absolute inset-0 hero-gradient">-->
        <!-- Floating Icons -->
     
<!--    </div>-->
    
<!--    <div class="relative z-10 container mx-auto px-4 py-10">-->
<!--        <div class="grid lg:grid-cols-2 gap-12 items-center">-->
            <!-- Content Column -->
<!--            <div class="text-center lg:text-left">-->
                <!-- Main Headline -->
<!--                <h1 class="hero-title museo-rounded text-4xl md:text-5xl lg:text-6xl font-bold text-gray-custom mb-6 fade-in-up">-->
<!--                    Find Your Voice,<br>-->
<!--                    <span class="text-primary ">Tell Your Story</span>-->
<!--                </h1>-->
                
                <!-- Subtitle -->
<!--                <p class="hero-subtitle text-xl md:text-xl text-gray-custom mb-8 fade-in-up delay-1">-->
<!--                    Professional speech therapy that meets you where you are. -->
<!--                    <span class="text-orange font-semibold">Every voice matters</span>, -->
<!--                    and <span class="text-green font-semibold">every tale is worth telling</span>.-->
<!--                </p>-->
                
                <!-- Key Features -->
<!--                <div class="flex flex-wrap justify-center lg:justify-start gap-6 mb-8 fade-in-up delay-2">-->
<!--                    <div class="flex items-center">-->
<!--                        <i class="fas fa-user-md text-primary text-xl mr-3"></i>-->
<!--                        <span class="museo-sans text-gray-custom">Expert Therapists</span>-->
<!--                    </div>-->
<!--                    <div class="flex items-center">-->
<!--                        <i class="fas fa-users text-green text-xl mr-3"></i>-->
<!--                        <span class="museo-sans text-gray-custom">All Ages</span>-->
<!--                    </div>-->
<!--                    <div class="flex items-center">-->
<!--                        <i class="fas fa-home text-orange text-xl mr-3"></i>-->
<!--                        <span class="museo-sans text-gray-custom">Comfortable Setting</span>-->
<!--                    </div>-->
<!--                </div>-->
                
                <!-- Call to Action Buttons -->
<!--                <div class="btn-group flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8 fade-in-up delay-3">-->
<!--                    <a href="contact-us" class="btn-primary museo-sans">-->
<!--                        <i class="fas fa-calendar-plus"></i>-->
<!--                        Book Consultation-->
<!--                    </a>-->
                    <!--<a href="#" class="btn-secondary museo-sans">-->
                    <!--    <i class="fas fa-play-circle"></i>-->
                    <!--    Learn More-->
                    <!--</a>-->
<!--                </div>-->
                
               
<!--            </div>-->
            
            <!-- Visual Column -->
<!--<div class="w-full max-w-[700px] mx-auto relative">-->
<!--  <svg viewBox="0 0 512 512" class="w-full h-auto">-->
<!--    <defs>-->
<!--      <clipPath id="speechBubbleClip" clipPathUnits="objectBoundingBox">-->
        <!-- Scaled-down version of the speech bubble path -->
<!--        <path d="M0.01,0.6 C0.01,0.12 0.35,0.01 0.68,0.01 C0.99,0.01 1,0.12 1,0.6 C1,1.05 0.68,1 0.45,0.96 C0.38,1.08 0.01,1.12 0.01,0.96 Z" />-->
<!--      </clipPath>-->
<!--    </defs>-->
<!--    <image-->
<!--      href="assets/about/Find-Your-Voice,2.webp"-->
<!--      width="512"-->
<!--      height="512"-->
<!--      preserveAspectRatio="xMidYMid slice"-->
<!--      clip-path="url(#speechBubbleClip)"-->
<!--    />-->
<!--  </svg>-->
<!--</div>-->
<!--<div class="relative slide-in-right">-->
<!--  <div class="relative overflow-hidden">-->
<!--    <div class="w-full aspect-[7/6] speech-bubble-shape">-->
<!--      <img -->
<!--        src="assets/about/Find-Your-Voice,2.webp" -->
<!--        alt="Speech therapy session"-->
<!--        class="w-full h-full object-cover mix-blend-multiply"-->
<!--      />-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<!--</div>-->
        
        <!-- Bottom Stats Section -->
<!--    </div>-->
    
    <!-- Scroll Indicator -->
<!--</section>    -->
    <!--who we are-->
    <section class="py-20 mt-10 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
        <!-- Section Header -->
        <div class="max-w-4xl mx-auto text-center mb-17">
            <h1 class="text-5xl md:text-7xl font-museo-rounded font-light text-text-gray mb-6 tracking-tight">
                Who <span class="font-bold text-primary-blue">We Are</span>
            </h1>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
            <!-- Content Column -->
            <div class="fade-in">
                <div class="space-y-6">
                    <p class="text-lg leading-relaxed museo-sans text-gray-custom">
                        Talking Tales is a therapist-led organization with a team of speech therapists, language specialists, and care professionals who are passionate about helping you find your voice.
                    </p>
                    
                    <p class="text-lg leading-relaxed museo-sans text-gray-custom">
                        Whether your child learning to speak, a teen navigating life's changes, or an adult recovering from a stroke or surgery, we're here to help you tell your story with confidence.
                    </p>
                    
                
                        <p class="text-lg leading-relaxed museo-sans text-gray-custom">
                            We believe that therapy should feel safe, supportive, and easy to understand, not overwhelming. Our approach is simple: we meet you where you are and guide you step-by-step.
                        </p>
                
                    <p class="text-lg leading-relaxed museo-sans text-gray-custom">
                        Every voice matters, and every tale is worth telling  let's make yours a story of growth, confidence, and connection.
                    </p>
                </div>
            </div>
            
            <!-- Image Column -->
            <div class="fade-in">
                <div class="space-y-6">
                    <div class="image-container">
                        <img src="assets/about/Who-We-Are2.webp" 
                             alt="Speech therapist working with a child" 
                             class="w-full h-50 object-cover rounded-lg shadow-lg">
                    </div>
                    
                    <div class="bg-primary rounded-xl p-6 text-white">
                        <!--<div class="flex items-center mb-4">-->
                        <!--    <div class="w-12 h-12 bg-yellow rounded-full flex items-center justify-center mr-4">-->
                        <!--        <span class="text-2xl">💬</span>-->
                        <!--    </div>-->
                        <!--    <h3 class="museo-rounded text-xl font-bold">Our Story</h3>-->
                        <!--</div>-->
                        <p class="museo-sans">
                            Our name reflects the everyday stories that unfold through communication the small wins, the breakthroughs, the confidence rebuilt one word at a time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
                                   <div class="btn-group flex flex-col sm:flex-row gap-4 justify-center lg:justify-center fade-in-up delay-3">
                    <!--<a href="#" class="btn-primary museo-sans">-->
                    <!--    <i class="fas fa-calendar-plus"></i>-->
                    <!--    Book Consultation-->
                    <!--</a>-->
                    <a href="contact-us" class="btn-secondary museo-sans">
                        <i class="fas fa-play-circle"></i>
                         Book Consultation
                    </a>
                </div>

    </div>
    </section>
    

    <!-- Mission Section -->
<section class="py-10 px-4 bg-white relative overflow-hidden hero-gradient">
    <!-- Minimal geometric elements -->
    <div class="absolute top-0 right-0 w-96 h-96 border border-gray-100 rounded-full transform translate-x-48 -translate-y-48"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-cream transform -translate-x-32 translate-y-32 rotate-45"></div>
    
    <div class="container mx-auto relative z-10">
        
        <!-- Minimalist Header -->
        <div class="max-w-4xl mx-auto text-center mb-20">
            <h1 class="text-5xl md:text-7xl font-museo-rounded font-light text-text-gray mb-6 tracking-tight">
                Our <span class="font-bold text-primary-blue">Purpose</span>
            </h1>
            <p class="text-xl md:text-2xl font-museo font-light text-gray-500 leading-relaxed max-w-3xl mx-auto">
                Where stories unfold, voices emerge, and lives transform
            </p>
        </div>

        <!-- Creative Layout -->
        <div class="grid lg:grid-cols-12 gap-16 items-start">
            
            <!-- Vision - Left Side with Creative Offset -->
            <div class="lg:col-span-7 ">
                <div class="relative">
                    <!-- Number -->
                    <!--<div class="absolute -left-4 -top-8 text-8xl font-museo-rounded font-bold text-gray-100 select-none">01</div>-->
                    
                    <div class="bg-white border border-gray-100 rounded-3xl p-10 md:p-12 shadow-sm hover:shadow-lg transition-all duration-500">
                        <div class="flex items-start mb-8">
                            <!--<div class="w-1 h-12 bg-primary-blue mr-6 mt-2"></div>-->
                            <div>
                                <!--<p class="text-sm font-museo uppercase tracking-widest text-gray-400 mb-2">Vision</p>-->
                                <h2 class="text-3xl md:text-4xl font-museo-rounded font-bold text-text-gray">Our Vision</h2>
                            </div>
                        </div>
                        
                         <!--Creative Image Placeholder -->
                        <div class="relative mb-8 group">
<!--<div class="w-full h-64 bg-gray-50 rounded-2xl overflow-hidden">-->
<!--    <div class="w-full h-full flex items-center justify-center bg-gray-50 rounded-2xl group-hover:bg-gray-100 transition-colors duration-300">-->
<!--<img -->
<!--    src="assets/about/TT-my-vision.webp" -->
<!--    alt="Community & Accessibility" -->
<!--    class="w-full h-full object-cover object-top rounded-2xl"-->
<!--/>-->
<!--    </div>-->
<!--</div>                           -->
                        </div>
                        
                        <div class="space-y-6 font-museo text-text-gray leading-relaxed">
                            <p class="text-lg font-light">
                                Our goal is simple: to create <strong class="font-medium">accessible</strong>, <strong class="font-medium">inclusive</strong>, and <strong class="font-medium">high-quality therapy environments</strong> that support <strong class="font-medium">communication</strong> and <strong class="font-medium">independence</strong> - whether at <strong class="font-medium">home</strong>, <strong class="font-medium">school</strong> or in <strong class="font-medium">hospitals</strong>.
                            </p>
                            
                            <p class="text-lg font-light">
                                We're on a mission to <strong class="font-medium">transform how people view rehabilitation</strong>. It's not just about recovery - it's about <strong class="font-medium">well-being</strong>, <strong class="font-medium">confidence</strong>, and <strong class="font-medium">a life well-lived</strong>.
                            </p>
                            
                            <div class="pt-6 border-t border-gray-100">
                                <blockquote class="text-xl font-museo-rounded font-medium text-primary-blue italic">
                                    "Let's rewrite the story together."
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission - Right Side -->
            <div class="lg:col-span-5">
                <div class="relative">
                    <!-- Number -->
                    <!--<div class="absolute -right-4 -top-8 text-8xl font-museo-rounded font-bold text-gray-100 select-none">02</div>-->
                    
                    <div class="bg-primary-blue text-white rounded-3xl p-10 md:p-12 shadow-lg hover:shadow-xl transition-all duration-500">
                        <div class="flex items-start mb-8">
                            <div class="w-1 h-12 bg-white mr-6 mt-2"></div>
                            <div>
                                <!--<p class="text-sm font-museo uppercase tracking-widest text-gray-300 mb-2">Mission</p>-->
                                <h2 class="text-3xl md:text-4xl font-museo-rounded font-bold text-white">Our Mission</h2>
                            </div>
                        </div>
                        
                        <!-- Mission Image -->
<!--<div class="relative mb-10 group">-->
<!--    <div class="w-full h-48 bg-white rounded-2xl overflow-hidden">-->
<!--<img -->
<!--    src="assets/about/my-mission_TT-big.webp" -->
<!--    alt="Community & Accessibility" -->
<!--    class="w-full h-full object-cover object-top"-->
<!--/>    </div>-->
<!--</div>                        -->
<!--                        <div class="space-y-8">-->
                            <!-- Mission Items with minimal design -->
                            <div class="border-l-2 border-gray-100 pl-6">
                                <h4 class="text-lg font-museo-rounded font-bold text-white mb-2">
                                    Promote Rehabilitation as Essential
                                </h4>
                                <p class="font-museo font-light text-gray-300 text-sm leading-relaxed">
                                    Advocate for rehabilitation as a crucial part of recovery for individuals of all ages.
                                </p>
                            </div>
                            
                            <div class="border-l-2 border-gray-100 pl-6">
                                <h4 class="text-lg font-museo-rounded font-bold text-white mb-2">
                                    Collaborate for Holistic Care
                                </h4>
                                <p class="font-museo font-light text-gray-300 text-sm leading-relaxed">
                                   Partner with healthcare professionals, families, educational institutes, and communities to provide compassionate, result-driven therapy.
                                </p>
                            </div>
                            
                            <div class="border-l-2 border-white pl-6">
                                <h4 class="text-lg font-museo-rounded font-bold text-white mb-2">
                                    Ensure Accessibility
                                </h4>
                                <p class="font-museo font-light text-gray-300 text-sm leading-relaxed">
                                    Bridge the gap in therapy services through in-person care and an online platform, reaching individuals in remote areas with limited or no access to rehabilitation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    
    
                                       <div class="btn-group flex flex-col sm:flex-row gap-4 justify-center lg:justify-center mb-8 mt-5 fade-in-up delay-3">
                    <!--<a href="#" class="btn-primary museo-sans">-->
                    <!--    <i class="fas fa-calendar-plus"></i>-->
                    <!--    Book Consultation-->
                    <!--</a>-->
                    <a href="contact-us" class="btn-secondary museo-sans">
                        <i class="fas fa-play-circle"></i>
                         Book Consultation
                    </a>
                </div>

</section>



<!--What We Do Section-->

<section class="py-12 container px-4 bg-white">
    
              <div class="max-w-4xl mx-auto text-center mb-20">
            <h1 class="text-5xl md:text-7xl font-museo-rounded font-light text-text-gray mb-6 tracking-tight">
                What  <span class="font-bold text-primary-blue">We Do</span>
            </h1>
            <p class="text-xl md:text-2xl font-museo font-light text-gray-500 leading-relaxed max-w-3xl mx-auto">
We offer a range of services designed to help you on your communication journey. 
                              </p>
        </div>


    
    <div class="container">
        
          <!--<h2 class="section-title">-->
          <!--          Comprehensive Communication -->
          <!--          <span style="color: var(--primary-blue);">Solutions</span>-->
          <!--      </h2>-->
                
          <!--      <p class="section-description">-->
          <!--          We offer a range of services designed to help you on your communication journey. -->
          <!--          Each session is <span class="highlight-text">tailored</span> to your needs, making therapy -->
          <!--          <span class="highlight-text">personalized</span>, <span class="highlight-text">engaging</span>, -->
          <!--          and impactful:-->
          <!--      </p>-->
        <div class="content-grid">
            
          
            <!-- Left: All Content -->
            <div class="content-left slide-in-left">
                <!--<div class="section-badge">-->
                <!--    <i class="fas fa-stethoscope" style="margin-right: 0.5rem;"></i>-->
                <!--    What We Do-->
                <!--</div>-->
                
                
                
                <div class="services-list">
                    <!-- Service 1 -->
                    <div class="service-item">
                        <div class="service-bullet blue"></div>
                        <div class="service-content">
                            <h3>Speech & Language Therapy</h3>
                            <p>for both children and adults</p>
                        </div>
                    </div>
                    
                    <!-- Service 2 -->
                    <div class="service-item">
                        <div class="service-bullet green"></div>
                        <div class="service-content">
                            <h3>Swallowing (Dysphagia) Management</h3>
                            <p>for various medical conditions</p>
                        </div>
                    </div>
                    
                    <!-- Service 3 -->
                    <div class="service-item">
                        <div class="service-bullet orange"></div>
                        <div class="service-content">
                            <h3>Parent and Family Guidance</h3>
                            <p>to support you throughout the process</p>
                        </div>
                    </div>
                    
                    <!-- Service 4 -->
                    <div class="service-item">
                        <div class="service-bullet yellow"></div>
                        <div class="service-content">
                            <h3>Therapy & Clinical Support</h3>
                            <p>for hospitals, rehab centers, and schools</p>
                        </div>
                    </div>
                    
                    <!-- Service 5 -->
                    <div class="service-item">
                        <div class="service-bullet gray"></div>
                        <div class="service-content">
                            <h3>Training for Aspiring Speech-Language Professionals</h3>
                            <p>comprehensive education and mentorship programs</p>
                        </div>
                    </div>
                </div>
                
                <a href="contact-us" class="cta-button">
                    <i class="fas fa-calendar-check"></i>
                    Schedule Your Consultation
                </a>
            </div>
            
            <!-- Right: Single Image -->
            
    <div class="relative slide-in-right">
  <div class="relative overflow-hidden">
    <div class="w-full aspect-[7/6] speech-bubble-shape">
      <img 
    src="assets/about/What-We-Do2.webp" 
        alt="Speech therapy session"
        class="w-full h-full object-cover mix-blend-multiply"
      />
    </div>
  </div>
</div>
        
            
    </div>
    
    </div>
    
</section>


    
    
     <!-- WHY CHOOSE US -->
    <section class="bg-white py-12 md:py-15 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
         <!--Subtle Background Elements -->
        <!--<div class="absolute top-8 right-8 w-16 h-16 bg-primary-cream rounded-full opacity-60"></div>-->
        <!--<div class="absolute bottom-12 left-8 w-12 h-12 bg-primary-blue/5 rounded-full"></div>-->
    
<div class="container mx-auto px-4">
  <!-- Header -->
  <div class="max-w-4xl mx-auto text-center mb-20">
    <h1 class="text-4xl sm:text-5xl md:text-7xl font-museo-rounded font-light text-text-gray mb-6 tracking-tight">
      Why Choose <span class="font-bold text-primary-blue"> Talking Tales</span>
      <!--<span class="font-bold text-primary-orange"> Difference</span>-->
    </h1>
    <p class="text-lg sm:text-xl md:text-2xl font-museo font-light text-gray-500 leading-relaxed max-w-3xl mx-auto">
      Where stories unfold, voices emerge, and lives transform
    </p>
  </div>

  <!-- Grid Content -->
  <div class="grid lg:grid-cols-2 gap-16 items-center">
    <!-- Left - Image -->
    <div class="relative">
      <div class="w-full h-64 sm:h-80 md:h-[500px] lg:h-[600px] xl:h-[700px] flex items-center justify-center relative overflow-hidden shadow-xl rounded-2xl">
        <img 
          src="assets/about/The-Talking-Tales-Differencex.webp" 
          alt="Hero Image" 
          class="absolute w-full h-full object-cover z-0 rounded-2xl"
        />
      </div>
    </div>

    <!-- Right - Benefits -->
    <div class="space-y-8">
      <!-- Benefit Cards -->
      <div class="group flex items-start gap-4 p-6 bg-primary-cream/30 rounded-3xl hover:bg-primary-cream/50 transition-all duration-300 hover:scale-105">
        <!--<div class="flex-shrink-0">-->
        <!--  <div class="w-16 h-16 bg-primary-blue rounded-full flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">-->
        <!--    <div class="flex space-x-2 mb-1">-->
        <!--      <div class="w-2 h-2 bg-white rounded-full animate-blink"></div>-->
        <!--      <div class="w-2 h-2 bg-white rounded-full animate-blink"></div>-->
        <!--    </div>-->
        <!--    <div class="absolute w-6 h-3 border-b-2 border-white rounded-full"></div>-->
        <!--  </div>-->
        <!--</div>-->
           <div class="flex-shrink-0 w-16 h-18">
          <img src="assets/logo/tt-smile.png" alt="Icon" class="w-full h-full object-contain" />
        </div>
        <div>
          <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-2 group-hover:text-primary-blue transition-colors duration-300">
           Experienced Professionals
          </h3>
          <p class="font-museo text-primary-gray/70 text-sm leading-relaxed">
           Our team brings expertise, care, and a personal touch.
          </p>
        </div>
      </div>

      <!-- Benefit 2 -->
      <div class="group flex items-start gap-4 p-6 bg-primary-cream/30 rounded-3xl hover:bg-primary-cream/50 transition-all duration-300 hover:scale-105">
       <div class="flex-shrink-0 w-16 h-18">
          <img src="assets/logo/tt-yellow.png" alt="Icon" class="w-full h-full object-contain" />
        </div>
        <div>
          <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-2 group-hover:text-primary-yellow transition-colors duration-300">
           Flexible Options
          </h3>
          <p class="font-museo text-primary-gray/70 text-sm leading-relaxed">
           Our team brings expertise, care, and a personal touch.

          </p>
        </div>
      </div>

      <!-- Benefit 3 -->
      <div class="group flex items-start gap-4 p-6 bg-primary-cream/30 rounded-3xl hover:bg-primary-cream/50 transition-all duration-300 hover:scale-105">
        <div class="flex-shrink-0 w-16 h-18">
          <img src="assets/logo/tt-tulip.png" alt="Icon" class="w-full h-full object-contain" />
        </div>
        <div>
          <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-2 group-hover:text-primary-orange transition-colors duration-300">
           Personalized Plans
          </h3>
          <p class="font-museo text-primary-gray/70 text-sm leading-relaxed">
            Your journey is unique, so we create a custom plan that works for you.
          </p>
        </div>
      </div>

      <!-- Benefit 4 -->
      <div class="group flex items-start gap-4 p-6 bg-primary-cream/30 rounded-3xl hover:bg-primary-cream/50 transition-all duration-300 hover:scale-105">
        <div class="flex-shrink-0 w-16 h-18">
          <img src="assets/logo/tt-green.png" alt="Icon" class="w-full h-full object-contain" />
        </div>
        <div>
          <h3 class="font-museo-rounded text-xl font-bold text-primary-gray mb-2 group-hover:text-primary-green transition-colors duration-300">
            Compassionate Support
          </h3>
          <p class="font-museo text-primary-gray/70 text-sm leading-relaxed">
           We're here to make sure you feel heard, understood, and cared for
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div class="text-center mt-16">
<a href="contact-us" class="bg-primary-blue hover:bg-primary-blue/90 text-white font-museo-rounded font-bold px-10 py-4 rounded-3xl text-lg transition-all duration-300 hover:scale-105 hover:shadow-xl flex items-center space-x-3 mx-auto w-max">
  <span>Start Your Journey Today</span>
  <!--<div class="relative">-->
    <!-- Outer box -->
  <!--  <div class="w-6 h-4 bg-white rounded-xl rounded-br-sm flex items-center justify-center">-->
  <!--    <div class="w-1 h-1 bg-primary-blue rounded-full"></div>-->
  <!--  </div>-->
    <!-- Arrow triangle -->
  <!--  <div class="absolute -bottom-0.5 right-1 w-2 h-2 bg-white rotate-45"></div>-->
  <!--</div>-->
</a>  </div>
</div>
    </section> 
    
    
    <!--OUR TEAM-->
    <section id="teams" class="  py-20 px-4 hero-gradient relative overflow-hidden">
    
    <!-- Font Awesome -->

    <div class="container">
        <!-- Section Header -->
        <!--<div class="section-header fade-in">-->
        <!--    <div class="section-badge museo-sans">-->
        <!--        <i class="fas fa-users mr-2"></i>-->
        <!--        Our Team-->
        <!--    </div>-->
        <!--    <h2 class="section-title museo-rounded">-->
        <!--        Meet Our <span class="text-primary">Expert</span> Team-->
        <!--    </h2>-->
        <!--    <p class="section-description museo-sans">-->
        <!--        Our dedicated team of <span class="">certified professionals</span> brings years of experience -->
        <!--        and expertise to help you achieve your communication goals with compassion and excellence.-->
        <!--    </p>-->
        <!--</div>-->
        
                                <div class="max-w-4xl mx-auto text-center mb-20">
            <h1 class="text-5xl md:text-7xl font-museo-rounded font-light text-text-gray mb-6 tracking-tight">
                Meet <span class="font-bold text-primary-blue">Our Team</span>
            </h1>
            <p class="text-xl md:text-xl font-museo font-light text-gray-500 leading-relaxed max-w-3xl mx-auto">
                     Our dedicated team of certified professionals brings years of experience 
                and expertise to help you achieve your communication goals with compassion and excellence.            </p>
        </div>

        
    
        
        <!-- Team Members Grid -->
      <div class="team-grid">
            <!-- Team Member 1 -->
            
            <div class="team-member fade-in">
    <img src="assets/about/Nikhila-Srireddy.webp" 
         alt="Nikhila Srireddy" class="member-photo1">
    <h3 class="member-name museo-rounded text-center">Nikhila Srireddy</h3>
    <p class="member-title museo-sans text-center">Speech and Swallow Therapist</p>
    <ul class="member-bio museo-sans" style="list-style-type: disc; padding-left: 1.5rem;">
        <li>Experienced in hospital and clinical settings treating speech, language, and swallowing disorders.</li>
        <li>Specializes in neurorehabilitation with a patient-centered approach.</li>
        <li>Passionate about restoring functional communication and safe swallowing through evidence-based care.</li>
    </ul>
    <!--<div class="member-credentials">-->
        <!-- Credentials not provided separately -->
    <!--</div>-->
    <!--<div class="member-contact">-->
    <!--    <a href="#" class="contact-link" aria-label="Email Nikhila Srireddy">-->
    <!--        <i class="fas fa-envelope"></i>-->
    <!--    </a>-->
    <!--    <a href="#" class="contact-link" aria-label="LinkedIn Profile">-->
    <!--        <i class="fab fa-linkedin"></i>-->
    <!--    </a>-->
    <!--</div>-->
</div>  

           
            <!-- Team Member 2 -->
<div class="team-member fade-in">
    <img src="assets/about/Sharolin.webp" 
         alt="M. Blessy Sharolin" class="member-photo">
    <h3 class="member-name museo-rounded text-center">M. Blessy Sharolin</h3>
    <p class="member-title museo-sans text-center">Speech Language Pathologist & Onco Deglutologist</p>
    <ul class="member-bio museo-sans" style="list-style-type: disc; padding-left: 1.5rem;">
        <li>MASLP & Fellowship in Speech and Swallow in Post Head and Neck Cancer Treatments.</li>
        <li>Experienced in treating communication disorders and swallowing issues across all age groups.</li>
        <li>Special focus on post head and neck cancer care and adult neuro-rehabilitation services.</li>
    </ul>
    <!--<div class="member-credentials">-->
        <!-- Credentials integrated in bio section -->
    <!--</div>-->
    <!--<div class="member-contact">-->
    <!--    <a href="#" class="contact-link" aria-label="Email M. Blessy Sharolin">-->
    <!--        <i class="fas fa-envelope"></i>-->
    <!--    </a>-->
    <!--    <a href="#" class="contact-link" aria-label="LinkedIn Profile">-->
    <!--        <i class="fab fa-linkedin"></i>-->
    <!--    </a>-->
    <!--</div>-->
</div>            
            <!-- Team Member 3 -->




            <!-- Team Member 4 -->
<div class="team-member fade-in">
    <img src="assets/about/Nimma-architha.webp" 
         alt="Nimma Architha Reddy" class="member-photo">
    <h3 class="member-name museo-rounded text-center">Nimma Architha Reddy</h3>
    <p class="member-title museo-sans text-center">Speech Language Pathologist</p>
    <ul class="member-bio museo-sans" style="list-style-type: disc; padding-left: 1.5rem;">
        <li>Specializes in adult neurorehabilitation with focus on dysphagia, neurogenic language disorders, and tracheostomy care.</li>
        <li>Committed to improving both functional outcomes and overall quality of life through person-centered therapy.</li>
        <li>Actively engaged in research and academic learning to support continuous professional and clinical growth.</li>
    </ul>
    <!--<div class="member-credentials">-->
        <!-- Credentials not separately listed -->
    <!--</div>-->
    <!--<div class="member-contact">-->
    <!--    <a href="#" class="contact-link" aria-label="Email Nimma Architha Reddy">-->
    <!--        <i class="fas fa-envelope"></i>-->
    <!--    </a>-->
    <!--    <a href="#" class="contact-link" aria-label="LinkedIn Profile">-->
    <!--        <i class="fab fa-linkedin"></i>-->
    <!--    </a>-->
    <!--</div>-->
</div>            
            
                        <!-- Team Member 5 -->
<div class="team-member fade-in">
    <img src="assets/about/G-sushma.webp" 
         alt="G. Sushma" class="member-photo">
    <h3 class="member-name museo-rounded text-center">G. Sushma</h3>
    <p class="member-title museo-sans text-center">Speech and Language Pathologist</p>
  <ul class="member-bio museo-sans" style="list-style-type: disc; padding-left: 1.5rem;">
        <li>Speech and Swallow Therapist specializing in adult neuro-rehabilitation.</li>
        <li>Skilled in dysphagia management, neurogenic language disorders, and tracheostomy care.</li>
        <li>Focused on improving quality of life through functional, evidence-based therapy.</li>
    </ul>
    <!--<div class="member-credentials">-->
        <!-- No credentials provided in content -->
    <!--</div>-->
    <!--<div class="member-contact">-->
    <!--    <a href="#" class="contact-link">-->
    <!--        <i class="fas fa-envelope"></i>-->
    <!--    </a>-->
    <!--    <a href="#" class="contact-link">-->
    <!--        <i class="fab fa-linkedin"></i>-->
    <!--    </a>-->
    <!--</div>-->
</div> 
            
<div class="team-member fade-in">
    <img src="assets/about/V-shivani.webp" 
         alt="V. Shivani" class="member-photo">
    <h3 class="member-name museo-rounded text-center">V. Shivani</h3>
    <p class="member-title museo-sans text-center">Speech Language Pathologist</p>
    <ul class="member-bio museo-sans" style="list-style-type: disc; padding-left: 1.5rem;">
        <li>Committed to delivering evidence-based care across all age groups.</li>
        <li>Therapeutic approach rooted in empathy and responsibility.</li>
        <li>Focused on enhancing clients' quality of life through personalized care.</li>
    </ul>
    <!--<div class="member-credentials">-->
        <!-- No separate credentials provided -->
    <!--</div>-->
    <!--<div class="member-contact">-->
    <!--    <a href="#" class="contact-link" aria-label="Email V. Shivani">-->
    <!--        <i class="fas fa-envelope"></i>-->
    <!--    </a>-->
    <!--    <a href="#" class="contact-link" aria-label="LinkedIn Profile">-->
    <!--        <i class="fab fa-linkedin"></i>-->
    <!--    </a>-->
    <!--</div>-->
</div>            
            
                        <!-- Team Member 6 -->

            
            <!--            <div class="team-member fade-in">-->
            <!--    <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" -->
            <!--         alt="Dr. James Wilson" class="member-photo">-->
            <!--    <h3 class="member-name museo-rounded">Dr. James Wilson</h3>-->
            <!--    <p class="member-title museo-sans">Clinical Director & Trainer</p>-->
            <!--    <p class="member-bio museo-sans">-->
            <!--        Leading clinical excellence and professional development programs. -->
            <!--        Mentor to emerging speech-language pathologists nationwide.-->
            <!--    </p>-->
            <!--    <div class="member-credentials">-->
            <!--        <span class="credential museo-sans">Ph.D. SLP</span>-->
            <!--        <span class="credential museo-sans">CCC-SLP</span>-->
            <!--        <span class="credential museo-sans">Clinical Fellow</span>-->
            <!--    </div>-->
            <!--    <div class="member-contact">-->
            <!--        <a href="#" class="contact-link">-->
            <!--            <i class="fas fa-envelope"></i>-->
            <!--        </a>-->
            <!--        <a href="#" class="contact-link">-->
            <!--            <i class="fab fa-linkedin"></i>-->
            <!--        </a>-->
            <!--    </div>-->
            <!--</div>-->


        </div>
        
        <!-- Join Team CTA -->
        <!--<div class="join-team-cta fade-in">-->
        <!--    <h3 class="cta-title museo-rounded">Join Our Growing Team</h3>-->
        <!--    <p class="cta-text museo-sans">-->
        <!--        Are you a passionate speech-language professional looking to make a difference? -->
        <!--        We're always seeking dedicated individuals to join our mission of transforming lives.-->
        <!--    </p>-->
        <!--    <a href="#" class="cta-button museo-sans">-->
        <!--        <i class="fas fa-briefcase"></i>-->
        <!--        View Career Opportunities-->
        <!--    </a>-->
        <!--</div>-->
    </div>
    
</section>



    <!-- Call to Action -->
    <!--<section class="py-20 px-4 gradient-bg">-->
    <!--    <div class="max-w-4xl mx-auto text-center fade-in">-->
    <!--        <h2 class="museo-rounded text-4xl font-bold text-white mb-6">Ready to Start Your Communication Journey?</h2>-->
    <!--        <p class="text-xl text-white mb-8">-->
    <!--            Let's work together to unlock the power of communication. Contact us today to schedule your consultation.-->
    <!--        </p>-->
    <!--        <div class="flex flex-col sm:flex-row gap-4 justify-center">-->
    <!--            <button class="bg-yellow text-gray-custom px-8 py-4 rounded-full font-semibold hover:bg-opacity-90 transition-all transform hover:scale-105">-->
                    <!--Schedule Consultation-->
    <!--            </button>-->
    <!--            <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-primary transition-all">-->
    <!--                Learn More-->
    <!--            </button>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- Footer -->
        
        <?php include('footer.php');?>
<!--who we are-->
    <script>
        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
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

        // Initialize animations when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observer.observe(el));
        });
    </script>
    
    <!--What WE do-->
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
    
    <!--our team-->
        <script>
        // Intersection Observer for animations
        const observerOptionsq = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observerq = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 150);
                }
            });
        }, observerOptionsq);

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observerq.observe(el));
        });
    </script>
    
    <script>
       document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    navbar.classList.add('navbar-scrolled');
});
    </script>
    
    
    <script>
// Sophisticated scroll animations
const observerOptions = {
    threshold: 0.15,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Initialize with staggered animations
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.lg\\:col-span-7, .lg\\:col-span-5');
    
    sections.forEach((section, index) => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(40px)';
        section.style.transition = 'all 1s cubic-bezier(0.4, 0, 0.2, 1)';
        section.style.transitionDelay = `${index * 0.3}s`;
        
        observer.observe(section);
    });

    // Animate stats on scroll
    const stats = document.querySelectorAll('.grid.grid-cols-2.md\\:grid-cols-4 .group');
    stats.forEach((stat, index) => {
        stat.style.opacity = '0';
        stat.style.transform = 'translateY(20px)';
        stat.style.transition = 'all 0.6s ease';
        stat.style.transitionDelay = `${1 + (index * 0.1)}s`;
        
        setTimeout(() => {
            stat.style.opacity = '1';
            stat.style.transform = 'translateY(0)';
        }, 100);
    });
});

// Subtle parallax for geometric elements
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('.absolute');
    
    parallaxElements.forEach((element, index) => {
        const speed = 0.1 + (index * 0.05);
        element.style.transform += ` translateY(${scrolled * speed}px)`;
    });
});
</script>



        
</body>
</html>