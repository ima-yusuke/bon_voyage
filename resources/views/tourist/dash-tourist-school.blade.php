<x-app-layout>
    <div class="flex justify-center items-center w-full h-full">
        <div class="bg-white h-full w-[90%] md:w-[70%] my-10 px-8 md:px-14 py-14 rounded-lg flex flex-col gap-10">

            <article class="md:flex items-center gap-8">

                {{--並び替え--}}
                <form class="flex flex-col gap-4">
                    <p class="border-b-2 border-solid border-gray-400 pb-2"><i class="fa-solid fa-sort pr-1"></i>並び替え</p>
                    <select>
                        <option value="">選択してください</option>
                        <option value="0">公立・私立</option>
                        <option value="1">区分</option>
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

            <table class="table-auto border-collapse border border-gray-300 w-full">
                <thead class="bg-gray-400 text-white">
                <tr>
                    <th class="py-2 border border-gray-300">学校名</th>
                    <th class="border border-gray-300">公立・私立</th>
                    <th class="border border-gray-300">区分</th>
                    <th class="border border-gray-300">詳細</th>
                    <th class="border border-gray-300">削除</th>
                </tr>
                </thead>
                <tbody>
                @foreach($schools as $school)
                    <tr>
                        <td class="text-center border border-gray-300 py-2">{{ $school["name"] }}</td>
                        <td class="text-center border border-gray-300">{{ $school["category"] }}</td>
                        <td class="text-center border border-gray-300">{{ $school["type"] }}</td>
                        <td class="text-center border border-gray-300">
                            <a href="{{ route('tourist.school.detail', ['id' => $school["id"]]) }}" class="text-blue-500">詳細</a>
                        </td>
                        <td class="text-center border border-gray-300">
                            <form action="{{ route('hotel.order.detail', ['id' => $school["id"]]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
