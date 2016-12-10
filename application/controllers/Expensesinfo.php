<?php

class Expensesinfo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Expensesinfo_model');
        $this->load->model('Familydetail_model');
        $this->load->library('form_validation');
        $this->load->model('Persondetail_model');
    } 

    /*
     * Listing of expensesinfo
     */
    function index()
    {
        $session_data = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in') && $session_data['type']==1) 
        {
            $data['mail'] = $session_data['email'];
        $data['expensesinfo'] = $this->Expensesinfo_model->get_all_expensesinfo();
        $data['type'] = $session_data['type'];
        $this->load->view('expensesinfo/index',$data);
        }  
        else
        {
     //If no session, redirect to login page
           redirect('login/index', 'refresh');
       }
    }

    /*
     * Adding a new expensesinfo
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'ExpenseType_ID' => $this->input->post('ExpenseType_ID'),
                'Amount' => $this->input->post('Amount'),
                );
            
            $expensesinfo_id = $this->Expensesinfo_model->add_expensesinfo($params);
            redirect('expensesinfo/index');
        }
        else
        {
            $this->load->view('expensesinfo/add');
        }
    }  
    /*
     * Editing a expensesinfo
     */
    function edit()
    {   
       $session_data = $this->session->userdata('logged_in');
       $data['mail'] = $session_data['email'];
       $data['type'] = $session_data['type'];
       $ID = $this->Persondetail_model->getID($data['mail']);
       $fID = $this->Familydetail_model->getID($ID);
       if($this->session->userdata('logged_in') && $data['type']== 0)
       {
        if(isset($_POST) && count($_POST) > 0)     
        {   
            for ($i=1; $i < 9; $i++) 
            { 
                $expensesinfo = $this->input->post('expensesinfo'.$i);
                $this->Expensesinfo_model->update_expensesinfo($i,$fID,$expensesinfo);  
                //mysqli_next_result( $this->db->conn_id ); 
            }

          if($this->input->post('sbm')=="back"){
            redirect('user_c/family');
          }
          else {
            redirect('user_c/asset');
          }
        }
        else
        {   
            for ($i=1; $i < 9; $i++) { 
             $data['expensesinfo'.$i] = $this->Expensesinfo_model->get_expensesinfo($fID,$i);
             mysqli_next_result( $this->db->conn_id );
         }
         $this->load->view('expense',$data);
     }
 }
 else
 {
    redirect('login/index', 'refresh');
}
} 

    /*
     * Deleting expensesinfo
     */
    function remove($ID)
    {
        $expensesinfo = $this->Expensesinfo_model->get_expensesinfo($ID);

        // check if the expensesinfo exists before trying to delete it
        if(isset($expensesinfo['ID']))
        {
            $this->Expensesinfo_model->delete_expensesinfo($ID);
            redirect('expensesinfo/index');
        }
        else
            show_error('The expensesinfo you are trying to delete does not exist.');
    }
    
}
