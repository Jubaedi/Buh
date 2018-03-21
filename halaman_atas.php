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
</body>
</html>
