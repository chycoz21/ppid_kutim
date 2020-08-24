<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Waktu_layanan extends CI_controller 
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
			'listwaktulayanan' => $this->m_standart_layanan->getwaktulayanan()->result_array()
		);
		$this->load->view('home/standart_layanan/v_waktu_layanan', $data);
	}
}
?>