<?php

require_once ("../class/Product.php");
require_once ("../class/Vegetable.php");
require_once ("../class/Cloth.php");

$product1 = new Vegetable("01","brocoli","09Fr","Prod01","2018-08-31");
$product2 = new Vegetable("02","carotte","04Fr","Prod02","2018-08-31");
$product3 = new Cloth("03","short","39Fr","No-Mark");
$product4 = new Cloth("04","pull","90Fr","No-Mark");
$product5 = new Cloth("05","jeans","109Fr","No-Mark");

return $products=[
    $product1,
    $product2,
    $product3,
    $product4,
    $product5
]

?>