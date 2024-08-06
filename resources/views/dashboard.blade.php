<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Week by Week Results through Week '.$week) }}@if(App::environment('local'))<span class="text-red-400 font-extralight"> - Local Development</span>@endif
        </h2>
    </x-slot>



    <div class="pb-6 mx-2">
        <div class="max-w-7xl mx-auto px-2 lg:px-4">
            <div class="mt-8 xs:mx-0.5 sm:mx-6 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table id="weekly_picks" class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 1
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 2
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 3
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 4
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 5
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 6
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 7
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 8
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 9
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 10
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 11
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 12
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 13
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 14
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 15
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 16
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 17
                                    </th>
                                    <th scope="col"
                                        class="px-1 py-2 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        WK 18
                                    </th>
                                    <th scope="col"
                                        class="py-2 border">
                                    </th>
                                    <th scope="col"
                                        class="pl-1 pr-2 py-2 text-left text-xs text-right font-medium uppercase tracking-wide text-gray-500 border">
                                        WINS
                                    </th>
                                    <th scope="col"
                                        class="pl-1 pr-2 py-2 text-left text-xs text-right font-medium uppercase tracking-wide text-gray-500 border">
                                        LOSSES
                                    </th>
                                    <th scope="col"
                                        class="pl-1 pr-2 py-2 text-left text-xs text-right font-medium uppercase tracking-wide text-gray-500 border">
                                        WIN %
                                    </th>
                                    <th scope="col"
                                        class="pl-1 pr-2 py-2 text-left text-xs text-right font-medium uppercase tracking-wide text-gray-500 border">
                                        WINNINGS
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach($weekly_wins_losses as $pick=>$weeklyPicks)
                                    <tr>
                                        <td class="whitespace-nowrap px-1 py-2 text-sm font-medium text-gray-900 border">
                                            {{ $pick }}
                                        </td>
                                        @foreach($weeklyPicks as $key=>$value)
                                            @if($value->week_id <> 18)
                                                <td class="whitespace-nowrap px-1 py-2 text-sm text-center font-medium text-gray-900 border @if($value->wins == 5) bg-green-100 text-green-900 font-bold @endif">
                                                    {{ $value->wins}} - {{ $value->losses }}
                                                </td>
                                            @else
                                                <td class="whitespace-nowrap px-1 py-2 text-sm text-center font-medium text-gray-900 border">
                                                    {{ $value->wins}} - {{ $value->losses }}
                                                </td>
                                            @endif
                                            @if($loop->last)
                                                @if($loop->count < 18)
                                                    @for($i = $loop->count; $i < 18; $i++)
                                                        <td class="whitespace-nowrap pl-3 pr-2 text-sm font-medium text-gray-900 border"></td>
                                                    @endfor
                                                @endif
                                                <td class="py-2 bg-gray-50 border"></td>
                                                <td class="whitespace-nowrap pl-1 pr-2 py-2 text-sm text-right font-medium text-gray-900 border">
                                                    {{ $value->total_wins }}
                                                </td>
                                                <td class="whitespace-nowrap pl-1 pr-2 py-2 text-sm text-right font-medium text-gray-900 border">
                                                    {{ $value->total_losses }}
                                                </td>
                                                <td class="whitespace-nowrap pl-1 pr-2 py-2 text-sm text-right font-medium text-gray-900 border">
                                                    {{ number_format($value->total_wins == 0 ? 0 : ($value->total_wins / ($value->total_wins + $value->total_losses)) * 100, 2) }}%
                                                </td>
                                                <td class="whitespace-nowrap pl-1 pr-2 py-2 text-sm text-right font-medium text-gray-900 border">
                                                    ${{ number_format($value->winnings / 100, 2) }}
                                                </td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                setTimeout(function () {
                    location.reload();
                }, 60000);
            });
        </script>
    @endpush
</x-app-layout>


{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
