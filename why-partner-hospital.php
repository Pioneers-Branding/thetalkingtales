<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Partner With Talking Tales</title>
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
        
        .section-divider {
            background: linear-gradient(90deg, transparent, #0B87C5, transparent);
            height: 2px;
            margin: 3rem 0;
        }
        
        .benefit-row {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .benefit-row:hover {
            border-left-color: #0B87C5;
            background-color: rgba(255, 255, 255, 0.6);
            transform: translateX(8px);
        }
        
        .icon-container {
            transition: all 0.4s ease;
        }
        
        .benefit-row:hover .icon-container {
            transform: scale(1.1) rotate(5deg);
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
        
        .highlight-text {
            position: relative;
            display: inline-block;
        }
        
        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: #3DD288;
            transition: width 0.6s ease;
        }
        
        .highlight-text.animate::after {
            width: 100%;
        }
        
        .timeline-connector {
            position: relative;
        }
        
        .timeline-connector::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, #0B87C5, #3DD288);
            opacity: 0.3;
        }
    </style>
</head>

<section class="bg-primary-cream py-10 px-4 relative overflow-hidden">
    <!-- Background Pattern -->
    <!--<div class="absolute inset-0 opacity-5">-->
    <!--    <div class="absolute top-20 right-20 w-32 h-32 border-2 border-primary-blue rounded-full"></div>-->
    <!--    <div class="absolute bottom-40 left-10 w-24 h-24 bg-primary-green rounded-full"></div>-->
    <!--    <div class="absolute top-1/2 right-1/4 w-16 h-16 border-2 border-primary-orange rounded-full"></div>-->
    <!--</div>-->
    
    <div class="container mx-auto relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20 fade-in">
            <!--<div class="inline-flex items-center bg-primary-blue bg-opacity-10 px-6 py-3 rounded-full mb-6">-->
            <!--    <i class="fas fa-handshake text-primary-blue mr-3"></i>-->
            <!--    <span class="museo-rounded text-primary-blue">Partnership Excellence</span>-->
            <!--</div>-->
            <h2 class="museo-rounded text-4xl md:text-6xl text-primary-gray mb-8 leading-tight">
                Why Partner With <br>
                <span class=" text-primary-blue">Talking Tales?</span>
            </h2>
        </div>

        <!-- Benefits List -->
        <div class="max-w-6xl mx-auto">
            
            
                        <!-- Benefit 1: Hospital Training -->

            <div class="benefit-row py-12 px-8 fade-in" style="animation-delay: 0.4s;">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <div class="flex items-center mb-6">
                <div class="icon-container w-16 h-16 bg-primary-orange rounded-2xl flex items-center justify-center mr-6">
                    <i class="fas fa-comments text-2xl text-white"></i>
                </div>
                <div>
                    <span class="museo text-sm text-primary-orange opacity-80 uppercase tracking-wider">01</span>
                    <h3 class="museo-rounded text-2xl md:text-3xl text-primary-gray">
                        Communication Therapy
                    </h3>
                </div>
            </div>
            <div class="museo text-xl text-primary-gray opacity-80 mb-8 leading-relaxed space-y-2">
                <ul class="list-disc pl-5 space-y-1">
                    <li>Aphasia, apraxia & dysarthria management</li>
                    <li>Cognitive-communication rehabilitation</li>
                    <li>Tracheostomy communication (AAC/speaking valve support)</li>
                    <li>Voice therapy post-surgery or post-radiation</li>
                </ul>
            </div>
        </div>
        <div>
            <div class="text-center rounded-xl mix-blend-multiply">
                <img 
                    src="assets/rehab/Adult-Focused-transparent.webp" 
                    alt="Communication therapy illustration" 
                    class="mx-auto rounded-lg mix-blend-multiply"
                />
            </div>
        </div>
    </div>
</div>

            
             <div class="section-divider"></div>
                        <!-- Benefit 2: Hospital Training -->
<div class="benefit-row py-12 px-8 fade-in" style="animation-delay: 0.6s;">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="order-2 lg:order-1">
            <img src="assets/rehab/talking-tales_swallow.webp" alt="Swallowing therapy illustration" class="w-full rounded-2xl">
        </div>
        <div class="order-1 lg:order-2">
            <div class="flex items-center mb-6">
                <div class="icon-container w-16 h-16 bg-primary-yellow rounded-2xl flex items-center justify-center mr-6">
                    <i class="fas fa-utensils text-2xl text-primary-gray"></i>
                </div>
                <div>
                    <span class="museo text-sm text-primary-yellow opacity-80 uppercase tracking-wider">02</span>
                    <h3 class="museo-rounded text-2xl md:text-3xl text-primary-gray">
                        Swallowing & Feeding Support
                    </h3>
                </div>
            </div>
            <div class="museo text-xl text-primary-gray opacity-80 leading-relaxed space-y-2">
                <ul class="list-disc pl-5 space-y-1">
                    <li>Clinical bedside swallowing evaluations</li>
                    <li>Dysphagia therapy for neurological and oncology patients</li>
                    <li>Tracheostomy secretion management</li>
                    <li>Therapy planning, caregiver education & outcome tracking</li>
                </ul>
            </div>
        </div>
    </div>
</div>
            
             <div class="section-divider"></div>
            <!-- Benefit 3: Hospital Training -->
           <div class="benefit-row py-12 px-8 fade-in">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <div class="flex items-center mb-6">
                <div class="icon-container w-16 h-16 bg-primary-blue rounded-2xl flex items-center justify-center mr-6">
                    <i class="fas fa-hospital-user text-2xl text-white"></i>
                </div>
                <div>
                    <span class="museo text-sm text-primary-blue opacity-80 uppercase tracking-wider">03</span>
                    <h3 class="museo-rounded text-2xl md:text-3xl text-primary-gray">
                        Trained for Hospital Environments
                    </h3>
                </div>
            </div>
            <div class="museo text-xl text-primary-gray opacity-80 mb-8 leading-relaxed space-y-2">
                <p>Our therapist undergoes:</p>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Structured orientation on hospital-specific protocols</li>
                    <li>Clinical observations at similar facilities</li>
                    <li>Training on safety, documentation, infection control, and interdisciplinary coordination</li>
                </ul>
            </div>
        </div>
        <div>
            <div class="space-y-4">
                <div class="p-4 rounded-xl">
                    <img
                        src="assets/rehab/hospital_env_transparent.webp"
                        alt="Hospital workflow illustration"
                        class="w-full h-auto rounded-lg mix-blend-multiply"
                    />
                </div>
            </div>
        </div>
    </div>
</div>


            <div class="section-divider"></div>


            <!-- Benefit 5: Trusted -->
            <!--<div class="benefit-row py-12 px-8 fade-in" style="animation-delay: 0.8s;">-->
            <!--    <div class="text-center">-->
            <!--        <div class="flex items-center justify-center mb-8">-->
            <!--            <div class="icon-container w-20 h-20 bg-primary-gray rounded-3xl flex items-center justify-center mr-6">-->
            <!--                <i class="fas fa-award text-3xl text-white"></i>-->
            <!--            </div>-->
            <!--            <div class="text-left">-->
            <!--                <span class="museo text-sm text-primary-gray opacity-60 uppercase tracking-wider">05</span>-->
            <!--                <h3 class="museo-rounded text-2xl md:text-3xl text-primary-gray">-->
            <!--                    Trusted by Leading Centers-->
            <!--                </h3>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <p class="museo text-xl text-primary-gray opacity-80 mb-10 max-w-3xl mx-auto leading-relaxed">-->
            <!--            Our reputation is built on <strong class="text-primary-blue">clinical integrity</strong>, -->
            <!--            <strong class="text-primary-green">consistent communication</strong>, and -->
            <!--            <strong class="text-primary-orange">evidence-based protocols</strong>.-->
            <!--        </p>-->
                    
                    <!-- Trust Indicators -->
            <!--        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">-->
            <!--            <div class="text-center">-->
            <!--                <div class="text-4xl museo-rounded text-primary-blue mb-2">98%</div>-->
            <!--                <div class="museo text-sm text-primary-gray opacity-70">Client Satisfaction</div>-->
            <!--            </div>-->
            <!--            <div class="text-center">-->
            <!--                <div class="text-4xl museo-rounded text-primary-green mb-2">15+</div>-->
            <!--                <div class="museo text-sm text-primary-gray opacity-70">Years Experience</div>-->
            <!--            </div>-->
            <!--            <div class="text-center">-->
            <!--                <div class="text-4xl museo-rounded text-primary-orange mb-2">50+</div>-->
            <!--                <div class="museo text-sm text-primary-gray opacity-70">Partner Facilities</div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>

        <!-- Call to Action -->
        <!--<div class="mt-24 text-center fade-in" style="animation-delay: 1s;">-->
        <!--    <div class="max-w-4xl mx-auto">-->
        <!--        <h3 class="museo-rounded text-3xl md:text-4xl text-primary-gray mb-6">-->
        <!--            Ready to Experience the Difference?-->
        <!--        </h3>-->
        <!--        <p class="museo text-xl text-primary-gray opacity-80 mb-10 leading-relaxed">-->
        <!--            Join the leading medical centers that trust Talking Tales for their speech and swallowing therapy needs.-->
        <!--        </p>-->
                
        <!--        <div class="flex flex-wrap justify-center gap-6">-->
        <!--            <button class="bg-primary-blue text-white px-10 py-5 rounded-xl museo-rounded text-lg hover:bg-blue-600 transition-all duration-300 hover:scale-105 shadow-lg">-->
        <!--                <i class="fas fa-handshake mr-3"></i>-->
        <!--                Start Partnership Discussion-->
        <!--            </button>-->
        <!--            <button class="border-3 border-primary-blue text-primary-blue px-10 py-5 rounded-xl museo-rounded text-lg hover:bg-primary-blue hover:text-white transition-all duration-300">-->
        <!--                <i class="fas fa-download mr-3"></i>-->
        <!--                Download Partnership Guide-->
        <!--            </button>-->
        <!--        </div>-->
                
                <!-- Contact Strip -->
        <!--        <div class="mt-12 bg-white p-6 rounded-2xl shadow-sm">-->
        <!--            <div class="flex flex-wrap justify-center gap-8 text-sm text-primary-gray">-->
        <!--                <div class="flex items-center">-->
        <!--                    <i class="fas fa-phone text-primary-blue mr-2"></i>-->
        <!--                    <span class="museo">+1 (555) 123-4567</span>-->
        <!--                </div>-->
        <!--                <div class="flex items-center">-->
        <!--                    <i class="fas fa-envelope text-primary-green mr-2"></i>-->
        <!--                    <span class="museo">partnerships@talkingtales.com</span>-->
        <!--                </div>-->
        <!--                <div class="flex items-center">-->
        <!--                    <i class="fas fa-clock text-primary-orange mr-2"></i>-->
        <!--                    <span class="museo">24/7 Emergency Support</span>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Trigger highlight text animation
                    const highlightTexts = entry.target.querySelectorAll('.highlight-text');
                    highlightTexts.forEach((text, index) => {
                        setTimeout(() => {
                            text.classList.add('animate');
                        }, index * 200);
                    });
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(element => {
            observer.observe(element);
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

        // Benefit row progressive enhancement
        document.querySelectorAll('.benefit-row').forEach((row, index) => {
            row.addEventListener('mouseenter', function() {
                // Add subtle glow effect
                this.style.boxShadow = '0 0 30px rgba(11, 135, 197, 0.1)';
            });
            
            row.addEventListener('mouseleave', function() {
                this.style.boxShadow = 'none';
            });
        });
    });
</script>

</html>