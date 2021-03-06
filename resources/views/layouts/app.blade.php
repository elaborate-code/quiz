<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">

    {{-- <x-nav.hamburger-menu /> --}}
    <img class="w-24 lg:w-52 absolute right-0 top-0" src="https://media.giphy.com/media/TRub2cQyyLihIu0Ufa/giphy.gif" />
    {{-- {{ asset('assets/lamps3.gif') }} --}}

    <div class="min-h-screen bg-slate-600">
        <!-- Page Content -->
        <main>
            <div class="lg:py-12 ">
                <div class="max-w-7xl mx-auto lg:px-8">
                    <div class="bg-slate-800 overflow-hidden shadow-sm sm:rounded-lg font-amiri lg:h-fit lg:pb-32"
                        dir="rtl">

                        {{ $slot }}

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
