<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Movana — Modern Web App Development • Launch Specials</title>
  <meta name="description" content="Movana builds fast, secure, scalable web apps. Launch special: 50/30/15% discounts for the first 3 projects." />
  <meta name="theme-color" content="#294282" />
  <link rel="icon" type="image/png" href="/assets/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: { DEFAULT: '#294282', dark: '#1d3261', light: '#93a7e0' },
            secondary: '#656760',
            accent1: '#a18d3e',
            accent2: '#deb31c',
            offwhite: '#fcfcfc'
          },
          boxShadow: { soft: '0 10px 25px -5px rgba(0,0,0,.10)' }
        }
      }
    }
  </script>
  <style>
    html { scroll-behavior: smooth; }
    body { font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Liberation Sans', sans-serif; }
    .nav-link { position: relative; }
    .nav-link:after { content: ''; position: absolute; width: 0; height: 2px; bottom: -6px; left: 0; background-color: #294282; transition: width .25s ease; }
    .nav-link:hover:after, .nav-link[aria-current="page"]:after { width: 100%; }
    .card-hover { transition: transform .25s ease, box-shadow .25s ease; }
    .card-hover:hover { transform: translateY(-4px); box-shadow: 0 10px 25px -5px rgba(0,0,0,.10); }
    .feature-icon { width: 48px; height: 48px; display:flex; align-items:center; justify-content:center; border-radius:12px; background: rgba(41,66,130,.10); }
    .animate-on-scroll { opacity: 0; transform: translateY(16px); transition: opacity .6s ease-out, transform .6s ease-out; }
    .animate-on-scroll.visible { opacity: 1; transform: none; }
    .discount-badge { position: absolute; top: -12px; right: -12px; background-color: #deb31c; color: #294282; font-weight: 800; padding: 4px 12px; border-radius: 9999px; font-size: .875rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,.10); }
    .glass { background: rgba(255,255,255,.75); backdrop-filter: blur(8px); }
    .theme-transition * { transition: background-color .25s ease, color .25s ease, border-color .25s ease; }
    @media (prefers-color-scheme: dark) { :root { color-scheme: dark; } }
  </style>
</head>
<body class="antialiased bg-offwhite text-gray-900 dark:bg-slate-950 dark:text-slate-100 selection:bg-primary/10">
  <!-- Announcement / Top banner -->
  <div class="bg-primary text-white text-center py-2 text-sm font-medium animate-on-scroll" id="top">
    <span class="mr-2">🚀 Launching now:</span>
    <span>First 3 clients get <strong>50%</strong>, <strong>30%</strong>, <strong>15%</strong> off · <a href="#discounts" class="underline underline-offset-4">Claim yours</a></span>
  </div>

  <!-- Header / Navigation -->
  <header class="sticky top-0 z-50 glass border-b border-gray-200 dark:border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="h-16 flex items-center justify-between">
        <a href="#top" class="flex items-center gap-3" aria-label="Movana home">
          <img src="/assets/logo.png" alt="Movana" class="h-8 w-auto" loading="eager" decoding="async" onerror="this.src='https://dummyimage.com/120x32/294282/ffffff&text=Movana'" />
          <span class="sr-only">Movana</span>
        </a>
        <nav class="hidden md:flex items-center gap-6" aria-label="Primary">
          <a href="#features" class="nav-link text-gray-700 hover:text-gray-900 dark:text-slate-200 dark:hover:text-white">Features</a>
          <a href="#process" class="nav-link text-gray-700 hover:text-gray-900 dark:text-slate-200 dark:hover:text-white">Process</a>
          <a href="#discounts" class="nav-link text-gray-700 hover:text-gray-900 dark:text-slate-200 dark:hover:text-white">Launch Discounts</a>
          <a href="#faq" class="nav-link text-gray-700 hover:text-gray-900 dark:text-slate-200 dark:hover:text-white">FAQ</a>
          <a href="#contact" class="inline-flex items-center px-4 py-2 rounded-md text-white bg-primary hover:bg-primary-dark shadow-soft">Get Started</a>
          <button id="themeToggle" class="ml-2 inline-flex items-center justify-center w-9 h-9 rounded-md border border-gray-300 dark:border-white/10" aria-label="Toggle dark mode" title="Toggle theme">
            <span id="themeIconSun" class="hidden" aria-hidden="true">☀️</span>
            <span id="themeIconMoon" aria-hidden="true">🌙</span>
          </button>
        </nav>
        <!-- Mobile menu button -->
        <button id="menuBtn" class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-md focus:outline-none focus:ring-2 focus:ring-primary/40" aria-expanded="false" aria-controls="mobileMenu" aria-label="Open menu">
          <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
      </div>
    </div>
    <!-- Mobile menu -->
    <div id="mobileMenu" class="md:hidden hidden border-t border-gray-200 dark:border-white/10">
      <nav class="px-4 py-3 space-y-2" aria-label="Mobile">
        <a href="#features" class="block py-2">Features</a>
        <a href="#process" class="block py-2">Process</a>
        <a href="#discounts" class="block py-2">Launch Discounts</a>
        <a href="#faq" class="block py-2">FAQ</a>
        <div class="flex items-center justify-between pt-3">
          <a href="#contact" class="py-2 font-semibold text-primary">Get Started</a>
          <button id="themeToggleMobile" class="inline-flex items-center justify-center w-9 h-9 rounded-md border border-gray-300 dark:border-white/10" aria-label="Toggle dark mode">🌙</button>
        </div>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="pt-20 md:pt-28 pb-10 md:pb-16">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
      <div class="animate-on-scroll">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6 tracking-tight">Premium web apps <span class="text-primary">without the premium price</span></h1>
        <p class="text-lg md:text-xl text-gray-600 dark:text-slate-300 mb-8 max-w-xl">We’re launching our studio with exclusive discounts for our first clients. Be among the first to get a professionally built web application at a fraction of the cost.</p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#discounts" class="inline-flex items-center justify-center px-6 py-3 rounded-md text-white bg-primary hover:bg-primary-dark shadow-soft">Claim Your Discount</a>
          <a href="#process" class="inline-flex items-center justify-center px-6 py-3 rounded-md border border-gray-300 dark:border-white/10 text-gray-800 dark:text-slate-100 bg-white dark:bg-slate-900 hover:bg-gray-50 dark:hover:bg-slate-800">How It Works</a>
        </div>
        <div class="mt-6 flex items-center gap-4 text-sm text-gray-500 dark:text-slate-400">
          <div class="flex -space-x-2">
            <div class="w-8 h-8 rounded-full border border-white bg-primary/20 grid place-items-center">M</div>
            <div class="w-8 h-8 rounded-full border border-white bg-accent2/30 grid place-items-center">V</div>
            <div class="w-8 h-8 rounded-full border border-white bg-primary/20 grid place-items-center">N</div>
          </div>
          <span>Fast delivery · Clear scope · Ongoing support</span>
        </div>
      </div>
      <div class="animate-on-scroll">
        <div class="relative">
          <div class="absolute -top-8 -left-8 w-64 h-64 bg-primary/20 rounded-full mix-blend-multiply blur-2xl opacity-70"></div>
          <div class="relative rounded-xl bg-white dark:bg-slate-900 shadow-lg border border-gray-100 dark:border-white/10 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1600&auto=format&fit=crop" alt="Product dashboard preview" class="w-full h-auto" loading="lazy" decoding="async" onerror="this.src='https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1600&auto=format&fit=crop'" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-20 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-14 animate-on-scroll">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Professional web app development</h2>
        <p class="text-xl text-gray-600 dark:text-slate-300 max-w-2xl mx-auto">We combine modern technologies with proven methodologies to deliver exceptional results.</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <article class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm card-hover animate-on-scroll" aria-label="Custom Web Applications">
          <div class="feature-icon mb-6" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Custom Web Applications</h3>
          <p class="text-gray-600 dark:text-slate-300">Tailored solutions built specifically for your business needs with modern frameworks and technologies.</p>
        </article>

        <article class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm card-hover animate-on-scroll" aria-label="Mobile Responsive">
          <div class="feature-icon mb-6" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Mobile Responsive</h3>
          <p class="text-gray-600 dark:text-slate-300">Flawless experience across all devices with responsive design principles from the start.</p>
        </article>

        <article class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm card-hover animate-on-scroll" aria-label="Enterprise Security">
          <div class="feature-icon mb-6" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Enterprise Security</h3>
          <p class="text-gray-600 dark:text-slate-300">Security-first with robust auth, role-based access, secure storage, and periodic audits.</p>
        </article>

        <article class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm card-hover animate-on-scroll" aria-label="Performance">
          <div class="feature-icon mb-6" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Blazing Performance</h3>
          <p class="text-gray-600 dark:text-slate-300">Optimized for speed with code splitting, lazy loading, and modern performance techniques.</p>
        </article>

        <article class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm card-hover animate-on-scroll" aria-label="Scalable Architecture">
          <div class="feature-icon mb-6" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/></svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Scalable Architecture</h3>
          <p class="text-gray-600 dark:text-slate-300">Designed to grow with your business needs without costly re-architecture.</p>
        </article>

        <article class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm card-hover animate-on-scroll" aria-label="Ongoing Support">
          <div class="feature-icon mb-6" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Ongoing Support</h3>
          <p class="text-gray-600 dark:text-slate-300">Maintenance plans to keep your app humming—updates, monitoring, and improvements.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Launch Discounts -->
  <section id="discounts" class="py-20 bg-offwhite dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-14 animate-on-scroll">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Launch Discounts</h2>
        <p class="text-xl text-gray-600 dark:text-slate-300 max-w-2xl mx-auto">Special introductory pricing for our first three clients.</p>
      </div>

      <div class="max-w-3xl mx-auto mb-10 animate-on-scroll">
        <div class="flex items-center justify-between text-sm text-gray-600 dark:text-slate-400 mb-1">
          <span>Spots left</span>
          <span><strong id="spotsLeft">3</strong> of 3</span>
        </div>
        <div class="h-2 bg-gray-100 dark:bg-white/10 rounded-full overflow-hidden">
          <div id="spotsBar" class="h-full bg-primary" style="width:100%"></div>
        </div>
      </div>

      <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <article class="relative bg-white dark:bg-slate-900 p-8 rounded-xl border-2 border-primary shadow-lg animate-on-scroll" aria-label="First client 50% off">
          <div class="discount-badge">50% OFF</div>
          <h3 class="text-xl font-bold mb-2 text-center">First Client</h3>
          <p class="text-gray-600 dark:text-slate-300 text-center mb-6">Exclusive founding client offer</p>
          <div class="mb-6 text-center">
            <span class="text-4xl font-extrabold">$2,500</span>
            <span class="text-gray-500 dark:text-slate-400 line-through ml-2">$5,000</span>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start"><svg class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>All standard features included</span></li>
            <li class="flex items-start"><svg class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>Priority scheduling</span></li>
            <li class="flex items-start"><svg class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>Featured case study</span></li>
          </ul>
          <a href="#contact" class="block w-full bg-primary text-white text-center py-3 rounded-md font-semibold hover:bg-primary-dark transition">Claim This Offer</a>
          <p class="text-xs text-gray-500 dark:text-slate-400 text-center mt-2">1 available at this price</p>
        </article>

        <article class="relative bg-white dark:bg-slate-900 p-8 rounded-xl border border-gray-200 dark:border-white/10 shadow-sm animate-on-scroll" aria-label="Second client 30% off">
          <div class="discount-badge">30% OFF</div>
          <h3 class="text-xl font-bold mb-2 text-center">Second Client</h3>
          <p class="text-gray-600 dark:text-slate-300 text-center mb-6">Early adopter special</p>
          <div class="mb-6 text-center">
            <span class="text-4xl font-extrabold">$3,500</span>
            <span class="text-gray-500 dark:text-slate-400 line-through ml-2">$5,000</span>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start"><svg class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>All standard features included</span></li>
            <li class="flex items-start"><svg class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>Priority support</span></li>
            <li class="flex items-start"><svg class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>Optional case study feature</span></li>
          </ul>
          <a href="#contact" class="block w-full bg-primary text-white text-center py-3 rounded-md font-semibold hover:bg-primary-dark transition">Claim This Offer</a>
          <p class="text-xs text-gray-500 dark:text-slate-400 text-center mt-2">1 available at this price</p>
        </article>

        <article class="relative bg-white dark:bg-slate-900 p-8 rounded-xl border border-gray-200 dark:border-white/10 shadow-sm animate-on-scroll" aria-label="Third client 15% off">
          <div class="discount-badge">15% OFF</div>
          <h3 class="text-xl font-bold mb-2 text-center">Third Client</h3>
          <p class="text-gray-600 dark:text-slate-300 text-center mb-6">Final launch discount</p>
          <div class="mb-6 text-center">
            <span class="text-4xl font-extrabold">$4,250</span>
            <span class="text-gray-500 dark:text-slate-400 line-through ml-2">$5,000</span>
          </div>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start"><svg class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>All standard features included</span></li>
            <li class="flex items-start"><svg class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>Standard support</span></li>
            <li class="flex items-start"><svg class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>Potential portfolio feature</span></li>
          </ul>
          <a href="#contact" class="block w-full bg-primary text-white text-center py-3 rounded-md font-semibold hover:bg-primary-dark transition">Claim This Offer</a>
          <p class="text-xs text-gray-500 dark:text-slate-400 text-center mt-2">1 available at this price</p>
        </article>
      </div>

      <p class="mt-12 text-center text-gray-600 dark:text-slate-400 animate-on-scroll">After these three spots are filled, our standard pricing of $5,000+ per project will apply.</p>
    </div>
  </section>

  <!-- Process -->
  <section id="process" class="py-20 bg-white dark:bg-slate-950">
    <div class="max-w-4xl mx-auto px-6">
      <div class="text-center mb-14 animate-on-scroll">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Our development process</h2>
        <p class="text-xl text-gray-600 dark:text-slate-300">A transparent approach to building your perfect application.</p>
      </div>

      <ol class="space-y-10">
        <li class="relative pl-12 animate-on-scroll">
          <span class="absolute left-0 top-0 w-8 h-8 rounded-full bg-primary text-white grid place-items-center font-bold">1</span>
          <h3 class="text-xl font-bold mb-2">Discovery & Planning</h3>
          <p class="text-gray-600 dark:text-slate-300">We start with in-depth discussions to understand your business goals, audience, and technical requirements. This includes requirement analysis, user flows, and technical specs.</p>
        </li>
        <li class="relative pl-12 animate-on-scroll">
          <span class="absolute left-0 top-0 w-8 h-8 rounded-full bg-primary text-white grid place-items-center font-bold">2</span>
          <h3 class="text-xl font-bold mb-2">Design & Development</h3>
          <p class="text-gray-600 dark:text-slate-300">We produce pixel-perfect designs and implement them with clean, maintainable code. Agile sprints, continuous testing, and regular updates keep you in the loop.</p>
        </li>
        <li class="relative pl-12 animate-on-scroll">
          <span class="absolute left-0 top-0 w-8 h-8 rounded-full bg-primary text-white grid place-items-center font-bold">3</span>
          <h3 class="text-xl font-bold mb-2">Deployment & Growth</h3>
          <p class="text-gray-600 dark:text-slate-300">We launch, monitor, and iterate. Staging environments, performance optimization, analytics, and maintenance plans drive ongoing success.</p>
        </li>
      </ol>
    </div>
  </section>

  <!-- CTA banner -->
  <section id="contact" class="py-20 bg-primary text-white text-center">
    <div class="max-w-4xl mx-auto px-6 animate-on-scroll">
      <h2 class="text-3xl md:text-4xl font-extrabold mb-6">Ready to build your web app?</h2>
      <p class="text-xl text-primary/light mb-8 max-w-2xl mx-auto">Claim one of our limited launch discounts before they’re gone.</p>
      <a href="#form" class="inline-flex items-center justify-center px-8 py-3 rounded-md bg-accent2 text-primary font-semibold hover:bg-accent1 transition-colors">Contact Us</a>
    </div>
  </section>

  <!-- Contact Form -->
  <section id="form" class="py-20 bg-white dark:bg-slate-950">
    <div class="max-w-2xl mx-auto px-6 animate-on-scroll">
      <div class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-gray-200 dark:border-white/10 shadow-sm">
        <h3 class="text-2xl font-extrabold mb-6 text-center">Get in Touch</h3>
        <form id="contactForm" action="https://formsubmit.co/elvirisljamovic@gmail.com" method="POST" class="bg-gray-50 dark:bg-slate-800 p-6 rounded-xl shadow-lg space-y-5" novalidate>
          <input type="text" name="_honey" class="hidden" tabindex="-1" autocomplete="off" />
          <input type="hidden" name="_captcha" value="false" />
          <input type="hidden" name="_next" value="https://movana.me/thank-you.html" />
          <input type="hidden" name="_subject" value="New inquiry from Movana landing" />

          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label for="name" class="block text-sm font-medium mb-1">Name</label>
              <input id="name" name="name" type="text" required placeholder="Your name" class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 bg-white dark:bg-slate-900 rounded-md focus:ring-2 focus:ring-primary/40" />
              <p class="mt-1 text-sm text-red-500 hidden" id="nameError">Please enter your name.</p>
            </div>
            <div>
              <label for="email" class="block text-sm font-medium mb-1">Email</label>
              <input id="email" name="email" type="email" required placeholder="you@company.com" class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 bg-white dark:bg-slate-900 rounded-md focus:ring-2 focus:ring-primary/40" />
              <p class="mt-1 text-sm text-red-500 hidden" id="emailError">Please enter a valid email.</p>
            </div>
          </div>

          <div>
            <label for="message" class="block text-sm font-medium mb-1">What are you building?</label>
            <textarea id="message" name="message" rows="5" required placeholder="Tell us about your project…" class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 bg-white dark:bg-slate-900 rounded-md focus:ring-2 focus:ring-primary/40"></textarea>
            <p class="mt-1 text-sm text-red-500 hidden" id="messageError">A short project summary helps us respond fast.</p>
          </div>

          <button id="submitBtn" type="submit" class="w-full bg-primary text-white py-3 rounded-md font-semibold hover:bg-primary-dark transition disabled:opacity-60 disabled:cursor-not-allowed">Submit</button>
          <p id="formNote" class="text-xs text-gray-500 dark:text-slate-400 text-center">We respond within 1 business day.</p>
        </form>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="py-20 bg-offwhite dark:bg-slate-950">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-extrabold mb-8 text-center">Frequently asked questions</h2>
      <div class="space-y-4">
        <details class="group bg-white dark:bg-slate-900 border border-gray-200 dark:border-white/10 rounded-lg p-5 animate-on-scroll" role="group">
          <summary class="cursor-pointer list-none flex items-center justify-between font-semibold">How fast can we start?
            <span class="ml-4 transition-transform group-open:rotate-45">＋</span>
          </summary>
          <div class="mt-3 text-gray-600 dark:text-slate-300">We typically kick off within a week. Founding discount projects receive priority scheduling.</div>
        </details>
        <details class="group bg-white dark:bg-slate-900 border border-gray-200 dark:border-white/10 rounded-lg p-5 animate-on-scroll" role="group">
          <summary class="cursor-pointer list-none flex items-center justify-between font-semibold">What stack do you use?
            <span class="ml-4 transition-transform group-open:rotate-45">＋</span>
          </summary>
          <div class="mt-3 text-gray-600 dark:text-slate-300">React/Next.js, Tailwind CSS, Node/Edge functions, and cloud platforms like Vercel or Cloudflare—chosen to fit your needs.</div>
        </details>
        <details class="group bg-white dark:bg-slate-900 border border-gray-200 dark:border-white/10 rounded-lg p-5 animate-on-scroll" role="group">
          <summary class="cursor-pointer list-none flex items-center justify-between font-semibold">Do you offer maintenance?
            <span class="ml-4 transition-transform group-open:rotate-45">＋</span>
          </summary>
          <div class="mt-3 text-gray-600 dark:text-slate-300">Yes—monthly care plans include updates, monitoring, and feature iterations.</div>
        </details>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white dark:bg-slate-950 border-t border-gray-200 dark:border-white/10 py-12">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex items-center">
          <img src="/assets/logo.png" alt="Movana" class="h-8 w-auto" loading="lazy" onerror="this.src='https://dummyimage.com/120x32/294282/ffffff&text=Movana'" />
          <span class="ml-2 text-xl font-semibold">Movana</span>
        </div>
        <div class="flex items-center gap-6">
          <a href="#" class="text-gray-500 dark:text-slate-400 hover:text-gray-900 dark:hover:text-white" aria-label="Twitter">
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
          </a>
          <a href="#" class="text-gray-500 dark:text-slate-400 hover:text-gray-900 dark:hover:text-white" aria-label="GitHub">
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
          </a>
          <a href="#" class="text-gray-500 dark:text-slate-400 hover:text-gray-900 dark:hover:text-white" aria-label="LinkedIn">
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path></svg>
          </a>
        </div>
      </div>
      <div class="mt-8 pt-8 border-t border-gray-200 dark:border-white/10 text-center text-gray-500 dark:text-slate-400 text-sm">
        &copy; <span id="year"></span> Movana. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script>
    // Year
    document.getElementById('year').textContent = new Date().getFullYear();

    // Intersection Observer for scroll animations
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
    }, { threshold: 0.12 });
    document.querySelectorAll('.animate-on-scroll').forEach(el => io.observe(el));

    // Mobile menu toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    menuBtn?.addEventListener('click', () => {
      const open = mobileMenu.classList.toggle('hidden') === false;
      menuBtn.setAttribute('aria-expanded', String(open));
      menuIcon.classList.toggle('hidden', open);
      closeIcon.classList.toggle('hidden', !open);
    });

    // Scroll spy
    const sections = ['features','process','discounts','faq','contact'];
    const links = sections.map(id => ({ id, el: document.querySelector(`a[href="#${id}"]`) }));
    const spy = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        const link = links.find(l => `#${l.id}` === `#${entry.target.id}`)?.el;
        if (!link) return;
        if (entry.isIntersecting) {
          document.querySelectorAll('nav a[aria-current="page"]').forEach(a => a.removeAttribute('aria-current'));
          link.setAttribute('aria-current','page');
        }
      });
    }, { rootMargin: '-40% 0px -55% 0px', threshold: 0.01 });
    sections.forEach(id => { const el = document.getElementById(id); el && spy.observe(el); });

    // Spots left demo (persist across refresh using localStorage)
    const spotsKey = 'movana_spots_left';
    const spotsLeftEl = document.getElementById('spotsLeft');
    const spotsBar = document.getElementById('spotsBar');
    let spots = Number(localStorage.getItem(spotsKey) || '3');
    const renderSpots = () => {
      spotsLeftEl.textContent = spots;
      const pct = Math.max(0, Math.min(100, (spots/3)*100));
      spotsBar.style.width = pct + '%';
      spotsBar.classList.toggle('bg-accent2', spots === 1);
      spotsBar.classList.toggle('bg-primary', spots !== 1);
    };
    renderSpots();
    window.addEventListener('storage', (e) => { if (e.key === spotsKey) { spots = Number(e.newValue || '3'); renderSpots(); } });

    // Form validation + UX polish
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const nameEl = document.getElementById('name');
    const emailEl = document.getElementById('email');
    const msgEl = document.getElementById('message');
    const show = (id, cond) => document.getElementById(id).classList.toggle('hidden', !cond);
    const isEmail = (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);

    form?.addEventListener('submit', (e) => {
      let ok = true;
      if (!nameEl.value.trim()) { show('nameError', true); ok = false; } else show('nameError', false);
      if (!isEmail(emailEl.value)) { show('emailError', true); ok = false; } else show('emailError', false);
      if (!msgEl.value.trim()) { show('messageError', true); ok = false; } else show('messageError', false);
      if (!ok) { e.preventDefault(); return; }
      submitBtn.disabled = true; submitBtn.textContent = 'Sending…';
      if (spots > 0) { spots = spots - 1; localStorage.setItem(spotsKey, String(spots)); renderSpots(); }
    });

    // THEME: dark/light with smooth transition
    const root = document.documentElement;
    const themeKey = 'movana_theme';
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const applyTheme = (mode) => {
      document.body.classList.add('theme-transition');
      setTimeout(() => document.body.classList.remove('theme-transition'), 250);
      if (mode === 'dark') { root.classList.add('dark'); } else { root.classList.remove('dark'); }
      localStorage.setItem(themeKey, mode);
      document.getElementById('themeIconSun').classList.toggle('hidden', mode !== 'dark');
      document.getElementById('themeIconMoon').classList.toggle('hidden', mode === 'dark');
      const mobileBtn = document.getElementById('themeToggleMobile');
      if (mobileBtn) mobileBtn.textContent = mode === 'dark' ? '☀️' : '🌙';
    };
    const saved = localStorage.getItem(themeKey);
    applyTheme(saved ? saved : (prefersDark ? 'dark' : 'light'));

    const themeToggle = document.getElementById('themeToggle');
    const themeToggleMobile = document.getElementById('themeToggleMobile');
    const nextMode = () => (root.classList.contains('dark') ? 'light' : 'dark');
    themeToggle?.addEventListener('click', () => applyTheme(nextMode()));
    themeToggleMobile?.addEventListener('click', () => applyTheme(nextMode()));
  </script>
</body>
</html>
