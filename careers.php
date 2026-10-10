<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Talking Tales Speech Therapy</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <?php include('header-links.php');?>
    
<style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;700;800&display=swap');
        
        .museo-rounded {
            font-family: 'Museo Sans rounded', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans',sans-serif;
        }
        
        /* Form Input Styles */
        .form-input {
            transition: all 0.3s ease;
            border: 2px solid #E5E7EB;
        }
        
        .form-input:focus {
            border-color: #0B87C5;
            box-shadow: 0 0 0 3px rgba(11, 135, 197, 0.1);
            outline: none;
        }
        
        .form-input:valid {
            border-color: #3DD288;
        }
        
        .form-input.error {
            border-color: #F36E3B;
            animation: shake 0.5s ease-in-out;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        /* File Upload Styles */
        .file-upload {
            border: 2px dashed #E5E7EB;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .file-upload:hover {
            border-color: #0B87C5;
            background: #F8FAFC;
        }
        
        .file-upload.dragover {
            border-color: #0B87C5;
            background: #EBF8FF;
        }
        
        /* Button Styles */
        .btn-primary {
            background: #0B87C5;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary:hover {
            background: #0969A3;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(11, 135, 197, 0.3);
        }
        
        .btn-primary:active {
            transform: translateY(0);
        }
        
        /* Loading Animation */
        .loading-spinner {
            border: 2px solid transparent;
            border-top: 2px solid #ffffff;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Success Animation */
        .success-checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: block;
            stroke-width: 3;
            stroke: #3DD288;
            stroke-miterlimit: 10;
            animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
        }
        
        .success-checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 3;
            stroke-miterlimit: 10;
            stroke: #3DD288;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }
        
        .success-checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }
        
        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }
        
        @keyframes scale {
            0%, 100% {
                transform: none;
            }
            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }
        
        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #3DD288;
            }
        }
        
        /* Stagger Animation */
        .stagger-item {
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.6s ease-out forwards;
        }
        
        .stagger-item:nth-child(1) { animation-delay: 0.1s; }
        .stagger-item:nth-child(2) { animation-delay: 0.2s; }
        .stagger-item:nth-child(3) { animation-delay: 0.3s; }
        .stagger-item:nth-child(4) { animation-delay: 0.4s; }
        .stagger-item:nth-child(5) { animation-delay: 0.5s; }
        .stagger-item:nth-child(6) { animation-delay: 0.6s; }
        
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Country Code Dropdown */
        .country-dropdown select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }
    </style>


</head>
<body class="museo-sans text-gray-custom">
    <!-- Navigation -->
    <?php include('header.php');?>

       <section class="py-14 mt-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="museo-sans-rounded text-4xl sm:text-5xl text-[#4A4A4A] mb-6">
                    For <span class="text-primary-blue">Professionals</span> — Career Pathway
                </h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Every professional who joins Talking Tales begins with a focused training and onboarding phase. From there, they move into a sector that matches their interest and clinical strengths.
                </p>
            </div>

            <!-- Main Content Layout -->
         <div class="flex flex-col lg:flex-row gap-12 items-stretch min-h-[750px]">
                
                <!-- Content Side -->
                <div class="lg:w-3/5 space-y-10">
                    
                    <!-- Initial Training Section -->
                    <div>
                        <h2 class="museo-sans-rounded text-2xl text-primary-blue font-semibold mb-4">
                            1. Initial Training & Observation
                        </h2>
                        
                        <p class="text-gray-600 italic mb-4">
                            For all therapists regardless of experience
                        </p>

                        <div class="space-y-3 mb-6">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Orientation to our therapy style, ethics, and documentation</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Observation of live or recorded sessions</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Learning pathways for each service type (e.g., dysphagia, communication delay)</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Introduction to our formats: progress notes, home programs, family counselling</span>
                            </div>
                        </div>

                        <div class="bg-bg-cream p-4 rounded-lg border-l-4 border-primary-blue">
                            <p class="text-sm">
                                <strong>Duration:</strong> 2–4 weeks (flexible based on prior experience) <br>
                                <strong>Outcome:</strong> Cleared for independent or co-led sessions
                            </p>
                        </div>
                    </div>

                    <!-- Track Selection Section -->
                    <div>
                        <h2 class="museo-sans-rounded text-2xl text-primary-blue font-semibold mb-6">
                            2. Then You Choose Your Track:
                        </h2>
                        
                        
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Early Intervention & School Therapy</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Medical SLP (Hospitals & Rehab)</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Online Speech & Swallowing Therapy</span>
                            </div>
                     
                        </div>

                    </div>

                    <!-- Growth Section -->
                    <div>
                        <h2 class="museo-sans-rounded text-2xl text-primary-blue font-semibold mb-4">
                            3. Grow and Upskill with Support
                        </h2>

                        <div class="space-y-3 mb-6">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Regular case discussions and feedback</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Access to therapy resources and clinical tools</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Short workshops and upskilling opportunities</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-circle text-primary-blue text-xs mt-2 flex-shrink-0"></i>
                                <span>Optional content contribution, research, and events</span>
                            </div>
                        </div>
                    </div>

                    <!-- Closing Message -->
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-primary-blue">
                        <p class="text-lg leading-relaxed font-medium">
                            You don't have to fit into rigid titles — just show up with care, consistency, and curiosity. We'll guide you into the work that suits you best.
                        </p>
                    </div>

                </div>

                <!-- Image Side -->
              <div class="lg:w-2/5 flex flex-col justify-between">
  <!-- Image container -->
  <div class="flex-1 overflow-hidden rounded-lg shadow-lg">
    <img 
      src="assets/clinical/For-Professionals.webp" 
      alt="Speech therapy professionals in training and development session" 
      class="w-full h-full object-cover"
    />
  </div>

  <!-- Why Join Box -->
  <div class="bg-primary-blue text-white p-6 rounded-lg mt-6">
    <h3 class="museo-sans-rounded text-xl font-semibold mb-3">
      Why Join Our Team?
    </h3>
    <ul class="space-y-2 text-sm">
      <li class="flex items-start gap-2">
        <i class="fas fa-check text-primary-yellow text-xs mt-1"></i>
        <span>Flexible career tracks</span>
      </li>
      <li class="flex items-start gap-2">
        <i class="fas fa-check text-primary-yellow text-xs mt-1"></i>
        <span>Comprehensive training</span>
      </li>
      <li class="flex items-start gap-2">
        <i class="fas fa-check text-primary-yellow text-xs mt-1"></i>
        <span>Ongoing support</span>
      </li>
      <li class="flex items-start gap-2">
        <i class="fas fa-check text-primary-yellow text-xs mt-1"></i>
        <span>Growth opportunities</span>
      </li>
    </ul>
  </div>
</div>

            </div>

            <!-- Call to Actions -->
            <div class="text-center mt-12">
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#formContainer" class="bg-primary-blue hover:bg-primary-blue text-white px-8 py-4 rounded-lg transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <i class="fas fa-paper-plane"></i>
                        Apply Now
                    </a>
                    
                    <!--<button class="bg-white text-primary-blue px-8 py-4 rounded-lg transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">-->
                    <!--    <i class="fas fa-user-graduate"></i>-->
                    <!--    Intern-->
                    <!--</button>-->
                    
                    <a href="#formContainer" class="bg-primary-blue hover:bg-primary-blue text-white px-8 py-4 rounded-lg transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <i class="fas fa-phone"></i>
                        Book a Call
                    </a>
                </div>
            </div>

        </div>
    </section>
    
    
 <!-- Career Application Section -->
<section class="py-16 lg:py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center bg-blue-100 text-primary-blue px-4 py-2 rounded-full museo-sans text-sm font-semibold mb-6">
                <i class="fas fa-briefcase mr-2"></i>
                Join Our Team
            </div>
            <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800 mb-4">
                Apply for a Career at Talking Tales
            </h2>
            <p class="museo-sans text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Ready to make a difference in people's lives? Join our passionate team of speech therapy professionals and help transform lives through communication.
            </p>
        </div>

        <!-- Application Form -->
        <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12">
            <div id="formContainer">
                <form  action="https://app.formester.com/forms/aDer2rHHJ/submissions" method="POST" enctype="multipart/form-data">
                    <div class="space-y-10">
                        
                        <!-- Personal Information Section -->
                        <div>
                            <h3 class="museo-rounded text-xl font-bold text-gray-800 mb-6 flex items-center">
                                <i class="fas fa-user text-primary-blue mr-3"></i>
                                Personal Information
                            </h3>
                            
                            <!-- Grid for personal info -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <!-- Full Name -->
                                <div class="stagger-item">
                                    <label for="fullName" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                        Full Name *
                                    </label>
                                    <input 
                                        type="text" 
                                        id="fullName" 
                                        name="fullName" 
                                        required
                                        class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                        placeholder="Enter your full name"
                                    >
                                </div>

                                <!-- Email -->
                                <div class="stagger-item">
                                    <label for="email" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                        Email Address *
                                    </label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        required
                                        class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                        placeholder="your.email@example.com"
                                    >
                                </div>

                                <!-- Phone Number -->
                                <div class="stagger-item">
                                    <label class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                        Phone Number *
                                    </label>
                                    <div class="flex flex-col sm:flex-row gap-2">
                                        <div class="country-dropdown w-full sm:w-auto">
                                            <select name="countryCode" required class="form-input w-full px-3 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                                <option value="+91">🇮🇳 +91</option>
                                                <option value="+1">🇺🇸 +1</option>
                                                <option value="+44">🇬🇧 +44</option>
                                                <option value="+971">🇦🇪 +971</option>
                                                <option value="+65">🇸🇬 +65</option>
                                                <option value="+60">🇲🇾 +60</option>
                                                <option value="+61">🇦🇺 +61</option>
                                            </select>
                                        </div>
                                        <input 
                                            type="tel" 
                                            name="phoneNumber" 
                                            required
                                            class="form-input flex-1 w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                            placeholder="Enter phone number"
                                            pattern="[0-9]{7,15}"
                                        >
                                    </div>
                                </div>

                                <!-- Current Location -->
                                <div class="stagger-item">
                                    <label for="location" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                        Current Location *
                                    </label>
                                    <input 
                                        type="text" 
                                        id="location" 
                                        name="location" 
                                        required
                                        class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                        placeholder="City, State/Country"
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Professional Information Section -->
                        <div>
                            <h3 class="museo-rounded text-xl font-bold text-gray-800 mb-6 flex items-center">
                                <i class="fas fa-graduation-cap text-green-600 mr-3"></i>
                                Professional Information
                            </h3>

                            <!-- Grid for professional info -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <!-- Position Applied -->
                                <div class="stagger-item">
                                    <label for="position" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                        Position Applied For *
                                    </label>
                                    <select name="position" id="position" required class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                        <option value="">Select Position</option>
                                        <option value="Speech-Language Pathologist">Speech-Language Pathologist</option>
                                        <option value="Swallowing Therapist">Swallowing Therapist</option>
                                        <option value="Pediatric Speech Therapist">Pediatric Speech Therapist</option>
                                        <option value="Adult Speech Therapist">Adult Speech Therapist</option>
                                        <option value="Therapy Assistant">Therapy Assistant</option>
                                        <option value="Clinical Coordinator">Clinical Coordinator</option>
                                        <option value="Administrative Role">Administrative Role</option>
                                        <option value="Other">Other (Please specify in message)</option>
                                    </select>
                                </div>

                                <!-- Years of Experience -->
                                <div class="stagger-item">
                                    <label for="experience" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                        Years of Experience *
                                    </label>
                                    <select name="experience" id="experience" required class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                        <option value="">Select Experience</option>
                                        <option value="Fresh Graduate">Fresh Graduate</option>
                                        <option value="0-1 years">0-1 years</option>
                                        <option value="1-3 years">1-3 years</option>
                                        <option value="3-5 years">3-5 years</option>
                                        <option value="5-10 years">5-10 years</option>
                                        <option value="10+ years">10+ years</option>
                                    </select>
                                </div>

                                <!-- Highest Qualification -->
                                <div class="stagger-item">
                                    <label for="qualification" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                        Highest Qualification *
                                    </label>
                                    <input 
                                        type="text" 
                                        id="qualification" 
                                        name="qualification" 
                                        required
                                        class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                        placeholder="e.g., Master's in Speech-Language Pathology"
                                    >
                                </div>

                                <!-- Expected Salary -->
                                <div class="stagger-item">
                                    <label for="salary" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                        Expected Salary (Annual)
                                    </label>
                                    <select name="salary" id="salary" class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                        <option value="">Select Range (Optional)</option>
                                        <option value="Under 3 LPA">Under ₹3 LPA</option>
                                        <option value="3-5 LPA">₹3-5 LPA</option>
                                        <option value="5-8 LPA">₹5-8 LPA</option>
                                        <option value="8-12 LPA">₹8-12 LPA</option>
                                        <option value="12-15 LPA">₹12-15 LPA</option>
                                        <option value="15+ LPA">₹15+ LPA</option>
                                        <option value="Negotiable">Negotiable</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Documents Section -->
                        <div>
                            <h3 class="museo-rounded text-xl font-bold text-gray-800 mb-6 flex items-center">
                                <i class="fas fa-file-upload text-orange-600 mr-3"></i>
                                Documents
                            </h3>

                            <!-- Resume Upload -->
                            <div class="stagger-item">
                                <label class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                    Resume/CV * (PDF, DOC, DOCX - Max 5MB)
                                </label>
                                <div class="file-upload rounded-xl p-6 text-center" id="resumeUpload">
                                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-3"></i>
                                    <p class="museo-sans text-gray-600 mb-2 text-sm">Drag and drop your resume here, or click to browse</p>
                                    <p class="museo-sans text-xs text-gray-500">Supported formats: PDF, DOC, DOCX</p>
                                    <input type="file" name="resume" id="resumeFile" accept=".pdf,.doc,.docx" required class="hidden">
                                    <div id="resumeFileName" class="hidden mt-3 text-green-600 font-medium text-sm"></div>
                                </div>
                            </div>

                            <!-- Cover Letter -->
                            <div class="stagger-item mt-6">
                                <label for="coverLetter" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                    Why do you want to join Talking Tales? *
                                </label>
                                <textarea 
                                    id="coverLetter" 
                                    name="coverLetter" 
                                    required
                                    rows="6"
                                    class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white resize-none"
                                    placeholder="Tell us about your passion for speech therapy, why you're interested in this role, and what you can bring to our team..."
                                ></textarea>
                            </div>

                            <!-- Consent Checkbox -->
                            <div class="stagger-item mt-6">
                                <div class="flex items-start space-x-3">
                                    <input type="checkbox" id="consent" name="consent" required class="mt-1 flex-shrink-0 cursor-pointer">
                                    <label for="consent" class="museo-sans text-xs sm:text-sm text-gray-600 cursor-pointer leading-relaxed">
                                        I consent to The Talking Tales storing and processing my resume and personal data for recruitment and credential verification purposes in accordance with the <a href="legal,policies-and-T&C#privacy-policy" target="_blank" class="text-primary-blue underline">Privacy Policy</a>. *
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-8 stagger-item">
                        <button 
                            type="submit" 
                      
                            class="btn-primary text-white px-10 py-4 rounded-xl museo-sans font-semibold text-lg flex items-center mx-auto"
                        >
                            <span id="submitText">
                                <i class="fas fa-paper-plane mr-3"></i>
                                Submit Application
                            </span>
                            <div id="loadingSpinner" class="loading-spinner hidden"></div>
                        </button>
                    </div>
                </form>
            </div>

          
        </div>
    </div>
</section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('careerForm');
            const formContainer = document.getElementById('formContainer');
            const successContainer = document.getElementById('successContainer');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const loadingSpinner = document.getElementById('loadingSpinner');
            
            // File Upload Handling
            const resumeUpload = document.getElementById('resumeUpload');
            const resumeFile = document.getElementById('resumeFile');
            const resumeFileName = document.getElementById('resumeFileName');
            
            // Click to upload
            resumeUpload.addEventListener('click', () => resumeFile.click());
            
            // Drag and drop
            resumeUpload.addEventListener('dragover', (e) => {
                e.preventDefault();
                resumeUpload.classList.add('dragover');
            });
            
            resumeUpload.addEventListener('dragleave', () => {
                resumeUpload.classList.remove('dragover');
            });
            
            resumeUpload.addEventListener('drop', (e) => {
                e.preventDefault();
                resumeUpload.classList.remove('dragover');
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    resumeFile.files = files;
                    handleFileSelect(files[0]);
                }
            });
            
            resumeFile.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    handleFileSelect(e.target.files[0]);
                }
            });
            
            function handleFileSelect(file) {
                const maxSize = 5 * 1024 * 1024; // 5MB
                const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                
                if (file.size > maxSize) {
                    alert('File size should not exceed 5MB');
                    return;
                }
                
                if (!allowedTypes.includes(file.type)) {
                    alert('Please upload a PDF, DOC, or DOCX file');
                    return;
                }
                
                resumeFileName.textContent = `✓ ${file.name}`;
                resumeFileName.classList.remove('hidden');
                resumeUpload.classList.add('border-green-500', 'bg-green-50');
            }
            
            // Form Submission
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                
                if (validateForm()) {
                    await submitForm();
                }
            });
            
            function validateForm() {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                // Clear previous errors
                clearErrors();
                
                requiredFields.forEach(field => {
                    if (!field.value.trim() && field.type !== 'file') {
                        showError(field, 'This field is required');
                        isValid = false;
                    }
                });
                
                // Validate email
                const email = document.getElementById('email');
                if (email.value && !isValidEmail(email.value)) {
                    showError(email, 'Please enter a valid email address');
                    isValid = false;
                }
                
                // Validate file
                if (!resumeFile.files.length) {
                    alert('Please upload your resume');
                    isValid = false;
                }
                
                return isValid;
            }
            
            function isValidEmail(email) {
                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            }
            
            function showError(input, message) {
                input.classList.add('error');
                const errorDiv = input.closest('div').querySelector('.error-message');
                if (errorDiv) {
                    errorDiv.textContent = message;
                    errorDiv.classList.remove('hidden');
                }
                
                setTimeout(() => {
                    input.classList.remove('error');
                }, 3000);
            }
            
            function clearErrors() {
                document.querySelectorAll('.form-input').forEach(input => {
                    input.classList.remove('error');
                });
                document.querySelectorAll('.error-message').forEach(error => {
                    error.classList.add('hidden');
                });
            }
            
            async function submitForm() {
                // Show loading state
                submitText.classList.add('hidden');
                loadingSpinner.classList.remove('hidden');
                submitBtn.disabled = true;
                
                try {
                    // TODO: Replace with your actual Formster endpoint
                    // const formData = new FormData(form);
                    // const response = await fetch('YOUR_FORMSTER_CAREER_URL', {
                    //     method: 'POST',
                    //     body: formData
                    // });
                    
                    // Simulate API call for demo
                    await new Promise(resolve => setTimeout(resolve, 3000));
                    
                    // Show success state
                    showSuccess();
                    
                } catch (error) {
                    console.error('Error submitting form:', error);
                    // Reset button state
                    submitText.classList.remove('hidden');
                    loadingSpinner.classList.add('hidden');
                    submitBtn.disabled = false;
                    alert('An error occurred. Please try again.');
                }
            }
            
            function showSuccess() {
                formContainer.classList.add('hidden');
                successContainer.classList.remove('hidden');
            }
            
            // Real-time validation
            document.querySelectorAll('.form-input').forEach(input => {
                input.addEventListener('input', () => {
                    if (input.classList.contains('error')) {
                        input.classList.remove('error');
                        const errorDiv = input.closest('div').querySelector('.error-message');
                        if (errorDiv) {
                            errorDiv.classList.add('hidden');
                        }
                    }
                });
            });
            
            // Phone number formatting
            document.querySelector('input[type="tel"]').addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
            });
            
            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, observerOptions);
            
            // Observe stagger animation elements
            document.querySelectorAll('.stagger-item').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

    <?php include('footer.php');?>

        
</body>
</html>