<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_map extends CI_Model
{
	
	public function show_all(){
		$this->db->select('*');
		$this->db->from('malang');
		return $this->db->get()->result();
	}

	public function show_wajak(){
		$this->db->select('*');
		$this->db->from('kprk_wajak');
		return $this->db->get()->result();
	}

	public function show_kasembon(){
		$this->db->select('*');
		$this->db->from('kprk_kasembon');
		return $this->db->get()->result();
	}

	public function show_bantur(){
		$this->db->select('*');
		$this->db->from('kprk_bantur');
		return $this->db->get()->result();
	}

	public function show_ampelgading(){
		$this->db->select('*');
		$this->db->from('kprk_ampelgading');
		return $this->db->get()->result();
	}
}