          <div class="card shadow mb-4">
            <div class="card-header py-3">
              Data Pengaduan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th style="text-align: center;">Tanggal</th>
                      <th style="text-align: center;">Nik</th>
                      <th style="text-align: center;">Isi Laporan</th>
                      <th style="text-align: center;">Foto</th>
                      <th style="text-align: center;">Status</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr> 
                  </thead>
                <?php
                require 'koneksi.php';
                $no=1;
                $sql=$mysqli->query("select * from pengaduan where nik='$_SESSION[nik]' ");
                while ($data=mysqli_fetch_array($sql)) {
                  # code...
                 ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $data['id_pengaduan'];?></td>
                      <td><?php echo $data['tgl_pengaduan'];?></td>
                      <td><?php echo $data['nik'];?></td>
                      <td><?php echo $data['isi_laporan'];?></td>
                      <td><img src="img/<?php echo $data['foto']; ?> " width="80"></td>
                      <td style="text-align:center; font-size:small;">
                        <?php if ($data['status']=="0"){ ?>
                        <div class="status-0" style="font-size:inherit; background-color: red;  color:white; border-radius: 25px;">Belum di Tanggapi</div>
                        <?php } else if ($data['status']=="proses"){ ?>
                        <div class="status-1" style="font-size:inherit; background-color: orange;  color:white; border-radius: 25px;">Dalam Proses</div>
                        <?php } else { ?>
                        <div class="status-2" style="font-size:inherit; background-color: green; color:white; border-radius: 25px;">Selesai</div>
                      <?php } ?>
                      </td>
                      <td> 


                     <a href="?url=detail_pengaduan&id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info"></i>
                    </span>
                    <span class="text">Detail</span>
                  </a>





                    <a href="?url=lihat_tanggapan&id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-eye"></i>
                    </span>
                    <span class="text">Lihat Tanggapan</span>
                  </a>




                </td>
                       </tr>
                  
                <?php } ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- End of Footer -->