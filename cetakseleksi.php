  	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>::: <?=$title?> :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">



<link href="css/sites.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style6 {font-size: 14px; color:#272727;}
.style10{font-size: 16px; font-family: "Courier New", Courier, mono; color: #000000; }
.style12 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; }
.style14 {color: #FFFFFF; font-size: 12px; }
-->
</style>
</head>
<body>


<script src="themes/js/gen_validatorv31.js" language="javascript"></script>
<form action="index.php?page=seleksi" method="post" enctype="multipart/form-data" name="Formcetak" id="Formcetak" >
<table width="595" border="0" align="center" cellpadding="2" cellspacing="0">
 
   <tr>
     <td width="152"><span class="style10">Tahun</span></td>
    <td width="7" align="center">:</td>
    <td colspan="2">
	<input name="tahun" type="text" id="tahun" value="" size="4" maxlength="4"  onKeyPress="return numbersonly(event);" class="input-medium">	</td>
    </tr>
    
    <tr>
     <td width="152"><span class="style10">Bulan</span></td>
    <td width="7" align="center">:</td>
    <td colspan="2">
	<select name="idbulan" id="idbulan" <?=$disabled?> class="input-medium">
      	<option value="">Pilih Bulan</option>
		<?php
		$r = $jp->sql("select * from bulan");
		while ($oKel = $jp->fetch($r)){
		$isSelKel = (($oKel[idbulan]==$o[idbulan])?"selected":"");
		?>
		<option value="<?=$oKel[idbulan]?>" <?=$isSelKel?>><?=$oKel[nmbulan] ?> </option>
      <?php } ?>
    </select>	</td>
    </tr>
   
   <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td colspan="2"><input type="submit" name="Submit" class="btn btn-danger" value="Proses" onClick="return doSubmit()">
	<input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='index.php?page=cetakkinerja'"></td><td width="31">&nbsp;</td>
  </tr>
</table>

</form>
<script src="themes/js/jquery-1.8.3.min.js"></script>
<script>
function doSubmit(){
    var v = new Validator("Formcetak");
	v.addValidation("tahun","req","Tahun Tidak Boleh Kosong");
	v.addValidation("idbulan","req","Bulan Tidak Boleh Kosong");
	}
</script>
</body>
</html>