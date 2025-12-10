@php use Illuminate\Support\Facades\Vite; @endphp
<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Oeps! Deze vraag is niet gevonden</h1>
            <p class="text-lg text-gray-600 mb-8">De dagelijkse vraag die je zoekt bestaat niet of is niet beschikbaar.</p>
            <div class="flex justify-center">
                <a class="group w-fit flex justify-center items-center gap-2 mt-4 px-4 py-2 btn-primary rounded transition-colors duration-500 ease-in-out"
                   href="{{ route('feitje') }}">
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
