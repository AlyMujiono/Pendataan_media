<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_login')){
			redirect('user/login');
			exit;
		}
		ce_active_menu('admin.halaman.view');

		$this->load->library('upload');
	}

	public function index()
	{
		ce_hak_akses('admin.halaman.view');

		$data['halaman'] = 'halaman';
		$data['javascript'] = array(
			'js/js_datatable' => array('ajax_url' => base_url('halaman/ajax_data'))
		);
		$data['header'] = 'Halaman <small>Index Data</small>';

		$this->load->view('template', $data);
	}

	public function tambah()
	{
		ce_hak_akses('admin.halaman.add');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['judul'] = $this->input->post('judul');
			$post_data['konten'] = $this->input->post('konten');

			if(!empty($_FILES['gambar']['tmp_name'])){
        $config['upload_path']          = './assets/img/halaman/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar')){
					$fileData = $this->upload->data();
					$post_data['gambar'] = $fileData['file_name'];
        }
			}

			if($this->halaman_m->halaman_insert_data($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('halaman');
		}

		$data['halaman'] = 'halaman_tambah';
		$data['header'] = 'Halaman <small>Tambah Data</small>';

		$this->load->view('template', $data);
	}

	public function edit($id)
	{
		ce_hak_akses('admin.halaman.update');

		$halaman = $this->halaman_m->halaman_by_id($id);
		if($this->input->method(TRUE)=='POST')
		{
			$post_data['judul'] = $this->input->post('judul');
			$post_data['konten'] = $this->input->post('konten');

			if(!empty($_FILES['gambar']['tmp_name'])){
        $config['upload_path']          = './assets/img/halaman/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar')){
					$fileData = $this->upload->data();
					$post_data['gambar'] = $fileData['file_name'];
					@unlink($config['upload_path'].$halaman->gambar);
        }
			}

			if($this->halaman_m->halaman_update_data($post_data, $id))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('halaman');
		}

		$data['page'] = $halaman;
		$data['halaman'] = 'halaman_edit';
		$data['header'] = 'Halaman <small>Edit Data</small>';

		$this->load->view('template', $data);
	}

	public function hapus($id)
	{
		ce_hak_akses('admin.halaman.delete');

		$halaman = $this->halaman_m->halaman_by_id($id);
		@unlink('./assets/img/halaman/'.$halaman->gambar);

		$this->halaman_m->halaman_delete_data($id);
		$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
		ce_set_msg('success', $success);

		redirect('halaman');
	}

	public function ajax_data()
	{
		ce_hak_akses('admin.halaman.view');

		$dataConfig = array(
			'table' => 'halaman',
			'column_order' => array(null,null,'judul',null,null),
			'column_search' => array('judul'),
			'order' => array('id' => 'asc')
		);
		$this->ajax_data_m->data_config($dataConfig);
		$list = $this->ajax_data_m->get_datatables();

		$data = array();
        $no = $this->input->post('start');
        foreach ($list as $field) {
            $no++;
						$row = array();
						$row[] = $no;
						$row[] = '<img src="'.base_url('assets/img/halaman/'.$field->gambar).'" class="img-thumbnail" width="100">';
						$row[] = $field->judul;
						$row[] = base_url('page/'.$field->id);
						$button = '<div class="btn-group pull-right">
								<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
								Aksi <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>'.ce_anchor('admin.halaman.update', 'halaman/edit/'.$field->id, '<i class="fa fa-edit"></i>Edit Data').'</li>
									<li>'.ce_anchor('admin.halaman.delete', 'halaman/hapus/'.$field->id, '<i class="fa fa-trash"></i>Hapus Data', 'onclick="return delete_confirm();"').'</li>
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
