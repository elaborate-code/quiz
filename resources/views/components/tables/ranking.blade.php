@props(['results'])

<div>

    <div class="overflow-y-auto h-[70vh] min-h-[550px] max-h-[650px]">
        <table class="text-white text-lg m-auto mt-5">

            <tr class="sticky top-0 bg-slate-800 border">
                <th class="border"> </th>
                {{-- <th class="border p-2"> المرتبة </th> --}}
                <th class="border p-2"> المشارك </th>
                <th class="border p-2"> عدد الإجابات الصحيحة </th>
                <th class="border p-2"> المدة الزمنية </th>
            </tr>

            <tbody>
                @foreach ($results as $rank => $result)
                    @if (isset($results->limit) && $rank >= $results->limit)
                        @if ($result->user_id !== auth()->user()->id)
                            @php
                                continue;
                            @endphp
                        @elseif ($result->user_id === auth()->user()->id)
                            <tr class="h-8"></tr>
                        @endif
                    @endif

                    <tr class="{{ $result->user_id === auth()->user()->id ? 'bg-green-100 bg-opacity-20' : '' }}">
                        <td class="border text-center"> {{ $rank + 1 }} </td>
                        <td class="border p-2 text-center"> {{ $result->user->name }} </td>
                        <td class="border p-2 text-center"> {{ $result->count_correct_answers }} </td>
                        <td class="border p-2 text-center"> {{ $result->sum_elapsed_seconds }} ثانية</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div class="text-gray-200 p-2 text-center">
        عدم ظهور اسمك يعني عدم مشاركتك أو أن اجاباتك لم تكن صحيحة
    </div>

</div>
