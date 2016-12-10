<?php
 
class Academicreference_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get academicreference by ID
     */
    function get_academicreference($ID)
    {
        return $this->db->get_where('AcademicReference',array('Person_ID'=>$ID))->row_array();
    }
    
    /*
     * Get all academicreference
     */
    function get_all_academicreference()
    {
        $query = $this->db->query("CALL displayAReference()");
           return $query->result_array();
    }
    
    /*
     * function to add new academicreference
     */
    function add_academicreference($params)
    {
        $this->db->insert('AcademicReference',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update academicreference
     */
    function update_academicreference($ID,$params)
    {
        $this->db->where('Person_ID',$ID);
        $response = $this->db->update('AcademicReference',$params);
        if($response)
        {
            return "academicreference updated successfully";
        }
        else
        {
            return "Error occuring while updating academicreference";
        }
    }
    
    /*
     * function to delete academicreference
     */
    function delete_academicreference($ID)
    {
        $response = $this->db->delete('AcademicReference',array('ID'=>$ID));
        if($response)
        {
            return "academicreference deleted successfully";
        }
        else
        {
            return "Error occuring while deleting academicreference";
        }
    }
}
