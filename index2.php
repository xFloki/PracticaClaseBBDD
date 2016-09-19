<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <?php
          $usuario_nombre = $_POST['usuario_nombre'];
          $usuario_clave = $_POST['usuario_clave'];
          
        ?>
        <div class="container">
            <div class="row">
                 <div class="col-md-12"><h2 class="text-center">EJEMPLO DE INICIO DE SESIÓN EN PHP</h2></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo $usuario_nombre; ?>
                    <br>
                    <?php echo $usuario_clave; ?>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
          
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
