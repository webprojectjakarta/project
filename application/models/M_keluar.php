<?php defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class M_keluar extends CI_Model
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
}