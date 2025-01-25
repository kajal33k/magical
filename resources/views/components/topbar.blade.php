<!-- Notification Banner -->
<div class="fixed top-0 w-full md:h-16 h-10 bg-[#88D040] text-white z-30 shadow-md">
    <div class="text-center">
        <h1 class="md:text-base text-xs font-semibold flex items-center justify-center text-wrap text-black px">
            BIG BILLION SALE IS LIVE TODAY OFFER 50% OFF
        </h1>
        <div class="mt-1 flex flex-wrap justify-center text-xs text-wrap text-black">
            <p>ALL INDIA HOME DELIVERY FREE</p>
            <p>50000+ Happy Customers</p>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="bg-black lg:p-4 p-1 shadow-md -mt-12 md:mt-0">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center mt-4 lg:mt-0">
            <img src="{{ asset('asset/img/New-Project-8.png') }}" alt="Magical Logo" class="h-10 lg:h-12 w-auto">
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8">
            <a href="#home" class="nav-link font-bold text-xl text-yellow-300 hover:text-green-400">Home</a>
            <a href="#about" class="nav-link font-bold text-xl text-yellow-300 hover:text-green-400">About</a>
            <a href="#product" class="nav-link font-bold text-xl text-yellow-300 hover:text-green-400">Our Product</a>
            <a href="#contact" class="nav-link font-bold text-xl text-yellow-300 hover:text-green-400">Contact Us</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="navbar-toggle-button" class="toggle-navbar-button text-green-400 hover:text-yellow-300 transition duration-300 mt-6 md:mt-0">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu1" class="hidden md:hidden mt-4">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Home</a>
            <a href="#about" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">About</a>
            <a href="#product" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Our Product</a>
            <a href="#contact" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Contact Us</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Selecting the toggle button and mobile menu
        const navbarToggleButton = document.getElementById('navbar-toggle-button');
        const mobileMenu = document.getElementById('mobile-menu1');

        if (navbarToggleButton && mobileMenu) {
            // Toggle the hidden class for the mobile menu
            navbarToggleButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>
