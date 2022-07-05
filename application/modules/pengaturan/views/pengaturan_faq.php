<?php
defined('BASEPATH') or exit('No direct script access allowed');
if($id_faq!=0)
	$faq = $this->db->get_where('faq', ['id_faq'=>$id_faq])->row();
?>
<div class="row">
	<div class="col-md-12">
		<?= ce_msg('success'); ?>
		<?= ce_msg('danger'); ?>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Input / Update Data</h3>
            </div>
            <form method="post" action="" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="pertanyaan" class="col-sm-2 control-label">Pertanyaan <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="pertanyaan" class="form-control" id="pertanyaan" value="<?php if(isset($faq)) echo $faq->pertanyaan;?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jawaban" class="col-sm-2 control-label">Jawaban <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <textarea type="text" name="jawaban" class="form-control" id="ckeditor" required><?php if(isset($faq)) echo $faq->jawaban;?></textarea>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar FAQ</h3>
			</div>
			<div class="box-body table-responsive no-padding">
				<table class="table table-striped tableData">
					<thead>
						<tr>
							<th style="width:10px;">#</th>
							<th>Pertanyaan</th>
							<th>Jawaban</th>
							<th style="width:50px;"></th>
						</tr>
					</thead>
					<tbody>
					<?php
					if($faqlist){
						$no=1;
						foreach($faqlist as $row){
							echo '<tr>
								<td>'.$no.'</td>
								<td>'.$row->pertanyaan.'</td>
								<td>'.word_limiter(strip_tags($row->jawaban), 10).'</td>
								<td>'.ce_anchor('admin.pengaturan.faq', 'pengaturan/faq/'.$row->id_faq, '<i class="fa fa-edit"></i>', 'class="btn btn-sm btn-primary"').' '.ce_anchor('admin.pengaturan.faq', 'pengaturan/hapus-faq/'.$row->id_faq, '<i class="fa fa-trash"></i>', 'class="btn btn-sm btn-danger" onclick="return delete_confirm();"').'</td>
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
