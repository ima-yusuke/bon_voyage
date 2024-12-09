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

                    {{--タブメニュー--}}
                    <div id="default-tab-content">
                        <x-dash-tab :menuData="[['id'=>'basic_info','title'=>'基本情報'],['id'=>'meal_info','title'=>'お食事'],['id'=>'floor_info','title'=>'宿泊条件']
                        ,['id'=>'building_info','title'=>'館内情報']]"></x-dash-tab>
                    </div>

                    {{--基本情報--}}
                    <article class="hidden flex flex-col gap-4" id="basic_info" role="tabpanel" aria-labelledby="basic_info-tab">
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

                        <x-dash-form-component title="最大受入人数" flag={{true}}>
                            <x-dash-form-input type="number" title="320"/>
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

                        <x-dash-form-component title="電話番号" flag={{true}}>
                            <x-dash-form-input type="tel" title="例: 012-234-5678"/>
                        </x-dash-form-component>

                        <x-dash-form-component title="FAX" flag={{true}}>
                            <x-dash-form-input type="tel" title="例: 012-234-9876"/>
                        </x-dash-form-component>
                    </article>

                    {{--お食事--}}
                    <article class="hidden flex flex-col gap-4" id="meal_info" role="tabpanel" aria-labelledby="meal_info-tab">
                        <x-dash-form-component title="夕食形式" flag={{true}}>
                            <p>※複数選択可</p>
                            <x-dash-form-checkbox name="dinner_meal_option"
                                                  :dataArray="[['value' => 1, 'title' => 'ビュッフェ'],['value' => 2, 'title' => '卓盛り'],['value' => 3, 'title' => '個食'],
                                       ['value' => 4, 'title' => 'テーブルマナー'],['value' => 5, 'title' => '提供不可']]"
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="朝食形式" flag={{true}}>
                            <p>※複数選択可</p>
                            <x-dash-form-checkbox name="morning_meal_option"
                                                  :dataArray="[['value' => 1, 'title' => 'ビュッフェ'],['value' => 2, 'title' => '卓盛り'],['value' => 3, 'title' => '個食'],
                                      ['value' => 4, 'title' => '提供不可']]"
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="夕食時間" flag={{false}}>
                            <aside class="flex items-center gap-4">
                                <x-dash-form-input type="time" timeId="startDinnerTime"/>
                                <p>から</p>
                                <x-dash-form-input type="time" timeId="endDinnerTime"/>
                                <p>まで</p>
                            </aside>
                        </x-dash-form-component>

                        <x-dash-form-component title="朝食時間" flag={{false}}>
                            <aside class="flex items-center gap-4">
                                <x-dash-form-input type="time" timeId="startMorningTime"/>
                                <p>から</p>
                                <x-dash-form-input type="time" timeId="endMorningTime"/>
                                <p>まで</p>
                            </aside>
                        </x-dash-form-component>

                        <x-dash-form-component title="食事会場" flag={{false}}>
                            <article id="venue_container" class="flex flex-col justify-center items-center w-full gap-6">
                                <aside class="flex items-center gap-4 w-full">
                                    <x-dash-form-input type="text" title="会場名" />
                                    <x-dash-form-input type="number" title="最大収容人数" />
                                </aside>
                                <div id="venue_memo_container" class="flex flex-col gap-2 w-full">
                                    <p>※備考欄</p>
                                    <x-dash-form-input type="text" title="例: 300名様以上は1会場2回転にて対応" />
                                </div>
                                <button id="add_venue_btn" type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                                    会場追加
                                </button>
                            </article>
                        </x-dash-form-component>

                        <x-dash-form-component title="アレルギー対応" flag={{true}}>
                            <x-dash-form-checkbox name="allergy"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可']]"
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="ハラル食対応" flag={{true}}>
                            <x-dash-form-checkbox name="halal"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可']]"
                            />
                        </x-dash-form-component>
                    </article>

                    {{--宿泊条件--}}
                    <article class="hidden flex flex-col gap-4" id="floor_info" role="tabpanel" aria-labelledby="floor_info-tab">
                        <x-dash-form-component title="フロア貸切" flag={{true}}>
                            <x-dash-form-checkbox name="floor_private_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => '要相談']]"
                            />
                        </x-dash-form-component>
                        <x-dash-form-component title="男女別フロア" flag={{true}}>
                            <x-dash-form-checkbox name="floor_sex_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => '要相談']]"
                            />
                        </x-dash-form-component>
                        <x-dash-form-component title="全館貸切" flag={{true}}>
                            <x-dash-form-checkbox name="hotel_private_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => '要相談']]"
                            />
                        </x-dash-form-component>
                        <x-dash-form-component title="他校同宿" flag={{true}}>
                            <x-dash-form-checkbox name="other_school_option"
                                                  :dataArray="[['value' => 1, 'title' => '有'],['value' => 2, 'title' => '小学生団体の同宿可能性有'],['value' => 3, 'title' => '無'],
                                                    ['value' => 4, 'title' => '要相談']]"
                            />
                        </x-dash-form-component>
                    </article>

                    {{--館内情報--}}
                    <article class="hidden flex flex-col gap-4" id="building_info" role="tabpanel" aria-labelledby="building_info-tab">
                        <x-dash-form-component title="大浴場利用" flag={{true}}>
                            <x-dash-form-checkbox name="bath_private_option"
                                                  :dataArray="[['value' => 1, 'title' => '可（貸切）'],['value' => 2, 'title' => '可（一般客共用）'],['value' => 3, 'title' => '不可']
                                                    ,['value' => 4, 'title' => 'なし']]"
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="売店利用" flag={{true}}>
                            <x-dash-form-checkbox name="shop_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => 'なし']]"
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="ゲームセンター利用" flag={{true}}>
                            <x-dash-form-checkbox name="game_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => 'なし']]"
                            />
                        </x-dash-form-component>
                    </article>
                </form>
            </section>
        </div>
    </div>
    @vite('resources/js/hotel/dash-hotel-info.js')
</x-app-layout>
