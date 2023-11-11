
<div class="card shadow">
  <div class="card-header"> 
    Detail Pengaduan
  </div>
   <?php
     require 'koneksi.php';
     $sql=$mysqli->query("select * from pengaduan where id_pengaduan='$_GET[id]' ");
     $data=mysqli_fetch_array($sql);
    if ($sql) 
    {
   ?>
  <div class="card-body">
  <div class="form-group cols-sm-6">
  <a href="?url=lihat_pengaduan" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
    <i class="fas fa-arrow-left"></i>
  </span>
  <span class="text">Kembali
  </span></a>
</div>

  <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label>Tanggal Pengaduan</label>
        <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>NIK</label>
        <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>Tulis Laporan</label>
        <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo $data['isi_laporan']; ?></textarea>
      </div>

      <div class="form-group cols-sm-6">
        <label>Bukti Foto</label>
        <div> <img src="img/<?php echo $data['foto']; ?> " width=device-width></div>
      </div>
    <?php } ?>

    </form>
  </div>
</div>
