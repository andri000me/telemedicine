<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model 
{
    function check_patient($username,$password)
    {
        return $this->db->get_where('reservation',['cm' => $username,'checkin_code' => $password])->row_array();
    }
    function check_user($username)
    {
        return $this->db->get_where('users',['username' => $username])->row_array();
    }
}
