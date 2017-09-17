
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
			$roadType=$_REQUEST['roadType'];
			$height=$_REQUEST['height'];
			$weight=$_REQUEST['weight'];
			$wheelS=$height/4;
		echo "<b>your cycle wheel's redius size should be</b> ";echo $wheelS;echo "  <b>inches</b>";
	echo "<br/>";
	echo "<br/>";
		switch($roadType){
			case "onRoad": 
					echo "<img src='image/road.jpg' height='150' width='150'>";	
									
			break;
			case "offRoad": 
				echo "<img src='image/GT.jpg' height='150' width='150'>";	
				echo "  ";
				echo "<img src='image/bmx.jpg' height='150' width='150'>";
									
			break;
					
		}
			
	}
?>
