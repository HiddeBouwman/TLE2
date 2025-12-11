@php use Illuminate\Support\Facades\Vite; @endphp
<?php
$user = auth()->user();
$streak = $user->streak_counter ?? 0;
$id = $streak + 1;
?>
<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <x-answerResult>Niet helemaal...</x-answerResult>
        </div>

        <div class="flex flex-col lg:flex-row gap-0 items-stretch">
            <div class="lg:w-1/2">
                <img
                    class="w-full h-full object-cover"
                    src="{{asset($answer->image)}}"
                    alt="somber toekomstbeeld zonder paddenstoelen">
            </div>

            <div class="lg:w-1/2 bg-gradient-lap p-12 flex flex-col justify-between">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold leading-tight text-white">Dit antwoord is niet juist!</h2>
                    @if($answer->explanation)
                        <p class="text-base leading-relaxed text-white">{{ $answer->explanation->description }}</p>
                        <p class="text-base leading-relaxed text-white">{{ $answer->explanation->conclusion }}</p>
                    @endif
                </div>

                <h2 class="text-3xl font-bold leading-tight text-white">Opnieuw proberen?</h2>

                <a href="{{ route('dagelijkse-vraag', ['id' => $id]) }}"
                   class="inline-flex items-center justify-center gap-2 mt-8 w-fit px-8 py-4 rounded-md text-white text-lg font-semibold
                          bg-pink-600 hover:bg-pink-700 hover:shadow-lg transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Terug naar de vraag
                </a>
            </div>
        </div>
    </div>

</x-app-layout>


