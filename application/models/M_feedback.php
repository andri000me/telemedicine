<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_feedback extends CI_Model 
{
    function add_feedback()
    {
        $params = [
            'patient_id'    => $this->session->userdata('cm'),
            'criticism'     => htmlspecialchars($this->input->post('critic',true)),
            'suggestions'   => htmlspecialchars($this->input->post('suggest',true))
        ];
        return $this->db->insert('feedback',$params);
    }
}
