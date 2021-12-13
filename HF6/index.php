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
        $_SESSION['gszam'] = rand(1, 10);
        session_start();    
        $gszam=$_SESSION['gszam'] ;
       
        if (isset($_GET["elkuldott"])) {

            echo $_SESSION['gszam'];
            echo "<br>";

            if (isset($_SESSION['gszam'])) {
                
                if ($_GET["talalgatas"] > $gszam) {

                    echo "Nem talaltad el!A szam ennel kisseb! ";
                } elseif ($_GET["talalgatas"] < $gszam) {
                    echo "Nem talaltad el!A szam ennel nagyobb! ";
                } else {

                    echo "Eltalaltad!";
                    unset($_SESSION['gszam']);
                }
            }
        }
        ?>
        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="elkuldott" value="true">
            Melyik számra gondoltam 1 és 10 között?
            <input name="talalgatas" type="text">
            <br>
            <br>
            <input type="submit" value="Elküld">
        </form>
    </body>
</html>
