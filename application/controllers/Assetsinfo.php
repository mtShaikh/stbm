<?php

class Assetsinfo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Assetsinfo_model');
        $this->load->model('Familydetail_model');
        $this->load->library('form_validation');
        $this->load->model('Persondetail_model');
        
    } 

    /*
     * Listing of assetsinfo
     */
    function index()
    {
        $session_data = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in') && $session_data['type']==1) 
        {    $data['type'] =$session_data['type'];
            $data['mail'] = $session_data['email'];
            $data['assetsinfo'] = $this->Assetsinfo_model->get_all_assetsinfo();
            $this->load->view('assetsinfo/assetinfo',$data);
        }
        else
        {
     //If no session, redirect to login page
         redirect('login/index', 'refresh');
     }
 }

    /*
     * Adding a new assetsinfo
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'Amount' => $this->input->post('Amount'),
                'AssetType_ID' => $this->input->post('AssetType_ID'),
                );
            
            $assetsinfo_id = $this->Assetsinfo_model->add_assetsinfo($params);
            redirect('assetsinfo/index');
        }
        else
        {
            $session_data = $this->session->userdata('logged_in');
            $data['mail'] = $session_data['email'];
            $this->load->view('assetsinfo/add',$data);
        }
    }  

    /*
     * Editing a assetsinfo
     */
    function edit()
    {  $session_data = $this->session->userdata('logged_in');
       $data['mail'] = $session_data['email'];
       $data['type'] = $session_data['type'];
       $ID = $this->Persondetail_model->getID($data['mail']);
       $fID = $this->Familydetail_model->getID($ID);
       if($this->session->userdata('logged_in') && $data['type']== 0)
       {
        if(isset($_POST) && count($_POST) > 0)     
        {   
            for ($i=1; $i < 5; $i++) 
            { 
                $assetsinfo = $this->input->post('assetsinfo'.$i);
                $this->Assetsinfo_model->update_assetsinfo($i,$fID,$expensesinfo);  
                //mysqli_next_result( $this->db->conn_id ); 
            }

          if($this->input->post('sbm')=="back"){
            redirect('user_c/expense');
          }
          else {
            redirect('user_c/areference');
          }
        }
        else
        {   
            for ($i=1; $i < 5; $i++) { 
             $data['assetsinfo'.$i] = $this->Assetsinfo_model->get_assetsinfo($fID,$i);
             mysqli_next_result( $this->db->conn_id );
         }
         $this->load->view('assets',$data);
     }
 }
 else
 {
    redirect('login/index', 'refresh');
}
    } 

    /*
     * Deleting assetsinfo
     */
    function remove($ID)
    {
        $assetsinfo = $this->Assetsinfo_model->get_assetsinfo($ID);

        // check if the assetsinfo exists before trying to delete it
        if(isset($assetsinfo['ID']))
        {
            $this->Assetsinfo_model->delete_assetsinfo($ID);
            redirect('assetsinfo/index');
        }
        else
            show_error('The assetsinfo you are trying to delete does not exist.');
    }
    
}
