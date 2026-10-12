<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal, Privacy Policy & Compliance Terms - Talking Tales</title>
    <meta name="description" content="Comprehensive legal documentation, privacy policy, medical disclaimers, and terms of service for The Talking Tales Speech Therapy Clinic.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&family=Nunito+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <?php include('header-links.php');?>

    <style>
        .museo-rounded {
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .policy-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            scroll-margin-top: 100px;
        }
        
        .policy-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            transition: all 0.3s ease;
        }
        
        .policy-card.blue::before { background: #0B87C5; }
        .policy-card.green::before { background: #3DD288; }
        .policy-card.orange::before { background: #F36E3B; }
        .policy-card.yellow::before { background: #FFC73C; }
        .policy-card.purple::before { background: #8B5CF6; }
        .policy-card.red::before { background: #EF4444; }

        .nav-pill {
            transition: all 0.2s ease;
        }
        .nav-pill:hover, .nav-pill.active {
            background-color: #0B87C5;
            color: #ffffff;
        }

        .highlight-badge {
            background: rgba(11, 135, 197, 0.1);
            color: #0B87C5;
            padding: 4px 12px;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    
    <?php include('header.php');?>

    <!-- Header Section -->
    <section class="bg-white mt-16 py-12 lg:py-16 border-b border-gray-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center space-x-2 highlight-badge mb-4">
                <i class="fas fa-shield-alt text-[#0B87C5]"></i>
                <span>Compliance & Regulatory Documentation</span>
            </div>
            <h1 class="museo-rounded text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Legal, Privacy & <span class="text-[#0B87C5]">Compliance Hub</span>
            </h1>
            <p class="museo-sans text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                At The Talking Tales, transparency, clinical ethics, patient safety, and data confidentiality form the bedrock of our speech, language, swallowing, and cognitive healthcare services. This document outlines our data protection measures under the Digital Personal Data Protection (DPDP) Act, clinical compliance under National Medical Commission (NMC) & Rehabilitation Council guidelines, and operational policies.
            </p>
            <div class="mt-4 text-xs text-gray-500 font-medium">
                Last Updated & Clinically Audited: January 2025 | Applicable to all Web & Clinical Operations
            </div>
        </div>
    </section>

    <!-- Navigation Bar for Quick Jump -->
    <section class="sticky top-20 z-30 bg-white/95 backdrop-blur-md border-b border-gray-200 py-3 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 overflow-x-auto">
            <div class="flex items-center space-x-2 md:space-x-3 text-xs md:text-sm font-semibold whitespace-nowrap">
                <a href="#privacy-policy" class="nav-pill px-3 py-1.5 rounded-lg text-gray-700 bg-gray-100 flex items-center gap-1.5">
                    <i class="fas fa-user-shield text-[#0B87C5]"></i> Privacy Policy
                </a>
                <a href="#medical-disclaimer" class="nav-pill px-3 py-1.5 rounded-lg text-gray-700 bg-gray-100 flex items-center gap-1.5">
                    <i class="fas fa-notes-medical text-red-500"></i> Medical Disclaimer
                </a>
                <a href="#advertising-ethics-policy" class="nav-pill px-3 py-1.5 rounded-lg text-gray-700 bg-gray-100 flex items-center gap-1.5">
                    <i class="fas fa-certificate text-purple-600"></i> NMC & Advertising Ethics
                </a>
                <a href="#terms-of-service" class="nav-pill px-3 py-1.5 rounded-lg text-gray-700 bg-gray-100 flex items-center gap-1.5">
                    <i class="fas fa-file-contract text-yellow-600"></i> Terms of Service
                </a>
                <a href="#cookies-notice" class="nav-pill px-3 py-1.5 rounded-lg text-gray-700 bg-gray-100 flex items-center gap-1.5">
                    <i class="fas fa-cookie-bite text-green-600"></i> Cookies Notice
                </a>
                <a href="#school-partnerships" class="nav-pill px-3 py-1.5 rounded-lg text-gray-700 bg-gray-100 flex items-center gap-1.5">
                    <i class="fas fa-school text-orange-600"></i> Institutional Terms
                </a>
                <a href="#grievance-redressal" class="nav-pill px-3 py-1.5 rounded-lg text-gray-700 bg-gray-100 flex items-center gap-1.5">
                    <i class="fas fa-headset text-blue-600"></i> Grievance Officer
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="bg-gray-50 py-10 lg:py-14">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- 1. Privacy Policy Section -->
            <div id="privacy-policy" class="policy-card blue bg-white rounded-2xl p-6 lg:p-10 shadow-md">
                <div class="flex items-start space-x-4 mb-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center border border-blue-100">
                            <i class="fas fa-user-shield text-2xl text-[#0B87C5]"></i>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block text-xs uppercase tracking-wider font-bold text-[#0B87C5] mb-1">Section 1 • DPDP Act & Global Privacy Standards</div>
                        <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-900">
                            Privacy Policy & Patient Data Governance
                        </h2>
                    </div>
                </div>

                <div class="prose max-w-none text-gray-600 space-y-6 text-sm lg:text-base leading-relaxed">
                    <p>
                        The Talking Tales (“Talking Tales”, “we”, “our”, or “us”) operates clinical speech, language, swallowing, voice, and developmental therapy services, telehealth consultation platforms, and educational partnership programs. We are deeply committed to protecting the privacy, confidentiality, and security of all personal and sensitive health data collected from patients, parents/guardians, adult clients, educational institutions, and healthcare partners.
                    </p>

                    <div class="bg-blue-50/70 border border-blue-100 rounded-xl p-5">
                        <h3 class="font-bold text-gray-800 mb-2 flex items-center gap-2">
                            <i class="fas fa-info-circle text-[#0B87C5]"></i> 1.1 Scope & Regulatory Applicability
                        </h3>
                        <p class="text-sm text-gray-700">
                            This Privacy Policy governs data collection across our website (<a href="https://thetalkingtales.com" class="text-[#0B87C5] underline">thetalkingtales.com</a>), digital screening tools, appointment booking mechanisms, telemedicine portals, and physical clinics in Hyderabad and Secunderabad, Telangana. It is formulated in strict compliance with the <strong>Digital Personal Data Protection Act (DPDPA 2023 - India)</strong>, the Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data or Information) Rules 2011, and international data privacy principles.
                        </p>
                    </div>

                    <h3 class="font-bold text-gray-900 text-lg">1.2 Categories of Personal & Health Data We Collect</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm lg:text-base">
                        <li><strong>Personal Identification Data:</strong> Full name of parent/guardian, full name of child/client, date of birth/age range, relationship to client, gender, physical address, email address, and primary telephone number.</li>
                        <li><strong>Sensitive Personal Data & Health Records:</strong> Speech and language assessment responses, medical diagnoses (e.g., Autism Spectrum, ADHD, Cerebral Palsy, GBS, Stroke/Aphasia, Dysphagia, Articulation Disorders), developmental history, therapy records, progress evaluation charts, uploaded medical reports, and clinical session observation notes.</li>
                        <li><strong>Telehealth & Communication Data:</strong> Video/audio consultation records (where explicitly consented for clinical documentation), email correspondences, and chat logs.</li>
                        <li><strong>Technical & Analytical Data:</strong> IP addresses, browser specifications, device identifiers, and anonymized user interaction telemetry collected through secure cookies to optimize website performance.</li>
                    </ul>

                    <h3 class="font-bold text-gray-900 text-lg">1.3 Purpose & Lawful Basis of Processing</h3>
                    <p>We process personal and health data strictly on the basis of informed, explicit consent and clinical necessity for the following purposes:</p>
                    <div class="grid md:grid-cols-2 gap-4 my-3">
                        <div class="p-4 bg-gray-50 border border-gray-200 rounded-xl">
                            <div class="font-semibold text-gray-800 mb-1 flex items-center gap-2"><i class="fas fa-stethoscope text-[#0B87C5]"></i> Clinical Evaluation & Therapy</div>
                            <p class="text-xs text-gray-600">Administering personalized speech-language assessments, formulating Individualized Education & Therapy Plans (IEPs), and tracking rehabilitative progress.</p>
                        </div>
                        <div class="p-4 bg-gray-50 border border-gray-200 rounded-xl">
                            <div class="font-semibold text-gray-800 mb-1 flex items-center gap-2"><i class="fas fa-calendar-check text-[#3DD288]"></i> Consultations & Scheduling</div>
                            <p class="text-xs text-gray-600">Managing appointment bookings, tele-practice connections, session reminders, and follow-up care instructions.</p>
                        </div>
                        <div class="p-4 bg-gray-50 border border-gray-200 rounded-xl">
                            <div class="font-semibold text-gray-800 mb-1 flex items-center gap-2"><i class="fas fa-school text-[#F36E3B]"></i> Institutional Collaboration</div>
                            <p class="text-xs text-gray-600">Conducting structured on-campus screenings and teacher-parent collaborative guidance with explicit school and parental authorization.</p>
                        </div>
                        <div class="p-4 bg-gray-50 border border-gray-200 rounded-xl">
                            <div class="font-semibold text-gray-800 mb-1 flex items-center gap-2"><i class="fas fa-shield-alt text-[#FFC73C]"></i> Safety, Quality & Compliance</div>
                            <p class="text-xs text-gray-600">Adhering to statutory medical record-keeping mandates, legal compliance, fraud prevention, and clinical quality audits.</p>
                        </div>
                    </div>

                    <h3 class="font-bold text-gray-900 text-lg">1.4 Verifiable Parental & Guardian Consent (Children's Privacy)</h3>
                    <div class="p-4 bg-amber-50/70 border-l-4 border-amber-400 rounded-r-xl">
                        <p class="text-sm text-gray-800 font-medium">
                            <i class="fas fa-child text-amber-600 mr-1"></i> A significant portion of our clinical speech therapy services is directed toward children under the age of 18. In strict adherence to Section 9 of the DPDP Act 2023:
                        </p>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-xs text-gray-700">
                            <li>We <strong>never</strong> process personal or medical data of a child without verifiable consent from the parent or lawful legal guardian.</li>
                            <li>We do <strong>not</strong> engage in behavioral tracking, profiling, or targeted commercial advertising directed toward children.</li>
                            <li>Parents/guardians hold the absolute right to review, rectify, or request the deletion of their child's therapy records subject to statutory medical retention mandates.</li>
                        </ul>
                    </div>

                    <h3 class="font-bold text-gray-900 text-lg">1.5 Data Storage, Security Measures & Retention</h3>
                    <p>
                        We employ comprehensive physical, technical, and administrative safeguards to protect sensitive clinical data:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-sm">
                        <li><strong>Encryption:</strong> High-grade 256-bit TLS/SSL encryption for all data in transit across our website and form endpoints; encrypted storage for medical records.</li>
                        <li><strong>Access Controls:</strong> Strict role-based access protocols restricting patient medical charts exclusively to licensed treating therapists, clinical directors, and authorized coordinators.</li>
                        <li><strong>Retention Periods:</strong> Patient clinical records are retained in compliance with healthcare documentation guidelines (typically for a minimum of 7 to 10 years or until the child attains legal majority plus statutory limitation periods) to ensure continuity of care, after which they are securely expunged or anonymized.</li>
                    </ul>

                    <h3 class="font-bold text-gray-900 text-lg">1.6 Data Sharing & Third-Party Processors</h3>
                    <p>
                        <strong>We DO NOT sell, rent, monetize, or commercially trade your personal or health data.</strong> Data is shared strictly on a need-to-know basis with:
                    </p>
                    <ul class="list-disc pl-5 space-y-1 text-sm">
                        <li><strong>Direct Healthcare Providers:</strong> Licensed speech pathologists, occupational therapists, pediatricians, or hospital rehabilitation teams directly involved in the patient's care with authorized consent.</li>
                        <li><strong>Secure Service Vendors:</strong> Verified cloud hosting providers, encrypted form processing services (Formester), and tele-health infrastructure operating under binding data protection agreements.</li>
                        <li><strong>Legal Authorities:</strong> Only when strictly mandated by a valid judicial court order, statutory regulation, or medical emergency.</li>
                    </ul>

                    <h3 class="font-bold text-gray-900 text-lg">1.7 User Rights (Data Principal Rights)</h3>
                    <p>Under applicable data protection laws, you retain the following enforceable rights:</p>
                    <div class="grid sm:grid-cols-3 gap-3 my-2 text-xs">
                        <div class="p-3 bg-gray-100 rounded-lg">
                            <strong class="block text-gray-800 mb-1">Right to Access & Review</strong>
                            Request a summary of personal and clinical data held by us.
                        </div>
                        <div class="p-3 bg-gray-100 rounded-lg">
                            <strong class="block text-gray-800 mb-1">Right to Correction</strong>
                            Request rectification of inaccurate, outdated, or incomplete details.
                        </div>
                        <div class="p-3 bg-gray-100 rounded-lg">
                            <strong class="block text-gray-800 mb-1">Right to Erasure & Consent Revocation</strong>
                            Withdraw consent or request data erasure (subject to medical record retention laws).
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Medical & Clinical Disclaimer Section -->
            <div id="medical-disclaimer" class="policy-card red bg-white rounded-2xl p-6 lg:p-10 shadow-md">
                <div class="flex items-start space-x-4 mb-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center border border-red-100">
                            <i class="fas fa-notes-medical text-2xl text-red-500"></i>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block text-xs uppercase tracking-wider font-bold text-red-500 mb-1">Section 2 • Clinical Disclaimers & Professional Boundaries</div>
                        <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-900">
                            Medical & Clinical Service Disclaimer
                        </h2>
                    </div>
                </div>

                <div class="prose max-w-none text-gray-600 space-y-5 text-sm lg:text-base leading-relaxed">
                    <div class="p-4 bg-red-50 border-l-4 border-red-500 rounded-r-xl">
                        <h3 class="font-bold text-red-900 mb-1 text-base">
                            <i class="fas fa-exclamation-triangle mr-1"></i> Critical Notice Regarding Medical Information & Emergency Services
                        </h3>
                        <p class="text-xs sm:text-sm text-red-800 leading-normal">
                            This website, its online screening tools, assessment questionnaires, and blog articles are intended purely for informational, educational, and guidance purposes. They do NOT constitute medical diagnosis, clinical prescription, or emergency medical treatment.
                        </p>
                    </div>

                    <h3 class="font-bold text-gray-900 text-lg">2.1 No Doctor-Patient Relationship via Website Use</h3>
                    <p>
                        Browsing this website, submitting an online contact form, completing an online developmental checklist, or downloading resource materials does not establish a formal doctor-patient or therapist-client clinical relationship. A clinical relationship is formed only upon execution of formal clinical intake, mutual consent documentation, and an individualized assessment by a qualified speech-language pathologist or allied healthcare professional.
                    </p>

                    <h3 class="font-bold text-gray-900 text-lg">2.2 Individual Variability & No Outcome Guarantees</h3>
                    <p>
                        Speech, language, fluency, voice, and swallowing rehabilitation outcomes vary considerably from person to person. Progress is contingent upon multiple clinical factors, including the nature and severity of the underlying condition, neurological status, age of intervention, consistency of clinical sessions, and adherence to home practice recommendations. <strong>The Talking Tales makes no explicit or implied guarantees of specific clinical cures or standardized timelines.</strong>
                    </p>

                    <h3 class="font-bold text-gray-900 text-lg">2.3 Medical Emergencies</h3>
                    <p>
                        Our website, inquiry forms, and online chat channels are not monitored 24/7 for acute medical emergencies. If you or your child experience severe medical distress, sudden acute choking/aspiration episodes, sudden loss of consciousness, acute airway blockage, or acute neurological emergencies, please contact emergency healthcare services (e.g., Dial 112 / 108 in India) or visit your nearest hospital casualty department immediately.
                    </p>

                    <h3 class="font-bold text-gray-900 text-lg">2.4 Informal Screening Tools vs. Comprehensive Diagnostic Evaluations</h3>
                    <p>
                        Our interactive screening tools for children, teenagers, and adults are preliminary checklists intended solely to highlight red flags and indicators that may warrant professional evaluation. They do not replace standard psychometric batteries, formal videofluoroscopic swallowing studies (VFSS/FEES), clinical articulation tests, or standardized language diagnostic assessments conducted by licensed clinicians.
                    </p>
                </div>
            </div>

            <!-- 3. NMC Compliance & Advertising Ethics Section -->
            <div id="advertising-ethics-policy" class="policy-card purple bg-white rounded-2xl p-6 lg:p-10 shadow-md">
                <span id="testimonials-policy" class="scroll-mt-24"></span>
                <div class="flex items-start space-x-4 mb-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-purple-50 rounded-2xl flex items-center justify-center border border-purple-100">
                            <i class="fas fa-certificate text-2xl text-purple-600"></i>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block text-xs uppercase tracking-wider font-bold text-purple-600 mb-1">Section 3 • Medical Advertising & Ethical Conduct Standards</div>
                        <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-900">
                            NMC Compliance, Advertising Standards & Professional Ethics
                        </h2>
                    </div>
                </div>

                <div class="prose max-w-none text-gray-600 space-y-5 text-sm lg:text-base leading-relaxed">
                    <p>
                        The Talking Tales strictly adheres to the <strong>National Medical Commission (NMC) Registered Medical Practitioner (Professional Conduct) Regulations</strong>, the Rehabilitation Council of India (RCI) guidelines, the Consumer Protection Act, and statutory healthcare marketing regulations in India:
                    </p>

                    <div class="grid md:grid-cols-2 gap-4 my-2">
                        <div class="p-4 bg-purple-50/60 border border-purple-100 rounded-xl">
                            <h4 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-ban text-purple-600"></i> Prohibition of Exaggerated Claims
                            </h4>
                            <p class="text-xs text-gray-700">
                                We strictly prohibit and refrain from using exaggerated claims, superlatives, or self-laudatory descriptions such as “best doctor,” “No. 1 clinic,” “100% success rate,” or “guaranteed cure.” Clinical rehabilitation outcomes vary individually and cannot be guaranteed.
                            </p>
                        </div>
                        <div class="p-4 bg-purple-50/60 border border-purple-100 rounded-xl">
                            <h4 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-user-slash text-purple-600"></i> Ban on Promotional Testimonials & Photos
                            </h4>
                            <p class="text-xs text-gray-700">
                                In compliance with statutory medical advertising codes, using patient testimonials, before-and-after treatment photographs or videos, or clinical outcome reviews for promotional and marketing purposes is strictly banned and not published on this platform.
                            </p>
                        </div>
                    </div>

                    <h3 class="font-bold text-gray-900 text-lg">3.1 Prohibition of Commercial Hooks, Discounts & Referral Fees</h3>
                    <p>
                        Healthcare is a sacred public trust. The Talking Tales explicitly enforces:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-sm">
                        <li><strong>No Promotional Discounts:</strong> We do not offer commercial discounts, flash sales, festive rebate schemes, or cut-rate marketing packages for clinical therapies.</li>
                        <li><strong>No Free Consultations as Marketing Hooks:</strong> We strictly refrain from using deceptive "free consultation" or "complimentary assessment" hooks designed solely to solicit or entangle prospective patients. Screening tools provided are informal, objective educational self-checklists only.</li>
                        <li><strong>No Referral Fees or Fee-Splitting:</strong> We strictly prohibit paying or receiving referral commissions, finder's fees, kickbacks, or financial remuneration for client or institutional referrals.</li>
                        <li><strong>No Manipulated Online Reviews:</strong> We prohibit paid endorsements, solicited reviews, fake ratings, or manipulated social media engagement.</li>
                    </ul>

                    <h3 class="font-bold text-gray-900 text-lg">3.2 Transparent & Objective Professional Information</h3>
                    <p>
                        All clinical, diagnostic, and therapy details published by The Talking Tales are strictly objective, educational, and evidence-based. They are intended solely to assist individuals and families in understanding speech, language, swallowing, voice, and developmental communication needs, without making comparative or disparaging claims against other practitioners or healthcare organizations.
                    </p>
                </div>
            </div>

            <!-- 4. Terms of Service Section -->
            <div id="terms-of-service" class="policy-card yellow bg-white rounded-2xl p-6 lg:p-10 shadow-md">
                <div class="flex items-start space-x-4 mb-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center border border-yellow-100">
                            <i class="fas fa-file-contract text-2xl text-yellow-600"></i>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block text-xs uppercase tracking-wider font-bold text-yellow-600 mb-1">Section 4 • User Agreement & Service Terms</div>
                        <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-900">
                            Terms of Service & Clinical Conditions
                        </h2>
                    </div>
                </div>

                <div class="prose max-w-none text-gray-600 space-y-5 text-sm lg:text-base leading-relaxed">
                    <p>
                        By accessing our website, booking appointments, engaging in tele-practice therapy, or participating in institutional programs with The Talking Tales, you agree to comply with and be bound by these Terms of Service.
                    </p>

                    <h3 class="font-bold text-gray-900 text-lg">4.1 Appointments, Attendance & Cancellations</h3>
                    <ul class="list-disc pl-5 space-y-1.5 text-sm">
                        <li><strong>Punctuality:</strong> Therapy sessions are scheduled in dedicated slots (typically 45–60 minutes). Late arrivals will receive the remaining duration of their scheduled slot to avoid disrupting subsequent clients.</li>
                        <li><strong>Cancellations:</strong> In-clinic and online appointments must be cancelled or rescheduled at least 24 to 48 hours in advance. Please refer to our detailed <a href="cancellation-and-refund" class="text-[#0B87C5] underline font-semibold">Cancellation & Refund Policy</a> for complete fee structures.</li>
                    </ul>

                    <h3 class="font-bold text-gray-900 text-lg">4.2 Telehealth & Online Therapy Protocols</h3>
                    <p>
                        For online speech and language sessions:
                    </p>
                    <ul class="list-disc pl-5 space-y-1 text-sm">
                        <li>The client/parent is responsible for maintaining high-speed internet connectivity, functioning audio-visual hardware, and a quiet, distraction-free environment.</li>
                        <li>For pediatric clients (under 12 years), active parental presence or chaperone participation is required during the session to facilitate carryover activities and ensure patient comfort.</li>
                        <li>Unauthorized screen recording, video capturing, or unauthorized distribution of therapy sessions without therapist written consent is strictly prohibited.</li>
                    </ul>

                    <h3 class="font-bold text-gray-900 text-lg">4.3 Intellectual Property Ownership</h3>
                    <p>
                        All therapeutic worksheets, screening methodologies, diagnostic templates, logos, design assets, and content published by The Talking Tales are the exclusive intellectual property of The Talking Tales. Unauthorized reproduction, modification, commercial redistribution, or resale is strictly prohibited under the Copyright Act, 1957.
                    </p>

                    <h3 class="font-bold text-gray-900 text-lg">4.4 Governing Law & Dispute Resolution</h3>
                    <p>
                        These Terms and any clinical or operational dispute arising from the use of our website or services shall be governed by and construed in accordance with the laws of India. Any legal proceedings or dispute resolutions shall be subject to the exclusive jurisdiction of the competent courts in <strong>Hyderabad / Secunderabad, Telangana, India</strong>.
                    </p>
                </div>
            </div>

            <!-- 5. Cookies Notice Section -->
            <div id="cookies-notice" class="policy-card green bg-white rounded-2xl p-6 lg:p-10 shadow-md">
                <div class="flex items-start space-x-4 mb-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center border border-green-100">
                            <i class="fas fa-cookie-bite text-2xl text-green-600"></i>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block text-xs uppercase tracking-wider font-bold text-green-600 mb-1">Section 5 • Tracking Technologies</div>
                        <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-900">
                            Cookies & Web Tracking Policy
                        </h2>
                    </div>
                </div>

                <div class="prose max-w-none text-gray-600 space-y-5 text-sm lg:text-base leading-relaxed">
                    <p>
                        Cookies are small text files stored on your browser or device that enable our website to recognize your preferences and deliver an efficient browsing experience.
                    </p>
                    <div class="grid md:grid-cols-3 gap-4 text-xs">
                        <div class="p-4 bg-green-50/60 border border-green-100 rounded-xl">
                            <strong class="block text-gray-900 text-sm mb-1">Essential Cookies</strong>
                            Required for fundamental website navigation, security authentication, and form submissions. Cannot be disabled.
                        </div>
                        <div class="p-4 bg-green-50/60 border border-green-100 rounded-xl">
                            <strong class="block text-gray-900 text-sm mb-1">Functional Cookies</strong>
                            Remember user preferences such as preferred font sizes, language choices, and form field retention.
                        </div>
                        <div class="p-4 bg-green-50/60 border border-green-100 rounded-xl">
                            <strong class="block text-gray-900 text-sm mb-1">Analytics Cookies</strong>
                            Provide anonymous aggregated metrics regarding page views, navigation bottlenecks, and load times to enhance performance.
                        </div>
                    </div>
                    <p class="text-sm">
                        You can manage, restrict, or delete cookies via your individual browser settings. Disabling essential cookies may impact certain interactive functionalities of the screening tools or form submissions.
                    </p>
                </div>
            </div>

            <!-- 6. Institutional Partnerships Section -->
            <div id="school-partnerships" class="policy-card orange bg-white rounded-2xl p-6 lg:p-10 shadow-md">
                <div class="flex items-start space-x-4 mb-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-orange-50 rounded-2xl flex items-center justify-center border border-orange-100">
                            <i class="fas fa-school text-2xl text-orange-600"></i>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block text-xs uppercase tracking-wider font-bold text-orange-600 mb-1">Section 6 • Institutional Collaboration</div>
                        <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-900">
                            Terms for Schools, Hospitals & Rehab Partners
                        </h2>
                    </div>
                </div>

                <div class="prose max-w-none text-gray-600 space-y-5 text-sm lg:text-base leading-relaxed">
                    <p>
                        Educational institutions, preschools, pediatric clinics, and rehabilitation hospitals engaging The Talking Tales for on-site screenings, clinical integration, therapist staffing, or teacher enablement workshops agree to the following standards:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-sm">
                        <li><strong>Student Data Privacy:</strong> Educational institutions warrant that proper parental notification and consent have been obtained prior to administering school-wide speech or developmental screenings.</li>
                        <li><strong>Confidentiality of Screening Reports:</strong> Individual child screening outcomes are confidential medical/developmental records and must not be published publicly or distributed without parental consent.</li>
                        <li><strong>Hospital Rehabilitation Integration:</strong> Hospital partnerships for dysphasia, stroke rehabilitation, or post-tracheostomy care shall be governed by specific clinical Service Level Agreements (SLAs) adhering to hospital accreditation norms.</li>
                    </ul>
                </div>
            </div>

            <!-- 7. Grievance Redressal & Contact Section -->
            <div id="grievance-redressal" class="policy-card blue bg-white rounded-2xl p-6 lg:p-10 shadow-md">
                <div class="flex items-start space-x-4 mb-6">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center border border-blue-100">
                            <i class="fas fa-headset text-2xl text-blue-600"></i>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block text-xs uppercase tracking-wider font-bold text-blue-600 mb-1">Section 7 • Statutory Point of Contact</div>
                        <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-900">
                            Grievance Redressal & Data Protection Officer
                        </h2>
                    </div>
                </div>

                <div class="prose max-w-none text-gray-600 space-y-5 text-sm lg:text-base leading-relaxed">
                    <p>
                        In compliance with the Digital Personal Data Protection Act 2023 and the Information Technology Act 2000, The Talking Tales has appointed a dedicated Grievance Redressal & Privacy Officer to address any data protection concerns, consent withdrawals, or clinical documentation queries.
                    </p>

                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-bold text-gray-900 text-base mb-3 flex items-center gap-2">
                                <i class="fas fa-user-tie text-[#0B87C5]"></i> Grievance Officer Contact
                            </h4>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li><strong>Officer Name:</strong> Clinical Compliance & Privacy Desk</li>
                                <li><strong>Designation:</strong> Data Protection & Patient Relations Lead</li>
                                <li><strong>Email:</strong> <a href="mailto:privacy@thetalkingtales.com" class="text-[#0B87C5] hover:underline font-semibold">privacy@thetalkingtales.com</a></li>
                                <li><strong>General Support:</strong> <a href="mailto:info@thetalkingtales.com" class="text-[#0B87C5] hover:underline">info@thetalkingtales.com</a></li>
                                <li><strong>Helpline:</strong> <a href="tel:+919573737847" class="text-[#0B87C5] hover:underline font-semibold">+91-9573737847</a></li>
                                <li><strong>Response Timeline:</strong> Acknowledgment within 48 hours; resolution within 30 days.</li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-bold text-gray-900 text-base mb-3 flex items-center gap-2">
                                <i class="fas fa-map-marked-alt text-[#F36E3B]"></i> Registered Clinic Locations
                            </h4>
                            <div class="space-y-3 text-xs text-gray-700">
                                <div class="p-3 bg-white rounded-lg border border-gray-200">
                                    <strong class="text-gray-900 block text-sm">Madhapur Clinic (Main Center):</strong>
                                    Ground Floor, Jain Sadguru Images Capital Park, G2B, Madhapur, Hyderabad, Telangana 500081
                                </div>
                                <div class="p-3 bg-white rounded-lg border border-gray-200">
                                    <strong class="text-gray-900 block text-sm">Sainikpuri Clinic:</strong>
                                    Plot No 147, Spellbound Towers, HT Rd, Osmania University Teachers Colony, Sainikpuri, Secunderabad, Telangana 500094
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer Notice Banner -->
    <section class="bg-[#0B87C5] py-10 mb-8">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20">
                <i class="fas fa-shield-check text-3xl text-white mb-3"></i>
                <h3 class="museo-rounded text-xl font-bold text-white mb-2">Our Commitment to Clinical Ethics & Patient Trust</h3>
                <p class="museo-sans text-white/90 text-sm max-w-2xl mx-auto leading-relaxed">
                    Policies are audited periodically by clinical and legal professionals to remain compliant with evolving healthcare mandates and privacy frameworks. Continued use of Talking Tales services represents ongoing acceptance of the latest policy terms.
                </p>
            </div>
        </div>
    </section>
    
    <?php include('footer.php');?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('navbar');
            if (navbar) {
                navbar.classList.add('navbar-scrolled');
            }
        });
    </script>
</body>
</html>