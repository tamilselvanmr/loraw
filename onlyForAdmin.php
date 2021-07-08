<?php
session_start();
if(isset($_SESSION['userName']))
{if($_SESSION['userName']!="ADMIN_LOREMIPSUM"){echo "<script>window.location.href='login.php';</script>";}}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lorem Ipsum</title>
	<style>
		@keyframes blink{0%{color:#fff;background-color:#000;}100%{color:#000;background-color:#fff;}}
		*{padding:0;margin:0;text-decoration:none;color:#555;border:none;list-style:none;outline:none;cursor:default;user-select:none;font-family:verdana;}
		body{overflow:hidden;}
		.container{overflow:hidden;}
		.container .panel1{width:70%;height:100vh;float:left;}
		.container .panel1 .header{width:100%;height:7vh;display:flex;justify-content:space-between;align-items:center;padding:0px;background-color:#000;}
		.container .panel1 .table{height:94vh;width:100%;overflow-y:scroll;overflow-x:hidden;}
		.container .panel1 .table .info{width:100%;display:flex;justify-content:space-between;align-items:center;}
		.container .panel1 .header p{padding:10px 20px;color:#fff;}
		.container .panel1 .header button{background-color:#000;}
		.container .panel1 .header button i:hover{cursor:pointer;color:#fff;}
		.container .panel1 .table .info{padding:20px 0px;}
		.container .panel1 .table .info #totalCost{font-size:15px;letter-spacing:1px;font-weight:bold;color:#000;padding:10px;margin:0px 0px 0px 50px;}
		.container .panel1 .table .info #totalCost i{color:#000;font-weight:bold;padding:0px 5px;}
		.container .panel1 .table .info #numberOfDeliveries{visibility:hidden;padding:10px 20px;border-radius:5vh;animation:blink 0.5s linear 0s infinite normal;}
		.container .panel1 .table .info input{margin:0px 50px 0px 0px;cursor:pointer;padding:10px 20px;background-color:#fff;border:1px solid #000;border-radius:30vh;}
		.container .panel1 .table .info input:hover{color:#fff;background-color:#000;}
		.container .panel1 .table table{width:100%;}
		.container .panel1 .table table tr th,td{border-bottom:1px solid #ccc;}
		.container .panel1 .table table tr td,th{max-width:250px;padding:10px;text-align:center;}
		.container .panel1 .table table tr td img{height:75px;}
		.container .panel1 .table table tr th{background-color:#eee;}
		.container .panel1 .table table tr:hover{transform:scale(1.001);box-shadow:0px 1px 2px #aaa;}
		.container .panel2{overflow:hidden;width:30%;height:70vh;float:left;border-bottom:1px solid #aaa;}
		.container .panel2 .header form{display:flex;justify-content:center;align-items:center;}
		.container .panel2 .header form input{position:relative;left:7px;border-bottom:1px solid #555;width:100%;padding:10px 15px;}
		.container .panel2 .header form button{background-color:white;position:relative;top:-1px;left:-25px;font-size:15px;padding:0px;}
		.container .panel2 .header form button i{color:#aaa;}
		.container .panel2 .header form button i:hover{color:#333;cursor:pointer;}
		.container .panel2 #listsTable{overflow-y:scroll;height:61vh;padding:2vh 0px;}
		.container .panel2 #listsTable li{border-bottom:1px solid #ddd;padding:10px 10px 10px 20px;}
		.container .panel2 #listsTable li i{margin-right:10px;color:#aaa;}
		.container .panel2 #listsTable li button{background-color:#fff;font-size:15px;color:#aaa;cursor:pointer;}
		.container .panel2 #listsTable li button:hover{color:#555;}
		.container .panel3{background-color:#000;width:30%;height:30vh;float:left;overflow:none;display:flex;flex-direction:column;justify-content:space-around;}
		.container .panel3 p{padding:1px 10px;color:#fff;letter-spacing:1px;}
		.container .panel3 p:hover{transform:scale(1.01);text-shadow:1px 1px 4px #666;}
		.container .panel3 #name,#mail{float:left;}
		.container .panel3 #pincode,#mobile{float:right;}
	</style>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
<?php 
echo "
<div class='container'>
<div class='panel1'>
<div class='header'>
<button type='submit' id='back' style='margin-left:20px;font-size:20px;'><i class='fa fa-arrow-circle-left'></i></button>
<p id='tableName'></p>
<p id='numberOfProducts'></p>
<p id='orderedDate' title='Ordered Date'></p>
<p id='orderedTime' title='Ordered Time'></p>
<button tyep='submit' style='margin-right:20px;font-size:16px;' onmouseover='showInfo()' onmouseout='hideInfo()'><i class='fa fa-info'></i></button>
<form method='post'><button type='submit' name='logout' style='margin-right:20px;'><i class='fa fa-sign-out'> LOGOUT</i></button></form>
</div>";
if(isset($_POST['logout']))
{
	session_destroy($_SESSION);unset($_POST);
	echo "<script>window.location.href='index.html'</script>";
}
echo"
<div class='table'>
<div class='info'>
<p id='totalCost'></p>
<p id='numberOfDeliveries'>Number of Deliveries Remaining : 2453</p>
<form method='post'>
<input type='submit' name='proceedToDeliver' value='Proceed to Delivery'>
</form>
</div>
<table border='1' cellspacing='0'>
<tr><th></th><th>ProductName</th><th>Quantity</th><th>Sub-cost</th></tr>";
if(isset($_POST['tablename']))
{
	$con2=mysqli_connect('localhost','root','','loremipsumPurchasers');
	if($con2->connect_error){die('Connection error');}
	$sql3="SELECT * FROM ".$_POST['tablename'];
	$result2=$con2->query($sql3);$num=0;$total=0;
	while($row2=$result2->fetch_assoc())
	{
		$num++;$total=$total+$row2['productSUBCost'];
		echo "<tr><td><img src='".$row2['productImage']."'</td><td>".$row2['productName']."</td><td>".$row2['productQuantity']."</td><td><i class='fa fa-rupee'></i>".styleCOST($row2['productSUBCost'])."</td></tr>";
	}
	echo "<script>
	document.getElementById('numberOfProducts').innerText='".$num." products';
	document.getElementById('totalCost').innerText='TOTAL : ".styleCOST($total)."';
	</script>";
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
echo"</table>
</div>
</div>
<div class='panel2'>
<div class='header'>
<form method='POST'><input type='text' name='searchTableName' id='search' placeholder='Search here..'/><button name='searchTableNameButton'><i class='fa fa-search'></i></button></form>
</div>
<div id='listsTable'>
<form method='POST'>
<ul>";
if(isset($_POST['searchTableNameButton']))
{
	$tn=$_POST['searchTableName'];
	$con1=mysqli_connect('localhost','root','','loremipsumOrders');
	if($con1->connect_error){die('Connection error');}
	$sql1 = "SELECT * FROM orders WHERE TABLENAME LIKE '%".$tn."%'";
	$result1=$con1->query($sql1);
	while($row1=$result1->fetch_assoc())
	{
		$_SESSION['TABLENAME']=$row1['TableName'];
	 	echo "<li><i class='fa fa-address-card'></i> <button type='submit' name='tablename' value='".$_SESSION1['TABLENAME']."''>".$_SESSION1['TABLENAME']."</button></li>";	
	}
}
$con=mysqli_connect('localhost','root','','loremipsumOrders');
if($con->connect_error){die('Connection error');}
$sql = 'SELECT * FROM orders ORDER BY Time ASC,Date ASC';
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{
	 $_SESSION['TABLENAME']=$row['TableName'];
	 echo "<li><i class='fa fa-address-card'></i> <button type='submit' name='tablename' value='".$_SESSION['TABLENAME']."''>".$_SESSION['TABLENAME']."</button></li>";	 
}
// print_r($_POST);print_r($_SESSION);
echo "
</ul>
</form>
</div>
</div>
<div class='panel3'>
<div><p id='name'></p><p id='mobile'></p></div><div><p id='mail'></p><p id='pincode'></p></div><p id='address'></p>
</div>
</div>
<script>
function showInfo(){document.getElementById('numberOfDeliveries').style.visibility='visible';}
function hideInfo(){document.getElementById('numberOfDeliveries').style.visibility='hidden';}
</script>
</body>
</html>";
if(isset($_POST['tablename']))
{
	$con=mysqli_connect('localhost','root','','loremipsumOrders');
	if($con->connect_error){die('Connection error');}
	$sql2="SELECT * FROM orders WHERE TableName = '".$_POST['tablename']."'";
	$result=$con->query($sql2);
	while($row=$result->fetch_assoc())
	{
		$_SESSION['DATE']=$row['Date'];$_SESSION['TIME']=$row['Time'];$_SESSION['ADDRESS']=$row['Address'];$_SESSION['TABLENAME']=$row['TableName'];
		$_SESSION['PINCODE']=$row['Pincode'];$_SESSION['PHONE']=$row['Phone'];$_SESSION['NAME']=$row['Name'];
		$_SESSION['MAIL']=$row['Email'];
		echo "<script>
		document.getElementById('orderedDate').innerText='".$_SESSION['DATE']."';
		document.getElementById('orderedTime').innerText='".$_SESSION['TIME']."';
		document.getElementById('tableName').innerText='".$_SESSION['TABLENAME']."';
		document.getElementById('name').innerText='".$_SESSION['NAME']."';
		document.getElementById('mobile').innerText='".$_SESSION['PHONE']."';
		document.getElementById('address').innerText='".$_SESSION['ADDRESS']."';
		document.getElementById('pincode').innerText='".$_SESSION['PINCODE']."';
		document.getElementById('mail').innerText='".$_SESSION['MAIL']."';
		</script>";
	}
}
?>