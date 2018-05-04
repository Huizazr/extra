 <?php
session_start();
if (!isset($_SESSION['matricula'])) {
	header("Location:index.php");
}else {
	include('menu.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <!-------------------------------------------------------------------->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
<!-------------------------------------------------------------------->
    <title>Jumbotron Template for Bootstrap</title>
<!---------------------------------------------------ESTILOS Y JAVASCRIPT------------------------------>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
      <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      <link href="JUMBOTRON.css" rel="stylesheet">
      <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
<!------------------------------------------------------------------------------------------------------>
  </head>

  <body>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      <img src="avion.jpg">
        <h1>Acerca de nosotros</h1>
        <p>Somo la aerolinea con el costo mas bajo con la flota de aviones mas moderna en latinoamerica y una de las aerolineas con mayor crecimiento en el mundo</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns --> 
       <div class="row" style="text-align: center;">
        <div class="col-lg-4">
          <img class="img-circle" img src="mision.jpg"src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Mision</h2>
          <p>Siempre seguros, siempre confiables y siempre precios bajos</p>
          
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" img src="vision.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Vision</h2>
          <p>Ser la aerolinea de mas bajo costo, preferida, divertida y rentable en las americas</p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" img src="proposito.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Proposito</h2>
          <p>Queremos que la gente se divierta, haga negocios y se conecten con sus seres queridos aprovechando la reduccion de costos en el transporte aereo.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

<h1 style="text-align: center;">Ventajas</h1>
            
            <ul>
              <li>Unica aerolinea en mexico con esquema de bajo</li>
              <li>El precio mas bajo del mercado garantizado</li>
              <li>Vuelos punto a punto, sin conexiones</li>
              <li>Solo se paga por los servicios adicionales que uno desee</li>
              <li>Pagina web de facil acceso</li>
              <li>Promociones semanales durante todo el a�o</li>
              <li>73 rutas nacionales y 5 internacionales.</li>
              <li>Venta de productos complementarios a bordo</li>
              <li>Servicio de garantia de respuesta a nuestros pasajeros</li>
            </ul>
      <hr>

      <footer>
        <p>&copy; 2018 Aerolineas Martin el mejor lugar para tomar un vuelo</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
