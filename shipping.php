<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shipping Policy - Talking Tales</title>

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

  <!-- Hero -->
  <section class="bg-white mt-16 py-12">
    <div class="max-w-5xl mx-auto text-center px-4">
      <h1 class="museo-rounded text-3xl lg:text-4xl font-bold text-gray-800 mb-4">
        <span>Shipping &</span> <span class="text-[#0B87C5]">Delivery Policy</span>
      </h1>
      <p class="museo-sans text-gray-600 max-w-3xl mx-auto leading-relaxed">
        We aim to ensure every Talking Tales product reaches you safely and on time. This Shipping Policy outlines our process, timelines, and options for delivering physical and digital materials.
      </p>
    </div>
  </section>

  <!-- Main Content -->
  <section class="bg-gray-50 py-10 lg:py-14">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

      <!-- Shipping Overview -->
      <div class="policy-card bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
        <div class="flex items-start space-x-4 mb-4">
          <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
            <i class="fas fa-truck text-[#0B87C5] text-lg"></i>
          </div>
          <div>
            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-2">Shipping Overview</h2>
            <p class="museo-sans text-base text-gray-600 leading-relaxed">
              Talking Tales ships all educational kits, printed materials, and therapy resources through trusted logistics partners. We also deliver digital content directly via secure email links or our official online portal.
            </p>
          </div>
        </div>
        <div class="bg-blue-50 rounded-xl p-4 mt-4">
          <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">Modes of Delivery:</h3>
          <ul class="list-disc ml-5 museo-sans text-sm text-gray-700 space-y-1">
            <li>Physical items are shipped via leading courier services with tracking details.</li>
            <li>Digital resources are sent instantly after order confirmation.</li>
            <li>Institutional shipments are coordinated directly with the school’s point of contact.</li>
          </ul>
        </div>
      </div>

      <!-- Processing & Dispatch Timelines -->
      <div class="policy-card bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
        <div class="flex items-start space-x-4 mb-4">
          <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
            <i class="fas fa-clock text-yellow-600 text-lg"></i>
          </div>
          <div>
            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-2">Processing & Dispatch</h2>
            <p class="museo-sans text-base text-gray-600 leading-relaxed">
              Orders are typically processed within <span class="highlight">2–5 business days</span> from payment confirmation. Delays may occur during holidays, unforeseen disruptions, or customized orders.
            </p>
          </div>
        </div>
        <div class="bg-yellow-50 rounded-xl p-4">
          <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">Once dispatched:</h3>
          <ul class="list-disc ml-5 museo-sans text-sm text-gray-700 space-y-1">
            <li>Customers receive an email or SMS with shipment tracking details.</li>
            <li>Average delivery time: <strong>3–7 business days</strong> depending on the region.</li>
            <li>For institutional orders, our team coordinates dispatch windows in advance.</li>
          </ul>
        </div>
      </div>

      <!-- International Shipping -->
      <div class="policy-card bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
        <div class="flex items-start space-x-4 mb-4">
          <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
            <i class="fas fa-globe text-green-600 text-lg"></i>
          </div>
          <div>
            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-2">International Shipping</h2>
            <p class="museo-sans text-base text-gray-600 leading-relaxed">
              Talking Tales accepts international orders for select products. All duties, taxes, and import fees are the customer’s responsibility and vary by destination country.
            </p>
          </div>
        </div>
        <div class="bg-green-50 rounded-xl p-4">
          <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">Important Notes:</h3>
          <ul class="list-disc ml-5 museo-sans text-sm text-gray-700 space-y-1">
            <li>Transit times may vary based on customs clearance and local regulations.</li>
            <li>Some therapy kits or products may be restricted in specific countries.</li>
            <li>Digital materials remain available globally.</li>
          </ul>
        </div>
      </div>

      <!-- Shipping Issues & Support -->
      <div class="policy-card bg-white rounded-2xl p-6 lg:p-8 shadow-lg stagger-animation">
        <div class="flex items-start space-x-4 mb-4">
          <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
            <i class="fas fa-headset text-orange-600 text-lg"></i>
          </div>
          <div>
            <h2 class="museo-rounded text-2xl lg:text-3xl font-bold text-gray-800 mb-2">Shipping Issues & Support</h2>
            <p class="museo-sans text-base text-gray-600 leading-relaxed">
              In case of delayed or damaged shipments, we encourage you to contact our support team within <span class="highlight">48 hours</span> of delivery for resolution.
            </p>
          </div>
        </div>
        <div class="bg-orange-50 rounded-xl p-4">
          <h3 class="museo-rounded text-lg font-bold text-gray-800 mb-3">We’ll assist you with:</h3>
          <ul class="list-disc ml-5 museo-sans text-sm text-gray-700 space-y-1">
            <li>Order tracking and delivery updates</li>
            <li>Replacement for defective or missing items</li>
            <li>Coordination with courier partners for lost shipments</li>
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
          Shipping policies are reviewed regularly to ensure transparency and customer satisfaction. Any updates will be reflected on this page, and continued purchases indicate acceptance of the revised terms.
        </p>
      </div>
    </div>
  </section>

  <?php include('footer.php');?>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Intersection animations
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
