@extends('layouts.master')
@section('sidebar')

<x-sidebar />

@endsection
@section('content')

<x-heading-title title="Survivals"/>

<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 p-4" id="video-card-section">
    @php
    $videoCard = [
            [
                "title" => "Dr. STONE: NEW WORLD",
                "views" => "3M views",
                "channel" => "Anime World",
                "channelLink" => "npm install @tailwindcss/line-clamps",
                "profile" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx142838-ECZSqfknAqAT.jpg",
                "thumbnail" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx131518-RU7RoUmGb2sP.jpg"
            ],[
                "title" => "ONE PIECE",
                "views" => "2.5M views",
                "channel" => "Anime World",
                "channelLink" => "npm install @tailwindcss/line-clamps",
                "profile" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx142838-ECZSqfknAqAT.jpg",
                "thumbnail" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/nx21-tXMN3Y20PIL9.jpg"
            ],
            [
                "title" => "Kono Subarashii Sekai ni Bakuen wo!",
                "views" => "2M views",
                "channel" => "Anime World",
                "channelLink" => "npm install @tailwindcss/line-clamps",
                "profile" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx142838-ECZSqfknAqAT.jpg",
                "thumbnail" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx150075-c7iph443GTBd.jpg"
            ],
            [
                "title" => "Yuusha ga Shinda!",
                "views" => "2M views",
                "channel" => "Anime World",
                "channelLink" => "npm install @tailwindcss/line-clamps",
                "profile" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx142838-ECZSqfknAqAT.jpg",
                "thumbnail" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx148109-cwAINDGwAHB2.jpg"
            ],
            [
                "title" => "Jigokuraku",
                "views" => "1.9M views",
                "channel" => "Anime World",
                "channelLink" => "npm install @tailwindcss/line-clamps",
                "profile" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx142838-ECZSqfknAqAT.jpg",
                "thumbnail" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx128893-l0R0GFHplDKW.jpg"
            ],
            [
                "title" => "Mahoutsukai no Yome SEASON 2",
                "views" => "1.9M views",
                "channel" => "Anime World",
                "channelLink" => "npm install @tailwindcss/line-clamps",
                "profile" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx142838-ECZSqfknAqAT.jpg",
                "thumbnail" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx154364-ZFPtr9F1sW60.png"
            ],
            [
                "title" => "VINLAND SAGA SEASON 2",
                "views" => "1.9M views",
                "channel" => "Anime World",
                "channelLink" => "npm install @tailwindcss/line-clamps",
                "profile" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx142838-ECZSqfknAqAT.jpg",
                "thumbnail" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx136430-f8Iza5GEynRW.jpg"
            ],
            [
                "title" => "Tokyo Revengers: Seiya Kessen-hen",
                "views" => "1.9M views",
                "channel" => "Anime World",
                "channelLink" => "npm install @tailwindcss/line-clamps",
                "profile" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx142838-ECZSqfknAqAT.jpg",
                "thumbnail" => "https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx142853-nxEZDE9oDRLG.png"
            ],
        ];
    @endphp
    <x-video-card :video-card="$videoCard"/>
</div>

<x-heading-title title="Survivals"/>

<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 p-4" id="video-card-section">
    {{-- <x-card-holder /> --}}
    <x-video-card :video-card="$videoCard"/>
</div>

@endsection