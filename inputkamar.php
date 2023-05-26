<form name="frmcari" action="hasilcarikamar.php" method="post">
  <input type="text" name="kCari" placeholder="Ketik nomor kamar yang dicari ">
  <input type="submit" name="bCari" value="Cari">
</form>
<form name="frminputkamar" method="post">
  <input type="text" name="namakamar" placeholder="Ketik nama kamar yang baru ">
  <input type="submit" name="bSimpan" value="Simpan">
</form>
<?php 
if (isset($_POST['bSimpan'])) {
  $namakamar=$_POST['namakamar'];
  $kon=mysqli_connect("localhost","root","","sewakamarasrama");
  $sql="insert into kamarasrama (namakamar) values ('".$namakamar."')";
  $q=mysqli_query($kon,$sql);
}
?>