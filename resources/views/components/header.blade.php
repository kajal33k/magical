<!-- Navbar & Hero Start -->
{{-- <nav class="bg-black dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="assets\img\New-Project-8.png" class="h-12" alt="magical Logo">
        <span class="self-center text-2xl whitespace-nowrap text-black font-bold">Magical Brands</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 bg-black" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 bg-black dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 text-yellow-300 hover:text-yellow-200" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white hover:text-yellow-200">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white hover:text-yellow-200">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white hover:text-yellow-200">Contact</a>
        </li>
      </ul>
    </div>
    </div>
</nav> --}}
<nav class="bg-black lg:p-4 p-1 shadow-md">
  <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center mt-4 lg:mt-0">
          <img src="{{asset('asset/img/New-Project-8.png')}}" alt="Magical Logo" class="h-10 lg:h-12 w-auto">
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
  <button id="mobile-menu-button" class="text-yellow-300 hover:text-green-400 transition duration-300">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
  </button>
</div>
</div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden mt-4">
<div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
  <a href="#home" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Home</a>
  <a href="#about" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">About</a>
  <a href="#product" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Our Product</a>
  <a href="#contact" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Contact Us</a>
</div>
</div>

</nav>
<script>
  const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

<!-- Navbar & Hero End -->

