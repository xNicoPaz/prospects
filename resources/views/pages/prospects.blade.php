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
                        <input class="form-control cust-text-rounded" placeholder="Ingrese el nombre" name="name"
                            type="text">
                        <span class="text-danger">
                            {{ $errors->first("name") }}
                        </span>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group {{ $errors->has("lastname") ? "has-error" : "" }}">
                        <label for="Apellido">Apellido</label>
                        <input class="form-control cust-text-rounded" placeholder="Ingrese el apellido" name="lastname"
                            type="text">
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
                        <input class="form-control cust-text-rounded" placeholder="Ingrese el mail" name="email"
                            type="text">
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
{{-- <div class="container">
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form role="form">
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning">Input with warning</label>
                    <input type="text" class="form-control" id="inputWarning">
                    <span class="help-block">Something may have gone wrong</span>
                </div>
                <div class="form-group has-error">
                    <label class="control-label" for="inputError">Input with error</label>
                    <input type="text" class="form-control" id="inputError">
                    <span class="help-block">Please correct the error</span>
                </div>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess">Input with success</label>
                    <input type="text" class="form-control" id="inputSuccess" />
                    <span class="help-block">Woohoo!</span>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
 --}}

@endsection