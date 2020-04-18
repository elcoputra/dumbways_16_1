SELECT foods.id,foods.name AS 'Nama Makanan',foods.stok,foods.image,foods.deskripsi,categories.name AS 'Nama Kategori' 
FROM foods 
INNER JOIN categories on foods.category_id = categories.id