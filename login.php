
<?php

include ('./misfunciones.php');
$mysqli = conectaBBDD();


// leo os parametros que me pasa el index.php
$usuario_nombre = $_POST['usuario_nombre'];
$usuario_clave = $_POST['usuario_clave'];

//hago la consulta a la BDD
$resultado_consulta = $mysqli->query("SELECT * FROM usuario where Dni = '$usuario_nombre' ");
$numero_dnis = $resultado_consulta->num_rows;
//como solo puede haber como mucho un DNI en este resutla porque el DNi es campo clave 
// y no se puede repetir lo pongo con un if, si no, se tiene que tratar todo el resultado de la query
//con un vluclo for por ejemplo 
if ($numero_dnis > 0) {
    //si la query es valida y me devuelve por lo menos un dni
    //entonces mostrare el menu normal 
    //Voy a leer el campo dni y el campo pw de la bdd

    $r = $resultado_consulta->fetch_array();
    $DNI = $r['DNI'];
    
    $password = $r['Password'];
    if ($usuario_clave == $password) {
        if(isset($_POST['remember'])){
             setcookie('DNI', $DNI, time()+60*60*7);
             setcookie('password', $password, time()+60*60*7);
         } 
       //inicializo la sesion
        session_start();
        require 'menu_inicio.php';        
        //guardo los datos del usuario que ha hecho login correcto 
        $_SESSION['DNI'] = $DNI;
        $_SESSION['Nombre'] = $r['Nombre'];
        $_SESSION['Email'] = $r['Email'];
        
    } else {
         session_start();
         $_SESSION['error'] = "La contraseña o el usuario no son correctos";
         
         
       header('location: index.php');
        
    }
} else {
    require 'mensaje_error.php';
}
?>
        


