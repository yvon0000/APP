<?php include"includes/header.php";?>
<?php


//Declarar dos variables $nombre, $contrasena
$nombre="voyelleyvon1@gmail.com";
$contrasena="123";

if(isset($_GET[ "enviar_hdn"])){

    if($nombre==$_GET["correo_txt"] && $contrasena==$_GET["contrasena_txt"] ){
        echo  header("location:menu.html");
    }else{
        echo "Verifica tus datos";
    }
         
}


include 'includes/footer.php';