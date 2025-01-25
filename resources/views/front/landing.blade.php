@extends('components.main')
@section('content')
    @include('components.topbar')
    <style>
        .container {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fill, minmax(0, 600px));
            /* Max width 500px per item */
            align-items: flex-start;
        }


        @media (min-width: 1024px) and (max-width: 1440px) {
            .left {
                position: sticky;
                top: 0;
            }
        }
    </style>
    <div class="container grid grid-cols-1 lg:grid-cols-1 gap-2 ">


        <div class="left p-4 w-full">
            <!-- Main Slider -->
            <div class="overflow-hidden relative">
                <div id="slider" class="flex transition-transform duration-500">
                    <img src="{{ asset('asset/img/post 04.jpg') }}" alt="Product Image 1"
                        class="w-full h-64 lg:h-full object-cover flex-shrink-0">
                    <img src="{{ asset('asset/img/two.jpg') }}" alt="Product Image 2"
                        class="w-full h-64 lg:h-full object-cover flex-shrink-0">
                    <img src="{{ asset('asset/img/three.jpg') }}" alt="Product Image 3"
                        class="w-full h-64 lg:h-full object-cover flex-shrink-0">
                    <img src="{{ asset('asset/img/four.jpg') }}" alt="Product Image 4"
                        class="w-full h-64 lg:h-full object-cover flex-shrink-0">
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
            <div class="flex justify-center md:space-x-4 mt-4">
                <img data-slide="0" src="{{ asset('asset/img/post 04.jpg') }}" alt="Thumbnail 1"
                    class="w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <img data-slide="1" src="{{ asset('asset/img/two.jpg') }}" alt="Thumbnail 2"
                    class="w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <img data-slide="2" src="{{ asset('asset/img/three.jpg') }}" alt="Thumbnail 3"
                    class="w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <img data-slide="3" src="{{ asset('asset/img/four.jpg') }}" alt="Thumbnail 4"
                    class="w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
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

                function updateSlider() {
                    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
                }

                // Navigate to previous slide
                prevButton.addEventListener("click", () => {
                    currentIndex = (currentIndex - 1 + slideCount) % slideCount;
                    updateSlider();
                });

                // Navigate to next slide
                nextButton.addEventListener("click", () => {
                    currentIndex = (currentIndex + 1) % slideCount;
                    updateSlider();
                });

                // Thumbnail click event
                thumbnails.forEach((thumbnail) => {
                    thumbnail.addEventListener("click", (e) => {
                        currentIndex = parseInt(thumbnail.dataset.slide);
                        updateSlider();
                    });
                });

                // Initialize
                updateSlider();
            });
        </script>


        <div class="right bg-white p-2 lg:pl-32 w-full">
            {{-- product --}}
            <div class="text-center space-y-4">
                <h1 class="text-3xl font-bold">Magical Black Hair shampoo (Ammonia Free) Hurry up 50% of offer
                    Buy 1 Get 1 free..</h1>
                <div class="flex justify-center items-center space-x-1">
                    <!-- Star Ratings -->
                    @for ($i = 0; $i < 5; $i++)
                        <span class="text-yellow-400 text-xl" aria-hidden="true">&#9733;</span>
                    @endfor
                </div>
                <p class="text-gray-800 text-lg font-semibold">(50 Thousand Positive Reviews)</p>
                <p class="text-red-600 text-xl font-bold">Rs. 599.00</p>

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
                            Order Now
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

                <p class="text-sm text-black font-bold">Limited Time Offer</p>
                <p class="text-sm text-gray-500">✨ Apply 50% Discount Code ✨</p>
                <div class="flex justify-center">
                    <img src="{{ asset('asset/img/FREESHIPPIng.avif') }}" alt="Free Shipping">
                </div>
            </div>

            <!-- Offers Section -->
            <div class="text-center">
                <p class="text-pink-600 font-bold text-lg">💖 TODAY'S OFFER - LIMITED TIME ONLY 💖</p>
                <ul class="list-disc px-6 text-gray-700 text-left space-y-2 mt-4">
                    <li><span class="font-semibold text-pink-500">50% OFF TODAY</span> 💝</li>
                    <li><span class="font-semibold text-pink-500">BUY 1 GET 1 FREE</span> 💝</li>
                    <li><span class="font-semibold text-pink-500">FREE SHIPPING</span> 💝</li>
                    <li><span class="font-semibold text-pink-500">CASH ON DELIVERY</span> 💝💝💝💝</li>
                    <li>BLOSDREAM Black Hair Shampoo 3 in 1</li>
                    <li><span class="font-semibold text-pink-500">TODAY ONLY: Rs. 599</span></li>
                </ul>
            </div>

            <!-- Warning Section -->
            <div class="mt-8">
                <h2 class="text-xl font-bold text-center text-gray-800">
                    Attention! Poor quality hair dye can cause multiple conditions
                </h2>
                <div class="mt-6 flex justify-center">
                    <img src="{{ asset('asset/img/hair3.avif') }}" alt="Hair Damage Warning"
                        class="rounded-lg shadow-md max-w-xs">
                </div>
                <p class="text-center text-sm text-gray-600 mt-4">
                    Choose high-quality products to avoid damage to your hair and scalp.
                </p>
            </div>

            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="https://cdn.shopnova.top/image/289c28790d6dc6998b0355e98e6b20373a2773f7.gif"
                    alt="How to Use Step 1" class="rounded-lg shadow">

            </div>

            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/52109f4bae54f48f272aa6ec7695f20249e04bdd.avif') }}" alt="How to Use Step 1"
                    class="rounded-lg shadow">

            </div>

            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="https://cdn.shopnova.top/image/8ac44b4dca6bf551f69d7912294355c6e468894e.gif"
                    alt="How to Use Step 1" class="rounded-lg shadow">

            </div>

            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/hair5.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

            </div>
            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="https://cdn.shopnova.top/image/b7a11538cdceb9d4f0d2ee0648f6c0a67bcbc9c6.gif"
                    alt="How to Use Step 1" class="rounded-lg shadow">

            </div>

            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/hair6.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

            </div>
            <div>
                3-in-1 Magic: Say goodbye to multiple products! BLOSDREAM combines shampooing, conditioning, and hair
                dyeing in one easy step.
            </div>

            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/hair7.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

            </div>
            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="https://cdn.shopnova.top/image/e0640f232d45b74aaa16b295cfc7dd1f7f7de0aa.gif"
                    alt="How to Use Step 1" class="rounded-lg shadow">

            </div>



            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/hair8.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

            </div>
            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="https://cdn.shopnova.top/image/5ec664374db2eb54f3f4131894813aa284527119.gif"
                    alt="How to Use Step 1" class="rounded-lg shadow">

            </div>


            {{-- ugb --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/hair9.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

            </div>
            <!-- How to Use Section -->
            <div class=" flex justify-center">
                <img src="http://cdn.shopnova.top/image/a1f2433281e01e8edf09a816e44553181f90080f.gif"
                    alt="How to Use Step 1" class="rounded-lg shadow">

            </div>

            {{-- ujg --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/hair10.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

            </div>
            {{-- 6fr8 --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/hair11.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

            </div>
            {{-- last img --}}
            <div class=" flex justify-center">
                <img src="{{ asset('asset/img/steps.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

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
                    <img src="{{ asset('asset/img/testimonial1.jpg') }}" alt="John Doe's Testimonial"
                        class="rounded-lg w-full h-auto object-cover">
                </div>
                <!-- Text Content -->
                <div class="w-full md:w-2/3 text-center md:text-left">
                    <h3 class="text-lg font-semibold text-gray-900">John Doe</h3>
                    <p class="text-gray-500 text-sm">January 24, 2025</p>
                    <p class="mt-2 text-gray-700 italic">
                        Magical Hair Colour Shampu exceeded my expectations! The vibrant shade I chose lasted for weeks, and my hair felt soft and nourished. It's easy to use and has a pleasant scent. Highly recommended!
                    </p>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-6">
                <!-- Image -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('asset/img/testimonial2.jpg') }}" alt="Jane Doe's Testimonial"
                        class="rounded-lg w-full h-auto object-cover">
                </div>
                <!-- Text Content -->
                <div class="w-full md:w-2/3 text-center md:text-right">
                    <h3 class="text-lg font-semibold text-gray-900">Jane Doe</h3>
                    <p class="text-gray-500 text-sm">January 24, 2025</p>
                    <p class="mt-2 text-gray-700 italic">
                        "This product is incredible! It has transformed the way I work, and I can't imagine going back to
                        anything else."I love how Magical Hair Colour Shampu transformed my hair. The colour was stunning, and my hair felt silky smooth. It's a game-changer for home hair colouring. I'm thrilled with the results!
                    </p>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="flex flex-col md:flex-row items-center gap-6">
                <!-- Image -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('asset/img/testimonial3.jpg') }}" alt="Sam Smith's Testimonial"
                        class="rounded-lg w-full h-auto object-cover">
                </div>
                <!-- Text Content -->
                <div class="w-full md:w-2/3 text-center md:text-left">
                    <h3 class="text-lg font-semibold text-gray-900">Sam Smith</h3>
                    <p class="text-gray-500 text-sm">January 24, 2025</p>
                    <p class="mt-2 text-gray-700 italic">
                        Magical Hair Colour Shampu is a must-have for anyone looking to switch up their hair colour. It's gentle on the hair and delivers vibrant, long-lasting results. I'm impressed by its quality and ease of use. Absolutely fantastic!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Now Button (Desktop & Mobile) -->
    <div id="orderBtn"
        class="fixed z-50 md:hidden block bottom-0 w-full flex justify-center items-center bg-black text-white font-medium py-2 px-4 transition duration-300 cursor-pointer mt-8"
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
                Order Now
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
                <form id="shippingForm" method="POST" action="#" novalidate>

                    <!-- Full Name -->
                    <div class="mb-4 flex flex-col space-y-2">
                        <label for="full-name" class="text-sm font-medium text-gray-700">Full Name <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="full-name" name="full-name"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter Your Name" required aria-describedby="fullNameHelp">
                        <span id="fullNameHelp" class="text-xs text-red-500 hidden">This field is required</span>
                    </div>

                    <!-- Mobile Number -->
                    <div class="mb-4">
                        <label for="mobile-number" class="block text-sm font-medium text-gray-700">Mobile Number <span
                                class="text-red-600">*</span></label>
                        <input type="tel" id="mobile-number" name="mobile-number"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter Your Mobile Number" required>
                    </div>

                    <!-- House/Village -->
                    <div class="mb-4">
                        <label for="house-village" class="block text-sm font-medium text-gray-700">House/Village <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="house-village" name="house-village"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter your house or village name" required>
                    </div>

                    <!-- Area / Landmark -->
                    <div class="mb-4">
                        <label for="area-landmark" class="block text-sm font-medium text-gray-700">Area / Landmark <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="area-landmark" name="area-landmark"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter area or landmark" required>
                    </div>

                    <!-- State -->
                    <div class="mb-4">
                        <label for="state" class="block text-sm font-medium text-gray-700">State <span
                                class="text-red-600">*</span></label>
                        <select id="state" name="state"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            required>
                            <option value="" disabled selected>Select State</option>
                            <option value="state-1">State 1</option>
                            <option value="state-2">State 2</option>
                        </select>
                    </div>

                    <!-- City -->
                    <div class="mb-4">
                        <label for="city" class="block text-sm font-medium text-gray-700">City <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="city" name="city"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter your city" required>
                    </div>

                    <!-- Pin Code -->
                    <div class="mb-4">
                        <label for="pin-code" class="block text-sm font-medium text-gray-700">Pin Code <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="pin-code" name="pin-code"
                            class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter Pin Code" required>
                    </div>

                    <!-- Product -->
                    <div class="mb-4">
                        <p class="text-sm font-medium text-gray-700">FruitGlow Hair Color (Ammonia Free)</p>
                        <p class="text-lg font-bold text-gray-900">Rs. 599.00</p>
                    </div>

                    <!-- Confirm Order Button -->
                    <div class="mb-4">
                        <button type="submit"
                            class="w-full py-2 px-4 bg-black text-white font-semibold rounded-md hover:bg-black focus:outline-none focus:ring-2 focus:ring-blue-400">Confirm
                            Order - Rs. 599.00</button>
                    </div>
                </form>
            </div>

            <!-- Modal Icon Image -->
            <div class="mt-6">
                <img src="{{ asset('asset/img/pop.webp') }}" alt="Order Confirmation"
                    class="rounded-lg shadow-xl w-full">
            </div>
        </div>
    </div>

    <script>
        // Open modal
        function openModal() {
            document.getElementById("orderModal").classList.remove("hidden");
        }

        // Close modal
        function closeModal() {
            document.getElementById("orderModal").classList.add("hidden");
        }

        // Handle form submission
        const shippingForm = document.getElementById("shippingForm");
        shippingForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Order Completed Successfully!");
            closeModal();
        });
    </script>
@endsection
