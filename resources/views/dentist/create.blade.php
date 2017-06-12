@extends('layout.main')

@section('titulo', 'Cadastro de dentistas')


@section('conteudo')

<div class="row">
  <div class="col-md-6"> 

        <h2> Adicionar dentista </h2>
        {!! Form::open(array('route' => 'dentist.store')) !!}
          <!-- Nome do dentista  -->
   			{{ Form::label('nome', 'Nome:') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}

          <!-- CROSP -->
        {{ Form::label('crosp', 'CROSP:') }}
    		{{ Form::number('crosp', null, array('class' => 'form-control')) }}

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
                            <th>CROSP</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dentists as $dentist)
          <tr>

                            <td>{{ $dentist->id }}</td>    
                            <td> {{ $dentist->name }}</td>
                            <td> {{ $dentist->crosp }}</td>
                          <td>
                          {{ Form::open(array('route' => array('dentist.edit', $dentist->id), 'method' => 'get'))}}
                              <button type="submit" class="btn btn-success">Editar</button>
                          {{ Form::close() }}
                          </td>
                          <td> 
                              {{ Form::open(array('route' => array('dentist.destroy', $dentist->id), 'method' => 'delete'))}}
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





