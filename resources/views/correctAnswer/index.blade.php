@php use Illuminate\Support\Facades\Vite; @endphp
<x-app-layout>
    <div class="bg-background w-full flex flex-col justify-center items-center py-10">
        <div>
            <x-answerResult>Je denkt groen!</x-answerResult>
        </div>

        <div class="flex justify-center items-center flex-col md:flex-row md:items-center w-11/12 md:max-w-7xl md:p-5">
            <div class="max-h-80 w-full md:w-1/2 overflow-hidden rounded-md md:rounded-l-md md:rounded-r-none shadow-md">
                <img
                    class="w-full h-full object-cover object-center hover:scale-[1.02] transition-transform duration-1000 ease-in-out"
                    style="object-position: center center;"
                    src="{{ Vite::asset('resources/img/dystopie.png') }}"
                    alt="somber toekomstbeeld zonder paddenstoelen">
            </div>

            <div class="bg-gradient-lap min-h-96 w-11/12 md:w-1/2 p-6 flex flex-col justify-between md:h-full rounded-md">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold leading-tight text-white">Kiezen voor biologische producten wanneer
                        mogelijk.</h2>
                    <p class="text-base leading-relaxed text-white">Pesticiden worden gebruikt om planten insectvrij
                        te
                        maken, maar beschadigen
                        hierbij het
                        bodemecosysteem.
                        Ze doden of verstoren micro-organismen die belangrijk zijn voor de voedingskringloop.
                        Biologische producten worden niet bespoten met pesticiden of andere schadelijke stoffen. Naast
                        dat
                        het
                        beter is voor de natuur, is het ook beter en veiliger voor jezelf</p>
                </div>

                <a href="{{ route('streakoverzicht') }}"
                   class="group flex justify-center items-center gap-2 mt-4 px-4 py-2 btn-primary rounded transition-colors duration-500 ease-in-out">
                    Naar overzicht
                    <svg class="w-4 h-4 inline fill-current group-hover:translate-x-1 transition-transform ease-in-out duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
