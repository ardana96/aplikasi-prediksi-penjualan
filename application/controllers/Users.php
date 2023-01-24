<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
		$data['judul'] = "Users";
		$data['judul_top'] = "Users | Key Performence Indicator";
		$data['user_view'] = $this->Users_model->user_view();

		$data['pageM'] = '';
		$data['page'] = '';

		$data['content'] = 'v_user/index';
		$this->load->view('template', $data);
	}

	function user_add()
	{


		$params = array(

			'Nama' => $this->input->post('Nama'),
			'Username' => $this->input->post('Username'),
			'Password' => MD5($this->input->post('Password')),
			'CreatedBy' => $this->sesnama,
			'CreatedUtc' => date('Y-m-d H:i:s')
		);

		$this->Users_model->user_add($params);
		redirect('users');
	}


	function user_edit($UsersId)
	{
		$data['ses_nama'] = $this->sesnama;
		$data['ses_level'] = $this->seslevel;
		$data['judul'] = "Users";
		$data['judul_top'] = "Users | Key Performence Indicator";
		$data['pageM'] = 'master';
		$data['page'] = 'user';


		$data['user'] = $this->Users_model->user_getid($UsersId);
		$data['content'] = 'v_user/edit';

		$this->load->view('template', $data);
	}

	function user_update($Id)
	{
		$params = array(


			'Nama' => $this->input->post('Nama'),
			'Username' => $this->input->post('Username'),
			'LastModifiedBy' => $this->sesnama,
			'LastModifiedUtc' => date('Y-m-d H:i:s')
		);

		$this->Users_model->user_update($Id, $params);
		redirect('users');
	}

	function user_delete($Id)
	{
		$params = array(

			'DeletedBy' => $this->sesnama,
			'DeletedUtc' => date('Y-m-d H:i:s')
		);

		$this->Users_model->user_delete($Id, $params);
		redirect('users');
	}
}
