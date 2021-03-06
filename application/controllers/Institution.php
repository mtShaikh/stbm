<?php
 
class Institution extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Institution_model');
    } 

    /*
     * Listing of institution
     */
    function index()
    {
              $session_data = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in') && $session_data['type']==1) 
        {
            $data['mail'] = $session_data['email'];
            $data['institution'] = $this->Institution_model->get_all_institution();
             $data['type'] =$session_data['type'];
            $this->load->view('institution/institution',$data);
        }
        else
        {
     //If no session, redirect to login page
          redirect('login/index', 'refresh');
      }
    }

    /*
     * Adding a new institution
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Name' => $this->input->post('Name'),
				'City' => $this->input->post('City'),
				'Type' => $this->input->post('Type'),
            );
            
            $institution_id = $this->Institution_model->add_institution($params);
            redirect('institution/index');
        }
        else
        {
             $session_data = $this->session->userdata('logged_in');
            $data['mail'] = $session_data['email'];
             $data['type'] =$session_data['type'];
            $this->load->view('institution/add',$data);
        }
    }  

    /*
     * Editing a institution
     */
    function edit($ID)
    {   
        // check if the institution exists before trying to edit it
        $institution = $this->Institution_model->get_institution($ID);
        
        if(isset($institution['ID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Name' => $this->input->post('Name'),
					'City' => $this->input->post('City'),
					'Type' => $this->input->post('Type'),
                );

                $this->Institution_model->update_institution($ID,$params);            
                redirect('institution/index');
            }
            else
            {   
                $data['institution'] = $this->Institution_model->get_institution($ID);
                 $session_data = $this->session->userdata('logged_in');
            $data['mail'] = $session_data['email'];
             $data['type'] =$session_data['type'];
                $this->load->view('institution/edit',$data);
            }
        }
        else
            show_error('The institution you are trying to edit does not exist.');
    } 

    /*
     * Deleting institution
     */
    function remove($ID)
    {
        $institution = $this->Institution_model->get_institution($ID);

        // check if the institution exists before trying to delete it
        if(isset($institution['ID']))
        {
            $this->Institution_model->delete_institution($ID);
            redirect('institution/index');
        }
        else
            show_error('The institution you are trying to delete does not exist.');
    }
    
}
