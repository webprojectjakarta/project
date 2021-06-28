<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * 
 */
class M_dashboard extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function pengunjung()
	{
		$query = $this->db->get('pengunjung');
		return $query->num_rows();
	}
	public function Pmasuk($ms)
	{
		$this->db->where('keterangan', $ms);
		$query = $this->db->get('kunjungan');
		return $query->num_rows();
	}
	public function Pkeluar($kl)
	{
		$this->db->where('keterangan', $kl);
		$query = $this->db->get('kunjungan');
		return $query->num_rows();
	}
}