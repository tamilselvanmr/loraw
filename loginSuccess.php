<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Lorem Ipsum</title>
	<style type="text/css">
	*{padding:0;margin:0;text-decoration: none;color:#000;font-family:verdana;user-select: none;}
	body{background-image:url('images/bg.png');background-repeat: no-repeat;background-size: cover;background-attachment: fixed;background-position: center;}
	.container{opacity:0.9;width:75%;height:80vh;background-color:#fff;border-radius:25px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);}
	.container .title{width:100%;padding:10px 0px;position:relative;top:20px;left:40px;}
	.container .title a{display:inline;float:left;}
	.container .title .name{float:right;position:relative;left:-5%;font-size:20px;padding:10px 20px;color:#ccc;}
	.container .title .name i{color:#aaa;}
	.container .title .lorem,.container .title .ipsum{font-size:20px;padding:10px;display:inline-block;border:1px solid #000;}
	.container .title .lorem{border-top-left-radius:2vh;color:#fff;background-color:#000;}
	.container .title .ipsum{border-bottom-right-radius:2vh;color:#000;background-color:#fff;}
	.container .inner{padding:10px;position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);display:flex;justify-content:center;align-items:center;flex-direction:column;}
	.container .inner p{padding:20px;font-size:20px;letter-spacing: 1px;}
	.container .inner p i{color:red;}
	.container .inner a{letter-spacing:1px;border-radius:5vh;padding:10px 20px;background-color:#000;color:#fff;}
	.container .inner a i{color:#fff;}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="title"><a href="index.html" class="lorem">LOREM</a><a href="index.html" class="ipsum">IPSUM</a><p class="name"><i class='fa fa-user'></i> <?php echo $_SESSION['userName']; ?></p></div>
		<div class="inner"><p><i class='fa fa-heart'></i> Logged in Successfully <i class='fa fa-heart'></i></p>
		<a href="index.html">HOME <i class='fa fa-home'></i></a></div>
	</div>
</body>
</html>