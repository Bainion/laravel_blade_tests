<x-app-layout>
    <x-slot name="title">Galleries</x-slot>
    <div>
        @php
        $number = rand(3,7);
        @endphp
        <x-gallery :count="$number">
            <x-slot name="title">Animations</x-slot>
        </x-gallery>
        @php
        $number = rand(3,7);
        @endphp
        <x-gallery :count="$number">
            <x-slot name="title">Créations</x-slot>
        </x-gallery>
    </div>
</x-app-layout>