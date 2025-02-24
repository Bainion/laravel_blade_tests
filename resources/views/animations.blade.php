<x-app-layout>
    <x-slot name="title">Animations</x-slot>
    <div>
        <a href=<?= route('forge.show', 'roman') ?> class="dark:text-gray-100 m-2">Forge Romaine</a>
        <a href=<?= route('forge.show', 'celtic') ?> class="dark:text-gray-100 m-2">Forge Celtique</a>
        <a href=<?= route('forge.show', 'medieval') ?> class="dark:text-gray-100 m-2">Forge Médievale</a>
        <a href=<?= route('forge.show', 'modern') ?> class="dark:text-gray-100 m-2">Forge Moderne</a>
    </div>
</x-app-layout>