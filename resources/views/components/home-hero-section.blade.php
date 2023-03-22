<div class="pphat-bg-black pphat-rounded-xl pphat-h-[30rem] pphat-overflow-hidden pphat-relative">
    <img class="pphat-h-full pphat-absolute pphat-top-0 pphat-w-full pphat-object-cover" src="https://images5.alphacoders.com/587/587597.jpg" alt="">
    <div class="pphat-absolute pphat-bg-gradient-to-r pphat-left-0 pphat-right-0 pphat-top-0 pphat-h-full pphat-w-full pphat-z-10 pphat-from-black/90 pphat-via-black/50 pphat-to-red-600/0"></div>

    <div class="pphat-absolute pphat-h-full pphat-w-full pphat-flex pphat-p-5 pphat-flex-col pphat-gap-7 pphat-z-30 pphat-top-0 pphat-left-0 pphat-right-0">
        
        
        <div>
            <button class="pphat-font-medium pphat-text-slate-100 pphat-text-base pphat-bg-black/10 pphat-w-auto pphat-rounded-md">Feature</button>
        </div>

        <div class="pphat-flex pphat-flex-col pphat-gap-1">
            <p class="pphat-text-base pphat-font-medium pphat-text-slate-400">Front End Intergradation</p>    
            <h1 class="pphat-text-4xl pphat-font-bold pphat-w-1/2 pphat-line-clamp-2 pphat-text-white">Front End Intergradation Front End Intergradation</h1>
            <p class="pphat-text-sm pphat-text-slate-300">Front End IntergradationFront End Intergradation</p> 
        </div>

        <div>
            <x-button-primary fun="" title="Button"/>
        </div>


        @php
            $bannerCard = [
                [
                    "img"=>"https://wallpapersmug.com/large/c4e351/beautiful-nezuko-kamado-anime.jpg",
                    "name"=>"ewr",
                    "route"=>"wre"
                ],[
                    "img"=>"https://wallpapersmug.com/large/c4e351/beautiful-nezuko-kamado-anime.jpg",
                    "name"=>"ewr",
                    "route"=>"wre"
                ],[
                    "img"=>"https://wallpapersmug.com/large/c4e351/beautiful-nezuko-kamado-anime.jpg",
                    "name"=>"ewr",
                    "route"=>"wre"
                ],[
                    "img"=>"https://wallpapersmug.com/large/c4e351/beautiful-nezuko-kamado-anime.jpg",
                    "name"=>"ewr",
                    "route"=>"wre"
                ],[
                    "img"=>"https://wallpapersmug.com/large/c4e351/beautiful-nezuko-kamado-anime.jpg",
                    "name"=>"ewr",
                    "route"=>"wre"
                ]
            ];
        @endphp
        <div>
            <x-card-banner-section :card-banner-section-data="$bannerCard"/>
        </div>

    </div>
</div>