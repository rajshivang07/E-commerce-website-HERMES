<?php
	include("connection.php");
	session_start();
	
	//session_destroy();
	function display_cart(){
		global $dbc;
		$q = "SELECT * from mobile WHERE `quantity` >0";
		$conn = new mysqli("localhost","root","","hermes");
		$result=mysqli_query($conn,$q);
			while($fetch = mysqli_fetch_assoc($result)){
				echo '<img src="image/'.$fetch['image'].'" width="120" height="120" /><br />
				<span id="name">'.$fetch['company'].'</span><br />'.$fetch['model'].'<br /> &#8377;'.$fetch['price'].'<br />&#8377;'.$fetch['offered'].'<br /><a href="cart.php?add='.$fetch['id'].'">Add to Cart</a><br />';

			}
	}
	if(isset($_GET['add']) && !empty($_GET['add'])){
		$id=$_GET['add'];
		//$q = "SELECT `id`, `quantity` FROM mobile WHERE `id`= '".$id."'";
		//$result=mysqli_query($conn,$q);
		//$conn = new mysqli("localhost","root","","hermes");
		//while($quantity = mysqli_fetch_assoc($result)){
			if(@$_SESSION['cart_'.$id]<10){
			echo  @$_SESSION['cart_'.$id]+=1;
			}
			header('Location:index1.php');
		//}

	}

	if(isset($_GET['remove'])){
		$_SESSION['cart_'.$_GET['remove']]--;
		header('Location:index1.php');

	}

	if(isset($_GET['delete'])){
		$_SESSION['cart_'.$_GET['delete']]=0;
		header('Location:index1.php');

	}
	function paypal_item(){
		$num=0;
		foreach($_SESSION as $name => $value){
			if($value > 0){
				if(substr($name,0,5) == 'cart_'){
					$id = substr($name,5,(strlen($name-5)));
					$q = "SELECT `id`, `model`, `company`, `price`,`offered` FROM mobile WHERE `id` = '".$id ."'";
					$conn = new mysqli("localhost","root","","hermes");
					$result=mysqli_query($conn,$q);
					   while($get_row = mysqli_fetch_assoc($result)){
					   $num++;
					   echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
					   echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['company'].'">';
					   echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['offered'].'">';
					   echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['model'].'">';
					   echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
					   }
					 $q = "SELECT `id`, `model`, `company`, `price`,`offered` FROM laptop WHERE `id` = '".$id ."'";
					$conn = new mysqli("localhost","root","","hermes");
					$result=mysqli_query($conn,$q);
					   while($get_row = mysqli_fetch_assoc($result)){
					   $num++;
					   echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
					   echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['company'].'">';
					   echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['offered'].'">';
					   echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['model'].'">';
					   echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
					   }  
					 $q = "SELECT `id`, `model`, `company`, `price`,`offered` FROM tshirt WHERE `id` = '".$id ."'";
					$conn = new mysqli("localhost","root","","hermes");
					$result=mysqli_query($conn,$q);
					   while($get_row = mysqli_fetch_assoc($result)){
					   $num++;
					   echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
					   echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['company'].'">';
					   echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['offered'].'">';
					   echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['model'].'">';
					   echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
					   }
					   $q = "SELECT `id`, `model`, `company`, `price`,`offered` FROM bag WHERE `id` = '".$id ."'";
					$conn = new mysqli("localhost","root","","hermes");
					$result=mysqli_query($conn,$q);
					   while($get_row = mysqli_fetch_assoc($result)){
					   $num++;
					   echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
					   echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['company'].'">';
					   echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['offered'].'">';
					   echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['model'].'">';
					   echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
					   }
				}
		}}
		
	}
	
	function product(){
		$total=0;
		$net_payment=0;
		foreach($_SESSION as $name => $value){
			if($value > 0){
				if(substr($name,0,5) == 'cart_'){
					$id = substr($name,5,(strlen($name-5)));
					$q = "SELECT `id`, `model`, `company`, `price`,`image`,`offered` FROM mobile WHERE `id` = '".$id ."'";
					$conn = new mysqli("localhost","root","","hermes");
					$result=mysqli_query($conn,$q);
					   while($get = mysqli_fetch_assoc($result)){
						$total = $value * $get['offered'];
						   echo '<img src="image/'.$get['image'].'" width="180" height="150" /><br />';
						   echo $get['company'].' '.$get['model'].' &times '.$value.' '.'@'.$get['offered'].'=&#8377; '.$total.'<a href="cart.php?add='.$id.'"><br>
							<button style="width:28px;height:28px;border-radius:14px;background-color:#64DD17;border:none;margin-left:5%;" onclick="add1Function()">+</button> </a><a href="cart.php?remove='.$id.'"> <button style="width:28px;height:28px;border-radius:14px;background-color:red;border:none;margin-left:2%;" onclick="sub1Function()">-</button><br> </a><a href="cart.php?delete='.$id.'"> <button type="button" style="width:80px;height:36px;margin-top:4px; background-color:white;border:2px solid black;margin-left:5%;">REMOVE</button><br><br> </a><br /><br />';
					}
					$q = "SELECT `id`, `model`, `company`, `price`,`image`,`offered` FROM laptop WHERE `id` = '".$id ."'";
					$conn = new mysqli("localhost","root","","hermes");
					$result=mysqli_query($conn,$q);
					   while($get = mysqli_fetch_assoc($result)){
						$total = $value * $get['offered'];
						   echo '<img src="image/'.$get['image'].'" width="180" height="150" /><br />';
						   echo $get['company'].' '.$get['model'].' &times '.$value.' '.'@'.$get['offered'].'=&#8377; '.$total.'<a href="cart.php?add='.$id.'"><br>
							<button style="width:28px;height:28px;border-radius:14px;background-color:#64DD17;border:none;margin-left:5%;" onclick="add1Function()">+</button> </a><a href="cart.php?remove='.$id.'"> <button style="width:28px;height:28px;border-radius:14px;background-color:red;border:none;margin-left:2%;" onclick="sub1Function()">-</button><br> </a><a href="cart.php?delete='.$id.'"> <button type="button" style="width:80px;height:36px;margin-top:4px; background-color:white;border:2px solid black;margin-left:5%;">REMOVE</button><br><br> </a><br /><br />';
					}
					$q = "SELECT `id`, `model`, `company`, `price`,`image`,`offered` FROM tshirt WHERE `id` = '".$id ."'";
					$conn = new mysqli("localhost","root","","hermes");
					$result=mysqli_query($conn,$q);
					   while($get = mysqli_fetch_assoc($result)){
						$total = $value * $get['offered'];
						   echo '<img src="image/'.$get['image'].'" width="180" height="150" /><br />';
						   echo $get['company'].' '.$get['model'].' &times '.$value.' '.'@'.$get['offered'].'=&#8377; '.$total.'<a href="cart.php?add='.$id.'"><br>
							<button style="width:28px;height:28px;border-radius:14px;background-color:#64DD17;border:none;margin-left:5%;" onclick="add1Function()">+</button> </a><a href="cart.php?remove='.$id.'"> <button style="width:28px;height:28px;border-radius:14px;background-color:red;border:none;margin-left:2%;" onclick="sub1Function()">-</button><br> </a><a href="cart.php?delete='.$id.'"> <button type="button" style="width:80px;height:36px;margin-top:4px; background-color:white;border:2px solid black;margin-left:5%;">REMOVE</button><br><br> </a><br /><br />';
					}
					$q = "SELECT `id`, `model`, `company`, `price`,`image`,`offered` FROM bag WHERE `id` = '".$id ."'";
					$conn = new mysqli("localhost","root","","hermes");
					$result=mysqli_query($conn,$q);
					   while($get = mysqli_fetch_assoc($result)){
						$total = $value * $get['offered'];
						   echo '<img src="image/'.$get['image'].'" width="180" height="150" /><br />';
						   echo $get['company'].' '.$get['model'].' &times '.$value.' '.'@'.$get['offered'].'=&#8377; '.$total.'<a href="cart.php?add='.$id.'"><br>
							<button style="width:28px;height:28px;border-radius:14px;background-color:#64DD17;border:none;margin-left:5%;" onclick="add1Function()">+</button> </a><a href="cart.php?remove='.$id.'"> <button style="width:28px;height:28px;border-radius:14px;background-color:red;border:none;margin-left:2%;" onclick="sub1Function()">-</button><br> </a><a href="cart.php?delete='.$id.'"> <button type="button" style="width:80px;height:36px;margin-top:4px; background-color:white;border:2px solid black;margin-left:5%;">REMOVE</button><br><br> </a><br /><br />';
					}
				}
				$net_payment+=$total;
			}
		}
		$you_payment=$net_payment;
		//$net_payment=$net_payment/70;
	if($net_payment == 0){
		echo "Your Cart Is Empty";
	}else{
		echo "Total= &#8377;".$net_payment.'<br /><br /> ';
		
		?>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="shivang.raj2015@vit.ac.in">
					<input type="hidden" name="upload" value="1">
					<?php paypal_item(); ?>
					<input type="hidden" name="currency_code" value="USD">
					<input type="hidden" name="amount" value="<?php echo $net_payment;?> ">
					<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03
					.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
					</form>
		<?php
		//session_destroy();
	}
	
	}


	?>