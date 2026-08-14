<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talking Tales - Pricing</title>
    <script src="https://cdn.tailwindcss.com"></script>
   <?php include('header-links.php');?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#0B87C5',
                        'secondary': '#FFC73C',
                        'accent': '#F36E3B',
                        'success': '#3DD288',
                        'primary-gray': '#4A4A4A',
                        'cream': '#F9F0E5'
                    },
                    fontFamily: {
                        'heading': ['Inter', 'sans-serif'],
                        'body': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .font-heading {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', sans-serif;
            font-weight: 600;
            letter-spacing: -0.025em;
        }
        
        .font-body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', sans-serif;
            font-weight: 400;
        }

        .pricing-toggle {
            transition: all 0.3s ease;
        }

        .recommended-card {
            border: 2px solid #0B87C5;
            position: relative;
            box-shadow: 0 10px 30px rgba(11, 135, 197, 0.15);
        }

        .recommended-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #FFC73C 0%, #F36E3B 100%);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .feature-list {
            min-height: 280px;
        }

        .contact-section {
            background: linear-gradient(135deg, #F9F0E5 0%, #ffffff 100%);
            border: 1px solid #e5e7eb;
            border-radius: 12px;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <?php include('header.php');?>
    <!-- Header Section -->
    <section class="py-10 px-4 sm:px-6 lg:px-8 bg-white mt-12">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="font-heading text-4xl sm:text-5xl font-bold text-primary-gray mb-4">
                Choose your Talking Tales plan
            </h1>
            <p class="font-body text-lg text-primary-gray/70 max-w-2xl mx-auto mb-8">
                Professional speech therapy sessions designed to help you communicate with confidence
            </p>
            
            <!-- Pricing Toggle -->
            <div class="inline-flex items-center bg-gray-100 rounded-lg p-1 mb-2">
                <button id="individual-toggle" class="pricing-toggle px-6 py-2 text-sm font-medium rounded-md bg-white text-primary-gray shadow-sm">
                    Individual Sessions
                </button>
                <button id="monthly-toggle" class="pricing-toggle px-6 py-2 text-sm font-medium rounded-md text-primary-gray/70">
                    Monthly Packages
                </button>
            </div>
        </div>
    </section>

    <!-- Individual Sessions View -->
    <section id="individual-view" class="py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Adult Individual -->
                <div class="bg-white rounded-lg border border-gray-200 p-8 relative">
                    <div class="mb-6">
                        <h3 class="font-heading text-2xl font-bold text-primary-gray mb-2">Adult Session</h3>
                        <div class="flex items-baseline gap-1 mb-4">
                            <span class="text-4xl font-bold text-primary-gray">₹1,000</span>
                            <span class="text-primary-gray/60 font-body">/session</span>
                        </div>
                        <a href="contact-us#booking-form1" class="block w-full bg-primary text-white font-body font-medium py-3 px-6 rounded-lg hover:bg-primary/90 transition-colors mb-6 text-center">
                            Book Session
                        </a>
                    </div>

                    <div class="feature-list">
                        <p class="font-body text-sm text-primary-gray/70 mb-4">Adult session includes:</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-body text-sm text-primary-gray">Session notes for each session.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-body text-sm text-primary-gray">Progress updates every month.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-body text-sm text-primary-gray">Check in with you every 15 days.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-body text-sm text-primary-gray">At home practice works to be provided.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Child Individual -->
                <div class="bg-white rounded-lg border border-gray-200 p-8 relative">
                    <div class="mb-6">
                        <h3 class="font-heading text-2xl font-bold text-primary-gray mb-2">Child Session</h3>
                        <div class="flex items-baseline gap-1 mb-4">
                            <span class="text-4xl font-bold text-primary-gray">₹800</span>
                            <span class="text-primary-gray/60 font-body">/session</span>
                        </div>
                        <a href="contact-us#booking-form1" class="block w-full bg-accent text-white font-body font-medium py-3 px-6 rounded-lg hover:bg-accent/90 transition-colors mb-6 text-center">
                            Book Session
                        </a>
                    </div>

                    <div class="feature-list">
                        <p class="font-body text-sm text-primary-gray/70 mb-4">Child session includes:</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-body text-sm text-primary-gray">Session notes for each session.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-body text-sm text-primary-gray">Progress updates every month.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-body text-sm text-primary-gray">Check in with you every 15 days.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-body text-sm text-primary-gray">At home practice works to be provided </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Monthly Packages View -->
    <section id="monthly-view" class="py-10 px-4 sm:px-6 lg:px-8 hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-4 gap-8">
                <!-- Starter (Individual Adult) -->
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="mb-6">
                        <h3 class="font-heading text-xl font-bold text-primary-gray mb-2">Single Session</h3>
                        <div class="flex items-baseline gap-1 mb-1">
                            <span class="text-3xl font-bold text-primary-gray">₹1,000</span>
                        </div>
                        <p class="font-body text-sm text-primary-gray/60 mb-4">/adult session</p>
                        <a href="contact-us#booking-form1" class="block w-full border border-gray-300 text-primary-gray font-body font-medium py-2.5 px-4 rounded-lg hover:border-primary hover:text-primary transition-colors text-sm text-center">
                            Book Now
                        </a>
                    </div>

                    <div class="feature-list">
                        <p class="font-body text-xs text-primary-gray/70 mb-4">Single session includes:</p>
                        
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">Session notes for each session.</p>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">Progress updates every month.</p>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">Check in with you every 15 days.</p>
                            </div>
                            
                               <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">At home practice works to be provided </p>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Standard (Child Monthly) -->
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="mb-6">
                        <h3 class="font-heading text-xl font-bold text-primary-gray mb-2">Child Monthly</h3>
                        <div class="flex items-baseline gap-1 mb-1">
                            <span class="text-3xl font-bold text-primary-gray">₹12,800</span>
                            <span class="text-sm text-primary-gray/60 line-through">₹16,000</span>
                        </div>
                        <p class="font-body text-sm text-primary-gray/60 mb-4">/month</p>
                        <a href="contact-us#booking-form1" class="block w-full bg-accent text-white font-body font-medium py-2.5 px-4 rounded-lg hover:bg-accent/90 transition-colors text-sm text-center">
                            Start Plan
                        </a>
                    </div>

                    <div class="feature-list">
                        <p class="font-body text-xs text-primary-gray/70 mb-4">All of Single Session and:</p>
                        
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray"><strong>20 sessions</strong> per month</p>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">1 Parental Guide included</p>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">Save ₹3,200 monthly</p>
                            </div>

                            <!--<div class="flex items-center gap-2">-->
                            <!--    <div class="w-4 h-4 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0">-->
                            <!--        <svg class="w-2.5 h-2.5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
                            <!--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>-->
                            <!--        </svg>-->
                            <!--    </div>-->
                            <!--    <p class="font-body text-xs text-primary-gray">Fun, play-based activities</p>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>

                <!-- Plus (Adult Monthly) - Recommended -->
                <div class="recommended-card bg-white rounded-lg p-8 relative">
                    <div class="recommended-badge">Recommended</div>
                    
                    <div class="mb-6">
                        <h3 class="font-heading text-xl font-bold text-primary-gray mb-2">Adult Monthly</h3>
                        <div class="flex items-baseline gap-1 mb-1">
                            <span class="text-3xl font-bold text-primary-gray">₹16,000</span>
                            <span class="text-sm text-primary-gray/60 line-through">₹20,000</span>
                        </div>
                        <p class="font-body text-sm text-primary-gray/60 mb-4">/month</p>
                        <a href="contact-us#booking-form1" class="block w-full bg-primary text-white font-body font-medium py-2.5 px-4 rounded-lg hover:bg-primary/90 transition-colors text-sm text-center">
                            Start Plan
                        </a>
                    </div>

                    <div class="feature-list">
                        <p class="font-body text-xs text-primary-gray/70 mb-4">All of Single Session and:</p>
                        
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray"><strong>20 sessions</strong> per month</p>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">1 Caretaker Guide included</p>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">Save ₹4,000 monthly</p>
                            </div>

                            <!--<div class="flex items-center gap-2">-->
                            <!--    <div class="w-4 h-4 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">-->
                            <!--        <svg class="w-2.5 h-2.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
                            <!--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>-->
                            <!--        </svg>-->
                            <!--    </div>-->
                            <!--    <p class="font-body text-xs text-primary-gray">Advanced progress tracking</p>-->
                            <!--</div>-->

                            <!--<div class="flex items-center gap-2">-->
                            <!--    <div class="w-4 h-4 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">-->
                            <!--        <svg class="w-2.5 h-2.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
                            <!--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>-->
                            <!--        </svg>-->
                            <!--    </div>-->
                            <!--    <p class="font-body text-xs text-primary-gray">Priority scheduling</p>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>

                <!-- Enterprise (Contact) -->
                <div class="contact-section p-8">
                    <div class="mb-6">
                        <h3 class="font-heading text-xl font-bold text-primary-gray mb-2">In-Clinic Sessions</h3>
                        <div class="flex items-baseline gap-1 mb-4">
                            <span class="text-2xl font-bold text-primary-gray">Contact us</span>
                        </div>
                        <a href="contact-us#booking-form1" class="block w-full border border-primary text-primary font-body font-medium py-2.5 px-4 rounded-lg hover:bg-primary hover:text-white transition-colors text-sm text-center">
                            Contact Sales
                        </a>
                        <p class="font-body text-xs text-primary-gray/70 mt-2 text-center">
                            or <a href="tel:+919573737847" class="text-primary hover:underline">Call us</a>
                        </p>
                    </div>

                    <div class="feature-list">
                        <p class="font-body text-xs text-primary-gray/70 mb-4">All features mentioned and:</p>
                        
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-success/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">In-person therapy sessions</p>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-success/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">Clinic-based assessments</p>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-success/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-2.5 h-2.5 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="font-body text-xs text-primary-gray">Specialized equipment access</p>
                            </div>

                            <div class="pt-4 border-t border-gray-100">
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <a href="tel:+919573737847" class="font-body text-xs text-primary hover:text-primary/80 transition-colors">+91 95737 37847</a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <a href="mailto:info@thetalkingtales.com" class="font-body text-xs text-primary hover:text-primary/80 transition-colors">info@thetalkingtales.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('footer.php');?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const individualToggle = document.getElementById('individual-toggle');
            const monthlyToggle = document.getElementById('monthly-toggle');
            const individualView = document.getElementById('individual-view');
            const monthlyView = document.getElementById('monthly-view');

            // Toggle between views
            individualToggle.addEventListener('click', function() {
                // Update toggle states
                individualToggle.classList.add('bg-white', 'text-primary-gray', 'shadow-sm');
                individualToggle.classList.remove('text-primary-gray/70');
                monthlyToggle.classList.remove('bg-white', 'text-primary-gray', 'shadow-sm');
                monthlyToggle.classList.add('text-primary-gray/70');

                // Show/hide views
                individualView.classList.remove('hidden');
                monthlyView.classList.add('hidden');
            });

            monthlyToggle.addEventListener('click', function() {
                // Update toggle states
                monthlyToggle.classList.add('bg-white', 'text-primary-gray', 'shadow-sm');
                monthlyToggle.classList.remove('text-primary-gray/70');
                individualToggle.classList.remove('bg-white', 'text-primary-gray', 'shadow-sm');
                individualToggle.classList.add('text-primary-gray/70');

                // Show/hide views
                monthlyView.classList.remove('hidden');
                individualView.classList.add('hidden');
            });

            // Button click animations
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    button.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        button.style.transform = 'scale(1)';
                    }, 150);
                });
            });

            // Start with monthly view to highlight recommended plan
            monthlyToggle.click();
        });
    </script>
</body>
</html>