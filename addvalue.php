<?php
   	include("connection.php");
   	
   	$link=Connection();
        
		
	$query ="INSERT INTO CO(date,CO) VALUES ('2016-11-09 00:00:00','0.5'),('2016-11-18 00:00:00','0.8'),('2016-11-19 00:00:00','0.3'),('2016-11-03 00:00:00','0.25'),('2016-11-13 00:00:00','0.4')";
    
		
	mysqli_query($link,$query);
	mysqli_close($link);
    echo"yeah";
?>
