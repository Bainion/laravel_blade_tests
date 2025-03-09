<div class="flex flex-col py-8 px-16 dark: bg-yellow-700">
    <h1>{{ $title }}</h1>
    <div class=" flex flex-col  w-full gap-4">
        @for($i = 0 ; $i < $count; $i++)
            @php
            $number=rand(3, 19);
            @endphp
            <x-gallery-carousel :count="$number"></x-gallery-carousel>
            @endfor
    </div>
</div>