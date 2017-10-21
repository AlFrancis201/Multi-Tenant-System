<?php

class Staff_service_model extends CI_Model {
    private $table = 'staff_service';
    
    function create($staffServiceRecord){
        $this->db->insert($this->table, $staffServiceRecord);
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
    
    function update($newRecord, $staff_id, $service_id){
        $this->db->where('service_id', $service_id);
        $this->db->where('staff_id', $staff_id);
        $this->db->update($this->table,$newRecord);
    }
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }
    
    function readStaffIdOnly($condition=null){
        $this->db->select('staff_id');
        $this->db->from($this->table);
        
        if(isset($condition))
            $this->db->where($condition);
        
        $query = $this->db->get();
        
        
        if($query->num_rows()>0){
            $idArray = array();
            foreach($query->result_array() as $q){
                $idArray[]=$q['staff_id'];
            }
            return $idArray;
        }
        else
            return false;
        
    }
    
    function readServiceIdOnly($condition=null){
        $this->db->select('service_id');
        $this->db->from($this->table);
        
        if(isset($condition))
            $this->db->where($condition);
        
        $query = $this->db->get();
        
        
        if($query->num_rows()>0){
            $idArray = array();
            foreach($query->result_array() as $q){
                $idArray[]=$q['service_id'];
            }
            return $idArray;
        }
        else
            return false;
        
    }
}
?>