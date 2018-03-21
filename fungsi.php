<script type="text/javascript" src="file/jquery.min.js"></script>
<script type="text/javascript" src="file/jquery-ui.min.js"></script>
<link rel="stylesheet" href="file/jquery-ui.css" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<script>
$(function() {
 $( "#datepicker" ).datepicker({
  changeMonth: true,
  changeYear: true,
  dateFormat:'dd-mm-yy',
 });
});
</script>
<script type="text/javascript">
function konfirmasi() {
$pilihan=confirm("Yakin Data Ini Mau Dihapus");
if($pilihan){
		return true
	}else{
		return false
	}
}

function simpan() {
$pilihan=confirm("Anda Yakin Data Ini Sudah Benar");
if($pilihan){
		return true
	}else{
		return false
	}
}

function printer_open() {
$handle=confirm("Anda Yakin Data Ini Sudah Benar");
if($handle){
		return true
	}else{
		return false
	}
}

</script>

<?php
$lokasi=$_POST['lokasi'];
function input_lokasi($lokasi) {
$input="insert into tbl_lokasi(lokasi) values('$lokasi')";
$hasil_cek=mysql_query($input); 
return $hasil_cek;
}
?>

<?php
function cek_kec_nama($kec_nama) {
$hasil_cek=mysql_num_rows(mysql_query("select kec_nama from tbl_kecamatan where kec_nama='$kec_nama'"));
return $hasil_cek;
}

function cek_kec_id($kec_id) {
$hasil_cek=mysql_num_rows(mysql_query("select kec_id from tbl_kelurahan where kec_id='$kec_id'"));
return $hasil_cek;
}

function cek_barang($kode_barang) {
$hasil_cek=mysql_num_rows(mysql_query("select IDBarang from tblbarang where IDBarang='$kode_barang'"));
return $hasil_cek;
}

function cek_penjualan($tgl_transaksi) {
$hasil_cek=mysql_num_rows(mysql_query("select *  from v_laporan_penjualan where TglTransaksi='$tgl_transaksi'"));
return $hasil_cek;
}

function jml_barang($kode_barang,$status){
$hasil_hitung=mysql_fetch_array(mysql_query("select sum(jumlah) as jumlah from tbltransaksi where IDBarang='$kode_barang' and status='$status' and Jumlah>0"));
return $hasil_hitung[jumlah];
}

function jml_retur($kode_barang){
$hasil_hitung=mysql_fetch_array(mysql_query("select sum(jumlah) as jumlah from tbltransaksi where IDBarang='$kode_barang' and status='K' and Jumlah<0"));
return abs($hasil_hitung[jumlah]);
}

function sisa_barang($kode_barang){
$hasil_sisa=mysql_fetch_array(mysql_query("select tblbarang.IDBarang ,(select sum(jumlah) as jml FROM 
tbltransaksi 
where status='M' and IDBarang='$kode_barang'
group by IDBarang)-(select sum(jumlah) as jml FROM 
tbltransaksi 
where status='K' and IDBarang='$kode_barang'
group by IDBarang)
as sisa from tblbarang where IDBarang='$kode_barang'
"));

return $hasil_sisa[sisa];
}

function ambil_tgl_transaksi($id) {
$sql_tgl=mysql_fetch_array(mysql_query("select * from tbltransaksi where IDTransaksi='$id'"));
return $sql_tgl[TglTransaksi];
}

function ambil_kode_supplier($kode_barang) {
$sql_supplier=mysql_fetch_array(mysql_query("select * from tblbarang where IDBarang='$kode_barang'"));
return $sql_supplier[IDSupplier];
}

function bln_indonesia($bulan) {
$array_bulan=array("01"=>"Januari",
"02"=>"Feb",
"03"=>"Mar",
"04"=>"April",
"05"=>"Mei",
"06"=>"Juni",
"07"=>"Juli",
"08"=>"Agustus",
"09"=>"September",
"10"=>"Oktober",
"11"=>"Nopember",
"12"=>"Desember");
$bln_temp=explode("-",$bulan);
$bln=$bln_temp[1];
$thn=$bln_temp[0];
$nama_bulan=$array_bulan[$bln];
return $nama_bulan." ".$thn;
}

function tgl_indonesia($tanggal) {
$array_bulan=array("01"=>"Januari",
"02"=>"Februari",
"03"=>"Maret",
"04"=>"April",
"05"=>"Mei",
"06"=>"Juni",
"07"=>"Juli",
"08"=>"Agustus",
"09"=>"September",
"10"=>"Oktober",
"11"=>"Nopember",
"12"=>"Desember");
$tgl_temp=explode("-",$tanggal);
$tgl=$tgl_temp[2];
$bln=$tgl_temp[1];
$thn=$tgl_temp[0];
$nama_bulan=$array_bulan[$bln];
return $tgl." ".$nama_bulan." ".$thn;
}

function nama_supplier($kode_supplier) {
$sql_supplier=mysql_fetch_array(mysql_query("select * from tblsupplier where IDSupplier='$kode_supplier'"));
$nama_supplier=$sql_supplier[NamaSupplier];
return $nama_supplier;
}

function jml_max($kode_barang){
$jml_max=mysql_fetch_array(mysql_query("select Jml_max from tblbarang where IDBarang='$kode_barang' "));
return $jml_max[Jml_max];
}

function jml_min($kode_barang){
$jml_min=mysql_fetch_array(mysql_query("select Jml_min from tblbarang where IDBarang='$kode_barang' "));
return $jml_min[Jml_min];
}
?>
