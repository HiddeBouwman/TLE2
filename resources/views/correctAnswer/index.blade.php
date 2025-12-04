@php use Illuminate\Support\Facades\Vite; @endphp
<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <x-answerResult>Je denkt groen!</x-answerResult>
        </div>

        <div class="flex flex-col lg:flex-row gap-0 items-stretch">
            <div class="lg:w-1/2">
                <img
                    class="w-full h-full object-cover"
                    src="{{ Vite::asset('resources/images/dystopie.png') }}"
                    alt="somber toekomstbeeld zonder paddenstoelen">
            </div>

            <div class="lg:w-1/2 bg-gradient-lap p-12 flex flex-col justify-between">
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
                   class="inline-flex items-center justify-center gap-2 mt-8 w-fit px-8 py-4 rounded-md text-white text-lg font-semibold
                          bg-pink-600 hover:bg-pink-700 hover:shadow-lg transition-all duration-200">
                    Naar overzicht
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
