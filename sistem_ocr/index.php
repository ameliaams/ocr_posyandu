<?php
require '../sistem_ocr/connection.php';
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
    <!-- iCheck -->
    <link href="assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Data Balita </h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>Data Balita</h2>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="peserta_add.php" type="button" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Tambah</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nama Balita</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Umur (Bulan)</th>
                                                <th>Nama Orang Tua</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $rows = mysqli_query($conn, "SELECT * FROM balita ORDER BY umur DESC");

                                            foreach ($rows as $row) :
                                            ?>
                                                <tr>
                                                    <td><a href="../sistem_ocr/pengukuran_add.php?id_balita=<?php echo $row["id_balita"]; ?>" class="myLink"><?php echo $row["nama_balita"]; ?></a></td>
                                                    <td><span class="label label-primary"><?php echo $row["jenis_kelamin"]; ?></span></td>
                                                    <td><?php echo $row["tgl_lahir"]; ?></td>
                                                    <td><?php echo $row["umur"]; ?></td>
                                                    <td><?php echo $row["nama_ortu"]; ?></td>
                                                    <td> <a href="../sistem_ocr/peserta_edit.php?id_balita=<?php echo $row["id_balita"]; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                        <a href="../sistem_ocr/peserta_delete.php?id_balita=<?php echo $row["id_balita"]; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>


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

    <script>
        document.querySelectorAll('.myLink').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: "Input data melalui?",
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: "Input dengan kamera",
                    denyButtonText: "Input manual",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Setelah memilih input dengan kamera, tampilkan modal baru untuk memilih jenis data
                        Swal.fire({
                            title: 'Pilih Jenis Data',
                            showDenyButton: true,
                            showCancelButton: true,
                            confirmButtonText: 'Berat Badan',
                            denyButtonText: 'Tinggi Badan',
                            cancelButtonText: 'Batal',
                        }).then((innerResult) => {
                            if (innerResult.isConfirmed) {
                                window.location.href = "kamera.php?type=berat";
                            } else if (innerResult.isDenied) {
                                window.location.href = "kamera.php?type=tinggi";
                            }
                        });
                    } else if (result.isDenied) {
                        window.location.href = "pengukuran_add.php";
                        window.location.href = event.target.href;
                    }
                });
            });
        });
    </script>


    <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>

</body>

</html>