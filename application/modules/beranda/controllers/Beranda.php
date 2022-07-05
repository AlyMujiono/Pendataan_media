<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_login')){
			redirect('user/login');
			exit;
		}
	}

	public function index()
	{
		ce_active_menu('admin.beranda.view');
		$data['halaman'] = 'beranda';
		$data['header'] = 'Beranda <small>Content Manajemen System</small>';

		$this->load->view('template', $data);
	}
}
