<?php
session_start();
error_reporting(0);
include 'includes/lib.inc.php';
include APP_ROOT."/includes/class.inc.php";
include INCLUDES_DIR."/class.paging.php";
$jp = new jcore();
 

$xxx='<style>
.tableku {
border-collapse:collapse; 
}

* {
font-size:11px;
}
.tableku td{
border-collapse:collapse;
border:1px solid #666666;
font-size:10px;
padding-left:6px;
padding-right:6px;
}
 

</style>';

    $xxx .= '<div style="margin-left:10px; margin-top:20px; margin-right:10px;   padding:10px;"> 
	<div align=center style="font-size:14pt; ">Pesantren Mahasiswa Sultan Agung';
	$xxx .=	'</div> 
	<div align=center style="font-size:12pt; ">Jalan Kaligawe Raya No.KM, Terboyo Kulon, Kec. Genuk, Kota Semarang</div> 
	
     <hr/><br/>
	 <div align=center style="font-size:12pt; ">Rekomendasi Santri Terbaik Pesantren Sultan Agung Tahun '.$_REQUEST[tahun].'</div>  
	
	 <br/><br/>
	 
 ';
  
	 $xxx.='
		  <table  class="tableku" width=100%>
          <tr bgcolor="#ccc">
		  <td width="10" align="center"><span class="style5">No.</span></td>
	 	  <td width="150" align="center"><span class="style5">Santri</span></td>
		  <td width="45" align="center"><span class="style5">Tadarus</span></td>
		  <td width="65" align="center"><span class="style5">Sholat Jamaah</span></td>
		  <td width="45" align="center"><span class="style5">IPK</span></td>
		  <td width="45" align="center"><span class="style5">Kajian Jumat</span></td>
		   <td width="80" align="center"><span class="style5">Nilai Akhir</span></td>
		  </tr> ';

    
	 $result=$jp->sql("SELECT *,nilc1+nilc2+nilc3+nilc4 as na FROM nilai a INNER JOIN santri b ON a.kdsantri=b.kdsantri where a.tahun='".$_REQUEST[tahun]."' ORDER BY na DESC  ");
     $n = 0;while($r = $jp->fetch($result)){ $n++;
	  				  
		
       $xxx.='<tr><td align=center>'.$n.'</td>
              <td align=justify>'.$r[kdsantri].'<br>'.$r[nama].'</td>
				<td align="right"><span class="style5">'.$r[c1].'</span></td>
				<td align="right"><span class="style5">'.$r[c2].'</span></td>
				<td align="right"><span class="style5">'.$r[c3].'</span></td>
				<td align="right"><span class="style5">'.$r[c4].'</span></td>
				
			<td align="right"><span class="style5">'.$r[na].'</span></td>
					
                </tr>';
      $no++;
    }
				
	
    $xxx.='
	 
	
	</table>';
     
 
 
     
	 
 
 require_once("dompdf_config.inc.php");

$_GET["save_file"] == false;

$dompdf = new DOMPDF();
$dompdf->set_paper('legal', 'portrait');
$dompdf->load_html($xxx);
$dompdf->render();
$dompdf->stream("Laporan.pdf", array("Attachment" => 0));


 
?>
