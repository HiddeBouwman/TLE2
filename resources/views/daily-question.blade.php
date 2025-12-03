<x-app-layout>
    <div class="w-full flex justify-center py-10">
        <div class="max-w-7xl bg-background p-10">
            <h1 class="text-gray-600 text-4xl font-black mb-6">Dagelijkse Uitdaging</h1>

            <div class="relative text-white p-6 px-0">
                <div class="bg-gradient-lap rounded-md shadow-md w-full h-5/6">
                    <h2 class="sr-only">Inleiding</h2>
                    <p class="w-1/2 p-6">
                        In een <strong>dystopische toekomst</strong> zou het verdwijnen van de vliegenzwam laten zien
                        hoe
                        hard onze natuur instort. Bossen die ooit vol kleur en leven waren, worden aan saaie,
                        kwetsbare plekken. Het is niet alleen een ecologisch verlies, maar ook iets dat de wereld
                        minder bijzonder en minder leefbaar maakt.
                    </p>
                </div>
                <img src="https://picsum.photos/600/400"
                     alt="Een afbeelding van een bos met paddenstoelen, symboliserend de natuur die instort in een dystopische toekomst."
                     class="absolute right-0 top-0 w-1/2 h-full object-cover rounded-md shadow-md hover:scale-105">
            </div>

            <section class="p-6 mt-4 bg-white shadow rounded">
                <h2 class="inline-block text-3xl font-bold py-3">
                    Nu aan jou de vraag…
                </h2>

                <div class="mb-6">
                    <p class="inline-block text-lg py-3">Welke kleine gewoonte helpt indirect mee aan het behoud van
                        soorten zoals de vliegenzwam?</p>
                </div>

                <form class="mt-8" action="#" method="post">
                    @csrf
                    <fieldset>
                        <legend class="sr-only">Antwoordopties</legend>
                        <div class="text-text-dark text-lg">
                            <div class="mb-3">
                                <input type="radio" id="optionA" name="answer" value="A" class="mr-2">
                                <label for="optionA">A. Kiezen voor biologische producten wanneer mogelijk.</label>
                            </div>
                            <div class="mb-3">
                                <input type="radio" id="optionB" name="answer" value="B" class="mr-2">
                                <label for="optionB">B. Regenwater drinken in plaats van kraanwater.</label>
                            </div>
                            <div class="mb-3">
                                <input type="radio" id="optionC" name="answer" value="C" class="mr-2">
                                <label for="optionC">C. Elke dag een uur wandelen in de natuur.</label>
                            </div>
                            <div class="mb-3">
                                <input type="radio" id="optionD" name="answer" value="D" class="mr-2">
                                <label for="optionD">D. Nooit foto’s maken van paddenstoelen.</label>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>
