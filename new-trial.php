<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Section - Talking Tales</title>
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
                        'museo-rounded': ['Nunito', 'sans-serif'],
                        'museo': ['Nunito', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .museo-rounded { font-family: 'Nunito', sans-serif; font-weight: 700; }
        .museo { font-family: 'Nunito', sans-serif; font-weight: 400; }
        
        .service-card {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }
        
        .model-tag {
            transition: all 0.3s ease;
        }
        
        .model-tag:hover {
            transform: scale(1.05);
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
        
        .check-icon {
            animation: checkPulse 2s ease-in-out infinite;
        }
        
        @keyframes checkPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
    </style>
</head>

<section class="bg-white py-20 px-4">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in">
            <h2 class="museo-rounded text-4xl md:text-5xl text-primary-gray mb-6 leading-tight">
                <span class="text-primary-blue">Services</span> Offered
            </h2>
            <p class="museo text-xl text-primary-gray opacity-80 max-w-4xl mx-auto leading-relaxed mb-8">
                Our offerings are flexible — available as <strong>case-based</strong>, <strong>scheduled</strong>, or <strong>on-request</strong> therapy models, depending on your hospital's workflow and patient load.
            </p>
            
            <!-- Service Models -->
            <div class="flex flex-wrap justify-center gap-4">
                <div class="model-tag bg-primary-blue text-white px-6 py-3 rounded-full museo-rounded">
                    <i class="fas fa-clipboard-list mr-2"></i>
                    Case-Based
                </div>
                <div class="model-tag bg-primary-green text-white px-6 py-3 rounded-full museo-rounded">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    Scheduled
                </div>
                <div class="model-tag bg-primary-orange text-white px-6 py-3 rounded-full museo-rounded">
                    <i class="fas fa-bell mr-2"></i>
                    On-Request
                </div>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Communication Therapy -->
            <div class="service-card bg-primary-cream rounded-3xl overflow-hidden fade-in">
                <!-- Image Header -->
                <div class="h-64 bg-gradient-to-br from-primary-blue to-blue-600 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Speech therapist working with patient" 
                         class="w-full h-full object-cover opacity-20">
                    
                    <!-- Overlay Content -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-20 h-20 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-comments text-3xl"></i>
                            </div>
                            <h3 class="museo-rounded text-2xl md:text-3xl">Communication Therapy</h3>
                            <p class="museo opacity-90">Comprehensive speech & language rehabilitation</p>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-8">
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-primary-blue rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs check-icon"></i>
                            </div>
                            <div>
                                <h4 class="museo-rounded text-lg text-primary-gray mb-1">Aphasia, apraxia & dysarthria management</h4>
                                <p class="museo text-sm text-primary-gray opacity-70">Specialized treatment for speech motor disorders</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-primary-blue rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs check-icon"></i>
                            </div>
                            <div>
                                <h4 class="museo-rounded text-lg text-primary-gray mb-1">Cognitive-communication rehabilitation</h4>
                                <p class="museo text-sm text-primary-gray opacity-70">Therapy for thinking and communication skills</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-primary-blue rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs check-icon"></i>
                            </div>
                            <div>
                                <h4 class="museo-rounded text-lg text-primary-gray mb-1">Tracheostomy communication (AAC/speaking valve support)</h4>
                                <p class="museo text-sm text-primary-gray opacity-70">Alternative communication methods and device training</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-primary-blue rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs check-icon"></i>
                            </div>
                            <div>
                                <h4 class="museo-rounded text-lg text-primary-gray mb-1">Voice therapy post-surgery or post-radiation</h4>
                                <p class="museo text-sm text-primary-gray opacity-70">Vocal rehabilitation following medical procedures</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA -->
                    <div class="mt-8 pt-6 border-t border-primary-blue border-opacity-20">
                        <button class="w-full bg-primary-blue text-white py-4 rounded-xl museo-rounded hover:bg-blue-600 transition-colors">
                            <i class="fas fa-info-circle mr-2"></i>
                            Learn More About Communication Therapy
                        </button>
                    </div>
                </div>
            </div>

            <!-- Swallowing & Feeding Support -->
            <div class="service-card bg-primary-cream rounded-3xl overflow-hidden fade-in" style="animation-delay: 0.2s;">
                <!-- Image Header -->
                <div class="h-64 bg-gradient-to-br from-primary-green to-green-600 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Healthcare professional conducting swallowing evaluation" 
                         class="w-full h-full object-cover opacity-20">
                    
                    <!-- Overlay Content -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-20 h-20 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-utensils text-3xl"></i>
                            </div>
                            <h3 class="museo-rounded text-2xl md:text-3xl">Swallowing & Feeding Support</h3>
                            <p class="museo opacity-90">Comprehensive dysphagia management</p>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-8">
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-primary-green rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs check-icon"></i>
                            </div>
                            <div>
                                <h4 class="museo-rounded text-lg text-primary-gray mb-1">Clinical bedside swallowing evaluations</h4>
                                <p class="museo text-sm text-primary-gray opacity-70">Comprehensive assessment of swallowing function</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-primary-green rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs check-icon"></i>
                            </div>
                            <div>
                                <h4 class="museo-rounded text-lg text-primary-gray mb-1">Dysphagia therapy for neurological and oncology patients</h4>
                                <p class="museo text-sm text-primary-gray opacity-70">Specialized care for complex medical conditions</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-primary-green rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs check-icon"></i>
                            </div>
                            <div>
                                <h4 class="museo-rounded text-lg text-primary-gray mb-1">Tracheostomy secretion management</h4>
                                <p class="museo text-sm text-primary-gray opacity-70">Expert care for tracheostomy-related challenges</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-primary-green rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <i class="fas fa-check text-white text-xs check-icon"></i>
                            </div>
                            <div>
                                <h4 class="museo-rounded text-lg text-primary-gray mb-1">Therapy planning, caregiver education & outcome tracking</h4>
                                <p class="museo text-sm text-primary-gray opacity-70">Comprehensive care coordination and family support</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA -->
                    <div class="mt-8 pt-6 border-t border-primary-green border-opacity-20">
                        <button class="w-full bg-primary-green text-white py-4 rounded-xl museo-rounded hover:bg-green-600 transition-colors">
                            <i class="fas fa-info-circle mr-2"></i>
                            Learn More About Swallowing Support
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for fade-in animations
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

        // Service card hover effects
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.borderColor = 'transparent';
            });
        });

        // Model tag interactions
        document.querySelectorAll('.model-tag').forEach(tag => {
            tag.addEventListener('mouseenter', function() {
                this.style.boxShadow = '0 10px 25px -5px rgba(0, 0, 0, 0.2)';
            });
            
            tag.addEventListener('mouseleave', function() {
                this.style.boxShadow = 'none';
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
        });
    });
</script>

</html>