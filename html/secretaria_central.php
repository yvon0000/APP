<?php include"includes/header.php";?>
<?php


	//Declarar dos variables $nombre, $contrasena
	$nombre="yvon";
	$apellido="voyelle";
	$cuidad="victoria";
	$material="motoBomba";
	$devolver="5";
	
	
	if(isset($_POST[ "enviar_hdn"])){
		if($nombre==$_POST["nombre_txt"] && $cuidad==$_POST["cuidad_txt"] 
		&& $apellido==$_POST["apellido_txt"] && $material==$_POST["material_txt"]
		&& $devolver==$_POST["devolver_txt"]){

		echo  "El nombre que ingresaste por POST es ".$_POST["nombre_txt"].
			".<br></br>El apellido que ingresaste por POST es ".$_POST[ "apellido_txt"].
            ".<br></br>El cuidad que ingresaste por POST es ".$_POST[ "cuidad_txt"].
            ".<br></br>La direccion que ingresaste por POST es ".$_POST[ "direccion_txt"].
            ".<br></br>el tipo de material que ingresaste por POST es ".$_POST[ "material_txt"].
            ".<br></br>la cantidad dias que ingresaste por POST es ".$_POST[ "devolver_txt"]
            .".";	
		}
		
		else{
			echo "Verifica tus datos";
		}
		
	}
	else if(isset($_POST["enviar_hdn"])){
		if($nombre==$_POST["nombre_txt"] && $codigo==$_POST["codigo_txt"] 
		&& $apellido==$_POST["apellido_txt"] && $sector==$_POST["sector_txt"]){

		echo  "El nombre que ingresaste por POST es ".$_POST["nombre_txt"].
			".<br></br>El apellido que ingresaste por POST es ".$_POST[ "apellido_txt"].
            ".<br></br>El codigo que ingresaste por POST es ".$_POST[ "codigo_txt"].
            ".<br></br>El sector que ingresaste por POST es ".$_POST[ "sector_txt"].
            ".<br></br>la cantidad que ingresaste por POST es ".$_POST[ "total_txt"].
            ".<br></br>la cantidad que ingresaste por POST es ".$_POST[ "fallas_txt"]
            .".";	
		}
		else{
			echo "Verifica tus datos";
		}
	}

include 'includes/footer.php';