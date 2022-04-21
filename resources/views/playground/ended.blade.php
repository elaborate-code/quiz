<x-app-layout>

    <div class="p-6 h-screen ">

        <div class="flex justify-end w-full">

            <x-application-logo />

        </div>

        <div class="text-center mt-20">

            <p class="text-white text-2xl">
                لقد إنتهت لعبة اليوم </p>

            <a href="{{ route('ranking.current_quiz') }}">
                <x-results-button>
                    انظر إلى النتائج
                </x-results-button>
            </a>

            <img class="w-56 mt-20 m-auto" src="https://media.giphy.com/media/BOPrq7m5jYS1W/giphy.gif" />

        </div>

    </div>

</x-app-layout>
