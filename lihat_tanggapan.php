
<div class="card shadow">
  <div class="card-header">
    Detail Tanggapan
  </div>
   <?php
     require 'koneksi.php';
     $sql=$mysqli->query("select * from tanggapan,pengaduan where tanggapan.id_pengaduan='$_GET[id]'and tanggapan.id_pengaduan=pengaduan.id_pengaduan ");
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
        <input type="text" name="tgl_pengaduan" value="<?php echo @$data['tgl_pengaduan']; ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>Tulis Laporan</label>
        <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo @$data['isi_laporan']; ?></textarea>
      </div>

      <div class="form-group cols-sm-6">
        <label>Balasan Tanggapan</label>
        <textarea class="form-control" rows="7" name="tanggapan" readonly=""><?php echo @$data['tanggapan']; ?></textarea>
      </div>
    <?php 
      }
      ?>

    </form>
  </div>
</div>
