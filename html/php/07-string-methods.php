<?php include 'includes/header.php';

$texto= "     yvon       voyelle";
//conocer extencion de un string
echo strlen($texto);
var_dump($texto);

//eliminar espacio en blanco

$espacio_blaco =trim($texto);

//convertir en mayuscula
echo strtoupper($texto);

//convertir en minuscula
echo strtolower($texto);


$imail1="voyelleyvon1@gmail.com";
$imail2="Voyelleyvon1@gmail.com";

var_dump(strtolower($imail1) === strtolower($imail2));

//revisar si un string existe
echo strpos($texto,"yvon");
echo "<br>";
//concatenar 
$tipoCliente="primium";

echo "el cliente".$texto." es ".$tipoCliente;





include 'includes/footer.php';