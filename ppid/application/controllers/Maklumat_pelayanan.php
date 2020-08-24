<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Maklumat_pelayanan extends CI_controller 
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
			'listmaklumatpelayanan' => $this->m_standart_layanan->getmaklumatpelayanan()->result_array()
		);
		$this->load->view('home/standart_layanan/v_maklumat_pelayanan', $data);
	}
}
?>