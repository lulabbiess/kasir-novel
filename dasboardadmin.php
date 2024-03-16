<?php
include "koneksi.php";

$table = "SELECT * FROM pelanggan";
$data = mysqli_query($koneksi, $table);
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
    font-family:cursive;
    background-image: url(gambar/9.jpg);
}
h2{
    font-family: "Sofia", sans-serif;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: rgb(36, 145, 94);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 80px;
  text-decoration: none;
  display: block;
  text-align: right;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.sidebar {
  height: 100%;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 1;
  left: 1;
  background-color: #13130f;
  overflow-x: hidden;
  padding-top: 8px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 180px; /* Same as the width of the sidenav */
  padding: 0px 10px;
  color: rgb(0, 0, 0);
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}


</style>
</head>
<body style="background-color:white;">

<div class="navbar">
  <a href="#home">kasir bakery cake shop</a>
  <div class="dropdown" style="float: right; margin-right: 60px;">
    <button class="dropbtn">Selamat Datang Admin
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Logout</a>

    </div>
  </div> 
</div>

<div class="sidebar">
    <a href="dashboard.php"><i class="fa fa-user-circle"></i>  dashboard</a>
    <br>
    <a href="tampilanpelanggan.php"><i class="fa fa-users"></i>   Pelanggan</a>
    <a href="tampilanproduk.php"><i class="fa fa-fw fa-shopping-cart"></i> Stok Barang</a>
    <a href="tampilanpenjualan.php"><i class="fa fa-fw fa-tags"></i> Penjualan</a>
    <a href="#contact"><i class="fa fa-sign-out"></i>  Logout</a>
  </div>
  
  <div class="main">
    
<h2>DATA PELANGGAN</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table id="myTable">
  <tr class="header">
  </head>
 <thead>
            <th>NAMA PELANGGAN</th>
            <th>ALAMAT</th>
            <th>NOMOR TELEPON</th>
            <th>AKSI</th>
        </thead>
        <?php
        while ($pelanggan = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
        <td><?php echo $pelanggan ['NamaPelanggan']; ?></td>
        <td><?php echo $pelanggan['Alamat']; ?></td>
        <td><?php echo $pelanggan['NomorTelepon']; ?></td>
        <td><button type="text"> <a href="editadmin.php?id=<?php echo $pelanggan['PelangganID']; ?>">EDIT</button></td>
        <td><button type="text"> <a href="hapusadmin.php?id=<?php echo $pelanggan['PelangganID']; ?>">HAPUS</button></td>
        </tr>
        <?php
        }
        ?>
        
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

  </div>
</body>
</html>
