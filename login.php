
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
        require 'menu_inicio.php';
    } else {
        require 'mensaje_error.php';
    }
} else {
    require 'mensaje_error.php';
}
?>
        


