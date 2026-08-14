<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5-Step Collaboration Model - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans+Rounded:wght@300;400;500;700&family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue1': '#0B87C5',
                        'primary-yellow1': '#FFC73C', 
                        'primary-orange1': '#F36E3B',
                        'primary-green1': '#3DD288',
                        'primary-gray1': '#4A4A4A',
                        'primary-cream': '#F9F0E5'
                    },
                    fontFamily: {
                        'museo-rounded': ['Museo Sans Rounded', 'sans-serif'],
                        'museo': ['Museo Sans', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; font-weight: 700; }
        .museo { font-family: 'Museo Sans', sans-serif; font-weight: 400; }
        
        .step-card {
            transition: all 0.4s ease;
            position: relative;
        }
        
        .step-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }
        
        .step-number {
            position: absolute;
            top: -1.5rem;
            left: 2rem;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            font-weight: 900;
            color: white;
            z-index: 10;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .step-connector {
            position: absolute;
            bottom: -2rem;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 4rem;
            background: #e5e7eb;
            z-index: 1;
        }
        
        .step-connector::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: -4px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 6px solid #e5e7eb;
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
        
        .highlight-item {
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        
        .highlight-item:hover {
            border-left-color: currentColor;
            transform: translateX(4px);
        }
        
        .delivery-option {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .delivery-option:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .progress-flow {
            position: relative;
        }
        
        .progress-flow::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 1.5rem;
            width: 2px;
            background: #e5e7eb;
            z-index: 1;
        }
        
        .flow-item {
            position: relative;
            z-index: 2;
            background: white;
            margin-left: 3rem;
            padding-left: 1rem;
        }
        
        .flow-dot {
            position: absolute;
            left: -4.5rem;
            top: 0.75rem;
            width: 0.75rem;
            height: 0.75rem;
            border-radius: 50%;
            z-index: 3;
        }
    </style>
</head>

<body>
    



<section class="bg-primary-cream py-14 px-4">
    <div class="container mx-auto max-w-6xl">
        <!-- Section Header -->
        
                <div class="text-center mb-12 fade-in leading-1">
            <h2 class="font-black text-4xl md:text-6xl text-text-gray mb-4 museo-rounded">
                Our <span class="text-primary-blue">5-Step School</span> <br>Collaboration Model
            </h2>
            <!--<p class="text-lg text-text-gray museo-sans">-->
            <!--    We provide specialized services for adult and geriatric populations, including:-->
            <!--</p>-->
        </div>

        
        <!--        <div class="max-w-4xl mx-auto text-center mb-17">-->
        <!--    <h1 class="text-5xl md:text-6xl font-museo-rounded font-bold text-text-gray mb-6 tracking-tight">-->
        <!--        Our <span class="font-bold text-primary-blue">5-Step School</span>  Collaboration Model-->
        <!--    </h1>-->
        <!--</div>-->

        <!--<div class="text-center mb-16 fade-in">-->
            <!--<div class="inline-flex items-center bg-white px-6 py-3 rounded-full shadow-sm mb-6">-->
            <!--    <i class="fas fa-cogs text-primary-blue mr-3"></i>-->
            <!--    <span class="museo-rounded text-primary-blue">Systematic Approach</span>-->
            <!--</div>-->
        <!--    <h2 class="museo-rounded text-4xl md:text-5xl text-primary-gray mb-6 leading-tight">-->
        <!--        Our <span class="text-primary-blue">5-Step School</span><br>-->
        <!--        Collaboration Model-->
        <!--    </h2>-->
        <!--</div>-->

        <!-- Steps Container -->
        <div class="space-y-8">
            <!-- Step 1: Teacher Awareness & Training -->
            <div class="step-card bg-white rounded-3xl p-8 relative fade-in" style="animation-delay: 0.1s;">
                <div class="step-number bg-primary-blue museo-rounded">1</div>
                <div class="step-connector"></div>
                
                <div class="grid lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-1">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-primary-blue1 bg-opacity-10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-chalkboard-teacher text-2xl text-primary-blue"></i>
                            </div>
                            <div>
                                <h3 class="museo-rounded text-xl md:text-2xl text-primary-gray">Teacher Awareness & Training</h3>
                                <p class="museo text-sm text-primary-blue1 opacity-70">Foundation Building</p>
                            </div>
                        </div>
                        <p class="museo text-primary-gray1 opacity-80 mb-6">
                            We empower your educators to become confident first identifiers — without adding to their workload.
                        </p>
                    </div>
                    
                    <div class="lg:col-span-2">
                        <h4 class="museo-rounded text-lg text-primary-gray mb-4">Training covers:</h4>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="highlight-item p-4 bg-primary-cream rounded-xl text-primary-blue">
                                <i class="fas fa-flag text-lg mb-2"></i>
                                <h5 class="museo-rounded text-sm mb-1">Red Flags</h5>
                                <p class="museo text-xs opacity-80">Recognizing age-specific red flags</p>
                            </div>
                            <div class="highlight-item p-4 bg-primary-cream rounded-xl text-primary-blue">
                                <i class="fas fa-hand-point-up text-lg mb-2"></i>
                                <h5 class="museo-rounded text-sm mb-1">Referrals</h5>
                                <p class="museo text-xs opacity-80">How and when to make referrals</p>
                            </div>
                            <div class="highlight-item p-4 bg-primary-cream rounded-xl text-primary-blue">
                                <i class="fas fa-chart-line text-lg mb-2"></i>
                                <h5 class="museo-rounded text-sm mb-1">Benchmarks</h5>
                                <p class="museo text-xs opacity-80">Understanding developmental benchmarks</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: In-School Screening -->
            <div class="step-card bg-white rounded-3xl p-8 relative fade-in" style="animation-delay: 0.2s;">
                <div class="step-number bg-primary-green museo-rounded">2</div>
                <div class="step-connector"></div>
                
                <div class="grid lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-1">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-primary-green1 bg-opacity-10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-search text-2xl text-primary-green"></i>
                            </div>
                            <div>
                                <h3 class="museo-rounded text-xl md:text-2xl text-primary-gray">In-School Screening of Referred Children</h3>
                                <p class="museo text-sm text-primary-green1 opacity-70">Assessment Phase</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-2">
                        <h4 class="museo-rounded text-lg text-primary-gray mb-4">Our therapists conduct:</h4>
                        <div class="space-y-3">
                            <div class="highlight-item flex items-start p-3 bg-primary-cream rounded-lg text-primary-green">
                                <i class="fas fa-user text-lg mr-3 mt-1"></i>
                                <span class="museo text-sm">One-on-one screenings with students</span>
                            </div>
                            <div class="highlight-item flex items-start p-3 bg-primary-cream rounded-lg text-primary-green">
                                <i class="fas fa-eye text-lg mr-3 mt-1"></i>
                                <span class="museo text-sm">Classroom observations for natural interaction cues</span>
                            </div>
                            <div class="highlight-item flex items-start p-3 bg-primary-cream rounded-lg text-primary-green">
                                <i class="fas fa-clipboard-list text-lg mr-3 mt-1"></i>
                                <span class="museo text-sm">Brief reports with referral guidance for parents and school staff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Parent Communication Support -->
            <div class="step-card bg-white rounded-3xl p-8 relative fade-in" style="animation-delay: 0.3s;">
                <div class="step-number bg-primary-orange museo-rounded">3</div>
                <div class="step-connector"></div>
                
                <div class="grid lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-1">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-primary-orange1 bg-opacity-10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-comments text-2xl text-primary-orange"></i>
                            </div>
                            <div>
                                <h3 class="museo-rounded text-xl md:text-2xl text-primary-gray">Parent Communication Support</h3>
                                <p class="museo text-sm text-primary-orange1 opacity-70">Bridge Building</p>
                            </div>
                        </div>
                        <p class="museo text-primary-gray1 opacity-80">
                            We assist schools in clinical conversations with parents by:
                        </p>
                    </div>
                    
                    <div class="lg:col-span-2">
                        <div class="progress-flow space-y-4">
                            <div class="flow-item">
                                <div class="flow-dot bg-primary-orange"></div>
                                <h5 class="museo-rounded text-primary-gray mb-1">Explaining screening outcomes with empathy</h5>
                                <p class="museo text-sm text-primary-gray1 opacity-70">Sensitive communication approach</p>
                            </div>
                            <div class="flow-item">
                                <div class="flow-dot bg-primary-orange"></div>
                                <h5 class="museo-rounded text-primary-gray mb-1">Emphasizing early intervention</h5>
                                <p class="museo text-sm text-primary-gray1 opacity-70">Highlighting benefits of timely support</p>
                            </div>
                            <div class="flow-item">
                                <div class="flow-dot bg-primary-orange"></div>
                                <h5 class="museo-rounded text-primary-gray mb-1">Guiding the next steps toward assessment or therapy</h5>
                                <p class="museo text-sm text-primary-gray1 opacity-70">Clear pathway forward</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Therapy Planning & Execution -->
            <div class="step-card bg-white rounded-3xl p-8 relative fade-in" style="animation-delay: 0.4s;">
                <div class="step-number bg-primary-yellow museo-rounded text-primary-gray">4</div>
                <div class="step-connector"></div>
                
                <div class="grid lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-1">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-primary-yellow1 bg-opacity-20 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-cogs text-2xl text-primary-gray"></i>
                            </div>
                            <div>
                                <h3 class="museo-rounded text-xl md:text-2xl text-primary-gray">Therapy Planning & Execution</h3>
                                <p class="museo text-sm text-primary-yellow1 opacity-70">Implementation</p>
                            </div>
                        </div>
                        <p class="museo text-primary-gray1 opacity-80 mb-4">
                            If therapy is recommended, we:
                        </p>
                        <div class="space-y-2">
                            <div class="flex items-center text-sm">
                                <i class="fas fa-check text-primary-gray mr-2"></i>
                                <span class="museo text-primary-gray">Design a tailored plan for each child</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <i class="fas fa-check text-primary-gray mr-2"></i>
                                <span class="museo text-primary-gray">Share clear goals and timelines</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <i class="fas fa-check text-primary-gray mr-2"></i>
                                <span class="museo text-primary-gray">Provide progress reports to schools regularly</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-2">
                        <h4 class="museo-rounded text-lg text-primary-gray mb-6">Offer delivery models:</h4>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="delivery-option bg-primary-blue1 bg-opacity-5 p-6 rounded-xl border-2 border-primary-blue1 border-opacity-20">
                                <i class="fas fa-building text-3xl text-primary-blue mb-4"></i>
                                <h5 class="museo-rounded text-primary-gray mb-2">On-site</h5>
                                <p class="museo text-xs text-primary-gray1 opacity-70">(if space is available)</p>
                            </div>
                            <div class="delivery-option bg-primary-green1 bg-opacity-5 p-6 rounded-xl border-2 border-primary-green1 border-opacity-20">
                                <i class="fas fa-laptop text-3xl text-primary-green mb-4"></i>
                                <h5 class="museo-rounded text-primary-gray mb-2">Online</h5>
                                <p class="museo text-xs text-primary-gray1 opacity-70">(coordinated with school hours)</p>
                            </div>
                            <div class="delivery-option bg-primary-orange1 bg-opacity-5 p-6 rounded-xl border-2 border-primary-orange1 border-opacity-20">
                                <i class="fas fa-home text-3xl text-primary-orange mb-4"></i>
                                <h5 class="museo-rounded text-primary-gray mb-2">At our center</h5>
                                <p class="museo text-xs text-primary-gray1 opacity-70">(if preferred by families)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5: Ongoing Progress Monitoring -->
            <div class="step-card bg-white rounded-3xl p-8 relative fade-in" style="animation-delay: 0.5s;">
                <div class="step-number bg-primary-green museo-rounded">5</div>
                
                <div class="grid lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-1">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-primary-green1 bg-opacity-10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-chart-bar text-2xl text-primary-green"></i>
                            </div>
                            <div>
                                <h3 class="museo-rounded text-xl md:text-2xl text-primary-gray">Ongoing Progress Monitoring</h3>
                                <p class="museo text-sm text-primary-green1 opacity-70">Continuous Support</p>
                            </div>
                        </div>
                        <p class="museo text-primary-gray1 opacity-80">
                            We continue to support the learning journey by:
                        </p>
                    </div>
                    
                    <div class="lg:col-span-2">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div class="highlight-item flex items-start p-3 bg-primary-cream rounded-lg text-primary-green">
                                    <i class="fas fa-calendar-alt text-lg mr-3 mt-1"></i>
                                    <span class="museo text-sm">Sending monthly progress summaries to teachers</span>
                                </div>
                                <div class="highlight-item flex items-start p-3 bg-primary-cream rounded-lg text-primary-green">
                                    <i class="fas fa-lightbulb text-lg mr-3 mt-1"></i>
                                    <span class="museo text-sm">Recommending classroom strategies for support</span>
                                </div>
                            </div>
                            <div>
                                <div class="highlight-item flex items-start p-3 bg-primary-cream rounded-lg text-primary-green">
                                    <i class="fas fa-redo text-lg mr-3 mt-1"></i>
                                    <span class="museo text-sm">Scheduling re-screenings or follow-up evaluations as needed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
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

        // Step card interactions
        document.querySelectorAll('.step-card').forEach((card, index) => {
            card.addEventListener('mouseenter', function() {
                const stepNumber = this.querySelector('.step-number');
                if (stepNumber) {
                    stepNumber.style.transform = 'scale(1.1)';
                }
            });
            
            card.addEventListener('mouseleave', function() {
                const stepNumber = this.querySelector('.step-number');
                if (stepNumber) {
                    stepNumber.style.transform = 'scale(1)';
                }
            });
        });

        // Delivery option interactions
        document.querySelectorAll('.delivery-option').forEach(option => {
            option.addEventListener('click', function() {
                // Remove active class from all options
                document.querySelectorAll('.delivery-option').forEach(opt => {
                    opt.classList.remove('border-opacity-100', 'bg-opacity-10');
                    opt.classList.add('border-opacity-20', 'bg-opacity-5');
                });
                
                // Add active class to clicked option
                this.classList.remove('border-opacity-20', 'bg-opacity-5');
                this.classList.add('border-opacity-100', 'bg-opacity-10');
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