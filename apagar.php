 <?php

	$valpass = $_POST['password'];

	if ($valpass=='123456') {
		$file = fopen("estado.txt", "w");
		fwrite($file, "0000");
		fclose($file);
		
                $bitarchi = fopen("bitactivado.txt","w");
                fwrite($bitarchi, "0");
                fclose($bitarchi); 

	}else{
		header("location: main.php");
		exit();
	}


//header("location: http://192.168.1.200/enviosms/index.php?id=1");
//header("location: index.php");

// header("location: off_alarma.php");
// header("location: main.php");
?>