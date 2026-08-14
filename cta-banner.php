<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Talk - CTA Banner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                
                }
            }
        }
    </script>
    <style>
    
@font-face {
  font-family: 'Museo Sans';
  src: url('/fonts/museo/MuseoSans-500.woff2') format('woff2'),
       url('/fonts/museo/MuseoSans-500.woff') format('woff'),
       url('/fonts/museo/fonnts.com-Museo_Sans_500.otf') format('opentype');
  font-weight: 500;
  font-style: normal;
}

/* Museo Sans Rounded 700 */
@font-face {
  font-family: 'Museo Sans Rounded';
  src: url('/fonts/museo/MuseoSansRounded-700.woff2') format('woff2'),
       url('/fonts/museo/MuseoSansRounded-700.woff') format('woff'),
       url('/fonts/museo/MuseoSansRounded700.otf') format('opentype');
  font-weight: 700;
  font-style: normal;
}
    
    
        .museo-rounded { font-family: 'Museo Sans', sans-serif; font-weight: 700; }
        .museo { font-family: 'Museo Sans', sans-serif; font-weight: 500; }
        
        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }
        
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(255, 199, 60, 0.4); }
            50% { box-shadow: 0 0 0 20px rgba(255, 199, 60, 0); }
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #0B87C5 0%, #3DD288 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<div class="bg-primary-cream py-8 px-4">
    <div class="container mx-auto">
        <!-- Main CTA Banner -->
        <div class="relative bg-white rounded-3xl overflow-hidden">
            <!-- Background Pattern -->
            <!--<div class="absolute inset-0 opacity-5">-->
            <!--    <div class="absolute top-8 right-8 w-24 h-24 bg-primary-blue rounded-full floating-icon"></div>-->
            <!--    <div class="absolute bottom-8 left-8 w-16 h-16 bg-primary-green rounded-full floating-icon" style="animation-delay: 1s;"></div>-->
            <!--    <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-primary-yellow rounded-full floating-icon" style="animation-delay: 2s;"></div>-->
            <!--</div>-->
            
            <div class="relative p-8 md:p-12">
                <!-- Header Section -->
                <div class="text-center mb-8">
                    <!--<div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-primary-blue to-primary-green rounded-2xl mb-6 floating-icon">-->
                    <!--    <i class="fas fa-comments text-2xl text-white"></i>-->
                    <!--</div>-->
                    <h2 class="museo-rounded text-3xl md:text-4xl text-primary-gray mb-4">
                        <span class=" text-primary-blue">Let's Talk</span> – Just You & Us
                    </h2>
                    <p class="museo text-lg text-primary-gray opacity-80 max-w-2xl mx-auto leading-relaxed">
                        Feeling unsure? Confused about therapy? Want to talk it out with someone who gets it?
                    </p>
                </div>

                <div class="grid lg:grid-cols-3 gap-8 items-start">
                    <!-- Left Content -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Pricing Card -->
                        <div class="bg-gradient-to-r from-primary-blue to-blue-600 text-white p-6 rounded-2xl">
                            <div class="flex items-center justify-between flex-wrap gap-4">
                                <div>
                                    <h3 class="museo-rounded text-xl mb-2 flex items-center">
                                        <i class="fas fa-phone mr-3"></i>
                                        Book a Guided Clarity Call
                                    </h3>
                                    <p class="museo text-sm opacity-90">Quick, private 15-minute phone session</p>
                                </div>
                                <div class="text-right">
                                    <div class="bg-white bg-opacity-20 px-4 py-2 rounded-xl">
                                        <!--<div class="museo-rounded text-lg">₹79 <span class="text-sm font-normal">Weekdays</span></div>-->
                                         <div class="museo-rounded text-lg">₹99 <span class="text-sm font-normal"></span></div>

                                        <!--<div class="museo text-sm opacity-80">₹99 Weekends</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits List -->
                        <div class="bg-primary-cream p-6 rounded-2xl">
                            <h4 class="museo-rounded text-lg text-primary-gray mb-4 flex items-center">
                                <i class="fas fa-heart text-primary-orange mr-3"></i>
                                This is for you if you're:
                            </h4>
                            <div class="grid md:grid-cols-2 gap-3">
                                <div class="flex items-start">
                                    <i class="fas fa-check-circle text-primary-green mr-3 mt-1 text-sm"></i>
                                    <span class="museo text-primary-gray text-sm">Not sure if current therapy is working</span>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-check-circle text-primary-green mr-3 mt-1 text-sm"></i>
                                    <span class="museo text-primary-gray text-sm">Thinking about trying something new</span>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-check-circle text-primary-green mr-3 mt-1 text-sm"></i>
                                    <span class="museo text-primary-gray text-sm">Just needing someone to talk to</span>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-check-circle text-primary-green mr-3 mt-1 text-sm"></i>
                                    <span class="museo text-primary-gray text-sm">Looking for a second opinion</span>
                                </div>
                                <div class="flex items-start md:col-span-2">
                                    <i class="fas fa-check-circle text-primary-green mr-3 mt-1 text-sm"></i>
                                    <span class="museo text-primary-gray text-sm">Wanting to feel more in control</span>
                                </div>
                            </div>
                        </div>

                        <!-- Promise Section -->
                        <div class="text-center py-6 border-t-2 border-dashed border-primary-gray border-opacity-20">
                            <div class="flex items-center justify-center mb-4">
                                <i class="fas fa-sparkles text-primary-yellow text-xl mr-3"></i>
                                <span class="museo-rounded text-lg text-primary-gray">No forms. No pressure. Just support.</span>
                            </div>
                            <p class="museo text-primary-gray">
                                <span class="font-semibold">We listen.</span> 
                                <span class="font-semibold">We guide.</span> 
                                <span class="font-semibold text-primary-blue">You decide.</span>
                            </p>
                        </div>
                    </div>

                    <!-- Right CTA -->
                    <div class="lg:col-span-1">
                        <div class="bg-primary-orange p-8 rounded-2xl text-center relative overflow-hidden">
                            <!-- Decorative elements -->
                        
                            
                            <div class="relative">
                                <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i class="fas fa-hand-point-right text-3xl text-white"></i>
                                </div>
                                
                                <h3 class="museo-rounded text-xl text-white mb-4">Ready to Talk?</h3>
                                <p class="museo text-white text-sm opacity-90 mb-6">
                                    Book your clarity call now and take the first step towards better understanding.
                                </p>
                                
                                <a href="contact-us#booking-form1" class="w-full bg-white text-primary-gray museo-rounded text-lg py-4 px-6 rounded-xl transition-all duration-300 hover:shadow-lg hover:scale-105 pulse-glow">
                                    <i class="fas fa-calendar-plus mr-2"></i>
                                    <span class="hidden md:inline">Let's Talk – </span> Book a Call
                                </a>
                                
                                <!--<div class="mt-4 flex items-center justify-center text-white text-xs opacity-75">-->
                                <!--    <i class="fas fa-shield-alt mr-2"></i>-->
                                <!--    <span>100% Confidential & Secure</span>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trust Indicators -->
                <!--<div class="mt-8 pt-6 border-t border-primary-gray border-opacity-10">-->
                <!--    <div class="grid md:grid-cols-3 gap-6 text-center">-->
                <!--        <div class="flex items-center justify-center">-->
                <!--            <i class="fas fa-user-shield text-primary-blue mr-3"></i>-->
                <!--            <span class="museo text-sm text-primary-gray">Private & Confidential</span>-->
                <!--        </div>-->
                <!--        <div class="flex items-center justify-center">-->
                <!--            <i class="fas fa-clock text-primary-green mr-3"></i>-->
                <!--            <span class="museo text-sm text-primary-gray">Quick 15-min Sessions</span>-->
                <!--        </div>-->
                <!--        <div class="flex items-center justify-center">-->
                <!--            <i class="fas fa-heart text-primary-orange mr-3"></i>-->
                <!--            <span class="museo text-sm text-primary-gray">Expert Guidance</span>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>

        <!-- Optional: Testimonial Preview -->
    </div>
</div>

<script>
    // Add interactive elements
    document.addEventListener('DOMContentLoaded', function() {
        // Button click animation
        const ctaButton = document.querySelector('button');
        ctaButton.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });

        // Parallax effect for floating elements
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const floatingElements = document.querySelectorAll('.floating-icon');
            
            floatingElements.forEach((element, index) => {
                const speed = 0.5 + (index * 0.1);
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Add entrance animation
        const banner = document.querySelector('.');
        banner.style.opacity = '0';
        banner.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            banner.style.transition = 'all 0.8s cubic-bezier(0.25, 0.25, 0.25, 1)';
            banner.style.opacity = '1';
            banner.style.transform = 'translateY(0)';
        }, 100);
    });
</script>

</html>