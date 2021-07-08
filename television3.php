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

.container{width:100%;box-shadow:0px 2px 4px #ccc;}
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
.container .right{width:98%;float:right;margin:3vh 1%;border:1px solid #fff;box-shadow:2px 4px 6px #ccc;}
.container .right .top{width:100%;box-shadow:0px 1px 1px #eee;}
.container .right .top .path{font-size:15px;padding:15px 0px 15px 20px;color:#999;}
.container .right .top .path a{color:#999;}
.container .right .top .path a:hover{color:#295;}
.container .right .top .sortOptions{cursor:default;padding:2px 0px;display:flex;justify-content:space-around;align-items:center;}
.container .right .top .sortOptions li{color:#555;cursor:default;}
.container .right .top .sortOptions li a{cursor:pointer;color:#888;display:inline-block;padding-bottom:10px;border-bottom:1px solid #fff;}
.container .right .top .sortOptions li #active{color:#295;border-bottom:2px solid #295;}
.container .right .previousNextPage{width:98%;margin:3vh 1%;border:1px solid #ddd;flex-direction:column;display:flex;justify-content:center;align-items:center;}
.container .right .previousNextPage div{margin-bottom:3vh;}
.container .right .previousNextPage p{padding:20px;color:#888;}
.container .right .previousNextPage a{padding:5px 8px;margin:5px;display:inline-block;text-align:center;font-size:15px;color:#333;border-radius:50vh;border:1px solid #333;}
.container .right .previousNextPage .active{color:#fff;background-color:#111;}

.container .part3{display:felx;flex-direction:column;justify-content:center;align-items:center;overflow:hidden;border:1px solid #ddd;border-radius:3px;margin:1vh 1%;width:98%;box-shadow:2px 2px 4px #ddd;}
.container .part3 .head{align-items:center;color:#555;padding:10px 20px;border-bottom:1px solid #ddd;width:97%;display:flex;justify-content:space-between;}
.container .part3 .head a{padding:10px 20px;background-color:#295;color:#fff;}
.container .part3 .head a:hover{background-color:#285;}
.container .part3 .head p{font-size:20px;color:#555;}
.container .part3 .row{padding:5px 0px;display:flex;align-items:center;flex-direction:row;justify-content:center;}
.container .part3 .row .column{width:12%;cursor:default;margin: 1px 3px;display:flex;justify-content:space-between;flex-direction:column;align-content:center;align-items:center;}
.container .part3 .row .column img{width:90%;padding:10px;cursor:pointer;}
.container .part3 .row .column img:hover{cursor:pointer;transform:scale(1.05);}
.container .part3 .row .column .info{display:flex;flex-direction:column;align-items:center;}
.container .part3 .row .column .info .productName{font-size:15px;letter-spacing:0px;padding:5px;text-align:center;}
.container .part3 .row .column .info .productCost{padding:5px;font-size:10px;text-align:center;color:#888;}
.container .part3 .row .column .info .productOldCost,.container .part3 .row .column .info .productOffer{display:none;}
.container .part3 .row .column .info .cart{color:#295;padding:5px 10px;border:1px solid #fff;border-radius:20vh;}
.container .part3 .row .column .info .cart:hover{border:1px solid #295;}
.container .part3 .row .column .info a i{color:#295;padding-left:5px;}

footer{width:100%;background-color:#111;float:left;display:flex;justify-content:center;padding:3vh 0px;}
footer .f1,footer .f2,footer .f3{display:flex;justify-content:center;width:25%;float:left;}
footer .f1 ul,footer .f2 ul,footer .f3 ul{margin:1vh 0px;}
footer .f1 ul .one,footer .f2 ul .one,footer .f3 ul .one{margin:1vh 0px;color:#aaa;}
footer .f1 ul li a,footer .f2 ul li a,footer .f3 ul li a{cursor:pointer;color:#fff;padding:5px 0px;display:inline-block;}
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
<li><a href="account.html"><i class="fa fa-user-plus"></i>CREATE ACCOUNT</a></li>
<li><a href="account.html"><i class="fa fa-sign-in"></i>LOGIN</a></li>
</ol>
</li>
<li><a href="#" onclick = "collapseAll()">CART</a></li>
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
<li><a href="television3.html">24-32 inch</a></li>
<li><a href="television3.html">40-43 inch</a></li>
<li><a href="television3.html">50-55 inch</a></li>
<li><a href="television3.html">Big Screen TVs</a></li>
<li><a href="television3.html">Smart TVs</a></li>
<li><a href="television3.html">4K UHD TVs</a></li>
<li><a href="television3.html">OLED TVs</a></li>
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
<div class="right" id="body">
<div class="top">
<p class="path"><a href="index.html">Home</a> > <a href="television1.html">Televisions</a></p>
</div>
<div class="items">
<div class="part3">
<div class="head"><p>24 inch & below</p><a href="television1.html" class="viewall">VIEW ALL</a></div>
<div class="row">
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/j7c7v680/television/s/7/c/micromax-24b600hdi-24b900hdi-original-imaexjgrxyycegfe.jpeg?q=70">
<div class="info">
<p class="productName">Micromax 60 cm 23 inch HD LED TV</p>
<p class="productCost">₹12,799</p><p class="productOldCost">₹14,799</p><p class="productOffer">5%</p>
<a href="#" class="cart" onclick="getDetails(1)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kc3p30w0/television/z/b/e/thomson-65-oathpro-2020-original-imaftaquapygjk2w.jpeg?q=70">
<div class="info">
<p class="productName">Thomson 64 cm 26 inch Android TV</p>
<p class="productCost">₹8,949</p><p class="productOldCost">₹9,999</p><p class="productOffer">2%</p>
<a href="#" class="cart" onclick="getDetails(2)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/television/f/z/e/sony-bravia-klv-24p413d-original-imaerz8mzhsmctvf.jpeg?q=70">
<div class="info">
<p class="productName">Sony 59.9 cm 24 inch HD LED TV</p>
<p class="productCost">₹17,999</p><p class="productOldCost">₹18,799</p><p class="productOffer">3%</p>
<a href="#" class="cart" onclick="getDetails(3)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k0bbb0w0/television/y/h/w/kodak-24hdx100s-original-imafjre7zvcmtz2g.jpeg?q=70">
<div class="info">
<p class="productName">Kodak 60 cm 24 inch HD LED TV</p>
<p class="productCost">₹9,949</p><p class="productOldCost">₹14,799</p><p class="productOffer">8%</p>
<a href="#" class="cart" onclick="getDetails(4)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/jwpa8i80/television/b/h/t/lloyd-l65u1y0iv-original-imafhcywzkwpczqw.jpeg?q=70">
<div class="info">
<p class="productName">Lloyd Clara 24 inch Smart TV</p>
<p class="productCost">₹7,299</p><p class="productOldCost">₹9,999</p><p class="productOffer">5%</p>
<a href="#" class="cart" onclick="getDetails(5)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k7usyvk0/television/e/f/m/huidi-hd24d1m19-original-imafpzzbapzheyk7.jpeg?q=70">
<div class="info">
<p class="productName">Huidi 60 cm 24 inch HD LED TV</p>
<p class="productCost">₹7,449</p><p class="productOldCost">₹9,799</p><p class="productOffer">5%</p>
<a href="#" class="cart" onclick="getDetails(6)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kg8avm80/television/f/p/w/rgl-2400-ec-original-imafwhvybbxag4j5.jpeg?q=70">
<div class="info">
<p class="productName">RGL 60 cm 24 inch HD LED TV</p>
<p class="productCost">₹8,229</p><p class="productOldCost">₹10,799</p><p class="productOffer">4%</p>
<a href="#" class="cart" onclick="getDetails(7)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k0vbgy80pkrrdj/television-refurbished/r/z/z/b-bla24ah410-blaupunkt-original-imafjqk7zrpfhz7z.jpeg?q=70">
<div class="info">
<p class="productName">Blaupunkt 60 cm 24 inch HD LED TV</p>
<p class="productCost">₹6,299</p><p class="productOldCost">₹9,799</p><p class="productOffer">7%</p>
<a href="#" class="cart" onclick="getDetails(8)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
</div>
</div>
<div class="part3">
<div class="head"><p>26 inch - 32 inch</p><a href="television1.html" class="viewall">VIEW ALL</a></div>
<div class="row">
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kg6vfrk0/television/5/p/z/lg-65nano91tna-original-imafwh9cmgqprryq.jpeg?q=70">
<div class="info">
<p class="productName">G Nanocell 74 cm 30 inch Smart TV</p>
<p class="productCost">₹18,229</p><p class="productOldCost">₹33,999</p><p class="productOffer">42%</p>
<a href="#" class="cart" onclick="getDetails(9)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k6b2snk0/television/m/k/5/t-series-ts3202smart-original-imafzsj2bqcgz9bf.jpeg?q=70">
<div class="info">
<p class="productName">T-Series 80cm 32 inch LED Smart TV</p>
<p class="productCost">₹15,799</p><p class="productOldCost">₹19,399</p><p class="productOffer">14%</p>
<a href="#" class="cart" onclick="getDetails(10)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kae95e80/television/f/6/y/realme-tv-32-original-imafrz79pweqeafh.jpeg?q=70">
<div class="info">
<p class="productName">Realme 80cm 32 inch Android TV</p>
<p class="productCost">₹13,999</p><p class="productOldCost">₹19,299</p><p class="productOffer">19%</p>
<a href="#" class="cart" onclick="getDetails(11)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kbs9k7k0/television/c/j/3/samsung-ua32t4340akxxl-original-imaft25qdysfsq7k.jpeg?q=70">
<div class="info">
<p class="productName">Samsung 80cm 32 inch LED Smart TV</p>
<p class="productCost">₹18,949</p><p class="productOldCost">₹19,799</p><p class="productOffer">1%</p>
<a href="#" class="cart" onclick="getDetails(12)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kdyus280/television/g/d/q/lg-32lm565bpta-32lm565bpta-original-imafurgkdrjfggbw.jpeg?q=70">
<div class="info">
<p class="productName">LG 80 cm 32 inch LED Smart TV</p>
<p class="productCost">₹15,449</p><p class="productOldCost">₹16,999</p><p class="productOffer">2%</p>
<a href="#" class="cart" onclick="getDetails(13)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kerfl3k0/television/n/q/y/toshiba-43u5050-original-imafvcny5pzdvwwc.jpeg?q=70">
<div class="info">
<p class="productName">Toshiba 78 cm 30 inch 4K Smart TV</p>
<p class="productCost">₹13,299</p><p class="productOldCost">₹14,999</p><p class="productOffer">5%</p>
<a href="#" class="cart" onclick="getDetails(14)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kfzq8i80/television/e/j/y/oneplus-32h0a00-original-imafwb6wmqxh2ung.jpeg?q=70">
<div class="info">
<p class="productName">OnePlus Y-Series 32 inch Android TV</p>
<p class="productCost">₹15,229</p><p class="productOldCost">₹18,999</p><p class="productOffer">7%</p>
<a href="#" class="cart" onclick="getDetails(15)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kfwvcsw0/television/m/x/3/nokia-32tahdn-original-imafw8xg5rw87ukj.jpeg?q=70">
<div class="info">
<p class="productName">Nokia 80 cm 32 inch Android TV</p>
<p class="productCost">₹14,299</p><p class="productOldCost">₹18,999</p><p class="productOffer">9%</p>
<a href="#" class="cart" onclick="getDetails(16)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
</div>
</div>
<div class="part3">
<div class="head"><p>34 inch - 42 inch</p><a href="television1.html" class="viewall">VIEW ALL</a></div>
<div class="row">
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k2w6xe80/television/h/3/e/iffalcon-43k31-original-imafm59fudczqhuy.jpeg?q=70">
<div class="info">
<p class="productName">iFFALCON K31 36 inch Android TV</p>
<p class="productCost">₹12,799</p><p class="productOldCost">₹18,999</p><p class="productOffer">14%</p>
<a href="#" class="cart" onclick="getDetails(17)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kc54ivk0/television/g/5/r/mi-l40m5-5ain-original-imaftc5frwsvkmvz.jpeg?q=70">
<div class="info">
<p class="productName">Mi 4A 40 inch HD Android TV</p>
<p class="productCost">₹19,999</p><p class="productOldCost">₹18,999</p><p class="productOffer">14%</p>
<a href="#" class="cart" onclick="getDetails(18)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/j7c7v680/television/s/7/c/micromax-24b600hdi-24b900hdi-original-imaexjgrxyycegfe.jpeg?q=70">
<div class="info">
<p class="productName">Micromax 70cm 38 inch HD LED TV</p>
<p class="productCost">₹22,799</p><p class="productOldCost">₹34,799</p><p class="productOffer">12%</p>
<a href="#" class="cart" onclick="getDetails(19)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/ked56kw0/television/r/m/a/lg-43lm5650pta-43lm5650pta-original-imafvfq5jpcjzh2m.jpeg?q=70">
<div class="info">
<p class="productName">LG 108 cm 42 inch Smart TV </p>
<p class="productCost">₹24,949</p><p class="productOldCost">₹28,999</p><p class="productOffer">7%</p>
<a href="#" class="cart" onclick="getDetails(20)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kfwvcsw0/television/g/m/2/nokia-43tafhdn-original-imafw8xwyhzmdgpr.jpeg?q=70">
<div class="info">
<p class="productName">Nokia 107.9 cm 42 inch Android TV</p>
<p class="productCost">₹29,449</p><p class="productOldCost">₹38,999</p><p class="productOffer">24%</p>
<a href="#" class="cart" onclick="getDetails(21)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kc3p30w0/television/z/b/e/thomson-65-oathpro-2020-original-imaftaquapygjk2w.jpeg?q=70">
<div class="info">
<p class="productName">Thomson 40 inch Android TV</p>
<p class="productCost">₹38,949</p><p class="productOldCost">₹49,999</p><p class="productOffer">12%</p>
<a href="#" class="cart" onclick="getDetails(22)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kf5pzm80/television/g/t/f/marq-43aafhdm-original-imafvzmebjjfdvhe.jpeg?q=70">
<div class="info">
<p class="productName">MarQ 107.9 cm 42 inch Android TV</p>
<p class="productCost">₹18,229</p><p class="productOldCost">₹27,999</p><p class="productOffer">17%</p>
<a href="#" class="cart" onclick="getDetails(23)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kerfl3k0/television/n/q/y/toshiba-43u5050-original-imafvcny5pzdvwwc.jpeg?q=70">
<div class="info">
<p class="productName">Toshiba 108 cm 40 inch 4K Smart TV</p>
<p class="productCost">₹26,299</p><p class="productOldCost">₹28,999</p><p class="productOffer">5%</p>
<a href="#" class="cart" onclick="getDetails(24)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
</div>
</div>
<div class="part3">
<div class="head"><p>44 inch - 54 inch</p><a href="television1.html" class="viewall">VIEW ALL</a></div>
<div class="row">
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k7dnonk0/television/x/z/a/vu-50pm-50pm-original-imafpmrtnctj6qgz.jpeg?q=70">
<div class="info">
<p class="productName">Vu Premium 54 inch 4K Android TV</p>
<p class="productCost">₹42,799</p><p class="productOldCost">₹48,999</p><p class="productOffer">9%</p>
<a href="#" class="cart" onclick="getDetails(25)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kingqkw0/television/w/b/y/motorola-43sauhdmq-original-imafydykpnw3hzgv.jpeg?q=70">
<div class="info">
<p class="productName">Motorola ZX Pro 50 inch Android TV</p>
<p class="productCost">₹47,999</p><p class="productOldCost">₹58,999</p><p class="productOffer">13%</p>
<a href="#" class="cart" onclick="getDetails(26)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/k7usyvk0/television/e/f/m/huidi-hd24d1m19-original-imafpzzbapzheyk7.jpeg?q=70">
<div class="info">
<p class="productName">Huidi 54 inch HD LED TV</p>
<p class="productCost">₹51,449</p><p class="productOldCost">₹74,799</p><p class="productOffer">31%</p>
<a href="#" class="cart" onclick="getDetails(27)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kfwvcsw0/television/g/k/z/nokia-55tauhdn-original-imafw8xffqkuzjhu.jpeg?q=70">
<div class="info">
<p class="productName">Nokia 139 cm 54 inch Android TV</p>
<p class="productCost">₹41,949</p><p class="productOldCost">₹58,999</p><p class="productOffer">25%</p>
<a href="#" class="cart" onclick="getDetails(28)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/keuagsw0/television/y/e/y/panasonic-th-50hx450dx-th-50hx450dx-original-imafvf3sbzgzygu2.jpeg?q=70">
<div class="info">
<p class="productName">Panasonic 127 cm 50 inch Android TV</p>
<p class="productCost">₹37,449</p><p class="productOldCost">₹38,999</p><p class="productOffer">3%</p>
<a href="#" class="cart" onclick="getDetails(29)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kgmla4w0/television/q/k/g/iffalcon-55k61-55k61-original-imafwtehtv9gn4qk.jpeg?q=70">
<div class="info">
<p class="productName">iFFALCON 50 inch Android TV</p>
<p class="productCost">₹78,229</p><p class="productOldCost">₹88,999</p><p class="productOffer">15%</p>
<a href="#" class="cart" onclick="getDetails(30)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kar44280/television/h/z/h/philips-50put6604-94-original-imafs8n4uf7dyg5t.jpeg?q=70">
<div class="info">
<p class="productName">Philips-6600 50 inch LED Smart TV</p>
<p class="productCost">₹33,899</p><p class="productOldCost">₹38,999</p><p class="productOffer">11%</p>
<a href="#" class="cart" onclick="getDetails(31)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/television/f/z/e/sony-bravia-klv-24p413d-original-imaerz8mzhsmctvf.jpeg?q=70">
<div class="info">
<p class="productName">Sony 54 inch HD LED TV</p>
<p class="productCost">₹47,999</p><p class="productOldCost">₹65,799</p><p class="productOffer">23%</p>
<a href="#" class="cart" onclick="getDetails(32)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
</div>
</div>
<div class="part3">
<div class="head"><p>56 inch & above</p><a href="television1.html" class="viewall">VIEW ALL</a></div>
<div class="row">
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kfwvcsw0/television/p/q/3/nokia-65tauhdn-original-imafw8xgjgffu7wb.jpeg?q=70">
<div class="info">
<p class="productName">Nokia 164cm 65 inch Android TV</p>
<p class="productCost">₹72,799</p><p class="productOldCost">₹82,999</p><p class="productOffer">19%</p>
<a href="#" class="cart" onclick="getDetails(33)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kbs9k7k0/television/c/j/3/samsung-ua32t4340akxxl-original-imaft25qdysfsq7k.jpeg?q=70">
<div class="info">
<p class="productName">Samsung 66 inch LED Smart TV</p>
<p class="productCost">₹82,949</p><p class="productOldCost">₹99,799</p><p class="productOffer">26%</p>
<a href="#" class="cart" onclick="getDetails(34)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kl2mljk0/television/n/7/9/65lx-vu-original-imagyafsvab5de2s.jpeg?q=70">
<div class="info">
<p class="productName">Vu Cinema 65 inch Android TV</p>
<p class="productCost">₹67,999</p><p class="productOldCost">₹88,999</p><p class="productOffer">42%</p>
<a href="#" class="cart" onclick="getDetails(35)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kc3p30w0/television/z/b/e/thomson-65-oathpro-2020-original-imaftaquapygjk2w.jpeg?q=70">
<div class="info">
<p class="productName">Thomson 164 cm 65 inch Android TV</p>
<p class="productCost">₹95,949</p><p class="productOldCost">₹98,999</p><p class="productOffer">8%</p>
<a href="#" class="cart" onclick="getDetails(36)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kg9qbgw0/television/y/v/z/panasonic-th-65hx700dx-original-imafwjqwmnhkdq8h.jpeg?q=70">
<div class="info">
<p class="productName">Panasonic 165 cm 65 inch Android TV</p>
<p class="productCost">₹82,449</p><p class="productOldCost">₹98,999</p><p class="productOffer">28%</p>
<a href="#" class="cart" onclick="getDetails(37)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/kg6vfrk0/television/5/p/z/lg-65nano91tna-original-imafwh9cmgqprryq.jpeg?q=70">
<div class="info">
<p class="productName">G Nanocell 164 cm 65 inch Smart TV</p>
<p class="productCost">₹88,229</p><p class="productOldCost">₹93,999</p><p class="productOffer">12%</p>
<a href="#" class="cart" onclick="getDetails(38)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/jwpa8i80/television/b/h/t/lloyd-l65u1y0iv-original-imafhcywzkwpczqw.jpeg?q=70">
<div class="info">
<p class="productName">Lloyd Clara 62 inch Smart TV</p>
<p class="productCost">₹76,299</p><p class="productOldCost">₹98,999</p><p class="productOffer">35%</p>
<a href="#" class="cart" onclick="getDetails(39)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
<a href="television1.html"><div class="column">
<img class="productPhoto" src="https://rukminim1.flixcart.com/image/416/416/j7c7v680/television/s/7/c/micromax-24b600hdi-24b900hdi-original-imaexjgrxyycegfe.jpeg?q=70">
<div class="info">
<p class="productName">Micromax 62 inch HD LED TV</p>
<p class="productCost">₹72,799</p><p class="productOldCost">₹84,799</p><p class="productOffer">18%</p>
<a href="#" class="cart" onclick="getDetails(40)">Cart<i class="fa fa-cart-plus"></i></a>
</div>
</div></a>
</div>
</div>
</div>

<div class="previousNextPage" style="order:100">
<p>Expecting more products?</p>
<div><a href="television1.html">1</a><a href="television2.html">2</a><a class="active">3</a><a href="television4.html">4</a><a href="television5.html">5</a></div>
</div>
</div>
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