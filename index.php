<!DOCTYPE html>
<html class="bg-default">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <!-- see http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <style>
        /* following two viewport lines are equivalent to meta viewport statement above, needed for Windows */
        /* see http://www.quirksmode.org/blog/archives/2014/05/html5_dev_conf.html and http://dev.w3.org/csswg/css-device-adapt/ */
        @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; }  @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
        @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }           @viewport { user-zoom: fixed ; min-zoom: 100% ; }
    </style>
     <link rel="stylesheet" href="js/css/css/bootstrap.css" type="text/css" />
      <link rel="stylesheet" href="js/css/css/animate.css" type="text/css" />
      <link rel="stylesheet" href="js/css/css/font-awesome.min.css" type="text/css" />
      <link rel="stylesheet" href="js/css/css/font.css" type="text/css" />
    <link rel="stylesheet" href="js/css/css/app.css" type="text/css" />
    <link rel="stylesheet" href="js/css/bawaan.css" type="text/css"/>
      <script src="js/css/js/jquery.min.js"></script>
      <script src="js/css/js/bootstrap.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCP-LbMI8C1kpHgTpOo8-04Tsq-4Y2HUbc&libraries=places&callback=initMap"></script>
  <script>
  
    $(document).ready(function(){

      $('#tblBaca').click(function(){
        var loading = "<i class='fa fa-spin fa-refresh'></i>";
        $('#divStatus').html(loading + " Memuat Al-Quran ...");
        window.location='alquranPage.php';
      });
      
      $('#tblJadwal').click(function(){
        var loading = "<i class='fa fa-spin fa-refresh'></i>";
        $('#divStatus').html(loading + " Memuat Jadwal ...");
      });

      $('#tblTentang').click(function(){
        //var loading = "<i class='fa fa-spin fa-refresh'></i>";
  
      });

    });
    
  </script>
  </head>
  <body>
            
      <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <div style="text-align:center;">
        <img src="img/logo-uinsu2.png" alt="image" style="width:120px;"/><br/>
          <strong>Aplikasi Al-Quran 3 Bahasa</strong><br/>
          Musabaqah Tilawatil Qur'an
        </div>
    </div>
  </section>
      <div class="text-center">
      <h4>Universitas Islam Negeri Sumatera Utara</h4>
      </div>
     
    <section class="panel panel-info bg-white m-t-lg" style="margin-right: 12px;margin-left: 12px;">
        <header class="panel-heading text-center">
          <strong>Menu Aplikasi<span id="capTipe"></span></strong>
        </header>
        <div class="panel-heading text-center" id="conLogin">
        <p><button class="btn btn-s-md btn-info btn-rounded btn-lg" id="tblBaca"><i class="fa fa-book"></i> Baca Al-Quran</button></p> 
        <p><button class="btn btn-s-md btn-success btn-rounded btn-lg" id="tblJadwal"><i class="fa fa-calendar-o"></i> Jadwal Solat</button></p>
        <p><button class="btn btn-s-md btn-warning btn-rounded btn-lg" id="tblTentang" data-toggle="modal" data-target="#mdlScele" data-backdrop="static"><i class="fa fa-info"></i> Tentang Aplikasi</button> </p>
        <div id="divStatus"></div>
        </div>
      </section>
   
   <div class="modal fade" id="mdlScele" role="dialog">
    <div class="modal-dialog model-fade modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Al-Quran Digital 3 Bahasa</h4>
        </div>
        <div class="modal-body" style="text-align: justify;">
          <b>Al-Quran Digital </b> adalah aplikasi yang dapat digunakan untuk membaca Al-Quran secara digital, aplikasi ini dapat menampilkan isi dari Al-Quran yang tersedia dalam 2 terjemahan yaitu bahasa Inggris dan Indonesia. Aplikasi ini dibuat untuk mengikuti lomba <strong>Musabaqah Tilawatil Quran</strong> antar fakultas di lingkungan Universitas Islam Negeri Sumatera Utara, pada tanggal 18 - 21 April 2017. <br/>
          Fasilitas dalam aplikasi ini
            <ul>
            <li>Al-Quran digital dalam bahasa arab</li>
            <li>Al-Quran digital (terjemahan) dalam bahasa inggris</li>
            <li>Al-Quran digital (terjemahan) dalam bahasa indonesia</li>
            <li>Jadwal Sholat</li>
            <li>Petunjuk Arah Kiblat (Menyusul)</li>    
            </ul>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>


      <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Aplikasi Al-Quran 3 Bahasa <br>Uinsu &copy; 2017 - By Aditia Darma Nasution</small>
       
      </p>
    </div>
  </footer>
  </body>
</html>
