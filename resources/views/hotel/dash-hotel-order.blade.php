<x-app-layout>
    <div class="flex justify-center items-center w-full h-full">
        <div class="bg-white h-full w-[90%] md:w-[70%] my-10 px-8 md:px-14 py-14 rounded-lg flex flex-col gap-10">
            <p>・並び替えでアレルギーなどは✗のがどこか探したいのでは？</p>
            <p>・ぐるとらのようにカレンダー表示のが良い？</p>

            <article class="md:flex items-center gap-8">
                {{--並び替え--}}
                <form class="flex flex-col gap-4">
                    <p class="border-b-2 border-solid border-gray-400 pb-2"><i class="fa-solid fa-sort pr-1"></i>並び替え</p>
                    <select>
                        <option value="0">実施日</option>
                        <option value="1">学校名</option>
                        <option value="2">人数</option>
                        <option value="3">アレルギーリスト</option>
                        <option value="4">代替食</option>
                        <option value="5">食事会場</option>
                        <option value="6">お部屋割</option>
                        <option value="7">旅行会社</option>
                        <option value="8">受注状態</option>"
                    </select>
                </form>

                {{--検索--}}
                <form class="flex flex-col gap-4">
                    <p class="border-b-2 border-solid border-gray-400 pb-2"><i class="fa-solid fa-magnifying-glass pr-1"></i>検索</p>
                    <aside>
                        <input type="text" placeholder="学校名">
                        <button class="bg-blue-500 px-4 py-2 rounded-lg text-white">検索</button>
                    </aside>
                </form>
            </article>

            {{--受注校リスト--}}
            <table class="table-auto border-collapse border border-gray-300 w-full">
                <thead class="bg-gray-400 text-white">
                <tr>
                    <th class="py-2 border border-gray-300">実施日</th>
                    <th class="border border-gray-300">学校名</th>
                    <th class="border border-gray-300">人数</th>
                    <th class="border border-gray-300">アレルギーリスト</th>
                    <th class="border border-gray-300">代替食</th>
                    <th class="border border-gray-300">食事会場</th>
                    <th class="border border-gray-300">お部屋割</th>
                    <th class="border border-gray-300">旅行会社</th>
                    <th class="border border-gray-300">受注状態</th>
                    <th class="border border-gray-300">詳細</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td class="text-center border border-gray-300 py-2">{{ $order["date"] }}</td>
                        <td class="text-center border border-gray-300">{{ $order["school"] }}</td>
                        <td class="text-center border border-gray-300">{{ $order["students"] }}</td>
                        <td class="text-center border border-gray-300">
                            @if($order["allergy"])
                                ◯
                            @else
                                ×
                            @endif
                        </td>
                        <td class="text-center border border-gray-300">
                            @if($order["substitute"])
                                ◯
                            @else
                                ×
                            @endif
                        </td>
                        <td class="text-center border border-gray-300">
                            @if($order["venue"])
                                ◯
                            @else
                                ×
                            @endif
                        </td>
                        <td class="text-center border border-gray-300">
                            @if($order["room"])
                                ◯
                            @else
                                ×
                            @endif
                        </td>
                        <td class="text-center border border-gray-300">{{ $order["agent"] }}</td>
                        <td class="text-center border border-gray-300">{{ $order["status"] }}</td>
                        <td class="text-center border border-gray-300">
                            <a href="{{ route('hotel.order', ['id' => $order["id"]]) }}" class="text-blue-500">詳細</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
