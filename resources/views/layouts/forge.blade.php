<x-app-layout>

    <x-slot name="title">@isset($title){{$title}}@endisset</x-slot>
    <div class="flex flex-grow">
        <div class="w-48 flex-shrink-0 h-full"></div>
        <div class="fixed flex flex-col w-48 p-8 dark: h-full bg-orange-500">
            <a href=<?= route('roman-forge') ?>>Forge Romaine</a>
            <a href=<?= route('celtic-forge') ?>>Forge Celtique</a>
            <a href=<?= route('medieval-forge') ?>>Forge Médievale</a>
            <a href=<?= route('modern-forge') ?>>Forge Moderne</a>
        </div>
        <div class="flex flex-col w-full">
            <div class="p-8 dark: bg-green-800">
                <h1>@isset($title){{$title}}@endisset</h1>
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