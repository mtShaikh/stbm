<?php

class Academicreference extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Academicreference_model');
        $this->load->library('form_validation');
        $this->load->model('Persondetail_model');
    } 

    /*
     * Listing of academicreference
     */
    function index()
    {
     $session_data = $this->session->userdata('logged_in');
     if($this->session->userdata('logged_in') && $session_data['type']==1) 
     {
        $data['academicreference'] = $this->Academicreference_model->get_all_academicreference();
        $data['type'] =$session_data['type'];
        $this->load->view('academicreference/index',$data);
    }
    else
    {
     //If no session, redirect to login page
        redirect('login/index', 'refresh');
    }
   }

    /*
     * Adding a new academicreference
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Name','Name','alpha');
        $this->form_validation->set_rules('PhoneNo','PhoneNo','numeric|max_length[16]');
        $this->form_validation->set_rules('Email','Email','valid_email');
        $this->form_validation->set_rules('Institution','Institution','alpha_numeric');

        if($this->form_validation->run())     
        {   
            $params = array(
                'Name' => $this->input->post('Name'),
                'PhoneNo' => $this->input->post('PhoneNo'),
                'Email' => $this->input->post('Email'),
                'Institution' => $this->input->post('Institution'),
                );
            
            $academicreference_id = $this->Academicreference_model->add_academicreference($params);
            redirect('academicreference/index');
        }
        else
        {
            $this->load->view('academicreference/add');
        }
    }  

    /*
     * Editing a academicreference
     */
    function edit()
    {   $session_data = $this->session->userdata('logged_in');
        $data['mail'] = $session_data['email'];
        $data['type'] = $session_data['type'];
        $ID = $this->Persondetail_model->getID($data['mail']);
        if($this->session->userdata('logged_in') && $data['type']== 0)
        { 
            $this->form_validation->set_rules('Name','Name','alpha');
            $this->form_validation->set_rules('PhoneNo','PhoneNo','numeric|max_length[16]');
            $this->form_validation->set_rules('Email','Email','valid_email');
            $this->form_validation->set_rules('Institution','Institution','alpha_numeric');

            if($this->form_validation->run())     
            {   
                $params = array(
                   'Name' => $this->input->post('Name'),
                   'PhoneNo' => $this->input->post('PhoneNo'),
                   'Email' => $this->input->post('Email'),
                   'Institution' => $this->input->post('Institution'),
                   );

                $this->Academicreference_model->update_academicreference($ID,$params); 
                if($this->input->post('sbm')=="back"){
                    redirect('user_c/asset');
                }
                else {
                    redirect('user_c/preference');
                }                      
            }
            else
            {   
                $data['academicreference'] = $this->Academicreference_model->get_academicreference($ID);
                $this->load->view('areference',$data);
            }
        }
        else
            redirect('login/index', 'refresh');
    } 

    /*
     * Deleting academicreference
     */
    function remove($ID)
    {
        $academicreference = $this->Academicreference_model->get_academicreference($ID);

        // check if the academicreference exists before trying to delete it
        if(isset($academicreference['ID']))
        {
            $this->Academicreference_model->delete_academicreference($ID);
            redirect('academicreference/index');
        }
        else
            show_error('The academicreference you are trying to delete does not exist.');
    }
    
}
