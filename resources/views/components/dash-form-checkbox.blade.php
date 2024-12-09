<div class="flex items-center h-full gap-4">
    @foreach($mealData as $data)
        <div class="flex items-center space-x-2">
            <input type="checkbox" id="{{$name}}_{{$data["value"]}}" name="{{$name}}" value="{{$data["value"]}}"/>
            <label for="{{$name}}_{{$data["value"]}}" class="text-sm">{{$data["title"]}}</label>
        </div>
    @endforeach
</div>

