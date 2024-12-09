<div class="flex flex-wrap items-center h-full gap-4">
    @foreach($dataArray as $data)
        <div class="flex items-center space-x-2">
            <input type="checkbox" id="{{$name}}_{{$data["value"]}}" name="{{$name}}" value="{{$data["value"]}}"/>
            <label for="{{$name}}_{{$data["value"]}}" class="text-sm flex-shrink-0">{{$data["title"]}}</label>
        </div>
    @endforeach
</div>

