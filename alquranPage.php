<?php
$link = new mysqli('localhost','root','','alquran_mtq');
header('Content-type: text/html; charset=utf8');

?>
<!DOCTYPE html>
<html dir="ltr" class="firefox firefox51" lang="en">
<head>
  <meta charset="utf-8" />
  <title>Scele - UINSU</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="js/css/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="js/css/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="js/css/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="js/css/css/font.css" type="text/css" />
  
  <style type="text/css">
    @font-face {font-family: 'KFGQPC_Naskh'; src: url('js/KFC_nskh.eot'); src : local('KFGQPC Uthman Taha Naskh'), url('js/KFC_nskh.otf') format('opentype');}
  </style>
<link rel="stylesheet" href="js/css/css/app.css" type="text/css" />
  <script src="js/css/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/css/js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/css/js/app.js"></script> 
  <script src="js/css/js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="js/css/js/app.plugin.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
       $('#divMenu').load('menu.php');
       var loading = "<i class='fa fa-spin fa-refresh'></i>";
       $('#divBeranda').html(loading + " Memuat Daftar surah .... ");
       $('#divBeranda').load('berandaPage.php'); 
        var teks = $('#txtKata').val();
        var situs = window.location.href;
        var res = situs.split("=");
        var idVal = res[1];

    });
    </script>
    
</head>
<body class="">
  <section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="img/logo-uinsu2.png" class="m-r-sm">Al-Quran Digital</a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <ul class="nav navbar-nav hidden-xs">
      </ul>
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="img/logo-uinsu2.png">
            </span>
            Al-Quran Digital Uin-Su<br/><small>0701163114</small>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <li>
              <a href="#">Cara penggunaan</a>
            </li>
            <li>
              <a data-toggle="modal" data-target="#mdlScele" data-backdrop="static">Tentang Aplikasi</a>
            </li>
            <li>
              <a href="index.php">Ke Menu Utama</a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
<div class="modal fade" id="mdlScele" role="dialog">
    <div class="modal-dialog model-fade modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Al-Quran Digital 3 Bahasa</h4>
        </div>
        <div class="modal-body">
          <b>Al-Quran</b> (Student Centered Learning Enviroinment) merupakan media yang digunakan mahasiswa UinSu sebagai penunjang kegiatan perkuliahan. Scele memfasilitasi kegiatan yang menunjang perkuliahan, membantu interaksi antara dosen dan mahasiswa dalam melaksanakan kegiatan perkuliahan. Adapun fasilitas dalam Scele UinSu adalah : <br/>
            <ul>
            <li>Manajemen informasi perkuliahan mahasiswa</li>
            <li>Manajemen bahan ajar online mahasiswa</li>
            <li>Manajemen tugas perkuliahan mahasiswa</li>
            <li>Sistem ujian/tugas secara online</li>
            <li>Forum Dikskusi mahasiswa / dosen</li>    
            </ul>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>


    <section>
      <section class="hbox stretch">          
        <section id="content">
          <section class="vbox">
            <header class="header bg-white b-b b-light">
                <marquee id="fastLine">
                  <?php
                  $kFastLine = $link -> query("SELECT * FROM tbl_fastline;");
                  while($rFastLine = $kFastLine -> fetch_array()){
                    $isi = $rFastLine['isi'];
                    echo "$isi";
                  }
                  ?>
                </marquee>
            </header>
            <section class="w-f">
              <section class="hbox stretch">
                
                  <section class="vbox">
                    <section class="scrollable wrapper" id="divBeranda">
                        



                    </section>
                  </section>
                
              </section>              
            </section>
           
              
            
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
        </section>
        <!-- .aside -->
        <aside class="bg-light lter b-r aside-md hidden-print hidden-xs nav-xs-right" id="nav">          
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs" id="divMenu">

                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            
          </section>
        </aside>
        <!-- /.aside -->
      </section>
    </section>
        <footer class="bg-dark navbar navbar-default navbar-fixed-bottom">
            <div class="text-center padder">
      <p>
        <small>Al-Quran Digital 3 Bahasa <br>Uinsu &copy; 2017 - By Aditia Darma Nasution</small>
       
      </p>
    </div>
            </footer>
  </section>

</body>
</html>