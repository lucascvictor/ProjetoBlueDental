@extends('layout.main')

@section('titulo', 'Editar dados da escala')



@section('conteudo')

<div class="row">
  <div class="col-md-4"> 

        <h2> Adicionar escala </h2>
        {!! Form::open(array('route' => array('rotation.update', $rotation->id), 'method' => 'put')) !!}
          
          	{{ Form::checkbox('seg', '1') }}
   			{{ Form::label('seg', 'Segunda-feira:') }}
            <br />
            {{ Form::checkbox('ter', '2') }}
            {{ Form::label('ter', 'Terça-feira:') }}
            
            <br />
            {{ Form::checkbox('qua', '3') }}
            {{ Form::label('qua', 'Quarta-feira:') }}
            
            <br />
            {{ Form::checkbox('qui', '4') }}
            {{ Form::label('qui', 'Quinta-feira:') }}
            
            <br />
            {{ Form::checkbox('sex', '5') }}
            {{ Form::label('sex', 'Sexta-feira:') }}
            
            <br />
            {{ Form::checkbox('sab', '6') }}
            {{ Form::label('sab', 'Sabado:') }}
            
            <br />
            {{ Form::checkbox('dom', '7') }}
            {{ Form::label('dom', 'Domingo:') }}
            


  

    		{{ Form::submit('Adicionar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			   
        {!! Form::close() !!}
    </div>

    </div>

@endsection  