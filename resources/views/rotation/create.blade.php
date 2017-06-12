@extends('layout.main')

@section('titulo', 'Cadastro de escalas')

@section('extrastyle')



@endsection


@section('conteudo')

<div class="row">
  <div class="col-md-4"> 

        <h2> Adicionar escala </h2>
        {!! Form::open(array('route' => 'rotation.store')) !!}
          
          	{{ Form::checkbox('segunda', '1') }}
   			{{ Form::label('segunda', 'Segunda-feira:') }}
            
            <br />
            {{ Form::checkbox('segunda', '2') }}
            {{ Form::label('segunda', 'Terça-feira:') }}
            
            <br />
            {{ Form::checkbox('segunda', '3') }}
            {{ Form::label('segunda', 'Quarta-feira:') }}
            
            <br />
            {{ Form::checkbox('segunda', '4') }}
            {{ Form::label('segunda', 'Quinta-feira:') }}
            
            <br />
            {{ Form::checkbox('segunda', '5') }}
            {{ Form::label('segunda', 'Sexta-feira:') }}
            
            <br />
            {{ Form::checkbox('segunda', '6') }}
            {{ Form::label('segunda', 'Sabado:') }}
            
            <br />
            {{ Form::checkbox('segunda', '7') }}
            {{ Form::label('segunda', 'Domingo:') }}
            


  

    		{{ Form::submit('Adicionar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			   
        {!! Form::close() !!}
    </div>
    <div class="col-md-4">

    Escalas existentes
    </div>
</div>

@endsection  