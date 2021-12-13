<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();

        if (isset($_GET["elkuldott"])) {

            if (isset($_GET["talalgatas"])) {

    
                if (isset($_SESSION['gszam'])) {
                    
                    $_SESSION['gszam']=rand(1,10);
                    $gszam=$_SESSION['gszam'];
                    echo '$gszam'.' <br>';

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