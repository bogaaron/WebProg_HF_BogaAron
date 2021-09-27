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
        <table border="1">
        <?php
        $start  = 1;
	$end = 10;

		print("<tr>");
		print("<th></th>");
		for($count = $start; $count <= $end; $count++) 
		print("<th>".$count."</th>");
		print("</tr>");
		
		for($count = $start; $count <= $end; $count++) 
		{
		  print("<tr><th>".$count."</th>");
		  for($count2 = $start; $count2 <= $end; $count2++) 
		  {
			$result = $count / $count2; 
			printf("<td>%.3f</td>", $result);
		  }
		  print("</tr> \n");
		}	
	?>
	</table>
        
    </body>
</html>
