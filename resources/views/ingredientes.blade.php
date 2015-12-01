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
                    @foreach ($ingredientes as $ingrediente)
                    <li>
                        {{$ingrediente->id_ing}} --> {{$ingrediente->nombre_ing}}
                    </li>    
                    @endforeach
                </ul>
            </div>
        </div>
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('twbs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>
