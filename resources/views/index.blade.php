{{-- resources/views/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexaCommerce - Revolutionize Your Digital Commerce</title>

    <!-- Stylesheets (e.g., CSS, TailwindCSS, Bootstrap, etc.) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <nav>
            <a href="#">Features</a>
            <a href="#">Pricing</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
            <button>Start Free Trial</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <h1>Revolutionize Your Digital Commerce Journey with NexaCommerce</h1>
        <p>The only unified DCM platform that scales your business effortlessly.</p>
        <img src="{{ asset('images/hero-image.jpg') }}" alt="NexaCommerce Image">
        <button>Try NexaCommerce Today</button>
    </section>

    <!-- Features Overview -->
    <section id="features">
        <h2>Game-changing Features</h2>
        <!-- Example feature; you can repeat this structure for other features -->
        <div class="feature">
            <img src="{{ asset('images/feature-icon.png') }}" alt="Feature Icon">
            <h3>Feature Title</h3>
            <p>Feature description here.</p>
        </div>
    </section>

    <!-- Benefits -->
    <section id="benefits">
        <h2>Why Choose NexaCommerce?</h2>
        <p>Highlighting the main problems of the digital commerce journey that NexaCommerce solves...</p>
        <!-- Add more content or comparison charts as needed -->
    </section>

    <!-- Testimonials -->
    <section id="testimonials">
        <h2>What Our Users Say</h2>
        <!-- Example testimonial -->
        <div class="testimonial">
            <p>"Testimonial content here."</p>
            <h4>User Name, Company</h4>
        </div>
    </section>

    <!-- Pricing & Plans -->
    <section id="pricing">
        <h2>Pricing Plans</h2>
        <!-- Example pricing plan -->
        <div class="plan">
            <h3>Plan Name</h3>
            <p>Plan description and price.</p>
            <button>Choose Plan</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <nav>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
        </nav>
        <p>&copy; {{ date('Y') }} NexaCommerce. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
