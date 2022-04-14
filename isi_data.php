<?php
session_start();
if(empty($_SESSION['nik'])){ ?>
      <script type="text/javascript">
            alert('Silahkan Login Terlebih Dahulu.');
            window.location.assign('index.php');
        </script>
<?php } ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Peduli Diri - Isi Data</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="img/LOGO CAPER 2.png"  type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3" style="min-height: 100vh; background-color:#417cd3">
            <nav class="navbar ">
                <a href="user.php" class="navbar-brand mx-3 mb-3">
                    <h3 class="text-white"><img src="img/LOGO CAPER 2.png" width="40%" >Peduli Diri</h3>
                </a>
                <div class="d-flex align-items-center ms-3 mb-4">
                    <div class="ms-3">
                        <h5 class="text-white">Selamat Datang</h5>
                        <h6 class="mb-0 text-center text-white"><?php echo  $_SESSION['nama_lengkap']; ?></h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="catatan_anda.php" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Catatan Anda</a>
                    <a href="isi_data.php" class="nav-item nav-link text-primary"><i class="fa fa-edit me-2"></i>Isi Data</a>
                    <a href="logout.php" class="nav-item nav-link text-warning"><i class="fa fa-power-off me-2"></i>Logout</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content" style="background-color:#96ccef">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                    
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                   
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                <div class="card col-6">
                        <div class="card-header"> 
                            <h5 class="text-center">Isi Data dengan Lengkap</h5>
                        </div>
                        <div class="card-body" > 
                        <form action="simpan_catatan.php" method="post">
                            <div class="form-group mb-2 ">
                                <label>Pilih Tanggal</label>
                                <input name="tanggal" type="date" required class="form-control" placeholder="Masukan Tanggal">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <label>Pilih Jam</label>
                                <input name="jam" type="time" required class="form-control" placeholder="Masukan Jam">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <label>Pilih Lokasi</label>
                                <input name="lokasi" type="text" required class="form-control" placeholder="Masukan Lokasi">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <label>Suhu Tubuh</label>
                                <input name="suhu" type="number" required class="form-control" placeholder="Masukan Suhu Tubuh">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <button type="submit" class="btn btn-primary"> SIMPAN </button>
                                <button type="reset" class="btn btn-warning"> HAPUS </button>
                                
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

