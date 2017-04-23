<?php
$link = new mysqli('localhost','root','','appPln');
 global $pesan;
 $pesan = "Aditya Darma";


$korLok = $_GET['lokPnj'];
//kueri mencari nilai query
$kKordinat = $link -> query("SELECT korx,kory FROM tbl_pelanggan WHERE namapnj='$korLok';");
$fKordinat = $kKordinat -> fetch_array();
$kX = $fKordinat['korx'];
$kY = $fKordinat['kory'];

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete</title>
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
      <link rel="stylesheet" href="js/css/css/font.css" type="text/css"/>
      <link rel="stylesheet" href="js/css/css/app.css" type="text/css"/>
      <script src="js/css/js/jquery.min.js"></script>
      <script src="js/css/js/bootstrap.js"></script>
    <script>
    $(document).ready(function(){
      //$('#bodyUtama').load('coreMaps.php');   
      $('#btnCekLokasi').click(function(){
        var pesanKir = "Coba kirim variabel";
        //alert(pesanKir);
        //var korTotal = $('.optLok').attr("id");
        //var korTotalArray = korTotal.split("|");
        //var korXAr = $korTotalArray[0];
        //var korYAr = $korTotalArray[1];
        //alert(korTotalArray[1]);
        var lokPnj = $('#cari').val();
        
        //alert(lokPnj);
        window.location='gMaps.php?lokPnj=' + lokPnj;
      });

      $('#btnCekKor').click(function(){
        var vJx = $('#txtX').val();
        var vJy = $('#txtY').val();
        window.location='gMaps2.php?korX='+vJx+'&korY='+vJy;
      });
     
    });
    
    </script>
    <style>
      html, body {
        height: 70%;
        margin: 0;
      }
      #map {
        height: 40%;
      }
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

    </style>
  </head>
  <body id="bodyUtama">

      <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <div style="text-align:center;">
        <img src="img/8ZnoYAFS.jpg" alt="image" style="width:120px;"/><br/>
          <strong>PLN Apps</strong><br/>
          MonPRR
        </div>
    </div>
  </section>
      <div class="text-center">
      <h3>Informasi pelanggan</h3>
      </div>
    
    <div>
      
      <label for="cari">Lokasi Manual</label>
 <input type="text" name="cari" id="cari" list="datalist" />&nbsp;<button id="btnCekLokasi">Cek</button>
      <p>
        
      </p>

      <div class="form-group">
   Kordinat <input type="text" placeholder="X" id="txtX"> &nbsp;<input type="text" placeholder="Y" id="txtY">
       <button class="btn btn-primary" id="btnCekKor">
        Cek
        </button>
  </div>
      
 <datalist id="datalist">
   <?php
   //kueri mencari alamat pnj 
   $kAlamat = $link -> query("SELECT namapnj,korx,kory FROM tbl_pelanggan;");
   while($fA = $kAlamat -> fetch_array()){
     $alamat = $fA['namapnj'];
     $korXPel = $fA['korx'];
     $korYPel = $fA['kory'];
     echo "<option value='$alamat' class='optLok' id='$korXPel|$korYPel'></option>";
   }
   ?>
   
 </datalist>
      <hr/>
    </div>
    
   
     
     <input id="pac-input" class="controls" type="text" placeholder="Masukkan nama tempat">
    
    <div id="map">
    
    </div>



<script>
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: <?=$kX; ?>, lng: <?=$kY; ?>},
    zoom: 15
  });
    var myLatLng = {lat: -6.08732, lng: 106.67762};

  var input = /** @type {!HTMLInputElement} */(
      document.getElementById('pac-input'));

  var types = document.getElementById('type-selector');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });
    
    var tempat1 = new google.maps.Marker({
          position: {lat: <?=$kX; ?>, lng: <?=$kY; ?>},
          map: map,
          title: 'Kordinat awal peta ...'
        });
  
    tempat1.addListener('click',function(){
      alert("<?=$pesan; ?>");
    });
  
  
  <?php
    $kTampil = $link -> query("SELECT * FROM tbl_pelanggan;");
    while($fTampil = $kTampil -> fetch_array()){
    $idPel = $fTampil['id_pel'];
    $korx = $fTampil['korx'];
    $kory = $fTampil['kory'];
    $nama = $fTampil['nama'];
    $tarif = $fTampil['tarif'];
    $daya = $fTampil['daya'];
    $pnj = $fTampil['pnj'];
    $namaPnj = $fTampil['namapnj'];
    $rt = $fTampil['rt'];
    $rw = $fTampil['rw'];
    $lingkungan = $fTampil['lingkungan'];
    $telp = $fTampil['notelp'];
    $kodePos = $fTampil['kodepos'];
    $tglUjl = $fTampil['tglujl'];
    $rpUjl = $fTampil['rpujl'];
    $kdUjl = $fTampil['kdujl'];
    
    echo "var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';";  
    echo "var tmpt$idPel = new google.maps.Marker({
          position: {lat: $korx, lng: $kory},
          map: map,
          title: 'Nama Pelanggan : $nama',
          icon : image
        }); ";

    echo "tmpt$idPel.addListener('click',function(){
       $('#capNama').html('$nama');
       $('#capIdPel').html('$idPel');
       $('#capTarif').html('$tarif');
       $('#capDaya').html('$daya');
       $('#capPnj').html('$pnj');
       $('#capNamaPnj').html('$namaPnj');
       $('#capRt').html('$rt/$rw');
       $('#capLingkungan').html('$lingkungan');
       $('#capNoTelp').html('$telp');
       $('#capKodePos').html('$kodePos');
       $('#capTglUjl').html('$tglUjl');
       $('#capRpUjl').html('$rpUjl');
       $('#capKdUjl').html('$kdUjl');

    }); ";
        
    }
    
    ?>
    
  
  
  autocomplete.addListener('place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }
    marker.setIcon(/** @type {google.maps.Icon} */({
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(35, 35)
    }));
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }

    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
    infowindow.open(map, marker);
  });

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    var radioButton = document.getElementById(id);
    radioButton.addEventListener('click', function() {
      autocomplete.setTypes(types);
    });
  }

  setupClickListener('changetype-all', []);
  setupClickListener('changetype-address', ['address']);
  setupClickListener('changetype-establishment', ['establishment']);
  setupClickListener('changetype-geocode', ['geocode']);
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXY9S7JhiaWqMFE7wBqQDQUQoul0KcTcs&libraries=places&callback=initMap" async defer></script>

  
   
   
    
    <hr/>
     <h4>Data Pelanggan</h4>
     <ul>
      <li>Nama : <span id="capNama"></span></li>
      <li>Id Pelanggan : <span id="capIdPel"></span></li>
      <li>Tarif : <span id="capTarif"></span></li>
      <li>Daya : <span id="capDaya"></span></li>
      <li>PNJ :<span id="capPnj"></span></li>
      <li>Nama PNJ : <span id="capNamaPnj"></span></li>
      <li>RT/RW : <span id="capRt"></span></li>
      <li>Lingkungan : <span id="capLingkungan"></span></li>
      <li>No Telepon : <span id="noTelp"></span></li>
      <li>Kode Pos : <span id="capKodePos"></span></li>
      <li>Tgl Ujl : <span id="capTglUjl"></span></li>
      <li>Rp Ujl : <span id="capRpUjl"></span></li>
      <li>Kd Ujl : <span id="capKdUjl"></span></li>     
      </ul>
 

  <hr/>

    <button class='btn btn-sm btn-success'>Manajemen Admin</button>
  </body>
</html>