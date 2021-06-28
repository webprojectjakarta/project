<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * 
 */
class M_monitor extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function list()
	{
		$query = $this->db->query('select a.idcard, a.nama, a.Jeniskendaraan, a.nomorkendaraan, a.jurusan, b.waktu, b.keterangan from pengunjung as a join kunjungan as b ON a.idcard = b.idcard');
		return $query->result();
	}
	public function hitung()
	{
		$query = $this->db->query('select a.idcard, a.nama, a.Jeniskendaraan, a.nomorkendaraan, a.jurusan, b.waktu, b.keterangan from pengunjung as a join kunjungan as b ON a.idcard = b.idcard');
		return $query->num_rows();
	}
}