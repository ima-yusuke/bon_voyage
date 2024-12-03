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


                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                    </div>


                    <x-dash-form-component title="宿泊施設名" flag={{true}}>
                        <x-dash-form-input type="text" title="宿泊施設名"/>
                    </x-dash-form-component>

                    <x-dash-form-component title="イメージ画像" flag={{true}}>
                        <p>※一覧に表示されます。（外観画像など）</p>
                        <x-dash-form-input type="file"/>
                    </x-dash-form-component>

                    <x-dash-form-component title="PR画像" flag={{false}}>
                        <p>※お部屋やお食事会場等</p>
                        <x-dash-form-input type="file"/>
                    </x-dash-form-component>

                    <x-dash-form-component title="郵便番号" flag={{true}}>
                        <div class="flex gap-4">
                            <input type="text" id="zipcode" class="w-[70%] border border-solid border-gray-300 rounded-md p-2"
                                   placeholder="例: 100-0001"
                            />
                            <button id="search_address_btn" type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                                住所検索
                            </button>
                        </div>
                    </x-dash-form-component>

                    <x-dash-form-component title="都道府県" flag={{true}}>
                        <x-dash-form-input id="pref_input" type="text" title="住所が自動入力されます"/>
                    </x-dash-form-component>

                    <x-dash-form-component title="市区町村" flag={{true}}>
                        <x-dash-form-input id="city_input" type="text" title="住所が自動入力されます"/>
                    </x-dash-form-component>

                    <x-dash-form-component title="番地" flag={{true}}>
                        <x-dash-form-input id="house_num_input" type="text" title="例:1234-5"/>
                    </x-dash-form-component>

                    <x-dash-form-component title="アクセス" flag={{false}}>
                        <x-dash-form-input type="text" title="例:東京駅徒歩5分"/>
                    </x-dash-form-component>

                    <x-dash-form-component title="お電話番号" flag={{true}}>
                        <x-dash-form-input type="tel" title="例: 012-234-5678"/>
                    </x-dash-form-component>

                    <x-dash-form-component title="FAX" flag={{true}}>
                        <x-dash-form-input type="tel" title="例: 012-234-9876"/>
                    </x-dash-form-component>

                    <x-dash-form-component title="夕食形式" flag={{true}}>
                        <p class="pb-2">※複数選択可</p>
                        <x-dash-form-checkbox name="dinner_meal_option"
                            :mealData="[['value' => 1, 'title' => 'ビュッフェ'],['value' => 2, 'title' => '卓盛り'],['value' => 3, 'title' => '個食'],
                                       ['value' => 4, 'title' => 'テーブルマナー'],['value' => 5, 'title' => '提供不可']]"
                        />
                    </x-dash-form-component>

                    <x-dash-form-component title="朝食形式" flag={{true}}>
                        <p class="pb-2">※複数選択可</p>
                        <x-dash-form-checkbox name="morning_meal_option"
                                              :mealData="[['value' => 1, 'title' => 'ビュッフェ'],['value' => 2, 'title' => '卓盛り'],['value' => 3, 'title' => '個食'],
                                      ['value' => 4, 'title' => '提供不可']]"
                        />
                    </x-dash-form-component>
                </form>
            </section>
        </div>
    </div>
    @vite('resources/js/hotel/dash-hotel-info.js')
</x-app-layout>
