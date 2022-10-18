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
if($_REQUEST[kdkriteria]!='')
{
	$q = "select * from kriteria where kdkriteria='".$_REQUEST[kdkriteria]."'";
	$r = $jp->sql($q);
	$o = $jp->fetch($r);
	$kode = $o[kdkriteria];
}

else
{
$q1= "SELECT max(RIGHT(kdkriteria,2))+1 as maks from kriteria ";
	$r1 = $jp->sql($q1);
	$o1 = $jp->fetch($r1);
	
	if (strlen($o1[maks])<=0) {
	 $kode= 'K01';
	 }
	else if (strlen($o1[maks])==1) {
	 $kode= 'K0'.$o1[maks];
	 }
	else if (strlen($o1[maks])==2) {
	 $kode= 'K'.$o1[maks];
	 } 
	 
}


?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>::: <?=$title?> :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script src="js/advviewer.js"></script>

<script type="text/javascript" src="js/jquery-ui.js"></script>
<script>
//==============================SCRIPT TAMBAHAN UNTUK FILTER KEYBOARD======================================================
function numbersonly(e) {
    var unicode = e.charCode ? e.charCode : e.keyCode
    if ((unicode != 8) && (unicode != 13) && (unicode != 37) && (unicode != 39) && (unicode != 9)) { //if the key isn't the backspace key (which we should allow)
        if (unicode < 48 || unicode > 57) //if not a number
            return false //disable key press
    }
}
//===========================================================================================

function ConfirmDel(kdkriteria){
	if(confirm('Hapus..?')){
		window.location="proses.php?page=kriteria&action=delete&kdkriteria="+kdkriteria;
	}
}


</script>


<link href="css/sites.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; color: #000000; }
.style14 {font-size: 16px; font-family: "Courier New", Courier, mono; color: #FFF;  }
.style19 {font-size: 16px; font-family: "Courier New", Courier, mono; color: #000000; }
-->
</style>
</head>
<body>


<script src="themes/js/gen_validatorv31.js" language="javascript"></script>
<form action="proses.php?page=kriteria&action=input" method="post" enctype="multipart/form-data" name="Formkriteria" id="Formkriteria" class="form-horizontal">
<input name="id_edit" type="hidden" value="<?=$o[kdkriteria]?>">
<table width="738" border="0" align="center" cellpadding="2" cellspacing="0">
  
  <tr>
    <td width="172"><span class="style19">Kode Kriteria</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
	<td width="207"><input name="kdkriteria" type="text" id="kdkriteria" value="<?=$kode?>" size="3" maxlength="3" <?=$disabled?> class="input-small"></td>
  </tr>
   <tr>
       <td width="172"><span class="style19">Nama Kriteria</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><input name="nama" type="text" id="nama" size="30" maxlength="50" value="<?=$o[nmkriteria]?>" class="input-xlarge"></td>
    </tr>
   <tr>
       <td width="172"><span class="style19">Bobot</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" >
      <select name="bobot" id="bobot" class="input-medium">
      <option value="">---</option>
      <option value="1" <?=(($o[bobot]=='1')?"selected":"")?>>Kurang Sekali</option>
      <option value="2" <?=(($o[bobot]=='2')?"selected":"")?>>Kurang</option>
      <option value="3" <?=(($o[bobot]=='3')?"selected":"")?>>Sedang</option>
      <option value="4" <?=(($o[bobot]=='4')?"selected":"")?>>Baik</option>
      <option value="5" <?=(($o[bobot]=='5')?"selected":"")?>>Baik Sekali</option>
      </select>   
      
      
       </td>
    </tr>
    <tr>
       <td width="172"><span class="style19">Nilai Batas</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><input name="batas" type="text" id="batas" size="10" maxlength="10" value="<?=$o[nilmaks]?>" onKeyPress="return numbersonly(event);" class="input-small"> </td>
    </tr>
	 
   <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td colspan="2"><input type="submit" name="Submit" class="btn btn-danger" value="Simpan" onClick="return doSubmit()">        
      <input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='index.php?page=kriteria'"></td><td width="86">&nbsp;</td>
  </tr>
</table>

</form>

<?php 
 $q="select * from kriteria ";
 $result=$jp->sql($q);
?>
<table id="example1" class="table table-bordered table-striped" width="70%">
 <thead>
  <tr bgcolor="#7e000f">
    <th width="59" align="center" valign="middle"><span class="style14">No.</span></th>
	 <th width="168" valign="middle"><span class="style14">Kode Kriteria</span></th>
	<th width="213" valign="middle"><span class="style14">Nama Kriteria</span></th>
    <th width="106" valign="middle"><span class="style14">Bobot</span></th>
    <th width="101" valign="middle"><span class="style14">Batas</span></th>
   <th width="96">	<span class="style14">Proses</span>	</th>
  </tr>
  </thead>
   <?php $n = 0;while($row = $jp->fetch($result)){ $n++; 
 
   ?>
  <tr>
    <td width="59" align="center" valign="top"><span class="style12"><?=$n?>.</span></td>
	<td width="168" valign="top" align="center"><span class="style12"><b><?=$row[kdkriteria]?></b></span></td>
    <td width="213" valign="top" align="justify"><span class="style12"><?=$row[nmkriteria]?></span></td>
    <td width="106" valign="top" align="right"><span class="style12"><?=$row[bobot]?></span></td>
    <td width="101" valign="top" align="right"><span class="style12"><?=$row[nilmaks]?></span></td>
    <td width="96" align="center" valign="top"><a href="index.php?page=kriteria&kdkriteria=<?=$row[kdkriteria]?>"><img src="css/edit.png" width="32" height="32" border="0" title="Edit" /></a>	<a href="#" onclick="return ConfirmDel('<?=$row[kdkriteria]?>')">	 <img src="css/remove.png" width="32" height="32" border="0" title="Hapus" /> </a></td>
  </tr>
  <?php } ?>
</table>

<script>
function doSubmit(){
    var v = new Validator("Formkriteria");
	v.addValidation("kdkriteria","req","kdkriteria tidak boleh kosong");
	v.addValidation("nama","req","Nama kriteria tidak boleh kosong");
	v.addValidation("bobot","req","Bobot tidak boleh kosong");
	v.addValidation("batas","req","Nilai Batas tidak boleh kosong");
	v.addValidation("fungsi","req","Fungsi tidak boleh kosong");
	
	}
</script>
</body>
</html>