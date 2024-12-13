<div class="flex flex-wrap items-center h-full gap-4">
        @foreach($dataArray as $idx=>$data)
            <div class="flex items-center space-x-2">
                @if($check)
                    <input type="checkbox" id="{{$name}}_{{$data["value"]}}" name="{{$name}}" value="{{$data["value"]}}" @if($idx===count($dataArray)-1) class="notAvailable" @endif/>
                @else
                    <input type="radio" id="{{$name}}_{{$data["value"]}}" name="{{$name}}" value="{{$data["value"]}}" class="{{$name}}"/>
                @endif
                <label for="{{$name}}_{{$data["value"]}}" class="text-sm flex-shrink-0">{{$data["title"]}}</label>
            </div>
        @endforeach
</div>
