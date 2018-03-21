<?
include "koneksi.php";
$jumlah = count($_POST["item"]);
for($i=0; $i < $jumlah; $i++) 
{
    $noagenda_id=$_POST["item"][$i];
	//$res = mysql_query("select photo from tb_mahasiswa where nim='$nim' LIMIT 1");
	//$d=mysql_fetch_object($res);
	//if (strlen($d->photo)>3)
	//{
		//if (file_exists($d->photo)) unlink($d->photo);
	//}	
	$myquery =  "delete from spt where noagenda_id ='$noagenda_id' limit 1"; 
	$hapus = mysql_query($myquery) or die ("gagal menghapus"); 
}
	echo "<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=index.php?file=fieldset2\">";
?>