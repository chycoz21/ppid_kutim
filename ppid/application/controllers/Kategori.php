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
		$this->load->view('home/kategori/v_setiap_saat', $data);
		
	}

	public function berkala()
	{
		$data = array(
			'title' => 'PPID | Berkala',
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/kategori/berkala', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
	public function serta_merta()
	{
		$data = array(
			'title' => 'PPID | Serta Merta',
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/kategori/serta_merta', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
	public function dikecualikan()
	{
		$data = array(
			'title' => 'PPID | Dikecualikan',
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/kategori/dikecualikan', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
	



}
?>	
