<x-app-layout>

    <div class="p-6 h-screen md:h-full">
        <img class="w-24 lg:w-52 absolute right-0 top-0"
            src="https://media.giphy.com/media/TRub2cQyyLihIu0Ufa/giphy.gif" />
        {{-- <img class="w-24 absolute right-0 top-0" src="{{asset('assets/lamps3.gif')}}" /> --}}
        <div class="flex justify-end w-full ">

            <x-application-logo />

        </div>

        <div class="text-center mt-20">

            <p class="text-white text-2xl">
                انت متأخر
            </p>
            <a href="{{ route('ranking.current_quiz') }}">
                <x-results-button>
                    انظر إلى النتائج
                </x-results-button>
            </a>

            <img class="w-56 mt-20 m-auto" src="https://media.giphy.com/media/BOPrq7m5jYS1W/giphy.gif" />

        </div>

    </div>

</x-app-layout>
