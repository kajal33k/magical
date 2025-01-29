<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Magical Brands</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Template Stylesheet -->
        <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
        {{-- tailwindcss --}}
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- icons --}}
        <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet"
    />

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>

    <body>


@include('components.header')
@yield('content')
@include('components.footer')










        <!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-9CW40OaH2wSLi1UbIwxZRwa5y9KNKIzP+i1VZCVNJzCMXM3yE4dGy5+KEW5OAtK40eWyH02uAGPxLepBaumKmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-IRbCeehLJWzltmNYazcxxNItV7iKQGl4h0UJj0f8vJfSzsMgMG3YZvPMB7MJ+y9Aosmx42JXtfO9FfFLZDDuDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>








    <!-- Template Javascript -->
    <script src="{{asset('asset/js/main.js')}}"></script>
    </body>

</html>
