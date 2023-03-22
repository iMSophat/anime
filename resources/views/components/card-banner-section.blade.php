<div class="pphat-carousel pphat-rounded-box pphat-gap-5">
    @foreach ($cardBannerSectionData as $item)
        <div class="pphat-carousel-item">
            <img 
                class="pphat-h-40 pphat-w-64 pphat-object-cover pphat-rounded-xl" 
                src="{{ $item['img'] }}" 
                alt="{{ $item['name'] }}" 
            />
        </div>
    @endforeach
</div>
