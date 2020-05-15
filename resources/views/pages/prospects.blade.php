@extends('layout.master')

@section('content')
<div class="row">
    <div class="container">
        <form method="POST" action="/prospects" accept-charset="UTF-8">
            @csrf

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}">
                        <label for="Nombre">Nombre</label>
                        <input class="form-control cust-text-rounded" placeholder="Ingrese el nombre"
                            value="{{old('name')}}" name="name" type="text" required maxlength="255">
                        <span class="text-danger">
                            {{ $errors->first("name") }}
                        </span>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group {{ $errors->has("lastname") ? "has-error" : "" }}">
                        <label for="Apellido">Apellido</label>
                        <input class="form-control cust-text-rounded" placeholder="Ingrese el apellido"
                            value="{{old('lastname')}}" name="lastname" type="text" required maxlength="255">
                        <span class="text-danger">
                            {{ $errors->first("lastname") }}
                        </span>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="form-group {{ $errors->has("email") ? "has-error" : "" }}">
                        <label for="Mail">Mail</label>
                        <input class="form-control cust-text-rounded" placeholder="Ingrese el mail"
                            value="{{old('email')}}" name="email" type="email" required maxlength="255">
                        <span class="text-danger">
                            {{ $errors->first("email") }}
                        </span>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <button class="btn btn-send">Enviar</button>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </form>
    </div>
</div>
@endsection