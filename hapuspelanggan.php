<?php

include "koneksi.php";

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM pelanggan WHERE PelangganID='$id'";

if ($koneksi->query($sql) === TRUE) {
    ?>  
    <script>
        alert ('Data Berhasil DiHapus');
        window.location = "tampilanpelanggan.php";
        </script>
        <?php
}else{
        ?>
        <script>
        alert ('Data Tidak Berhasil DiHapus Karena data sudah Digunakan pada tabel yang lain. Harap Hapus dulu data pada tabel berikut');
        window.location = "tampilanpenjualan.php";
        </script>
        <?php
}
$koneksi->close();
?>
