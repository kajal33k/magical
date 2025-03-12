<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magical Brands</title>

    {{-- icons
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" /> --}}

    {{-- google font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- <link href="{{ asset('asset/css/icon.css') }}" rel="stylesheet" /> --}}
    {{-- fav icon --}}
    <link rel="icon" type="image/png" href="{{ asset('asset/img/New-Project-8-min.png') }}">


    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('asset/css/swiper.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>


  
</head>

<body>

    @include('landing.header')

    @yield('content')

    @include('landing.footer')
    
    {{-- tailwindcss
     --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- swiper --}}
    <script src="{{ asset('asset/js/swiper.js') }}"></script>
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
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1258237308597358&ev=PageView&noscript=1" />
        </noscript>
    <!-- End Meta Pixel Code -->
</body>

</html>
