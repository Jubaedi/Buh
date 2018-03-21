<?php 
include("koneksi.php");
//if(!isset($_SESSION['login'])) {
//    header("location:login.php"); //ini diisi dengan nama file halaman login
//}
?>
<title>Menu Utama SPT</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
<img src="image/logo.jpg">
<font face="Arial, Helvetica, sans-serif" size="7">Sim Surat Perintah Kerja</font>
</div>
<div id="halaman">
<?php
include('hari_ini.php');
//$hari_ini=date("l, d F Y");
print($hari_ini);
?></div>
<div id="kiri">
<?php
include('menu.php');
?>
</div>
<div id="tengah"><?php
if(!empty($_GET[file])) 
{
	if(file_exists("file/$_GET[file].php")) 
	{
	include("file/$_GET[file].php");
	} else 
	{
	echo "<h2>Error !<br/>Halaman tidak ditemukan !</h2>";
	}
} else 
	{
	include('file/intro.php');
}
?>
</div>
</body>
</html>
