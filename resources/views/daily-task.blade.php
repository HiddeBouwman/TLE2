@vite('resources/js/task.js')

<x-app-layout>
    <script>
        window.savePhotoUrl = "{{ route('save-photo') }}";
    </script>

    <div class="max-w-full md:max-w-7xl bg-background md:p-10">
        <div class="max-w-full md:max-w-7xl bg-background md:p-10">
            <h1 class="text-gray-600 text-4xl font-black mb-6 text-center md:text-left">Dagelijkse taak</h1>

            <section>
                <div class="relative flex justify-center text-white p-6 px-0">
                    <div class="w-11/12 md:w-full">
                        <div class="bg-gradient-lap rounded-md shadow-md w-9/10">
                            <h2 class="sr-only">Inleiding</h2>
                            <p class="w-full lg:w-1/2 p-6 text-lg">
                                In een <strong>dystopische toekomst</strong> zou het verdwijnen van de vliegenzwam laten
                                zien
                                hoe
                                hard onze natuur instort. Bossen die ooit vol kleur en leven waren, worden aan saaie,
                                kwetsbare plekken. Het is niet alleen een ecologisch verlies, maar ook iets dat de
                                wereld
                                minder bijzonder en minder leefbaar maakt.
                            </p>
                        </div>
                        <div
                            class="w-full lg:absolute lg:right-0 lg:top-0 lg:w-1/2 md:h-full lg:h-full overflow-hidden rounded-md shadow-md">
                            <img src="{{ Vite::asset('resources/img/dystopie.png') }}"
                                 alt="Een afbeelding van een bos met paddenstoelen, symboliserend de natuur die instort in een dystopische toekomst."
                                 class="w-full h-full object-cover hover:scale-[1.02] transition-transform duration-1000 ease-in-out">
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-2 lg:p-6 mt-4 bg-white shadow">
                <div class="mb-6">
                    <h2 class="w-full inline-block text-3xl font-bold pb-3 text-center md:text-left">
                        Nu de taak…
                    </h2>
                    <p class="inline-block text-lg py-3">{{ $task }}</p>
                </div>
                <div class="text-text-dark text-lg">
                    <button id="openCamera">Camera openen</button>
                    <div class="hidden" id="closeCamera">
                        <button>Camera sluiten</button>

                        <video id="video" width="640" height="480" autoplay></video>

                        <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>
                        <button id="snap">Take Photo</button>
                    </div>
                    <img id="photo" alt="">
                    <button id="save">Save image</button>
                </div>
            </section>


        </div>
    </div>
</x-app-layout>
