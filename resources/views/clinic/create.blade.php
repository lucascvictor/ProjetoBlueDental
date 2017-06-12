@extends('layout.main')

@section('titulo', 'Cadastro de clinicas')



@section('conteudo')

<div class="row">
  <div class="col-md-6"> 

        <h2> Adicionar clinica </h2>
        {!! Form::open(array('route' => 'clinic.store')) !!}
          <!-- Nome do dentista  -->
   			{{ Form::label('nome', 'Nome:') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}

          <!-- CROSP -->
          	{{ Form::label('endereco', 'Endereço:') }}
    		{{ Form::text('adress', null, array('class' => 'form-control')) }}

    		<br />
    		{{ Form::submit('Salvar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			   
        {!! Form::close() !!}
    </div>

    <div class="col-md-6">


            <h2> Clinicas cadastradas </h2>

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($clinics as $clinic)
					<tr>

                            <td>{{ $clinic->id }}</td>    
                            <td> {{ $clinic->name }}</td>
                            <td> {{ $clinic->adress }}</td>
                            <td> 
                            {{ Form::open(array('route' => array('clinic.edit', $clinic->id), 'method' => 'get'))}}
    							<button type="submit" class="btn btn-success">Editar</button>
							{{ Form::close() }}
							</td>
                            <td> 
                            {{ Form::open(array('route' => array('clinic.destroy', $clinic->id), 'method' => 'delete'))}}
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