<x-app-layout>
    <x-slot name="title">Animations</x-slot>
    <div class="w-full flex justify-center">
        <div class="grid grid-cols-2 grid-rows-2 gap-16 p-16 w-3/4">
            <a href=<?= route('forge.show', 'roman') ?>>
                <x-card-forge>
                    <x-slot name="title">Forge Romaine</x-slot>
                    Pour étendre l'empire des spaghetti
                </x-card-forge>
            </a>
            <a href=<?= route('forge.show', 'celtic') ?>>
                <x-card-forge>
                    <x-slot name="title">Forge Celtique</x-slot>
                    Pour la Tribu de Dana
                </x-card-forge>
            </a>
            <a href=<?= route('forge.show', 'medieval') ?>>
                <x-card-forge>
                    <x-slot name="title">Forge Médievale</x-slot>
                    Pour chasser les hérétiques
                </x-card-forge>
            </a>
            <a href=<?= route('forge.show', 'modern') ?>>
                <x-card-forge>
                    <x-slot name="title">Forge Moderne</x-slot>
                    Pour faire chauffer les feux de l'industrie
                </x-card-forge>
            </a>
        </div>
    </div>
-->
</x-app-layout>