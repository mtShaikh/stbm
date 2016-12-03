<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Assetsinfo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get assetsinfo by ID
     */
    function get_assetsinfo($ID)
    {
        return $this->db->get_where('AssetsInfo',array('ID'=>$ID))->row_array();
    }
    
    /*
     * Get all assetsinfo
     */
    function get_all_assetsinfo()
    {
        return $this->db->get('AssetsInfo')->result_array();
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
    function update_assetsinfo($ID,$params)
    {
        $this->db->where('ID',$ID);
        $response = $this->db->update('AssetsInfo',$params);
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
