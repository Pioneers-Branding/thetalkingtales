<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speech & Language Screening Tool</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php include('header-links.php');?>

    <style>
    
    
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f0f9ff 0%, #e6f7ff 100%);
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
        }
        
        .logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.8rem;
            font-weight: 700;
            background: linear-gradient(135deg, #0B87C5 0%, #3DD288 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
        }
        
        .tagline {
            font-size: 1.25rem;
            color: #4A4A4A;
            max-width: 600px;
            margin: 0 auto 25px;
        }
        
        .card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            padding: 40px;
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        }
        
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #0B87C5 0%, #3DD288 100%);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 16px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(11, 135, 197, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(11, 135, 197, 0.4);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid #0B87C5;
            color: #0B87C5;
            box-shadow: none;
        }
        
        .btn-outline:hover {
            background: rgba(11, 135, 197, 0.1);
        }
        
        .hidden {
            display: none;
        }
        
        /* Hero Section */
        #hero-section {
            text-align: center;
            padding: 40px 20px;
        }
        
        .hero-content {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .hero-image {
            max-width: 300px;
            margin: 0 auto 30px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .hero-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .feature-item {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #0B87C5;
        }
        
        /* Screening Section */
        .progress-container {
            margin-bottom: 30px;
        }
        
        .progress-bar-bg {
            height: 12px;
            background: #E9ECEF;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #3DD288 0%, #0B87C5 100%);
            border-radius: 10px;
            transition: width 0.5s ease;
        }
        
        .progress-text {
            text-align: right;
            margin-bottom: 8px;
            font-weight: 500;
            color: #6C757D;
        }
        
        .question-title {
            font-size: 1.4rem;
            margin-bottom: 25px;
            color: #2D3748;
            font-weight: 600;
        }
        
        .options-container {
            display: grid;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .option-item {
            display: flex;
            align-items: center;
            padding: 18px 20px;
            background: #F8F9FA;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 2px solid transparent;
        }
        
        .option-item:hover {
            background: #E9F7FE;
            border-color: #0B87C5;
            transform: translateX(5px);
        }
        
        .option-item.selected {
            background: #E9F7FE;
            border-color: #0B87C5;
            box-shadow: 0 5px 15px rgba(11, 135, 197, 0.15);
        }
        
        .checkbox-custom {
            width: 22px;
            height: 22px;
            margin-right: 15px;
            accent-color: #0B87C5;
            cursor: pointer;
        }
        
        .option-label {
            flex: 1;
            font-size: 1.05rem;
        }
        
        .nav-buttons {
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }
        
        /* Results Section */
        .results-container {
            padding: 30px 0;
        }
        
        .result-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .result-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .risk-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 25px;
            position: relative;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .risk-circle::after {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border-radius: 50%;
            z-index: -1;
            opacity: 0.3;
        }
        
        .risk-level {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .risk-description {
            font-size: 1.1rem;
            margin-bottom: 25px;
            max-width: 600px;
        }
        
        .recommendations {
            background: #F8F9FA;
            border-radius: 15px;
            padding: 25px;
            width: 100%;
            max-width: 700px;
            text-align: left;
        }
        
        .recommendation-item {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            align-items: flex-start;
        }
        
        .recommendation-item:last-child {
            margin-bottom: 0;
        }
        
        .recommendation-bullet {
            min-width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: white;
            margin-top: 3px;
        }
        
        .results-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        
        .results-column {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .results-column h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #0B87C5;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .breakdown-list {
            display: grid;
            gap: 15px;
        }
        
        .breakdown-item {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            background: #F8F9FA;
            border-radius: 12px;
            transition: all 0.2s ease;
        }
        
        .breakdown-item:hover {
            background: #E9F7FE;
            transform: translateX(5px);
        }
        
        .breakdown-category {
            font-weight: 500;
        }
        
        .breakdown-score {
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .steps-list {
            display: grid;
            gap: 20px;
        }
        
        .step-item {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .step-number {
            min-width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: white;
            font-size: 1.2rem;
        }
        
        .step-text {
            font-size: 1.05rem;
        }
        
        /* Risk level specific styles */
        .low-risk .risk-circle {
            background: linear-gradient(135deg, #3DD288 0%, #2AB572 100%);
        }
        
        .low-risk .risk-circle::after {
            background: #3DD288;
        }
        
        .moderate-risk .risk-circle {
            background: linear-gradient(135deg, #FFC73C 0%, #FFB400 100%);
        }
        
        .moderate-risk .risk-circle::after {
            background: #FFC73C;
        }
        
        .high-risk .risk-circle {
            background: linear-gradient(135deg, #F36E3B 0%, #E55C29 100%);
        }
        
        .high-risk .risk-circle::after {
            background: #F36E3B;
        }
        
        .low-risk .recommendation-bullet {
            background: #3DD288;
        }
        
        .moderate-risk .recommendation-bullet {
            background: #FFC73C;
        }
        
        .high-risk .recommendation-bullet {
            background: #F36E3B;
        }
        
        .low-risk .breakdown-score {
            color: #3DD288;
        }
        
        .moderate-risk .breakdown-score {
            color: #FFC73C;
        }
        
        .high-risk .breakdown-score {
            color: #F36E3B;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .card {
                padding: 25px;
            }
            
            .logo {
                font-size: 2.2rem;
            }
            
            .tagline {
                font-size: 1.1rem;
            }
            
            .btn {
                padding: 14px 30px;
                font-size: 1rem;
            }
            
            .question-title {
                font-size: 1.2rem;
            }
            
            .option-label {
                font-size: 1rem;
            }
            
            .results-column {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hero Section -->
    <section id="hero-section" class="gradient-bg min-h-screen flex items-center justify-center px-4 py-12">
        <div class="max-w-6xl mx-auto text-center">
            <div class="mb-8">
                <h1 class="museo-sans-rounded text-4xl md:text-6xl lg:text-7xl mb-6" style="color: #0B87C5;">
                    Talking Tales
                </h1>
                <p class="museo-sans text-xl md:text-2xl mb-8" style="color: #4A4A4A;">
                    Professional Speech Therapy Services
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-12">
                <div class="text-left">
                    <h2 class="museo-sans-rounded text-3xl md:text-4xl mb-6" style="color: #4A4A4A;">
                        Is Your Child's Speech Development On Track?
                    </h2>
                    <p class="museo-sans text-lg mb-8 leading-relaxed" style="color: #4A4A4A;">
                        Our quick and comprehensive screening assessment helps identify potential speech and language concerns early. Take our professional screening test to better understand your child's communication development.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center p-4 rounded-lg" style="background-color: #F9F0E5;">
                            <div class="w-12 h-12 mx-auto mb-3 flex items-center justify-center rounded-full" style="background-color: #3DD288;">
                                <span class="text-white text-xl font-bold">âœ“</span>
                            </div>
                            <p class="museo-sans text-sm font-semibold" style="color: #4A4A4A;">Quick Assessment</p>
                        </div>
                        <div class="text-center p-4 rounded-lg" style="background-color: #F9F0E5;">
                            <div class="w-12 h-12 mx-auto mb-3 flex items-center justify-center rounded-full" style="background-color: #FFC73C;">
                                <span class="text-white text-xl font-bold">ðŸ“Š</span>
                            </div>
                            <p class="museo-sans text-sm font-semibold" style="color: #4A4A4A;">Detailed Results</p>
                        </div>
                    </div>

                    <button 
                        onclick="startScreening()"
                        class="btn-primary text-white px-8 py-4 rounded-full museo-sans-rounded text-lg font-semibold inline-flex items-center gap-3 card-shadow"
                    >
                        Start Free Screening
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>

                <div class="relative">
                    <div class="card-shadow rounded-2xl p-8" style="background-color: white;">
                        <h3 class="museo-sans-rounded text-xl mb-6 text-center" style="color: #0B87C5;">Assessment Areas</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full" style="background-color: #F36E3B;"></div>
                                <span class="museo-sans" style="color: #4A4A4A;">Speech & Clarity</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full" style="background-color: #3DD288;"></div>
                                <span class="museo-sans" style="color: #4A4A4A;">Language & Comprehension</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full" style="background-color: #FFC73C;"></div>
                                <span class="museo-sans" style="color: #4A4A4A;">Social Communication</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full" style="background-color: #0B87C5;"></div>
                                <span class="museo-sans" style="color: #4A4A4A;">Developmental Milestones</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Screening Section -->
        <section id="screening-section" class="hidden">
            <div class="card">
                <div class="progress-container">
                    <div class="progress-text" id="progress-text">Question 1 of 6</div>
                    <div class="progress-bar-bg">
                        <div class="progress-bar" id="progress-bar" style="width: 16.66%"></div>
                    </div>
                </div>
                
                <h2 class="question-title" id="question-title"></h2>
                
                <div class="options-container" id="question-options">
                    <!-- Options will be loaded here -->
                </div>
                
                <div class="nav-buttons">
                    <button id="prev-btn" class="btn btn-outline hidden" onclick="previousQuestion()">
                        <i class="fas fa-arrow-left"></i> Previous
                    </button>
                    <button id="next-btn" class="btn" onclick="nextQuestion()" disabled>
                        Next <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Results Section -->
        <section id="results-section" class="hidden">
            <div class="result-header">
                <h1 class="logo">Screening Results</h1>
                <p>Your child's speech and language assessment</p>
            </div>
            
            <div class="card">
                <div id="results-content">
                    <!-- Results will be loaded here -->
                </div>
                
                <div style="text-align: center; margin-top: 40px;">
                    <button class="btn" onclick="restartScreening()">
                        <i class="fas fa-redo"></i> Start New Screening
                    </button>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Question data with "None of the above" options
        const questions = [
            {
                category: "Speech & Clarity",
                question: "How would you describe your child's speech clarity?",
                options: [
                    { text: "Child is hard to understand for others", score: 1 },
                    { text: "Still uses baby-like speech for many words", score: 1 },
                    { text: "Speech errors not typical for age", score: 1 },
                    { text: "None of the above", score: 0 }
                ]
            },
            {
                category: "Language & Comprehension",
                question: "How well does your child follow instructions and respond to questions?",
                options: [
                    { text: "Speaks only a few words compared to peers", score: 1 },
                    { text: "Doesn't answer questions or follow instructions", score: 1 },
                    { text: "Uses gestures more than words", score: 1 },
                    { text: "None of the above", score: 0 }
                ]
            },
            {
                category: "Social Communication",
                question: "How does your child interact and communicate with others?",
                options: [
                    { text: "Doesn't respond to name or avoids eye contact", score: 1 },
                    { text: "Doesn't play or communicate with peers", score: 1 },
                    { text: "Difficulty with pretend play or storytelling", score: 1 },
                    { text: "None of the above", score: 0 }
                ]
            },
            {
                category: "Developmental Milestones",
                question: "Compared to peers, how is your child's speech development?",
                options: [
                    { text: "History of delayed milestones", score: 1 },
                    { text: "Diagnosed with developmental delay/Autism/CP", score: 2 },
                    { text: "Speech regression (lost skills)", score: 2 },
                    { text: "None of the above", score: 0 }
                ]
            },
            {
                category: "Feeding & Oral Motor",
                question: "Does your child have any feeding or oral motor difficulties?",
                options: [
                    { text: "Difficulty chewing or swallowing", score: 2 },
                    { text: "Chokes or coughs often during meals", score: 2 },
                    { text: "Extremely picky eater with sensory issues", score: 1 },
                    { text: "None of the above", score: 0 }
                ]
            },
            {
                category: "Behavioral Concerns",
                question: "How does your child react when they cannot communicate effectively?",
                options: [
                    { text: "Had frequent ear infections / hearing issues", score: 1 },
                    { text: "Gets frustrated or throws tantrums when unable to speak", score: 1 },
                    { text: "Parent/caregiver is concerned but unsure why", score: 1 },
                    { text: "None of the above", score: 0 }
                ]
            },
        ];

        let currentQuestion = 0;
        let answers = Array(questions.length).fill().map(() => []);

        function startScreening() {
            document.getElementById('hero-section').classList.add('hidden');
            document.getElementById('screening-section').classList.remove('hidden');
            loadQuestion();
        }

        function loadQuestion() {
            const question = questions[currentQuestion];
            
            document.getElementById('question-title').textContent = question.question;
            document.getElementById('progress-text').textContent = `Question ${currentQuestion + 1} of ${questions.length}`;
            
            const progressWidth = ((currentQuestion + 1) / questions.length) * 100;
            document.getElementById('progress-bar').style.width = progressWidth + '%';
            
            const optionsContainer = document.getElementById('question-options');
            optionsContainer.innerHTML = '';
            
            question.options.forEach((option, index) => {
                const optionDiv = document.createElement('div');
                optionDiv.className = 'option-item';
                
                optionDiv.innerHTML = `
                    <input type="checkbox" class="checkbox-custom" id="option-${index}" 
                           onchange="selectOption(${index}, ${question.options.length - 1})">
                    <label for="option-${index}" class="option-label">
                        ${option.text}
                    </label>
                `;
                
                optionsContainer.appendChild(optionDiv);
            });
            
            // Update navigation buttons
            document.getElementById('prev-btn').classList.toggle('hidden', currentQuestion === 0);
            document.getElementById('next-btn').innerHTML = currentQuestion === questions.length - 1 ? 
                'View Results <i class="fas fa-chart-bar"></i>' : 
                'Next <i class="fas fa-arrow-right"></i>';
            document.getElementById('next-btn').disabled = answers[currentQuestion].length === 0;
            
            // Restore previous answers
            answers[currentQuestion].forEach(optIndex => {
                document.getElementById(`option-${optIndex}`).checked = true;
            });
        }

        function selectOption(optionIndex, lastOptionIndex) {
            const checkbox = document.getElementById(`option-${optionIndex}`);
            const currentAnswers = answers[currentQuestion];
            const isNoneOption = (optionIndex === lastOptionIndex);
            
            if (checkbox.checked) {
                // If "None of the above" is selected
                if (isNoneOption) {
                    // Uncheck all other options
                    for (let i = 0; i < lastOptionIndex; i++) {
                        const otherCheckbox = document.getElementById(`option-${i}`);
                        if (otherCheckbox.checked) {
                            otherCheckbox.checked = false;
                            // Remove from answers array
                            const index = currentAnswers.indexOf(i);
                            if (index > -1) {
                                currentAnswers.splice(index, 1);
                            }
                        }
                    }
                    // Add "None" to answers
                    currentAnswers.push(optionIndex);
                } 
                // If a regular option is selected and "None" is currently selected
                else if (currentAnswers.includes(lastOptionIndex)) {
                    // Uncheck "None of the above"
                    document.getElementById(`option-${lastOptionIndex}`).checked = false;
                    // Remove it from answers
                    const noneIndex = currentAnswers.indexOf(lastOptionIndex);
                    if (noneIndex > -1) {
                        currentAnswers.splice(noneIndex, 1);
                    }
                    // Add the new selection
                    currentAnswers.push(optionIndex);
                }
                // Regular selection
                else {
                    currentAnswers.push(optionIndex);
                }
            } else {
                // Remove from selections
                const index = currentAnswers.indexOf(optionIndex);
                if (index > -1) {
                    currentAnswers.splice(index, 1);
                }
            }
            
            // Enable next button if at least one option selected
            document.getElementById('next-btn').disabled = currentAnswers.length === 0;
        }

        function nextQuestion() {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                loadQuestion();
            } else {
                showResults();
            }
        }

        function previousQuestion() {
            if (currentQuestion > 0) {
                currentQuestion--;
                loadQuestion();
            }
        }

        function showResults() {
            document.getElementById('screening-section').classList.add('hidden');
            document.getElementById('results-section').classList.remove('hidden');
            
            // Calculate total score
            let totalScore = 0;
            let categoryScores = {};
            
            questions.forEach((question, qIndex) => {
                const selectedOptions = answers[qIndex];
                let categoryScore = 0;
                
                selectedOptions.forEach(optIndex => {
                    const points = question.options[optIndex].score;
                    totalScore += points;
                    categoryScore += points;
                });
                
                // Store for category breakdown
                categoryScores[question.category] = categoryScore;
            });
            
            // Calculate max possible score
            const maxScore = questions.reduce((total, q) => {
                return total + q.options.reduce((sum, opt) => sum + opt.score, 0);
            }, 0);
            
            const percentage = (totalScore / maxScore) * 100;
            
            // Determine risk level
            let riskLevel, riskColor, riskClass, recommendations;
            
            if (percentage <= 20) {
                riskLevel = "Low Risk";
                riskColor = "#3DD288";
                riskClass = "low-risk";
                recommendations = [
                    "Thank you! Based on your inputs, your child's development appears typical for their age.",
                    "If you're still unsure, you may book a consultation with a therapist for peace of mind."
                ];
            } else if (percentage <= 60) {
                riskLevel = "Moderate Risk";
                riskColor = "#FFC73C";
                riskClass = "moderate-risk";
                recommendations = [
                    "There are signs that your child may benefit from extra support in speech or communication.",
                    "A consultation with our therapist will help you understand your options and next steps."
                ];
            } else {
                riskLevel = "High Risk";
                riskColor = "#F36E3B";
                riskClass = "high-risk";
                recommendations = [
                    "Your responses indicate strong concerns about your child's development.",
                    "We highly recommend a consultation with our therapist to understand what steps are needed next, including assessment and therapy."
                ];
            }
            
            const resultsContent = document.getElementById('results-content');
            resultsContent.innerHTML = `
                <div class="result-card ${riskClass}">
                    <div class="risk-circle">
                        ${Math.round(100 - percentage)}%
                    </div>
                    <h2 class="risk-level">${riskLevel}</h2>
                    <p class="risk-description">
                        Based on your responses, your child shows ${riskLevel.toLowerCase()} indicators for speech and language concerns.
                    </p>
                    
                    <div class="recommendations">
                        <h3 style="margin-bottom: 20px; color: ${riskColor}; text-align: center;">
                            <i class="fas fa-lightbulb"></i> Recommendations
                        </h3>
                        ${recommendations.map((rec, i) => `
                            <div class="recommendation-item">
                                <div class="recommendation-bullet">${i+1}</div>
                                <div class="recommendation-text">${rec}</div>
                            </div>
                        `).join('')}
                    </div>
                </div>
                
        
                    
                    <div class="results-column">
                        <h3><i class="fas fa-road"></i> Next Steps</h3>
                        <div class="steps-list">
                            <div class="step-item">
                                <div class="step-number" style="background: #3DD288;">1</div>
                                <div class="step-text">Save or print your results for your records</div>
                            </div>
                            <div class="step-item">
                                <div class="step-number" style="background: #0B87C5;">2</div>
                                <div class="step-text">Discuss these results with your pediatrician</div>
                            </div>
                            <div class="step-item">
                                <div class="step-number" style="background: #F36E3B;">3</div>
                                <div class="step-text">Schedule a professional evaluation with a speech therapist</div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }

        function restartScreening() {
            currentQuestion = 0;
            answers = Array(questions.length).fill().map(() => []);
            document.getElementById('results-section').classList.add('hidden');
            document.getElementById('hero-section').classList.remove('hidden');
        }
    </script>
</body>
</html>