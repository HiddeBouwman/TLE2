@php use Illuminate\Support\Facades\Vite; @endphp
<x-app-layout>
    <div class="">
        <div>
            <x-answerResult>Je denkt groen!</x-answerResult>
        </div>

        <div class="flex">
            <div>
                <img src="{{ Vite::asset('resources/img/dystopie.png') }}"
                     alt="somber toekomstbeeld zonder paddenstoelen">
            </div>

            <div class="flex flex-col gap-[5vw] bg-gradient-lap text-white">
                <h2 class="">Kiezen voor biologische producten wanneer mogelijk.</h2>
                <p class="">Pesticiden worden gebruikt om planten insectvrij te maken, maar beschadigen
                    hierbij het
                    bodemecosysteem.
                    Ze doden of verstoren micro-organismen die belangrijk zijn voor de voedingskringloop.
                    Biologische producten worden niet bespoten met pesticiden of andere schadelijke stoffen. Naast dat
                    het
                    beter is voor de natuur, is het ook beter en veiliger voor jezelf</p>
                <a href="{{ route('streakoverzicht') }}"
                   class="w-60 text-center bg-[--color-primary] text-white hover:shadow-lg hover:scale-105 transition-all duration-200 font-semibold">
                    Naar overzicht</a>
            </div>
        </div>
    </div>

</x-app-layout>
