@extends('layout.main')

@section('titulo', 'Escalas | Agenda')

@section('extrastyle')



@endsection


@section('conteudo')

  @foreach($notebooks as $notebook)
  
    {{ $notebook->id }}

  @endforeach

@endsection  