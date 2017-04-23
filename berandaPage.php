<?php
$link = new mysqli('localhost','root','','alquran_mtq');
header('Content-type: text/html; charset=utf8');
//$link -> set_charset("utf8")

?>

<script type="text/javascript">
	$(document).ready(function(){
		$('.tblAyat').click(function(){
			var loading = "<i class='fa fa-spin fa-refresh'></i>";
			var idSurah = $(this).attr('id');
			$('#capSurah').html(loading + " Loading surah ...");
			$('#divSurah').load('surahSatu.php',{'idSurah':idSurah});
		});
	});

</script>

<div class="panel panel-success">
<div class="panel-heading" id="capSurah">Choose Surah</div>
<div class="panel-body" id="divSurah">

                        <div class="list-group no-radius alt">
                        <?php
                        for($x = 1; $x <= 114; $x++){
                        	$kSurahDalam = $link -> query("SELECT * FROM Quran_Arb WHERE SuraID='$x';");
                        	$jAyat = mysqli_num_rows($kSurahDalam);
                        	$fA = $kSurahDalam -> fetch_array();
                        	$sName = $fA['surahName'];	
                        	$idFinSurah = $fA['SuraID'];
                        		
			                        echo "<a class=\"list-group-item ft tblAyat\" href=\"#\" id='$x'>
			                            <span class=\"badge bg-success\">$jAyat</span>
			                            <i class=\"fa fa-circle icon-muted\"></i>
			                             
			                            $sName
			                            
                          				</a>";                        		
                        	
                        }
                        ?>
                          
                        
                        </div>
</div>

</div>