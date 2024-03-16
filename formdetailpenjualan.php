<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;
}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background:  rgb(30, 176, 255);
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid rgb(25, 188, 79);
}

/* Set a style for the submit button */
.btn {
  background-color:lightsteelblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn a {
  background-color:lightsteelblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  text-decoration: none;
}
h2{
   font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif

}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="inputdetailpenjualan.php" style="max-width:500px;margin:auto" method="POST">
  <h2>Silahkan Masukan data</h2>
  <div class="input-container">
  <label class="input-field">Penjualanid</label>
    <select class="input-field" name="namapelanggan">
      <option>Silahkan Pilih idpenjualan</option>
      <?php
      include "koneksi.php";
      $query = mysqli_query ($koneksi, "SELECT * FROM detailpenjualan")
      or die(mysqli_error($koneksi));
      while ($data = mysqli_fetch_array($query)){
        echo "<option value = $data[PenjualanID]> $data[PenjualanID]</option>";
      }
      ?>
    </select>
  </div>

  <div class="input-container">
    <label class="input-field">Produk</label>
    <select class="input-field" name="produkid">
      <option>Silahkan Pilih idProduk</option>
      <?php
      include "koneksi.php";
      $query = mysqli_query ($koneksi, "SELECT * FROM detailpenjualan")
      or die(mysqli_error($koneksi));
      while ($data = mysqli_fetch_array($query)){
        echo "<option value = $data[ProdukID]> $data[ProdukID]</option>";
      }
      ?>
    </select>
  </div><br>
  
  <div class="input-container">
    <input class="input-field" type="text" placeholder="Jumlah Produk" name="jumlahproduk">
  </div>

   
  <div class="input-container">
    <input class="input-field" type="text" placeholder="Subtotal" name="subtotal">
  </div>
  
  <div class="input-container">
  <label class="input-field">Nama Pelanggan</label>
    <select class="input-field" name="namapelanggan">
      <option>Silahkan Pilih Pelanggan</option>
      <?php
      include "koneksi.php";
      $query = mysqli_query ($koneksi, "SELECT * FROM pelanggan")
      or die(mysqli_error($koneksi));
      while ($data = mysqli_fetch_array($query)){
        echo "<option value = $data[PelangganID]> $data[NamaPelanggan]</option>";
      }
      ?>
    </select>
  </div>

  <button type="submit" name="submit" class="btn">Tambah</button><br><br>
  <button type="text" class="btn"><a href="tampilandetailpenjualan.php"> Batal Tambah</button>
</form>

</body>
</html>
