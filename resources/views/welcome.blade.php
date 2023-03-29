@extends('layouts.master')
@section('content')

<div class="p-4" id="hits-section">
    <x-hits-section-holder/>
</div>

<div class="p-4 flex gap-3 overflow-x-auto items-center" id="label-button-section">
    <x-label-button href="" title=""/>
</div>

<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 p-4" id="video-card-section">
    @for ($i = 0; $i < 12; $i++)
        {{-- <x-card-holder /> --}}

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
        <x-video-card  :video-card="$videoCard"/>
    @endfor
</div>

<x-test-comoponent/>

@endsection