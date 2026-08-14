<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cancellation & Refund Policy - Talking Tales</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Museo+Sans:wght@300;400;500;700&family=Nunito+Sans:wght@600;700;800&display=swap" rel="stylesheet" />
  <?php include('header-links.php');?>

  <style>
    .museo-rounded { font-family: 'Nunito Sans', sans-serif; font-weight: 700; }
    .museo-sans { font-family: 'Museo Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }

    .policy-card {
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }
    .policy-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(11, 135, 197, 0.15);
    }
    .policy-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0; right: 0;
      height: 4px;
      transition: all 0.3s ease;
      background: #0B87C5;
    }

    .stagger-animation {
      animation: slideInUp 0.8s ease-out forwards;
      opacity: 0;
      transform: translateY(30px);
    }
    @keyframes slideInUp {
      to { opacity: 1; transform: translateY(0); }
    }

    .highlight {
      background: linear-gradient(120deg, #FFC73C 0%, #FFC73C 100%);
      background-repeat: no-repeat;
      background-size: 100% 0.3em;
      background-position: 0 88%;
      padding: 0 4px;
    }
  </style>
</head>

<body class="bg-gray-50">
  <?php include('header.php');?>

  <!-- Hero Section -->
  <section class="bg-white mt-16 py-12">
    <div class="max-w-5xl mx-auto text-center px-4">
      <h1 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800 mb-4">
        <span>Cancellation &</span> <span class="text-[#0B87C5]">Refund Policy</span>
      </h1>
      <p class="museo-sans text-gray-600 max-w-3xl mx-auto leading-relaxed">
        Talking Tales values your trust and strives to ensure a smooth experience for every parent, school, and institution.  
        This policy outlines the procedures and conditions for cancelling services or requesting a refund.
      </p>
    </div>
  </section>

  <!-- Main Content -->
  <section class="bg-gray-50 py-10 lg:py-14">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

      <!-- Cancellation Policy -->
      <div class="policy-card bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
        <div class="flex items-start space-x-4 mb-4">
          <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">
            <i class="fas fa-ban text-red-500 text-lg"></i>
          </div>
          <div>
            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-2">Cancellation Policy</h2>
            <p class="museo-sans text-base text-gray-600 leading-relaxed">
              We understand that circumstances may change. You may cancel your order or booked service under the terms outlined below.
            </p>
          </div>
        </div>

        <div class="bg-red-50 rounded-xl p-4 mt-4">
          <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">Conditions for cancellation:</h3>
          <ul class="list-disc ml-5 museo-sans text-sm text-gray-700 space-y-1">
            <li>Orders for physical products can be cancelled within <strong>24 hours</strong> of placing the order.</li>
            <li>For therapy sessions or workshops, cancellations must be made at least <strong>48 hours prior</strong> to the scheduled appointment.</li>
            <li>Late cancellations may be subject to partial charges or forfeiture of session fees.</li>
            <li>Custom-made or digital products are <strong>non-cancellable</strong> once delivered or downloaded.</li>
          </ul>
        </div>
      </div>

      <!-- Refund Policy -->
      <div class="policy-card bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
        <div class="flex items-start space-x-4 mb-4">
          <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
            <i class="fas fa-rotate-left text-green-600 text-lg"></i>
          </div>
          <div>
            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-2">Refund Policy</h2>
            <p class="museo-sans text-base text-gray-600 leading-relaxed">
              Refunds are processed with transparency and fairness. If your cancellation request meets the conditions above, Talking Tales will initiate the refund to your original mode of payment.
            </p>
          </div>
        </div>

        <div class="bg-green-50 rounded-xl p-4">
          <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">Refund eligibility:</h3>
          <ul class="list-disc ml-5 museo-sans text-sm text-gray-700 space-y-1">
            <li>Refunds for cancelled sessions or services will be processed within <strong>7–10 working days</strong>.</li>
            <li>For physical goods, refunds will be initiated once returned items are inspected and verified.</li>
            <li>No refunds will be granted for digital materials or services that have already commenced.</li>
            <li>Partial refunds may apply if a service package is only partially used.</li>
          </ul>
        </div>
      </div>

      <!-- Exceptions & Non-Refundable Items -->
      <div class="policy-card bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
        <div class="flex items-start space-x-4 mb-4">
          <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
            <i class="fas fa-exclamation-circle text-yellow-500 text-lg"></i>
          </div>
          <div>
            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-2">Exceptions & Non-Refundable Items</h2>
            <p class="museo-sans text-base text-gray-600 leading-relaxed">
              Certain items and services are exempt from cancellation or refund due to their nature.
            </p>
          </div>
        </div>

        <div class="bg-yellow-50 rounded-xl p-4">
          <ul class="list-disc ml-5 museo-sans text-sm text-gray-700 space-y-1">
            <li>Downloaded or accessed digital content</li>
            <li>Personalized therapy materials or assessments</li>
            <li>Promotional or discounted packages</li>
            <li>Services already rendered or sessions conducted</li>
          </ul>
        </div>
      </div>

      <!-- How to Request a Refund -->
      <div class="policy-card bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
        <div class="flex items-start space-x-4 mb-4">
          <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
            <i class="fas fa-paper-plane text-[#0B87C5] text-lg"></i>
          </div>
          <div>
            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-2">How to Request a Refund</h2>
            <p class="museo-sans text-base text-gray-600 leading-relaxed">
              To request a refund or cancellation, please contact our support team via email or phone.  
              Ensure you provide your order ID, reason for cancellation, and proof of payment (if applicable).
            </p>
          </div>
        </div>

        <div class="bg-blue-50 rounded-xl p-4">
          <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">Contact Details:</h3>
          <ul class="list-none museo-sans text-sm text-gray-700 space-y-1">
            <li><i class="fas fa-envelope text-[#0B87C5] mr-2"></i> <strong>Email:</strong> info@thetalkingtales.in</li>
            <li><i class="fas fa-phone text-[#0B87C5] mr-2"></i> <strong>Phone:</strong> +91-9573737847</li>
            <li><i class="fas fa-clock text-[#0B87C5] mr-2"></i> <strong>Business Hours:</strong> Monday–Friday, 9 AM–6 PM</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Notice -->
  <section class="bg-[#0B87C5] py-12 mb-10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="bg-white bg-opacity-10 rounded-2xl p-6">
        <i class="fas fa-info-circle text-2xl text-white mb-4"></i>
        <p class="museo-sans text-white leading-relaxed">
          This policy is periodically reviewed and updated. Please revisit this page for the latest version.  
          Continued use of Talking Tales services indicates agreement with the most recent policy terms.
        </p>
      </div>
    </div>
  </section>

  <?php include('footer.php');?>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) entry.target.style.animationPlayState = 'running';
        });
      }, { threshold: 0.1 });
      document.querySelectorAll('.stagger-animation').forEach(el => observer.observe(el));
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const navbar = document.getElementById('navbar');
      if (navbar) navbar.classList.add('navbar-scrolled');
    });
  </script>
</body>
</html>
