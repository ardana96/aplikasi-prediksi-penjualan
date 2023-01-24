<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
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
		$data['judul'] = "Penjualan";
		$data['judul_top'] = "Penjualan | Prediksi Penjualan Bateeq";
		$data['pageM'] = 'penjualan';
		$data['page'] = 'penjualan';
		$data['penjualan_view'] = $this->Penjualan_model->penjualan_view();
		$data['barang_view'] = $this->Barang_model->barang_view();
		$data['bulan_view'] = $this->Bulan_model->bulan_view();
		$data['content'] = 'v_Penjualan/index';
		$this->load->view('template', $data);
	}

	function penjualan_add()
	{
		$params = array(
			'BarangId' => $this->input->post('BarangId'),
			'Bulan' => $this->input->post('Bulan'),
			'Tahun' => $this->input->post('Tahun'),
			'Jumlah' => $this->input->post('Jumlah'),
			'CreatedBy' => $this->sesnama,
			'CreatedUtc' => date('Y-m-d H:i:s')
		);

		$this->Penjualan_model->penjualan_add($params);
		redirect('Penjualan');
	}


	function penjualan_edit($penjualanId)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_level'] = $this->seslevel;
		$data['judul'] = "Penjualan";
		$data['judul_top'] = "Penjualan | Key Performence Indicator";
		$data['pageM'] = 'master';
		$data['page'] = 'Penjualan';
		$data['barang_view'] = $this->Barang_model->barang_view();
		$data['bulan_view'] = $this->Bulan_model->bulan_view();

		$data['penjualan'] = $this->Penjualan_model->penjualan_getid($penjualanId);
		$data['content'] = 'v_Penjualan/edit';

		$this->load->view('template', $data);
	}

	function penjualan_update($Id)
	{
		$params = array(

			'BarangId' => $this->input->post('BarangId'),
			'Bulan' => $this->input->post('Bulan'),
			'Tahun' => $this->input->post('Tahun'),
			'Jumlah' => $this->input->post('Jumlah'),
			'LastModifiedBy' => $this->sesnama,
			'LastModifiedUtc' => date('Y-m-d H:i:s')
		);

		$this->Penjualan_model->penjualan_update($Id, $params);
		redirect('Penjualan');
	}

	function penjualan_delete($Id)
	{
		$params = array(

			'DeletedBy' => $this->sesnama,
			'DeletedUtc' => date('Y-m-d H:i:s')
		);

		$this->Penjualan_model->penjualan_delete($Id, $params);
		redirect('Penjualan');
	}
}
