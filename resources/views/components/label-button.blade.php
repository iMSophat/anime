
<div class="carousel rounded-box gap-5">
    @foreach ($title as $item)
        <div class="carousel-item">
            <a href="{{ $item['route'] ?? '' }}" class="bg-primary flex-shrink-0 text-sm text-white p-1.5 px-4 rounded-full">
                {{ $item['title'] ?? '' }}
            </a>
        </div>
    @endforeach
</div>
