<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, dll. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIP - Ambil Gambar </title>

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="assets/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">

    <style>
        .video-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #video {
            width: 50%;
            height: auto;
        }

        #captureButton,
        #retryButton {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .form-container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            width: 100%;
            max-width: 500px;
        }

        .form-group button {
            margin-right: 10px;
        }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-stethoscope"></i> <span>SIPosyandu</span></a>
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
                            <h3>Ambil Gambar </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="video-container">
                                        <video id="video" autoplay></video>
                                        <button id="captureButton">Ambil Gambar</button>
                                        <button id="retryButton" style="display: none;">Ulangi</button>
                                    </div>

                                    <div class="form-container">
                                        <div class="form-group">
                                            <label for="ocrResult" class="control-label">Hasil OCR</label>
                                            <input type="text" id="ocrResult" class="form-control" placeholder="Hasil" disabled>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            <a href="index.php" class="btn btn-danger">Batal</a>
                                        </div>
                                    </div>

                                    <script>
                                        var video = document.getElementById("video");
                                        var captureButton = document.getElementById("captureButton");
                                        var retryButton = document.getElementById("retryButton");
                                        var stream;

                                        // Mengakses video dari kamera belakang
                                        function startCamera() {
                                            navigator.mediaDevices
                                                .getUserMedia({
                                                    video: {
                                                        facingMode: "environment"
                                                    }
                                                })
                                                .then(function(s) {
                                                    stream = s;
                                                    video.srcObject = stream;
                                                    video.play();
                                                })
                                                .catch(function(err) {
                                                    console.error("Error accessing the camera: ", err);
                                                });
                                        }

                                        captureButton.addEventListener("click", function() {
                                            var canvas = document.createElement("canvas");
                                            var context = canvas.getContext("2d");
                                            canvas.width = video.videoWidth;
                                            canvas.height = video.videoHeight;
                                            context.drawImage(video, 0, 0, canvas.width, canvas.height);

                                            // Menampilkan gambar di bawah video
                                            var image = new Image();
                                            image.src = canvas.toDataURL("image/png");
                                            document.body.appendChild(image);

                                            // Hentikan video dan tampilkan tombol ulangi
                                            video.pause();
                                            stream.getTracks().forEach(track => track.stop());
                                            captureButton.style.display = "none";
                                            retryButton.style.display = "block";
                                        });

                                        retryButton.addEventListener("click", function() {
                                            // Mulai ulang kamera
                                            startCamera();

                                            // Sembunyikan tombol ulangi dan tampilkan tombol capture
                                            retryButton.style.display = "none";
                                            captureButton.style.display = "block";

                                            // Hapus gambar yang diambil
                                            var images = document.querySelectorAll('body > img');
                                            images.forEach(image => image.remove());
                                        });

                                        // Mulai kamera saat halaman dimuat
                                        startCamera();
                                    </script>
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
    <!-- FastClick -->
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- Dropzone.js -->
    <script src="assets/vendors/dropzone/dist/min/dropzone.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>
</body>

</html>