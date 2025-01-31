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
<nav class="bg-black lg:px-4 p-1 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
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
            <button id="mobile-menu-button" class="text-yellow-300 hover:text-green-400 transition duration-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden mt-4">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Home</a>
            <a href="#about" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">About</a>
            <a href="#product" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Our
                Product</a>
            <a href="#contact" class="block text-yellow-300 hover:text-green-400 py-2 transition duration-300">Contact
                Us</a>
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

{{-- on scroll pop up --}}

<!-- Popup Modal -->

  <!-- Popup Modal -->
  <div id="mymodal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
    <div class="bg-white p-6 rounded-lg text-center">
      <h2 class="text-2xl font-bold mb-4">Please fill in the details</h2>
      <input type="text" id="name" placeholder="Name" class="px-4 py-2 border rounded mb-4 w-full" />
      <input type="text" id="mobile_no" placeholder="Mobile No" class="px-4 py-2 border rounded mb-4 w-full" />
      <div class="flex justify-center space-x-4">
          <button id="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Submit</button>
          <button id="close-modal" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Close</button>
      </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  $(document).ready(function() {
    $('#submit').click(function() {
        var name = $('#name').val().trim();
        var mobile_no = $('#mobile_no').val().trim();

        if (!/^\d{10}$/.test(mobile_no)) {
            alert("Mobile number must be exactly 10 digits.");
            return;
        }

        if (!/^[A-Za-z\s]+$/.test(name)) {
            alert("Name should contain only letters and spaces.");
            return;
        }

        $.ajax({
            url: '/store-lead',
            type: 'POST',
            data: {
                name: name,
                mobile_no: mobile_no,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                alert(response.message);
            },
            error: function(response) {
                alert('Error: ' + response.responseJSON.message);
            }
        });
    });
});

  
  </div>

  <script>
    $(document).ready(function() {
      // Function to show modal after scroll
      $(window).scroll(function() {
        var scrollPosition = $(window).scrollTop(); // current scroll position
        var documentHeight = $(document).height(); // total height of the page
        var windowHeight = $(window).height(); // visible height of the browser window

        // Show modal when user scrolls 10% of the page
        if (scrollPosition >= documentHeight * 0.1) {
          // Check if modal has already been shown
          if (localStorage.getItem('mymodal') !== 'true') {
            $('#mymodal').removeClass('hidden');
            localStorage.setItem('mymodal', 'true'); // Mark the modal as shown
          }
        }
      });

      // Close modal when the close button is clicked
      $('#close-modal').click(function() {
        $('#mymodal').addClass('hidden');
      });
    });
  </script>
