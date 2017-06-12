<!DOCTYPE html>
<html lang="pt-br">
  <head>

  @include('partials._head')
  @yield('extrastyle')

  </head>

  <body style="background-color: #A2CC44" id="app-layout">

    @include('partials._nav')

      <div  class="container-fluid" style="padding-top: 22%;">
        
        <div class="row">

          @yield('conteudo')

        </div>
         

        @include('partials._footer')

      </div>

    @include('partials._javascript')
    @yield('extrascript')


  </body>


</html>
