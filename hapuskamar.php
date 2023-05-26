<?php 
if (isset($_GET['nomorkamar'])) {
    $nomorkamar=$_GET['nomorkamar'];
    $kon=mysqli_connect("localhost","root","","sewakamarasrama");
    $sql="delete from kamarasrama where nomorkamar='".$nomorkamar."'";
    $q=mysqli_query($kon,$sql);
    header('location:inputkamar.php');
}
?>