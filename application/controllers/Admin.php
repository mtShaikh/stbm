<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Admin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index($value="") //TODO:fix this properly
 {
  $session_data = $this->session->userdata('logged_in');
  if($this->session->userdata('logged_in') && $session_data['type']==1) 
  {
    $data['mail'] = $session_data['email'];
     switch ($value)
     {
      case 'dash':
      $this->load->view($value, $data);
      break; 
      case 'applicants':
     // $this->session->set_flashdata('sessiondata', $data);
      redirect('persondetail');
      break; 
      case 'applications':
      $this->load->view($value, $data);
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

function logout()
{
 $this->session->unset_userdata('logged_in');
 session_destroy();
 redirect('admin', 'refresh');
}

}

?>
