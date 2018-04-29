<?php
  session_start();
  if (!$_SESSION["online"]) {
    header('Location: index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/parking.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>space parking</title>
  <script src="./js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="./js/function_global.js"></script>
  <script type="text/javascript" src="./js/code_global.js"></script>
  <script type="text/javascript" src="./js/asignar_espacio.js"></script>
  <script type="text/javascript" src="./js/zoom_lupa.js"></script>
  <script type="text/javascript" src="./js/zoom_mapa.js"></script>
  <script type="text/javascript" src="./js/eliminar_elemento.js"></script>
  <script type="text/javascript" src="./js/cerrar_sesion.js"></script>
  <!-- <script type="text/javascript" src="./js/mover_elemento.js"></script> -->
  <script type="text/javascript" src="./js/efect_mousemove.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />

	<link rel="stylesheet" href="./css/bootstrap-material-datetimepicker.css" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<script src="https://code.jquery.com/jquery-1.12.3.min.js"  crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
	<!-- <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script> -->
	<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap-material-datetimepicker.js"></script>
</head>
<body>
  <div class="btn-park btn-lupa1" id="zoom">
    <img src="img/lupa-mas.png" alt="lupa-zoom-in" id="zoom-in">
    <img src="img/lupa-menos.png" alt="lupa-zoom-out" id="zoom-out" hidden="hidden">
  </div>
  <div class="btn-park btn-mover1" id="mover">
    <img src="img/mover.png" alt="lupa-zoom-in" id="zoom-in">
  </div>
  <div class="btn-park btn-actualizarFecha1" id="actualiza-fecha">
    <img src="img/editar-fecha.png" alt="lupa-zoom-in" id="zoom-in">
  </div>
  <div class="btn-park btn-eliminar1" id="eliminar">
    <img src="img/eliminar.png" alt="lupa-zoom-in" id="zoom-in">
  </div>
  <a href="gantt.php" target="_blank">
    <div class="btn-park btn-gant" id="gant">
      <img src="img/diagrama-grant.png" alt="Diagrama Gant">
    </div>
  </a>
  <div id="info-popup" class="info-popup info-popup-zoom" hidden="hidden">
    <div>
      <span id="info-head"></span>
    </div>
    <div>
      <span id="info-cliente"></span>
    </div>
    <div >
      <span id="info-fecha"></span>
    </div>
    <div >
      <span>Recurso:</span><span id="info-size"></span>
    </div>
  </div>

  <a href="session_close.php">
    <div class="btn-park btn-session" id="session">
        <img src="img/cerrar-sesion.png" alt="Cerrar sesion">
    </div>
  </a>
  <div class="container" id="container-canvas-1">
    <div class="container-canvas width-70" id="container-canvas">
        <img src="img/mapa.png" class="img-park" id="img-park" >
        <canvas class="canvas1" id="canvas1">
          Su navegador no soporta canvas :(
        </canvas>
        <canvas class="canvas1" id="canvas3" >
        </canvas>
        <canvas class="canvas1" id="canvas2" >
        </canvas>
    </div>

    <!-- comienza -->
      <style type="text/css">
      .cal{

        width: 40%;
        margin: 0 auto;
        float: right;

      }

      .cal>h2{
        margin-top: 10%;
        /*height: 80%;*/
      }
    </style>
    <div class="cal">
      <?php include 'calendario_p.php' ?>
    </div>
    <!-- finaliza -->

  </div>
  <div class="container">
    <div class="row col-sm-12 col-md-12">
      <div class="col-sm-10 row col-md-10 barra-fecha" id="container-range">

      </div>
      <div class="col-sm-2 row col-md-2 barra-fecha">
        <input id="fecha_caja" type="text" required="true" class="form-control col-sm-12 col-md-12 form-group">
      </div>
    </div>
  </div>

  <?php
    include 'modal.html';
    include 'alert.html';
    include 'confirm.html';
  ?>

</body>
</html>
