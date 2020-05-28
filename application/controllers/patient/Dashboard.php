<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	function __construct()
    { 
		parent::__construct();
		$this->load->model('m_reservation');
		security();
	} 
	public function index()
	{
		if(!$this->session->userdata('cm'))redirect('auth');
		$data['reservation'] = $this->m_reservation->get_reservation();
        $data['title'] = 'Dashboard - Telemedicine';
        $data['_view'] = 'patient/dashboard';
		$this->load->view('layouts/main',$data);
	}
 
}
