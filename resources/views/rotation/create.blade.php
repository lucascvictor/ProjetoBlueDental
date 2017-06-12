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

					@endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
	</div>
    </div>
</div>

@endsection  