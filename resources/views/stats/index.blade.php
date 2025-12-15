<x-app-layout>
    <header class="bg-primary h-40 pt-8">
        <h1 class="text-white text-center pb-4 pt-4 text-5xl font-extrabold">Statistieken</h1>
    </header>

    <div class="p-5 max-w-6xl mx-auto">

        <div class="mb-6">
            <form method="GET" action="{{ route('search') }}" class="flex gap-3">
                <input
                    type="text"
                    name="q"
                    value=""
                    placeholder="Zoek op aantal dagen streak of rewards..."
                    class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">

                <button
                    type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">

                    Zoeken
                </button>
            </form>

            @if($errors->any())
                <div class="mt-3 p-3 bg-red-100 dark:bg-red-900 text-red-700 dark:text-red-200 rounded-lg">
                    {{ $errors->first() }}
                </div>
            @endif
        </div>

        @if(isset($search) && isset($total))
            <div class="mb-4 p-4 bg-blue-50 dark:bg-blue-900 rounded-lg">
                <p class="text-lg font-semibold text-black dark:text-blue-200">
                    @if(is_numeric($search))
                        🔍 Gezocht op streak: <span class="font-bold">{{ $search }} dagen</span>
                    @else
                        🔍 Gezocht op reward: <span class="font-bold">{{ $search }}</span>
                    @endif
                </p>
                <p class="text-black dark:text-blue-300">
                    Totaal gevonden: <strong>{{ $total }}</strong> {{ $total == 1 ? 'persoon' : 'personen' }}
                </p>
            </div>

            <div class="pb-12 pt-8">
                <a href="{{ route('stats.index') }}"
                   class="py-4 px-2 btn-primary text-white font-bold rounded-lg hover:btn-primary transition">
                    Ga terug naar Statistieken</a>
            </div>
        @endif


        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                        Naam
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                        E-mailadres
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                        Dagen streak
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                        Rewards
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                @forelse($users as $user)
                    <tr class="hover:bg-gray-400 dark:hover:bg-gray-750 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                            {{$user->name}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                            {{$user->email}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                🔥 {{$user->streak_counter}}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                            @if($user->rewards->isNotEmpty())
                                @foreach($user->rewards as $reward)
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                    {{$reward->description}}
                                    </span>
                                @endforeach
                            @else
                                Geen rewards opgeëisd!
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-8 text-center text-gray-500 dark:text-gray-400">
                            @if(isset($search) === is_numeric($search))
                                Geen gebruikers gevonden met streak {{ $search }} dagen
                            @else
                                Geen gebruikers gevonden met reward {{ $search }}
                            @endif
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
