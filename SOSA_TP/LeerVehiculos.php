<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.lincoln-offices.com/wp-content/uploads/2019/06/estacionamiento.png">

    <title>Vehiculos</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxS8enFJl3D437JId2eMMF4YRkQ4XQiTk9OWbiOFyEYuJ0W6u&s">


    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Registro.php">Registrarse<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Login.php">Login</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="IngresoVehiculo.php">Check-IN</a>
            </li>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Facturar.php">Check Out</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="LeerFacturados.php">Facturados</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="LeerUsuarios.php">Listar Usuarios</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="LeerVehiculos.php">Listar Vehiculos</a>
            </li>               
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main" class="container">
      <h2 class="mt-5">Lista de vehiculos Ingresados</h2>
		<ul>
			<?php
			$miArchivo = fopen("VehiculosIngresos.txt", "r") ;
			
			while(!feof($miArchivo)) 
			{
  				$objeto = json_decode(fgets($miArchivo));
  				if (isset($objeto->Patente) != "")
          {
            echo "<li>" ."Patente: ".$objeto->Patente." Horario: ".$objeto->Horario."</li>";
          }  
			}
			fclose($miArchivo);
			?>
		</ul> 
      
    </main>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="popper.min.js"></script>

</body>
</html>