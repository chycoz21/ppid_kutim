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
			'listsaatini' => $this->m_kategori->getsaatini()->result_array(),
			'socmed' => $this->m_kategori->getmediasocial()->result_array(),
			'kontak' => $this->db->get('alamat')->result(),
			
		);
		$this->load->view('home/kategori/v_setiap_saat', $data, FALSE);
		
	}

	public function berkala()
	{
		$data = array(
			'title' => 'PPID | Berkala',
			'kontak' => $this->db->get('alamat')->result(),
			'listberkala' => $this->m_kategori->getberkala()->result_array(),
			'socmed' => $this->m_kategori->getmediasocial()->result_array()
		);
		$this->load->view('home/kategori/v_berkala', $data, FALSE);
		
	}
	public function serta_merta()
	{
		$data = array(
			'title' => 'PPID | Serta Merta',
			'kontak' => $this->db->get('alamat')->result(),
			'listsertamerta' => $this->m_kategori->getsertamerta()->result_array(),
			'socmed' => $this->m_kategori->getmediasocial()->result_array()
		);
		$this->load->view('home/kategori/v_serta_merta', $data, FALSE);
		
	}
	public function dikecualikan()
	{
		$data = array(
			'title' => 'PPID | Dikecualikan',
			'kontak' => $this->db->get('alamat')->result(),
			'listdikecualikan' => $this->m_kategori->getdikecualikan()->result_array(),
			'socmed' => $this->m_kategori->getmediasocial()->result_array()
		);
		$this->load->view('home/kategori/v_dikecualikan', $data, FALSE);
	}
	



}
?>	
