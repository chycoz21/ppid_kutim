<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hak_dan_kewajiban_pemohon_informasi extends CI_controller 
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
			'listhakkewajiban' => $this->m_standart_layanan->gethakkewajiban()->result_array()
		);
		$this->load->view('home/standart_layanan/v_hak_kewajiban', $data);
	}
}
?>