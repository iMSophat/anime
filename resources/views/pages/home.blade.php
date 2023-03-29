@extends('layouts.master')
@section('content')

<div class="pphat-p-4" id="hits-section">
    {{-- <x-hits-section-holder/> --}}
    <x-home-hero-section hero-section=""/>
    
</div>

<x-heading-title title="Categories"/>

<div class="pphat-p-4 pphat-flex pphat-gap-3 pphat-flex-wrap pphat-overflow-x-auto pphat-items-center" id="label-button-section">
    @php
        $label = [
            [
                "title"=> "Anime",
                "route"=> "URL"
            ],
            [
                "title"=> "TOMO-CHAN IS A GIRL",
                "route"=> "URL"
            ],
            [
                "title"=> "BUDDY DADDIES",
                "route"=> "URL"
            ],
            [
                "title"=> "TRIGUN STAMPEDE",
                "route"=> "URL"
            ],
            [
                "title"=> "NIER: AUTOMATA VER. 1.1A",
                "route"=> "URL"
            ],
            [
                "title"=> "TOKYO REVENGERS SEASON 2",
                "route"=> "URL"
            ],
        ]
    @endphp
    <x-label-button :title="$label"/>
</div>

<x-heading-title title="Random"/>

<div class="pphat-grid pphat-grid-cols-2 md:pphat-grid-cols-3 xl:pphat-grid-cols-4 pphat-gap-5 pphat-p-4" id="video-card-section">
    {{-- <x-card-holder /> --}}
    @for ($i = 0; $i < 30; $i++)
        @php
            $videoCard = [
                0 => [
                    "title" => "A curated selection of 213329 Anime Wallpapers.",
                    "views" => "30k views",
                    "channel" => "Hello",
                    "channelLink" => "npm install @tailwindcss/line-clamps",
                    "profile" => "https://images5.alphacoders.com/587/587597.jpg"
                ]
            ];
        @endphp
        <x-video-card :video-card="$videoCard"/>
    @endfor
</div>

@endsection