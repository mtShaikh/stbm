<?php

class Assetsinfo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get assetsinfo by ID
     */
    function get_assetsinfo($fID,$tID)
    {
        $response = $this->db->query("Call getAssets('".$fID."','".$tID."')");
        return $response->row_array();  
          }

    /*
     * Get all assetsinfo
     */
    function get_all_assetsinfo()
    {
        $query = $this->db->query("CALL displayAssets()");
           return $query->result_array();
    }
    
    /*
     * function to add new assetsinfo
     */
    function add_assetsinfo($params)
    {
        $this->db->insert('AssetsInfo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update assetsinfo
     */
    function update_assetsinfo($aID,$fID,$amount)
    {
        $response = $this->db->query("Call updateAssets('".$aID."','".$fID."','".$amount."')");
        if($response)
        {
            return "assetsinfo updated successfully";
        }
        else
        {
            return "Error occuring while updating assetsinfo";
        }
    }
    
    /*
     * function to delete assetsinfo
     */
    function delete_assetsinfo($ID)
    {
        $response = $this->db->delete('AssetsInfo',array('ID'=>$ID));
        if($response)
        {
            return "assetsinfo deleted successfully";
        }
        else
        {
            return "Error occuring while deleting assetsinfo";
        }
    }
}
