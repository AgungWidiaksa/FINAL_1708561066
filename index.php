<!--Nama    = I Gusti Ngurah Agung Widiaksa Putra
	NIM     = 1708561066
	Jurusan =  Informatika C--!-->
<?php 
	$conn = mysqli_connect("localhost","root","","praktikum") or die(mysqli_error());
	if(isset($_POST["submit"]))
    {
        $email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
		$login =  mysqli_query($conn, $query); 
		$row = mysqli_fetch_array($login);
		$cek = mysqli_num_rows($login);
		if($cek > 0){
			session_start();
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['jenis_user'] = $row['jenis'];
			$_SESSION['status'] = "login";
			echo"<script>alert('Login Success'); document.location='menu.php';</script>";
		}
		else
		{
			echo"<script>alert('Login Gagal'); document.location='index.php';</script>";	
		}
	}?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login - Universitas Udayana</title>
		<link rel="stylesheet" href="css.css">
	</head>
	<body>
		<div class="log">
			<div class="head"><h2 align="center">Selamat Datang di Website <br>Universitas Udayana</h2></div>
			<img src="gambar/logo.png" alt="Logo Universitas Udayana"><br>	
			<div class="tab">
				<table border="0" align="center">
					<form action="" method="POST">
					<tr>
						<td>E-mail &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </td>
						<td><input type="text" name="email" required></td>
					</tr>
					<tr>
						<td>Password &nbsp: </td>
						<td><input type="password" name="password" required id="tombol"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" value="Login" name="submit"></td>
					</tr>
					</form>
				</table>
			</div>
			<label></label>
		</div>
			<div style="margin-top: 3%; background-color: #4183D7; color: white; text-align: center; padding: 15px;">mahasiswa -> email = widiaksa@gmail.com, password = user || admin -> email = admin@gmail.com, password = admin || dosen -> widiaksasuputra.WIP@gmail.com, password = sarasvati</div>
		</div>
	</body>
</html>