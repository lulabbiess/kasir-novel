<?php
include "koneksi.php";


if (isset($_POST['edit'])){
$id = $_POST['id'];
$namaproduk= $_POST ['namaproduk'];
$harga = $_POST ['harga'];
$stok = $_POST ['stok'];
$keterangan = $_POST ['keterangan'];

$query= mysqli_query($koneksi, "UPDATE produk SET NamaProduk='$namaproduk', 
Harga='$harga', Stok='$stok', Keterangan='$keterangan' WHERE ProdukID='$id'");
if ($query) {
    //apalah daya
?>
<script>
alert('Produk Berhasil Diedit');
window.location = "tampilanproduk.php";
</script>
<?php

} else {
    //pesan warning
?>
<script>
    alert('Gagal Edit Produk');
    window.location = "editroduk.php?id=<?php echo $id; ?>";
    </script>
    <?php
}
}
?>