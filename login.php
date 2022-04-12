		
<?php 
include "config.php";
$usr = @$_POST['username'];
$pw = @$_POST['password'];
$query = "SELECT*FROM human WHERE username='$usr' and password='$pw'";
$q = mysqli_query($conn,$query);
$cetak = mysqli_fetch_array($q);
$hitung = mysqli_num_rows($q);
if ($hitung > 0) {
	echo "Berhasil login";
} else {
	echo "Gagal login";
}
 ?>
 <div class="container w-50">
 	<form action="" method="post">
 		<div class="form-group">
 			<label>Username : </label>
 			<input type="text" class="form-control" name="username">
 		</div>
 		<div class="form-group">
 			<label>Password : </label>
 			<input type="password" class="form-control" name="password">
 		</div>
 		<div class="form-group">
 			<input type="submit" class="btm btn-sm btn-primary" name="login" value="login">
 		</div>
 	</form>
 </div>
