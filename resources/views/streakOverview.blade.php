<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Streak overzicht') }}
        </h1>
    </x-slot>

    <x-slot>
        <section>
            {{--          ordered list--}}
            <ol class="flex flex-wrap gap-4 ">
                <li>
                    <span>13</span>
                </li>
                <li>14
                </li>
                <li>15
                </li>
                <li>16
                </li>
                <li>17
                </li>
                <li>18</li>
                <li>19</li>
            </ol>
        </section>
        <section>
            <div>
                <h2>
                    Beloningen!!!
                </h2>
                <p>
                    3-Token om de streak een dag te missen
                </p>
                <p>
                    7-Je naam komt op de website van natuurmonumenten
                </p>
                <p>
                    15-Ontvang een digitaal wandelboekje
                </p>
                <p>
                    18-Je kan gratis parkeren bij een natuurgebied
                </p>
                <p>
                    25-Ontvang een beloning van bezoekerscentra
                </p>
                <p>
                    30-Er wordt een boom in jouw naam geplant door natuurmonumenten
                </p>
            </div>
            <div>
                <ul class="space-y-3">

                    <li class="flex justify-between items-center  text-white px-4 py-3 rounded-xl shadow ">
                        <img src="{{ Vite::asset('resources/images/gift.png') }}" alt="kadootje"
                             class="block h-9 w-auto bg-green-700 rounded-md text-gray-400">
                        <span class="font-semibold">Dag 3</span>
                        <span class="flex items-center gap-1 bg-green-700 rounded-md px-3 py-1">Geclaimd ✔</span>
                    </li>

                    <li class="flex justify-between items-center text-white px-4 py-3 rounded-xl shadow">
                        <img src="{{ Vite::asset('resources/images/gift.png') }}" alt="kadootje"
                             class="block h-9 w-auto bg-green-700 rounded-md text-gray-400">
                        <span class="font-semibold">Dag 7</span>
                        <span class="flex items-center gap-1 bg-green-700 rounded-md px-3 py-1">Geclaimd ✔</span>
                    </li>

                    <li class="flex justify-between items-center text-white px-4 py-3 rounded-xl shadow">
                        <img src="{{ Vite::asset('resources/images/gift.png') }}" alt="kadootje"
                             class="block h-9 w-auto bg-green-700 rounded-md text-gray-400">
                        <span class="font-semibold">Dag 15</span>
                        <span class="flex items-center gap-1 bg-green-700 rounded-md px-3 py-1">Geclaimd ✔</span>
                    </li>

                    <li class="flex justify-between items-center text-white px-4 py-3 rounded-xl shadow">
                        <img src="{{ Vite::asset('resources/images/gift.png') }}" alt="kadootje"
                             class="block h-9 w-auto bg-orange-500 rounded-md text-gray-400">
                        <span class="font-semibold">Dag 18</span>
                        <button class="bg-orange-600 text-white font-semibold px-3 py-1 rounded-lg shadow">
                            Claim →
                        </button>
                    </li>

                    <li class="flex justify-between items-center text-white px-4 py-3 rounded-xl shadow opacity-70">
                        <img src="{{ Vite::asset('resources/images/gift.png') }}" alt="kadootje"
                             class="block h-9 w-auto bg-red-700 rounded-md text-gray-400">
                        <span class="font-semibold">Dag 25</span>
                        <span class="flex items-center gap-1 bg-red-700 rounded-md px-3 py-1">Nog te behalen ✗</span>
                    </li>

                    <li class="flex justify-between items-center text-white px-4 py-3 rounded-xl shadow opacity-70">
                        <img src="{{ Vite::asset('resources/images/gift.png') }}" alt="kadootje"
                             class="block h-9 w-auto bg-red-700 rounded-md text-gray-400">
                        <span class="font-semibold">Dag 30</span>
                        <span class="flex items-center gap-1 bg-red-700 rounded-md px-3 py-1">Nog te behalen ✗</span>
                    </li>

                </ul>
            </div>
        </section>
        <section>
            <p>
                Je zit op een reeks van 15 dagen, tijd voor een volgende stap!
                Je laat zien dat je geeft om natuur. Waarom die impact niet groter maken?
            </p>
            <img src="{{ Vite::asset('resources/images/tuinieren.png') }}" alt="twee tuinierende mensen"
                 class="block h-9 w-auto text-gray-400">
            <p>
                Word vrijwilliger of lid bij Natuurmonumenten en help mee om natuurgebieden te beschermen, nieuwe mensen
                te ontmoeten en echte verandering te creëren.
            </p>
            <p>
                Kleine moeite. Grote impact.
                Doe je mee?
            </p>
            <a href="https://www.natuurmonumenten.nl/word-lid" class="text-blue-600 underline">Word lid of
                vrijwilliger</a>
        </section>
    </x-slot>

</x-app-layout>
