<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row">
	<div class="col-md-12">
		<?= ce_msg('success'); ?>
		<?= ce_msg('danger'); ?>
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Media</h3>
				<div class="box-tools">
					<?= ce_anchor('admin.media.add', 'media/tambah', '<i class="fa fa-plus"></i> Tambah', 'class="btn btn-primary btn-sm"'); ?>
				</div>
			</div>
			<div class="box-body table-responsive no-padding">
				<table id="dataTable" class="table table-striped">
					<thead>
						<tr>
							<th style="width:10px;">#</th>
							<th>Nama Media</th>
							<th>Bentuk Organisasi</th>
							<th>Sifat Organisasi</th>
							<th>Verifikasi</th>
							<th>Status</th>
							<th style="width:10px;"></th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
