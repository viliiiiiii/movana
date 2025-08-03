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
      overflow-x: hidden;
    }
    
    .gradient-bg {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #f5576c 75%, #4facfe 100%);
      background-size: 400% 400%;
      animation: gradientShift 15s ease infinite;
    }
    
    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    
    .glass-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }
    
    .glass-nav {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .floating-orb {
      position: absolute;
      border-radius: 50%;
      background: linear-gradient(45deg, rgba(167, 139, 250, 0.3), rgba(59, 130, 246, 0.3));
      filter: blur(40px);
      animation: float 6s ease-in-out infinite;
    }
    
    .floating-orb:nth-child(1) {
      width: 200px;
      height: 200px;
      top: 10%;
      left: 10%;
      animation-delay: 0s;
    }
    
    .floating-orb:nth-child(2) {
      width: 150px;
      height: 150px;
      top: 60%;
      right: 10%;
      animation-delay: 2s;
    }
    
    .floating-orb:nth-child(3) {
      width: 100px;
      height: 100px;
      bottom: 20%;
      left: 60%;
      animation-delay: 4s;
    }
    
    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(180deg); }
    }
    
    .fade-up {
      opacity: 0;
      transform: translateY(40px);
      transition: all 1s ease-out;
    }
    
    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
    }
    
    .slide-in-left {
      opacity: 0;
      transform: translateX(-50px);
      transition: all 1s ease-out;
    }
    
    .slide-in-left.visible {
      opacity: 1;
      transform: translateX(0);
    }
    
    .slide-in-right {
      opacity: 0;
      transform: translateX(50px);
      transition: all 1s ease-out;
    }
    
    .slide-in-right.visible {
      opacity: 1;
      transform: translateX(0);
    }
    
    .glow-button {
      position: relative;
      background: linear-gradient(45deg, #667eea, #764ba2);
      box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4);
      transition: all 0.3s ease;
    }
    
    .glow-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(102, 126, 234, 0.6);
    }
    
    .feature-card {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      transition: all 0.4s ease;
    }
    
    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      background: rgba(255, 255, 255, 0.9);
    }
    
    .process-step {
      position: relative;
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.7));
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      transition: all 0.4s ease;
    }
    
    .process-step:hover {
      transform: scale(1.05);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    
    .contact-form {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .input-field {
      background: rgba(255, 255, 255, 0.8);
      border: 2px solid transparent;
      transition: all 0.3s ease;
    }
    
    .input-field:focus {
      background: rgba(255, 255, 255, 0.95);
      border-color: #667eea;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(102, 126, 234, 0.2);
    }
    
    .text-gradient {
      background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .pulse-ring {
      position: absolute;
      border: 2px solid rgba(102, 126, 234, 0.3);
      border-radius: 50%;
      animation: pulse 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
    }
    
    @keyframes pulse {
      0% {
        transform: scale(0.8);
        opacity: 1;
      }
      100% {
        transform: scale(2.4);
        opacity: 0;
      }
    }
  </style>
</head>
<body class="gradient-bg min-h-screen">
  <!-- Floating Orbs -->
  <div class="floating-orb"></div>
  <div class="floating-orb"></div>
  <div class="floating-orb"></div>

  <!-- Navigation -->
  <header class="glass-nav fixed top-0 inset-x-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-3xl font-black text-gradient">Movana</h1>
      <nav class="hidden md:flex space-x-8 text-sm font-semibold">
        <a href="#features" class="text-gray-700 hover:text-purple-600 transition-all duration-300 hover:scale-105">Features</a>
        <a href="#how" class="text-gray-700 hover:text-purple-600 transition-all duration-300 hover:scale-105">Process</a>
        <a href="#contact" class="text-gray-700 hover:text-purple-600 transition-all duration-300 hover:scale-105">Contact</a>
      </nav>
      <a href="#contact" class="glow-button text-white px-6 py-3 rounded-full text-sm font-bold transition-all duration-300">Start Building</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="relative pt-32 pb-20 text-center overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 fade-up">
      <div class="relative inline-block mb-8">
        <h2 class="text-7xl md:text-8xl font-black text-white leading-tight mb-6 relative z-10">
          Build Apps That 
          <span class="block text-gradient">Matter</span>
        </h2>
        <div class="pulse-ring absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20"></div>
      </div>
      <p class="text-2xl text-white/90 mb-12 font-light max-w-3xl mx-auto leading-relaxed">
        Transform your vision into stunning, scalable applications with our cutting-edge development process. From concept to deployment in record time.
      </p>
      <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
        <a href="#contact" class="glow-button inline-block text-white px-10 py-4 rounded-full text-lg font-bold transition-all duration-300">
          Start Your Project
        </a>
        <a href="#features" class="glass-card inline-block text-white px-10 py-4 rounded-full text-lg font-semibold hover:bg-white/20 transition-all duration-300">
          Explore Features
        </a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-32 relative">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-20 fade-up">
        <h2 class="text-5xl md:text-6xl font-black text-white mb-6">Why Choose Movana?</h2>
        <p class="text-xl text-white/80 max-w-3xl mx-auto">Experience the future of web development with our revolutionary approach</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="feature-card p-8 rounded-3xl slide-in-left" style="animation-delay: 0.1s">
          <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Lightning Fast</h3>
          <p class="text-gray-600 leading-relaxed">Optimized performance with sub-second load times and seamless user experiences across all devices.</p>
        </div>
        
        <div class="feature-card p-8 rounded-3xl slide-in-left" style="animation-delay: 0.2s">
          <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Fort Knox Security</h3>
          <p class="text-gray-600 leading-relaxed">Enterprise-grade security with SSL encryption, automated backups, and robust protection protocols.</p>
        </div>
        
        <div class="feature-card p-8 rounded-3xl slide-in-right" style="animation-delay: 0.3s">
          <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Pixel Perfect</h3>
          <p class="text-gray-600 leading-relaxed">Responsive design that looks stunning on every screen size, from mobile to 4K displays.</p>
        </div>
        
        <div class="feature-card p-8 rounded-3xl slide-in-right" style="animation-delay: 0.4s">
          <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Infinite Scale</h3>
          <p class="text-gray-600 leading-relaxed">Built for growth with cloud architecture that scales automatically as your business expands.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section id="how" class="py-32 relative">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-20 fade-up">
        <h2 class="text-5xl md:text-6xl font-black text-white mb-6">Our Process</h2>
        <p class="text-xl text-white/80 max-w-3xl mx-auto">From idea to launch in three simple steps</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-12">
        <div class="process-step text-center p-10 rounded-3xl fade-up" style="animation-delay: 0.1s">
          <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full mx-auto mb-8 flex items-center justify-center text-white text-3xl font-black">1</div>
          <h4 class="text-2xl font-bold text-gray-800 mb-4">Discover & Design</h4>
          <p class="text-gray-600 leading-relaxed">We dive deep into your vision, create wireframes, and design a user experience that converts visitors into customers.</p>
        </div>
        
        <div class="process-step text-center p-10 rounded-3xl fade-up" style="animation-delay: 0.2s">
          <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full mx-auto mb-8 flex items-center justify-center text-white text-3xl font-black">2</div>
          <h4 class="text-2xl font-bold text-gray-800 mb-4">Develop & Test</h4>
          <p class="text-gray-600 leading-relaxed">Our expert developers bring your app to life using cutting-edge technologies, with rigorous testing at every stage.</p>
        </div>
        
        <div class="process-step text-center p-10 rounded-3xl fade-up" style="animation-delay: 0.3s">
          <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full mx-auto mb-8 flex items-center justify-center text-white text-3xl font-black">3</div>
          <h4 class="text-2xl font-bold text-gray-800 mb-4">Launch & Support</h4>
          <p class="text-gray-600 leading-relaxed">Go live with confidence on your custom domain, backed by 24/7 monitoring and ongoing support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-32 relative">
    <div class="max-w-2xl mx-auto px-6 fade-up">
      <div class="text-center mb-12">
        <h2 class="text-5xl md:text-6xl font-black text-white mb-6">Ready to Build?</h2>
        <p class="text-xl text-white/80">Let's turn your vision into reality</p>
      </div>
      
      <form method="POST" action="submit.php" class="contact-form p-10 rounded-3xl space-y-6">
        <div class="grid md:grid-cols-2 gap-6">
          <input type="text" name="name" placeholder="Your Name" required class="input-field w-full px-6 py-4 rounded-2xl border-0 focus:outline-none focus:ring-0 font-medium">
          <input type="email" name="email" placeholder="Email Address" required class="input-field w-full px-6 py-4 rounded-2xl border-0 focus:outline-none focus:ring-0 font-medium">
        </div>
        <textarea name="description" rows="6" placeholder="Tell us about your project..." required class="input-field w-full px-6 py-4 rounded-2xl border-0 focus:outline-none focus:ring-0 font-medium resize-none"></textarea>
        <button type="submit" class="glow-button w-full text-white py-4 rounded-2xl text-lg font-bold transition-all duration-300">
          Send Message
        </button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="glass-card text-center text-white/60 py-8 mx-6 mb-6 rounded-3xl">
    <p>&copy; 2025 Movana. Crafted with passion for the future.</p>
  </footer>

  <script>
    // Enhanced animation observer
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('visible');
          }, index * 100);
        }
      });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('.fade-up, .slide-in-left, .slide-in-right').forEach(el => {
      observer.observe(el);
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Add parallax effect to floating orbs
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const parallax = scrolled * 0.5;
      
      document.querySelectorAll('.floating-orb').forEach((orb, index) => {
        orb.style.transform = `translateY(${parallax * (index + 1) * 0.1}px)`;
      });
    });
  </script>
</body>
</html>