<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Alpes-post</title>

    </head>
    <body class="orange">
      <nav class="navbar navbar-expand-lg navbar-light white">
          <a class="navbar-brand" href="#">Alpes-post</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                 <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                 <a class="nav-link" href="#">Registrar correos</a>
              </li>
              <li class="nav-item active">
                 <a class="nav-link" href="#">Ver correos</a>
              </li>
            </ul>
          </div>
      </nav>

      <table class="table text-white">
        <thead>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo 1</th>
          <th>Correo 2</th>
          <th>Carrera</th>
        </thead>
        <tbody>
          @foreach($estudiantes as $item)
              <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->correo}}</td>
                <td>{{$item->correo2}}</td>
                <td>{{$item->nombre_carrera}}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
      {{$estudiantes->links()}}

    <br>
    <br>
    <footer>
       <div class="container-fluid bg-primary py-3">
          <div class="container">
             <div class="row">
                <div class="col-md-7">
                   <div class="row py-0">

                      <div class="col-sm-11 text-white">
                           <div><h4>Desarrollado por Jorge Luis Bou-saad</h4>
                                 <p></span>http://jorgebou-saad.esy.es</p>
                           </div>
                      </div>
                   </div>
                  </div>
                 <div class="col-md-5">
                     <div class="d-inline-block">
                     <div class="bg-circle-outline d-inline-block" style="background-color:#3b5998">
                          <a href="https://www.github.com/jlbousing" target="_blank"><i class="fa fa-2x fa-fw fa-github text-white"></i>
		                      </a>
                 </div>
                 <div class="bg-circle-outline d-inline-block" style="background-color:#4099FF">
                      <a href="https://twitter.com/kingbousing" target="_blank">
                      <i class="fa fa-2x fa-fw fa-twitter text-white"></i></a>
                 </div>

                 <div class="bg-circle-outline d-inline-block" style="background-color:#0077B5">
                      <a href="https://www.linkedin.com/https://ve.linkedin.com/in/jorge-luis-bou-saad-51b03a115" target="_blank">
                      <i class="fa fa-2x fa-fw fa-linkedin text-white"></i></a>
                </div>
            </div>
           </div>
         </div>
       </div>
    </div>
</footer>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    </body>
</html>
