<?php include 'includes/header.php';

$clientes1=[];
$clientes2=array();
$clientes3=array("yvon","egenie","yvaldes");

$clientes4=[
    "nombre"=>"yvon",
    "saldo"=> 300
];

//empty revisar si un variable esta vacio

echo"<br>";
var_dump( empty($clientes1));
echo"<br>";
//isset revisar si la variable existe

 var_dump( isset($clientes1));
 echo"<br>";
 var_dump( isset($clientes4["nombre"]));

include 'includes/footer.php';