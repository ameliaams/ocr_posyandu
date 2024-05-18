<?php
include "../sistem_ocr/connection.php";
$id_pengukuran = $_GET["id_pengukuran"];

// echo "</pre>" . print_r($_POST);
// exit;

if (isset($_POST["update"])) {
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $lingkar_kepala = $_POST['lingkar_kepala'];

    $sql = "UPDATE `pengukuran` SET `berat_badan`='$berat_badan',`tinggi_badan`='$tinggi_badan',`lingkar_kepala`='$lingkar_kepala' WHERE id_pengukuran = $id_pengukuran";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: pengukuran.php?msg=Data updated successfully");
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

    <title>SIP - Data Balita</title>

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
                        <a href="index.php" class="site_title"><i class="fa fa-stethoscope"></i> <span>SIPosyandu</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="index.php"><i class="fa fa-users"></i> Data Balita </a></li>
                                <li><a href="pengukuran.php"><i class="fa fa-folder"></i> Data Pengukuran </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="assets/img/download.png" alt="">User
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <?php
            $sql = "SELECT b.nama_balita, p.berat_badan, p.tinggi_badan, p.lingkar_kepala FROM `balita` b JOIN `pengukuran` p ON b.id_balita = p.id_balita WHERE p.id_pengukuran = $id_pengukuran";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

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
                                    <form id="demo-form2" method="post" action="" data-parsley-validate class="form-horizontal form-label-left">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Balita
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12" name="nama_balita" value="<?php echo $row['nama_balita']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan (kg):</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?php echo $row['berat_badan']; ?>" required>
                                            </div>
                                            <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan (cm):</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?php echo $row['tinggi_badan']; ?>" required>
                                            </div>
                                            <label for="tinggi_badan" class="col-sm-2 col-form-label">Lingkar Kepala (cm):</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="lingkar_kepala" name="lingkar_kepala" value="<?php echo $row['lingkar_kepala']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="pengukuran.php" class="btn btn-primary" type="button">Batal</a>
                                                <button type="submit" class="btn btn-success" name="update">Ubah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Sistem Informasi Posyandu - Penerapan OCR
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

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