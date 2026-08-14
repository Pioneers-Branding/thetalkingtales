<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partnerships - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<!-- Partnerships Section -->
<!-- Who We Support Section -->
<!-- Who We Support Section -->
<!-- Who We Support Section -->
<section class="py-14 bg-white relative overflow-hidden">
    <style>
.museo-rounded {
  font-family: 'Museo Sans Rounded', sans-serif;
  font-weight: 700;
}  
.museo-sans { font-family: 'Museo Sans', sans-serif; }
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-30px);
            transition: all 0.6s ease;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(30px);
            transition: all 0.6s ease;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
    

    
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12 fade-in">
            <h2 class="font-black text-4xl md:text-6xl text-text-gray mb-4 museo-rounded">
                Who We <span class="text-primary-blue">Support</span>
            </h2>
            <p class="text-lg text-text-gray museo-sans">
                We provide specialized services for adult and geriatric populations, including:
            </p>
        </div>
        
        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left: All Services Content -->
            <div class="slide-in-left">
                <div class="space-y-6">
                    <!-- Service 1: Post-Stroke & Neurological -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary-blue rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-brain text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg lg:text-xl text-text-gray museo-rounded">Post-Stroke & Neurological Rehabilitation</h3>
                        </div>
                    </div>
                    
                    <!-- Service 2: Head & Neck Cancer -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-accent-orange rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-ribbon text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg lg:text-xl text-text-gray museo-rounded">Head & Neck Cancer Patients</h3>
                            <p class="text-sm text-text-gray/70 museo-sans">(Pre-/Post-radiation & Surgery)</p>
                        </div>
                    </div>
                    
                    <!-- Service 3: Tracheostomy -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-text-gray rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-lungs text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg lg:text-xl text-text-gray museo-rounded">Tracheostomy or Ventilator-Supported Individuals</h3>
                        </div>
                    </div>
                    
                    <!-- Service 4: Geriatric Patients -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-accent-green rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-user-friends text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg lg:text-xl text-text-gray museo-rounded">Geriatric Patients with Speech, Voice, or Swallowing Issues</h3>
                        </div>
                    </div>
                    
                    <!-- Service 5: Long-Term Care -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-amber-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-hospital text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg lg:text-xl text-text-gray museo-rounded">Patients in Long-Term or Post-Surgical Rehabilitation</h3>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <div class="mt-8">
                    <a href="#form-direct" class="bg-primary-blue text-white px-6 py-3 rounded-full font-bold museo-sans hover:bg-blue-700 transition-all duration-300 shadow-lg">
                        <i class="fas fa-phone mr-2"></i>
                        Contact Our Specialists
                    </a>
                </div>
            </div>
            
            <!-- Right: Single Image -->
<div class="slide-in-right">
  <div class="relative">
    <img
      src="assets/rehab/Specialized-Services1.webp"
      alt="Specialized medical rehabilitation services"
      class="w-full h-96 lg:h-[500px] object-cover rounded-3xl shadow-xl "
    />
  </div>
</div>        </div>
    </div>
    
    <script>
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 100);
                }
            });
        }, observerOptions);

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            animateElements.forEach(el => observer.observe(el));
        });
    </script>
</section>
</html>