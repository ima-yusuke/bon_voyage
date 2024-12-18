<x-app-layout>
    <div class="flex justify-center items-center w-full h-full">
        <div class="bg-white h-full w-[90%] md:w-[70%] my-10 px-8 md:px-14 py-14 rounded-lg flex flex-col gap-10">
            <table class="table-auto border-collapse border border-gray-300 w-full">
                <thead class="bg-gray-400 text-white">
                <tr>
                    <th class="py-2 border border-gray-300">実施日</th>
                    <th class="py-2 border border-gray-300">学校名</th>
                    <th class="py-2 border border-gray-300">タイトル</th>
                    <th class="border border-gray-300">方面</th>
                    <th class="border border-gray-300">受注会社</th>
                    <th class="border border-gray-300">状態</th>
                    <th class="border border-gray-300">担当者</th>
                    <th class="border border-gray-300">詳細</th>
                    <th class="border border-gray-300">削除</th>
                </tr>
                </thead>
                <tbody>
                @foreach($travels as $travel)
                    <tr>
                        <td class="text-center border border-gray-300 py-2">{{ $travel["leave_date"] }}</td>
                        <td class="text-center border border-gray-300">{{ $travel["name"] }}</td>
                        <td class="text-center border border-gray-300">{{ $travel["title"] }}</td>
                        <td class="text-center border border-gray-300">{{ $travel["direction"] }}</td>
                        @if($travel["agent"]===null)
                            <td class="text-center border border-gray-300">不明</td>
                        @else
                            <td class="text-center border border-gray-300">{{ $travel["agent"] }}</td>
                        @endif
                        @if($travel["status"]===null)
                            <td class="text-center border border-gray-300">-</td>
                        @else
                            <td class="text-center border border-gray-300">{{ $travel["status"] }}</td>
                        @endif
                        @if($travel["charge_person"]===null)
                            <td class="text-center border border-gray-300">-</td>
                        @else
                            <td class="text-center border border-gray-300">{{ $travel["charge_person"] }}</td>
                        @endif
                        <td class="text-center border border-gray-300">
                            <a href="{{ route('tourist.school.travel.detail', ['id' => $travel["id"]]) }}" class="text-blue-500">詳細</a>
                        </td>
                        <td class="text-center border border-gray-300">
                            <form action="{{ route('hotel.order.detail', ['id' => $travel["id"]]) }}" method="post">
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
