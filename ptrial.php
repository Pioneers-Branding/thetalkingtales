<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Career Pathway - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;700;800&display=wrap');
        
        .museo-rounded {
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        /* Track Pills */
        .track-pill {
            background: white;
            border: 2px solid #E5E7EB;
            border-radius: 9999px;
            padding: 0.75rem 1.5rem;
            margin: 0.25rem;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .track-pill:hover {
            border-color: #F36E3B;
            background: #FFF7ED;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(243, 110, 59, 0.15);
        }
        
        /* Support Pills */
        .support-pill {
            background: #F9FAFB;
            border: 1px solid #E5E7EB;
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            margin: 0.25rem;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }
        
        .support-pill:hover {
            border-color: #F36E3B;
            background: #FFF7ED;
            transform: translateX(4px);
            box-shadow: 0 4px 12px rgba(243, 110, 59, 0.1);
        }
        
        /* Button Styles */
        .btn-primary {
            background: #F36E3B;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 2px 8px rgba(243, 110, 59, 0.2);
        }
        
        .btn-primary:hover {
            background: #EA580C;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(243, 110, 59, 0.3);
        }
        
        .btn-secondary {
            background: transparent;
            color: #0B87C5;
            border: 2px solid #0B87C5;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-secondary:hover {
            background: #0B87C5;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(11, 135, 197, 0.2);
        }
        
        .btn-tertiary {
            background: transparent;
            color: #3DD288;
            border: 2px solid #3DD288;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-tertiary:hover {
            background: #3DD288;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(61, 210, 136, 0.2);
        }
        
        /* Training Badge */
        .training-badge {
            background: #F36E3B;
            color: white;
            padding: 0.375rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }
        
        /* Orientation Items */
        .orientation-item {
            text-align: center;
            padding: 0.5rem;
        }
        
        /* Orientation Box */
        .orientation-box {
            background: #FFF7ED;
            border: 1px solid #FED7AA;
            border-radius: 0.75rem;
            padding: 1rem;
        }
        
        /* Quote Box */
        .quote-box {
            background: #FFF7ED;
            border: 1px solid #FED7AA;
            border-radius: 0.75rem;
            padding: 1.5rem;
            position: relative;
        }
        
        .quote-box::before {
            content: '"';
            font-size: 2rem;
            color: #F36E3B;
            position: absolute;
            top: 0.5rem;
            left: 1rem;
            font-family: serif;
        }
        
        /* Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(15px);
            animation: fadeInUp 0.5s ease-out forwards;
        }
        
        .fade-in:nth-child(1) { animation-delay: 0.1s; }
        .fade-in:nth-child(2) { animation-delay: 0.2s; }
        .fade-in:nth-child(3) { animation-delay: 0.3s; }
        .fade-in:nth-child(4) { animation-delay: 0.4s; }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<!-- Professional Career Pathway Section - Full Width -->
<section class="bg-white py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Section -->
        <div class="flex items-center justify-between mb-6 fade-in">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mr-4">
                    <i class="fas fa-user-md text-orange-600 text-xl"></i>
                </div>
                <div>
                    <div class="training-badge mb-2">
                        <i class="fas fa-graduation-cap mr-1 text-xs"></i>COMPREHENSIVE TRAINING
                    </div>
                    <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800">
                        Professional Career Pathway
                    </h2>
                </div>
            </div>
        </div>
        
        <!-- Introduction & Orientation -->
        <div class="mb-6 fade-in">
            <p class="museo-sans text-lg lg:text-xl text-gray-600 mb-4">
                We train every therapist who joins us, before assigning a single client. Orientation covers ethics, live observations, formats, and reporting.
            </p>
            
            <!-- Orientation Overview -->
            <div class="orientation-box">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="orientation-item">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <i class="fas fa-balance-scale text-orange-600"></i>
                        </div>
                        <p class="museo-sans text-sm font-medium text-gray-700">Ethics</p>
                    </div>
                    <div class="orientation-item">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <i class="fas fa-eye text-orange-600"></i>
                        </div>
                        <p class="museo-sans text-sm font-medium text-gray-700">Live Observations</p>
                    </div>
                    <div class="orientation-item">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <i class="fas fa-file-alt text-orange-600"></i>
                        </div>
                        <p class="museo-sans text-sm font-medium text-gray-700">Formats</p>
                    </div>
                    <div class="orientation-item">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <i class="fas fa-chart-bar text-orange-600"></i>
                        </div>
                        <p class="museo-sans text-sm font-medium text-gray-700">Reporting</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Career Tracks -->
        <div class="mb-6 fade-in">
            <h3 class="museo-rounded text-xl lg:text-2xl font-bold text-gray-800 mb-4">
                Then You Choose Your Track:
            </h3>
            
            <div class="flex flex-wrap">
                <div class="track-pill">
                    <i class="fas fa-child text-blue-600 mr-2"></i>
                    <span class="museo-sans text-base">Early Intervention & School Therapy</span>
                </div>
                <div class="track-pill">
                    <i class="fas fa-hospital text-red-600 mr-2"></i>
                    <span class="museo-sans text-base">Medical SLP (Hospitals & Rehab)</span>
                </div>
                <div class="track-pill">
                    <i class="fas fa-laptop text-green-600 mr-2"></i>
                    <span class="museo-sans text-base">Online Speech & Swallowing Therapy</span>
                </div>
            </div>
        </div>
        
        <!-- Support Section -->
        <div class="mb-6 fade-in">
            <h3 class="museo-rounded text-xl lg:text-2xl font-bold text-gray-800 mb-4">
                We support you with:
            </h3>
            
            <div class="flex flex-wrap">
                <div class="support-pill">
                    <i class="fas fa-users text-blue-600 mr-2"></i>
                    <span class="museo-sans text-base">Ongoing case discussions</span>
                </div>
                <div class="support-pill">
                    <i class="fas fa-tools text-green-600 mr-2"></i>
                    <span class="museo-sans text-base">Therapy tools & workshops</span>
                </div>
                <div class="support-pill">
                    <i class="fas fa-expand-arrows-alt text-orange-600 mr-2"></i>
                    <span class="museo-sans text-base">Flexibility to grow in your style</span>
                </div>
            </div>
        </div>
        
        <!-- Philosophy & CTA -->
        <div class="fade-in">
            <div class="quote-box mb-6">
                <p class="museo-sans text-lg lg:text-xl text-gray-700 text-center font-medium italic">
                    Whether you're starting or restarting, we keep it simple, ethical, and meaningful.
                </p>
            </div>
            
            <div class="text-center">
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="btn-primary">
                        <i class="fas fa-paper-plane mr-2"></i>
                        <span class="museo-sans text-base">Apply Now</span>
                    </button>
                    <button class="btn-secondary">
                        <i class="fas fa-eye mr-2"></i>
                        <span class="museo-sans text-base">Intern or Observe</span>
                    </button>
                    <button class="btn-tertiary">
                        <i class="fas fa-phone mr-2"></i>
                        <span class="museo-sans text-base">Book a Call</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -30px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);
        
        // Observe fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });
        
        // Add click effects to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.4);
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
        
        // Add hover effects to pills
        document.querySelectorAll('.track-pill, .support-pill').forEach(pill => {
            pill.addEventListener('mouseenter', function() {
                if (this.classList.contains('track-pill')) {
                    this.style.transform = 'translateY(-2px)';
                } else {
                    this.style.transform = 'translateX(4px)';
                }
            });
            
            pill.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) translateX(0)';
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