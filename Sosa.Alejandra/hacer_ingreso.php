<?php
$miobjeto=new stdClass();
$miobjeto->Dominio=$_GET['Dominio'];
$miobjeto->Fecha=$_GET['Fecha'];

$archivo=fopen('vehiculo.txt','a');
fwrite($archivo, json_encode($miobjeto)."\n");
fclose($archivo);

?>