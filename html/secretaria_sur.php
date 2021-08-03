<?php include"includes/header.php";?>
<?php


	
	$nombre="clavo";
	$codigo="123";
	$tipo="puntilla";
	$dano="mujada";
	
	
	if(isset($_GET[ "enviar_hdn"])){
		if($nombre==$_GET["nombre_txt"] && $codigo==$_GET["codigo_txt"] 
		&& $tipo==$_GET["tipo_txt"] && $dano==$_GET["dano_txt"]){

		echo 
            ".<br></br>El codigo que ingresaste por GET es ".$_GET[ "codigo_txt"].
			".<br></br>El nombre que ingresaste por GET es ".$_GET["nombre_txt"].
			".<br></br>la fecha que ingresaste por GET es ".$_GET[ "entrada_txt"].
            ".<br></br>el tipo de producto ingresaste por GET  es  ".$_GET[ "tipo_txt"].
            ".<br></br>el tipo de daño ingresaste por GET es ".$_GET[ "dano_txt"]
           
            .".";	
		}
		
		else{
			echo "Verifica tus datos";
		}
		
	
	}

include 'includes/footer.php';