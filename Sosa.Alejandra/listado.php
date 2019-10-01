

<!DOCTYPE html>
<html>
<body>

 

<h2>Lista de usuarios</h2>

<ol>
<?php
$miArchivo = fopen("registro.txt", "r");
while(!feof($miArchivo)) {
  $objeto =json_decode(fgets($miArchivo));
  if($objeto-> Usuario==$_GET[`Usuario`]) and ($objeto-> Clave==$_GET[`Clave`]);
  {}
  
}
fclose($miArchivo);
?>


  
</ol> 

</body>
</html>