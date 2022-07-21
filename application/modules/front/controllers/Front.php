<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
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
		$data['header'] = '<div class="text-white text-center p-4">
				<h1>FAQ</h1>
				<p>Pertanyaan dan jawaban seputar persyaratan pengajuan</p>
		</div>';

		$this->load->view('template_front', $data);
	}

	public function media()
	{
		$data['medialist'] = $this->media_m->media_get_all_active();
		$data['halaman'] = 'media';
		$data['header'] = '<div class="text-white text-center p-4">
				<h1>Data Media</h1>
				<p>Informasi data Media yang terdaftar di sistem kami</p>
		</div>';

		$this->load->view('template_front', $data);
	}

	public function detail_halaman($id)
	{
		$detail = $this->halaman_m->halaman_by_id($id);
		if (!$detail) {
			show_404();
			exit;
		}

		$data['pages'] = $detail;
		$data['halaman'] = 'detail_halaman';

		$this->load->view('template_front', $data);
	}

	public function pengaduan()
	{
		if (!isset($_POST['captcha'])) {
			$bil1 = rand(1, 9);
			$bil2 = rand(1, 9);
			$captcha_tanya = "$bil1 + $bil2";
			$captcha_jawab = $bil1 + $bil2;

			$this->session->set_userdata(['captcha_tanya' => $captcha_tanya, 'captcha_jawab' => $captcha_jawab]);
		}

		if ($this->input->method(TRUE) == 'POST') {
			if ($this->input->post('captcha') != $this->session->userdata('captcha_jawab')) {
				$danger = '<h4><i class="icon fa fa-ban"></i> Ups!</h4> Kode Captcha yang Anda masukan salah.';
				ce_set_msg('danger', $danger);
			} else {
				$post_data['nama'] = $this->input->post('nama');
				$post_data['no_telp'] = $this->input->post('no_telp');
				$post_data['subjek'] = $this->input->post('subjek');
				$post_data['isi_pesan'] = $this->input->post('isi_pesan');

				if ($this->pesan_m->pesan_insert_data($post_data)) {
					$success = '<h4><i class="icon fa fa-check"></i> Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
					ce_set_msg('success', $success);
				} else {
					$danger = '<h4><i class="icon fa fa-ban"></i> Ups!</h4> Data yang Anda masukan gagal tersimpan.';
					ce_set_msg('danger', $danger);
				}
			}

			redirect('pengaduan');
		}

		$data['halaman'] = 'pengaduan';
		$data['header'] = '<div class="text-white text-center p-4">
				<h1>Layanan Pengaduan</h1>
				<p>Anda dapat mengajukan pengaduan kepada kami</p>
		</div>';

		$this->load->view('template_front', $data);
	}
}
