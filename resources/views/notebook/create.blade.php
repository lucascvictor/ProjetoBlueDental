@extends('layout.main')

@section('titulo', 'Cadastro de agendas')


@section('conteudo')

<div class="row">
  <div class="col-md-6"> 

        <h2> Adicionar rotina de trabalho </h2>

        {!! Form::open(array('route' => 'notebook.store')) !!}
          <!-- dentista  -->
   			{{ Form::label('dentist', 'Dentista:') }}
            <select id="dentist" name="dentist" class="form-control">
             @foreach($dentists as $dentist)
                <option value="{{ $dentist->id }}">{{ $dentist->name }} </option>
              @endforeach
            </select>
            <!-- clinica  -->
   			{{ Form::label('clinic', 'Clinica:') }}
            <select id="clinic" name="clinic" class="form-control">
             @foreach($clinics as $clinic)
                <option value="{{ $clinic->id }}">{{ $clinic->name }} </option>
              @endforeach
            </select>
            <!-- dentista  -->
   			{{ Form::label('rotation', 'Escala:') }}
            <select id="rotation" name="rotation" class="form-control">
             @foreach($rotations as $rotation)
                <option value="{{ $rotation->id }}">
                 <?php $dias = explode (" ", $rotation->rotation) ?>
                            	@foreach ($dias as $dia)
                            		@if ($dia == 1)
                            			Seg
                            		@endif
                            		@if ($dia == 2)
                            			Ter
                            		@endif
                            		@if ($dia == 3)
                            			Qua
                            		@endif
                            		@if ($dia == 4)
                            			Qui
                            		@endif
                            		@if ($dia == 5)
                            			Sex
                            		@endif
                            		@if ($dia == 6)
                            			Sab
                            		@endif
                            		@if ($dia == 7)
                            			Dom
                            		@endif

                            	@endforeach  
               </option>
              @endforeach
            </select>
			<!-- horarios  -->
   			{{ Form::label('schedule', 'Horarios:') }}
            <select id="schedule" name="schedule" class="form-control">
             @foreach($schedules as $schedule)
                <option value="{{ $schedule->id }}"> Das {{ $schedule->initial }} às {{ $schedule->final }} com almoço entre {{ $schedule->initial_lunch }} e {{ $schedule->final_lunch }}</option>
              @endforeach
            </select>

    		{{ Form::submit('Salvar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			   
        {!! Form::close() !!}
    </div>

    <div class="col-md-6">
            <h2>Rotinas de trabalho</h2>

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Dentista</th>
                            <th>Clinica</th>
                            <th>Horario de atendimento</th>
                            <th>Dias de Atendimento </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($notebooks as $notebook)
					<tr>
                            <td>{{ $notebook->dentist }}</td>
                            <td>{{ $notebook->clinic }}</td>
                           	<td>Das {{$notebook->initial}} às {{ $notebook->final }}
                           	Com almoço entre {{ $notebook->initial_l }} e {{ $notebook->final_l }}
                           	</td>
                            <td>
                            	<?php $dias = explode (" ", $notebook->rotation) ?>
                            	@foreach ($dias as $dia)
                            		@if ($dia == 1)
                            			Seg
                            		@endif
                            		@if ($dia == 2)
                            			Ter
                            		@endif
                            		@if ($dia == 3)
                            			Qua
                            		@endif
                            		@if ($dia == 4)
                            			Qui
                            		@endif
                            		@if ($dia == 5)
                            			Sex
                            		@endif
                            		@if ($dia == 6)
                            			Sab
                            		@endif
                            		@if ($dia == 7)
                            			Dom
                            		@endif

                            	@endforeach 
                            	
                            </td>
                     
                        </tr>

					@endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
 
</div>


@endsection  