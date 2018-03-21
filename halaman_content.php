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
<div id="tengah"><?php
if(!empty($_GET[file])) 
{
	if(file_exists("file/$_GET[file].php")) 
	{
	include("file/$_GET[file].php");
	} else 
	{
	echo "<script>alert('Halaman Tidak Ditemukan')</script>";
	echo "<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=index.php\">";
	}
} else 
	{
	include('file/intro.php');
}
?>
</div>
</body>
</html>
