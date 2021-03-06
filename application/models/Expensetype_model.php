<?php
 
class Expensetype_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get expensetype by ID
     */
    function get_expensetype($ID)
    {
        return $this->db->get_where('ExpenseType',array('ID'=>$ID))->row_array();
    }
    
    /*
     * Get all expensetype
     */
    function get_all_expensetype()
    {
        return $this->db->get('ExpenseType')->result_array();
    }
    
    /*
     * function to add new expensetype
     */
    function add_expensetype($params)
    {
        $this->db->insert('ExpenseType',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update expensetype
     */
    function update_expensetype($ID,$params)
    {
        $this->db->where('ID',$ID);
        $response = $this->db->update('ExpenseType',$params);
        if($response)
        {
            return "expensetype updated successfully";
        }
        else
        {
            return "Error occuring while updating expensetype";
        }
    }
    
    /*
     * function to delete expensetype
     */
    function delete_expensetype($ID)
    {
        $response = $this->db->delete('ExpenseType',array('ID'=>$ID));
        if($response)
        {
            return "expensetype deleted successfully";
        }
        else
        {
            return "Error occuring while deleting expensetype";
        }
    }
}
