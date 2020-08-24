<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Biaya_layanan extends CI_controller 
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('m_standart_layanan');
	}

	public function index()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
			'listbiayalayanan' => $this->m_standart_layanan->getbiayalayanan()->result_array()
		);
		$this->load->view('home/standart_layanan/v_biaya_layanan', $data);
	}
}
?>