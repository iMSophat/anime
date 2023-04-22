<div class="bg-black rounded-xl h-[30rem] overflow-hidden relative">
    <img class="h-full absolute top-0 w-full object-cover" src="https://images5.alphacoders.com/587/587597.jpg" alt="">
    <div class="absolute bg-gradient-to-r left-0 right-0 top-0 h-full w-full z-10 from-black/90 via-black/50 to-red-600/0"></div>

    <div class="absolute h-full w-full flex p-5 flex-col gap-7 z-30 top-0 left-0 right-0">
        
        
        <div>
            <button class="font-medium text-slate-100 text-base bg-black/10 w-auto rounded-md">Feature</button>
        </div>

        <div class="flex flex-col gap-1">
            <p class="text-base font-medium text-slate-400">Front End Intergradation</p>    
            <h1 class="text-4xl font-bold w-1/2 line-clamp-2 text-white">Front End Intergradation Front End Intergradation</h1>
            <p class="text-sm text-slate-300">Front End IntergradationFront End Intergradation</p> 
        </div>

        <div>
            <x-button-primary fun="" title="Button"/>
        </div>

        <section class="slide flex gap-5">
            @foreach ($trendingVideos as $item)
                <div class="w-full px-2">
                    <img class="w-full h-40 max-h-40 object-cover rounded-xl" src="{{ $item['img'] }}" alt="{{ $item['name'] }}">
                </div>
            @endforeach
        </section>

    </div>
</div>