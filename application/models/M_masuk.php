<?php defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class M_masuk extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function cekpengunjung($id)
	{
		$this->db->where('idcard', $id);
		$query = $this->db->get('pengunjung');
		return $query->num_rows();
	}
	public function simpan($data)
	{
		$query = $this->db->insert('kunjungan',$data);
		if($query){
			return '1';
		}else{
			return '0';
		}
	}
	public function getsaldo($id)
	{
		$this->db->where('idcard', $id);
		$this->db->select('Saldo');
		return $query = $this->db->get('pengunjung')->result();
	}
	public function updatesaldo($id, $data)
	{
		$this->db->where('idcard', $id);
		$query = $this->db->update('pengunjung',$data);
		if($query){
			return '1';
		}else{
			return '0';
		}
	}
}