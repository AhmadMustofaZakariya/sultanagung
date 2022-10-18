<script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />  
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
   <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": false,
          "lengthChange": true,
          "searching": false,
          "ordering": false,
          "info": false,
          "autoWidth": true
        });
      });
    </script>

 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>::: <?=$title?> :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<link href="flora.datepicker.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style12 {color: #000000; font-family: Georgia, "Times New Roman", Times, serif; font-size: 14px; }
.style14 {color: #FFF; font-size: 12px; }
.style16 {font-family: Georgia, "Times New Roman", Times, serif;color: #000000;}
.style17 {font-size: 24px; font-weight: bold; color: #000000;}
-->
</style>
</head>
<body>


<?php 
		
		 $q="SELECT *,nilc1+nilc2+nilc3+nilc4 as na FROM nilai a INNER JOIN santri b ON a.kdsantri=b.kdsantri where a.tahun='".$_POST[tahun]."' ORDER BY na DESC ";
		//echo $q;
		$result=$jp->sql($q);
		
		?>
<table width="100%" height="130" class="table table-bordered table-striped" id="example2">
 <thead>
  <tr>
    <td colspan="13"><div align="center" class="style16"><span class="style17">Rekomendasi Santri Terbaik Pesantren Sultan Agung  Tahun <?=$_POST[tahun]?>
     <a href="pdf.php?tahun=<?=$_POST[tahun]?>" target="_blank"><img src="print.png" width="32" height="32" border="0"></a>
    </span></div></td>
  </tr>
  <tr bgcolor="#7e000f">
    <th align="center" valign="middle"><span class="style14">No.</span></th>
    <th  valign="middle"><span class="style14">Santri</span></th>
    <th valign="middle"><span class="style14">Tadarus</span></th>
    <th valign="middle"><span class="style14">Sholat Jamaah</span></th>
	<th valign="middle"><span class="style14">IPK</span></th>
    <th valign="middle"><span class="style14">Kajian Jumat</span></th>
	<th  valign="middle"><span class="style14">Nilai Akhir</span></th>
 </tr>

  </thead>

  <?php $n = 0;$hit=0;while($row = $jp->fetch($result)){ $n++; 
  ?>

   
  <thead>
  

  <tr bgcolor="#FFF">
  
    <td  align="center" valign="top"><span class="style12"><?=$n?>.</span></td>
    <td valign="top" align="center"><span class="style12"><b><?=$row[kdsantri]?><br><?=$row[nama]?></b></span>
    <td  align="right" valign="top"><span class="style12"><?=($row[c1])?> </span></td>
	<td  align="right" valign="top"><span class="style12"><?=($row[c2])?></span></td>
	<td  align="right" valign="top"><span class="style12"><?=($row[c3])?></span></td>
	<td  align="right" valign="top"><span class="style12"><?=($row[c4])?></span></td>
	
	<td  align="right" valign="top"><span class="style12"> <?=($row[na]);?>    </span> </td>
     
  </tr>
 </thead>
  <?php } ?>

</table>



</body>
</html>