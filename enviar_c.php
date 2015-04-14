<?php
include("conexion.php");
if (isset($_POST['asunto']) && !empty($_POST['asunto']) &&
isset($_POST['mensaje']) && !empty($_POST['mensaje']))
{

$destino = $_POST['correo'];
$desde = "From:". "megared";
$asunto = $_POST['asunto'];
$usuario = "TITO";
$mensaje = $_POST['mensaje'];

$con=mysql_connect($host,$user,$pw)or die("error");
mail($destino,$asunto,$mensaje,$desde);
mysql_select_db($db,$con)or die("error");


mysql_query("INSERT INTO codigo (TITULO,USUARIO,CODIGO) VALUES ('$_POST[asunto]','$usuario','$_POST[mensaje]')",$con);

echo"REGISTRO GUARDADO";

echo "correo enviado...";
}else{
echo"error";
}
?>
