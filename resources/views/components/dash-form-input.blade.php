@if($type==="text")
    <input type="text" @isset($id) id="{{ $id }}" @endisset  class="w-full border border-solid border-gray-300 rounded-md p-2" placeholder="{{$title}}">
@elseif($type==="file")
    <input type="file" accept="image/*" @isset($id) id="{{ $id }}" @endisset class="w-full border border-solid border-gray-300 rounded-md p-2">
@elseif($type==="tel")
    <input type="tel" @isset($id) id="{{ $id }}" @endisset  class="w-full border border-solid border-gray-300 rounded-md p-2" placeholder="{{$title}}">
@endif
