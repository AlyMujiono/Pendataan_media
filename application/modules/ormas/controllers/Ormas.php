<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ormas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_login')){
			redirect('user/login');
			exit;
		}
		ce_active_menu('admin.ormas.view');

		$this->load->library('upload');
	}

	public function index()
	{
		ce_hak_akses('admin.ormas.view');

		$data['halaman'] = 'ormas';
		$data['javascript'] = array(
			'js/js_datatable' => array('ajax_url' => base_url('ormas/ajax_data'))
		);
		$data['header'] = 'Media<small>Index Data</small>';

		$this->load->view('template', $data);
	}

	public function tambah()
	{
		ce_hak_akses('admin.ormas.add');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['id'] = rand(100, 999).date('dmYHis');
			$post_data['id_user'] = $this->session->userdata('id_user');
			$post_data['nama_organisasi'] = $this->input->post('nama_organisasi');
			$post_data['bentuk_organisasi'] = $this->input->post('bentuk_organisasi');
			$post_data['sifat_organisasi'] = $this->input->post('sifat_organisasi');
			$post_data['no_ahuskt'] = $this->input->post('no_ahuskt');
			$post_data['ttp'] = $this->input->post('ttp');
			$post_data['notaris'] = $this->input->post('notaris');
			$post_data['no_permohonan'] = $this->input->post('no_permohonan');
			$post_data['sumber_dana'] = $this->input->post('sumber_dana');
			$post_data['no_npwp'] = $this->input->post('no_npwp');
			$post_data['no_telp'] = $this->input->post('no_telp');
			$post_data['alamat'] = $this->input->post('alamat');
			$post_data['ketua'] = $this->input->post('ketua');
			$post_data['sekretaris'] = $this->input->post('sekretaris');
			$post_data['bendahara'] = $this->input->post('bendahara');
			if($this->session->userdata('level')!='member'){
				$post_data['no_berlaku'] = $this->input->post('no_berlaku');
				$post_data['tgl_berlaku'] = $this->input->post('tgl_berlaku');
				$post_data['verifikasi'] = abs((int)$this->input->post('verifikasi'));
				if($post_data['verifikasi']!=0)
					$post_data['tgl_verifikasi'] = date('Y-m-d');
				$post_data['status'] = abs((int)$this->input->post('status'));
			}

			if(!empty($_FILES['lambang']['tmp_name'])){
        $config['upload_path']          = './assets/img/';
				$config['allowed_types']        = 'jpg|jpeg|png|gif';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('lambang')){
					$fileData = $this->upload->data();
					$post_data['lambang'] = $fileData['file_name'];
        }
			}

			if($this->ormas_m->ormas_insert_data($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('ormas');
		}

		$data['halaman'] = 'ormas_tambah';
		$data['header'] = 'Organisasi Masyarakat <small>Tambah Data</small>';

		$this->load->view('template', $data);
	}

	public function edit($id)
	{
		ce_hak_akses('admin.ormas.update');

		$ormas = $this->ormas_m->ormas_by_id($id);
		if($this->input->method(TRUE)=='POST')
		{
			$post_data['id_user'] = $this->session->userdata('id_user');
			$post_data['nama_organisasi'] = $this->input->post('nama_organisasi');
			$post_data['bentuk_organisasi'] = $this->input->post('bentuk_organisasi');
			$post_data['sifat_organisasi'] = $this->input->post('sifat_organisasi');
			$post_data['no_ahuskt'] = $this->input->post('no_ahuskt');
			$post_data['ttp'] = $this->input->post('ttp');
			$post_data['notaris'] = $this->input->post('notaris');
			$post_data['no_permohonan'] = $this->input->post('no_permohonan');
			$post_data['sumber_dana'] = $this->input->post('sumber_dana');
			$post_data['no_npwp'] = $this->input->post('no_npwp');
			$post_data['no_telp'] = $this->input->post('no_telp');
			$post_data['alamat'] = $this->input->post('alamat');
			$post_data['ketua'] = $this->input->post('ketua');
			$post_data['sekretaris'] = $this->input->post('sekretaris');
			$post_data['bendahara'] = $this->input->post('bendahara');
			if($this->session->userdata('level')!='member'){
				$post_data['no_berlaku'] = $this->input->post('no_berlaku');
				$post_data['tgl_berlaku'] = $this->input->post('tgl_berlaku');
				$post_data['verifikasi'] = abs((int)$this->input->post('verifikasi'));
				if($post_data['verifikasi']!=0)
					$post_data['tgl_verifikasi'] = date('Y-m-d');
				$post_data['status'] = abs((int)$this->input->post('status'));
			}

			if(!empty($_FILES['lambang']['tmp_name'])){
        $config['upload_path']          = './assets/img/';
				$config['allowed_types']        = 'jpg|jpeg|png|gif';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('lambang')){
					$fileData = $this->upload->data();
					$post_data['lambang'] = $fileData['file_name'];
					unlink($config['upload_path'].$ormas->lambang);
        }
			}

			if($this->ormas_m->ormas_update_data($post_data, $id))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('ormas');
		}

		$data['ormas'] = $ormas;
		$data['halaman'] = 'ormas_edit';
		$data['header'] = 'Organisasi Masyarakat <small>Edit Data</small>';

		$this->load->view('template', $data);
	}

	public function anggota($id)
	{
		ce_hak_akses('admin.ormas.view');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['id_ormas'] = ((int)$id);
			$post_data['nama'] = $this->input->post('nama');
			$post_data['jabatan'] = $this->input->post('jabatan');
			$post_data['ttl'] = $this->input->post('ttl');
			$post_data['jk'] = $this->input->post('jk');
			$post_data['alamat'] = $this->input->post('alamat');
			$post_data['status'] = $this->input->post('status');

			if($this->ormas_m->ormas_insert_anggota($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('ormas/anggota/'.$id);
		}

		$data['id_ormas'] = $id;
		$data['anggotalist'] = $this->ormas_m->anggota_by_ormas($id);
		$data['halaman'] = 'anggota';
		$data['header'] = 'Organisasi Masyarakat <small>Anggota Media</small>';

		$this->load->view('template', $data);
	}

	public function syarat($id)
	{
		ce_hak_akses('admin.ormas.view');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['id_ormas'] = ((int)$id);
			$post_data['nama'] = $this->input->post('nama');

			if(!empty($_FILES['berkas']['tmp_name'])){
        $config['upload_path']          = './assets/berkas/';
        $config['allowed_types']        = 'pdf';
        $config['encrypt_name']        	= true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('berkas')){
					$fileData = $this->upload->data();
					$post_data['berkas'] = $fileData['file_name'];
        }
			}

			if($this->ormas_m->ormas_insert_syarat($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('ormas/syarat/'.$id);
		}

		$data['id_ormas'] = $id;
		$data['syaratlist'] = $this->ormas_m->syarat_by_ormas($id);
		$data['halaman'] = 'syarat';
		$data['header'] = 'Organisasi Masyarakat <small>Persyaratan</small>';

		$this->load->view('template', $data);
	}

	public function hapus_syarat($id_ormas, $id)
	{
		ce_hak_akses('admin.ormas.delete');

		$syarat = $this->db->get_where('syarat_ormas', ['id'=>$id])->row();
		@unlink('./assets/berkas/'.$syarat->berkas);

		$this->ormas_m->syarat_delete_data($id);
		$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
		ce_set_msg('success', $success);

		redirect('ormas/syarat/'.$id_ormas);
	}

	public function hapus_anggota($id_ormas, $id)
	{
		ce_hak_akses('admin.ormas.delete');

		$this->ormas_m->anggota_delete_data($id);
		$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
		ce_set_msg('success', $success);

		redirect('ormas/anggota/'.$id_ormas);
	}

	public function hapus($id)
	{
		ce_hak_akses('admin.ormas.delete');

		$this->ormas_m->ormas_delete_data($id);
		$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
		ce_set_msg('success', $success);

		redirect('ormas');
	}

	public function ajax_data()
	{
		ce_hak_akses('admin.ormas.view');

		$dataConfig = array(
			'table' => 'ormas',
			'column_order' => array(null,'nama_organisasi','bentuk_organisasi','sifat_organisasi',null),
			'column_search' => array('nama_organisasi','bentuk_organisasi','sifat_organisasi'),
			'order' => array('id' => 'asc')
		);
		if($this->session->userdata('level')=='member')
			$dataConfig['condition'][] = ['id_user'=>$this->session->userdata('id_user')];

		$this->ajax_data_m->data_config($dataConfig);
		$list = $this->ajax_data_m->get_datatables();

		$data = array();
        $no = $this->input->post('start');
        foreach ($list as $field) {
            $no++;
						$row = array();
						$row[] = $no;
						$row[] = $field->nama_organisasi;
						$row[] = $field->bentuk_organisasi;
						$row[] = $field->sifat_organisasi;
						$row[] = ce_boolean($field->verifikasi, '<span class="label label-danger">Tidak</span>|<span class="label label-success">Ya</span>');
						$row[] = ce_boolean($field->status, '<span class="label label-danger">Non-Aktif</span>|<span class="label label-success">Aktif</span>');
						$button = '<div class="btn-group pull-right">
								<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
								Aksi <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>'.ce_anchor('admin.ormas.view', 'ormas/syarat/'.$field->id, '<i class="fa fa-legal"></i>Persyaratan').'</li>
									<li class="divider"></li>
									<li>'.ce_anchor('admin.ormas.update', 'ormas/edit/'.$field->id, '<i class="fa fa-edit"></i>Edit Data').'</li>
									<li>'.ce_anchor('admin.ormas.delete', 'ormas/hapus/'.$field->id, '<i class="fa fa-trash"></i>Hapus Data', 'onclick="return delete_confirm();"').'</li>
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
