<?php 
if (isset($_POST['kCari'])) {
    $nomorkamar=$_POST['kCari'];
    $kon=mysqli_connect("localhost","root","","sewakamarasrama");
    $sql="select * from kamarasrama where nomorkamar like '%".$nomorkamar."%'";
    $q=mysqli_query($kon,$sql);
    $r=mysqli_fetch_array($q);
}
?>
<table>
<thead>
    <tr>
        <th>Nomor Kamar</th>
        <th>Nama Kamar</th>
        <th>Aksi Rekord</th>
    </tr>
</thead>
<tbody><?php do { ?>
    <tr>
        <td><?php echo $r['nomorkamar'];?></td>
        <td><?php echo $r['namakamar'];?></td>
        <td><a href="koreksikamar.php?nomorkamar=<?php echo $r['nomorkamar'];?>">Koreksi</a>
        <a href="hapuskamar.php?nomorkamar=<?php echo $r['nomorkamar'];?>" onclick="return confirm('Apakah yakin akan dihapus ?');">Hapus</a>
    </td>
    </tr> <?php } while ($r=mysqli_fetch_array($q)); ?>
</tbody>

