<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal, Policy & Support - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
        <?php include('header-links.php');?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;700;800&display=swap');
        
        .museo-rounded {
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .policy-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .policy-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(11, 135, 197, 0.15);
        }
        
        .policy-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            transition: all 0.3s ease;
        }
        
        .policy-card.blue::before {
            background: #0B87C5;
        }
        
        .policy-card.green::before {
            background: #3DD288;
        }
        
        .policy-card.orange::before {
            background: #F36E3B;
        }
        
        .policy-card.yellow::before {
            background: #FFC73C;
        }
        
        .policy-card.gray::before {
            background: #4A4A4A;
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
        .stagger-animation:nth-child(4) { animation-delay: 0.4s; }
        .stagger-animation:nth-child(5) { animation-delay: 0.5s; }
        
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .highlight {
            background: linear-gradient(120deg, #FFC73C 0%, #FFC73C 100%);
            background-repeat: no-repeat;
            background-size: 100% 0.3em;
            background-position: 0 88%;
            padding: 0 4px;
        }
        
        .contact-item {
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            transform: scale(1.05);
            background: #F9F0E5;
        }
    </style>
</head>

<body class="bg-gray-50">
    
        <?php include('header.php');?>

    <!-- Header Section -->
    <section class="bg-white mt-16 py-8 lg:py-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <!--<div class="inline-flex items-center justify-center w-16 h-16 bg-blue-50 rounded-xl mb-4 floating-icon">-->
                <!--    <i class="fas fa-shield-alt text-2xl text-[#0B87C5]"></i>-->
                <!--</div>-->
                <h1 class="museo-rounded text-3xl lg:text-4xl font-bold mb-4">
                    <span class="text-gray-800">Legal, Policy, and</span> 
                    <span class="text-[#0B87C5]">Support</span>
                </h1>
                <p class="museo-sans text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Transparency, trust, and safety form the foundation of every service we offer. This section outlines the policies, terms, and support structures that guide our operations, ensuring clarity for families, schools, and institutions engaging with Talking Tales.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="bg-gray-50 py-10 lg:py-14">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Privacy Policy Section -->
            <div class="mb-12">
                <div class="policy-card blue bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-user-shield text-lg text-[#0B87C5]"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-3">
                                Privacy Policy
                            </h2>
                            <p class="museo-sans text-base text-gray-600 leading-relaxed mb-4">
                                Talking Tales is committed to safeguarding personal and health information shared by users, schools, and therapy partners. The Privacy Policy outlines how data is collected, used, stored, and protected following national data privacy laws and global best practices.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-blue-50 rounded-xl p-4">
                        <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">Key points include:</h3>
                        <div class="grid md:grid-cols-2 gap-3">
                            <div class="flex items-start space-x-2">
                                <div class="w-1.5 h-1.5 bg-[#0B87C5] rounded-full mt-2 flex-shrink-0"></div>
                                <p class="museo-sans text-sm text-gray-700"><strong>What information do we collect</strong> (e.g., personal details, assessment records)</p>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="w-1.5 h-1.5 bg-[#0B87C5] rounded-full mt-2 flex-shrink-0"></div>
                                <p class="museo-sans text-sm text-gray-700"><strong>Why do we collect it</strong> (to personalize therapy and provide support)</p>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="w-1.5 h-1.5 bg-[#0B87C5] rounded-full mt-2 flex-shrink-0"></div>
                                <p class="museo-sans text-sm text-gray-700"><strong>Who has access to it</strong> (only authorized personnel)</p>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="w-1.5 h-1.5 bg-[#0B87C5] rounded-full mt-2 flex-shrink-0"></div>
                                <p class="museo-sans text-sm text-gray-700"><strong>Your rights</strong> regarding access, correction, and deletion of data</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cookies Notice Section -->
            <div class="mb-12">
                <div class="policy-card green bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-cookie-bite text-lg text-green-600"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-3">
                                Cookies Notice
                            </h2>
                            <p class="museo-sans text-base text-gray-600 leading-relaxed mb-4">
                                Cookies help us provide a smoother, faster, and more personalized online experience. When visiting our site, users may encounter essential and analytical cookies that enhance usability and track engagement.
                            </p>
                            <div class="bg-green-50 rounded-xl p-4">
                                <p class="museo-sans text-gray-700 font-semibold text-base mb-2">
                                    <span class="highlight">Your consent is always respected.</span>
                                </p>
                                <p class="museo-sans text-sm text-gray-600">
                                    You can modify cookie settings at any time through your browser or device preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Terms and Conditions for Schools -->
            <div class="mb-12">
                <div class="policy-card orange bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-school text-lg text-orange-600"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-3">
                                Terms and Conditions for Schools
                            </h2>
                            <p class="museo-sans text-base text-gray-600 leading-relaxed mb-4">
                                These terms apply to all educational institutions that engage Talking Tales for speech therapy, screening, teacher training, or parent guidance.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-orange-50 rounded-xl p-4">
                        <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">This agreement includes:</h3>
                        <div class="space-y-2">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-orange-600 text-sm"></i>
                                <p class="museo-sans text-sm text-gray-700">Scope of services</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-orange-600 text-sm"></i>
                                <p class="museo-sans text-sm text-gray-700">Responsibilities of both parties</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-orange-600 text-sm"></i>
                                <p class="museo-sans text-sm text-gray-700">Data confidentiality clauses</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-orange-600 text-sm"></i>
                                <p class="museo-sans text-sm text-gray-700">Terms for scheduling, cancellation, and reporting</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-orange-600 text-sm"></i>
                                <p class="museo-sans text-sm text-gray-700">Compliance with school protocols</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Terms of Use -->
            <div class="mb-12">
                <div class="policy-card yellow bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-file-contract text-lg text-yellow-600"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-3">
                                Terms of Use
                            </h2>
                            <p class="museo-sans text-base text-gray-600 leading-relaxed mb-4">
                                All individuals using our website or therapy services are expected to review and accept our Terms of Use. These terms clarify what is expected of users, what Talking Tales provides, and how both parties remain protected.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-yellow-50 rounded-xl p-4">
                        <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">Topics covered include:</h3>
                        <div class="grid md:grid-cols-2 gap-3">
                            <div class="flex items-start space-x-2">
                                <div class="w-1.5 h-1.5 bg-yellow-600 rounded-full mt-2 flex-shrink-0"></div>
                                <p class="museo-sans text-sm text-gray-700">Website access and usage rights</p>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="w-1.5 h-1.5 bg-yellow-600 rounded-full mt-2 flex-shrink-0"></div>
                                <p class="museo-sans text-sm text-gray-700">Prohibited activities</p>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="w-1.5 h-1.5 bg-yellow-600 rounded-full mt-2 flex-shrink-0"></div>
                                <p class="museo-sans text-sm text-gray-700">Intellectual property ownership</p>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="w-1.5 h-1.5 bg-yellow-600 rounded-full mt-2 flex-shrink-0"></div>
                                <p class="museo-sans text-sm text-gray-700">Disclaimer and limitation of liability</p>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="w-1.5 h-1.5 bg-yellow-600 rounded-full mt-2 flex-shrink-0"></div>
                                <p class="museo-sans text-sm text-gray-700">Applicable law and dispute resolution</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support & Contact Information -->
                        </div>

                        <!-- Email -->
                    <!--    <div class="contact-item bg-gray-50 rounded-2xl p-6 text-center">-->
                    <!--        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-4">-->
                    <!--            <i class="fas fa-envelope text-lg text-green-600"></i>-->
                    <!--        </div>-->
                    <!--        <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">Email</h3>-->
                    <!--        <p class="museo-sans text-gray-600">[Insert Email Address]</p>-->
                    <!--    </div>-->

                        <!-- Location -->
                    <!--    <div class="contact-item bg-gray-50 rounded-2xl p-6 text-center">-->
                    <!--        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mx-auto mb-4">-->
                    <!--            <i class="fas fa-map-marker-alt text-lg text-orange-600"></i>-->
                    <!--        </div>-->
                    <!--        <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">Location</h3>-->
                    <!--        <p class="museo-sans text-gray-600">[Insert Address or City]</p>-->
                    <!--    </div>-->

                        <!-- Contact Form -->
                    <!--    <div class="contact-item bg-gray-50 rounded-2xl p-6 text-center">-->
                    <!--        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mx-auto mb-4">-->
                    <!--            <i class="fas fa-comments text-lg text-yellow-600"></i>-->
                    <!--        </div>-->
                    <!--        <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">Contact Form</h3>-->
                    <!--        <a href="/school-contact" class="museo-sans text-[#0B87C5] hover:text-blue-700 font-medium">Visit Form</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <!--<div class="text-center bg-gray-50 rounded-2xl p-6">-->
                    <!--    <p class="museo-sans text-gray-600 mb-4">-->
                    <!--        You may also schedule a call with a member of our team to discuss your specific needs or clarify any policy.-->
                    <!--    </p>-->
                    <!--    <button class="bg-[#0B87C5] hover:bg-blue-700 text-white px-6 py-3 rounded-xl museo-sans font-semibold transition-all duration-300 inline-flex items-center">-->
                    <!--        <i class="fas fa-calendar-alt mr-2"></i>-->
                    <!--        Schedule a Call-->
                    <!--    </button>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Notice -->
    <section class="bg-[#0B87C5] py-12 mb-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-white bg-opacity-10 rounded-2xl p-6">
                <i class="fas fa-info-circle text-2xl text-white mb-4"></i>
                <p class="museo-sans text-white leading-relaxed">
                    Policies are reviewed regularly and updated to reflect changing regulations, best practices, and user needs. Continued use of our services indicates your agreement with the latest versions.
                </p>
            </div>
        </div>
    </section>
    
        <?php include('footer.php');?>


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
            
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
            
            // Add hover effects to policy cards
            document.querySelectorAll('.policy-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.01)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
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