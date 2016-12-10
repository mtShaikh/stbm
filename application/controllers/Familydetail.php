<?php

class Familydetail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Familydetail_model');
        $this->load->library('form_validation');
        $this->load->model('Persondetail_model');
    } 

    /*
     * Listing of familydetails
     */
    function index()
    {
         $session_data = $this->session->userdata('logged_in');
      if($this->session->userdata('logged_in') && $session_data['type']==1) 
      {
        $data['familydetails'] = $this->Familydetail_model->get_all_familydetails();
         $data['type'] =$session_data['type'];
        $this->load->view('familydetail/familydetail',$data);
         }
      else
      {
     //If no session, redirect to login page
        redirect('login/index', 'refresh');
      }
    }

    /*
     * Adding a new familydetail
     */
    function add()
    {   
      $this->form_validation->set_rules('Income','Income','decimal');
      $this->form_validation->set_rules('NoOfSiblings','NoOfSiblings','integer');
      $this->form_validation->set_rules('FName','FName','alpha_numeric');
      $this->form_validation->set_rules('LName','LName','alpha_numeric');
      $this->form_validation->set_rules('PhoneNo','PhoneNo','numeric|max_length[16]');
      $this->form_validation->set_rules('CNIC','CNIC','alpha_numeric');

      if($this->form_validation->run())     
      {   
        $params = array(
            'Income' => $this->input->post('Income'),
            'NoOfSiblings' => $this->input->post('NoOfSiblings'),
            'FName' => $this->input->post('FName'),
            'LName' => $this->input->post('LName'),
            'PhoneNo' => $this->input->post('PhoneNo'),
            'Address' => $this->input->post('Address'),
            'CNIC' => $this->input->post('CNIC'),
            'Designation' => $this->input->post('Designation'),
            'Company' => $this->input->post('Company'),
            );

        $familydetail_id = $this->Familydetail_model->add_familydetail($params);
        redirect('familydetail/index');
    }
    else
    {
        $this->load->view('familydetail/add');
    }
}  

    /*
     * Editing a familydetail
     */
    function edit()
    {   
        $session_data = $this->session->userdata('logged_in');
        $data['mail'] = $session_data['email'];
        $data['type'] = $session_data['type'];
        $ID = $this->Persondetail_model->getID($data['mail']);
        if($this->session->userdata('logged_in') && $data['type']== 0)
        { 
         $this->form_validation->set_rules('Income','Income','numeric');
         $this->form_validation->set_rules('NoOfSiblings','NoOfSiblings','integer');
         $this->form_validation->set_rules('FName','FName','alpha_numeric');
         $this->form_validation->set_rules('LName','LName','alpha_numeric');
         $this->form_validation->set_rules('PhoneNo','PhoneNo','numeric|max_length[16]');
         $this->form_validation->set_rules('CNIC','CNIC','alpha_numeric');

         if($this->form_validation->run())     
         {   
            $params = array(
               'Income' => $this->input->post('Income'),
               'NoOfSiblings' => $this->input->post('NoOfSiblings'),
               'FName' => $this->input->post('FName'),
               'LName' => $this->input->post('LName'),
               'PhoneNo' => $this->input->post('PhoneNo'),
               'CNIC' => $this->input->post('CNIC'),
               'Designation' => $this->input->post('Designation'),
               'Company' => $this->input->post('Company'),
               );

            $this->Familydetail_model->update_familydetail($ID,$params); 
             if($this->input->post('sbm')=="back"){
            redirect('user_c/academic');
          }
          else {
            redirect('user_c/expense');
          }           
           // redirect('');
        }
        else
        {   
            $data['familydetail'] = $this->Familydetail_model->get_familydetail($ID);

            $this->load->view('familyinfo',$data);
        }
    }
    else
        redirect('login/index', 'refresh');
} 

    /*
     * Deleting familydetail
     */
    function remove($ID)
    {
        $familydetail = $this->Familydetail_model->get_familydetail($ID);

        // check if the familydetail exists before trying to delete it
        if(isset($familydetail['ID']))
        {
            $this->Familydetail_model->delete_familydetail($ID);
            redirect('familydetail/index');
        }
        else
            show_error('The familydetail you are trying to delete does not exist.');
    }
    
}
