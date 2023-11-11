<?php
if (isset($_GET['url'])) 
{
	$url=$_GET['url'];

	switch ($url) 
	{
		case 'tulis_pengaduan':
			include 'tulis_pengaduan.php';
			break;

		case 'lihat_pengaduan':
			include 'lihat_pengaduan.php';
			break;
		case 'detail_pengaduan':
			include 'detail_pengaduan.php';
			break;
		case 'lihat_tanggapan':
			include 'lihat_tanggapan.php';
			break;
		case 'update_profile':
			include 'update_profile.php';
			break;
		case 'profile':
			include 'profile.php';
			break;
		case 'exit':
			include 'logout.php';
			break;

	}
}
else
{
	?>
	Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat yang di buat untuk melaporkan pelanggaran atau penyimpangan kejadian yang ada pada masyarakat<br><br>
	Anda Login Sebagai : <h2><b><?php echo $_SESSION['nama'];
}
?>