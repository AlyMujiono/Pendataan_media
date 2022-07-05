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

	public function pengajuan_penelitian()
	{
		if($this->input->method(TRUE)=='POST')
		{
			$post_data['id'] = rand(100, 999).date('dmYHis');
			$post_data['nama'] = $this->input->post('nama');
			$post_data['tgl_pengajuan'] = date('Y-m-d');

			if(!empty($_FILES['surat_pengantar']['tmp_name'])){
				$config['upload_path']          = './assets/berkas/';
				$config['allowed_types']        = 'pdf';
				$config['encrypt_name']        	= true;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('surat_pengantar')){
					$fileData = $this->upload->data();
					$post_data['surat_pengantar'] = $fileData['file_name'];
				}
			}
			if(!empty($_FILES['fc_proposal']['tmp_name'])){
				$config['upload_path']          = './assets/img/';
				$config['allowed_types']        = 'jpg|jpeg|png|gif';
				$config['encrypt_name']        	= true;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('fc_proposal')){
					$fileData = $this->upload->data();
					$post_data['fc_proposal'] = $fileData['file_name'];
				}
			}
			if(!empty($_FILES['fc_ktp']['tmp_name'])){
				$config['upload_path']          = './assets/img/';
				$config['allowed_types']        = 'jpg|jpeg|png|gif';
				$config['encrypt_name']        	= true;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('fc_ktp')){
					$fileData = $this->upload->data();
					$post_data['fc_ktp'] = $fileData['file_name'];
				}
			}
			if(!empty($_FILES['fc_ktm']['tmp_name'])){
				$config['upload_path']          = './assets/img/';
				$config['allowed_types']        = 'jpg|jpeg|png|gif';
				$config['encrypt_name']        	= true;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('fc_ktm')){
					$fileData = $this->upload->data();
					$post_data['fc_ktm'] = $fileData['file_name'];
				}
			}
			if(!empty($_FILES['fc_akta']['tmp_name'])){
				$config['upload_path']          = './assets/img/';
				$config['allowed_types']        = 'jpg|jpeg|png|gif';
				$config['encrypt_name']        	= true;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('fc_akta')){
					$fileData = $this->upload->data();
					$post_data['fc_akta'] = $fileData['file_name'];
				}
			}
			if(!empty($_FILES['surat_tugas']['tmp_name'])){
				$config['upload_path']          = './assets/berkas/';
				$config['allowed_types']        = 'pdf';
				$config['encrypt_name']        	= true;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('surat_tugas')){
					$fileData = $this->upload->data();
					$post_data['surat_tugas'] = $fileData['file_name'];
				}
			}

			if($this->penelitian_m->penelitian_insert_data($post_data))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Pengajuan Anda telah dibuat dengan kode registrasi sbb: <br><br> <b>'.$post_data['id'].'</b><br><br>Harap simpan kode registrasi diatas.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('pengajuan-penelitian');
		}

		$data['halaman'] = 'pengajuan_penelitian';
		$data['header'] = '<div class="bg-info text-white text-center p-4">
				<h1>Form Pengajuan Penerbitan Rekomendasi Penelitian</h1>
				<p>&nbsp;</p>
		</div>';

		$this->load->view('template_front', $data);
	}

	public function cek_status_pengajuan()
	{
		$result = [];

		if($this->input->method(TRUE)=='POST')
		{
			$id = $this->input->post('noreg');
			$result = $this->penelitian_m->penelitian_by_id($id);
		}

		$data['result'] = $result;
		$data['halaman'] = 'cek_status_pengajuan';
		$data['header'] = '<div class="bg-info text-white text-center p-4">
				<h1>Cek Status Pengajuan Penerbitan Rekomendasi Penelitian</h1>
				<p>&nbsp;</p>
		</div>';

		$this->load->view('template_front', $data);
	}

	public function download_berkas_rekomendasi($id)
	{
			$data = $this->penelitian_m->penelitian_by_id($id);
	    $filename = './assets/berkas/'.$data->berkas_rekomendasi;

	    $fileinfo = pathinfo($filename);
	    $sendname = $fileinfo['filename'] . '.' . $fileinfo['extension'];

	    header('Content-Type: application/pdf');
	    header("Content-Disposition: attachment; filename=\"$sendname\"");
	    header('Content-Length: ' . filesize($filename));
	    readfile($filename);
	}

	public function pengaduan()
	{
		if(!isset($_POST['captcha'])){
			$bil1 = rand(1,9);
			$bil2 = rand(1,9);
			$captcha_tanya = "$bil1 + $bil2";
			$captcha_jawab = $bil1 + $bil2;

			$this->session->set_userdata(['captcha_tanya'=>$captcha_tanya, 'captcha_jawab'=>$captcha_jawab]);
		}

		if($this->input->method(TRUE)=='POST')
		{
			if($this->input->post('captcha')!=$this->session->userdata('captcha_jawab')){
				$danger = '<h4><i class="icon fa fa-ban"></i> Ups!</h4> Kode Captcha yang Anda masukan salah.';
				ce_set_msg('danger', $danger);
			} else {
				$post_data['nama'] = $this->input->post('nama');
				$post_data['no_telp'] = $this->input->post('no_telp');
				$post_data['subjek'] = $this->input->post('subjek');
				$post_data['isi_pesan'] = $this->input->post('isi_pesan');

				if($this->pesan_m->pesan_insert_data($post_data))
				{
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
		$data['header'] = '<div class="bg-info text-white text-center p-4">
				<h1>Layanan Pengaduan</h1>
				<p>Anda dapat mengajukan pengaduan kepada kami</p>
		</div>';

		$this->load->view('template_front', $data);
	}

	public function ormas()
	{
		$data['ormaslist'] = $this->ormas_m->ormas_get_all_active();
		$data['halaman'] = 'ormas';
		$data['header'] = '<div class="bg-info text-white text-center p-4">
				<h1>Data Organisasi Masyarakat</h1>
				<p>Informasi data Organisasi Masyarakat yang terdaftar di sistem kami</p>
		</div>';

		$this->load->view('template_front', $data);
	}

	public function berita($offset=0)
	{
     $perpage = 10;
     $data['beritalist'] = $this->db->order_by('id', 'DESC')->limit($perpage, $offset)->get_where('berita', ['status'=>1])->result();

     $config['base_url'] = base_url('news/page');
		 $config['first_url'] = base_url('news');
     $config['total_rows'] = $this->db->get_where('berita', ['status'=>1])->num_rows();
     $config['per_page'] = $perpage;
		 $config['next_link'] = '>';
			$config['prev_link'] = '<';
			$config['first_link'] = '<<';
			$config['last_link'] = '>>';
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['num_tag_open'] = '<li class="page-item">';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['prev_tag_open'] = '<li class="page-item">';
			$config['prev_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li class="page-item">';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li class="page-item">';
			$config['last_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li class="page-item">';
			$config['first_tag_close'] = '</li>';
			$config['attributes']['class'] = "page-link";
     $this->pagination->initialize($config);

		 $data['halaman'] = 'berita';

		 $this->load->view('template_front', $data);
	}

	public function detail_berita($id)
	{
		 $detail = $this->berita_m->berita_by_id($id);
		 if(!$detail){
			 show_404();
			 exit;
		 }

		 $data['berita'] = $detail;
		 $data['halaman'] = 'detail_berita';

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
