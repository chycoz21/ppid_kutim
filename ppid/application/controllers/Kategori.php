<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_controller 
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');
	}

	public function setiap_saat()
	{
		$data = array(
			'title' => 'PPID | Informasi Setiap Saat',
			'listsaatini' => $this->m_kategori->getsaatini()->result_array()
		);
		$this->load->view('home/kategori/v_setiap_saat', $data, FALSE);
		
	}

	public function berkala()
	{
		$data = array(
			'title' => 'PPID | Berkala',
			'listberkala' => $this->m_kategori->getberkala()->result_array()
		);
		$this->load->view('home/kategori/v_berkala', $data, FALSE);
		
	}
	public function serta_merta()
	{
		$data = array(
			'title' => 'PPID | Serta Merta',
			'listsertamerta' => $this->m_kategori->getsertamerta()->result_array()
		);
		$this->load->view('home/kategori/v_serta_merta', $data, FALSE);
		
	}
	public function dikecualikan()
	{
		$data = array(
			'title' => 'PPID | Dikecualikan',
			'listdikecualikan' => $this->m_kategori->getdikecualikan()->result_array()
		);
		$this->load->view('home/kategori/v_dikecualikan', $data, FALSE);
	}
	



}
?>	
