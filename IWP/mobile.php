<?php
	include("connection.php");
	//session_start();
	//session_destroy();
	function display_mobile(){
		global $dbc;
		$q= "SELECT image, name, ram, battery, os, color, memory, camera FROM mobile";
		//$num = mysql_num_rows($q);
		$conn = new mysqli("localhost","root","","hermes");
		$result=mysqli_query($conn,$q);
			while($fetch = mysqli_fetch_assoc($result)){
				echo '<img src="image/'.$fetch['image'].'" width=11% height=36% /><br />';
				echo "Name: {$fetch['name']} <br>";
     			echo "Budget: {$fetch['ram']} (in million $) <br>";
				echo "Review: {$fetch['battery']} <br>";
				echo "Released on: {$fetch['os']} <br>";
				echo "Running Time: {$fetch['color']} (in minutes) <br>";
				echo "Ratings: {$fetch['memory']} <br>";
				echo "Box Office Collection: {$fetch['camera']}(in million $) <br>";
				
				echo "------------------------------<br>";
				echo "<br>";
				
			}
	}	
?>