<?php
include "koneksi.php";


if (isset($_POST['edit'])){
$id = $_POST['id'];
$tanggalpenjualan = $_POST ['tanggalpenjualan'];
$totalharga = $_POST ['totalharga'];
$pelangganid = $_POST ['namapelanggan'];


$query= mysqli_query($koneksi, "UPDATE penjualan SET TanggalPenjualan='$tanggalpenjualan', 
TotalHarga='$totalharga', PelangganID='$pelangganid' WHERE PenjualanID='$id'");
if ($query) {
    //perhatian besaar
?>
<script>
alert('Penjualan Berhasil Diedit');
window.location = "tampilanpenjualan.php";
</script>
<?php

} else {
    //hati hati gess
?>
<script>
    alert('Gagal Edit Penjualan. Silahkan Coba lagi');
    window.location = "editpenjualan.php?id=<?php echo $id; ?>";
    </script>
    <?php
}
}
?>