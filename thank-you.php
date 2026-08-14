<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Talking Tales</title>
    <script src="https://cdn.tailwindcss.com"></script>
            <?php include('header-links.php');?>

    <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&display=swap');
        
        .museo-sans-rounded {
            font-family: 'Museo Sans', sans-serif;
            font-weight: 700;
        }
        
        .museo-sans {
            font-family: 'Museo Sans', sans-serif;
        }
        
        .success-animation {
            animation: successPulse 2s ease-in-out infinite;
        }
        
        @keyframes successPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .checkmark-animation {
            animation: checkmarkDraw 0.8s ease-in-out;
        }
        
        @keyframes checkmarkDraw {
            0% { stroke-dasharray: 0 50; }
            100% { stroke-dasharray: 50 0; }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .fade-in-up-delayed {
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }
        
        .fade-in-up-delayed-2 {
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }
        
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        .bounce-in {
            animation: bounceIn 1s ease-out;
        }
        
        @keyframes bounceIn {
            0% { opacity: 0; transform: scale(0.3); }
            50% { opacity: 1; transform: scale(1.1); }
            70% { transform: scale(0.9); }
            100% { opacity: 1; transform: scale(1); }
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(11, 135, 197, 0.15);
        }
        
        .gradient-text {
            color: #0B87C5;
        }
    </style>
</head>

<div class="min-h-screen bg-white">
    
            <?php include('header.php');?>

    
    <!-- Main Content Container -->
    <div class="container mx-auto mt-10 px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="max-w-4xl mx-auto text-center">
            
            <!-- Success Icon -->
            <div class="bounce-in mb-8 sm:mb-12">
                <div class="inline-flex items-center justify-center w-24 h-24 sm:w-28 sm:h-28 lg:w-32 lg:h-32 rounded-full mb-6 success-animation" style="background-color: #3DD288;">
                    <svg width="48" height="48" class="sm:w-14 sm:h-14 lg:w-16 lg:h-16 checkmark-animation" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 6L9 17L4 12" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="stroke-dasharray: 50; stroke-dashoffset: 0;"/>
                    </svg>
                </div>
            </div>

            <!-- Thank You Message -->
            <div class="fade-in-up mb-8 sm:mb-12">
                <h1 class="museo-sans-rounded text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6" style="color: #0B87C5;">
                    Thank You!
                </h1>
                <h2 class="museo-sans-rounded text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-6 sm:mb-8" style="color: #0B87C5;">
                    Your Form Has Been Successfully Submitted
                </h2>
                <p class="museo-sans text-base sm:text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto leading-relaxed mb-8" style="color: #4A4A4A;">
                    We appreciate you taking the time to reach out to us. Our team will review your information and get back to you within 24-48 hours.
                </p>
            </div>



            <!-- Action Buttons -->
            <div class="fade-in-up-delayed-2 mb-12 sm:mb-16">
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center max-w-2xl mx-auto">
                    <a 
                        href="index"
                        class="museo-sans-rounded w-full sm:w-auto text-white px-6 py-3 sm:px-8 sm:py-4 lg:px-10 lg:py-5 rounded-full text-base sm:text-lg lg:text-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300" 
                        style="background-color: #0B87C5;"
                    >
                        Return to Homepage
                    </a>
               
                </div>
            </div>

            <!-- Contact Information -->
            <div class="fade-in-up-delayed-2">
                <div class="border-t border-gray-200 pt-8 sm:pt-12">
                    <p class="museo-sans text-sm sm:text-base lg:text-lg mb-6" style="color: #4A4A4A;">
                        Need immediate assistance? Feel free to contact us directly:
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-8">
                        <a 
                            href="mailto:info@talkingtales.com" 
                            class="museo-sans hover:opacity-80 transition-opacity duration-300 flex items-center text-sm sm:text-base lg:text-lg"
                            style="color: #0B87C5;"
                        >
                            <svg width="20" height="20" class="sm:w-6 sm:h-6 mr-2 sm:mr-3" viewBox="0 0 24 24" fill="none">
                                <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2"/>
                                <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            info@talkingtales.com
                        </a>
                        <a 
                            href="tel:+919573737847" 
                            class="museo-sans hover:opacity-80 transition-opacity duration-300 flex items-center text-sm sm:text-base lg:text-lg"
                            style="color: #0B87C5;"
                        >
                           <i class="fas fa-phone text-primary-blue mr-2"></i>
                            +919573737847
                        </a>
                    </div>
                </div>
            </div>

            <!-- Brand Footer with Logo -->
            <div class="mt-12 sm:mt-16 lg:mt-20">
                <div class="flex flex-col items-center justify-center">
                    <!-- Logo Image Placeholder -->
                    <div class="mb-4">
                        <img 
                            src="assets/logo/logo-dark.png" 
                            alt="Talking Tales Logo" 
                            class="h-16 sm:h-20 lg:h-24 w-auto"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        />
                        <!-- Fallback icon if image doesn't load -->
                        <!--<div class="w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 rounded-full flex items-center justify-center" style="background-color: #0B87C5; display: none;">-->
                        <!--    <svg width="32" height="32" class="sm:w-10 sm:h-10 lg:w-12 lg:h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                        <!--        <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 7.5V9M15 10.5V19L13.5 17.5V10.5M9.5 10.5V17.5L8 19V10.5M3 7V9L9 7.5V7L3 7Z" fill="white"/>-->
                        <!--    </svg>-->
                        <!--</div>-->
                    </div>
                    <!--<div class="text-center">-->
                    <!--    <h4 class="museo-sans-rounded text-xl sm:text-2xl lg:text-3xl font-bold" style="color: #0B87C5;">Talking Tales</h4>-->
                    <!--    <p class="museo-sans text-sm sm:text-base" style="color: #4A4A4A;">Professional Speech Therapy</p>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to simulate going back to homepage
    function goHome() {
        // In a real application, this would navigate to the actual homepage
        alert('Redirecting to homepage...');
        // window.location.href = '/';
    }
    
    // Function to navigate to about/services page
    function learnMore() {
        // In a real application, this would navigate to the about or services page
        alert('Redirecting to learn more about our services...');
        // window.location.href = '/about' or '/services';
    }
    
    // Add some interactive feedback for mobile devices
    const buttons = document.querySelectorAll('button');
    
    buttons.forEach(button => {
        button.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.95)';
        });
        
        button.addEventListener('touchend', function() {
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 100);
        });
    });
    
    // Auto-redirect after a certain time (optional)
    // setTimeout(() => {
    //     console.log('Auto-redirecting to homepage...');
    //     // window.location.href = '/';
    // }, 30000); // 30 seconds
</script>

</div>