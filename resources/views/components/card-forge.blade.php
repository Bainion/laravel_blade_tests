<div class="relative grid h-[35rem] max-w-lg flex-col items-end justify-center overflow-hidden rounded-lg bg-white">
    <div class="absolute aspect-square w-max-1/4 inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1552960562-daf630e9278b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')] bg-cover bg-center">
      <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
    </div>
    <div class="relative text-center p-6 px-6 py-14 md:px-12">
      <h2 class="mb-6 text-3xl font-medium text-white">
        {{$title}}
      </h2>
      <p class="mb-4 text-xl font-semibold text-slate-300">
        {{$slot}}
      </p>
    </div>
  </div>

  