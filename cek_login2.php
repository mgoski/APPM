<?php 
include 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=$mysqli -> query("select * from petugas where username='$user' and password='$pass' ");
$cek=mysqli_num_rows($sql);

	if ($cek>0) //jika ketemu
 	{
		$data=mysqli_fetch_array($sql);
		if ($data['level']=="admin") 
		{
		session_start();
		$_SESSION['id_petugas']=$data['id_petugas'];
		$_SESSION['user']=$user;
		$_SESSION['nama']=$data['nama_petugas'];
		$_SESSION['level']=$data['level'];

		echo "<script>alert('Selamat Datang  $_SESSION[nama]. ');document.location.href='admin/index.php'</script>";
		}
		else if ($data['level']=="petugas")
		{
		session_start();
		$_SESSION['user']=$user;
		$_SESSION['nama']=$data['nama_petugas'];
		$_SESSION['level']=$data['level'];

		echo "<script>alert('Selamat Datang  $_SESSION[nama]. ');document.location.href='petugas/index.php'</script>";
		}

	}
	else
	{
		?>
		<script type="text/javascript">
			alert ('Username Atau Password tidak ditemukan');
			window.location="login_admin.php";
		</script>
<?php
}
?>