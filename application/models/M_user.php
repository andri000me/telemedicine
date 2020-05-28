<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model 
{
    function get_users()
    {
        $this->db->join('user_role','users.role_id = user_role.user_role_id','left');
        return $this->db->get('users')->result_array();
    }
    function get_user_role()
    {
        return $this->db->get('user_role')->result_array();
    }

    function insert_user()
    {
        $params = [
            'name'      => htmlspecialchars($this->input->post('name',true      )),
            'username'  => htmlspecialchars($this->input->post('username',true)) ,
            'password'  => md5($this->input->post('password',true)),
            'role_id'  => $this->input->post('role',true)
                ];
        
                return $this->db->insert('users',$params);
     }
}
