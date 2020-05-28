<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Online_checking extends CI_Controller {
	function __construct()
    { 
		parent::__construct();
	} 
		public function index()
	{
	
		$this->load->view('common/online_checking');
    }
}