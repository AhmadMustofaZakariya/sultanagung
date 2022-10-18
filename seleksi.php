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
<script>
//==============================SCRIPT TAMBAHAN UNTUK FILTER KEYBOARD======================================================
function numbersonly(e) {
    var unicode = e.charCode ? e.charCode : e.keyCode
    if ((unicode != 8) && (unicode != 13) && (unicode != 37) && (unicode != 39) && (unicode != 9) && (unicode != 46)) { //if the key isn't the backspace key (which we should allow)
        if (unicode < 48 || unicode > 57) //if not a number
            return false //disable key press
    }
}

</script>
<?php 
if ($_POST[tombol]=="Simpan"){
	$jumlah = $_POST["jumlah"];
	$tahun = $_POST["tahun"];
	$idbulan = $_POST["idbulan"];
	$jp->sql("DELETE FROM seleksi where tahun='".$_POST[tahun]."' and idbulan='".$_POST[idbulan]."'");
	for ($n=1 ; $n <= $jumlah ; $n++)
	{
		$kdsantri[n] = $_POST["kdsantri$n"];
		$c1[n] = $_POST["c1$n"];
		$c2[n] = $_POST["c2$n"];
		$c3[n] = $_POST["c3$n"];
		$c4[n] = $_POST["c4$n"];
		$zz="INSERT INTO seleksi VALUES ('$kdsantri[n]','$tahun', '$idbulan', '$c1[n]','$c2[n]','$c3[n]','$c4[n]') ";
		$jp->sql($zz);
	}

$jp->alert('Data Tersimpan');
$jp->gotox("index.php?page=cetakseleksi");
} 

?>

 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>::: <?=$title?> :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<link href="flora.datepicker.css" rel="stylesheet" type="text/css">
<link href="css/sites.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {color: #000000; font-family: Georgia, "Times New Roman", Times, serif; font-size: 14px; }
.style14 {color: #FFF; font-size: 12px; }
.style16 {font-family: Georgia, "Times New Roman", Times, serif}
.style17 {font-size: 24px; font-weight: bold; color: #000000;}
-->
</style>
</head>
<body>



<form action="" method="post" enctype="multipart/form-data" name="Form1" id="Form1" >
<table id="example2" class="table table-bordered table-striped" width="auto">
 <thead>
  <tr>
    <td colspan="10"><div align="center" class="style16"><span class="style17">SELEKSI SANTRI </span></div></td>
  </tr>
  
  <tr>
     <td colspan="10"><span class="style16">Tahun <input name="tahun" type="text" id="tahun" value="<?=$_POST[tahun]?>" size="4" maxlength="4"  readonly class="input-small"> </span>
     <span class="style16">Bulan <input name="idbulan" type="text" id="idbulan" value="<?=$_POST[idbulan]?>" size="4" maxlength="4"  readonly class="input-small"> </span></td>
       
    </tr>
  
  <tr bgcolor="#7e000f">
    <th width="39"  align="center" valign="middle"><span class="style14">No.</span></th>
    <th width="100" valign="middle"><span class="style14">Santri</span></th>
	<th width="30" valign="middle"><span class="style14">Tadarus</span></th>
    <th width="30" valign="middle"><span class="style14">Sholat Jamaah</span></th>
	<th width="30" valign="middle"><span class="style14">IPK</span></th>
    <th width="30" valign="middle"><span class="style14">Kajian Jumat</span></th>
  </tr>
  </thead>
<?php 
  $q="SELECT * from santri";
  $result=$jp->sql($q);
  $n = 0;while($row = $jp->fetch($result)){ $n++;  
  $nilai = $jp->fetch($jp->sql("select * from seleksi where tahun='".$_POST[tahun]."' and idbulan='".$_POST[idbulan]."' and kdsantri='".$row[kdsantri]."'"));
  ?>
  <tr>
    <td  align="center" valign="top"><span class="style12"> <?=$n?><input name="jumlah" type="hidden" id="jumlah" value="<?php echo "$n"; ?>" />  </span></td>
    <td  align="center"><span class="style12"><input name="<?php echo "kdsantri$n"; ?>" type="hidden" value="<?php echo "$row[kdsantri]"; ?>" /><?=$row[nama]?> </span> </td>
	
    <td  valign="top" align="center"><span class="style12">
	  <div class="col-sm-2">
       <input name="<?php echo "c1$n"; ?>" type="text" size="3" maxlength="3"  onKeyPress="return numbersonly(event);"  class="input-small" value="<?=$nilai[c1]?>"></div> </span> </td>
       <td  valign="top" align="center"><span class="style12">
	  <div class="col-sm-2">
       <input name="<?php echo "c2$n"; ?>" type="text" size="3" maxlength="3"  onKeyPress="return numbersonly(event);"  class="input-small" value="<?=$nilai[c2]?>"></div> </span> </td> 
        <td  valign="top" align="center"><span class="style12">
	  <div class="col-sm-2">
       <input name="<?php echo "c3$n"; ?>" type="text" size="3" maxlength="3"  onKeyPress="return numbersonly(event);"  class="input-small" value="<?=$nilai[c3]?>"></div> </span> </td>
        <td  valign="top" align="center"><span class="style12">
	  <div class="col-sm-2">
       <input name="<?php echo "c4$n"; ?>" type="text" size="3" maxlength="3"  onKeyPress="return numbersonly(event);"  class="input-small" value="<?=$nilai[c4]?>"></div> </span> </td>
       
    
  </tr>
  <?php } ?>
  <thead>
  <tr align="left" valign="top">
    <td colspan="10" align="left">&nbsp;&nbsp;<input type="submit" name="tombol" class="btn btn-danger" value="Simpan" onClick="return doSubmit()">        
      <input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='index.php?page=cetaknilai'">
	
	</td>
  </tr>
  </thead>

</table>
</form>

</body>
</html>