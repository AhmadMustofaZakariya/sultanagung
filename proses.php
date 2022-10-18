<?php
session_start();
error_reporting(0);
include 'includes/lib.inc.php';
include APP_ROOT."/includes/class.inc.php";
include APP_ROOT."/includes/auth.inc.php";
include INCLUDES_DIR."/class.paging.php";
$jp = new jcore();
switch($_REQUEST[page]){

	
	case "santri":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from santri WHERE kdsantri='".$_POST['kdsantri']."'  ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Santri Sudah Dimasukan...');
			  $jp->gotox("index.php?page=santri");
			  }
			 else if($jumlah>0){
			  $q = "update santri set nama=\"".$_POST[nama]."\",alamat='".$_POST[alamat]."',telepon='".$_POST[telepon]."' WHERE kdsantri='".$kata."' ";
  		    $jp->sql($q);
			$jp->alert('Data Santri\nTelah Diubah...');
			$jp->gotox("index.php?page=santri");
     	  }
		else { 
		   $q = "replace into santri set kdsantri='".$_POST[kdsantri]."',nama=\"".$_POST[nama]."\" "
			." ,alamat='".$_POST[alamat]."',telepon='".$_POST[telepon]."' ";
		    $jp->sql($q);
			$jp->alert('Data Santri\nTelah Tersimpan...');
			$jp->gotox("index.php?page=santri");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from santri where kdsantri=\"".$_REQUEST[kdsantri]."\"");
			$jp->alert('Data Santri\nTelah Terhapus...');
			$jp->gotox("index.php?page=santri");			
		break;
		default:
			$jp->gotox("index.php?page=pegawai");		
		break;
		}
	break;
	
	case "pengguna":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from pengguna WHERE username='".$_POST['username']."'  ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Pengguna Sudah Dimasukan...');
			  $jp->gotox("index.php?page=pengguna");
			  }
			 else if($jumlah>0){
			  $q = "update pengguna set nama=\"".$_POST[nama]."\",pass='".$_POST[pass]."' WHERE username='".$kata."' ";
  		    $jp->sql($q);
			$jp->alert('Data Pengguna\nTelah Diubah...');
			$jp->gotox("index.php?page=pengguna");
     	  }
		else { 
		   $q = "replace into pengguna set username='".$_POST[username]."',nama=\"".$_POST[nama]."\" "
			." ,pass='".$_POST[pass]."' ";
		    $jp->sql($q);
			$jp->alert('Data Pengguna\nTelah Tersimpan...');
			$jp->gotox("index.php?page=pengguna");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from pengguna where username=\"".$_REQUEST[username]."\"");
			$jp->alert('Data Pengguna\nTelah Terhapus...');
			$jp->gotox("index.php?page=pengguna");			
		break;
		default:
			$jp->gotox("index.php?page=pengguna");		
		break;
		}
	break;
	
	case "kriteria":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from kriteria WHERE nmkriteria='".$_REQUEST['nama']."' ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 if(($o['j']>0) && ($jumlah<=0)){
		   $jp->alert('Data Kriteria Sudah Dimasukan...');
		   $jp->gotox("index.php?page=kriteria");
		  } else if($jumlah>0){
		   $q = "update kriteria set nmkriteria=\"".$_POST[nama]."\",bobot=\"".$_POST[bobot]."\",nilmaks=\"".$_POST[batas]."\" WHERE kdkriteria='".$kata."' ";
		    $jp->sql($q);
			$jp->alert('Data Kriteria\nTelah Diubah...');
			$jp->gotox("index.php?page=kriteria");
		  } else { 
		    $q = "replace into kriteria set kdkriteria='".$_POST[kdkriteria]."',nmkriteria=\"".$_POST[nama]."\",bobot=\"".$_POST[bobot]."\",nilmaks=\"".$_POST[batas]."\" ";
		    $jp->sql($q);
			$jp->alert('Data Kriteria\nTelah Tersimpan...');
			$jp->gotox("index.php?page=kriteria");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from kriteria where kdkriteria=\"".$_REQUEST[kdkriteria]."\"");
			$jp->alert('Data Kriteria\nTelah Terhapus...');
			$jp->gotox("index.php?page=kriteria");			
		break;
		default:
			$jp->gotox("index.php?page=kriteria");		
		break;
		}
	break;
	
	


	
}
?>
