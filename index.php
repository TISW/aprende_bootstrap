<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Página Administrador</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<div class="container">
<h1><img src="EscudoUBB_horizontal.jpg" width="200" height="50"></h1>
    <nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SAPP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Practicas</a></li>
        <li><a href="empresa.php">Empresa</a></li>
        <li><a href="#">Bitacora</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Bienvenido Pato</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="row">
		<div class="col-xs-12 col-sm-2 col-md-2">

			<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
      <li class="active"><a href="#">Administrar Practicas</a></li>
      <li><a href="#">Practica 1</a></li>
      <li><a href="#">Practica 2</a></li>
      <li><a href="#">Historial</a></li>
    </ul>
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10">
      <?php if(isset($content)) echo $content;else 
       echo '<div class="alert alert-danger">
                 <strong>Nos se a cargado la vista</strong> No tiene los permisos para acceder a la pagina.
              </div>';
     ?>
		</div>
	</div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>