@php use Illuminate\Support\Facades\Vite; @endphp
<x-app-layout>
    <div>
        <div>
            <x-answerResult>Niet helemaal...</x-answerResult>
        </div>

        <div class="flex">
            <div class="">
                <img src="{{ Vite::asset('resources/img/dystopie.png') }}"
                     alt="somber toekomstbeeld zonder paddenstoelen"
                     class="">
            </div>

            <div class="flex flex-col gap-[5vw] bg-gradient-lap text-white">
                <h2>Dit antwoordt was niet juist!</h2>
                <p>Regenwater drinken in plaats van kraanwater zou kunnen helpen aangezien je hiermee water bespaart
                    op het waternet, maar het is waarschijnlijk niet gezond voor je.</p>
                <p>Opnieuw proberen?</p>
                <a href="{{ route('daily-question') }}"
                   class="w-60 text-center bg-[--color-primary] text-white hover:shadow-lg hover:scale-105 transition-all duration-200 font-semibold">
                    Terug naar de vraag</a>
            </div>
        </div>
    </div>
</x-app-layout>

