@extends('layouts.base')

@section('content')
    <div class="jumbotron">
            <h1>Notas</h1>
            <p>Almacena y organiza tus pensamientos en esta aplicacion web de Notas Personales.</p>
            <p>
                <a class="btn btn-lg btn-primary" href="{{route('notebooks.index')}}" role="button">Tus Registros</a>
            </p>
        </div>
@endsection
