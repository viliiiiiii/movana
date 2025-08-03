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
    .fade-up { opacity: 0; transform: translateY(20px); transition: all 0.8s ease-out; }
    .fade-up.visible { opacity: 1; transform: translateY(0); }
  </style>
</head>
<body class="bg-white text-gray-800">
  <!-- Navigation -->
  <header class="fixed top-0 inset-x-0 z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">Movana</h1>
      <nav class="hidden md:flex space-x-6 text-sm font-medium">
        <a href="#features" class="hover:text-indigo-600 transition">Features</a>
        <a href="#process" class="hover:text-indigo-600 transition">Process</a>
        <a href="#contact" class="hover:text-indigo-600 transition">Contact</a>
      </nav>
      <a href="#contact" class="md:hidden bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-semibold">Start</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="pt-36 pb-24 bg-gradient-to-tr from-indigo-600 to-purple-600 text-white text-center">
    <div class="max-w-3xl mx-auto px-6 fade-up">
      <h2 class="text-5xl font-extrabold leading-tight mb-6">Your Custom Web App, Delivered</h2>
      <p class="text-lg mb-8">Movana builds sleek, scalable apps tailored to your needs. No templates. Just results.</p>
      <a href="#contact" class="inline-block bg-white text-indigo-700 px-8 py-3 rounded-full text-lg font-semibold shadow hover:bg-gray-100 transition">Start Your Project</a>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-24 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-indigo-700 mb-12">What You Get</h2>
      <div class="grid md:grid-cols-3 gap-10">
        <div class="p-6 bg-white rounded-xl shadow hover:shadow-md fade-up">
          <h3 class="text-xl font-semibold text-indigo-700 mb-2">Tailor-Made Logic</h3>
          <p>No copy-paste. Every app we build is crafted from scratch based on your specs.</p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow hover:shadow-md fade-up">
          <h3 class="text-xl font-semibold text-indigo-700 mb-2">Cross-Device Beauty</h3>
          <p>Looks stunning and works smoothly on mobile, tablet, and desktop from day one.</p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow hover:shadow-md fade-up">
          <h3 class="text-xl font-semibold text-indigo-700 mb-2">Secure & Maintainable</h3>
          <p>Deployed on secure infrastructure, built for long-term use and easy scaling.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section id="process" class="py-24 bg-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-indigo-700 mb-12">How It Works</h2>
      <div class="grid md:grid-cols-3 gap-10">
        <div class="fade-up">
          <div class="text-4xl text-indigo-500 mb-2">🔍</div>
          <h4 class="text-lg font-semibold mb-1">1. Discover</h4>
          <p>Tell us your idea and your ideal customer. We translate that into a dev plan.</p>
        </div>
        <div class="fade-up">
          <div class="text-4xl text-indigo-500 mb-2">🧩</div>
          <h4 class="text-lg font-semibold mb-1">2. Develop</h4>
          <p>We build your app using clean, optimized code. Always responsive. Always tested.</p>
        </div>
        <div class="fade-up">
          <div class="text-4xl text-indigo-500 mb-2">🚀</div>
          <h4 class="text-lg font-semibold mb-1">3. Deploy</h4>
          <p>Your app goes live with support, hosting, and growth options ready to go.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Banner -->
  <section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center">
    <div class="max-w-3xl mx-auto px-6">
      <h3 class="text-3xl font-bold mb-4">Ready to bring your idea to life?</h3>
      <p class="mb-6">Let’s talk about your project and how we can build it together.</p>
      <a href="#contact" class="inline-block bg-white text-indigo-700 px-8 py-3 rounded-full text-lg font-semibold shadow hover:bg-gray-100 transition">Contact Us</a>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-24 bg-gray-50">
    <div class="max-w-xl mx-auto px-6 fade-up">
      <h2 class="text-3xl font-bold text-center text-indigo-700 mb-8">Get in Touch</h2>
      <form method="POST" action="submit.php" class="bg-white p-6 rounded-xl shadow-md space-y-5">
        <input type="text" name="name" placeholder="Your Name" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500">
        <input type="email" name="email" placeholder="Your Email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500">
        <textarea name="description" rows="5" placeholder="Briefly describe your app..." required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500"></textarea>
        <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-md font-semibold hover:bg-indigo-700 transition">Submit</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-sm text-gray-500 py-6">
    &copy; <?php echo date('Y'); ?> Movana. All rights reserved.
  </footer>

  <script>
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
