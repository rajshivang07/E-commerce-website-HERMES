<?php
	include("connection.php");
	//session_start();
	//session_destroy();
	function display_image(){
		//global $fetch;
		$q= "SELECT image, company, model, price,offered FROM mobile";
		//$num = mysql_num_rows($q);
		$conn = new mysqli("localhost","root","","hermes");
		$result=mysqli_query($conn,$q);
		$fetch =mysqli_fetch_assoc($result);
		while($fetch = mysqli_fetch_assoc($result)){
				echo '<img src="image/'.$fetch['image'].'" alt="Mobile" class="item_image" />';
		}
	}
	function display_company(){
		//global $fetch;
		$q= "SELECT image, company, model, price,offered FROM";
		//$num = mysql_num_rows($q);
		$conn = new mysqli("localhost","root","","hermes");
		$result=mysqli_query($conn,$q);
		$fetch =mysqli_fetch_assoc($result);
		while($fetch = mysqli_fetch_assoc($result)){
				echo "{$fetch['company']}";
		}
	}		
	function display_model(){
				//global $fetch;
		$q= "SELECT image, company, model, price,offered FROM mobile";
		//$num = mysql_num_rows($q);
		$conn = new mysqli("localhost","root","","hermes");
		$result=mysqli_query($conn,$q);
		$fetch =mysqli_fetch_assoc($result);
		while($fetch = mysqli_fetch_assoc($result)){
				echo "{$fetch['model']}";
		}
	}
    function display_price(){
		$q= "SELECT image, company, model, price,offered FROM mobile";
		//$num = mysql_num_rows($q);
		$conn = new mysqli("localhost","root","","hermes");
		$result=mysqli_query($conn,$q);
		$fetch =mysqli_fetch_assoc($result);
		while($fetch = mysqli_fetch_assoc($result)){
				echo "{$fetch['price']}";
		}
	}
	function display_offered(){
		$q= "SELECT image, company, model, price,offered FROM mobile";
		//$num = mysql_num_rows($q);
		$conn = new mysqli("localhost","root","","hermes");
		$result=mysqli_query($conn,$q);
		$fetch =mysqli_fetch_assoc($result);
		while($fetch = mysqli_fetch_assoc($result)){
				echo "{$fetch['offered']}";
		}
	}
				
		
	
?>