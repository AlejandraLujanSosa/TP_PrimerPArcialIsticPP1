<?php
$miobjeto=new stdClass();
$miobjeto->Usuario =$_GET['Usuario'];
$miobjeto->Clave =$_GET['Clave'];

$archivo=fopen('registro.txt','a');
fwrite($archivo, json_encode($miobjeto)."\n");
fclose($archivo);

?>