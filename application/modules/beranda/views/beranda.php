<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$pesanmasuk = $this->db->order_by('id', 'DESC')->limit(10)->get('pesan')->result();
?>
<link rel="stylesheet" href="<?= base_url('assets/style/bower_components/morris.js/morris.css');?>">
<div class="row">
    <div class="col-md-12">
        <div class="callout callout-warning">
			<marquee width="100%" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
			<?php 
			$output = [];
			foreach($pesanmasuk as $row){
				$output[] = anchor('pesan/detail/'.$row->id, $row->subjek);
			}
			echo implode('<b style="padding:0 10px;">&bullet;</b>', $output);
			?>
			</marquee>
        </div>
    </div>
    <div class="col-md-12">
        <div class="callout callout-info">
          <h4>Selamat Datang Kembali <?=$this->session->userdata('nama_user');?>!</h4>
          <p>Anda login pada tanggal:
            <b><?=ce_tanggal_indo(date('Y-m-d', $this->session->userdata('tanggal_login')));?>,
            <?=date('H:i A', $this->session->userdata('tanggal_login'));?></b></p>
        </div>
    </div>
</div>
