<x-app-layout class="h-fit">

    <div class="px-4 pt-4 md:pb-4">

        <div class="text-amber-400 font-semibold text-xl text-center" dir="ltr">
            :النتائج العامة لشهر رمضان
        </div>

        <x-tables.ranking :results="$results" />

    </div>

</x-app-layout>
