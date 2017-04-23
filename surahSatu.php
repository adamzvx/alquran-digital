<?php
session_start();
$link = new mysqli('localhost','root','','alquran_mtq');
header('Content-type: text/html; charset=utf8');
$link -> set_charset("utf8");
$idSurah = $_POST['idSurah'];
$kSurah = $link -> query("SELECT * FROM Quran_Arb WHERE SuraID='$idSurah';");
$fNma = $kSurah -> fetch_array();
$nmaSurah = $fNma['surahName'];
while($fSurah = $kSurah -> fetch_array()){
	$no = 1;
	$ayat = $fSurah['AyahText'];
	$idSurahEng = $fSurah['SuraID'];
	$nAyat = $fSurah['VerseID'];
	$nAyatA = $nAyat - 1;
	$kAyatArb = $link -> query("SELECT AyahText FROM quran_arb WHERE SuraID='$idSurah' AND VerseID='$nAyatA';");
	$fAyatArb = $kAyatArb -> fetch_array();
	$ayatArb = $fAyatArb['AyahText'];
	$kAyatEng = $link -> query("SELECT * FROM quran_eng WHERE SuraID='$idSurahEng' AND VerseID='$nAyatA';");
	$fAyatEng = $kAyatEng -> fetch_array();
	$ayatEng = $fAyatEng['AyahText'];
	echo "<div class='text-right'>$ayatArb</div>";
	echo "<br/>";
	echo "($nAyatA) - $ayatEng";
	echo "<hr/>";
	$no++;
}


?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#capSurah').html("<?=$nmaSurah; ?>");
	});

</script>
