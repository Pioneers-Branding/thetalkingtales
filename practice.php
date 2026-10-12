<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schools & Education - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;700;800&display=swap');
        
        .museo-rounded {
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .service-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .service-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(11, 135, 197, 0.2);
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            transition: all 0.3s ease;
        }
        
        .service-card.blue::before {
            background: #0B87C5;
        }
        
        .service-card.green::before {
            background: #3DD288;
        }
        
        .service-card.orange::before {
            background: #F36E3B;
        }
        
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
        
        .stagger-animation {
            animation: slideInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(30px);
        }
        
        .stagger-animation:nth-child(1) { animation-delay: 0.1s; }
        .stagger-animation:nth-child(2) { animation-delay: 0.2s; }
        .stagger-animation:nth-child(3) { animation-delay: 0.3s; }
        
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<!-- Schools & Education Section -->
<section class="bg-white py-12 lg:py-16 relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="absolute top-10 left-5 w-24 h-24 bg-blue-100 rounded-full opacity-15"></div>
    <div class="absolute bottom-10 right-5 w-28 h-28 bg-yellow-100 rounded-full opacity-15"></div>
    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-green-100 rounded-full opacity-10"></div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Header Section -->
        <div class="text-center mb-10 lg:mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-50 rounded-xl mb-4 floating-icon">
                <i class="fas fa-graduation-cap text-2xl text-blue-600"></i>
            </div>
            <h2 class="museo-rounded text-2xl sm:text-3xl lg:text-4xl font-bold mb-3">
                <span class="text-gray-800">Schools &</span> 
                <span class="text-blue-600">Education</span>
            </h2>
            <p class="museo-sans text-base lg:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                We offer a range of services designed to help students on their communication journey within educational environments
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-12 items-center">
            <!-- Left Side - Service Models -->
            <div class="space-y-6">
                <div class="mb-8">
                    <h3 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-3">
                        Flexible Service Models for Schools
                    </h3>
                    <p class="museo-sans text-base text-gray-600 leading-relaxed">
                        Choose the approach that works best for your institution and students
                    </p>
                </div>
                
                <!-- Service Cards -->
                <div class="space-y-4">
                    <!-- Reference-Based Model -->
                    <div class="service-card blue bg-white rounded-xl p-5 lg:p-6 shadow-md border border-gray-100 stagger-animation">
                        <div class="content-overlay">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-users text-lg text-blue-600"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Reference-Based Model
                                    </h4>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed mb-3">
                                        For schools with internal referral systems, we support only students flagged by teachers or counselors.
                                    </p>
                                    <div class="flex items-center text-blue-600">
                                        <div class="w-1.5 h-1.5 bg-blue-600 rounded-full mr-2"></div>
                                        <span class="museo-sans text-xs font-medium">Teacher & Counselor Referrals</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Online Therapy Model -->
                    <div class="service-card green bg-white rounded-xl p-5 lg:p-6 shadow-md border border-gray-100 stagger-animation">
                        <div class="content-overlay">
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
                                    <div class="flex items-center text-green-600">
                                        <div class="w-1.5 h-1.5 bg-green-600 rounded-full mr-2"></div>
                                        <span class="museo-sans text-xs font-medium">Virtual Sessions Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- On-Site Therapist Model -->
                    <div class="service-card orange bg-white rounded-xl p-5 lg:p-6 shadow-md border border-gray-100 stagger-animation">
                        <div class="content-overlay">
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
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed mb-3">
                                        Our professionals visit the school on scheduled days, providing therapy in classrooms or therapy rooms.
                                    </p>
                                    <div class="flex items-center text-orange-600">
                                        <div class="w-1.5 h-1.5 bg-orange-600 rounded-full mr-2"></div>
                                        <span class="museo-sans text-xs font-medium">On-Campus Support</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Image and Decorative Elements -->
            <div class="relative">
                <!-- Main Image Container -->
                <div class="relative z-10">
                    <div class="bg-blue-50 rounded-2xl p-6 lg:p-8 relative overflow-hidden">
                        <!-- Decorative brush strokes -->
                        <div class="brush-stroke bg-blue-600 absolute -top-6 -right-6"></div>
                        <div class="brush-stroke bg-yellow-400 absolute -bottom-3 -left-3"></div>
                        <div class="brush-stroke bg-orange-500 absolute top-1/2 right-1/4"></div>
                        <div class="brush-stroke bg-green-500 absolute bottom-1/4 left-1/3"></div>
                        
                        <!-- Image placeholder with better styling -->
                        <div class="content-overlay">
                            <div class="aspect-square bg-white rounded-xl flex items-center justify-center mb-4 shadow-md">
                                <div class="text-center">
                                    <i class="fas fa-child text-4xl text-blue-300 mb-3"></i>
                                    <div class="flex items-center justify-center space-x-2 mb-2">
                                        <i class="fas fa-hand-paper text-2xl text-yellow-500"></i>
                                        <span class="text-xl">🙌</span>
                                    </div>
                                    <p class="museo-sans text-sm text-gray-500">Therapist & Student Success</p>
                                </div>
                            </div>
                            
                            <!-- Stats or benefits -->
                            <div class="grid grid-cols-2 gap-3">
                                <div class="bg-white rounded-lg p-3 text-center shadow-sm">
                                    <div class="text-xl font-bold text-blue-600 museo-rounded">500+</div>
                                    <div class="text-xs text-gray-600 museo-sans">Students</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 text-center shadow-sm">
                                    <div class="text-xl font-bold text-green-600 museo-rounded">50+</div>
                                    <div class="text-xs text-gray-600 museo-sans">Schools</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating elements -->
                <div class="absolute -top-4 -left-4 w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center shadow-md floating-icon" style="animation-delay: 0.5s;">
                    <i class="fas fa-star text-sm text-yellow-600"></i>
                </div>
                <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-green-200 rounded-full flex items-center justify-center shadow-md floating-icon" style="animation-delay: 1s;">
                    <i class="fas fa-heart text-sm text-green-600"></i>
                </div>
            </div>
        </div>

        <!-- Free Initial Screening Section -->
        <div class="mt-16 lg:mt-20">
            <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-3xl p-8 lg:p-12 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute top-0 left-0 w-40 h-40 bg-green-200 rounded-full opacity-15 -translate-x-20 -translate-y-20"></div>
                <div class="absolute bottom-0 right-0 w-48 h-48 bg-blue-200 rounded-full opacity-15 translate-x-24 translate-y-24"></div>
                <div class="absolute top-1/2 left-1/2 w-32 h-32 bg-yellow-200 rounded-full opacity-10 -translate-x-16 -translate-y-16"></div>
                
                <div class="relative z-10">
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-green-100 rounded-2xl mb-6 floating-icon">
                            <i class="fas fa-search-plus text-3xl text-green-600"></i>
                        </div>
                        <h3 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800 mb-4">
                            Initial Screening for Partner Schools
                        </h3>
                        <p class="museo-sans text-lg lg:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                            As part of our commitment to early identification and equitable care, all new school partners receive a 
                            <span class="font-semibold text-green-600">developmental screening program</span> for eligible students. This helps:
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-8 lg:gap-10 mb-10">
                        <!-- Catch Issues Early -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg border border-green-100 hover:shadow-xl transition-all duration-300 text-center group">
                            <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-eye text-2xl text-green-600"></i>
                            </div>
                            <h4 class="museo-rounded text-xl font-bold text-gray-800 mb-4">
                                Catch Issues Early
                            </h4>
                            <p class="museo-sans text-gray-600 leading-relaxed">
                                Early detection allows for timely intervention, preventing minor concerns from becoming major challenges for students.
                            </p>
                        </div>

                        <!-- Clarify Concerns -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 text-center group">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-comments text-2xl text-blue-600"></i>
                            </div>
                            <h4 class="museo-rounded text-xl font-bold text-gray-800 mb-4">
                                Clarify Concerns for Teachers and Parents
                            </h4>
                            <p class="museo-sans text-gray-600 leading-relaxed">
                                Professional assessment provides clear answers and actionable insights for educators and families.
                            </p>
                        </div>

                        <!-- Act Before Challenges Escalate -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg border border-orange-100 hover:shadow-xl transition-all duration-300 text-center group">
                            <div class="w-16 h-16 bg-orange-100 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-shield-alt text-2xl text-orange-600"></i>
                            </div>
                            <h4 class="museo-rounded text-xl font-bold text-gray-800 mb-4">
                                Act Before Challenges Escalate
                            </h4>
                            <p class="museo-sans text-gray-600 leading-relaxed">
                                Proactive intervention strategies ensure students receive support when it's most effective and impactful.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Call-to-action within the screening section -->
                    <div class="text-center">
                        <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg inline-block">
                            <h4 class="museo-rounded text-2xl font-bold text-gray-800 mb-3">
                                Start Your Screening Program Today
                            </h4>
                            <p class="museo-sans text-gray-600 mb-6 max-w-md">
                                Join our partner schools and give your students the early support they deserve
                            </p>
                            <button class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl museo-sans font-semibold transition-all duration-300 flex items-center justify-center mx-auto group">
                                <i class="fas fa-clipboard-check mr-3 group-hover:scale-110 transition-transform"></i>
                                Request Institutional Screening
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Schools Choose Us Section -->
        <div class="mt-16 lg:mt-20">
            <div class="bg-blue-50 rounded-2xl p-6 lg:p-8 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-200 rounded-full opacity-20 translate-x-16 -translate-y-16"></div>
                <div class="absolute bottom-0 left-0 w-28 h-28 bg-green-200 rounded-full opacity-20 -translate-x-14 translate-y-14"></div>
                
                <div class="relative z-10">
                    <div class="text-center mb-8">
                        <h3 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-3">
                            Why Schools Choose Talking Tales
                        </h3>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Inclusive Culture -->
                        <div class="bg-white rounded-xl p-5 shadow-md border border-blue-100 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mt-1">
                                    <i class="fas fa-heart text-lg text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Inclusive Culture, Not Just Academic Pressure
                                    </h4>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        We help schools create nurturing, understanding environments where development is supported early, not delayed.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Curriculum-Aligned -->
                        <div class="bg-white rounded-xl p-5 shadow-md border border-green-100 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mt-1">
                                    <i class="fas fa-graduation-cap text-lg text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Curriculum-Aligned Inclusion Support
                                    </h4>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        We help IB, IGCSE, Cambridge, and CBSE-i schools deliver on inclusion mandates — without adding staff or logistical strain.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Future-Ready Institution -->
                        <div class="bg-white rounded-xl p-5 shadow-md border border-yellow-100 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mt-1">
                                    <i class="fas fa-rocket text-lg text-yellow-600"></i>
                                </div>
                                <div>
                                    <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Stand Out as a Future-Ready Institution
                                    </h4>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Inclusion is now a key differentiator. Parents notice when schools offer therapy and intervention proactively.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Enhance Reputation -->
                        <div class="bg-white rounded-xl p-5 shadow-md border border-orange-100 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mt-1">
                                    <i class="fas fa-star text-lg text-orange-600"></i>
                                </div>
                                <div>
                                    <h4 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Enhance Your School's Reputation
                                    </h4>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Be known as a school that acts early, cares deeply, and supports every learner's journey.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16 lg:mt-20">
            <div class="bg-gray-800 rounded-2xl p-6 lg:p-8 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute top-0 left-0 w-24 h-24 bg-blue-600 rounded-full opacity-10 -translate-x-12 -translate-y-12"></div>
                <div class="absolute bottom-0 right-0 w-28 h-28 bg-yellow-400 rounded-full opacity-10 translate-x-14 translate-y-14"></div>
                
                <div class="relative z-10">
                    <h3 class="museo-rounded text-2xl lg:text-3xl font-bold text-white mb-3">
                        Ready to Partner with Us?
                    </h3>
                    <p class="museo-sans text-base text-gray-300 mb-6 max-w-xl mx-auto">
                        Let's discuss how our flexible speech therapy models can enhance your school's support services
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg museo-sans font-semibold transition-all duration-300 flex items-center justify-center group">
                            <i class="fas fa-calendar mr-2 group-hover:scale-110 transition-transform"></i>
                            Schedule Your Consultation
                        </button>
                        <button class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-gray-800 px-6 py-3 rounded-lg museo-sans font-semibold transition-all duration-300 flex items-center justify-center group">
                            <i class="fas fa-download mr-2 group-hover:scale-110 transition-transform"></i>
                            Download Resources
                        </button>
                    </div>
                </div>
            </div>
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

</html>