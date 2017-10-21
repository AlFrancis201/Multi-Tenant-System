<?php

class Customer_model extends CI_Model {
    private $table = 'customer';
    
    function create($custRecord){
        $this->db->insert($this->table, $custRecord);
    }
    
    function read($condition=null){
        $this->db->select('*');
        $this->db->from($this->table);
        
        if(isset($condition))
            $this->db->where($condition);
        
        $query = $this->db->get();
        
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
        
    }
    
    function update($newRecord, $cust_id){
        $this->db->where('cust_id', $cust_id);
        $this->db->update($this->table,$newRecord);
    }
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }
    
    function getLastRecordID(){
        $this->db->select_max('cust_id');
        $query = $this->db->get($this->table,1);
        $lastID = $query->row_array();
        $lastID = $lastID['cust_id'];
        
        return $lastID;
    }
}
?>