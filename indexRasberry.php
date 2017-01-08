<?php

	include("connect.php"); 	
	
	$link=Connection();

	$result=mysqli_query($link,"SELECT * FROM `DHT22` ORDER BY `datee` DESC");
?>

<html>
   <head>
      <title>Sensor Data</title>
   </head>
<body>
   <h1>Temperature / moisture sensor readings</h1>

   <table border="1" >
		<tr>
			<td>&nbsp;Timestamp&nbsp;</td>
			<td>&nbsp;Temperature&nbsp;</td>
			<td>&nbsp;Humidite&nbsp;</td>
			
		</tr>

      <?php 
		  if($result!==FALSE){
		     while($row = mysqli_fetch_array($result)) {
		        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
		           $row["datee"], $row["temperature"],$row["humidite"]);
		     }
		     mysqli_free_result($result);
		     mysqli_close($link);
		  }
      ?>

   </table>
</body>
</html>
