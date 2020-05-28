<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_reservation');
    } 
	public function index()
	{
		$data['patients'] = $this->m_reservation->get_all_reservation();
        $data['title'] = 'Data Pasien Online - Telemedicine';
        $data['_view'] = 'setting/reservation';
		$this->load->view('layouts/main',$data);
	}

}
