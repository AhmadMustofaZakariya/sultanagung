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
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
<?php

	$q = "select * from ahp";
	$r = $jp->sql($q);
	$o = $jp->fetch($r);


?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>::: <?=$title?> :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="css/sites.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; }
.style14 {font-size: 16px; font-family: "Courier New", Courier, mono; color: #FFFFFF;  }
.style19 {font-size: 16px; font-family: "Courier New", Courier, mono; color: #000000; }
.style191 {font-size: 16px; font-family: "Courier New", Courier, mono; color: #000000;font-weight: bold; }
.style21 {font-size: 24px; font-family: "Courier New", Courier, mono; color: #000000; font-weight: bold; }
-->
</style>
</head>
<body>


<script src="js/gen_validatorv31.js" language="javascript"></script>
<form action="" method="post" enctype="multipart/form-data" name="Form1" id="Form1" >
<table width="738" border="0" align="center" cellpadding="2" cellspacing="0">

   <tr>
    <td width="20%" ><span class="style19">Tadarus</span> </td>
    <td width="39%" ><span class="style19">
      <select name="c1c2" id="c1c2" class="input-xlarge">
      <option value="">---</option>
      <option value="1" <?=(($o[c1c2]=='1')?"selected":"")?>>1 Sama Pentingnya Dengan</option>
      <option value="2" <?=(($o[c1c2]=='2')?"selected":"")?>>2 Mendekat Sedikit Lebih Penting Dari</option>
      <option value="3" <?=(($o[c1c2]=='3')?"selected":"")?>>3 Sedikit Lebih Penting Dari</option>
      <option value="4" <?=(($o[c1c2]=='4')?"selected":"")?>>4 Mendekat Lebih Penting Dari</option>
      <option value="5" <?=(($o[c1c2]=='5')?"selected":"")?>>5 Lebih Penting Dari</option>
      <option value="6" <?=(($o[c1c2]=='6')?"selected":"")?>>6 Mendekat Sangat Penting Dari</option>
      <option value="7" <?=(($o[c1c2]=='7')?"selected":"")?>>7 Sangat Penting Dari</option>
      <option value="8" <?=(($o[c1c2]=='8')?"selected":"")?>>8 Mendekat Mutlak Dari</option>
      <option value="9" <?=(($o[c1c2]=='9')?"selected":"")?>>9 Mutlak Sangat Penting Dari</option>
      
    </select>   </span> </td>
      <td width="41%" ><span class="style19">Sholat Jamaah</span> </td>
  </tr>
   <tr>
    <td width="20%" ><span class="style19">Tadarus</span> </td>
    <td width="39%" ><span class="style19">
      <select name="c1c3" id="c1c3" class="input-xlarge">
      <option value="">---</option>
      <option value="1" <?=(($o[c1c3]=='1')?"selected":"")?>>1 Sama Pentingnya Dengan</option>
      <option value="2" <?=(($o[c1c3]=='2')?"selected":"")?>>2 Mendekat Sedikit Lebih Penting Dari</option>
      <option value="3" <?=(($o[c1c3]=='3')?"selected":"")?>>3 Sedikit Lebih Penting Dari</option>
      <option value="4" <?=(($o[c1c3]=='4')?"selected":"")?>>4 Mendekat Lebih Penting Dari</option>
      <option value="5" <?=(($o[c1c3]=='5')?"selected":"")?>>5 Lebih Penting Dari</option>
      <option value="6" <?=(($o[c1c3]=='6')?"selected":"")?>>6 Mendekat Sangat Penting Dari</option>
      <option value="7" <?=(($o[c1c3]=='7')?"selected":"")?>>7 Sangat Penting Dari</option>
      <option value="8" <?=(($o[c1c3]=='8')?"selected":"")?>>8 Mendekat Mutlak Dari</option>
      <option value="9" <?=(($o[c1c3]=='9')?"selected":"")?>>9 Mutlak Sangat Penting Dari</option>
      
    </select>   </span> </td>
     <td width="41%" ><span class="style19">IPK</span> </td>
  </tr>
   <tr>
    <td width="20%" ><span class="style19">Tadarus</span> </td>
    <td width="39%" ><span class="style19">
      <select name="c1c4" id="c1c4" class="input-xlarge">
      <option>---</option>
      <option value="1" <?=(($o[c1c4]=='1')?"selected":"")?>>1 Sama Pentingnya Dengan</option>
      <option value="2" <?=(($o[c1c4]=='2')?"selected":"")?>>2 Mendekat Sedikit Lebih Penting Dari</option>
      <option value="3" <?=(($o[c1c4]=='3')?"selected":"")?>>3 Sedikit Lebih Penting Dari</option>
      <option value="4" <?=(($o[c1c4]=='4')?"selected":"")?>>4 Mendekat Lebih Penting Dari</option>
      <option value="5" <?=(($o[c1c4]=='5')?"selected":"")?>>5 Lebih Penting Dari</option>
      <option value="6" <?=(($o[c1c4]=='6')?"selected":"")?>>6 Mendekat Sangat Penting Dari</option>
      <option value="7" <?=(($o[c1c4]=='7')?"selected":"")?>>7 Sangat Penting Dari</option>
      <option value="8" <?=(($o[c1c4]=='8')?"selected":"")?>>8 Mendekat Mutlak Dari</option>
      <option value="9" <?=(($o[c1c4]=='9')?"selected":"")?>>9 Mutlak Sangat Penting Dari</option>
      
    </select>   </span> </td>
     <td width="41%" ><span class="style19">Kajian Jumat</span> </td>
  </tr>
   <tr>
    <td width="20%" ><span class="style19">Sholat Jamaah</span></td>
    <td width="39%" ><span class="style19">
      <select name="c2c3" id="c2c3" class="input-xlarge">
      <option>---</option>
      <option value="1" <?=(($o[c2c3]=='1')?"selected":"")?>>1 Sama Pentingnya Dengan</option>
      <option value="2" <?=(($o[c2c3]=='2')?"selected":"")?>>2 Mendekat Sedikit Lebih Penting Dari</option>
      <option value="3" <?=(($o[c2c3]=='3')?"selected":"")?>>3 Sedikit Lebih Penting Dari</option>
      <option value="4" <?=(($o[c2c3]=='4')?"selected":"")?>>4 Mendekat Lebih Penting Dari</option>
      <option value="5" <?=(($o[c2c3]=='5')?"selected":"")?>>5 Lebih Penting Dari</option>
      <option value="6" <?=(($o[c2c3]=='6')?"selected":"")?>>6 Mendekat Sangat Penting Dari</option>
      <option value="7" <?=(($o[c2c3]=='7')?"selected":"")?>>7 Sangat Penting Dari</option>
      <option value="8" <?=(($o[c2c3]=='8')?"selected":"")?>>8 Mendekat Mutlak Dari</option>
      <option value="9" <?=(($o[c2c3]=='9')?"selected":"")?>>9 Mutlak Sangat Penting Dari</option>
      
    </select>   </span> </td>
     <td width="41%" ><span class="style19">IPK</span> </td>
  </tr>
  <tr>
    <td width="20%" ><span class="style19">Sholat Jamaah</span></td>
    <td width="39%" ><span class="style19">
      <select name="c2c4" id="c2c4" class="input-xlarge">
      <option>---</option>
      <option value="1"<?=(($o[c2c4]=='1')?"selected":"")?>>1 Sama Pentingnya Dengan</option>
      <option value="2" <?=(($o[c2c4]=='2')?"selected":"")?>>2 Mendekat Sedikit Lebih Penting Dari</option>
      <option value="3" <?=(($o[c2c4]=='3')?"selected":"")?>>3 Sedikit Lebih Penting Dari</option>
      <option value="4" <?=(($o[c2c4]=='4')?"selected":"")?>>4 Mendekat Lebih Penting Dari</option>
      <option value="5" <?=(($o[c2c4]=='5')?"selected":"")?>>5 Lebih Penting Dari</option>
      <option value="6" <?=(($o[c2c4]=='6')?"selected":"")?>>6 Mendekat Sangat Penting Dari</option>
      <option value="7" <?=(($o[c2c4]=='7')?"selected":"")?>>7 Sangat Penting Dari</option>
      <option value="8" <?=(($o[c2c4]=='8')?"selected":"")?>>8 Mendekat Mutlak Dari</option>
      <option value="9" <?=(($o[c2c4]=='9')?"selected":"")?>>9 Mutlak Sangat Penting Dari</option>
      
    </select>   </span> </td>
     <td width="41%" ><span class="style19">Kajian Jumat</span> </td>
  </tr>
  <tr>
    <td width="20%" ><span class="style19">IPK</span> </td>
    <td width="39%" ><span class="style19">
      <select name="c3c4" id="c3c4" class="input-xlarge">
      <option>---</option>
      <option value="1"<?=(($o[c3c4]=='1')?"selected":"")?>>1 Sama Pentingnya Dengan</option>
      <option value="2" <?=(($o[c3c4]=='2')?"selected":"")?>>2 Mendekat Sedikit Lebih Penting Dari</option>
      <option value="3" <?=(($o[c3c4]=='3')?"selected":"")?>>3 Sedikit Lebih Penting Dari</option>
      <option value="4" <?=(($o[c3c4]=='4')?"selected":"")?>>4 Mendekat Lebih Penting Dari</option>
      <option value="5" <?=(($o[c3c4]=='5')?"selected":"")?>>5 Lebih Penting Dari</option>
      <option value="6" <?=(($o[c3c4]=='6')?"selected":"")?>>6 Mendekat Sangat Penting Dari</option>
      <option value="7" <?=(($o[c3c4]=='7')?"selected":"")?>>7 Sangat Penting Dari</option>
      <option value="8" <?=(($o[c3c4]=='8')?"selected":"")?>>8 Mendekat Mutlak Dari</option>
      <option value="9" <?=(($o[c3c4]=='9')?"selected":"")?>>9 Mutlak Sangat Penting Dari</option>
      
    </select>   </span> </td>
     <td width="41%" ><span class="style19">Kajian Jumat</span> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td ><input type="submit" name="Submit" class="btn btn-danger" value="Simpan" name="Submit" onClick="return doSubmit()">        
      <input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='index.php?page=ahp'"></td><td width="86">&nbsp;</td>
  </tr>
</table>
<br>


<table width="94%" border="0" align="justify" cellpadding="2" cellspacing="0">
  <tr>
    <td ><span class="style19">Matrik Pairwise Comparison</span> </td>
  </tr>
</table>
<table width="50%" border="1" align="justify" cellpadding="2" cellspacing="0">
  <tr>
    <td align="center"><span class="style191">&nbsp;</span> </td>
    <td align="center"><span class="style191">Tadarus</span> </td>
    <td align="center"><span class="style191">Sholat Jamaah</span> </td>
    <td align="center"><span class="style191">IPK</span> </td>
    <td align="center"><span class="style191">Kajian Jumat</span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191">Tadarus</span> </td>
    <td align="center"><span class="style19">1</span> </td>
    <td align="center"><span class="style19"><?=$o[c1c2]?></span> </td>
    <td align="center"><span class="style19"><?=$o[c1c3]?></span> </td>
    <td align="center"><span class="style19"><?=$o[c1c4]?></span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191">Sholat Jamaah</span> </td>
    <td align="center"><span class="style19">1/<?=$o[c1c2]?></span> </td>
    <td align="center"><span class="style19">1</span> </td>
    <td align="center"><span class="style19"><?=$o[c2c3]?></span> </td>
    <td align="center"><span class="style19"><?=$o[c2c4]?></span> </td>
  </tr>
   <tr>
    <td align="center"><span class="style191">IPK</span> </td>
    <td align="center"><span class="style19">1/<?=$o[c1c3]?></span> </td>
    <td align="center"><span class="style19">1/<?=$o[c1c2]?></span> </td>
    <td align="center"><span class="style19">1</span> </td>
    <td align="center"><span class="style19"><?=$o[c3c4]?></span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191"> Kajian Jumat</span> </td>
    <td align="center"><span class="style19">1/<?=$o[c1c4]?></span> </td>
    <td align="center"><span class="style19">1/<?=$o[c2c4]?></span> </td>
    <td align="center"><span class="style19">1/<?=$o[c3c4]?></span> </td>
    <td align="center"><span class="style19">1</span> </td>
  </tr>
</table> <br>
<table width="94%" border="0" align="justify" cellpadding="2" cellspacing="0">
  <tr>
    <td ><span class="style19">Ubah matriks Pairwise Comparison ke bentuk desimal dan jumlahkan tiap kolom tersebut</span> </td>
  </tr>
</table>
<table width="50%" border="1" align="justify" cellpadding="2" cellspacing="0">
  <tr>
    <td align="center"><span class="style191">&nbsp;</span> </td>
    <td align="center"><span class="style191">Tadarus</span> </td>
    <td align="center"><span class="style191">Sholat Jamaah</span> </td>
    <td align="center"><span class="style191">IPK</span> </td>
    <td align="center"><span class="style191">Kajian Jumat</span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191">Tadarus</span> </td>
    <td align="center"><span class="style19">1.0</span> </td>
    <td align="center"><span class="style19"><?=$o[c1c2]?>.0</span> </td>
    <td align="center"><span class="style19"><?=$o[c1c3]?>.0</span> </td>
    <td align="center"><span class="style19"><?=$o[c1c4]?>.0</span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191">Sholat Jamaah</span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$o[c1c2], 1, '.', ' ');?></span> </td>
    <td align="center"><span class="style19">1.0</span> </td>
    <td align="center"><span class="style19"><?=$o[c2c3]?>.0</span> </td>
    <td align="center"><span class="style19"><?=$o[c2c4]?>.0</span> </td>
  </tr>
   <tr>
    <td align="center"><span class="style191">IPK</span> </td>
    <td align="center"><span class="style19"> <?=number_format(1/$o[c1c3], 1, '.', ' ');?> </span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$o[c1c2], 1, '.', ' ');?></span> </td>
    <td align="center"><span class="style19">1.0</span> </td>
    <td align="center"><span class="style19"><?=$o[c3c4]?>.0</span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191">Kajian Jumat</span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$o[c1c4], 1, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$o[c1c3], 1, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$o[c1c2], 1, '.', ' ');?></span> </td>
    <td align="center"><span class="style19">1.0</span> </td>
  </tr>
   <tr bgcolor="#66CC33">
    <td align="center"><span class="style191">Jumlah</span> </td>
    <td align="center"><span class="style19">
	<?php $a = 1+number_format(1/$o[c1c2], 1, '.', ' ')+number_format(1/$o[c1c3], 1, '.', ' ')+number_format(1/$o[c1c4], 1, '.', ' '); ?>
	<?=number_format($a, 1, '.', ' ');?></span> </td>
    <td align="center"><span class="style19">
	<?php $b = $o[c1c2]+1+number_format(1/$o[c1c2], 1, '.', ' ')+number_format(1/$o[c1c3], 1, '.', ' ')?>
	<?=number_format($b, 1, '.', ' ');?></span> </td>
    <td align="center"><span class="style19">
	<?php $c = $o[c1c3]+$o[c1c2]+1+number_format(1/$o[c1c2], 1, '.', ' ');?>
	<?=number_format($c, 1, '.', ' ');?></span> </td>
    <td align="center"><span class="style19">
	<?php $d = $o[c1c4]+$o[c1c3]+$o[c1c2]+1 ?>
	<?=number_format($d, 1, '.', ' ');?></span> </td>
  </tr>
</table>

<br>
<table width="94%" border="0" align="justify" cellpadding="2" cellspacing="0">
  <tr>
    <td ><span class="style19">Bagi elemen-elemen tiap kolom dengan jumah kolom yang bersangkutan</span> </td>
  </tr>
</table>
<table width="50%" border="1" align="justify" cellpadding="2" cellspacing="0">
  <tr>
    <td align="center"><span class="style191">&nbsp;</span> </td>
    <td align="center"><span class="style191">Tadarus</span> </td>
    <td align="center"><span class="style191">Sholat Jamaah</span> </td>
    <td align="center"><span class="style191">IPK</span> </td>
    <td align="center"><span class="style191">Kajian Jumat</span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191">Tadarus</span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$a, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[c1c2]/$b, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[c1c3]/$c, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[c1c4]/$d, 2, '.', ' ');?></span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191">Sholat Jamaah</span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[c1c2])/$a, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$b, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[c1c2]/$c, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[c1c3]/$d, 2, '.', ' ');?></span> </td>
  </tr>
   <tr>
    <td align="center"><span class="style191">IPK</span> </td>
    <td align="center"><span class="style19"> <?=number_format((1/$o[c1c3])/$a, 2, '.', ' ');?> </span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[c1c2])/$b, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$c, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[c1c2]/$d, 2, '.', ' ');?></span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191">Kajian Jumat</span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[c1c4])/$a, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[c1c3])/$b, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[c1c2])/$c, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$d, 2, '.', ' ');?></span> </td>
  </tr>
</table>
<br>
<table width="94%" border="0" align="justify" cellpadding="2" cellspacing="0">
  <tr>
    <td ><span class="style19">Hasil dari penjumlahan bobot atau eigen vektor normalisasi</span> </td>
  </tr>
</table>
<table width="70%" border="1" align="justify" cellpadding="2" cellspacing="0">
  <tr>
    <td width="13%" align="center"><span class="style191">&nbsp;</span> </td>
    <td width="8%" align="center"><span class="style191">Tadarus</span> </td>
    <td width="8%" align="center"><span class="style191">Sholat Jamaah</span> </td>
    <td width="8%" align="center"><span class="style191">IPK</span> </td>
    <td width="13%" align="center"><span class="style191">Kajian Jumat</span> </td>
    <td width="16%" align="center"><span class="style191">Jumlah</span> </td>
    <td width="34%" align="center"><span class="style191">Eigen Vektor Normalisasi</span> </td>
    
    
  </tr>
  <tr>
    <td align="center"><span class="style191">Tadarus</span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$a, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[c1c2]/$b, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[c1c3]/$c, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[c1c4]/$d, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><? $a1=number_format(1/$a, 2, '.', ' ')+number_format($o[c1c2]/$b, 2, '.', ' ')+number_format($o[c1c3]/$c, 2, '.', ' ')+number_format($o[c1c4]/$d, 2, '.', ' ');
	echo $a1;
	?></span> </td>
    <td align="center"><span class="style19"><?=number_format($a1/4, 2, '.', ' ');?></span> </td>
    
  </tr>
  <tr>
    <td align="center"><span class="style191">Sholat Jamaah</span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[mata])/$a, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$b, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[mata]/$c, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[kaki]/$d, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><? $b1=number_format((1/$o[c1c2])/$a, 2, '.', ' ')+number_format(1/$b, 2, '.', ' ')+number_format($o[c1c2]/$c, 2, '.', ' ')+number_format($o[c1c3]/$d, 2, '.', ' '); echo $b1; ?></span> </td>
     <td align="center"><span class="style19"><?=number_format($b1/4, 2, '.', ' ');?></span> </td>
  </tr>
   <tr>
    <td align="center"><span class="style191">IPK</span> </td>
    <td align="center"><span class="style19"> <?=number_format((1/$o[kaki])/$a, 2, '.', ' ');?> </span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[mata])/$b, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$c, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format($o[mata]/$d, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><? $c1=number_format((1/$o[c1c3])/$a, 2, '.', ' ')+number_format((1/$o[c1c2])/$b, 2, '.', ' ')+number_format(1/$c, 2, '.', ' ')+number_format($o[c1c2]/$d, 2, '.', ' '); echo $c1; ?></span> </td>
    <td align="center"><span class="style19"><?=number_format($c1/4, 2, '.', ' ');?></span> </td>
  </tr>
  <tr>
    <td align="center"><span class="style191">Kajian Jumat</span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[c1c4])/$a, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[c1c3])/$b, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format((1/$o[c1c2])/$c, 2, '.', ' ');?></span> </td>
    <td align="center"><span class="style19"><?=number_format(1/$d, 2, '.', ' ');?></span> </td>
     <td align="center"><span class="style19"><? $d1=number_format((1/$o[c1c4])/$a, 2, '.', ' ')+number_format((1/$o[c1c3])/$b, 2, '.', ' ')+number_format((1/$o[c1c2])/$c, 2, '.', ' ')+number_format(1/$d, 2, '.', ' '); echo $d1;?></span> </td>
     <td align="center"><span class="style19"><?=number_format($d1/4, 2, '.', ' ');?></span> </td>
  </tr>
</table>
<br>
<table width="94%" border="0" align="justify" cellpadding="2" cellspacing="0">
  <tr>
    <td ><span class="style19">Menentukan nilai Eigen atau jumlah bobot (λmaks)</span> </td>
  </tr>
  <tr>
   <td ><span class="style19">λmaks = <?php $maks = ($a*$a1/4) + ($b*$b1/4) + ($c*$c1/4) + ($d*$d1/4); echo number_format($maks, 3, '.', ' ');?>
   </span> </td>
  </tr>
  <tr>
   <td ><span class="style19">CI = <?php $ci = (number_format($maks, 3, '.', ' ')-4)/3;echo number_format($ci, 3, '.', ' ')?>
   </span> </td>
  </tr>
  <tr>
   <td ><span class="style19">Rasio Konsistensi = <?php $rasio = (number_format($ci, 3, '.', ' '))/0.90;echo number_format($rasio, 3, '.', ' ')?>
   </span> </td>
  </tr>
</table>
<?php
	if($_POST['Submit']){
	$result = $jp->sql("update ahp set c1c2='".$_POST['c1c2']."',c1c3='".$_POST['c1c3']."',c1c4='".$_POST['c1c4']."',c2c3='".$_POST['c2c3']."',c2c4='".$_POST['c2c4']."',c3c4='".$_POST['c3c4']."'");
	
	if ($rasio > 0.1) { $jp->alert("Nilai CR >0.1, SIlahkan Ubah Matrik"); } else
{
$jp->sql("update ahp set bobotc1='".$a1."'/4,bobotc2='".$b1."'/4,bobotc3='".$c1."'/4,bobotc4='".$d1."'/4  ");
	$jp->alert('Berhasil Disimpan');

		?>
		
		<?php
	}
 }
 ?>
</form>


</body>
</html>