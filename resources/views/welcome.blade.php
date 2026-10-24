
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>@yield('title', 'Digital Agency - Dubai, Bangalore, Cochin')</title>

    <meta name="description"
          content="@yield('description', 'CAMS is a digital agency in UAE and India developing web and mobile applications.')">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'CAMS Digital Agency')">
    <meta property="og:description"
          content="@yield('description', 'Web and mobile application development.')">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="icon" href="{{ asset('images/favicon.ico') }}"
          type="image/x-icon">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900">

    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate_dup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo_dup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/top_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/component.css') }}">

    <style>
        @media (min-width: 481px) and (max-width: 582px) {
            .black_sec {
                padding-left: 20px !important;
            }
        }
    </style>

    @stack('styles')
</head>
<body>
    <div class="se-pre-con"></div>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <a href="#0" class="cd-top">Top</a>

    <script src="{{ asset('js/jquery-2.0.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/top_main.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.js') }}"></script>
    <script src="{{ asset('js/AnimOnScroll.js') }}"></script>
    <script src="{{ asset('js/viewportchecker_dup.js') }}"></script>
    <script src="{{ asset('js/loader.js') }}"></script>

    @stack('scripts')
</body>
</html>
