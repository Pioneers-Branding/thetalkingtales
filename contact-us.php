<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Talking Tales Speech Therapy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <?php include('header-links.php');?>
        
            <script>
       document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    navbar.classList.add('navbar-scrolled');
});
    </script>

    <script>
        // tailwind.config = {
        //     theme: {
        //         extend: {
        //             colors: {
        //                 'primary-blue': '#0B87C5',
        //                 'accent-yellow': '#FFC73C',
        //                 'accent-orange': '#F36E3B',
        //                 'accent-green': '#3DD288',
        //                 'text-gray': '#4A4A4A',
        //                 'cream': '#F9F0E5',
        //             },
        //             fontFamily: {
        //                 'museo-rounded': ['Museo Sans Rounded', 'sans-serif'],
        //                 'museo': ['Museo Sans', 'sans-serif']
        //             }
        //         }
        //     }
        // }
    </script>
    <style>
        /* Additional custom styles */
        .embedded-booking {
            min-width: 100%;
            width: 100%;
            height: 700px;
            border-radius: 1rem;
        }
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>

<body class="bg-cream">
    
        <?php include('header.php');?>

    
<section class="py-16 mt-10 px-4 min-h-screen">
    <div class="container mx-auto">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <!--<div class="inline-block mb-6">-->
            <!--    <div class="w-2 h-16 bg-primary-blue"></div>-->
            <!--</div>-->
            <h1 class="text-4xl md:text-6xl font-museo-rounded font-bold text-[#4A4A4A] mb-4">
                Get In <span class="text-primary-blue">Touch</span>
            </h1>
            <p class="text-xl font-museo text-gray-600 max-w-2xl mx-auto">
                Ready to start your communication journey? We're here to help every step of the way.
            </p>
        </div>

        <!-- Contact Information Cards -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <!-- Phone -->
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 text-center group">
                <div class="w-16 h-16 bg-primary-blue rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-phone text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-museo-rounded font-bold text-[#4A4A4A] mb-2">Call Us</h3>
                <p class="font-museo text-gray-600 mb-4">Monday - Friday, 9AM - 6PM</p>
                <a href="tel:+919573737847" class="text-primary-blue font-museo font-medium hover:underline">
                    +91-9573737847
                </a>
            </div>

            <!-- Email -->
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 text-center group">
                <div class="w-16 h-16 bg-[#3DD288] rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-envelope text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-museo-rounded font-bold text-[#4A4A4A] mb-2">Email Us</h3>
                <p class="font-museo text-gray-600 mb-4">We'll respond within 24 hours</p>
                <a href="mailto:hello@thetalkingtales.com" class="text-primary-blue font-museo font-medium hover:underline">
                    info@thetalkingtales.com
                </a>
            </div>

            <!-- Location -->
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 text-center group">
                <div class="w-16 h-16 bg-[#F36E3B] rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-museo-rounded font-bold text-[#4A4A4A] mb-2">Visit Us</h3>
                <p class="font-museo text-gray-600 mb-4">Our welcoming clinic space</p>
<div class="space-y-3 text-primary-blue font-museo font-medium text-sm text-left max-w-[320px] mx-auto">
  <div class="flex items-start gap-2">
    <i class="fas fa-map-marker-alt text-[#F36E3B] text-base mt-1"></i>
    <a href="https://www.google.com/maps?q=Ground+Floor,+Jain+Sadguru+Images+Capital+Park,+G2B,+Madhapur,+Hyderabad,+Telangana+500081"
       target="_blank" rel="noopener noreferrer" class="hover:underline leading-snug">
      Ground Floor, Jain Sadguru Images Capital Park, G2B<br>
      Madhapur, Hyderabad, Telangana 500081
    </a>
  </div>
  <div class="flex items-start gap-2">
    <i class="fas fa-map-marker-alt text-[#F36E3B] text-base mt-1"></i>
    <a href="https://www.google.com/maps?q=Plot+No+147,+Spellbound+Towers,+HT+Rd,+Osmania+University+Teachers+Colony,+Sainikpuri,+Secunderabad,+Telangana+500094"
       target="_blank" rel="noopener noreferrer" class="hover:underline leading-snug">
      Plot No 147, Spellbound Towers, HT Rd<br>
      Sainikpuri, Secunderabad, Telangana 500094
    </a>
  </div>
</div>

</div>
        </div>

        <!-- Main Content Grid -->
        <div class="space-y-12 xl:space-y-0 xl:grid xl:grid-cols-12 xl:gap-12">
            
            <!-- Left Side: Appointment Booking -->
            <div class="xl:col-span-7 space-y-8">
                <div class="bg-white rounded-3xl p-6 md:p-8 lg:p-10 shadow-lg">
                    <div class="flex flex-col sm:flex-row sm:items-center mb-8">
                        <div class="w-12 h-12 bg-primary-blue rounded-xl flex items-center justify-center mb-4 sm:mb-0 sm:mr-4 flex-shrink-0">
                            <i class="fas fa-calendar-alt text-white"></i>
                        </div>
                        <div>
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-museo-rounded font-bold text-[#4A4A4A]">
                                Schedule Appointment
                            </h2>
                            <p class="font-museo text-gray-600 text-sm sm:text-base">Book your session online</p>
                        </div>
                    </div>

                    <!-- Trafft Booking Widget Container -->
                    <div class="relative bg-white rounded-2xl overflow-hidden border border-gray-100 min-h-[700px]">
                        <!-- Loading State -->
                        <div id="booking-loader" class="absolute inset-0 flex items-center justify-center bg-gray-50 z-10">
                            <div class="text-center p-8 max-w-sm">
                                <div class="animate-spin w-12 h-12 border-4 border-primary-blue border-t-transparent rounded-full mx-auto mb-4"></div>
                                <h3 class="text-lg md:text-xl font-museo-rounded font-bold text-[#4A4A4A] mb-2">
                                    Loading Booking System...
                                </h3>
                                <p class="font-museo text-gray-600 text-sm">
                                    Please wait while we prepare your appointment options
                                </p>
                                <button id="reload-widget" class="mt-4 px-4 py-2 bg-primary-blue text-white rounded-lg text-sm hover:bg-opacity-90 transition-colors">
                                    Reload Widget
                                </button>
                            </div>
                        </div>

                        <!-- Widget will be inserted here -->
                        <div id="trafft-booking-container"></div>

                        <!-- Fallback State -->
                        <div id="booking-fallback" class="hidden absolute inset-0 flex items-center justify-center bg-gray-50 z-20">
                            <div class="text-center p-8 max-w-md">
                                <i class="fas fa-exclamation-triangle text-4xl text-yellow-500 mb-4"></i>
                                <h3 class="text-xl font-museo-rounded font-bold text-[#4A4A4A] mb-4">
                                    Booking System Unavailable
                                </h3>
                                <p class="font-museo text-gray-600 mb-6">
                                    Please call us directly to schedule your appointment, or try refreshing the page.
                                </p>
                                <div class="space-y-3">
                                    <a href="tel:+1234567890" class="block w-full px-6 py-3 bg-primary-blue text-white rounded-lg hover:bg-opacity-90 transition-colors">
                                        <i class="fas fa-phone mr-2"></i>Call (234) 567-8900
                                    </a>
                                    <button onclick="location.reload()" class="block w-full px-6 py-3 border border-primary-blue text-primary-blue rounded-lg hover:bg-primary-blue hover:text-white transition-colors">
                                        <i class="fas fa-refresh mr-2"></i>Refresh Page
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-cream rounded-xl">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-info-circle text-primary-blue mt-1 flex-shrink-0"></i>
                            <div>
                                <p class="font-museo text-sm text-[#4A4A4A]">
                                    <strong>New clients:</strong> Please complete our Booking form <span class="xl:hidden">(below)</span><span class="hidden xl:inline">(right)</span> before booking to help us prepare for your visit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form with PDF Upload -->
            <div id="booking-form1" class="xl:col-span-5 space-y-8">
               <div class="bg-white rounded-3xl p-6 md:p-8 lg:p-10 shadow-lg">
                    <!-- Mobile-optimized header -->
                    <div class="flex flex-col sm:flex-row sm:items-center mb-8">
                        <div class="w-12 h-12 bg-[#3DD288] rounded-xl flex items-center justify-center mb-4 sm:mb-0 sm:mr-4 flex-shrink-0">
                            <i class="fas fa-file-medical text-white"></i>
                        </div>
                        <div>
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-museo-rounded font-bold text-[#4A4A4A]">
                               Submit Your Medical Concern
                            </h2>
                            <p class="font-museo text-gray-600 text-sm sm:text-base">Help us understand your needs</p>
                        </div>
                    </div>

                    <form accept-charset='UTF-8' action='https://app.formester.com/forms/nw9H6RDf3/submissions' method='POST'  class="space-y-6" enctype="multipart/form-data" >
                        <!-- Basic Information - Responsive Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label class="block font-museo font-medium text-[#4A4A4A] mb-2 text-sm lg:text-base">
                                    First Name *
                                </label>
                                <input 
                                   name="first name"
                                    type="text" 
                                    required
                                    class="w-full px-3 py-2 lg:px-4 lg:py-3 border border-gray-200 rounded-xl focus:border-primary-blue focus:outline-none transition-colors duration-300 text-sm lg:text-base"
                                    placeholder="Enter first name">
                            </div>
                            <div>
                                <label class="block font-museo font-medium text-[#4A4A4A] mb-2 text-sm lg:text-base">
                                    Last Name *
                                </label>
                                <input 
                                name="last name"
                                    type="text" 
                                    required
                                    class="w-full px-3 py-2 lg:px-4 lg:py-3 border border-gray-200 rounded-xl focus:border-primary-blue focus:outline-none transition-colors duration-300 text-sm lg:text-base"
                                    placeholder="Enter last name">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label class="block font-museo font-medium text-[#4A4A4A] mb-2 text-sm lg:text-base">
                                    Email *
                                </label>
                                <input 
                                name="email"
                                    type="email" 
                                    required
                                    class="w-full px-3 py-2 lg:px-4 lg:py-3 border border-gray-200 rounded-xl focus:border-primary-blue focus:outline-none transition-colors duration-300 text-sm lg:text-base"
                                    placeholder="your.email@example.com">
                            </div>
                            <div>
                                <label class="block font-museo font-medium text-[#4A4A4A] mb-2 text-sm lg:text-base">
                                    Phone
                                </label>
                                <input 
                                name="phone number"
                                    type="tel"
                                    class="w-full px-3 py-2 lg:px-4 lg:py-3 border border-gray-200 rounded-xl focus:border-primary-blue focus:outline-none transition-colors duration-300 text-sm lg:text-base"
                                    placeholder="(123) 456-7890">
                            </div>
                        </div>

                        <!-- Age and Service Type - Responsive -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label class="block font-museo font-medium text-[#4A4A4A] mb-2 text-sm lg:text-base">
                                    Age of Client
                                </label>
                                <select
                                name="age"
                                class="w-full px-3 py-2 lg:px-4 lg:py-3 border border-gray-200 rounded-xl focus:border-primary-blue focus:outline-none transition-colors duration-300 text-sm lg:text-base">
                                    <option>Select age range</option>
                                    <option>0-3 years</option>
                                    <option>4-6 years</option>
                                    <option>7-12 years</option>
                                    <option>13-18 years</option>
                                    <option>18+ years</option>
                                </select>
                            </div>
                            <div>
                                <label class="block font-museo font-medium text-[#4A4A4A] mb-2 text-sm lg:text-base">
                                    Service Type
                                </label>
                                <select 
                                name="service"
                                class="w-full px-3 py-2 lg:px-4 lg:py-3 border border-gray-200 rounded-xl focus:border-primary-blue focus:outline-none transition-colors duration-300 text-sm lg:text-base">
                                    <option>Select service</option>
                                    <option>Speech Therapy</option>
                                    <option>Language Therapy</option>
                                    <option>Articulation</option>
                                    <option>Fluency/Stuttering</option>
                                    <option>Voice Therapy</option>
                                    <option>Swallowing Therapy</option>
                                    <option>Consultation</option>
                                    <option>Partnership</option>
                                    

                                </select>
                            </div>
                        </div>

                        <!-- Message - Responsive -->
                        <div>
                            <label class="block font-museo font-medium text-[#4A4A4A] mb-2 text-sm lg:text-base">
                                Tell us about your concerns or goals
                            </label>
                            <textarea 
                                rows="4"
                                name="message"
                                class="w-full px-3 py-2 lg:px-4 lg:py-3 border border-gray-200 rounded-xl focus:border-primary-blue focus:outline-none transition-colors duration-300 text-sm lg:text-base resize-y"
                                placeholder="Please describe any communication challenges, goals, or questions you have..."></textarea>
                        </div>

                        <!-- PDF Upload Section - Mobile Optimized -->
                        <div class="border-2 border-dashed border-gray-200 rounded-xl p-4 lg:p-6 hover:border-primary-blue transition-colors duration-300">
                            <div class="text-center">
                                <i class="fas fa-cloud-upload-alt text-3xl lg:text-4xl text-gray-400 mb-4"></i>
                                <h4 class="font-museo-rounded font-bold text-[#4A4A4A] mb-2 text-sm lg:text-base">
                                    Upload Screening Test (Optional)
                                </h4>
                                <p class="font-museo text-gray-600 mb-4 text-xs lg:text-sm px-2">
                                    If you have completed a screening test or have relevant medical reports, please upload them here.
                                </p>
                                
                                <div class="relative">
                                    <input 
                                        type="file" 
                                        name="screening test"
                                        id="pdf-upload"
                                        accept=".pdf,.doc,.docx"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                        onchange="handleFileUpload(this)">
                                    <button 
                                        type="button"
                                        class="px-4 py-2 lg:px-6 lg:py-3 bg-primary-blue text-white font-museo-rounded font-medium rounded-lg hover:bg-opacity-90 transition-all duration-300 text-sm lg:text-base">
                                        <i class="fas fa-paperclip mr-2"></i>
                                        Choose File
                                    </button>
                                </div>
                                
                                <div id="file-info" class="mt-4 hidden">
                                    <div class="inline-flex items-center px-3 py-2 lg:px-4 lg:py-2 bg-[#3DD288] bg-opacity-10 text-accent-green rounded-lg text-sm">
                                        <i class="fas fa-file-pdf mr-2"></i>
                                        <span id="file-name" class="break-all"></span>
                                        <button type="button" onclick="removeFile()" class="ml-2 text-red-500 hover:text-red-700">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <p class="text-xs text-gray-500 mt-2">
                                    Supported formats: PDF, DOC, DOCX (Max 5MB)
                                </p>
                            </div>
                        </div>

                        <!-- Preferred Contact Method - Mobile Grid -->
                        <div class="mt-4 text-sm text-gray-800">
                          <span>If not,</span>
                          <a href="index#services-all" class="font-museo font-medium text-primary-blue underline hover:text-blue-700 transition-colors duration-300 text-sm lg:text-base">
                            take an online screening test – click here
                          </a>
                        </div>

                        <!-- Data Protection & Privacy Consent Notice -->
                        <div class="bg-blue-50/70 border border-blue-100 rounded-xl p-4 space-y-3">
                            <div class="flex items-center space-x-2 text-xs font-semibold text-[#0B87C5]">
                                <i class="fas fa-lock text-sm"></i>
                                <span>Confidential Clinical Intake • 256-Bit Encrypted</span>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <input 
                                    type="checkbox" 
                                    id="privacy-consent" 
                                    name="consent" 
                                    required 
                                    class="mt-1 w-4 h-4 text-primary-blue border-gray-300 rounded focus:ring-primary-blue flex-shrink-0 cursor-pointer">
                                <label for="privacy-consent" class="font-museo text-xs sm:text-sm text-gray-700 cursor-pointer leading-relaxed">
                                    I consent to The Talking Tales collecting and processing my / my child's personal and health information for clinical assessment, consultation, and appointment scheduling in accordance with the <a href="legal,policies-and-T&C#privacy-policy" target="_blank" class="text-primary-blue underline hover:text-blue-700">Privacy Policy</a> and <a href="legal,policies-and-T&C#terms-of-service" target="_blank" class="text-primary-blue underline hover:text-blue-700">Terms of Service</a>. *
                                </label>
                            </div>
                        </div>

                        <!-- Medical Emergency Advisory -->
                        <p class="text-xs text-gray-500 font-museo leading-normal">
                            <i class="fas fa-info-circle text-gray-400 mr-1"></i>
                            <strong>Note:</strong> This form is for non-urgent consultation inquiries. If you or your child are experiencing an acute medical emergency, respiratory choking, or sudden neurological crisis, please call emergency services (112 / 108) immediately.
                        </p>

                        <!-- Submit Button - Responsive -->
                        <button 
                            type="submit"
                            class="w-full py-3 lg:py-4 bg-primary-blue text-white font-museo-rounded font-bold text-base lg:text-lg rounded-xl hover:bg-opacity-90 transition-all duration-300 transform hover:scale-[1.02] focus:outline-none focus:ring-4 focus:ring-primary-blue focus:ring-opacity-30">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Submit Screening Form
                        </button>

                        <div class="text-center">
                            <p class="text-xs lg:text-sm font-museo text-gray-500">
                                We review medical inquiries confidentially and contact you within 24 business hours.
                            </p>
                        </div>
                    </form>
                </div>
      
            </div>
        </div>

        <!-- Emergency Contact Info -->
    <!--    <div class="mt-16 bg-[#4A4A4A] text-white rounded-3xl p-8 md:p-10 text-center">-->
    <!--        <h3 class="text-2xl font-museo-rounded font-bold mb-4">-->
    <!--            Need Immediate Assistance?-->
    <!--        </h3>-->
    <!--        <p class="font-museo text-gray-300 mb-6 max-w-2xl mx-auto">-->
    <!--            For urgent communication needs or emergency situations, please contact your primary healthcare provider or emergency services.-->
    <!--        </p>-->
    <!--        <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8">-->
    <!--            <div class="flex items-center">-->
    <!--                <i class="fas fa-phone mr-3 text-accent-yellow"></i>-->
    <!--                <span class="font-museo">Emergency: 911</span>-->
    <!--            </div>-->
    <!--            <div class="flex items-center">-->
    <!--                <i class="fas fa-hospital mr-3 text-accent-green"></i>-->
    <!--                <span class="font-museo">Crisis Line: 988</span>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</section>
    <?php include('footer.php');?>


<script>
// ================== TRAFFT WIDGET IMPLEMENTATION ==================
document.addEventListener('DOMContentLoaded', function() {
    // Initialize the widget
    loadTrafftWidget();
    
    // Set up reload button
    document.getElementById('reload-widget')?.addEventListener('click', function() {
        loadTrafftWidget();
    });
});

function loadTrafftWidget() {
    const container = document.getElementById('trafft-booking-container');
    const loader = document.getElementById('booking-loader');
    const fallback = document.getElementById('booking-fallback');
    
    // Show loader and hide fallback
    loader.style.display = 'flex';
    fallback.classList.add('hidden');
    
    // Clear previous widget if exists
    container.innerHTML = '';
    
    // Create the embed div
    const embedDiv = document.createElement('div');
    embedDiv.className = 'embedded-booking fade-in';
    embedDiv.setAttribute('data-url', 'https://talkingtales.wlbookings.com');
    embedDiv.setAttribute('data-query', '&t=s&uuid=6ee23eef-22ec-4cc5-bfd4-3671e0b9f53d');
    embedDiv.setAttribute('data-lang', 'en');
    embedDiv.setAttribute('data-autoresize', '1');
    embedDiv.setAttribute('data-showsidebar', '1');
    
    container.appendChild(embedDiv);
    
    // Check if script already exists
    const existingScript = document.querySelector('script[src*="wlbookings.com/embed.js"]');
    if (existingScript) {
        existingScript.remove();
    }
    
    // Create and load the script
    const script = document.createElement('script');
    script.src = 'https://talkingtales.wlbookings.com/embed.js';
    script.async = true;
    
    script.onload = function() {
        // Check if widget loaded successfully
        const checkInterval = setInterval(function() {
            const iframe = document.querySelector('.embedded-booking iframe');
            if (iframe) {
                clearInterval(checkInterval);
                loader.style.opacity = '0';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }
        }, 500);
        
        // Timeout after 10 seconds
        setTimeout(function() {
            clearInterval(checkInterval);
            const iframe = document.querySelector('.embedded-booking iframe');
            if (!iframe) {
                showFallback();
            }
        }, 10000);
    };
    
    script.onerror = function() {
        showFallback();
    };
    
    document.body.appendChild(script);
    
    // Final timeout after 15 seconds
    setTimeout(function() {
        const iframe = document.querySelector('.embedded-booking iframe');
        if (!iframe) {
            showFallback();
        }
    }, 15000);
}

function showFallback() {
    const loader = document.getElementById('booking-loader');
    const fallback = document.getElementById('booking-fallback');
    
    loader.style.display = 'none';
    fallback.classList.remove('hidden');
}

// ================== FORM HANDLING ==================
// (Keep your existing form handling code exactly as is)
function handleFileUpload(input) {
    const fileInfo = document.getElementById('file-info');
    const fileName = document.getElementById('file-name');
    
    if (input.files && input.files[0]) {
        const file = input.files[0];
        const maxSize = 5 * 1024 * 1024; // 5MB
        
        if (file.size > maxSize) {
            alert('File size must be less than 5MB');
            input.value = '';
            return;
        }
        
        fileName.textContent = file.name;
        fileInfo.classList.remove('hidden');
    }
}

function removeFile() {
    const input = document.getElementById('pdf-upload');
    const fileInfo = document.getElementById('file-info');
    
    input.value = '';
    fileInfo.classList.add('hidden');
}

// Contact method selection
document.querySelectorAll('input[name="contact-method"]').forEach(radio => {
    radio.addEventListener('change', function() {
        document.querySelectorAll('.contact-option').forEach(option => {
            option.classList.remove('border-primary-blue', 'bg-primary-blue', 'bg-opacity-10');
        });
        
        const selectedOption = this.parentElement.querySelector('.contact-option');
        selectedOption.classList.add('border-primary-blue', 'bg-primary-blue', 'bg-opacity-10');
    });
});

// Form submission
document.getElementById('contact-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i>Form Submitted!';
    submitBtn.classList.remove('bg-primary-blue');
    submitBtn.classList.add('bg-accent-green');
    
    setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.classList.remove('bg-accent-green');
        submitBtn.classList.add('bg-primary-blue');
        
        this.reset();
        removeFile();
    }, 3000);
});

// ================== ANIMATIONS ==================
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Animate contact cards
document.querySelectorAll('.grid.md\\:grid-cols-3 > div').forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'all 0.6s ease';
    card.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(card);
});
</script>

</body>
</html>