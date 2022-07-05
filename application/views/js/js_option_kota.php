<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
$(function(){
    $('.optprov').on('select2:select', function (e) {
        var data = e.params.data;
        if(data.id!=''){
            $.get('<?=base_url('kota/get-option/');?>'+data.id, function(result){
                $('.optkot').html(result);
                $('.optkot').select2();
            });
        }
    });
    $('.optkot').on('select2:select', function (e) {
        var data = e.params.data;
        if(data.id!=''){
            $.get('<?=base_url('kecamatan/get-option/');?>'+data.id, function(result){
                $('.optkec').html(result);
                $('.optkec').select2();
            });
        }
    });
    $('.optkec').on('select2:select', function (e) {
        var data = e.params.data;
        if(data.id!=''){
            $.get('<?=base_url('kelurahan/get-option/');?>'+data.id, function(result){
                $('.optkel').html(result);
                $('.optkel').select2();
            });
        }
    });
});
</script>