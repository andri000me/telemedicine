<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        security();
    } 
	public function index()
	{
	    $data['users']      = $this->m_user->get_users();
	    $data['user_role']  = $this->m_user->get_user_role();
        $data['title']      = 'Data User - Telemedicine';
        $data['_view']      = 'setting/user';
		$this->load->view('layouts/main',$data);
    }
    
    public function create()
    {
        $insert_user = $this->m_user->insert_user();
        if($insert_user)
        {
            $this->session->set_flashdata('notif',' <div class="alert alert-success alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Sukses, Data Berhasil Ditambahkan. </strong></div>');
            redirect('set_users');
        }else
        {
            $this->session->set_flashdata('notif',' <div class="alert alert-danger alert-dismissible" align="center"> <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Data Gagal Ditambahkan</strong></div>');
            redirect('set_users');
        }
    }

}
