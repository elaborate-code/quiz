<x-app-layout class="h-fit">

    <div class="px-4 pt-4 md:pb-4">

        <img class="w-24 lg:w-52 absolute right-0 top-0"
            src="https://media.giphy.com/media/TRub2cQyyLihIu0Ufa/giphy.gif" />
        {{-- <img class="w-24 absolute right-0 top-0" src="{{asset('assets/lamps3.gif')}}" /> --}}

        <div class="flex justify-end w-full ">
            <x-application-logo />
        </div>

        <div>
            <span class="text-amber-400 font-semibold text-xl" dir="ltr"> :النتائج العامة لشهر رمضان </span>
        </div>

        <x-tables.ranking :results="$results" />

    </div>

</x-app-layout>
