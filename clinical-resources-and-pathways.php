<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinical Pathways & Resources - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/css">
    
        <?php include('header-links.php');?>
        
        
        <style>
                
.speech-bubble-shape {
    position: relative;
    border-radius: 50% 50% 50% 8%;
    overflow: hidden;
}

.speech-bubble-shape::before {
    /*content: '';*/
    position: absolute;
    bottom: 15%;
    left: 5%;
    width: 25%;
    height: 25%;
    background: white;
    border-radius: 50%;
    z-index: 1;
}

.speech-bubble-shape img {
    position: relative;
    z-index: 0;
}
        </style>

    <style>
        @import url('https://use.typekit.net/af.css');
        
        .museo-sans-rounded {
            font-family: "museo-sans-rounded", sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: "museo-sans", sans-serif;
            font-weight: 500;
        }
        
        .museo-sans-medium {
            font-family: "museo-sans", sans-serif;
            font-weight: 500;
        }
    </style>
    // <script>
    //     tailwind.config = {
    //         theme: {
    //             extend: {
    //                 colors: {
    //                     'primary-blue': '#0B87C5',
    //                     'primary-yellow': '#FFC73C',
    //                     'primary-orange': '#F36E3B',
    //                     'primary-green': '#3DD288',
    //                     'text-gray': '#4A4A4A',
    //                     'bg-cream': '#F9F0E5'
    //                 }
    //             }
    //         }
    //     }
    // </script>
</head>
<body class="bg-white museo-sans text-[#4A4A4A]">
    
        <?php include('header.php');?>

    
    <!-- Main Header Section -->
<section class="bg-bg-cream min-h-screen flex items-center py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        
        <!-- LEFT SIDE CONTENT -->
        <div class="text-left">
            <!-- Main Title -->
            <h1 class="museo-sans-rounded text-4xl sm:text-5xl lg:text-6xl text-primary-blue mb-6 leading-tight">
               <span class="text-[#4A4A4A]">Clinical Resources</span> & Pathways
            </h1>

            <!-- Icon Separator -->
            <!--<div class="flex mb-8">-->
            <!--    <div class="w-16 h-1 bg-primary-yellow rounded-full"></div>-->
            <!--</div>-->

            <!-- Introduction Content -->
            <div class="space-y-6 text-lg sm:text-xl leading-relaxed max-w-3xl">
                <p class="museo-sans-medium">
                    At Talking Tales Rehabilitation Services</span>, we ensure that every session is backed by trusted, evidence-based tools and techniques. Our therapists use a range of digital and interactive clinical resources tailored to each client's unique needs.
                </p>

                <p class="text-[#4A4A4A]">
                    We use a mix of structured tools and real conversations to build a plan that fits you (or your child) from Day 1.
                </p>
            </div>

            <!-- Call to Action -->
            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                <a href="contact-us" class="bg-primary-blue hover:bg-primary-blue text-white px-8 py-4 rounded-lg transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <i class="fas fa-calendar-check"></i>
                    Book an Appointment
                </a>

            </div>
        </div>

        <!-- RIGHT SIDE IMAGE -->
   <div class="relative slide-in-right">
  <div class="relative overflow-hidden">
    <div class="w-full aspect-[7/6] speech-bubble-shape shadow-xl border border-gray-200">
      <img 
        src="assets/clinical/Clinical.webp" 
        alt="Speech therapy session"
        class="w-full h-full object-cover mix-blend-multiply"
      />
    </div>
  </div>
</div>


    </div>
</section>

    <!-- Content Sections Container -->

<!-- What We Use in Therapy Section with Single Image -->
<section class="py-16 border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <!--<div class="text-center mb-12">-->
        <!--    <h2 class="museo-sans-rounded text-3xl sm:text-4xl text-primary-blue mb-4">-->
        <!--        What We Use in Therapy-->
        <!--    </h2>-->
        <!--    <div class="w-12 h-1 bg-primary-orange mx-auto rounded-full"></div>-->
        <!--</div>-->
        
              <div class="text-center mb-12">
                <h1 class="museo-sans-rounded text-4xl sm:text-5xl lg:text-6xl text-[#4A4A4A] mb-6">
                 What We<span class="text-primary-blue"> Use in Therapy</span>
                </h1>
                <!--<p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">-->
                <!--    At Talking Tales, we ensure every session is backed by trusted, evidence-based tools and techniques tailored to each client's unique needs.-->
                <!--</p>-->
            </div>

  

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Standardized Assessment Tools -->
            <div class="bg-white p-6 rounded-lg border-l-4 border-primary-blue shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-primary-blue text-white px-4 py-3 rounded-lg">
                        <i class="fas fa-clipboard-check text-xl"></i>
                    </div>
                    <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold">
                        Standardized Assessment Tools
                    </h3>
                </div>
                <ul class="space-y-3 text-[#4A4A4A]">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>Digitized versions of assessment tools like REEL, GFTA, WABC, etc. <em class="text-sm text-gray-500">(used with permission/licensing where applicable)</em></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>Language and speech milestone checklists</span>
                    </li>
                </ul>
            </div>

            <!-- Interactive Therapy Materials -->
            <div class="bg-white p-6 rounded-lg border-l-4 border-primary-green shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-primary-green text-white p-3 rounded-lg">
                        <i class="fas fa-gamepad text-xl"></i>
                    </div>
                    <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold">
                        Interactive Therapy Materials
                    </h3>
                </div>
                <ul class="space-y-3 text-[#4A4A4A]">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>Visual schedules and cue cards</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>Virtual flashcards and articulation decks</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>AAC apps and communication boards</span>
                    </li>
                </ul>
            </div>

            <!-- Evidence-Based Protocols -->
            <div class="bg-white p-6 rounded-lg border-l-4 border-primary-orange shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-primary-orange text-white px-3 py-3 rounded-lg">
                        <i class="fas fa-microscope text-xl"></i>
                    </div>
                    <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold">
                        Evidence-Based Protocols
                    </h3>
                </div>
                <ul class="space-y-3 text-[#4A4A4A]">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>Prompt hierarchy and scaffolding methods</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>Oral-motor and swallow stimulation guides</span>
                    </li>
                </ul>
            </div>

            <!-- Customized Home Programs -->
            <div class="bg-white p-6 rounded-lg border-l-4 border-primary-yellow shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-start gap-4 mb-4">
                    <div class="bg-primary-yellow text-white p-3 rounded-lg">
                        <i class="fas fa-home text-xl"></i>
                    </div>
                    <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold">
                        Customized Home Programs
                    </h3>
                </div>
                <ul class="space-y-3 text-[#4A4A4A]">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>Printable and digital worksheets</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>Parent/caregiver coaching videos and tutorials</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-circle text-primary-yellow text-xs mt-2"></i>
                        <span>Weekly progress trackers and goal sheets</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Call to Action -->
 <div class="text-center mt-12">
    <a href="contact-us" class="bg-primary-blue hover:bg-primary-blue text-white px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
        <i class="fas fa-calendar-check"></i>
        Book an Appointment
    </a>
</div>
    </div>
</section>

<!-- Communication & Follow-up Process Section -->
<!-- Communication & Follow-up Process Section - Compact -->

 <section class="py-14 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="museo-sans-rounded text-4xl sm:text-5xl lg:text-6xl text-[#4A4A4A] mb-6">
                    Secure, <span class="text-primary-blue">Child-Friendly Platforms</span>
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                                We use HIPAA-compliant video platforms and child-safe, interactive digital whiteboards to deliver therapy in a secure, engaging environment.
                </p>
            </div>

            <!-- Main Content -->
            <div class="flex flex-col lg:flex-row gap-12 items-start">
                
                <!-- Services List -->
                <div class="lg:w-1/2 space-y-8">
                    
               

                    <!-- Language Support -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-3 h-3 bg-primary-green rounded-full"></div>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold mb-2">
                                Language Support
                            </h3>
                            <p class="text-[#4A4A4A] leading-relaxed">
                                Resources are adapted for multiple Indian languages to ensure cultural and linguistic relevance.
                            </p>
                        </div>
                    </div>

                    <!-- Starter Kits -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-3 h-3 bg-primary-orange rounded-full"></div>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold mb-2">
                                Starter Kits
                            </h3>
                            <p class="text-[#4A4A4A] leading-relaxed">
                                For families that prefer tactile tools, we offer optional physical kits with therapy tools, visual aids, and sensory items, delivered to your doorstep.
                            </p>
                        </div>
                    </div>

                    <!-- Promise Statement -->
                    <div class="bg-bg-cream p-6 rounded-lg border-l-4 border-primary-yellow">
                        <p class="text-[#4A4A4A] leading-relaxed font-medium text-lg">
                            We don't just "do therapy." We show you what's working, where we're going, and how we'll get there.
                        </p>
                    </div>

                    <!-- Call to Action -->
<div class="pt-6">
    <a href="contact-us" class="bg-primary-blue hover:bg-primary-blue text-white px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
        <i class="fas fa-calendar-check"></i>
        Schedule Your Consultation
    </a>
</div>
                </div>

                <!-- Image -->
<div class="lg:w-1/2 relative">
  <div class="aspect-[7/6] speech-bubble-shape overflow-hidden shadow-xl border border-gray-200">
    <img 
      src="assets/clinical/Child-Friendly-Platforms.webp" 
      alt="Child engaging in secure, friendly online speech therapy session"
      class="w-full h-full object-cover"
    />
  </div>
</div>


            </div>

        </div>
    </section>
    
    
       <!-- Communication & Follow-up Section -->
    <section class="py-14 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="museo-sans-rounded text-4xl sm:text-5xl lg:text-6xl text-primary-gray mb-6">
                    How We <span class="text-primary-blue">Support You</span>
                </h1>
             <!--   <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">-->
             <!--After the session (if requested), we share clear and simple notes as a Google Doc or PDF — so you can stay connected to the process.-->
             <!--   </p>-->
            </div>

            <!-- Main Content -->
            <div class="flex flex-col lg:flex-row gap-12 items-start">
                
                <!-- Services List -->
                <div class="lg:w-1/2 space-y-8">
                    
                    <!-- Initial Assessment -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-3 h-3 bg-primary-blue rounded-full"></div>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl text-text-gray font-semibold mb-2">
                                Initial Assessment
                            </h3>
                            <p class="text-text-gray leading-relaxed">
                                We begin with a thorough first session to understand your needs. You'll receive a secure email or link with the details.
                            </p>
                        </div>
                    </div>

                    <!-- Session Notes -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-3 h-3 bg-primary-orange rounded-full"></div>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold mb-2">
                                Session Notes
                            </h3>
                            <p class="text-[#4A4A4A] leading-relaxed">
                                After the session (if requested), we share clear and simple notes as a Google Doc or PDF  so you can stay connected to the process.
                            </p>
                        </div>
                    </div>

                    <!-- Progress Updates -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-3 h-3 bg-primary-green rounded-full"></div>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold mb-2">
                                Progress Updates
                            </h3>
                            <p class="text-[#4A4A4A] leading-relaxed">
                                Every 15 days, you'll get a progress report via email or WhatsApp. It's our way of keeping you in the loop.
                            </p>
                        </div>
                    </div>

                    <!-- Check-In with You -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-3 h-3 bg-primary-yellow rounded-full"></div>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold mb-2">
                                Check-In with You
                            </h3>
                            <p class="text-[#4A4A4A] leading-relaxed">
                                We ask for feedback every 15 days  either through a quick Google Form or a voice note. Your experience matters.
                            </p>
                        </div>
                    </div>

                    <!-- At-Home Practice -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-3 h-3 bg-primary-blue rounded-full"></div>
                        </div>
                        <div>
                            <h3 class="museo-sans-rounded text-xl text-[#4A4A4A] font-semibold mb-2">
                                At-Home Practice
                            </h3>
                            <p class="text-[#4A4A4A] leading-relaxed">
                                Each week, you'll receive a home practice tracker. It's a gentle way to support carryover and track what's working.
                            </p>
                        </div>
                    </div>

                    <!-- Call to Action -->
              <div class="pt-6">
    <a href="contact-us" class="bg-primary-blue hover:bg-primary-blue text-white px-8 py-4 rounded-lg transition-all duration-300 inline-flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
        <i class="fas fa-calendar-check"></i>
        Schedule Your Consultation
    </a>
</div>

                </div>

                <!-- Image -->
<div class="lg:w-1/2 relative">
  <div class="aspect-[7/6] speech-bubble-shape overflow-hidden shadow-xl border border-gray-200">
    <img 
      src="assets/clinical/Initial-Assessment.webp" 
      alt="Child engaging in secure, friendly online speech therapy session"
      class="w-full h-full object-cover"
    />
  </div>
</div>

            </div>

        </div>
    </section>


    
    <!-- Therapy Pathway Section -->
    <!-- The Therapy Pathway Section -->
<section class="py-14 lg:py-20 bg-gradient-to-b from-white to-blue-50">
    
          <div class="text-center  mb-12 mx-auto">
        <h2 class="museo-rounded text-4xl lg:text-5xl font-bold text-[#4A4A4A] mb-4 mx-auto">
          The Therapy Pathway: <span style="color:#0B87C5;">Step-by-Step</span>
        </h2>
        <p class="museo-sans text-lg text-gray-600 leading-relaxed">
          Here’s what the therapy journey looks like:
        </p>
      </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

    <!-- Left Side Image -->
<!-- Left Side Image (Aligned with content theme) -->
  <div class="relative h-full flex">
    <div class="flex-grow rounded-2xl overflow-hidden shadow-2xl border border-gray-200">
      <img 
        src="assets/clinical/Therapy.webp" 
        alt="Child on therapy session"
        class="w-full h-full object-cover"
      />
    </div>
  </div>    <!-- Right Side Content -->
    <div>
      <!-- Section Header -->

      <!-- Timeline -->
      <div class="relative pl-8 sm:pl-12">
        <!-- Vertical Line -->
        <div class="absolute top-0 left-4 sm:left-6 w-0.5 h-full bg-blue-200"></div>

        <!-- Steps -->
        <div class="space-y-10">

          <!-- Step 1 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">1</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Start with an Online Screener</h3>
              <p class="museo-sans text-gray-600 mt-1">
                A quick, confidential form helps us understand your concern.
              </p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">2</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Book a Detailed Clinical Assessment</h3>
              <p class="museo-sans text-gray-600 mt-1">
                A speech-language therapist will conduct a detailed assessment over Zoom to understand concerns, observe the client, and plan goals.
              </p>
              <ul class="list-disc list-inside text-gray-600 mt-2">
                <li>An overview of findings</li>
                <li>Suitability for therapy</li>
                <li>Preliminary therapy goals</li>
              </ul>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">3</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Therapy Confirmation & Slot Booking</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Choose your preferred time slot, get matched with the right therapist based on age, language, and therapy needs, and receive your onboarding kit.
              </p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">4</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Therapy Begins</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Weekly online sessions via Zoom Pro with secure, high-quality interaction:
              </p>
              <ul class="list-disc list-inside text-gray-600 mt-2">
                <li>Face-to-face guidance</li>
                <li>Screen sharing, games, visuals</li>
                <li>Real-time feedback and practice</li>
              </ul>
            </div>
          </div>

          <!-- Step 5 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">5</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Get Your Weekly Home Practice Sheet</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Customized activities to reinforce therapy, support daily communication, and involve family members.
              </p>
            </div>
          </div>

          <!-- Step 6 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">6</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Progress Review – Every 15 Days</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Detailed biweekly progress report with therapist updates, homework review, and next-step strategies.
              </p>
            </div>
          </div>

          <!-- Step 7 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">7</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Goal Update & Therapy Adjustment</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Goals evolve as you progress to ensure continuous improvement.
              </p>
            </div>
          </div>

          <!-- Step 8 -->
          <div class="relative flex items-start">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#0B87C5] text-white font-bold">8</div>
            </div>
            <div class="ml-6">
              <h3 class="museo-rounded text-xl font-bold text-gray-800">Completion & Transition</h3>
              <p class="museo-sans text-gray-600 mt-1">
                Therapy tapers off with a summary, discharge report, and optional monthly follow-ups.
              </p>
            </div>
          </div>

        </div>

        <!-- Buttons -->
        <div class="text-center lg:text-left mt-12 flex flex-col sm:flex-row gap-4">
          <a href="index#services-all" class="bg-[#0B87C5] hover:bg-[#0969a5] text-white px-8 py-4 rounded-xl museo-sans font-semibold flex items-center justify-center">
            Start Online Screener
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
          <a href="contact-us" class="bg-gray-700 hover:bg-gray-900 text-white px-8 py-4 rounded-xl museo-sans font-semibold flex items-center justify-center">
            Book Clinical Assessment
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>    
    

    <!-- Career Pathway Section -->
<!--    <section class="py-14 px-4 sm:px-6 lg:px-8">-->
<!--        <div class="max-w-7xl mx-auto">-->
            
            <!-- Header -->
<!--            <div class="text-center mb-12">-->
<!--                <h1 class="museo-sans-rounded text-4xl sm:text-5xl text-[#4A4A4A] mb-6">-->
<!--                    For <span class="text-primary-blue">Professionals</span> — Career Pathway-->
<!--                </h1>-->
<!--                <p class="text-lg text-gray-600 max-w-3xl mx-auto">-->
<!--                    Every professional who joins Talking Tales begins with a focused training and onboarding phase. From there, they move into a sector that matches their interest and clinical strengths.-->
<!--                </p>-->
<!--            </div>-->

            <!-- Main Content Layout -->
<!--         <div class="flex flex-col lg:flex-row gap-12 items-stretch min-h-[750px]">-->
                
                <!-- Content Side -->
<!--                <div class="lg:w-3/5 space-y-10">-->
                    
                    <!-- Initial Training Section -->
<!--                    <div>-->
<!--                        <h2 class="museo-sans-rounded text-2xl text-primary-blue font-semibold mb-4">-->
<!--                            1. Initial Training & Observation-->
<!--                        </h2>-->
                        
<!--                        <p class="text-gray-600 italic mb-4">-->
<!--                            For all therapists regardless of experience-->
<!--                        </p>-->

<!--                        <div class="space-y-3 mb-6">-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Orientation to our therapy style, ethics, and documentation</span>-->
<!--                            </div>-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Observation of live or recorded sessions</span>-->
<!--                            </div>-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Learning pathways for each service type (e.g., dysphagia, communication delay)</span>-->
<!--                            </div>-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Introduction to our formats: progress notes, home programs, family counselling</span>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="bg-bg-cream p-4 rounded-lg border-l-4 border-primary-blue">-->
<!--                            <p class="text-sm">-->
<!--                                <strong>Duration:</strong> 2–4 weeks (flexible based on prior experience) <br>-->
<!--                                <strong>Outcome:</strong> Cleared for independent or co-led sessions-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Track Selection Section -->
<!--                    <div>-->
<!--                        <h2 class="museo-sans-rounded text-2xl text-primary-blue font-semibold mb-6">-->
<!--                            2. Then You Choose Your Track:-->
<!--                        </h2>-->
                        
                        
                        
<!--                        <div class="space-y-3 mb-6">-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Early Intervention & School Therapy</span>-->
<!--                            </div>-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Medical SLP (Hospitals & Rehab)</span>-->
<!--                            </div>-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Online Speech & Swallowing Therapy</span>-->
<!--                            </div>-->
                     
<!--                        </div>-->

<!--                    </div>-->

                    <!-- Growth Section -->
<!--                    <div>-->
<!--                        <h2 class="museo-sans-rounded text-2xl text-primary-blue font-semibold mb-4">-->
<!--                            3. Grow and Upskill with Support-->
<!--                        </h2>-->

<!--                        <div class="space-y-3 mb-6">-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Regular case discussions and feedback</span>-->
<!--                            </div>-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Access to therapy resources and clinical tools</span>-->
<!--                            </div>-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Short workshops and upskilling opportunities</span>-->
<!--                            </div>-->
<!--                            <div class="flex items-start gap-3">-->
<!--                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>-->
<!--                                <span>Optional content contribution, research, and events</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Closing Message -->
<!--                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-primary-blue">-->
<!--                        <p class="text-lg leading-relaxed font-medium">-->
<!--                            You don't have to fit into rigid titles — just show up with care, consistency, and curiosity. We'll guide you into the work that suits you best.-->
<!--                        </p>-->
<!--                    </div>-->

<!--                </div>-->

                <!-- Image Side -->
<!--              <div class="lg:w-2/5 flex flex-col justify-between">-->
  <!-- Image container -->
<!--  <div class="flex-1 overflow-hidden rounded-lg shadow-lg">-->
<!--    <img -->
<!--      src="assets/clinical/For-Professionals.webp" -->
<!--      alt="Speech therapy professionals in training and development session" -->
<!--      class="w-full h-full object-cover"-->
<!--    />-->
<!--  </div>-->

  <!-- Why Join Box -->
<!--  <div class="bg-primary-blue text-white p-6 rounded-lg mt-6">-->
<!--    <h3 class="museo-sans-rounded text-xl font-semibold mb-3">-->
<!--      Why Join Our Team?-->
<!--    </h3>-->
<!--    <ul class="space-y-2 text-sm">-->
<!--      <li class="flex items-start gap-2">-->
<!--        <i class="fas fa-check text-primary-yellow text-xs mt-1"></i>-->
<!--        <span>Flexible career tracks</span>-->
<!--      </li>-->
<!--      <li class="flex items-start gap-2">-->
<!--        <i class="fas fa-check text-primary-yellow text-xs mt-1"></i>-->
<!--        <span>Comprehensive training</span>-->
<!--      </li>-->
<!--      <li class="flex items-start gap-2">-->
<!--        <i class="fas fa-check text-primary-yellow text-xs mt-1"></i>-->
<!--        <span>Ongoing support</span>-->
<!--      </li>-->
<!--      <li class="flex items-start gap-2">-->
<!--        <i class="fas fa-check text-primary-yellow text-xs mt-1"></i>-->
<!--        <span>Growth opportunities</span>-->
<!--      </li>-->
<!--    </ul>-->
<!--  </div>-->
<!--</div>-->

<!--            </div>-->

            <!-- Call to Actions -->
<!--            <div class="text-center mt-12">-->
<!--                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">-->
<!--                    <a href="contact-us" class="bg-primary-blue hover:bg-primary-blue text-white px-8 py-4 rounded-lg transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">-->
<!--                        <i class="fas fa-paper-plane"></i>-->
<!--                        Apply Now-->
<!--                    </a>-->
                    
                    <!--<button class="bg-white text-primary-blue px-8 py-4 rounded-lg transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">-->
                    <!--    <i class="fas fa-user-graduate"></i>-->
                    <!--    Intern-->
                    <!--</button>-->
                    
<!--                    <a href="contacy-us" class="bg-primary-blue hover:bg-primary-blue text-white px-8 py-4 rounded-lg transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">-->
<!--                        <i class="fas fa-phone"></i>-->
<!--                        Book a Call-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </section>-->
  
      <?php include('footer.php');?>


    <script>
        // Smooth scroll behavior for CTA button
        document.addEventListener('DOMContentLoaded', function() {
            const ctaButton = document.querySelector('button');
            
            ctaButton.addEventListener('click', function() {
                // Add booking functionality here
                console.log('Book appointment clicked');
                // You can integrate with your booking system here
            });
            
            // Add subtle hover animations
            ctaButton.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            ctaButton.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>

</body>
</html>