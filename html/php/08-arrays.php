<?php include 'includes/header.php';

$carrito =["telefon", "tablet","television"];

//agregar un elementoal final

$carrito[4]="audifonos";

//agregar un elemento al final
array_push($carrito,"teclado");


//agregar un elemento al inicio
array_unshift($carrito,"monitor");

//accede a unelemento
echo $carrito[4];


echo "<pre>";
var_dump($carrito);
echo "<pre>";


include 'includes/footer.php';