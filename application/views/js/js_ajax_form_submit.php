<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
function formSubmit(event){
    var url = $(event).attr('action');
    var data = $(event).serialize();
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        beforeSend: function(){
            $('.overlay').fadeIn();
        },
        success: function(data){
            tableReload();
            $('#ajax-modal').modal('toggle');
        }
    });
    return false;
}
</script>