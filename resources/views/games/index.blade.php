<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Week '.$week.' Games') }}@if(App::environment('local'))
                <span class="text-red-400 font-extralight"> - Local Development</span>
            @endif
        </h2>
    </x-slot>

    <div class="pb-6">
        <div class="py-1 md:py-4 lg:py-6">
            <div class="max-w-7xl mx-auto">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 md:p-4 lg:p-6 text-gray-900">
                        <div>
                            <ul role="list"
                                class="grid grid-cols-1 gap-2 md:gap-4 lg:gap-6 md:grid-cols-2 lg:grid-cols-3 text-sm">
                                @foreach($games as $game)
                                    <li class="col-span-1 divide-y divide-gray-200 border border-gray-300 rounded-lg bg-gray-50 shadow-md md:shadow-lg">
                                        <div class="flex w-full items-center justify-between py-4 lg:py-6">
                                            <div class="flex-1">
                                                <div class="grid grid-cols-2 text-gray-900 mb-2 px-4 lg:px-6">
                                                    <span class="flex items-center">
                                                        {{ $game->start_at->format('D, M d, g:i A') }}
                                                    </span>
                                                    <span class="text-right">
                                                        {{ $game->status }}
                                                    </span>
                                                </div>

                                                <div
                                                    class="flex justify-between items-center leading-6 @if($game->away_spread < 0) uppercase @endif @if($game->status <> "Not Started" AND $game->away_score + $game->away_spread <= $game->home_score) bg-red-200 text-red-700 @endif @if($game->status <> "Not Started" AND $game->away_score + $game->away_spread > $game->home_score) bg-green-300 text-green-800 @endif px-4 lg:px-6">
                                                    <div
                                                        class="text-left">{{ $game->away_team->yahoo_name }}
                                                        ({{ $game->away_spread }})
                                                    </div>
                                                    <div class="text-right">{{ $game->away_score }}</div>
                                                </div>
                                                <div
                                                    class="flex justify-between items-center leading-6 @if($game->home_spread < 0) uppercase @endif @if($game->status <> "Not Started" AND $game->home_score + $game->home_spread <= $game->away_score) bg-red-200 text-red-700 @endif @if($game->status <> "Not Started" AND $game->home_score + $game->home_spread > $game->away_score) bg-green-300 text-green-800 @endif px-4 lg:px-6">
                                                    <div
                                                        class="text-left">{{ $game->home_team->yahoo_name }}
                                                        ({{ $game->home_spread }})
                                                    </div>
                                                    <div class="text-right">{{ $game->home_score }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
