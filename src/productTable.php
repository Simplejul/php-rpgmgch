<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table of products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head>
<body>

    <?php

        $products = require_once ('products.php');

        // foreach ($products as $product) {
        //     echo ($product->getAll());
        //     echo "<br />";
        //     print_r($product);
        // }
    ?>

        <table class="tab">
            <thead>
                <tr>
                    <th colspan="7">The table of clients</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Prod. Name</td>
                    <td>Expires At</td>
                    <td>is fresh</td>
                    <td>Brand</td>
                </tr>
                
                    <?php
                        foreach ($products as $product) {
                    ?>
                    
                            <tr>
                            <td><?php echo $product->getId() ?></td>         <td><?php echo $product->getName() ?></td>
                            <td><?php echo $product->getPrice() ?></td>
                            <td><?php echo (method_exists ($product , 'getProductorName'))?  $product->getProductorName(): "XXX" ?></td>
                            <td><?php echo (method_exists ($product , 'getExpiresAt'))? $product->getExpiresAt() : "XXX" ?></td>
                            <td><?php echo (method_exists ($product , 'IsFresh'))? $product->isFresh() : "XXX" ?></td>
                            <td><?php echo (method_exists ($product , 'getBrand'))? $product->getBrand() : "XXX" ?></td></tr>

                    <?php
                        };
                    ?>
                   
                
            </tbody>
            <!-- <tfoot>
                <tr>
                    <td colspan="3">The table footer</td>
                </tr>
            </tfoot> -->
        </table>


</body>
</html>