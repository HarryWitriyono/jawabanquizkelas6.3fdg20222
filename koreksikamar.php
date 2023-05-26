<?php 
if (isset($_GET['nomorkamar'])) {
    $nomorkamar=$_GET['nomorkamar'];
    $kon=mysqli_connect("localhost","root","","sewakamarasrama");
    $sql="select * from kamarasrama where nomorkamar = '".$nomorkamar."'";
    $q=mysqli_query($kon,$sql);
    $r=mysqli_fetch_array($q);
    ?>
<form name="frminputkamar" method="post">
  <input type="hidden" name="nomorkamar" value="<?php echo $r['nomorkamar'];?>">
  <input type="text" name="namakamar" title="Ketik nama kamar yang baru " value="<?php echo $r['namakamar'];?>">
  <input type="submit" name="bSimpan" value="Simpan">
</form>
<?php } ?>
<?php 
if (isset($_POST['bSimpan'])) {
  $nomorkamar=$_POST['nomorkamar'];  
  $namakamar=$_POST['namakamar'];
  $sql="update kamarasrama set namakamar='".$namakamar."' where nomorkamar='".$nomorkamar."'"; 
  $q=mysqli_query($kon,$sql);
  header("location:inputkamar.php");
}
?>