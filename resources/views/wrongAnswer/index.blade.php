@php use Illuminate\Support\Facades\Vite; @endphp
<x-app-layout>
    <div>
        <div>
            <x-answerResult name="h1">Je denkt groen!</x-answerResult>
        </div>

        <div class="flex flex-">
            <div>
                <img src="{{ Vite::asset('resources/img/dystopie.png') }}"
                     alt="somber toekomstbeeld zonder paddenstoelen">
            </div>

            <div class="flex flex-col gap-[5vw] bg-linear-to-r from-[#319E88] to-[#1E5E51]">
                <h2 class="">Kiezen voor biologische producten wanneer mogelijk.</h2>
                <p class="">Pesticiden worden gebruikt om planten insectvrij te maken, maar beschadigen hierbij het
                    bodemecosysteem.
                    Ze doden of verstoren micro-organismen die belangrijk zijn voor de voedingskringloop.
                    Biologische producten worden niet bespoten met pesticiden of andere schadelijke stoffen. Naast dat
                    het
                    beter is voor de natuur, is het ook beter en veiliger voor jezelf</p>
                <button class="">Naar overzicht</button>
            </div>
        </div>
    </div>

</x-app-layout>
