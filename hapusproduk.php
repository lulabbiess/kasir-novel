<?php

include "koneksi.php";

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM produk WHERE ProdukID='$id'";

if ($koneksi->query($sql) === TRUE) {
    ?>  
    <script>
        alert ('Data Berhasil DiHapus');
        window.location = "tampilanproduk.php";
        </script>
        <?php
} else {
  echo "Eror Deleting record: " . $koneksi->error;
}

$koneksi->close();
