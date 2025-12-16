@vite('resources/js/landingpage.js')
<?php
$user = auth()->user();
$streak = $user->streak_counter ?? 0;
$id = $streak + 1;
$fact = \App\Models\Fact::find($id);
?>
<a href="#main-content" class="sr-only">Ga naar hoofdcontent</a>
<x-app-layout>
    <x-slot>


        <section class="flex justify-center" id="main-content">
            <div
                id="info" class=" btn-primary w-5/6 lg:w-1/2 mt-10 transition-colors duration-500 ease-in-out"
                tabindex="0">
                <h1 class="text-center pb-4 pt-4  text-4xl font-extrabold" type="button">
                    {{ __('Klik hier voor het feit van de dag!') }}
                </h1>
            </div>
        </section>
        @if(isset($fact))
            <section id="fact" class="hidden">
                <div class="flex justify-center">
                    <div
                        class="btn-quaternary md:h-96 mt-5 w-5/6 lg:w-1/2 p-5 flex flex-col text-center justify-center overflow-hidden rounded-md shadow-md cursor-pointer"
                        tabindex="0">
                        <h2 class="text-center text-3xl font-bold">{{ $fact->name }}</h2>
                        <p class="text-center text-2xl">
                            {{ $fact->description }}
                        </p>
                    </div>
                </div>
            </section>

            <section class="flex justify-center mt-5 mb-2">
                <div
                    id="fact-image"
                    class="md:h-96 w-5/6 lg:w-1/2 overflow-hidden rounded-md shadow-md cursor-pointer"
                    tabindex="0">
                    <img
                        class="w-full h-full block object-cover object-center hover:scale-[1.02] transition-transform duration-1000 ease-in-out"
                        src="{{ asset($fact->image) }}"
                        alt="Foto van het feitje van vandaag">
                </div>
            </section>
        @else
            <section id="fact">
                <div class="flex justify-center"
                     tabindex="0">
                    <div
                        class="btn-quaternary md:h-96 mt-5 w-5/6 lg:w-1/2 p-5 flex flex-col text-center justify-center overflow-hidden rounded-md shadow-md">
                        <h2 class="text-center text-3xl font-bold">Het lijkt er op dat er vandaag geen feitje is...</h2>
                        <p class="text-center text-2xl"></p>
                    </div>
                </div>
            </section>
        @endif

        @auth
            <div class="flex flex-col justify-center items-center lg:justify-start w-full">
                <a id="button" href="{{ route('dagelijkse-vraag') }}"
                   class="hidden group flex justify-center items-center gap-2 px-4 py-2 btn-primary rounded transition-colors duration-500 ease-in-out">
                    Naar opdracht
                    <svg
                        class="w-4 h-4 inline fill-current group-hover:translate-x-1 transition-transform ease-in-out duration-500"
                        aria-hidden="true">
                        <path
                            d="M15.92 7.12a1 1 0 0 0-.22-.33l-4.94-4.95a1 1 0 0 0-1.42 1.42l3.25 3.24H1a1 1 0 0 0 0 2h11.59l-3.25 3.24a1 1 0 1 0 1.41 1.41L15.7 8.2a1 1 0 0 .22-1.09z"/>
                    </svg>
                </a>
            </div>
        @else
            <div class="flex flex-col justify-center items-center lg:justify-start w-full">
                <a id="button" href="{{ route('login') }}"
                   class="hidden group flex justify-center items-center gap-2 px-4 py-2 btn-primary rounded transition-colors duration-500 ease-in-out">
                    Log in om te spelen
                    <svg
                        class="w-4 h-4 inline fill-current group-hover:translate-x-1 transition-transform ease-in-out duration-500"
                        aria-hidden="true">
                        <path
                            d="M15.92 7.12a1 1 0 0 0-.22-.33l-4.94-4.95a1 1 0 0 0-1.42 1.42l3.25 3.24H1a1 1 0 0 0 0 2h11.59l-3.25 3.24a1 1 0 1 0 1.41 1.41L15.7 8.2a1 1 0 0 .22-1.09z"/>
                    </svg>
                </a>
            </div>
        @endauth

        <section class="flex flex-col lg:flex-row justify-center items-center text-center">
            <div id="text"
                 class="flex justify-center text-left w-5/6 lg:w-1/2 bg-gradient-lap mx-4 text-2xl lg:text-xl shadow-lg p-5 rounded-md">
                <div>
                    <h2 class="sr-only" tabindex="0">uitleg</h2>
                    <ul class="list-disc list-inside text-white">
                        <li tabindex="0">
                            Lees het feit van de dag!
                        </li>
                        <li tabindex="0">
                            Doe de opdracht!
                        </li>
                        <li tabindex="0">
                            Behaal prijzen door de reeks te behouden!
                        </li>
                        <li tabindex="0">
                            Behoud de reeks voor 30 dagen en verdien een boom met jouw naam!
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="streak" class="flex justify-center content-center items-center">
            @php
                $user = auth()->user();
                $streak = $user->streak_counter ?? 0;

                $startDay = max(1, $streak - 3);
                $endDay = $startDay + 6;

                $rewardDays = [3, 7, 15, 18, 25, 30];
            @endphp
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
                                         alt="Cadeau icoon" class="h-6 w-auto" width="24" height="24">
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
                    <div class="absolute top-0 left-0 h-1 bg-emerald-500"
                         style="width: calc({{ $progressPercentage }}% - {{ $progressPercentage > 0 ? '3rem' : '0px' }}); margin-left: 4rem;"></div>
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>
