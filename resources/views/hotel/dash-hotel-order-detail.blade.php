<x-app-layout>
    <div class="flex justify-center items-center w-full h-full">
        <div class="bg-white h-full w-[90%] md:w-[70%] my-10 px-8 md:px-14 py-14 rounded-lg flex flex-col gap-10">
            <div>
                <a href="{{route('hotel.order')}}" class="bg-blue-500 px-4 py-2 rounded-lg text-white">一覧へ戻る</a>
            </div>

            <p class="text-red-600">宿泊日のとこに連泊かどうか</p>
            <x-dash-form-component title="宿泊日" flag={{false}}>
                <p>{{$order["date"]}}</p>
            </x-dash-form-component>

            <x-dash-form-component title="学校名" flag={{false}}>
                <p>{{$order["school"]}}</p>
            </x-dash-form-component>

            <x-dash-form-component title="人数" flag={{false}}>
                <p>{{$order["students"]}}</p>
            </x-dash-form-component>

            <x-dash-form-component title="アレルギーリスト" flag={{false}}>
                <p class="text-red-600">ここに一覧出す？</p>
            </x-dash-form-component>

            <x-dash-form-component title="代替食" flag={{false}}>
                <div class="flex flex-col gap-2">
                    <p>【新しいファイル】</p>
                    <input type="file" accept="application/pdf">
                </div>
            </x-dash-form-component>
        </div>
    </div>
</x-app-layout>
