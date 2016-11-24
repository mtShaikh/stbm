<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->library('form_validation');
 }

 function index()
 {
   $this->load->helper('security');
   //This method will have the credentials validation

   $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

   if($this->form_validation->run() == FALSE)
   {
     $this->form_validation->set_message('check_database', 'Invalid email or password');
     //Field validation failed.  User redirected to login page
     $this->load->view('login_view');
   }
   else
   {
     $email = $this->input->post('email');
     $password = $this->input->post('password');
     //query the database
     $result = $this->user->login($email, $password);
     if($result)
     {
       $sess_array = array();
       $sess_array = array(
         'uid' => $result->uid,
         'email' => $result->email,
         );
       $this->session->set_userdata('logged_in', $sess_array);
       if($result->isadmin == 1)
         redirect('admin/dash');
       else
         redirect('user_c');
     }
     else{
      $this->session->set_flashdata('fail','Login failed due invalid password or username');
      redirect('login');
    }
  }
}

}

?>
