<meta charset="utf-8">

<!-- Facebook Open Graph Tags -->
<meta name="og:type" content="blog">
<meta name="og:site_name" content="{{ \Canvas\Models\Settings::blogTitle() }}">
@yield('og-title')
@yield('og-image')
@yield('og-description')

<!-- Twitter Cards -->
@if (Request::is('blog/*'))
    @yield('twitter-card')
@else
    <meta name="twitter:card" content="{{ \Canvas\Models\Settings::twitterCardType() }}" />
    <meta name="twitter:site" content="{{ $user->twitter or ''}}" />
    <meta name="twitter:title" content="{{ \Canvas\Models\Settings::blogTitle() }}" />
    <meta name="twitter:description" content="{{ \Canvas\Models\Settings::blogDescription() }}" />
    <meta name="twitter:image" content="/favicon/favicon-96x96.png" />
@endif

<!-- SEO Tags -->
<meta name="keywords" content="{{ \Canvas\Models\Settings::blogSeo() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="{{ \Canvas\Models\Settings::blogAuthor() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0 maximum-scale=1.0, user-scalable=no">
<meta name="description" content="{{ \Canvas\Models\Settings::blogDescription() }}">

<!-- Favicon -->
{{-- <link rel="icon" type="image/png" href="{{ asset('vendor/canvas/assets/images/favicon.png') }}"> --}}
<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">

<link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
