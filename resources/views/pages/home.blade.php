@extends('layouts.master')
@section('style')
<link rel="stylesheet" href="{{ mix('css/carousel.css') }}">
@endsection

@section('sidebar')

<x-sidebar />

@endsection
@section('content')
@php
    $trendingVideos = [
        [
            "img"=>"https://wallpapersmug.com/large/c4e351/beautiful-nezuko-kamado-anime.jpg",
            "name"=>"ewr",
            "route"=>"wre"
        ],[
            "img"=>"https://m.media-amazon.com/images/I/811WvXGGgIL.png",
            "name"=>"ewr",
            "route"=>"wre"
        ],[
            "img"=>"https://wallpapersmug.com/large/c4e351/beautiful-nezuko-kamado-anime.jpg",
            "name"=>"ewr",
            "route"=>"wre"
        ],[
            "img"=>"https://blog.busuu.com/wp-content/uploads/2021/08/learn-japanese-anime.jpg",
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

<div class="p-4" id="hits-section">
    {{-- <x-hits-section-holder/> --}}
    <x-home-hero-section hero-section="" :trendingVideos="$trendingVideos"/>
    
</div>


<x-heading-title title="Categories"/>

<div class="p-4 flex gap-3 flex-wrap overflow-x-auto items-center" id="label-button-section">
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

<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 p-4" id="video-card-section">
    {{-- <x-card-holder /> --}}
    @for ($i = 0; $i < 30; $i++)
        @php
            $videoCard = [
                0 => [
                    "title" => "A curated selection of 213329 Anime Wallpapers.",
                    "views" => "30k views",
                    "channel" => "Hello",
                    "channelLink" => "npm install @tailwindcss/line-clamps",
                    "profile" => "https://images5.alphacoders.com/587/587597.jpg",
                    "thumbnail" => "https://images5.alphacoders.com/587/587597.jpg"
                ]
            ];
        @endphp
        <x-video-card :video-card="$videoCard"/>
    @endfor
</div>

@endsection

@section('script')
<script type="text/javascript" src="{{ mix('js/carousel.js') }}"></script>
<script>
    $(document).ready(function () {
        // $('.slide').slick({
        //     dots: true,
        //     autoplay: true,
        //     autoplaySpeed: 2000,
        //     infinite: true,

        // });

        $('.slide').slick({
            dots: true,
            autoplay: true,
            infinite: true,
            autoplaySpeed: 2000,
            slidesToShow: 5,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>

@endsection