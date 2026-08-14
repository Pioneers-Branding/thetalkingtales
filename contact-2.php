<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Talking Tales Speech Therapy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#0B87C5',
                        'accent-yellow': '#FFC73C',
                        'accent-orange': '#F36E3B',
                        'accent-green': '#3DD288',
                        'text-gray': '#4A4A4A',
                        'cream': '#F9F0E5'
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
        /* Widget containment styles */
        .embedded-booking {
            width: 100% !important;
            min-height: 500px !important;
            height: auto !important;
            border-radius: 0.75rem !important;
            box-sizing: border-box !important;
        }
        
        .embedded-booking iframe {
            width: 100% !important;
            min-height: 500px !important;
            height: auto !important;
            border: none !important;
            border-radius: 0.75rem !important;
        }
        
        #trafft-booking-container {
            position: relative;
            height: 500px !important;
            overflow-y: auto !important;
            overflow-x: hidden !important;
        }
        
        /* Custom scrollbar styling */
        #trafft-booking-container::-webkit-scrollbar {
            width: 8px;
        }
        
        #trafft-booking-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }
        
        #trafft-booking-container::-webkit-scrollbar-thumb {
            background: #0B87C5;
            border-radius: 4px;
        }
        
        #trafft-booking-container::-webkit-scrollbar-thumb:hover {
            background: #0968a3;
        }
    </style>
</head>

<body class="bg-cream">
<section class="py-8 px-4">
    <div class="max-w-6xl mx-auto">
        
        <!-- Compact Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-museo-rounded font-bold text-text-gray mb-2">
                Get In <span class="text-primary-blue">Touch</span>
            </h1>
            <p class="text-gray-600 font-museo">Ready to start your communication journey?</p>
        </div>

        <!-- Compact Contact Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white rounded-xl p-4 shadow-sm text-center group hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-primary-blue rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-phone text-white text-sm"></i>
                </div>
                <h3 class="font-museo-rounded font-bold text-text-gray mb-1">Call Us</h3>
                <a href="tel:+1234567890" class="text-primary-blue font-museo text-sm hover:underline">
                    +1 (234) 567-8900
                </a>
            </div>

            <div class="bg-white rounded-xl p-4 shadow-sm text-center group hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-accent-green rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-envelope text-white text-sm"></i>
                </div>
                <h3 class="font-museo-rounded font-bold text-text-gray mb-1">Email Us</h3>
                <a href="mailto:hello@talkingtales.com" class="text-primary-blue font-museo text-sm hover:underline">
                    hello@talkingtales.com
                </a>
            </div>

            <div class="bg-white rounded-xl p-4 shadow-sm text-center group hover:shadow-md transition-shadow">
                <div class="w-10 h-10 bg-accent-orange rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-map-marker-alt text-white text-sm"></i>
                </div>
                <h3 class="font-museo-rounded font-bold text-text-gray mb-1">Visit Us</h3>
                <p class="text-primary-blue font-museo text-sm">
                    123 Therapy Lane<br>Wellness City, WC 12345
                </p>
            </div>
        </div>

        <!-- Compact Main Content -->
        <div class="grid xl:grid-cols-3 gap-6">
            
            <!-- Booking Widget - Compact -->
            <div class="xl:col-span-2">
                <div class="bg-white rounded-xl p-4 md:p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-primary-blue rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-calendar-alt text-white text-sm"></i>
                        </div>
                        <div>
                            <h2 class="text-lg md:text-xl font-museo-rounded font-bold text-text-gray">
                                Schedule Appointment
                            </h2>
                            <p class="font-museo text-gray-600 text-sm">Book your session online</p>
                        </div>
                    </div>

                    <!-- Compact Widget Container -->
                    <div class="relative bg-white rounded-xl border border-gray-100">
                        <!-- Loading State -->
                        <div id="booking-loader" class="absolute inset-0 flex items-center justify-center bg-gray-50 z-10 rounded-xl">
                            <div class="text-center p-6">
                                <div class="animate-spin w-8 h-8 border-3 border-primary-blue border-t-transparent rounded-full mx-auto mb-3"></div>
                                <h3 class="text-sm font-museo-rounded font-bold text-text-gray mb-2">Loading...</h3>
                                <button id="reload-widget" class="px-3 py-1 bg-primary-blue text-white rounded text-xs hover:bg-opacity-90">
                                    Reload
                                </button>
                            </div>
                        </div>

                        <!-- Widget Container - Fixed height with scroll -->
                        <div id="trafft-booking-container" class="w-full rounded-xl" style="height: 500px; overflow-y: auto; overflow-x: hidden;"></div>

                        <!-- Fallback State -->
                        <div id="booking-fallback" class="hidden absolute inset-0 flex items-center justify-center bg-gray-50 z-20 rounded-xl">
                            <div class="text-center p-6 max-w-xs">
                                <i class="fas fa-exclamation-triangle text-2xl text-yellow-500 mb-3"></i>
                                <h3 class="text-sm font-museo-rounded font-bold text-text-gray mb-3">Booking Unavailable</h3>
                                <div class="space-y-2">
                                    <a href="tel:+1234567890" class="block w-full px-4 py-2 bg-primary-blue text-white rounded text-sm hover:bg-opacity-90">
                                        <i class="fas fa-phone mr-1"></i>Call Us
                                    </a>
                                    <button onclick="location.reload()" class="block w-full px-4 py-2 border border-primary-blue text-primary-blue rounded text-sm hover:bg-primary-blue hover:text-white">
                                        Refresh
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Compact Screening Form -->
            <div class="xl:col-span-1">
                <div class="bg-white rounded-xl p-4 md:p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-accent-green rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-file-medical text-white text-sm"></i>
                        </div>
                        <div>
                            <h2 class="text-lg md:text-xl font-museo-rounded font-bold text-text-gray">
                                Screening Form
                            </h2>
                            <p class="font-museo text-gray-600 text-sm">Quick intake form</p>
                        </div>
                    </div>

                    <form id="contact-form" class="space-y-4">
                        <!-- Basic Info - Compact -->
                        <div class="space-y-3">
                            <input 
                                type="text" 
                                required
                                class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-primary-blue focus:outline-none text-sm"
                                placeholder="First Name *">
                            
                            <input 
                                type="text" 
                                required
                                class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-primary-blue focus:outline-none text-sm"
                                placeholder="Last Name *">
                            
                            <input 
                                type="email" 
                                required
                                class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-primary-blue focus:outline-none text-sm"
                                placeholder="Email *">
                            
                            <input 
                                type="tel"
                                class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-primary-blue focus:outline-none text-sm"
                                placeholder="Phone">
                        </div>

                        <!-- Compact Selects -->
                        <div class="space-y-3">
                            <select class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-primary-blue focus:outline-none text-sm">
                                <option>Age Range</option>
                                <option>0-3 years</option>
                                <option>4-6 years</option>
                                <option>7-12 years</option>
                                <option>13-18 years</option>
                                <option>18+ years</option>
                            </select>
                            
                            <select class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-primary-blue focus:outline-none text-sm">
                                <option>Service Type</option>
                                <option>Speech Therapy</option>
                                <option>Language Therapy</option>
                                <option>Articulation</option>
                                <option>Fluency/Stuttering</option>
                                <option>Voice Therapy</option>
                                <option>Consultation</option>
                            </select>
                        </div>

                        <!-- Compact Message -->
                        <textarea 
                            rows="3"
                            class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-primary-blue focus:outline-none text-sm resize-none"
                            placeholder="Describe your concerns or goals..."></textarea>

                        <!-- Compact File Upload -->
                        <div class="border-2 border-dashed border-gray-200 rounded-lg p-3 text-center hover:border-primary-blue transition-colors">
                            <div class="relative">
                                <input 
                                    type="file" 
                                    id="pdf-upload"
                                    accept=".pdf,.doc,.docx"
                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                    onchange="handleFileUpload(this)">
                                <div>
                                    <i class="fas fa-cloud-upload-alt text-xl text-gray-400 mb-2"></i>
                                    <p class="text-xs font-museo-rounded font-bold text-text-gray mb-1">Upload Files (Optional)</p>
                                    <button type="button" class="px-3 py-1 bg-primary-blue text-white rounded text-xs hover:bg-opacity-90">
                                        Choose File
                                    </button>
                                </div>
                            </div>
                            
                            <div id="file-info" class="mt-2 hidden">
                                <div class="inline-flex items-center px-2 py-1 bg-accent-green bg-opacity-10 text-accent-green rounded text-xs">
                                    <i class="fas fa-file-pdf mr-1"></i>
                                    <span id="file-name" class="break-all"></span>
                                    <button type="button" onclick="removeFile()" class="ml-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Compact Contact Method -->
                        <div>
                            <p class="text-xs font-museo font-medium text-text-gray mb-2">Preferred Contact</p>
                            <div class="grid grid-cols-4 gap-1">
                                <label class="cursor-pointer">
                                    <input type="radio" name="contact-method" value="email" class="sr-only">
                                    <div class="contact-option p-2 border border-gray-200 rounded text-center hover:border-primary-blue transition-colors">
                                        <i class="fas fa-envelope text-primary-blue text-xs mb-1"></i>
                                        <p class="text-xs font-museo">Email</p>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="contact-method" value="phone" class="sr-only">
                                    <div class="contact-option p-2 border border-gray-200 rounded text-center hover:border-primary-blue transition-colors">
                                        <i class="fas fa-phone text-primary-blue text-xs mb-1"></i>
                                        <p class="text-xs font-museo">Phone</p>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="contact-method" value="text" class="sr-only">
                                    <div class="contact-option p-2 border border-gray-200 rounded text-center hover:border-primary-blue transition-colors">
                                        <i class="fas fa-sms text-primary-blue text-xs mb-1"></i>
                                        <p class="text-xs font-museo">Text</p>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="contact-method" value="any" class="sr-only">
                                    <div class="contact-option p-2 border border-gray-200 rounded text-center hover:border-primary-blue transition-colors">
                                        <i class="fas fa-star text-primary-blue text-xs mb-1"></i>
                                        <p class="text-xs font-museo">Any</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Compact Submit -->
                        <button 
                            type="submit"
                            class="w-full py-2 bg-primary-blue text-white font-museo-rounded font-bold text-sm rounded-lg hover:bg-opacity-90 transition-all">
                            <i class="fas fa-paper-plane mr-1"></i>Submit Form
                        </button>

                        <p class="text-xs font-museo text-gray-500 text-center">
                            We'll contact you within 24 hours.
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <!-- Compact Emergency Info -->
        <div class="mt-6 bg-text-gray text-white rounded-xl p-4 text-center">
            <h3 class="text-lg font-museo-rounded font-bold mb-2">Need Immediate Help?</h3>
            <div class="flex justify-center items-center space-x-6 text-sm">
                <div class="flex items-center">
                    <i class="fas fa-phone mr-2 text-accent-yellow"></i>
                    <span>Emergency: 911</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-hospital mr-2 text-accent-green"></i>
                    <span>Crisis: 988</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// ================== TRAFFT WIDGET (Compact) ==================
document.addEventListener('DOMContentLoaded', function() {
    loadTrafftWidget();
    document.getElementById('reload-widget')?.addEventListener('click', loadTrafftWidget);
});

function loadTrafftWidget() {
    const container = document.getElementById('trafft-booking-container');
    const loader = document.getElementById('booking-loader');
    const fallback = document.getElementById('booking-fallback');
    
    loader.style.display = 'flex';
    fallback.classList.add('hidden');
    container.innerHTML = '';
    
    const embedDiv = document.createElement('div');
    embedDiv.className = 'embedded-booking';
    embedDiv.setAttribute('data-url', 'https://talkingtales.wlbookings.com');
    embedDiv.setAttribute('data-query', '&t=s&uuid=6ee23eef-22ec-4cc5-bfd4-3671e0b9f53d');
    embedDiv.setAttribute('data-lang', 'en');
    embedDiv.setAttribute('data-autoresize', '1');
    embedDiv.setAttribute('data-showsidebar', '1');
    
    // Allow the widget to expand naturally, container will handle scrolling
    embedDiv.style.cssText = `
        width: 100%;
        min-height: 500px;
        height: auto;
        border-radius: 0.75rem;
        box-sizing: border-box;
    `;
    
    container.appendChild(embedDiv);
    
    // Remove existing script
    const existingScript = document.querySelector('script[src*="wlbookings.com/embed.js"]');
    if (existingScript) existingScript.remove();
    
    // Load script
    const script = document.createElement('script');
    script.src = 'https://talkingtales.wlbookings.com/embed.js';
    script.async = true;
    
    script.onload = function() {
        const checkInterval = setInterval(function() {
            const iframe = document.querySelector('.embedded-booking iframe');
            if (iframe) {
                clearInterval(checkInterval);
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 1000);
            }
        }, 500);
        
        setTimeout(function() {
            clearInterval(checkInterval);
            if (!document.querySelector('.embedded-booking iframe')) {
                showFallback();
            }
        }, 10000);
    };
    
    script.onerror = showFallback;
    document.body.appendChild(script);
    
    setTimeout(function() {
        if (!document.querySelector('.embedded-booking iframe')) {
            showFallback();
        }
    }, 15000);
}

function showFallback() {
    document.getElementById('booking-loader').style.display = 'none';
    document.getElementById('booking-fallback').classList.remove('hidden');
}

// ================== FORM HANDLING (Compact) ==================
function handleFileUpload(input) {
    const fileInfo = document.getElementById('file-info');
    const fileName = document.getElementById('file-name');
    
    if (input.files && input.files[0]) {
        const file = input.files[0];
        if (file.size > 5 * 1024 * 1024) {
            alert('File must be under 5MB');
            input.value = '';
            return;
        }
        fileName.textContent = file.name;
        fileInfo.classList.remove('hidden');
    }
}

function removeFile() {
    document.getElementById('pdf-upload').value = '';
    document.getElementById('file-info').classList.add('hidden');
}

// Contact method selection
document.querySelectorAll('input[name="contact-method"]').forEach(radio => {
    radio.addEventListener('change', function() {
        document.querySelectorAll('.contact-option').forEach(option => {
            option.classList.remove('border-primary-blue', 'bg-primary-blue', 'bg-opacity-10');
        });
        this.parentElement.querySelector('.contact-option').classList.add('border-primary-blue', 'bg-primary-blue', 'bg-opacity-10');
    });
});

// Form submission
document.getElementById('contact-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<i class="fas fa-check mr-1"></i>Submitted!';
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
</script>

</body>
</html>