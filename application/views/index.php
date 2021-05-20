<!DOCTYPE html>
<html lang="id">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $frontend_aplikasi; ?> | <?= $deskripsi_aplikasi; ?></title>
    
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/frontend/theme/material/img/icon.png">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel='stylesheet' type="text/css" href='https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700,300'>

    <!-- assets/frontend/theme/material -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/bootstrap-material-design/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/bootstrap-material-design/css/ripples.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-countdown/css/jquery.countdown.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-marquee/css/jquery.marquee.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-easypiechart/css/jquery.easy-pie-chart.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-event-calendar/css/eventCalendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-event-calendar/css/eventCalendar_theme_responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-event-calendar/css/eventCalendar_theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/theme/material/libs/lightbox/css/lightbox.min.css">

    <!-- Custom style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/theme/material/css/social-share-kit.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/theme/material/css/icomoon/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/theme/material/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/theme/material/css/blog.css">

</head>
<body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-fixed-top navbar-custom navbar-success" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/" class="animate">Beranda</a></li>
                <li ><a href="/berita" class="animate">Berita</a></li>
                <li ><a href="/progres" class="animate">Progres Data Akta</a></li>
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle animate " data-toggle="dropdown">Data Pokok <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/pencarian" class="animate">Pencarian</a></li>
                    </ul>
                </li> -->

                <li ><a href="/unduhan" class="animate">Unduhan</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle animate " data-toggle="dropdown">Bantuan <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/laman/faq" class="animate">FAQ</a></li>
                        <li><a href="/laman/tentang" class="animate">Tentang</a></li>
                    </ul>
                </li>
            </ul>
            <!-- <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle animate " data-toggle="dropdown">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="http://data.dikdasmen.kemdikbud.go.id/acc/login" class="animate">Manajemen</a></li>
                        <li><a href="http://data.dikdasmen.kemdikbud.go.id/usr/in/ops" class="animate">Operator Sekolah</a></li>
                    </ul>
                </li>
            </ul> -->
        </div>
    </div>
</nav>
<!-- END NAVIGATION -->
<!-- HEADER -->
<div class="header">
    <div class="container">
        <div class="header-logo">
            <a href="/"><img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/logo.png" alt="" class="img-responsive"></a>
        </div>
        <div class="header-text" style="color:white">
            <h1>Dinas Kependudukan dan Catatan Sipil</h1>
            <p class="lead"><h2>Kabupaten Tanah Laut</h2></p>
            <!-- <p class="lead"> Kementerian Pendidikan dan Kebudayaan </p> -->
        </div>
    </div>
</div>
<!-- END HEADER -->
<!-- CONTENT -->
<div class="container isi">
    <div class="card">
        <div class="card-body card-padding-sm">
            <ul id="marquee" class="marquee">
                <li>
                    <span class='fa fa-bullhorn'></span> Selamat Datang di Website Dinas Kependudukan dan Catatan Sipil Kabupaten Tanah Laut
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
<!--         <div class="col-md-12">
            <div class="card">
                <div class="card-body card-padding-sm">
                    <h3 class="text-center" style="margin-top: 0;">Data<br>
                        <small style="font-size: 17px; line-height: 2.0;">Tanggal <strong>30 Nopember 2016 Pkl 23:59 </strong></small>
                    </h3>
                    <h4 id="countdownPMP"></h4>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-md-12">
            <ol class="breadcumb" style="margin-bottom:20px">
                <li>
                    <a href="/">
                        <span itemprop="name"><i class="fa fa-home"></i>Beranda</span>
                    </a>
                </li>
                <li class="active"></li>
            </ol>
        </div> -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="alert alert-success text-center">
                        <a href="http://data.dikdasmen.kemdikbud.go.id/" target="_blank"
                        class="alert-link text-15"><img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/icon/bar-chart.png" alt=""
                        class="img-responsive " width="50%"></a>
                        <a href="http://dapo.dikdas.kemdikbud.go.id/acc/login" target="_blank"
                        class="alert-link text-15"><strong>Manajemen <br> Dapodik</strong></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="alert alert-warning text-center">
                        <a href="http://bos.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><img
                            src="<?php echo base_url(); ?>assets/frontend/theme/material/img/icon/user.png" alt="" class="img-responsive"
                            width="50%"></a>
                            <a href="http://bos.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><strong>Info
                                <br>
                                BOS</strong></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="alert alert-success text-center">
                                <a href="http://pmp.dikdasmen.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><img
                                    src="<?php echo base_url(); ?>assets/frontend/theme/material/img/icon/document.png" alt="" class="img-responsive"
                                    width="50%"></a>
                                    <a href="http://pmp.dikdasmen.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><strong>
                                        Penjaminan Mutu
                                        <br> Pendidikan</strong></a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <div class="alert alert-primary text-center">
                                        <a href="#" target="_blank" class="alert-link text-15"><img
                                            src="<?php echo base_url(); ?>assets/frontend/theme/material/img/icon/briefcase.png" alt="" class="img-responsive"
                                            width="50%"></a>
                                            <a href="https://simdak.dikdasmen.kemdikbud.go.id/" target="_blank"
                                            class="alert-link text-15"><strong>Dana
                                            Alokasi <br>Khusus</strong></a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6 ">
                                        <div class="alert alert-danger text-center">
                                            <a href="http://pip.kemdikbud.go.id:8080/sipintar/" target="_blank" class="alert-link text-15"><img
                                                src="<?php echo base_url(); ?>assets/frontend/theme/material/img/icon/pencil.png" alt="" class="img-responsive"
                                                width="50%"></a>
                                                <a href="http://pip.kemdikbud.go.id:8080/sipintar/" target="_blank" class="alert-link text-15"><strong>PIP
                                                    <br>Dikdasmen</strong></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-6">
                                                <div class="alert alert-biru text-center">
                                                    <a href="http://pdsp.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><img
                                                        src="<?php echo base_url(); ?>assets/frontend/theme/material/img/icon/key.png" alt="" class="img-responsive"
                                                        width="50%"></a>
                                                        <a href="http://pdsp.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><strong>Situs<br>
                                                            PDSP-K</strong></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                            <div class="row">
                                                <!-- Konten Main -->
                                                <div class="col-md-8 main-content">

                                                    <!-- Berita -->
                                                    <div class="row berita">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header border-blue ch-alt">
                                                                    <h2>Berita</h2>
                                                                </div>
                                                                <div class="card-body card-padding-lg berita">
                                                                    <div class="row">
                                                                        <div class="media">
                                                                            <a class="pull-left" href="/berita/rilis-pembaruan-aplikasi-dapodik-2016c">
                                                                                <img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/BOScoret.jpg" alt="RILIS PEMBARUAN APLIKASI DAPODIK 2016C" class="img-responsive" width="200" height="200">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <a href="/berita/rilis-pembaruan-aplikasi-dapodik-2016c"><h3 class="media-heading">RILIS PEMBARUAN APLIKASI DAPODIK 2016C</h3></a>
                                                                                <ul class="list-inline list-unstyled">
                                                                                    <li><span><i class="fa fa-user"></i> Admin </span></li>
                                                                                    <li>|</li>
                                                                                    <li><span><i class="fa fa-calendar"></i> 25 November 2016 </span></li>
                                                                                    <li>|</li>
                                                                                    <li><span><i class="fa fa-tag"></i> Aplikasi Dapodik </span></li>
                                                                                </ul>
                                                                                &amp;nbsp;
                                                                                Yth. Bapak/Ibu Operator Dapodik
                                                                                di Seluruh Nusantara
                                                                                &amp;nbsp;
                                                                                &amp;nbsp;&amp;nbsp;
                                                                                Assalamualaikum warahmatullahi wabarakatuh
                                                                                &amp;nbsp;
                                                                                Kami ucapkan Selamat Hari Guru bagi bapak/ibu guru di seluruh Indonesia. Menindaklanjuti laporan ditemukannya beb... <a href="/berita/rilis-pembaruan-aplikasi-dapodik-2016c" title="RILIS PEMBARUAN APLIKASI DAPODIK 2016C">(Baca Selengkapnya)</a>
                                                                            </div>
                                                                        </div>

                                                                        <hr>
                                                                        <div class="media">
                                                                            <a class="pull-left" href="/berita/successrmasi-penambahan-waktu-cut-off-pengisian-instrumen-aplikasi-pmp">
                                                                                <img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/BOScoret.jpg" alt="Informasi Penambahan Waktu Cut Off Pengisian Instrumen Aplikasi PMP" class="img-responsive" width="200" height="200">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <a href="/berita/successrmasi-penambahan-waktu-cut-off-pengisian-instrumen-aplikasi-pmp"><h3 class="media-heading">Informasi Penambahan Waktu Cut Off Pengisian Instrumen Aplikasi PMP</h3></a>
                                                                                <ul class="list-inline list-unstyled">
                                                                                    <li><span><i class="fa fa-user"></i> Admin </span></li>
                                                                                    <li>|</li>
                                                                                    <li><span><i class="fa fa-calendar"></i> 29 Oktober 2016 </span></li>
                                                                                    <li>|</li>
                                                                                    <li><span><i class="fa fa-tag"></i> Informasi </span></li>
                                                                                </ul>
                                                                                
                                                                                &amp;nbsp;
                                                                                Yang Terhormat :1. Kepala LPMP 2. Kepala Dinas Pendidikan Provinsi3. Kepala Dinas Pendidikan Kab/Kota4. Pengawas Sekolah5. Kepala Sekolah SD, SMP, SLB, SMA dan SMK6. Operator Sekolah
                                                                                &amp;nbsp;
                                                                                di seluruh Indonesia
                                                                                &amp;nbsp;
                                                                                Assalamu&amp;rsquo;ala... <a href="/berita/successrmasi-penambahan-waktu-cut-off-pengisian-instrumen-aplikasi-pmp" title="Informasi Penambahan Waktu Cut Off Pengisian Instrumen Aplikasi PMP">(Baca Selengkapnya)</a>
                                                                            </div>
                                                                        </div>

                                                                        <hr>
                                                                        <div class="media">
                                                                            <a class="pull-left" href="/berita/validasi-data-bos-lebih-kurang-salur-triwulan-3-dan-triwulan-4">
                                                                                <img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/BOScoret.jpg" alt="Validasi Data  BOS Lebih/Kurang Salur Triwulan 3 dan Triwulan 4" class="img-responsive" width="200" height="200">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <a href="/berita/validasi-data-bos-lebih-kurang-salur-triwulan-3-dan-triwulan-4"><h3 class="media-heading">Validasi Data  BOS Lebih/Kurang Salur Triwulan 3 dan Triwulan 4</h3></a>
                                                                                <ul class="list-inline list-unstyled">
                                                                                    <li><span><i class="fa fa-user"></i> Admin </span></li>
                                                                                    <li>|</li>
                                                                                    <li><span><i class="fa fa-calendar"></i> 14 Oktober 2016 </span></li>
                                                                                    <li>|</li>
                                                                                    <li><span><i class="fa fa-tag"></i> Informasi </span></li>
                                                                                </ul>
                                                                                &amp;nbsp;

                                                                                &amp;nbsp;
                                                                                Yang Terhormat :

                                                                                Kepala Dinas Pendidikan Provinsi
                                                                                Kepala Dinas Pendidikan Kab/Kota
                                                                                Kepala Sekolah SD, SMP, SLB, SMA dan SMK
                                                                                Operator Dapodik

                                                                                &amp;nbsp;
                                                                                di seluruh Indonesia
                                                                                &amp;nbsp;
                                                                                Assalamualaikum warahmatullahi wabarakatuh... <a href="/berita/validasi-data-bos-lebih-kurang-salur-triwulan-3-dan-triwulan-4" title="Validasi Data  BOS Lebih/Kurang Salur Triwulan 3 dan Triwulan 4">(Baca Selengkapnya)</a>
                                                                            </div>
                                                                        </div>

                                                                        <hr>
                                                                    </div>

                                                                    <a href="/berita">
                                                                        <div style="width: 100%; text-align:center;" class="btn btn-raised btn-success">
                                                                            <h4>Berita Lainnya</h4>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Konten Sidebar -->
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header border-blue ch-alt">
                                                        <h2>Sambutan Kepala Dinas</h2>
                                                    </div>
                                                    <div class="card-body card-padding-sm">
                                                        <p><img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/dirjen-dikdasmen.jpg" alt="Dirjen Dikdasmen"
                                                            class="img-responsive"></p>
                                                            <p>Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Kuasa atas penerbitan Peraturan Menteri Pendidikan dan Kebudayaan RI <a href="/sambutan" target="_blank">(Baca selengkapnya)</a></p>
                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Foto Gallery -->
                                                    <div class="col-md-4">
                                                <div class="card">
                                                    
                                                    </div>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header border-blue ch-alt">
                                                                    <h2>Foto Gallery</h2>
                                                                </div>
                                                                <div class="card-body card-padding-sm">
                                                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                                        <!-- Indicators -->
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                                                        </ol>

                                                                        <!-- Wrapper for slides -->
                                                                        <div class="carousel-inner" role="listbox">
                                                                            <div class="item active">
                                                                                <a href="<?php echo base_url(); ?>assets/frontend/theme/material/img/gallery/gallery-1.jpg"
                                                                                    data-lightbox="gallery">
                                                                                    <img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/gallery/thumb/gallery-thumb-1.jpg"
                                                                                    class="img-responsive" alt="">
                                                                                </a>
                                                                            </div>

                                                                            <div class="item">
                                                                                <div class="item active">
                                                                                    <a href="<?php echo base_url(); ?>assets/frontend/theme/material/img/gallery/gallery-1.jpg"
                                                                                        data-lightbox="gallery">
                                                                                        <img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/gallery/thumb/gallery-thumb-1.jpg"
                                                                                        class="img-responsive" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item active">
                                                                                    <a href="<?php echo base_url(); ?>assets/frontend/theme/material/img/gallery/gallery-1.jpg"
                                                                                        data-lightbox="gallery">
                                                                                        <img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/gallery/thumb/gallery-thumb-1.jpg"
                                                                                        class="img-responsive" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item">
                                                                                <div class="item active">
                                                                                    <a href="<?php echo base_url(); ?>assets/frontend/theme/material/img/gallery/gallery-1.jpg"
                                                                                        data-lightbox="gallery">
                                                                                        <img src="<?php echo base_url(); ?>assets/frontend/theme/material/img/gallery/thumb/gallery-thumb-1.jpg"
                                                                                        class="img-responsive" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Left and right controls -->
                                                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                                            <span class="" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                                            <span class="" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <a href="http://dikdas.kemdikbud.go.id/index.php/media_category/galeri/"
                                                                        target="_blank">Lihat
                                                                        gallery selengkapnya <i class="fa fa-chevron-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


        </div>
    </div>
</div>
<!-- END CONTENT -->

<!-- FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">

            <div class="col-xs-6 col-md-3">
                <h4>LAYANAN</h4>
                <ul>
                    <li><a href="">Terserah</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h4>BIDANG DINAS DUKCAPIL</h4>

                <ul>
                    <li><a href="">Terserah</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h4>DINAS TERKAIT</h4>

                <ul>
                    <li><a href="">Terserah</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h4>HUBUNGI KAMI</h4>
                <p>Dinas Kependudukan dan Catatan Sipil Kabupaten Tanah Laut</p>
                <p><strong>Pelaihari, Tanah Laut (Kalimantan Selatan)</strong> <br>
                    Jl. Ahmad Yani 08121212121</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- COPYRIGHT -->
    <div class="copyright">
        <p class="text-center"><?=developed(); ?> <?= copyright(); ?></p>
    </div>
    <!-- END COPYRIGHT -->
    <!-- SSK Share Buttons -->
    <div class="ssk-sticky ssk-left ssk-center ssk-md">
        <a href="" class="ssk ssk-facebook"></a>
        <a href="" class="ssk ssk-twitter"></a>
        <a href="" class="ssk ssk-google-plus"></a>
        <a href="" class="ssk ssk-linkedin"></a>
        <a href="" class="ssk ssk-pinterest"></a>
        <a href="" class="ssk ssk-tumblr"></a>
    </div>

    <!-- Back to Top Button -->
    <div class="bs-component btn-group-sm" id="keAtas">
        <a href="javascript:void(0)" class="btn btn-success btn-fab" title="Kembali keatas"><i class="material-icons">expand_less</i></a>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery/jquery-1.11.3.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/datatables/extensions/tools.min.js"></script>

    <!-- Main Plugins -->
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/bootstrap-material-design/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/bootstrap-material-design/js/ripples.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/js/social-share-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/js/functions.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/js/custom.js"></script>

    <!-- Additional Plugins -->
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-marquee/js/jquery.marquee.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-countdown/js/jquery.plugin.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-countdown/js/jquery.countdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-countdown/js/jquery.countdown-id.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-easypiechart/js/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-event-calendar/js/jquery.eventCalendar.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/theme/material/libs/lightbox/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>

    <script>
        $('.tanggal-sekarang-label').html(currentDate() + " 00:00:00");

        var waktu = new Date();
        var tanggalWaktu = currentDate() + " " + waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
        var semester_id = $("#semesterId");

        $('.tanggal-waktu-label').html(tanggalWaktu);

        $("#marquee").marquee({
            yScroll: "top",
            showSpeed: 850,
            scrollSpeed: 12,
            pauseSpeed: 5000,
            pauseOnHover: true,
            loop: -1,
            fxEasingShow: "swing",
            fxEasingScroll: "linear",
            cssShowing: "marquee-showing",
            init: null,
            beforeshow: null,
            show: null,
            aftershow: null
        });

        $(document).ready(function () {
            $(".alert a img").hover(function () {
                $(this).addClass("animated rubberBand");
            }, function () {
                $(this).removeClass("animated rubberBand");
            });

            $("#eventCalendarDefault").eventCalendar({
            eventsjson: '<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-event-calendar/json/events.json', // link to events json
            locales: '<?php echo base_url(); ?>assets/frontend/theme/material/libs/jquery-event-calendar/json/locale.id.json',
            openEventInNewWindow: true,
            eventsLimit: 5,
            jsonDateFormat: 'human'
        });
        });

$('#countdownPMP').countdown({until: new Date(2016, 11 - 1, 30, 23, 59, 0)});

</script>

<!--Start of Social Share Kit Script-->
<script type="text/javascript">
    SocialShareKit.init();

    jQuery(document).ready(function($){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#keAtas').fadeIn('slow');
            } else {
                $('#keAtas').fadeOut('slow');
            }
        });
        $('#keAtas').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 750);
            return false;
        });
    });
</script>

</body>
</html>