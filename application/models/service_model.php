<?php

class Service_model extends CI_Model {
    private $table = 'service';
    
    function create($serviceRecord){
        $this->db->insert($this->table, $serviceRecord);
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
    
    function update($newRecord, $service_id){
        $this->db->where('service_id', $service_id);
        $this->db->update($this->table,$newRecord);
    }
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }
    
    function getLastRecordID(){
        $this->db->select_max('service_id');
        $query = $this->db->get($this->table,1);
        $lastID = $query->row_array();
        $lastID = $lastID['service_id'];
        
        return $lastID;
    }
}
?>