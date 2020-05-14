@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="embed-container">
            <iframe src="player.html" frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                allowfullscreen=""></iframe>
        </div>
    </div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4 menu-video">
        @include('partials.prospects')
    </div>
    <div class="col-sm-4"></div>
    @include('partials.footer')
</div>
@endsection