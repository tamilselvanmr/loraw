<?php
session_start();
?>
<html>
<head>
<title>Lorem Ipsum</title>
<style>
*{padding:0;margin:0;list-style:none;text-decoration:none;letter-spacing:1px;font-family:'Sans-serif';user-select:none;color:#000;}
body{background-color:white;width:100%;overflow-x:hidden;}
header{display:flex;align-items:center;width:100%;background-color:#fff;position:fixed;top:0;z-index:20;}
header ul{width:100%;display:flex;align-items:center;justify-content:space-around;background-color:#fff;border-bottom:1px solid #888;}
header ul li input{overflow:hidden;cursor:default;letter-spacing:1px;color:#000;width:450px;padding:15px 10px 15px 30px;font-size:16px;outline:none;border-radius:50vh;border:none;background-color:rgb(10,200,100,0.1);font-family:'Sans-serif';}
header ul li button{cursor:pointer;margin:10px 20px;font-size:16px;outline:none;background-color:rgb(0,0,0,0);border:none;color:#555;position:relative;left:-60px;}
header ul li button:hover{color:#000;}
header ul li a{margin:0px 10px;cursor:pointer;color:#111;display:inline-block;}
header ul li a i{margin:0px 0px 0px 10px;color:#888;}
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

.container{width:100%;box-shadow:0px 2px 4px #ccc;padding-bottom:2vh;}
.container .part1{background-color:#fff;border-bottom:1px solid #ddd;box-shadow:0px 2px 4px #ccc;z-index:100;}
.container .part1 ul{margin-top:80px;display:flex;justify-content:space-around;padding:10px 0px;background-color:#fff;}
.container .part1 ul li a{cursor:pointer;color:#333;padding:10px 0px;display:inline-block;z-index:100;background-color:#fff;}
.container .part1 ul li a i{margin:0px 0px 0px 10px;color:#888;}
.container .part1 ul li ol{top:140px;z-index:10;}
.container .part1 ul li ol li{border-bottom:1px solid #ddd;width:230px;}
.container .part1 ul li ol li a{cursor:pointer;margin:10px 20px;}
.container .part1 ul li ol li a i{position:absolute;right:15px;}
.container .part1 ul li ol li a:hover{color:#195;}
.container .part1 ul li ol li ul{display:flex;flex-direction:column;margin:0;padding:0;position:absolute;left:230px;background-color:#fff;top:0px;border:1px solid #888;border-top:none;display:none;box-shadow:1px 1px 4px rgb(0,0,0,0.5);}
.container .part1 ul li ol li ul li{width:250px;}

.left_right{width:100%;float:left;margin:1vh 0px;}
.container .left{width:18%;margin:3vh 0% 1vh 1%;border:1px solid #fff;float:left;box-shadow:5px 5px 10px #ddd;}
.subHeading{font-size:20px;color:#333;font-weight:normal;padding:20px 20px 10px 20px;border-bottom:1px solid #eee;z-index:0;}
.left ul{list-style-type:none;padding:10px 0px;background-color:#fff;}
.left li{padding:5px 20px;font-size:15px;}
.left input[type="checkbox"]{outline:none;margin-right:20px;}
.container .right{width:77%;float:right;margin:3vh 16px;border:1px solid #fff;box-shadow:2px 4px 6px #ccc;}
.container .right .top{width:100%;box-shadow:0px 1px 1px #eee;}
/*.container .right .top .inserted{display:none;background-color:#f0d14a;color:#278;padding:20px;cursor:default;}
.container .right .top .inserted span{float:right;color:#231;cursor:pointer;}*/
.container .right .top .path{font-size:15px;padding:15px 0px 15px 20px;color:#999;}
.container .right .top .path a{color:#999;}
.container .right .top .path a:hover{color:#295;}
.container .right .top .sortOptions{cursor:default;padding:2px 0px;display:flex;justify-content:space-around;align-items:center;}
.container .right .top .sortOptions li{color:#555;cursor:default;}
.container .right .top .sortOptions li a{cursor:pointer;color:#888;display:inline-block;padding-bottom:10px;border-bottom:1px solid #fff;}
.container .right .top .sortOptions li #active{color:#295;border-bottom:2px solid #295;}
.container .right .items{display:flex;flex-direction:column;overflow:hidden;width:100%;padding:10px 0px;}
.container .right .items .item{display:flex;flex-direction:row;align-items:center;width:98%;margin:0px 1%;padding:1vh 0px;border:1px solid #eee;}
.container .right .items .item:hover{box-shadow:0px 2px 4px #ddd;}
.container .right .items .item .productImage{height:100%;display:flex;align-items:center;justify-content:center;width:30%;float:left;}
.container .right .items .item .productImage img{cursor:zoom-in;width:90%;margin:1vh 5%;}
.container .right .items .item .info{width:50%;float:left;}
.container .right .items .item .info .moreLess{display:none;}
.container .right .items .item .cc{width:20%;height:50px;float:left;display:flex;flex-direction:column;justify-content:center;align-items:center;}
.container .right .items .item .productName{padding:10px 5px;font-size:20px;}
.container .right .items .item .subHeading{color:#888;display:inline;font-size:15px;margin-left:10px;padding-bottom:5px;border-bottom:1px solid #ddd;}
.container .right .items .item ul{margin:10px 0px 10px 10px;}
.container .right .items .item ul li{color:#555;font-family:'Maiandra GD';list-style-type:disc;list-style-position:inside;padding:5px;}
.container .right .items .item ul li .moreLess{display:none;}
.container .right .items .item button{background-color:#fff;padding:3px;border:none;outline:none;border-bottom:1px solid #295;}
.container .right .items .item button i{cursor:pointer;color:#295;padding-left:3px;font-size:10px;}
.container .right .items .item .moreLessButton{color:#295;font-size:12px;border:none;background-color:#fff;outline:none;cursor:pointer;font-family:verdana;}
.container .right .items .item .cc .productCost{font-weight:bold;padding:5px 20px;font-size:20px;}
.container .right .items .item .cc .productOldCost{color:#444;text-decoration:line-through;display:inline-block;padding:5px 20px;}
.container .right .items .item .cc span{text-decoration:none;font-size:10px;color:#999;}
.container .right .items .item .cc .rating{padding:5px 20px;}
.container .right .items .item .cc .rating i{font-size:15px;color:orange;margin:0px 1px;}
.container .right .items .item .cc .cartbtn .cart{position:relative;left:0px;padding:10px 40px 10px 20px;cursor:pointer;font-size:18px;background-color:#fff;color:#295;border:1px solid black;outline:none;}
.container .right .items .item .cc .cart{cursor:pointer;font-size:18px;margin:10px 0px;border:1px solid #295;padding:10px 20px;color:#295;border-radius:50vh;}
.container .right .items .item .cc .cart i{padding:0px;font-size:21px;color:#295;}
.container .right .items .item .cc .cart:hover{transform: scale(1.01);box-shadow: 2px 2px 6px #ccc;}

.previousNextPage{width:98%;margin:3vh 1%;border:1px solid #ddd;flex-direction:column;display:flex;justify-content:center;align-items:center;}
.previousNextPage div{margin-bottom:3vh;}
.previousNextPage p{padding:20px;color:#888;}
.previousNextPage a{padding:5px 8px;margin:5px;display:inline-block;text-align:center;font-size:15px;color:#333;border-radius:50vh;border:1px solid #333;}
.previousNextPage .active{color:#fff;background-color:#111;}

#bigScreen{display:flex;justify-content:space-around;align-items:center;width:46%;position:fixed;height:60vh;background-color:#fff;border-radius:10px;box-shadow:2px 2px 8px #ccc;top:20vh;right:2%;display:flex;;align-items:center;justify-content:center;display:none;}
#bigScreen img{width:90%;}

footer{width:100%;background-color:#111;float:left;display:flex;justify-content:center;padding:3vh 0px;}
footer .f1,footer .f2,footer .f3{display:flex;justify-content:center;width:25%;float:left;}
footer .f1 ul,footer .f2 ul,footer .f3 ul{margin:1vh 0px;}
footer .f1 ul .one,footer .f2 ul .one,footer .f3 ul .one{margin:1vh 0px;color:#aaa;}
footer .f1 ul li a,footer .f2 ul li a,footer .f3 ul li a{cursor:pointer;color:#fff;padding:5px 0px;display:inline-block;}
.container .right .items form input[type='text']{display:none;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
<ul>
<li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9Qaeg_ueBNZkHN_B5DFkUXect3YMpFuKFfw&usqp=CAU"></li>
<li><input type="text" onclick="collapseAll()" placeholder="Search for products, brands and more" autocomplete="off" spellcheck="false"><button><i class="fa fa-search" onclick="collapseAll()"></i></button></li>
<li><a href="index.html" onclick = "collapseAll()">HOME</a></li>
<li><a href="#" onclick = "collapseAll()">ABOUT</a></li>
<li>
<a onclick="expand('sub1','down_1','a1')" id="a1">CONTACT<i id="down_1" class="fa fa-chevron-down"></i></a>
<ol id="sub1">
<li><a href="#"><i class="fa fa-facebook-square"></i>FACEBOOK</a></li>
<li><a href="#"><i class="fa fa-instagram"></i>INSTAGRAM</a></li>
<li><a href="#"><i class="fa fa-google"></i>GMAIL</a></li>
<li><a href="#"><i class="fa fa-telegram"></i>TELEGRAM</a></li>
<li><a href="#"><i class="fa fa-twitter"></i>TWITTER</a></li>
<li><a href="#"><i class="fa fa-youtube"></i>YOUTUBE</a></li>
<li><a href="#"><i class="fa fa-whatsapp"></i>WHATSAPP</a></li>
</ol>
</li>
<li><a href="#" onclick = "collapseAll()">TEAM</a></li>
<li>
<a onclick="expand('sub2','down_2','a2')" id="a2">ACCOUNT<i id="down_2" class="fa fa-chevron-down"></i></a>
<ol id="sub2">
<li><a href="createNewAccount.php"><i class="fa fa-user-plus"></i>CREATE ACCOUNT</a></li>
<li><a href="login.php"><i class="fa fa-sign-in"></i>LOGIN</a></li>
</ol>
</li>
<li><a href="cart.php" onclick = "collapseAll()">CART</a></li>
</ul>
</header>

<div class="container">
<div class="part1">
<ul>
<li><a href="#"onclick="collapseAll()">Mobiles</a></li>
<li><a href="#">Fashion<i class="fa fa-chevron-down"></i></a></li>
<li>
<a onclick="expand('sub3','down_3','a3')" id="a3">Electronics<i id="down_3" class="fa fa-chevron-down"></i></a>
<ol id="sub3">
<li>
<a onclick="expand('sub3a','down_3a','a3a')" id="a3a">Audio<i id="down_3a" class="fa fa-chevron-right"></i></a>
<ul id="sub3a">
<li><a href="#">Bluetooth Headphones</a></li>
<li><a href="#">Wired Headphones</a></li>
<li><a href="#">Bluetooth Speakers</a></li>
<li><a href="#">Remote control</a></li>
<li><a href="#">Home Theatres</a></li>
<li><a href="#">DTH Set top box</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub3b','down_3b','a3b')" id="a3b">Gaming<i id="down_3b" class="fa fa-chevron-right"></i></a>
<ul id="sub3b">
<li><a href="#">Gaming Consoles</a></li>
<li><a href="#">Gaming Mouse</a></li>
<li><a href="#">Gaming Keyboards</a></li>
<li><a href="#">Gamepads</a></li>
<li><a href="#">Controllers</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub3c','down_3c','a3c')" id="a3c">Storage<i id="down_3c" class="fa fa-chevron-right"></i></a>
<ul id="sub3c">
<li><a href="#">Memory Card</a></li>
<li><a href="#">Pendrives</a></li>
<li><a href="#">HardDrive</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub3d','down_3d','a3d')" id="a3d">Laptop Accessories<i id="down_3d" class="fa fa-chevron-right"></i></a>
<ul id="sub3d">
<li><a href="#">Mouse</a></li>
<li><a href="#">Routers</a></li>
<li><a href="#">Laptop Keyboards</a></li>
<li><a href="#">Data Cards</a></li>
<li><a href="#">Laptop Battery</a></li>
<li><a href="#">USB Gadgets</a></li>
<li><a href="#">Security Software</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub3e','down_3e','a3e')" id="a3e">Camera<i id="down_3e" class="fa fa-chevron-right"></i></a>
<ul id="sub3e">
<li><a href="#">DSLR</a></li>
<li><a href="#">Camera Lenses</a></li>
<li><a href="#">Drone</a></li>
<li><a href="#">Flashes</a></li>
</ul>
</li>
<li><a href="#">Powerbank</a></li>
<li>
<a onclick="expand('sub3f','down_3f','a3f')" id="a3f">Mobile Accessories<i id="down_3f" class="fa fa-chevron-right"></i></a>
<ul id="sub3f">
<li><a href="#">Plain Cases</a></li>
<li><a href="#">Designer Cases</a></li>
<li><a href="#">Camera Lens Protector</a></li>
<li><a href="#">Mobile Charges</a></li>
<li><a href="#">Mobile Holder</a></li>
</ul>
</li>
</ol>
</li>
<li>
<a onclick="expand('sub4','down_4','a4')" id="a4">Home<i id="down_4" class="fa fa-chevron-down"></i></a>
<ol id="sub4">
<li>
<a onclick="expand('sub4a','down_4a','a4a')" id="a4a">Furnishings<i id="down_4a" class="fa fa-chevron-right"></i></a>
<ul id="sub4a">
<li><a href="#">Bedsheets</a></li>
<li><a href="#">Blankets</a></li>
<li><a href="#">Floor coverings</a></li>
<li><a href="#">Kitchen Linen sets</a></li>
<li><a href="#">Table Linen sets</a></li>
<li><a href="#">Bath Linen</a></li>
<li><a href="#">Bed Linen</a></li>
<li><a href="#">Pillows</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub4b','down_4b','a4b')" id="a4b">Living Room<i id="down_4b" class="fa fa-chevron-right"></i></a>
<ul id="sub4b">
<li><a href="#">TV Units</a></li>
<li><a href="#">Sofa beds</a></li>
<li><a href="#">Dining sets</a></li>
<li><a href="#">Coffee Tables</a></li>
<li><a href="#">Bookshelves</a></li>
<li><a href="#">Shoe Racks</a></li>
<li><a href="#">Bed Linen</a></li>
<li><a href="#">Sofa sets</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub4c','down_4c','a4c')" id="a4c">Kitchen & Dining<i id="down_4c" class="fa fa-chevron-right"></i></a>
<ul id="sub4c">
<li><a href="#">Cookware</a></li>
<li><a href="#">Barware</a></li>
<li><a href="#">Bakeware</a></li>
<li><a href="#">Grinders</a></li>
<li><a href="#">Knives & cutters</a></li>
<li><a href="#">Flasks & Bottles</a></li>
<li><a href="#">Gas stoves</a></li>
<li><a href="#">Hardjuicers</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub4d','down_4d','a4d')" id="a4d">Bedroom<i id="down_4d" class="fa fa-chevron-right"></i></a>
<ul id="sub4d">
<li><a href="#">Bed</a></li>
<li><a href="#">Sidetables</a></li>
<li><a href="#">Office Tables</a></li>
<li><a href="#">Bookshelves</a></li>
<li><a href="#">Pillows</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub4e','down_4e','a4e')" id="a4e">Home Decor<i id="down_4e" class="fa fa-chevron-right"></i></a>
<ul id="sub4e">
<li><a href="#">Lightings</a></li>
<li><a href="#">Stickers & Wallpapers</a></li>
<li><a href="#">Paintings</a></li>
<li><a href="#">Clocks</a></li>
<li><a href="#">Home frangrance</a></li>
<li><a href="#">Flowers & Vases</a></li>
<li><a href="#">Photoframes & Albums</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub4f','down_4f','a4f')" id="a4f">Electricals<i id="down_4f" class="fa fa-chevron-right"></i></a>
<ul id="sub4f">
<li><a href="#">Bulbs</a></li>
<li><a href="#">Torches</a></li>
<li><a href="#">Tubelights</a></li>
<li><a href="#">Batteries</a></li>
<li><a href="#">Wire</a></li>
<li><a href="#">Socket</a></li>
</ul>
</li>
</ol>
</li>
<li>
<a onclick="expand('sub5','down_5','a5')" id="a5">Appliances<i id="down_5" class="fa fa-chevron-down"></i></a>
<ol id="sub5">
<li>
<a onclick="expand('sub5a','down_5a','a5a')" id="a5a">Televisions<i id="down_5a" class="fa fa-chevron-right"></i></a>
<ul id="sub5a">
<li><a href="television3.php">24-32 inch</a></li>
<li><a href="television3.php">40-43 inch</a></li>
<li><a href="television3.php">50-55 inch</a></li>
<li><a href="television3.php">Big Screen TVs</a></li>
<li><a href="television3.php">Smart TVs</a></li>
<li><a href="television3.php">4K UHD TVs</a></li>
<li><a href="television3.php">OLED TVs</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub5b','down_5b','a5b')" id="a5b">Washing Machine<i id="down_5b" class="fa fa-chevron-right"></i></a>
<ul id="sub5b">
<li><a href="#">Front Load</a></li>
<li><a href="#">Top Load</a></li>
<li><a href="#">Dish Washers</a></li>
<li><a href="#">Washer Dryers</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub5c','down_5c','a5c')" id="a5c">Air Conditioner<i id="down_5c" class="fa fa-chevron-right"></i></a>
<ul id="sub5c">
<li><a href="#">1 ton ACs</a></li>
<li><a href="#">1.5 ton ACs</a></li>
<li><a href="#">5 star ACs</a></li>
<li><a href="#">Window ACs</a></li>
<li><a href="#">Split ACs</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub5d','down_5d','a5d')" id="a5d">Refrigerators<i id="down_5d" class="fa fa-chevron-right"></i></a>
<ul id="sub5d">
<li><a href="#">Single door</a></li>
<li><a href="#">Double door</a></li>
<li><a href="#">Triple door</a></li>
<li><a href="#">4 door</a></li>
<li><a href="#">Mini Refrigerator</a></li>
<li><a href="#">Convertible</a></li>
</ul>
</li>
<li>
<a onclick="expand('sub5e','down_5e','a5e')" id="a5e">Kitchen<i id="down_5e" class="fa fa-chevron-right"></i></a>
<ul id="sub5e">
<li><a href="#">Microwave Ovens</a></li>
<li><a href="#">Juicer / mixer</a></li>
<li><a href="#">Coffe makers</a></li>
<li><a href="#">Sandwich makers</a></li>
<li><a href="#">Pop Up Toasters</a></li>
<li><a href="#">Chimneys</a></li>
<li><a href="#">Electric Kettle</a></li>
</ul>
</li>
</ol>
</li>
<li><a href="#" onclick="collapseAll()">Travel</a></li>
<li><a href="#" onclick="collapseAll()">Grocery</a></li>
<li><a href="#" onclick="collapseAll()">Top Offers</a></li>
</ul>
</div>
<div class="left"><h1 class="subHeading">PRICE</h1>
<ul>
<li><input type="checkbox" onclick="inchPrice(0,0,10000,0,4)">below <i class="fa fa-rupee"></i>10,000</li>
<li><input type="checkbox" onclick="inchPrice(1,10000,25000,0,4)"><i class="fa fa-rupee"></i>10,000 - <i class="fa fa-rupee"></i>25,000</li>
<li><input type="checkbox" onclick="inchPrice(2,25000,50000,0,4)"><i class="fa fa-rupee"></i>25,000 - <i class="fa fa-rupee"></i>50,000</li>
<li><input type="checkbox" onclick="inchPrice(3,50000,75000,0,4)"><i class="fa fa-rupee"></i>50,000 - <i class="fa fa-rupee"></i>75,000</li>
<li><input type="checkbox" onclick="inchPrice(4,75000,100000,0,4)">above <i class="fa fa-rupee"></i>75,000</li>
</ul>
<h1 class="subHeading">SCREEN SIZE</h1>
<ul>
<li><input type="checkbox" onclick="inchPrice(5,0,24,5,9)">24 inch & below</li>
<li><input type="checkbox" onclick="inchPrice(6,26,32,5,9)">26 - 32 inch</li>
<li><input type="checkbox" onclick="inchPrice(7,34,42,5,9)">34 - 42 inch</li>
<li><input type="checkbox" onclick="inchPrice(8,44,54,5,9)">44 - 54 inch</li>
<li><input type="checkbox" onclick="inchPrice(9,56,100,5,9)">56 inch & above</li>
</ul>
<h1 class="subHeading">BRANDS</h1>
<ul>
<li><input type="checkbox">Thomson</li>
<li><input type="checkbox">Vu</li>
<li><input type="checkbox">LG</li>
<li><input type="checkbox">Samsung</li>
<li><input type="checkbox">Sony</li>
</ul>
<h1 class="subHeading">SMART TV</h1>
<ul>
<li><input type="checkbox">Yes</li>
<li><input type="checkbox">No</li>
</ul>
</div>
<div class="right" id="body">
<div class="top">
	<!-- <div class="inserted">INSERTED SUCCESSFULLY<span onclick="closeInserted()"><i class="fa fa-times"></i></span></div> -->
<p class="path"><a href="index.html">Home</a> > <a href="television1.php">Televisions</a></p>
<ul class="sortOptions">
<li style="cursor:default;padding-bottom:10px;">SORT BY</li>
<li><a id="active" class="options" href="television1.php">Relevance</a></li>
<li><a class="options" onclick="sortPrice('ascending')">Price Low-to-High</a></li>
<li><a class="options" onclick="sortPrice('descending')">Price High-to-Low</a></li>
</ul>
</div>
<div class="items">
<form method="POST">
<input type="text" name="a" id="link"><input type="text" name="b" id="name"><input type="text" name="c" id="cost1"><input type="text" name="d" id="cost2"><input type="text" name="e" id="quantity"><input type="text" name="f" id="offers">
<div class="item">
<div class="productImage">
<img  class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k1xwcy80/television/v/p/m/samsung-ua65ru8000kxxl-original-imafhc5jhmgwbepj.jpeg?q=70" onmouseover="showOnBigScreen(1)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Samsung 163cm 65 inch Ultra HD(4K)</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Disney+Hotstar|Youtube</li>
<li>Operating System: Tizen</li>
<li>Resolution: Ultra HD (4K) 3840 x 2160 Pixels</li>
<span class="moreLess"><li>Sound Output: 20 W</li>
<li>Refresh Rate: 120 Hz</li>
</span><button onclick="moreless(0)" class="moreLessButton">More</button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>16,799</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>20,900</p><span class="offer">19% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
<button type="submit" class="cart" onclick="getDetails(1)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img  class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kae95e80/television/f/6/y/realme-tv-32-original-imafrz79pweqeafh.jpeg?q=70" onmouseover="showOnBigScreen(2)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Realme 80cm 32 inch LED Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
<span class="moreLess">
<li>Resolution: HD Ready 1366 x 768 Pixels</li>
<li>Sound Output: 24 W</li>
<li>Refresh Rate: 60 Hz</li></span>
<button onmouseover="moreless(1)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>13,999</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>14,999</p><span class="offer">6% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
<button type="submit" class="cart" onclick="getDetails(2)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img  class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kc54ivk0/television/r/q/g/mi-l43m4-4ain-original-imaftc5fy6bfmhyb.jpeg?q=70" onmouseover="showOnBigScreen(3)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Mi 4A PRO 80cm 32 inch Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Refresh Rate: 60 Hz</li>
<span class="moreLess"><li>Resolution: Ultra HD (4K) 3840 x 2160 Pixels</li>
<li>Sound Output: 19 W</li>
<li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
</span>
<button onclick="moreless(2)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>27,999</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>28,999</p><span class="offer">3% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
<button type="submit" class="cart" onclick="getDetails(3)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kesv0y80/television/3/e/m/panasonic-th-40hs450dx-original-imafvejq988merwd.jpeg?q=70" onmouseover="showOnBigScreen(4)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Panasonic 100cm 40 inch Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
<span class="moreLess"><li>Resolution: HD Ready 1920 x 1080 Pixels</li>
<li>Sound Output: 16 W</li>
<li>Refresh Rate: 60 Hz</li>
</span><button onclick="moreless(3)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>27,499</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>34,999</p><span class="offer">19% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></p>
<button type="submit" class="cart" onclick="getDetails(4)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kfbfr0w0/television/m/f/g/samsung-ua43tu7200kxxl-original-imafvs8yrbkd5hm2.jpeg?q=70" onmouseover="showOnBigScreen(5)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Realme 108cm 43 inch Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
<span class="moreLess"><li>Resolution: HD Ready 1366 x 768 Pixels</li>
<li>Sound Output: 24 W</li>
<li>Refresh Rate: 58 Hz</li>
</span><button onclick="moreless(4)"><span class="moreLessButton">More</span><i class="fa fa-caret-down"></i></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>81,999</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>82,999</p><span class="offer">3% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></p>
<button type="submit" class="cart" onclick="getDetails(5)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img  class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kdyus280/television/g/d/q/lg-32lm565bpta-32lm565bpta-original-imafurgkdrjfggbw.jpeg?q=70" onmouseover="showOnBigScreen(6)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">LG 80cm 22 inch Smart TV 2020 Edition</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
<span class="moreLess"><li>Resolution: HD Ready 1366 x 768 Pixels</li>
<li>Sound Output: 24 W</li>
<li>Refresh Rate: 55 Hz</li>
</span><button onclick="moreless(5)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>21,299</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>23,999</p><span class="offer">5% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></p>
<button type="submit" class="cart" onclick="getDetails(6)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kj1r53k0-0/television/x/w/v/65a73f-hisense-original-imafypfhceyudnsq.jpeg?q=70" onmouseover="showOnBigScreen(7)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Hisense 139cm 55 inch Ultra HD (4K) LED Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
<span class="moreLess"><li>Resolution: HD Ready 1366 x 1080 Pixels</li>
<li>Sound Output: 22 W</li>
<li>Refresh Rate: 60 Hz</li>
</span><button onclick="moreless(6)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>44,999</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>46,999</p><span class="offer">8% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
<button type="submit" class="cart" onclick="getDetails(7)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kf5pzm80/television/f/h/e/mi-l32m6-ei-original-imafvzefsh27shv6.jpeg?q=70" onmouseover="showOnBigScreen(8)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Mi 4A Horizon Edition 80 cm 32 inch HD Ready LED Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
<span class="moreLess"><li>Resolution: HD Ready 1366 x 768 Pixels</li>
<li>Sound Output: 24 W</li>
<li>Refresh Rate: 50 Hz</li>
</span><button onclick="moreless(7)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>15,299</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>17,999</p><span class="offer">9% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></p>
<button type="submit" class="cart" onclick="getDetails(8)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kfzq8i80/television/4/6/2/oneplus-43fa0a00-original-imafwb6wmmnxpjmr.jpeg?q=70" onmouseover="showOnBigScreen(9)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">OnePlus Y Series 108 cm 43 inch Full HD LED Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Chromecast in-built)</li>
<span class="moreLess"><li>Resolution: HD Ready 1366 x 768 Pixels</li>
<li>Sound Output: 21 W</li>
<li>Refresh Rate: 60 Hz</li>
</span><button onclick="moreless(8)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>25,999</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>28,999</p><span class="offer">14% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></p>
<button type="submit" class="cart" onclick="getDetails(9)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k7dnonk0/television/x/z/a/vu-50pm-50pm-original-imafpmrtnctj6qgz.jpeg?q=70" onmouseover="showOnBigScreen(10)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Vu Premium 139cm 55 inch Ultra-HD (4K) LED Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Google Assistant)</li>
<span class="moreLess"><li>Resolution: HD Ready 1366 x 768 Pixels</li>
<li>Sound Output: 22 W</li>
<li>Refresh Rate: 60 Hz</li>
</span><button onclick="moreless(9)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>42,999</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>45,999</p><span class="offer">21% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></p>
<button type="submit" class="cart" onclick="getDetails(10)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img  class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k7p37gw0/television/f/z/b/coocaa-32s3u-32s3u-original-imafpvkknq7sjhys.jpeg?q=70" onmouseover="showOnBigScreen(11)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Coocaa 81 cm 32 inch HD Ready LED Smart TV with YouTube</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Disney+Hotstar|Youtube</li>
<li>Operating System: Tizen</li>
<span class="moreLess"><li>Resolution: Ultra HD (4K) 3840 x 2160 Pixels</li>
<li>Sound Output: 20 W</li>
<li>Refresh Rate: 120 Hz</li>
</span><button onclick="moreless(10)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>9,799</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>12,900</p><span class="offer">10% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
<button type="submit" class="cart" onclick="getDetails(11)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img  class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kbl4cy80/television/y/c/u/mi-l50m5-5ain-original-imafswnf8qyakerr.jpeg?q=70" onmouseover="showOnBigScreen(12)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Mi 4X 125.7 cm 50 inch Ultra HD (4K) LED Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
<span class="moreLess"><li>Resolution: HD Ready 1366 x 768 Pixels</li>
<li>Sound Output: 24 W</li>
<li>Refresh Rate: 60 Hz</li>
</span><button onclick="moreless(11)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>33,399</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>35,999</p><span class="offer">11% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
<button type="submit" class="cart" onclick="getDetails(12)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img  class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kfzq8i80/television/e/j/y/oneplus-32h0a00-original-imafwb6wmqxh2ung.jpeg?q=70" onmouseover="showOnBigScreen(13)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">OnePlus Y Series 80 cm 32 inch HD Ready LED Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
<span class="moreLess"><li>Resolution: Ultra HD (4K) 3840 x 2160 Pixels</li>
<li>Sound Output: 19 W</li>
<li>Refresh Rate: 60 Hz</li>
</span><button onclick="moreless(12)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>15,999</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>17,999</p><span class="offer">13% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
<button type="submit" class="cart" onclick="getDetails(13)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/ked56kw0/television/r/m/a/lg-43lm5650pta-43lm5650pta-original-imafvfq5jpcjzh2m.jpeg?q=70" onmouseover="showOnBigScreen(14)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">LG 108 cm 43 inch Full HD LED Smart TV 2020 Edition</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android</li>
<li>Resolution: HD Ready 1920 x 1080 Pixels</li>
<span class="moreLess"><li>Sound Output: 16 W</li>
<li>Refresh Rate: 60 Hz</li>
</span><button onclick="moreless(13)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>29,499</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>34,999</p><span class="offer">25% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></p>
<button type="submit" class="cart" onclick="getDetails(14)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
<div class="item">
<div class="productImage">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kiow6fk0/television/u/y/j/mi-l55m6-eqg-original-imafyffzrkny7exs.jpeg?q=70" onmouseover="showOnBigScreen(15)" onmouseout="showOffBigScreen()">
</div>
<div class="info">
<p class="productName">Mi Q1 138.8 cm 55 inch QLED Ultra HD (4K) Smart Android TV</p>
<p class="subheading">Highlights</p>
<ul>
<li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li>
<li>Operating System: Android </li>
<li>Resolution: HD Ready 1366 x 768 Pixels</li>
<span class="moreLess"><li>Sound Output: 24 W</li>
<li>Refresh Rate: 58 Hz</li>
</span><button onclick="moreless(14)"><span class="moreLessButton">More</span></button>
</ul>
</div>
<div class="cc">
<p class="productCost"><i class="fa fa-rupee"></i>54,999</p>
<p class="productOldCost"><i class="fa fa-rupee"></i>56,999</p><span class="offer">13% off</span>
<p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></p>
<button type="submit" class="cart" onclick="getDetails(15)">cart <i class="fa fa-cart-plus"></i></button>
</div>
</div>
</form>
</div>
</div>
<div class="previousNextPage" style="order:100">
<p>Expecting more products?</p>
<div><a class="active">1</a><a href="television2.php">2</a><a href="television3.php">3</a><a href="television4.html">4</a><a href="television5.html">5</a></div>
</div>
<footer>
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
<div id="bigScreen">
<img id="bigScreenImage" src="">
</div>
<script src="television_JS.js"></script>
</body>
</html>
<?php
if(isset($_POST['a'])){insert();}
function insert()
{
$a = $_POST['a'];$b = $_POST['b'];$c = $_POST['c'];$d = $_POST['d'];$e = $_POST['e'];$f = $_POST['f'];
$con = mysqli_connect('localhost','root','','loremipsumPurchasers');
if($con->connect_error){die("Failed");}
if(isset($_SESSION['userName']) && isset($_SESSION['Mail']) && isset($_SESSION['Mobile']))
{
	$tableName = substr($_SESSION['Mail'],0,strpos($_SESSION['Mail'],'@gmail.com')).$_SESSION['Mobile'];
	$sql = "INSERT INTO $tableName values('$a','$b','$c','$d','$e','$f','$c')";
	if($con->query($sql)===TRUE){}
}
else
{
	echo "<script>window.location.href='login.php';</script>";
}
}
?>