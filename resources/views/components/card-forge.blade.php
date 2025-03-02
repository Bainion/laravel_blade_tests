<div class="relative flex items-end justify-center overflow-hidden rounded-lg bg-white aspect-square">
    <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1552960562-daf630e9278b')] bg-cover bg-center">
        <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
    </div>
    <div class="absolute text-center p-6 px-6 py-14 md:px-12">
        <h2 class="mb-6 text-3xl font-medium text-white">
            {{ $title }}
        </h2>
        <h5 class="mb-4 text-xl font-semibold text-slate-300">
            {{ $slot }}
        </h5>
    </div>
</div>