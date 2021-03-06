<!DOCTYPE html>
<html>
    <head>
        <title>Lista de ingredientes</title>

        <!-- Bootstrap -->
        <link href="{{ asset('twbs/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body>

          <div class="container">
            <div class="content">
                <div class="title">Lista de ingredientes</div>
                <ul class="list-unstyled">
  
                    
                    
                    
                    <li>
                        Nombre Receta --> {{$receta_test->nombre_receta}}
                    </li>
                    <li>
                        Preparacion --> {{$receta_test->preparacion}}
                    </li>
                    <li>
                        Duracion --> {{$receta_test->duracion}}
                    </li>
                    @foreach ($receta_test->recetaTieneIngrediente as $nt)
                    <li>
                        Ingrediente --> {{$nt->ingrediente->nombre_ing}} .... Cantidad --> {{$nt->cantidad}} .... Calorias --> {{$nt->ingrediente->calorias}}
                    </li>
                    
                    @endforeach
                    
                    
                    
                    {{--
                    @foreach ($ing_receta_test as $nt)
                    <li>
                        {{$nt->ing_nombre}}
                    </li>    
                    @endforeach
                    --}}
                    
                    
                    
                    
                {{--@foreach ($receta_test as $nt)
                    <li>
                        <strong>{{$nt->nombre_receta}}</strong>
                        {{$nt->preparacion}}
                    </li>    
                    @endforeach--}}
                    
                    
                  
                    
                {{--@foreach ($ingredientes as $ingrediente)
                    <li>
                        {{$ingrediente->id_ing}} --> {{$ingrediente->nombre_ing}}
                    </li>    
                    @endforeach--}}
                    
                    
                    
                    <li>hola mundo</li>
                    <li>hola mundo2</li>
                </ul>
            </div>
        </div>
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('twbs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>
