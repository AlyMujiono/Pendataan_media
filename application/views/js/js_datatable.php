<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
var table = $('#dataTable').DataTable({
    "processing": true,
    "serverSide": true,      
    "bSort" : true,
    "ajax": {
        "url" : "<?= $ajax_url;?>",
        "type" : "POST"
    },
    "drawCallback": function(settings) {
        //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      });
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      });
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });
    }
});

function tableReload(){
    table.ajax.reload();    
}
</script>