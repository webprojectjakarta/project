<?php defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class C_keluar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_keluar');
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$id = $_GET['idcard'];
		$waktu = date('Y-m-d H:i:s');
		$keterangan = 'Keluar';
		$cek = $this->M_keluar->cekpengunjung($id);
		if($cek == '1')
		{
			$data = array(
				'idcard' => $id,
				'waktu' => $waktu,
				'keterangan' => $keterangan
			);
			$hasil = $this->M_keluar->simpan($data);
			if($hasil != '1')
			{
				die('Invalid query: ');
			}
		}
		else
		{
			echo "%none";
		}
	}
}