<?php

class Academicdetail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Academicdetail_model');
        $this->load->model('Institution_model');
        $this->load->model('Expensesinfo_model');
        $this->load->model('Assetsinfo_model');
        $this->load->model('Persondetail_model');
        $this->load->model('Familydetail_model');
        $this->load->model('Academicreference_model');
        $this->load->model('Personalreference_model');
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
            mysqli_next_result( $this->db->conn_id ); 
            $data['familydetails'] = $this->Familydetail_model->get_all_familydetails();
            mysqli_next_result( $this->db->conn_id ); 
            $data['expensesinfo'] = $this->Expensesinfo_model->get_all_expensesinfo();
            mysqli_next_result( $this->db->conn_id ); 
            $data['assetsinfo'] = $this->Assetsinfo_model->get_all_assetsinfo();
            mysqli_next_result( $this->db->conn_id ); 
            $data['personalreference'] = $this->Personalreference_model->get_all_personalreference();
            mysqli_next_result( $this->db->conn_id ); 
            $data['academicreference'] = $this->Academicreference_model->get_all_academicreference();
            $data['type'] = $session_data['type'];
            $this->load->view('applicationdetails',$data);
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

   function update($ID,$per,$iID,$type){
    $params = array(
        'Percentage'=> $per,
        'Institution_ID' => $iID,
        );
    $this->Academicdetail_model->update_academicdetail($ID,$params,$type);
}


function editclg(){
    $session_data = $this->session->userdata('logged_in');
    $data['mail'] = $session_data['email'];
    $data['type'] = $session_data['type'];
    $ID = $this->Persondetail_model->getID($data['mail']);
    if($this->session->userdata('logged_in') && $data['type']== 0)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Percentage','Percentage','numeric');

        if($this->form_validation->run())     
        {   
            if($this->input->post('CName')!='cother')
            {
                $this->update($ID,$this->input->post('cPercentage'),$this->input->post('CName'),1);
            }
            else{
                $params = array(
                    'Name' => $this->input->post('newcollege'),
                    'City' => $this->input->post('newclgcity'),
                    'Type' => "College"
                    );
                $institution_id = $this->Institution_model->add_institution($params);
                mysqli_next_result( $this->db->conn_id );
                $this->update($ID,$this->input->post('cPercentage'),$institution_id,1);
            }
            if($this->input->post('sbm')=="back"){
                redirect('user_c/academic');
            }
            else
                redirect('user_c/family');
        }
        else
            {   $data['college'] = $this->Academicdetail_model->get_college($ID);
        mysqli_next_result( $this->db->conn_id );
        $data['all_institution'] = $this->Institution_model->get_all_institution();

        $this->load->view('college',$data);
    }
}
else
   redirect('login/index', 'refresh');

}
    /*
     * Editing a academicdetail
     */
    function edit()
    {   
      $session_data = $this->session->userdata('logged_in');
      $data['mail'] = $session_data['email'];
      $data['type'] = $session_data['type'];
      $ID = $this->Persondetail_model->getID($data['mail']);
      if($this->session->userdata('logged_in') && $data['type']== 0)
      {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Percentage','Percentage','numeric');

        if($this->form_validation->run())     
        {   
            if($this->input->post('School')!='sother')
            {
               $this->update($ID,$this->input->post('sPercentage'),$this->input->post('School'),0);
           }
           else 
           {
             $params = array(
                'Name' => $this->input->post('newschool'),
                'City' => $this->input->post('newcity'),
                'Type' => "School"
                );
             $institution_id = $this->Institution_model->add_institution($params);
             mysqli_next_result( $this->db->conn_id );  
             $this->update($ID,$this->input->post('sPercentage'),$institution_id,0);
         }

         if($this->input->post('sbm')=="back"){
            redirect('user_c/person');
        }
        else if($this->input->post('sbm')=="clg") {
            redirect('user_c/college');
        }
        else
            redirect('user_c/family');
    }
    else
    {   
        if($this->Academicdetail_model->get_college($ID))
        {
            mysqli_next_result( $this->db->conn_id );
            $data['college'] = $this->Academicdetail_model->get_college($ID);
            $data['has']="true";
        }
        else{
            $data['has']="false";
        }
        mysqli_next_result( $this->db->conn_id );
        $data['school'] = $this->Academicdetail_model->get_school($ID);
        mysqli_next_result( $this->db->conn_id );
        $data['all_institution'] = $this->Institution_model->get_all_institution();

        $this->load->view('academicinfo',$data);
    }
}
else
   redirect('login/index', 'refresh');
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
