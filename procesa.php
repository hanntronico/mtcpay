<?php
$filebit = dirname(_FILE_).'/bitactivado.txt';


$filename  = dirname(__FILE__).'/estado.txt';
// infinite loop until the data file is not modified
$lastmodif    = isset($_GET['timestamp']) ? $_GET['timestamp'] : 0;
$currentmodif = filemtime($filename);
while ($currentmodif <= $lastmodif) // check if the data file has been modified
{
  usleep(10000); // sleep 10ms to unload the CPU
  clearstatcache();
  $currentmodif = filemtime($filename);
  
  if (file_get_contents($filename) != "0000" && file_get_contents($filebit) != "@1"){     
     $archivo = fopen("bitactivado.txt","w");
     fwrite($archivo, "@1");
     fclose($archivo);
  }
}

// return a json array
$response = array();
$response['msg']       = file_get_contents($filename);
$response['timestamp'] = $currentmodif;
echo json_encode($response);
flush(); //Vaciar el búfer de salida

/* filename: backend.php */