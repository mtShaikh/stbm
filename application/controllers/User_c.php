<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class User_c extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->library('form_validation');
 }

 function index($value="")
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['mail'] = $session_data['email'];
     $data['type'] = $session_data['type'];
     $data['new'] = "";
     switch ($value)
     {
      case 'home':
      $this->load->view('user_view', $data);
      break;
      case 'applications':
      $this->load->view('application', $data);
      break;
      case 'pass':
      $this->load->view('changepass', $data);
      break;
      case 'family':
      $this->load->view('application', $data);
      break;
      case 'person':
      $this->load->view('personform',$data);
      break;
      case 'academic':
      $this->load->view('academicform',$data);
      break;
      case 'register':
      $data['new'] = "Welcome to STB's Scholarship Portal!";
      var_dump($data);
      $this->load->view('user_view', $data);
      break;
      default:
      $this->session->unset_userdata('logged_in'); //fix this properly
      session_destroy();
      redirect('login/index', 'refresh');
      break;
    }
  }
  else
  {
     //If no session, redirect to login page
   redirect('login/index', 'refresh');
 }
}
//add personalDetails function
function addPerson()
{   
  $this->form_validation->set_rules('FName','FName','alpha');
  $this->form_validation->set_rules('LName','LName','alpha');
  $this->form_validation->set_rules('Phone','Phone','numeric|max_length[16]');

  if($this->form_validation->run())     
  {   
    $params = array(
      'FName' => $this->input->post('FName'),
      'LName' => $this->input->post('LName'),
      'DateOfBirth' => $this->input->post('DateOfBirth'),
      'Email' => $this->input->post('Email'),
      'CNIC' => $this->input->post('CNIC'),
      'Phone' => $this->input->post('Phone'),
      'Address' => $this->input->post('Address'),
      'City' => $this->input->post('City'),
      'District' => $this->input->post('District'),
      'Status' => 'Registered',
      );

    $persondetail_id = $this->Persondetail_model->add_persondetail($params);
  }
  else
  {

      /*$this->load->model('Familydetail_model');
      $data['all_familydetails'] = $this->Familydetail_model->get_all_familydetails();*/
      $session_data = $this->session->userdata('logged_in');
      $data['mail'] = $session_data['email'];
      $this->load->view('persondetail/add',$data);
    }
  } 

    function editpass(){
        $oldPass = $this->input->post('old');
        $newPass = $this->input->post('new');
        $session_data = $this->session->userdata('logged_in');
        $result = $this->user->changepass($session_data['email'],$newPass,$oldPass);
        if($result){
         //$data = array('data'=>"Your password has been changed!");
         //$this->output->set_content_type('application/json');
        // echo json_encode($data);
        $res = "true";
        echo $res;
        }
        else{
         /* $data = array('data'=>"Your password not has been changed!");
           $this->output->set_content_type('application/json');
           echo json_encode($data);
          die();*/
          $res = "false";
          echo $res;
        }
      
    }


//logout function
  function logout()
  {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('user_c', 'refresh');
 }
 function form(){
   $this->load->view('form');
 }
}

?>
