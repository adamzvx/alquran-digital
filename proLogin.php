<?php
$link = new mysqli('localhost','root','','appPln');
$idUser = $_POST['idUser'];
$pass = $_POST['password'];
$pass = md5($pass);
//kueri mencari data user
$kDataUser = $link -> query("SELECT id_user FROM tbl_user_pln WHERE id_user='$idUser' AND password='$pass';");
$jUser = mysqli_num_rows($kDataUser);
if($jUser==0){
  echo "<strong>Username/password salah";
}else{
  echo "<script type='text/javascript'>window.location='gMaps.php?lokPnj=KP BELIMBING RT5/2';</script>";
}
?>