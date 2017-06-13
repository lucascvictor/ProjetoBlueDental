@extends('layout.main')

@section('titulo', 'Cadastro de horários')



@section('conteudo')
 <h2> Adicionar horário </h2>
<div class="row">

  <div class="col-md-4"> 

       
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

      <div class="col-md-6">


            <h3> Horários cadastrados </h3>

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Inicial</th>
                            <th>Final</th>
                            <th>Almoço Inicial</th>
                            <th>Almoço Final</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $schedule)
          				<tr>

                            <td>{{ $schedule->id }}</td>    
                            <td> {{ $schedule->initial }}</td>
                            <td> {{ $schedule->final }}</td>
                            <td> {{ $schedule->initial_lunch }}</td>
                            <td> {{ $schedule->final_lunch }}</td>
                                 <td> 
            {{ Form::open(array('route' => array('schedule.edit', $schedule->id), 'method' => 'get'))}}
				<button type="submit" class="btn btn-success">Editar</button>
			{{ Form::close() }}
			</td>
            <td> 
            {{ Form::open(array('route' => array('schedule.destroy', $schedule->id), 'method' => 'delete'))}}
				<button type="submit" class="btn btn-danger">Deletar</button>
			{{ Form::close() }}
			</td>
                     
                        </tr>

                    @endforeach
                      
                       
                    </tbody>
                </table>
            </div>
        </div>
</div>


@endsection  