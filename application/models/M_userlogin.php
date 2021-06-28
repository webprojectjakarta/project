<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

/** 
 *
 */
class M_userlogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function userlogin()
	{
		return $result = $this->db->get('user')->result();
	}
	public function jumlahuser()
	{
		$query = $this->db->get('user');
		return $query->num_rows();
	}
	public function getuser($id)
	{
		$this->db->where('id',$id);
		return $result = $this->db->get('user')->result();
	}
	public function updateuser($id,$data)
	{
		$this->db->where('id',$id);
		$query = $this->db->update('user',$data);
		if($query){
			return '1';
		}else{
			return '0';
		}
	}
	public function simpan($data)
	{
		$query = $this->db->insert('user',$data);
		if($query){
			return '1';
		}else{
			return '0';
		}
	}
	public function datauser($user)
	{
		$this->db->where('id',$user);
		return $result = $this->db->get('user')->result();
	}
	public function updatepass($id,$data)
	{
		$this->db->where('id',$id);
		$result = $this->db->update('user',$data);
		if($result){
			return '1';
		}else{
			return '0';
		}
	}
}