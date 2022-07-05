<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_login')){
			redirect('user/login');
			exit;
		}

		$this->load->library('upload');
	}

	public function index()
	{
		show_404();
	}

	public function identitas()
	{
		ce_hak_akses('admin.pengaturan.identitas');
		ce_active_menu('admin.pengaturan.identitas');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['nama_situs'] = $this->input->post('nama_situs');
			$post_data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
			$post_data['no_sia'] = $this->input->post('no_sia');
			$post_data['nama_pemilik'] = $this->input->post('nama_pemilik');
			$post_data['nama_pengelola'] = $this->input->post('nama_pengelola');
			$post_data['no_sipa'] = $this->input->post('no_sipa');
			$post_data['email_perusahaan'] = $this->input->post('email_perusahaan');
			$post_data['telepon_perusahaan'] = $this->input->post('telepon_perusahaan');
			$post_data['provinsi'] = $this->input->post('provinsi');
			$post_data['kota'] = $this->input->post('kota');
			$post_data['kecamatan'] = $this->input->post('kecamatan');
			$post_data['alamat_perusahaan'] = $this->input->post('alamat_perusahaan');

			if(!empty($_FILES['logo']['tmp_name'])){
                $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'jpg|jpeg|png|gif';
                $config['file_name']            = 'logo_'.time();

                $this->upload->initialize($config);

                if ($this->upload->do_upload('logo')){
					$post_data['logo'] = $config['file_name'].$this->upload->data('file_ext');
					unlink($config['upload_path'].ce_opsi('logo'));
                }
			}

			if(!empty($_FILES['favicon']['tmp_name'])){
				$config = array();
                $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'png|gif';
                $config['file_name']            = 'favicon_'.time();

                $this->upload->initialize($config);

                if ($this->upload->do_upload('favicon')){
					$post_data['favicon'] = $config['file_name'].$this->upload->data('file_ext');
					unlink($config['upload_path'].ce_opsi('favicon'));
                }
			}

			if(ce_set_opsi($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('pengaturan/identitas');
		}

		$data['halaman'] = 'pengaturan_identitas';
		$data['header'] = 'Pengaturan <small>Pengaturan identitas</small>';

		$this->load->view('template', $data);
	}


	public function faq($id=0)
	{
		ce_hak_akses('admin.pengaturan.faq');
		ce_active_menu('admin.pengaturan.faq');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['pertanyaan'] = $this->input->post('pertanyaan');
			$post_data['jawaban'] = $this->input->post('jawaban');

			if($id==0)
				$action = $this->pengaturan_m->faq_insert_data($post_data);
			else
				$action = $this->pengaturan_m->faq_update_data($post_data, $id);

			if($action)
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('pengaturan/faq');
		}

		$data['halaman'] = 'pengaturan_faq';
		$data['faqlist'] = $this->pengaturan_m->faq_get_all();
		$data['id_faq'] = $id;
		$data['header'] = 'Pengaturan <small>Pengaturan FAQ</small>';

		$this->load->view('template', $data);
	}

	public function hapus_faq($id)
	{
		ce_hak_akses('admin.pengaturan.faq');

		$this->pengaturan_m->faq_delete_data($id);
		$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
		ce_set_msg('success', $success);

		redirect('pengaturan/faq');
	}

	public function kontak()
	{
		ce_hak_akses('admin.pengaturan.kontak');
		ce_active_menu('admin.pengaturan.kontak');

		if($this->input->method(TRUE)=='POST')
		{
			$post_data['kontak'] = $this->input->post('kontak');

			if(ce_set_opsi($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('pengaturan/kontak');
		}

		$data['halaman'] = 'pengaturan_kontak';
		$data['header'] = 'Pengaturan <small>Pengaturan Kontak</small>';

		$this->load->view('template', $data);
	}
}
