<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Slizee</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">



 <link rel="stylesheet" href="ACCESS/bootstrap-3.3.2-dist/css/bootstrap.min.css">
 <link rel="text/javascript" src="<?php echo base_url()?>ACCESS/jquery-ui-1.11.3.custom">


  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fonts.css">
  <!-- <script type="text/javascript">
    function validateForm() {
        var email = document.getElementById('email-log');
        var password = document.getElementById('password-log');
        // var email = document.forms["Login"]["email"].value;
        // var password = document.forms["Login"]["password"].value;
        if (email == null || email == "" || password == null || password = "") {
            alert("Deben llenarse todos los campos");
            return false;
        }
    }
    </script> -->
</head>
<body>

  <header>
    <div class="container headersillo">
      <div class="row">
        <div class="col-lg-8 col-xs-8 logo">
          <h1><a href=""><img src="img/logo.png" alt=""></a></h1>
        </div>
        <!-- <a href="#openModal" class="btn btn-primary button">Login</a> -->
        <button type="button" id="login-boton"  class="btn btn-primary button" data-toggle="modal" data-target="#modalLogin">
        Login
        </button>
        <button type="button" id="register-boton" class="btn btn-primary button" data-toggle="modal" data-target="#modalRegister">
        Register
        </button>

         <div class="col-lg-4 col-xs-4 user">
          <a href=""><img src="img/user-img.png" alt=""></a>
          <span id="user-name">Rumania Hdz</span>
          <ul class="nav navbar-top-links navbar-right menu">
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="<?php echo base_url('index.php/welcome/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Home</a></li>
                      <li><a href="<?php echo base_url('index.php/welcome/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Profile</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url('index.php/welcome/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                  </ul>
              </li>
          </ul>
        </div>



      </div>
    </div>
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon2">@</span>
          <input type="email" id="email-log" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon2">@</span>
          <input type="password" id="password-log" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="log-button">Login</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Registrarse</h4>
  </div>
  <div class="modal-body">
   <form action="" id="form-registrar"  onsubmit="return false;">
     <img src="img/default.png" id="default-img" alt="img/default.png" hidden >   <!-- Imagen default ue aparece en toda las sesiones -->
    <br>
    <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon1">@</span>
      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" aria-describedby="sizing-addon1">
    </div>
    <br>
    <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon2">@</span>
      <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos" aria-describedby="sizing-addon2">
    </div>
    <br>
    <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon2">@</span>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2">
    </div>
    <br>
    <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon2">@</span>
      <input type="password" id="pass-reg" name="pass-reg" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">
    </div>
    <br>
    <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon2">@</span>
      <input type="password" class="form-control" placeholder="Confirm password" aria-describedby="sizing-addon2">
    </div>
    </form>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" id="boton_registrar" class="btn btn-primary">Register</button>
  </div>
</div>
</div>
</div>
    <div id="openModalReg" class="modalDialog">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <form name="Register" method="post">
          <div class="form-group">
            <br>
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Confirm password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
          </div>
            <label for="birthday">Birthday</label>
            <input type="date" class="form-control" id="birthday" placeholder="Password">
          <div class="form-group">

          </div>
          <a href="#" class="btn btn-default">Register</a>
      </form>
      </div>
    </div>
  </header>

  <div class="">
    <section id='miSlide' class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target='#miSlide' data-slide-to='0' class='active'></li>
        <li data-target='#miSlide' data-slide-to='1'></li>
        <li data-target='#miSlide' data-slide-to='2'></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active"><img src="img/focus-bg.png" alt="" class="adaptar"></div>
        <div class="item"><img src="img/focus-bg.png" alt="" class="adaptar"></div>
        <div class="item"><img src="img/focus-bg.png" alt="" class="adaptar"></div>
      </div>

      <a href="#miSlide" class="left carousel-control" data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
      <a href="#miSlide" class="right carousel-control" data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
      <div class="info-slider col-xs-12">
        <span class="publicado blanco font-Adobe">PUBLICADO</span>
        <span class="rojo font-Adobe">FEB 20, 2014</span>
        <span class="puntuacion blanco">PUNTUACION</span>
        <a href="#"><span class="rojo icon icon-star-full"></span><span class="rojo icon icon-star-full"></span><span class="rojo icon icon-star-full"></span><span class="rojo icon icon-star-full"></span><span class="rojo icon icon-star-empty"></span></a>
        <a href="#"><span class="favoritos rojo icon icon-heart"></span></a>
        <span class="blanco font-Adobe">2548</span>
        <a href="#"><span class="comments rojo icon icon-bubbles3"></span></a>
        <span class="blanco font-Adobe">21</span>
      </div>
    </section>
  </div>
<!-- col-lg-2  -->
<div class="container first">
  <div class="row">
    <div class="col-lg-4 col-xs-4 contenido-movies">
      <span class="font-Adobe titulo">FEATURES MOVIES</span>
    </div>
    <div class="col-lg-4 col-xs-4 contenido-movies">
      <span class="font-Adobe new">New Releases  /  Trailers & Clips</span>
    </div>
    <div class="col-lg-4 col-xs-4 contenido-movies">
      <input type="text" placeholder="Busqueda."><span class="icon icon-search"></span>
    </div>
    </div>
  </div>
<div class="container first">
  <div class="row">
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
    <div class="col-md-1 contenedor">
      <a href="">
      <div class="title"><img src="img/movies/capitanamerica.png" alt=""></div>
      <div class="footersillo">
        <p class="title-movie blanco font-Adobe">The Incredible Hulk <span class=" playbtn icon icon-play3"></span> </p>
        <span class="favs icon icon-heart"></span><span class="blanco font-Adobe text"> 6875</span><p></p>
        <span class="comment icon icon-bubbles3"></span><span class="blanco font-Adobe text"> 214</span><p></p>
        <span class="blanco font-Adobe text">Puntuacion: </span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-full"></span><span class="comment icon icon-star-empty"></span>
        <p class="blanco font-Adobe fecha">Fecha de publicacion: Ene 29, 2013</p>
      </div>
      </a>
    </div>
  </div>
</div>

<div class="">
  <section id='miSlide2' class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target='#miSlide2' data-slide-to='0' class='active'></li>
      <li data-target='#miSlide2' data-slide-to='1'></li>
      <li data-target='#miSlide2' data-slide-to='2'></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active"><img src="img/slider-bottom/takken3.png" alt="" class="adaptar"></div>
      <div class="item"><img src="img/slider-bottom/takken3.png" alt="" class="adaptar"></div>
      <div class="item"><img src="img/slider-bottom/takken3.png" alt="" class="adaptar"></div>
    </div>

    <a href="#miSlide2" class="left carousel-control" data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
    <a href="#miSlide2" class="right carousel-control" data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
<div class="background-top"></div>
  <div class="background-bot"></div>
  </section>
</div>


<div class="line"></div>
<footer>
  <ul>
    <li><a href="#"><span class="icon icon-facebook3"></span></a></li>
    <li><a href="#"><span class="icon icon-twitter3"></span></a></li>
    <li><a href="#"><span class="icon icon-dribbble3"></span></a></li>
    <li><a href="#"><span class="icon icon-share2"></span></a></li>
    <p>Copyright 2015. LACT. All Rights Reserved.</p>

  </ul>
</footer>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<!--      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script> -->


  <script src="ACCESS/bootstrap-3.3.2-dist/js/jquery-1.11.3.js"></script>
  <script src="ACCESS/bootstrap-3.3.2-dist/js/bootstrap.js"></script>



</body>

<script type="text/javascript">



 $(document).ready(function(){



   $('#register-boton').click(function(){
       $('#nombre').val("");
       $('#apellidos').val("");
       $('#pass-reg').val("");
       $('#email').val("");



   });

   $('#login-boton').click(function(){

     /*Se limpia el formulario cuando se vuelve a abrir*/

     $('#email-log').val("");
     $('#password-log').val("");

   });



   $('#log-button').click(function(){

        /*Se limpia el formulario cuando se manda*/



     var email = $('#email-log').val();
     var password =  $('#password-log').val();


     $.ajax({
       url:"<?php echo base_url();?>index.php/controller/login",
       type:"POST",
       async:false,
       data: "email="+email+"&password="+password,
       success: function(response){

         try{
           success = $.parseJSON(response);
           alert("Bienvenido "+success[0].correo);
         }catch(err){
           alert("Los datos ingresados no coinciden con nuestros registros.");
         }
       }
     });

     $('#email-log').val("");
     $('#password-log').val("");

   });


   $('#boton_registrar').click(function(){
     var data = $('#form-registrar').serializeArray();

     $.ajax({
       url: "<?php echo base_url();?>index.php/controller/registrar",
       type: "POST",
       async: false,
       data: data,
       success: function (response) {
         response = $.parseJSON(response);

         $('#nombre').val("");
         $('#apellidos').val("");
         $('#pass-reg').val("");
         document.location.reload();
         alert("Datos guardados correctamente");

       }

     }); /*ajax*/


     console.log(data);


   });



   function arrayEmpty(mixed_var){
     var undef,key,i,len;
     var emptyValues = [undef,null,false,0,'','0'];
     for (i = 0, len = emptyValues.length; i < len; i++) {
       if (mixed_var === emptyValues[i]) {
         return true;
       }
     }
     if (typeof mixed_var === 'object') {
       for (key in mixed_var) {
         return false;
       }
       return true;
     }
     return false;
   }











 }); /*Funcion ready*/









</script>




</html>
