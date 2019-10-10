<?php
$archivo = fopen("usuarios.txt", "r") or die("No se puede abrir el archivo");
	
		while(!feof($archivo)) 
		{
			$objeto = json_decode(fgets($archivo));
			if ($objeto->Usuario == $_GET['Usuario']) 
			{				 
				if ($objeto->Clave == $_GET['Clave'])
				{
					header("Location: ok.php");
					fclose($archivo);
					exit();
				}
				else
				{
					header("Location: no_ok.php");
					fclose($archivo);
					exit();
				}
			}
			 	
		}
		header("Location: page/UsuarioInexistente.php");
		fclose($archivo);
		exit();
		
		fclose($archivo);
	
	exit();
?>