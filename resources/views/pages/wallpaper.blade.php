@extends('layouts.master')
@section('sidebar')

<x-sidebar />

@endsection
@section('content')

<div class="p-4" id="hits-section">
    {{-- <x-hits-section-holder/> --}}
    <x-wallpaper-hero hero-section=""/>
    
</div>

<x-heading-title title="Top Trending Anime"/>


@endsection