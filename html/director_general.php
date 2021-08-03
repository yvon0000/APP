<?php include"includes/header.php";?>
<?php


	//Declarar dos variables $nombre, $contrasena
	$nombre="yvon";
	$tipo="plancha";
	$apellido="voyelle";
	$cuidad="victoria";
	$stock="500";
	
	
	if(isset($_GET[ "enviar_hdn"])){
		if($nombre==$_GET["nombre_txt"] && $tipo==$_GET["tipo_txt"] 
		&& $apellido==$_GET["apellido_txt"] && $cuidad==$_GET["cuidad_txt"]
		&& $stock==$_GET["stock_txt"]){

		echo  "El nombre que ingresaste por GET es ".$_GET["nombre_txt"].
			".<br></br>El apellido que ingresaste por GET es ".$_GET[ "apellido_txt"].
            ".<br></br>la direccion que ingresaste por GET es ".$_GET[ "direccion_txt"].
            ".<br></br>la cuidad que ingresaste por GET es ".$_GET[ "cuidad_txt"].
            ".<br></br>el tipo que ingresaste por GET es ".$_GET[ "tipo_txt"].
            ".<br></br>la cantidad que ingresaste por GET es ".$_GET[ "stock_txt"]
            .".";	
		}
		
		else{
			echo "Verifica tus datos";
		}
		
	}
	else if(isset($_POST["enviar_hdn"])){
		if($nombre==$_POST["nombre_txt"] && $codigo==$_POST["codigo_txt"] 
		&& $apellido==$_POST["apellido_txt"] ){

		echo  "El nombre que ingresaste por POST es ".$_POST["nombre_txt"].
			".<br></br>El apellido que ingresaste por POST es ".$_POST[ "apellido_txt"].
            ".<br></br>El codigo que ingresaste por POST es ".$_POST[ "codigo_txt"].
            ".<br></br>la hora que ingresaste por POST es ".$_POST[ "hora_entrada_txt"].
            ".<br></br>la hola que ingresaste por POST es ".$_POST[ "hora_salida_txt"].
            ".<br></br>la cantidad que ingresaste por POST es ".$_POST[ "cuantas_txt"]
            .".";	
		}
		else{
			echo "Verifica tus datos";
		}
	}

include 'includes/footer.php';