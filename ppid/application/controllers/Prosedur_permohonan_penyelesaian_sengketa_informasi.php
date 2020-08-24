<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Prosedur_permohonan_penyelesaian_sengketa_informasi extends CI_controller 
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
			'listprosedurpermohonansengketa' => $this->m_standart_layanan->getprosedurpermohonansengketa()->result_array()
		);
		$this->load->view('home/standart_layanan/v_permohonan_sengketa', $data);
	}
}
?>