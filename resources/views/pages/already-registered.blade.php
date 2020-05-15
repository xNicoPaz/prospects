@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        &nbsp;&nbsp;&nbsp;
        <div class="alert alert-success">
            <strong class="greetings">Gracias!</strong><br>
            Ya se encontraba registrado con anterioridad.
            &nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
@include('partials.home-button')
@endsection