<?php


class Persondetail_model extends CI_Model
{
    function __construct()
    {
       // $this->load->database();
        parent::__construct();
    }
    
    /*
     * Get persondetail by ID
     */
    function get_persondetail($ID)
    {
        return $this->db->get_where('persondetails',array('ID'=>$ID))->row_array();
    }
    
    /*
     * Get all persondetails
     */
    function get_all_persondetails()
    {
        return $this->db->get('persondetails')->result_array();
    }
    
    /*
     * function to add new persondetail
     */
    function add_persondetail($params)
    {
        $this->db->insert('persondetails',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update persondetail
     */
    function update_persondetail($ID,$params)
    {
        $this->db->where('ID',$ID);
        $response = $this->db->update('persondetails',$params);
        if($response)
        {
            return "persondetail updated successfully";
        }
        else
        {
            return "Error occuring while updating persondetail";
        }
    }
    
    /*
     * function to delete persondetail
     */
    function delete_persondetail($ID)
    {
        $response = $this->db->delete('persondetails',array('ID'=>$ID));
        if($response)
        {
            return "persondetail deleted successfully";
        }
        else
        {
            return "Error occuring while deleting persondetail";
        }
    }

}
