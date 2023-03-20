@php
    $label = [
        "0"=> [
            "title"=> "Lable",
            "route"=> "URL"
        ]
    ]
@endphp

@foreach ($label as $key=>$item)
    <a href="{{ $href }}" class="bg-primary text-sm text-white p-1.5 px-4 rounded-full">
        {{ $item['title'] ?? '' }}
    </a>

    <a href="{{ $href }}" class="text-primary border border-primary text-sm bg-white p-1.5 px-4 rounded-full">
        {{ $item['title'] ?? '' }}
    </a>
@endforeach





