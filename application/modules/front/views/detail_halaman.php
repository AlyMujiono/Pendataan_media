<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row mb-4">
    <div class="col-md-12">
      <div class="card">
        <?php if($pages->gambar!=''):?>
        <img src="<?=base_url('assets/img/halaman/'.$pages->gambar);?>" class="card-img-top" alt="<?=$pages->judul;?>">
        <?php endif;?>
        <div class="card-body">
          <h5 class="card-title"><?=$pages->judul;?></h5>
          <div class="card-text"><?=$pages->konten;?></div>
        </div>
      </div>
    </div>
</div>
