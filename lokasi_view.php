<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function konfirmasi() {
$pilihan=confirm("Yakin Data Ini Mau Dihapus");
if($pilihan){
		return true
	}else{
		return false
	}
}
</script>
<?php
mysql_connect("localhost","root","250370");
mysql_select_db("spt");

// Langkah 1
$batas=12; 
$halaman=$_GET['halaman'];
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi = ($halaman-1) * $batas;
}

// Langkah 2: Sesuaikan perintah SQL
$tampil="select * from tbl_lokasi order by kd_lokasi limit $posisi,$batas";
$hasil=mysql_query($tampil);
?>
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
-->
</style>
<body>
<?php
include('halaman_atas.php');
?>
<a href="index.php?file=lokasi_form">Tambah Lokasi</a>
<table width="100%" border="1" cellpadding="3" cellspacing="0">
      <tr bgcolor="#3399FF">
        <th><div align="center" class="style3">KODE LOKASI </div></th>
        <th><div align="center" class="style3">NAMA LOKASI</div></th>
        <th><div align="center" class="style3">PROSES EDIT DAN HAPUS</div></th>
  </tr>
<?php 
$no=0;
while ($data=mysql_fetch_array($hasil)){
$no++;
?>
      <tr bgcolor="#CCCCCC">
        <td><span class="style10"><?php echo $data[kd_lokasi];?></span></td>
        <td><span class="style10"><?php echo $data[lokasi];?></span></td>
        <td><div align="center" class="style10"><span class="style4"> [<a href="index.php?file=lokasi_edit&amp;id=<?php echo $data[kd_lokasi];?>">Edit</a>]
        [<a href="index.php?file=lokasi_hapus&amp;id=<?php echo $data[kd_lokasi];?>" onClick="return konfirmasi()">Hapus</a>]</span></div></td>
      </tr>
<?php
}
?>
</table>
<p>
<?php 
// Langkah 3
$tampil2="select * from tbl_lokasi";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
//$file="file/kec_view.php";
?>
</p>
<form  action="lokasi_view.php" method="get">
      <div align="right">Halaman : <select name="halaman" onChange='this.form.submit()'>;
      <?php 
	    for ($i=1;$i<=$jmlhalaman;$i++)
        //$awal = (($i*$batas)-$batas+1);
        //$akhir = $batas*$i;
        if ($i==$halaman){
          echo "<option value=$i selected>$i</option>";
		}
		else {
          echo "<option value=$i>$i<br></option>";
       }
	   ?>
	    </select>
      </div>
</form>
</body>