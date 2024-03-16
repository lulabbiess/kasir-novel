<?php
include "koneksi.php";


if (isset($_POST['edit'])){
$id = $_POST['id'];
$penjualanid= $_POST ['penjualanid'];
$produkid = $_POST ['produkid'];
$jumlahproduk= $_POST ['jumlahproduk'];
$subtotal= $_POST ['subtotal'];

$query= mysqli_query($koneksi, "UPDATE detailpenjualan SET PenjualanID='$penjualanid', 
ProdukID='$produkid', JumlahProduk='$jumlahproduk', Subtotal='$subtotal' WHERE PenjualanID='$id'");
if ($query) {
    //apalah daya
?>
<script>
alert('Penjualan Berhasil Diedit');
window.location = "tampilandetailpenjualan.php";
</script>
<?php

} else {
    //pesan warning
?>
<script>
    alert('Gagal Edit Penjualan');
    window.location = "editdetailpenjualan.php?id=<?php echo $id; ?>";
    </script>
    <?php
}
}
?>
