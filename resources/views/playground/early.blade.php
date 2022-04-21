<x-app-layout>

    <div class="w-full h-full flex flex-col items-center justify-center space-y-10">

        <p class="text-white text-2xl text-center">
            لم تبدأ المسابقة بعد، يرجى الإنتظار أو العودة في :
        </p>

        <img src="https://media.giphy.com/media/jV0fRmUyDAGRalG0T7/giphy.gif" class="w-32" />

        <div CountDown data-countdown-duration="{{ $seconds_to_wait }}" data-countdown-format="HH:mm:ss"
            data-countdown-step="1s"
            class="bg-white border-2 border-amber-400 rounded-full text-2xl font-semibold px-2 w-44 text-center"
            dir="ltr">
        </div>

        <div class="text-gray-200 p-2 text-center">
            <p> للمشاركة عليك أن تكون حاظرا قبل انتهاء العداد </p>
            <p> الترتيب يكون حسب عدد الاجابات الصحيحة و الوقت المستغرق لتقديم الاجابات الصحيحة </p>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{ asset('js/countdown.js') }}"></script> --}}

</x-app-layout>
