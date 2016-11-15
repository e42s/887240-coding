<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('Mteacher','',TRUE);
    $this->load->model('Mstudent','',TRUE);
    $this->load->model('Muser','',TRUE);

    $this->load->library('session');
    //if(!$this->Muser->isStudent()) redirect('login', 'refresh');
  }

  function index() {
    //load student id
    /*$session = $this->Muser->loadData();
    $this->Mstudent->student_id = $session['id'];*/
    $this->Mstudent->student_id = '57660094';
    $data['student'] = $this->Mstudent->loadData();

    $this->load->view('student/header', $data);
    $this->load->view('student/sidebar', $data);
    $this->load->view('student/index_student', $data);
    $this->load->view('student/footer', $data);

  }

  function index_student() {
    //load student id
    /*$session = $this->Muser->loadData();
    $this->Mstudent->student_id = $session['id'];*/
    $this->Mstudent->student_id = '57660094';
    $data['student'] = $this->Mstudent->loadData();

    $this->load->view('student/header', $data);
    $this->load->view('student/sidebar', $data);
    $this->load->view('student/index_student', $data);
    $this->load->view('student/footer', $data);

  }

   function time_check() {
    //load student id
    /*$session = $this->Muser->loadData();
    $this->Mstudent->student_id = $session['id'];*/
    $this->Mstudent->student_id = '57660094';
    $data['student'] = $this->Mstudent->loadData();

    $this->load->view('student/header', $data);
    $this->load->view('student/sidebar', $data);
    $this->load->view('student/time_check', $data);
    $this->load->view('student/footer', $data);

  }

  function time_check2() {
    //load student id
    /*$session = $this->Muser->loadData();
    $this->Mstudent->student_id = $session['id'];*/
    $this->Mstudent->student_id = '57660094';
    $data['student'] = $this->Mstudent->loadData();

    $this->load->view('student/header', $data);
    $this->load->view('student/sidebar', $data);
    $this->load->view('student/time_check2', $data);
    $this->load->view('student/footer', $data);

  }


  function homework_send() {
    //load student id
    /*$session = $this->Muser->loadData();
    $this->Mstudent->student_id = $session['id'];*/
    $this->Mstudent->student_id = '57660094';
    $data['student'] = $this->Mstudent->loadData();

    $this->load->view('student/header', $data);
    $this->load->view('student/sidebar', $data);
    $this->load->view('student/homework_send', $data);
    $this->load->view('student/footer', $data);

  }

   function homework_send2() {
    //load student id
    /*$session = $this->Muser->loadData();
    $this->Mstudent->student_id = $session['id'];*/
    $this->Mstudent->student_id = '57660094';
    $data['student'] = $this->Mstudent->loadData();

    $this->load->view('student/header', $data);
    $this->load->view('student/sidebar', $data);
    $this->load->view('student/homework_send2', $data);
    $this->load->view('student/footer', $data);

  }

   function status_homework() {
    //load student id
    /*$session = $this->Muser->loadData();
    $this->Mstudent->student_id = $session['id'];*/
    $this->Mstudent->student_id = '57660094';
    $data['student'] = $this->Mstudent->loadData();

    $this->load->view('student/header', $data);
    $this->load->view('student/sidebar', $data);
    $this->load->view('student/status_homework', $data);
    $this->load->view('student/footer', $data);

  }

   function tables_student() {
    //load student id
    $session = $this->Muser->loadData();
    $this->Mstudent->student_id = $session['id'];
    $data['student'] = $this->Mstudent->loadData();

    $this->load->view('student/header', $data);
    $this->load->view('student/sidebar', $data);
    $this->load->view('student/tables_student', $data);
    $this->load->view('student/footer', $data);

  }

   function otp() {
    //load student id
    $this->load->view('student/otp_check');

  }  



}