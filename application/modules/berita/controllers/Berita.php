<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_login')){
			redirect('user/login');
			exit;
		}
		ce_active_menu('admin.berita.view');

		$this->load->library('upload');
	}

	public function index()
	{
		ce_hak_akses('admin.berita.view');

		$data['halaman'] = 'berita';
		$data['javascript'] = array(
			'js/js_datatable' => array('ajax_url' => base_url('berita/ajax_data'))
		);
		$data['header'] = 'Berita <small>Index Data</small>';

		$this->load->view('template', $data);
	}

	public function tambah()
	{
		ce_hak_akses('admin.berita.add');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['judul'] = $this->input->post('judul');
			$post_data['label'] = $this->input->post('label');
			$post_data['konten'] = $this->input->post('konten');
			$post_data['waktu'] = date('Y-m-d H:i:s');
			$post_data['status'] = abs((int)$this->input->post('status'));

			if(!empty($_FILES['gambar']['tmp_name'])){
        $config['upload_path']          = './assets/img/berita/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar')){
					$fileData = $this->upload->data();
					$post_data['gambar'] = $fileData['file_name'];
        }
			}

			if($this->berita_m->berita_insert_data($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('berita');
		}

		$data['halaman'] = 'berita_tambah';
		$data['header'] = 'Berita <small>Tambah Data</small>';

		$this->load->view('template', $data);
	}

	public function edit($id)
	{
		ce_hak_akses('admin.berita.update');

		$berita = $this->berita_m->berita_by_id($id);
		if($this->input->method(TRUE)=='POST')
		{
			$post_data['judul'] = $this->input->post('judul');
			$post_data['label'] = $this->input->post('label');
			$post_data['konten'] = $this->input->post('konten');
			$post_data['waktu'] = date('Y-m-d H:i:s');
			$post_data['status'] = abs((int)$this->input->post('status'));

			if(!empty($_FILES['gambar']['tmp_name'])){
        $config['upload_path']          = './assets/img/berita/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar')){
					$fileData = $this->upload->data();
					$post_data['gambar'] = $fileData['file_name'];
					unlink($config['upload_path'].$berita->gambar);
        }
			}

			if($this->berita_m->berita_update_data($post_data, $id))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('berita');
		}

		$data['berita'] = $berita;
		$data['halaman'] = 'berita_edit';
		$data['header'] = 'Berita <small>Edit Data</small>';

		$this->load->view('template', $data);
	}

	public function hapus($id)
	{
		ce_hak_akses('admin.berita.delete');

		$berita = $this->berita_m->berita_by_id($id);
		@unlink('./assets/img/berita/'.$berita->gambar);

		$this->berita_m->berita_delete_data($id);
		$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
		ce_set_msg('success', $success);

		redirect('berita');
	}

	public function ajax_data()
	{
		ce_hak_akses('admin.berita.view');

		$dataConfig = array(
			'table' => 'berita',
			'column_order' => array(null,null,'judul',null,'waktu',null,null),
			'column_search' => array('judul','label'),
			'order' => array('id' => 'asc')
		);
		$this->ajax_data_m->data_config($dataConfig);
		$list = $this->ajax_data_m->get_datatables();

		$data = array();
        $no = $this->input->post('start');
        foreach ($list as $field) {
            $no++;
						$label = explode(',', $field->label);
						$row = array();
						$row[] = $no;
						
						$row[] = $field->judul;
						$row[] = '<span class="label label-default">'.implode('</span> <span class="label label-default">', $label).'</span>';
						$row[] = date('d/m/Y H:i', strtotime($field->waktu));
						$row[] = ce_boolean($field->status, '<span class="label label-danger">Non-Aktif</span>|<span class="label label-success">Aktif</span>');
						$button = '<div class="btn-group pull-right">
								<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
								Aksi <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>'.ce_anchor('admin.berita.update', 'berita/edit/'.$field->id, '<i class="fa fa-edit"></i>Edit Data').'</li>
									<li>'.ce_anchor('admin.berita.delete', 'berita/hapus/'.$field->id, '<i class="fa fa-trash"></i>Hapus Data', 'onclick="return delete_confirm();"').'</li>
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
