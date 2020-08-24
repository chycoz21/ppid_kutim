<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Prosedur_pengajuan_keberatan extends CI_controller 
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
			'listprosedurpengajuankeberatan' => $this->m_standart_layanan->getprosedurpengajuankeberatan()->result_array()
		);
		$this->load->view('home/standart_layanan/v_prosedur_pengajuan_keberatan', $data);
	}
}
?>