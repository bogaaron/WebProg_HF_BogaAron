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
        $napok   = Array( "vasárnap" , "hétfő" , "kedd",  "szerda",
	                  "csütörtök", "péntek", "szombat"          );
	$nap  =  $napok[date("w")];
	print "Ma " . " $nap van.";
        ?>
    </body>
</html>
