<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	function __construct()

	{
		parent::__construct();
		$this->sesnama = $this->session->userdata('usersnama');
		$this->seslevel = $this->session->userdata('level');
		$this->sesstatus = $this->session->userdata('status');

		if ($this->sesstatus != 'login') {
			redirect('login');
		}
	}

	public function index()

	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_level'] = $this->seslevel;
		$data['judul'] = "Barang";
		$data['judul_top'] = "Barang | Prediksi Penjualan Bateeq";
		$data['pageM'] = 'master';
		$data['page'] = 'Barang';
		$data['barang_view'] = $this->Barang_model->barang_view();
		$data['content'] = 'v_Barang/index';
		$this->load->view('template', $data);
	}

	function barang_add()
	{


		$params = array(
			'NamaBarang' => $this->input->post('NamaBarang'),
			'Harga' => $this->input->post('Harga'),
			'CreatedBy' => $this->sesnama,
			'CreatedUtc' => date('Y-m-d H:i:s')
		);

		$this->Barang_model->barang_add($params);
		redirect('Barang');
	}


	function barang_edit($barangId)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_level'] = $this->seslevel;
		$data['judul'] = "Barang";
		$data['judul_top'] = "Barang | Key Performence Indicator";
		$data['pageM'] = 'master';
		$data['page'] = 'Barang';


		$data['barang'] = $this->Barang_model->barang_getid($barangId);
		$data['content'] = 'v_Barang/edit';

		$this->load->view('template', $data);
	}

	function barang_update($Id)
	{
		$params = array(

			'NamaBarang' => $this->input->post('NamaBarang'),
			'Harga' => $this->input->post('Harga'),
			'LastModifiedBy' => $this->sesnama,
			'LastModifiedUtc' => date('Y-m-d H:i:s')
		);

		$this->Barang_model->Barang_update($Id, $params);
		redirect('Barang');
	}

	function barang_delete($Id)
	{
		$params = array(

			'DeletedBy' => $this->sesnama,
			'DeletedUtc' => date('Y-m-d H:i:s')
		);

		$this->Barang_model->Barang_delete($Id, $params);
		redirect('Barang');
	}
}
