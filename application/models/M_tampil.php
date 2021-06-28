<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * 
 */
class M_tampil extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function pengunjung()
	{
		return $query = $this->db->get('pengunjung')->result();
	}
	public function simpan($data)
	{
		$query = $this->db->insert('pengunjung',$data);
		if($query){
			return '1';
		}else{
			return '0';
		}
	}
	public function getPengunjung($id)
	{
		$this->db->where('HeaderID', $id);
		return $query = $this->db->get('pengunjung')->result();
	}
	public function ubahpengunjung($id, $data)
	{
		$this->db->where('HeaderID', $id);
		$query = $this->db->update('pengunjung', $data);
		if($query){
			return '1';
		}else{
			return '0';
		}
	}
	public function setelahditambah($id, $data)
	{
		$this->db->where('HeaderID', $id);
		$query = $this->db->update('pengunjung',$data);
		if($query){
			return '1';
		}else{
			return '0';
		}
	}
}