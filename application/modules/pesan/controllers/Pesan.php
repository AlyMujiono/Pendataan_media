<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_login')){
			redirect('user/login');
			exit;
		}
		ce_active_menu('admin.pesan.view');

		$this->load->library('upload');
	}

	public function index()
	{
		ce_hak_akses('admin.pesan.view');

		$data['halaman'] = 'pesan';
		$data['javascript'] = array(
			'js/js_datatable' => array('ajax_url' => base_url('pesan/ajax_data'))
		);
		$data['header'] = 'Pesan <small>Index Data</small>';

		$this->load->view('template', $data);
	}

	public function detail($id)
	{
		ce_hak_akses('admin.pesan.update');

		$pesan = $this->pesan_m->pesan_by_id($id);
		if($this->input->method(TRUE)=='POST')
		{
			$post_data['isi_balasan'] = $this->input->post('isi_balasan');

			if($this->pesan_m->pesan_update_data($post_data, $id))
			{
				$success = '<h4><i class="icon fa fa-check"></i>Berhasil!</h4> Data yang Anda masukan telah tersimpan.';
				ce_set_msg('success', $success);
			} else {
				$danger = '<h4><i class="icon fa fa-ban"></i>Ups!</h4> Data yang Anda masukan gagal tersimpan.';
				ce_set_msg('danger', $danger);
			}

			redirect('pesan/detail/'.$id);
		}

		$data['pesan'] = $pesan;
		$data['halaman'] = 'pesan_detail';
		$data['header'] = 'Pesan <small>Edit Data</small>';

		$this->load->view('template', $data);
	}

	public function get_balasan($id)
	{
		ce_hak_akses('admin.pesan.view');

		$pesan = $this->pesan_m->pesan_by_id($id);
		if($pesan && $pesan->isi_balasan!='')
			echo $pesan->isi_balasan;
		else
			echo 'Belum ada balasan.';
	}

	public function ajax_data()
	{
		ce_hak_akses('admin.pesan.view');

		$dataConfig = array(
			'table' => 'pesan',
			'column_order' => array(null,'nama','no_telp','subjek',null),
			'column_search' => array('nama','no_telp','subjek'),
			'order' => array('id' => 'asc')
		);
		$this->ajax_data_m->data_config($dataConfig);
		$list = $this->ajax_data_m->get_datatables();

		$data = array();
        $no = $this->input->post('start');
        foreach ($list as $field) {
            $no++;
						$row = array();
						$row[] = $no;
						$row[] = $field->nama;
						$row[] = $field->no_telp;
						$row[] = $field->subjek;
						$row[] = '<a href="javascript:;" onclick="showBalasan('.$field->id.')" class="btn btn-sm btn-info">View</a>';
						$row[] = anchor('pesan/detail/'.$field->id, '<i class="fa fa-eye"></i> Detail', 'class="btn btn-sm btn-success"');

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
