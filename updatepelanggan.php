<?php
include "koneksi.php";


if (isset($_POST['edit'])){
$id = $_POST['id'];
$namapelanggan= $_POST ['namapelanggan'];
$alamat = $_POST ['alamat'];
$nomortelepon= $_POST ['nomortelepon'];

$query= mysqli_query($koneksi, "UPDATE pelanggan SET NamaPelanggan='$namapelanggan', 
Alamat='$alamat', NomorTelepon='$nomortelepon' WHERE PelangganID='$id'");
if ($query) {
    //apalah daya
?>
<script>
alert('Pelanggan Berhasil Diedit');
window.location = "tampilanpelanggan.php";
</script>
<?php

} else {
    //pesan warning
?>
<script>
    alert('Gagal Edit Pelanggan');
    window.location = "editpelanggan.php?id=<?php echo $id; ?>";
    </script>
    <?php
}
}
?>
