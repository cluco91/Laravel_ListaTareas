@extends('layouts.base')

@section('content')
<div class="container text-center">
    <form action="{{route('notebooks.store')}}" method="POST">
    {{csrf_field()}}
        <div class="form-group">
            <label for="name">
                Nombre de Cuaderno
            </label>
            <input class="form-control" name="name" placeholder="input" type="text">
            </input>
        </div>
        <input type="submit" class="btn btn-primary" value="Crear">
        
    </form>
</div>
@endsection