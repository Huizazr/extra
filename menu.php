<!DOCTYPE html>
<head>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Aerolineas Martin</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="use2.php">Home</a></li>

          <li class="dropdown">
            <a class="dropdown-toggle" href="regviaje.php">Nuevo viaje</a>
          </li>

           <li class="dropdown">
            <a class="dropdown-toggle" href="mishorarios.php">Mis horarios</a>
          </li>
		  
		<li class="dropdown">
            <a class="dropdown-toggle" href="misvuelos.php">Mis vuelos</a>
          </li>
		<li class="dropdown">
            <a class="dropdown-toggle" href="misdestinos.php">Mis destinos</a>
          </li>
		  
		  <li class="dropdown">
            <a class="dropdown-toggle" href="conocenos.php">Conocenos</a>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
        </ul>
      </div>
    </div>
  </nav>

</body>
</html>

