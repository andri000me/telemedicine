<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_service extends CI_Model 
{
    function get_services()
    {
        return $this->db->get('service')->result_array();
    }
    function get_maxAssesment()
    {
        $this->db->select_max('assesment_id');
        return $this->db->get('assesment')->row_array(); 
    }
    function get_assesment_chemo($checkin_code,$patient_id)
    {
        $this->db->select('*, assesment.assesment_id AS assesment_id,assesment.description AS feel_description');
        $this->db->order_by('assesment.date_added','DESC');
        $this->db->join('patient','assesment.patient_id = patient.cm','left');
        $this->db->join('reservation','assesment.patient_id = reservation.cm','left');
        $this->db->join('service','assesment.service = service.service_id','left');
        $this->db->join('attachment','assesment.assesment_id = attachment.assesment_id','left');
        $this->db->join('chemo_schedule','assesment.assesment_id = chemo_schedule.assesment_id','left');
        $this->db->join('advice','chemo_schedule.advice = advice.advice_id','left');
        return  $this->db->get_where('assesment',['patient_id' => $patient_id, 'assesment.checkin_code' => $checkin_code])->row_array();
    }
    function get_assesmentByCust($patient_id)
    {
   
        $this->db->order_by('date_added','DESC');
        $this->db->join('service','assesment.service = service.service_id','left');
         return  $this->db->get_where('assesment',['patient_id' => $patient_id])->result_array();
    }
    function get_assesmentByCheckincode($checkin_code,$patient_id)
    {
        $this->db->order_by('assesment.date_added','DESC');
        $this->db->join('reservation','assesment.patient_id = reservation.cm','left');
        $this->db->join('service','assesment.service = service.service_id','left');
        $this->db->join('attachment','assesment.assesment_id = attachment.assesment_id','left');
        return  $this->db->get_where('assesment',['patient_id' => $patient_id, 'assesment.checkin_code' => $checkin_code])->row_array();
    }
    function add_assesment($type_service)
    {
         $params = [
             'patient_id'    => htmlspecialchars($this->input->post('patient_id',true)),
             'checkin_code'  => htmlspecialchars($this->input->post('checkin_code',true)),
             'sistol'        => htmlspecialchars($this->input->post('sistol',true)),
             'diastol'       => htmlspecialchars($this->input->post('diastol',true)),
             'temp'          => htmlspecialchars($this->input->post('temp',true)),
             'hr'            => htmlspecialchars($this->input->post('hr',true)),
             'rr'            => htmlspecialchars($this->input->post('rr',true)),
             'height'        => htmlspecialchars($this->input->post('height',true)),
             'weight'        => htmlspecialchars($this->input->post('weight',true)),
             'pain'          => htmlspecialchars($this->input->post('pain',true)),
             'description'   => htmlspecialchars($this->input->post('description',true)),
             'service'       => $type_service
        ];
       return $this->db->insert('assesment',$params);
    }

    function delete_assesment($id)
    {
        return $this->db->delete('assesment', ['assesment_id' => $id]); 
    }

    function insert_attachment($params)
    {
        return $this->db->insert('attachment',$params);
    }

    public function get_all_advice()
    {
        return $this->db->get('advice')->result_array();
    }
    public function visite()
    {
        $params = [
            'assesment_id'    => htmlspecialchars($this->input->post('assesment_id',true)),
            'advice'          => htmlspecialchars($this->input->post('advice',true)),
            'dr_education'    => htmlspecialchars($this->input->post('dr_education',true))
        ];
        return $this->db->insert('chemo_schedule',$params);
        
    }
    
    public function update_visite()
    {
        $assesment_id   = htmlspecialchars($this->input->post('assesment_id',true));
        $params = [
           'advice'          => htmlspecialchars($this->input->post('advice',true)),
           'dr_education'    => htmlspecialchars($this->input->post('dr_education',true))
        ];
        return $this->db->update('chemo_schedule',$params,['assesment_id' => $assesment_id]);
    }
    public function followup()
    {
        $assesment_id   = htmlspecialchars($this->input->post('assesment_id',true));
        $params = [
           'hospitalization_date'   => htmlspecialchars($this->input->post('hospitalization_date',true)),
           'chemo_date'             => htmlspecialchars($this->input->post('chemo_date',true)),
           'ward'                   => htmlspecialchars($this->input->post('ward',true)),
           'ns_education'           => htmlspecialchars($this->input->post('ns_education',true))
        ];
        return $this->db->update('chemo_schedule',$params,['assesment_id' => $assesment_id]);
    }
    public function update_followup()
    {
        $assesment_id   = htmlspecialchars($this->input->post('assesment_id',true));
        $params = [
            'hospitalization_date'   => htmlspecialchars($this->input->post('hospitalization_date',true)),
            'chemo_date'             => htmlspecialchars($this->input->post('chemo_date',true)),
            'ward'                   => htmlspecialchars($this->input->post('ward',true)),
            'ns_education'           => htmlspecialchars($this->input->post('ns_education',true))
        ];
        return $this->db->update('chemo_schedule',$params,['assesment_id' => $assesment_id]);
    }
}
