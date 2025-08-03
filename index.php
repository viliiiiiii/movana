<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movana | Smart Web App Builder by Elvir</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-white text-gray-800">
  <!-- Navigation -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">Movana</h1>
      <nav class="hidden md:flex space-x-6 text-sm font-medium">
        <a href="#features" class="hover:text-indigo-600">Features</a>
        <a href="#how" class="hover:text-indigo-600">How It Works</a>
        <a href="#contact" class="hover:text-indigo-600">Contact</a>
      </nav>
      <a href="#contact" class="md:hidden inline-block bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-semibold">Start</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="relative overflow-hidden py-24 bg-gradient-to-r from-indigo-600 to-indigo-400 text-white">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-5xl font-bold leading-tight mb-6">Build Your Dream App – Without the Code</h2>
      <p class="text-lg mb-8">Movana crafts custom web applications based on your unique idea and preferences. Designed for entrepreneurs, tailored for speed.</p>
      <a href="#contact" class="bg-white text-indigo-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Get Started</a>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">
      <div class="text-center">
        <div class="text-indigo-600 text-4xl mb-4">⚙️</div>
        <h3 class="text-xl font-semibold mb-2">Tailored Development</h3>
        <p>We translate your idea into a precise, fully functional web application. No templates, just your logic.</p>
      </div>
      <div class="text-center">
        <div class="text-indigo-600 text-4xl mb-4">🧠</div>
        <h3 class="text-xl font-semibold mb-2">AI-Assisted Planning</h3>
        <p>Movana suggests features and layout that best suit your audience, market, and goals.</p>
      </div>
      <div class="text-center">
        <div class="text-indigo-600 text-4xl mb-4">🚀</div>
        <h3 class="text-xl font-semibold mb-2">Fast Deployment</h3>
        <p>Your custom app is delivered to production-ready infrastructure with support included.</p>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section id="how" class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">How It Works</h2>
      <div class="space-y-10">
        <div>
          <h4 class="text-xl font-semibold">1. Share Your Vision</h4>
          <p class="text-gray-600">Fill out a short form with your idea, target audience, and desired features.</p>
        </div>
        <div>
          <h4 class="text-xl font-semibold">2. Get Your Plan</h4>
          <p class="text-gray-600">We'll generate a proposal and timeline, plus AI-backed feature recommendations.</p>
        </div>
        <div>
          <h4 class="text-xl font-semibold">3. Launch & Grow</h4>
          <p class="text-gray-600">Your app is deployed live with support and upgrade options. You're in control.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form -->
  <section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-xl mx-auto px-6">
      <h2 class="text-3xl font-bold mb-8 text-center">Start Your Project</h2>
      <form method="POST" action="submit.php" class="bg-white p-6 rounded-lg shadow space-y-4">
        <input type="text" name="name" placeholder="Your Name" required class="w-full px-4 py-3 border border-gray-300 rounded-md">
        <input type="email" name="email" placeholder="Your Email" required class="w-full px-4 py-3 border border-gray-300 rounded-md">
        <textarea name="description" rows="5" placeholder="Tell us about your idea..." required class="w-full px-4 py-3 border border-gray-300 rounded-md"></textarea>
        <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-md font-semibold hover:bg-indigo-700">Send Request</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-sm text-gray-500 py-6">
    &copy; <?php echo date('Y'); ?> Movana. All rights reserved.
  </footer>
</body>
</html>
