@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        &nbsp;&nbsp;&nbsp;
        <div class="alert alert-success">
            <strong class="greetings">Gracias!</strong><br>
            Acabamos de enviar un mail con mas información. Si no lo
            ves en tu bandeja de entrada por favor revisa spam.
            &nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
@include('partials.home-button')
@endsection