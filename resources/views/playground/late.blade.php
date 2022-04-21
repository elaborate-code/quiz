<x-app-layout>

    <div class="w-full h-full flex flex-col items-center justify-center">

        <p class="text-white text-2xl text-center">
            انت متأخر
        </p>

        <a href="{{ route('ranking.current_quiz') }}">
            <x-results-button>
                انظر إلى النتائج
            </x-results-button>
        </a>

        <img class="w-56 m-auto" src="https://media.giphy.com/media/BOPrq7m5jYS1W/giphy.gif" />

    </div>

</x-app-layout>
