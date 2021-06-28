<?php defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class C_monitor extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_monitor');
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$data['detail'] = $this->M_monitor->list();
		$this->template->display('V_monitor',$data);
	}
	public function unduhpdf()
	{
		$data['jumlah'] = $this->M_monitor->hitung();
		$data['detail'] = $this->M_monitor->list();
		$this->load->view('V_tampilPDF',$data);
	}
}