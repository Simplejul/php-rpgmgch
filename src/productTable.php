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
<h1>LOL</h1>
    <?php

        $products = require_once ('products.php');

        foreach ($products as $product) {
            echo ($product->getAll());
            echo "<br />";
        }
    ?>

        <table>
            <thead>
                <tr>
                    <th colspan="3">The table of clients</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Email</td>
                    <td>Created Date</td>
                </tr>
                
                    <?php
                        foreach ($products as $product) {
                            echo '<tr><td>'.$product->getId().'</td>'.
                            '<td>'.$product->getEmail().'</td>'.
                            '<td>'.$product->getCreatedAt().'</td></tr>';
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