<?php 
class customer_model extends CI_model{
	private $table= "student";
	public function create($data){
		$this->db->insert($this->table,$data);
		return TRUE;
		}