$(function() {

    $('.buttonAddData').on('click', function() {
        $('#titleModal').html('Add Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Add Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc1/public/mahasiswa/edit');

    });
    
    $('.displayModalEdit').on('click', function() {
        
        $('#titleModal').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
    
        
        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc1/public/mahasiswa/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#name').val(data.name);
                $('#matric').val(data.matric);
                $('#email').val(data.email);
                $('#course').val(data.course);
                $('#id').val(data.id);
            }
        });

    });


});