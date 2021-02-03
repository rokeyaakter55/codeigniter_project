<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function get_user()
	{
		$data=$this->db->get('user');
		return $data->result();
	}
	public function get_user_data($data)
	{
		$d=$this->db->select('*')
		->from('user')
		->where($data)
		// ->where('password',$data['password'])
		->get();
		$f=$d->row();
		return $f;
	}