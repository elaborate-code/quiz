<x-app-layout>

    <div class="p-6 h-screen ">

        <img class="w-24 lg:w-52 absolute right-0 top-0"
            src="https://media.giphy.com/media/TRub2cQyyLihIu0Ufa/giphy.gif" />
        {{-- <img class="w-24 absolute right-0 top-0" src="{{asset('assets/lamps3.gif')}}" /> --}}
        <div class="flex justify-end w-full ">

            <x-application-logo />

        </div>

        <div class="text-center mt-20">

            <p class="text-white text-2xl">
                تهانينا لقد انتهيت من المشاركة في مسابقة اليوم
            </p>
            <p class="text-5xl mt-20">
                🙌
            </p>
            <a href="{{ route('ranking.current_quiz') }}">
                <x-results-button>
                    انظر إلى النتائج
                </x-results-button>
            </a>
        </div>

    </div>

</x-app-layout>
