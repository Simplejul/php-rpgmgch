<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rpgmgch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<h1>LOL</h1>
    <?php
        $users = require ('users.php');

        $products = require ('products.php');


        foreach ($clients as $client) {
            echo ($client->getAll());
            echo "<br />";
        }
        foreach ($products as $product) {
            echo ($product->getAll());
            echo "<br />";
        }
        
        $date1 = date("Y-m-d");
        $date2 = "2014-05-17";
        $timestamp1 = strtotime($date1);
        $timestamp2 = strtotime($date2);
        if($timestamp1 == $timestamp2){
            echo "$date1 is equal to the $date2";
        }else{
            echo ($timestamp1>$timestamp2)? "$date1 is greater than the $date2": "$date2 is greater than the $date1";
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
                        foreach ($clients as $client) {
                            echo '<tr><td>'.$client->getId().'</td>'.
                            '<td>'.$client->getEmail().'</td>'.
                            '<td>'.$client->getCreatedAt().'</td></tr>';
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

