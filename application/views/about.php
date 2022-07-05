<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Tentang Aplikasi</h3>
            </div>
            <div class="box-body ">
                <dl class="dl-horizontal">
                    <dt>Nama</dt>
                    <dd>Sistem Informasi Pendataan Organisasi Kemasyarakatan</dd>
                    <dt>Versi</dt>
                    <dd>1.0</dd>
                    <dt>Lisensi</dt>
                    <dd><?=$this->config->item('license_key');?></dd>
                    <dt>Developer</dt>
                    <dd><a href="https://nusakoding.com" target="_blank">Nusakoding.com</a></dd>
                </dl>
            </div>
        </div>
    </div>
</div>
