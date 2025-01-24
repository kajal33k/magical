@extends('components.main')
@section('content')
@include('components.topbar')
    <!-- Modal Popup -->
    <div id="orderModal"
        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden overflow-y-auto hide-scrollbar lg:ml-0 max-h-screen"
        role="dialog" aria-labelledby="orderModalTitle" aria-modal="true">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg max-h-[500px] overflow-auto">
            <!-- Close Icon -->
            <button id="closeModal" class="absolute top-3 right-3 text-green-500 hover:text-green-600 focus:outline-none"
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

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">


        <div class="left relative bg-white p-4">
            <!-- Main Slider -->
            <div class="overflow-hidden relative">
                <div id="slider" class="flex transition-transform duration-500">
                    <img src="{{ asset('asset/img/one.jpg') }}" alt="Product Image 1"
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
            <div class="flex justify-center space-x-4 mt-4">
                <img data-slide="0" src="{{ asset('asset/img/one.jpg') }}" alt="Thumbnail 1"
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


        <div class="right bg-white p-6 lg:overflow-y-auto hide-scrollbar lg:ml-0 lg:max-h-screen">
            {{-- product --}}
            <div class="text-center space-y-4">
                <h1 class="text-3xl font-bold">Black Hair Shampoo (Ammonia Free) | Buy 1 Get 1 Free</h1>
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
                    targetDate.setMinutes(targetDate.getMinutes() + 30); // Add 30 minutes

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
                        class="bg-black text-white py-1 px-8 rounded-lg hover:bg-gray-800 animate-bounce">
                        <img src="{{ asset('asset/img/order.jpg') }}" alt="Order Now" class="h-20 w-full">
                    </button>
                </div>

                <!-- Mobile Order Button -->
                <div class="fixed bottom-0 left-0 w-full bg-white shadow-lg z-50 md:hidden block">
                    <div class="max-w-md mx-auto p-4">
                        <button id="orderBtn"
                        class="bg-black text-white py-1 px-8 rounded-lg hover:bg-gray-800 ">
                        <img src="{{ asset('asset/img/order.jpg') }}" alt="Order Now" class="h-20 w-full">
                    </button>
                    </div>
                </div>

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
            <h1 class="text-3xl font-bold text-gray-900">Our Customer Reviews</h1>
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
                        "This product is amazing! It exceeded all of my expectations, and I highly recommend it to anyone
                        looking for quality and reliability."
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
                        anything else."
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
                        "I'm blown away by the quality of this product. It truly stands out in every aspect, and I'm so glad
                        I found it."
                    </p>
                </div>
            </div>
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
@endsection
