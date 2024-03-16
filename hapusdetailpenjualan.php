<?php

include "koneksi.php";

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM detailpenjualan WHERE DetailID='$id'";

if ($koneksi->query($sql) === TRUE) {
    ?>  
    <script>
        alert ('Data Berhasil DiHapus');
        window.location = "tampilandetailpenjualan.php";
        </script>
        <?php
} else {
        ?>
        <script>
        alert ('Data Tidak Berhasil DiHapus ');
        window.location = "tampilandetailpenjualan.php";
        </script>
        <?php
}
$koneksi->close();
?>
