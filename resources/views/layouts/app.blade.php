<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <section class = "px-8 py-4">
        <header class = "container mx-auto">
                <h1 class = "text-bold text-2xl flex ">
                    <img src="{{ url('/index.png') }}" alt="Logo" width="40" height="40" class = "mr-4">
                    Tweety
                </h1>
        </header>
    </section>
    <main class="py-4">
        <div class="lg:flex lg:ml-4 lg:justify-between">
            <div class = "lg:w-1/32">
                @include ('_sidebar_links')
            </div>
            
            <div class= "lg:flex-1 lg:mx-10" style="max-width:700px">

                @yield('content')
                
            </div>

            <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                @include('_friends_links')
            </div>
        </div>
</main>
</div>
    
</body>
</html>
