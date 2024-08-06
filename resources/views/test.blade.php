<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Testing') }}
        </h2>
    </x-slot>

    <div class="py-1 md:py-4 lg:py-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 md:p-4 lg:p-6 text-gray-900">
                    <ul role="list" class="grid grid-cols-1 gap-2 md:gap-4 lg:gap-6 md:grid-cols-2 lg:grid-cols-3 text-sm">
                        <li class="col-span-1 divide-y divide-gray-200 border border-gray-300 rounded-lg bg-gray-50 shadow-md md:shadow-lg">
                            <div class="flex w-full items-center justify-between py-4 lg:py-6">
                                <div class="flex-1">
                                    <div class="grid grid-cols-2 text-gray-900 mb-2 px-4 lg:px-6">
                                        <span class="flex items-center">
                                            Thu 10/29/24 7:00 PM
                                        </span>
                                        <span class="text-right">
                                            Final
                                        </span>
                                    </div>
                                    <div class="flex justify-between items-center font-medium leading-6 bg-red-200 text-red-700 px-4 lg:px-6">
                                        <div class="text-left">Mid Tennessee State Blue Raiders</div>
                                        <div class="text-right">10</div>
                                    </div>
                                    <div class="flex justify-between items-center font-medium leading-6 uppercase bg-green-300 text-green-800 px-4 lg:px-6">
                                        <div class="text-left">Mid Tennessee State Blue Raiders</div>
                                        <div class="text-right">42</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-span-1 divide-y divide-gray-200 border border-gray-300 rounded-lg bg-gray-50 shadow-md md:shadow-lg">
                            <div class="flex w-full items-center justify-between py-4 lg:py-6">
                                <div class="flex-1">
                                    <div class="grid grid-cols-2 text-gray-900 mb-2 px-4 lg:px-6">
                                        <span class="flex items-center">
                                            Thu 10/29/24 7:30 PM
                                        </span>
                                        <span class="text-right">
                                            Final
                                        </span>
                                    </div>
                                    <div class="flex justify-between items-center font-medium leading-6 uppercase bg-red-200 text-red-700 px-4 lg:px-6">
                                        <div class="text-left">Akron Zips</div>
                                        <div class="text-right">17</div>
                                    </div>
                                    <div class="flex justify-between items-center font-medium leading-6 bg-green-300 text-green-800 px-4 lg:px-6">
                                        <div class="text-left">Rice Owls</div>
                                        <div class="text-right">13</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-span-1 divide-y divide-gray-200 border border-gray-300 rounded-lg bg-gray-50 shadow-md md:shadow-lg">
                            <div class="flex w-full items-center justify-between py-4 lg:py-6">
                                <div class="flex-1">
                                    <div class="grid grid-cols-2 text-gray-900 mb-2 px-4 lg:px-6">
                                        <span class="flex items-center">
                                            Thu 10/29/24 8:00 PM
                                        </span>
                                        <span class="text-right">
                                            Final
                                        </span>
                                    </div>
                                    <div class="flex justify-between items-center font-medium leading-6 uppercase bg-green-300 text-green-800 px-4 lg:px-6">
                                        <div class="text-left">Utah Utes</div>
                                        <div class="text-right">38</div>
                                    </div>
                                    <div class="flex justify-between items-center font-medium leading-6 bg-red-200 text-red-700 px-4 lg:px-6">
                                        <div class="text-left">Florida International Panthers</div>
                                        <div class="text-right">16</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-span-1 divide-y divide-gray-200 border border-gray-300 rounded-lg bg-gray-50 shadow-md md:shadow-lg">
                            <div class="flex w-full items-center justify-between py-4 lg:py-6">
                                <div class="flex-1">
                                    <div class="grid grid-cols-2 text-gray-900 mb-2 px-4 lg:px-6">
                                        <span class="flex items-center">
                                            Fri 10/30/24 7:00 PM
                                        </span>
                                        <span class="text-right">
                                            Not Started
                                        </span>
                                    </div>
                                    <div class="flex items-center px-4 lg:px-6 font-medium">
                                        <input id="team1" name="game1" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600">
                                        <label for="team1" class="ml-3 block leading-6 text-gray-900">Mid Tennessee State Blue Raiders
                                            <span class="text-right">&nbsp;[+27]</span></label>
                                    </div>
                                    <div class="flex items-center px-4 lg:px-6 font-medium">
                                        <input id="team2" name="game1" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600">
                                        <label for="team2" class="ml-3 block leading-6 uppercase text-gray-900">Appalachian State Mountaineers
                                            <span class="text-right">&nbsp;[-27]</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-span-1 divide-y divide-gray-200 border border-gray-300 rounded-lg bg-gray-50 shadow-md md:shadow-lg">
                            <div class="flex w-full items-center justify-between space-x-6 p-4 lg:p-6">
                                <div class="flex-1">
                                    <div class="grid grid-cols-2 text-gray-900 mb-2">
                                        <span class="flex items-center">
                                            Fri 10/30/24 7:30 PM
                                        </span>
                                        <span class="text-right">
                                            Not Started
                                        </span>
                                    </div>
                                    <div class="flex items-center px-4 lg:px-6 font-medium">
                                        <input id="team1" name="game1" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600">
                                        <label for="team1" class="ml-3 block leading-6 uppercase text-gray-900">Akron Zips
                                            <span class="text-right">[-5]</span></label>
                                    </div>
                                    <div class="flex items-center px-4 lg:px-6 font-medium">
                                        <input id="team2" name="game1" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600">
                                        <label for="team2" class="ml-3 block leading-6 text-gray-900">Rice Owls
                                            <span class="text-right">[+5]</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-span-1 divide-y divide-gray-200 border border-gray-300 rounded-lg bg-gray-50 shadow-md md:shadow-lg">
                            <div class="flex w-full items-center justify-between space-x-6 p-4 lg:p-6">
                                <div class="flex-1">
                                    <div class="grid grid-cols-2 text-gray-900 mb-2">
                                        <span class="flex items-center">
                                            Fri 10/30/24 8:00 PM
                                        </span>
                                        <span class="text-right">
                                            Not Started
                                        </span>
                                    </div>
                                    <div class="flex items-center px-4 lg:px-6 font-medium">
                                        <input id="team2" name="game1" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600">
                                        <label for="team2" class="ml-3 block leading-6 uppercase text-gray-900">Utah Utes
                                            <span class="text-right">[-18]</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center px-4 lg:px-6 font-medium">
                                        <input id="team1" name="game1" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600">
                                        <label for="team1" class="ml-3 block leading-6 text-gray-900">Florida International Panthers
                                            <span class="text-right">[+18]</span></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
