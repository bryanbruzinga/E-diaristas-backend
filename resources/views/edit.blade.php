@extends('app')

@section('titulo', 'Editar Diarista')

@section('conteudo')
<h1>Editar Diarista</h1>
<form action="{{route('diaristas.update', $diarista)}}" method="post" enctype="multipart/form-data">
    @method('put')
    @include('_form')
</form>

@endsection