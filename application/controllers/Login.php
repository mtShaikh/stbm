<?php if(!defined('BASEPATH'))exit('No direct access');
class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('login_view');
 }
function home(){
  $this->load->view('home');
}
}

?>
