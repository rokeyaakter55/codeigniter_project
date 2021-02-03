<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dry_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function fetchAll($table,$data,$join=NULL,$where=NULL,$order=NULL,$group_by=NULL,$limit=NULL)
	{
		if($where){
			$this->db->where($where);
		}
		if($order){
			$this->db->order_by($order[0],$order[1]);
		}
		if($limit){
			$this->db->limit($limit[0],$limit[1]);
		}
		if($group_by){
			$this->db->group_by($group_by);
		}
		if($join){
			foreach ($join as $t => $c) {
				$this->db->join($t,$c);
			}
		}
		$this->db->select($data)
		->from($table);
		return $this->db->get()->result();
	}
	public function find($table,$data,$join=NULL,$where=NULL)
	{
		if($where){
			$this->db->where($where);
		}
		
		if($join){
			foreach ($join as $t => $c) {
				$this->db->join($t,$c);
			}
		}
		$this->db->select($data)
		->from($table);
		return $this->db->get()->row();
	}
	public function delete($table,$where=NULL)
	{
		if($where){
			$this->db->where($where);
		}
		if($this->db->delete($table)){
			return true;
		}else{
			return false;
		}
	}
	public function insert($table,$data)
	{
		if($this->db->insert($table,$data)){
			return true;
		}else{
			return false;
		}
	}
	public function update($table,$data,$where=NULL)
	{
		if($where){
			$this->db->where($where);
		}
		if($this->db->update($table,$data)){
			return true;
		}else{
			return false;
		}
	}
}