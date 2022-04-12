<?php include "koneksi.php"; ?>
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
		.menarik{
			background: #575757;
			width: 100%;
			padding: 20px;
			display: flex;
			color: white;
			margin-top: 50px;
		}
		.satu{
			width: 35%;
			

		}
		.dua{
			width: 60%;
		}
		.favo{
			width: 100%;
			padding: 40px;


		}
		.nav ul li:hover{
			transform: scale(1.1);
			color: #f9d21d;
		}
		.container{
			width: 90%;
			margin: auto;

		}
		.box-item{
			width: 100%;
			background: #111;
			height: 350px;
		}
		.box-end{
			width: 100%;
			margin-top: 30px;
		}
		.bg{
			margin-top: 20px;
			width: 100%;
			padding: 45px;
			display: flex;
		}
		.bg img{
			border-radius: 5px;
		}
	</style>
<section id="1">
		<div class="menarik">
		<div class="satu">
			<h4>Apa kelebihan dan ketertarikan dari <font style="font-family: 'Raleway', sans-serif;">BURGER KING ?</font></h4>
		</div>
		<div class="dua">
			<p><font style="font-family: 'Raleway', sans-serif;"><b>BURGER KING</b></font> menjaga sekali cita rasa burger yang autentik dan original,selain itu <font style="font-family: 'Raleway', sans-serif;"><b>BURGER KING</b></font> juga sudah berdiri sejak tahun 90an, arsitektur bangunannya pun indah masih terjaga ke klasikannya, oleh karena itu jangan ragu ragu jika ingin mampir kemari. Kami tunggu kedatangan anda : ) </p>
		</div>
	</div>
	</section>
	

		<div class="container">
			<section id="menu">
			<h1 style="font-family: 'Raleway',  sans-serif;font-size:35px; color: black; margin-top: 30px; margin-bottom: -30px;"><center>MENU</center></h1>
				<div class="bg">
			<div style="display: flex; font-family: 'Raleway', sans-serif; font-size: 17px;">
					 <?php 
        $produkterbaru=mysqli_query($koneksi,"SELECT*FROM menu ORDER BY idproduk ASC");
        while ($tampilproduk=mysqli_fetch_array($produkterbaru)){
          ?>
			<div style="width: 30%; margin-left: 30px; font-size: 17px;font-family: 'Raleway', sans-serif;">
				<img src="<?php echo $tampilproduk['foto'] ?>" width="100%" height="233px;">
				<h3 style="margin-top: 10px;"><?php echo $tampilproduk['namaproduk'] ?></h3>
				<p style="margin-top: 10px;"><?php echo $tampilproduk['keterangan'] ?></p>
				<p style="margin-top: 10px;"><b>Rp. <?php echo number_format($tampilproduk ['harga'],2) ?></b></p>
				<div>
					<br>
				<h4 class="mm" style="border:1px solid black; padding: 10px; width: auto; display: inline; color: white; background-color: black; cursor: pointer;">BUY</h4>
				</div>
				</div>
				
			<?php } ?>
			</div>
		</div>
		</section>

			<div class="favo">
			<?php 
        $produkterbaru=mysqli_query($koneksi,"SELECT*FROM menufavorite ORDER BY idproduk ASC");
        while ($tampilproduk=mysqli_fetch_array($produkterbaru)){
          ?>
			<h1 style="font-family: 'Raleway', sans-serif; margin-top: -20px;"><center>MENU FAVORITE</center></h1>
			<div style="margin-top: 30px;" >
			<img src="images/3.jpg" width="100%" style="border-radius: 20px;">
			<h2 style="font-family: 'Raleway', sans-serif; padding: 10px;"><center><?php echo $tampilproduk['namaproduk'] ?></center></h2>
			<p style="font-size: 17px; font-family: 'Raleway', sans-serif; margin-bottom: 30px;"><?php echo $tampilproduk['keterangan'] ?></p>
			</div>
			<p style="margin-top: -20px;"><b>Rp. <?php echo number_format($tampilproduk['harga'],2) ?></b></p>
			<h4 class="mm" style="border:1px solid black; padding: 10px; width: auto; display: inline; color: white; background-color: black; cursor: pointer; margin-left: 540px;">BUY</h4>
			<?php } ?>
		</div>
		</div>

		<div class="box-item">
			
			<h1 style="font-family: 'Raleway', sans-serif; color: white; padding: 30px; padding-left: 50px; margin-left: -20px;"><center>GALLERY</center></h1>
			<div style="padding: 10px;">
			<?php 
        $produkterbaru=mysqli_query($koneksi,"SELECT*FROM gallery ORDER BY idproduk ASC LIMIT 0,1");
        while ($tampilproduk=mysqli_fetch_array($produkterbaru)){
          ?>
			<img src="<?php echo $tampilproduk['foto'] ?>" width="100%" style="width: 18%; margin-right:10px; margin-left: 35px;">
			<img src="<?php echo $tampilproduk['foto'] ?>" width="100%" style="width: 18%; margin-right:10px; height: 200px;">
			<img src="<?php echo $tampilproduk['foto'] ?>" width="100%" style="width: 18%;margin-right:10px;">
			<img src="<?php echo $tampilproduk['foto'] ?>" width="100%" style="width: 18%;margin-right:10px; height: 200px;">
			<img src="<?php echo $tampilproduk['foto'] ?>" width="100%" style="width: 18%;margin-right:10px;">
		<?php } ?>
			</div>
		</div>
		</div>

		<div class="container">
			<div class="box-end">
				<h1 style=" font-family: 'Raleway', sans-serif; padding: 10px;"><center>LATEST NEWS</center></h1>
				<p style="font-family: 'Raleway', sans-serif; font-size: 17px; bold;text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<div class="gmbr" style="margin-top: 50px; display: flex; margin-left: 150px;">
					<?php 
        $produkterbaru=mysqli_query($koneksi,"SELECT*FROM news ORDER BY idproduk ASC ");
        while ($tampilproduk=mysqli_fetch_array($produkterbaru)){
          ?>
					<div  style="width: 30%; padding-right:  20px; ">
						<img src="<?php echo $tampilproduk['foto'] ?>" width="100%" >
						<div style="padding: 10px; border:2px solid black; margin-top: -7px;">
						<p style="font-size: 17px;  margin-left: 17px;"><i class="far fa-calendar-alt"></i>&nbsp;<?php echo $tampilproduk['tanggal'] ?></p>
						<h3 style="font-family: 'Raleway', sans-serif; margin-left: 15px; margin-top: 10px;  font-size: 20px; cursor: pointer;"><?php echo $tampilproduk['namaproduk'] ?></h3>
						<p style="font-family: 'Raleway', sans-serif; margin-left: 15px; margin-top: 10px; font-size: 17px;"><?php echo $tampilproduk['keterangan'] ?></p>
						<br>
						<span ><a class="mm" style="text-decoration: none; color: black; margin-left: 15px;" href="#"><b>Rean More...</b></a></span>
						</div>
					</div>
						<?php } ?>

				</div>
				
			</div>
			
		</div>