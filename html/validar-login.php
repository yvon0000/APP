<?php include"includes/header.php";?>
<?php


	//Declarar dos variables $nombre, $contrasena
	$nombre="yvon";
	$contrasena="123";
	$apellido="voyelle";
	$cuidad="victoria";
	$edad="10";
	
	
	if(isset($_GET[ "enviar_hdn"])){
		if($nombre==$_GET["nombre_txt"] && $contrasena==$_GET["contrasena_txt"] 
		&& $apellido==$_GET["apellido_txt"] && $cuidad==$_GET["cuidad_txt"]
		&& $edad==$_GET["edad_txt"]){ 
			echo  "El nombre que ingresaste por GET es ".$_GET["nombre_txt"].
			
			".<br></br>El apellido que ingresaste por GET es ".$_GET[ "apellido_txt"].".";	
		}
		
		else{
			echo "Verifica tus datos";
		}
		
	}
	else if(isset($_POST["enviar_hdn"])){
		if($nombre==$_POST["nombre_txt"] && $contrasena==$_POST["contrasena_txt"] 
		&& $apellido==$_POST["apellido_txt"] && $cuidad==$_POST["cuidad_txt"]
		&& $edad==$_POST["edad_txt"]){
			echo "El nombre que ingresaste por POST es ".$_POST["nombre_txt"].
			".<br></br>El apellido que ingresaste por GET es ".$_POST["apellido_txt"].
			
			".<br></br>la cuidad que ingresaste por GET es ".$_POST["cuidad_txt"].
			
			".<br></br>la edad que ingresaste por GET es ".$_POST["edad_txt"].
			".<br></br> La contraseña que ingresaste por POST es ".$_POST[
			"contrasena_txt"].".<br></br> El sexo que seleccionaste es ".$_POST[
			"sexo_rdo"].".";
		}
		else{
			echo "Verifica tus datos";
		}
	}

include 'includes/footer.php';