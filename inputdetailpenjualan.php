<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $penjualanid = $_POST['penjualanid'];
    $produkid = $_POST ['produkid'];
    $jumlahproduk = $_POST ['jumlahproduk'];
    $subtotal = $_POST ['subtotal'];


    $pelanggan = "INSERT INTO detailpenjualan (PenjualanID, ProdukID, JumlahProduk, Subtotal)
VALUES ('$penjualanid', '$produkid', '$jumlahproduk', '$subtotal')";

if ($koneksi->query($detailpenjualan) === TRUE) {
    ?>

    <script>
        alert('Data Berhasil Ditambahkan')
        window.location = "tampilanpelanggan.php";
        </script>
<?php
} else {
  echo "Error: " . $detailpenjualan . "<br>" .$koneksi->error;
}

$koneksi->close();
}




?>