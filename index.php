<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movana | Next-Gen Web App Builder</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    body { 
      font-family: 'Inter', sans-serif; 
      scroll-behavior: smooth;
    }
    
    .hero-gradient {
      background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
    }
    
    .text-gradient {
      background: linear-gradient(135deg, #3b82f6, #1d4ed8, #0ea5e9);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .glass-card {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .floating-element {
      animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
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
    
    .scale-on-hover {
      transition: all 0.3s ease;
    }
    
    .scale-on-hover:hover {
      transform: scale(1.05);
    }
    
    .glow-button {
      background: linear-gradient(135deg, #3b82f6, #1d4ed8);
      box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
      transition: all 0.3s ease;
    }
    
    .glow-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(59, 130, 246, 0.5);
    }
    
    .stat-counter {
      font-variant-numeric: tabular-nums;
    }
    
    .process-number {
      background: linear-gradient(135deg, #3b82f6, #1d4ed8);
      color: white;
      width: 3rem;
      height: 3rem;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 1.125rem;
    }
  </style>
</head>
<body class="bg-white text-gray-900">
  <!-- Navigation -->
  <header class="fixed top-0 inset-x-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-gray-900">Movana</h1>
      <nav class="hidden md:flex space-x-8 text-sm font-medium">
        <a href="#features" class="text-gray-600 hover:text-blue-600 transition">Features</a>
        <a href="#process" class="text-gray-600 hover:text-blue-600 transition">Process</a>
        <a href="#contact" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
      </nav>
      <a href="#contact" class="bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-700 transition">Get Started</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero-gradient pt-24 pb-16 text-white">
    <div class="max-w-6xl mx-auto px-6 py-20">
      <div class="text-center fade-up">
        <h1 class="text-6xl md:text-8xl font-black leading-tight mb-8">
          Build apps that
          <span class="block text-gradient">matter</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto font-light leading-relaxed">
          Transform your vision into powerful, scalable applications. We turn complex ideas into simple, beautiful experiences that users love.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="#contact" class="glow-button px-8 py-4 rounded-full text-lg font-semibold text-white">
            Start Your Project
          </a>
          <a href="#features" class="border border-white/30 px-8 py-4 rounded-full text-lg font-semibold text-white hover:bg-white/10 transition">
            Learn More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
        <div class="fade-up">
          <div class="stat-counter text-5xl font-black text-blue-600 mb-2">250+</div>
          <p class="text-gray-600 font-medium">Projects Delivered</p>
        </div>
        <div class="fade-up">
          <div class="stat-counter text-5xl font-black text-blue-600 mb-2">98%</div>
          <p class="text-gray-600 font-medium">Client Satisfaction</p>
        </div>
        <div class="fade-up">
          <div class="stat-counter text-5xl font-black text-blue-600 mb-2">24/7</div>
          <p class="text-gray-600 font-medium">Support Available</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-20 fade-up">
        <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">Why choose Movana?</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          We combine cutting-edge technology with human-centered design to create digital experiences that drive results.
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
        <div class="fade-up scale-on-hover">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="text-3xl font-bold text-gray-900 mb-4">Lightning Fast Performance</h3>
          <p class="text-lg text-gray-600 leading-relaxed">Optimized for speed with sub-second load times. Your users will experience blazing-fast interactions across all devices and platforms.</p>
        </div>
        
        <div class="fade-up scale-on-hover">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
          </div>
          <h3 class="text-3xl font-bold text-gray-900 mb-4">Enterprise Security</h3>
          <p class="text-lg text-gray-600 leading-relaxed">Bank-level security with SSL encryption, automated backups, and comprehensive monitoring to keep your data safe.</p>
        </div>
        
        <div class="fade-up scale-on-hover">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
          </div>
          <h3 class="text-3xl font-bold text-gray-900 mb-4">Responsive Design</h3>
          <p class="text-lg text-gray-600 leading-relaxed">Pixel-perfect experiences that look stunning on every device, from smartphones to 4K displays.</p>
        </div>
        
        <div class="fade-up scale-on-hover">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
            </svg>
          </div>
          <h3 class="text-3xl font-bold text-gray-900 mb-4">Scalable Architecture</h3>
          <p class="text-lg text-gray-600 leading-relaxed">Built for growth with cloud-native architecture that scales seamlessly as your business expands globally.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-24 bg-blue-50">
    <div class="max-w-4xl mx-auto px-6 text-center fade-up">
      <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-8">
        Ready to build something 
        <span class="text-gradient">amazing?</span>
      </h2>
      <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto">
        Join hundreds of companies who've transformed their digital presence with Movana. Let's bring your vision to life.
      </p>
      <a href="#contact" class="glow-button px-12 py-4 rounded-full text-lg font-semibold text-white">
        Start Your Project Today
      </a>
    </div>
  </section>

  <!-- Process Section -->
  <section id="process" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-20 fade-up">
        <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">Our process</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          From initial concept to final launch, we guide you through every step of the journey.
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="text-center fade-up">
          <div class="process-number mx-auto mb-6">1</div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Discovery & Strategy</h3>
          <p class="text-lg text-gray-600 leading-relaxed">
            We start by understanding your goals, target audience, and technical requirements to create a comprehensive roadmap.
          </p>
        </div>
        
        <div class="text-center fade-up">
          <div class="process-number mx-auto mb-6">2</div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Design & Development</h3>
          <p class="text-lg text-gray-600 leading-relaxed">
            Our team crafts beautiful interfaces and robust backends using the latest technologies and best practices.
          </p>
        </div>
        
        <div class="text-center fade-up">
          <div class="process-number mx-auto mb-6">3</div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Launch & Support</h3>
          <p class="text-lg text-gray-600 leading-relaxed">
            We deploy your application and provide ongoing support to ensure optimal performance and growth.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-24 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto px-6">
      <div class="text-center mb-16 fade-up">
        <h2 class="text-5xl md:text-6xl font-black mb-6">Let's talk</h2>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">
          Ready to transform your digital presence? Get in touch and let's discuss your project.
        </p>
      </div>
      
      <div class="glass-card p-12 rounded-3xl fade-up">
        <form method="POST" action="submit.php" class="space-y-8">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
              <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
              <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Project Details</label>
            <textarea name="description" rows="6" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition resize-none" placeholder="Tell us about your project..."></textarea>
          </div>
          <button type="submit" class="w-full glow-button py-4 rounded-xl text-lg font-semibold text-white">
            Send Message
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white py-12 border-t border-gray-100">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <p class="text-gray-600">&copy; 2025 Movana. Crafted with passion for innovation.</p>
    </div>
  </footer>

  <script>
    // Intersection Observer for animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    // Counter animation
    const counters = document.querySelectorAll('.stat-counter');
    counters.forEach(counter => {
      const target = counter.textContent;
      const number = parseInt(target.replace(/\D/g, ''));
      const suffix = target.replace(/\d/g, '');
      
      let current = 0;
      const increment = number / 100;
      const timer = setInterval(() => {
        current += increment;
        if (current >= number) {
          current = number;
          clearInterval(timer);
        }
        counter.textContent = Math.floor(current) + suffix;
      }, 20);
    });
  </script>
</body>
</html>