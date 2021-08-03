<?php include 'includes/header.php';
$cliente=[
"nombre"=> "yvon",
"saldo"=> 200,
"informacio" =>[
    "tipo"=> "premium",
    "precio"=> 300
]

];

echo "<pre>";
var_dump($cliente);
echo "<pre>";



include 'includes/footer.php';