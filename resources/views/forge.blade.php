<x-app-layout>
    <x-slot name="title">@isset($title){{$title}}@endisset</x-slot>
    <div class="flex flex-grow">
        <div class="w-48 flex-shrink-0 h-full"></div>
        <div class="fixed flex flex-col w-48 p-8 dark: h-full bg-orange-500">
            <a href=<?= route('forge.show', 'roman') ?>>Forge Romaine</a>
            <a href=<?= route('forge.show', 'celtic') ?>>Forge Celtique</a>
            <a href=<?= route('forge.show', 'medieval') ?>>Forge Médievale</a>
            <a href=<?= route('forge.show', 'modern') ?>>Forge Moderne</a>
        </div>
        <div class="flex flex-col w-full">
            <div class="p-8 dark: bg-green-800">
                <h1>@isset($title){{$title}}@endisset</h1>
                <p>@isset($description){{$description}}@endisset</p>
            </div>
            <div>
                <x-list-animations :animations="$animations" />
            </div>
        </div>
    </div>
</x-app-layout>