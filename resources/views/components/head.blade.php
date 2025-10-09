@php
 use App\Models\SiteSettings;
@endphp

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google" content="notranslate">
  <meta name="robots" content="noindex,nofollow">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

{{--  @vite(['resources/css/app.css', 'resources/js/app.js'])--}}


  <!-- Подключение ассетов из public/assets -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

{{--  <script src="{{ asset('assets/js/profile.js') }}"></script>--}}

  <title>
    @yield('title', setting('seo.title')[app()->getLocale()] ?? config('app.name'))
  </title>
  <meta property="og:title" content="@yield('title', setting('seo.title')[app()->getLocale()] ?? config('app.name'))">

  <meta name="description" content="@yield('meta_description', setting('seo.description')[app()->getLocale()] ?? '')">
  <meta property="og:description"
        content="@yield('meta_description', setting('seo.description')[app()->getLocale()] ?? '')">

  @php
    $ogImageUrl = trim($__env->yieldContent('og_image'))
    ?: (SiteSettings::getOgImage() ?? '');
  @endphp

  @if($ogImageUrl)
    <meta property="og:image" content="{{ $ogImageUrl }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ $ogImageUrl }}">
  @endif

  <meta property="og:url" content="{{ url()->current() }}">

  <meta property="og:type" content="website">

  {{-- Yandex Metrika --}}
  @if(setting('metrics.yandex'))
    {!! setting('metrics.yandex') !!}
  @endif

  {{-- Google Analytics --}}
  @if(setting('metrics.google'))
    {!! setting('metrics.google') !!}
  @endif
</head>
