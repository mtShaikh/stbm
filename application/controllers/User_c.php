<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class User_c extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['email'] = $session_data['email'];
     $this->load->view('user_view', $data);
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
   redirect('user_c', 'refresh');
 }
 function form(){
   $this->load->view('form');
 }
}

?>
