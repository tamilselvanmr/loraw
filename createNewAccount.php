<!DOCTYPE html>
<html>
<head>
	<title>Lorem Ipsum</title>
	<style type="text/css">
	*{padding:0;margin:0;text-decoration: none;color:#000;font-family:verdana;user-select: none;}
	body{background-image:url('images/bg.png');background-repeat: no-repeat;background-size: cover;background-attachment: fixed;background-position: center;}
	.container{opacity:0.9;width:75%;height:80vh;background-color:#fff;border-radius:25px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);}
	.container .title{width:100%;padding:10px 0px;position:relative;top:20px;left:40px;}
	.container .title .lorem,.container .title .ipsum{font-size:20px;padding:10px;display:inline-block;border:1px solid #000;}
	.container .title .lorem{border-top-left-radius:2vh;color:#fff;background-color:#000;}
	.container .title .ipsum{border-bottom-right-radius:2vh;color:#000;background-color:#fff;}
	.container form table{width:50%;position:absolute;top:50%;left:50%;transform: translate(-50%,-40%);}
	.container form table tr td{padding:10px 5px;min-width: 300px;text-align: center;}
	.container form table tr td p{text-align: right;padding:5px 20px;color:red;font-size:10px;}
	.container form table tr td input{padding:10px 20px;font-size:16px;border:none;outline:none;border-bottom:1px solid #555;width:90%;}
	.container form table tr td button,.container form table tr td a{margin:0px 5px;padding:10px 20px;background-color:#000;border:none;outline:none;cursor: pointer;border:1px solid #000;border-radius:5vh;font-size:16px;color:#fff;}
	.container form table tr td a{color:#000;background-color: #fff;}
	input::-webkit-outer-spin-button,input::-webkit-inner-spin-button {-webkit-appearance: none;}
	.container form table tr td .eye{background-color:#fff;position:relative;font-size:20px;left:45%;top:-30px;border:none;padding:0px;}
	label,select,select option{color:#666;}
	.container form table tr td a{opacity:0.5;}
	.container form table tr td a:hover{opacity:1;}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="title"><a href="index.html" class="lorem">LOREM</a><a href="index.html" class="ipsum">IPSUM</a></div>
		<?php
		$name = "";
		$mail = "";
		$number = "";
		$country = "";
		$password = "";
		if(isset($_POST['submit'])){
			$name = $_POST['username'];
			$mail = $_POST['mail'];
			$number = $_POST['phone'];
			$country = $_POST['country'];
			$password = $_POST['password'];
		}
		echo "<form method='POST'>
			<table cellspacing='0' align='center'>
				<tr><td colspan='0'><input type='text' value='$name' name='username' placeholder='Enter your Name' autocomplete='off' spellcheck='false'/><p id='nameError'></p></td></tr>
				<tr><td colspan='0'><input type='mail' value='$mail' name='mail' placeholder='Enter mail address' autocomplete='off' spellcheck='false' /><p id='mailError'></p></td></tr>
				<tr><td colspan='0'><select value='$country' name='country' style='padding:10px 10px;border:none;outline:none;font-size:11px;border-bottom:1px solid #555;'><option>Asia</option><option>North America</option><option>Europe</option><option>Antartica</option><option>South America</option><option>Africa</option><option>Oceania</option></select><input style='width:67%;' type='number' name='phone' value='$number' placeholder='Enter Mobile number' autocomplete='off' spellcheck='false'/><p id='numberError'></p></td></tr>
				<tr><td colspan='0'><input style='width:90%;' id='password' type='password' value='$password' name='password' placeholder='Enter Password' autocomplete='off' spellcheck='false'/><button class='eye'><i id='eye' class='fa fa-eye'onmouseover='showPassword()' onmouseout='hidePassword()' style='color:#555'></i></button><p style='position:relative;top:-3vh;' id='passwordError'></p></td></tr>
				<tr><td colspan='0'><button type='submit' name='submit' onclick='checkDOB()'>CREATE ACCOUNT</button><a href='login.php'>LOGIN</a></td></tr>
			</table>
		</form>";
		?>
	</div>
<script type="text/javascript">
function showPassword(){document.getElementById("password").type="text";document.getElementById("eye").classList.value = "fa fa-eye-slash";}
function hidePassword(){document.getElementById("password").type="password";document.getElementById("eye").classList.value = "fa fa-eye";}
</script>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		removePreviousErrors();analyseInput();
	}
	function removePreviousErrors()
	{
		echo "<script>document.getElementById('nameError').innerText='';document.getElementById('mailError').innerText='';document.getElementById('numberError').innerText='';document.getElementById('passwordError').innerText='';</script>";
	}
	function analyseInput()
	{
		$name = ucfirst($_POST['username']);$mail = $_POST['mail'];$password = $_POST['password'];$number = $_POST['phone'];
		if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $name) || preg_match('/[\'^£$%&*()}{@#~>0123456789]/', $name))
		{echo "<script>document.getElementById('nameError').innerText='Name should not contain special characters';</script>";return;}
		if(strlen(trim($name))<5)
		{echo "<script>document.getElementById('nameError').innerText='Name should contain more than 4 characters';</script>";return;}
		if((!endWith($mail,'@gmail.com') && !endWith($mail,'@email.com') && !endWith($mail,'@outlook.com')) || preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $mail))
		{echo "<script>document.getElementById('mailError').innerText='Invalid mail address';</script>";return;}
		if(strlen(trim($number))<4 || strlen(trim($number))>12)
		{echo "<script>document.getElementById('numberError').innerText='Invalid contact number';</script>";return;}
		if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $number))
		{echo "<script>document.getElementById('numberError').innerText='Contact number should not contain special characters';</script>";return;}
		if(strlen(trim($password))<8 || strlen(trim($password))>15)
		{echo "<script>document.getElementById('passwordError').innerText='Password should have a length of 8 to 15 alphanumerical characters';</script>";return;}
		if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password) || !preg_match('/[\'^£$%&*()}{@#~>0123456789]/', $password))
		{echo "<script>document.getElementById('passwordError').innerText='Password should contain atleast one special character and one numerical value';</script>";return;}
		createNewAccount();
	}
	function createNewAccount()
	{
		$a=ucfirst($_POST['username']);$b = $_POST['mail'];$c=$_POST['phone'];$d=$_POST['password'];$e=$_POST['country'];
		$con = mysqli_connect("localhost","root","","loremipsumUserDetails");
		if($con->connect_error){die("Connection failed");}
		$sql = "INSERT INTO accountDetails VALUES('$a','$b','$c','$d','$e')";
		if($con->query($sql)===TRUE){removePreviousErrors();buyBagToPurchase();echo "<script>window.location.href='createAccountSuccess.php';</script>";}
		else{echo "<script>window.location.href='createAccountFailure.php';</script>";}
	}
	function buyBagToPurchase()
	{
		$b = $_POST['mail'];$c=$_POST['phone'];
		$con = mysqli_connect("localhost","root","","loremipsumPurchasers");
		if($con->connect_error){die("Connection failed");}
		$tableName = substr($b,0,strpos($b,'@gmail.com')).$c;
		$sql = "CREATE TABLE ".$tableName."(productImage varchar(500) not null unique,productName varchar(100) not null unique,productCost varchar(7) not null,productOLDCost varchar(7) not null,productQuantity varchar(5) not null,productOffer varchar(8) not null,productSUBCost varchar(7) not null)";
		if($con->query($sql)===TRUE){session_start();$_SESSION['bagName']=$tableName;}
		else{echo "<br>Bag not purchased";}
	}
	function endWith($str, $lastString) 
	{
      $count = strlen($lastString);
      if($count==0){return true;}
      return (substr($str,-$count)==$lastString);
   	}
?> 
<!-- $name = preg_replace('/[^a-zA-Z0-9_ -]/s','',$name); -->