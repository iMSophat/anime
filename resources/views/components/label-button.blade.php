
<div class="pphat-carousel pphat-rounded-box pphat-gap-5">
    @foreach ($title as $item)
        <div class="pphat-carousel-item">
            <a href="{{ $item['route'] ?? '' }}" class="pphat-bg-primary pphat-flex-shrink-0 pphat-text-sm pphat-text-white pphat-p-1.5 pphat-px-4 pphat-rounded-full">
                {{ $item['title'] ?? '' }}
            </a>
        </div>
    @endforeach
</div>
