<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Map extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_map');
	}

	public function index(){
		$data = array(
			'peta' =>$this->m_map->show_all()
		);
		$this->load->view('map_v', $data, FALSE);
	}

	public function w_wajak(){
		$data = array(
			'wjk' =>$this->m_map->show_wajak()
		);
		$this->load->view('map_wajak',$data,FALSE);
	}

	public function k_kasembon(){
		$data = array(
			'kmbn' =>$this->m_map->show_kasembon()
		);
		$this->load->view('map_kasembon',$data,FALSE);
	}

	public function b_bantur(){
		$data = array(
			'btr' =>$this->m_map->show_bantur()
		);
		$this->load->view('map_bantur',$data,FALSE);
	}

	public function a_ampelgading(){
		$data = array(
			'ampelgd' =>$this->m_map->show_ampelgading()
		);
		$this->load->view('map_ampelgading',$data,FALSE);
	}

	// map mapbox 
	public function w_wjk(){
		$data = array(
			'wjak' =>$this->m_map->show_wajak()
		);
		$this->load->view('map_wjk',$data, FALSE);
	}
	public function k_ksmbn(){
		$data = array(
			'kmbon'=>$this->m_map->show_kasembon()
		);
		$this->load->view('map_kmbon',$data,FALSE);
	}
	public function b_bntr(){
		$data = array (
			'bntur'=>$this->m_map->show_bantur()
		);
		$this->load->view('map_bntur',$data,FALSE);
	}
	public function a_ampel(){
		$data = array(
			'ampel'=>$this->m_map->show_ampelgading()
		);
		$this->load->view('map_ampel',$data,FALSE);
	}
	public function malang(){
		$data = array(
			'peta'=>$this->m_map->show_all()
		);
		$this->load->view('map_mlg',$data, FALSE);
	}
}