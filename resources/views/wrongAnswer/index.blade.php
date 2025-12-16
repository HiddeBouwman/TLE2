@php use Illuminate\Support\Facades\Vite; @endphp
<a href="#main-content" class="sr-only">Ga naar hoofdcontent</a>
<x-app-layout>
    <div class="container mx-auto px-4 pt-8">
        <div class="flex justify-center" id="main-content" tabindex="0" role="heading">
            <x-answerResult>Niet helemaal...</x-answerResult>
        </div>
        <div class="relative flex justify-center items-center text-white p-6 px-0 min-h-[24rem] md:min-h-0">
            <div class="w-11/12 md:w-full flex flex-col justify-center items-center md:items-start">
                <div
                    class="w-full md:absolute md:right-0 md:top-0 md:w-1/2 md:h-full overflow-hidden rounded-md shadow-md">
                    <img src="{{asset($imageScenario)}}"
                         alt="Een afbeelding van een bos met paddenstoelen, symboliserend de natuur die instort in een dystopische toekomst."
                         class="w-full h-full object-cover hover:scale-[1.02] transition-transform duration-1000 ease-in-out">
                </div>
                <div class="bg-gradient-lap rounded-b-md md:rounded-md shadow-md w-11/12 md:w-full">
                    <h2 class="w-full md:w-1/2 p-6 text-3xl" tabindex="0" role="heading">Dit antwoord is niet juist!</h2>
                    <p class="w-full md:w-1/2 px-6 text-xl font-bold">{{ $answer->option }}</p>
                    @if($answer->explanation)
                        <p class="w-full md:w-1/2 p-6 pt-2 text-lg">{{ $answer->explanation->description }}</p>
                        <p class="text-base leading-relaxed text-white">{{ $answer->explanation->conclusion }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <section class="flex justify-center">
        <div class="p-6 flex flex-col items-center md:w-1/2 bg-white shadow-md">
            <h2 class="text-3xl font-bold leading-tight">Opnieuw proberen?</h2>
            <a href="{{ route('dagelijkse-vraag') }}"
               class="inline-flex items-center justify-center gap-2 my-8 w-fit px-8 py-4 rounded-md text-white text-lg font-semibold
                          bg-pink-600 hover:bg-pink-700 hover:shadow-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Terug naar de vraag
            </a>
        </div>
    </section>
</x-app-layout>
