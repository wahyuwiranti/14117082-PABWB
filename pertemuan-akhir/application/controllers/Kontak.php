<?php
class Kontak extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_kontak');
	}
	function index(){
		$this->load->view('v_kontak');
	}

	function data_kontak(){
		$data=$this->M_kontak->kontak_list();
		echo json_encode($data);
	}

	function get_kontak(){
		$kobar=$this->input->get('id');
		$data=$this->M_kontak->get_kontak_by_no_telp($no_telp);
		echo json_encode($data);
	}

	function simpan_kontak(){
		$nama=$this->input->post('nama');
		$no_telp=$this->input->post('no_telp');
		$alamat=$this->input->post('alamat');
		$foto=$this->input->post('foto');
		$data=$this->M_kontak->simpan_kontak($nama,$no_telp,$alamat,$foto);
		echo json_encode($data);
	}

	function update_kontak(){
		$nama=$this->input->post('nama');
		$no_telp=$this->input->post('no_telp');
		$alamat=$this->input->post('alamat');
		$foto=$this->input->post('foto');
		$data=$this->M_kontak->update_kontak($nama,$no_telp,$alamat,$foto);
		echo json_encode($data);
	}

	function hapus_kontak(){
		$no_telp=$this->input->post('no_telp');
		$data=$this->M_kontak->hapus_kontak($no_telp);
		echo json_encode($data);
	}
}