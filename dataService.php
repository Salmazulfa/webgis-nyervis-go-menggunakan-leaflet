<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NyervisGo - Data Jasa Servis Elektronik</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper ">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item active">
                            <a href="dataService.php" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Data Jasa Service Elektronik</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="persebaran.php" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Peta Persebaran Jasa Service Elektronik</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="table-datatable.html" class='sidebar-link'>
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#info-circle-fill" />
                                </svg>
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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h4>Data Jasa Servis Elektronik</h4>
                            <p class="text-subtitle text-muted">Kota Malang</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Jasa Servis Elektronik</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Jasa Servis Elektronik</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            include "koneksi.php";

                            if (isset($_GET['method'])) {
                                $method = $_GET['method'];
                                $id = $_GET['id'];
                                if ($method == 'hapus') {
                                    mysqli_query($conn, 'DELETE FROM `nyervis_go`.`dataservis` WHERE  `id_data`=' . $id);
                                    ?>
                                    <div class="alert alert-light-success color-success alert-dismissible show fade">
                                        Data berhasil dihapus
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <a href="tambahData.php" class="btn btn-primary rounded-pill mb-3">
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#plus-circle-fill" />
                                </svg>
                                Tambah Data
                            </a>
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center" width="200px">Nama Tempat Servis</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center" width="350px">Alamat</th>
                                        <th class="text-center">Jam Buka</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from dataservis 
                                    join kategori on dataservis.kategori_id = kategori.id_kategori 
                                    join waktu on waktu.id = dataservis.waktu_id
                                    join harga on harga.id = dataservis.harga_id";
                                    $hasil = mysqli_query($conn, $sql);
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data["nama_toko"]; ?></td>
                                            <td><?= $data["kategori"]; ?></td>
                                            <td><?= $data["alamat"]; ?></td>
                                            <td><?= $data["jam_buka"]; ?></td>
                                            <td>
                                                <a href="updateData.php?id_data=<?= $data['id_data']; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-warning">
                                                    <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#eye-fill" />
                                                    </svg></a>&nbsp;
                                                <a href="?id=<?= $data["id_data"]; ?>&method=hapus" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-danger">
                                                    <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#trash-fill" />
                                                    </svg></a>&nbsp;
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by Kelompok 4</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
</body>

</html>