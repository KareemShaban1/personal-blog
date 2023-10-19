<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @isset($title)
            {{ ucfirst($title) }} -
        @endisset {{ config('app.name') }}
    </title>

    @php
        $metaData = App\Models\MetaData::pluck('value', 'key')->toArray(); // Populate the $metaData property
    @endphp

    <meta content="{{ $metaData['description'] }}" name="description">
    <meta content="{{ $metaData['keywords'] }}" name="keywords">

    <!-- Add a canonical tag to specify the preferred version of the page -->
    <link rel="canonical" href="{{ $metaData['canonical_link'] }}">

    <!-- Add Open Graph metadata for social media sharing -->
    <meta property="og:title" content="{{ $metaData['og:title'] }}">
    <meta property="og:description" content="{{ $metaData['og:description'] }}">
    <meta property="og:url" content="{{ $metaData['og:url'] }}">
    <meta property="og:type" content="{{ $metaData['og:type'] }}">
    <meta property="og:site_name" content="{{ $metaData['og:site_name'] }}">
    <meta property="article:publisher" content="{{ $metaData['article:publisher'] }}">
    <meta property="og:updated_time" content="{{ $metaData['og:updated_time'] }}">
    <meta property="og:image" content="{{ $metaData['og:image'] }}">
    <meta property="og:image:secure_url" content="{{ $metaData['og:image:secure_url'] }}">
    <meta property="og:image:width" content="{{ $metaData['og:image:width'] }}">
    <meta property="og:image:height" content="{{ $metaData['og:image:height'] }}">
    <meta property="og:image:alt" content="{{ $metaData['og:image:alt'] }}">
    <meta property="og:image:type" content="{{ $metaData['og:image:type'] }}">
    <meta property="article:published_time" content="{{ $metaData['article:published_time'] }}">
    <meta property="article:modified_time" content="{{ $metaData['article:modified_time'] }}">

    <!-- Add Twitter Card metadata for Twitter sharing -->
    <meta name="twitter:card" content="{{ $metaData['twitter:card'] }}">
    <meta name="twitter:title" content="{{ $metaData['twitter:title'] }}">
    <meta name="twitter:description" content="{{ $metaData['twitter:description'] }}">
    <meta name="twitter:image" content="{{ $metaData['twitter:image'] }}">




    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>


    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>


</head>

<body class="bg-white font-family-karla">


    @include('frontend.layouts.parts.topNavbar')

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{ route('webhome') }}">
                {{ $setting->site_name }}
            </a>
            <p class="text-lg text-gray-600">
                {{ $setting->description }}
            </p>
        </div>
    </header>


    @include('frontend.layouts.parts.categoriesNavbar')

    <div class="container mx-auto flex flex-wrap py-6">

        {{ $slot }}

        @include('frontend.layouts.parts.sidebar')


    </div>

    @include('frontend.layouts.parts.footer')

</body>

</html>
