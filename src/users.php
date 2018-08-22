<?php
    require ("../class/Client.php");
    $client1 = new Client("01","a@a","09h00");
    $client2 = new Client("02","b@b","09h09");

    return $clients=[
        $client1,
        $client2
    ];
  
?>