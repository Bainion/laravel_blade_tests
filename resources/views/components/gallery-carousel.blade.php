<div>
    <h2>Titre</h2>
    <div class="flex flex-row justify-betwen gap-x-1 overflow-auto w-9/10 h-40 py-1">

        @for($i = 0 ; $i < $count; $i++)
            <!--<img src="https://images.unsplash.com/photo-1581337204873-ef36aa186caa" class="rounded-lg">-->
            @if($i % 2 == 0)
            <img src="{{ url('images/'.'cat.jpg') }}" class="rounded-lg">
            @else
            <img src="{{ url('images/'.'cat_2.jpg') }}" class="rounded-lg">
            @endif
            @endfor
    </div>
</div>