<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class MLogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getUser($username,$password){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('u_name',$username);
		$this->db->where('password',md5($password));
		// $this->db->where('status',1);
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		return $query->row();
	}

	public function insert($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	public function last_login($table,$id){
		$value = array('last_login_date'=>date('Y-m-d H:i:s'));
		$this->db->where('u_id',$id);
		$this->db->update($table,$value);
		// echo $this->db->last_query();die;
		return true;
	}

	public function updateAuth($table,$uname,$data)
	{
		$this->db->set('auth', $data); 
		$this->db->where('u_name',$uname);
		$this->db->update($table);
		// echo $this->db->last_query();die;
		return true;
	}
}