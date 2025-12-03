<x-app-layout>
    <x-slot>
        <div class="max-w-7xl mx-auto px-4 lg:px-8 py-8">
            <div class="md:grid md:grid-cols-3 md:gap-8 items-start">

                <!-- Main column (left, spans 2) -->
                <div class="md:col-span-2 space-y-8">

                    <div class="relative">
                        <div class="absolute inset-x-0 top-6">
                            <div
                                class="h-1 bg-[linear-gradient(to_right,_#059669_0%,_#059669_60%,_#dc2626_60%,_#dc2626_100%)] "></div>
                        </div>

                        <ol class="flex justify-between items-start relative z-10 px-2">
                            @foreach([13,14,15,16,17,18,19] as $day)
                                @php
                                    $isRed = in_array($day, [17,18,19]);
                                    $bg = $isRed ? 'bg-red-700' : 'bg-emerald-500';
                                @endphp
                                <li class="flex flex-col items-center text-center w-12">
                                    <div
                                        class="{{ $bg }} text-white rounded-full w-10 h-10 flex items-center justify-center border-2 border-white shadow-lg -mt-6">
                                        <span class="font-semibold">{{ $day }}</span>
                                    </div>
                                    @if(in_array($day, [13, 14, 15, 16]))
                                        <img src="{{ Vite::asset('resources/images/roos.png') }}"
                                             alt="op deze afbeelding is een rode roos te zien"
                                             class="mt-3 h-12 w-auto">
                                    @endif
                                    @if(in_array($day, [17, 18, 19]))
                                        <img src="{{ Vite::asset('resources/images/verwelkteroos.png') }}"
                                             alt="op deze afbeelding is een verwelkte rode roos te zien"
                                             class="mt-3 h-12 w-auto">
                                    @endif
                                    <!-- small gift icon under day 15 and 18 -->
                                    @if(in_array($day, [15,18]))
                                        <img src="{{ Vite::asset('resources/images/gift.png') }}"
                                             alt="op deze afbeelding is een cadeau te zien"
                                             class="mt-2 h-6 w-auto">
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="bg-gradient-lap text-white rounded-xl p-6 shadow-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-4">Je zit op een reeks van <span class="font-bold">16 dagen</span>,
                                tijd voor een volgende stap!</h3>

                            <div class="flex flex-col md:flex-row gap-6 items-center">
                                <div class="flex-1 text-sm leading-relaxed">
                                    <p class="mb-4">
                                        Je laat zien dat je geeft om natuur. Waarom die impact niet groter maken?
                                    </p>
                                    <p class="mb-2">
                                        Word vrijwilliger of lid bij Natuurmonumenten en help mee om natuurgebieden te
                                        beschermen, nieuwe mensen te ontmoeten en echte verandering te creëren.
                                    </p>
                                    <p class="text-sm opacity-90 mt-4">Kleine moeite. Grote impact. Doe je mee?</p>
                                </div>

                                <div class="w-48 flex-shrink-0">
                                    <img src="{{ Vite::asset('resources/images/tuinieren.png') }}"
                                         alt="op deze afbeelding is een persoon te zien die aan het tuinieren is"
                                         class="w-full h-auto">
                                </div>
                            </div>
                        </div>

                        <div class=" mt-6 text-center">
                            <a href="https://www.natuurmonumenten.nl/word-lid"
                               class="inline-block btn-primary  font-semibold px-12 py-4 rounded-full shadow-lg">
                                Lid worden
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Right column (left, spans 2) -->
                <aside class="mt-8 md:mt-0">
                    <div class="relative">
                        <div class="bg-primary text-white font-bold text-2xl text-center py-6 rounded-t-lg shadow-md">
                            <h2>Beloningen!!!</h2>
                        </div>

                        <div
                            class="bg-gradient-lap  text-white rounded-b-lg p-6 shadow-lg -mt-2">
                            <div class="grid grid-cols-1 gap-3 text-sm mb-4 leading-relaxed">
                                <p>3-Token om de streak een dag te missen.</p>
                                <p>7-Je naam komt op de website van natuurmonumenten.</p>
                                <p>15-Ontvang een digitaal wandelboekje.</p>
                                <p>18-Je kan gratis parkeren bij een natuurgebied.</p>
                                <p>25-Ontvang een beloning van bezoekerscentra.</p>
                                <p>30-Er wordt een boom in jouw naam geplant door natuurmonumenten.</p>
                            </div>

                            <ul class="space-y-4 mt-4">
                                <li class="flex items-center gap-4">
                                    <img src="{{ Vite::asset('resources/images/gift.png') }}"
                                         alt="op deze afbeelding is een cadeau te zien"
                                         class="block h-9 w-auto p-1 bg-emerald-500 rounded-md text-gray-400">
                                    <div class="flex-1">
                                        <div class="font-semibold text-lg">Dag 3</div>
                                    </div>
                                    <div
                                        class="bg-emerald-500 text-white px-4 py-1 rounded-full flex items-center gap-2">
                                        <span>Geclaimed</span>
                                        <span class="text-sm">✓</span>
                                    </div>
                                </li>

                                <li class="flex items-center gap-4">
                                    <img src="{{ Vite::asset('resources/images/gift.png') }}"
                                         alt="op deze afbeelding is een cadeau te zien"
                                         class="block h-9 w-auto p-1 bg-emerald-500 rounded-md text-gray-400">
                                    <div class="flex-1">
                                        <div class="font-semibold text-lg">Dag 7</div>
                                    </div>
                                    <div
                                        class="bg-emerald-500 text-white px-4 py-1 rounded-full flex items-center gap-2">
                                        <span>Geclaimed</span>
                                        <span class="text-sm">✓</span>
                                    </div>
                                </li>

                                <li class="flex items-center gap-4">
                                    <img src="{{ Vite::asset('resources/images/gift.png') }}"
                                         alt="op deze afbeelding is een cadeau te zien"
                                         class="block h-9 w-auto p-1 bg-gift-orange rounded-md text-gray-400">
                                    <div class="flex-1">
                                        <div class="font-semibold text-lg">Dag 15</div>
                                    </div>
                                    <button
                                        class="bg-gift-orange text-white px-4 py-1 rounded-full font-semibold flex items-center gap-2 hover:bg-orange-600">
                                        Claim
                                        <span class="text-sm">→</span>
                                    </button>
                                </li>

                                <li class="flex items-center gap-4 opacity-90">
                                    <img src="{{ Vite::asset('resources/images/gift.png') }}"
                                         alt="op deze afbeelding is een cadeau te zien"
                                         class="block h-9 w-auto p-1 bg-gift-red rounded-md text-gray-400">
                                    <div class="flex-1">
                                        <div class="font-semibold text-lg">Dag 18</div>
                                    </div>
                                    <div class="bg-gift-red text-white px-4 py-1 rounded-full flex items-center gap-2">
                                        Nog te behalen
                                        <span class="text-sm">✗</span>
                                    </div>
                                </li>

                                <li class="flex items-center gap-4 opacity-90">
                                    <img src="{{ Vite::asset('resources/images/gift.png') }}"
                                         alt="op deze afbeelding is een cadeau te zien"
                                         class="block h-9 w-auto p-1 bg-gift-red rounded-md text-gray-400">
                                    <div class="flex-1">
                                        <div class="font-semibold text-lg">Dag 25</div>
                                    </div>
                                    <div class="bg-gift-red text-white px-4 py-1 rounded-full flex items-center gap-2">
                                        Nog te behalen
                                        <span class="text-sm">✗</span>
                                    </div>
                                </li>

                                <li class="flex items-center gap-4 opacity-90">
                                    <img src="{{ Vite::asset('resources/images/gift.png') }}"
                                         alt="op deze afbeelding is een cadeau te zien"
                                         class="block h-9 w-auto p-1 bg-gift-red rounded-md text-gray-400">
                                    <div class="flex-1">
                                        <div class="font-semibold text-lg">Dag 30</div>
                                    </div>
                                    <div class="bg-gift-red text-white px-4 py-1 rounded-full flex items-center gap-2">
                                        Nog te behalen
                                        <span class="text-sm">✗</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </x-slot>
</x-app-layout>
