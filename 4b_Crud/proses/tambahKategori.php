<?php
include_once("../config/config.php");
// Check If form submitted, insert form data into users table.
if (isset($_POST['tambah'])) {
    $id = null;
    $nama_kategori = $_POST['nama_kategori'];

    // Insert user data into table
    $query = mysqli_query($mysqli, "INSERT INTO categories(id,name) VALUES('$id','$nama_kategori')");
    if($query){
        echo'<script type="text/JavaScript">
        window.alert("Kategori Berhasil Di Tambahkan");
        window.location.href = "../index.php";
       </script>';
    }else{
        echo'<script type="text/JavaScript">
        window.alert("Kategori Gagal Di Tambahkan");
        window.location.href = "../index.php";
       </script>';
       
           }
}else {
    die("Akses dilarang...");
}
?>