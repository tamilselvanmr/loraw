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
	.container form table{width:50%;position:absolute;top:50%;left:50%;transform: translate(-50%,-3%);}
	.container form table tr td{padding:10px 5px;min-width: 300px;text-align: center;}
	.container form table tr td p{text-align: right;padding:5px 20px;color:red;font-size:10px;}
	.container form table tr td input{padding:10px 20px;font-size:16px;border:none;outline:none;border-bottom:1px solid #555;width:90%;}
	.container form table tr td button,.container form table tr td a{margin:0px 5px;padding:10px 20px;background-color:#000;border:none;outline:none;cursor: pointer;border:1px solid #000;border-radius:5vh;font-size:16px;color:#fff;}
	.container form table tr td a{opacity:0.5;color:#000;background-color: #fff;}
	input::-webkit-outer-spin-button,input::-webkit-inner-spin-button {-webkit-appearance: none;}
	.container form table tr td .eye{background-color:#fff;position:relative;font-size:20px;left:45%;top:-30px;border:none;padding:0px;}
	label,select,select option{color:#666;}
	.container form table tr td a:hover{opacity:1;}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="title"><a href="index.html" class="lorem">LOREM</a><a href="index.html" class="ipsum">IPSUM</a></div>
		<?php
		
		echo "<form method='POST'>
			<table cellspacing='0' align='center'>
				<tr><td colspan='0'><input type='text' id='mail_or_phone' name='mailPhone' placeholder='Enter mail or phone number' autocomplete='off' spellcheck='false'/><p id='mailPhoneError'></p></td></tr>
				<tr><td colspan='0'><input style='width:90%;' id='password' type='password' name='password' placeholder='Enter Password' autocomplete='off' spellcheck='false'/><button class='eye'><i id='eye' class='fa fa-eye'onmouseover='showPassword()' onmouseout='hidePassword()' style=color:#555></i></button><p style='position:relative;top:-3vh;' id='passwordError'></p></td></tr>
				<tr><td colspan='0'><a href='createNewAccount.php'>CREATE ACCOUNT</a><button type='submit' name='submit' onclick='checkDOB()'>LOGIN</button></td></tr>
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
		echo "<script>document.getElementById('mailPhoneError').innerText='';document.getElementById('passwordError').innerText='';</script>";
	}
	function analyseInput()
	{
		$mailPhone = $_POST['mailPhone'];$password = $_POST['password'];
		if(strlen(trim($mailPhone))==0)
		{echo "<script>document.getElementById('mailPhoneError').innerText='Mail address/phone number should not be empty';</script>";return;}
		loginAccount();
	}
	function loginAccount()
	{
		$a = $_POST['mailPhone'];$b=$_POST['password'];
		$con = mysqli_connect("localhost","root","","loremipsumUserDetails");
		if($con->connect_error){die("Connection failed");}
		$sqlAdmin = "SELECT * FROM accountDetails WHERE Mail='admin_of_loremipsum_1@gmail.com'";
		$result=$con->query($sqlAdmin);
		while($rowAdmin=$result->fetch_assoc())
		{
			if($rowAdmin['Password']==$b)
			{
				echo "<script>window.location.href='onlyForAdmin.php';</script>";
			}
		}
		$sql = "SELECT * FROM accountDetails WHERE Mail='$a' && Password='$b'";
		$result=$con->query($sql);$numOfRecoundsFound=0;$name="";$mail="";$mobile="";$password="";
		while($row=$result->fetch_assoc())
		{
			$numOfRecoundsFound++;$name = $row['Name'];$mail=$row['Mail'];$mobile=$row['Mobile'];$password=$row['Password'];
		}
		if($numOfRecoundsFound==1){session_start();$_SESSION['userName'] = $name;
		$_SESSION['Mail']=$mail;$_SESSION['Mobile']=$mobile;$_SESSION['Password']=$password;
		if(!isset($_SESSION['bagName'])){$_SESSION['bagName']=substr($row['Mail'],0,strpos($row['Mail'],'@gmail.com')).$row['Mobile'];}
		removePreviousErrors();echo "<script>window.location.href='loginSuccess.php';</script>";}
		else{echo "<script>document.getElementById('mailPhoneError').innerText='Invalid email/phone/password';</script>";return;}
	}
	function endWith($str, $lastString) 
	{
      $count = strlen($lastString);
      if($count==0){return true;}
      return (substr($str,-$count)==$lastString);
   	}
?> 
<!-- $name = preg_replace('/[^a-zA-Z0-9_ -]/s','',$name); -->