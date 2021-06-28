<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Page extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		date_default_timezone_set("Asia/Jakarta");
	}
	public function welcome() 
	{
		$ms = 'Masuk';
		$kl = 'Keluar';
		$masuk = $this->M_dashboard->Pmasuk($ms);
		$keluar = $this->M_dashboard->Pkeluar($kl);
		$data['pengunjung'] =  $this->M_dashboard->pengunjung();
		$data['tamu'] = $masuk - $keluar;
		$this->template->display('V_dashboard',$data);
	}
}