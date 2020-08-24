<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Prosedur_pelayanan_informasi extends CI_controller 
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
			'listprosedurpelayananinformasi' => $this->m_standart_layanan->getprosedurpelayananinformasi()->result_array()
		);
		$this->load->view('home/standart_layanan/v_prosedur_pelayanan_informasi', $data);
	}
}
?>