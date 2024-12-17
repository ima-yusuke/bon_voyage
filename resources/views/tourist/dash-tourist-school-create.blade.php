<x-app-layout>
    <div class="flex justify-center items-center w-full h-full">
        <div class="bg-white h-full w-[90%] md:w-[70%] my-10 px-8 md:px-14 py-14 rounded-lg flex flex-col gap-10">
            <x-dash-form-component title="学校名" flag={{true}}>
                <x-dash-form-input type="text" title="三重県立〇〇高等学校"/>
            </x-dash-form-component>

            <x-dash-form-component title="区分①" flag={{true}}>
                <select>
                    <option value="">選択してください</option>
                    <option value="0">公立</option>
                    <option value="1">私立</option>
                </select>
            </x-dash-form-component>

            <x-dash-form-component title="区分②" flag={{true}}>
                <select>
                    <option value="">選択してください</option>
                    <option value="0">小学校</option>
                    <option value="1">中学校</option>
                    <option value="2">高等学校</option>
                    <option value="3">大学</option>
                    <option value="4">専門学校</option>
                    <option value="5">その他</option>
                </select>
            </x-dash-form-component>

            <div class="flex justify-center">
                <button class="bg-blue-500 px-4 py-2 rounded-lg text-white">登録</button>
            </div>
        </div>
    </div>
</x-app-layout>
