<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - NyervisGo</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/bootstrap.css" />

  <link rel="stylesheet" href="assets/vendors/iconly/bold.css" />

  <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css" />
  <link rel="stylesheet" href="assets/css/app.css" />
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
</head>

<body>
  <div id="app">
    <div id="sidebar" class="active">
      <div class="sidebar-wrapper active">
        <div class="sidebar-header">
          <div class="d-flex justify-content-between">
            <div class="logo">
              <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset="" /></a>
            </div>
            <div class="toggler">
              <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item active">
              <a href="index.php" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="dataService.php" class="sidebar-link">
                <i class="bi bi-stack"></i>
                <span>Data Jasa Service Elektronik</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="persebaran.php" class="sidebar-link">
                <i class="bi bi-map-fill"></i>
                <span>Peta Persebaran Jasa Service Elektronik</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="table-datatable.html" class="sidebar-link">
                <i class="bi bi-stack"></i>
                <span>About</span>
              </a>
            </li>
          </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>
    </div>

    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <div class="page-heading">
        <h3>Kecamatan</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-12">
            <div class="row">
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon purple">
                          <i class="iconly-boldShow"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Lowokwaru</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where kec_id=1";
                        $hasil = mysqli_query($conn, $sql);
                        $kec_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $kec_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon blue">
                          <i class="iconly-boldProfile"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Klojen</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where kec_id=2";
                        $hasil = mysqli_query($conn, $sql);
                        $kec_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $kec_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon green">
                          <i class="iconly-boldAdd-User"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Sukun</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where kec_id=3";
                        $hasil = mysqli_query($conn, $sql);
                        $kec_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $kec_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon red">
                          <i class="iconly-boldBookmark"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Kedungkandang</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where kec_id=4";
                        $hasil = mysqli_query($conn, $sql);
                        $kec_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $kec_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
      <div class="page-heading">
        <h3>Range Harga</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-12">
            <div class="row">
              <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                  <div class="card-body px-4 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon purple">
                          <i class="iconly-boldShow"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Rp. 50.000 - 800.000</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where harga_id=1";
                        $hasil = mysqli_query($conn, $sql);
                        $harga_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $harga_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon blue">
                          <i class="iconly-boldProfile"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Rp. 800.000 - 2.000.000</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where harga_id=3";
                        $hasil = mysqli_query($conn, $sql);
                        $harga_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $harga_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon green">
                          <i class="iconly-boldAdd-User"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Rp. 2.000.000 - 3.000.000</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where harga_id=4";
                        $hasil = mysqli_query($conn, $sql);
                        $harga_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $harga_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="page-heading">
        <h3>Estimasi Waktu Pengerjaan</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-12">
            <div class="row">
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon purple">
                          <i class="iconly-boldShow"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">0 - 1 Minggu</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where waktu_id=1";
                        $hasil = mysqli_query($conn, $sql);
                        $waktu_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $waktu_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon blue">
                          <i class="iconly-boldProfile"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                      <h6 class="text-muted font-semibold">1 - 2 Minggu</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where waktu_id=2";
                        $hasil = mysqli_query($conn, $sql);
                        $waktu_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $waktu_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon green">
                          <i class="iconly-boldAdd-User"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                      <h6 class="text-muted font-semibold">2 - 3 Minggu</h6>
                        <?php
                        include "koneksi.php";

                        $sql = "select * from dataservis where waktu_id=2";
                        $hasil = mysqli_query($conn, $sql);
                        $waktu_id = mysqli_num_rows($hasil);
                        ?>
                        <h6 class="font-extrabold mb-0"><?= $waktu_id ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <footer>
        <div class="footer clearfix mb-0 text-muted">
          <div class="float-start">
            <p>2021 &copy; NyervisGo</p>
          </div>
          <div class="float-end">
            <p>
              Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by Kelompok 4</a>
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendors/apexcharts/apexcharts.js"></script>
  <script src="assets/js/pages/dashboard.js"></script>

  <script src="assets/js/main.js"></script>
</body>

</html>