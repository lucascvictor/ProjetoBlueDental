@extends('layout.main')

@section('titulo', 'Escalas | Agenda')

@section('extrastyle')



@nedsection


@section('conteudo')

	<div class="row">
        <div class="col-lg-10">
            <h2>Lista de Associados</h2>

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
                            <td>{{ $notebook->name }}</td>
                            <td>{{ $notebook->clinica }}</td>
                            <td>{{ $notebook->tel_celular }}</td>
                            <td><a class="btn btn-default" href="/admin/associados/perfil/editar/{{ $associado->id }}">Alterar</a></td>
                            <td><a class="btn btn-primary" href="/admin/associados/perfil/{{ $associado->id }}">Visualizar Perfil</a></td>
                        </tr>

					@endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
	</div>

@endsection  