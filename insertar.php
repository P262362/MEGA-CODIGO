<?php

include("conexion.php");

if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 

isset($_POST['correo']) && !empty($_POST['correo']) &&
isset($_POST['pw']) && !empty($_POST['pw']))
{


$con=mysql_connect($host,$user,$pw)or die("error");

mysql_select_db($db,$con)or die("error");


mysql_query("INSERT INTO datos (NOMBRE,CORREO,PW) VALUES ('$_POST[nombre]','$_POST[correo]','$_POST[pw]')",$con);

echo"REGISTRO GUARDADO";

}
else
{

echo"error";

}

?>

