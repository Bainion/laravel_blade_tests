<div class="flex flex-col gap-y-4 flex-grow dark:bg-yellow-800 py-8 px-16 pr-24">
    @foreach($animations as $animation)
    <x-card-animation :animation="$animation" />
    @endforeach
</div>