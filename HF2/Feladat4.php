<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');
        array_walk($szinek,function ($nagy){
            echo  strtoupper($nagy)."\n";
            
        });
        echo "<br>";
        array_walk($szinek,function ($kicsi){
            echo  strtolower($kicsi)."\n";
        });
        ?>
    </body>
</html>
