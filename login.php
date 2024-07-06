<?php 

		session_start();
		// include("conectar.php");
		// $link=Conectarse();


		$login=htmlentities($_POST["Username"]);
		$clave=md5($_POST["Password"]);


	// $res=@mysql_query("select * from usuario where login='$login'",$link);
	// $res = mysqli_query($link, "select * from usuario where login='$login'");	
	// if (mysqli_num_rows($res)==0)
	// {
	// 	header("location: index.php?deny=6");
	// 	// header("location: #!/login.html");
	// 	exit();	
	// }

	// $row=@mysql_fetch_array($res);
	// $row=mysqli_fetch_array($res);
	// $codu=$row[0];

	// $res=@mysql_query("select * from usuario where cod_usuario='$codu' and clave='$clave' and estado=1",$link);
	// $res=mysqli_query($link, "select * from usuario where cod_usuario='$codu' and clave='$clave' and estado=1");

	// if (@mysql_num_rows($res)>0)
	// if (mysqli_num_rows($res)>0)
	if(1==1)
	{
		// $row=mysqli_fetch_array($res);

		$_SESSION["s_cod"]=18;
		$_SESSION["s_tipo"]=1;
		$_SESSION["s_solonom"]="Robert";
		$_SESSION["s_nombreC"]="Robert Malca";
		$_SESSION["s_correousu"]="robertm_l@gmail.com";

		// echo $_SESSION["s_cod"]." ".$_SESSION["s_tipo"]." ".$_SESSION["s_nombreC"];
		// exit();

	// 	date_default_timezone_set('America/Lima');
	// 	$ui=$row[0];
	// 	$hoy=date("Y-m-d H:i:s");
	// 	$pc=$_SERVER['REMOTE_ADDR'];

	//   $rs=mysqli_query("set names utf8",$link);
	//   $fila=mysqli_fetch_array($rs);
	// 	$sql = "insert into accesos(acc_fecha,acc_origen, usr_codigo) values('$hoy','$pc','$ui')"; 
	//   $res=mysqli_query($sql,$link);
	

		if (1==1)
		{
			// header("location: index.html");
			header("location: main.php");
			exit;
		}

		if (1==2)
		{
			header("location: modulos/admin/main_admin.php");
			exit;
		}
		

		if ($row["cod_nivel"]==3)
		{
			// $id=$row[0];
			// $res2=mysql_query("select * from admin where adm_codigo='$id'",$link);
			// $row2=mysql_fetch_array($res2);
			
			// $_SESSION["s_nivel"]=$row2[3];
			// $_SESSION["s_fac"]=$row2[1];
			// $_SESSION["s_esc"]=$row2[2];
			// $_SESSION["s_sede"]=$row2["sed_codigo"];
			// $esc=$row2[2];

			header("location: main.php");			
			exit;
		}
	}
	else
	{
		header("location: index.php");
		exit;	
	}
exit;


	
?>