<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partnership Process - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
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
    <style>
        .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', sans-serif; }
        
       .hero-gradient {
    background: linear-gradient(135deg, #F9F0E5 0%, #ffffff 50%, #F9F0E5 100%);
}
        
        
        .process-card {
            transition: all 0.3s ease;
            position: relative;
        }
        
        .process-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
        }
        
        .icon-float {
            /*animation: iconFloat 3s ease-in-out infinite;*/
        }
        
        @keyframes iconFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }
        
        .visual-box {
            transition: all 0.3s ease;
        }
        
        .visual-box:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
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
        
        .step-number {
            position: absolute;
            top: -1rem;
            left: -1rem;
            width: 3rem;
            height: 3rem;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 900;
            color: #0B87C5;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }
        
        .connector-line {
            position: absolute;
            top: 50%;
            right: -2rem;
            width: 4rem;
            height: 2px;
            background: #e5e7eb;
            transform: translateY(-50%);
            z-index: 1;
        }
        
        .connector-line::after {
            content: '';
            position: absolute;
            right: -6px;
            top: -4px;
            width: 0;
            height: 0;
            border-left: 6px solid #e5e7eb;
            border-top: 4px solid transparent;
            border-bottom: 4px solid transparent;
        }
        
        @media (max-width: 1024px) {
            .connector-line {
                display: none;
            }
        }
    </style>
</head>

<section class="hero-gradient pt-10 pb-20 px-4">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in">
            <h2 class="museo-rounded text-4xl md:text-6xl text-primary-gray mb-6 leading-tight">
                How to <span class="text-primary-blue">Partner With Us</span>
            </h2>
        </div>

        <!-- Process Cards -->
        <div class="grid lg:grid-cols-4 gap-8 relative">
            <!-- Step 1: Connect -->
            <div class="process-card bg-white rounded-2xl p-6 shadow-lg fade-in" style="animation-delay: 0.1s;">
                <div class="connector-line hidden lg:block"></div>
                
                <div class="mb-6">
                    <div class="w-16 h-16 bg-primary-blue rounded-2xl flex items-center justify-center mx-auto mb-4 icon-float">
                        <i class="fas fa-phone-alt text-2xl text-white"></i>
                    </div>
                    <h3 class="museo-rounded text-xl text-primary-gray text-center mb-2">
                        Step 1: Connect
                    </h3>
                    <!--<p class="museo text-xs text-primary-blue opacity-70 uppercase tracking-wide text-center">Initial Discovery</p>-->
                </div>
                
                <p class="museo text-sm text-primary-gray leading-relaxed mb-6 text-center">
                    Reach out via email or phone. We'll set up a quick discovery call to understand your case load and specialty focus.
                </p>
                
                <!-- Contact Methods -->
                <!--<div class="space-y-3">-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-phone text-lg text-primary-blue mr-3 icon-float"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Phone Call</p>-->
                <!--    </div>-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-envelope text-lg text-primary-blue mr-3 icon-float" style="animation-delay: 0.5s;"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Email Inquiry</p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

            <!-- Step 2: Co-Design -->
            <div class="process-card bg-white rounded-2xl p-6 shadow-lg fade-in" style="animation-delay: 0.2s;">
                <div class="connector-line hidden lg:block"></div>
                
                <div class="mb-6">
                    <div class="w-16 h-16 bg-primary-green rounded-2xl flex items-center justify-center mx-auto mb-4 icon-float" style="animation-delay: 1s;">
                        <i class="fas fa-puzzle-piece text-2xl text-white"></i>
                    </div>
                    <h3 class="museo-rounded text-xl text-primary-gray text-center mb-2">
                        Step 2: Co-create a Plan
                    </h3>
                    <!--<p class="museo text-xs text-primary-green opacity-70 uppercase tracking-wide text-center">Custom Planning</p>-->
                </div>
                
                <p class="museo text-sm text-primary-gray leading-relaxed mb-6 text-center">
                  Whether you need condition-specific support, full time or collaborative model , we’ll create a structure that works with your facility’s rhythm and needs 
                </p>
                
                <!-- Service Options -->
                <!--<div class="space-y-3">-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-clock text-lg text-primary-green mr-3 icon-float" style="animation-delay: 1.5s;"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Part-time</p>-->
                <!--    </div>-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-sync-alt text-lg text-primary-green mr-3 icon-float" style="animation-delay: 2s;"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Rotating</p>-->
                <!--    </div>-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-user-md text-lg text-primary-green mr-3 icon-float" style="animation-delay: 2.5s;"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Condition-specific</p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

            <!-- Step 3: Formalize -->
            <div class="process-card bg-white rounded-2xl p-6 shadow-lg fade-in" style="animation-delay: 0.3s;">
                <!--<div class="step-number museo-rounded">3</div>-->
                <div class="connector-line hidden lg:block"></div>
                
                <div class="mb-6">
                    <div class="w-16 h-16 bg-primary-orange rounded-2xl flex items-center justify-center mx-auto mb-4 icon-float" style="animation-delay: 3s;">
                        <i class="fas fa-file-signature text-2xl text-white"></i>
                    </div>
                    <h3 class="museo-rounded text-xl text-primary-gray text-center mb-2">
                        Step 3: Agreement & Orientation
                    </h3>
                    <!--<p class="museo text-xs text-primary-orange opacity-70 uppercase tracking-wide text-center">Agreement & Training</p>-->
                </div>
                
                <p class="museo text-sm text-primary-gray leading-relaxed mb-6 text-center">
                    We finalize an agreement and begin therapist orientation tailored to your center's systems and expectations.
                </p>
                
                <!-- Process Steps -->
                <!--<div class="space-y-3">-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-handshake text-lg text-primary-orange mr-3 icon-float" style="animation-delay: 3.5s;"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Agreement</p>-->
                <!--    </div>-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-graduation-cap text-lg text-primary-orange mr-3 icon-float" style="animation-delay: 4s;"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Orientation</p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

            <!-- Step 4: Action -->
            <div class="process-card bg-white rounded-2xl p-6 shadow-lg fade-in" style="animation-delay: 0.4s;">
                <!--<div class="step-number museo-rounded">4</div>-->
                
                <div class="mb-6">
                    <div class="w-16 h-16 bg-primary-yellow rounded-2xl flex items-center justify-center mx-auto mb-4 icon-float" style="animation-delay: 4.5s;">
                        <i class="fas fa-rocket text-2xl text-primary-gray"></i>
                    </div>
                    <h3 class="museo-rounded text-xl text-primary-gray text-center mb-2">
                        Step 4: Partnership in Action
                    </h3>
                    <!--<p class="museo text-xs text-primary-yellow opacity-70 uppercase tracking-wide text-center">Active Services</p>-->
                </div>
                
                <p class="museo text-sm text-primary-gray leading-relaxed mb-6 text-center">
                    Services begin with clear documentation, coordination with your clinical team, and consistent tracking of patient progress.
                </p>
                
                <!-- Key Features -->
                <!--<div class="space-y-3">-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-clipboard-list text-lg text-primary-gray mr-3 icon-float" style="animation-delay: 5s;"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Documentation</p>-->
                <!--    </div>-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-users text-lg text-primary-gray mr-3 icon-float" style="animation-delay: 5.5s;"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Coordination</p>-->
                <!--    </div>-->
                <!--    <div class="visual-box bg-primary-cream p-3 rounded-lg flex items-center">-->
                <!--        <i class="fas fa-chart-line text-lg text-primary-gray mr-3 icon-float" style="animation-delay: 6s;"></i>-->
                <!--        <p class="museo text-sm text-primary-gray">Progress Tracking</p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>

        <!-- Call to Action -->
           <div class="fade-in-up stagger-4 flex justify-center mt-6 gap-4 mb-8">
                    <a href="#form-direct" class="bg-primary-blue text-white px-8 py-4 rounded-xl museo-rounded text-lg hover:bg-primary-blue transition-all duration-300 hover:scale-105 shadow-lg">
                        <i class="fas fa-handshake mr-2"></i>
                        Partner With Us
                    </a>
             
                </div>
    </div>
</section>

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

        // Process card interactions
        document.querySelectorAll('.process-card').forEach((card, index) => {
            card.addEventListener('mouseenter', function() {
                const stepNumber = this.querySelector('.step-number');
                if (stepNumber) {
                    stepNumber.style.transform = 'scale(1.1)';
                    stepNumber.style.boxShadow = '0 8px 25px rgba(11, 135, 197, 0.3)';
                }
            });
            
            card.addEventListener('mouseleave', function() {
                const stepNumber = this.querySelector('.step-number');
                if (stepNumber) {
                    stepNumber.style.transform = 'scale(1)';
                    stepNumber.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.1)';
                }
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

</html>