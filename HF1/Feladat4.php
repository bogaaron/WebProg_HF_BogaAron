<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
      <?php
      for($sor=1;$sor<=8;$sor++)
	  {
          echo "<tr>";
          for($oszlop=1;$oszlop<=8;$oszlop++)
		  {
          $total=$sor+$oszlop;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>
