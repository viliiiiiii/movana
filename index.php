<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movana | Modern Web App Development - Launch Specials</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #3b82f6;
      --primary-dark: #2563eb;
      --primary-light: #93c5fd;
    }
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f9fafb;
      color: #111827;
    }
    .nav-link {
      position: relative;
    }
    .nav-link:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -2px;
      left: 0;
      background-color: var(--primary);
      transition: width 0.3s ease;
    }
    .nav-link:hover:after {
      width: 100%;
    }
    .card-hover {
      transition: all 0.3s ease;
    }
    .card-hover:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    .feature-icon {
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
      background-color: rgba(59, 130, 246, 0.1);
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
    .animate-on-scroll {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease-out;
    }
    .animate-on-scroll.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .discount-badge {
      position: absolute;
      top: -12px;
      right: -12px;
      background-color: #ef4444;
      color: white;
      font-weight: bold;
      padding: 4px 12px;
      border-radius: 9999px;
      font-size: 0.875rem;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }
    .launch-banner {
      background-color: #1e40af;
      color: white;
      text-align: center;
      padding: 12px;
      font-weight: 500;
    }
  </style>
</head>
<body class="antialiased">
  <!-- Launch Banner -->
  <div class="launch-banner animate-on-scroll">
    🚀 Now Launching! Special discounts for our first 3 clients - 50% off for 1st, 30% for 2nd, 15% for 3rd
  </div>

  <!-- Navigation -->
  <!-- Navigation -->
<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-sm border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <div class="flex items-center">
      <!-- SVG Logo -->
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 850.39 850.39" class="h-8 w-8">
        <style type="text/css">
          .st0{fill-rule:evenodd;clip-rule:evenodd;}
          .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#DEB426;}
        </style>
        <g id="New_Layer">
          <g>
            <path class="st0" d="M121.52-516.23c-3.6,0.7-10.3,3.2-15,5.5c-24.2,12-32.1,35.4-17.5,51.7l4.5,5v50.7c0,33.6-0.4,52.1-1.1,55
              c-1.5,6.1-6.9,12-12.8,14.2c-4.9,1.8-4.8,1.8,27.5,1.8c32.2,0,32.4,0,28.2-1.8c-5.3-2.3-8.4-5-11.1-10.2c-2.2-3.9-2.2-5-2.5-55.6
              l-0.3-51.6l11.8-0.7c9.7-0.5,29.7-3.6,30.8-4.8c0.2-0.2-6.5-0.3-14.8-0.3c-20.4,0-27.2-2-35.7-10.3c-6.3-6.1-8-10.1-8-18.3
              c0-5.8,2-11.6,6-17.4c3.8-5.6,8.4-9,15.7-12.1C133.92-518.13,131.72-518.43,121.52-516.23z"/>
            <path class="st0" d="M152.32-515.83c7.5,3.1,16.2,11.5,22.3,21.9c2.8,4.7,6.7,11.3,8.7,14.6c12.2,20.7,29.3,32.8,52.8,37.5
              c3.3,0.6,6.8,1.4,7.9,1.6c1.1,0.3-0.8-1.1-4.3-3c-13.4-7.3-19.2-13.8-32.3-35.9c-12.8-21.6-22.5-30.2-40.2-35.6
              c-3.7-1.1-9.8-2.3-13.5-2.6l-6.7-0.6L152.32-515.83z"/>
            <path class="st0" d="M353.92-501.43c-6.1,1.3-16.9,4-24,6.1c-18.6,5.4-93.9,31.3-93.2,32.1c0.2,0.1,3.5-0.6,7.3-1.7
              c21.3-6,69.8-15.5,97-19c18.6-2.5,40.8-2.2,51,0.5c17.1,4.6,30.8,16.1,36,30.3l1.4,3.8v-5c0.1-7-2.4-18-5.6-24.5
              c-5.4-11.1-18.8-21.1-32.1-23.9C382.92-504.53,366.32-503.93,353.92-501.43z"/>
            <path class="st0" d="M-48.48-477.83c5.1,5.3,8.2,11.1,27.8,52.5c31.5,66.5,44.2,93,44.7,92.7c0.3-0.1,3.2-0.2,6.5-0.2
              c5.7,0,6.1-0.2,7.1-2.8c0.6-1.5,3.3-6.6,6-11.3l4.9-8.6l-30.8-63.4l-30.8-63.4l-20.1-0.3l-20.2-0.2L-48.48-477.83z"/>
            <path class="st0" d="M240.02-436.83c-23,2.6-39.1,17.4-43,39.6c-1.8,9.9-1.8,15.8-0.1,25.6c3.6,20,15.6,32.6,36.2,37.8
              c4.2,1.1,9.1,2,10.8,2c3.1,0,3.1,0-1.1-2.1c-12-5.9-18.3-23.6-18.3-50.8c0-20.6,4.9-38.9,12.3-45.9c1.8-1.6,5-3.9,7.2-5
              c2.2-1.2,3.6-2.1,3-2C246.52-437.63,243.32-437.23,240.02-436.83z"/>
            <path class="st0" d="M265.22-435.33c5.7,2.9,9.2,6.9,12.8,14.8c5.1,11,7.3,30.4,5.6,47.7c-2.2,22-7.5,33.4-18,39
              c-3.3,1.8-3.4,1.9-1.1,1.9c4.9,0.1,16.1-2.9,22.5-5.9c15.8-7.5,23.9-21.7,25.1-43.5c1.2-21.3-5.9-38-20.2-47.1
              c-6.3-4.1-17.7-7.9-25.9-8.8l-6-0.7L265.22-435.33z"/>
            <path class="st0" d="M590.82-436.63c-0.7,0.8-5.3,3.4-10.3,5.7c-6.8,3.3-11.3,4.6-18.7,5.8c-9.3,1.3-12.9,2.3-8.7,2.3
              c3.4,0,9.1,4.7,10.6,8.7c1,2.9,1.3,11.4,1.3,34.3c0,30,0,30.6-2.4,35.3c-2.5,5.2-6.8,9-12.4,10.9c-3,1.1,1.5,1.3,28.4,1.3
              c31.7,0,31.9,0,27.7-1.8c-4.9-2.1-9.2-5.9-11.6-10.2c-1.5-2.6-1.8-8.6-2.2-48.4C592.12-428.73,591.72-437.83,590.82-436.63z"/>
            <path class="st0" d="M314.82-436.13c0.4,0.6,1.9,1.4,3.4,1.8c8.9,2.2,12.2,9.2,24.7,51.5c14.2,47.9,15.4,49.8,32.4,50.3
              c6.9,0.3,9.2,0,9.2-0.9c0-1.1-15.6-52.9-27.1-89.7l-4-12.7h-17.2c-9.5,0-18.3-0.3-19.6-0.7
              C315.02-436.93,314.42-436.73,314.82-436.13z"/>
            <path class="st0" d="M479.12-434.93c4.8,2.2,10.5,8.6,12.4,13.8c1,2.8,1.5,13.6,1.9,41.8c0.4,27.4,0.9,38.6,1.8,40.2
              c4.6,8,24.2,9.4,37.4,2.7c6.1-3.1,6.6-4,1.9-3.6c-2.2,0.2-5.1-0.3-6.9-1.3c-5.7-2.9-6.1-5.2-6.1-37.4c0-31.5-0.6-36.4-5-43.5
              c-6-9.3-14.7-13.3-31.5-14.1l-10-0.5L479.12-434.93z"/>
            <path class="st0" d="M614.52-435.43c-6.5,1.8-11.4,4.4-14.1,7.3c-2.1,2.3-2.2,2.5-0.4,1.8c10.1-4.2,13.6-4.8,19-3.6
              c6.4,1.4,10.5,4.5,13.1,9.8c1.7,3.4,1.9,7.3,2.4,41c0.5,35.8,0.6,37.3,2.6,40c4.7,6.3,14.6,8.7,26.6,6.3c5-0.9,15.8-5.3,15.8-6.3
              c0-0.1-2.3-0.2-5.1-0.3c-4.2-0.1-5.6-0.6-7.9-3l-2.9-2.9l-0.5-33c-0.3-19.8-0.9-34.5-1.5-36.7c-3-9.9-12.6-18.5-23.3-20.7
              C631.92-437.13,620.22-436.93,614.52-435.43z"/>
            <path class="st0" d="M733.02-435.83c0.2,0.4,1.8,1,3.4,1.3c4.1,0.9,10.1,6.4,12.5,11.7c2,4.2,2.1,6.7,2.6,42.5
              c0.6,42.4,0.5,42.2,7.4,45.8c3.3,1.6,6,2.1,14.1,2.1c10.6,0.1,16.1-1.2,19-4.4c1.8-2,1.7-2-2.3-2c-2.9,0-4.9-0.7-6.9-2.4l-2.8-2.4
              l-0.5-34.4c-0.5-30-0.7-34.8-2.3-38.3c-4.3-9.5-9.8-14.8-18.8-17.8C753.72-435.73,732.12-437.23,733.02-435.83z"/>
            <path class="st0" d="M478.02-387.13c-5.5,1.2-18.6,5.9-23.7,8.4c-11.5,5.8-16.7,12.7-17.5,23.4c-0.6,8.4,3.1,15.7,10.1,20
              c4.5,2.8,5.7,3,13.5,2.9c6.3-0.1,10.2-0.7,14.6-2.4c7.5-2.8,8.9-4,4.7-4c-4.7,0-9.8-5-11.7-11.3c-4.3-14.6,0.6-30,11.4-35.7
              C482.82-387.63,482.32-388.13,478.02-387.13z"/>
            <path class="st0" d="M725.02-384.43c-19.5,6.4-28,12.7-31,23.1c-4.2,14.3,4.5,27.4,19.3,29.2c6.1,0.7,15.1-1,21.6-4.1l5.1-2.4
              l-3.7-0.1c-8.2-0.2-13.3-8.9-13.3-22.6c0-12.5,4-20.1,13-24.8C741.22-388.93,736.02-388.13,725.02-384.43z"/>
            <path class="st0" d="M-31.88-351.93c-1.2,7.9-6.1,14.9-12.8,18.2c-2.4,1.2-0.7,1.4,14.7,1.4s17.1-0.2,14.7-1.4
              c-6.3-3.2-12.5-10.9-14.7-18.4l-1.2-4.1L-31.88-351.93z"/>
          </g>
          <circle class="st1" cx="403.52" cy="-421.19" r="19"/>
          <circle class="st1" cx="716.49" cy="-407.73" r="19"/>
          <circle class="st1" cx="459.4" cy="-407.73" r="19"/>
        </g>
      </svg>
      <span class="ml-2 text-xl font-semibold">Movana</span>
    </div>
    <nav class="hidden md:flex space-x-8">
      <a href="#features" class="nav-link text-gray-600 hover:text-gray-900">Features</a>
      <a href="#process" class="nav-link text-gray-600 hover:text-gray-900">Process</a>
      <a href="#discounts" class="nav-link text-gray-600 hover:text-gray-900">Launch Discounts</a>
      <a href="#contact" class="nav-link text-gray-600 hover:text-gray-900">Contact</a>
    </nav>
    <a href="#contact" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition-colors">
      Get Started
    </a>
  </div>
</header>

  <!-- Hero -->
  <section class="pt-24 pb-16 md:pt-32 md:pb-24">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-12 md:mb-0 animate-on-scroll">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
          Premium web apps <br><span class="text-blue-600">without the premium price</span>
        </h1>
        <p class="text-xl text-gray-600 mb-8 max-w-lg">
          We're launching our web app development studio with exclusive discounts for our first clients. Be among the first to get a professionally built web application at a fraction of the cost.
        </p>
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
          <a href="#discounts" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition-colors">
            Claim Your Discount
          </a>
          <a href="#process" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 transition-colors">
            How It Works
          </a>
        </div>
      </div>
      <div class="md:w-1/2 animate-on-scroll">
        <div class="relative">
          <div class="absolute -top-8 -left-8 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
          <div class="relative rounded-xl bg-white shadow-lg border border-gray-100 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Dashboard preview" class="w-full h-auto">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 animate-on-scroll">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Professional web app development</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          We combine modern technologies with proven methodologies to deliver exceptional results
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm card-hover animate-on-scroll">
          <div class="feature-icon mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Custom Web Applications</h3>
          <p class="text-gray-600">
            Tailored solutions built specifically for your business needs with modern frameworks and technologies.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm card-hover animate-on-scroll">
          <div class="feature-icon mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Mobile Responsive</h3>
          <p class="text-gray-600">
            Flawless experience across all devices with responsive design principles from the start.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm card-hover animate-on-scroll">
          <div class="feature-icon mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Enterprise Security</h3>
          <p class="text-gray-600">
            Built with security best practices including encryption, authentication, and regular audits.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm card-hover animate-on-scroll">
          <div class="feature-icon mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Blazing Performance</h3>
          <p class="text-gray-600">
            Optimized for speed with code splitting, lazy loading, and modern performance techniques.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm card-hover animate-on-scroll">
          <div class="feature-icon mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Scalable Architecture</h3>
          <p class="text-gray-600">
            Designed to grow with your business needs without requiring costly re-architecture.
          </p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm card-hover animate-on-scroll">
          <div class="feature-icon mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Ongoing Support</h3>
          <p class="text-gray-600">
            Maintenance plans and support packages to keep your application running smoothly.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Launch Discounts -->
  <section id="discounts" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 animate-on-scroll">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Launch Discounts</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          Special introductory pricing for our first three clients
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <div class="bg-white p-8 rounded-xl border-2 border-blue-500 shadow-lg relative animate-on-scroll">
          <div class="discount-badge">50% OFF</div>
          <h3 class="text-xl font-bold mb-2 text-center">First Client</h3>
          <p class="text-gray-600 text-center mb-6">Exclusive founding client offer</p>
          <div class="mb-6 text-center">
            <span class="text-4xl font-bold">$2,500</span>
            <span class="text-gray-500 line-through ml-2">$5,000</span>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>All standard features included</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Priority scheduling</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Featured case study</span>
            </li>
          </ul>
          <a href="#contact" class="block w-full bg-blue-600 text-white text-center py-3 rounded-md font-semibold hover:bg-blue-700 transition">
            Claim This Offer
          </a>
          <p class="text-xs text-gray-500 text-center mt-2">1 available at this price</p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm relative animate-on-scroll">
          <div class="discount-badge">30% OFF</div>
          <h3 class="text-xl font-bold mb-2 text-center">Second Client</h3>
          <p class="text-gray-600 text-center mb-6">Early adopter special</p>
          <div class="mb-6 text-center">
            <span class="text-4xl font-bold">$3,500</span>
            <span class="text-gray-500 line-through ml-2">$5,000</span>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>All standard features included</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Priority support</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Optional case study feature</span>
            </li>
          </ul>
          <a href="#contact" class="block w-full bg-blue-600 text-white text-center py-3 rounded-md font-semibold hover:bg-blue-700 transition">
            Claim This Offer
          </a>
          <p class="text-xs text-gray-500 text-center mt-2">1 available at this price</p>
        </div>
        
        <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm relative animate-on-scroll">
          <div class="discount-badge">15% OFF</div>
          <h3 class="text-xl font-bold mb-2 text-center">Third Client</h3>
          <p class="text-gray-600 text-center mb-6">Final launch discount</p>
          <div class="mb-6 text-center">
            <span class="text-4xl font-bold">$4,250</span>
            <span class="text-gray-500 line-through ml-2">$5,000</span>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>All standard features included</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Standard support</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Potential feature in portfolio</span>
            </li>
          </ul>
          <a href="#contact" class="block w-full bg-blue-600 text-white text-center py-3 rounded-md font-semibold hover:bg-blue-700 transition">
            Claim This Offer
          </a>
          <p class="text-xs text-gray-500 text-center mt-2">1 available at this price</p>
        </div>
      </div>
      
      <div class="mt-12 text-center text-gray-600 animate-on-scroll">
        <p>After these three spots are filled, our standard pricing of $5,000+ per project will apply.</p>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section id="process" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6">
      <div class="text-center mb-16 animate-on-scroll">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Our development process</h2>
        <p class="text-xl text-gray-600">
          A transparent approach to building your perfect application
        </p>
      </div>
      
      <div class="space-y-10">
        <div class="process-step animate-on-scroll">
          <h3 class="text-xl font-bold mb-3">Discovery & Planning</h3>
          <p class="text-gray-600">
            We start with in-depth discussions to understand your business goals, target audience, and technical requirements. This phase includes requirement analysis, user flow mapping, and technical specification.
          </p>
        </div>
        
        <div class="process-step animate-on-scroll">
          <h3 class="text-xl font-bold mb-3">Design & Development</h3>
          <p class="text-gray-600">
            Our team creates pixel-perfect designs and implements them with clean, maintainable code. We follow agile development practices with continuous testing and regular updates.
          </p>
        </div>
        
        <div class="process-step animate-on-scroll">
          <h3 class="text-xl font-bold mb-3">Deployment & Growth</h3>
          <p class="text-gray-600">
            We launch your application and provide ongoing support to ensure continued success. This includes staging deployment, performance optimization, and maintenance.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="contact" class="py-20 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto px-6 text-center animate-on-scroll">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to build your web app?</h2>
      <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
        Contact us now to claim one of our limited launch discounts before they're gone.
      </p>
      <a href="#contact" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-blue-700 bg-white hover:bg-gray-100 transition-colors">
        Contact Us
      </a>
    </div>
  </section>

  <!-- Contact Form -->
  <section class="py-20 bg-white">
    <div class="max-w-2xl mx-auto px-6 animate-on-scroll">
      <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm">
        <h3 class="text-2xl font-bold mb-6 text-center">Get in Touch</h3>
        <form class="space-y-6">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="project" class="block text-sm font-medium text-gray-700 mb-1">Tell us about your project</label>
            <textarea id="project" name="project" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
          </div>
          <div>
            <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-md font-semibold hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
              Send Message
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white border-t border-gray-200 py-12">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center mb-6 md:mb-0">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
          <span class="ml-2 text-xl font-semibold">Movana</span>
        </div>
        <div class="flex space-x-6">
          <a href="#" class="text-gray-500 hover:text-gray-900">
            <span class="sr-only">Twitter</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900">
            <span class="sr-only">GitHub</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900">
            <span class="sr-only">LinkedIn</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="mt-8 pt-8 border-t border-gray-200 text-center text-gray-500 text-sm">
        &copy; <?php echo date('Y'); ?> Movana. All rights reserved.
      </div>
    </div>
  </footer>

  <script>
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });
    
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
      observer.observe(el);
    });
  </script>
</body>
</html>