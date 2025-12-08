<x-app-layout>
    <div class="bg-background w-full flex justify-center py-10">

        <div class="max-w-full md:max-w-7xl md:p-10">
            <h1 class="text-gray-600 text-4xl font-black mb-6 text-center md:text-left">Dagelijkse Uitdaging</h1>


            <div class="relative flex justify-center items-center text-white p-6 px-0 min-h-[24rem] md:min-h-0">
                <div class="w-11/12 md:w-full flex flex-col justify-center items-center md:items-start">
                    <div class="bg-gradient-lap rounded-t-md md:rounded-md shadow-md w-11/12 md:w-full">
                        <h2 class="sr-only">Inleiding</h2>
                        <p class="w-full md:w-1/2 p-6 text-lg">
                            In een <strong>dystopische toekomst</strong> zou het verdwijnen van de vliegenzwam laten
                            zien
                            hoe
                            hard onze natuur instort. Bossen die ooit vol kleur en leven waren, worden aan saaie,
                            kwetsbare plekken. Het is niet alleen een ecologisch verlies, maar ook iets dat de wereld
                            minder bijzonder en minder leefbaar maakt.
                        </p>
                    </div>
                    <div
                        class="w-full md:absolute md:right-0 md:top-0 md:w-1/2 md:h-full overflow-hidden rounded-md shadow-md">
                        <img src="{{ Vite::asset('resources/img/dystopie.png') }}"
                             alt="Een afbeelding van een bos met paddenstoelen, symboliserend de natuur die instort in een dystopische toekomst."
                             class="w-full h-full object-cover hover:scale-[1.02] transition-transform duration-1000 ease-in-out">
                    </div>
                </div>
            </div>

            <section class="p-2 md:p-6 mt-4 bg-white shadow-lg">
                <h2 class="w-full inline-block text-3xl font-bold pb-3 text-center md:text-left">
                    Nu aan jou de vraag…
                </h2>

                <div class="mb-6">
                    <p class="inline-block text-lg py-3">{{ $question['text'] }}</p>
                </div>

                <form class="mt-8" action="{{ route('daily-question.submit') }}" method="post">
                    @csrf
                    <fieldset>
                        <legend class="sr-only">Antwoordopties</legend>
                        <div class="text-text-dark text-lg">
                            @foreach($question['options'] as $key => $option)
                                <div class="mb-3">
                                    <input type="radio" id="option{{ $key }}" name="answer" value="{{ $key }}"
                                           class="mr-2">
                                    <label for="option{{ $key }}">{{ $key }}. {{ $option }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex justify-center items-center md:justify-start">
                            <button type="submit"
                                    class="hidden group flex justify-center items-center gap-2 mt-4 px-4 py-2 btn-tertiary rounded transition-colors duration-500 ease-in-out">
                                Antwoord indienen
                                <svg
                                    class="w-4 h-4 inline fill-current group-hover:translate-x-1 transition-transform ease-in-out duration-500"
                                    aria-hidden="true">
                                    <path d="M15.92 7.12a1 1 0 0 0-.22-.33l-4.94-4.95a1 1 0 0 0-1.42 1.42l3.25 3.24H1a1 1 0 0 0 0 2h11.59l-3.25 3.24a1 1 0 1 0 1.41 1.41L15.7 8.2a1 1 0 0 .22-1.09z"/>
                                </svg>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </section>
            <div class="flex justify-center items-center md:justify-start">
                <a class="group flex justify-center items-center gap-2 mt-4 px-4 py-2 btn-primary rounded transition-colors duration-500 ease-in-out"
                   href="{{ route('dashboard') }}">
                    <svg
                        class="w-4 h-4 block fill-current group-hover:-translate-x-1 transition-transform ease-in-out duration-500 scale-x-[-1]"
                        aria-hidden="true">
                        <path d="M15.92 7.12a1 1 0 0 0-.22-.33l-4.94-4.95a1 1 0 0 0-1.42 1.42l3.25 3.24H1a1 1 0 0 0 0 2h11.59l-3.25 3.24a1 1 0 1 0 1.41 1.41L15.7 8.2a1 1 0 0 .22-1.09z"/>
                    </svg>
                    Terug
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="{{ Vite::asset('resources/js/daily-question.js') }}"></script>
