<x-app-layout>
    <div class="flex justify-center items-center w-full h-full">
        <div class="bg-white h-full w-[90%] md:w-[70%] my-10 px-8 md:px-14 py-14 rounded-lg flex flex-col gap-10">

            {{--タイトル--}}
            <article class="flex flex-col gap-8">
                <h1 class="text-3xl md:text-4xl">宿泊施設様用 登録フォーム</h1>
                <p>当サービスにご興味をお持ちいただき、ありがとうございます。<br>
                    下記をご入力の上、送信ください。
                </p>
            </article>


            {{--ホテル入力フォーム--}}
            <section class="w-full flex flex-col justify-center items-center gap-4">
                <form action="" class="w-full flex flex-col gap-4">

                    <x-dash-form-component name="宿泊施設名" flag={{true}}>
                        <x-dash-form-input type="text" name="宿泊施設名"/>
                    </x-dash-form-component>

                    <x-dash-form-component name="イメージ画像" flag={{true}}>
                        <p>※一覧に表示されます。（外観画像など）</p>
                        <x-dash-form-input type="file"/>
                    </x-dash-form-component>

                    <x-dash-form-component name="PR画像" flag={{false}}>
                        <p>※お部屋やお食事会場等</p>
                        <x-dash-form-input type="file"/>
                    </x-dash-form-component>

                    <x-dash-form-component name="郵便番号" flag={{true}}>
                        <div class="flex gap-4">
                            <input type="text" id="zipcode" class="w-[70%] border border-solid border-gray-300 rounded-md p-2"
                                   placeholder="例: 100-0001"
                            />
                            <button id="search_address_btn" type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                                住所検索
                            </button>
                        </div>

                    </x-dash-form-component>
                    <div>
                        <label for="address" class="block font-bold">住所</label>
                        <input
                            type="text"
                            id="address"
                            class="w-full border border-solid border-gray-300 rounded-md p-2"
                            placeholder="住所が自動入力されます"
                            readonly
                        />
                    </div>
                </form>
            </section>
        </div>
    </div>
    @vite('resources/js/hotel/dash-hotel-info.js')
</x-app-layout>
