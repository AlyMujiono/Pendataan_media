<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parpol extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_login')){
			redirect('user/login');
			exit;
		}
		ce_active_menu('admin.parpol.view');

		$this->load->library('upload');
	}

	public function index()
	{
		ce_hak_akses('admin.parpol.view');

		$data['halaman'] = 'parpol';
		$data['javascript'] = array(
			'js/js_datatable' => array('ajax_url' => base_url('parpol/ajax_data'))
		);
		$data['header'] = 'Partai Politik <small>Index Data</small>';

		$this->load->view('template', $data);
	}

	public function tambah()
	{
		ce_hak_akses('admin.parpol.add');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['no_urut'] = $this->input->post('no_urut');
			$post_data['nama_parpol'] = $this->input->post('nama_parpol');

			if(!empty($_FILES['file_berkas']['tmp_name'])){
        $config['upload_path']          = './assets/berkas/';
        $config['allowed_types']        = 'pdf';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_berkas')){
					$fileData = $this->upload->data();
					$post_data['file_berkas'] = $fileData['file_name'];
        }
			}

			if($this->parpol_m->parpol_insert_data($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('parpol');
		}

		$data['halaman'] = 'parpol_tambah';
		$data['header'] = 'Partai Politik <small>Tambah Data</small>';

		$this->load->view('template', $data);
	}

	public function edit($id)
	{
		ce_hak_akses('admin.parpol.update');

		$parpol = $this->parpol_m->parpol_by_id($id);
		if($this->input->method(TRUE)=='POST')
		{
			$post_data['no_urut'] = $this->input->post('no_urut');
			$post_data['nama_parpol'] = $this->input->post('nama_parpol');

			if(!empty($_FILES['file_berkas']['tmp_name'])){
        $config['upload_path']          = './assets/berkas/';
        $config['allowed_types']        = 'pdf';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_berkas')){
					$fileData = $this->upload->data();
					$post_data['file_berkas'] = $fileData['file_name'];
					unlink($config['upload_path'].$parpol->file_berkas);
        }
			}

			if($this->parpol_m->parpol_update_data($post_data, $id))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('parpol');
		}

		$data['parpol'] = $parpol;
		$data['halaman'] = 'parpol_edit';
		$data['header'] = 'Partai Politik <small>Edit Data</small>';

		$this->load->view('template', $data);
	}

	public function anggota($id)
	{
		ce_hak_akses('admin.parpol.view');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['id_parpol'] = ((int)$id);
			$post_data['nama'] = $this->input->post('nama');
			$post_data['jabatan'] = $this->input->post('jabatan');

			if($this->parpol_m->parpol_insert_anggota($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('parpol/anggota/'.$id);
		}

		$data['id_parpol'] = $id;
		$data['anggotalist'] = $this->parpol_m->anggota_by_parpol($id);
		$data['halaman'] = 'anggota';
		$data['header'] = 'Partai Politik <small>Anggota Parpol</small>';

		$this->load->view('template', $data);
	}

	public function hapus_anggota($id_parpol, $id)
	{
		ce_hak_akses('admin.parpol.delete');

		$this->parpol_m->anggota_delete_data($id);
		$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
		ce_set_msg('success', $success);

		redirect('parpol/anggota/'.$id_parpol);
	}

	public function hapus($id)
	{
		ce_hak_akses('admin.parpol.delete');

		$this->parpol_m->parpol_delete_data($id);
		$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
		ce_set_msg('success', $success);

		redirect('parpol');
	}

	public function ajax_data()
	{
		ce_hak_akses('admin.parpol.view');

		$dataConfig = array(
			'table' => 'parpol',
			'column_order' => array(null,'no_urut','nama_parpol',null,null),
			'column_search' => array('no_urut','nama_parpol'),
			'order' => array('id' => 'asc')
		);
		$this->ajax_data_m->data_config($dataConfig);
		$list = $this->ajax_data_m->get_datatables();

		$data = array();
        $no = $this->input->post('start');
        foreach ($list as $field) {
            $no++;
						$berkas = $field->file_berkas!='' ? anchor('assets/berkas/'.$field->file_berkas, '<i class="fa fa-eye-open"></i> Lihat', 'target="_blank" class="btn btn-sm btn-primary"') : '<a href="javascript:;" class="btn btn-sm btn-primary disabled"><i class="fa fa-eye-open"></i> Lihat</a>';
						$row = array();
						$row[] = $no;
						$row[] = $field->no_urut;
						$row[] = $field->nama_parpol;
						$row[] = $berkas;
						$button = '<div class="btn-group pull-right">
								<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
								Aksi <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>'.ce_anchor('admin.parpol.view', 'parpol/anggota/'.$field->id, '<i class="fa fa-users"></i>Daftar Anggota').'</li>
									<li class="divider"></li>
									<li>'.ce_anchor('admin.parpol.update', 'parpol/edit/'.$field->id, '<i class="fa fa-edit"></i>Edit Data').'</li>
									<li>'.ce_anchor('admin.parpol.delete', 'parpol/hapus/'.$field->id, '<i class="fa fa-trash"></i>Hapus Data', 'onclick="return delete_confirm();"').'</li>
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
