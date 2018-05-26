<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">ABSENSI AKADEMIK</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="data_siswa.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Data Siswa</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="data_guru.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Data Guru</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="data_kelas.php">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Data Kelas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="data_mata_pelajaran.php">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Data Mata Pelajaran</span>
          </a>
        </li>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Edit Data Siswa</div>
        </div>
        <div class="container">
            <div class="container">
    <h3>EDIT DATA SISWA</h3>
    <hr>
      <br>
      <?php
          include "../include/koneksi.php";
          $id_siswa = $_GET['edit'];

          $sql = mysqli_query($conn, "SELECT * FROM siswa WHERE nis='".$id_siswa."'");
          while ($hasil = mysqli_fetch_array($sql)) {
       ?>
  <form action="proses-edit-siswa.php" method="POST" >
    <div class="row">
        <div class="col-md-4">
          <div class="form-group">
          <label>NIS Siswa</label>
          <input type="text" class="form-control" name="nis" placeholder="NIS Siswa"  value="<?php echo $hasil['nis']; ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nama Siswa</label>
          <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" value="<?php echo $hasil['nama']; ?>" >
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $hasil['jk']; ?>" >
        </div>
        <div class="form-group">
          <label>Agama</label>
          <input type="text" class="form-control" name="agama" placeholder="Agama" value="<?php echo $hasil['agama']; ?>" >
        </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" rows="4" class="form-control" ><?php echo $hasil['alamat']; ?></textarea>
        </div>
          <div class="form-group">
          <label>Nomer Handphone</label>
          <input type="text" class="form-control" name="no_hp" placeholder="Nomer Handphone" value="<?php echo $hasil['no_hp']; ?>" >
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $hasil['username']; ?>" >
        </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="password" value="<?php echo $hasil['password']; ?>" >
          </div>

          <div class="form-group">
            <label>Kelas</label>
            <select class="form-control" name="kelas" >
              <?php
                  include "../include/koneksi.php";

                  $sql = mysqli_query($conn, "SELECT * FROM kelas ORDER BY nama_kelas");
                  while ($hasil = mysqli_fetch_array($sql)) {
               ?>
              <option value="<?php echo $hasil['id_kelas']; ?>"><?php echo $hasil['nama_kelas']; ?></option>
            <?php } ?>
            </select>
          </div>

          <br>
          <input type="submit" name="submit" value="Simpan" class="btn btn-success">
          <a href="data_siswa.php"><input type="button" class="btn btn-default" value="Batal" ></a>
        </div>
        </div>
    </div>
      </form>
    <?php } ?>
      <br>
</div>
        </div>
      </div>
    </div>
  </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
