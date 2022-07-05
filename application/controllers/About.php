<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
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
		$data['halaman'] = 'about';
		$data['header'] = 'Support <small>Tentang Aplikasi</small>';
		
		$this->load->view('template', $data);
	}
}
