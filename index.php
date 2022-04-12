<?php include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Akmal Rojak Putra Pamungkas</title>
	<script src="https://kit.fontawesome.com/39d24b3470.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Acme|Baloo+Bhai|Kurale|Luckiest+Guy|McLaren|Poppins|Raleway|Russo+One|Staatliches|Supermercado+One&display=swap" rel="stylesheet">
	<style type="text/css">
		html{
    		scroll-behavior: smooth;
		}
		body{
			font-family: 'Raleway', sans-serif;
		}
		*{
			box-sizing: border-box;
			margin: 0;
		}
		.head{
			width: 100%;
			padding: 20px 0px 10px 10px;
			background: #00000085;
			box-shadow: #00000082 3px 20px 20px 10px;
			color: white;
			z-index: 2;
		}
		.banner{
			background: url(images/c.jpg);
			width: 100%;
			background-size: cover;
			height: 645px;
			background-attachment: fixed;
			z-index: 1;
			box-shadow: -2px 10px 12px 6px #494949;
		}
		.nav{
			display: flex;
			margin-left: 120px;
			padding: 10px;
			margin-bottom: -20px

		}
		.bn2{
			width: 100%;
			height: 645px;
			background: #0000004a;
		}
		.isi-banner button:hover{
			color: black;
			background-color:white;
		}
		.isi-banner button{
			 border:none; padding: 10px; font-size: 15px; font-weight: bold; margin-left: 20px; background-color: #f9d21d; color:black	;cursor: pointer; border: none;
		}
		.container{
			width: 90%;
			margin: auto;

		}
		
		
		.foot{
			width: 100%;
			padding: 50px;
			background: #111;
			margin-top: 30px;
			display: flex;
		}
		
		.nav ul li a:hover{
			transform: scale(1.1);
			color: #f9d21d;
		}
		.li {
			margin-right: 20px;
		}
		.ahref {
			text-decoration: none;
			color: white;
		}

		

	</style>
<body>
		<section id="beranda">
		<div class="banner">
			<div class="bn2">
	<div class="head">
		<div class="nav">
			<img style="width: 5%; margin-left: -120px; margin-top: -10px; cursor: pointer; margin-right: 20px;" src="images/rt.png" width="100%" alt="">
			<ul style="list-style: none; display: flex; font-size: 16px; margin-top: 5px; font-weight: bold;">
				<li class="li"><a class="ahref" href="">BERANDA</a></li>
				<li class="li"><a class="ahref" href="#menu">MENU</a></li>
				<li class="li"><a class="ahref" href="">TROLI</a></li>
				<li><a class="ahref" href="">LOGIN</a></li>
			</ul>
		<P style="margin-left:550px; font-weight: bold;"><a class="n1" style="text-decoration: none;color: white;" href=""><span class="n1" >ORDER</span></a> &nbsp; &nbsp;<i class="fas fa-comment" style="cursor: pointer;"></i>&nbsp; <a class="n1" style="text-decoration: none;color: white;" href="https://web.whatsapp.com/"><span class="n1" >+62 882 7651 1850</span></a>
		<i class="fas fa-calendar-alt" style="margin-left: 10px;margin-top: 10px; cursor: pointer;"></i></P>
		<P style="margin-left: 10px;margin-top: 10px; font-weight: bold;"><a class="n1" style="text-decoration: none;color: white;" href=""><span class="n1" >ABOUT</span></a>
		<i class="fas fa-bars" style="margin-left: 10px; cursor: pointer;"></i></P>
		</div>
		</div>
		<div class="isi-banner">
			<img src="" width="100%" style="margin-top: 100px; margin-left: 20%; width: 15%;">
			<div>
			<img src="images/best.png" width="100%" style="width: 8%; margin-left: 20px;margin-bottom: -85px; margin-top: -20px;">
			<h1 style="margin-left: 20px; color: white; font-family: 'Raleway', sans-serif; margin-top: 100px; ">BURGER KING</h1>
			<br>
			<p style="color: white; font-size: 20px; margin-left: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
			<br>
			<button>
				<a style="color: black; text-decoration: none;" href="#1">PURCHASE</a>
			</button>
			<div>
				<img src="images/home.png" width="100%" style="width: 50%; float: right; margin-top: -370px; margin-right: 50px;">
			</div>
			</div>
		</div>
		</div>
		</div>
		</section>
		<?php 
  $page=@$_GET['page'];
   if($page=="home"){
    include "home.php";
   } elseif ($page=="home"){
     include "home.php";
   } else {
    include "home.php";
   }
    ?>
				<div class="foot">
					<div style="color: white; width: 20%; margin-left: 30px;">
						<p style="margin-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<br>
						<ul style="list-style: none;">
						<li style="margin-left: -40px;"><i class="fas fa-envelope"></i>&nbsp;&nbsp;kelompok3@gmail.com</li>
						<br>
						<li style="margin-left: -40px;"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Amerika, Amerika Selatan</li>	
						</ul>
					</div>

					<div class="box-2" style="color: white;margin-left: 20px;">
						<h3 style="font-size: 20px; margin-left: 40px; margin-top: 14px; margin-bottom: 10px; font-family: 'Raleway', sans-serif;">RECENT POSTS</h3>
						<br>
						<ul style="list-style: none;">
							<li style="border-bottom: 1px solid #363636; padding-bottom: 10px;">Burger</li>
							<br>
							<li style="border-bottom: 1px solid #363636; padding-bottom: 10px;">Burger</li>
							<br>
							<li style="border-bottom: 1px solid #363636; padding-bottom: 10px;">Burger</li>
							<br>
							<li style="border-bottom: 1px solid #363636; padding-bottom: 10px;">Burger</li>
						</ul>
					</div>
					<div style="margin-left: 250px; margin-top: 30px;">
						<a href="#beranda"><img src="images/1.png" width="100%">
						</div></a>
				</div>
					<div style="width: 100%; background:#111;  padding: 10px; border-top: 1px dashed #363636; ">
						<span style="color: white; margin-left: 10px;"> Copyright &copy; 2019 by Kelompok 3 - Fr. &nbsp;Academy</span>
					<p style="margin-right: 20px; float: right; color: white; margin-right: 10px;">Follow Us &nbsp; &nbsp;
					<a href="https://id-id.facebook.com/"><i class="fab fa-facebook-f" style="margin-left: 10px;color: white;"></i></a>&nbsp; &nbsp;
					<a href="https://www.instagram.com/?hl=id"><i class="fab fa-instagram" style="margin-left: 10px;color: white;"></i></a>
					&nbsp; &nbsp;
					<a href="https://twitter.com/"><i class="fab fa-twitter" style="margin-left: 10px;color: white;"></i></a>
					</p>
					</div>
				</div>


</body>
</html>