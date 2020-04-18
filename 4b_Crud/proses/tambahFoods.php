<?php
include_once("../config/config.php");
// Check If form submitted, insert form data into users table.
if (isset($_POST['tambah'])) {
    $id = null;
    $name = $_POST['name'];
    $stok = $_POST['stok'];
    $image = $_POST['image'];
    $deskripsi = $_POST['deskripsi'];
    $category_id = $_POST['category_id'];

    // Insert user data into table
    $query = mysqli_query($mysqli, "INSERT INTO foods(id,name,stok,image,deskripsi,category_id) VALUES('$id','$name','$stok','$image','$deskripsi','$category_id')");
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
