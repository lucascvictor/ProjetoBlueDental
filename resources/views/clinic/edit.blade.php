@extends('layout.main')

@section('titulo', 'Editar de dados da clinica')




@section('conteudo')

<div class="row">

<div class="col-md-6"> 

        <h2> Editar clinica </h2>
        {!! Form::open(array('route' => array('clinic.update', $clinic->id), 'method' => 'put')) !!}
          <!-- Nome do dentista  -->
   			{{ Form::label('nome', 'Nome:') }}
            {{ Form::text('name', $clinic->name, array('class' => 'form-control')) }}

          <!-- CROSP -->
          	{{ Form::label('endereco', 'Endereço:') }}
    		{{ Form::text('adress', $clinic->adress, array('class' => 'form-control')) }}

    		<br />
    		{{ Form::submit('Salvar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			   
        {!! Form::close() !!}
    </div>
	
</div>

@endsection  