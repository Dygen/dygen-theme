<!DOCTYPE html>
<html lang="en">
    <head>
        @include('canvas::shared.meta-tags')
        @yield('title')
        <meta name="description" content="{{ $meta_description }}">
        @include('canvas::frontend.partials.css')
        @include('canvas::frontend.partials.custom-css')

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5K9GLZ');</script>
        <!-- End Google Tag Manager -->

    </head>
    <body>
        @include('layouts.nav')
        @include('canvas::frontend.partials.header')
        @yield('content')
        @yield('unique-js')
        @include('canvas::frontend.partials.custom-js')
        @include('canvas::frontend.partials.footer')
    </body>
</html>
