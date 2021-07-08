<html>
<head>
<title>Lorem Ipsum</title>
<style>
*{padding:0;margin:0;list-style:none;letter-spacing:1px;font-family:'Sans-serif';user-select:none;color:#000;}
body{background-color:white;width:100%;overflow-x:hidden;}

header{display:flex;align-items:center;width:100%;background-color:#fff;position:fixed;top:0vh;z-index:20;}
header ul{width:100%;display:flex;align-items:center;justify-content:space-around;background-color:#fff;border-bottom:1px solid #888;}
header ul li input{overflow:hidden;cursor:default;letter-spacing:1px;color:#000;width:400px;padding:15px 10px 15px 30px;font-size:14px;outline:none;border-radius:50vh;border:none;background-color:rgb(10,200,100,0.1);font-family:'Sans-serif';}
header ul li button{cursor:pointer;margin:0px 0px;font-size:16px;outline:none;background-color:rgb(0,0,0,0);border:none;color:#555;position:relative;left:-40px;}
header ul li button:hover{color:#000;}
header ul li a{font-size:14px;text-decoration:none;padding:0px;cursor:pointer;color:#111;display:inline-block;}
header ul li a i{padding:0px 0px 0px 5px;color:#888;}
header ul li img{height:75px;}
ol{position:absolute;top:79px;border:1px solid #888;border-top:none;box-shadow:1px 1px 4px rgb(0,0,0,0.5);background-color:#fff;display:none;}
header ul li #sub1{right:350px;}
header ul li #sub2{right:60px;}
#sub3{left:300px;}
#sub4{left:490px;}
#sub5{left:670px;}
header ul li ol li{border-bottom:1px solid #ddd;}
header ul li ol li:hover{transform:scale(1.01);}
header ul li ol li a{margin:20px;display:inline-block;font-size:15px;}
header ul li ol li a:hover{color:#195;}
header ul li ol li a i{margin:0;margin-right:15px;}

.container{position:relative;top:11vh;}
.container form #cartTable{width:100%;float:left;}
.container form #cartTable tr th{background-color:#000;color:#fff;}
.container form #cartTable tr th,.container #cartTable tr td{cursor:default;border-bottom:1px solid #aaa;text-align:center;max-width:300px;padding:10px;}
.container form #cartTable tr td img{height:75px;}
.container form #cartTable tr td button{margin:0px 5px;cursor:pointer;width:30px;height:20px;font-size:10px;background-color:#fff;border:none;border:1px solid #eee;text-align:center;outline:none;border-radius:50vh;}
.container form #cartTable tr .quantity button:hover{color:#fff;background-color:#333;transform:scale(1.1);}
.container form #cartTable tr .quantity button:hover i{color:#fff;}
.container form #cartTable tr .remove i{color:red;font-size:25px;cursor:pointer;}
.container form #cartTable tr .remove i:hover{transform:scale(1.1);}
.container form #cartTable tr td .offer{color:green;}
.container form #cartTable tr:nth-child(odd){background-color:#fafafa;}
.container form #cartTable .products:hover{transform:scale(1.001);box-shadow: 0px 1px 2px #aaa;}
.container form .msg{display:flex;justify-content:center;top:11vh;position:relative;}
.container form .msg .msgP{text-align:center;position:relative;top:17vh;font-size:20px;color:#777;}
.container #infoTable{width:100%;text-align:center;position:relative;top:5vh;}
.container #infoTable tr td{padding:11px;color:#333;font-size:15px;}
.container #infoTable tr td button{padding:10px;position:relative;left:-40px;background-color: white;border:none;outline:none;}
.container #infoTable tr td button i{color:#777;}
.container #infoTable tr td input,textarea{box-shadow:0px 2px 4px #eee;width:75%;padding:10px 20px;border:none;border-bottom:1px solid #ddd;
	outline: none;}
input::-webkit-outer-spin-button,input::-webkit-inner-spin-button {-webkit-appearance: none;}
textarea{overflow:hidden;resize:none;height:100px;width:60%;border:1px solid #ddd;box-shadow:2px 2px 0px #eee;}
.container #infoTable tr td input[type='checkbox']{padding:0;margin:0;width:30px;}
.container #infoTable tr td input[type='submit']{float:left;cursor:pointer;width:auto;padding:10px 20px;background-color:#000;color:#fff;text-decoration: none;border:1px solid #000;border-radius:50vh;margin:0px 5px;box-shadow: 2px 3px 4px #555;}
.container #infoTable tr td span{font-size:18px;color:#aaa;text-shadow:2px 2px 5px #ddd;letter-spacing: 1px;padding:5px;border-bottom:1px solid #aaa;display:inline;}
.container form #cartTable tr .remove button{border:none;}

footer{position:relative;top:22vh;width:100%;background-color:#111;float:left;display:flex;justify-content:center;padding:3vh 0px;}
footer .f1,footer .f2,footer .f3{display:flex;justify-content:center;width:25%;float:left;}
footer .f1 ul,footer .f2 ul,footer .f3 ul{margin:1vh 0px;}
footer .f1 ul .one,footer .f2 ul .one,footer .f3 ul .one{margin:1vh 0px;color:#aaa;}
footer .f1 ul li a,footer .f2 ul li a,footer .f3 ul li a{cursor:pointer;color:#fff;padding:5px 0px;display:inline-block;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
session_start();
// print_r($_POST);print_r($_SESSION);
echo "<header>
<ul>
<li><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9Qaeg_ueBNZkHN_B5DFkUXect3YMpFuKFfw&usqp=CAU'></li>
<li><input type='text' placeholder='Search for products,brands and more' autocomplete='off' spellcheck='false'><button><i class='fa fa-search'></i></button></li>
<li><a href='index.html'>HOME</a></li>
<li><a href='#'>ABOUT</a></li>
<li><a href='#'>CONTACT</a></li>
<li><a href='#'>TEAM</a></li>
<li><a id='a2'>ACCOUNT</a></li>
<li><a href='cart.php'>CART</a></li>
</ul>
</header>";
if(isset($_SESSION['userName']) && isset($_SESSION['Mail']) && isset($_SESSION['Mobile']))
{
	echo 
	"<script>
	document.getElementById('a2').innerHTML='".$_SESSION['userName']."';
	document.getElementById('a2').style.color='white';document.getElementById('a2').style.backgroundColor='black';
	document.getElementById('a2').style.padding='10px 20px';
	document.getElementById('a2').style.borderRadius='5vh';
	</script>";
}
else
{
	echo "<script>window.location.href='login.php';</script>";
}
if(isset($_POST['inputText']) && $_POST['inputText']>=0){preUpdate();}
function preUpdate()
{
$a = $_POST['inputText'];$name="";$quantity="";$Cost="";
$con = mysqli_connect("localhost","root","","loremipsumPurchasers");
if($con->connect_error){die("failed connection");}
$tableName = substr($_SESSION['Mail'],0,strpos($_SESSION['Mail'],'@gmail.com')).$_SESSION['Mobile'];
$sql = "select * from ".$tableName." limit $a,1";
$result = $con->query($sql);
while($row=$result->fetch_assoc())
{
$name = $row['productName'];
$Cost = $row['productCost'];
$quantity = $row['productQuantity'];
}
// ------------- UPDATE ---------------
if(isset($_POST['p'])){$quantity = $quantity + 1;}
if(isset($_POST['m']) && $quantity>1){$quantity = $quantity - 1;}
$subCost = $quantity * $Cost;
$tableName=$tableName = substr($_SESSION['Mail'],0,strpos($_SESSION['Mail'],'@gmail.com')).$_SESSION['Mobile'];
$sqlUpdate = "UPDATE $tableName SET productSUBCost = '$subCost', productQuantity = '$quantity' WHERE productName = '$name'";
if($con->query($sqlUpdate)===TRUE){echo "<script>window.location.href='cart.php';</script>";}
// ------------- DELETE---------------
if(isset($_POST['d']))
{
$tableName = substr($_SESSION['Mail'],0,strpos($_SESSION['Mail'],'@gmail.com')).$_SESSION['Mobile'];
$sqlUpdate = "DELETE FROM $tableName WHERE productName = '$name'";
if($con->query($sqlUpdate)===TRUE){echo "<script>window.location.href='cart.php';</script>";}
}
}
?>
<div class="container">
<form method="post">
<input type="text" id="num" name="inputText" style="display:none;">
<?php
echo "<table id='cartTable' cellspacing='0'><tr><th></th><th style='padding:20px;'>Item</th><th>Price</th><th>Discount</th><th>Quantity</th><th>Sub-total</th><th></th></tr>";
if($_SESSION['Mail']=="admin_of_loremipsum_1@gmail.com")
{
	echo "<script>window.location.href='login.php';</script>";
}
if($_SESSION['Mail']!="admin_of_loremipsum_1@gmail.com")
{
	$con = mysqli_connect("localhost","root","","loremipsumPurchasers");
	if($con->connect_error){die("Connection failed");}
	$tableName = substr($_SESSION['Mail'],0,strpos($_SESSION['Mail'],'@gmail.com')).$_SESSION['Mobile'];
	$sql = "SELECT * FROM ".$tableName;
	$result = $con->query($sql);
	$rowNum = 0;$total=0;$save=0;
	while($row=$result->fetch_assoc())
	{
		$cost = styleCOST($row['productCost']);$OLDcost = styleCOST($row['productOLDCost']);$SUBcost = styleCOST($row['productSUBCost']);
		echo "<tr class='products'><td><img src='".$row['productImage']."'></td><td>".$row['productName']."</td><td><i class='fa fa-rupee'></i>".$cost."</td><td><s><i class='fa fa-rupee'></i>".$OLDcost."</s><br><span class='offer'>".$row['productOffer']."</span></td><td class='quantity'><button type='submit' class='minus' onclick='minus(".$rowNum.")' name='m'><i class='fa fa-minus'></i></button><span class='quantity_num'>".$row['productQuantity']."</span><button type='submit' class='plus' onclick='plus(".$rowNum.")' name='p'><i class='fa fa-plus'></i></button></td><td><i class='fa fa-rupee'></i>".$SUBcost."</td><td class='remove'><button type='submit' name='d' onclick='remove(".$rowNum.")'><i class='fa fa-trash'></i></button></td></tr>";
		$total = $total+$row['productSUBCost'];$save = $save+($row['productQuantity']*$row['productOLDCost']);
		$rowNum++;
	}
}
$save = $save - $total;
if($rowNum>0){
echo "<tr><td colspan='3' style='text-align:right;color:green;padding:20px 0px;'>Saved upto</td><td style='color:green'><i class='fa fa-rupee' style='color:green;'></i>".styleCOST($save)."</td><td style='text-align:right'>TOTAL</td><td><i class='fa fa-rupee'></i>".styleCOST($total)."</td><td></td></tr></table>";
}?>
</form>
<?php
echo "<div class='info'>
<form method='POST' class='form'>
<table id='infoTable'>
<tr><td colspan='3'><span>Fillout the details</span></td></tr>
<tr><td><input type='mail' name='mailVerification' id='mail' placeholder='Enter mail address' autocomplete='off' spellcheck='false' required/></td><td><input type='number' placeholder='Enter Phone number' id='phone' name='phoneVerification' required/></td><td><input type='password' placeholder='Enter Password' name='passwordVerification' id='passwordVerification'  autocomplete='off' spellcheck='false' required/><button><i id='eye' class='fa fa-eye' onmouseover='showPassword()' onmouseout='hidePassword()' style='cursor:pointer;'></i></button></td></tr>
<tr><td colspan='2'><textarea placeholder='Enter postal address' name='addressVerification' autocomplete='off' spellcheck='false' required></textarea></td><td><input type='number' name='pincode' id='pincode' placeholder='Enter Pin-code' required/></td></tr>
<tr><td colspan='2'><input type='checkbox' required> I agree to pay the bill during delivery</td><td colspan='2'><input type='submit' value='Place Order' name='submit'></form><form method='post' class='form'><input type='submit' name='cancelOrder' value='Cancel Order' style='color:#000;background-color:#fff'></td></tr>
<tr><td colspan='3' style='color:#aaa;'>General notice : You can Edit/Cancel the order 'within 12 hours' from placing the Order.</td></tr>
<tr><td colspan='3'><p id='placedCanceled'></p><br><p id='placedDate'>Incase you are supposed to place order after 12 hours from previous order,you have to wait upto the delivery of above products.</p></tr></table></form></div>";
if(isset($_SESSION['bagName']) && isset($_SESSION['submit']))
{
	unset($_POST['cancelOrder']);
	$con=mysqli_connect('localhost','root','','loremipsumOrders');
	if($con->connect_error){die("Connection error");}
	$sql="SELECT * FROM orders WHERE TableName='".$_SESSION['bagName']."'";
	$result=$con->query($sql);$Date="";$Time="";
	while($row=$result->fetch_assoc())
	{
		$Date=$row['Date'];$Time=$row['Time'];
		echo "<script>
		document.getElementById('placedCanceled').style.display='block';document.getElementById('placedDate').style.display='block';
		document.getElementById('placedCanceled').innerText='Your order placed successfully! Let us know the delivery date Soon.';
		document.getElementById('placedDate').style.color='green';
		</script>";
	}
}
if(isset($_POST['cancelOrder']))
{
	unset($_POST['submit']);
	if(isset($_SESSION['bagName']))
	{
		$con=mysqli_connect('localhost','root','','loremipsumOrders');
		if($con->connect_error){die("Connection error");}
		$sql="SELECT * FROM orders WHERE TableName='".$_SESSION['bagName']."'";
		$result=$con->query($sql);$Date="";$Time="";
		while($row=$result->fetch_assoc())
		{
			date_default_timezone_set("Asia/Kolkata");
			$_SESSION['orderedTime']=$row['Time'];$_SESSION['orderedDate']=$row['Date'];
			$_SESSION['currentTime']=date('H:i:s');$_SESSION['currentDate'] = date("d/m/Y");
			if(isValidTimeForCancellingTheOrder()===true)
			{
				$sql2="DELETE FROM orders WHERE TableName='".$_SESSION['bagName']."'";
				if($con->query($sql2)===TRUE)
				{
					echo "<script>
					document.getElementById('placedCanceled').style.display='block';document.getElementById('placedDate').style.display='block';
					document.getElementById('placedCanceled').innerText='Your order cancelled!';
					</script>";
				}
				else{echo $con->connect_error;}
			}
			if(isValidTimeForCancellingTheOrder()===false)
			{
				echo "<script>
					document.getElementById('placedCanceled').style.display='block';document.getElementById('placedDate').style.display='block';
					document.getElementById('placedCanceled').innerText='Sorry,can't cancel your order.';
					</script>";
			}
		}
	}
	else{echo 'No orders found';}
}
function isValidTimeForCancellingTheOrder()
{
	$D1=$_SESSION['orderedDate']." ".$_SESSION['orderedTime'];
	$D2=$_SESSION['currentDate']." ".$_SESSION['currentTime'];
	$starttimestamp = strtotime($D1);
	$endtimestamp = strtotime($D2);
	$difference = abs($endtimestamp - $starttimestamp)/3600;
	if($difference<=12){return true;}
	return false;
}
function styleCOST($str)
{
	$str = str_replace(",", "", $str);
	switch(strlen($str))
	{
		case 4: return substr_replace( $str, ',', 1, 0 );
		case 5: return substr_replace( $str, ',', 2, 0 );
		case 6: $a=substr_replace( $str, ',', 1, 0 );return substr_replace( $a, ',', 4, 0 );break;
		case 7: $a=substr_replace( $str, ',', 2, 0 );return substr_replace( $a, ',', 5, 0 );break;
	}
}
?>
</div>
<footer id="footer">
<div class="f1">
<ul>
<li class="one">ABOUT</li>
<li><a hef="#">Contact Us</a></li>
<li><a hef="#">About Us</a></li>
<li><a hef="#">Careers</a></li>
<li><a hef="#">Lorem Ipsum Stories</a></li>
<li><a hef="#">Press</a></li>
<li><a hef="#">Lorem Ipsum Wholesale</a></li>
</ul>
</div>
<div class="f2">
<ul>
<li class="one">HELP</li>
<li><a hef="#">Payments</a></li>
<li><a hef="#">Shipping</a></li>
<li><a hef="#">Cancellation & Returns</a></li>
<li><a hef="#">FAQ</a></li>
<li><a hef="#">Report Infringement</a></li>
</ul>
</div>
<div class="f3">
<ul>
<li class="one">POLICY</li>
<li><a hef="#">Return Policy</a></li>
<li><a hef="#">Terms Of Use</a></li>
<li><a hef="#">Security</a></li>
<li><a hef="#">Privacy</a></li>
<li><a hef="#">Sitemap</a></li>
<li><a hef="#">EPR Compliance</a></li>
</ul>
</div>
</footer>
<script>
function showPassword(){document.getElementById('passwordVerification').type='text';document.getElementById('eye').classList.value = 'fa fa-eye-slash';}
function hidePassword(){document.getElementById('passwordVerification').type='password';document.getElementById('eye').classList.value = 'fa fa-eye';}
function minus(index){document.getElementById("num").value = index;}
function plus(index){document.getElementById("num").value = index;}
function remove(index){document.getElementById("num").value = index;}
function logout()
{
	console.log("Logged out");
}
</script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	unset($_POST['cancelOrder']);
	if($_POST['mailVerification']==$_SESSION['Mail'] && $_POST['passwordVerification']==$_SESSION['Password'] && $_POST['phoneVerification']==$_SESSION['Mobile'])
	{
		$address = $_POST['addressVerification'];$pincode=$_POST['pincode'];
		if(strlen(trim($address))>15 && strlen(trim($pincode))>3)
		{
			if(isset($_SESSION['bagName'])){echo 'Bag ready';placeTheOrder();}
			else{echo 'bag lost';}
		}
	}
}
function placeTheOrder()
{
	date_default_timezone_set("Asia/Kolkata");
	$Time = date('H:i:s');$Date = date("d/m/Y");$address = $_POST['addressVerification'];$pincode=$_POST['pincode'];$phone=$_SESSION['Mobile'];
	$userName=$_SESSION['userName'];$tableName=substr($_SESSION['Mail'],0,strpos($_SESSION['Mail'],'@gmail.com')).$_SESSION['Mobile'];
	$Mail=$_SESSION['Mail'];
	$con = mysqli_connect("localhost","root","","loremipsumOrders");
	if($con->connect_error){die("Connection failed");}
	$sql = "INSERT INTO orders VALUES('$Date','$Time','$tableName','$address','$pincode','$phone','$userName','$Mail')";
	if($con->query($sql)===TRUE)
	{
		echo "<script>var d = new Date();
		var dt = d.getDate()+'/'+d.getMonth()+'/'+d.getFullYear()+' - '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
		document.getElementById('placedCanceled').style.display='block';document.getElementById('placedDate').style.display='block';
		document.getElementById('placedCanceled').innerText='Your order placed successfully! Let us know the delivery date Soon.';
		document.getElementById('placedDate').innerText='Order placed on : '+dt;</script>";
	}
	else{echo "<script>document.getElementById('placedCanceled').innerText='Your order placed successfully! Let us know the delivery date Soon.';</script>";}
}
?>