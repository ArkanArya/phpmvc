$(function() {

    $('.tombolTambahData').on('click',function() {
        $$('#exampleModal').html('Tambah Data Jurusan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#jurusan').val('');
        $('#id').val('');
    })

    $('.tampilModalUbah2').on('click', function() {

        $('#exampleModalLabel').html('Ubah Data Jurusan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/jurusan/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/jurusan/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});