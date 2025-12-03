@vite('resources/js/landingpage.js')
<x-app-layout>
    <x-slot>
        {{--
         to do:
         voor screenreader de fact automatisch laten zien.
         --}}

        <section id="info" class="flex justify-center ">
            <div class=" bg-primary lg:w-1/2 mt-10 rounded ">
                <h1 class=" text-white  dark: text-center pb-4 pt-4  text-4xl">
                    {{ __('klik voor de feit van de dag!') }}
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
            <div class="bg-accent mt-8  lg:h-60 w-4/5 md:h-80  h-full object-cover">

                <img class="object-cover  w-full h-full"
                     src="{{ Vite::asset('resources/images/vliegenzwam.webp') }}"
                     alt="Foto van de vliegenzwam">

            </div>
        </section>
        <div class="flex justify-center lg:justify-start">
            <a id="button" href="{{ route('daily-question') }}"
               class=" hidden bg-primary text-white text-xl py-3 px-12 lg:ml-40 mt-20 inline-block hover:primary-hover transition duration-300">
                Naar vraag
            </a>
        </div>
        <section id="text">
            <div class="flex justify-start">
                <div class="lg:w-30 bg-gradient-lap mx-4 text-2xl lg:text-xl lg:ml-40 mt-10 shadow-lg p-5">
                    <ul class="list-disc list-inside text-white">
                        <li>
                            lees het weetje!
                        </li>
                        <li>
                            doe de opdracht!
                        </li>
                        <li>
                            behoud de streak!
                        </li>
                        <li>
                            behaal prijzen!
                        </li>
                    </ul>


                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>
