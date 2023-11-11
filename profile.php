<div class="card shadow">
  <div class="card-header">
    <h4>Edit Profile</h4>
  </div>
  <div class="card-body">

    <?php
    require 'koneksi.php';
    $sql=$mysqli->query("select * from masyarakat where nik='$_SESSION[nik]'");
    if($data=mysqli_fetch_array($sql))
    {
      ?>
    
    <form action="?url=update_profile&id=<?php echo $data['nik']; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label>NIK</label>
        <input type="text" name="nik" value="<?php echo $data['nik']; ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
        <label>Password</label>
        <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control" >
      </div>
      <div class="form-group cols-sm-6">
        <label>Telepon</label>
        <input type="text" name="telp" value="<?php echo $data['telp']; ?>" class="form-control">
      </div>
   

      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Simpan</button>
      <button type="reset" class="btn btn-danger">Reset</button>
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
        Hi <b><?php echo $_SESSION['nama']?></b>  anda yakin merubah data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
        <button type="submit" class="glyphicon glyphicon-floppy-saved btn btn-success">Simpan</button>
      </div>
    </div>

    </form>
  <?php } ?>
  </div>
</div> 
