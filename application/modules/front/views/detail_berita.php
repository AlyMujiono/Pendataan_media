<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$label = explode(',', $berita->label);
?>
<div class="row mb-4">
    <div class="col-md-12">
      <div class="card">
        <img src="<?=base_url('assets/img/berita/'.$berita->gambar);?>" class="card-img-top" alt="<?=$berita->judul;?>">
        <div class="card-body">
          <h5 class="card-title"><?=$berita->judul;?></h5>
          <div class="card-text"><?=$berita->konten;?></div>
          <p class="card-text float-start"><small class="text-secondary"><b>Label:</b></small> <?php echo '<span class="badge bg-info">'.implode('</span> <span class="badge bg-info">', $label).'</span>';?></p>
          <p class="card-text float-end"><small class="text-muted"><i class="fa fa-calendar"></i> <?=date('d/m/Y H:i A', strtotime($berita->waktu));?></small></p>
        </div>
      </div>
    </div>
</div>
