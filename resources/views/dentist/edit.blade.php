@extends('layout.main')

@section('titulo', 'Editar dados do dentista')




@section('conteudo')

<div class="row">
  <div class="col-md-6"> 

        <h2> Editar dentista </h2>
        {!! Form::open(array('route' => array('dentist.update', $dentist->id), 'method' => 'put'))  !!}
          <!-- Nome do dentista  -->
   			{{ Form::label('nome', 'Nome:') }}
        {{ Form::text('name', $dentist->name, array('class' => 'form-control')) }}

          <!-- CROSP -->
        {{ Form::label('crosp', 'CROSP:') }}
    		{{ Form::number('crosp', $dentist->crosp, array('class' => 'form-control')) }}

    		{{ Form::submit('Salvar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			   
        {!! Form::close() !!}
    </div>
</div>

@endsection  