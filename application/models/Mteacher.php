<?php
//model of teacher
class Mteacher extends CI_Model {
	function __construct() {
        parent::__construct();
		$this->load->database();        
    }

    var $teacher_id;
    var $teacher_firstname;
    var $teacher_lastname;
    var $teacher_username;
    var $teacher_password;
    var $major_id;
    var $faculty_id;

    function login() {
		$this->db->from('teachers');    	
    	$this->db->where('teacher_username', $this->teacher_username);
    	$this->db->where('teacher_password', $this->teacher_password);
		$query = $this->db->get();
		$row = $query->result();
		$row = @$row[0];
		if(!empty($row)) {
			$this->teacher_firstname = $row->teacher_firstname;
			$this->teacher_lastname = $row->teacher_lastname;
			$this->major_id = $row->major_id;
			$this->teacher_id = $row->teacher_id;
			$this->faculty_id = $row->faculty_id;


			return true;
		}
		return false;
    }

    function loadData() {
    	$this->db->from('teachers');    	
    	$this->db->where('teacher_id', $this->teacher_id);
		$query = $this->db->get();
		$row = $query->result();
		return $row[0];
    }






}