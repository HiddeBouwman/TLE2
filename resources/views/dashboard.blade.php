@vite('resources/js/landingpage.js')
<x-app-layout>
    <x-slot>
        {{--
         to do:
         voor screenreader de fact automatisch laten zien.
         --}}

        <section id="info" class="flex justify-center ">
            <div class=" bg-primary w-5/6 lg:w-1/2 mt-10">
                <h1 class=" text-white  dark: text-center pb-4 pt-4  text-4xl">
                    {{ __('Klik voor het feit van de dag!') }}
                </h1>
            </div>
        </section>
        <section id="fact" class="hidden">
            <div class="flex justify-center">
                <div class="bg-accent mt-8 text-4xl w-4/5  md:h-80 lg:h-60  h-full">
                    <h2 class=" text-white text-center pt-2">De vliegenzwam</h2>
                    <p class=" text-white  text-center p-8 text-2xl ">
                        De Vliegenzwam is een paddenstoel wat een symbiotische relatie heeft met bomen, de Vliegzwam
                        helpt met meer mineralen naar de boom te transporteren, waar de paddenstoel krijgt daarvoor
                        suikers van de boom.
                    </p>
                </div>
            </div>
        </section>

        <section id="fact-image" class=" flex justify-center">
            <div class="mt-5 w-5/6 lg:w-1/2 overflow-hidden rounded-md shadow-md">

                <img class="w-full object-cover hover:scale-[1.02] transition-transform duration-1000 ease-in-out"
                     src="{{ Vite::asset('resources/images/vliegenzwam.webp') }}"
                     alt="Foto van de vliegenzwam">

            </div>
        </section>

        <div class="flex flex-col lg:flex-row">
            <div class="flex flex-col justify-center lg:justify-start">
                <a id="button" href="{{ route('daily-question') }}"
                   class=" hidden btn-primary text-white text-xl py-3 px-12 inline-block hover:primary-hover transition duration-300">
                    Naar vraag
                </a>
            </div>
            <section id="text">
                <div class="flex justify-center lg:justify-start">
                    <div class="lg:w-30 bg-gradient-lap mx-4 text-2xl lg:text-xl md:mt-10 shadow-lg p-5">
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

            <div class="lg:ml-auto  mr-36 lg:w-2/5 mt-20 ">
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
        </div>
    </x-slot>
</x-app-layout>
