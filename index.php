<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                background: black;
                background-image: url("img/tile2.png");
            }
        </style>
    </head>
    <body>
        <div class="container" id="centro">
            <div class="row">
                 <div class="col-md-12"><h2 class="text-center" style="color:white;">EJEMPLO DE INICIO DE SESIÓN EN PHP</h2></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
<!--                    <form action="index2.php" method="post">-->
                  
                        <br>
                        <input id="usuario_nombre" class="form-control" type="text" placeholder="Usuario">
                        <br>
                        <input id="usuario_clave"  class="form-control" type="password" placeholder="Contraseña">
                         <br>
                            <p style="color:white;"> <input id="recordar" type="checkbox"  > Recuérdame </p>
                        
                        
                        
                         <button class="btn btn-success btn-block" onclick="chequeaPass();"> Entrar</button>
<!--                  </form>-->


                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
        

if (!isset($_SESSION)) {session_start();}
//        $nombre = $_SESSION['Nombre'];
         if (isset($_COOKIE['DNI']) and isset($_COOKIE['password'])) {
            $nombre = $_COOKIE['DNI'];
            $password = $_COOKIE['password']; 
          
            
            echo  "<script>
                document.getElementById('usuario_nombre').value = '$nombre';
                 document.getElementById('usuario_clave').value = '$password';
                document.getElementById('recordar').checked = true;
                </script>";
                    
        }
        

        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script>
          function chequeaPass(){
              var _usuario_nombre = $('#usuario_nombre').val();
              var _usuario_clave = $('#usuario_clave').val();            
               if( document.getElementById('recordar').checked == true){
                    var _recordar = 'on';
                } else {
                    var _recordar = 'off';
                }
              console.log(_recordar);
              console.log(_usuario_nombre);
            $('#centro').load("login.php",{
               
                recordar : _recordar,
                usuario_nombre : _usuario_nombre,
                usuario_clave:_usuario_clave
            });
              
          }
      </script>
</html>
