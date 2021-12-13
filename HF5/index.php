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
        
        if (isset($_POST["submit"])) {
            $fn = $_POST["firstName"];
            $ln = $_POST["lastName"];
            $email = $_POST["email"];
            $attend = $_POST["attend"] ?? [];
            if (isset($_POST["terms"])) {
                
                if(!empty($fn)){
                    echo 'Keresztnev: '.$fn.'<br>';
                } else {
                echo 'Nem adtad meg a keresztnevedet!'.'<br>';
                
                }
                if(!empty($ln)){
                    echo 'Vezeteknev: '.$ln.'<br>';
                } else {
                echo 'Nem adtad meg a vezeteknevedet!'.'<br>';
                
                }
                if(!empty($email)){
                    echo 'Keresztnev: '.$email.'<br>';
                } else {
                echo 'Nem adtad meg az email cimed!'.'<br>';
                
                }
                if (!empty($attend)) {
                    echo "<br>";
                    echo "Esemenyek: ".'<br>';
                    foreach ($attend as $at) {
                        echo $at . "<br> ";
                    }
                } else {
                    echo '<br>' . 'Nem valasztottal esemenyt';
                }
                
                if($_POST['tshirt'] != "S"){
                    echo 'A meret amit vallasztottal:S'.'<br>';
                }
                else if($_POST['tshirt'] != "M"){
                    echo 'A meret amit vallasztottal:M'.'<br>';
                }
                else if($_POST['tshirt'] != "L"){
                    echo 'A meret amit vallasztottal:L'.'<br>';
                }
                else if($_POST['tshirt'] != "XL"){
                    echo 'A meret amit vallasztottal:XL'.'<br>';
                }
                else if($_POST['tshirt'] != "Please select"){
                    echo 'Nem valasztott ki meretet!';
                }
                
               if($_FILES["abstract"]["size"] > 3*1024*1024){
                  echo 'A kivallasztott fajl tul nagy!'; 
                }
               else if($_FILES["abstract"]["type"] != "application/pdf"){
                   echo 'A kivallasztott fajl nem PDF!';
               }
               else{
                    move_uploaded_file($_FILES["abstract"]["tmp_name"], "uploads/" . $_FILES["abstract"]["name"]);
               }
                
            
                }
                else{
            echo 'A tovabblepeshez fogadd el a felteteleket!';
        }
                
        }   

                

               

                
                  
        
        ?>

        <h3>Online conference registration</h3>

        <form method="post" action="">
            <label for="fname"> First name:
                <input type="text" name="firstName">
            </label>
            <br><br>
            <label for="lname"> Last name:
                <input type="text" name="lastName">
            </label>
            <br><br>
            <label for="email"> E-mail:
                <input type="text" name="email">
            </label>
            <br><br>
            <label for="attend"> I will attend:<br>
                <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
                <input type="checkbox" name="attend[]" value="Event2">Event2<br>
                <input type="checkbox" name="attend[]" value="Event3">Event2<br>
                <input type="checkbox" name="attend[]" value="Event4">Event3<br>
            </label>
            <br><br>
            <label for="tshirt"> What's your T-Shirt size?<br>
                <select name="tshirt">
                    <option value="P">Please select</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </label>
            <br><br>
            <label for="abstract"> Upload your abstract<br>
                <input type="file" name="abstract"/>
            </label>
            <br><br>
            <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
            <br><br>
            <input type="submit" name="submit" value="Send registration"/>
        </form>
    </body>
</html>
