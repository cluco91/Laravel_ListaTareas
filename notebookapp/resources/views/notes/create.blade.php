@extends('layouts.base')

@section('content')
<div class="container">
    <h1>
        Crear Nota
    </h1>

    @if(count($errors)>0)

        <ul>
            @foreach($errors->all() as $error)
            
            <li class="alert alert-danger">{{$error}}</li>

            @endforeach

        </ul>
        
    @endif

    <form action="{{route('notes.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">
                Titulo de Nota
            </label>
            <input class="form-control" name="title" type="text">
            
        </div>
        <div class="form-group">
            <label for="body">
                Contenido de Nota
            </label>
            <input class="form-control" name="body" type="text">
            
        </div>

        <input type="hidden" name="notebook_id" value="{{$id}}">
        
        <input class="btn btn-primary" type="submit" value="Crear">
        </input>
    </form>
</div>
@endsection