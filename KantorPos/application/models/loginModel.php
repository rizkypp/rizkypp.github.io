<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class LoginModel extends CI_Model
{
	
	function cek_login()
	{
		$hsl=$this->db->query("SELECT * FROM user");
		return $hsl;
		//$this->db->table('pengguna')
		//->where(array('username'=>$username,'password'=>$password))
		//->get()->getRowArray();
		//$hasil=$this->db->query("SELECT * FROM pengguna");
		//return $hasil;
	}
}