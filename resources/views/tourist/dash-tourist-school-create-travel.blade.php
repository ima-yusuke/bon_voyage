<x-app-layout>
    <div class="flex justify-center items-center w-full h-full">
        <div class="bg-white h-full w-[90%] md:w-[70%] my-10 px-8 md:px-14 py-14 rounded-lg flex flex-col gap-10">

            <h1 class="md:text-2xl">三重県立松阪高等学校</h1>

            <x-dash-form-component title="担当者" flag={{false}}>
                <select>
                    <option value="">選択してください</option>
                    <option value="0">鳥田</option>
                    <option value="1">小林</option>
                    <option value="2">野嵜</option>
                    <option value="3">今井</option>
                </select>
            </x-dash-form-component>

            <p class="text-red-600">旅行先を選んだら対象のホテルのみフィルターかける？</p>

            <x-dash-form-component title="旅行先" flag={{false}}>
                <select>
                    <option value="">選択してください</option>
                    <option value="0">北海道</option>
                    <option value="1">東北</option>
                    <option value="2">関東</option>
                    <option value="3">中部</option>
                    <option value="4">関西</option>
                    <option value="5">中国・四国</option>
                    <option value="6">九州</option>
                    <option value="7">沖縄</option>
                </select>
            </x-dash-form-component>

            <x-dash-form-component title="生徒人数" flag={{false}}>
                <aside class="flex flex-col gap-6">
                    <div class="flex flex-col gap-2">
                        <p>【計】</p>
                        <x-dash-form-input type="number" title="320"/>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p>【男子】</p>
                        <x-dash-form-input type="number" title="180"/>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p>【女子】</p>
                        <x-dash-form-input type="number" title="140"/>
                    </div>
                </aside>
            </x-dash-form-component>

            <x-dash-form-component title="引率教員人数" flag={{false}}>
                <x-dash-form-input type="number" title="12"/>
            </x-dash-form-component>

            <x-dash-form-component title="添乗員人数" flag={{false}}>
                <x-dash-form-input type="number" title="4"/>
            </x-dash-form-component>

            <x-dash-form-component title="乗務員人数" flag={{false}}>
                <x-dash-form-input type="number" title="16"/>
            </x-dash-form-component>

            <x-dash-form-component title="看護師同行" flag={{false}}>
                <select>
                    <option value="">選択してください</option>
                    <option value="0">有</option>
                    <option value="1">無</option>
                </select>
            </x-dash-form-component>

            <x-dash-form-component title="出発日" flag={{false}}>
                <x-dash-form-input type="date" dateId="leaveDate"/>
            </x-dash-form-component>

            <x-dash-form-component title="帰着日" flag={{false}}>
                <x-dash-form-input type="date" dateId="arriveDate"/>
            </x-dash-form-component>

            <p class="text-red-600">未定の場合未定？</p>
            <p class="text-red-600">ホテルにより夕食できないとこもあるが、その場合selectも調整必要</p>
            <x-dash-form-component title="宿泊施設 \n（1泊目）" flag={{false}}>
                <aside class="flex flex-col gap-4">
                    <div class="flex flex-col gap-1">
                        <p>宿泊施設名</p>
                        <select>
                            <option value="">選択してください</option>
                            <option value="0">未定？</option>
                            <option value="1">ホテルA</option>
                            <option value="2">ホテルB</option>
                            <option value="3">ホテルC</option>
                            <option value="4">ホテルD</option>
                            <option value="5">ホテルE</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <p>食事条件</p>
                        <select>
                            <option value="">選択してください</option>
                            <option value="0">素泊まり</option>
                            <option value="1">1泊朝食付</option>
                            <option value="2">1泊2食付（通常）</option>
                            <option value="3">1泊2食付（テーブルマナー）</option>
                        </select>
                    </div>
                </aside>


            </x-dash-form-component>

            <div class="flex justify-center">
                <button class="bg-blue-500 rounded-lg px-4 py-2 text-white">宿泊施設を追加</button>
            </div>

            <x-dash-form-component title="仕様書" flag={{false}}>
                <x-dash-form-input type="file" role="pdf"/>
            </x-dash-form-component>
        </div>
    </div>
</x-app-layout>
