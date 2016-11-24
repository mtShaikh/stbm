<?php if(!defined('BASEPATH'))exit('No direct access');
class Home_c extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
//   $this->load->helper(array('form'));
   $this->load->view('home');
 }

}

?>
