<?php
include "../sistem_ocr/connection.php";
$id_balita = $_GET['id_balita'];

// Ambil nama balita dari database berdasarkan id_balita
$query_nama_balita = "SELECT nama_balita FROM balita WHERE id_balita = $id_balita";
$result_nama_balita = mysqli_query($conn, $query_nama_balita);
$row_nama_balita = mysqli_fetch_assoc($result_nama_balita);
$nama_balita = $row_nama_balita['nama_balita'];

if (isset($_POST['submit'])) {
    $id_balita = $_POST['id_balita'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $lingkar_kepala = $_POST['lingkar_kepala'];

    $result = mysqli_query($conn, "INSERT INTO pengukuran (id_balita, berat_badan, tinggi_badan, lingkar_kepala)
                                    VALUES ('$id_balita', '$berat_badan', '$tinggi_badan', '$lingkar_kepala')");

    if ($result) {
        header("Location: pengukuran.php?msg=Data berhasil ditambahkan!");
        exit();
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIP - Data Pengukuran</title>

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Sistem Informasi Posyandu</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Selamat Datang,</span>
                            <h2>Admin</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="index.php"><i class="fa fa-home"></i> Beranda </a></li>
                                <li><a href="peserta.php"><i class="fa fa-users"></i> Data Balita </a></li>
                                <li><a href="pengukuran.php"><i class="fa fa-folder"></i> Data Pengukuran </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- Top navigation content -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">Admin
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- ... -->

            <!-- Page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Edit Data Pengukuran</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data Pengukuran</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <!-- Form for data pengukuran -->
                                    <form id="demo-form2" method="post" action="" data-parsley-validate class="form-horizontal form-label-left">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Balita</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12" name="nama_balita" value="<?php echo $nama_balita; ?>" disabled>
                                                <!-- Tambahkan input hidden untuk menyimpan nilai id_balita -->
                                                <input type="hidden" name="id_balita" value="<?php echo $id_balita; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan (kg):</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="berat_badan" name="berat_badan" required>
                                            </div>
                                            <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan (cm):</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
                                            </div>
                                            <label for="lingkar_kepala" class="col-sm-2 col-form-label">Lingkar Kepala (cm):</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="lingkar_kepala" name="lingkar_kepala" required>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="peserta.php" class="btn btn-primary" type="button">Batal</a>
                                                <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End form for data pengukuran -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page content -->

            <!-- Footer content -->
            <!-- ... -->

        </div>
    </div>

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- NProgress -->
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>
</body>

</html>