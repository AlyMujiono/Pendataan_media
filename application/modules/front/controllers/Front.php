<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['halaman'] = 'front';

		$this->load->view('template_front', $data);
	}

	public function faq()
	{
		$data['faqlist'] = $this->pengaturan_m->faq_get_all();
		$data['halaman'] = 'faq';
		$data['header'] = '<div class="bg-info text-white text-center p-4">
				<h1>FAQ</h1>
				<p>Pertanyaan dan jawaban seputar persyaratan pengajuan</p>
		</div>';

		$this->load->view('template_front', $data);
	}

	public function ormas()
	{
		$data['ormaslist'] = $this->ormas_m->ormas_get_all_active();
		$data['halaman'] = 'ormas';
		$data['header'] = '<div class="bg-info text-white text-center p-4">
				<h1>Data Media</h1>
				<p>Informasi data Media yang terdaftar di sistem kami</p>
		</div>';

		$this->load->view('template_front', $data);
	}

	public function detail_halaman($id)
	{
		 $detail = $this->halaman_m->halaman_by_id($id);
		 if(!$detail){
			 show_404();
			 exit;
		 }

		 $data['pages'] = $detail;
		 $data['halaman'] = 'detail_halaman';

		 $this->load->view('template_front', $data);
	}
}
