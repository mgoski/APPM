<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Create New Account</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon/logo.png">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                 <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><img src="img/Pengaduan.png" height="80" width="80"></h1> <h2>Registrasi Akun</h2><br>
                  </div>
                  <form class="user" method="post" action="simpan_masyarakat.php">
                    <div class="form-group">
                      <input type="text" name="nik" class="form-control form-control-user" placeholder="Masukan NIK" maxlength="16" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control form-control-user" placeholder="Masukan Nama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Masukan Username" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Masukan password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                     <input type="text" name="telp" class="form-control form-control-user" placeholder="Masukan No Telepon" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>

                    <div class="form-group">

                    </div>
         <button type="button" class="btn btn-info btn-user btn-block" data-toggle="modal" data-target="#exampleModal">Simpan</button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
          <div class="modal-header" style="background-color: #00BFFF;">
              <h5 class="modal-title w-100 text-center" id="exampleModalLabel" ><b style="color: white;">Create New Account</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">Pastikan <b>NIK</b> atau <b>NAMA</b> Belum Terdaftar!<br>Jika Sudah Yakin Silahkan Klik <b>Oke</b></div>
          <div class="modal-footer">
          <button type="submit" class="glyphicon glyphicon-floppy-saved btn btn-success">Oke</button>
        </div>
     </div>
  </div>
</div>
                    <hr>
                  </form>
                  <div class="text-center">
                    Sudah Punya Akun?<br>
                    <a class="small" href="login.php">Silahkan Login!</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
