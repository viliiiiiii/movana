<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movana | Web App Development Studio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <style>
    :root {
      --primary: #6366f1;
      --primary-dark: #4f46e5;
      --primary-light: #a5b4fc;
    }
    body { 
      font-family: 'Inter', sans-serif; 
      scroll-behavior: smooth;
      background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
    }
    .glass {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
    }
    .card-hover {
      transition: all 0.3s ease;
    }
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .gradient-text {
      background: linear-gradient(90deg, var(--primary), var(--primary-dark));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .feature-icon {
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
      margin-bottom: 1.5rem;
      background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(165, 180, 252, 0.1) 100%);
    }
    .process-step {
      position: relative;
      padding-left: 2.5rem;
    }
    .process-step:before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 2rem;
      height: 2rem;
      border-radius: 50%;
      background-color: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
    }
    .process-step:nth-child(1):before { content: '1'; }
    .process-step:nth-child(2):before { content: '2'; }
    .process-step:nth-child(3):before { content: '3'; }
  </style>
</head>
<body class="text-gray-800">
  <!-- Navigation -->
  <header class="glass fixed top-0 inset-x-0 z-50 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
        <h1 class="ml-2 text-2xl font-bold text-indigo-700">Movana</h1>
      </div>
      <nav class="hidden md:flex space-x-8 text-sm font-medium">
        <a href="#features" class="text-gray-600 hover:text-indigo-700 transition flex items-center">
          <span class="mr-1">Features</span>
        </a>
        <a href="#how" class="text-gray-600 hover:text-indigo-700 transition flex items-center">
          <span class="mr-1">Process</span>
        </a>
        <a href="#pricing" class="text-gray-600 hover:text-indigo-700 transition flex items-center">
          <span class="mr-1">Pricing</span>
        </a>
        <a href="#contact" class="text-gray-600 hover:text-indigo-700 transition flex items-center">
          <span class="mr-1">Contact</span>
        </a>
      </nav>
      <a href="#contact" class="inline-block bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-5 py-2 rounded-md text-sm font-semibold shadow-sm hover:shadow-md transition">Get Started</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="relative pt-32 pb-20 md:pt-40 md:pb-28">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-12 md:mb-0 animate__animated animate__fadeInLeft">
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
          <span class="gradient-text">Build Your Dream</span><br>Web Application
        </h2>
        <p class="text-xl text-gray-600 mb-8 max-w-lg">
          We transform your vision into a secure, responsive, and scalable web application with our streamlined development process.
        </p>
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
          <a href="#contact" class="inline-flex items-center justify-center bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow-sm hover:shadow-md transition">
            Start Your Project
          </a>
          <a href="#how" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 rounded-lg text-lg font-medium text-gray-700 hover:bg-gray-50 transition">
            How It Works
          </a>
        </div>
        <div class="mt-8 flex items-center space-x-4">
          <div class="flex -space-x-2">
            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/45.jpg" alt="">
          </div>
          <div>
            <p class="text-sm font-medium text-gray-600">Trusted by 100+ businesses</p>
            <div class="flex items-center">
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="md:w-1/2 animate__animated animate__fadeInRight">
        <div class="relative">
          <div class="absolute -top-8 -left-8 w-64 h-64 bg-indigo-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
          <div class="absolute -bottom-8 -right-8 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
          <div class="relative rounded-2xl bg-white shadow-xl border border-gray-100 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Dashboard preview" class="w-full h-auto">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Logo Cloud -->
  <div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wider mb-8">
        Trusted by innovative companies worldwide
      </p>
      <div class="grid grid-cols-2 gap-8 md:grid-cols-4 lg:grid-cols-6">
        <div class="flex justify-center">
          <img class="h-12 opacity-60 hover:opacity-100 transition" src="https://logo.clearbit.com/stripe.com" alt="Stripe">
        </div>
        <div class="flex justify-center">
          <img class="h-12 opacity-60 hover:opacity-100 transition" src="https://logo.clearbit.com/shopify.com" alt="Shopify">
        </div>
        <div class="flex justify-center">
          <img class="h-12 opacity-60 hover:opacity-100 transition" src="https://logo.clearbit.com/airbnb.com" alt="Airbnb">
        </div>
        <div class="flex justify-center">
          <img class="h-12 opacity-60 hover:opacity-100 transition" src="https://logo.clearbit.com/slack.com" alt="Slack">
        </div>
        <div class="flex justify-center">
          <img class="h-12 opacity-60 hover:opacity-100 transition" src="https://logo.clearbit.com/dropbox.com" alt="Dropbox">
        </div>
        <div class="flex justify-center">
          <img class="h-12 opacity-60 hover:opacity-100 transition" src="https://logo.clearbit.com/spotify.com" alt="Spotify">
        </div>
      </div>
    </div>
  </div>

  <!-- Features -->
  <section id="features" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Everything You Need to Succeed</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          We handle the technical complexity so you can focus on your business
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-xl border border-gray-100 card-hover">
          <div class="feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Custom Web Applications</h3>
          <p class="text-gray-600">
            Tailored solutions built specifically for your business needs with modern frameworks and technologies.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 card-hover">
          <div class="feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile Responsive</h3>
          <p class="text-gray-600">
            Flawless experience across all devices with responsive design principles from the start.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 card-hover">
          <div class="feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Enterprise Security</h3>
          <p class="text-gray-600">
            Built with security best practices including encryption, authentication, and regular audits.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 card-hover">
          <div class="feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Blazing Performance</h3>
          <p class="text-gray-600">
            Optimized for speed with code splitting, lazy loading, and modern performance techniques.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 card-hover">
          <div class="feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Scalable Architecture</h3>
          <p class="text-gray-600">
            Designed to grow with your business needs without requiring costly re-architecture.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 card-hover">
          <div class="feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Ongoing Support</h3>
          <p class="text-gray-600">
            Maintenance plans and support packages to keep your application running smoothly.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="py-20 bg-indigo-600 text-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="p-6">
          <div class="text-4xl font-bold mb-2">100%</div>
          <div class="text-indigo-100">Client Satisfaction</div>
        </div>
        <div class="p-6">
          <div class="text-4xl font-bold mb-2">24/7</div>
          <div class="text-indigo-100">Support Availability</div>
        </div>
        <div class="p-6">
          <div class="text-4xl font-bold mb-2">50+</div>
          <div class="text-indigo-100">Successful Projects</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section id="how" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Proven Process</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          A transparent approach to building your perfect application
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="process-step">
          <h3 class="text-xl font-bold text-gray-900 mb-3">Discovery & Planning</h3>
          <p class="text-gray-600 mb-4">
            We start with in-depth discussions to understand your business goals, target audience, and technical requirements.
          </p>
          <ul class="text-gray-600 space-y-2">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Requirement analysis</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>User flow mapping</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Technical specification</span>
            </li>
          </ul>
        </div>
        
        <div class="process-step">
          <h3 class="text-xl font-bold text-gray-900 mb-3">Design & Development</h3>
          <p class="text-gray-600 mb-4">
            Our team creates pixel-perfect designs and implements them with clean, maintainable code.
          </p>
          <ul class="text-gray-600 space-y-2">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>UI/UX design</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Agile development</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Continuous testing</span>
            </li>
          </ul>
        </div>
        
        <div class="process-step">
          <h3 class="text-xl font-bold text-gray-900 mb-3">Deployment & Growth</h3>
          <p class="text-gray-600 mb-4">
            We launch your application and provide ongoing support to ensure continued success.
          </p>
          <ul class="text-gray-600 space-y-2">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Staging deployment</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Performance optimization</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Ongoing maintenance</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          Don't just take our word for it - hear from some of our amazing clients
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm">
          <div class="flex items-center mb-4">
            <div class="flex -space-x-1">
              <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/32.jpg" alt="">
            </div>
            <div class="ml-4">
              <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
              <p class="text-sm text-gray-600">CEO, TechStart</p>
            </div>
          </div>
          <div class="text-gray-600 mb-4">
            "Movana transformed our outdated platform into a modern, user-friendly application that our customers love. Their attention to detail and communication throughout the process was exceptional."
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm">
          <div class="flex items-center mb-4">
            <div class="flex -space-x-1">
              <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/54.jpg" alt="">
            </div>
            <div class="ml-4">
              <h4 class="font-bold text-gray-900">Michael Chen</h4>
              <p class="text-sm text-gray-600">Founder, GrowthHack</p>
            </div>
          </div>
          <div class="text-gray-600 mb-4">
            "The team at Movana delivered our SaaS platform ahead of schedule and under budget. Their technical expertise and problem-solving skills saved us countless headaches."
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm">
          <div class="flex items-center mb-4">
            <div class="flex -space-x-1">
              <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
            </div>
            <div class="ml-4">
              <h4 class="font-bold text-gray-900">Jessica Williams</h4>
              <p class="text-sm text-gray-600">Director, HealthPlus</p>
            </div>
          </div>
          <div class="text-gray-600 mb-4">
            "Working with Movana was a game-changer for our healthcare platform. They understood our compliance requirements and delivered a secure, HIPAA-compliant solution."
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing -->
  <section id="pricing" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple, Transparent Pricing</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          Choose the plan that fits your needs. No hidden fees.
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm">
          <h3 class="text-xl font-bold text-gray-900 mb-2">Starter</h3>
          <p class="text-gray-600 mb-6">Perfect for small projects and MVPs</p>
          <div class="mb-6">
            <span class="text-4xl font-bold text-gray-900">$4,999</span>
            <span class="text-gray-600">/project</span>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Up to 5 pages</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Basic functionality</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Responsive design</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>1 month support</span>
            </li>
          </ul>
          <a href="#contact" class="block w-full bg-gray-100 text-gray-800 text-center py-3 rounded-md font-semibold hover:bg-gray-200 transition">Get Started</a>
        </div>
        
        <div class="bg-white p-8 rounded-xl border-2 border-indigo-500 shadow-lg relative">
          <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">POPULAR</div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Business</h3>
          <p class="text-gray-600 mb-6">Ideal for growing businesses</p>
          <div class="mb-6">
            <span class="text-4xl font-bold text-gray-900">$9,999</span>
            <span class="text-gray-600">/project</span>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Up to 15 pages</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Advanced functionality</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Custom design</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>3 months support</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Basic SEO setup</span>
            </li>
          </ul>
          <a href="#contact" class="block w-full bg-indigo-600 text-white text-center py-3 rounded-md font-semibold hover:bg-indigo-700 transition">Get Started</a>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm">
          <h3 class="text-xl font-bold text-gray-900 mb-2">Enterprise</h3>
          <p class="text-gray-600 mb-6">For complex, large-scale applications</p>
          <div class="mb-6">
            <span class="text-4xl font-bold text-gray-900">$24,999+</span>
            <span class="text-gray-600">/project</span>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Unlimited pages</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Custom solutions</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Premium design</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>6 months support</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Advanced SEO</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Dedicated account manager</span>
            </li>
          </ul>
          <a href="#contact" class="block w-full bg-gray-100 text-gray-800 text-center py-3 rounded-md font-semibold hover:bg-gray-200 transition">Get Started</a>
        </div>
      </div>
      
      <div class="mt-12 text-center text-gray-600">
        <p>Need something custom? <a href="#contact" class="text-indigo-600 hover:text-indigo-800 font-medium">Contact us</a> for a tailored solution.</p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
        <p class="text-xl text-gray-600">
          Everything you need to know about our services
        </p>
      </div>
      
      <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
          <button class="flex justify-between items-center w-full text-left">
            <h3 class="text-lg font-medium text-gray-900">How long does a typical project take?</h3>
            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="mt-4 text-gray-600">
            Project timelines vary based on complexity, but most projects are completed within 4-12 weeks. We'll provide a detailed timeline after our initial discovery session.
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
          <button class="flex justify-between items-center w-full text-left">
            <h3 class="text-lg font-medium text-gray-900">What technologies do you use?</h3>
            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="mt-4 text-gray-600">
            We use modern web technologies including React, Vue.js, Node.js, Laravel, and more. The specific stack depends on your project requirements, and we'll recommend the best tools for your needs.
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
          <button class="flex justify-between items-center w-full text-left">
            <h3 class="text-lg font-medium text-gray-900">Do you provide hosting?</h3>
            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="mt-4 text-gray-600">
            Yes, we can handle hosting setup and management for you. We work with reliable cloud providers like AWS, Google Cloud, and DigitalOcean to ensure your application is fast and secure.
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
          <button class="flex justify-between items-center w-full text-left">
            <h3 class="text-lg font-medium text-gray-900">What about ongoing maintenance?</h3>
            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="mt-4 text-gray-600">
            We offer flexible maintenance plans to keep your application updated, secure, and performing at its best. Plans range from basic security updates to full feature development.
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
          <button class="flex justify-between items-center w-full text-left">
            <h3 class="text-lg font-medium text-gray-900">How do you handle project ownership?</h3>
            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="mt-4 text-gray-600">
            You retain full ownership of all code and assets we create for your project. We'll transfer everything to you upon project completion and provide documentation for smooth handoff.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 rounded-2xl overflow-hidden shadow-xl">
        <div class="grid md:grid-cols-2">
          <div class="p-10 text-white">
            <h2 class="text-3xl font-bold mb-4">Ready to build something amazing?</h2>
            <p class="text-indigo-100 mb-8">
              Get in touch with our team to discuss your project. We'll provide a free consultation and quote tailored to your needs.
            </p>
            <div class="space-y-4">
              <div class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-200 mr-4 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <div>
                  <h4 class="font-semibold text-indigo-50">Email us</h4>
                  <p class="text-indigo-100">hello@movana.com</p>
                </div>
              </div>
              <div class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-200 mr-4 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <div>
                  <h4 class="font-semibold text-indigo-50">Call us</h4>
                  <p class="text-indigo-100">+1 (555) 123-4567</p>
                </div>
              </div>
              <div class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-200 mr-4 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                </svg>
                <div>
                  <h4 class="font-semibold text-indigo-50">Chat with us</h4>
                  <p class="text-indigo-100">Start live chat</p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="bg-white p-10">
            <form method="POST" action="submit.php" class="space-y-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" name="name" id="name" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
              </div>
              <div>
                <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">Budget</label>
                <select id="budget" name="budget" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                  <option>Select budget range</option>
                  <option value="$5k - $10k">$5k - $10k</option>
                  <option value="$10k - $25k">$10k - $25k</option>
                  <option value="$25k - $50k">$25k - $50k</option>
                  <option value="$50k+">$50k+</option>
                </select>
              </div>
              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Tell us about your project</label>
                <textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
              </div>
              <div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-3 px-6 rounded-md font-semibold hover:bg-indigo-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
        <div>
          <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-4">Product</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-300 hover:text-white">Features</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white">Pricing</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white">Case Studies</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white">Updates</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-4">Company</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-300 hover:text-white">About</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white">Careers</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white">Blog</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white">Press</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-4">Support</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-300 hover:text-white">Help Center</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white">Status</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white">Contact</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white">Documentation</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-4">Connect</h3>
          <div class="flex space-x-6">
            <a href="#" class="text-gray-400 hover:text-white">
              <span class="sr-only">Facebook</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <span class="sr-only">Twitter</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <span class="sr-only">LinkedIn</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <span class="sr-only">GitHub</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
          <span class="ml-2 text-xl font-bold">Movana</span>
        </div>
        <p class="mt-4 md:mt-0 text-gray-400 text-sm">
          &copy; <?php echo date('Y'); ?> Movana. All rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <script>
    // Simple animation for FAQ accordion
    document.querySelectorAll('button').forEach(button => {
      button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const isExpanded = content.style.maxHeight;
        
        // Close all other items
        document.querySelectorAll('button').forEach(otherButton => {
          if (otherButton !== button) {
            otherButton.nextElementSibling.style.maxHeight = null;
            otherButton.querySelector('svg').style.transform = 'rotate(0deg)';
          }
        });
        
        // Toggle current item
        if (isExpanded) {
          content.style.maxHeight = null;
          button.querySelector('svg').style.transform = 'rotate(0deg)';
        } else {
          content.style.maxHeight = content.scrollHeight + 'px';
          button.querySelector('svg').style.transform = 'rotate(180deg)';
        }
      });
    });
    
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate__animated', 'animate__fadeInUp');
        }
      });
    }, { threshold: 0.1 });
    
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
      observer.observe(el);
    });
  </script>
</body>
</html>