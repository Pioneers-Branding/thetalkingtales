<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinical Pathways & Resources - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <?php include('header-links.php');?>
    
        <script>
       document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    navbar.classList.add('navbar-scrolled');
});
    </script>

    <!--hero section-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Museo+Sans:wght@600;700;800&display=swap');
        
        .museo-rounded {
            font-family: 'Museo Sans', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        /* Hero Background Pattern */
        .hero-bg {
            background: linear-gradient(135deg, #F9F0E5 0%, #FFFFFF 100%);
            position: relative;
            overflow: hidden;
        }
        
        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%230B87C5' fill-opacity='0.03'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            opacity: 0.5;
        }
        
        /* Floating Elements */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-element:nth-child(1) {
            top: 10%;
            left: 10%;
            width: 80px;
            height: 80px;
            background: #0B87C5;
            animation-delay: 0s;
        }
        
        .floating-element:nth-child(2) {
            top: 20%;
            right: 15%;
            width: 60px;
            height: 60px;
            background: #3DD288;
            animation-delay: 2s;
        }
        
        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 15%;
            width: 100px;
            height: 100px;
            background: #FFC73C;
            animation-delay: 4s;
        }
        
        .floating-element:nth-child(4) {
            bottom: 30%;
            right: 10%;
            width: 70px;
            height: 70px;
            background: #F36E3B;
            animation-delay: 1s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            33% {
                transform: translateY(-20px) rotate(120deg);
            }
            66% {
                transform: translateY(10px) rotate(240deg);
            }
        }
        
        /* Icon Animation */
        .hero-icon {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        /* Pathway Visual Elements */
        .pathway-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            position: relative;
        }
        
        .pathway-line {
            height: 2px;
            background: linear-gradient(90deg, #0B87C5, #3DD288);
            position: relative;
            overflow: hidden;
        }
        
        .pathway-line::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);
            animation: shimmer 3s infinite;
        }
        
        @keyframes shimmer {
            0% {
                left: -100%;
            }
            100% {
                left: 100%;
            }
        }
        
        /* Feature Card Hover */
        .feature-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(11, 135, 197, 0.15);
        }
        
        /* CTA Button */
        .cta-button {
            background: linear-gradient(135deg, #0B87C5 0%, #0969A3 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(11, 135, 197, 0.3);
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .cta-button:hover::before {
            left: 100%;
        }
        
        /* Responsive Typography */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
                line-height: 1.2;
            }
            
            .hero-subtitle {
                font-size: 1.125rem;
            }
        }
    </style>
    
    <!--how we plan-->
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap');
        
        .museo-rounded {
            font-family: 'Museo Sans Rounded', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
                font-family: 'Museo Sans', sans-serif;
            font-weight: 500;
        }
        
        /* Age Group Cards */
        .age-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .age-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .age-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            transition: all 0.3s ease;
        }
        
        .age-card.children::before {
            background: linear-gradient(90deg, #0B87C5, #3DD288);
        }
        
        .age-card.teens::before {
            background: linear-gradient(90deg, #3DD288, #FFC73C);
        }
        
        .age-card.adults::before {
            background: linear-gradient(90deg, #F36E3B, #0B87C5);
        }
        
        /* Assessment Tools */
        .tool-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin: 0.25rem;
            border-radius: 0.5rem;
            font-size: 0.75rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        
        .tool-badge:hover {
            transform: scale(1.05);
        }
        
        .tool-badge.primary {
            background: #EBF8FF;
            color: #1E40AF;
            border: 1px solid #BFDBFE;
        }
        
        .tool-badge.secondary {
            background: #F0FDF4;
            color: #166534;
            border: 1px solid #BBF7D0;
        }
        
        /* Section Header */
        .section-header {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        
        .section-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #0B87C5, #3DD288);
            border-radius: 2px;
        }
        
        /* Process Steps */
        .process-step {
            position: relative;
            padding-left: 2rem;
        }
        
        .process-step::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            background: #0B87C5;
            border-radius: 50%;
            border: 3px solid #FFFFFF;
            box-shadow: 0 0 0 2px #0B87C5;
        }
        
        .process-step:not(:last-child)::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 1.5rem;
            width: 2px;
            height: calc(100% - 1rem);
            background: linear-gradient(180deg, #0B87C5, #E5E7EB);
        }
        
        /* Info Card */
        .info-card {
            background: linear-gradient(135deg, #F9F0E5 0%, #FFFFFF 100%);
            border: 1px solid #FFC73C;
            transition: all 0.3s ease;
        }
        
        .info-card:hover {
            border-color: #0B87C5;
            box-shadow: 0 8px 25px rgba(11, 135, 197, 0.15);
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
        
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    
    
    <!-- What We Use in Therapy Section -->
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap');
        
    .museo-rounded {
            font-family: 'Museo Sans Rounded', sans-serif;
            font-weight: 700;
        }
      .museo-rounded {
            font-family: 'Museo Sans Rounded', sans-serif;
            font-weight: 700;
        }
        
        /* Tool Cards */
        .tool-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
        }
        
        .tool-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: #0B87C5;
        }
        
        /* Image Placeholder */
        .image-placeholder {
            background: #F3F4F6;
            border: 2px dashed #D1D5DB;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .image-placeholder:hover {
            background: #EBF8FF;
            border-color: #0B87C5;
        }
        
        /* Tool List Items */
        .tool-item {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            border: 1px solid #E5E7EB;
        }
        
        .tool-item:hover {
            background: #F9FAFB;
            border-color: #0B87C5;
            transform: translateX(8px);
        }
        
        /* Feature Badge */
        .feature-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 1rem;
            font-size: 0.875rem;
            font-weight: 600;
            margin: 0.25rem;
            transition: all 0.2s ease;
        }
        
        .feature-badge:hover {
            transform: scale(1.05);
        }
        
        .feature-badge.blue {
            background: #EBF8FF;
            color: #1E40AF;
            border: 1px solid #BFDBFE;
        }
        
        .feature-badge.green {
            background: #F0FDF4;
            color: #166534;
            border: 1px solid #BBF7D0;
        }
        
        .feature-badge.orange {
            background: #FFF7ED;
            color: #C2410C;
            border: 1px solid #FED7AA;
        }
        
        /* Section Divider */
        .section-divider {
            position: relative;
            text-align: center;
            margin: 2rem 0;
        }
        
        .section-divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #E5E7EB;
        }
        
        .section-divider span {
            background: white;
            padding: 0 1rem;
            color: #6B7280;
            font-size: 0.875rem;
        }
        
        /* Highlight Box */
        .highlight-box {
            background: #FEF3C7;
            border: 1px solid #FCD34D;
            border-radius: 1rem;
            position: relative;
        }
        
        .highlight-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: #F59E0B;
            border-radius: 1rem 1rem 0 0;
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
        
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <!-- The Therapy Pathway Section -->

 <style>
        @import url('https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap');
        
    .museo-rounded {
            font-family: 'Museo Sans Rounded', sans-serif;
            font-weight: 700;
        }
        
          .museo-sans {
                font-family: 'Museo Sans', sans-serif;
            font-weight: 500;
        }
        
        /* Step Cards */
        .step-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(11, 135, 197, 0.15);
        }
        
        /* Number Circles */
        .number-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: white;
            flex-shrink: 0;
        }
        
        /* Image Container */
        .image-container {
            position: relative;
        }
        
        /* Decorative Circles */
        .decorative-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.8;
        }
        
        .circle-orange {
            background: #F36E3B;
            width: 120px;
            height: 120px;
            top: -20px;
            left: -20px;
        }
        
        .circle-yellow {
            background: #FFC73C;
            width: 100px;
            height: 100px;
            bottom: -20px;
            right: -20px;
        }
        
        .circle-green {
            background: #3DD288;
            width: 80px;
            height: 80px;
            top: 50%;
            left: -40px;
            transform: translateY(-50%);
        }
        
        /* Button Styles */
        .btn-primary {
            background: #0B87C5;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: #0969A3;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(11, 135, 197, 0.3);
        }
        
        .btn-secondary {
            background: #4A4A4A;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: #333333;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(74, 74, 74, 0.3);
        }
        
        /* Free Badge */
        .free-badge {
            background: #3DD288;
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            position: absolute;
            top: -8px;
            right: -20px;
            transform: rotate(12deg);
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
        .stagger-item:nth-child(7) { animation-delay: 0.7s; }
        .stagger-item:nth-child(8) { animation-delay: 0.8s; }
        .stagger-item:nth-child(9) { animation-delay: 0.9s; }
        .stagger-item:nth-child(10) { animation-delay: 1.0s; }
        
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

<!-- Early Intervention Section - Redesigned -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap');
        
     .museo-rounded {
            font-family: 'Museo Sans Rounded', sans-serif;
            font-weight: 700;
        }
        
          .museo-sans {
                font-family: 'Museo Sans', sans-serif;
            font-weight: 500;
        }
        
        /* Timeline Design */
        .timeline-container {
            position: relative;
        }
        
        .timeline-line {
            position: absolute;
            top: 2rem;
            left: 0;
            right: 0;
            height: 2px;
            background: #E5E7EB;
            z-index: 1;
        }
        
        .timeline-progress {
            height: 100%;
            background: #3DD288;
            width: 0%;
            transition: width 2s ease-in-out;
        }
        
        .timeline-step {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .timeline-circle {
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .timeline-step:hover .timeline-circle {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        /* Benefit Pills */
        .benefit-pill {
            display: inline-flex;
            align-items: center;
            background: white;
            border: 1px solid #E5E7EB;
            border-radius: 9999px;
            padding: 0.5rem 1rem;
            margin: 0.25rem;
            font-size: 0.875rem;
            transition: all 0.3s ease;
        }
        
        .benefit-pill:hover {
            border-color: #3DD288;
            background: #F0FDF4;
            transform: translateY(-2px);
        }
        
        /* Card Design */
        .main-card {
            background: white;
            border-radius: 1.5rem;
            /*box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);*/
            /*border: 1px solid #E5E7EB;*/
            transition: all 0.3s ease;
        }
        
        /*.main-card:hover {*/
        /*    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);*/
        /*    transform: translateY(-4px);*/
        /*}*/
        
        /* Free Badge */
        .free-badge {
            background: #10B981;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }
        
        /* Button Styles */
        .btn-primary {
            background: #3DD288;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-primary:hover {
            background: #22C55E;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(61, 210, 136, 0.3);
        }
        
        .btn-secondary {
            background: transparent;
            color: #0B87C5;
            border: 2px solid #0B87C5;
            padding: 0.75rem 2rem;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-secondary:hover {
            background: #0B87C5;
            color: white;
            transform: translateY(-2px);
        }
        
        /* Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .fade-in:nth-child(1) { animation-delay: 0.1s; }
        .fade-in:nth-child(2) { animation-delay: 0.2s; }
        .fade-in:nth-child(3) { animation-delay: 0.3s; }
        .fade-in:nth-child(4) { animation-delay: 0.4s; }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    
    <!-- Professional Career Pathway Section - Full Width -->

        <style>
        @import url('https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap');
        
   .museo-rounded {
            font-family: 'Museo Sans Rounded', sans-serif;
            font-weight: 700;
        }
        
       .museo-sans {
                font-family: 'Museo Sans', sans-serif;
            font-weight: 500;
        }
        
        /* Track Pills */
        .track-pill {
            background: white;
            border: 2px solid #E5E7EB;
            border-radius: 9999px;
            padding: 0.75rem 1.5rem;
            margin: 0.25rem;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .track-pill:hover {
            border-color: #F36E3B;
            background: #FFF7ED;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(243, 110, 59, 0.15);
        }
        
        /* Support Pills */
        .support-pill {
            background: #F9FAFB;
            border: 1px solid #E5E7EB;
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            margin: 0.25rem;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }
        
        .support-pill:hover {
            border-color: #F36E3B;
            background: #FFF7ED;
            transform: translateX(4px);
            box-shadow: 0 4px 12px rgba(243, 110, 59, 0.1);
        }
        
        /* Button Styles */
        .btn-primary {
            background: #F36E3B;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 2px 8px rgba(243, 110, 59, 0.2);
        }
        
        .btn-primary:hover {
            background: #EA580C;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(243, 110, 59, 0.3);
        }
        
        .btn-secondary {
           background: #0B87C5;
            color: white;
            border: 2px solid #0B87C5;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-secondary:hover {
            background: #0B87C5;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(11, 135, 197, 0.2);
        }
        
        .btn-tertiary {
            background: transparent;
            color: #3DD288;
            border: 2px solid #3DD288;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-tertiary:hover {
            background: #3DD288;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(61, 210, 136, 0.2);
        }
        
        /* Training Badge */
        .training-badge {
            background: #F36E3B;
            color: white;
            padding: 0.375rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }
        
        /* Orientation Items */
        .orientation-item {
            text-align: center;
            padding: 0.5rem;
        }
        
        /* Orientation Box */
        .orientation-box {
            background: #FFF7ED;
            border: 1px solid #FED7AA;
            border-radius: 0.75rem;
            padding: 1rem;
        }
        
        /* Quote Box */
        .quote-box {
            background: #FFF7ED;
            border: 1px solid #FED7AA;
            border-radius: 0.75rem;
            padding: 1.5rem;
            position: relative;
        }
        
        .quote-box::before {
            content: '"';
            font-size: 2rem;
            color: #F36E3B;
            position: absolute;
            top: 0.5rem;
            left: 1rem;
            font-family: serif;
        }
        
        /* Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(15px);
            animation: fadeInUp 0.5s ease-out forwards;
        }
        
        .fade-in:nth-child(1) { animation-delay: 0.1s; }
        .fade-in:nth-child(2) { animation-delay: 0.2s; }
        .fade-in:nth-child(3) { animation-delay: 0.3s; }
        .fade-in:nth-child(4) { animation-delay: 0.4s; }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>


</head>

<body class="bg-gray-50">
    
        <?php include('header.php');?>

    
    
    <!-- Clinical Pathways Hero Section -->
    <section class="hero-bg py-16 lg:py-24 relative">
        <!-- Floating Background Elements -->
  
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                
                <!-- Left Content -->
                <div class="space-y-8">
                    <!-- Page Label -->
                    <!--<div class="inline-flex items-center bg-blue-100 text-blue-700 px-4 py-2 rounded-full museo-sans text-sm font-semibold">-->
                    <!--    <i class="fas fa-route mr-2"></i>-->
                    <!--    Clinical Pathways & Resources-->
                    <!--</div>-->
                    
                    <!-- Main Headline -->
                    <h1 class="hero-title museo-rounded text-4xl lg:text-6xl font-bold text-gray-800 leading-tight">
                        Therapy that's 
                        <span class="text-[#0B87C5]">structured</span>, 
                        <span class="text-green-600">practical</span>, and 
                        <span class="text-orange-600">personal</span>.
                    </h1>
                    
                    <!-- Subtitle -->
                    <p class="hero-subtitle museo-sans text-lg lg:text-xl text-gray-600 leading-relaxed max-w-2xl">
                        We don't just show up to sessions — we plan, personalize, and track everything. Whether you're starting early, recovering from a medical condition, or working with us as a therapist, our therapy pathway is designed to feel clear, supported, and practical.
                    </p>
                    
                    <!-- Pathway Visual -->
                    <div class="flex items-center space-x-4 py-6">
                        <div class="flex items-center space-x-2">
                            <div class="pathway-dot bg-[#0B87C5]"></div>
                            <span class="museo-sans text-sm font-medium text-gray-700">Plan</span>
                        </div>
                        <div class="pathway-line flex-1"></div>
                        <div class="flex items-center space-x-2">
                            <div class="pathway-dot bg-green-600"></div>
                            <span class="museo-sans text-sm font-medium text-gray-700">Personalize</span>
                        </div>
                        <div class="pathway-line flex-1"></div>
                        <div class="flex items-center space-x-2">
                            <div class="pathway-dot bg-orange-600"></div>
                            <span class="museo-sans text-sm font-medium text-gray-700">Track</span>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="cta-button text-white px-8 py-4 rounded-xl museo-sans font-semibold text-lg flex items-center justify-center">
                            <i class="fas fa-play-circle mr-3"></i>
                            Explore Our Pathways
                        </button>
                        <button class="bg-transparent border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-xl museo-sans font-semibold hover:border-[#0B87C5] hover:text-[#0B87C5] transition-all duration-300 flex items-center justify-center">
                            <i class="fas fa-download mr-3"></i>
                            Download Resources
                        </button>
                    </div>
                </div>
                
                <!-- Right Visual -->
                <div class="relative">
                    <!-- Main Visual Container -->
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl">
                        <!-- Hero Icon -->
                        <div class="hero-icon w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-sitemap text-3xl text-[#0B87C5]"></i>
                        </div>
                        
                        <!-- Feature Cards Grid -->
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Structured Planning -->
                            <div class="feature-card bg-blue-50 rounded-xl p-4 text-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-clipboard-check text-[#0B87C5]"></i>
                                </div>
                                <h3 class="museo-rounded text-sm font-bold text-gray-800 mb-2">Structured Planning</h3>
                                <p class="museo-sans text-xs text-gray-600">Evidence-based pathways</p>
                            </div>
                            
                            <!-- Personal Touch -->
                            <div class="feature-card bg-green-50 rounded-xl p-4 text-center">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-heart text-green-600"></i>
                                </div>
                                <h3 class="museo-rounded text-sm font-bold text-gray-800 mb-2">Personal Touch</h3>
                                <p class="museo-sans text-xs text-gray-600">Tailored to your needs</p>
                            </div>
                            
                            <!-- Progress Tracking -->
                            <div class="feature-card bg-orange-50 rounded-xl p-4 text-center">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-chart-line text-orange-600"></i>
                                </div>
                                <h3 class="museo-rounded text-sm font-bold text-gray-800 mb-2">Progress Tracking</h3>
                                <p class="museo-sans text-xs text-gray-600">Clear milestones</p>
                            </div>
                            
                            <!-- Expert Support -->
                            <div class="feature-card bg-yellow-50 rounded-xl p-4 text-center">
                                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-user-md text-yellow-600"></i>
                                </div>
                                <h3 class="museo-rounded text-sm font-bold text-gray-800 mb-2">Expert Support</h3>
                                <p class="museo-sans text-xs text-gray-600">Professional guidance</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <!--<div class="absolute -top-4 -right-4 w-16 h-16 bg-blue-200 rounded-full opacity-60"></div>-->
                    <!--<div class="absolute -bottom-4 -left-4 w-12 h-12 bg-green-200 rounded-full opacity-60"></div>-->
                    <!--<div class="absolute top-1/2 -right-6 w-8 h-8 bg-orange-200 rounded-full opacity-60"></div>-->
                </div>
            </div>
        </div>
        
        <!-- Bottom Stats -->
        <!--<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 mt-16">-->
        <!--    <div class="bg-white rounded-2xl shadow-xl p-6 lg:p-8">-->
        <!--        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">-->
        <!--            <div>-->
        <!--                <div class="museo-rounded text-3xl font-bold text-[#0B87C5] mb-2">15+</div>-->
        <!--                <div class="museo-sans text-sm text-gray-600">Clinical Pathways</div>-->
        <!--            </div>-->
        <!--            <div>-->
        <!--                <div class="museo-rounded text-3xl font-bold text-green-600 mb-2">500+</div>-->
        <!--                <div class="museo-sans text-sm text-gray-600">Success Stories</div>-->
        <!--            </div>-->
        <!--            <div>-->
        <!--                <div class="museo-rounded text-3xl font-bold text-orange-600 mb-2">98%</div>-->
        <!--                <div class="museo-sans text-sm text-gray-600">Goal Achievement</div>-->
        <!--            </div>-->
        <!--            <div>-->
        <!--                <div class="museo-rounded text-3xl font-bold text-yellow-600 mb-2">24/7</div>-->
        <!--                <div class="museo-sans text-sm text-gray-600">Resource Access</div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </section>
    
    <!-- How We Plan Your Therapy Section -->
<section class="bg-white py-16 lg:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
          <div class="text-center mb-12 fade-in">
            <h2 class="font-black text-4xl md:text-6xl text-text-gray mb-4 museo-rounded">
                How We Plan <span class="text-primary-blue">Your Therapy</span>
            </h2>
            <p class="text-lg text-gray-600 museo-sans max-w-3xl mx-auto">
               Every therapy journey begins with understanding, not guessing. We use a mix of structured tools and real conversations to build a plan that fits you (or your child) from Day 1.
            </p>
        </div>
        
        
        <!--<div class="text-center section-header">-->
        <!--    <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800 mb-4">-->
        <!--        How We Plan Your Therapy-->
        <!--    </h2>-->
        <!--    <p class="museo-sans text-lg lg:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">-->
        <!--        Every therapy journey begins with understanding, not guessing. We use a mix of structured tools and real conversations to build a plan that fits you (or your child) from Day 1.-->
        <!--    </p>-->
        <!--</div>-->

        <!-- Age Groups Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            
            <!-- Children (0-8 yrs) -->
            <div class="age-card children bg-white rounded-2xl p-6 shadow-lg border border-gray-100 stagger-item">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-baby text-2xl text-[#0B87C5]"></i>
                    </div>
                    <div>
                        <h3 class="museo-rounded text-xl font-bold text-gray-800">Children</h3>
                        <p class="museo-sans text-sm text-gray-600">Ages 0–8 years</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div class="process-step">
                        <h4 class="museo-rounded text-base font-bold text-gray-800 mb-2">Assessment Methods</h4>
                        <p class="museo-sans text-sm text-gray-600 mb-3">Milestone checklists combined with informal observation to understand natural development patterns.</p>
                    </div>
                    
                    <div class="process-step">
                        <h4 class="museo-rounded text-base font-bold text-gray-800 mb-2">Evaluation Tools</h4>
                        <p class="museo-sans text-sm text-gray-600 mb-3">Parent forms and play-based assessments for comprehensive understanding.</p>
                    </div>
                    
                    <div class="process-step">
                        <h4 class="museo-rounded text-base font-bold text-gray-800 mb-2">Professional Tools</h4>
                        <div class="flex flex-wrap">
                            <span class="tool-badge primary">
                                <i class="fas fa-certificate mr-1"></i>REEL
                            </span>
                            <span class="tool-badge primary">
                                <i class="fas fa-certificate mr-1"></i>WABC
                            </span>
                            <span class="tool-badge secondary">Digitally Licensed</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Teens (9-17 yrs) -->
            <div class="age-card teens bg-white rounded-2xl p-6 shadow-lg border border-gray-100 stagger-item">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-user-graduate text-2xl text-green-600"></i>
                    </div>
                    <div>
                        <h3 class="museo-rounded text-xl font-bold text-gray-800">Teens</h3>
                        <p class="museo-sans text-sm text-gray-600">Ages 9–17 years</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div class="process-step">
                        <h4 class="museo-rounded text-base font-bold text-gray-800 mb-2">Language Analysis</h4>
                        <p class="museo-sans text-sm text-gray-600 mb-3">Language samples to assess communication patterns and social interaction skills.</p>
                    </div>
                    
                    <div class="process-step">
                        <h4 class="museo-rounded text-base font-bold text-gray-800 mb-2">Social Assessment</h4>
                        <p class="museo-sans text-sm text-gray-600 mb-3">Social checklists to evaluate peer interaction and communication effectiveness.</p>
                    </div>
                    
                    <div class="process-step">
                        <h4 class="museo-rounded text-base font-bold text-gray-800 mb-2">Collaborative Input</h4>
                        <div class="flex flex-wrap">
                            <span class="tool-badge primary">
                                <i class="fas fa-tasks mr-1"></i>Screening Tasks
                            </span>
                            <span class="tool-badge secondary">
                                <i class="fas fa-home mr-1"></i>Parent Input
                            </span>
                            <span class="tool-badge secondary">
                                <i class="fas fa-school mr-1"></i>School Input
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Adults (18+) -->
            <div class="age-card adults bg-white rounded-2xl p-6 shadow-lg border border-gray-100 stagger-item">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-user-tie text-2xl text-orange-600"></i>
                    </div>
                    <div>
                        <h3 class="museo-rounded text-xl font-bold text-gray-800">Adults</h3>
                        <p class="museo-sans text-sm text-gray-600">Ages 18+ years</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div class="process-step">
                        <h4 class="museo-rounded text-base font-bold text-gray-800 mb-2">Standard Assessments</h4>
                        <div class="flex flex-wrap mb-3">
                            <span class="tool-badge primary">
                                <i class="fas fa-brain mr-1"></i>WAB-R
                            </span>
                            <span class="tool-badge primary">
                                <i class="fas fa-utensils mr-1"></i>MASA
                            </span>
                            <span class="tool-badge primary">
                                <i class="fas fa-head-side-brain mr-1"></i>MMSE
                            </span>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <h4 class="museo-rounded text-base font-bold text-gray-800 mb-2">Comprehensive Evaluation</h4>
                        <p class="museo-sans text-sm text-gray-600 mb-3">Family interviews combined with specialized assessments.</p>
                    </div>
                    
                    <div class="process-step">
                        <h4 class="museo-rounded text-base font-bold text-gray-800 mb-2">Specialized Testing</h4>
                        <div class="flex flex-wrap">
                            <span class="tool-badge secondary">
                                <i class="fas fa-heartbeat mr-1"></i>Swallowing Evaluations
                            </span>
                            <span class="tool-badge secondary">IDDSI-Aligned</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- How We Share Section -->
        <div class="stagger-item">
            <div class="info-card rounded-2xl p-6 lg:p-8">
                <div class="flex items-start space-x-4">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-share-alt text-2xl text-yellow-600"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="museo-rounded text-2xl font-bold text-gray-800 mb-3">
                            How We Share Your Results
                        </h3>
                        <p class="museo-sans text-lg text-gray-600 leading-relaxed mb-4">
                            You'll get a clear summary after the first session — emailed or shared securely. No medical jargon, just practical insights about your therapy journey and next steps.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <div class="flex items-center bg-white rounded-lg px-4 py-2 shadow-sm">
                                <i class="fas fa-envelope text-[#0B87C5] mr-2"></i>
                                <span class="museo-sans text-sm font-medium text-gray-700">Email Summary</span>
                            </div>
                            <div class="flex items-center bg-white rounded-lg px-4 py-2 shadow-sm">
                                <i class="fas fa-shield-alt text-green-600 mr-2"></i>
                                <span class="museo-sans text-sm font-medium text-gray-700">Secure Sharing</span>
                            </div>
                            <div class="flex items-center bg-white rounded-lg px-4 py-2 shadow-sm">
                                <i class="fas fa-clock text-orange-600 mr-2"></i>
                                <span class="museo-sans text-sm font-medium text-gray-700">Same Day Results</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- What We Use in Therapy Section -->
<section class="bg-gray-50 py-16 lg:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        
          <div class="text-center mb-12 fade-in">
            <h2 class="font-black text-4xl md:text-6xl text-text-gray mb-4 museo-rounded">
                What We Use <span class="text-primary-blue">in Therapy</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl museo-sans mx-auto">
                No generic PDF printouts here. Everything is picked for your needs, age, and comfort level.
            </p>
        </div>
        
        
        
        
        
        
        
        <!--<div class="text-center mb-16">-->
        <!--    <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800 mb-4">-->
        <!--        What We Use in Therapy-->
        <!--    </h2>-->
        <!--    <p class="museo-sans text-lg lg:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">-->
        <!--        No generic PDF printouts here. Everything is picked for your needs, age, and comfort level.-->
        <!--    </p>-->
        <!--</div>-->

        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start mb-16">
            
            <!-- Left Column - Tools List -->
            <div class="space-y-8">
                
                <!-- Tools That Guide Every Session -->
                <div class="stagger-item">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-cogs text-[#0B87C5] text-lg"></i>
                            </div>
                            <h3 class="museo-rounded text-2xl font-bold text-gray-800">
                                Tools That Guide Every Session
                            </h3>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="tool-item">
                                <i class="fas fa-eye text-[#0B87C5] mr-3 flex-shrink-0"></i>
                                <span class="museo-sans text-gray-700">Visual aids, flashcards, First-Then boards</span>
                            </div>
                            <div class="tool-item">
                                <i class="fas fa-tablet-alt text-green-600 mr-3 flex-shrink-0"></i>
                                <span class="museo-sans text-gray-700">Boom Cards, AAC apps, cue cards</span>
                            </div>
                            <div class="tool-item">
                                <i class="fas fa-microphone text-orange-600 mr-3 flex-shrink-0"></i>
                                <span class="museo-sans text-gray-700">Voice drills, swallow strategies, and fluency trackers</span>
                            </div>
                            <div class="tool-item">
                                <i class="fas fa-home text-yellow-600 mr-3 flex-shrink-0"></i>
                                <span class="museo-sans text-gray-700">Home worksheets, goal sheets, and emotion charts</span>
                            </div>
                            <div class="tool-item">
                                <i class="fas fa-language text-purple-600 mr-3 flex-shrink-0"></i>
                                <span class="museo-sans text-gray-700">Indian language options are available when needed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Online Session Tools -->
                <div class="stagger-item">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-video text-green-600 text-lg"></i>
                            </div>
                            <h3 class="museo-rounded text-2xl font-bold text-gray-800">
                                For Online Sessions
                            </h3>
                        </div>
                        
                        <div class="grid gap-4">
                            <div class="flex items-center justify-between p-4 bg-blue-50 rounded-xl">
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt text-[#0B87C5] mr-3"></i>
                                    <span class="museo-sans font-semibold text-gray-800">Zoom Pro</span>
                                </div>
                                <div class="flex space-x-2">
                                    <span class="feature-badge blue">Secure</span>
                                    <span class="feature-badge blue">Stable</span>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between p-4 bg-green-50 rounded-xl">
                                <div class="flex items-center">
                                    <i class="fas fa-share-square text-green-600 mr-3"></i>
                                    <span class="museo-sans font-semibold text-gray-800">Screen Sharing</span>
                                </div>
                                <span class="feature-badge green">HIPAA-Compliant</span>
                            </div>
                            
                            <div class="flex items-center justify-between p-4 bg-orange-50 rounded-xl">
                                <div class="flex items-center">
                                    <i class="fas fa-chalkboard text-orange-600 mr-3"></i>
                                    <span class="museo-sans font-semibold text-gray-800">Digital Tools</span>
                                </div>
                                <div class="flex space-x-2">
                                    <span class="feature-badge orange">Child-Safe</span>
                                    <span class="feature-badge orange">Progress Logs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Visual Content -->
            <div class="space-y-8">
                
                <!-- Main Image Placeholder -->
                <div class="stagger-item">
                    <div class="image-placeholder aspect-video rounded-2xl">
                        <div class="text-center">
                            <i class="fas fa-image text-4xl text-gray-400 mb-4"></i>
                            <p class="museo-sans text-gray-500 font-medium">Therapy Tools in Action</p>
                            <p class="museo-sans text-sm text-gray-400">Visual aids and digital resources</p>
                        </div>
                    </div>
                </div>

                <!-- Secondary Images Grid -->
                <div class="grid grid-cols-2 gap-4 stagger-item">
                    <div class="image-placeholder aspect-square rounded-xl">
                        <div class="text-center">
                            <i class="fas fa-tablet-alt text-2xl text-gray-400 mb-2"></i>
                            <p class="museo-sans text-xs text-gray-500">Digital Tools</p>
                        </div>
                    </div>
                    <div class="image-placeholder aspect-square rounded-xl">
                        <div class="text-center">
                            <i class="fas fa-puzzle-piece text-2xl text-gray-400 mb-2"></i>
                            <p class="museo-sans text-xs text-gray-500">Visual Aids</p>
                        </div>
                    </div>
                </div>

                <!-- Stats or Additional Info -->
                <div class="stagger-item">
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-4 text-center">
                            Our Resource Library
                        </h4>
                        <div class="grid grid-cols-3 gap-4 text-center">
                            <div>
                                <div class="museo-rounded text-2xl font-bold text-[#0B87C5] mb-1">500+</div>
                                <div class="museo-sans text-xs text-gray-600">Digital Tools</div>
                            </div>
                            <div>
                                <div class="museo-rounded text-2xl font-bold text-green-600 mb-1">15+</div>
                                <div class="museo-sans text-xs text-gray-600">Languages</div>
                            </div>
                            <div>
                                <div class="museo-rounded text-2xl font-bold text-orange-600 mb-1">100%</div>
                                <div class="museo-sans text-xs text-gray-600">Customized</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Divider -->
        <div class="section-divider">
            <span class="museo-sans font-medium z-50">Additional Support Options</span>
        </div>

        <!-- Tactile Support Section -->
<div class="stagger-item">
  <div class="highlight-box p-6 lg:p-8 bg-white rounded-2xl shadow-md">
    <div class="flex items-start gap-4 mb-4">
      <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
        <i class="fas fa-hand-paper text-yellow-600 text-lg"></i>
      </div>
      <h3 class="museo-rounded text-2xl font-bold text-gray-800">
        For Families Who Prefer Tactile Support
      </h3>
    </div>

    <p class="museo-sans text-lg text-gray-700 mb-5 leading-relaxed">
      We offer optional <strong>starter kits</strong> with printed visuals, sensory tools, and physical resources — delivered to your doorstep.
    </p>

    <div class="flex flex-wrap gap-3 mb-5">
      <div class="flex items-center bg-white rounded-lg px-4 py-2 shadow-sm">
        <i class="fas fa-print text-[#0B87C5] mr-2"></i>
        <span class="museo-sans text-sm font-medium text-gray-700">Printed Visuals</span>
      </div>
      <div class="flex items-center bg-white rounded-lg px-4 py-2 shadow-sm">
        <i class="fas fa-cube text-green-600 mr-2"></i>
        <span class="museo-sans text-sm font-medium text-gray-700">Sensory Tools</span>
      </div>
      <div class="flex items-center bg-white rounded-lg px-4 py-2 shadow-sm">
        <i class="fas fa-shipping-fast text-orange-600 mr-2"></i>
        <span class="museo-sans text-sm font-medium text-gray-700">Home Delivery</span>
      </div>
    </div>

    <button class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-3 rounded-xl museo-sans font-semibold transition-all duration-300 flex items-center">
      <i class="fas fa-box mr-2"></i>
      Request Starter Kit
    </button>
  </div>
</div>
    </div>
</section>

    <!-- The Therapy Pathway Section -->
<section class="py-16 lg:py-20 bg-gradient-to-b from-white to-blue-50">
    
          <div class="text-center  mb-12 mx-auto">
        <h2 class="museo-rounded text-4xl lg:text-5xl font-bold text-gray-800 mb-4 mx-auto">
          The Therapy Pathway: <span style="color:#0B87C5;">Step-by-Step</span>
        </h2>
        <p class="museo-sans text-lg text-gray-600 leading-relaxed">
          Here’s what the therapy journey looks like:
        </p>
      </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

    <!-- Left Side Image -->
    <div class="flex justify-center lg:justify-start">
      <img src="your-image.jpg" alt="Therapy Pathway" class="rounded-2xl shadow-lg w-full object-cover h-auto">
    </div>

    <!-- Right Side Content -->
    <div>
      <!-- Section Header -->

      <!-- Timeline -->
      <div class="relative pl-8 sm:pl-12">
        <!-- Vertical Line -->
        <div class="absolute top-0 left-4 sm:left-6 w-0.5 h-full bg-blue-200"></div>

        <!-- Steps -->
        <div class="space-y-10">

          <!-- Step 1 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">1</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Start with an Online Screener</h3>
              <p class="museo-sans text-gray-600 mt-1">
                A quick, confidential form helps us understand your concern.
              </p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">2</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Book a Detailed Clinical Assessment</h3>
              <p class="museo-sans text-gray-600 mt-1">
                A speech-language therapist will conduct a detailed assessment over Zoom to understand concerns, observe the client, and plan goals.
              </p>
              <ul class="list-disc list-inside text-gray-600 mt-2">
                <li>An overview of findings</li>
                <li>Suitability for therapy</li>
                <li>Preliminary therapy goals</li>
              </ul>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">3</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Therapy Confirmation & Slot Booking</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Choose your preferred time slot, get matched with the right therapist based on age, language, and therapy needs, and receive your onboarding kit.
              </p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">4</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Therapy Begins</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Weekly online sessions via Zoom Pro with secure, high-quality interaction:
              </p>
              <ul class="list-disc list-inside text-gray-600 mt-2">
                <li>Face-to-face guidance</li>
                <li>Screen sharing, games, visuals</li>
                <li>Real-time feedback and practice</li>
              </ul>
            </div>
          </div>

          <!-- Step 5 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">5</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Get Your Weekly Home Practice Sheet</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Customized activities to reinforce therapy, support daily communication, and involve family members.
              </p>
            </div>
          </div>

          <!-- Step 6 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">6</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Progress Review – Every 15 Days</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Detailed biweekly progress report with therapist updates, homework review, and next-step strategies.
              </p>
            </div>
          </div>

          <!-- Step 7 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">7</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Goal Update & Therapy Adjustment</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Goals evolve as you progress to ensure continuous improvement.
              </p>
            </div>
          </div>

          <!-- Step 8 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">8</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Completion & Transition</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Therapy tapers off with a summary, discharge report, and optional monthly follow-ups.
              </p>
            </div>
          </div>

        </div>

        <!-- Buttons -->
        <div class="text-center lg:text-left mt-12 flex flex-col sm:flex-row gap-4">
          <button class="bg-[#0B87C5] hover:bg-[#0969a5] text-white px-8 py-4 rounded-xl museo-sans font-semibold flex items-center justify-center">
            Start Online Screener
            <i class="fas fa-arrow-right ml-2"></i>
          </button>
          <button class="bg-gray-700 hover:bg-gray-900 text-white px-8 py-4 rounded-xl museo-sans font-semibold flex items-center justify-center">
            Book Clinical Assessment
            <i class="fas fa-arrow-right ml-2"></i>
          </button>
        </div>

      </div>
    </div>
  </div>
</section>
    
    
    <!-- Early Intervention Section - Redesigned -->
<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Main Card Container -->
        <div class="main-card p-6 lg:p-8 fade-in">
            
            
                    <div class="text-center mb-12 fade-in">
            <h2 class="font-black text-4xl md:text-6xl text-text-gray mb-4 museo-rounded">
                Early <span class="text-primary-blue">Communication Pathway</span>
            </h2>
            <p class="text-lg text-text-gray museo-sans">
               Ages 1–3 • The earlier we start, the better the outcomes
            </p>
        </div>

            
            <!-- Header Section -->
            <!--<div class="text-center mb-8">-->
            <!--    <div class="flex items-center justify-center mb-4">-->
            <!--        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">-->
            <!--            <i class="fas fa-baby text-green-600 text-xl"></i>-->
            <!--        </div>-->
            <!--        <div class="text-left">-->
            <!--            <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800">-->
            <!--                Early Communication Pathway-->
            <!--            </h2>-->
            <!--            <p class="museo-sans text-lg text-gray-600">Ages 1–3 • The earlier we start, the better the outcomes</p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            
            <!-- Timeline Section -->
            <div class="mb-8 fade-in">
                <h3 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 text-center mb-6">Developmental Stages</h3>
                
                <div class="timeline-container">
                    <div class="timeline-line">
                        <div class="timeline-progress" id="timelineProgress"></div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4">
                        <!-- Stage 1 -->
                        <div class="timeline-step">
                            <div class="timeline-circle bg-blue-100">
                                <i class="fas fa-hand-point-up text-[#0B87C5] text-lg"></i>
                            </div>
                            <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-1">Exploring Words</h4>
                            <p class="museo-sans text-base text-gray-600 mb-1">12–18 months</p>
                            <p class="museo-sans text-sm text-gray-500">Points, gestures, 5–20 words</p>
                        </div>
                        
                        <!-- Stage 2 -->
                        <div class="timeline-step">
                            <div class="timeline-circle bg-green-100">
                                <i class="fas fa-comments text-green-600 text-lg"></i>
                            </div>
                            <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-1">Understanding & Expressing</h4>
                            <p class="museo-sans text-base text-gray-600 mb-1">18–24 months</p>
                            <p class="museo-sans text-sm text-gray-500">Combining 2 words, understanding verbs</p>
                        </div>
                        
                        <!-- Stage 3 -->
                        <div class="timeline-step">
                            <div class="timeline-circle bg-orange-100">
                                <i class="fas fa-building text-orange-600 text-lg"></i>
                            </div>
                            <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-1">Building Sentences</h4>
                            <p class="museo-sans text-base text-gray-600 mb-1">24–36 months</p>
                            <p class="museo-sans text-sm text-gray-500">Short phrases, naming objects, asking questions</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Benefits Section -->
            <div class="mb-8 fade-in">
                <h3 class="museo-rounded text-xl lg:text-2xl font-bold text-gray-800 text-center mb-4">What You'll Receive</h3>
                
                <div class="flex flex-wrap justify-center">
                    <div class="benefit-pill">
                        <i class="fas fa-clipboard-check text-green-600 mr-2"></i>
                        <span class="museo-sans text-base">Developmental screener</span>
                    </div>
                    <div class="benefit-pill">
                        <i class="fas fa-user-cog text-[#0B87C5] mr-2"></i>
                        <span class="museo-sans text-base">Personalized therapy plan</span>
                    </div>
                    <div class="benefit-pill">
                        <i class="fas fa-calendar-week text-orange-600 mr-2"></i>
                        <span class="museo-sans text-base">Weekly coaching</span>
                    </div>
                    <div class="benefit-pill">
                        <i class="fas fa-chart-line text-purple-600 mr-2"></i>
                        <span class="museo-sans text-base">Biweekly updates</span>
                    </div>
                    <div class="benefit-pill">
                        <i class="fas fa-graduation-cap text-yellow-600 mr-2"></i>
                        <span class="museo-sans text-base">School readiness transition</span>
                    </div>
                </div>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center fade-in">
                <div class="bg-yellow-50 rounded-xl p-4 mb-6 border border-yellow-200">
                    <h3 class="museo-rounded text-xl lg:text-2xl font-bold text-gray-800 mb-2">
                        <i class="fas fa-question-circle text-yellow-600 mr-2"></i>
                        Not sure if your toddler needs help?
                    </h3>
                    <p class="museo-sans text-base lg:text-lg text-gray-600 mb-4">
                        Start with our assessment options designed for young children
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center">
                        <button class="btn-primary">
                            <i class="fas fa-clipboard-list mr-2"></i>
                            <span class="museo-sans text-base">1–3 Year Screener</span>
                        </button>
                        <button class="btn-secondary">
                            <i class="fas fa-calendar mr-2"></i>
                            <span class="museo-sans text-base">Book Consultation</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Professional Career Pathway Section - Full Width -->
<section class="bg-white py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        
        
                <div class="text-center mb-12 fade-in">
            <h2 class="font-black text-4xl md:text-6xl text-text-gray mb-4 museo-rounded">
                Professional <span class="text-primary-blue">Career Pathway</span>
            </h2>
            <p class="text-lg text-gray-600 museo-sans">
                We train every therapist who joins us, before assigning a single client. Orientation covers ethics, live observations, formats, and reporting.
            </p>
        </div>

        
        <!-- Header Section -->
        <!--<div class="flex items-center justify-between mb-6 fade-in">-->
        <!--    <div class="flex items-center">-->
        <!--        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mr-4">-->
        <!--            <i class="fas fa-user-md text-orange-600 text-xl"></i>-->
        <!--        </div>-->
        <!--        <div>-->
        <!--            <div class="training-badge mb-2">-->
        <!--                <i class="fas fa-graduation-cap mr-1 text-xs"></i>COMPREHENSIVE TRAINING-->
        <!--            </div>-->
        <!--            <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800">-->
        <!--                Professional Career Pathway-->
        <!--            </h2>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        <!-- Introduction & Orientation -->
        <div class="mb-6 fade-in">
            <!--<p class="museo-sans text-lg lg:text-xl text-gray-600 mb-4">-->
            <!--    We train every therapist who joins us, before assigning a single client. Orientation covers ethics, live observations, formats, and reporting.-->
            <!--</p>-->
            
            <!-- Orientation Overview -->
            <div class="orientation-box">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="orientation-item">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <i class="fas fa-balance-scale text-orange-600"></i>
                        </div>
                        <p class="museo-sans text-sm font-medium text-gray-700">Ethics</p>
                    </div>
                    <div class="orientation-item">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <i class="fas fa-eye text-orange-600"></i>
                        </div>
                        <p class="museo-sans text-sm font-medium text-gray-700">Live Observations</p>
                    </div>
                    <div class="orientation-item">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <i class="fas fa-file-alt text-orange-600"></i>
                        </div>
                        <p class="museo-sans text-sm font-medium text-gray-700">Formats</p>
                    </div>
                    <div class="orientation-item">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <i class="fas fa-chart-bar text-orange-600"></i>
                        </div>
                        <p class="museo-sans text-sm font-medium text-gray-700">Reporting</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Career Tracks -->
        <div class="mb-6 fade-in">
            <h3 class="museo-rounded text-xl lg:text-2xl font-bold text-gray-800 mb-4">
                Then You Choose Your Track:
            </h3>
            
            <div class="flex flex-wrap">
                <div class="track-pill">
                    <i class="fas fa-child text-[#0B87C5] mr-2"></i>
                    <span class="museo-sans text-base">Early Intervention & School Therapy</span>
                </div>
                <div class="track-pill">
                    <i class="fas fa-hospital text-red-600 mr-2"></i>
                    <span class="museo-sans text-base">Medical SLP (Hospitals & Rehab)</span>
                </div>
                <div class="track-pill">
                    <i class="fas fa-laptop text-green-600 mr-2"></i>
                    <span class="museo-sans text-base">Online Speech & Swallowing Therapy</span>
                </div>
            </div>
        </div>
        
        <!-- Support Section -->
        <div class="mb-6 fade-in">
            <h3 class="museo-rounded text-xl lg:text-2xl font-bold text-gray-800 mb-4">
                We support you with:
            </h3>
            
            <div class="flex flex-wrap">
                <div class="support-pill">
                    <i class="fas fa-users text-[#0B87C5] mr-2"></i>
                    <span class="museo-sans text-base">Ongoing case discussions</span>
                </div>
                <div class="support-pill">
                    <i class="fas fa-tools text-green-600 mr-2"></i>
                    <span class="museo-sans text-base">Therapy tools & workshops</span>
                </div>
                <div class="support-pill">
                    <i class="fas fa-expand-arrows-alt text-orange-600 mr-2"></i>
                    <span class="museo-sans text-base">Flexibility to grow in your style</span>
                </div>
            </div>
        </div>
        
        <!-- Philosophy & CTA -->
        <div class="fade-in">
            <div class="quote-box mb-6">
                <p class="museo-sans text-lg lg:text-xl text-gray-700 text-center font-medium italic">
                    Whether you're starting or restarting, we keep it simple, ethical, and meaningful.
                </p>
            </div>
            
            <div class="text-center">
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="btn-primary">
                        <i class="fas fa-paper-plane mr-2"></i>
                        <span class="museo-sans text-base">Apply Now</span>
                    </button>
                    <button class="btn-secondary">
                        <i class="fas fa-eye mr-2"></i>
                        <span class="museo-sans text-base">Intern or Observe</span>
                    </button>
                    <button class="btn-tertiary">
                        <i class="fas fa-phone mr-2"></i>
                        <span class="museo-sans text-base">Book a Call</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


    <?php include('footer.php');?>


<!-- Professional Career Pathway Section - Full Width -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -30px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);
        
        // Observe fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });
        
        // Add click effects to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.4);
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
        
        // Add hover effects to pills
        document.querySelectorAll('.track-pill, .support-pill').forEach(pill => {
            pill.addEventListener('mouseenter', function() {
                if (this.classList.contains('track-pill')) {
                    this.style.transform = 'translateY(-2px)';
                } else {
                    this.style.transform = 'translateX(4px)';
                }
            });
            
            pill.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) translateX(0)';
            });
        });
    });
</script>


    
     <!-- Early Intervention Section - Redesigned -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    
                    // Animate timeline progress
                    if (entry.target.querySelector('#timelineProgress')) {
                        setTimeout(() => {
                            document.getElementById('timelineProgress').style.width = '100%';
                        }, 500);
                    }
                }
            });
        }, observerOptions);
        
        // Observe fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });
        
        // Add click effects to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.4);
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
        
        // Add hover effects to benefit pills
        document.querySelectorAll('.benefit-pill').forEach(pill => {
            pill.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            pill.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>

        <!-- The Therapy Pathway Section -->
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
            document.querySelectorAll('.stagger-item').forEach(el => {
                observer.observe(el);
            });
            
            // Add click effects to buttons
            document.querySelectorAll('button').forEach(button => {
                button.addEventListener('click', function(e) {
                    // Create ripple effect
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(255, 255, 255, 0.4);
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
            
            // Add hover effects to step cards
            document.querySelectorAll('.step-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
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
    
    
    <!-- Clinical Pathways Hero Section -->
    <script>
        // Add smooth scrolling and interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Animate stats when they come into view
            const stats = document.querySelectorAll('.text-3xl.font-bold');
            
            const animateStats = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = entry.target;
                        const finalValue = target.textContent;
                        const numericValue = parseInt(finalValue.replace(/[^\d]/g, ''));
                        
                        if (!isNaN(numericValue)) {
                            let currentValue = 0;
                            const increment = numericValue / 50;
                            const timer = setInterval(() => {
                                currentValue += increment;
                                if (currentValue >= numericValue) {
                                    target.textContent = finalValue;
                                    clearInterval(timer);
                                } else {
                                    const suffix = finalValue.includes('%') ? '%' : (finalValue.includes('+') ? '+' : '');
                                    target.textContent = Math.floor(currentValue) + suffix;
                                }
                            }, 30);
                        }
                        observer.unobserve(target);
                    }
                });
            };
            
            const observer = new IntersectionObserver(animateStats, {
                threshold: 0.5
            });
            
            stats.forEach(stat => observer.observe(stat));
            
            // Add click effects to buttons
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Create ripple effect
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });
    </script>
    
        <!-- How We Plan Your Therapy Section -->

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
        document.querySelectorAll('.stagger-item').forEach(el => {
            observer.observe(el);
        });
        
        // Add hover effects to tool badges
        document.querySelectorAll('.tool-badge').forEach(badge => {
            badge.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });
            
            badge.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
        
        // Add hover effects to age cards
        document.querySelectorAll('.age-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    });
</script>

    <!-- What We Use in Therapy Section -->

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
        document.querySelectorAll('.stagger-item').forEach(el => {
            observer.observe(el);
        });
        
        // Add hover effects to tool items
        document.querySelectorAll('.tool-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(8px)';
                this.style.borderColor = '#0B87C5';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
                this.style.borderColor = '#E5E7EB';
            });
        });
        
        // Add click effects to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.4);
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
        
        // Image placeholder hover effects
        document.querySelectorAll('.image-placeholder').forEach(placeholder => {
            placeholder.addEventListener('mouseenter', function() {
                this.style.background = '#EBF8FF';
                this.style.borderColor = '#0B87C5';
            });
            
            placeholder.addEventListener('mouseleave', function() {
                this.style.background = '#F3F4F6';
                this.style.borderColor = '#D1D5DB';
            });
        });
    });
</script>


    <style>
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }
        
        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    </style>
</body>
</html>