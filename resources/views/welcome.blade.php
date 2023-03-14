@extends('layouts.master')
@section('content')

<div class="p-4" id="hits-section">
    <x-hits-section-holder/>
</div>

<div class="p-4 flex gap-3 overflow-x-auto items-center" id="label-button-section">
    <x-label-button href="" title="Lable"/>
</div>

<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 p-4" id="video-card-section">
    @for ($i = 0; $i < 12; $i++)
        <x-card-holder />
    @endfor
</div>

@endsection