@foreach ($videoCard as $item)
    <div class="pphat-flex pphat-flex-col pphat-gap-1 pphat-overflow-hidden">
        <img class="pphat-h-40 pphat-object-cover pphat-rounded-xl pphat-w-full" src="{{ $item['profile'] ?? '' }}" alt="">
        <div class="pphat-flex pphat-gap-3 pphat-py-3 pphat-items-center">
            <div class="pphat-w-full">
                <h1 class="pphat-line-clamp-2 pphat-font-medium pphat-leading-5">{{ $item['title'] ?? '' }}</h1>
                <div class="pphat-flex pphat-w-full pphat-gap-2 pphat-items-center">
                    <p class="pphat-whitespace-nowrap pphat-text-sm pphat-font-medium pphat-text-slate-500">{{ $item['views'] ?? '' }}</p>
                    <p>•</p>
                    <p class="pphat-line-clamp-1 pphat-text-sm pphat-font-medium pphat-text-slate-500">{{ $item['channel'] ?? '' }}</p>
                    <svg class="pphat-flex-shrink-0 pphat-w-4 pphat-h-4" viewBox="0 0 15 16" fill="none">
                        <path d="M7.5 14.25C10.9375 14.25 13.75 11.4375 13.75 8C13.75 4.5625 10.9375 1.75 7.5 1.75C4.0625 1.75 1.25 4.5625 1.25 8C1.25 11.4375 4.0625 14.25 7.5 14.25Z" fill="#525252" stroke="#525252" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.84375 7.99998L6.6125 9.76873L10.1562 6.23123" stroke="white" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <img class="pphat-flex-shrink-0 pphat-w-12 pphat-h-12 pphat-rounded-full pphat-object-cover" src="{{ $item['profile'] ?? '' }}" alt="">
        </div>
    </div>
@endforeach