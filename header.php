<?php
// Get current page from URL
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$is_homepage = ($current_page === 'index');
?>

<!-- navbar -->
 <style>
        /* Custom color variables */
        :root {
            --primary-blue: #0B87C5;
            --primary-yellow: #F59E0B;
            --primary-orange: #F97316;
            --primary-green: #10B981;
            --primary-gray: #374151;
        }
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



body {
  font-family: 'Museo Sans', sans-serif !important;
  font-weight: 500 !important;
}

h1 {
  font-family: 'Museo Sans Rounded', sans-serif !important;
  font-weight: 700 !important;
}
h2 {
  font-family: 'Museo Sans Rounded', sans-serif !important;
  font-weight: 700 !important;
}
        /* Custom color classes */
        .text-primary-blue { color: var(--primary-blue); }
        .text-primary-yellow { color: var(--primary-yellow); }
        .text-primary-orange { color: var(--primary-orange); }
        .text-primary-green { color: var(--primary-green); }
        .text-primary-gray { color: var(--primary-gray); }
        
        .bg-primary-blue { background-color: var(--primary-blue); }
        .bg-primary-yellow { background-color: var(--primary-yellow); }
        .bg-primary-orange { background-color: var(--primary-orange); }
        .bg-primary-green { background-color: var(--primary-green); }

        .bg-primary-blue\/10 { background-color: rgba(59, 130, 246, 0.1); }
        .bg-primary-yellow\/10 { background-color: rgba(245, 158, 11, 0.1); }
        .bg-primary-orange\/10 { background-color: rgba(249, 115, 22, 0.1); }
        .bg-primary-green\/10 { background-color: rgba(16, 185, 129, 0.1); }

        .bg-primary-blue\/5 { background-color: rgba(59, 130, 246, 0.05); }
        .bg-primary-yellow\/5 { background-color: rgba(245, 158, 11, 0.05); }
        .bg-primary-orange\/5 { background-color: rgba(249, 115, 22, 0.05); }
        .bg-primary-green\/5 { background-color: rgba(16, 185, 129, 0.05); }

        .hover\:text-primary-blue:hover { color: var(--primary-blue); }
        .hover\:text-primary-yellow:hover { color: var(--primary-yellow); }
        .hover\:text-primary-orange:hover { color: var(--primary-orange); }
        .hover\:text-primary-green:hover { color: var(--primary-green); }

        .group-hover\/item\:text-primary-blue { color: var(--primary-blue); }
        .group-hover\/item\:text-primary-yellow { color: var(--primary-yellow); }
        .group-hover\/item\:text-primary-orange { color: var(--primary-orange); }
        .group-hover\/item\:text-primary-green { color: var(--primary-green); }

        /* Navbar scroll effects */
        #navbar {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        #navbar.navbar-scrolled {
            background-color: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        /* Safari specific fixes */
        @supports (-webkit-backdrop-filter: blur(12px)) or (backdrop-filter: blur(12px)) {
            #navbar {
                background-color: rgba(255, 255, 255, 0.1);
            }
            #navbar[data-page="other"] {
                background-color: rgba(255, 255, 255, 0.95) !important;
            }
        }

        /* Fallback for browsers without backdrop-filter support */
        @supports not ((-webkit-backdrop-filter: blur(12px)) or (backdrop-filter: blur(12px))) {
            #navbar {
                background-color: rgba(255, 255, 255, 0.9);
            }
            #navbar[data-page="other"] {
                background-color: rgba(255, 255, 255, 1) !important;
            }
        }

        #navbar.navbar-scrolled .nav-link span {
            color: var(--primary-gray) !important;
        }

        #navbar.navbar-scrolled .nav-link:hover span {
            color: var(--primary-blue) !important;
        }

        #navbar.navbar-scrolled h1 {
            color: var(--primary-gray) !important;
        }

        #navbar.navbar-scrolled .group:hover h1 {
            color: var(--primary-blue) !important;
        }

        #navbar.navbar-scrolled p {
            color: rgba(55, 65, 81, 0.7) !important;
        }
        
        @media (max-width: 768px) {
  #navbar.navbar-scrolled p {
    color: white !important;
  }
}

        #navbar.navbar-scrolled .hamburger span {
            background-color: var(--primary-gray) !important;
        }

        #navbar.navbar-scrolled .mobile-menu-button {
            background-color: rgba(55, 65, 81, 0.1) !important;
            border-color: rgba(55, 65, 81, 0.2) !important;
        }

        #navbar.navbar-scrolled .mobile-menu-button:hover {
            background-color: rgba(55, 65, 81, 0.2) !important;
        }

        /* Services dropdown arrow visibility */
        #navbar .services-arrow {
            border-color: rgba(255, 255, 255, 0.7) !important;
        }

        #navbar.navbar-scrolled .services-arrow {
            border-color: var(--primary-gray) !important;
        }

        #navbar.navbar-scrolled .nav-link:hover .services-arrow {
            border-color: var(--primary-blue) !important;
        }

        /* Mobile menu transitions */
        .mobile-services-dropdown {
            transition: max-height 0.3s ease-in-out, padding 0.3s ease-in-out;
        }

        .mobile-services-dropdown.open {
            max-height: 400px;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        /* Ensure mobile menu is properly positioned and visible */
        #mobileMenu {
            z-index: 9999 !important;
        }

        #mobileOverlay {
            z-index: 9998 !important;
        }

        /* Debug mobile menu visibility */
        @media (max-width: 1023px) {
            #mobileMenu.show {
                transform: translateX(0) !important;
                visibility: visible !important;
                opacity: 1 !important;
            }
            
            #mobileOverlay.show {
                opacity: 1 !important;
                visibility: visible !important;
            }
        }

        /* Hamburger animation */
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }

        /* Demo content styles */
        .demo-section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-green));
        }

        .content-section {
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(45deg, var(--primary-orange), var(--primary-yellow));
        }
        
        /* Logo transition styles for homepage only */
        #navbar[data-page="home"] .logo-light {
            opacity: 1;
            -webkit-transition: opacity 0.3s ease-in-out;
            transition: opacity 0.3s ease-in-out;
        }

        #navbar[data-page="home"] .logo-dark {
            opacity: 0;
            -webkit-transition: opacity 0.3s ease-in-out;
            transition: opacity 0.3s ease-in-out;
        }

        #navbar[data-page="home"].navbar-scrolled .logo-light {
            opacity: 0;
        }

        #navbar[data-page="home"].navbar-scrolled .logo-dark {
            opacity: 1;
        }

        /* Logo styles for other pages - always show dark logo */
        #navbar[data-page="other"] .logo-light {
            opacity: 0;
        }

        #navbar[data-page="other"] .logo-dark {
            opacity: 1;
        }

        /* Text colors for other pages */
        #navbar[data-page="other"] .nav-link span {
            color: var(--primary-gray) !important;
        }

        #navbar[data-page="other"] .nav-link:hover span {
            color: var(--primary-blue) !important;
        }

        #navbar[data-page="other"] .services-arrow {
            border-color: var(--primary-gray) !important;
        }

        #navbar[data-page="other"] .nav-link:hover .services-arrow {
            border-color: var(--primary-blue) !important;
        }

        #navbar[data-page="other"] .hamburger span {
            background-color: var(--primary-gray) !important;
        }

        #navbar[data-page="other"] .mobile-menu-button {
            background-color: rgba(55, 65, 81, 0.1) !important;
            border-color: rgba(55, 65, 81, 0.2) !important;
        }

        /* Safari specific positioning fixes */
        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            width: 100%;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        /* Logo container fixes for Safari */
        .logo-light, .logo-dark {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            max-width: 100%;
            max-height: 100%;
            width: auto !important;
            height: auto !important;
            object-fit: contain !important;
        }

        /* Safari mobile fixes */
        @media screen and (-webkit-min-device-pixel-ratio: 0) {
            #navbar {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            
            .logo-light, .logo-dark {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                display: block;
            }
        }
    </style>

<!-- Nav-Bar -->
<nav class="fixed top-0 w-full z-50 transition-all duration-300" id="navbar" data-page="<?php echo $is_homepage ? 'home' : 'other'; ?>" style="<?php echo $is_homepage ? 'background: transparent;' : 'background: rgba(255, 255, 255, 0.95); border-bottom: 1px solid rgba(0, 0, 0, 0.1);'; ?>">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <!-- Logo Section -->
<div class="flex items-center group cursor-pointer">
    <div class="relative" style="width: 220px; height: 64px;">
        <div class="w-full h-full  rounded-xl overflow-hidden group-hover:scale-110 transition-transform duration-300">
            <!-- Light logo (visible when navbar is transparent) -->
            <img src="assets/logo/logo-light.png" alt="Talking Tales Logo" class="pt-2 logo-light absolute top-0 left-0 w-full h-full object-contain rounded-xl transition-opacity duration-300" style="width: 100%; height: 100%;">
            <!-- Dark logo (visible when navbar is scrolled/opaque) -->
            <img src="assets/logo/logo-dark.png" alt="Talking Tales Logo" class=" pt-2 logo-dark absolute top-0 left-0 w-full h-full object-contain rounded-xl transition-opacity duration-300" style="width: 100%; height: 100%;">
        </div>
    </div>
</div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="index" class="nav-link group px-4 py-2 rounded-full hover:bg-white/10 backdrop-blur-sm transition-all duration-300">
                        <span class="font-museo font-medium <?php echo $is_homepage ? 'text-white hover:text-primary-blue' : 'text-primary-gray hover:text-primary-blue'; ?>">Home</span>
                    </a>
                    
                    <a href="about" class="nav-link group px-4 py-2 rounded-full hover:bg-white/10 backdrop-blur-sm transition-all duration-300">
                        <span class="font-museo font-medium <?php echo $is_homepage ? 'text-white hover:text-primary-orange' : 'text-primary-gray hover:text-primary-orange'; ?>">About</span>
                    </a>

                    
                    <div class="relative group">
                        <a href="#" class="nav-link group flex items-center space-x-2 px-4 py-2 rounded-full hover:bg-white/10 backdrop-blur-sm transition-all duration-300">
                            <span class="font-museo font-medium <?php echo $is_homepage ? 'text-white hover:text-primary-yellow' : 'text-primary-gray hover:text-primary-yellow'; ?>">Services</span>
                            <div class="services-arrow w-2 h-2 border-r-2 border-b-2 <?php echo $is_homepage ? 'border-white/70' : 'border-primary-gray'; ?> transform rotate-45 group-hover:rotate-[225deg] transition-transform duration-300"></div>
                        </a>
                        
                        
                        <!-- Services Dropdown -->
                        <div class="absolute top-full left-0 mt-2 w-64 bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl border border-white/30 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            
                            <div class="p-4 space-y-3">
                                <a href="speech-and-language-services" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-blue/5 transition-all duration-300 group/item">
                                    <div class="w-8 h-8 bg-primary-blue/10 rounded-full flex items-center justify-center">
                                        <div class="w-3 h-3 bg-primary-blue rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-blue">Speech & Language Services</div>
                                        <!--<div class="font-museo text-xs text-primary-gray/60">For children 2-18 years</div>-->
                                    </div>
                                </a>
                                <a href="hospital-and-rehab-partnerships" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-yellow/5 transition-all duration-300 group/item">
                                    <div class="w-8 h-8 bg-primary-yellow/10 rounded-full flex items-center justify-center">
                                        <div class="w-3 h-3 bg-primary-yellow rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-yellow">Hospital & Rehab Partnerships</div>
                                        <!--<div class="font-museo text-xs text-primary-gray/60">Professional support</div>-->
                                    </div>
                                </a>
                                <a href="school-&-education" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-orange/5 transition-all duration-300 group/item">
                                    <div class="w-8 h-8 bg-primary-orange/10 rounded-full flex items-center justify-center">
                                        <div class="w-3 h-3 bg-primary-orange rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-orange">School And Education</div>
                                        <!--<div class="font-museo text-xs text-primary-gray/60">Growth focused</div>-->
                                    </div>
                                </a>
                                <!--<a href="#" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-green/5 transition-all duration-300 group/item">-->
                                <!--    <div class="w-8 h-8 bg-primary-green/10 rounded-full flex items-center justify-center">-->
                                <!--        <div class="w-3 h-3 bg-primary-green rounded-full"></div>-->
                                <!--    </div>-->
                                <!--    <div>-->
                                <!--        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-green">Online Sessions</div>-->
                                <!--        <div class="font-museo text-xs text-primary-gray/60">From home comfort</div>-->
                                <!--    </div>-->
                                <!--</a>-->
                            </div>
                        </div>
                    </div>
                    
                    <!--Resources Dropdown-->
                           <div class="relative group">
                        <a href="#" class="nav-link group flex items-center space-x-2 px-4 py-2 rounded-full hover:bg-white/10 backdrop-blur-sm transition-all duration-300">
                            <span class="font-museo font-medium text-white hover:text-primary-yellow">Resources</span>
                            <div class="services-arrow w-2 h-2 border-r-2 border-b-2 border-white/70 transform rotate-45 group-hover:rotate-[225deg] transition-transform duration-300"></div>
                        </a>
                        
                        
                         <!--Services Dropdown -->
                        <div class="absolute top-full left-0 mt-2 w-64 bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl border border-white/30 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            
                            <div class="p-4 space-y-3">
                                <a href="coming-soon" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-blue/5 transition-all duration-300 group/item">
                                    <div class="w-8 h-8 bg-primary-blue/10 rounded-full flex items-center justify-center">
                                        <div class="w-3 h-3 bg-primary-blue rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-blue">Our Blogs</div>
                                        <!--<div class="font-museo text-xs text-primary-gray/60">For children 2-18 years</div>-->
                                    </div>
                                </a>
                                <a href="about#teams" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-yellow/5 transition-all duration-300 group/item">
                                    <div class="w-8 h-8 bg-primary-yellow/10 rounded-full flex items-center justify-center">
                                        <div class="w-3 h-3 bg-primary-yellow rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-yellow">Our Team</div>
                                        <!--<div class="font-museo text-xs text-primary-gray/60">Professional support</div>-->
                                    </div>
                                </a>
                                <a href="gallery" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-orange/5 transition-all duration-300 group/item">
                                    <div class="w-8 h-8 bg-primary-orange/10 rounded-full flex items-center justify-center">
                                        <div class="w-3 h-3 bg-primary-orange rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-orange">Our Gallery</div>
                                        <!--<div class="font-museo text-xs text-primary-gray/60">Growth focused</div>-->
                                    </div>
                                </a>
                                <a href="careers" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-green/5 transition-all duration-300 group/item">
                                    <div class="w-8 h-8 bg-primary-green/10 rounded-full flex items-center justify-center">
                                        <div class="w-3 h-3 bg-primary-green rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-green">Join Our Team</div>
                                        <!--<div class="font-museo text-xs text-primary-gray/60">From home comfort</div>-->
                                    </div>
                                </a>
                                
                                                                <a href="clinical-resources-and-pathways" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-blue/5 transition-all duration-300 group/item">
                                    <div class="w-8 h-8 bg-primary-blue/10 rounded-full flex items-center justify-center">
                                        <div class="w-3 h-3 bg-primary-blue rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-blue">Clinical Resources & Pathways</div>
                                        <!--<div class="font-museo text-xs text-primary-gray/60">Growth focused</div>-->
                                    </div>
                                </a>
                                
                                          <a href="price-list" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-primary-orange/5 transition-all duration-300 group/item">
                                    <div class="w-8 h-8 bg-primary-orange/10 rounded-full flex items-center justify-center">
                                        <div class="w-3 h-3 bg-primary-orange rounded-full"></div>
                                    </div>
                                    <div>
                                        <div class="font-museo-rounded font-semibold text-primary-gray text-sm group-hover/item:text-primary-orange">Our Pricing</div>
                                        <!--<div class="font-museo text-xs text-primary-gray/60">Growth focused</div>-->
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    
                    <!--<a href="#" class="nav-link group px-4 py-2 rounded-full hover:bg-white/10 backdrop-blur-sm transition-all duration-300">-->
                    <!--    <span class="font-museo font-medium text-white hover:text-primary-green">Success Stories</span>-->
                    <!--</a>-->
                    
                    <a href="contact-us" class="nav-link group px-4 py-2 rounded-full hover:bg-white/10 backdrop-blur-sm transition-all duration-300">
                        <span class="font-museo font-medium <?php echo $is_homepage ? 'text-white hover:text-primary-blue' : 'text-primary-gray hover:text-primary-blue'; ?>">Contact</span>
                    </a>
                </div>

                <!-- CTA Button & Mobile Menu -->
                <div class="flex items-center space-x-4">
                    <!-- CTA Button -->
                    <a href="contact-us" class="hidden md:flex items-center space-x-2  bg-primary-orange hover:from-primary-green hover:to-primary-blue text-white font-museo-rounded font-bold px-6 py-3 rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg group">
                        <span>Book Session</span>
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button class="mobile-menu-button lg:hidden relative w-10 h-10 <?php echo $is_homepage ? 'bg-white/10 border-white/20' : 'bg-primary-gray/10 border-primary-gray/20'; ?> backdrop-blur-md rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 border" id="mobileMenuBtn">
                        <div class="hamburger">
                            <span class="block w-6 h-0.5 <?php echo $is_homepage ? 'bg-white' : 'bg-primary-gray'; ?> mb-1.5 transition-all duration-300"></span>
                            <span class="block w-6 h-0.5 <?php echo $is_homepage ? 'bg-white' : 'bg-primary-gray'; ?> mb-1.5 transition-all duration-300"></span>
                            <span class="block w-6 h-0.5 <?php echo $is_homepage ? 'bg-white' : 'bg-primary-gray'; ?> transition-all duration-300"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div class="lg:hidden fixed inset-0 bg-black/50 backdrop-blur-sm opacity-0 invisible transition-all duration-300 z-40" id="mobileOverlay"></div>
        
        <!-- Mobile Menu Content -->
        <div class="lg:hidden fixed top-0 right-0 h-auto w-80 max-w-[85vw] bg-gray-900 shadow-2xl transform translate-x-full transition-all duration-300 z-50 border-l border-gray-700 overflow-y-auto" id="mobileMenu" style="transform: translateX(100%);">
            <div class="p-6 h-[100vh]">
<div class="flex items-center justify-between mb-8">
  <div class="w-auto h-14 rounded-xl overflow-hidden">
    <img src="assets/logo/logo-light.png" alt="Talking Tales Logo" class="w-full h-full object-contain" />
  </div>

  <!-- Close Button -->
  <button class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700 transition-colors duration-300" id="closeMobileMenu">
    <div class="w-4 h-4 relative">
      <div class="absolute w-full h-0.5 bg-gray-300 transform rotate-45 top-1.5"></div>
      <div class="absolute w-full h-0.5 bg-gray-300 transform -rotate-45 top-1.5"></div>
    </div>
  </button>
</div>                
                <div class="space-y-2">
                    <a href="index" class="mobile-nav-item z-50 flex items-center space-x-4 p-4 rounded-2xl hover:bg-gray-800 transition-all duration-300 group">
                        <span class="font-museo font-semibold text-white">Home</span>
                    </a>
                    
                        <a href="about" class="mobile-nav-item flex items-center space-x-4 p-4 rounded-2xl hover:bg-gray-800 transition-all duration-300 group">
                        <span class="font-museo font-semibold text-white">About</span>
                    </a>
                    
                    <!-- Services Dropdown Mobile -->
                    <div class="relative">
                        <button class="mobile-services-toggle w-full flex items-center justify-between p-4 rounded-2xl hover:bg-gray-800 transition-all duration-300">
                            <span class="font-museo font-semibold text-white">Services</span>
                            <svg class="w-4 h-4 text-gray-400 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        <div class="mobile-services-dropdown pl-6 pr-4 overflow-hidden max-h-0 transition-all duration-300">
                            <div class="py-2 space-y-2">
                                <a href="speech-and-language-services" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                            <div class="w-2 h-2 bg-primary-blue rounded-full"></div>
                                        </div>
                                        <div>
                                            <div class="font-museo text-sm text-white group-hover/item:text-primary-blue">Speech & Language Services</div>
                                            <!--<div class="font-museo text-xs text-gray-400">For children 2-18 years</div>-->
                                        </div>
                                    </div>
                                </a>
                                <a href="hospital-and-rehab-partnerships" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                            <div class="w-2 h-2 bg-primary-yellow rounded-full"></div>
                                        </div>
                                        <div>
                                            <div class="font-museo text-sm text-white group-hover/item:text-primary-yellow">Hospital & Rehab Partnerships</div>
                                            <!--<div class="font-museo text-xs text-gray-400">Professional support</div>-->
                                        </div>
                                    </div>
                                </a>
                                <a href="school-&-education" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                            <div class="w-2 h-2 bg-primary-orange rounded-full"></div>
                                        </div>
                                        <div>
                                            <div class="font-museo text-sm text-white group-hover/item:text-primary-orange">School And Education</div>
                                            <!--<div class="font-museo text-xs text-gray-400">Growth focused</div>-->
                                        </div>
                                    </div>
                                </a>
                                <!--<a href="#" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">-->
                                <!--    <div class="flex items-center space-x-3">-->
                                <!--        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">-->
                                <!--            <div class="w-2 h-2 bg-primary-green rounded-full"></div>-->
                                <!--        </div>-->
                                <!--        <div>-->
                                <!--            <div class="font-museo text-sm text-white group-hover/item:text-primary-green">Online Sessions</div>-->
                                <!--            <div class="font-museo text-xs text-gray-400">From home comfort</div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</a>-->
                            </div>
                        </div>
                    </div>
                    
                                        <div class="relative">
                        <button class="mobile-services-toggle w-full flex items-center justify-between p-4 rounded-2xl  hover:bg-gray-800 transition-all duration-300">
                            <span class="font-museo font-semibold text-white">Resources</span>
                            <svg class="w-4 h-4 text-gray-400 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        <div class="mobile-services-dropdown pl-6 pr-4 overflow-hidden max-h-0 transition-all duration-300">
                            <div class="py-2 space-y-2">
                                <a href="coming-soon" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                            <div class="w-2 h-2 bg-primary-blue rounded-full"></div>
                                        </div>
                                        <div>
                                            <div class="font-museo text-sm text-white group-hover/item:text-primary-blue">Our Blogs</div>
                                            <!--<div class="font-museo text-xs text-gray-400">For children 2-18 years</div>-->
                                        </div>
                                    </div>
                                </a>
                                <a href="about#teams" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                            <div class="w-2 h-2 bg-primary-yellow rounded-full"></div>
                                        </div>
                                        <div>
                                            <div class="font-museo text-sm text-white group-hover/item:text-primary-yellow">Our Team</div>
                                            <!--<div class="font-museo text-xs text-gray-400">Professional support</div>-->
                                        </div>
                                    </div>
                                </a>
                                
                                
                                <a href="gallery" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                            <div class="w-2 h-2 bg-primary-orange rounded-full"></div>
                                        </div>
                                        <div>
                                            <div class="font-museo text-sm text-white group-hover/item:text-primary-orange">Our Gallery</div>
                                            <!--<div class="font-museo text-xs text-gray-400">Growth focused</div>-->
                                        </div>
                                    </div>
                                </a>
                                <a href="careers" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                            <div class="w-2 h-2 bg-primary-green rounded-full"></div>
                                        </div>
                                        <div>
                                            <div class="font-museo text-sm text-white group-hover/item:text-primary-green">Join Our Team</div>
                                        
                                        </div>
                                    </div>
                                </a>
                                
                                                                            <a href="price-list" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                            <div class="w-2 h-2 bg-primary-orange rounded-full"></div>
                                        </div>
                                        <div>
                                            <div class="font-museo text-sm text-white group-hover/item:text-primary-orange">Our Pricing</div>
                                            <!--<div class="font-museo text-xs text-gray-400">For children 2-18 years</div>-->
                                        </div>
                                    </div>
                                </a>
                                
                                
                                
                                                                <a href="clinical-resources-and-pathways" class="mobile-nav-item block p-3 rounded-xl hover:bg-gray-800 transition-all duration-300 group/item">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                            <div class="w-2 h-2 bg-primary-blue rounded-full"></div>
                                        </div>
                                        <div>
                                            <div class="font-museo text-sm text-white group-hover/item:text-primary-blue">Clinical Resources and Pathways</div>
                                            <!--<div class="font-museo text-xs text-gray-400">For children 2-18 years</div>-->
                                        </div>
                                    </div>
                                </a>
                                
                                
                        

                            </div>
                        </div>
                    </div>

                    
                
                    <!--<a href="#" class="mobile-nav-item flex items-center space-x-4 p-4 rounded-2xl hover:bg-gray-800 transition-all duration-300 group">-->
                    <!--    <span class="font-museo font-semibold text-white">Success Stories</span>-->
                    <!--</a>-->
                    <a href="contact-us" class="mobile-nav-item flex items-center space-x-4 p-4 rounded-2xl hover:bg-gray-800 transition-all duration-300 group">
                        <span class="font-museo font-semibold text-white">Contact</span>
                    </a>
                </div>
                
                <div class="mt-8 pt-6 border-t border-gray-700">
<a 
  href="contact-us" 
  class="w-full bg-gradient-to-r from-primary-blue to-primary-green text-white font-museo-rounded font-bold py-4 rounded-2xl transition duration-300 hover:scale-105 hover:shadow-lg text-center block"
>
  Book Your Session
</a>                </div>
            </div>
        </div>
    </nav>









  <!-- NAVBAR -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu functionality
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileOverlay = document.getElementById('mobileOverlay');
            const closeMobileMenu = document.getElementById('closeMobileMenu');
            const hamburger = document.querySelector('.hamburger');
            // const mobileServicesToggle = document.querySelector('.mobile-services-toggle');
            // const mobileServicesDropdown = document.querySelector('.mobile-services-dropdown');
            const mobileServicesToggles = document.querySelectorAll('.mobile-services-toggle');
const mobileServicesDropdowns = document.querySelectorAll('.mobile-services-dropdown');

            function openMobileMenu() {
                console.log('Opening mobile menu'); // Debug log
                mobileMenu.classList.add('show');
                mobileOverlay.classList.add('show');
                mobileMenu.style.transform = 'translateX(0)';
                mobileOverlay.style.opacity = '1';
                mobileOverlay.style.visibility = 'visible';
                hamburger.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeMobileMenuFunc() {
                console.log('Closing mobile menu'); // Debug log
                mobileMenu.classList.remove('show');
                mobileOverlay.classList.remove('show');
                mobileMenu.style.transform = 'translateX(100%)';
                mobileOverlay.style.opacity = '0';
                mobileOverlay.style.visibility = 'hidden';
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
                
                // Close mobile services dropdown when closing menu
                if (mobileServicesDropdown) {
                    mobileServicesDropdown.classList.remove('open');
                    if (mobileServicesToggle) {
                        mobileServicesToggle.querySelector('svg').style.transform = 'rotate(0deg)';
                    }
                }
            }

            // Mobile services dropdown toggle
            // if (mobileServicesToggle && mobileServicesDropdown) {
            //     mobileServicesToggle.addEventListener('click', function() {
            //         const isOpen = mobileServicesDropdown.classList.contains('open');
            //         const arrow = this.querySelector('svg');
                    
            //         if (isOpen) {
            //             mobileServicesDropdown.classList.remove('open');
            //             arrow.style.transform = 'rotate(0deg)';
            //         } else {
            //             mobileServicesDropdown.classList.add('open');
            //             arrow.style.transform = 'rotate(180deg)';
            //         }
            //     });
            // }
            mobileServicesToggles.forEach((toggle, index) => {
    const dropdown = mobileServicesDropdowns[index];
    const arrow = toggle.querySelector('svg');

    toggle.addEventListener('click', function () {
        const isOpen = dropdown.classList.contains('open');

        // Close all dropdowns first
        mobileServicesDropdowns.forEach((dd, i) => {
            dd.classList.remove('open');
            const icon = mobileServicesToggles[i].querySelector('svg');
            if (icon) icon.style.transform = 'rotate(0deg)';
        });

        // Toggle current
        if (!isOpen) {
            dropdown.classList.add('open');
            if (arrow) arrow.style.transform = 'rotate(180deg)';
        }
    });
});

            // Event listeners
            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    openMobileMenu();
                });
            }

            if (closeMobileMenu) {
                closeMobileMenu.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    closeMobileMenuFunc();
                });
            }

            if (mobileOverlay) {
                mobileOverlay.addEventListener('click', closeMobileMenuFunc);
            }

            // Close mobile menu when clicking on nav links
            document.querySelectorAll('.mobile-nav-item').forEach(link => {
                link.addEventListener('click', closeMobileMenuFunc);
            });

            // Logo switching on scroll (only for homepage)
            window.addEventListener('scroll', () => {
                const navbar = document.getElementById('navbar');
                const isHomepage = navbar.getAttribute('data-page') === 'home';
                
                if (isHomepage && window.scrollY > 10) {
                    navbar.classList.add('navbar-scrolled');
                } else if (isHomepage) {
                    navbar.classList.remove('navbar-scrolled');
                }
            });

            // Close mobile menu on window resize
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) {
                    closeMobileMenuFunc();
                }
            });

            // Logo click animation
            const logoElement = document.querySelector('.group.cursor-pointer');
            if (logoElement) {
                logoElement.addEventListener('click', (e) => {
                    e.preventDefault();
                    const logo = e.currentTarget.querySelector('.w-12.h-12');
                    if (logo) {
                        logo.style.transform = 'scale(1.2) rotate(10deg)';
                        setTimeout(() => {
                            logo.style.transform = 'scale(1) rotate(0deg)';
                        }, 300);
                    }
                });
            }

            // Test mobile menu visibility on load (for debugging)
            console.log('Mobile menu element:', mobileMenu);
            console.log('Mobile menu button:', mobileMenuBtn);
        });
    </script>