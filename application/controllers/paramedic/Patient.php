<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_reservation');
        $this->load->model('m_service');
    } 
	public function index()
	{		
	
		$data['patients']   = $this->m_reservation->get_patient();
        $data['title']      = 'Data Riwayat Pasien  - Telemedicine';
        $data['_view']      = 'paramedic/patient';
		$this->load->view('layouts/main',$data);
	}
	public function detail_patient()
	{
        $data['patient_id']    = $this->uri->segment(2);
        $data['results']	= $this->m_service->get_assesmentByCust( $data['patient_id']);
        $data['title']      = 'Data Riwayat Pasien  - Telemedicine';
        $data['_view']      = 'paramedic/patient_detail';
		$this->load->view('layouts/main',$data);
    }
    public function control_result()
	{ 
		$checkin_code       = $this->uri->segment(3);
		$patient_id         = $this->uri->segment(2);
		$data['reservation']= $this->m_reservation->get_reservation();
		$data['result']		= $this->m_service->get_assesment_chemo($checkin_code,$patient_id);
		$data['title'] 		= 'Hasil Kontrol - Telemedicine';
        $data['_view'] 		= 'patient/control_result';
		$this->load->view('layouts/main',$data);
    }
}