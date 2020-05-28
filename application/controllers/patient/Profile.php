<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
	function __construct()
    { 
		parent::__construct();
		$this->load->model('m_reservation');
		$this->load->model('m_patient');
		security();
	} 
		public function index()
	{
		$data['patient']	= $this->m_reservation->get_reservation();
		$data['title'] 		= 'Profile Saya - Telemedicine';
        $data['_view'] 		= 'patient/profile';
		$this->load->view('layouts/main',$data);
	}
	
	public function update_image()
	{
		$image = $_FILES['profile_image']['name'];
		if ($image='')
		{
			$this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Gambar Belum dipilih !</strong></div>');
			redirect('profile');
		}
		else
		{
			$config['upload_path'] 		= './assets/image/profile';
			$config['allowed_types'] 	= 'jpg|png|jpeg';
			$config['remove_spaces'] 	= TRUE;
			$config['encrypt_name'] 	= TRUE;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('profile_image'))
			{
				$this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Gambar gagal di upload</strong>, Silahkan ulangi mengisi formulir.</div>');
				redirect('profile');
				die();
			}
			else
			{
				$profile_image 	= $this->upload->data('file_name');	
				$cm   			= $this->input->post('cm');
				$check_patient 	= $this->m_patient->get_patient($cm);
				if(!$check_patient)
				{
					$data = [
						'cm' 			=> $cm,
						'profile_image'	=> $profile_image
					];
					$insert_image = $this->m_patient->insert_image($data);
					if($insert_image)
					{
						$this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Gambar Berhasil Diubah </strong></div>');
						redirect('profile');
					}
				}
				else
				{
					unlink('./assets/image/profile/'.$check_patient['profile_image']);
					$data = [
						'profile_image'	=> $profile_image
					];
					$update_image = $this->m_patient->update_image($data,$cm);
					if($update_image)
					{
						$this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Gambar Berhasil Diubah </strong></div>');
						redirect('profile');
					}
				}
			}
		}
	}
}