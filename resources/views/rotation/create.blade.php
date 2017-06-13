@extends('layout.main')

@section('titulo', 'Cadastro de escalas')

@section('extrastyle')



@endsection


@section('conteudo')

<div class="row">
  <div class="col-md-4"> 

        <h2> Adicionar escala </h2>
        {!! Form::open(array('route' => 'rotation.store')) !!}
          
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
    <div class="col-md-4">

    <div class="row">
        <div class="col-lg-10">
            <h2> Excalas existentes </h2>

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Escala</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rotations as $rotation)
					<tr>

                            <td>{{ $rotation->id }}</td>
               
                            <td>
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
                            	
                            </td>
                     
                        </tr>

                        <td> 
            {{ Form::open(array('route' => array('rotation.edit', $rotation->id), 'method' => 'get'))}}
				<button type="submit" class="btn btn-success">Editar</button>
			{{ Form::close() }}
			</td>
            <td> 
            {{ Form::open(array('route' => array('rotation.destroy', $rotation->id), 'method' => 'delete'))}}
				<button type="submit" class="btn btn-danger">Deletar</button>
			{{ Form::close() }}
			</td>

					@endforeach
               
                       
                    </tbody>
                </table>
            </div>
        </div>
	</div>
    </div>
</div>

@endsection  