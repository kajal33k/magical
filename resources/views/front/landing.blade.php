@include('components.topbar')
@extends('components.main')

@section('content')
    <style>
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>


    <section class="container mx-auto p-6 sticky">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
            <!-- Left Section: Product Images -->
            <div class="relative space-y-4 lg:top-6">
                <!-- Main Slider -->
                <div class="overflow-hidden">
                    <div id="slider" class="flex transition-transform duration-500">
                        <img src="{{ asset('asset/img/one.jpg') }}" alt="Product Image"
                            class="w-full h-64 lg:h-96 object-cover flex-shrink-0 thumbnail">
                        <img src="{{ asset('asset/img/two.jpg') }}" alt="Product Image"
                            class="w-full h-64 lg:h-96 object-cover flex-shrink-0 thumbnail">
                        <img src="{{ asset('asset/img/three.jpg') }}" alt="Product Image"
                            class="w-full h-64 lg:h-96 object-cover flex-shrink-0 thumbnail">
                        <img src="{{ asset('asset/img/four.jpg') }}" alt="Product Image"
                            class="w-full h-64 lg:h-96 object-cover flex-shrink-0 thumbnail">
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button id="prev"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full">&#8249;</button>
                <button id="next"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full">&#8250;</button>

                <!-- Thumbnails -->
                <div class="flex justify-center space-x-4 mt-4">
                    <img data-slide="0" src="{{ asset('asset/img/one.jpg') }}" alt="Thumbnail"
                        class="w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 ">
                    <img data-slide="1" src="{{ asset('asset/img/two.jpg') }}" alt="Thumbnail"
                        class="w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500">
                    <img data-slide="2" src="{{ asset('asset/img/three.jpg') }}" alt="Thumbnail"
                        class="w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500">
                    <img data-slide="3" src="{{ asset('asset/img/four.jpg') }}" alt="Thumbnail"
                        class="w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500">
                </div>

                {{-- testimonial --}}

            </div>

            <script>
                const slider = document.getElementById('slider');
                const prevButton = document.getElementById('prev');
                const nextButton = document.getElementById('next');
                const thumbnails = document.querySelectorAll('[data-slide]');

                let currentIndex = 0;

                const updateSlider = () => {
                    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
                    thumbnails.forEach((thumb, index) => {
                        thumb.classList.toggle('border-blue-500', index === currentIndex);
                    });
                };

                nextButton.addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % thumbnails.length;
                    updateSlider();
                });

                prevButton.addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
                    updateSlider();
                });

                thumbnails.forEach(thumb => {
                    thumb.addEventListener('click', () => {
                        currentIndex = parseInt(thumb.getAttribute('data-slide'));
                        updateSlider();
                    });
                });

                // Initialize the slider
                updateSlider();
            </script>



            <!-- Right Section: Product Details -->
            <div class="bg-white rounded-lg p-6 space-y-6 overflow-y-auto hide-scrollbar lg:ml-0 max-h-screen">
                <!-- Product Information -->
                <div class="text-center space-y-4">
                    <h1 class="text-3xl font-bold">Black Hair Shampoo (Ammonia Free) | Buy 1 Get 1 Free</h1>
                    <div class="flex justify-center items-center space-x-1">
                        <!-- Star Ratings -->
                        @for ($i = 0; $i < 5; $i++)
                            <span class="text-yellow-400 text-xl">&#9733;</span>
                        @endfor
                    </div>
                    <p class="text-gray-800 text-lg font-semibold">( 50 Thousand Positive Reviews)</p>
                    <p class="text-red-600 text-xl font-bold">Rs. 599.00</p>

                    <!-- Call to Action -->
                    {{-- <div class="bg-gradient-to-r from-gray-800 via-black to-gray-900 p-6 rounded-xl shadow-lg flex items-center justify-center space-x-6 transform hover:scale-105 transition-transform duration-300">
                        <div id="timer" class="text-5xl font-mono text-yellow-400 animate-pulse">
                          30:00
                        </div>
                        <p class="text-yellow-300 text-xl font-semibold">
                          Remaining
                        </p>
                    </div> --}}

                    <div id="countdown"
                        class="bg-amber-50 p-6 rounded-xl shadow-md flex items-center justify-center space-x-8 mb-4">
                        <div class="flex flex-col items-center">
                            <span id="hours" class="text-3xl font-bold text-amber-600">00</span>
                            <span class="text-sm font-medium text-amber-500">Hours</span>
                        </div>
                        <div class="w-px bg-amber-300 h-8"></div>
                        <div class="flex flex-col items-center">
                            <span id="minutes" class="text-3xl font-bold text-amber-600">00</span>
                            <span class="text-sm font-medium text-amber-500">Minutes</span>
                        </div>
                        <div class="w-px bg-amber-300 h-8"></div>
                        <div class="flex flex-col items-center">
                            <span id="seconds" class="text-3xl font-bold text-amber-600">00</span>
                            <span class="text-sm font-medium text-amber-500">Seconds</span>
                        </div>
                    </div>

                    <script>
                        // Set the target time (adjust as needed)
                        const targetDate = new Date();
                        targetDate.setHours(targetDate.getHours() + 00); // Add 23 hours
                        targetDate.setMinutes(targetDate.getMinutes() + 30); // Add 58 minutes
                        targetDate.setSeconds(targetDate.getSeconds() + 59); // Add 16 seconds

                        // Timer Update Function
                        function updateTimer() {
                            const now = new Date();
                            const remainingTime = targetDate - now;

                            if (remainingTime > 0) {
                                const hours = Math.floor((remainingTime / (1000 * 60 * 60)) % 24);
                                const minutes = Math.floor((remainingTime / (1000 * 60)) % 60);
                                const seconds = Math.floor((remainingTime / 1000) % 60);

                                // Update the DOM
                                document.getElementById('hours').textContent = String(hours).padStart(2, '0');
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
                    <div class="flex justify-center mt-8">
                        <button id="orderBtn"
                            class="bg-black text-white py-1 px-8 rounded-lg hover:bg-gray-800 animate-bounce hidden md:block">
                            <img src="{{ asset('asset/img/order.jpg') }}" alt="" class="h-20 w-full">
                        </button>
                    </div>
                    {{-- mobile menu --}}
                    <div class="fixed bottom-0 left-0 w-full bg-white shadow-lg z-50 md:hidden block">
                        <div class="max-w-md mx-auto p-4">
                            <button class="w-full bg-black text-white py-0 rounded-md text-center">
                                <img src="{{ asset('asset/img/order.jpg') }}" alt="" class="h-16 w-full">
                            </button>
                        </div>
                    </div>

                    <p class="text-sm text-gray-500">✨ Apply 50% Discount Code ✨</p>
                    <div class="flex justify-center">
                        <img src="{{ asset('asset/img/FREESHIPPIng.avif') }}" alt="">
                    </div>
                </div>


                {{-- POP UP --}}


                <!-- Modal Popup -->
                <div id="orderModal"
                    class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden overflow-y-auto hide-scrollbar lg:ml-0 max-h-screen"
                    role="dialog" aria-labelledby="orderModalTitle" aria-modal="true">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg max-h-[500px] overflow-auto">
                        <!-- Close Icon -->
                        <button id="closeModal"
                            class="absolute top-3 right-3 text-green-500 hover:text-green-600 focus:outline-none"
                            aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <!-- Modal Title -->
                        <h2 id="orderModalTitle" class="text-2xl font-bold mb-4">
                            Complete Your Order
                        </h2>

                        <!-- Order Details -->
                        <div class="space-y-4 mb-6 ">
                            <p class="text-lg font-medium">
                                BLOSDREAM 3 in 1 Black Hair Shampoo (Ammonia Free) | Buy 1 Get 1 Free
                            </p>
                            <p class="text-gray-600">
                                ⭐️⭐️⭐️⭐️⭐️ (1.4 Million Positive Reviews)
                            </p>
                            <p class="text-xl font-bold text-red-600">Rs. 599.00</p>
                            <p class="font-semibold">Subtotal: Rs. 599.00</p>
                            <p class="font-semibold">Shipping: Free</p>
                            <p class="font-semibold">Total: Rs. 599.00</p>
                        </div>

                        <!-- Shipping Address Form -->
                        <form id="shippingForm" class="space-y-4 " novalidate>
                            <!-- Full Name -->
                            <div>
                                <label for="fullName" class="block font-semibold">
                                    Full Name <span class="text-red-600">*</span>
                                </label>
                                <input type="text" id="fullName" name="fullName" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label for="phone" class="block font-semibold">
                                    Phone Number <span class="text-red-600">*</span>
                                </label>
                                <input type="text" id="phone" name="phone" pattern="\d{10}" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                            </div>

                            <!-- Address -->
                            <div>
                                <label for="address" class="block font-semibold">
                                    House Name, Street Name <span class="text-red-600">*</span>
                                </label>
                                <input type="text" id="address" name="address" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                            </div>

                            <!-- Landmark -->
                            <div>
                                <label for="landmark" class="block font-semibold">
                                    Area Name, Landmark, Alternative Number
                                </label>
                                <input type="text" id="landmark" name="landmark"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                            </div>

                            <!-- City -->
                            <div>
                                <label for="city" class="block font-semibold">
                                    City <span class="text-red-600">*</span>
                                </label>
                                <input type="text" id="city" name="city" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                            </div>

                            <!-- Pincode -->
                            <div>
                                <label for="pincode" class="block font-semibold">
                                    Pincode <span class="text-red-600">*</span>
                                </label>
                                <input type="text" id="pincode" name="pincode" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                            </div>

                            <!-- State -->
                            <div>
                                <label for="state" class="block font-semibold">
                                    State <span class="text-red-600">*</span>
                                </label>
                                <input type="text" id="state" name="state" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                            </div>

                            <!-- Complete Order Button -->
                            <button type="submit"
                                class="w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-700 focus:outline-none">
                                Complete Order - Rs. 599.00
                            </button>
                        </form>

                        {{-- icon img --}}
                        <div>
                            <img src="{{ asset('asset/img/pop.webp') }}" alt="">
                        </div>
                        <!-- Close Button -->
                        {{-- <button id="closeModal" class="mt-6  text-sm text-gray-500 hover:text-gray-700 focus:outline-none"
                            aria-label="Close">
                            Close
                        </button> --}}
                    </div>
                </div>

                <script>
                    // Get references to elements
                    const orderBtn = document.getElementById("orderBtn");
                    const orderModal = document.getElementById("orderModal");
                    const closeModal = document.getElementById("closeModal");
                    const shippingForm = document.getElementById("shippingForm");

                    // Show the modal when Order Now button is clicked
                    orderBtn.addEventListener("click", () => {
                        orderModal.classList.remove("hidden");
                    });

                    // Close the modal when Close button is clicked
                    closeModal.addEventListener("click", () => {
                        orderModal.classList.add("hidden");
                    });

                    // Optionally, submit the form using JavaScript (can add an AJAX request here)
                    shippingForm.addEventListener("submit", (e) => {
                        e.preventDefault(); // Prevent form submission
                        alert("Order Completed Successfully!"); // Placeholder action
                        orderModal.classList.add("hidden"); // Hide modal after form submission
                    });
                </script>


                <!-- Highlights -->
                {{-- <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                    <div class="space-y-2">
                        <img src="{{ asset('asset/img/SLIDE2.png') }}" alt="Free Shipping" class="w-12 h-12 mx-auto">
                        <p class="text-sm text-gray-700 font-semibold">Free Shipping</p>
                    </div>
                    <div class="space-y-2">
                        <img src="{{ asset('asset/img/SLIDE2.png') }}" alt="Cash on Delivery" class="w-12 h-12 mx-auto">
                        <p class="text-sm text-gray-700 font-semibold">Cash on Delivery</p>
                    </div>
                    <div class="space-y-2">
                        <img src="{{ asset('asset/img/SLIDE2.png') }}" alt="Buy 1 Get 1 Free" class="w-12 h-12 mx-auto">
                        <p class="text-sm text-gray-700 font-semibold">Buy 1 Get 1 Free</p>
                    </div>
                    <div class="space-y-2">
                        <img src="{{ asset('asset/img/SLIDE2.png') }}" alt="Limited Time Offer"
                            class="w-12 h-12 mx-auto">
                        <p class="text-sm text-gray-700 font-semibold">Limited Time Only</p>
                    </div>
                </div> --}}

                <!-- Offers Section -->
                <div class="text-center">
                    <p class="text-pink-600 font-bold">💖 TODAY OFFER - LIMITED TIME ONLY 💖</p>
                    <ul class="list-disc px-6 text-gray-700 text-left space-y-2">
                        <li>50% OFF TODAY 💝</li>
                        <li>BUY 1 GET 1 FREE 💝</li>
                        <li>FREE SHIPPING 💝</li>
                        <li>CASH ON DELIVERY 💝💝💝💝</li>
                        <li>BLOSDREAM Black Hair Shampoo 3 in 1</li>
                        <li>TODAY OFFER ONLY 599</li>
                    </ul>
                </div>

                <!-- Warning Section -->
                <div>
                    <h2 class="text-xl font-bold text-center">Attention! Poor quality hair dye can cause multiple
                        conditions
                    </h2>
                    {{-- <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-4">
                        <div class="space-y-2">
                            <img src="{{ asset('asset/img/demage hair.avif') }}" alt="Damaged Hair" class="rounded-lg shadow">
                            <p class="text-center text-sm">Damaged hair</p>
                        </div>
                        <div class="space-y-2">
                            <img src="{{ asset('asset/img/harms hair2.avif') }}" alt="Harms Scalp" class="rounded-lg shadow">
                            <p class="text-center text-sm">Harms to scalp</p>
                        </div>
                        <div class="space-y-2">
                            <img src="{{ asset('asset/img/hair3.avif') }}" alt="Hair Loss" class="rounded-lg shadow">
                            <p class="text-center text-sm">Hair loss</p>
                        </div>
                        <div class="space-y-2">
                            <img src="{{ asset('asset/img/hair4.avif') }}" alt="Harmful to Health"
                                class="rounded-lg shadow">
                            <p class="text-center text-sm">Harmful to health</p>
                        </div>
                    </div> --}}
                    <div class=" flex justify-center">
                        <img src="{{ asset('asset/img/hair3.avif') }}"
                            alt="How to Use Step 1" class="rounded-lg shadow">
    
                    </div>
                </div>

                <!-- How to Use Section -->
                <div class=" flex justify-center">
                    <img src="https://cdn.shopnova.top/image/289c28790d6dc6998b0355e98e6b20373a2773f7.gif"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>

                {{-- ugb --}}
                <div class=" flex justify-center">
                    <img src="{{ asset('asset/img/52109f4bae54f48f272aa6ec7695f20249e04bdd.avif') }}"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>

                <!-- How to Use Section -->
                <div class=" flex justify-center">
                    <img src="https://cdn.shopnova.top/image/8ac44b4dca6bf551f69d7912294355c6e468894e.gif"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>

                {{-- ugb --}}
                <div class=" flex justify-center">
                    <img src="{{ asset('asset/img/hair5.avif') }}"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>
                <!-- How to Use Section -->
                <div class=" flex justify-center">
                    <img src="https://cdn.shopnova.top/image/b7a11538cdceb9d4f0d2ee0648f6c0a67bcbc9c6.gif"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>

                {{-- ugb --}}
                <div class=" flex justify-center">
                    <img src="{{ asset('asset/img/hair6.avif') }}"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>
                <div>
                    3-in-1 Magic: Say goodbye to multiple products! BLOSDREAM combines shampooing, conditioning, and hair
                    dyeing in one easy step.
                </div>

                {{-- ugb --}}
                <div class=" flex justify-center">
                    <img src="{{ asset('asset/img/hair7.avif') }}"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>
                <!-- How to Use Section -->
                <div class=" flex justify-center">
                    <img src="https://cdn.shopnova.top/image/e0640f232d45b74aaa16b295cfc7dd1f7f7de0aa.gif"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>



                {{-- ugb --}}
                <div class=" flex justify-center">
                    <img src="{{ asset('asset/img/hair8.avif') }}"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>
                <!-- How to Use Section -->
                <div class=" flex justify-center">
                    <img src="https://cdn.shopnova.top/image/5ec664374db2eb54f3f4131894813aa284527119.gif"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>


                {{-- ugb --}}
                <div class=" flex justify-center">
                    <img src="{{ asset('asset/img/hair9.avif') }}"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>
                <!-- How to Use Section -->
                <div class=" flex justify-center">
                    <img src="http://cdn.shopnova.top/image/a1f2433281e01e8edf09a816e44553181f90080f.gif"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>

                {{-- ujg --}}
                <div class=" flex justify-center">
                    <img src="{{ asset('asset/img/hair10.avif') }}"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>
                {{-- 6fr8 --}}
                <div class=" flex justify-center">
                    <img src="{{ asset('asset/img/hair11.avif') }}"
                        alt="How to Use Step 1" class="rounded-lg shadow">

                </div>
                {{-- last img --}}
                <div class=" flex justify-center">
                    <img src="{{ asset('asset/img/steps.avif') }}" alt="How to Use Step 1" class="rounded-lg shadow">

                </div>

            </div>
        </div>
    </section>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const thumbnails = document.querySelectorAll(".thumbnail");
            const popup = document.getElementById("image-popup");
            const popupImage = document.getElementById("popup-image");
            const closePopup = document.getElementById("close-popup");
            const mainImage = document.getElementById("main-image");

            // Add click event to thumbnails
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener("click", function() {
                    popupImage.src = this.src; // Set the popup image source
                    popup.classList.remove("hidden"); // Show the popup
                });
            });

            // Close popup
            closePopup.addEventListener("click", function() {
                popup.classList.add("hidden");
            });

            // Change main image on desktop click
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener("click", function() {
                    if (window.innerWidth >= 1024) {
                        mainImage.src = this.src; // Update main image on desktop
                    }
                });
            });
        });
    </script>

    <!--HTML CODE-->
    <div class="w-full relative ">
        <div class="swiper multiple-slide-carousel swiper-container relative px-44 overflow-hidden">
            <div class="swiper-wrapper mb-16 max-w-5xl">
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-lg p-6 max-w-full mx-auto">
                        <img src="{{asset('asset/img/test.jpg')}}" alt="Shampoo Bottle" class="w-full h-[500px] object-cover rounded-lg mb-4">
                        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Shampoo Brand</h3>
                        <p class="text-gray-600 text-sm mb-4">This shampoo works wonders for your hair, leaving it soft and shiny. Great for all hair types!</p>
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-500 text-xl">⭐⭐⭐⭐⭐</span>
                            <span class="text-gray-600 text-sm">(120 reviews)</span>
                        </div>
                    </div>
                    
                </div>
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-lg p-6 max-w-full mx-auto">
                        <img src="{{asset('asset/img/test2.jpg')}}" alt="Shampoo Bottle" class="w-full h-[500px] object-cover rounded-lg mb-4">
                        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Shampoo Brand</h3>
                        <p class="text-gray-600 text-sm mb-4">This shampoo works wonders for your hair, leaving it soft and shiny. Great for all hair types!</p>
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-500 text-xl">⭐⭐⭐⭐⭐</span>
                            <span class="text-gray-600 text-sm">(120 reviews)</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-lg p-6 max-w-full mx-auto">
                        <img src="{{asset('asset/img/test3.jpg')}}" alt="Shampoo Bottle" class="w-full h-[500px] object-cover rounded-lg mb-4">
                        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Shampoo Brand</h3>
                        <p class="text-gray-600 text-sm mb-4">This shampoo works wonders for your hair, leaving it soft and shiny. Great for all hair types!</p>
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-500 text-xl">⭐⭐⭐⭐⭐</span>
                            <span class="text-gray-600 text-sm">(120 reviews)</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-lg p-6 max-w-full mx-auto">
                        <img src="{{asset('asset/img/test4.jpg')}}" alt="Shampoo Bottle" class="w-full h-[500px]  object-cover rounded-lg mb-4">
                        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Shampoo Brand</h3>
                        <p class="text-gray-600 text-sm mb-4">This shampoo works wonders for your hair, leaving it soft and shiny. Great for all hair types!</p>
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-500 text-xl">⭐⭐⭐⭐⭐</span>
                            <span class="text-gray-600 text-sm">(120 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                <button id="slider-button-left"
                    class="swiper-button-prev group !p-2 flex justify-center items-center  !w-12 !h-12 transition-all duration-500   !-translate-x-16"
                    data-carousel-prev>
                    {{-- <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg> --}}
                </button>
                <button id="slider-button-right"
                    class="swiper-button-next group !p-2  flex justify-center items-center  !w-12 !h-12 transition-all duration-500 !translate-x-16"
                    data-carousel-next>
                    {{-- <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg> --}}
                </button>
            </div>
    </div>
        <style>
            /* CSS Code */
            .swiper-wrapper {
                width: 100%;
                height: max-content !important;
                padding-bottom: 64px !important;
                -webkit-transition-timing-function: linear !important;
                transition-timing-function: linear !important;
                position: relative;
            }

            .swiper-pagination-bullet {
                background: #4f46e5;
            }
        </style>

        <!--JAVASCRIPT CODE-->
        <script>
            var swiper = new Swiper(".multiple-slide-carousel", {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    nextEl: ".multiple-slide-carousel .swiper-button-next",
                    prevEl: ".multiple-slide-carousel .swiper-button-prev",
                },
                breakpoints: {
                    1920: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1028: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    990: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                }
            });
        </script>
    @endsection
