<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

/** 
 *
 */
class M_login extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get($username)
	{
		$this->db->where('username',$username);
		return $result = $this->db->get('user')->row();
	}
}