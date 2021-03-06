<?php
 
class Familydetail_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get familydetail by ID
     */
    function get_familydetail($ID)
    {
        return $this->db->get_where('FamilyDetails',array('Person_ID'=>$ID))->row_array();
    }
    
    /*
     * Get all familydetails
     */
    function get_all_familydetails()
    {
        $query = $this->db->query("CALL displayFamily()"); 
           return $query->result_array();
    }
    /*
    * Get ID using personID
    */
    function getID($pID){
        $this->db->select('ID');
        $this->db->from('familydetails');
        $this->db->where('person_id', $pID); 
        $query = $this->db->get();
        $row = $query->row(); 
        return $row->ID;
    }
    /*
     * function to add new familydetail
     */
    function add_familydetail($params)
    {
        $this->db->insert('FamilyDetails',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update familydetail
     */
    function update_familydetail($ID,$params)
    {
        $this->db->where('Person_ID',$ID);
        $response = $this->db->update('FamilyDetails',$params);
        if($response)
        {
            return "familydetail updated successfully";
        }
        else
        {
            return "Error occuring while updating familydetail";
        }
    }
    
    /*
     * function to delete familydetail
     */
    function delete_familydetail($ID)
    {
        $response = $this->db->delete('FamilyDetails',array('ID'=>$ID));
        if($response)
        {
            return "familydetail deleted successfully";
        }
        else
        {
            return "Error occuring while deleting familydetail";
        }
    }
}
