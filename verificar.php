<?php

session_start();
include("conexion.php");

if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 

isset($_POST['pw']) && !empty($_POST['pw']))
{
 $con=mysql_connect($host, $user, $pw)or die("error de conexion");
 mysql_select_db($db, $con)or die("error de seleccion");

$sel=mysql_query("SELECT NOMBRE,PW FROM datos WHERE NOMBRE='$_POST[nombre]'",$con);

$sesion=mysql_fetch_array($sel);

if($_POST['pw'] == $sesion['PW']) {
$_SESSION['username'] = $_POST['nombre'];
echo"sesion iniciada";
}else{
echo "usuario o contraseña erronea";
}

}else{
echo "debes llenar todos los campos";
}
?>
