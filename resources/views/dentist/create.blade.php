@extends('main')

@section('titulo', 'Cadastro de dentistas')

@section('extrastyle')



@nedsection


@section('conteudo')

@extends('admin.dashboard')

@section('titulo', 'Criar Posts')

@section('extrastyle')

<script src=" {!! url('ckeditor/ckeditor.js') !!} "></script>

     
@endsection


@section('conteudo')

            {!! Form::open(array('route' => 'dentist.store')) !!}
          <!-- Nome do dentista  -->
   			{{ Form::label('nome', 'Nome:') }}
            {{ Form::text('nome', null, array('class' => 'form-control')) }}

          <!-- CROSP -->
          	{{ Form::label('crosp', 'CROSP:') }}
    		{{ Form::text('crosp', null, array('class' => 'form-control')) }}

          

    		{{ Form::submit('Salvar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			{!! Form::close() !!}

          
          </div>
        
    </div>


@endsection


@section('extrascript')



     <script type="text/javascript">
     //validação do tipo de imagem
     
  var i = 0;
  $('#imagem').on('change',function () {
            var imagem = $(this).val();
            var formato = '';
            var limite = imagem.length - 3;
            while(limite < imagem.length)
            {
              formato = formato + imagem[limite];
              limite++;
            }
          
          if(!(formato == 'jpg' || formato == 'png' || formato == 'gif' || formato == 'jpeg')){
  
            if(i < 1){
            $("#mensagem").append('<div id="imagemmensagem" class=" alert alert-danger" role="alert"><strong>Cuidado:</strong> Esta imagem não é de um tipo válido</div>');
            i++;
          }
            $("#imagem").val('');
          }else{
            document.getElementById("imagemmensagem").remove();
          }
          
        });
</script>

@endsection


@endsection  