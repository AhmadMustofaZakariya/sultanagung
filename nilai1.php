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
$cek = mysql_num_rows($jp->sql("SELECT * FROM nilai where periode='".$_POST[periode]."' "));
if ($cek>0) {
$jp->alert('Data Penilaian Telah Diproses');
$jp->gotox("index.php?page=cetaknilai ");	
} else {
$jumlah = $_POST["jumlah"];
$periode = $_POST["periode"];
//echo $jumlah;
if ($_POST[tombol]=="Simpan"){
for ($n=1 ; $n <= $jumlah ; $n++)
{
//echo $n;
$kdsantri[n] = $_POST["kdsantri$n"];
//echo $kdmitra[n]." ";
$sql0=$jp->sql("select * from kriteria order by kdkriteria");
$i=0;while($row0=$jp->fetch($sql0)){$i++;
$kdkriteria[n] = $row0[kdkriteria];
$nilai[i] = $_POST["nilai$n$i"];
$zz="INSERT INTO nilai (kdsantri, periode, kdkriteria, nilai) VALUES ('$kdsantri[n]','$periode','$kdkriteria[n]','$nilai[i]') ";
$jp->sql($zz);}
}

$tgl = $_POST[periode];
$jum = $jp->fetch($jp->sql("SELECT SUM(bobot) as total from kriteria"));
$jp->sql("update kriteria set bobotnil=bobot/".$jum[total]."");
$q1 = $jp->sql("select * from kriteria");
while($o = $jp->fetch($q1)){	
  $maks=$jp->fetch($jp->sql("SELECT MAX(nilai) as batas from nilai where kdkriteria='".$o[kdkriteria]."' and periode='".$tgl."' "));	
  $min =$jp->fetch($jp->sql("SELECT MIN(nilai) as batas from nilai where kdkriteria='".$o[kdkriteria]."' and periode='".$tgl."' "));	

$jp->sql("update kriteria set maksimum='".$maks[batas]."',minimum='".$min[batas]."' WHERE kdkriteria='".$o[kdkriteria]."' ");
}

$q1 = $jp->sql("select * from kriteria");
while($o = $jp->fetch($q1)){	
$a="INSERT INTO hasil(kdsantri,periode,nilai,kdkriteria) SELECT kdsantri,'".$tgl."', ((nilai-minimum)/(maksimum-minimum) * (bobotnil)) AS akhir,'".$o[kdkriteria]."'  FROM nilai a INNER JOIN kriteria b ON a.kdkriteria=b.kdkriteria  WHERE periode='".$tgl."' and a.kdkriteria='".$o[kdkriteria]."'";
$jp->sql($a);
}
$jp->alert('Data Tersimpan');
$jp->gotox("index.php?page=cetaknilai");
} 
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
<script type="text/javascript" language="javascript">

function cek_nilai(nilai,maks) {
var jumlah2=new Number(nilai.value);
var stok2=new Number(maks.value);
if(nilai>maks)
{
	
  alert('Nilai Melebihi Maksimum');
 location.reload(true);
  
  return false;

  
}
}
</script>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="Form1" id="Form1" >
<?php 
		 $q="SELECT * from pegawai";
		
		//echo $q;
		$result=$jp->sql($q);
		?>
		
<table id="example2" class="table table-bordered table-striped" width="auto">
 <thead>
  <tr>
    <td colspan="10"><div align="center" class="style16"><span class="style17">PENILAIAN PEGAWAI </span></div></td>
  </tr>
  
  <tr>
     <td colspan="10"><span class="style16">Periode <input name="periode" type="text" id="periode" value="<?=$_POST[periode]?>" size="4" maxlength="4"  readonly class="input-small"> </span>

    </td>
     
	
    </tr>
  
  <tr bgcolor="#7e000f">
    <th width="39"  align="center" valign="middle"><span class="style14">No.</span></th>
    <th width="231" valign="middle"><span class="style14">Pegawai</span></th>
	<?php $sql0=$jp->sql("select * from kriteria order by kdkriteria");
	   while($row0=$jp->fetch($sql0))
		{ ?>
    <th width="51"  valign="middle"><span class="style14"><?=$row0[nmkriteria]?> <br> Maks = <?=$row0[nilmaks]?></span></th>
	<?php } ?>
  </tr>

  <?php $n = 0;while($row = $jp->fetch($result)){ $n++; 
 
   ?>
  <tr>
    <td  align="center" valign="top"><span class="style12">
      <?=$n?>
	   <input name="jumlah" type="hidden" id="jumlah" value="<?php echo "$n"; ?>" />  </span></td>
 
    <td  align="center"><span class="style12"><b>
      
	  <input name="<?php echo "kdsantri$n"; ?>" type="hidden" value="<?php echo "$row[kdsantri]"; ?>" />
    
      <?=$row[nama]?>
      </b> </span>
	  <?php $sql0=$jp->sql("select * from kriteria order by kdkriteria"); $i=0;
	   while($row0=$jp->fetch($sql0))
		{$i++; ?>
    <td  valign="top" align="center"><span class="style12">
	  <div class="col-sm-2">
      	  <input name="<?php echo "nilai$n$i"; ?>" type="text" size="1" maxlength="1"  onKeyPress="return numbersonly(event);"  onblur="return cek_nilai(this.value,<?=$row0[nilmaks]?>);" class="input-small">	
      
        
     
     
      
	  </div>
    </span> </td>
    <?php } ?>
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