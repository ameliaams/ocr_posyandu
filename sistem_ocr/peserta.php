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
                                    <h2>Data Balita</h2>
                                    <div class="clearfix"></div>
                                    <a class="btn btn-app">
                                        <i class="fa fa-plus"></i> Tambah
                                    </a>
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
                                            <tr>
                                                <td>Tiger</td>
                                                <td><span class="label label-info">Laki-laki</span></td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td> <a href="edit_peserta.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett</td>
                                                <td>Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton</td>
                                                <td>Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric</td>
                                                <td>Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                            </tr>
                                            <tr>
                                                <td>Airi</td>
                                                <td>Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle</td>
                                                <td>Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod</td>
                                                <td>Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona</td>
                                                <td>Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen</td>
                                                <td>Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya</td>
                                                <td>Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                            </tr>
                                            <tr>
                                                <td>Jena</td>
                                                <td>Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn</td>
                                                <td>Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                            </tr>
                                            <tr>
                                                <td>Charde</td>
                                                <td>Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                            </tr>
                                            <tr>
                                                <td>Haley</td>
                                                <td>Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana</td>
                                                <td>Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                            </tr>
                                            <tr>
                                                <td>Michael</td>
                                                <td>Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                            </tr>
                                            <tr>
                                                <td>Paul</td>
                                                <td>Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria</td>
                                                <td>Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley</td>
                                                <td>Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                            </tr>
                                            <tr>
                                                <td>Dai</td>
                                                <td>Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette</td>
                                                <td>Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri</td>
                                                <td>Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar</td>
                                                <td>Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                            </tr>
                                            <tr>
                                                <td>Doris</td>
                                                <td>Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica</td>
                                                <td>Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin</td>
                                                <td>Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer</td>
                                                <td>Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden</td>
                                                <td>Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona</td>
                                                <td>Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                            </tr>
                                            <tr>
                                                <td>Shou</td>
                                                <td>Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle</td>
                                                <td>House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                            </tr>
                                            <tr>
                                                <td>Suki</td>
                                                <td>Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott</td>
                                                <td>Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin</td>
                                                <td>Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                            </tr>
                                            <tr>
                                                <td>Martena</td>
                                                <td>Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                            </tr>
                                            <tr>
                                                <td>Unity</td>
                                                <td>Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                            </tr>
                                            <tr>
                                                <td>Howard</td>
                                                <td>Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                            </tr>
                                            <tr>
                                                <td>Hope</td>
                                                <td>Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian</td>
                                                <td>Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy</td>
                                                <td>Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson</td>
                                                <td>Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia</td>
                                                <td>Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno</td>
                                                <td>Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura</td>
                                                <td>Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                            </tr>
                                            <tr>
                                                <td>Thor</td>
                                                <td>Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                            </tr>
                                            <tr>
                                                <td>Finn</td>
                                                <td>Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                            </tr>
                                            <tr>
                                                <td>Serge</td>
                                                <td>Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida</td>
                                                <td>Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita</td>
                                                <td>Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer</td>
                                                <td>Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                            </tr>
                                            <tr>
                                                <td>Cara</td>
                                                <td>Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione</td>
                                                <td>Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                            </tr>
                                            <tr>
                                                <td>Lael</td>
                                                <td>Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas</td>
                                                <td>Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                            </tr>
                                            <tr>
                                                <td>Shad</td>
                                                <td>Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                            </tr>
                                            <tr>
                                                <td>Michael</td>
                                                <td>Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                            </tr>
                                            <tr>
                                                <td>Donna</td>
                                                <td>Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                            </tr>
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
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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