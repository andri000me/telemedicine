<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_reservation');
    } 
	public function nurse()
	{
       // if($this->session->userdata('role_id') != -17)redirect('auth');
		$data['patients']   = $this->m_reservation->get_reservation_today();
        $data['title']      = 'Data Pasien Online - Telemedicine';
        $data['_view']      = 'paramedic/reserv_ns';
		$this->load->view('layouts/main',$data);
    }

	public function doctor()
	{
       // if($this->session->userdata('role_id') != 2)redirect('auth');
		$data['patients']   = $this->m_reservation->get_reservation_todayByDoctor();
        $data['title']      = 'Data Pasien Online - Telemedicine';
        $data['_view']      = 'paramedic/reserv_dr';
		$this->load->view('layouts/main',$data);
    }
}
