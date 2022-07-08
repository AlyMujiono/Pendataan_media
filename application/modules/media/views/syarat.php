<?php
defined('BASEPATH') or exit('No direct script access allowed');
$persyaratan = [
	"SURAT PERMOHONAN",
	"SURAT PENGESAHAN BADAN HUKUM DARI KEMENTRIAN HUKUM DAN HAM (AHU)",
	"SURAT SKT YANG DITERBITKAN KEMENTRIAN DALAM NEGERI",
	"BERKAS AKTA NOTARIS",
	"AD/RT ORGANISASI",
	"PROGRAM KERJA ORGANISASI",
	"SK PENGURUS media DARI DPP/DPD BERDASARKAN AHU ATAU SKT DARI KEMENTRIAN",
	"SURAT BUKTI KONTRAK ATAU MILIK PRIBADI KANTOR SEKRETARIAT",
	"FOTO KANTOR TAMPAK DEPAN",
	"NPWP ORGANISASI",
	"CV KETUA",
	"CV SEKRETARIS",
	"CV BENDAHARA",
	"PAS FOTO KETUA",
	"PAS FOTO SKRETARIS",
	"PAS FOTO BENDAHARA",
	"FILE KTP KETUA",
	"FILE KTP SKRETARIS",
	"FILE KTP BENDAHARA"

];
?>
<div class="row">
	<div class="col-md-12">
		<?= ce_msg('success'); ?>
		<?= ce_msg('danger'); ?>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Input / Update Data</h3>
            </div>
            <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
                <div class="box-body">
		                <div class="form-group">
			                <label for="nama" class="col-sm-2 control-label">Persyaratan <span class="text-danger">*</span></label>
			                <div class="col-sm-8">
                        <select name="nama" class="form-control select2" required>
                          <option value="">- Pilih Persyaratan-</option>
                          <?php foreach ($persyaratan as $syarat) {
                            echo "<option value='$syarat'>$syarat</option>";
                          }?>
                        </select>
			                </div>
		                </div>
		                <div class="form-group">
			                <label for="berkas" class="col-sm-2 control-label">Berkas <span class="text-danger">*</span></label>
			                <div class="col-sm-8">
			                	<input type="file" name="berkas" id="berkas" required>
                        <span class="help-block">Berkas harus bertipe PDF.</span>
			                </div>
		                </div>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
										<div class="pull-right">
										<a href="<?=base_url('media');?>" class="btn btn-warning"><i class="fa fa-backward"></i> Kembali</a>
	                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                		</div>
                </div>
            </form>
        </div>

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Anggota</h3>
			</div>
			<div class="box-body table-responsive no-padding">
				<table class="table table-striped tableData">
					<thead>
						<tr>
							<th style="width:10px;">#</th>
							<th>Persyaratan</th>
							<th style="width:100px;">Berkas</th>
							<th style="width:50px;"></th>
						</tr>
					</thead>
					<tbody>
					<?php
					if($syaratlist){
						$no=1;
						foreach($syaratlist as $row){
						  $berkas = $row->berkas!='' ? anchor('assets/berkas/'.$row->berkas, '<i class="fa fa-eye-open"></i> Lihat', 'target="_blank" class="btn btn-sm btn-primary"') : '<a href="javascript:;" class="btn btn-sm btn-primary disabled"><i class="fa fa-eye-open"></i> Lihat</a>';
							echo '<tr>
								<td>'.$no.'</td>
								<td>'.$row->nama.'</td>
								<td>'.$berkas.'</td>
								<td>'.ce_anchor('admin.media.delete', 'media/hapus-syarat/'.$row->id_media.'/'.$row->id, '<i class="fa fa-trash"></i>', 'class="btn btn-sm btn-danger" onclick="return delete_confirm();"').'</td>
							</tr>';
							$no++;
						}
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
