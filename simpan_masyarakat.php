<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

$sql=mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM masyarakat WHERE nik='$nik' or nama='$nama'"));
if($sql > 0){
    echo "<script>window.alert('Maaf NIK atau NAMA yang anda masukkan sudah terdaftar')
    window.location='login.php'</script>";
    }else {
    mysqli_query($mysqli,"INSERT INTO masyarakat(nik,nama,username,password,telp)
    VALUES ('$nik','$nama','$username','$password','$telp')");

    echo "<script>window.alert('Silahkan Login!')
    window.location='login.php'</script>";
 }
 ?>