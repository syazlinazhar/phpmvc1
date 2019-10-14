$(function() {

    $('.buttonAddData').on('click', function() {
        $('#titleModal').html('Add Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Add Data');

    });
    
    $('.displayModalEdit').on('click', function() {
        
        $('#titleModal').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
    
    });


});