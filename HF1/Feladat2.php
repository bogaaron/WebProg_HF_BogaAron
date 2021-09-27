<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>Számológép</title>
  </head>
<body>

    <form action="Feladat2.php">
<input type="hidden" name="meghivva">
a= <input type="text" name="a"><br>
b= <input type="text" name="b"><p>
Művelet:<br>
<input type="radio" name="muvelet" value="+" default>a+b<br>
<input type="radio" name="muvelet" value="-">a-b<br>
<input type="radio" name="muvelet" value="*">a*b<br>
<input type="radio" name="muvelet" value="/">a/b<br>
<input type="submit" value="Számold ki"><p>
</form>

<?php
 if (isset($muvelet)) {
   switch ($muvelet) {
     case "+":
       $eredm=$a+$b;
       break;
     case "-":
       $eredm=$a-$b;
       break;
     case "*":
       $eredm=$a*$b;
       break;
     case "/":
       $eredm=$a/$b;
   }
   echo "Eredmeny: <b>$a $muvelet $b = $eredm</b>";
 }
 
?>

</body>
</html>