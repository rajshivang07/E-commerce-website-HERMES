<?php include("cart.php");?>


<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset= utf-8" />
		<title>Shopping Cart</title>
		<link rel="icon" type="image" href="icon/hermeslogo.png"/>
		<link rel="stylesheet" href="cart.css" type="text/css" />
	</head>
	<body>
	
		<body style="background: #F3E5F5"; ></body>
		 <div class="heading">
                <br>
			    
				<img id="logo1" src="icon/hermes_our_logo.png" height="45" width "90"/>	
                <!--<span><h1 style="color: #fff; font-size: 30px;">Terms and Condition</h1></span>-->
         </div>
        <br><br><br><br><br><br><br>
        <h2 style="margin-left:5%;"><b>YOUR CART</b></h2><br>
		
		
		<div class="cart">
               <br>
						<img src="icon/hermeslogo.png" height="45" width="45" /><br /><br /><br /> 
						<span class="YOUR_CART">YOUR CART</span>&nbsp;&nbsp;
						<br>
				<!--
				<div class="input">
						<fieldset><legend><strong><h2>YOUR DETAILS</h2></strong></legend>
                <br><br>
                
				<form method="post" action="" >
                    <input id="req" type="text" name="firstname" placeholder="Your Name *" pattern="[A-Za-z].{1,30}" required><br>
					<input id="req" type="text" name="mobile_number" placeholder="Mobile Number *" pattern="[0-9]{10}" required><br>
					<input id="req" type="email" name="email" placeholder="E-mail *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
                    <input id="req" type="text" name="address" placeholder="Address *" pattern="[A-Za-z0-9.,_/%+-].{1,220}" required><br>
                    <input id="req" type="text" name="pin" placeholder="Pin Code *" pattern="[0-9]{10-11}" required>
                    <div align="center"><button class="button" type="submit" name="submit" style="vertical-align:middle"><span>Submit</span></button></div>
				</form>
				</fieldset>
				</div>-->
                
						<?php product()?>
		</div>
		<div class="option">
						
        <a href="chechout.php" class="button" type="button" name="submit" style="vertical-align:middle;float:right;padding: 12px;background-color: #f4511e; width: 220px"><span class="button">Checkout</span></a>
        <a href="mobile.html" class="button" type="button" name="submit" style="vertical-align:middle;padding: 12px; width: 220px;background-color:#64DD17;float:right"><span class="button">Continue Shopping</span></a>
        </div>
					
		
		<br><br>
        <div class="blank">
            <br>
        </div>
        <div class="navigation">
            <div class="social">
            <ul style="list-style-type:none">
            <li><h3>Keep in touch:</h3></li> 
            <li><a href="https://www.facebook.com/" target="_blank"><img id="social_icon" src="icon/fb.png"></a></li>
            <li><a href="https://www.instagram.com/?hl=en" target="_blank"><img id="social_icon" src="icon/insta.png"></a></li>
            <li><a href="https://twitter.com/login" target="_blank"><img id="social_icon" src="icon/twi.png"></a></li>
            <li><a href="https://in.pinterest.com/" target="_blank"><img id="social_icon" src="icon/pin.png"></a></li>
            </ul><br><br>
            </div>
            </div>
            <div class="provide">
            <ul style="list-style-type:none">
            <li><h3>We provide:</h3></li> 
            <li><img id="prov" src="icon/30day.png"></li>
            <li><img id="prov" src="icon/original.png"></li>
            <li><img id="prov" src="icon/cod.png"></li>
            </ul>
            </div>
             <div class="payment">
            <ul style="list-style-type:none;">
            <li><h3>Payment Method:</h3></li> 
            <li><img id="pay" src="icon/visa.png"></li>
            <li><img id="pay" src="icon/mastercard.png"></li>
            <li><img id="pay" src="icon/rupay.png"></li>
            <li><img id="pay" src="icon/paypal.png"></li>
            <li><img id="pay" style="height:40px;margin-top:8px;"  src="icon/paytm.png"></li>
            <li><img id="pay" style="height:40px;margin-top:8px;"  src="icon/discover.png"></li>
            </ul>
               
        </div>
        <br>
        <div class="footer">
            <p style="text-align: center; color:#fff;"><small> COPYRIGHT &copy 2017, HERMES </small> </p>
        </div>
	</body>	
</html>