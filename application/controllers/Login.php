<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('Mteacher','',TRUE);
    $this->load->model('Mstudent','',TRUE);
    $this->load->model('Muser','',TRUE);

    $this->load->library('session');
  }

  function index() {
    $this->load->library('form_validation');
    
    if($this->Muser->isLogin()) {
      if($this->Muser->isTeacher()) redirect('teacher/', 'refresh');
      redirect('student/', 'refresh');
    }

    $this->load->view('login/login_frm');
  }

  function post() {
    //This method will have the credentials validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');



    if($this->form_validation->run()==FALSE) {
      echo 'err';
      echo "<script>alert('err');</script>";
    } else { 
      $username = $this->input->post('username');
      $password = $this->input->post('password');


      if(is_numeric($username)) {

        //student
        $this->Mstudent->student_username = $username;
        $this->Mstudent->student_password = md5($password);

        if($this->Mstudent->login()) {
          $this->Muser->type = 'student';
          $this->Muser->id = $this->Mstudent->student_id;
          $this->Muser->major_id = $this->Mstudent->major_id;
          $this->Muser->faculty_id = $this->Mstudent->faculty_id;

          $this->Muser->saveSession();  
          redirect('student', 'refresh');        

        }
      } else {

        //teacher
        $this->Mteacher->teacher_username = $username;
        $this->Mteacher->teacher_password = md5($password);

        if($this->Mteacher->login()) {
          $this->Muser->type = 'teacher';
          $this->Muser->id = $this->Mteacher->teacher_id;
          $this->Muser->major_id = $this->Mteacher->major_id;
          $this->Muser->faculty_id = $this->Mteacher->faculty_id;

          $this->Muser->saveSession();
          redirect('teacher', 'refresh');

        }
      }



      

   }

  
  }



}
?>