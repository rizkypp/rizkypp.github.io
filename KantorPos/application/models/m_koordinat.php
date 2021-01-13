<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_koordinat extends CI_Model
{
	
	function show_koordinat()
	{
		$hasil=$this->db->query("SELECT * FROM malang");
		return $hasil;
	}
}