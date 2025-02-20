<x-app-layout>
    <x-slot name="title">Animations</x-slot>

    <div class="flex flex-grow">
        <div class="w-48 flex-shrink-0 h-full"></div>
        <div class="fixed flex flex-col w-48 p-8 dark: h-full bg-orange-500">
            <button>Médievale</button>
            <button>Celtique</button>
            <button>Romaine</button>
            <button>Moderne</button>
        </div>
        <div class="flex flex-col w-full">
            <div class="p-8 dark: bg-green-800">
                <h1>Forge</h1>
                <p>Description de la forge</p>
            </div>
            <div class="flex flex-col gap-y-4 flex-grow dark:bg-yellow-800 p-8 pr-32">
                <x-card-animation></x-card-animation>
                <x-card-animation></x-card-animation>
                <x-card-animation></x-card-animation>
            </div>
        </div>
    </div>

</x-app-layout>