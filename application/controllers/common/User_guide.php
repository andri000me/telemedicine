<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_guide extends CI_Controller {
	function __construct()
    { 
		parent::__construct();
		$this->load->model('m_reservation');
	} 
		public function index()
	{
		$data['patient']	= $this->m_reservation->get_reservation();
		$data['title'] 		= 'Panduan Pengguna - Telemedicine';
        $data['_view'] 		= 'common/user_guide';
		$this->load->view('layouts/main',$data);
    }
}