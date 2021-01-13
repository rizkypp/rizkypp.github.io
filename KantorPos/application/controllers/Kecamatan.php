<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Kecamatan extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_koordinat');
	}

	public function index(){
		$x['data']=$this->m_koordinat->show_koordinat();
		$this->load->view('coba',$x);
		//$this->load->view('template/utama');
	}
}