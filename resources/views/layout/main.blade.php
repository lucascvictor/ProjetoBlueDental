<!DOCTYPE html>
<html lang="pt-br">
  <head>

    @include('partials._head')
    @yield('extrastyle')

  </head>

    <body style="background-color: #A4CC62" id="app-layout">

      @include('partials._nav')

        <div  class="container-fluid" style="margin: 5%;">
          
          

              @yield('conteudo')

           

            @include('partials._footer')

        </div>

      @include('partials._javascript')
      @yield('extrascript')


    </body>
  

</html>
