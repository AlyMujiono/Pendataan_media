<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		ce_active_menu('admin.user.view');

		if (!$this->session->userdata('user_login') && get_cookie('log_file')) {
			$log_file = get_cookie('log_file');
			@unlink($log_file);
			delete_cookie('log_file');
		}
	}

	public function index()
	{
		ce_hak_akses('admin.user.view');

		$data['halaman'] = 'user';
		$data['javascript'] = array(
			'js/js_datatable' => array('ajax_url' => base_url('user/ajax_data'))
		);
		$data['header'] = 'User <small>Daftar User</small>';

		$this->load->view('template', $data);
	}

	public function tambah()
	{
		ce_hak_akses('admin.user.add');

		if ($this->input->method(TRUE) == 'POST') {
			$post_data['id_level'] = abs((int)$this->input->post('id_level'));
			$post_data['username'] = $this->input->post('username');
			$post_data['password'] = md5($this->input->post('password'));
			$post_data['nama'] = $this->input->post('nama');
			$post_data['no_telp'] = $this->input->post('no_telp');
			$post_data['blokir'] = abs((int)$this->input->post('blokir'));

			if (!empty($_FILES['foto']['tmp_name'])) {
				$config['upload_path']          = './assets/img/user/';
				$config['allowed_types']        = 'jpg|png';
				$config['file_name']            = 'foto_' . $post_data['username'];

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('foto')) {
					echo $this->upload->display_errors();
					exit;
				} else $post_data['foto'] = $config['file_name'] . $this->upload->data('file_ext');
			}

			if ($this->user_m->user_insert_data($post_data)) {
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('user');
		}

		$data['level'] = $this->level_m->level_get_all();
		$data['halaman'] = 'user_tambah';
		$data['header'] = 'User <small>Tambah User</small>';

		$this->load->view('template', $data);
	}

	public function edit($id)
	{
		ce_hak_akses('admin.user.update');

		if ($this->input->method(TRUE) == 'POST') {
			$post_data['id_level'] = abs((int)$this->input->post('id_level'));
			$post_data['username'] = $this->input->post('username');
			if ($this->input->post('password'))
				$post_data['password'] = md5($this->input->post('password'));
			$post_data['nama'] = $this->input->post('nama');
			$post_data['no_telp'] = $this->input->post('no_telp');
			$post_data['blokir'] = abs((int)$this->input->post('blokir'));

			if (!empty($_FILES['foto']['tmp_name'])) {
				$config['upload_path']          = './assets/img/user/';
				$config['allowed_types']        = 'jpg|png';
				$config['file_name']            = 'foto_' . $post_data['username'];

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto'))
					$post_data['foto'] = $config['file_name'] . $this->upload->data('file_ext');
			}

			if ($this->user_m->user_update_data($post_data, $id)) {
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('user');
		}

		$data['user'] = $this->user_m->user_by_id($id);
		$data['level'] = $this->level_m->level_get_all();
		$data['halaman'] = 'user_edit';
		$data['header'] = 'User <small>Edit User</small>';

		$this->load->view('template', $data);
	}

	public function profil()
	{
		$id = $this->session->userdata('id_user');

		if ($this->input->method(TRUE) == 'POST') {
			$post_data['username'] = $this->input->post('username');
			$post_data['no_telp'] = $this->input->post('no_telp');
			if ($this->input->post('password'))
				$post_data['password'] = md5($this->input->post('password'));
			$post_data['nama'] = $this->input->post('nama');

			if (!empty($_FILES['foto']['tmp_name'])) {
				$config['upload_path']          = './assets/img/user/';
				$config['allowed_types']        = 'jpg|png';
				$config['file_name']            = 'foto_' . $post_data['username'];

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto'))
					$post_data['foto'] = $config['file_name'] . $this->upload->data('file_ext');
			}

			if ($this->user_m->user_update_data($post_data, $id)) {
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('user/profil');
		}

		$data['user'] = $this->user_m->user_by_id($id);
		$data['halaman'] = 'user_profil';
		$data['header'] = 'User <small>Edit Profil</small>';

		$this->load->view('template', $data);
	}

	public function hapus($id)
	{
		ce_hak_akses('admin.user.delete');


		$user = $this->user_m->user_by_id($id);
		if ($user->id_level != 1) {
			$this->user_m->user_delete_data($id);
			$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda pilih telah dihapus.';
			ce_set_msg('success', $success);
		}
		redirect('user');
	}

	public function ajax_data()
	{
		ce_hak_akses('admin.user.view');

		$dataConfig = array(
			'table' => 'user',
			'column_order' => array(null, null, 'user.username', 'user.level', 'user.blokir', null),
			'column_search' => array('user.nama', 'user.username'),
			'join' => array(
				array('level', 'user.id_level=level.id_level', 'left')
			),
			'order' => array('user.id_user' => 'desc')
		);
		$this->ajax_data_m->data_config($dataConfig);
		$list = $this->ajax_data_m->get_datatables();

		$data = array();
		$no = $this->input->post('start');
		foreach ($list as $field) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = '<img src="' . base_url('assets/img/user/' . $field->foto) . '" class="user-image" alt="avatar" width="45">';
			$row[] = $field->nama;
			$row[] = $field->username;
			$row[] = $field->level;
			$row[] = ce_ikon_boolean($field->blokir);
			if ($field->id_level != 1 || ($field->id_level == 1 && $this->session->userdata('id_level') == 1)) {
				$row[] = '<div class="btn-group pull-right">
					<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
					Aksi <span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-right" role="menu">
						<li>' . ce_anchor('admin.user.update', 'user/edit/' . $field->id_user, '<i class="fa fa-edit"></i>Edit Data') . '</li>
						<li>' . ce_anchor('admin.user.delete', 'user/hapus/' . $field->id_user, '<i class="fa fa-trash"></i>Hapus Data', 'onclick="return delete_confirm();"') . '</li>
					</ul>
				</div>';
			} else $row[] = '';

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

	public function login()
	{
		if ($this->session->userdata('user_login')) {
			redirect('beranda');
			exit;
		}

		if ($this->input->method(TRUE) == 'POST') {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$user = $this->user_m->user_cek_login($username, $password);
			if ($user) {
				$log_file = './assets/' . md5($user->id_user) . '.log';
				if (!file_exists($log_file)) {
					$log_data = array(
						'user_login' => true,
						'id_user' => $user->id_user,
						'id_level' => $user->id_level,
						'level' => $user->unikode,
						'nama_user' => $user->nama,
						'tanggal_login' => time()
					);
					$this->session->set_userdata($log_data);
					//set_cookie('log_file', $log_file, 3600*24*30);
					//write_file($log_file, 'TRUE');
					redirect('beranda');
				} else {
					$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Akun ini sedang dalam keadaan login di suatu tempat.';
					ce_set_msg('danger', $danger);
					redirect('user/login');
				}
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Username atau Kode OTP yang Anda masukan salah.';
				ce_set_msg('danger', $danger);
				redirect('user/login');
			}
		}

		$this->load->view('login');
	}

	public function daftar()
	{
		if ($this->session->userdata('user_login')) {
			redirect('beranda');
			exit;
		}

		if ($this->input->method(TRUE) == 'POST') {
			$level = $this->db->get_where('level', ['unikode' => 'member'])->row();
			$post_data['id_level'] = $level->id_level;
			$post_data['no_telp'] = $this->input->post('no_telp');
			$post_data['otp'] = md5($this->input->post('otp'));
			$post_data['nama'] = $this->input->post('nama');
			$post_data['foto'] = 'avatar.png';
			$post_data['blokir'] = 1;

			if ($this->user_m->user_insert_data($post_data)) {
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Akun Anda telah berhasil dibuat dan akan dapat digunakan setelah di-verifikasi oleh Admin.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('user/daftar');
		}

		$this->load->view('daftar');
	}

	public function logout()
	{
		unlink(get_cookie('log_file'));
		$this->session->sess_destroy();
		delete_cookie('log_file');
		redirect();
	}
	public function login_admin()
	{
		if ($this->session->userdata('user_login')) {
			redirect('beranda');
			exit;
		}

		if ($this->input->method(TRUE) == 'POST') {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$user = $this->user_m->user_cek_login($username, $password);
			if ($user) {
				$log_file = './assets/' . md5($user->id_user) . '.log';
				if (!file_exists($log_file)) {
					$log_data = array(
						'user_login' => true,
						'id_user' => $user->id_user,
						'id_level' => $user->id_level,
						'level' => $user->unikode,
						'nama_user' => $user->nama,
						'tanggal_login' => time()
					);
					$this->session->set_userdata($log_data);
					//set_cookie('log_file', $log_file, 3600*24*30);
					//write_file($log_file, 'TRUE');
					redirect('beranda');
				} else {
					$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Akun ini sedang dalam keadaan login di suatu tempat.';
					ce_set_msg('danger', $danger);
					redirect('user/login');
				}
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Username atau Kode OTP yang Anda masukan salah.';
				ce_set_msg('danger', $danger);
				redirect('user/login_admin');
			}
		}

		$this->load->view('login_admin');
	}
}
