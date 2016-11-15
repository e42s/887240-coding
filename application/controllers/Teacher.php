<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller 
{
  function __construct() 
  {
    parent::__construct();
    $this->load->model('Mteacher','',TRUE);
    $this->load->model('Mstudent','',TRUE);
    $this->load->model('Muser','',TRUE);
    $this->Mteacher->teacher_id = 1;

    //$this->load->library('session');
    //if(!$this->Muser->isTeacher()) redirect('login', 'refresh');
  }

  function index() 
  {
  	//load teacher id
  	/*$session = $this->Muser->loadData();
  	$this->Mteacher->teacher_id = $session['id'];*/
    $this->Mteacher->teacher_id = 1;
  	$data['teacher'] = $this->Mteacher->loadData();

  	$this->load->view('teacher/header', $data);
  	$this->load->view('teacher/sidebar', $data);
  	$this->load->view('teacher/index_teacher', $data);
  	$this->load->view('teacher/footer', $data);

  }

  function index_teacher() 
  {
    //load teacher id
    /*$session = $this->Muser->loadData();
    $this->Mteacher->teacher_id = $session['id'];*/
    $this->Mteacher->teacher_id = 1;
    $data['teacher'] = $this->Mteacher->loadData();

    $this->load->view('teacher/header', $data);
    $this->load->view('teacher/sidebar', $data);
    $this->load->view('teacher/index_teacher', $data);
    $this->load->view('teacher/footer', $data);

  }

  function homework_manager() 
  {
    //load teacher id
    /*$session = $this->Muser->loadData();
    $this->Mteacher->teacher_id = $session['id'];*/
    $this->Mteacher->teacher_id = 1;
    $data['teacher'] = $this->Mteacher->loadData();

    $this->load->view('teacher/header', $data);
    $this->load->view('teacher/sidebar', $data);
    $this->load->view('teacher/homework_manager', $data);
    $this->load->view('teacher/footer', $data);

  }


  function homework_manager_select() 
  {
    //load teacher id
    /*$session = $this->Muser->loadData();
    $this->Mteacher->teacher_id = $session['id'];*/
    $this->Mteacher->teacher_id = 1;
    $data['teacher'] = $this->Mteacher->loadData();

    $this->load->view('teacher/header', $data);
    $this->load->view('teacher/sidebar', $data);
    $this->load->view('teacher/homework_manager_select', $data);
    $this->load->view('teacher/footer', $data);

  } 

  function homework_manager_selectGroup() 
  {
    //load teacher id
    /*$session = $this->Muser->loadData();
    $this->Mteacher->teacher_id = $session['id'];*/
    $this->Mteacher->teacher_id = 1;
    $data['teacher'] = $this->Mteacher->loadData();

    $this->load->view('teacher/header', $data);
    $this->load->view('teacher/sidebar', $data);
    $this->load->view('teacher/homework_manager_selectGroup', $data);
    $this->load->view('teacher/footer', $data);

  }    

  function homework_manager_list() 
  {
    //load teacher id
    /*$session = $this->Muser->loadData();
    $this->Mteacher->teacher_id = $session['id'];*/
    $this->Mteacher->teacher_id = 1;
    $data['teacher'] = $this->Mteacher->loadData();

    $this->load->view('teacher/header', $data);
    $this->load->view('teacher/sidebar', $data);
    $this->load->view('teacher/homework_manager_list', $data);
    $this->load->view('teacher/footer', $data);

  }

   function namecheck_manager() 
   {
    //load teacher id
    //$session = $this->Muser->loadData();
    $this->Mteacher->teacher_id = 1;

    $data['teacher'] = $this->Mteacher->loadData();

    $this->load->view('teacher/header', $data);
    $this->load->view('teacher/sidebar', $data);
    $this->load->view('teacher/namecheck_manager', $data);
    $this->load->view('teacher/footer', $data);
  }

  function namereport_select() 
  {
      //load teacher id
      //$session = $this->Muser->loadData();
      //$this->Mteacher->teacher_id = $session['id'];
      $this->Mteacher->teacher_id = 1;
      $data['teacher'] = $this->Mteacher->loadData();

      $this->load->view('teacher/header', $data);
      $this->load->view('teacher/sidebar', $data);
      $this->load->view('teacher/namereport_select', $data);
      $this->load->view('teacher/footer', $data);

  }

  function namereport_manager() 
  {
      //load teacher id
      //$session = $this->Muser->loadData();
      //$this->Mteacher->teacher_id = $session['id'];
      $this->Mteacher->teacher_id = 1;  
      $data['teacher'] = $this->Mteacher->loadData();

      $this->load->view('teacher/header', $data);
      $this->load->view('teacher/sidebar', $data);
      $this->load->view('teacher/namereport_manager', $data);
      $this->load->view('teacher/footer', $data);

  }

  function tables_manager() 
  {
      //load teacher id
      //$session = $this->Muser->loadData();
      //$this->Mteacher->teacher_id = $session['id'];
      $this->Mteacher->teacher_id = 1; 
      $data['teacher'] = $this->Mteacher->loadData();

      $this->load->view('teacher/header', $data);
      $this->load->view('teacher/sidebar', $data);
      $this->load->view('teacher/tables_manager', $data);
      $this->load->view('teacher/footer', $data);

  }

  function namereport_table()
  {
      $this->Mteacher->teacher_id = 1; 
      $data['teacher'] = $this->Mteacher->loadData();

      $this->load->view('teacher/header', $data);
      $this->load->view('teacher/sidebar', $data);
      $this->load->view('teacher/namereport_table', $data);
      $this->load->view('teacher/footer', $data);

  }

  function namecheck_table()
  {
      $this->Mteacher->teacher_id = 1; 
      $data['teacher'] = $this->Mteacher->loadData();

      $this->load->view('teacher/header', $data);
      $this->load->view('teacher/sidebar', $data);
      $this->load->view('teacher/namecheck_table', $data);
      $this->load->view('teacher/footer', $data);

  }


}