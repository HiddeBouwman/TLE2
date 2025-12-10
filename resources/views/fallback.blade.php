@php use Illuminate\Support\Facades\Vite; @endphp
<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Oeps! Deze vraag is niet gevonden</h1>
            <p class="text-lg text-gray-600 mb-8">De dagelijkse vraag die je zoekt bestaat niet of is niet beschikbaar.</p>
            <a href="{{ route('feitje') }}" class="btn-primary px-6 py-3 rounded">Terug naar start</a>
        </div>
    </div>
</x-app-layout>

