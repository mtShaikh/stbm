<?php

class Expensesinfo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get expensesinfo by ID
     */
    function get_expensesinfo($fID,$tID) 
    {
        $response = $this->db->query("Call getExpenses('".$fID."','".$tID."')");
            return $response->row_array();
        
    }
    
    /*
     * Get all expensesinfo
     */
    function get_all_expensesinfo()
    {
       $query = $this->db->query("CALL displayExpenses()"); 
           return $query->result_array();
    }
    
    /*
     * function to add new expensesinfo
     */
    function add_expensesinfo($params)
    {
        $this->db->insert('ExpensesInfo',$params);
        return $this->db->insert_id();
    }
    
    /*
    * get expensetypeiD
    
    function gettypeid($name){
        $this->db->select('ID');
        $this->db->from('expensetype');
        $this->db->where('name', $name); 
        $query = $this->db->get();
        $row =$query->row(); 
        return $row->ID;
    }
    */
    /*
     * function to update expensesinfo
     */
    function update_expensesinfo($eID,$fID,$amount)
    {
        $response = $this->db->query("Call updateExpenses('".$eID."','".$fID."','".$amount."')");
        if($response)
        {
            return "expensesinfo updated successfully";
        }
        else
        {
            return "Error occuring while updating expensesinfo";
        }
    }
    
    /*
     * function to delete expensesinfo
     */
    function delete_expensesinfo($ID)
    {
        $response = $this->db->delete('ExpensesInfo',array('ID'=>$ID));
        if($response)
        {
            return "expensesinfo deleted successfully";
        }
        else
        {
            return "Error occuring while deleting expensesinfo";
        }
    }
}
