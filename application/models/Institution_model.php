<?php
 
class Institution_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get institution by ID
     */
    function get_institution($ID)
    {

        return $this->db->get_where('Institution',array('ID'=>$ID))->row_array();
    }
    
    /*
     * Get all institution
     */
    function get_all_institution()
    {
        return $this->db->get('Institution')->result_array();
    }
    /*
    * Get id of last insert
    */
/*    function getlastid(){
       $query = $this->db->query("call getLastInsert()");
        return $query->row()->ID;
       }*/
    /*
     * function to add new institution
     */
    function add_institution($params)
    {
        $this->db->insert('Institution',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update institution
     */
    function update_institution($ID,$params)
    {
        $this->db->where('ID',$ID);
        $response = $this->db->update('Institution',$params);
        if($response)
        {
            return "institution updated successfully";
        }
        else
        {
            return "Error occuring while updating institution";
        }
    }
    
    /*
     * function to delete institution
     */
    function delete_institution($ID)
    {
        $response = $this->db->delete('Institution',array('ID'=>$ID));
        if($response)
        {
            return "institution deleted successfully";
        }
        else
        {
            return "Error occuring while deleting institution";
        }
    }
}
