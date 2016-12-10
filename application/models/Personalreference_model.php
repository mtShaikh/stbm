<?php

class Personalreference_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get personalreference by ID
     */
    function get_personalreference($ID)
    {
        return $this->db->get_where('PersonalReference',array('Person_ID'=>$ID))->row_array();
    }
    
    /*
     * Get all personalreference
     */
    function get_all_personalreference()
    {
        $query = $this->db->query("CALL displayPReference()");
           return $query->result_array();
    }
    
    /*
     * function to add new personalreference
     */
    function add_personalreference($params)
    {
        $this->db->insert('PersonalReference',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update personalreference
     */
    function update_personalreference($ID,$params)
    {
        $this->db->where('Person_ID',$ID);
        $response = $this->db->update('PersonalReference',$params);
        if($response)
        {
            return "personalreference updated successfully";
        }
        else
        {
            return "Error occuring while updating personalreference";
        }
    }
    
    /*
     * function to delete personalreference
     */
    function delete_personalreference($ID)
    {
        $response = $this->db->delete('PersonalReference',array('ID'=>$ID));
        if($response)
        {
            return "personalreference deleted successfully";
        }
        else
        {
            return "Error occuring while deleting personalreference";
        }
    }
}
