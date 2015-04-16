$con=mysql_connect($host,$user,$pw)or die("error");
mysql_select_db($db,$con)or die("error");

$consulta="select * from codigo";
$r=mysql_query($consulta);
$d=mysql_num_rows($r);
if ($d>=0){
        echo ("<td> SELECCIONA UN CODIGO PARA MODIFICAR O ENVIAR POR CORREO </td>");
	echo(" <form action=\"modifica2.php\" method=\"post\">    ");
	echo (" <table border=1> ");
	echo ("<tr>");
	echo ("<td> TITULO </td>");
        
	echo ("<td> SELECCION </td>");
	echo ("</tr>");
	$n=1;
	while($registro=mysql_fetch_row($r)){
		echo ("<tr>");

		echo ("<td> $registro[0] </td>");
		
		echo ("<td> <input type=\"radio\" name=\"s\" value=\"$registro[0]\" </td>");

		echo("</tr>");
		$n++;
