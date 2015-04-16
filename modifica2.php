
<?php

$c=$HTTP_POST_VARS['s'];
include("conexion.php");



$con=mysql_connect($host,$user,$pw)or die("error de conexion");
mysql_select_db($db,$con)or die("error de base de datos");


$consulta="select TITULO, CODIGO from codigo where TITULO='$c'";



$r=mysql_query($consulta);
if ($r){

	$registro=mysql_fetch_row($r);
}

?>

<html>
<head>
 <title> Cambios al codigo</title> 
</head>
<body> 

<pre>
<form name="ficha" action="actualizar2.php" method="post"> 

MODIFICA TU CODIGO O ENVIALO POR CORREO	
<input type="Hidden" name="c" value="<?php echo($c); ?>">  
TITULO: <input type="text" name="d" value="<?php echo($registro[0]); ?>" size=60 maxlength=60 requiered> 
CODIGO: <textarea name='m' rows"100" cols"100"> <?php echo($registro[1]); ?> </textarea>
ENVIAR AL CORREO: <input type="text" name="a" size=60 maxlength=60> 
<input type="submit" value="Guardar" > <a href="inicio.php"><input type="button" value="cancelar"></a>
</form>	

</pre>
</body></html>
