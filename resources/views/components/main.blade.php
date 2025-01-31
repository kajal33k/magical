<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Magical Brands</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Template Stylesheet -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    {{-- tailwindcss --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1258237308597358');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1258237308597358&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- End Meta Pixel Code -->
</head>

<body>


    @include('components.header')
    @yield('content')
    @include('components.footer')










    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js">
        < />

        <
        !--Owl Carousel CSS-- >
        <
        link rel = "stylesheet"
        href = "https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        integrity = "sha512-9CW40OaH2wSLi1UbIwxZRwa5y9KNKIzP+i1VZCVNJzCMXM3yE4dGy5+KEW5OAtK40eWyH02uAGPxLepBaumKmw=="
        crossorigin = "anonymous"
        referrerpolicy = "no-referrer" / >

            <
            !--Owl Carousel JS-- >
            <
            script src = "https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
        integrity = "sha512-IRbCeehLJWzltmNYazcxxNItV7iKQGl4h0UJj0f8vJfSzsMgMG3YZvPMB7MJ+y9Aosmx42JXtfO9FfFLZDDuDQ=="
        crossorigin = "anonymous"
        referrerpolicy = "no-referrer" >
    </script>








    <!-- Template Javascript -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>
