<div class="rounded-lg border shadow-sm overflow-hidden bg-white border-slate-200 shadow-slate-950/5 flex w-full flex-row">
    <img class="w-2/5 object-cover" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&q=80" alt="card-image" />
    <div class="w-full h-max rounded p-8">
        <div>
            <h5 class="font-sans antialiased font-bold text-lg md:text-xl lg:text-2xl text-current mb-2">
                {{ $animation->title }}
            </h5>
        </div>
        <div>
            <p class="font-sans antialiased text-base mb-8 text-slate-600 text-justify">
                {{ $animation->description }}
            </p>
        </div>
        <div class="flex justify-end">
            <a class="border font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed text-sm rounded-md py-2 px-4 shadow-sm hover:shadow-md bg-slate-800 border-slate-800 text-slate-50 hover:bg-slate-700 hover:border-slate-700 mb-2 flex w-fit items-center gap-2" href="#">
                En savoir plus
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                </svg>
            </a>
        </div>
    </div>
</div>