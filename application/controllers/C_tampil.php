<?php defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class C_tampil extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_tampil');
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$data['detail'] = $this->M_tampil->pengunjung();
		$this->template->display('V_tampil',$data);
	}
	public function pengunjungbaru()
	{
		$this->template->display('pengunjung/V_addpengunjung');
	}
	public function simpan()
	{
		$data = array(
			'idcard' 	 	=> $this->input->post('idcard'),
			'nama' 	     	=> $this->input->post('username'),
			'Jeniskendaraan'=> $this->input->post('jenis'),
			'nomorkendaraan'=> $this->input->post('plat'),
			'jurusan' 		=> $this->input->post('jurusan')
		);
		$result = $this->M_tampil->simpan($data);
		if($result == '1'){
			$this->session->set_flashdata('message','Berhasil menambahkan pengunjung');
			redirect('C_tampil');
		}else{
			$this->session->set_flashdata('message','Gagal menambahkan pengunjung');
			redirect('C_tampil');
		}
	}
	public function editpengunjung()
	{
		$id = $this->uri->segment(3);
		$data['getPengunjung'] = $this->M_tampil->getPengunjung($id);
		$this->template->display('pengunjung/V_editPengunjung', $data);
	}
	public function updatepengunjung()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'idcard' 	 	=> $this->input->post('idcard'),
			'nama' 	     	=> $this->input->post('username'),
			'Jeniskendaraan'=> $this->input->post('jenis'),
			'nomorkendaraan'=> $this->input->post('plat'),
			'jurusan' 		=> $this->input->post('jurusan')
		);
		$result = $this->M_tampil->ubahpengunjung($id, $data);
		if($result == '1'){
			$this->session->set_flashdata('message','Berhasil mengubah pengunjung');
			redirect('C_tampil');
		}else{
			$this->session->set_flashdata('message','Gagal mengedit pengunjung');
			redirect('C_tampil');
		}
	}
	public function tambahsaldo()
	{
		$id = $this->uri->segment(3);
		$data['saldo'] = $this->M_tampil->getPengunjung($id);
		$this->template->display('pengunjung/V_tambahSaldo',$data);
	}
	public function updatesaldo()
	{
		$id = $this->uri->segment(3);
		$awal = $this->input->post('awal');
		$tambahan = $this->input->post('saldo');
		$total = $awal + $tambahan;
		$data = array(
			'Saldo' => $total);
		$result = $this->M_tampil->setelahditambah($id, $data);
		if($result == '1'){
			$this->session->set_flashdata('message','Berhasil menambah saldo');
			redirect('C_tampil');
		}else{
			$this->session->set_flashdata('message','Gagal menambah saldo');
			redirect('C_tampil');
		}
	}
}