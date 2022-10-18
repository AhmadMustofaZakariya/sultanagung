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
if($_REQUEST[username]!='')
{
	$q = "select * from pengguna where username='".$_REQUEST[username]."'";
	$r = $jp->sql($q);
	$o = $jp->fetch($r);
	$disabled = " readonly='true' ";
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


function ConfirmDel(username){
	if(confirm('Hapus..?')){
		window.location="proses.php?page=pengguna&action=delete&username="+username;
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
<form action="proses.php?page=pengguna&action=input" method="post" enctype="multipart/form-data" name="Formpengguna" id="Formpengguna" >
<input name="id_edit" type="hidden" value="<?=$o[username]?>">
<table width="738" border="0" align="center" cellpadding="2" cellspacing="0">
 <tr>
    <td width="172"><span class="style19">Username</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
	<td width="180"><input name="username" type="text" id="username" value="<?=$o[username]?>" size="30" maxlength="30" <?=$disabled?>>	</td>
 </tr>
 <tr>
   <td width="172"><span class="style19">Nama</span> </td>
   <td width="11" align="center"><span class="style19">:</span></td>
    <td width="180" ><input name="nama" type="text" id="nama" size="30" maxlength="30" value="<?=$o[nama]?>" ></td>
  </tr>
 <tr>
     <td><span class="style19">Password</span></td>
    <td align="center"><span class="style19">:</span></td>
    <td colspan="2"><input name="pass" type="password" id="pass" value="<?=$o[pass]?>" size="20" maxlength="20">	</td>
    </tr>
        
   <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td colspan="2"><input type="submit" name="Submit" class="btn btn-danger" value="Simpan" onClick="return doSubmit()">        
      <input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='index.php?page=pengguna'"></td><td width="86">&nbsp;</td>
  </tr>
</table>

</form>

<?php 
 $q="select * from pengguna ";
 $result=$jp->sql($q);
?>
<table id="example1" class="table table-bordered table-striped" width="93%">
 <thead>
  <tr bgcolor="#7e000f">
   <th width="59" align="center" valign="middle"><span class="style14">No.</span></th>
   <th width="90" valign="middle"><span class="style14">Username </span></th>
   <th width="281" valign="middle"><span class="style14">Nama</span></th>
   <th width="105" valign="middle"><span class="style14">Password</span></th>
   <th width="110">	<span class="style14">Proses</span>	</th>
  </tr>
 </thead>
  <?php $n = 0;while($row = $jp->fetch($result)){ $n++;?>
  <tr>
    <td width="59" align="center" valign="top"><span class="style12"><?=$n?>.</span></td>
	<td width="90" valign="top" align="center"><span class="style12"><b> <?=$row[username]?></b></span></td>
    <td width="281" valign="top" align="justify"><span class="style12"><?=$row[nama]?></span></td>
	<td width="105" valign="top" align="justify"><span class="style12"><?=$row[pass]?></span></td>
	<td width="110" align="center" valign="top"><a href="index.php?page=pengguna&username=<?=$row[username]?>"><img src="css/edit.png" width="32" height="32" border="0" title="Edit" /></a><a href="#" onclick="return ConfirmDel('<?=$row[username]?>')">	 <img src="css/remove.png" width="32" height="32" border="0" title="Hapus" /> </a></td>
  </tr>
  <?php } ?>
</table>
	
<script>
function doSubmit(){
    var v = new Validator("Formpengguna");
	v.addValidation("username","req","Username tidak boleh kosong");
	v.addValidation("nama","req","Nama pengguna tidak boleh kosong");
	v.addValidation("bagian","req","Bagian tidak boleh kosong");
    v.addValidation("pass","req","Password tidak boleh kosong");
	}
</script>
</body>
</html>