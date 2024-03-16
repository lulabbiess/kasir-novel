<?php
include "koneksi.php";

$table = "SELECT * FROM pelanggan";
$data = mysqli_query($koneksi, $table);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
</style>
</head>
<body>

<h2>DATA PELANGGAN</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table id="myTable">
  <tr class="header">
  </head>
 <thead>
            <th style="text-align: center;">NAMA PELANGGAN</th>
            <th style="text-align: center;">ALAMAT</th>
            <th style="text-align: center;">NOMOR TELEPON</th>
            <th colspan="2" style="text-align: center;">AKSI</th>
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

     </tbody>
    </table>
</body>

</html>