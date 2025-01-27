@extends('components.main')
@section('content')
    <!-- Carousel Start -->
    <div class="container mx-auto mt-2 px-4 pt-10" id="home">
        <div class="slider overflow-hidden">
            <div class="slides flex">
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE1.jpg') }}" class="w-full lg:w-1/2" alt="Slide 1">
                    <img src="{{ asset('asset/img/SLIDE2.png') }}" class="w-full lg:w-1/2 hidden lg:block" alt="Slide 2">
                </div>
                <!-- Repeat similar blocks for other slides -->
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE2.png') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE3.png') }}" class="w-full lg:w-1/2 hidden lg:block" alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE3.png') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE4.png') }}" class="w-full lg:w-1/2 hidden lg:block" alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE4.png') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE5.png') }}" class="w-full lg:w-1/2 hidden lg:block" alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE5.png') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE6.png') }}" class="w-full lg:w-1/2 hidden lg:block" alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE6.png') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE7.png') }}" class="w-full lg:w-1/2 hidden lg:block" alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE7.png') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE8.png') }}" class="w-full lg:w-1/2 hidden lg:block" alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE8.png') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE9.png') }}" class="w-full lg:w-1/2 hidden lg:block" alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE9.png') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE10.png') }}" class="w-full lg:w-1/2 hidden lg:block" alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE10.png') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE11.jpeg') }}" class="w-full lg:w-1/2 hidden lg:block"
                        alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE11.jpeg') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE12.jpeg') }}" class="w-full lg:w-1/2 hidden lg:block"
                        alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE12.jpeg') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE13.jpeg') }}" class="w-full lg:w-1/2 hidden lg:block"
                        alt="Slide 3">
                </div>

                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE13.jpeg') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE14.jpeg') }}" class="w-full lg:w-1/2 hidden lg:block"
                        alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE14.jpeg') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE15.jpeg') }}" class="w-full lg:w-1/2 hidden lg:block"
                        alt="Slide 3">
                </div>

                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE15.jpeg') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE16.kpeg') }}" class="w-full lg:w-1/2 hidden lg:block"
                        alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE16.jpeg') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE17.jpg') }}" class="w-full lg:w-1/2 hidden lg:block"
                        alt="Slide 3">
                </div>

                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE17.jpg') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE18.jpg') }}" class="w-full lg:w-1/2 hidden lg:block"
                        alt="Slide 3">
                </div>
                <div class="slide flex flex-col lg:flex-row">
                    <img src="{{ asset('asset/img/SLIDE18.jpg') }}" class="w-full lg:w-1/2" alt="Slide 2">
                    <img src="{{ asset('asset/img/SLIDE19.jpg') }}" class="w-full lg:w-1/2 hidden lg:block"
                        alt="Slide 3">
                </div>

                <!-- ...continue for the rest of the slides -->
            </div>
            <div class="prev" onclick="prevSlide()">&#10094;</div>
            <div class="next" onclick="nextSlide()">&#10095;</div>
        </div>
    </div>

    <!-- Carousel End -->
    {{-- buton --}}
    <div class="flex justify-center m-4">
        <a href="https://wa.link/4j3n7n"><button type="button"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-4 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-xl">Buy
                Now</button></a>
    </div>

    {{-- ABOUT US --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-8 lg:mx-8 lg:p-12 p-4" id="about">
        <div class="content">
            <h1 class="text-2xl text-green-800 font-bold mb-4">About Us</h1>
            <p class="font-light text-xl">Welcome to Magical Brands, where beauty meets magic! Our revolutionary product,
                Magical Hair Colour Shampu, transforms your hair care routine. With a unique blend of nourishing shampoo and
                vibrant hair colour, our shampu delivers salon-worthy results in the comfort of your home. Discover our
                gentle yet effective formula that leaves your locks healthy and lustrous. Choose from a wide range of shades
                to express your individuality. Our commitment to quality and safety means you can trust our tested and
                chemical-free product. Unlock the power of self-expression and let your hair become a canvas for your
                dreams. Experience the magic at magicalbrands.info.</p>
        </div>
        <div class="img ">
            <img src="{{ asset('asset/img/about.jpg') }}" alt="" class="object-cover rounded-lg">
        </div>
    </div>
    {{-- brand --}}
    <div>
        <img src="{{ asset('asset/img/magical.png') }}" alt="" class="w-full">
    </div>
    {{-- buton --}}
    <div class="flex justify-center m-4">
        <a href="https://wa.link/4j3n7n"><button type="button"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-4 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-xl">Buy
                Now</button></a>
    </div>

    {{-- heading --}}
    <h1 class="text-center font-bold text-green-800 text-3xl" id="product">Magical Hair Colour Shampoo</h1>

    <div class="container mx-auto px-4 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
            <div class="relative m-4 shadow-xl shadow-gray-500 rounded-xl">
                <img src="{{ asset('asset/img/sampoo1.png') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 1">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/sampoo2.jpg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 2">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset\img\Post_01[1].jpg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 2">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset\img\Post 02.jpg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 2">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset\img\Post 03.jpg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 2">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset\img\post 04 - Copy.jpg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 2">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/sampoo3.png') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 3">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/sampoo4.png') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 4">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/sampoo5.png') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 5">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/sampoo6.png') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 6">
            </div>
        </div>
    </div>

    {{-- heading --}}
    <h1 class="text-center font-bold text-green-800 text-3xl">Magical Hair & Beard Serum</h1>

    <div class="container mx-auto px-4 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/serum1.jpeg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 1">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/serum2.jpeg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 2">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/serum3.jpeg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 3">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/serum4.jpeg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 4">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/serum5.jpeg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 5">
            </div>
            <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
                <img src="{{ asset('asset/img/serum6.jpeg') }}" class="w-full h-full object-cover rounded-2xl"
                    alt="Image 6">
            </div>
        </div>
    </div>



    {{-- video --}}

    {{-- heading --}}
    <h1 class="text-center font-bold text-green-800 text-3xl">Magical Product Videos</h1>
    <div class="container mx-auto px-4 py-10">
        <div class="relative w-full" style="padding-top: 56.25%;">
            <iframe class="absolute top-0 left-0 w-full h-full"
                src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/watch/?v=215493971368436"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
    {{-- buton --}}
    <div class="flex justify-center m-4">
        <a href="https://wa.link/4j3n7n"><button type="button"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-4 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-xl">Buy
                Now</button></a>
    </div>

    {{-- 2nd video --}}

    <div class="container mx-auto px-4 py-10">
        <div class="relative w-full" style="padding-top: 56.25%;">
            <iframe class="absolute top-0 left-0 w-full h-full"
                src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmagicalbrand.in%2Fvideos%2F224599287180713%2F%3Fref%3Dembed_video&show_text=0&width=560"
                style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
    {{-- buton --}}
    <div class="flex justify-center m-4">
        <a href="https://wa.link/4j3n7n"><button type="button"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-4 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-xl">Buy
                Now</button></a>
    </div>

    {{-- feature slider --}}
    {{-- <div class="container mx-auto px-4 py-16">
  <h2 class="text-3xl font-bold text-center text-green-700 mb-12">Our Features</h2>

  <div class="flex flex-wrap justify-center items-center gap-8" id="features-container">
    <!-- Features will be dynamically inserted here -->
  </div>

  <div class="flex justify-center mt-8">
    <button id="prev-btn" class="mx-2 p-2 bg-gray-500 text-white rounded-full">&lt;</button>
    <div id="dots" class="flex items-center">
      <!-- Dots will be dynamically inserted here -->
    </div>
    <button id="next-btn" class="mx-2 p-2 bg-gray-500 text-white rounded-full">&gt;</button>
  </div>
</div> --}}
    <div class="feature relative overflow-hidden">
        <div class="swiper-container" id="featureSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('asset/img/feature1.png') }}" alt="Feature 1" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/img/feature2.png') }}" alt="Feature 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/img/feature3.png') }}" alt="Feature 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/img/feature4.png') }}" alt="Feature 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/img/feature5.png') }}" alt="Feature 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/img/feature6.png') }}" alt="Feature 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/img/feature7.png') }}" alt="Feature 4" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('#featureSlider', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });
        });
    </script>

    <div class="bg-gray-900 p-8">
        <h2 class="text-white text-3xl font-bold mb-6 text-center">What Our Customers Say</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 rounded-lg p-6 shadow-md">
                <p class="text-gray-700 mb-4">Magical Hair Colour Shampu exceeded my expectations! The vibrant shade I
                    chose lasted for weeks, and my hair felt soft and nourished. It's easy to use and has a pleasant scent.
                    Highly recommended!</p>
                <p class="font-semibold">Arti</p>
            </div>

            <div class="bg-gray-100 rounded-lg p-6 shadow-md">
                <p class="text-gray-700 mb-4">I love how Magical Hair Colour Shampu transformed my hair. The colour was
                    stunning, and my hair felt silky smooth. It's a game-changer for home hair colouring. I'm thrilled with
                    the results!</p>
                <p class="font-semibold">Ragani</p>
            </div>

            <div class="bg-gray-100 rounded-lg p-6 shadow-md">
                <p class="text-gray-700 mb-4">Magical Hair Colour Shampu is a must-have for anyone looking to switch up
                    their hair colour. It's gentle on the hair and delivers vibrant, long-lasting results. I'm impressed by
                    its quality and ease of use. Absolutely fantastic!</p>
                <p class="font-semibold">Gudiya</p>
            </div>

            <div class="bg-gray-100 rounded-lg p-6 shadow-md">
                <p class="text-gray-700 mb-4">I can't get enough of Magical Hair Colour Shampu! The shade I chose perfectly
                    matched my desired look, and my hair feels so healthy and shiny. It's definitely my go-to product for
                    vibrant hair colour.</p>
                <p class="font-semibold">Kritika</p>
            </div>
        </div>
    </div>


    {{-- CONTACT US --}}
    <section class="bg-gray-100 py-12" id="contact">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Get in Touch Section -->
                <div class="flex flex-col justify-center bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <h2 class="text-3xl font-bold text-green-900">Get in Touch</h2>
                        <div class="flex-1 h-[1px] ml-4 bg-green-900"></div>
                    </div>
                    <p class="lg:text-lg mb-4">We'd love to hear from you! Whether you have a question about our services
                        or just want to say hello, feel free to reach out.</p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="ri-mail-line text-green-800 text-2xl mr-3"></i>
                            <p class="lg:text-lg ">mmenterprises33@gmail.com</p>
                        </div>
                        <div class="flex items-center">
                            <i class="ri-smartphone-line text-green-800 text-2xl mr-3"></i>
                            <p class="lg:text-lg">+916388337746</p>
                        </div>
                        {{-- <div class="flex items-center">
                            <i class="ri-building-4-line text-green-800 text-2xl mr-3"></i>
                            <p class="lg:text-lg">H NO.M-53-KH NO-669 G/F CHANAKYA PLACE UTTAM NAGAR NEW DELHI 110059</p>
                        </div> --}}
                    </div>
                    {{-- <div class="flex items-center mt-8 mb-4">
                        <h2 class="text-3xl font-bold text-green-900">Find us</h2>
                        <div class="flex-1 h-[1px] ml-4 bg-green-900"></div>
                    </div> --}}
                    <!-- Map -->
                    {{-- <div class="relative w-full h-50" style="padding-bottom: 56.25%;">
                        <iframe class="absolute inset-0 w-full h-full"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27922.969452461188!2d77.69937!3d28.976370000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c65d777dbc689%3A0x9ae636bf73aeb0ac!2zUmFnaHVuYW5kYW4gUHJhc2FkIFNhcnJhZiBKZXdlbGxlcnMg4KSw4KSY4KWB4KSo4KSC4KSm4KSoIOCkquCljeCksOCkuOCkvuCkpiDgpLjgpLDgpY3gpLDgpL7gpKs!5e0!3m2!1sen!2sus!4v1714992234843!5m2!1sen!2sus"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> --}}
                    {{-- icon --}}
                    <div class="flex items-center mb-4 mt-4">
                        <h2 class="text-3xl font-bold text-green-900">Follow us</h2>
                        <div class="flex-1 h-[1px] ml-4 bg-green-900"></div>
                    </div>
                    <div class="flex space-x-4">
                        <div class="rounded-full shadow-md w-12 h-12 flex items-center justify-center hover:bg-gray-200">
                            <a href="https://www.facebook.com"><i
                                    class="ri-facebook-line text-green-800 text-2xl"></i></a>
                        </div>
                        <div class="rounded-full shadow-md w-12 h-12 flex items-center justify-center hover:bg-gray-200">
                            <a href="https://www.instagram.com"><i
                                    class="ri-instagram-line text-green-800 text-2xl"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Contact Form Section -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-3xl font-bold text-green-900 mb-4">Contact Form</h2>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{ route('appointment.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-4 mb-4">
                            <div>
                                <label for="name" class="block text-sm font-semibold mb-2">Full Name <span
                                        class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name"
                                    class="form-input w-full p-3 bg-gray-300" required>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold mb-2">Phone number</label>
                                <input type="text" id="number" name="number"
                                    class="form-input w-full p-3 bg-gray-300" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold mb-2">Email Address</label>
                                <input type="email" id="email" name="email"
                                    class="form-input w-full p-3 bg-gray-300" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-semibold mb-2">Message</label>
                            <textarea id="message" name="msg" rows="4" class="form-input w-full p-3 bg-gray-300" required></textarea>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="form-button bg-green-800 hover:bg-green-600 rounded-xl text-white px-12 py-3 text-lg text-center w-full lg:w-1/2">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- footer --}}
    <footer class="bg-green-800 py-8">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Section 1 -->
                <div class="sec1 flex flex-col items-center md:items-start text-center md:text-left">
                    <img src="{{ asset('asset/img/logo footer.png') }}" alt="" class="rounded-full w-24 mb-4">
                    <p class="text-white mb-4">Magical Hair Shampu: Transform Your Look with Ease!</p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="rounded-full shadow-md w-12 h-12 flex items-center justify-center hover:bg-gray-200">
                            <i class="ri-facebook-line text-white text-2xl"></i>
                        </a>
                        <a href="#"
                            class="rounded-full shadow-md w-12 h-12 flex items-center justify-center hover:bg-gray-200">
                            <i class="ri-instagram-line text-white text-2xl"></i>
                        </a>
                    </div>
                </div>
                <!-- Section 2 -->
                <div class="sec2">
                    <h2 class="text-white text-xl mb-4">Useful Links</h2>
                    <ul class="text-white space-y-2">
                        <li><a href="#" class="hover:text-gray-300">Home</a></li>
                        <li><a href="#" class="hover:text-gray-300">About</a></li>
                        <li><a href="#" class="hover:text-gray-300">Product</a></li>
                        <li><a href="#" class="hover:text-gray-300">Contact</a></li>
                    </ul>
                </div>
                <!-- Section 3 -->
                <div class="sec3">
                    <h2 class="text-white text-xl mb-4">Products</h2>
                    <div class="grid grid-cols-2 gap-2">
                        <img src="{{ asset('asset/img/product1.jpg') }}" alt=""
                            class="w-full h-24 object-cover rounded-lg shadow-md">
                        <img src="{{ asset('asset/img/product2.jpg') }}" alt=""
                            class="w-full h-24 object-cover rounded-lg shadow-md">
                        <img src="{{ asset('asset/img/product3.jpg') }}" alt=""
                            class="w-full h-24 object-cover rounded-lg shadow-md">
                        <img src="{{ asset('asset/img/product4.png') }}" alt=""
                            class="w-full h-24 object-cover rounded-lg shadow-md">
                    </div>
                </div>
                <!-- Section 4 -->
                <div class="sec4">
                    <h2 class="text-white text-xl mb-4">Get In Touch</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="ri-whatsapp-line text-white text-2xl mr-3"></i>
                            <div>
                                <h3 class="text-white">WhatsApp Us</h3>
                                <p class="text-gray-300">+916388337746</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="ri-mail-line text-white text-2xl mr-3"></i>
                            <div>
                                <h3 class="text-white">Mail Us</h3>
                                <p class="text-gray-300">mmenterprises33@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="ri-smartphone-line text-white text-2xl mr-3"></i>
                            <div>
                                <h3 class="text-white">Call Us</h3>
                                <p class="text-gray-300">+916388337746</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="bg-gray-600 py-6">
        <div
            class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between text-center md:text-left">
            <p class="text-gray-300 mb-2 md:mb-0">©2024. magicalbrands.info</p>
            <p class="text-gray-300"><a href="https://realvictorygroups.com/">Developed by Real Victory Groups</a> </p>
        </div>
    </div>
    <!-- Include the Remix Icon CSS for the icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <div id="floatingButton" class="fixed bottom-4 right-4">
        <button id="toggleButton"
            class="bg-green-500 hover:bg-green-600 text-white p-3 rounded-full shadow-lg focus:outline-none transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
        </button>

        <div id="iconPanel" class="hidden bg-white rounded-lg shadow-lg p-4 mt-2 transition-all duration-300">
            <a href="tel:+916388337746" class="block mb-2">
                <button
                    class="w-full p-3 rounded-full bg-green-500 hover:bg-green-600 text-white flex items-center justify-center focus:outline-none transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
            </a>
            <a href="https://wa.link/4j3n7n" class="block">
                <button
                    class="w-full p-3 rounded-full bg-green-500 hover:bg-green-600 text-white flex items-center justify-center focus:outline-none transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </button>
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('toggleButton');
            const iconPanel = document.getElementById('iconPanel');

            toggleButton.addEventListener('click', function() {
                iconPanel.classList.toggle('hidden');
                iconPanel.classList.toggle('flex');
                iconPanel.classList.toggle('flex-col');
            });

            // Close panel when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInside = toggleButton.contains(event.target) || iconPanel.contains(event
                    .target);
                if (!isClickInside && !iconPanel.classList.contains('hidden')) {
                    iconPanel.classList.add('hidden');
                    iconPanel.classList.remove('flex', 'flex-col');
                }
            });
        });
    </script>

    <script>
        document.getElementById('toggleButton').addEventListener('click', function() {
            const panel = document.getElementById('iconPanel');
            panel.classList.toggle('hidden');
        });
    </script>

    <script>
        const toggleButton = document.getElementById('toggleButton');
        const iconPanel = document.getElementById('iconPanel');

        toggleButton.addEventListener('click', (event) => {
            event.stopPropagation();
            iconPanel.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!iconPanel.contains(event.target) && event.target !== toggleButton) {
                iconPanel.classList.add('hidden');
            }
        });

        iconPanel.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    </script>
@endsection
