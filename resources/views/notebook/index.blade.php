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
                            <td>{{ $notebook->schedule }}</td>
                            <td>{{ $notebook->rotation }}</td>
                     
                        </tr>

					@endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
	</div>


@endsection  