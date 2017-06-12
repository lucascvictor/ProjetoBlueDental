

<!-- MENU -->
  <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <div id="bs-example-navbar-collapse-1" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px; margin-right: 2%; ">

      <ul class="nav navbar-nav navbar-right" >
      

        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Clinica/Dentista <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/notebook') }}">Pagina Principal Atividade 1.</a></li>
              <li><a href="{{ url('/notebook/add') }}">Adicionar Dentista/a></li>
              <li><a href="{{ url('/clinic/add') }}">Adicionar Clinica</a></li>
              <li><a href="{{ url('/rotation/add') }}">Adicionar Escala</a></li> 
            </ul>
          </li>

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Upload de Imagem <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/imageupload') }}">Pagina Principal Atividade 2.</a></li>

              </ul>
          </li>

                 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Importar CSV <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/csvimport/') }}">Pagina Principal Atividade 3.</a></li>

              </ul>
          </li>

      
       
        
      </ul>
      </div>

</nav>
<!-- MENU -->

</div>


@section('extrascript')

<script>
(function($){
  $(document).ready(function(){
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
      event.preventDefault();
      event.stopPropagation();
      $(this).parent().siblings().removeClass('open');
      $(this).parent().toggleClass('open');
    });
  });
})(jQuery);
</script>

@endsection
