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
        $a = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');

            foreach ($a as $elem) {
                echo gettype($elem)," ";
                if( is_numeric($elem)){
                    echo "igen","<br>";
                }
                else
                echo "nem","<br>";
            }
        ?>
    </body>
</html>
