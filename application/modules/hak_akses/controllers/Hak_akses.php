<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hak_akses extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_login')){
			redirect('user/login');
			exit;
		}
		ce_active_menu('admin.hak_akses.view');
	}
	
	public function index()
	{
		ce_hak_akses('admin.hak_akses.view');
		
		$data['level'] = $this->level_m->level_get_all();
		$data['halaman'] = 'hak_akses';
		$data['header'] = 'Hak Akses <small>Daftar Hak Akses</small>';
		
		$this->load->view('template', $data);
	}
	
	public function tambah()
	{		
		ce_hak_akses('admin.hak_akses.add');
		
		if($this->input->method(TRUE)=='POST')
		{
			$post_data['unikode'] = $this->input->post('unikode');
			$post_data['level'] = $this->input->post('level');
			$post_data['hak_akses'] = json_encode($this->input->post('hak_akses'));
			
			if($this->level_m->level_insert_data($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);				
			}
			
			redirect('hak-akses');
		}
		
		$data['hak_akses'] = $this->config->item('hak_akses');
		$data['halaman'] = 'hak_akses_tambah';
		$data['header'] = 'Hak Akses <small>Tambah Hak Akses</small>';
		
		$this->load->view('template', $data);
	}
	
	public function edit($id)
	{	
		ce_hak_akses('admin.hak_akses.update');
		
		if($this->input->method(TRUE)=='POST')
		{
			$post_data['unikode'] = $this->input->post('unikode');
			$post_data['level'] = $this->input->post('level');
			$post_data['hak_akses'] = json_encode($this->input->post('hak_akses'));
			
			if($this->level_m->level_update_data($post_data, $id))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);				
			}
			
			redirect('hak-akses');
		}
		
		$data['hak_akses'] = $this->config->item('hak_akses');
		$data['level'] = $this->level_m->level_by_id($id);
		$data['halaman'] = 'hak_akses_edit';
		$data['header'] = 'Hak Akses <small>Edit Hak Akses</small>';
		
		$this->load->view('template', $data);
	}
	
	public function hapus($id)
	{	
		ce_hak_akses('admin.hak_akses.delete');
		
		$level = $this->level_m->level_by_id($id);
		if($level->id_level!=1){
			$this->level_m->level_delete_data($id);
			$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
			ce_set_msg('success', $success);
		}
		
		redirect('hak-akses');
	}
}
