<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screening Test Forms - Talking Tales</title>
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
        
        /* Modal Overlay */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Modal Container */
        .modal-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            max-width: 450px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            transform: scale(0.8) translateY(20px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        
        .modal-overlay.active .modal-container {
            transform: scale(1) translateY(0);
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
        
        /* Button Hover Effects */
        .btn-primary {
            background: linear-gradient(135deg, #0B87C5 0%, #0B87C5 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #0969A3 0%, #0969A3 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(11, 135, 197, 0.3);
        }
        
        .btn-primary:active {
            transform: translateY(0);
        }
        
        /* Country Code Dropdown */
        .country-dropdown {
            position: relative;
        }
        
        .country-dropdown select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }
        
        /* Age Group Specific Colors */
        .child-theme .btn-primary {
            background: linear-gradient(135deg, #0B87C5 0%, #0B87C5 100%);
        }
        
        .teen-theme .btn-primary {
            background: linear-gradient(135deg, #3DD288 0%, #3DD288 100%);
        }
        
        .teen-theme .btn-primary:hover {
            background: linear-gradient(135deg, #2CB574 0%, #2CB574 100%);
        }
        
        .adult-theme .btn-primary {
            background: linear-gradient(135deg, #F36E3B 0%, #F36E3B 100%);
        }
        
        .adult-theme .btn-primary:hover {
            background: linear-gradient(135deg, #E55A2B 0%, #E55A2B 100%);
        }
        
        /* Mobile Responsive */
        @media (max-width: 640px) {
            .modal-container {
                margin: 1rem;
                width: calc(100% - 2rem);
                border-radius: 16px;
            }
            
            .phone-input-group {
                flex-direction: column;
            }
            
            .phone-input-group .country-dropdown {
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Demo Buttons to Open Different Modals -->
    <!--<div class="min-h-screen flex items-center justify-center p-4">-->
    <!--    <div class="text-center space-y-4">-->
    <!--        <h1 class="museo-rounded text-3xl font-bold text-gray-800 mb-8">Screening Test Forms</h1>-->
    <!--        <div class="flex flex-col sm:flex-row gap-4">-->
    <!--            <button id="openChildModal" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl museo-sans font-semibold transition-all duration-300 flex items-center">-->
    <!--                <i class="fas fa-child mr-2"></i>-->
    <!--                Child Screening (2-12 years)-->
    <!--            </button>-->
    <!--            <button id="openTeenModal" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl museo-sans font-semibold transition-all duration-300 flex items-center">-->
    <!--                <i class="fas fa-user-graduate mr-2"></i>-->
    <!--                Teen Screening (13-17 years)-->
    <!--            </button>-->
    <!--            <button id="openAdultModal" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-xl museo-sans font-semibold transition-all duration-300 flex items-center">-->
    <!--                <i class="fas fa-user-tie mr-2"></i>-->
    <!--                Adult Screening (18+ years)-->
    <!--            </button>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- Child Screening Modal -->
    <div id="childModalOverlay" class="modal-overlay child-theme">
        <div class="modal-container">
            <!-- Modal Header -->
            <div class="relative bg-gradient-to-r from-blue-600 to-blue-700 p-6 rounded-t-3xl text-white">
                <button class="close-modal absolute top-4 right-4 w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all duration-300">
                    <i class="fas fa-times text-white text-sm"></i>
                </button>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-child text-xl text-white"></i>
                    </div>
                    <h2 class="museo-rounded text-xl font-bold mb-2">Child Screening Test</h2>
                    <p class="museo-sans opacity-90 text-sm">Ages 2-12 years • Early development assessment</p>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="p-6">
                <form accept-charset='UTF-8' action='https://app.formester.com/forms/EoNvKKfXO/submissions' method='POST' class="screening-form">
                    <div class="space-y-4">
                        <!-- Full Name Field -->
                        <div>
                            <label for="childFullName" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-user text-blue-600 mr-2"></i>Child's Full Name *
                            </label>
                            <input 
                                type="text" 
                                id="childFullName" 
                                name="fullName" 
                                required
                                class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                placeholder="Enter child's full name"
                            >
                        </div>

                        <!-- Contact Number Field with Country Code -->
                        <div>
                            <label class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-phone text-green-600 mr-2"></i>Parent/Guardian Contact *
                            </label>
                            <div class="phone-input-group flex gap-2">
                                <div class="country-dropdown">
                                    <select name="countryCode" required class="form-input px-3 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                        <option value="+91">🇮🇳 +91</option>
                                        <option value="+1">🇺🇸 +1</option>
                                        <option value="+44">🇬🇧 +44</option>
                                        <option value="+971">🇦🇪 +971</option>
                                        <option value="+65">🇸🇬 +65</option>
                                        <option value="+60">🇲🇾 +60</option>
                                        <option value="+61">🇦🇺 +61</option>
                                        <option value="+49">🇩🇪 +49</option>
                                        <option value="+33">🇫🇷 +33</option>
                                        <option value="+81">🇯🇵 +81</option>
                                    </select>
                                </div>
                                <input 
                                    type="tel" 
                                    name="contactNumber" 
                                    required
                                    class="form-input flex-1 px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                    placeholder="Enter phone number"
                                    pattern="[0-9]{7,15}"
                                >
                            </div>
                        </div>

                        <!-- Email ID Field -->
                        <div>
                            <label for="childEmailId" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-envelope text-yellow-600 mr-2"></i>Email Address *
                            </label>
                            <input 
                                type="email" 
                                id="childEmailId" 
                                name="emailId" 
                                required
                                class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                placeholder="Enter email address"
                            >
                        </div>

                        <!-- Privacy Notice -->
                        <div class="bg-blue-50 rounded-xl p-3">
                            <p class="museo-sans text-xs text-gray-600">
                                <i class="fas fa-shield-alt text-blue-600 mr-1"></i>
                                <strong>Privacy Protected:</strong> Information is secure and used only for assessment purposes.
                            </p>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex gap-3 mt-6">
                        <button type="button" class="close-modal flex-1 px-4 py-3 border-2 border-gray-300 text-gray-700 rounded-xl museo-sans font-semibold hover:bg-gray-50 transition-all duration-300">
                            Cancel
                        </button>
                        <button type="submit" class="btn-primary flex-1 px-4 py-3 text-white rounded-xl museo-sans font-semibold">
                            <i class="fas fa-arrow-right mr-2"></i>Start Test
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Teen Screening Modal -->
    <div id="teenModalOverlay" class="modal-overlay teen-theme">
        <div class="modal-container">
            <!-- Modal Header -->
            <div class="relative bg-gradient-to-r from-green-600 to-green-700 p-6 rounded-t-3xl text-white">
                <button class="close-modal absolute top-4 right-4 w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all duration-300">
                    <i class="fas fa-times text-white text-sm"></i>
                </button>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-user-graduate text-xl text-white"></i>
                    </div>
                    <h2 class="museo-rounded text-xl font-bold mb-2">Teen Screening Test</h2>
                    <p class="museo-sans opacity-90 text-sm">Ages 13-17 years • Adolescent communication assessment</p>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="p-6">
               <form accept-charset='UTF-8' action='https://app.formester.com/forms/JmJH1VKq8/submissions' method='POST' class="screening-form">
                    <div class="space-y-4">
                        <!-- Full Name Field -->
                        <div>
                            <label for="teenFullName" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-user text-green-600 mr-2"></i>Full Name *
                            </label>
                            <input 
                                type="text" 
                                id="teenFullName" 
                                name="fullName" 
                                required
                                class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                placeholder="Enter full name"
                            >
                        </div>

                        <!-- Contact Number Field with Country Code -->
                        <div>
                            <label class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-phone text-blue-600 mr-2"></i>Contact Number *
                            </label>
                            <div class="phone-input-group flex gap-2">
                                <div class="country-dropdown">
                                    <select name="countryCode" required class="form-input px-3 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                        <option value="+91">🇮🇳 +91</option>
                                        <option value="+1">🇺🇸 +1</option>
                                        <option value="+44">🇬🇧 +44</option>
                                        <option value="+971">🇦🇪 +971</option>
                                        <option value="+65">🇸🇬 +65</option>
                                        <option value="+60">🇲🇾 +60</option>
                                        <option value="+61">🇦🇺 +61</option>
                                        <option value="+49">🇩🇪 +49</option>
                                        <option value="+33">🇫🇷 +33</option>
                                        <option value="+81">🇯🇵 +81</option>
                                    </select>
                                </div>
                                <input 
                                    type="tel" 
                                    name="contactNumber" 
                                    required
                                    class="form-input flex-1 px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                    placeholder="Enter phone number"
                                    pattern="[0-9]{7,15}"
                                >
                            </div>
                        </div>

                        <!-- Email ID Field -->
                        <div>
                            <label for="teenEmailId" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-envelope text-yellow-600 mr-2"></i>Email Address *
                            </label>
                            <input 
                                type="email" 
                                id="teenEmailId" 
                                name="emailId" 
                                required
                                class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                placeholder="Enter email address"
                            >
                        </div>

                        <!-- Privacy Notice -->
                        <div class="bg-green-50 rounded-xl p-3">
                            <p class="museo-sans text-xs text-gray-600">
                                <i class="fas fa-shield-alt text-green-600 mr-1"></i>
                                <strong>Privacy Protected:</strong> Information is secure and used only for assessment purposes.
                            </p>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex gap-3 mt-6">
                        <button type="button" class="close-modal flex-1 px-4 py-3 border-2 border-gray-300 text-gray-700 rounded-xl museo-sans font-semibold hover:bg-gray-50 transition-all duration-300">
                            Cancel
                        </button>
                        <button type="submit" class="btn-primary flex-1 px-4 py-3 text-white rounded-xl museo-sans font-semibold">
                            <i class="fas fa-arrow-right mr-2"></i>Start Test
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Adult Screening Modal -->
    <div id="adultModalOverlay" class="modal-overlay adult-theme">
        <div class="modal-container">
            <!-- Modal Header -->
            <div class="relative bg-gradient-to-r from-orange-600 to-orange-700 p-6 rounded-t-3xl text-white">
                <button class="close-modal absolute top-4 right-4 w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all duration-300">
                    <i class="fas fa-times text-white text-sm"></i>
                </button>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-user-tie text-xl text-white"></i>
                    </div>
                    <h2 class="museo-rounded text-xl font-bold mb-2">Adult Screening Test</h2>
                    <p class="museo-sans opacity-90 text-sm">Ages 18+ years • Comprehensive communication assessment</p>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="p-6">
                <form accept-charset='UTF-8' action='https://app.formester.com/forms/a5XpuCQSC/submissions' method='POST' class="screening-form">
                    <div class="space-y-4">
                        <!-- Full Name Field -->
                        <div>
                            <label for="adultFullName" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-user text-orange-600 mr-2"></i>Full Name *
                            </label>
                            <input 
                                type="text" 
                                id="adultFullName" 
                                name="fullName" 
                                required
                                class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                placeholder="Enter full name"
                            >
                        </div>

                        <!-- Contact Number Field with Country Code -->
                        <div>
                            <label class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-phone text-blue-600 mr-2"></i>Contact Number *
                            </label>
                            <div class="phone-input-group flex gap-2">
                                <div class="country-dropdown">
                                    <select name="countryCode" required class="form-input px-3 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white">
                                        <option value="+91">🇮🇳 +91</option>
                                        <option value="+1">🇺🇸 +1</option>
                                        <option value="+44">🇬🇧 +44</option>
                                        <option value="+971">🇦🇪 +971</option>
                                        <option value="+65">🇸🇬 +65</option>
                                        <option value="+60">🇲🇾 +60</option>
                                        <option value="+61">🇦🇺 +61</option>
                                        <option value="+49">🇩🇪 +49</option>
                                        <option value="+33">🇫🇷 +33</option>
                                        <option value="+81">🇯🇵 +81</option>
                                    </select>
                                </div>
                                <input 
                                    type="tel" 
                                    name="contactNumber" 
                                    required
                                    class="form-input flex-1 px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                    placeholder="Enter phone number"
                                    pattern="[0-9]{7,15}"
                                >
                            </div>
                        </div>

                        <!-- Email ID Field -->
                        <div>
                            <label for="adultEmailId" class="block museo-sans text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-envelope text-yellow-600 mr-2"></i>Email Address *
                            </label>
                            <input 
                                type="email" 
                                id="adultEmailId" 
                                name="emailId" 
                                required
                                class="form-input w-full px-4 py-3 rounded-xl museo-sans text-gray-700 bg-gray-50 focus:bg-white"
                                placeholder="Enter email address"
                            >
                        </div>

                        <!-- Privacy Notice -->
                        <div class="bg-orange-50 rounded-xl p-3">
                            <p class="museo-sans text-xs text-gray-600">
                                <i class="fas fa-shield-alt text-orange-600 mr-1"></i>
                                <strong>Privacy Protected:</strong> Information is secure and used only for assessment purposes.
                            </p>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex gap-3 mt-6">
                        <button type="button" class="close-modal flex-1 px-4 py-3 border-2 border-gray-300 text-gray-700 rounded-xl museo-sans font-semibold hover:bg-gray-50 transition-all duration-300">
                            Cancel
                        </button>
                        <button type="submit" class="btn-primary flex-1 px-4 py-3 text-white rounded-xl museo-sans font-semibold">
                            <i class="fas fa-arrow-right mr-2"></i>Start Test
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        const modals = {
            child: {
                openBtn: document.getElementById('openChildModal'),
                overlay: document.getElementById('childModalOverlay')
            },
            teen: {
                openBtn: document.getElementById('openTeenModal'),
                overlay: document.getElementById('teenModalOverlay')
            },
            adult: {
                openBtn: document.getElementById('openAdultModal'),
                overlay: document.getElementById('adultModalOverlay')
            }
        };

        // Open modal functions
        Object.keys(modals).forEach(type => {
            modals[type].openBtn.addEventListener('click', () => {
                modals[type].overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close modal function
        function closeModal(overlay) {
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Close modal events for all modals
        document.querySelectorAll('.close-modal').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const overlay = e.target.closest('.modal-overlay');
                closeModal(overlay);
            });
        });

        // Close on overlay click
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', (e) => {
                if (e.target === overlay) {
                    closeModal(overlay);
                }
            });
        });

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                document.querySelectorAll('.modal-overlay.active').forEach(overlay => {
                    closeModal(overlay);
                });
            }
        });

        // Form validation
        document.querySelectorAll('.screening-form').forEach(form => {
            form.addEventListener('submit', (e) => {
                const inputs = form.querySelectorAll('input[required], select[required]');
                let isValid = true;

                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        input.classList.add('error');
                        isValid = false;
                        
                        setTimeout(() => {
                            input.classList.remove('error');
                        }, 3000);
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                }
            });
        });

        // Real-time validation
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('input', () => {
                if (input.classList.contains('error')) {
                    input.classList.remove('error');
                }
            });
        });

        // Phone number formatting
        document.querySelectorAll('input[type="tel"]').forEach(input => {
            input.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
            });
        });
    </script>
</body>
</html>