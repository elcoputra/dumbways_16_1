# No 1 - 3
Runing di console
```bash
node 1.js
```
# Tampilan Query
#### Tampilkan Semua Makanan
![4a1](https://raw.githubusercontent.com/elcoputra/dumbways_16_1/master/4a%20query/tampilkan_semua_makanan.sql.png)
```
SELECT foods.id,foods.name AS 'Nama Makanan',foods.stok,foods.image,foods.deskripsi,categories.name AS 'Nama Kategori' 
FROM foods 
INNER JOIN categories on foods.category_id = categories.id

```

#### Tampilkan Makanan Per Kategori
![4a2](https://raw.githubusercontent.com/elcoputra/dumbways_16_1/master/4a%20query/makanan_per_kategori.sql.png)

```
SELECT categories.name AS 'Nama Kategori',foods.name AS 'Nama Makanan',foods.stok AS 'Stock' 
FROM foods
INNER JOIN categories on foods.category_id = categories.id 
WHERE categories.name = 'Olahan Ayam'

```

#### Tampilkan Makanan Berdasarkan ID
![4a3](https://raw.githubusercontent.com/elcoputra/dumbways_16_1/master/4a%20query/tampilan_detail_sesuai_ID.sql.png)
```
SELECT foods.id,foods.name AS 'Nama Makanan',foods.stok,foods.image,foods.deskripsi,categories.name AS 'Nama Kategori'
FROM foods 
INNER JOIN categories on foods.category_id = categories.id 
WHERE foods.id = 1

```

#### Hasil Query Tambah Makanan Dan Kategori
![4a4](https://raw.githubusercontent.com/elcoputra/dumbways_16_1/master/4a%20query/tambah_food.sql%2Cpng.png)
```
INSERT INTO `foods` (`id`, `name`, `stok`, `image`, `deskripsi`, `category_id`) 
VALUES (NULL, 'Ayam Rica Rica', '11', 'img/ayam_rica.png', 'ayam rica rica deskripsi', '1');

```
![4a5](https://raw.githubusercontent.com/elcoputra/dumbways_16_1/master/4a%20query/tambah_category.sql.png)
```
INSERT INTO `categories` (`id`, `name`) VALUES (NULL, 'Minuman');
```

# Tampilan Web CRUD, Memakaih PHP, Bootstrap, Jquery, PooperJs
#### Card List
![crud1](https://raw.githubusercontent.com/elcoputra/dumbways_16_1/master/4b_Crud/Screenshoot%20CRUD%20WEB/web%20dw%20crud%201.png)



#### Tambah Makanan
![crud2](https://raw.githubusercontent.com/elcoputra/dumbways_16_1/master/4b_Crud/Screenshoot%20CRUD%20WEB/web%20dw%20crud%202.png)




#### Tambah Kategori
![crud3](https://raw.githubusercontent.com/elcoputra/dumbways_16_1/master/4b_Crud/Screenshoot%20CRUD%20WEB/web%20dw%20crud%203.png)




# Terimakasih Banyak Mau Memeriksa Pekerjaan Saya :blush:
