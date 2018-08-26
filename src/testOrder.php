<h2>Test Achat</h2>
<?php

require ('users.php');
require_once ('products.php');

$client1->buy($product4);
$client1->buy($product1);
$client1->buy($product2);
$command = $client1->getCart();
echo $client1->getBillAmount()."<br /><br />";
foreach($command as $key=>$prod){
    echo $prod->getName();
    echo "<br />";
}
?>