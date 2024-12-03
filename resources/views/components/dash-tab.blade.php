<div class="mb-4 border-b border-gray-200">
    <ul class="flex flex-wrap text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        @foreach($menuData as $data)
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="{{$data['id']}}_tab" data-tabs-target="#{{$data['id']}}" type="button" role="tab" aria-controls="{{$data['id']}}" aria-selected="false">{{$data['title']}}</button>
            </li>
        @endforeach
    </ul>
</div>
