@extends('layouts.master')
@section('sidebar')

<x-sidebar />

@endsection
@section('content')

<div class="p-4 flex gap-3 flex-wrap overflow-x-auto items-center">
    <div class="flex flex-col gap-y-4">
        <div class="flex gap-x-3">
            Region:
            <a href="" class="bg-slate-900 p-1 rounded-md text-md text-white">All</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Japan</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Chinese</a>
        </div>
        <div class="flex gap-x-3">
            Genress:
            <a href="" class="bg-slate-900 p-1 rounded-md text-md text-white">All</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Action</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Adventure</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Comedy</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Drama</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Fantasy</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Harem</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Romance</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">School</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Sci-fi</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Slice of life</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Game</a>
        </div>
        <div class="flex gap-x-3">
            Release Year:
            <a href="" class="bg-slate-900 p-1 rounded-md text-md text-white">All</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2023</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2022</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2021</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2020</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2019</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2018</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2017</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2016</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2015</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2014-2010</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2009-2005</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">2004-2000</a>
        </div>
        <div class="flex gap-x-3">
            Release Year:
            <a href="" class="bg-slate-900 p-1 rounded-md text-md text-white">All</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">January</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">October</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">July</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">April</a>
        </div>
        <div class="flex gap-x-3">
            Release Year:
            <a href="" class="bg-slate-900 p-1 rounded-md text-md text-white">Hot</a>
            <a href="" class="bg-slate-200 p-1 rounded-md text-sm">Latest</a>
        </div>
    </div>
</div>

<x-panel.grid>
    {{-- <x-card-holder /> --}}
    @for ($i = 0; $i < 32; $i++)
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
</x-panel.grid>

@endsection