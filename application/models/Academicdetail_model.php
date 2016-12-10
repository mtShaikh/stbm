<?php

class Academicdetail_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get academicdetail by ID
     */
    function get_academicdetail($ID)
    {
        return $this->db->get_where('AcademicDetails',array('PersonDetails_ID'=>$ID))->row_array();
    }
    function get_college($ID){
        $query = $this->db->query("Call getCollege('".$ID."')");
        if ($query->num_rows() > 0)
        return $query->row_array();
        else
            return false;
    }
    function get_school($ID){
        $query = $this->db->query("Call getSchool('".$ID."')");
        return $query->row_array();
    }
    /*
     * Get all academicdetails
     */
    function get_all_academicdetails()
    {  
        $query = $this->db->query("CALL displayAcademics()"); 
           return $query->result_array();
    }
    
    function canupdate($pID,$val){
        $this->db->select('*');
        $this->db->from('AcademicDetails');
        $this->db->where('iscollege',$val);
        $this->db->where('PersonDetails_ID',$pID);
        $query = $this->db->get();
        if ($query->num_rows() == 0){
            return true;
         }
         else
            return false;
    }

    /*
     * function to add new academicdetail
     */
    function add_academicdetail($params)
    {
        $this->db->insert('AcademicDetails',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update academicdetail
     */
    function update_academicdetail($ID,$params,$type)
    {
        $this->db->where('PersonDetails_ID',$ID);
        $this->db->where('iscollege',$type);
        $response = $this->db->update('AcademicDetails',$params);
        if($response)
        {
            return "academicdetail updated successfully";
        }
        else
        {
            return "Error occuring while updating academicdetail";
        }
    }
    
    /*
     * function to delete academicdetail
     */
    function delete_academicdetail($ID)
    {
        $response = $this->db->delete('AcademicDetails',array('ID'=>$ID));
        if($response)
        {
            return "academicdetail deleted successfully";
        }
        else
        {
            return "Error occuring while deleting academicdetail";
        }
    }
}
