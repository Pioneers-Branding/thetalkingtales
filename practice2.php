<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speech & Sound Disorders - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;700;800&display=swap');
        
        .museo-rounded {
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .disorder-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .disorder-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(11, 135, 197, 0.15);
        }
        
        .disorder-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            transition: all 0.3s ease;
        }
        
        .disorder-card.blue::before {
            background: #0B87C5;
        }
        
        .disorder-card.green::before {
            background: #3DD288;
        }
        
        .disorder-card.orange::before {
            background: #F36E3B;
        }
        
        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .stagger-animation {
            animation: slideInUp 0.6s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .stagger-animation:nth-child(1) { animation-delay: 0.1s; }
        .stagger-animation:nth-child(2) { animation-delay: 0.15s; }
        .stagger-animation:nth-child(3) { animation-delay: 0.2s; }
        .stagger-animation:nth-child(4) { animation-delay: 0.25s; }
        .stagger-animation:nth-child(5) { animation-delay: 0.3s; }
        .stagger-animation:nth-child(6) { animation-delay: 0.35s; }
        .stagger-animation:nth-child(7) { animation-delay: 0.4s; }
        .stagger-animation:nth-child(8) { animation-delay: 0.45s; }
        .stagger-animation:nth-child(9) { animation-delay: 0.5s; }
        .stagger-animation:nth-child(10) { animation-delay: 0.55s; }
        
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .age-group-card {
            transition: all 0.4s ease;
        }
        
        .age-group-card:hover {
            transform: scale(1.02);
        }
        
        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .badge.online {
            background-color: #3DD288;
            color: white;
        }
        
        .badge.offline {
            background-color: #F36E3B;
            color: white;
        }
    </style>
</head>

<!-- Speech & Sound Disorders Section -->
<section class="bg-white py-16 lg:py-20 relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="absolute top-10 left-5 w-24 h-24 bg-blue-100 rounded-full opacity-10"></div>
    <div class="absolute bottom-10 right-5 w-32 h-32 bg-green-100 rounded-full opacity-10"></div>
    <div class="absolute top-1/2 left-1/4 w-20 h-20 bg-orange-100 rounded-full opacity-10"></div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-blue-50 rounded-2xl mb-6 floating-icon">
                <i class="fas fa-comments text-3xl text-blue-600"></i>
            </div>
            <h1 class="museo-rounded text-4xl lg:text-5xl font-bold mb-4">
                <span class="text-gray-800">Speech & Sound</span> 
                <span class="text-blue-600">Disorders</span>
            </h1>
            <p class="museo-sans text-lg lg:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed mb-6">
                Comprehensive online and offline therapy for communication challenges across all age groups
            </p>
            <div class="flex justify-center space-x-4">
                <span class="badge online">Online Therapy</span>
                <span class="badge offline">Offline Therapy</span>
            </div>
        </div>

        <!-- Childhood Disorders Section -->
        <div class="mb-20">
            <div class="age-group-card bg-blue-50 rounded-3xl p-8 lg:p-12 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-200 rounded-full opacity-20 translate-x-16 -translate-y-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-green-200 rounded-full opacity-20 -translate-x-12 translate-y-12"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center mb-8">
                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mr-4">
                            <i class="fas fa-child text-2xl text-blue-600"></i>
                        </div>
                        <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800">
                            Childhood Disorders
                        </h2>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Articulation Disorder -->
                        <div class="disorder-card blue bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-microphone text-sm text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Articulation Disorder
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Trouble saying certain sounds clearly, making speech hard to understand.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Phonological Disorders -->
                        <div class="disorder-card blue bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-volume-up text-sm text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Phonological Disorders
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Patterns of sound mistakes like saying "tat" instead of "cat."
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Childhood Apraxia -->
                        <div class="disorder-card blue bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-brain text-sm text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Childhood Apraxia of Speech
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        The brain struggles to tell the mouth how to move, making speech effortful or unclear.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Stuttering / Cluttering -->
                        <div class="disorder-card blue bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-pause text-sm text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Stuttering / Cluttering
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Speech may sound bumpy, with repeats, pauses, or rushed words.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Voice Disorders -->
                        <div class="disorder-card blue bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-music text-sm text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Voice Disorders
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Voice may sound hoarse, too nasal, or strained due to vocal misuse.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Delayed Speech (Developmental) -->
                        <div class="disorder-card blue bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-clock text-sm text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Delayed Speech (Developmental)
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Speech delay linked to autism, Down syndrome, CP, ADHD, needing specialized care.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- General Delayed Speech -->
                        <div class="disorder-card blue bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-hourglass-half text-sm text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Delayed Speech
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Slower-than-expected speech development, not always tied to a known cause.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Teen Disorders Section -->
        <div class="mb-20">
            <div class="age-group-card bg-green-50 rounded-3xl p-8 lg:p-12 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-28 h-28 bg-green-200 rounded-full opacity-20 translate-x-14 -translate-y-14"></div>
                <div class="absolute bottom-0 left-0 w-36 h-36 bg-orange-200 rounded-full opacity-20 -translate-x-18 translate-y-18"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center mb-8">
                        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mr-4">
                            <i class="fas fa-user-graduate text-2xl text-green-600"></i>
                        </div>
                        <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800">
                            Teen Disorders
                        </h2>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Articulation Errors -->
                        <div class="disorder-card green bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-spell-check text-sm text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Articulation Errors
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Continued sound mistakes like "wabbit" for "rabbit," affecting clarity.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Puberphonia -->
                        <div class="disorder-card green bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-transgender text-sm text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Puberphonia
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        High-pitched voice continues after puberty, even though the body has matured.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Persistent Stuttering -->
                        <div class="disorder-card green bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-repeat text-sm text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Stuttering / Cluttering
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Fluency issues that remain from childhood or appear during adolescence.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Emotional Voice Disorders -->
                        <div class="disorder-card green bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-heart text-sm text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Functional Voice Disorders
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Stress or emotions cause changes in voice tone, strength, or quality.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Trauma-Related Speech Issues -->
                        <div class="disorder-card green bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-shield-virus text-sm text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Speech Issues from Trauma
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Emotional or physical trauma makes it harder to speak clearly or confidently.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Adult Disorders Section -->
        <div class="mb-16">
            <div class="age-group-card bg-orange-50 rounded-3xl p-8 lg:p-12 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-40 h-40 bg-orange-200 rounded-full opacity-20 translate-x-20 -translate-y-20"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-blue-200 rounded-full opacity-20 -translate-x-16 translate-y-16"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center mb-8">
                        <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mr-4">
                            <i class="fas fa-user-tie text-2xl text-orange-600"></i>
                        </div>
                        <h2 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800">
                            Adult Disorders
                        </h2>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Dysarthria -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-walking text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Dysarthria
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Slurred or slow speech due to muscle weakness from stroke, Parkinson's, or other conditions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Adult Apraxia -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-brain text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Apraxia of Speech
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        The brain knows what to say, but struggles to send the right signals to the mouth.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Aphasia -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-comment-slash text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Aphasia
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Difficulty speaking, understanding, reading, or writing—usually after stroke or brain injury.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Dementia-Related -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-memory text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Dementia-Related Problems
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Trouble remembering words, following conversations, or expressing thoughts clearly.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Dysphagia -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-utensils text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Swallowing Disorder
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Difficulty chewing or swallowing safely, common after stroke or surgery.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Post-Surgery Voice -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-cut text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Post-Surgery Voice Changes
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Changes in voice after procedures like laryngectomy or throat cancer surgery.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Spasmodic Dysphonia -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-wave-square text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Spasmodic Dysphonia
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Voice sounds strained, shaky, or breathy due to nerve problems in the vocal cords.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Functional Speech Disorders -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-question-circle text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Functional Speech Disorders
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Speaking problems not caused by illness, but by stress, trauma, or unknown reasons.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Adult Stuttering -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-business-time text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Adult Stuttering / Cluttering
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Ongoing fluency issues affecting personal or professional life.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Accent Modification -->
                        <div class="disorder-card orange bg-white rounded-2xl p-6 shadow-lg stagger-animation">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-globe text-sm text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-2">
                                        Accent Modification
                                    </h3>
                                    <p class="museo-sans text-sm text-gray-600 leading-relaxed">
                                        Help adjusting an accent for clearer and more confident communication.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="text-center">
            <div class="bg-gray-800 rounded-3xl p-8 lg:p-12 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute top-0 left-0 w-32 h-32 bg-blue-600 rounded-full opacity-10 -translate-x-16 -translate-y-16"></div>
                <div class="absolute bottom-0 right-0 w-40 h-40 bg-green-400 rounded-full opacity-10 translate-x-20 translate-y-20"></div>
                <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-orange-400 rounded-full opacity-10 -translate-x-12 -translate-y-12"></div>
                
                <div class="relative z-10">
                    <h3 class="museo-rounded text-3xl lg:text-4xl font-bold text-white mb-4">
                        Ready to Start Your Communication Journey?
                    </h3>
                    <p class="museo-sans text-lg text-gray-300 mb-8 max-w-3xl mx-auto">
                        Our experienced speech therapists are here to help you or your loved one overcome communication challenges with personalized treatment plans
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl museo-sans font-semibold transition-all duration-300 flex items-center group">
                            <i class="fas fa-video mr-3 group-hover:scale-110 transition-transform"></i>
                            Start Online Assessment
                        </button>
                        <button class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-gray-800 px-8 py-4 rounded-xl museo-sans font-semibold transition-all duration-300 flex items-center group">
                            <i class="fas fa-calendar-check mr-3 group-hover:scale-110 transition-transform"></i>
                            Book In-Person Consultation
                        </button>
                    </div>
                    
                    <!-- Quick Stats -->
                    <div class="grid grid-cols-3 gap-8 mt-12 max-w-2xl mx-auto">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-400 museo-rounded mb-2">500+</div>
                            <div class="text-sm text-gray-400 museo-sans">Clients Helped</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-400 museo-rounded mb-2">98%</div>
                            <div class="text-sm text-gray-400 museo-sans">Success Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-400 museo-rounded mb-2">24/7</div>
                            <div class="text-sm text-gray-400 museo-sans">Online Support</div>
                        </div>
                    </div>
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
        document.querySelectorAll('.stagger-animation').forEach(el => {
            observer.observe(el);
        });
        
        // Add click ripple effect to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.3);
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
        
        // Hover effects for disorder cards
        document.querySelectorAll('.disorder-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
        
        // Age group card hover effects
        document.querySelectorAll('.age-group-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.01)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
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