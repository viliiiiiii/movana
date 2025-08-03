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
  </style>
</head>
<body class="bg-white text-gray-800">
  <!-- Navigation -->
  <header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">Movana</h1>
      <nav class="hidden md:flex space-x-6 text-sm font-medium">
        <a href="#features" class="hover:text-indigo-600 transition">Features</a>
        <a href="#how" class="hover:text-indigo-600 transition">How It Works</a>
        <a href="#contact" class="hover:text-indigo-600 transition">Contact</a>
      </nav>
      <a href="#contact" class="md:hidden inline-block bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-semibold">Start</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="relative py-28 bg-gradient-to-br from-indigo-600 to-blue-500 text-white text-center">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-5xl font-bold mb-4 leading-tight">Web Apps Made Simple</h2>
      <p class="text-lg mb-8 max-w-2xl mx-auto">Design and launch custom-built web applications with Movana — no bloat, no templates, just exactly what you need.</p>
      <a href="#contact" class="inline-block bg-white text-indigo-700 px-6 py-3 rounded-full text-lg font-semibold hover:bg-gray-100 transition">Start Now</a>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
      <div class="bg-white rounded-xl p-6 shadow-sm text-center hover:shadow-md transition">
        <div class="text-indigo-600 text-4xl mb-4">🛠️</div>
        <h3 class="text-xl font-semibold mb-2">Custom Development</h3>
        <p>We build your app from scratch — fully aligned to your goals, not pre-made components.</p>
      </div>
      <div class="bg-white rounded-xl p-6 shadow-sm text-center hover:shadow-md transition">
        <div class="text-indigo-600 text-4xl mb-4">📱</div>
        <h3 class="text-xl font-semibold mb-2">Responsive by Default</h3>
        <p>Your web app will look great on all devices and load fast wherever your users are.</p>
      </div>
      <div class="bg-white rounded-xl p-6 shadow-sm text-center hover:shadow-md transition">
        <div class="text-indigo-600 text-4xl mb-4">🔒</div>
        <h3 class="text-xl font-semibold mb-2">Secure & Reliable</h3>
        <p>Deployed on hardened infrastructure with clean, production-ready code and ongoing support.</p>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section id="how" class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">How It Works</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center">
          <div class="text-indigo-600 text-3xl mb-2">📝</div>
          <h4 class="text-lg font-semibold mb-1">Step 1: Tell Us</h4>
          <p class="text-gray-600">Share your goals, audience, and ideal features. No tech knowledge needed.</p>
        </div>
        <div class="text-center">
          <div class="text-indigo-600 text-3xl mb-2">📦</div>
          <h4 class="text-lg font-semibold mb-1">Step 2: We Build</h4>
          <p class="text-gray-600">Our team develops a clean, functional app that fits your vision exactly.</p>
        </div>
        <div class="text-center">
          <div class="text-indigo-600 text-3xl mb-2">🚀</div>
          <h4 class="text-lg font-semibold mb-1">Step 3: You Launch</h4>
          <p class="text-gray-600">You go live with a supported, scalable app and a smooth user experience.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form -->
  <section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-xl mx-auto px-6">
      <h2 class="text-3xl font-bold mb-8 text-center">Start Your Project</h2>
      <form method="POST" action="submit.php" class="bg-white p-6 rounded-lg shadow space-y-4">
        <input type="text" name="name" placeholder="Your Name" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        <input type="email" name="email" placeholder="Your Email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        <textarea name="description" rows="5" placeholder="Tell us about your idea..." required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
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
