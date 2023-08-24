{{-- resources/views/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexaCommerce - Revolutionize Your Digital Commerce</title>
    <link rel="stylesheet" href="{{ asset('dist/assets/app-6e0c2a21.css') }}">
</head>
<body class="bg-white text-blue font-sans antialiased">

    <!-- Header & Navigation -->
    <header class="bg-fade-blue-turquoise text-white py-4">
        <div class="container mx-auto">
            <nav>
                <ul class="flex justify-between items-center">
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>
                    <li>
                        <button aria-label="Start Free Trial" class="bg-turquoise text-white py-2 px-6 rounded-full hover:bg-light-blue transition-all duration-300">
                            Start Free Trial
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="bg-light-blue text-center py-12 text-white">
        <h1 class="text-4xl font-bold mb-4">Revolutionize Your Digital Commerce Journey with NexaCommerce</h1>
        <p class="mb-8">The only unified DCM platform that scales your business effortlessly.</p>
        <img src="{{ asset('images/hero-image.jpg') }}" alt="NexaCommerce presentation" class="mb-8">
        <button aria-label="Try NexaCommerce Today" class="bg-turquoise text-white py-2 px-6 rounded-full hover:bg-blue transition-all duration-300">
            Try NexaCommerce Today
        </button>
    </section>

    <!-- Features Overview -->
    <section id="features" class="py-12">
        <h2 class="text-center text-3xl mb-8">Game-changing Features</h2>
        <article class="flex items-center justify-between mb-4">
            <img src="{{ asset('images/feature-icon.png') }}" alt="Feature Icon" class="w-1/4">
            <div>
                <h3 class="text-2xl mb-2">Feature Title</h3>
                <p>Feature description here.</p>
            </div>
        </article>
        <!-- Add more features similarly -->
    </section>

    <!-- Benefits -->
    <section id="benefits" class="bg-fade-light-blue text-center py-12">
        <h2 class="text-3xl mb-8">Why Choose NexaCommerce?</h2>
        <p>Highlighting the main problems of the digital commerce journey that NexaCommerce solves...</p>
        <!-- Add more content or comparison charts as needed -->
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-12">
        <h2 class="text-center text-3xl mb-8">What Our Users Say</h2>
        <blockquote class="testimonial border-turquoise border-l-4 p-4 mb-4">
            <p class="italic mb-4">"Testimonial content here."</p>
            <cite class="font-bold">User Name, Company</cite>
        </blockquote>
        <!-- Add more testimonials similarly -->
    </section>

    <!-- Pricing & Plans -->
    <section id="pricing" class="bg-fade-turquoise py-12">
        <h2 class="text-center text-3xl mb-8">Pricing Plans</h2>
        <article class="plan text-center mb-4">
            <h3 class="text-2xl mb-2">Plan Name</h3>
            <p class="mb-4">Plan description and price.</p>
            <button aria-label="Choose this plan" class="bg-blue text-white py-2 px-6 rounded-full hover:bg-light-blue transition-all duration-300">
                Choose Plan
            </button>
        </article>
        <!-- Add more plans similarly -->
    </section>

    <!-- Footer -->
    <footer class="bg-fade-blue-turquoise text-white py-6">
        <div class="container mx-auto text-center">
            <nav>
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </nav>
            <p>&copy; {{ date('Y') }} NexaCommerce. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
