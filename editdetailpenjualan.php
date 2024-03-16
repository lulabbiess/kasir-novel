<?php
include "koneksi.php";

$id = $_GET['id'];
$edit= mysqli_query($koneksi, "SELECT * FROM detailpenjualan WHERE PenjualanID='$id'");
$editdetailpenjualan = mysqli_fetch_array($edit);


if (!$editdetailpenjualan){
    die("Data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button a {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form action="updatedetailpenjualan.php" style="max-width:500px;margin:auto" method="POST">
  <h2>From Edit Pelanggan</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input type="hidden" name="id" value="<?php echo $editdetailpenjualan['PenjualanID'];?>">
    <input class="input-field" type="text" placeholder="PenjualanID" value="<?php echo $editdetailpenjualan['PenjualanID']; ?>" name="penjualanid">
  </div>

  <div class="input-container">
    <i class="fa fa-home icon"></i>
    <input class="input-field" type="text" placeholder="ProdukID"  value="<?php echo $editdetailpenjualan['ProdukID']; ?>" name="produkid">
  </div>
  
  <div class="input-container">
    <i class="fa fa-volume-control-phone icon"></i>
    <input class="input-field" type="text" placeholder="Jumlah Produk"  value="<?php echo $editdetailpenjualan['JumlahProduk']; ?>" name="jumlahproduk">
  </div>

  
  <div class="input-container">
    <i class="fa fa-balance-scale"></i>
    <input class="input-field" type="text" placeholder="Sub Total"  value="<?php echo $editdetailpenjualan['Subtotal']; ?>" name="subtotal">
  </div>

  <button type="submit" name="edit" class="btn">Edit</button><br><br>
  <button type="text" class="btn"><a href="tampilanpelanggan.php"> Batal Edit</button>
</form>

</body>
</html>
