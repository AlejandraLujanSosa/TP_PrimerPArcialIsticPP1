<?php
$miobjeto=new stdClass();
$miobjeto->Dominio=$_GET['Dominio'];
$miobjeto->Hora=$_GET['Hora'];

$archivo=fopen('usuarios.txt','a');
fwrite($archivo, json_encode($miobjeto)."\n");
fclose($archivo);

?>