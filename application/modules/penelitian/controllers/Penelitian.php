<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_login')){
			redirect('user/login');
			exit;
		}
		ce_active_menu('admin.penelitian.view');

		$this->load->library('upload');
	}

	public function index()
	{
		ce_hak_akses('admin.penelitian.view');

		$data['halaman'] = 'penelitian';
		$data['javascript'] = array(
			'js/js_datatable' => array('ajax_url' => base_url('penelitian/ajax_data'))
		);
		$data['header'] = 'Pengajuan Penelitian <small>Index Data</small>';

		$this->load->view('template', $data);
	}

	public function edit($id)
	{
		ce_hak_akses('admin.penelitian.update');

		$penelitian = $this->penelitian_m->penelitian_by_id($id);
		if($this->input->method(TRUE)=='POST')
		{
			$post_data['tgl_disetujui'] = date('Y-m-d');
			$post_data['status'] = abs((int)$this->input->post('status'));
			$post_data['keterangan'] = $this->input->post('keterangan');

			if(!empty($_FILES['berkas_rekomendasi']['tmp_name'])){
        $config['upload_path']          = './assets/berkas/';
        $config['allowed_types']        = 'pdf';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('berkas_rekomendasi')){
					$fileData = $this->upload->data();
					$post_data['berkas_rekomendasi'] = $fileData['file_name'];
					unlink($config['upload_path'].$penelitian->berkas_rekomendasi);
        }
			}

			if($this->penelitian_m->penelitian_update_data($post_data, $id))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('penelitian');
		}

		$data['penelitian'] = $penelitian;
		$data['halaman'] = 'penelitian_edit';
		$data['header'] = 'Pengajuan Penelitian <small>Edit Data</small>';

		$this->load->view('template', $data);
	}

	public function hapus($id)
	{
		ce_hak_akses('admin.penelitian.delete');

		$penelitian = $this->penelitian_m->penelitian_by_id($id);
		@unlink('./assets/berkas/'.$penelitian->surat_pengantar);
		@unlink('./assets/berkas/'.$penelitian->surat_tugas);
		@unlink('./assets/berkas/'.$penelitian->berkas_rekomendasi);
		@unlink('./assets/img/'.$penelitian->fc_proposal);
		@unlink('./assets/img/'.$penelitian->fc_ktp);
		@unlink('./assets/img/'.$penelitian->fc_ktm);
		@unlink('./assets/img/'.$penelitian->fc_akta);

		$this->penelitian_m->penelitian_delete_data($id);
		$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
		ce_set_msg('success', $success);

		redirect('penelitian');
	}

	public function ajax_data()
	{
		ce_hak_akses('admin.penelitian.view');

		$dataConfig = array(
			'table' => 'penelitian',
			'column_order' => array(null,'nama',null,null,null,null,null,null,'tgl_pengajuan',null,null),
			'column_search' => array('nama'),
			'order' => array('id' => 'asc')
		);
		$this->ajax_data_m->data_config($dataConfig);
		$list = $this->ajax_data_m->get_datatables();

		$data = array();
        $no = $this->input->post('start');
        foreach ($list as $field) {
            $no++;
						$btnDisabled1 = $field->surat_pengantar=='' ? 'disabled' : '';
						$btnDisabled2 = $field->fc_proposal=='' ? 'disabled' : '';
						$btnDisabled3 = $field->fc_ktp=='' ? 'disabled' : '';
						$btnDisabled4 = $field->fc_ktm=='' ? 'disabled' : '';
						$btnDisabled5 = $field->fc_akta=='' ? 'disabled' : '';
						$btnDisabled6 = $field->surat_tugas=='' ? 'disabled' : '';
						$row = array();
						$row[] = $no;
						$row[] = $field->nama.'<br><small class="text-muted">No. Registrasi: '.$field->id.'</small>';
						$row[] = anchor('assets/berkas/'.$field->surat_pengantar, 'Lihat', 'class="btn btn-sm btn-primary '.$btnDisabled1.'"');
						$row[] = anchor('assets/img/'.$field->fc_proposal, 'Lihat', 'class="btn btn-sm btn-primary '.$btnDisabled2.'"');
						$row[] = anchor('assets/img/'.$field->fc_ktp, 'Lihat', 'class="btn btn-sm btn-primary '.$btnDisabled3.'"');
						$row[] = anchor('assets/img/'.$field->fc_ktm, 'Lihat', 'class="btn btn-sm btn-primary '.$btnDisabled4.'"');
						$row[] = anchor('assets/img/'.$field->fc_akta, 'Lihat', 'class="btn btn-sm btn-primary '.$btnDisabled5.'"');
						$row[] = anchor('assets/berkas/'.$field->surat_tugas, 'Lihat', 'class="btn btn-sm btn-primary '.$btnDisabled6.'"');
						$row[] = date('d/m/Y H:i', strtotime($field->tgl_pengajuan));
						$row[] = ce_boolean($field->status, '<span class="label label-warning">Pending</span>|<span class="label label-success">Disetujui</span>|<span class="label label-danger">Ditolak</span>');
						$button = '<div class="btn-group pull-right">
								<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
								Aksi <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>'.ce_anchor('admin.penelitian.update', 'penelitian/edit/'.$field->id, '<i class="fa fa-edit"></i>Edit Data').'</li>
									<li>'.ce_anchor('admin.penelitian.delete', 'penelitian/hapus/'.$field->id, '<i class="fa fa-trash"></i>Hapus Data', 'onclick="return delete_confirm();"').'</li>
								</ul>
							</div>';
						$row[] = $button;

            $data[] = $row;
        }

        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->ajax_data_m->count_all(),
            "recordsFiltered" => $this->ajax_data_m->count_filtered(),
            "data" => $data,
        );

        //output dalam format JSON
		header('Content-Type: application/json');
        echo json_encode($output);
	}
}
