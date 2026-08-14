<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon - Talking Tales</title>
    <?php include('header-links.php');?>
    <script src="https://cdn.tailwindcss.com"></script>
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
        
        .bounce-in {
            animation: bounceIn 1s ease-out;
        }
        
        @keyframes bounceIn {
            0% { opacity: 0; transform: scale(0.3); }
            50% { opacity: 1; transform: scale(1.1); }
            70% { transform: scale(0.9); }
            100% { opacity: 1; transform: scale(1); }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }
    </style>
</head>

<?php include('header.php');?>


<div class="min-h-screen bg-white flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <!-- Main Content Container -->
    <div class="max-w-4xl mx-auto text-center">
        
        <!-- Logo/Brand Section -->
<div class="mb-8 sm:mb-12 flex justify-center">
    <img src="assets/logo/logo-dark.png" alt="Talking Tales Logo" class="w-40 sm:w-48 lg:w-56">
</div>

        <!-- Coming Soon Message -->
        <div class="fade-in-up mb-8 sm:mb-12">
            <h2 class="museo-sans-rounded text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6" style="color: #0B87C5;">
                Coming Soon
            </h2>
            <p class="museo-sans text-base sm:text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto mb-8 sm:mb-12 leading-relaxed" style="color: #4A4A4A;">
                We're working hard to bring you an amazing experience. Our new website will feature comprehensive speech therapy resources and tools.
            </p>
        </div>

        <!-- Return to Homepage Button -->
        <div class="fade-in-up">
            <a 
               href="index"
                class="museo-sans-rounded bg-gradient-to-r from-blue-500 to-green-500 text-white px-6 py-3 sm:px-8 sm:py-4 lg:px-10 lg:py-5 rounded-full text-base sm:text-lg lg:text-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300" 
                style="background: linear-gradient(135deg, #0B87C5 0%, #3DD288 100%);"
            >
                Return to Homepage
            </a>
        </div>

        <!-- Contact Information -->
        <div class="fade-in-up mt-12 sm:mt-16 lg:mt-20">
            <p class="museo-sans text-sm sm:text-base lg:text-lg mb-4" style="color: #4A4A4A;">
                Have questions? We're here to help!
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
                    <svg width="20" height="20" class="sm:w-6 sm:h-6 mr-2 sm:mr-3" viewBox="0 0 24 24" fill="none">
                        <path d="M22 16.92V19.92C22.0001 20.1985 21.9141 20.4695 21.7551 20.6972C21.5961 20.9249 21.3728 21.0977 21.1185 21.1931C20.8642 21.2885 20.5893 21.3014 20.3272 21.2301C20.0651 21.1588 19.8287 21.0067 19.65 20.79L16.51 17.17C16.3318 16.9447 16.2159 16.6755 16.1743 16.3913C16.1327 16.1071 16.1668 15.8178 16.2731 15.5531C16.3794 15.2884 16.5536 15.0585 16.7759 14.8875C16.9982 14.7165 17.2594 14.6105 17.53 14.58L20.08 14.25C20.5751 14.1875 21.0663 14.3478 21.4385 14.6928C21.8107 15.0378 22.0277 15.5378 22.03 16.06L22 16.92Z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    +91-9573737847
                </a>
            </div>
        </div>
    </div>
</div>



<script>
    // Function to simulate going back to homepage
    function goHome() {
        // In a real application, this would navigate to the actual homepage
        // For demo purposes, we'll just show an alert
        alert('Redirecting to homepage...');
        
        // In real implementation, you would use:
        // window.location.href = '/';
        // or 
        // window.history.back();
    }
    
    // Add some responsive behavior for touch devices
    const button = document.querySelector('button');
    
    // Touch feedback for mobile devices
    button.addEventListener('touchstart', function() {
        this.style.transform = 'scale(0.95)';
    });
    
    button.addEventListener('touchend', function() {
        this.style.transform = 'scale(1)';
    });
</script>

</div>