@extends('layout.main')

@section('titulo', 'Cadastro de clinicas')

@section('extrastyle')



@endsection


@section('conteudo')

<div class="row">
  <div class="col-md-8"> 

        <h2> Adicionar clinica </h2>
        {!! Form::open(array('route' => 'clinic.store')) !!}
          <!-- Nome do dentista  -->
   			{{ Form::label('nome', 'Nome:') }}
            {{ Form::text('nome', null, array('class' => 'form-control')) }}

          <!-- CROSP -->
          	{{ Form::label('endereco', 'Endereço:') }}
    		{{ Form::text('endereco', null, array('class' => 'form-control')) }}

    		{{ Form::submit('Salvar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			   
        {!! Form::close() !!}
    </div>
    <div>
    	Clinicas cadastradas
    </div>
</div>
          

@endsection  