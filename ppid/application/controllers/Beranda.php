<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_controller 
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('m_beranda');
	}

	public function index()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
			'kontak' => $this->db->get('alamat')->result(),
			'socmed' => $this->m_beranda->getmediasocial()->result_array(),
			'listsliderimage' => $this->m_beranda->getsliderimage()->result_array()
		);
		$this->load->view('home/v_beranda', $data);
	}
}
?>	