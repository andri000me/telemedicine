<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_reservation extends CI_Model 
{
    function get_reservation()
    {
        $cm 		  		= $this->session->userdata('cm');
        $checkin_code 		= $this->session->userdata('checkin_code');
        $this->db->select('*, reservation.cm AS cm');
        $this->db->join('patient','reservation.cm = patient.cm','left');
        return $this->db->get_where('reservation',['reservation.cm' => $cm,'checkin_code' => $checkin_code])->row_array();
    }
    function get_all_reservation()
    {
        return $this->db->get('reservation')->result_array();
    }

    function get_reservation_today()
    {
        $today = date('Y-m-d');
        $this->db->select('*, reservation.checkin_code AS checkin_code');
        $this->db->join('assesment','reservation.checkin_code = assesment.checkin_code');
        return $this->db->get_where('reservation',['reservation_date' => $today ])->result_array();
    }
    function get_reservation_todayByDoctor()
    {
        $code  = $this->session->userdata('code'); 
        $today = date('Y-m-d');
        $this->db->join('assesment','reservation.checkin_code = assesment.checkin_code');
        return $this->db->get_where('reservation',['reservation_date' => $today,'doctor' => $code])->result_array();
    }

    function get_patient()
    {
        $this->db->group_by('cm');
       return $this->db->get('reservation')->result_array();
    }
}
