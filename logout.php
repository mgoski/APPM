<?php
error_reporting(0);
session_start();
session_destroy();
echo "<script>alert('Selamat $_SESSION[nama] Berhasil Logout. Silahkan Login Kembali!');document.location.href='login.php'</script>";
?>