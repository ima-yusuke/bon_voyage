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
                        ,['id'=>'building_info','title'=>'館内情報'] ,['id'=>'room_info','title'=>'お部屋'],['id'=>'other_info','title'=>'その他']]"></x-dash-tab>
                    </div>

                    {{--基本情報--}}
                    <article class="hidden flex flex-col gap-4" id="basic_info" role="tabpanel" aria-labelledby="basic_info-tab">
                        <x-dash-form-component title="宿泊施設名" flag={{true}}>
                            <x-dash-form-input type="text" title="宿泊施設名"/>
                        </x-dash-form-component>

                        <x-dash-form-component title="イメージ画像" flag={{true}}>
                            <p>※一覧に表示されます。（外観画像など）</p>
                            <x-dash-form-input type="file" role="image"/>
                        </x-dash-form-component>

                        <x-dash-form-component title="PR画像" flag={{false}}>
                            <p>※お部屋やお食事会場等</p>
                            <x-dash-form-input type="file" role="image"/>
                        </x-dash-form-component>

                        <x-dash-form-component title="最大受入人数" flag={{true}}>
                            <x-dash-form-input type="number" title="320"/>
                        </x-dash-form-component>

                        <x-dash-form-component title="住所" flag={{true}}>
                            <aside class="flex flex-col justify-center gap-4">
                                <x-zipcode place="hotel"></x-zipcode>
                            </aside>
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

                        <x-dash-form-component title="公式サイトURL" flag={{false}}>
                            <x-dash-form-input type="text" title="例: https://www.google.com"/>
                        </x-dash-form-component>
                    </article>

                    {{--お食事--}}
                    <article class="hidden flex flex-col gap-4" id="meal_info" role="tabpanel" aria-labelledby="meal_info-tab">
                        <x-dash-form-component title="夕食形式" flag={{true}}>
                            <p>※複数選択可</p>
                            <x-dash-form-checkbox name="dinner_meal_option"
                                                  :dataArray="[['value' => 1, 'title' => 'ビュッフェ'],['value' => 2, 'title' => '卓盛り'],['value' => 3, 'title' => '個食'],
                                       ['value' => 4, 'title' => 'テーブルマナー'],['value' => 5, 'title' => '提供不可']]"
                                                  check={{true}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="夕食時間" flag={{true}}>
                            <aside class="flex items-center gap-4">
                                <x-dash-form-input type="time" timeId="startDinnerTime"/>
                                <p>から</p>
                                <x-dash-form-input type="time" timeId="endDinnerTime"/>
                                <p>まで</p>
                            </aside>
                        </x-dash-form-component>

                        <x-dash-form-component title="朝食形式" flag={{true}}>
                            <p>※複数選択可</p>
                            <x-dash-form-checkbox name="morning_meal_option"
                                                  :dataArray="[['value' => 1, 'title' => 'ビュッフェ'],['value' => 2, 'title' => '卓盛り'],['value' => 3, 'title' => '個食'],
                                      ['value' => 4, 'title' => '提供不可']]"
                                                  check={{true}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="朝食時間" flag={{true}}>
                            <aside class="flex items-center gap-4">
                                <x-dash-form-input type="time" timeId="startMorningTime"/>
                                <p>から</p>
                                <x-dash-form-input type="time" timeId="endMorningTime"/>
                                <p>まで</p>
                            </aside>
                        </x-dash-form-component>

                        <div id="meal_detail_container" class="flex flex-col gap-4">

                            <x-dash-form-component title="食事会場" flag={{true}}>
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
                                                      check={{false}}
                                />
                            </x-dash-form-component>

                            <x-dash-form-component title="ハラル食対応" flag={{true}}>
                                <x-dash-form-checkbox name="halal"
                                                      :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可']]"
                                                      check={{false}}
                                />
                            </x-dash-form-component>
                        </div>

                    </article>

                    {{--宿泊条件--}}
                    <article class="hidden flex flex-col gap-4" id="floor_info" role="tabpanel" aria-labelledby="floor_info-tab">
                        <x-dash-form-component title="フロア貸切" flag={{true}}>
                            <x-dash-form-checkbox name="floor_private_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => '要相談']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>
                        <x-dash-form-component title="男女別フロア" flag={{true}}>
                            <x-dash-form-checkbox name="floor_sex_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => '要相談']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>
                        <x-dash-form-component title="全館貸切" flag={{true}}>
                            <x-dash-form-checkbox name="hotel_private_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => '要相談']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>
                        <x-dash-form-component title="他校同宿" flag={{true}}>
                            <x-dash-form-checkbox name="other_school_option"
                                                  :dataArray="[['value' => 1, 'title' => '有'],['value' => 2, 'title' => '小学生団体の同宿可能性有'],['value' => 3, 'title' => '無'],
                                                    ['value' => 4, 'title' => '要相談']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>
                    </article>

                    {{--館内情報--}}
                    <article class="hidden flex flex-col gap-4" id="building_info" role="tabpanel" aria-labelledby="building_info-tab">
                        <x-dash-form-component title="大浴場利用" flag={{true}}>
                            <x-dash-form-checkbox name="bath_private_option"
                                                  :dataArray="[['value' => 1, 'title' => '可（貸切）'],['value' => 2, 'title' => '可（一般客共用）'],['value' => 3, 'title' => '不可']
                                                    ,['value' => 4, 'title' => 'なし']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="売店利用" flag={{true}}>
                            <x-dash-form-checkbox name="shop_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => '無']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="ゲームセンター利用" flag={{true}}>
                            <x-dash-form-checkbox name="game_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可'],['value' => 3, 'title' => '無']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="お酒自販機" flag={{true}}>
                            <x-dash-form-checkbox name="alcohol_option"
                                                  :dataArray="[['value' => 1, 'title' => '有（停止可）'],['value' => 2, 'title' => '有（停止不可）'],['value' => 3, 'title' => '無']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="タバコ自販機" flag={{true}}>
                            <x-dash-form-checkbox name="tobacco_option"
                                                  :dataArray="[['value' => 1, 'title' => '有（停止可）'],['value' => 2, 'title' => '有（停止不可）'],['value' => 3, 'title' => '無']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="レクリエーション会場" flag={{true}}>
                            <x-dash-form-checkbox name="recreation_option"
                                                  :dataArray="[['value' => 1, 'title' => '有'],['value' => 2, 'title' => '無']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="貴重品預かり" flag={{true}}>
                            <x-dash-form-checkbox name="valuables_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="エレベーター" flag={{true}}>
                            <x-dash-form-checkbox name="elevator_option"
                                                  :dataArray="[['value' => 1, 'title' => '有（全員利用可）'],['value' => 2, 'title' => '有（車椅子など特定の生徒のみ）'],['value' => 3, 'title' => '利用不可']
                                                    ,['value' => 4, 'title' => '無']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>
                    </article>

                    {{--お部屋--}}
                    <article class="hidden flex flex-col gap-4" id="room_info" role="tabpanel" aria-labelledby="room_info-tab">

                        <x-dash-form-component title="定員" flag={{true}}>
                            <aside class="flex items-center gap-4">
                                <x-dash-form-input type="number" title="2"/>
                                <p class="flex-shrink-0">人から</p>
                                <x-dash-form-input type="number" title="3"/>
                                <p class="flex-shrink-0">人まで</p>
                            </aside>
                        </x-dash-form-component>

                        <x-dash-form-component title="付属品" flag={{true}}>
                            <x-dash-form-checkbox name="amenities_option"
                                                  :dataArray="[['value' => 1, 'title' => 'バスタオル'],['value' => 2, 'title' => 'フェイスタオル'],['value' => 3, 'title' => 'シャンプー']
                                                    ,['value' => 4, 'title' => 'ボディソープ'],['value' => 5, 'title' => '歯ブラシ'],['value' => 6, 'title' => 'ドライヤー'],['value' => 7, 'title' => 'ポット']
                                                    ,['value' => 8, 'title' => '冷蔵庫'],['value' => 9, 'title' => '金庫'],['value' => 10, 'title' => '該当なし']]"
                                                  check={{true}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="内線利用" flag={{true}}>
                            <x-dash-form-checkbox name="internal_option"
                                                  :dataArray="[['value' => 1, 'title' => '可（カット可）'],['value' => 2, 'title' => '可（カット不可）'],['value' => 3, 'title' => '無']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="外線利用" flag={{true}}>
                            <x-dash-form-checkbox name="external_option"
                                                  :dataArray="[['value' => 1, 'title' => '可（カット可）'],['value' => 2, 'title' => '可（カット不可）'],['value' => 3, 'title' => '無']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="鍵タイプ" flag={{true}}>
                            <x-dash-form-checkbox name="key_option"
                                                  :dataArray="[['value' => 1, 'title' => '金属製（オートロック有）'],['value' => 2, 'title' => '金属製（オートロック無）'],['value' => 3, 'title' => 'カードキー（オートロック有）']
                                                   ,['value' => 4, 'title' => 'カードキー（オートロック無）'],['value' => 5, 'title' => 'その他']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="部屋長・班長会議" flag={{true}}>
                            <x-dash-form-checkbox name="meeting_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>

                        <x-dash-form-component title="モーニングコール" flag={{true}}>
                            <x-dash-form-checkbox name="morning_call_option"
                                                  :dataArray="[['value' => 1, 'title' => '可'],['value' => 2, 'title' => '不可']]"
                                                  check={{false}}
                            />
                        </x-dash-form-component>
                    </article>

                    {{--その他--}}
                    <article class="hidden flex flex-col gap-4" id="other_info" role="tabpanel" aria-labelledby="other_info-tab">

                        <x-dash-form-component title="大型バス駐車場" flag={{true}}>
                            <aside class="flex items-center gap-4">
                                <x-dash-form-input type="number" title="例: 2"/>
                                <p class="flex-shrink-0">台</p>
                            </aside>
                        </x-dash-form-component>

                        <x-dash-form-component title="救急病院" flag={{true}}>
                            <aside class="flex flex-col justify-center gap-4">

                                <div class="flex flex-col gap-2">
                                    <p>【施設名】</p>
                                    <x-dash-form-input type="text" title="例: 〇〇病院"/>
                                </div>

                                <x-zipcode place="hospital"></x-zipcode>

                                <div>
                                    <p>【電話番号】</p>
                                    <x-dash-form-input type="tel" title="例: 012-234-5678"/>
                                </div>
                            </aside>
                        </x-dash-form-component>

                        <x-dash-form-component title="管轄消防署" flag={{true}}>
                            <aside class="flex flex-col justify-center gap-4">

                                <div class="flex flex-col gap-2">
                                    <p>【施設名】</p>
                                    <x-dash-form-input type="text" title="例: 〇〇消防署"/>
                                </div>

                                <x-zipcode place="fire_station"></x-zipcode>

                                <div>
                                    <p>【電話番号】</p>
                                    <x-dash-form-input type="tel" title="例: 012-234-5678"/>
                                </div>
                            </aside>
                        </x-dash-form-component>

                        <x-dash-form-component title="管轄警察署" flag={{true}}>
                            <aside class="flex flex-col justify-center gap-4">

                                <div class="flex flex-col gap-2">
                                    <p>【施設名】</p>
                                    <x-dash-form-input type="text" title="例: 〇〇警察署"/>
                                </div>

                                <x-zipcode place="police"></x-zipcode>

                                <div>
                                    <p>【電話番号】</p>
                                    <x-dash-form-input type="tel" title="例: 012-234-5678"/>
                                </div>
                            </aside>
                        </x-dash-form-component>

                        <x-dash-form-component title="管轄保健所" flag={{true}}>
                            <aside class="flex flex-col justify-center gap-4">

                                <div class="flex flex-col gap-2">
                                    <p>【施設名】</p>
                                    <x-dash-form-input type="text" title="例: 〇〇保健所"/>
                                </div>

                                <x-zipcode place="health_center"></x-zipcode>

                                <div>
                                    <p>【電話番号】</p>
                                    <x-dash-form-input type="tel" title="例: 012-234-5678"/>
                                </div>
                            </aside>
                        </x-dash-form-component>

                        <x-dash-form-component title="教育旅行用\nパンフレット" flag={{false}}>
                            <x-dash-form-input type="file" role="pdf"/>
                        </x-dash-form-component>

                        <x-dash-form-component title="その他PRや\n注意事項等" flag={{false}}>
                            <x-dash-form-input type="text" title="自家発電システムを完備しており、災害時にも安心です！"/>
                        </x-dash-form-component>
                    </article>
                </form>
            </section>
        </div>
    </div>
    @vite('resources/js/hotel/dash-hotel-info.js')
</x-app-layout>
