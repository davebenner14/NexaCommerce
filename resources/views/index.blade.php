{{-- resources/views/index.blade.php --}}
<x-app-layout>
    <x-slot name="head">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NexaCommerce - Revolutionize Your Digital Commerce</title>
        <link rel="stylesheet" href="{{ asset('dist/assets/app-6e0c2a21.css') }}">
    </x-slot>

    <x-slot name="header">
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
    </x-slot>

    <section id="hero" class="bg-light-blue text-center py-12 text-white">
        <!-- ... -->
    </section>

    <section id="features" class="py-12">
        <!-- ... -->
    </section>

    <section id="benefits" class="bg-fade-light-blue text-center py-12">
        <!-- ... -->
    </section>

    <section id="testimonials" class="py-12">
        <!-- ... -->
    </section>

    <section id="pricing" class="bg-fade-turquoise py-12">
        <!-- ... -->
    </section>

    <footer class="bg-fade-blue-turquoise text-white py-6">
        <!-- ... -->
    </footer>

    <x-slot name="scripts">
        <script src="{{ asset('js/app.js') }}"></script>
    </x-slot>
</x-app-layout>
