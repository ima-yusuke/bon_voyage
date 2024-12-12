@if($type==="text")
    <input type="text" @isset($id) id="{{ $id }}" @endisset  class="w-full border border-solid border-gray-300 rounded-md p-2" placeholder="{{$title}}">
@elseif($type==="file" && $role==="image")
    <input type="file" accept="image/*" @isset($id) id="{{ $id }}" @endisset class="w-full border border-solid border-gray-300 rounded-md p-2">
@elseif($type==="file" && $role==="pdf")
    <input type="file" accept="application/pdf" @isset($id) id="{{ $id }}" @endisset class="w-full border border-solid border-gray-300 rounded-md p-2">
@elseif($type==="tel")
    <input type="tel" @isset($id) id="{{ $id }}" @endisset  class="w-full border border-solid border-gray-300 rounded-md p-2" placeholder="{{$title}}">
@elseif($type==="time")
    <div class="relative">
        <input
            id="{{$timeId}}"
            type="time"
            class="w-full border border-solid border-gray-300 rounded-md p-2 cursor-pointer"
        />
        <div
            class="absolute inset-0 cursor-pointer"
            onclick="document.getElementById('{{$timeId}}').showPicker()">
        </div>
    </div>
@elseif($type==="number")
    <input type="number" @isset($id) id="{{ $id }}" @endisset  class="w-full border border-solid border-gray-300 rounded-md p-2" placeholder="{{$title}}">
@endif
