<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengaduan Masyarakat</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon/logo.png">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/status.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: right;">
                <a class="btn btn-danger " style="color:white;" href="login.php" onClick="alert('Gass Login!!')"><i class="bi bi-key"><!--<img src="assets/logo.png" width="25px"></img>--> Laporan Saya</a></i></h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal & User</th>
                       <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th style="text-align:center;">Aksi</th>
                    </tr>
                  </thead>
                <?php
                require 'koneksi.php';
                $no=1;
                $sql=$mysqli->query("select p.*, m.nama from pengaduan p join masyarakat m on p.nik= m.nik
                  ");
                while ($data= mysqli_fetch_array($sql)) {
                 ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $data['tgl_pengaduan'];?><br><?php echo $data['nama'];?></td>
                      <td><?php echo $data['isi_laporan'];?></td>
                      <td><img src="img/<?php echo $data['foto']; ?> " width="80"></td>
                      <td style="text-align:center; font-size:small;">
                        <?php if ($data['status']=="0"){ ?>
                        <div class="status-0" style="font-size:inherit;">Belum di Tanggapi</div>
                        <?php } else if ($data['status']=="proses"){ ?>
                        <div class="status-1" style="font-size:inherit;">Dalam Proses</div>
                        <?php } else { ?>
                        <div class="status-2" style="font-size:inherit;">Selesai</div>
                      <?php } ?>
                      </td>
                      <td>
                        <center>
                      <a onClick="alert('Anda Belum Login,Silahkan Klik Laporan Saya untuk Login!')" style="color:white;" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50" style="color:white;">
                      <i class="fas fa-info" style="color:white;"></i>
                    </span>
                    <span class="text" style="color:white;">Detail</span>
                  </a>
                    <a onClick="alert('Anda Belum Login,Silahkan Klik Laporan Saya untuk Login!')" style="color:white;" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50" style="color:white;">
                      <i class="fas fa-eye" style="color:white;"></i>
                    </span>
                    <span class="text" style="color:white;">Lihat Tanggapan</span>
                  </a></center>
                </td>
                       </tr>
                  
                  </tbody>
                <?php
                  } 
                ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center" style="color:black; font-style:italic; font-family: monospace;">
            <span>Angelina Aulia Wahyudin &copy; 2023</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
