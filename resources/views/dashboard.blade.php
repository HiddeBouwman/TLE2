@vite('resources/js/landingpage.js')
<?php
$user = auth()->user();
$streak = $user->streak_counter ?? 0;
$id = $streak + 1;
?>
<x-app-layout>
    <x-slot>

        {{--
         to do:
         voor screenreader de fact automatisch laten zien.
         --}}

        <section id="info" class="flex justify-center ">
            <div class=" bg-primary w-5/6 lg:w-1/2 mt-10 cursor-pointer">
                <h1 class=" text-white  dark: text-center pb-4 pt-4  text-4xl font-extrabold">
                    {{ __('Klik voor het feit van de dag!') }}
                </h1>
            </div>
        </section>
        <section id="fact" class="hidden">
            <div class="flex justify-center">
                <div
                    class="btn-quaternary md:h-96 mt-5 w-5/6 lg:w-1/2 p-5 flex flex-col text-center justify-center overflow-hidden rounded-md shadow-md cursor-pointer">
                    <h2 class="text-center text-3xl font-bold">{{$fact->name}}</h2>
                    <p class="text-center text-2xl">
                       {{$fact->description}}
                    </p>
                </div>
            </div>
        </section>

        <section id="fact-image" class="flex justify-center mt-5 mb-2">
            <div class="md:h-96 w-5/6 lg:w-1/2 overflow-hidden rounded-md shadow-md cursor-pointer">

                <img
                    class="w-full h-full block object-cover object-center hover:scale-[1.02] transition-transform duration-1000 ease-in-out"
                    src="{{asset($fact->image)}}"
                    alt="Foto van de feitje">
            </div>
        </section>

        @auth
            <div class="flex flex-col justify-center items-center lg:justify-start w-full my-2">
                <a id="button" href="{{ route('dagelijkse-vraag', ['id' => $id]) }}"
                   class="btn-primary hidden text-white text-xl py-3 px-12 inline-block hover:primary-hover transition duration-300">
                    Naar vraag
                </a>
            </div>
        @else
            <div class="flex flex-col justify-center items-center lg:justify-start w-full my-2">
                <a id="button" href="{{ route('login') }}"
                   class="btn-primary hidden text-white text-xl py-3 px-12 inline-block hover:primary-hover transition duration-300">
                    Log in om te spelen
                </a>
            </div>
        @endauth

        <section class="flex flex-col lg:flex-row justify-center items-center text-center">
            <div id="text"
                 class="flex justify-center text-left w-5/6 lg:w-1/2 bg-gradient-lap mx-4 text-2xl lg:text-xl shadow-lg p-5 rounded-md">
                <div>
                    <ul class="list-disc list-inside text-white ">
                        <li>
                            Lees het feit van de dag!
                        </li>
                        <li>
                            Doe de opdracht!
                        </li>
                        <li>
                            Behaal prijzen door de reeks te behouden!
                        </li>
                        <li>
                            Behoud de reeks voor 30 dagen en verdien een boom met jouw naam!
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="flex justify-center content-center items-center">
            @php
                $user = auth()->user();
                $streak = $user->streak_counter ?? 0;

                $startDay = max(1, $streak - 3);
                $endDay = $startDay + 6;

                $rewardDays = [3, 7, 15, 18, 25, 30];
            @endphp
            <div class="max-w-7xl mx-auto px-4 lg:px-8 py-8">

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


                <ol class="flex justify-between items-start z-10 px-2">
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

        </section>
    </x-slot>
</x-app-layout>
