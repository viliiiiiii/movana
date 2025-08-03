<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movana | Web App Builder</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
    .glass {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
    }
  </style>
</head>
<body class="bg-gradient-to-br from-indigo-100 via-white to-blue-100 text-gray-800">
  <!-- Navigation -->
  <header class="glass fixed top-0 inset-x-0 z-50 backdrop-blur border-b border-white/20">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-700">Movana</h1>
      <nav class="hidden md:flex space-x-6 text-sm font-medium">
        <a href="#features" class="hover:text-indigo-700 transition">Features</a>
        <a href="#how" class="hover:text-indigo-700 transition">How It Works</a>
        <a href="#contact" class="hover:text-indigo-700 transition">Contact</a>
      </nav>
      <a href="#contact" class="md:hidden inline-block bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-semibold">Start</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="relative pt-32 pb-24 text-center">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-6xl font-extrabold text-indigo-700 leading-tight mb-4">Create Smarter Web Apps</h2>
      <p class="text-xl text-gray-700 mb-8">Movana helps you turn an idea into a live web app — customized to your goals, beautifully responsive, and ready to grow.</p>
      <a href="#contact" class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-full text-lg font-semibold shadow hover:bg-indigo-700 transition">Start Building</a>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-indigo-700 mb-2">Custom Codebase</h3>
        <p>Apps are built from scratch based on your needs — no cookie-cutter solutions, only clean, efficient code.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-indigo-700 mb-2">Fully Responsive</h3>
        <p>Optimized layouts ensure a great experience across phones, tablets, and desktops.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-indigo-700 mb-2">Secure Deployment</h3>
        <p>Hosted on secure infrastructure with HTTPS, clean routing, and optional scaling support.</p>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section id="how" class="py-24 bg-gray-100 border-t">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-center text-indigo-700 mb-16">How It Works</h2>
      <div class="grid md:grid-cols-3 gap-10 text-center">
        <div>
          <div class="text-5xl text-indigo-600 mb-4">📝</div>
          <h4 class="text-lg font-semibold mb-1">Describe Your Vision</h4>
          <p class="text-gray-600">Send us the goal of your app, its users, and the features you want — nothing more.</p>
        </div>
        <div>
          <div class="text-5xl text-indigo-600 mb-4">⚙️</div>
          <h4 class="text-lg font-semibold mb-1">We Design & Build</h4>
          <p class="text-gray-600">We architect, design, and develop your app tailored to your exact needs.</p>
        </div>
        <div>
          <div class="text-5xl text-indigo-600 mb-4">🚀</div>
          <h4 class="text-lg font-semibold mb-1">You Launch & Grow</h4>
          <p class="text-gray-600">Deploy live, use it with customers, and expand with our ongoing support options.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form -->
  <section id="contact" class="py-24 bg-white">
    <div class="max-w-xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center text-indigo-700 mb-8">Start Your Project</h2>
      <form method="POST" action="submit.php" class="bg-gray-50 p-6 rounded-2xl shadow-lg space-y-4">
        <input type="text" name="name" placeholder="Your Name" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        <input type="email" name="email" placeholder="Your Email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        <textarea name="description" rows="5" placeholder="Describe your project..." required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-md font-semibold hover:bg-indigo-700 transition">Send Request</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-sm text-gray-500 py-6">
    &copy; <?php echo date('Y'); ?> Movana. All rights reserved.
  </footer>
</body>
</html>
