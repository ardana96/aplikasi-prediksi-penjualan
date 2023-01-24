<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{

		$this->load->view('v_login/index');
	}

	function auth()
	{
		$username = $this->input->post('username');
		$password = MD5($this->input->post('password'));

		$Cek = $this->Login_model->cek_login_users($username, $password);

		if ($Cek >= 1) {
			$users = $this->Login_model->get_data_users($username, $password);
			foreach ($users as $data) {
				$this->session->set_userdata('usersid', $data->Id);
				$this->session->set_userdata('usersnama', $data->Nama);
				$this->session->set_userdata('level', $data->Level);
				$this->session->set_userdata('status', 'login');




				redirect('dashboard');
			}
		} else {

			echo 'Login Gagal';

			redirect('login');
		}
	}
}
