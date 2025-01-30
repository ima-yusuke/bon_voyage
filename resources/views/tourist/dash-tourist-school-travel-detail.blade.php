<x-app-layout>
    <div class="flex justify-center items-center w-full h-full">
        <div class="bg-white h-full w-[90%] md:w-[70%] my-10 px-8 md:px-14 py-14 rounded-lg flex flex-col gap-10">
            <div>
                <a href="{{route('hotel.order')}}" class="bg-blue-500 px-4 py-2 rounded-lg text-white">一覧へ戻る</a>
            </div>

            <x-dash-form-component title="出発日" flag={{false}}>
                <p>{{$order["leave_date"]}}</p>
            </x-dash-form-component>

            <x-dash-form-component title="学校名" flag={{false}}>
                <p>三重県立松阪高等学校</p>
            </x-dash-form-component>

            <x-dash-form-component title="担当者" flag={{false}}>
                <p>今井</p>
            </x-dash-form-component>

            <x-dash-form-component title="方面" flag={{false}}>
                <p>北海道</p>
            </x-dash-form-component>

            <p class="text-red-600">食事条件は項目分けて表示した方が良い？</p>
            <x-dash-form-component title="宿泊施設" flag={{false}}>
                <p>1泊目：札幌プリンスホテル / 1泊朝食付（夕食：無 / 朝食：ビュッフェ）</p>
                <p>2泊目：ホテルエミシア札幌 / 1泊2食付（夕食：ビュッフェ / 朝食：お弁当）</p>
            </x-dash-form-component>

            <x-dash-form-component title="人数" flag={{false}}>
                <p>計320人</p>
                <p>男180人</p>
                <p>女140人</p>
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

            <x-dash-form-component title="食事会場" flag={{false}}>
                <div class="flex flex-col gap-2">
                    <p>【新しいファイル】</p>
                    <input type="file" accept="application/pdf">
                </div>
            </x-dash-form-component>

            <x-dash-form-component title="部屋割" flag={{false}}>
                <div class="flex flex-col gap-2">
                    <p>【新しいファイル】</p>
                    <input type="file" accept="application/pdf">
                </div>
            </x-dash-form-component>

            <x-dash-form-component title="しおり" flag={{false}}>
                <div class="flex flex-col gap-2">
                    <p>【新しいファイル】</p>
                    <input type="file" accept="application/pdf">
                </div>
            </x-dash-form-component>

            <x-dash-form-component title="行程表" flag={{false}}>
                <input type="file" accept="application/pdf">
            </x-dash-form-component>

            <x-dash-form-component title="仕様書" flag={{false}}>
                <input type="file" accept="application/pdf">
            </x-dash-form-component>
        </div>
    </div>
</x-app-layout>
