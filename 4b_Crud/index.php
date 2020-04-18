<?php

// memeanggil config database buat koneksi ke database
include_once("config/config.php");

// ambil data kategori
$dataKategori = mysqli_query($mysqli, "SELECT * FROM `categories` ORDER BY `categories`.`id` ASC");
// ambil data kategori olahan ayam
$olahanAyam = mysqli_query($mysqli, "SELECT categories.name AS namaKategori, foods.image, foods.id AS foods_id, foods.deskripsi, foods.name, foods.stok FROM foods INNER JOIN categories on foods.category_id = categories.id WHERE categories.name = 'Olahan Ayam'");
// ambil data kategori olahan ikan
$olahanIkan = mysqli_query($mysqli, "SELECT categories.name AS namaKategori, foods.image, foods.id AS foods_id, foods.deskripsi, foods.name, foods.stok FROM foods INNER JOIN categories on foods.category_id = categories.id WHERE categories.name = 'Olahan Ikan'");
// ambil data kategori olahan sayuran
$olahSayuran = mysqli_query($mysqli, "SELECT categories.name AS namaKategori, foods.image, foods.id AS foods_id, foods.deskripsi, foods.name, foods.stok FROM foods INNER JOIN categories on foods.category_id = categories.id WHERE categories.name = 'Olahan Sayur'");
// ambil data kategori minuman
$Minuman = mysqli_query($mysqli, "SELECT categories.name AS namaKategori, foods.image, foods.id AS foods_id, foods.deskripsi, foods.name, foods.stok FROM foods INNER JOIN categories on foods.category_id = categories.id WHERE categories.name = 'Minuman'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warteg Elco</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/custom.css">
</head>

<body>

    <div class="container mb-5">
        <div class="d-flex">
            <div class="p-2 flex-grow-1">
                <h1>Warteg Elco</h1>
            </div>
            <div class="p-2 "><button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahMakanan">
                    Tambah Makanan
                </button></div>
            <div class="p-2 "><button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambahKategori">
                    Tambah Kategori
                </button></div>
        </div>
    </div>
    <!-- Olahan Ayam -->
    <div class="container">
        <h3>Olahan Ayam</h3>
    </div>

    <div class="container">
        <div class="card-deck">
            <?php
            while ($user_data = mysqli_fetch_array($olahanAyam)) {

                echo "<div class=\"card\">";
                echo "<img class=\"img-responsive\" style=\"margin: 0 auto; id=\"currentPhoto\" src=\"" . $user_data['image'] . "\" onerror=\"this.onerror=null; this.src='public/img/noimage.png'\" alt=\"\"width=\"120\">";

                echo "<div class=\"card-body\">";
                echo "<h5 class=\"card-title\">" . $user_data['name'] . "</h5>";
                echo "<p class=\"card-text\">" . $user_data['deskripsi'] . "</p>";
                echo "</div>";

                echo "<div class=\"card-footer\">";

                echo "<div class=\"d-flex bd-highlight\">";

                echo "<div class=\"align-self-center mr-3\">";
                echo "<h5>Stock : " . $user_data['stok'] . "</h5>";
                echo "</div>";

                echo "<div class=\"d-flex justify-content-start\">";
                echo "<a class=\"btn btn-primary\" href='proses/beli.php?id=$user_data[foods_id]'>Beli</a>";
                echo "</div>";

                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- end olahan ayam -->



    <!-- Olahan Ikan -->
    <div class="container">
        <h3>Olahan Ikan</h3>
    </div>

    <div class="container">
        <div class="card-deck">
            <?php
            while ($user_data = mysqli_fetch_array($olahanIkan)) {

                echo "<div class=\"card\">";
                echo "<img class=\"img-responsive\" style=\"margin: 0 auto; id=\"currentPhoto\" src=\"" . $user_data['image'] . "\" onerror=\"this.onerror=null; this.src='public/img/noimage.png'\" alt=\"\"width=\"120\">";

                echo "<div class=\"card-body\">";
                echo "<h5 class=\"card-title\">" . $user_data['name'] . "</h5>";
                echo "<p class=\"card-text\">" . $user_data['deskripsi'] . "</p>";
                echo "</div>";

                echo "<div class=\"card-footer\">";

                echo "<div class=\"d-flex bd-highlight\">";

                echo "<div class=\"align-self-center mr-3\">";
                echo "<h5>Stock : " . $user_data['stok'] . "</h5>";
                echo "</div>";

                echo "<div class=\"d-flex justify-content-start\">";
                echo "<a class=\"btn btn-primary\" href='proses/beli.php?id=$user_data[foods_id]'>Beli</a>";
                echo "</div>";

                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- end olahan ikan -->

    <!-- Olahan sayuran -->
    <div class="container">
        <h3>Olahan Sayuran</h3>
    </div>

    <div class="container">
        <div class="card-deck">
            <?php
            while ($user_data = mysqli_fetch_array($olahSayuran)) {

                echo "<div class=\"card\">";
                echo "<img class=\"img-responsive\" style=\"margin: 0 auto; id=\"currentPhoto\" src=\"" . $user_data['image'] . "\" onerror=\"this.onerror=null; this.src='public/img/noimage.png'\" alt=\"\"width=\"120\">";

                echo "<div class=\"card-body\">";
                echo "<h5 class=\"card-title\">" . $user_data['name'] . "</h5>";
                echo "<p class=\"card-text\">" . $user_data['deskripsi'] . "</p>";
                echo "</div>";

                echo "<div class=\"card-footer\">";

                echo "<div class=\"d-flex bd-highlight\">";

                echo "<div class=\"align-self-center mr-3\">";
                echo "<h5>Stock : " . $user_data['stok'] . "</h5>";
                echo "</div>";

                echo "<div class=\"d-flex justify-content-start\">";
                echo "<a class=\"btn btn-primary\" href='proses/beli.php?id=$user_data[foods_id]'>Beli</a>";
                echo "</div>";

                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- end olahan sayuran -->



    <!-- Olahan Minuman -->
    <div class="container">
        <h3>Minuman</h3>
    </div>

    <div class="container">
        <div class="card-deck">
            <?php
            while ($user_data = mysqli_fetch_array($Minuman)) {

                echo "<div class=\"card\">";
                echo "<img class=\"img-responsive\" style=\"margin: 0 auto; id=\"currentPhoto\" src=\"" . $user_data['image'] . "\" onerror=\"this.onerror=null; this.src='public/img/noimage.png'\" alt=\"\"width=\"120\">";

                echo "<div class=\"card-body\">";
                echo "<h5 class=\"card-title\">" . $user_data['name'] . "</h5>";
                echo "<p class=\"card-text\">" . $user_data['deskripsi'] . "</p>";
                echo "</div>";

                echo "<div class=\"card-footer\">";

                echo "<div class=\"d-flex bd-highlight\">";

                echo "<div class=\"align-self-center mr-3\">";
                echo "<h5>Stock : " . $user_data['stok'] . "</h5>";
                echo "</div>";

                echo "<div class=\"d-flex justify-content-start\">";
                echo "<a class=\"btn btn-primary\" href='proses/beli.php?id=$user_data[foods_id]'>Beli</a>";
                echo "</div>";

                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- end olahan ayam -->



    <!-- Modal Tambah Makanan-->
    <div class="modal fade" id="tambahMakanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Makanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- submit post metod -->
                    <form action="proses/tambahFoods.php" method="post">
                        <input class="form-control mb-2" type="text" id="name" name="name" placeholder="Masukan Nama Makanan">
                        <input class="form-control mb-2" type="number" id="stok" name="stok" placeholder="Masukan Jumlah Stok Makanan">
                        <input class="form-control mb-2" type="text" id="image" name="image" placeholder="Masukan Link Gambar">
                        <textarea class="form-control mb-2" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Produk" rows="2"></textarea>
                        <!-- Dropdown -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="category_id">Kategori</label>
                            </div>
                            <select class="custom-select" id="category_id" name="category_id">
                                <option selected>Pilih....</option>
                                <?php
                                while ($user_data = mysqli_fetch_array($dataKategori)) {
                                    echo "<option value=\"" . $user_data['id'] . "\">" . $user_data['name'] . "</option>";
                                } ?>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" value="tambah" name="tambah">Tambah Makanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Tambah Kategori-->
    <div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- submit post metod -->
                    <form action="proses/tambahKategori.php" method="post">
                        <!-- Input Nama Kategori -->
                        <div class="form-group">
                            <label for="nama_kategori">Masukan Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Contoh: Olahan Sayur / Minuman Panas">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" value="tambah" name="tambah">Tambah Kategori</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- javascript -->
    <script src="public/js/jquery-3.4.1.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/script.js"></script>
</body>

</html>
