<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-md-12">
      <?php foreach ($beritalist as $row) :
      $label = explode(',', $row->label);?>
      <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?=base_url('assets/img/berita/'.$row->gambar);?>" class="rounded-start" alt="<?=$row->judul;?>" width="100%" height="100%" style="max-height:300px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?=anchor('news/'.$row->id, $row->judul, 'class="text-decoration-none"');?></h5>
              <p class="card-text"><?=word_limiter($row->konten, 70);?></p>
              <p class="card-text float-start"><small class="text-secondary"><b>Label:</b></small> <?php echo '<span class="badge bg-info">'.implode('</span> <span class="badge bg-info">', $label).'</span>';?></p>
              <p class="card-text float-end"><small class="text-muted"><i class="fa fa-calendar"></i> <?=date('d/m/Y H:i A', strtotime($row->waktu));?></small></p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
      <?php if($beritalist):?>
      <nav aria-label="Page navigation">
        <?php echo $this->pagination->create_links(); ?>
      </nav>
      <?php endif;?>
    </div>
</div>
