<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Partner With Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
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
                        'museo-rounded': ['Museo Sans', 'sans-serif'],
                        'museo': ['Museo Sans', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .museo-rounded { font-family: 'Museo Sans Rounded', sans-serif; }
        .museo-sans { font-family: 'Museo Sans', sans-serif; }
        
        .section-divider {
            background: linear-gradient(90deg, transparent, #0B87C5, transparent);
            height: 2px;
            margin: 3rem 0;
        }
        
        .benefit-row {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .benefit-row:hover {
            border-left-color: #0B87C5;
            background-color: rgba(255, 255, 255, 0.6);
            transform: translateX(8px);
        }
        
        .icon-container {
            transition: all 0.4s ease;
        }
        
        .benefit-row:hover .icon-container {
            transform: scale(1.1) rotate(5deg);
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .highlight-text {
            position: relative;
            display: inline-block;
        }
        
        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: #3DD288;
            transition: width 0.6s ease;
        }
        
        .highlight-text.animate::after {
            width: 100%;
        }
        
        .timeline-connector {
            position: relative;
        }
        
        .timeline-connector::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, #0B87C5, #3DD288);
            opacity: 0.3;
        }
    </style>
</head>

<section class="bg-primary-cream py-10 px-4 relative overflow-hidden">
  <div class="max-w-6xl mx-auto relative z-10">
    <!-- Section Header -->
    <div class="text-center mb-20 fade-in">
      <h2 class="museo-rounded text-4xl md:text-6xl text-primary-gray mb-8 leading-tight">
        Our <span class="text-primary-blue">5-Step</span> School Collaboration Model
      </h2>
    </div>

    <!-- Step 1 -->
    <div class="benefit-row py-12 px-8 fade-in" style="animation-delay: 0.4s;">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <div class="flex items-center mb-6">
            <div class="icon-container w-16 h-16 bg-primary-orange rounded-2xl flex items-center justify-center mr-6">
              <span class="text-2xl text-white font-bold">01</span>
            </div>
            <h3 class="museo-rounded text-2xl md:text-3xl text-primary-gray">
              Teacher Awareness & Training
            </h3>
          </div>
          <div class="museo text-xl text-primary-gray opacity-80 leading-relaxed space-y-2">
            <p>We empower your educators to become confident first identifiers — without adding to their workload.</p>
            <ul class="list-disc pl-5 space-y-1">
              <li>Recognizing age-specific red flags</li>
              <li>How and when to make referrals</li>
              <li>Understanding developmental benchmarks</li>
            </ul>
          </div>
        </div>
        <div>
          <img src="assets/school/Teacher.webp" alt="Teacher training illustration" class="mx-auto rounded-lg mix-blend-multiply">
        </div>
      </div>
    </div>

    <div class="section-divider"></div>

    <!-- Step 2 -->
    <div class="benefit-row py-12 px-8 fade-in" style="animation-delay: 0.5s;">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="order-2 lg:order-1">
          <img src="assets/school/In-School-1.webp" alt="Child screening illustration" class="w-full rounded-lg">
        </div>
        <div class="order-1 lg:order-2">
          <div class="flex items-center mb-6">
            <div class="icon-container w-16 h-16 bg-primary-yellow rounded-2xl flex items-center justify-center mr-6">
              <span class="text-2xl text-primary-gray font-bold">02</span>
            </div>
            <h3 class="museo-rounded text-2xl md:text-3xl text-primary-gray">
              In-School Screening of Referred Children
            </h3>
          </div>
          <div class="museo text-xl text-primary-gray opacity-80 leading-relaxed space-y-2">
            <p>Our therapists conduct:</p>
            <ul class="list-disc pl-5 space-y-1">
              <li>One-on-one screenings with students</li>
              <li>Classroom observations for natural interaction cues</li>
              <li>Brief reports with referral guidance for parents and school staff</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="section-divider"></div>

    <!-- Step 3 -->
    <div class="benefit-row py-12 px-8 fade-in" style="animation-delay: 0.6s;">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <div class="flex items-center mb-6">
            <div class="icon-container w-16 h-16 bg-primary-blue rounded-2xl flex items-center justify-center mr-6">
              <span class="text-2xl text-white font-bold">03</span>
            </div>
            <h3 class="museo-rounded text-2xl md:text-3xl text-primary-gray">
              Parent Communication Support
            </h3>
          </div>
          <div class="museo text-xl text-primary-gray opacity-80 leading-relaxed space-y-2">
            <p>We assist schools in clinical conversations with parents by:</p>
            <ul class="list-disc pl-5 space-y-1">
              <li>Explaining screening outcomes with empathy</li>
              <li>Emphasizing early intervention</li>
              <li>Guiding the next steps toward assessment or therapy</li>
            </ul>
          </div>
        </div>
        <div>
          <img src="assets/school/Parent.webp" alt="Parent communication illustration" class="mx-auto rounded-lg mix-blend-multiply">
        </div>
      </div>
    </div>

    <div class="section-divider"></div>

    <!-- Step 4 -->
    <div class="benefit-row py-12 px-8 fade-in" style="animation-delay: 0.7s;">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="order-2 lg:order-1">
          <img src="assets/school/Therapy-for-schhool.webp" alt="Therapy planning illustration" class="w-full rounded-lg">
        </div>
        <div class="order-1 lg:order-2">
          <div class="flex items-center mb-6">
            <div class="icon-container w-16 h-16 bg-primary-green rounded-2xl flex items-center justify-center mr-6">
              <span class="text-2xl text-white font-bold">04</span>
            </div>
            <h3 class="museo-rounded text-2xl md:text-3xl text-primary-gray">
              Therapy Planning & Execution
            </h3>
          </div>
          <div class="museo text-xl text-primary-gray opacity-80 leading-relaxed space-y-2">
            <p>If therapy is recommended, we:</p>
            <ul class="list-disc pl-5 space-y-1">
              <li>Design a tailored plan for each child</li>
              <li>Share clear goals and timelines</li>
              <li>Provide progress reports to schools regularly</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="section-divider"></div>

    <!-- Step 5 -->
    <div class="benefit-row py-12 px-8 fade-in" style="animation-delay: 0.8s;">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <div class="flex items-center mb-6">
            <div class="icon-container w-16 h-16 bg-primary-gray rounded-2xl flex items-center justify-center mr-6">
              <span class="text-2xl text-white font-bold">05</span>
            </div>
            <h3 class="museo-rounded text-2xl md:text-3xl text-primary-gray">
              Ongoing Progress Monitoring
            </h3>
          </div>
          <div class="museo text-xl text-primary-gray opacity-80 leading-relaxed space-y-2">
            <p>We continue to support the learning journey by:</p>
            <ul class="list-disc pl-5 space-y-1">
              <li>Sending monthly progress summaries to teachers</li>
              <li>Recommending classroom strategies for support</li>
              <li>Scheduling re-screenings or follow-up evaluations as needed</li>
            </ul>
          </div>
        </div>
        <div>
          <img src="assets/school/Ongoing.webp" alt="Progress monitoring illustration" class="mx-auto rounded-lg mix-blend-multiply">
        </div>
      </div>
    </div>

  </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Trigger highlight text animation
                    const highlightTexts = entry.target.querySelectorAll('.highlight-text');
                    highlightTexts.forEach((text, index) => {
                        setTimeout(() => {
                            text.classList.add('animate');
                        }, index * 200);
                    });
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(element => {
            observer.observe(element);
        });

        // Button interactions
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
            
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'translateY(0)';
                }, 150);
            });
        });

        // Benefit row progressive enhancement
        document.querySelectorAll('.benefit-row').forEach((row, index) => {
            row.addEventListener('mouseenter', function() {
                // Add subtle glow effect
                this.style.boxShadow = '0 0 30px rgba(11, 135, 197, 0.1)';
            });
            
            row.addEventListener('mouseleave', function() {
                this.style.boxShadow = 'none';
            });
        });
    });
</script>

</html>