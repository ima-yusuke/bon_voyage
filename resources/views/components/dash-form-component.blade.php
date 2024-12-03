<div class="flex w-full">
    {{--左側--}}
    <aside class="w-[30%] flex justify-between items-center p-6 bg-gray-400 text-white font-bold">
        <p>{{$title}}</p>
        @if($flag)
            <p class="text-red-500 bg-white px-2 py-1 rounded-md border-2 border-solid border-red-500">必須</p>
        @endif
    </aside>

    {{--右側--}}
    <aside class="w-full p-6 border border-solid border-gray-400">
        {{$slot}}
    </aside>
</div>
