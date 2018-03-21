<html>
<head>

<SCRIPT Language="JavaScript">
<!--
function cekField(frm){
  var salah=0;
  if((frm.nama.value==""))
  {
       alert("Nama Mahasiswa belum diisi!!!");
       document.isian.nama.focus();
       salah=1;
  }


  if((frm.alamat.value=="")&& (salah==0))
  {
       alert("Alamat belum diisi!!!");
       document.isian.alamat.focus();
       salah=1;
  }


  if((frm.notelp.value=="")&& (salah==0))
  {
       alert("No.Telp belum diisi!!!");
       document.isian.notelp.focus();
       salah=1;
  }
 if(salah==0)
  {
  document.forms["isian"].submit();
  }
}
</SCRIPT>

</head>

<body>

<form method="post" action="simpan.php" name="isian">


Nama<input type="text" name="nama" size="100" maxlength="250" >


Alamat<input type="text" name="alamat" size="100" maxlength="250" >


No.Telp<input type="text" name="notelp" size="100" maxlength="250" >
<input type="button" value="Simpan" onClick="cekField(this.form)"  />

</form>

</body>


