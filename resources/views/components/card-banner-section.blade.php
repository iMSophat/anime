<div class="carousel rounded-box gap-5">
    @foreach ($cardBannerSectionData as $item)
        <div class="carousel-item">
            <img 
                class="h-40 w-64 object-cover rounded-xl" 
                src="{{ $item['img'] }}" 
                alt="{{ $item['name'] }}" 
            />
        </div>
    @endforeach
</div>
