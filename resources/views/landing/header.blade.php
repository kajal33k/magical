<!-- Notification Banner -->
<div class="fixed top-0 w-full h-12 md:h-16 bg-[#88D040] text-black text-center py-2 z-30 shadow-md flex flex-col justify-center items-center px-4">
    <h1 class="md:text-base text-xs font-semibold flex items-center justify-center whitespace-normal text-black px-4 pt-[5px]">
        BIG BILLION SALE IS LIVE TODAY OFFER 50% OFF
    </h1>
    <div class="mb-[5px] flex flex-wrap justify-center text-xs text-black">
        <p class="mr-4">ALL INDIA HOME DELIVERY FREE</p>
        <p>50000+ Happy Customers</p>
    </div>    
</div>

<!-- Navbar -->
<nav class="bg-black shadow-md fixed w-full top-12 md:top-16 z-20">
    <div class="container mx-auto flex justify-between items-center py-2 lg:py-4 px-4">
        <!-- Logo Section -->
        <div>
            <img src="{{ asset('asset/img/New-Project-8.png') }}" alt="Magical Logo" class="h-10 lg:h-12 w-auto">
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8">
            <a href="#home" class="text-yellow-300 font-bold text-lg hover:text-green-400 transition duration-300">Home</a>
            <a href="#about" class="text-yellow-300 font-bold text-lg hover:text-green-400 transition duration-300">About</a>
            <a href="#product" class="text-yellow-300 font-bold text-lg hover:text-green-400 transition duration-300">Our Product</a>
            <a href="#contact" class="text-yellow-300 font-bold text-lg hover:text-green-400 transition duration-300">Contact Us</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="navbar-toggle" class="md:hidden text-[#88D040] hover:text-yellow-300 transition duration-300">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center bg-black text-yellow-300 space-y-2 py-4">
        <a href="#home" class="text-lg hover:text-green-400 transition duration-300">Home</a>
        <a href="#about" class="text-lg hover:text-green-400 transition duration-300">About</a>
        <a href="#product" class="text-lg hover:text-green-400 transition duration-300">Our Product</a>
        <a href="#contact" class="text-lg hover:text-green-400 transition duration-300">Contact Us</a>
    </div>
</nav>

<!-- Call Now Button (Mobile Only) -->
<div class="fixed bottom-4 right-4 md:hidden flex space-x-2 animate-pulse">
    <a href="tel:7048943878" class="bg-white p-2 rounded-full shadow-lg">
        <i class="ri-phone-fill text-[#88D040] text-3xl"></i>
    </a>
    <a href="https://wa.me/7048943878" class="bg-white p-2 rounded-full shadow-lg">
        <i class="ri-whatsapp-fill text-[#88D040] text-3xl"></i>
    </a>
</div>

<style>
    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.2); opacity: 0.7; }
    }

    .animate-pulse {
        animation: pulse 1.5s infinite;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navbarToggle = document.getElementById('navbar-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        navbarToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
