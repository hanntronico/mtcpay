<?php

function Conectarse()
{
	// if (!($enlace=mysql_connect("localhost","root","*274053*")))
	if (!($enlace=mysqli_connect("localhost","root","*274053*")))
	{
	echo "ERROR EN LA CONEXION: NUEVOS ELEMENTOS HAN SIDO CREADOS";
	exit();
	}
	// if (!mysql_select_db($enlace, "bdaccesscon"))
	if (!mysqli_select_db($enlace,"bdaccesscon"))
	{
	echo "ERROR EN LA CONEXION BD";
	exit();
	}
return $enlace;
}

?>