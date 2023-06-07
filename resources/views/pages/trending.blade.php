@extends('layouts.master')
@section('sidebar')

<x-sidebar />

@endsection
@section('content')

<div class="p-4" id="hits-section">
    {{-- <x-hits-section-holder/> --}}
    <x-home-hero-section hero-section=""/>
    
</div>

<x-heading-title title="Top Trending Anime"/>


<x-panel.grid>
    {{-- <x-card-holder /> --}}
    @for ($i = 0; $i <10; $i++)
        @php
            $videoCard = [
                0 => [
                    "title" => "Cute Anime Girl Wallpaper HD.",
                    "views" => "1M views",
                    "channel" => "New Trending Anime",
                    "channelLink" => "npm install @tailwindcss/line-clamps",
                    "profile" => "https://blog.busuu.com/wp-content/uploads/2021/08/learn-japanese-anime.jpg",
                    "thumbnail" => "https://m.media-amazon.com/images/I/811WvXGGgIL.png"
                ]
            ];
        @endphp
        <x-video-card :video-card="$videoCard"/>
    @endfor
</x-panel.grid>


@endsection