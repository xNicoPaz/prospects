{{-- @extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error')) --}}
@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12 text-center">
        <img src="images/broken_car.png" style="width: 400px; heigth: 400px;" border="0">
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-10 text-center">
        <p class="lead">¡Upssssssss!... Parece que algo anda mal, por favor intentalo de nuevo mas tarde.</p>
    </div>
    <div class="col-sm-1"></div>
</div>
@endsection