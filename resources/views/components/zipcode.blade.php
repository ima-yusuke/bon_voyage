<div class="flex flex-col gap-2">
    <p>【郵便番号】</p>
    <div class="flex gap-4">
        <input type="text" id="zipcode_{{$place}}" class="w-[70%] border border-solid border-gray-300 rounded-md p-2"
               placeholder="例: 100-0001"
        />
        <button id="{{$place}}" type="button" class="searchAddress bg-blue-500 text-white px-4 py-2 rounded-md">
            住所検索
        </button>
    </div>
</div>


<div class="flex flex-col gap-2">
    <p>【都道府県】</p>
    <x-dash-form-input id="{{$place}}_pref_input" type="text" title="住所が自動入力されます"/>
</div>

<div class="flex flex-col gap-2">
    <p>【市区町村】</p>
    <x-dash-form-input id="{{$place}}_city_input" type="text" title="住所が自動入力されます"/>
</div>

<div>
    <p>【番地】</p>
    <x-dash-form-input id="{{$place}}_house_num_input" type="text" title="例:1234-5"/>
</div>
