<?php
//model of student
class Mstudent extends CI_Model {
	function __construct() {
        parent::__construct();
		$this->load->database();        
    }

    var $student_id;
    var $student_firstname;
    var $student_lastname;
    var $student_username;
    var $student_password;
    var $major_id;
    var $faculty_id;

    function login() {
		$this->db->from('students');    	
    	$this->db->where('student_username', $this->student_username);
    	$this->db->where('student_password', $this->student_password);
		$query = $this->db->get();
		$row = $query->result();
		$row = $row[0];
		if(!empty($row)) {
			$this->student_firstname = $row->student_firstname;
			$this->student_lastname = $row->student_lastname;
			$this->major_id = $row->major_id;
			$this->student_id = $row->student_id;
			$this->faculty_id = $row->faculty_id;


			return true;
		}
		return false;
    }

    function loadData() {
    	$this->db->from('students');    	
    	$this->db->where('student_id', $this->student_id);
		$query = $this->db->get();
		$row = $query->result();
		return $row[0];
    }






}