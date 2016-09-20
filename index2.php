<!DOCTYPE html>

 <?php
          include ('./misfunciones.php');
          $mysqli = conectaBBDD();
          
        ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                 <div class="col-md-12"><h2 class="text-center">EJEMPLO DE INICIO DE SESIÓN EN PHP</h2></div>
            </div>
        <?php
        
          $usuario_nombre = $_POST['usuario_nombre'];
          $usuario_clave = $_POST['usuario_clave'];
          $resultado_consulta = $mysqli ->query("SELECT * FROM usuario where Dni = '$usuario_nombre' ");
          $numero_dnis = $resultado_consulta -> num_rows;
          
          if($numero_dnis > 0){
              //si la query es valida y me devuelve por lo menos un dni
              //entonces mostrare el menu normal 
              //Voy a leer el campo dni y el campo pw de la bdd
            
              $r = $resultado_consulta -> fetch_array();
              $DNI = $r['DNI'];
              $password = $r['Password'];

        ?>
        
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h3 class="text-center"> SUFRO MUCHO </h3>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
          }
          else {
              ?>
        
            <div class="row">
               
                <div class="col-md-12">
                    <h3 class="text-center"> EL USUARIO O LA CONTRESEÑA NO SON CORRECTOS </h3>
                    <br>
                     <h3 class="text-center"> SIGUE INTENTANDOLO MAQUINA </h3>
                </div>
                 <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
        
          }
          
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
