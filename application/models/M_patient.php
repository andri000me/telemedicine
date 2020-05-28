<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_patient extends CI_Model 
{
    function get_patient($cm)
    {
         return $this->db->get_where('patient',['cm' => $cm])->row_array();
    }
   
    function insert_image($data)
    {
        return $this->db->insert('patient',$data);
    }
    function update_image($data,$cm)
    {
        return $this->db->update('patient',$data,['cm' => $cm]);
    }
}
