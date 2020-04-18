SELECT categories.name AS 'Nama Kategori',foods.name AS 'Nama Makanan',foods.stok AS 'Stock' 
FROM foods
INNER JOIN categories on foods.category_id = categories.id 
WHERE categories.name = 'Olahan Ayam'