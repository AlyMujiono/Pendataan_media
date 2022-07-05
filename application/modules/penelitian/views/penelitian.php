<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row">
	<div class="col-md-12">
		<?= ce_msg('success'); ?>
		<?= ce_msg('danger'); ?>
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Pengajuan Penelitian</h3>
			</div>
			<div class="box-body table-responsive no-padding">
				<table id="dataTable" class="table table-striped">
					<thead>
						<tr>
							<th style="width:10px;">#</th>
							<th>Nama Penelitian</th>
							<th>Surat Pengantar</th>
							<th>FC Proposal</th>
							<th>FC KTP</th>
							<th>FC KTM</th>
							<th>FC Akta</th>
							<th>Surat Tugas</th>
							<th>Tanggal</th>
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
