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

<body class="antialiased h-screen bg-slate-600 font-amiri" dir="rtl">

    <img class="w-24 sm:w-52 absolute right-0 top-0" src="https://media.giphy.com/media/TRub2cQyyLihIu0Ufa/giphy.gif" />
    {{-- src="{{ asset('assets/lamps3.gif') }} --}}

    <!-- Page Content -->
    <main class="grid h-full">

        {{-- BOX --}}
        <div class="place-self-center h-full w-full sm:w-[90vw] sm:h-[90vh] bg-slate-800 shadow-sm sm:rounded-lg p-8">

            <div class="flex flex-col h-full">

                <div class="flex justify-end">
                    <x-application-logo />
                </div>

                <div class="overflow-y-auto flex-1">
                    {{ $slot }}
                </div>
            </div>

        </div>

    </main>

</body>

</html>
