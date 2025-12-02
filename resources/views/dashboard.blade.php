@vite('resources/js/landingpage.js')
<x-app-layout>

    {{--
     to do:
     image toevoegen
     klikken draait de afbeelding om.
     voor screenreader de fact automatisch laten zien.
     --}}

    <div id="info" class="flex justify-center">
        <div class="bg-pink-600 w-1/2 mt-10 rounded ">
            <h1 class=" text-white  dark: text-center pb-4 pt-4  text-4xl">
                {{ __('klik voor de feit van de dag!') }}
            </h1>
        </div>
    </div>
    <div id="fact" class="flex justify-center">
        <div class="bg-green-900 mt-8  w-4/5  text-4xl">
            <h1 class=" text-white text-center pt-2">De vliegenzwam</h1>
            <p class=" text-white  text-center p-8 text-2xl ">
                De Vliegenzwam is een paddenstoel wat een symbiotische relatie heeft met bomen, de Vliegzwam helpt met
                meer
                mineralen naar de boom te transporteren, waar de paddenstoel krijgt daarvoor suikers van de boom.
            </p>
        </div>
    </div>
    <div id="fact-image" class="hidden">
        <img src="" alt="">
        <p> this is a test image LMAO</p>
    </div>


</x-app-layout>
