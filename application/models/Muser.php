<?php
//model of user
class Muser extends CI_Model {

    var $type;
    var $id;
    var $major_id;
    var $faculty_id;
    var $sessionName = 'xxxloginsadev';    

	function __construct() {
        parent::__construct();
		$this->load->database();     
		$this->load->library('session');
    }


    function isLogin() {
    	if($this->session->userdata($this->sessionName)) return true;
        return false;
    }

    function saveSession() {
    	$sess_array = array(
			'type' => $this->type,
			'id' => $this->id,
			'major_id' => $this->major_id,
			'faculty_id' => $this->faculty_id
       	);
       	$this->session->set_userdata($this->sessionName, $sess_array);
       	return true;
    }

    function loadSession() {
    	if($this->session->userdata($this->sessionName)) return $this->session->userdata($this->sessionName);

    	return false;
    }

    function loadData() {
        if($this->isLogin())
            return $this->session->userdata($this->sessionName);

        return false;
    }

    function isTeacher() {
    	if($data = $this->loadSession()) {
    		if($data['type']=='teacher') return true;
            return false;
    	}
    	return false;
    }    

    function isStudent() {
        if($data = $this->loadSession()) {
            if($data['type']=='student') return true;
            return false;
        }
        return false;
    }

    function unsetData() {
        return $this->session->unset_userdata($this->sessionName);

    } 
	

}