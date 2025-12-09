@php use Illuminate\Support\Facades\Vite; @endphp
<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <x-answerResult>Niet helemaal...</x-answerResult>
        </div>

        <div class="flex flex-col lg:flex-row gap-0 items-stretch">
            <div class="lg:w-1/2">
                <img
                    class="w-full h-full object-cover"
                    src="{{ Vite::asset('resources/img/dystopie.png') }}"
                    alt="somber toekomstbeeld zonder paddenstoelen">
            </div>

            <div class="lg:w-1/2 bg-gradient-lap p-12 flex flex-col justify-between">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold leading-tight text-white">Dit antwoord is niet juist!</h2>
                    <p class="text-base leading-relaxed text-white">Regenwater drinken in plaats van kraanwater zou
                        kunnen helpen aangezien je hiermee water bespaart op het waternet, maar het is waarschijnlijk
                        niet gezond voor je.</p>
                </div>

                <h2 class="text-3xl font-bold leading-tight text-white">Opnieuw proberen?</h2>
                <a class="group flex justify-center items-center gap-2 mt-4 px-4 py-2 btn-primary rounded transition-colors duration-500 ease-in-out"
                   href="{{ route('dagelijkse-vraag') }}">
                    <svg
                        class="w-4 h-4 block fill-current group-hover:-translate-x-1 transition-transform ease-in-out duration-500 scale-x-[-1]"
                        aria-hidden="true">
                        <path d="M15.92 7.12a1 1 0 0 0-.22-.33l-4.94-4.95a1 1 0 0 0-1.42 1.42l3.25 3.24H1a1 1 0 0 0 0 2h11.59l-3.25 3.24a1 1 0 1 0 1.41 1.41L15.7 8.2a1 1 0 0 .22-1.09z"/>
                    </svg>
                    Terug naar de vraag
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
