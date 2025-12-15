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
                    {{ __('Klik om te beginnen!') }}
                </h1>
            </div>
        </section>
        <section id="fact" class="hidden">
            <div class="flex justify-center">
                <div
                    class="btn-quaternary md:h-96 mt-5 w-5/6 lg:w-1/2 p-5 flex flex-col text-center justify-center overflow-hidden rounded-md shadow-md cursor-pointer">
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
                </div>
            </div>
        </section>

        <section id="fact-image" class="flex justify-center mt-5 mb-2">
            <div class="md:h-96 w-5/6 lg:w-1/2 overflow-hidden rounded-md shadow-md cursor-pointer">

                <img
                    class="w-full h-full block object-cover object-center hover:scale-[1.02] transition-transform duration-1000 ease-in-out"
                    src="{{ Vite::asset('resources/images/vliegenzwam.webp') }}"
                    alt="Foto van de vliegenzwam">

            </div>
        </section>

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
    </x-slot>
</x-app-layout>
