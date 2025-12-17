@vite('resources/js/task.js')

<x-app-layout>
    <script>
        window.savePhotoUrl = "{{ route('save-photo') }}";
        window.taskId = @json($task->id);
    </script>

    <div class="max-w-full md:max-w-7xl bg-background md:p-10">
        <div class="max-w-full md:max-w-7xl bg-background md:p-10">
            <h1 class="text-gray-600 text-4xl font-black mb-6 text-center md:text-left">Dagelijkse taak</h1>

            <section aria-labelledby="intro-heading">
                <div class="relative flex flex-col lg:block justify-center text-white p-6 px-0">
                    <div class="w-full md:w-11/12 lg:w-full mx-auto lg:mx-0">
                        <div class="bg-gradient-lap rounded-md shadow-md w-full lg:w-9/10 relative">
                            <h2 id="intro-heading" class="sr-only">Inleiding</h2>

                            <p class="w-full lg:w-1/2 p-6 text-lg">

                                {{ $fact->scenario }}

                            </p>
                        </div>
                        <div
                            class="w-full mt-4 lg:mt-0 lg:absolute lg:right-0 lg:top-0 lg:w-1/2 lg:h-full overflow-hidden rounded-md shadow-md">
                            <img src="{{asset($fact->image_scenario)}}"
                                 alt="Foto van een dystopisch scenario"
                                 class="w-full h-64 lg:h-full object-cover hover:scale-[1.02] transition-transform duration-1000 ease-in-out">
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-2 lg:p-6 mt-4 bg-white shadow relative" aria-labelledby="task-heading">
                <div class="mb-6">
                    <h2 id="task-heading" class="w-full inline-block text-3xl font-bold pb-3 text-center md:text-left">
                        Nu de taak…
                    </h2>
                    <p class="inline-block text-lg py-3">{{$task->assignment}}</p>
                </div>
                <div class="text-text-dark text-lg">
                    <button id="openCamera" aria-label="Open de camera om een foto te maken">Camera openen</button>
                    <div class="hidden" id="closeCamera">
                        <button aria-label="Sluit de camera">Camera sluiten</button>

                        <video id="video" width="640" height="480" autoplay playsinline aria-label="Camerabeeld"></video>

                        <canvas id="canvas" width="640" height="480" style="display:none;" aria-hidden="true"></canvas>
                        <button id="snap" aria-label="Maak een foto">Foto maken</button>
                    </div>
                    <img id="photo" alt="De gemaakte foto verschijnt hier">
                    <button class="hidden" id="save" aria-label="Sla de foto op en ga verder">Verder</button>
                </div>
            </section>


        </div>
    </div>
</x-app-layout>
