<div class="flex items-center gap-4">
    @foreach($mealData as $data)
        <div class="flex items-center space-x-2">
            <input type="checkbox" id="meal_{{$data["value"]}}" name="{{$name}}" value="{{$data["value"]}}"/>
            <label for="meal_{{$data["value"]}}" class="text-sm">{{$data["title"]}}</label>
        </div>
    @endforeach
</div>

