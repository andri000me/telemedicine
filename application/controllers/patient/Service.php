<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends CI_Controller {
	function __construct()
    { 
		parent::__construct();
		$this->load->model('m_reservation');
		$this->load->model('m_service');
		security();
	} 
		public function consult()
	{
		$this->form_validation->set_rules( 'sistol', 'Sistol', 'required' );
		$this->form_validation->set_rules( 'diastol', 'Diastol', 'required' );
		$this->form_validation->set_rules( 'temp', 'Suhu', 'required' );
		$this->form_validation->set_rules( 'hr', 'Denyut Nadi', 'required' );
		$this->form_validation->set_rules( 'rr', 'Laju Pernafasan', 'required' );
		$this->form_validation->set_rules( 'height', 'Tinggi Badan', 'required' );
		$this->form_validation->set_rules( 'weight', 'Berat Badan', 'required' );
		$this->form_validation->set_rules( 'description', 'Keluhan', 'required' );
		$this->form_validation->set_rules( 'checkin_code', 'Keluhan', 'required|is_unique[assesment.checkin_code]',
			[
				'is_unique'     => 'Data Assesment Sudah Ada, Silahkan melihat data di hasil kontrol.'
			]
			);
		if ($this->form_validation->run())
		{
			$insert_assesment = $this->m_service->add_assesment(1);
			if($insert_assesment)
			{
				$maxAssesment = $this->m_service->get_maxAssesment();
				$assesment_id = $maxAssesment['assesment_id'];
				$image = $_FILES['other_image'];
				if ($image='')
				{
					$this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Berhasil Dikirim Tanpa Lampiran</strong></div>');
					redirect('success_confirm');
				}
				else
				{
					$config['upload_path'] 		= './attachment';
					$config['allowed_types'] 	= 'jpg|png|gif|jpeg|pdf';
					$config['remove_spaces'] 	= TRUE;
					$config['encrypt_name'] 	= TRUE;
					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('other_image'))
					{
						$this->m_service->delete_assesment($assesment_id);
						$this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Lampiran gagal di upload</strong>, Silahkan ulangi mengisi formulir.</div>');
						redirect('consult');
						die();
					}
					else
					{
						$other_image = $this->upload->data('file_name');	
						$data = [
							'assesment_id' 	=> $assesment_id,
							'other'			=> $other_image
						];
						$insert_attachment = $this->m_service->insert_attachment($data);
						if($insert_attachment)
						{
							$this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Berhasil Dikirim Dengan Lampiran</strong></div>');
							redirect('success_confirm');
						}
					}
				}
			}else{
				$this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Gagal Dikirim</strong></div>');
				redirect('consult');
			}
		}else{
			$data['reservation']	= $this->m_reservation->get_reservation();
			$data['title'] 			= 'Formulir Konsultasi - Telemedicine';
			$data['_view'] 			= 'patient/consult';
			$this->load->view('layouts/main',$data);
		}
	}
	
	
	public function take_medicine()
	{
		$this->form_validation->set_rules( 'sistol', 'Sistol', 'required' );
		$this->form_validation->set_rules( 'diastol', 'Diastol', 'required' );
		$this->form_validation->set_rules( 'temp', 'Suhu', 'required' );
		$this->form_validation->set_rules( 'hr', 'Denyut Nadi', 'required' );
		$this->form_validation->set_rules( 'rr', 'Laju Pernafasan', 'required' );
		$this->form_validation->set_rules( 'height', 'Tinggi Badan', 'required' );
		$this->form_validation->set_rules( 'weight', 'Berat Badan', 'required' );
		$this->form_validation->set_rules( 'description', 'Keluhan', 'required' );
		$this->form_validation->set_rules( 'last_medicine', 'Pemberian Obat Terakhir', 'required' );	
		$this->form_validation->set_rules( 'checkin_code', 'Keluhan', 'required|is_unique[assesment.checkin_code]',
		[
			'is_unique'     => 'Data Assesment Sudah Ada, Silahkan melihat data di hasil kontrol.'
		]
		);
		if ($this->form_validation->run())
		{
			$insert_assesment = $this->m_service->add_assesment(2);
			if($insert_assesment)
			{
				$maxAssesment = $this->m_service->get_maxAssesment();
				$assesment_id = $maxAssesment['assesment_id'];
				
				$config['upload_path'] 		= './attachment';
				$config['allowed_types'] 	= 'jpg|png|gif|jpeg|pdf';
				$config['remove_spaces'] 	= TRUE;
				$config['encrypt_name'] 	= TRUE;
				$this->load->library('upload',$config);

				$upload 	= $this->upload->do_upload('laborat_image');
				$laboratory = $this->upload->data('file_name');	

				$upload 		= $this->upload->do_upload('schedule_image');
				$schedule_image = $this->upload->data('file_name');	

				$upload 		= $this->upload->do_upload('protocol_image');
				$protocol_image = $this->upload->data('file_name');	

				if(!$upload)
				{
					$this->m_service->delete_assesment($assesment_id);
					$this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Lampiran gagal di upload</strong>, Silahkan ulangi mengisi formulir.</div>');
					redirect('take_medicine');
					die();
				}
				else
				{
					$data = [
						'assesment_id' 	=> $assesment_id,
						'last_medicine' => $this->input->post('last_medicine'),
						'laboratory'	=> $laboratory,
						'schedule'		=> $schedule_image,
						'protocol'		=> $protocol_image
					];
					$insert_attachment = $this->m_service->insert_attachment($data);
					if($insert_attachment)
					{
						$this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Berhasil Dikirim Dengan Lampiran</strong></div>');
						redirect('success_confirm');
					}
				}
			}else{
				$this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Gagal Dikirim</strong></div>');
				redirect('consult');
			}
		}else{
			$data['reservation']	= $this->m_reservation->get_reservation();
			$data['title'] 			= 'Formulir Pengambilan Obat - Telemedicine';
			$data['_view'] 			= 'patient/take_medicine';
			$this->load->view('layouts/main',$data);
		}

    }
		public function chemo_scedule()
	{
		$this->form_validation->set_rules( 'sistol', 'Sistol', 'required' );
		$this->form_validation->set_rules( 'diastol', 'Diastol', 'required' );
		$this->form_validation->set_rules( 'temp', 'Suhu', 'required' );
		$this->form_validation->set_rules( 'hr', 'Denyut Nadi', 'required' );
		$this->form_validation->set_rules( 'rr', 'Laju Pernafasan', 'required' );
		$this->form_validation->set_rules( 'height', 'Tinggi Badan', 'required' );
		$this->form_validation->set_rules( 'weight', 'Berat Badan', 'required' );
		$this->form_validation->set_rules( 'description', 'Keluhan', 'required' );
		$this->form_validation->set_rules( 'last_medicine', 'Pemberian Obat Terakhir', 'required' );
		$this->form_validation->set_rules( 'checkin_code', 'Keluhan', 'required|is_unique[assesment.checkin_code]',
		[
			'is_unique'     => 'Data Assesment Sudah Ada, Silahkan melihat data di hasil kontrol.'
		]
		);
		if ($this->form_validation->run())
		{
			$insert_assesment = $this->m_service->add_assesment(3);
			if($insert_assesment)
			{
				$maxAssesment = $this->m_service->get_maxAssesment();
				$assesment_id = $maxAssesment['assesment_id'];
				
				$config['upload_path'] 		= './attachment';
				$config['allowed_types'] 	= 'jpg|png|gif|jpeg|pdf';
				$config['remove_spaces'] 	= TRUE;
				$config['encrypt_name'] 	= TRUE;
				$this->load->library('upload',$config);
				$upload_laborat 	= $this->upload->do_upload('laborat_image');
				$laboratory 		= $this->upload->data('file_name');	

				$upload 			= $this->upload->do_upload('schedule_image');
				$schedule_image 	= $this->upload->data('file_name');	

				$upload 			= $this->upload->do_upload('protocol_image');
				$protocol_image 	= $this->upload->data('file_name');	

				if(!$upload_laborat)
				{
					$this->m_service->delete_assesment($assesment_id);
					$this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Lampiran gagal di upload</strong>, Silahkan ulangi mengisi formulir.</div>');
					redirect('chemo_scedule');
					die();
				}
				else
				{ 
					$data = [
						'assesment_id' 	=> $assesment_id,
						'last_medicine' => $this->input->post('last_medicine'),
						'laboratory'	=> $laboratory,
						'schedule'		=> $schedule_image,
						'protocol'		=> $protocol_image
					];
					$insert_attachment = $this->m_service->insert_attachment($data);
					if($insert_attachment)
					{
						$this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Berhasil Dikirim Dengan Lampiran</strong></div>');
						redirect('success_confirm');
					}
				}
			}else{
				$this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Gagal Dikirim</strong></div>');
				redirect('consult');
			}
		}else{
			$data['reservation']	= $this->m_reservation->get_reservation();
			$data['title'] 			= 'Formulir Penjadwalan Kemotherapi - Telemedicine';
        	$data['_view'] 			= 'patient/chemo_scedule';
			$this->load->view('layouts/main',$data);
		}
    }
		public function success_confirm()
	{
		$data['reservation']	= $this->m_reservation->get_reservation();
		$data['title'] 		= 'Konfirmasi Detail - Telemedicine';
        $data['_view'] 		= 'patient/success_confirm';
		$this->load->view('layouts/main',$data);
    }
		public function results()
	{
		$patient_id = $this->session->userdata('cm');
		$data['reservation']= $this->m_reservation->get_reservation();
		$data['results']	= $this->m_service->get_assesmentByCust($patient_id);
		$data['title'] 		= 'Hasil Kontrol - Telemedicine';
        $data['_view'] 		= 'patient/results';
		$this->load->view('layouts/main',$data);
    }
		public function control_result()
	{
		$checkin_code	 	= $this->uri->segment(2);
		$patient_id			= $this->session->userdata('cm');
		$data['reservation']= $this->m_reservation->get_reservation();
		$data['result']		= $this->m_service->get_assesment_chemo($checkin_code,$patient_id);
		$data['title'] 		= 'Hasil Kontrol - Telemedicine';
        $data['_view'] 		= 'patient/control_result';
		$this->load->view('layouts/main',$data);
    } 
}