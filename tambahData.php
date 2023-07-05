<?php
require "koneksi.php";

if (isset($_POST['submit'])) {

    $kategori_id = $_POST['kategori_id'];
    $kec_id = $_POST['kec_id'];
    $waktu_id = $_POST['waktu_id'];
    $harga_id = $_POST['harga_id'];
    $nama_toko = $_POST['nama_toko'];
    $noHp = $_POST['noHp'];
    $alamat = $_POST['alamat'];
    $jam_buka = $_POST['jam_buka'];
    $jam_tutup = $_POST['jam_tutup'];
    $lat = $_POST['lat'];
    $long = $_POST['long'];

    if (empty($_POST["nama_toko"]) || empty($_POST["noHp"]) || empty($_POST["alamat"]) || empty($_POST["jam_buka"]) || empty($_POST["jam_tutup"]) || empty($_POST["lat"]) || empty($_POST["long"])) {
?>
        <div class="alert alert-light-danger color-danger" id="alert"> Data Tidak Tersimpan, Semua field harus diisi !!</div>
        <?php
        echo '<meta http-equiv="refresh" content="3; url=tambahData.php">';
    } else {
        $sql = "INSERT INTO `nyervis_go`.`dataservis` (`kategori_id`, `kec_id`, `waktu_id`, `harga_id`, `nama_toko`, `noHp`, `alamat`, `jam_buka`, `jam_tutup`, `lat`, `long`) VALUES ('$kategori_id', '$kec_id', '$waktu_id', '$harga_id', '$nama_toko', '$noHp', '$alamat', '$jam_buka', '$jam_tutup', '$lat', '$long')";
        $hasil = mysqli_query($conn, $sql);
        if (!$hasil) {
            echo "Gagal Update data";
            exit;
        }
        header("Location:dataService.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NyervisGo - Form Tambah Data</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

    <!-- Leaflet JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <style>
        #map {
            height: 70vh;
        }
    </style>
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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Data</h3>
                            <p class="text-subtitle text-muted">Multiple form layout you can use</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Data Jasa Service Elektronik</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <form method="POST" action="">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Nama Tempat Service</label>
                                                            <input type="text" id="nama_toko" class="form-control" name="nama_toko">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Alamat</label>
                                                            <input type="text" id="alamat" class="form-control" name="alamat">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label>Kecamatan</label>
                                                        <div class="form-group">
                                                            <select class="choices form-select" id="kec_id" name="kec_id">
                                                                <?php $sql = "select * from kecamatan";
                                                                $hasil = mysqli_query($conn, $sql);
                                                                $no = 0;
                                                                while ($data = mysqli_fetch_array($hasil)) {
                                                                    $no++; ?>
                                                                    <option value="<?php echo $data["id"]; ?>"><?php echo $data["nama_kec"]; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="contact-info-vertical">Contact Office</label>
                                                            <input type="number" id="noHp" class="form-control" name="noHp">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label>Jenis Layanan Service</label>
                                                        <div class="form-group">
                                                            <select class="choices form-select" id="kategori_id" name="kategori_id">
                                                                <?php
                                                                $sql = "select * from kategori";
                                                                $hasil = mysqli_query($conn, $sql);
                                                                $no = 0;
                                                                while ($data = mysqli_fetch_array($hasil)) {
                                                                    $no++; ?>
                                                                    <option value="<?php echo $data["id_kategori"]; ?>"><?php echo $data["kategori"]; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="contact-info-vertical">Jam Buka</label>
                                                            <input type="time" id="jam_buka" class="form-control" name="jam_buka">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="contact-info-vertical">Jam Tutup</label>
                                                            <input type="time" id="jam_tutup" class="form-control" name="jam_tutup">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label>Range Harga</label>
                                                        <div class="form-group">
                                                            <select class="choices form-select" id="harga_id" name="harga_id">
                                                                <?php
                                                                $sql = "select * from harga";
                                                                $hasil = mysqli_query($conn, $sql);
                                                                $no = 0;
                                                                while ($data = mysqli_fetch_array($hasil)) {
                                                                    $no++; ?>
                                                                    <option value="<?php echo $data["id"]; ?>">Rp. <?php echo $data["mulai"]; ?> - <?php echo $data["sampai"]; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label>Estimasi Waktu Pengerjaan</label>
                                                        <div class="form-group">
                                                            <select class="choices form-select" id="waktu_id" name="waktu_id">
                                                                <?php
                                                                $sql = "select * from waktu";
                                                                $hasil = mysqli_query($conn, $sql);
                                                                $no = 0;
                                                                while ($data = mysqli_fetch_array($hasil)) {
                                                                    $no++; ?>
                                                                    <option value="<?php echo $data["id"]; ?>"><?php echo $data["buka"]; ?> - <?php echo $data["tutup"]; ?> Minggu</option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-5">
                                                        <label class="mb-2">Lokasi Tempat Service</label>
                                                        <div class="map" id="map">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <!-- <label for="first-name-vertical">Latitude</label> -->
                                                            <input type="hidden" id="lat" class="form-control" name="lat">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <!-- <label for="first-name-vertical">Longitude</label> -->
                                                            <input type="hidden" id="long" class="form-control" name="long">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-light-secondary me-1 mb-1" onclick="window.location='dataService.php'">Kembali</button>
                                                        <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by Kelompok 4</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <!-- <script>
      window.setTimeout(function() {
          $("#alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove(); 
      });
      }, 1200);
    </script> -->

    <script>
        getLocation();

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            let lat = position.coords.latitude;
            let long = position.coords.longitude;

            var map = L.map('map', {
                center: [lat, long],
                zoom: 15
            });

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {
                foo: 'bar',
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // get coordinate location
            var latInput = document.querySelector("[name=lat]");
            var lngInput = document.querySelector("[name=long]");

            var curLocation = [lat, long];

            map.attributionControl.setPrefix(false);

            var marker = new L.marker(curLocation, {
                draggable: 'true',
            });

            marker.on('dragend', function(event) {
                var position = marker.getLatLng();
                marker.setLatLng(position, {
                    draggable: 'true',
                }).bindPopup(position).update();
                // $("#lat").val(position.lat);
                // $("#long").val(position.lng);
                var lat1 = document.getElementById('lat');
                var long1 = document.getElementById('long');

                lat1.value = position.lat;
                long1.value = position.lng;
            });

            map.addLayer(marker);
        }
    </script>
</body>

</html>