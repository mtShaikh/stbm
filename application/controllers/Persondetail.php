<?php

class Persondetail extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Persondetail_model');
     $this->load->library('form_validation');
  } 

    /*
     * Listing of persondetails
     */
    function index()
    {  
      $session_data = $this->session->userdata('logged_in');
      if($this->session->userdata('logged_in') && $session_data['type']==1) 
      {
        $data['mail'] = $session_data['email'];
        $data['persondetails'] = $this->Persondetail_model->get_all_persondetails();
        $data['type'] =$session_data['type'];
        $this->load->view('persondetail/applicants',$data);
      }
      else
      {
     //If no session, redirect to login page
        redirect('login/index', 'refresh');
      }
    }

/*  function get_data() {
    $data['ajax_req'] = TRUE;
    $data['persondetail'] = $this->Persondetail_model->get_all_persondetails();
     $this->load->view('persondetail/applicants',$data);
   }*/
    /*
     * Adding a new persondetail
     */
    function add()
    {   
      $this->load->library('form_validation');

      $this->form_validation->set_rules('FName','FName','alpha');
      $this->form_validation->set_rules('LName','LName','alpha');
      $this->form_validation->set_rules('Phone','Phone','numeric|max_length[16]');

      if($this->form_validation->run())     
      {   
        $params = array(
          'FName' => $this->input->post('FName'),
          'LName' => $this->input->post('LName'),
          'DateOfBirth' => $this->input->post('DateOfBirth'),
          'Email' => $this->input->post('Email'),
          'CNIC' => $this->input->post('CNIC'),
          'Phone' => $this->input->post('Phone'),
          'Address' => $this->input->post('Address'),
          'City' => $this->input->post('City'),
          'District' => $this->input->post('District'),
          'Status' => $this->input->post('Status'),
          );

        $persondetail_id = $this->Persondetail_model->add_persondetail($params);
        redirect('admin/applicants');
      }
      else
      {

			/*$this->load->model('Familydetail_model');
			$data['all_familydetails'] = $this->Familydetail_model->get_all_familydetails();*/
     $session_data = $this->session->userdata('logged_in');
     $data['mail'] = $session_data['email'];
     $this->load->view('persondetail/add',$data);
   }
 }  

    /*
     * Editing a persondetail
     */
    function edit($email)
    {  
      $this->form_validation->set_rules('FName','FName','alpha');
      $this->form_validation->set_rules('LName','LName','alpha');
      $this->form_validation->set_rules('Phone','Phone','numeric|max_length[16]');
      $ID = $this->Persondetail_model->getID($email);
      $session_data = $this->session->userdata('logged_in');
      $data['mail'] = $session_data['email'];
      $data['type'] = $session_data['type'];
      if($this->session->userdata('logged_in') && $data['type']== 0)
      {
        if($this->form_validation->run())     
        {   
          $params = array(
            'FName' => $this->input->post('FName'),
            'LName' => $this->input->post('LName'),
            'DateOfBirth' => $this->input->post('DateOfBirth'),
            'Email' => $this->input->post('Email'),
            'CNIC' => $this->input->post('CNIC'),
            'Phone' => $this->input->post('Phone'),
            'Address' => $this->input->post('Address'),
            'City' => $this->input->post('City'),
            'District' => $this->input->post('District'),
            'Status' => 'Registered',
            );
          $persondetail_id = $this->Persondetail_model->update_persondetail($ID,$params);
          redirect('user_c/addacademicinfo/'.$email);
        }
        else
        {
          $data['persondetail'] = $this->Persondetail_model->get_persondetail($ID);
          $this->load->view('personform',$data);
        }
      }
      else
      {
        redirect('login/index', 'refresh');
      }
    } 

    /*
     * Deleting persondetail
     */
    function remove($ID)
    {
      $persondetail = $this->Persondetail_model->get_persondetail($ID);

        // check if the persondetail exists before trying to delete it
      if(isset($persondetail['ID']))
      {
        $this->Persondetail_model->delete_persondetail($ID);
        redirect('admin/applicants');
      }
      else
        show_error('The persondetail you are trying to delete does not exist.');
    }
    
  }
