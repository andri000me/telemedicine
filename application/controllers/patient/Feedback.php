<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Feedback extends CI_Controller {
	function __construct()
    { 
		parent::__construct();
		$this->load->model('m_reservation');
		$this->load->model('m_feedback');
		security();
	} 
		public function index()
	{
		$this->form_validation->set_rules('critic', 'Kritik', 'required' );
		$this->form_validation->set_rules('suggest', 'Saran', 'required' );
		if ($this->form_validation->run())
		{
			$insert_assesment = $this->m_feedback->add_feedback(1);
			if($insert_assesment)
			{
				$this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Terimakasih, Data Berhasil Dikirim. </strong></div>');
				redirect('feedback');
			}else
			{
				$this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Gagal Dikirim</strong></div>');
				redirect('feedback');
			}
		}else
		{
			$data['patient']	= $this->m_reservation->get_reservation();
			$data['title'] 		= 'Kritik dan Saran - Telemedicine';
			$data['_view'] 		= 'patient/feedback';
			$this->load->view('layouts/main',$data);
		}
    }
}