@if($type==="text")
    <input type="text" class="w-full border border-solid border-gray-300 rounded-md p-2" placeholder="{{$name}}">
@elseif($type==="file")
    <input type="file" accept="image/*" class="w-full border border-solid border-gray-300 rounded-md p-2">
@endif
