<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
  	function __construct() {
   		parent::__construct();
   		$this->load->model('Mteacher','',TRUE);
   		$this->load->model('Mstudent','',TRUE);
    	$this->load->model('Muser','',TRUE);

    	$this->load->library('session');
  	}

	function index() {
		$this->Muser->unsetData();
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}