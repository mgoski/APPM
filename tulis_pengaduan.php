<div class="card shadow">
  <div class="card-header">
    Tulis Pengaduan 
  </div>
  <div class="card-body">
    <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label>Tanggal Pengaduan</label>
        <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>NIK</label>
        <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Tulis Laporan</label>
        <textarea class="form-control" rows="7" name="isi_laporan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
      </div>
      <div class="form-group cols-sm-6">
        <label>Unggah Foto</label>
        <input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png, .gif"><font color="red">"tipe yang bisa di upload adalah : .jpg, .jpeg, .png, .gif</font>
      </div>

      <div class="form-group col-sm-6">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Simpan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #00BFFF;">
        <h5 class="modal-title w-100 text-center" id="exampleModalLabel" ><b style="color: white;">Pesan !</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hi <b><?php echo $_SESSION['nama']?></b>  Apakah data yang di input sudah benar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
        <button type="submit" class="glyphicon glyphicon-floppy-saved btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>
        <input type="reset" value="Kosongkan" class="btn btn-info">
      </div>
    </form>
  </div>
</div>
 