<?php defined('BASEPATH') OR exit ('No direct script access allowed');

/** Created By : Jay Windy Panggabean
 *  Date 	   : 17-12-2019
 */
class Auth extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		date_default_timezone_set("Asia/Jakarta");
	} 
	public function index()
	{
		if($this->session->userdata('authenticated'))
			redirect('Page/welcome');
		$this->load->view('V_login');
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$user = $this->M_login->get($username);
		if(empty($user))
		{
			$this->session->set_flashdata('message','Username tidak ditemukan');
			redirect('Auth');
		}
		else
		{
			if($password == $user->password)
			{
				$session = array(
					'authenticated' => true,
					'id' 			=> $user->id,
					'username' 		=> $user->username,
					'Nama' 			=> $user->Nama
				);
				$this->session->set_userdata($session);
				redirect('Page/welcome');
			}
			else
			{
				$this->session->set_flashdata('message', 'Password anda salah');
				redirect('Auth');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}
}