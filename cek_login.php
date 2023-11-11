<?php 
include 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=$mysqli -> query("select * from masyarakat where username='$user' and password='$pass' ");
$cek=mysqli_num_rows($sql);

	if ($cek>0)
 	{
		$data=mysqli_fetch_array($sql);
		session_start();
		$_SESSION['nama']=$user;
		$_SESSION['nik']=$data['nik'];
		echo "<script>alert('Selamat Datang  $_SESSION[nama]. ');document.location.href='dashboard.php'</script>";
	}
	else
	{
		?>
		<script type="text/javascript">
			alert ('Username Atau Password tidak ditemukan');
			window.location="login.php";
		</script>
<?php
	}

?> 