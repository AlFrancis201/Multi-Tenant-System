<?php

class Staff_model extends CI_Model {
    private $table = 'staff';
    
    function create($staffRecord){
        $this->db->insert($this->table, $staffRecord);
    }
    
    function read($condition=null){
        $this->db->select('*');
        $this->db->from($this->table);
        
        if(isset($condition))
            $this->db->where($condition);
        
        $query = $this->db->get();
        
        if($query->num_rows()>0)
            return $query->result_array();
        //else if($query->num_rows()==1)
            //return $query->row_array();
        else
            return false;
        
    }
    
    function update($newRecord, $staff_id){
        $this->db->where('staff_id', $staff_id);
        $this->db->update($this->table,$newRecord);
    }
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }
    
    function getLastRecordID(){
        $this->db->select_max('staff_id');
        $query = $this->db->get($this->table,1);
        $lastID = $query->row_array();
        $lastID = $lastID['staff_id'];
        
        return $lastID;
    }
}
?>