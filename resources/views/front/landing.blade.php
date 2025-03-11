@extends('landing.main')
@section('content')



    <div
        class="container mt-12 md:mt-44 grid gap-4 grid-cols-[repeat(auto-fill,minmax(0,500px))] items-start w-full md:mx-24">


        <div class="left p-4 pb-4 w-full lg:sticky lg:top-0">
            <!-- Main Slider -->
            <div class="overflow-hidden relative">
                <div id="slider" class="flex transition-transform duration-500">
                    <img src="{{ asset('asset/img/s1.jpg') }}" loading="lazy" alt="Product Image 1"
                        class="w-full h-auto lg:h-full object-cover flex-shrink-0">
                    {{-- <img src="{{ asset('asset/img/two.jpg') }}" alt="Product Image 2"
                        class="w-full h-auto lg:h-full object-cover flex-shrink-0"> --}}
                    <img src="{{ asset('asset/img/s2.jpg') }}" loading="lazy" alt="Product Image 3"
                        class="w-full h-auto lg:h-full object-cover flex-shrink-0">
                    <img src="{{ asset('asset/img/s3.jpg') }}" loading="lazy" alt="Product Image 4"
                        class="w-full h-auto lg:h-full object-cover flex-shrink-0">
                    <img src="{{ asset('asset/img/s8.jpg') }}" loading="lazy" alt="Product Image 5"
                        class="w-full h-auto lg:h-full object-cover flex-shrink-0">
                    <img src="{{ asset('asset/img/s5.jpg') }}" loading="lazy" alt="Product Image 6"
                        class="w-full h-auto lg:h-full object-cover flex-shrink-0">
                    <img src="{{ asset('asset/img/s6.jpg') }}" loading="lazy"alt="Product Image 7"
                        class="w-full h-auto lg:h-full object-cover flex-shrink-0">

                </div>

                <!-- Navigation Buttons -->
                <button id="prev" aria-label="Previous slide"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    &#8249;
                </button>
                <button id="next" aria-label="Next slide"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    &#8250;
                </button>
            </div>

            <!-- Thumbnails -->
            <div class="flex flex-wrap justify-center md:justify-start gap-x-2 sm:gap-x-4 mt-4">
                <img data-slide="0" src="{{ asset('asset/img/s1.jpg') }}" loading="lazy" alt="Thumbnail 1"
                    class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">

                {{-- <img data-slide="1" src="{{ asset('asset/img/two.jpg') }}" alt="Thumbnail 2"
                    class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"> --}}

                <img data-slide="2" src="{{ asset('asset/img/s2.jpg') }}" loading="lazy" alt="Thumbnail 3"
                    class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <img data-slide="3" src="{{ asset('asset/img/s3.jpg') }}" loading="lazy" alt="Thumbnail 4"
                    class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <img data-slide="0" src="{{ asset('asset/img/s8.jpg') }}" loading="lazy" alt="Thumbnail 1"
                    class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <img data-slide="1" src="{{ asset('asset/img/s5.jpg') }}" loading="lazy" alt="Thumbnail 2"
                    class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <img data-slide="2" src="{{ asset('asset/img/s6.jpg') }}" loading="lazy" alt="Thumbnail 3"
                    class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">

            </div>

        </div>
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const slider = document.getElementById("slider");
                const thumbnails = document.querySelectorAll("[data-slide]");
                const prevButton = document.getElementById("prev");
                const nextButton = document.getElementById("next");
                const slideCount = slider.children.length;
                let currentIndex = 0;
                let autoplayInterval;

                function updateSlider() {
                    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
                }

                // Navigate to the previous slide
                prevButton.addEventListener("click", () => {
                    currentIndex = (currentIndex - 1 + slideCount) % slideCount;
                    updateSlider();
                });

                // Navigate to the next slide
                nextButton.addEventListener("click", () => {
                    currentIndex = (currentIndex + 1) % slideCount;
                    updateSlider();
                });

                // Thumbnail click event
                thumbnails.forEach((thumbnail) => {
                    thumbnail.addEventListener("click", (e) => {
                        currentIndex = parseInt(thumbnail.dataset.slide);
                        updateSlider();
                        resetAutoplay(); // Restart autoplay after manual interaction
                    });
                });

                // Autoplay function
                function startAutoplay() {
                    autoplayInterval = setInterval(() => {
                        currentIndex = (currentIndex + 1) % slideCount;
                        updateSlider();
                    }, 2000); // 2-second interval
                }

                function stopAutoplay() {
                    clearInterval(autoplayInterval);
                }

                function resetAutoplay() {
                    stopAutoplay();
                    startAutoplay();
                }

                // Stop autoplay when hovering over slider or buttons
                slider.addEventListener("mouseenter", stopAutoplay);
                slider.addEventListener("mouseleave", startAutoplay);
                prevButton.addEventListener("mouseenter", stopAutoplay);
                prevButton.addEventListener("mouseleave", startAutoplay);
                nextButton.addEventListener("mouseenter", stopAutoplay);
                nextButton.addEventListener("mouseleave", startAutoplay);

                // Initialize
                updateSlider();
                startAutoplay();
            });
        </script>



        <div class="right bg-white p-2 lg:pl-32 w-full">
            {{-- product --}}
            <div class="text-center space-y-4">
                <h1 class="text-md md:text-3xl font-bold">Magical Black Hair shampoo (Ammonia Free) Hurry up 50% of offer
                    Buy 1 Get 1 free..</h1>
                <div class="flex justify-center items-center space-x-1">
                    <!-- Star Ratings -->
                    @for ($i = 0; $i < 5; $i++)
                        <span class="text-yellow-400 text-xl" aria-hidden="true">&#9733;</span>
                    @endfor
                </div>
                <p class="text-gray-800 text-lg font-semibold">(50 Thousand Positive Reviews)</p>
                <p class="text-green-600 text-xl font-bold"> <strike class="text-red-600 px-1"> Rs. 1299.00 </strike> 599.00
                </p>

                <!-- Countdown Timer -->
                <div id="countdown"
                    class="bg-amber-50 p-6 rounded-xl shadow-md flex items-center justify-center space-x-8 mb-4">
                    {{-- <div class="w-px bg-amber-300 h-8"></div> --}}
                    <div class="flex flex-col items-center">
                        <span id="minutes" class="text-3xl font-bold text-amber-600">30</span>
                        <span class="text-sm font-medium text-amber-500">Minutes</span>
                    </div>
                    <div class="w-px bg-amber-300 h-8"></div>
                    <div class="flex flex-col items-center">
                        <span id="seconds" class="text-3xl font-bold text-amber-600">00</span>
                        <span class="text-sm font-medium text-amber-500">Seconds</span>
                    </div>
                </div>

                <script>
                    // Set the target time (30 minutes from now)
                    const targetDate = new Date();
                    targetDate.setMinutes(targetDate.getMinutes() + 30); // Add 30 minutes

                    // Timer Update Function
                    function updateTimer() {
                        const now = new Date();
                        const remainingTime = targetDate - now;

                        if (remainingTime > 0) {
                            const minutes = Math.floor((remainingTime / (1000 * 60)) % 60); // Calculate remaining minutes
                            const seconds = Math.floor((remainingTime / 1000) % 60); // Calculate remaining seconds

                            // Update the DOM
                            document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                            document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
                        } else {
                            clearInterval(timerInterval);
                            document.getElementById('countdown').innerHTML =
                                "<p class='text-amber-600 text-xl font-bold'>Time's up!</p>";
                        }
                    }

                    // Start the Timer
                    const timerInterval = setInterval(updateTimer, 1000);
                    updateTimer();
                </script>


                <!-- Order Now Button -->

                <div id="orderBtn"
                    class="flex justify-center items-center bg-black text-white font-medium py-2 px-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-800 transition duration-300 cursor-pointer animate-bounce"
                    onclick="openModal()">
                    <!-- Cart Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.8 9H21M7 13L5.4 5M9 22a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z" />
                    </svg>
                    <button class="grid grid-cols-1">
                        <!-- Main Text -->
                        <span class="mr-0">
                            Order Now - Cash on dilevery
                        </span>

                        <!-- Confetti Icons and Discount Code -->
                        <span class=" items-center text-yellow-400">
                            Apply 50% Discount Code
                        </span>
                    </button>

                </div>


                <!-- Mobile Order Button -->
                {{--
                <button id="orderBtn"
                    class="fixed z-50 md:hidden block bottom-0 left-0 w-full flex items-center justify-center py-4 px-6 bg-gradient-to-r from-black to-gray-800 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <!-- Cart Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.8 9H21M7 13L5.4 5M9 22a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z" />
                    </svg>

                    <!-- Main Text and Confetti Text -->
                    <div class="flex flex-col items-center justify-center">
                        <span class="font-semibold text-lg lg:text-xl text-center leading-tight">
                            Order Now
                        </span>
                        <span class="text-xs lg:text-sm text-yellow-400 mt-1 text-center">
                            Apply 50% Discount Code
                        </span>
                    </div>
                </button> --}}
                {{-- <a href="{{ route('more.product') }}" target="_blank" 
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg shadow-md transition duration-300">
                Get More Products
             </a>
              --}}
                <div class="relative inline-block text-left">
                    <button id="menuButton"
                        class="px-4 py-2 bg-gray-600 text-white rounded-md shadow-md hover:bg-gray-700 focus:outline-none">
                        More Products
                    </button>
                    <div id="menuDropdown"
                        class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                        <a href="{{ route('more.product') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100">EverGloss</a>
                        <a href="{{ route('more.thirdproduct') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100">EnchantiLocks</a>
                        <a href="{{ route('more.forthproduct') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100">MystiGlow Shampoo</a>
                    </div>
                </div>

                <script>
                    document.getElementById('menuButton').addEventListener('click', function() {
                        document.getElementById('menuDropdown').classList.toggle('hidden');
                    });
                </script>

                <p class="text-sm text-black font-bold">Limited Time Offer</p>
                <p class="text-sm text-gray-500">✨ Apply 50% Discount Code ✨</p>
                <div class="flex justify-center">
                    <img src="{{ asset('asset/img/feeship.jpg') }}" loading="lazy" alt="Free Shipping">
                </div>
            </div>

            <!-- Offers Section -->
            <div class="text-center">
                <p class="text-pink-600 font-bold md:text-md text-sm text-wrap mt-4">💖 TODAY'S OFFER - LIMITED TIME ONLY
                    💖</p>
                <ul class="list-disc md:px-6 text-gray-700 text-left space-y-2 mt-4">
                    <li><span class="font-semibold text-pink-500 text-sm">50% OFF TODAY</span> 💝</li>
                    <li><span class="font-semibold text-pink-500 text-sm">BUY 1 GET 1 FREE</span> 💝</li>
                    <li><span class="font-semibold text-pink-500 text-sm">FREE SHIPPING</span> 💝</li>
                    <li><span class="font-semibold text-pink-500 text-sm">CASH ON DELIVERY</span> 💝💝💝💝</li>
                    <li><span class="font-semibold text-pink-500 text-sm">Magical Black Hair Shampoo 3 in 1<. /</li>
                    <li><span class="font-semibold text-pink-500 text-sm">TODAY ONLY: Rs. 599</span></li>
                </ul>
            </div>

            <!-- Warning Section -->
            <div class="mt-8 px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-center text-gray-800">
                    Attention! Poor quality hair dye can cause multiple conditions
                </h2>

                <div class="mt-4 sm:mt-6 flex justify-center">
                    <img src="{{ asset('asset/img/one.jpg') }}" loading="lazy" alt="Hair Damage Warning"
                        class="rounded-lg shadow-md max-w-[90%] sm:max-w-md lg:max-w-lg mx-auto">
                </div>

                <p class="text-center text-sm sm:text-base text-gray-600 mt-4">
                    Choose high-quality products to avoid damage to your hair and scalp.
                </p>
            </div>


            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="{{asset('asset/img/A.gif')}}"
                    alt="How to Use Step 1" loading="lazy" class="rounded-lg shadow h-auto w-auto">

            </div>

            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/two.jpg') }}" alt="How to Use Step 1"
                    loading="lazy" class="rounded-lg shadow">

            </div>

            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="{{asset('asset/img/B.gif')}}"
                    alt="How to Use Step 1" loading="lazy" class="rounded-lg shadow h-auto w-auto">

            </div>

            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/three.jpg') }}" loading="lazy" alt="How to Use Step 1"
                    class="rounded-lg shadow">

            </div>
            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="{{asset('asset/img/C.gif')}}"
                    alt="How to Use Step 1" loading="lazy" class="rounded-lg shadow h-auto w-auto">

            </div>

            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/four.jpg') }}" loading="lazy" alt="How to Use Step 1"
                    class="rounded-lg shadow">

            </div>
            <div>
                3-in-1 Magic: Say goodbye to multiple products! Magical combines shampooing, conditioning, and hair
                dyeing in one easy step.
            </div>

            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/five.jpg') }}" loading="lazy" alt="How to Use Step 1"
                    class="rounded-lg shadow">

            </div>
            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="{{asset('asset/img/D.gif')}}"
                    alt="How to Use Step 1" loading="lazy" class="rounded-lg shadow h-auto w-auto">

            </div>



            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/six.jpg') }}" loading="lazy" alt="How to Use Step 1"
                    class="rounded-lg shadow">

            </div>
            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="{{asset('asset/img/E.gif')}}"
                    alt="How to Use Step 1" loading="lazy" class="rounded-lg shadow h-auto w-auto">

            </div>


            {{-- ugb --}}
            {{-- <div class=" flex justify-center">
                <img src="{{ asset('asset/img/hair9.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

            </div> --}}
            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="{{asset('asset/img/F.gif')}}"
                    alt="How to Use Step 1" loading="lazy" class="rounded-lg shadow h-auto w-auto">

            </div>

            {{-- ujg --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/seven.jpg') }}" loading="lazy" alt="How to Use Step 1"
                    class="rounded-lg shadow">

            </div>
            {{-- 6fr8 --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/eight.jpg') }}" loading="lazy" alt="How to Use Step 1"
                    class="rounded-lg shadow">

            </div>
            {{-- last img --}}
            <div class=" flex justify-center">
                <img src="{{ asset('nine') }}" loading="lazy" alt="How to Use Step 1"
                    class="rounded-lg shadow">

            </div>

        </div>
    </div>

    <div class="bg-white py-12">
        <!-- Review Section Header -->
        <div class="flex justify-center">
            <h1 class="text-3xl font-bold text-gray-900 text-wrap p-2">Our Customer Reviews</h1>
        </div>

        <!-- Reviews Section -->
        <div class="space-y-12 px-6 md:px-20 lg:px-44 mt-8">
            <!-- Review 1 -->
            <div class="flex flex-col md:flex-row items-center gap-6">
                <!-- Image -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('asset/img/test3.jpg') }}" loading="lazy" alt="John Doe's Testimonial"
                        class="rounded-lg w-full h-auto object-cover">
                </div>
                <!-- Text Content -->
                <div class="w-full md:w-2/3 text-center md:text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Ram Das</h3>
                    <p class="text-gray-500 text-sm">January 24, 2025</p>
                    <p class="mt-2 text-gray-700 italic">
                        Magical Hair Colour Shampu exceeded my expectations! The vibrant shade I chose lasted for weeks, and
                        my hair felt soft and nourished. It's easy to use and has a pleasant scent. Highly recommended!
                    </p>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-6">
                <!-- Image -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('asset/img/test2.jpg') }}" loading="lazy" alt="Jane Doe's Testimonial"
                        class="rounded-lg w-full h-auto object-cover">
                </div>
                <!-- Text Content -->
                <div class="w-full md:w-2/3 text-center md:text-right">
                    <h3 class="text-lg font-semibold text-gray-900">shashi jha</h3>
                    <p class="text-gray-500 text-sm">January 24, 2025</p>
                    <p class="mt-2 text-gray-700 italic">
                        "This product is incredible! It has transformed the way I work, and I can't imagine going back to
                        anything else."I love how Magical Hair Colour Shampu transformed my hair. The colour was stunning,
                        and my hair felt silky smooth. It's a game-changer for home hair colouring. I'm thrilled with the
                        results!
                    </p>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="flex flex-col md:flex-row items-center gap-6">
                <!-- Image -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('asset/img/test1.jpg') }}" loading="lazy" alt="Sam Smith's Testimonial"
                        class="rounded-lg w-full h-auto object-cover">
                </div>
                <!-- Text Content -->
                <div class="w-full md:w-2/3 text-center md:text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Samridh Sinha</h3>
                    <p class="text-gray-500 text-sm">January 24, 2025</p>
                    <p class="mt-2 text-gray-700 italic">
                        Magical Hair Colour Shampu is a must-have for anyone looking to switch up their hair colour. It's
                        gentle on the hair and delivers vibrant, long-lasting results. I'm impressed by its quality and ease
                        of use. Absolutely fantastic!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Now Button (Desktop & Mobile) -->
    <div id="orderBtn"
        class="fixed z-50 md:hidden block bottom-0 w-full flex justify-center items-center bg-black text-white font-medium py-2 px-4 transition duration-300 cursor-pointer mt-8 animate-bounce"
        onclick="openModal()">
        <!-- Cart Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.8 9H21M7 13L5.4 5M9 22a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z" />
        </svg>
        <button class="grid grid-cols-1">
            <!-- Main Text -->
            <span class="mr-0">
                Order Now - Cash on dilevery
            </span>
            <!-- Confetti Icons and Discount Code -->
            <span class="items-center text-yellow-400">
                Apply 50% Discount Code
            </span>
        </button>
    </div>

    <!-- Modal Structure -->
    <div id="orderModal"
        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden overflow-y-auto max-h-screen"
        role="dialog" aria-labelledby="orderModalTitle" aria-modal="true">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-4xl max-h-[500px] overflow-auto transition-transform transform scale-95 duration-300 ease-in-out mt-4"
            aria-labelledby="orderModalTitle">
            <!-- Close Icon -->
            <button id="closeModal" class="absolute top-3 right-3 text-green-500 hover:text-green-600 focus:outline-none"
                aria-label="Close" onclick="closeModal()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Modal Content -->
            <div class="lg:max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
                <h2 id="orderModalTitle" class="text-2xl font-semibold text-gray-700 mb-6">Please fill in the form to
                    order</h2>
                @if ($errors->any())
                    <div class="mb-4 p-4 text-red-700 bg-red-100 border border-red-400 rounded">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="shippingForm" method="POST" action="{{ route('orderRequest.store') }}" novalidate>
                    @csrf
                    <!-- Full Name -->
                    <div class="mb-4 flex flex-col space-y-2">
                        <label for="name" class="text-sm font-medium text-gray-700">Full Name <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="name" name="name"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 form-input"
                            placeholder="Enter Your Name" required aria-describedby="fullNameHelp">
                        <span id="fullNameHelp" class="text-xs text-red-500"></span> <!-- Error Message Here -->
                    </div>

                    <!-- Mobile Number -->
                    <div class="mb-4">
                        <label for="mobile_number" class="block text-sm font-medium text-gray-700">Mobile Number <span
                                class="text-red-600">*</span></label>
                        <input type="tel" id="mobile_number" name="mobile_number"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 form-input"
                            placeholder="Enter Your Mobile Number" required>
                        <span id="mobile_numberHelp" class="text-xs text-red-500"></span>
                    </div>

                    <!-- House/Village -->
                    <div class="mb-4">
                        <label for="house_village_name" class="block text-sm font-medium text-gray-700">House/Village
                            <span class="text-red-600">*</span></label>
                        <input type="text" id="house_village_name" name="house_village_name"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 form-input"
                            placeholder="Enter your house or village name" required>
                        <span id="house_village_nameHelp" class="text-xs text-red-500"></span>
                    </div>

                    <!-- Area / Landmark -->
                    <div class="mb-4">
                        <label for="area_landmark" class="block text-sm font-medium text-gray-700">Area / Landmark <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="area_landmark" name="area_landmark"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 form-input"
                            placeholder="Enter area or landmark" required>
                        <span id="area_landmarkHelp" class="text-xs text-red-500"></span>
                    </div>

                    <!-- State -->
                    <div class="mb-4">
                        <label for="state" class="block text-sm font-medium text-gray-700">State <span
                                class="text-red-600">*</span></label>
                        <select id="state" name="state"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            required>
                            <option value="" disabled selected>Select State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and
                                Diu</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Ladakh">Ladakh</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                        </select>
                        <span id="stateHelp" class="text-xs text-red-500"></span>
                    </div>

                    <!-- City -->
                    <div class="mb-4">
                        <label for="city" class="block text-sm font-medium text-gray-700">City <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="city" name="city"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 form-input"
                            placeholder="Enter your city" required>
                        <span id="cityHelp" class="text-xs text-red-500"></span>
                    </div>

                    <!-- Pin Code -->
                    <div class="mb-4">
                        <label for="pin_code" class="block text-sm font-medium text-gray-700">Pin Code <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="pin_code" name="pin_code"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 form-input"
                            placeholder="Enter Pin Code" required>
                        <span id="pin_codeHelp" class="text-xs text-red-500"></span>
                    </div>

                    <!-- Color -->
                    <div class="mb-4">
                        <label for="color" class="block text-sm font-medium text-gray-700">Select Color <span
                                class="text-red-600">*</span></label>
                        <select id="color" name="color"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 form-input"
                            required>
                            <option value="black" selected>Black</option>
                            <option value="brown">Brown</option>
                        </select>
                        <span id="colorHelp" class="text-xs text-red-500"></span>
                    </div>

                    <!-- Product -->
                    <div class="mb-4">
                        <p class="text-sm font-medium text-gray-700">FruitGlow Hair Color (Ammonia Free)</p>
                        <p class="text-lg font-bold text-gray-900">Rs. 599.00</p>
                    </div>

                    <!-- Confirm Order Button -->
                    <div class="mb-4">
                        <button type="submit"
                            class="w-full py-2 px-4 bg-black text-white font-semibold rounded-md hover:bg-black focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Confirm Order - Rs. 599.00
                        </button>
                    </div>
                    <!-- Processing Spinner (Initially hidden) -->
                    <div id="processing" class="hidden text-center">
                        <p class="text-gray-600">Processing your order...</p>
                        <div
                            class="spinner-border animate-spin border-4 border-t-4 border-gray-900 rounded-full w-8 h-8 mx-auto">
                        </div>
                    </div>
                </form>


                <!-- Include jQuery -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <script>
                    $(document).ready(function() {
                        // Handle form submission with AJAX
                        $('#shippingForm').submit(function(e) {
                            e.preventDefault(); // Prevent the default form submission

                            // Clear previous error messages and styles
                            $('.text-red-500').text('');
                            $('.form-input').removeClass('border-red-500');

                            // Show the processing spinner
                            $('#processing').removeClass('hidden'); // Show processing spinner

                            // Get form data
                            var formData = $(this).serialize();

                            // Send the data to the server
                            $.ajax({
                                url: $(this).attr('action'), // The URL to send the request to
                                type: 'POST',
                                data: formData,
                                success: function(response) {
                                    if (response.status === 'success') {
                                        // Redirect to thank you page
                                        window.location.href = response.redirect_url;
                                    }
                                },
                                error: function(xhr) {
                                    // Hide processing spinner
                                    $('#processing').addClass('hidden');

                                    // Display validation errors
                                    var errors = xhr.responseJSON.errors;
                                    if (errors) {
                                        $.each(errors, function(key, value) {
                                            // Display error messages
                                            $('#' + key).addClass(
                                                'border-red-500'); // Add red border to the field
                                            $('#' + key).next('.text-red-500').text(value[
                                                0]); // Display the error message
                                        });
                                    }
                                }
                            });
                        });
                    });
                </script>

                <style>
                    .spinner-border {
                        border-top-color: transparent;
                        animation: spin 1s linear infinite;
                    }

                    @keyframes spin {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }
                </style>

            </div>


            <!-- Modal Icon Image -->
            <div class="mt-6">
                <img src="{{ asset('asset/img/pop.webp') }}" loading="lazy" alt="Order Confirmation"
                    class="rounded-lg shadow-xl w-full">
            </div>
        </div>
    </div>


    <section class="bg-gray-100 py-10">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-black mb-6">Important Links</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                <!-- Link 1 -->
                <a href="{{ route('refund') }}"
                    class="flex items-center space-x-4 p-4 bg-white shadow-md rounded-lg hover:bg-gray-200 transition">
                    <div class="p-3 bg-blue-100 text-blue-600 rounded-full">
                        🔗
                    </div>
                    <span class="text-lg font-medium text-gray-800">Refund Policy</span>
                </a>

                <!-- Link 2 -->
                <a href="{{ route('term_condition') }}"
                    class="flex items-center space-x-4 p-4 bg-white shadow-md rounded-lg hover:bg-gray-200 transition">
                    <div class="p-3 bg-green-100 text-green-600 rounded-full">
                        📄
                    </div>
                    <span class="text-lg font-medium text-gray-800">Terms & Conditions</span>
                </a>

                <!-- Link 3 -->
                <a href="{{ route('privacy') }}"
                    class="flex items-center space-x-4 p-4 bg-white shadow-md rounded-lg hover:bg-gray-200 transition">
                    <div class="p-3 bg-red-100 text-red-600 rounded-full">
                        🔍
                    </div>
                    <span class="text-lg font-medium text-gray-800">Privacy Policy</span>
                </a>

                <!-- Link 4 -->
                <a href="{{ route('shipping') }}"
                    class="flex items-center space-x-4 p-4 bg-white shadow-md rounded-lg hover:bg-gray-200 transition">
                    <div class="p-3 bg-yellow-100 text-yellow-600 rounded-full">
                        📢
                    </div>
                    <span class="text-lg font-medium text-gray-800">Shipping Policy</span>
                </a>

                <!-- Link 5 -->
                {{-- <a href="{{route('registration')}}" class="flex items-center space-x-4 p-4 bg-white shadow-md rounded-lg hover:bg-gray-200 transition">
                    <div class="p-3 bg-purple-100 text-purple-600 rounded-full">
                        📧
                    </div>
                    <span class="text-lg font-medium text-gray-800">Contact Support</span>
                </a>
     --}}
                <!-- Link 6 -->
                <a href="{{ route('return') }}"
                    class="flex items-center space-x-4 p-4 bg-white shadow-md rounded-lg hover:bg-gray-200 transition">
                    <div class="p-3 bg-indigo-100 text-indigo-600 rounded-full">
                        💼
                    </div>
                    <span class="text-lg font-medium text-gray-800">Return Policy</span>
                </a>

            </div>
        </div>
    </section>



    <script>
        // Open modal
        function openModal() {
            document.getElementById("orderModal").classList.remove("hidden");
        }

        // Close modal
        function closeModal() {
            document.getElementById("orderModal").classList.add("hidden");
        }
    </script>

@endsection
