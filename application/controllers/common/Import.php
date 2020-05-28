<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

    public function index()
    {
        $data['title']      = 'Import Data';
        $data['_view']      = 'import';
		$this->load->view('layouts/main',$data);
    }

    public function upload()
    {
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/excel_reader2.php';

        $config['upload_path']      = realpath('excel');
        $config['allowed_types']    = 'xlsx|xls|csv';
        $config['max_size']         = '10000';
        $config['encrypt_name']     = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('import/');

        } else {

            
            $data_upload = $this->upload->data();   

            // mengambil isi file xls
            $data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
            // menghitung jumlah baris data yang ada
            $jumlah_baris = $data->rowcount($sheet_index=0);
            
            // jumlah default data yang berhasil di import
            $berhasil = 0;
            for ($i=2; $i<=$jumlah_baris; $i++)
            {
             // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
      
                $params = [
                    'checkin_code'      => $data->val($i, 1),
                    'cm'                => $data->val($i, 2),
                    'name'              => $data->val($i, 3),
                    'birthday'          => $data->val($i, 4),
                    'reservation_date'  => $data->val($i, 5),
                    'polyclinic'        => $data->val($i, 6),
                    'doctor'            => $data->val($i, 7),
                    'phone'             => $data->val($i, 8)
                ];
                $this->db->insert_batch('reservation', $params);
            }
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('import/');

        }
    }

}
