<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Week '.$week.' Games') }}@if(App::environment('local'))
                <span class="text-red-400 font-extralight"> - Local Development</span>
            @endif
        </h2>
    </x-slot>

    @if($games->count() == 0)
        <div class="pb-6">
            <div class="py-1 md:py-4 lg:py-6">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-2 md:p-4 lg:p-6 text-gray-900">
                            <p class="m-3">There are no games to pick!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
    <div class="pb-6">
        <div class="py-1 md:py-4 lg:py-6">
            <div class="max-w-7xl mx-auto">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 md:p-4 lg:p-6 text-gray-900">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                        <!-- Success Message -->
                        @if(session()->has('success'))
                            <div x-data="{ show: true }"
                                 x-init="setTimeout(() => show = false, 4000)"
                                 x-show="show"
                                 class="rounded-md bg-green-50 p-4"
                            >
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <!-- Heroicon name: solid/check-circle -->
                                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3 mb-2">
                                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('picks.store') }}">
                            @csrf

                            <div class="flex justify-between px-2 md:px-4 py-3 font-normal">
                                <div>
                                    Favorite is UPPERCASE
                                </div>
                            </div>

                            <input name="week_id" type="number" value="{{ $week }}" hidden>
                            <input name="user_id" type="number" value="{{Auth::user()->id}}" hidden>

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

                                                <div class="flex items-center px-4 lg:px-6">
                                                    <input id="team1" name="game{{ $game->id }}" type="radio" value="{{ $game->away_team_id }}"
                                                           class="h-4 w-4 border-gray-300 text-indigo-600"
                                                           @checked(in_array($game->away_team_id, $picks))
                                                           @readonly($game->start_at < \Carbon\Carbon::now() and in_array($game->away_team_id, $picks))
                                                           @disabled($reveal_picks < \Carbon\Carbon::now())
                                                           @disabled($game->start_at < \Carbon\Carbon::now())
                                                           />
                                                    <label for="team1"
                                                           class="ml-3 block leading-6 @if($game->away_spread < 0) uppercase @endif text-gray-900 @if($game->start_at < \Carbon\Carbon::now() or $reveal_picks < \Carbon\Carbon::now()) text-gray-400 @endif">{{ $game->away_team->yahoo_name }}
                                                        ({{ $game->away_spread }})</label>
                                                </div>
                                                <div class="flex items-center px-4 lg:px-6">
                                                    <input id="team2" name="game{{ $game->id }}" type="radio" value="{{ $game->home_team_id }}"
                                                           class="h-4 w-4 border-gray-300 text-indigo-600"
                                                           @checked(in_array($game->home_team_id, $picks))
                                                           @readonly($game->start_at < \Carbon\Carbon::now() and in_array($game->home_team_id, $picks))
                                                           @disabled($reveal_picks < \Carbon\Carbon::now())
                                                           @disabled($game->start_at < \Carbon\Carbon::now())
                                                           />
                                                    <label for="team2"
                                                           class="ml-3 block leading-6 @if($game->home_spread < 0) uppercase @endif text-gray-900 @if($game->start_at < \Carbon\Carbon::now() or $reveal_picks < \Carbon\Carbon::now()) text-gray-400 @endif">{{ $game->home_team->yahoo_name }}
                                                        ({{ $game->home_spread }})</label>
                                                </div>
                                                <div class="flex justify-end mt-2 px-2 md:px-4">
                                                    <button type="button" id="radioReset"
                                                            class="inline-flex items-center px-6 py-2 bg-blue-50 border border-transparent border-blue-700 rounded-md font-semibold text-xs text-blue-800 uppercase tracking-widest hover:bg-blue-100 active:bg-blue-200 focus:outline-none focus:border-blue-800 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150"
                                                            onclick="radioButtonReset({{ $game->id }})"
                                                            @if($game->start_at < \Carbon\Carbon::now() or $reveal_picks < \Carbon\Carbon::now()) disabled @endif>
                                                        {{ __('Clear Pick') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <hr class="mt-4">

                            <input id="pick_count" name="pick_count" type="number" value="0" hidden>

                            <div class="flex justify-end px-2 md:px-4 py-3 font-normal">
                                <div
                                    class="font-semibold  @if($reveal_picks < \Carbon\Carbon::now()) hidden @endif">
                                    Picks: <span class="picks"></span>
                                    of {{ $max_picks }}
                                </div>
                            </div>

                            <div
                                class="flex justify-end bg-white px-2 md:px-4 py-3  @if($reveal_picks < \Carbon\Carbon::now()) hidden @endif">
                                <x-danger-button>
                                    {{ __('Reset') }}
                                </x-danger-button>
                                <x-button class="ml-4">
                                    {{ __('Submit') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Scripts -->
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
            resetPickCount();

            $('input[type=radio]').change(function () {
                resetPickCount();
            });

            function radioButtonReset(id) {
                let elem = "game" + id;
                let ele = document.getElementsByName(elem);
                for (let i = 0; i < ele.length; i++)
                    ele[i].checked = false;
                resetPickCount();
            }

            function resetPickCount() {
                $('#pick_count').val($(':radio:checked').length);
                $('.picks').text($(':radio:checked').length);

            }
        </script>
    @endpush
</x-app-layout>
