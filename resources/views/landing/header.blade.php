
@include('landing.topbar')
<!-- Navbar -->
<nav class="bg-black shadow-md w-full relative ">
    <div class="container mx-auto flex justify-between items-center py-2 lg:py-4 px-4">
        <!-- Logo Section -->
        <div>
            <img src="{{ asset('asset/img/New-Project-8.png') }}" alt="Magical Logo" class="h-10 lg:h-12 w-auto">
        </div>

<!-- Call Now Button (Mobile Only) -->
<div class="md:hidden block flex justify-end items-end absolute left-1/2 transform -translate-x-1/2 -mt-2 z-9 animate-zoom-blink">
    <a href="tel:7048943878" class="text-black py-1 px-2 shadow-sm text-sm font-semibold hover:bg-yellow-300 transition duration-300">
        <i class="ri-phone-fill text-[#88D040] text-3xl"></i>
    </a>
    <a href="https://wa.me/7048943878" class="text-black py-1 px-2 shadow-sm text-sm font-semibold hover:bg-yellow-300 transition duration-300">
        <i class="ri-whatsapp-fill text-[#88D040] text-3xl"></i>
    </a>
</div>

<style>
    @keyframes zoom-blink {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.2);
            opacity: 0.7;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .animate-zoom-blink {
        animation: zoom-blink 1.5s ease-in-out infinite;
    }
</style>
 
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


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navbarToggle = document.getElementById('navbar-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        navbarToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
