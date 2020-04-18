// $ itu jquery
// ketika dokumen sudah siap, jalankan fungsi di dalamnya
$(function () {

    $('.tombolTambahData').on('click',function(){
        $('.modal-body form').attr('action', 'http://localhost/mvc_php/public/home/tambahData')
        $('#titleModal').html('Add New Data');
        $('.modal-footer button[type=submit]').html('Add Data');
        $('#cashier').val('');
                $('#product').val('');
                $('#category').val('Food');
                $('#price').val('');
    })

    

    //jquery tolong carikan saya sebuah elemen yang nama kelasnnya tampilPopupUbah
    // dari titik, lalu ketika di klik, jalankan fungsi berikut ini
    $('.tampilPopupUbah').on('click',function(){
        //jquery carikan saya elemen dengan id titleModal
        // dari titik, ubah isinya jadi
        $('#titleModal').html('Update Data');

        //jquery tolong carikan saya element yang classnya modal-footer
        //lalu ambil button didalamnya, tapi yang tipe submit saja
        // dari titik. ganti isinya
        $('.modal-footer button[type=submit]').html('Update');

        $('.modal-body form').attr('action', 'http://localhost/mvc_php/public/home/ubah')
        
        // this adalah tombol yang di klik sesuai keteria function
        const no_id = $(this).data('no_id');

        //menjalankan ajax
        // berbentuk object
        $.ajax({
            url: 'http://localhost/mvc_php/public/home/getUbah',
            data: {no_id : no_id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                // console.log(data);
                $('#cashier').val(data.cashier);
                $('#product').val(data.product);
                $('#category').val(data.category);
                $('#price').val(data.price);
                $('#no_id').val(data.no_id)
            }
        });

    })

})