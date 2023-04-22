@foreach ($videoCard as $item)
<a href="/watch/234" rel="unfollow">
    <div class="flex flex-col gap-1 overflow-hidden">
        <img class="h-40 object-cover rounded-xl w-full" src="{{ $item['thumbnail'] ?? '' }}" alt="">
        <div class="flex gap-3 py-3 items-center">
            <div class="w-full">
                <h1 class="line-clamp-2 font-medium leading-5">{{ $item['title'] ?? '' }}</h1>
                <div class="flex w-full gap-2 items-center">
                    <p class="whitespace-nowrap text-sm font-medium text-slate-500">{{ $item['views'] ?? '' }}</p>
                    <p>•</p>
                    <p class="line-clamp-1 text-sm font-medium">{{ $item['channel'] ?? '' }}</p>
                    <svg class="flex-shrink-0 w-4 h-4 " viewBox="0 0 15 16" fill="none">
                        {{-- #5a67d8 ==.text-indigo-600 --}}
                        <path d="M7.5 14.25C10.9375 14.25 13.75 11.4375 13.75 8C13.75 4.5625 10.9375 1.75 7.5 1.75C4.0625 1.75 1.25 4.5625 1.25 8C1.25 11.4375 4.0625 14.25 7.5 14.25Z" fill="#5a67d8" stroke="#5a67d8" stroke-width="#5a67d8" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.84375 7.99998L6.6125 9.76873L10.1562 6.23123" stroke="white" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <img class="flex-shrink-0 w-12 h-12 rounded-full object-cover" src="{{ $item['profile'] ?? '' }}" alt="">
        </div>
    </div>
</a>
@endforeach