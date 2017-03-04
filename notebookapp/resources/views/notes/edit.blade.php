@extends('layouts.base')

@section('content')
<div class="container text-center">
    <form action="{{route('notes.update',$note->id)}}" method="POST">
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="title">
                Titulo de Nota
            </label>
            <input class="form-control" name="title" placeholder="Note Title" type="text">
            
        </div>

        <div class="form-group">
            <label for="body">
                Notas
            </label>
            <input class="form-control" name="body" placeholder="Notes" type="textarea" rows="3">
        </div>
        {{-- <input type="hidden" name="notebook_id" value="{{$note->notebook_id}}"> --}}
{{csrf_field()}}
        <input type="submit" class="btn btn-primary" value="Actualizar">
    </form>
</div>
@endsection