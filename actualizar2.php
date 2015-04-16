<?php
include("conexion.php");
$m1=$HTTP_POST_VARS['m'];
$d1=$HTTP_POST_VARS['d'];
$c1=$HTTP_POST_VARS['c'];
$destino = $HTTP_POST_VARS['a'];
$desde = "From:". "megared";
$asunto = $HTTP_POST_VARS['d'];
$mensaje = $HTTP_POST_VARS['m'];

$con=mysql_connect($host,$user,$pw)or die("error de conexion");
mysql_select_db($db,$con)or die("error de base de datos");


$consulta="update codigo set TITULO=\"$d1\" ,CODIGO=\"$m1\" ,USUARIO=\"TITO\" where TITULO='$c1'";

$r=mysql_query($consulta);

$con=mysql_connect($host,$user,$pw)or die("error");

mysql_select_db($db,$con)or die("error");


mysql_query("INSERT INTO codigo (TITULO,USUARIO,CODIGO) VALUES ('$_POST[asunto]','$usuario','$_POST[mensaje]')",$con);



echo(mysql_error());
if (mysql_affected_rows()>0){
 mail($destino,$asunto,$mensaje,$desde);
 echo("CODIGO MODIFICADO, ENVIADO AL CORREO");

}
else{
  echo("error al modificar datos");
 
}
echo(" <a href=\"inicio.php\"><input type=\"button\" value=\"regresar\"></a> ");
mysql_close();
?>
