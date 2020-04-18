<?php
// include database connection file
include_once("..\config\config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
mysqli_query($mysqli, "UPDATE foods SET stok = (stok - 1) WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("location:..\index.php");
?>