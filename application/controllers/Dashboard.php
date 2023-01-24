<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()

	{
		parent::__construct();
		$this->sesnama = $this->session->userdata('usersnama');
		$this->sesstatus = $this->session->userdata('status');

		if ($this->sesstatus != 'login') {
			redirect('login');
		}
	}

	public function index()

	{
		$data['ses_nama'] = $this->sesnama;
		$data['judul'] = "Dashboard";
		$data['judul_top'] = "DASHBOARD | PREDIKSI";
		$data['pageM'] = 'dashboard';
		$data['page'] = "";


		$data['content'] = 'v_dashboard/index';
		$this->load->view('template', $data);
	}
}
