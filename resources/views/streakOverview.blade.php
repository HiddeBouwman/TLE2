<a href="#main-content" class="sr-only">Ga naar hoofdcontent</a>
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
                    <div class="max-w-7xl mx-auto px-4 py-8 relative">
                        <ol class="flex justify-between items-start z-10 px-2 relative">
                            @foreach(range($startDay, $endDay) as $day)
                                @php
                                    if ($day <= $streak) {
                                        $bg = 'bg-emerald-500';
                                        $txt = 'text-black';
                                        $border = 'border-black';
                                    } elseif ($day == $streak + 1) {
                                        $bg = 'bg-gift-orange';
                                        $txt = 'text-black';
                                        $border = 'border-black';
                                    } else {
                                        $bg = 'bg-gray-800';
                                        $txt = 'text-white';
                                        $border = 'border-white';
                                    }
                                @endphp
                                <li class="flex flex-col items-center text-center w-12">
                                    <div class="h-6 mb-1">
                                        @if(in_array($day, $rewardDays))
                                            <img src="{{ asset('/images/gift.png') }}"
                                                 alt="Cadeau icoon" class="h-6 w-auto">
                                        @endif
                                    </div>
                                    <div
                                        class="{{ $bg }} {{ $txt }} rounded-full w-10 h-10 flex items-center justify-center border-2 {{ $border }} shadow-lg">
                                        <span class="font-semibold">{{ $day }}</span>
                                    </div>
                                    @if($day <= $streak)
                                        <img src="{{ asset('images/roos.png') }}"
                                             alt="Icoon van een roos" class="mt-3 h-12 w-auto">
                                    @else
                                        <img src="{{ asset('images/verwelkteroos.png') }}"
                                             alt="Icoon van een verwelkte roos" class="mt-3 h-12 w-auto">
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                        <div class="absolute top-[78px] left-0 right-0 px-8 z-0">
                            <div class="h-1 bg-gray-800 w-full"></div>
                            @php
                                $totalDays = $endDay - $startDay;
                                if ($totalDays > 0) {
                                    $completedSegments = max(0, $streak);
                                    $progressFraction = $completedSegments / $totalDays;
                                } else {
                                    $progressFraction = 0;
                                }
                                $progressPercentage = min($progressFraction * 100, 60);
                            @endphp
                            <div class="absolute top-0 left-0 h-1 bg-emerald-500" style="width: calc({{ $progressPercentage }}% - {{ $progressPercentage > 0 ? '3rem' : '0px' }}); margin-left: 4rem;"></div>
                        </div>
                    </div>

                    <div id="main-content" class="bg-gradient-lap text-white rounded-xl p-6 shadow-lg" tabindex="0" role="heading">
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
                                    <img src="{{ asset('images/tuinieren.png') }}"
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
                            <h2 tabindex="0" role="heading">Beloningen!!!</h2>
                        </div>

                        <div
                            class="bg-gradient-lap  text-white rounded-b-lg p-6 shadow-lg -mt-2">
                            <div class="sr-only" tabindex="0" role="list">Op de volgende dagen krijg je beloningen:</div>
                            <div class="grid grid-cols-1 gap-3 text-sm mb-4 leading-relaxed" tabindex="0">
                                <p role="listitem">3 dagen - Token om de streak een dag te missen.</p>
                                <p role="listitem">7 dagen - Je naam komt op de website van natuurmonumenten.</p>
                                <p role="listitem">15 dagen - Ontvang een digitaal wandelboekje.</p>
                                <p role="listitem">18 dagen - Je kan gratis parkeren bij een natuurgebied.</p>
                                <p role="listitem">25 dagen - Ontvang een beloning van bezoekerscentra.</p>
                                <p role="listitem">30 dagen - Er wordt een boom in jouw naam geplant door natuurmonumenten.</p>
                            </div>

                            <ul class="space-y-4 mt-4" tabindex="0" role="list">
                                @foreach($rewardDays as $day)
                                    @php
                                        $rewardIndex = $loop->index;

                                        $available = $streak >= $day;
                                        $claimed = $rewardIndex < $claimedCount;

                                        $color = $claimed
                                            ? 'bg-emerald-500'
                                            : ($available ? 'bg-gift-orange' : 'bg-gift-red');
                                    @endphp

                                    <li class="flex items-center gap-4" role="listitem">
                                        <img
                                            src="{{ asset('images/gift.png') }}"
                                            class="h-9 w-auto p-1 rounded-md {{ $color }}"
                                            alt="Icoon van een cadeau"
                                        >

                                        <div class="flex-1 font-semibold text-lg">
                                            Dag {{ $day }}
                                        </div>

                                        @if($claimed)
                                            <div class="bg-emerald-500 text-white px-4 py-1 rounded-full flex items-center gap-2">
                                                <p>Geclaimed ✓</p>
                                            </div>
                                        @elseif($available)
                                            <form method="POST" action="{{ route('rewards.claim') }}">
                                                @csrf
                                                <button
                                                    class="bg-gift-orange text-white px-4 py-1 rounded-full font-semibold flex items-center gap-2 hover:bg-orange-600">
                                                    Claim →
                                                </button>
                                            </form>
                                        @else
                                            <div
                                                class="bg-gift-red text-white px-4 py-1 rounded-full flex items-center gap-2">
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
