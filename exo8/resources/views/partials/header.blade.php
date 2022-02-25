<section class="flex justify-around">
    <div>
        <h2 class="text-5xl text-teal-400">{{env('APP_NOM')}}</h2>
        <p class="text-3xl opacity-25">{{env('APP_SLOGAN')}}</p>
    </div>
    <div>
        <button class="border-2 border-black rounded-lg w-32 h-full hover:bg-teal-200 hover:text-white"><a href="/">Home</a></button>
        <button class="border-2 border-black rounded-lg w-32 h-full hover:bg-red-200 hover:text-white"><a href="/contact">Contact</a></button>
    </div>
</section>