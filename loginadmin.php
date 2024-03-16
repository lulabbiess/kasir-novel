<?php
include "koneksi.php";

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = mysqli_query($koneksi, "SELECT * FROM admin where
  admin = '$username' AND password='$password'");
    $cek = mysqli_num_rows($login);
    if ($cek) {
        //pesan berhasil
        ?>
    <script>
            alert('USERNAME DAN PASSWORD BENAR. LOGIN BERHASIL');
            window.location ="dashboard.php";
            </script>
            <?php
    } else {
        //pesan warning jika terjadi kesalahan
        ?>
        <script>
            alert('USERNAME DAN PASSWORD TIDAK BENAR. SILAHKAN LOGIN UNTUK ULANG!!');
            window.location ="loginadmin.html";
            </script>
            <?php
    }
    }
?>