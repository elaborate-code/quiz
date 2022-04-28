<x-app-layout>

    <div class="p-6 h-screen ">

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
