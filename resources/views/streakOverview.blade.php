<x-app-layout>
    <x-slot>
        @php
            $user = auth()->user();
            $streak = $user->streak_counter ?? 0;

            $startDay = max(1, $streak - 3);
            $endDay = $startDay + 6;

            $rewardDays = [3, 7, 15, 18, 25, 30];

            $claimedCount = $user->rewards
                ->sortBy('pivot.created_at')
                ->count();
        @endphp
        <div class="max-w-7xl mx-auto px-4 lg:px-8 py-8">
            <div class="md:grid md:grid-cols-3 md:gap-8 items-start">

                <!-- Main column (left, spans 2) -->
                <div class="md:col-span-2 space-y-8">

                    <div class="relative">

                        <div class="inset-x-0 z-0 px-2">
                            <div class="flex justify-between items-center">
                                @foreach(range($startDay, $endDay - 1) as $day)
                                    @php
                                        $lineColor = $day < $streak ? 'bg-emerald-500' : 'bg-red-600';
                                    @endphp

                                    <div class="flex-1 mx-1 h-1 transition-all duration-500 {{ $lineColor }} "></div>
                                @endforeach
                            </div>
                        </div>


                        <ol class="flex justify-between items-start relative z-10 px-2">
                            @foreach(range($startDay, $endDay) as $day)
                                @php
                                    $bg = $day <= $streak ? 'bg-emerald-500' : 'bg-red-700';
                                @endphp
                                <li class="flex flex-col items-center text-center w-12">
                                    <div
                                        class="{{ $bg }} text-white rounded-full w-10 h-10 flex items-center justify-center border-2 border-white shadow-lg -mt-6">
                                        <span class="font-semibold">{{ $day }}</span>
                                    </div>
                                    @if($day <= $streak)
                                        <img src="{{ Vite::asset('resources/images/roos.png') }}"
                                             alt="" class="mt-3 h-12 w-auto">
                                    @else
                                        <img src="{{ Vite::asset('resources/images/verwelkteroos.png') }}"
                                             alt="" class="mt-3 h-12 w-auto">
                                    @endif

                                    @if(in_array($day, $rewardDays))
                                        <img src="{{ Vite::asset('resources/images/gift.png') }}"
                                             alt="" class="mt-2 h-6 w-auto">
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="bg-gradient-lap text-white rounded-xl p-6 shadow-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-4">Je zit op een reeks van <span class="font-bold">{{ $streak }} dagen</span>
                                ,
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
                            <a class="group flex justify-center items-center gap-2 mt-4 px-4 py-2 btn-primary rounded transition-colors duration-500 ease-in-out"
                               href="https://www.natuurmonumenten.nl/word-lid">
                                Lid worden
                                <svg
                                    class="w-4 h-4 inline fill-current group-hover:translate-x-1 transition-transform ease-in-out duration-500"
                                    aria-hidden="true">
                                    <path
                                        d="M15.92 7.12a1 1 0 0 0-.22-.33l-4.94-4.95a1 1 0 0 0-1.42 1.42l3.25 3.24H1a1 1 0 0 0 0 2h11.59l-3.25 3.24a1 1 0 1 0 1.41 1.41L15.7 8.2a1 1 0 0 .22-1.09z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Right column -->
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

                                @foreach($rewardDays as $day)
                                    @php
                                        $rewardIndex = $loop->index;

                                        $available = $streak >= $day;
                                        $claimed = $rewardIndex < $claimedCount;

                                        $color = $claimed
                                            ? 'bg-emerald-500'
                                            : ($available ? 'bg-gift-orange' : 'bg-gift-red');
                                    @endphp

                                    <li class="flex items-center gap-4">
                                        <img
                                            src="{{ Vite::asset('resources/images/gift.png') }}"
                                            class="h-9 w-auto p-1 rounded-md {{ $color }}"
                                        >

                                        <div class="flex-1 font-semibold text-lg">
                                            Dag {{ $day }}
                                        </div>

                                        @if($claimed)
                                            <div class="bg-emerald-500 px-4 py-1 rounded-full">
                                                <p>Geclaimed ✓</p>
                                            </div>

                                        @elseif($available)
                                            <form method="POST" action="{{ route('rewards.claim') }}">
                                                @csrf
                                                <button
                                                    class="bg-gift-orange px-4 py-1 rounded-full font-semibold hover:bg-orange-600">
                                                    Claim →
                                                </button>
                                            </form>

                                        @else
                                            <div class="bg-gift-red px-4 py-1 rounded-full">
                                                <p>Nog te behalen ✗</p>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </x-slot>
</x-app-layout>
