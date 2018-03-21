<?php
include('koneksi.php');
if(isset($tahun)){
if($notelp==" "){
	echo"Anda mengisi tanggal";
}elseif(checkdate($notelp)){
	echo"tanggal valid";
}else{
	echo"tanggal tidak valid";
}
}
				$input="insert into simpan(nama,alamat,notelp) values('$nama','$alamat','$notelp')";
				$hasil=mysql_query($input);
				if ($hasil){
				echo "<script>alert('Data Berhasil Disimpan')</script>";
				echo "<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=contoh_simpan\">";
				} else {
				echo "<script>alert('Data Gagal Disimpan')</script>";
				echo "<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=contoh_simpan\">";
				}
?>