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
<ul class="dropmenu">
<li><a href="index.php?file=intro">Home</a>
</li>
<li><a href="index.php?file=paging_beres">Input Lokasi</a>
</li>
<li><a href="">SPT</a>
    <ul>
    <li><a href="index.php?file=tahun_set">Data Pegawai</a></li>
    </ul>
</li>
<li><a href="">Pencarian</a>
    <ul>
    <li><a href="index.php?file=fieldset2">Data</a></li>
    <li><a href="index.php?file=paging_5">Paging</a></li>
    <li><a href="#33">Sub Menu 3</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
</li>
</ul>
</body>
</html>
