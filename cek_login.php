<?php
include ("koneksi.php");
//Penangganan login jika form diisi
if(isset($_POST['username']) && isset($_POST['password']))
{
   //cek isian
   if(!empty($_POST['username']) && !empty($_POST['password']))
   {
     $username=htmlspecialchars(stripslashes($_POST['username']));
     $password=md5(htmlspecialchars(stripslashes($_POST['password'])));
     $myquery="select username from  tbl_user where username='$username' and password='$password' limit 1";
     $result=mysql_query($myquery) or die (mysql_error());
     if (mysql_num_rows($result) == 1) 
     {
	//jika username dan password cocok
	$pengguna=mysql_fetch_object($result);
	$_SESSION['login']=true;
	$_SESSION['username']=$pengguna->username;
	//$_SESSION['nama']=$pengguna->nama;
	//$_SESSION['login_terakhir']=$pengguna->login_terakhir;
        //mysql_query("update tbl_user where username='$username' limit 1") or die("Gagal memperbaharui terakhir login");
	header("location:index.php"); //ini disesuaikan tujuan halaman setelah login berhasil
      } else {
	//jika username dan password tidak cocok
	echo "<h1 align=\"center\">Username atau password salah!</h1>";
      }
   } else {
      //jika form kosong munculkan pesan
      echo "<h1 align=\"center\">Isikan username dan password!</h1>";
    }
} 
?>