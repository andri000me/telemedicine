<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Checkup extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_service');
    } 
	public function nurse()
	{
    if(!$this->session->userdata('username'))redirect('auth');
    if($this->session->userdata('role_id') != -17)redirect('auth');
        $data['cm']                 = $this->uri->segment(2);
        $data['checkin_code']       = $this->uri->segment(3);
        $data['result']		  = $this->m_service->get_assesment_chemo($data['checkin_code'],$data['cm']);
        $data['title']      = 'Data Pasien Online - Telemedicine';
        $data['_view']      = 'paramedic/checkup_ns';
		$this->load->view('layouts/main',$data);
    }
	public function doctor()
	{
    if(!$this->session->userdata('username'))redirect('auth');
    if($this->session->userdata('role_id') != 2)redirect('auth');
        $data['cm']                 = $this->uri->segment(2);
        $data['checkin_code']       = $this->uri->segment(3);
        $data['advice']             = $this->m_service->get_all_advice();
        $data['result']		          = $this->m_service->get_assesment_chemo($data['checkin_code'],$data['cm']);
        $data['title']      = 'Data Pasien Online - Telemedicine';
        $data['_view']      = 'paramedic/checkup_dr';
		$this->load->view('layouts/main',$data);
    }

    public function visite()
    {
      $cm = $this->input->post('cm');
      $checkin_code = $this->input->post('checkin_code');
      $visite = $this->m_service->visite();
      if($visite)
      {
        $this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Berhasil Dikirim</strong></div>');
        redirect('checkup_dr/'.$cm.'/'.$checkin_code);
      }else{
        $this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Gagal Dikirim</strong></div>');
        redirect('checkup_dr/'.$cm.'/'.$checkin_code);
      }
    }
    public function update_visite()
    {
      $cm             = $this->input->post('cm');
      $checkin_code   = $this->input->post('checkin_code');
      $update_visite  = $this->m_service->update_visite();
      if($update_visite)
      {
        $this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Berhasil Di ubah</strong></div>');
        redirect('checkup_dr/'.$cm.'/'.$checkin_code);
      }else{
        $this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Gagal Di ubah</strong></div>');
        redirect('checkup_dr/'.$cm.'/'.$checkin_code);
      }
    }
    public function followup()
    {
      $cm             = $this->input->post('cm');
      $checkin_code   = $this->input->post('checkin_code');
      $followup       = $this->m_service->followup();
      if($followup)
      {
        $this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Berhasil Dikirim</strong></div>');
        redirect('checkup_ns/'.$cm.'/'.$checkin_code);
      }else{
        $this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Gagal Dikirim</strong></div>');
        redirect('checkup_ns/'.$cm.'/'.$checkin_code);
      }
    }
    public function update_followup()
    {
      $cm                 = $this->input->post('cm');
      $checkin_code       = $this->input->post('checkin_code');
      $update_followup    = $this->m_service->update_followup();
      if($update_followup)
      {
        $this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Berhasil Di ubah</strong></div>');
        redirect('checkup_ns/'.$cm.'/'.$checkin_code);
      }else{
        $this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Gagal Di ubah</strong></div>');
        redirect('checkup_ns/'.$cm.'/'.$checkin_code);
      }
    }
}
