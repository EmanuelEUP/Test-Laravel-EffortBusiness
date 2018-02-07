<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./img/favicon.ico">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">
        

    </head>
    <body>


        <!-- HEADER -->

        <nav class="navbar navbar-expand-lg navbar-dark Barra01">
                <a class="navbar-brand" href="#">
                 <img src="img/TITLE.png" class="img-fluid" width="300" height="30" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse text-center h6" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Contactenos</a>
                    </li>
                  </ul>
 
                </div>
              </nav>

               <!-- HEADER -->
    
        @yield('content')


        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/web.js" type="text/javascript"></script>
               

    </body>
</html>