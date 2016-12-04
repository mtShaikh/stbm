<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */

class Academicdetail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Academicdetail_model');
    } 

    /*
     * Listing of academicdetails
     */
    function index()
    {
        $session_data = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in') && $session_data['type']==1) 
        {
            $data['mail'] = $session_data['email'];
            $data['academicdetails'] = $this->Academicdetail_model->get_all_academicdetails();
            $data['type'] = $session_data['type'];
            $this->load->view('academicdetail/academic',$data);
        }

        else
        {
     //If no session, redirect to login page
           redirect('login/index', 'refresh');
       }
   }

    /*
     * Adding a new academicdetail
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Percentage','Percentage','decimal');
        
        if($this->form_validation->run())     
        {   
            $params = array(
                'Percentage' => $this->input->post('Percentage'),
                'FieldOfStudy' => $this->input->post('FieldOfStudy'),
                'Institution_ID' => $this->input->post('Institution_ID'),
                );
            
            $academicdetail_id = $this->Academicdetail_model->add_academicdetail($params);
            redirect('academicdetail/index');
        }
        else
        {

           $this->load->model('Institution_model');
           $data['all_institution'] = $this->Institution_model->get_all_institution();
           
           $this->load->view('academicdetail/add',$data);
       }
   }  

    /*
     * Editing a academicdetail
     */
    function edit($ID)
    {   
        // check if the academicdetail exists before trying to edit it
        $academicdetail = $this->Academicdetail_model->get_academicdetail($ID);
        
        if(isset($academicdetail['ID']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('Percentage','Percentage','decimal');
            
            if($this->form_validation->run())     
            {   
                $params = array(
                 'Percentage' => $this->input->post('Percentage'),
                 'FieldOfStudy' => $this->input->post('FieldOfStudy'),
                 'Institution_ID' => $this->input->post('Institution_ID'),
                 );

                $this->Academicdetail_model->update_academicdetail($ID,$params);            
                redirect('academicdetail/index');
            }
            else
            {   
                $data['academicdetail'] = $this->Academicdetail_model->get_academicdetail($ID);
                
                $this->load->model('Institution_model');
                $data['all_institution'] = $this->Institution_model->get_all_institution();

                $this->load->view('academicdetail/edit',$data);
            }
        }
        else
            show_error('The academicdetail you are trying to edit does not exist.');
    } 

    /*
     * Deleting academicdetail
     */
    function remove($ID)
    {
        $academicdetail = $this->Academicdetail_model->get_academicdetail($ID);

        // check if the academicdetail exists before trying to delete it
        if(isset($academicdetail['ID']))
        {
            $this->Academicdetail_model->delete_academicdetail($ID);
            redirect('academicdetail/index');
        }
        else
            show_error('The academicdetail you are trying to delete does not exist.');
    }
    
}
