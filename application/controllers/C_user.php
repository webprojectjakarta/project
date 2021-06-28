<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class C_user extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_userlogin');
		date_default_timezone_set("Asia/Jakarta");
	}
 
	public function listUser()
	{
		$data['_listuser'] = $this->M_userlogin->userlogin();
		$data['_hslcount'] = $this->M_userlogin->jumlahuser();
		$this->template->display('userlogin/V_listuser', $data);
	}
	public function edituser()
	{
		$id = $this->uri->segment(3);
		$data['_detailuser'] = $this->M_userlogin->getuser($id);
		$this->template->display('userlogin/V_edituser',$data);
	}
	public function update()
	{
		$id 	  = $this->uri->segment(3);
		$Password = md5($this->input->post('password'));
		$data 	  = array(
			'username'   => $this->input->post('userid'),
			'Nama'   	 => $this->input->post('username'),
			'password'   => $Password
		);
		$result = $this->M_userlogin->updateuser($id,$data);
		if($result == '1'){
			$this->session->set_flashdata('message','Data berhasil diperbaharui');
			redirect('C_user/listUser');
		}else{
			$this->session->set_flashdata('message','Data gagal diperbaharui');
			redirect('C_user/listUser');
		}
	}
	public function newuser()
	{
		$this->template->display('userlogin/V_adduser');
	}
	public function simpan()
	{
		$pass = md5($this->input->post('password'));
		$data = array(
			'username' 	 => $this->input->post('userid'),
			'Nama' 	     => $this->input->post('username'),
			'password' 	 => $pass
		);
		$result = $this->M_userlogin->simpan($data);
		if($result == '1'){
			$this->session->set_flashdata('message','Berhasil menambahkan user');
			redirect('C_user/listUser');
		}else{
			$this->session->set_flashdata('message','Gagal menambahkan user');
			redirect('C_user/listUser');
		}
	}
	public function changepassword()
	{
		$user = $this->session->userdata('id');
		$data['_datauser'] = $this->M_userlogin->datauser($user);
		$this->template->display('userlogin/V_changepassword',$data);
	}
	public function updatepassword()
	{
		$id 	  = $this->uri->segment(3);
		$passold  = md5($this->input->post('pwold'));
		$passnew  = md5($this->input->post('pwnew'));
		$passnew2 = md5($this->input->post('pwnew2'));
		if($passnew != $passnew2){
			$this->session->set_flashdata('message','Password baru tidak sama dengan verify password');
			redirect('C_user/changepassword');
		}elseif($passnew == $passnew2){
			$data = array(
				'password' 	 => $passnew
			);
			$result = $this->M_userlogin->updatepass($id,$data);
			if($result == '1')
			{
				$this->session->set_flashdata('message','Berhasil Mengubah Password');
				redirect('Page/welcome');
			}
			else
			{
				$this->session->set_flashdata('message','Gagal Mengubah Password');
				redirect('Page/welcome');
			}
		}
	}
}