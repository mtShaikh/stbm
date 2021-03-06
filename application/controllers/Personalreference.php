<?php

class Personalreference extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Personalreference_model');
        $this->load->library('form_validation');
        $this->load->model('Persondetail_model');
    } 

    /*
     * Listing of personalreference
     */
    function index()
    {
       $session_data = $this->session->userdata('logged_in');
       if($this->session->userdata('logged_in') && $session_data['type']==1) 
       {
        $data['personalreference'] = $this->Personalreference_model->get_all_personalreference();
        $data['type'] =$session_data['type'];
        $this->load->view('personalreference/index',$data);
    }
    else
    {
     //If no session, redirect to login page
        redirect('login/index', 'refresh');
    }
}

    /*
     * Adding a new personalreference
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Name','Name','alpha');
        $this->form_validation->set_rules('PhoneNo','PhoneNo','numeric|max_length[16]');
        $this->form_validation->set_rules('Email','Email','valid_email');
        $this->form_validation->set_rules('Relationship','Relationship','alpha');

        if($this->form_validation->run())     
        {   
            $params = array(
                'Name' => $this->input->post('Name'),
                'PhoneNo' => $this->input->post('PhoneNo'),
                'Email' => $this->input->post('Email'),
                'Address' => $this->input->post('Address'),
                'Relationship' => $this->input->post('Relationship'),
                );
            
            $personalreference_id = $this->Personalreference_model->add_personalreference($params);
            redirect('personalreference/index');
        }
        else
        {
            $this->load->view('personalreference/add');
        }
    }  

    /*
     * Editing a personalreference
     */
    function edit()
    {   
        $session_data = $this->session->userdata('logged_in');
        $data['mail'] = $session_data['email'];
        $data['type'] = $session_data['type'];
        $ID = $this->Persondetail_model->getID($data['mail']);
        if($this->session->userdata('logged_in') && $data['type']== 0)
        { 

         $this->form_validation->set_rules('Name','Name','alpha');
         $this->form_validation->set_rules('PhoneNo','PhoneNo','numeric|max_length[16]');
         $this->form_validation->set_rules('Email','Email','valid_email');
         $this->form_validation->set_rules('Relationship','Relationship','alpha');

         if($this->form_validation->run())     
         {   
            $params = array(
               'Name' => $this->input->post('Name'),
               'PhoneNo' => $this->input->post('PhoneNo'),
               'Email' => $this->input->post('Email'),
               'Relationship' => $this->input->post('Relationship'),
               );
            $this->Personalreference_model->update_personalreference($ID,$params);            
            if($this->input->post('sbm')=="back"){
                redirect('user_c/areference');
            }
            else {
                redirect('user_c/home');
            }      
        }
        else
        {   
            $data['personalreference'] = $this->Personalreference_model->get_personalreference($ID);
            $this->load->view('preference',$data);
        }
    }
    else
        redirect('login/index', 'refresh');
} 

    /*
     * Deleting personalreference
     */
    function remove($ID)
    {
        $personalreference = $this->Personalreference_model->get_personalreference($ID);

        // check if the personalreference exists before trying to delete it
        if(isset($personalreference['ID']))
        {
            $this->Personalreference_model->delete_personalreference($ID);
            redirect('personalreference/index');
        }
        else
            show_error('The personalreference you are trying to delete does not exist.');
    }
    
}
