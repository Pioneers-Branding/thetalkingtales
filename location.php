<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical Locations - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
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
                        'museo-rounded': ['Museo Sans Rounded', 'sans-serif'],
                        'museo': ['Museo Sans', 'sans-serif']
                    }
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
        .museo { font-family: 'Museo Sans', sans-serif; font-weight: 400; }
        
        .location-card {
            transition: all 0.3s ease;
        }
        
        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
        }

        .map-marker {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .map-marker:hover {
            transform: scale(1.2);
        }

        .pulse-dot {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.3); }
        }
    </style>
</head>

<section id="location" class="bg-gradient-to-b from-white to-orange-50 py-16 px-4">
    <div class="container mx-auto">
        <!-- Header -->
        
        
                    <div class="text-center mb-16 md:mb-20">
                
                <h2 class="font-museo-rounded text-4xl md:text-5xl lg:text-6xl font-bold text-primary-gray mb-6 leading-tight">
                    Visit Our <span class="text-primary-blue">Therapy Centers</span>
                    <br class="hidden sm:block">
                </h2>
                
                <p class="font-museo text-lg md:text-xl text-primary-gray/70 max-w-3xl mx-auto leading-relaxed">
          Experience personalized speech therapy in our modern, comfortable facilities located across Hyderabad

                </p>
            </div>

        <!-- Main Grid: Locations + Map -->
        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            <!-- Left: Location Cards -->
            <div class="space-y-6">
                <!-- Madhapur Center -->
                <div class="location-card bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-start space-x-4">
                        <div class="bg-primary-blue p-4 rounded-xl text-white flex-shrink-0">
                            <i class="fas fa-building text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="museo-rounded text-xl text-primary-gray">Madhapur Center</h3>
                                <span class="bg-primary-blue text-white text-xs px-3 py-1 rounded-full museo-rounded">Primary</span>
                            </div>
                            <p class="museo text-primary-gray text-sm opacity-70 mb-4">
                                State-of-the-art facility with modern equipment and private therapy rooms
                            </p>
                            
                            <!-- Features -->
                            <div class="grid grid-cols-2 gap-2 mb-4">
                                <div class="flex items-center text-xs">
                                    <i class="fas fa-check-circle text-primary-green mr-2"></i>
                                    <span class="museo text-primary-gray">Modern Equipment</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <i class="fas fa-check-circle text-primary-green mr-2"></i>
                                    <span class="museo text-primary-gray">Private Rooms</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <i class="fas fa-check-circle text-primary-green mr-2"></i>
                                    <span class="museo text-primary-gray">Child Friendly</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <i class="fas fa-check-circle text-primary-green mr-2"></i>
                                    <span class="museo text-primary-gray">Free Parking</span>
                                </div>
                            </div>
                            
                            <!-- Contact Info -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="text-xs">
                                    <div class="museo text-primary-gray opacity-70">Mon-Sat: 9:00 AM - 6:00 PM</div>
                                </div>
                                <a href="https://www.google.com/maps/place/17%C2%B026'49.5%22N+78%C2%B023'10.6%22E/@17.447075,78.3837091,1037m/data=!3m2!1e3!4b1!4m4!3m3!8m2!3d17.447075!4d78.386284?entry=ttu&g_ep=EgoyMDI1MDcyMy4wIKXMDSoASAFQAw%3D%3D" class="bg-primary-blue text-white px-4 py-2 rounded-lg text-xs museo-rounded hover:bg-blue-600 transition-colors">
                                    <i class="fas fa-directions mr-1"></i>
                                    Directions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sainikpuri Center -->
                <div class="location-card bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-start space-x-4">
                        <div class="bg-primary-green p-4 rounded-xl text-white flex-shrink-0">
                            <i class="fas fa-home text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="museo-rounded text-xl text-primary-gray">Sainikpuri Center</h3>
                                <span class="bg-primary-green text-white text-xs px-3 py-1 rounded-full museo-rounded">Branch</span>
                            </div>
                            <p class="museo text-primary-gray text-sm opacity-70 mb-4">
                                Cozy, family-friendly environment perfect for personalized therapy sessions
                            </p>
                            
                            <!-- Features -->
                            <div class="grid grid-cols-2 gap-2 mb-4">
                                <div class="flex items-center text-xs">
                                    <i class="fas fa-check-circle text-primary-green mr-2"></i>
                                    <span class="museo text-primary-gray">Quiet Space</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <i class="fas fa-check-circle text-primary-green mr-2"></i>
                                    <span class="museo text-primary-gray">Family Areas</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <i class="fas fa-check-circle text-primary-green mr-2"></i>
                                    <span class="museo text-primary-gray">Easy Access</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <i class="fas fa-check-circle text-primary-green mr-2"></i>
                                    <span class="museo text-primary-gray">Play Corner</span>
                                </div>
                            </div>
                            
                            <!-- Contact Info -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="text-xs">
                                    <div class="museo text-primary-gray opacity-70">Mon-Fri: 10:00 AM - 6:00 PM</div>
                                </div>
                                <a href="https://maps.google.com/?q=17.4958362579346,78.5442352294922" class="bg-primary-green text-white px-4 py-2 rounded-lg text-xs museo-rounded hover:bg-green-600 transition-colors">
                                    <i class="fas fa-directions mr-1"></i>
                                    Directions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="bg-primary-blue rounded-2xl p-6 text-white">
                    <h4 class="museo-rounded text-lg mb-4 flex items-center">
                        <i class="fas fa-phone mr-3"></i>
                        Contact Information
                    </h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center">
                            <i class="fas fa-envelope w-4 mr-3 opacity-80"></i>
                            <a href="mailto:info@talkingtales.com" class="museo">info@talkingtales.com</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone w-4 mr-3 opacity-80"></i>
                            <a href=href="tel:+919573737847" class="museo">+91-9573737847</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock w-4 mr-3 opacity-80"></i>
                            <span class="museo">Book online 24/7</span>
                        </div>
                    </div>
<a href="contact-us#booking-form1" class="w-full bg-white text-primary-blue mt-4 py-3 rounded-lg font-museo-rounded hover:bg-gray-50 transition-colors flex items-center justify-center">
  <i class="fas fa-calendar-plus mr-2"></i>
  Schedule Visit
</a>
</div>
            </div>

            <!-- Right: Interactive Map -->
<div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 min-h-[400px] flex flex-col">
    <div class="mb-4">
        <h3 class="museo-rounded text-xl text-primary-gray mb-2 flex items-center">
            <i class="fas fa-map-marked-alt text-primary-orange mr-3"></i>
            Find Our Centers
        </h3>
        <p class="museo text-sm text-primary-gray opacity-70">
            Both locations easily accessible across Hyderabad
        </p>
    </div>

    <!-- Embedded Google Map -->
    <div class="rounded-xl overflow-hidden flex-1">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d4514.982400557947!2d78.38370907516637!3d17.44707498345026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDI2JzQ5LjUiTiA3OMKwMjMnMTAuNiJF!5e1!3m2!1sen!2sin!4v1753440076258!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0; min-height:300px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>


</div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Location card hover effects
        document.querySelectorAll('.location-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.borderColor = '#0B87C5';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.borderColor = '#e5e7eb';
            });
        });

        // Map marker interactions
        document.querySelectorAll('.map-marker').forEach(marker => {
            marker.addEventListener('click', function() {
                const location = this.getAttribute('data-location');
                
                // Highlight corresponding location card
                document.querySelectorAll('.location-card').forEach(card => {
                    card.style.borderColor = '#e5e7eb';
                    card.style.transform = 'translateY(0)';
                });
                
                // Find and highlight the matching card
                if (location === 'madhapur') {
                    const madhaCard = document.querySelectorAll('.location-card')[0];
                    madhaCard.style.borderColor = '#0B87C5';
                    madhaCard.style.transform = 'translateY(-5px)';
                } else if (location === 'sainikpuri') {
                    const sainiCard = document.querySelectorAll('.location-card')[1];
                    sainiCard.style.borderColor = '#3DD288';
                    sainiCard.style.transform = 'translateY(-5px)';
                }
                
                console.log('Selected location:', location);
            });
        });

        // Button interactions
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-1px)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>

</html>