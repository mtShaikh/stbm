<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class User_c extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->library('form_validation');
   $this->load->model('Persondetail_model');
   $this->load->model('Academicdetail_model');
   $this->load->model('Institution_model');
   $this->load->model('Familydetail_model');
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
      $this->load->view('application', $data);
      break;
      case 'person':
      redirect('persondetail/edit/');
      break;
      case 'academic':
      redirect('academicdetail/edit/');
      break;
      case 'pass':
      $this->load->view('changepass', $data);
      break;
      case 'family':
      redirect('familydetail/edit/');
      break;
      case 'asset':
      redirect('assetsinfo/edit/');
      break;
      case 'expense':
      redirect('expensesinfo/edit/');
      break;
      case 'areference':
      redirect('academicreference/edit/');
      break;
      case 'preference':
      redirect('personalreference/edit/');
      break;
      case 'college':
      redirect('academicdetail/editclg/');
      break;
      case 'register':
      $data['new'] = $session_data['new'];
      $this->load->view('application', $data);
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

//add academic details
/*function addacademicinfo($email)
{
  $ID = $this->Persondetail_model->getID($email);
  $this->form_validation->set_rules('Percentage','Percentage','decimal');
  if($this->form_validation->run())     
  {   
    $params = array(
     'Percentage' => $this->input->post('Percentage'),
     'FieldOfStudy' => $this->input->post('FieldOfStudy'),
     'Institution_ID' => $this->input->post('Institution_ID'),
     );

    $this->Academicdetail_model->update_academicdetail($ID,$params);            
    //redirect('academicdetail/index');
  }
  else
  {   
    $data['all_institution'] = $this->Institution_model->get_all_institution();
    $session_data = $this->session->userdata('logged_in');
    $data['mail'] = $session_data['email'];
    $data['type'] = $session_data['type'];
    $data['academicdetail'] = $this->Academicdetail_model->get_academicdetail($ID);
    $this->load->view('academicinfo',$data);
  }

}*/

//edit password function
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
