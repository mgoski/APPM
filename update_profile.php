<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$pass=$_POST['password'];
$telp=$_POST['telp'];


$sql=$mysqli->query("update masyarakat set password='$pass', telp='$telp' where nik='$nik' ");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Diubah');
		window.location='?url=profile';
	</script>
	<?php
}
?>