
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  integrity="sha512-pap4mP3BzQAKiZ7D5SrxVq9+wvThxYz7E6ObIuFzznlSpdU52AqN44nD3bG3eY2Pco9p1wY9eYuO7q5p5mb5kQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>

<!-- WhatsApp Floating Icon -->
<a
  href="https://wa.me/919573737847"
  target="_blank"
  rel="noopener noreferrer"
  class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white w-16 h-16 flex items-center justify-center rounded-full shadow-lg transition-all duration-300"
  aria-label="Chat on WhatsApp"
>
  <i class="fab fa-whatsapp text-5xl"></i>
</a>
   <!-- footer -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(3deg); }
        }
        
        .animate-float {
            animation: float 8s ease-in-out infinite;
        }
        
        @keyframes blink {
            0%, 90%, 100% { transform: scaleY(1); }
            95% { transform: scaleY(0.1); }
        }
        
        .animate-blink {
            animation: blink 4s infinite;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .footer-section {
            animation: fadeInUp 0.8s ease-out forwards;
        }
    </style>

    <footer class="bg-gradient-to-br from-primary-gray via-primary-gray/95 to-primary-gray/90 text-white relative overflow-hidden">
        <!-- Floating Background Elements -->
        <!--<div class="absolute top-8 left-8 opacity-10 animate-float">-->
        <!--    <div class="w-20 h-20 bg-primary-blue rounded-full"></div>-->
        <!--</div>-->
        <!--<div class="absolute bottom-12 right-8 opacity-10 animate-float" style="animation-delay: 2s;">-->
        <!--    <div class="w-16 h-20 bg-primary-orange rounded-full rounded-tl-3xl rounded-br-3xl"></div>-->
        <!--</div>-->
        <!--<div class="absolute top-1/2 right-1/4 opacity-8 animate-pulse">-->
        <!--    <div class="relative">-->
        <!--        <div class="w-16 h-12 bg-primary-yellow rounded-3xl rounded-br-lg"></div>-->
        <!--        <div class="absolute -bottom-2 right-3 w-4 h-4 bg-primary-yellow transform rotate-45"></div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="absolute bottom-1/3 left-1/4 opacity-8 animate-pulse" style="animation-delay: 1s;">-->
        <!--    <div class="relative">-->
        <!--        <div class="w-14 h-14 bg-primary-green rounded-full"></div>-->
        <!--        <div class="absolute top-1 right-2 w-10 h-6 bg-primary-green rounded-t-full transform rotate-45"></div>-->
        <!--    </div>-->
        <!--</div>-->
    
        <div class="relative z-10">
            <!-- Main Footer Content -->
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8">
                <div class="grid lg:grid-cols-12 gap-12 lg:gap-16">
                    
                    <!-- Brand Section with Logo/Image -->
                    <div class="lg:col-span-5">
                        <div class="flex flex-col items-center lg:items-start">
                            <!-- Logo/Image Container with actual image -->
                            <div class="  from-white/10 to-white/5 rounded-3xl  border-white/20 hover:from-white/15 hover:to-white/10 transition-all duration-500 hover:scale-105">
                                <!-- Actual Image -->
                                <div class="w-[50%] h-[50%] mx-auto md:mx-1 rounded-2xl overflow-hidden flex items-center justify-start">
                                    <img src="assets/logo/TT-logo-text-white.png" alt="Talking Tales Logo" class="object-cover w-full h-full">
                                </div>
                            </div>
                            
                            <!-- Brand Description -->
                            <div class="text-center lg:text-left">
                                <!-- <h3 class="font-museo-rounded text-2xl font-bold text-white mb-4">Talking Tales</h3> -->
                                <p class="font-museo text-white/80 leading-relaxed mb-6">
                                    Transforming lives through personalized speech therapy. We believe every voice matters and every story deserves to be heard.
                                </p>
                                
                                <!-- Social Media Icons -->
                                <div class="flex space-x-4 justify-center lg:justify-start">
                                    <!--<a href="" class="w-10 h-10 bg-white/10 hover:bg-[#1877F2] rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer backdrop-blur-sm border border-white/20 group">-->
                                    <!--    <i class="fab fa-facebook-f text-white text-sm group-hover:scale-110 transition-transform duration-300"></i>-->
                                    <!--</a>-->
                                    <!--<a href="#" class="w-10 h-10 bg-white/10 hover:bg-[#1DA1F2] rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer backdrop-blur-sm border border-white/20 group">-->
                                    <!--    <i class="fab fa-twitter text-white text-sm group-hover:scale-110 transition-transform duration-300"></i>-->
                                    <!--</a>-->
                                    <a href="https://www.instagram.com/thetalkingtalesofficial/" class="w-10 h-10 bg-white/10 hover:bg-[#E4405F] rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer backdrop-blur-sm border border-white/20 group">
                                        <i class="fab fa-instagram text-white text-sm group-hover:scale-110 transition-transform duration-300"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/talking-tales-clinic" class="w-10 h-10 bg-white/10 hover:bg-[#0077B5] rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer backdrop-blur-sm border border-white/20 group">
                                        <i class="fab fa-linkedin-in text-white text-sm group-hover:scale-110 transition-transform duration-300"></i>
                                    </a>
                                    <!--<a href="#" class="w-10 h-10 bg-white/10 hover:bg-[#FF0000] rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer backdrop-blur-sm border border-white/20 group">-->
                                    <!--    <i class="fab fa-youtube text-white text-sm group-hover:scale-110 transition-transform duration-300"></i>-->
                                    <!--</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Footer Links -->
                    <div class="lg:col-span-7">
                        <div class="grid md:grid-cols-3 gap-8">
                            
                            <!-- Services -->
                            <div class="text-center md:text-left">
                                <h4 class="font-museo-rounded text-lg font-bold text-white mb-6 relative flex items-center justify-center md:justify-start">
                                    <i class="fas fa-comments text-primary-blue mr-2"></i>
                                    Services
                                    <div class="absolute -bottom-2 left-1/2 md:left-8 transform -translate-x-1/2 md:translate-x-0 w-8 h-1 bg-primary-blue rounded-full"></div>
                                </h4>
                                <ul class="space-y-3">
                                    <li><a href="speech-and-language-services" class="font-museo text-white/70 hover:text-primary-blue transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-child text-primary-blue mr-2 text-xs"></i>Speech and Language Services</a></li>
                                    <li><a href="school-&-education" class="font-museo text-white/70 hover:text-primary-yellow transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-user text-primary-blue mr-2 text-xs"></i>School and Education</a></li>
                                    <li><a href="hospital-and-rehab-partnerships" class="font-museo text-white/70 hover:text-primary-orange transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-seedling text-primary-blue mr-2 text-xs"></i>Hospitals and Rehab</a></li>
                                    <!--<li><a href="#" class="font-museo text-white/70 hover:text-primary-green transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-laptop text-primary-blue mr-2 text-xs"></i>Online Sessions</a></li>-->
                                    <!--<li><a href="#" class="font-museo text-white/70 hover:text-primary-blue transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-users text-primary-blue mr-2 text-xs"></i>Group Therapy</a></li>-->
                                </ul>
                            </div>
    
                            <!-- Company -->
                            <div class="text-center md:text-left">
                                <h4 class="font-museo-rounded text-lg font-bold text-white mb-6 relative flex items-center justify-center md:justify-start">
                                    <i class="fas fa-building text-primary-blue mr-2"></i>
                                    Company
                                    <div class="absolute -bottom-2 left-1/2 md:left-8 transform -translate-x-1/2 md:translate-x-0 w-8 h-1 bg-primary-blue rounded-full"></div>
                                </h4>
                                <ul class="space-y-3">
                                    <li><a href="about" class="font-museo text-white/70 hover:text-primary-blue transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-info-circle text-primary-blue mr-2 text-xs"></i>About Us</a></li>
                                    <!--<li><a href="#" class="font-museo text-white/70 hover:text-primary-yellow transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-user-md text-primary-blue mr-2 text-xs"></i>Our Team</a></li>-->
                                    <li><a href="index#testimonials" class="font-museo text-white/70 hover:text-primary-orange transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-star text-primary-blue mr-2 text-xs"></i>Our Tales</a></li>
                                    
                         <li><a href="about#teams" class="font-museo text-white/70 hover:text-primary-orange transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-users text-primary-blue mr-2 text-xs"></i>Our Team</a></li>

                                    <li><a href="coming-soon" class="font-museo text-white/70 hover:text-primary-green transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-blog text-primary-blue mr-2 text-xs"></i>Blog</a></li>
                                    <li><a href="careers" class="font-museo text-white/70 hover:text-primary-blue transition-colors duration-300 hover:translate-x-1 inline-block flex items-center justify-center md:justify-start"><i class="fas fa-briefcase text-primary-blue mr-2 text-xs"></i>Careers</a></li>
                                </ul>
                            </div>
    
                            <!-- Contact & Support -->
                            <div class="text-center md:text-left">
                                <h4 class="font-museo-rounded text-lg font-bold text-white mb-6 relative flex items-center justify-center md:justify-start">
                                    <i class="fas fa-phone text-primary-blue mr-2"></i>
                                    Get in Touch
                                    <div class="absolute -bottom-2 left-1/2 md:left-8 transform -translate-x-1/2 md:translate-x-0 w-8 h-1 bg-primary-blue rounded-full"></div>
                                </h4>
                                
                                <!-- Contact Info -->
                                <div class="space-y-4 mb-6">
                                    <div class="flex items-center justify-center md:justify-start space-x-3">
                                        <div class="w-8 h-8 bg-primary-blue/20 rounded-full flex items-center justify-center">
                                            <i class="fas fa-phone text-primary-blue text-sm"></i>
                                        </div>
                                  <a href="tel:+919573737847" class="font-museo text-white/80 text-sm">+91-9573737847</a>      
                                      </div>
                                    <div class="flex items-center justify-center md:justify-start space-x-3">
                                        <div class="w-8 h-8 bg-primary-blue/20 rounded-full flex items-center justify-center">
                                            <i class="fas fa-envelope text-primary-blue text-sm"></i>
                                        </div>
                                      <a href="mailto:info@thetalkingtales.com" class="font-museo text-white/80 text-sm">info@thetalkingtales.com</a>
                                    </div>
                                    <div class="flex items-center justify-center md:justify-start space-x-3">
                                        <div class="w-8 h-8 bg-primary-blue/20 rounded-full flex items-center justify-center">
                                            <i class="fas fa-clock text-primary-blue text-sm"></i>
                                        </div>
                                        <span class="font-museo text-white/80 text-sm">Mon-Fri, 9AM-6PM</span>
                                    </div>
                             <div class="space-y-3">
  <!-- Location 1 -->
  <div class="flex items-center justify-center md:justify-start space-x-3">
    <div class="w-8 h-8 bg-primary-blue/20 rounded-full flex items-center justify-center">
      <i class="fas fa-map-marker-alt text-primary-blue text-sm"></i>
    </div>
    <a href="https://www.google.com/maps?q=Ground+Floor,+Jain+Sadguru+Images+Capital+Park,+G2B,+Madhapur,+Hyderabad,+Telangana+500081"
       target="_blank" rel="noopener noreferrer"
       class="font-museo text-white/80 text-sm hover:underline">
      Madhapur, Hyderabad, Telangana-500081
    </a>
  </div>

  <!-- Location 2 -->
  <div class="flex items-center justify-center md:justify-start space-x-3">
    <div class="w-8 h-8 bg-primary-blue/20 rounded-full flex items-center justify-center">
      <i class="fas fa-map-marker-alt text-primary-blue text-sm"></i>
    </div>
    <a href="https://www.google.com/maps?q=Plot+No+147,+Spellbound+Towers,+HT+Rd,+Osmania+University+Teachers+Colony,+Sainikpuri,+Secunderabad,+Telangana+500094"
       target="_blank" rel="noopener noreferrer"
       class="font-museo text-white/80 text-sm hover:underline">
      Sainikpuri, Secunderabad, Telangana-500094
    </a>
  </div>
</div>
                                </div>
    
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Bottom Bar -->
            <div class="border-t border-white/10 bg-white/5 backdrop-blur-sm">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                        <div class="flex items-center space-x-6">
                            <p class="font-museo text-white/60 text-sm">
                                © 2025 Talking Tales. All rights reserved.
                            </p>
                            <div class="hidden md:flex space-x-4">
                                <a href="legal,policies-and-T&C" class="font-museo text-white/60 hover:text-white text-sm transition-colors duration-300">Privacy Policy</a>
                                <a href="legal,policies-and-T&C" class="font-museo text-white/60 hover:text-white text-sm transition-colors duration-300">Terms of Service</a>
                                 <a href="cancellation-and-refund" class="font-museo text-white/60 hover:text-white text-sm transition-colors duration-300">Cancellation and Refund policy</a>
                                <a href="shipping" class="font-museo text-white/60 hover:text-white text-sm transition-colors duration-300">Shipping</a>
                            </div>
                        </div>
                        
                        <a href="https://brandingpioneers.com/" class="font-museo text-white/60 text-sm">
                            Made & Designed By : Branding Pioneers
                        </a>
                        
                        <!-- Back to Top -->
                        <button id="backToTop" class="group bg-white/10 hover:bg-primary-blue border border-white/20 hover:border-primary-blue rounded-full p-3 transition-all duration-300 hover:scale-110 backdrop-blur-sm">
                            <i class="fas fa-arrow-up text-white group-hover:text-white transition-colors duration-300"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
     <!-- footer -->
    <script>
        // Back to top functionality
        document.getElementById('backToTop').addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    
        // Intersection observer for footer animations
        const footerObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const sections = entry.target.querySelectorAll('.footer-section');
                    sections.forEach((section, index) => {
                        setTimeout(() => {
                            section.style.opacity = '1';
                            section.style.transform = 'translateY(0)';
                        }, index * 100);
                    });
                }
            });
        }, { threshold: 0.1 });
    
        // Interactive hover effects for logo elements
        function addLogoInteractions() {
            const logoElements = document.querySelectorAll('.w-16.h-16, .w-16.h-12, .w-16.h-18, .w-16.h-14');
            
            logoElements.forEach(element => {
                element.addEventListener('mouseenter', () => {
                    element.style.transform = 'scale(1.1) rotate(5deg)';
                    element.style.boxShadow = '0 10px 30px rgba(255,255,255,0.2)';
                });
                
                element.addEventListener('mouseleave', () => {
                    element.style.transform = 'scale(1) rotate(0deg)';
                    element.style.boxShadow = '';
                });
            });
        }
    
    
    
        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            footerObserver.observe(document.querySelector('footer'));
            addLogoInteractions();
            addNewsletterInteraction();
        });
    </script>
