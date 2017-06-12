@extends('layout.main')

@section('titulo', 'Cadastro de dentistas')


@section('conteudo')

<div class="row">
  <div class="col-md-6"> 

        <h2> Adicionar dentista </h2>
        {!! Form::open(array('route' => 'dentist.store')) !!}
          <!-- Nome do dentista  -->
   			{{ Form::label('nome', 'Nome:') }}
            {{ Form::text('nome', null, array('class' => 'form-control')) }}

          <!-- CROSP -->
        {{ Form::label('crosp', 'CROSP:') }}
    		{{ Form::number('crosp', null, array('class' => 'form-control')) }}

    		{{ Form::submit('Salvar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			   
        {!! Form::close() !!}
    </div>
    <div class="col-md-6">
      Dentistas cadastrados
    </div>
</div>
          


@endsection





