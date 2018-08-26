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

    <?php
        $users = require ('users.php');
        $products = require ('products.php');
    ?>

        <table class="tab">
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

        </table>


</body>
</html>

