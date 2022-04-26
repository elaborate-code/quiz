<x-app-layout class="h-fit">

    <div class="p-1 sm:p-4">

        {{-- @if (auth()->user()->role === 'admin')
            <div class="text-center">
                <a href="{{ route('ranking.global') }}">
                    <x-results-button>
                        الترتيب العام
                    </x-results-button>
                </a>
            </div>
        @endif --}}

        <div class="text-amber-400 font-semibold text-xl text-center" dir="ltr">
            : نتائج الأوائل في الجولة الأخيرة
        </div>

        <x-tables.ranking :results="$results" />

    </div>

</x-app-layout>
