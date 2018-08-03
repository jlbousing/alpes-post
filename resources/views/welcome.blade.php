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
              <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                 <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Registrar correos</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="/lista">Ver correos</a>
              </li>
            </ul>
          </div>
      </nav>

      <div class="jumbotron orange">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                   <div class="panel panel-default">


                         <div class="panel-body">
                             <form method="post" action="/postEmail">
                               {{ csrf_field() }}
                               <textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="80">

                               </textarea>
                               <br>
                               <input type="submit" name="" value="Enviar" class="btn btn-primary">
                             </form>
                         </div>
                   </div>
                </div>
              </div>
           </div>
      </div>

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

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registro de correos</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/registroEstudiante" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="email">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required="">
          </div>
          <div class="form-group">
            <label for="pwd">Apellido:</label>
            <input type="text" class="form-control" name="apellido" required="">
          </div>
          <div class="form-group">
            <label for="pwd">Correo 1:</label>
            <input type="text" class="form-control" name="correo1" required="">
          </div>
          <div class="form-group">
            <label for="pwd">Correo 2:</label>
            <input type="text" class="form-control" name="correo2">
          </div>
          <div class="form-group">
            <label for="pwd">Carrera:</label>
            <select class="" name="carrera" class="form-control">
              @foreach($arrayCarreras as $carrera)
                <option value="{{$carrera->nombre_carrera}}">{{$carrera->nombre_carrera}}</option>
              @endforeach
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    </body>
</html>
