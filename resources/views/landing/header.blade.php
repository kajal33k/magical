@include('landing.topbar')
<!-- Navbar -->
<nav class=" bg-black shadow-md w-full relative z-10 mb-24" style="position: fixed">
    <div class="container mx-auto flex justify-between items-center py-2 lg:py-4 px-4">
        <!-- Logo Section -->
        <div>
            <a href="{{route('home')}}">
            <img src="{{ asset('asset/img/New-Project-8.png') }}" alt="Magical Logo" class="h-10 lg:h-12 w-auto">
        </a>
        </div>

        <!-- Call Now Button (Mobile Only) -->
        <div
            class="md:hidden block flex justify-end items-end absolute left-1/2 transform -translate-x-1/2 -mt-2 z-9 animate-zoom-blink">
            <a href="tel:7048943878"
                class="text-black py-1 px-2 shadow-sm text-sm font-semibold hover:bg-yellow-300 transition duration-300">
                <i class="ri-phone-fill text-[#88D040] text-3xl"></i>
            </a>
            <a href="https://wa.me/7048943878"
                class="text-black py-1 px-2 shadow-sm text-sm font-semibold hover:bg-yellow-300 transition duration-300">
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
            <a href="{{route('home')}}"
                class="text-yellow-300 font-bold text-lg hover:text-green-400 transition duration-300">Home</a>
            {{-- <a href="#about"
                class="text-yellow-300 font-bold text-lg hover:text-green-400 transition duration-300">About</a>
            <a href="#product"
                class="text-yellow-300 font-bold text-lg hover:text-green-400 transition duration-300">Our Product</a>
            <a href="#contact"
                class="text-yellow-300 font-bold text-lg hover:text-green-400 transition duration-300">Contact Us</a>
        --}}
            </div>

        <!-- Mobile Menu Button -->
        <button id="navbar-toggle" class="md:hidden text-[#88D040] hover:text-yellow-300 transition duration-300">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center bg-black text-yellow-300 space-y-2 py-4">
        <a href="{{route('home')}}" class="text-lg hover:text-green-400 transition duration-300">Home</a>
        {{-- <a href="#about" class="text-lg hover:text-green-400 transition duration-300">About</a>
        <a href="#product" class="text-lg hover:text-green-400 transition duration-300">Our Product</a>
        <a href="#contact" class="text-lg hover:text-green-400 transition duration-300">Contact Us</a>
    --}}
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


<!-- Popup Modal -->
<div id="newmodal"
    class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
    <div class="bg-white p-6 rounded-lg text-center">
        <h2 class="text-2xl font-bold mb-4">Please fill in the details</h2>
        <input type="text" id="user_name" placeholder="Name" class="px-4 py-2 border rounded mb-4 w-full" />
        <input type="text" id="user_mobile_no" placeholder="Mobile No" class="px-4 py-2 border rounded mb-4 w-full" />
        <div class="flex justify-center space-x-4">
            <button id="new_submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Submit</button>
            <button id="new_close-modal" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Close</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#new_submit').click(function() {
                var name = $('#user_name').val().trim();
                var mobile_no = $('#user_mobile_no').val().trim();

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
    </script>

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
                if (localStorage.getItem('newmodal') !== 'true') {
                    $('#newmodal').removeClass('hidden');
                    localStorage.setItem('newmodal', 'true'); // Mark the modal as shown
                }
            }
        });

        // Close modal when the close button is clicked
        $('#new_close-modal').click(function() {
            $('#newmodal').addClass('hidden');
        });
    });
</script>
