@extends('layout.main')

@section('titulo', 'Escalas | Agenda')

@section('extrastyle')



@endsection


@section('conteudo')


	<div class="row">
        <div class="col-lg-10">
            <h2>Agenda dos dentistas</h2>

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