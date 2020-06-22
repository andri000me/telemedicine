<?php defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
	}
	public function index()
	{
		if ($this->session->userdata('cm')) {
			redirect('welcome');
		}


		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login - Telemedicine';
			$this->load->view('common/login', $data);
		} else {
			$this->_login();
		}
	}
	private function _login()
	{
		$username 	= htmlspecialchars($this->input->post('username', true));
		$password 	= htmlspecialchars($this->input->post('password', true));
		$patient 	= $this->m_auth->check_patient($username, $password);
		if ($patient) {
			if ($password == $patient['checkin_code']) {
				$data = [
					'cm' 			=> $patient['cm'],
					'username' 		=> ucwords(strtolower($patient['name'])),
					'checkin_code' 	=> $patient['checkin_code']
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('notif', ' <div class="alert alert-primary alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Hallo,  ' . ucwords(strtolower($patient['name'])) . ' Selamat Datang Di Layanan Telemedicine RSUP Dr. Kariadi</strong></div>');
				redirect('welcome');
			} else {
				$this->session->set_flashdata('notif', '<div class="alert alert-danger col-sm-5 mx-auto" role="alert" align="center">Maaf, Kode Checkin atau Rekam Medis tidak ditemukan ! </div>');
				redirect('auth');
			}
		} else {
			$user 	= $this->m_auth->check_user($username);
			if ($user) {
				if (md5($password) == $user['password']) {
					$data = [
						'username' 	=> $user['username'],
						'role' 		=> $user['role_id'],
						'code' 		=> $user['code']
					];
					$this->session->set_userdata($data);
					$this->session->set_flashdata('notif', ' <div class="alert alert-primary alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Hello, ' . $user['username'] . ' Welcome to Kariadi Telemedicine</strong></div>');
					if ($user['role_id'] == -18) {
						redirect('set_reservation');
					} else if ($user['role_id'] == -17) {
						redirect('reserv_ns');
					} else if ($user['role_id'] == 2) {
						redirect('reserv_dr');
					}
				} else {
					$this->session->set_flashdata('notif', '<div class="alert alert-danger col-sm-5 mx-auto" role="alert" align="center">Maaf, Username atau password salah ! </div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('notif', '<div class="alert alert-danger col-sm-5 mx-auto" role="alert" align="center"> Maaf, Kode Checkin atau Rekam Medis tidak ditemukan ! </div>');
				redirect('auth');
			}
		}
	}

	public function out()
	{
		$this->session->unset_userdata('cm');
		$this->session->unset_userdata('checkin_code');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('notif', '<div class="alert alert-success col-sm-8 mx-auto" role="alert" align="center"> Terimakasih Telah Mengunakan Layanan Telemedicine.. </div>');
		redirect('auth');
	}
	public function blocked()
	{
		$data['title'] = 'Forbidden Page - Telemedicine';
		$data['_view'] = 'common/forbidden';
		$this->load->view('layouts/main', $data);
	}
	public function notfound()
	{
		$data['title'] = 'Not Found Page - Telemedicine';

		$this->load->view('common/notfound', $data);
	}
}
