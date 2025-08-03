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
    .fade-up {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease-out;
    }
    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
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
        <a href="#how" class="hover:text-indigo-700 transition">Process</a>
        <a href="#contact" class="hover:text-indigo-700 transition">Contact</a>
      </nav>
      <a href="#contact" class="md:hidden inline-block bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-semibold">Start</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="relative pt-40 pb-24 text-center">
    <div class="max-w-4xl mx-auto px-6 fade-up">
      <h2 class="text-5xl md:text-6xl font-extrabold text-indigo-700 leading-tight mb-6">Build Your App with Confidence</h2>
      <p class="text-xl text-gray-700 mb-10">We turn your idea into a secure, responsive, and scalable application with a clear and simple process.</p>
      <a href="#contact" class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-full text-lg font-semibold shadow hover:bg-indigo-700 transition">Let’s Get Started</a>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12">
      <div class="p-8 bg-gray-50 rounded-xl shadow-lg fade-up">
        <h3 class="text-2xl font-bold text-indigo-700 mb-3">Tailored Functionality</h3>
        <p class="text-gray-600">We build your platform to match your exact needs — from backend logic to user interface.</p>
      </div>
      <div class="p-8 bg-gray-50 rounded-xl shadow-lg fade-up">
        <h3 class="text-2xl font-bold text-indigo-700 mb-3">Effortless Responsiveness</h3>
        <p class="text-gray-600">Enjoy pixel-perfect experience across mobile, tablet, and desktop. No extra tweaks needed.</p>
      </div>
      <div class="p-8 bg-gray-50 rounded-xl shadow-lg fade-up">
        <h3 class="text-2xl font-bold text-indigo-700 mb-3">Robust & Secure</h3>
        <p class="text-gray-600">Apps are hosted securely and maintained with modern DevOps practices, SSL, and backups.</p>
      </div>
      <div class="p-8 bg-gray-50 rounded-xl shadow-lg fade-up">
        <h3 class="text-2xl font-bold text-indigo-700 mb-3">Scalable by Design</h3>
        <p class="text-gray-600">Start small and grow big — your app structure is built for scale from the start.</p>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section id="how" class="py-24 bg-indigo-50 border-t">
    <div class="max-w-5xl mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold text-indigo-700 mb-16 fade-up">How We Work</h2>
      <div class="grid md:grid-cols-3 gap-10">
        <div class="fade-up">
          <h4 class="text-lg font-semibold mb-2">1. Discover</h4>
          <p class="text-gray-600">We listen to your vision, goals, and must-haves in a quick discovery session.</p>
        </div>
        <div class="fade-up">
          <h4 class="text-lg font-semibold mb-2">2. Build</h4>
          <p class="text-gray-600">We develop a custom solution and test it across devices and browsers.</p>
        </div>
        <div class="fade-up">
          <h4 class="text-lg font-semibold mb-2">3. Deliver</h4>
          <p class="text-gray-600">Launch on your custom domain with full access and support from day one.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-24 bg-white">
    <div class="max-w-xl mx-auto px-6 fade-up">
      <h2 class="text-3xl font-bold text-center text-indigo-700 mb-8">Let’s Talk</h2>
      <form method="POST" action="submit.php" class="bg-gray-50 p-6 rounded-xl shadow-lg space-y-5">
        <input type="text" name="name" placeholder="Name" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500">
        <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500">
        <textarea name="description" rows="5" placeholder="What are you building?" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500"></textarea>
        <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-md font-semibold hover:bg-indigo-700 transition">Submit</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-sm text-gray-500 py-6">
    &copy; <?php echo date('Y'); ?> Movana. All rights reserved.
  </footer>

  <script>
    // Intersection animation logic
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.2 });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
  </script>
</body>
</html>
