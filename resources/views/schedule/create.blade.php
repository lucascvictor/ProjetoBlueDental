@extends('layout.main')

@section('titulo', 'Cadastro de horários')



@section('conteudo')

<div class="row">
 <h2> Adicionar horário </h2>
  <div class="col-md-2"> 

       
        {!! Form::open(array('route' => 'schedule.store')) !!}
          <!-- Horario Inicial  -->
   			{{ Form::label('initial', 'Horário de inicio do atendimento:') }}
            {{ Form::time('initial', null, array('class' => 'form-control')) }}

          <!-- Horario Final -->
          	{{ Form::label('final', 'Horário final de atendimento:') }}
    		{{ Form::time('final', null, array('class' => 'form-control')) }}

    		<!-- Horario Inicial de almoço  -->
   			{{ Form::label('initial_lunch', 'Horário de inicio do almoço:') }}
            {{ Form::time('initial_lunch', null, array('class' => 'form-control')) }}

          <!-- Horario Final de almoço -->
          	{{ Form::label('final_lunch', 'Horário final do almoço:') }}
    		{{ Form::time('final_lunch', null, array('class' => 'form-control')) }}

    		<br />
    		{{ Form::submit('Salvar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			   
        {!! Form::close() !!}
    </div>

     <div class="col-md-4"> 

     Horarios já cadastrados  
        
    </div>
</div>


@endsection  