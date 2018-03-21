<?php 
include("koneksi.php");
//include("file/fungsi.php");
//if(!isset($_SESSION['login'])) {
//    header("location:login.php"); //ini diisi dengan nama file halaman login
//}
?>
<title>Menu Utama SPT</title>
<link rel="shortcut icon" href="image/Untitled(1).ico"/>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<body><center>
<div id="header" align="left"><img src="image/Untitled.jpg" align="middle">SIM SPT DIKLAT TAHUN 2013
  <div id="kiri">
<form action="index.php?file=proses" method="post" name="form">
<select name="seleksi" onChange="this.form.submit()">
	<?php
	if ($_POST['seleksi']=="") echo"<option value='' selected>[Pilih Menu]</option>";
	else echo"<option value=''>[Pilih Menu]</option>";          
	if ($_POST['seleksi']=="1") echo"<option value='1' selected>Input Lokasi</option>";
	else echo"<option value='1'>Input Lokasi</option>";          
	if ($_POST['seleksi']=="2") echo"<option value='2' selected>Input Data PNS</option>";
	else echo"<option value='2'>Input Data PNS</option>";          
	?>
        </select>
<input type="text" align="right" id="lokasi2" name="txtcari" size="40" placeholder="Search Data PNS ..." value="<?php echo $_POST['txtcari']?>">
<input type="image" title="Pencarian" name="submit" src="image/search.jpg" align="absbottom" >
</form>
</div>
<?php
include('halaman_content.php');
?>
<div id="footer2">Copyright &copy; Original SIM SPT Diklat
<?php
include('hari_ini.php');
//$hari_ini=date("l, d F Y");
print($hari_ini);
//echo hari_ini(date("Y m d")); 
//echo " | "; 
//echo date("H:i:s");
//echo "WIB";
?>
</div>
</div>
</center>
</body>
</html>
		  <?php
          if ('seleksi'=="1") echo"<option value='1' selected>Input Lokasi</option>";
		  ?>	